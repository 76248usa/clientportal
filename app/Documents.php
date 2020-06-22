<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documents extends Model
{
    protected $fillable = ['title', 'description', 'file', 'type'];

    public function type()
    {
        return $this->belongsTo('App\Type');
    }

    public function client()
    {
        return $this->belongsTo('\App\Client');
    }
}
