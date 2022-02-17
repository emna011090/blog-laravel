<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
    public function auther()
    {
        return $this->belongsTo('App\Auther');
    }
    public function comment()
    {
        return $this->hasMany('App\Comment');
    }
    //
}
