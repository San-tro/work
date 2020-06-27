<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vacancys extends Model
{
    protected $fillable = [
        'direction',
        'organization_id',
    ];
    protected $table = 'vacancy';

    public function organization(){
        return $this ->hasMany('App\Organizations');
    }
}
