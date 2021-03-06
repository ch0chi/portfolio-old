<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserPost extends Model
{
    protected $fillable = ['user_id','post_id'];
    public function post(){
        return $this->belongsTo(Blog::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
