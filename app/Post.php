<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $fillable = ['user_id', 'title', 'slug', 'content', 'image', 'category_id'];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function category()
    {
    	return $this->belongsTo(Category::class);
    }

    public function setTitleAttribute($value)
    {
    	$this->attributes['title'] = $value;
    	$this->attributes['slug']  = str_slug($value);
    }

    public function getImageTumbAttribute()
    {
        if ($this->image !== NULL) 
        {
            return url('/images/blog/tumb_' . $this->image);
        } else {
            return url('/images/blog/noimage.png');
        }
    }

     public function getImagePathAttribute()
    {
       if ($this->image !== NULL) 
        {
            return url('/images/blog/' . $this->image);
        } else {
            return url('/images/blog/noimage.png');
        }
    }

    public function getTitleAdminAttribute()
    {
        return substr($this->title,0,30);
    }

    public function getContentHtmlAttribute()
    {
       return $this->content ? Markdown::convertToHtml(e($this->content)) : NULL;
    }

    public function getContentAdminAttribute()
    {
        return substr($this->content,0,50);
    }

    public function getCreatedAtAttribute()
    {
        return \Carbon\Carbon::parse($this->attributes['created_at'])->format('d-M-Y');
    }
}
