<?php

namespace Database\Seeders;

use App\Models\Image;
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

        Image::factory(50)->create();

        /* $faker = Faker::create();
        for ($i = 0; $i < 50; $i++) {
            DB::table('images')->insert([
                'created_at' => $faker->dateTime($max = 'now', $timezone = null),
                'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
                'url' => $faker->imageUrl(),
                'product_id' => $faker->numberBetween(1, Product::all()->count())
            ]);
        } */
    }
}
