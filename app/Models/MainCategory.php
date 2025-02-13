<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class MainCategory extends Model
{
    use HasFactory;

    public function categoriesWithActiveProducts(): HasMany
    {
        return $this->hasMany(ProductCategory::class)
            ->whereHas('products', function ($query) {
                $query->where('active', true); // Filter only active products
            });
    }

    public function ProductCategories()
    {
        return $this->hasMany(ProductCategory::class, 'main_category_id');
    }

    public function activeProducts(): HasManyThrough
    {
        return $this->hasManyThrough(Product::class, ProductCategory::class, 'main_category_id', 'id');
    }
}
