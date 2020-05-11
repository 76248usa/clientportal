<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'name',
        'title',
        'description',
        'document_id',
    ];

    public function document()
    {

        return $this->belongsTo('App\Documents');
    }
}
