<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
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
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

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

    public static function deleteUser(){
        
    }
}
