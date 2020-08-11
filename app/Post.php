<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = "pertanyaan";
    
    // protected $fillable= ["judul","isi","tanggal_dibuat","tanggal_diperbaharui"];
    protected $guarded=[];
}
