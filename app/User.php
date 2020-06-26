<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','surname','patronymic','role_id', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function docpack(){
        return $this ->hasMany('App\DocPack');
    }

    public function organization(){
        return $this ->hasMany('App\Organizations');
    }

    public function role(){
        return $this ->hasMany('App\Roles');
    }

    public function tenderuser(){
        return $this ->belongsTo('App\TenderUser');
    }
}
