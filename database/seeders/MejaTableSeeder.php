<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MejaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::statement('SET FOREIGN_KEY_CHECKS=0');
        \DB::table('tables')->truncate();

        \DB::table('tables')->insert([
            [
                'meja' =>'Meja 1',
            ],
            [
                'meja' =>'Meja 2',
            ],
            [
                'meja' =>'Meja 3',
            ],
            [
                'meja' =>'Meja 4',
            ],
            [
                'meja' =>'Meja 5',
            ],
            [
                'meja' =>'Meja 6',
            ],
            [
                'meja' =>'Meja 7',
            ],
            [
                'meja' =>'Meja 8',
            ],
            [
                'meja' =>'Meja 9',
            ],
            [
                'meja' =>'Meja 10',
            ],
            [
                'meja' =>'Meja 11',
            ],
            [
                'meja' =>'Meja 12',
            ],
            [
                'meja' =>'Meja 13',
            ],                                 
        ]);
    }
}
