<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';
    protected $fillable = ['img', 'title_uz','title_ru','title_en', 'text_uz','text_ru','text_en', 'slug', 'newsDate'];
}
