<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    //
    protected $table = 'categories';
    protected $fileable = ['id', 'kategori'];
}
