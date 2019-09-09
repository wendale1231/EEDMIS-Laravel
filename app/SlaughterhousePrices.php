<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SlaughterhousePrices extends Model
{
    protected $fillable = [
        'species',
        'price'
    ];

    protected $table = 'slaughterhouse_prices';

    protected $primaryKey = 'price_id';

    // protected function valdidator(array $data){
    //     return Validator::make($data, [
    //         'client_name' => ['required', 'string', 'max:255'],
    //     ]);
    // }
}
