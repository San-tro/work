<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $table = 'position';

    public function organizations(){
        return $this ->belongsTo('App\Organization');
    }
}
