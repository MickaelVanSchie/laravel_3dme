<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        return "https://placehold.co/600x400/EEE/31343C";
    }
}
