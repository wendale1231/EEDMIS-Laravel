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
            ['stall_type' => 'green' , 'availability' => true, 'stall_code' => 'v1'],
            ['stall_type' => 'green' , 'availability' => true, 'stall_code' => 'v2'],
            ['stall_type' => 'green' , 'availability' => true, 'stall_code' => 'v3'],
            ['stall_type' => 'green' , 'availability' => true, 'stall_code' => 'v4'],
            ['stall_type' => 'green' , 'availability' => true, 'stall_code' => 'v5'],
            ['stall_type' => 'green' , 'availability' => true, 'stall_code' => 'v6'],
            ['stall_type' => 'red' , 'availability' => true, 'stall_code' => 'm1'],
            ['stall_type' => 'red' , 'availability' => true, 'stall_code' => 'm2'],
            ['stall_type' => 'red' , 'availability' => true, 'stall_code' => 'm3'],
            ['stall_type' => 'red' , 'availability' => true, 'stall_code' => 'm4'],
            ['stall_type' => 'red' , 'availability' => true, 'stall_code' => 'm5'],
            ['stall_type' => 'red' , 'availability' => true, 'stall_code' => 'm6'],
            ['stall_type' => 'red' , 'availability' => true, 'stall_code' => 'm7'],
            ['stall_type' => 'blue' , 'availability' => true, 'stall_code' => 'f1'],
            ['stall_type' => 'blue' , 'availability' => true, 'stall_code' => 'f2'],
            ['stall_type' => 'blue' , 'availability' => true, 'stall_code' => 'f3'],
            ['stall_type' => 'blue' , 'availability' => true, 'stall_code' => 'f4'],
            ['stall_type' => 'blue' , 'availability' => true, 'stall_code' => 'f5'],
            ['stall_type' => 'blue' , 'availability' => true, 'stall_code' => 'f6'],
            ['stall_type' => 'blue' , 'availability' => true, 'stall_code' => 'f7']
        ];

        DB::table('stall_details')->insert($stall_details);
    }
}
