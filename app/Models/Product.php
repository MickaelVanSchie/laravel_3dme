<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function variants(): array {

    }

    public function stock_txt(): string {

    }

    public function category() {
        return $this->hasOne(ProductCategory::class);
    }
}
