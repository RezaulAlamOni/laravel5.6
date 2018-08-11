<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = [
        'file'
    ];
    //accessor for photo show
    protected $uploads = '/images/';

    public function getFileAttribute($photo){
        return $this->uploads . $photo;
    }
    //end accessor

}
