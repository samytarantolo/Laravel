<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    /**
 * The attributes that are mass assignable.
 *
 * @var array
 */
protected $fillable = [
    'content',
];

/**
 * Get the user that owns the Comment.
 */
public function user()
{
    return $this->belongsTo('App\User');
}
/**
 * Get the user that owns the post.
 */
public function post()
{
    return $this->hasMany('App\Comment');
}
protected $table = "comments";