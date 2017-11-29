<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    public $fillable = ['title', 'image', 'content'];

    public function getImagePathAttribute()
    {
        if ($this->image !== NULL) 
        {
            return url('/images/profile/' . $this->image);
        } else {
            return url('/images/profile/noimage.png');
        }
    }

    public function getCreatedAtAttribute()
    {
        return \Carbon\Carbon::parse($this->attributes['created_at'])->format('d-M-Y');
    }

    public function getContentAdminAttribute()
    {
        return substr($this->content,0,30);
    }

    public function getContentHtmlAttribute()
    {
       return $this->content ? Markdown::convertToHtml(e($this->content)) : NULL;
    }

    public function getTitleAdminAttribute()
    {
        if ($this->title == 1) 
        {
            return 'Visi';
        }
        elseif ($this->title == 2) 
        {
            return 'Misi';
        }
        else
        {
            return 'Sejarah';
        }
    }
}
