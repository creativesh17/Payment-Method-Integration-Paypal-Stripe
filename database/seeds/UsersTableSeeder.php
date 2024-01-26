<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        User::insert([
            [
                'name' => 'Meela Khan',
                'email' => 'meela@voila.com',
                'password' => bcrypt('12345678'),
            ],
            [
                'name' => 'Musa Khan',
                'email' => 'musa@voila.com',
                'password' => bcrypt('12345678'),
            ]
        ]);
    }
}
