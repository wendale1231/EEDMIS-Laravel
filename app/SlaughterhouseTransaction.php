<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SlaughterhouseTransaction extends Model
{
    protected $fillable = [
        'client_name',
        'client_address',
        'species',
        'unit',
        'client_number'
    ];

    protected $table = 'slaughterhouse_transaction';

    protected $primaryKey = 'applicant_id';

    protected function valdidator(array $data){
        return Validator::make($data, [
            'client_name' => ['required', 'string', 'max:255'],
        ]);
    }
}
