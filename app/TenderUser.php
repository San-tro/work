<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TenderUser extends Model
{
    protected $table = 'tenders_users';

    public function users(){
        return $this ->hasMany('App\User');
    }
    public function tender(){
        return $this ->hasMany('App\Tendor');
    }
}
