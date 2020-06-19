<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    protected $table = 'organization';

    public function users(){
        return $this ->belongsTo('App\User');
    }

    public function positions(){
        return $this ->hasMany('App\Position');
    }

    public function staffs(){
        return $this ->belongsTo('App\Staff');
    }

    public function vacancys(){
        return $this ->belongsTo('App\Vacancy');
    }
}
