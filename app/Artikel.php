<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    //
    protected $table = 'artikels';
    protected $fileable = ['id', 'foto', 'judul', 'deksripsi', 'pembuat', 'kategori'];
}
