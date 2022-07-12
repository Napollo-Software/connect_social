<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    } 
    public function comments(){
        return $this->hasMany(Comment::class,'post_id')->orderBy('created_at','ASC');
    }
    public function likes(){
        return $this->hasMany(Like::class,'post_id');
    }
    public function assets(){
        return $this->belongsTo(PostAssets::class,'id','post_id')->withDefault();
    }
}
