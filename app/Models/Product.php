<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Product extends Model
{
    protected $table ='product';
    protected $fillable = ['title_uz','title_ru','title_en', 'text_uz','text_ru','text_en', 'list_items_uz','list_items_ru','list_items_en', 'bgImage', 'photos', 'slug'];

    protected $casts = [
         'photos' => 'array', 
         'list_items_uz' => 'array', 
         'list_items_ru' => 'array', 
         'list_items_en' => 'array', 
        ];

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
