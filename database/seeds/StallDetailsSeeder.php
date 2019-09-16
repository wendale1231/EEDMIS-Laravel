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
            ['stall_type' => 'green' , 'availability' => true, 'stall_code' => 'v1', 'market_address' => 'Tambo Market', 'tenant_id' => 'none'],
            ['stall_type' => 'green' , 'availability' => true, 'stall_code' => 'v2', 'market_address' => 'Tambo Market', 'tenant_id' => 'none'],
            ['stall_type' => 'green' , 'availability' => true, 'stall_code' => 'v3', 'market_address' => 'Tambo Market', 'tenant_id' => 'none'],
            ['stall_type' => 'green' , 'availability' => true, 'stall_code' => 'v4', 'market_address' => 'Pala-o Market', 'tenant_id' => 'none'],
            ['stall_type' => 'green' , 'availability' => true, 'stall_code' => 'v5', 'market_address' => 'Tambo Market', 'tenant_id' => 'none'],
            ['stall_type' => 'green' , 'availability' => true, 'stall_code' => 'v6', 'market_address' => 'Tambo Market', 'tenant_id' => 'none'],
            ['stall_type' => 'red' , 'availability' => true, 'stall_code' => 'm1', 'market_address' => 'Pala-o Market', 'tenant_id' => 'none'],
            ['stall_type' => 'red' , 'availability' => true, 'stall_code' => 'm2', 'market_address' => 'Tambo Market', 'tenant_id' => 'none'],
            ['stall_type' => 'red' , 'availability' => true, 'stall_code' => 'm3', 'market_address' => 'Tambo Market', 'tenant_id' => 'none'],
            ['stall_type' => 'red' , 'availability' => true, 'stall_code' => 'm4', 'market_address' => 'Tambo Market', 'tenant_id' => 'none'],
            ['stall_type' => 'red' , 'availability' => true, 'stall_code' => 'm5', 'market_address' => 'Tambo Market', 'tenant_id' => 'none'],
            ['stall_type' => 'red' , 'availability' => true, 'stall_code' => 'm6', 'market_address' => 'Tambo Market', 'tenant_id' => 'none'],
            ['stall_type' => 'red' , 'availability' => true, 'stall_code' => 'm7', 'market_address' => 'Tambo Market', 'tenant_id' => 'none'],
            ['stall_type' => 'blue' , 'availability' => true, 'stall_code' => 'f1', 'market_address' => 'Tambo Market', 'tenant_id' => 'none'],
            ['stall_type' => 'blue' , 'availability' => true, 'stall_code' => 'f2', 'market_address' => 'Tambo Market', 'tenant_id' => 'none'],
            ['stall_type' => 'blue' , 'availability' => true, 'stall_code' => 'f3', 'market_address' => 'Wet Market', 'tenant_id' => 'none'],
            ['stall_type' => 'blue' , 'availability' => true, 'stall_code' => 'f4', 'market_address' => 'Tambo Market', 'tenant_id' => 'none'],
            ['stall_type' => 'blue' , 'availability' => true, 'stall_code' => 'f5', 'market_address' => 'Tambo Market', 'tenant_id' => 'none'],
            ['stall_type' => 'blue' , 'availability' => true, 'stall_code' => 'f6', 'market_address' => 'Tambo Market', 'tenant_id' => 'none'],
            ['stall_type' => 'blue' , 'availability' => true, 'stall_code' => 'f7', 'market_address' => 'Tambo Market', 'tenant_id' => 'none']
        ];

        DB::table('stall_details')->insert($stall_details);
    }
}
