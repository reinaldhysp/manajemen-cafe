<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DrinkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::statement('SET FOREIGN_KEY_CHECKS=0');
        \DB::table('drinks')->truncate();

        \DB::table('drinks')->insert([
            [
                'drink_name' =>'Milk Shake',
                'price' => 20000,
            ],
            [
                'drink_name' =>'Oreo Milk Shake',
                'price' => 25000,
            ],
            [
                'drink_name' =>'Avocado Float',
                'price' => 25000,
            ],
            [
                'drink_name' =>'Manggo Float',
                'price' => 25000,
            ],
            [
                'drink_name' =>'Orange Float',
                'price' => 23000,
            ],
              
        ]);
    }
}
