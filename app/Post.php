<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'body', 'client_id', 'status', 'comment_id'
    ];

    public function client()
    {
        return $this->belongsTo('\App\Client');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    public static function boot()
    {
        parent::boot();
        self::deleting(function ($post) { // before delete() method call this
            $post->comments()->each(function ($comment) {
                $comment->delete(); // <-- direct deletion
            });

            // do the rest of the cleanup...
        });
    }
}
