<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class ProductPhotos extends Model
{
    protected $table = 'product_photos';
     protected $fillable= ['photo'];


    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
