<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'body',
        'post_id',
        'is_active',
        'client_id',
        'comment_reply_id',

    ];

    public function comment_replies()
    {
        return $this->hasMany('App\CommentReply');
    }

    public function post()
    {

        return $this->belongsTo('App\Post');
    }

    public function client()
    {
        return $this->belongsTo('\App\Client');
    }

    public static function boot()
    {
        parent::boot();
        self::deleting(function ($comment) { // before delete() method call this
            $comment->comment_replies()->each(function ($comment_reply) {
                $comment_reply->delete(); // <-- direct deletion
            });

            // do the rest of the cleanup...
        });
    }
}
