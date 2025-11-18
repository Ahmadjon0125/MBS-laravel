<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;
use App\Models\Service;

class ServicePhotos extends Model
{
   protected $table = 'service_photos';
    protected $fillable= ['photo'];


    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }
}
