<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public $fillable = ['layanan', 'title', 'slug', 'content', 'image'];

    public function setTitleAttribute($value)
    {
    	$this->attributes['title'] = $value;
    	$this->attributes['slug']  = str_slug($value);
    }

    public function getImageTumbAttribute()
    {
        if ($this->image !== NULL) 
        {
            return url('/images/service/tumb_' . $this->image);
        } else {
            return url('/images/service/noimage.jpg');
        }
    }

    public function getImagePathAttribute()
    {
       if ($this->image !== NULL) 
        {
            return url('/images/service/' . $this->image);
        } else {
            return url('/images/service/noimg.jpg');
        }
    }
}
