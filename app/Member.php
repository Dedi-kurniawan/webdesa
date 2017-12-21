<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
   public $fillable = ['nama', 'jabatan', 'image','facebook', 'twiter', 'instagram'];

    public function getImagePathAttribute()
    {
        if ($this->image !== NULL) 
        {
            return url('/images/perangkatdesa/' . $this->image);
        } else {
            return url('/images/perangkatdesa/noimg.png');
        }
    }
}
