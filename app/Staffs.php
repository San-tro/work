<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staffs extends Model
{
    protected $table = 'staff';

    public function organization(){
        return $this ->hasMany('App\Organizations');
    }
}
