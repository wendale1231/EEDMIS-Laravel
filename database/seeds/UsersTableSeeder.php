<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Wendale Dy",
            'email' => 'admin@gmail.com',
            'username' => 'wendale1231',
            'password' => bcrypt('password'),
            'dept' => 'Admin'
        ]);
    }
}
