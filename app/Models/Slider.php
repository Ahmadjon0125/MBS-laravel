<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
     protected $table = 'slider';
     protected $fillable = ['bgImg', 'title_uz','title_ru','title_en', 'text_uz','text_ru','text_en', 'link'];
}
