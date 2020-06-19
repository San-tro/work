<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $table = 'form';

    public function docpack(){
        return $this ->belongsTo('App\DocPack');
    }
}
