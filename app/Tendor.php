<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tendor extends Model
{
    protected $fillable = [
        'view',
        'date',
        'personincharge',
        'vacancy_id'
    ];

    protected $table = 'tender';

    public function tenderuser(){
        return $this ->belongsTo('App\TenderUser');
    }
}
