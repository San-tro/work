<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocPack extends Model
{
    protected $table = 'doc_pack';

    public function form(){
        return $this ->hasMany('App\Forms');
    }
    public function resume(){
        return $this ->hasMany('App\Resumes');
    }
    public function psytest(){
        return $this ->hasMany('App\PsyTest');
    }
    public function users(){
        return $this ->belongsTo('App\User');
    }

}
