<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class About extends Model
{
  protected $table = 'about';
  protected $fillable = ['img', 'text', 'link', 'shortText', 'poster'];

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
