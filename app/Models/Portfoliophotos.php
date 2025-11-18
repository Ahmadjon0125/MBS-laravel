<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Portfoliophotos extends Model
{
     protected $fillable = ['photo'];

     public function portfolio(): BelongsTo
    {
        return $this->belongsTo(Portfolio::class);
    }

    
}
