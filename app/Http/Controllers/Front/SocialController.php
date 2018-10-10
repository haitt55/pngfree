<?php

namespace App\Http\Controllers\Front;

use App\Models\User;
use Illuminate\Http\Request;
use Socialite;
use Illuminate\Support\Facades\DB;

class SocialController extends AbstractFrontController
{
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider(Request $req, $providerName)
    {
        return Socialite::driver($providerName)->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback(Request $req, $providerName)
    {
        $user = Socialite::driver($providerName)->user();
        if (!$userData = $this->user->whereEmail($user->email)->first()) {
            $userData = $this->user;
            $data     = [
                'name'  => $user->name,
                'email' => $user->email,
                'token' => $user->token,
            ];
            switch ($providerName) {
                case 'google':
                    $data['google_id'] = $user->id;
                case 'facebook':
                    $data['facebook_id'] = $user->id;
                    break;
                case 'twitter':
                    $data['twitter_id'] = $user->id;
                default:
                    break;
            }
            $userData->fill($data)->save();
            DB::table('download_times')->insert([
                'user_id' => $userData->id,
                'download_number' => 3
            ]);
        }
        auth()->login($userData, $remember = true);
        return redirect()->route('home');
    }
}
