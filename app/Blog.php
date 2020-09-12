<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'post_image','post_title','post_body','author_id','blog_key','updated_at'
    ];


    public function user(){
        return $this->belongsTo(User::class);
    }

    public function userPosts(){
        return $this->hasOne(UserPost::class);
    }

    public function scopeFetchPost($query, $key){
        return $query->join('users','blogs.author_id','=','users.id')
            ->where('blog_key',$key);
    }



    public function scopeFetchAll($query, $email){
        return $query->join('users','blogs.author_id','=','users.id')
            ->where('users.email',$email);
    }








}
