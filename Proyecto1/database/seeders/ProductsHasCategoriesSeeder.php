<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductHasCategory;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ProductsHasCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductHasCategory::factory(50)->create();

        /* $faker = Faker::create();
        for ($i = 0; $i < 50; $i++) {
            DB::table('products_has_categories')->insert([
                'created_at' => $faker->dateTime($max = 'now', $timezone = null),
                'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
                'category_id' => $faker->numberBetween(1, Category::all()->count()),
                'product_id' => $faker->numberBetween(1, Product::all()->count())
            ]);
        } */
    }
}
