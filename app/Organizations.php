<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organizations extends Model
{
    protected $table = 'organization';

    public function users(){
        return $this ->belongsTo('App\User');
    }

    public function positions(){
        return $this ->hasMany('App\Positions');
    }
    public function staff(){
        return $this ->belongsTo('App\Staffs');
    }

    public function vacancy(){
        return $this ->belongsTo('App\Vacancys');
    }
}
