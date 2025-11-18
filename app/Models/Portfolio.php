<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
     protected $fillable = ['title', 'text', 'text2', 'slug'];

      public function portfolio_photos(): HasMany
    {
        return $this->hasMany(PortfolioPhotos::class);
    }
}
