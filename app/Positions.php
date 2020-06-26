<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Positions extends Model
{
    protected $table = 'position';

    public function organization(){
        return $this ->belongsTo('App\Organizations');
    }
}
