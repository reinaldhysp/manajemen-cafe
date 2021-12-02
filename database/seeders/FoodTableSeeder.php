<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FoodTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::statement('SET FOREIGN_KEY_CHECKS=0');
        \DB::table('food')->truncate();

        \DB::table('food')->insert([
            [
                'food_name' =>'Ayam Rempah',
                'price' => 25000,
            ],
            [
                'food_name' =>'Ayam Rica-Rica',
                'price' => 25000,
            ],
            [
                'food_name' =>'Ayam Geprek',
                'price' => 23000,
            ],
            [
                'food_name' =>'Ayam Crispy',
                'price' => 23000,
            ],
            [
                'food_name' =>'Ayam Penyet',
                'price' => 23000,
            ],    
        ]);
    }
}
