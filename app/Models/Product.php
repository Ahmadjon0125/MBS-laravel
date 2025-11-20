<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Product extends Model
{
    protected $table ='product';
    protected $fillable = ['title', 'text', 'list', 'link', 'slug'];

      protected function slug(): Attribute
    {
        return Attribute::set(function ($value, $attributes) {
            // Agar slug kelgan bo‘lsa — shu qolsin
            // Agar kelmagan bo‘lsa title asosida avtomatik yaratiladi
            return $value ?: Str::slug($attributes['title'] ?? '');
        });
    }

    public function getRouteKeyName()
   {
       return 'slug';
   }

    public function product_photos(): HasMany
    {
        return $this->hasMany(ProductPhotos::class);
    }

}
