<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resumes extends Model
{
    protected $table = 'resume';

    public function docpack(){
        return $this ->belongsTo('App\DocPack');
    }
}
