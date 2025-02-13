<?php

namespace Database\Seeders;

use App\Models\MainCategory;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Review;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        MainCategory::factory(3)->create()->each(function ($mainCategory) {
            ProductCategory::factory(2)->create(['main_category_id' => $mainCategory->id])->each(function ($productCategory) {
                Product::factory(5)->create(['category_id' => $productCategory->id]);
            });
        });
        User::factory(10)->create();

        Review::factory(5)->create();


        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }

}
