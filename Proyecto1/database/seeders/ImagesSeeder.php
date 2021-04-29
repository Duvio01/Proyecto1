<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ImagesSeeder extends Seeder
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
        $faker = Faker::create();
        for ($i = 0; $i < 50; $i++) {
            DB::table('images')->insert([
                'created_at' => $faker->dateTime($max = 'now', $timezone = null),
                'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
                'url' => $faker->imageUrl() . $i,
                'products_id' => $product
            ]);
        }
    }
}
