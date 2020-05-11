<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'body',
        'user_id',
        'file',
        'photo_name',
        'download',
    ];

    public function photo()
    {

        return $this->belongsTo('App\Photo');
    }
    public function download()
    {
        return $this->belongsTo('App\Download');
    }
}
