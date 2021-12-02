<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ServisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::statement('SET FOREIGN_KEY_CHECKS=0');
        \DB::table('services')->truncate();

        \DB::table('services')->insert([
            [
                'servis' =>'Dine-In',
            ],
            [
                'servis' =>'Take Away',
            ],
        ]);
    }
}
