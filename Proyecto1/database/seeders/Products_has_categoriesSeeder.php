<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class Products_has_categoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 0; $i < 50; $i++) {
            $products = Product::where('id', $i)->get();
            foreach ($products as $product) {
                $categories = Category::where('id', $i)->get();
                foreach ($categories as $category) {
                    DB::table('products_has_categories')->insert([
                        'created_at' => $faker->dateTime($max = 'now', $timezone = null),
                        'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
                        'category_id' => $product->id,
                        'product_id' => $category->id
                    ]);
                }
            }
        }
    }
}
