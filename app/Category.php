<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $fillable = ['title', 'slug'];

    public function posts()
    {
    	return $this->hasMany(Post::class);
    }
}
