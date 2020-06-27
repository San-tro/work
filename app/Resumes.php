<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resumes extends Model
{
    protected $fillable = [
        'name',
        'surname' ,
        'patronymic' ,
        'birthday' ,
        'lastplacework' ,
        'vieweducation' ,
        'course',
        'speciality' ,
        'institution' ,
        'endyear',
        'telephone' ,
    ];

    protected $table = 'resume';

    public function docpack(){
        return $this ->belongsTo('App\DocPack');
    }
}
