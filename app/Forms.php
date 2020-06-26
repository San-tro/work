<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forms extends Model
{
    protected $table = 'form';

    public function docpack(){
        return $this ->belongsTo('App\DocPack');
    }
}
