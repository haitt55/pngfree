<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use DB;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'token',
        'google_id',
        'facebook_id',
        'twitter_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'token',
    ];

    const TYPE_1 = 30;
    const TYPE_1_1 = 60;
    const TYPE_1_6 = 300;
    const TYPE_1_12 = 550;


    const TYPE_2 = 50;
    const TYPE_2_1 = 80;
    const TYPE_2_6 = 420;
    const TYPE_2_12 = 850;


    public static function getAllUsers($name = null, $email = null){
        $path = route('admin.listUser');
        $colection = self::orderBy('created_at');
        if($name) {
            $colection = $colection->where('name', 'like', '%'.$name.'%');
            $path = $path.'?name='.$name;
        }

        if($email) {
            $colection = $colection->where('email', 'like', '%'.$email.'%');
            if($name){
                $path = $path.'&email='.$email;
            }else {
                $path = $path.'?email='.$email;
            }
        }
        return $colection->paginate(10)->setPath($path);
    }

    public static function deleteUser($userID){
        try {
            return self::where('id', $userID)->delete();
        } catch (Exception $e) {
            var_dump($e); die;
        }
        
    }

    public static function getAllStatus(){
        return [
            self::TYPE_1 => [
                self::TYPE_1_1 => '1 tháng (60k)',
                self::TYPE_1_6 => '6 tháng (300k )',
                self::TYPE_1_12 => '1 năm(550k)',
            ],
            self::TYPE_2 => [
                self::TYPE_2_1 => '1 tháng (80k)',
                self::TYPE_2_6 => '6 tháng (420k)',
                self::TYPE_2_12 => '6 tháng (850k)',
            ],
        ];
    }

    public static function getMonthStatus(){
        return [
            self::TYPE_1_1 => 1,
            self::TYPE_1_6 => 6,
            self::TYPE_1_12 => 12,
            self::TYPE_2_1 => 1,
            self::TYPE_2_6 => 6,
            self::TYPE_2_12 => 12,
        ];
    }

    public static function changeStatus($userID, $payment_id){
        return self::where('id', $userID)
            ->update([
                'payment_id' => $payment_id,
                'payment_at' =>  DB::raw('NOW()'),
                'payment_expire' => DB::raw("DATE_ADD(NOW(), INTERVAL ".self::getMonthStatus()[$payment_id]." MONTH)"),
            ]);
    }
}
