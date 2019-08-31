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
            ['stall_type' => 'green' , 'availability' => true],
            ['stall_type' => 'green' , 'availability' => true],
            ['stall_type' => 'green' , 'availability' => true],
            ['stall_type' => 'green' , 'availability' => true],
            ['stall_type' => 'green' , 'availability' => true],
            ['stall_type' => 'green' , 'availability' => true],
            ['stall_type' => 'red' , 'availability' => true],
            ['stall_type' => 'red' , 'availability' => true],
            ['stall_type' => 'red' , 'availability' => true],
            ['stall_type' => 'red' , 'availability' => true],
            ['stall_type' => 'red' , 'availability' => true],
            ['stall_type' => 'red' , 'availability' => true],
            ['stall_type' => 'red' , 'availability' => true],
            ['stall_type' => 'blue' , 'availability' => true],
            ['stall_type' => 'blue' , 'availability' => true],
            ['stall_type' => 'blue' , 'availability' => true],
            ['stall_type' => 'blue' , 'availability' => true],
            ['stall_type' => 'blue' , 'availability' => true],
            ['stall_type' => 'blue' , 'availability' => true],
            ['stall_type' => 'blue' , 'availability' => true]
        ];

        DB::table('stall_details')->insert($stall_details);
    }
}
