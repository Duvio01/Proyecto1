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
        $products = Product::all();
        foreach ($products as $product) {
            $product->id;
        }
        $categories = Category::all();
        foreach ($categories as $category) {
            $category->id;
        }

        $faker = Faker::create();
        for ($i=0; $i < 50 ; $i++) { 
            DB::table('products_has_categories')->insert([
                'created_at' => $faker->dateTime($max = 'now', $timezone = null),
                'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
                'category_id' => 'category'. $i,
                'product_id' => 'product' . $i
            ]);
        }


    }
}
