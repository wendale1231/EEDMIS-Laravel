<?php

use Illuminate\Database\Seeder;

class StallDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
