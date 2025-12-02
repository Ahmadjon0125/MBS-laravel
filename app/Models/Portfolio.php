<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Portfolio extends Model

{
    protected $table = 'portfolio';
     protected $fillable = ['title_uz','title_ru','title_en', 'text_uz','text_ru','text_en' , 'text2_uz','text2_ru','text2_en', 'photos', 'bgImage', 'slug'];

  
     protected $casts = [ 'photos' => 'array' ];

    protected function slug(): Attribute
    {
        return Attribute::set(function ($value, $attributes) {
            return $value ?: Str::slug($attributes['title'] ?? '');
        });
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
