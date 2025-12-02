<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Svyaz extends Model
{
     protected $table = 'svyaz';
     protected $fillable = ['groupLink', 'adminLink'];
}
