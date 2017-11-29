<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use GrahamCampbell\Markdown\Facades\Markdown;


class Banner extends Model
{
    public $fillable = ['title', 'content', 'image', 'status'];

    public function getImagePathAttribute()
    {
        if ($this->image !== NULL) 
        {
            return url('/images/banner/' . $this->image);
        } else {
            return url('/images/banner/noimage.png');
        }
    }

    public function getTitleHtmlAttribute()
    {
       return $this->title ? Markdown::convertToHtml(e($this->title)) : NULL;
    }

    public function getContentHtmlAttribute()
    {
       return $this->content ? Markdown::convertToHtml(e($this->content)) : NULL;
    }

    public function getCreatedAtAttribute()
    {
        return \Carbon\Carbon::parse($this->attributes['created_at'])->format('d-M-Y');
    }

    public function getContentAdminAttribute()
    {
        return substr($this->content,0,30);
    }

    public function getTitleAdminAttribute()
    {
        return substr($this->title,0,30);
    }

    public function getStatusAdminAttribute()
    {
        if ($this->status == 1) 
        {
            return 'Banner Satu';
        }
        elseif ($this->status == 2) 
        {
            return 'Banner Dua';
        }
    }

}
