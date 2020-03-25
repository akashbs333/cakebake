<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected  $uploads = '/images/user_photo/';
    protected $fillable = [
        'photo_id', 'file',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getFileAttribute($photo){
        return $this->uploads . $photo;
    }

}
