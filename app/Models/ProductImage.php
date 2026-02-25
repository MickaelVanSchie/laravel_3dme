<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class ProductImage extends Model
{

    use HasFactory;

    protected $table = 'product_images';

    protected $fillable = [
        'product_id',
        'url',
        'position'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function httpUrl(): string
    {
        Log::info($this);
        return $this->url;
    }
}
