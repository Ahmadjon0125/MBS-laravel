<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class About extends Model
{
  protected $table = 'about';
  protected $fillable = ['img', 'title_uz', 'title_ru', 'title_en', 'text_uz', 'text_ru', 'text_en', 'link', 'shortText_uz', 'shortText_ru', 'shortText_en', 'poster'];

  protected static function booted()
    {
        static::deleting(function ($about) {
            // img faylini o'chirish
            if ($about->img) {
                Storage::disk('public')->delete($about->img);
            }

            // poster faylini o'chirish
            if ($about->poster) {
                Storage::disk('public')->delete($about->poster);
            }
        });
    }
}
