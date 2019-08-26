<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StallDetail extends Model
{
    protected $fillable = [
        'stall_type', 'availability',
    ];

    protected $table = 'stall_details';

    protected $primaryKey = 'stall_id';
}
