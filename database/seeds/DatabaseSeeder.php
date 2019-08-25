<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
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
            'dept' => 'PublicMarket'
        ]);
        $stall_details = [
        	['stall_type' => 'vegetables' , 'availability' => true],
        	['stall_type' => 'vegetables' , 'availability' => true],
        	['stall_type' => 'vegetables' , 'availability' => true],
        	['stall_type' => 'vegetables' , 'availability' => true],
        	['stall_type' => 'vegetables' , 'availability' => true],
        	['stall_type' => 'vegetables' , 'availability' => true],
        	['stall_type' => 'vegetables' , 'availability' => true],
        	['stall_type' => 'chicken' , 'availability' => true],        	
        	['stall_type' => 'chicken' , 'availability' => true],
        	['stall_type' => 'chicken' , 'availability' => true],
        	['stall_type' => 'chicken' , 'availability' => true],
        	['stall_type' => 'chicken' , 'availability' => true],
        	['stall_type' => 'chicken' , 'availability' => true],
        	['stall_type' => 'chicken' , 'availability' => true],
        	['stall_type' => 'meat' , 'availability' => true],
        	['stall_type' => 'meat' , 'availability' => true],
        	['stall_type' => 'meat' , 'availability' => true],
        	['stall_type' => 'meat' , 'availability' => true],
        	['stall_type' => 'meat' , 'availability' => true],
        	['stall_type' => 'meat' , 'availability' => true],
        	['stall_type' => 'meat' , 'availability' => true]
        ];

        DB::table('stall_details')->insert($stall_details);
    }
}
