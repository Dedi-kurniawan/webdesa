<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Letter extends Model
{
    public $fillable = ['nosurat', 'tanggalsurat', 'tanggal', 'perihal', 'pengirim', 'uraian'];
}
