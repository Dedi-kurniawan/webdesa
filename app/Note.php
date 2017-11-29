<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
	public $fillable = ['title', 'slug', 'content', 'image', 'start_at', 'finish_at', 'lokasi'];

    public function setTitleAttribute($value)
    {
    	$this->attributes['title'] = $value;
    	$this->attributes['slug']  = str_slug($value);
    }

    public function getImagePathAttribute()
    {
        if ($this->image !== NULL) 
        {
            return url('/images/notes/' . $this->image);
        } else {
            return url('/images/notes/noimage.png');
        }
    }

    public function getStartAdminAttribute()
    {
        return \Carbon\Carbon::parse($this->attributes['start_at'])->format('d-M-Y');
    }

    public function getFinishAdminAttribute()
    {
        return \Carbon\Carbon::parse($this->attributes['finish_at'])->format('d-M-Y');
    }

    public function getBulanAttribute()
    {
        return \Carbon\Carbon::parse($this->attributes['start_at'])->format('M');
    }

     public function getTanggalAttribute()
    {
        return \Carbon\Carbon::parse($this->attributes['start_at'])->format('d');
    }

    public function getContentHtmlAttribute()
    {
       return $this->content ? Markdown::convertToHtml(e($this->content)) : NULL;
    }

    public function getTitleAdminAttribute()
    {
        return substr($this->title,0,30);
    }
}
