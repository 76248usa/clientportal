<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'name',
        'email',
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

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    public function comment_replies()
    {
        return $this->hasMany('App\CommentReply');
    }

    public static function boot()
    {
        parent::boot();
        self::deleting(function ($client) { // before delete() method call this
            $client->documents()->each(function ($document) {
                $document->delete(); // <-- direct deletion
            });
            $client->posts()->each(function ($post) {
                $post->delete(); // <-- raise another deleting event on Post to delete comments
            });
            // do the rest of the cleanup...
            $client->comments()->each(function ($comment) {
                $comment->delete(); // <-- raise another deleting event on Post to delete comments
            });
            $client->comment_replies()->each(function ($comment_reply) {
                $comment_reply->delete(); // <-- raise another deleting event on Post to delete comments
            });
        });
    }
}
