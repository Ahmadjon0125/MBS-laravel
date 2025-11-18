<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\ServicePhotos;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Service extends Model
{
    protected $table  = 'service';
        protected $fillable= ['title', 'text', 'text2', 'slug', 'bgImage'];

          protected function slug(): Attribute
    {
        return Attribute::set(function ($value, $attributes) {
            // Agar slug kelgan bo‘lsa — shu qolsin
            // Agar kelmagan bo‘lsa title asosida avtomatik yaratiladi
            return $value ?: Str::slug($attributes['title'] ?? '');
        });
    }
        
    public function service_photos(): HasMany
    {
        return $this->hasMany(ServicePhotos::class);
    }
}
