<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Tests\Integration\Database\EloquentHasManyThroughTest\Category;

class MainCategory extends Model
{
    use HasFactory;


    public function categoriesWithActiveProducts()
    {
        return $this->hasMany(Category::class, 'main_category_id', 'id');
    }
}
