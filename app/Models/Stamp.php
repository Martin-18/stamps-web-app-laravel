<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stamp extends Model
{
    protected $fillable = ['name', 'price', 'description', 'image'];
}
