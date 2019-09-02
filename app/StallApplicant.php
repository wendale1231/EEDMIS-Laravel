<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StallApplicant extends Model
{
    protected $fillable = [
        'name',
        'birthdate',
        'gender',
        'phone_number',
        'address',
        'market_address',
        'stall_name',
        'stall_category',
        'stall_id',
        'stall_description'
    ];

    protected $table = 'stall_applicant';

    protected $primaryKey = 'applicant_id';

    protected function valdidator(array $data){
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
        ]);
    }
}
