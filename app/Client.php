<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'name',
        'title',
        'description',
    ];

    /*public function document()
    {

        return $this->belongsTo('App\Documents');
    }*/

    public function documents()
    {
        return $this->hasMany('App\Documents');
    }

    public function posts()
    {
        return $this->hasMany('App\Post');
    }
}
