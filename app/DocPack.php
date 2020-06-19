<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocPack extends Model
{
    protected $table = 'doc_pack';

    public function anketa(){
        return $this ->hasMany('App\Form');
    }
    public function resumes(){
        return $this ->hasMany('App\Resume');
    }
    public function psytests(){
        return $this ->hasMany('App\PsyTest');
    }
    public function users(){
        return $this ->belongsTo('App\User');
    }

}
