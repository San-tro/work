<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PsyTest extends Model
{
    protected $table = 'psy_test';

    public function docpack(){
        return $this ->belongsTo('App\DocPack');
    }
}
