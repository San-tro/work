<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    protected $table = 'vacancy';

    public function organizations(){
        return $this ->hasMany('App\Organization');
    }
}
