<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StallDetail extends Model
{

	const UPDATED_AT = null;
    protected $fillable = [
        'stall_type', 'availability', 'stall_code',
    ];

    protected $table = 'stall_details';

    protected $primaryKey = 'stall_id';
}
