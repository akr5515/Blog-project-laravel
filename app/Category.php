<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table= 'categories';

    public function posts(){
        return $this->hasMany('App\Post');
    }
    // protected $guarded = [];

    // // public function posts()
    // // {
    // //     return $this->belongsToMany(Post::class);
    // // }
    // public function posts()
    // {
    //     return   $this->hasMany(Post::class);
    // }
}
