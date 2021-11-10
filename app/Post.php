<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $primaryKey = 'post_id';

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // public function categories()
    // {
    //     return $this->belongsToMany(Category::class);
    // }
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function tags(){
        return $this->belongsToMany('App\Tag', 'post_tag', 'post_id', 'tag_id');
    }
}
