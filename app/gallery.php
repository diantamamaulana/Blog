<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gallery extends Model
{
    //
    protected $table = 'galleries';
    protected $fillable = ['foto','judul','deskripsi'];
}
