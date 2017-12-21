<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Collective\Html\Eloquent\FormAccessible;
use Carbon\Carbon;

class Letter extends Model
{
    

    public $fillable = ['nosurat', 'jenissurat', 'tanggalsurat', 'tanggal', 'prihal', 'pengirim', 'uraian'];

    public function getTanggalAttribute()
    {
        return \Carbon\Carbon::parse($this->attributes['tanggal'])->format('d-M-Y');
    }

    public function getTanggalsuratAttribute()
    {
        return Carbon::parse($this->attributes['tanggalsurat'])->format('d-M-Y');
    }

    public function getCetakTanggalAttribute($value)
    {
        return Carbon::parse($this->attributes['tanggal'])->format('M/Y');
    }
}
