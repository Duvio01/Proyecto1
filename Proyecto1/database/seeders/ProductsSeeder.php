<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i=0; $i < 50 ; $i++) { 
            DB::table('products')->insert([
                'name' => 'products' . $i,
                'description' => $faker->text($maxNBChars = 100),
                'price' => $faker->numberBetween(10000, 1000000),
                'available' => $faker->boolean($changeOfGettingTrue = 50),
                'created_at' => $faker->dateTime($max = 'now', $timezone = null),
                'updated_at' => $faker->dateTime($max = 'now', $timezone = null)
            ]);
        }
    }
}
