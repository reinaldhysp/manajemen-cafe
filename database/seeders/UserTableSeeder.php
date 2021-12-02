<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::statement('SET FOREIGN_KEY_CHECKS=0');
        \DB::table('users')->truncate();

        \DB::table('users')->insert([
            [
                'name' => 'Casir',
                'email' => 'casir123@gmail.com',
                'role' => 'casir',
                'password' => bcrypt('password1')
            ],
            [
                'name' => 'Waiter',
                'email' => 'waiter123@gmail.com',
                'role' => 'waiter',
                'password' => bcrypt('password2')
            ],
            [
                'name' => 'Kitchen',
                'email' => 'kitchen123@gmail.com',
                'role' => 'kitchen',
                'password' => bcrypt('password3')
            ],
        ]);
    }
}
