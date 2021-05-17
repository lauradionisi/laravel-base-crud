<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dress extends Model
{
    protected $fillable = ['name', 'color', 'size', 'fabric', 'price', 'season'];
}
