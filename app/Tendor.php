<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tendor extends Model
{
    protected $table = 'tender';

    public function tenderuser(){
        return $this ->belongsTo('App\TenderUser');
    }
}
