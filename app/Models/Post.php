<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function tags(){
        return $this->belongsToMany('App\Models\Tag','post_tag','post_id','tag_id');
    }

    public function category(){
        return $this->belongsTo('App\Models\Category');
    }

    public function comments(){
        return $this->hasMany('App\Models\Comment');
    }
}
