<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StallApplicant extends Model
{
    protected $fillable = [
        'name', 'birthdate',
    ];

    protected $table = 'stall_applicant';

    protected $primaryKey = 'applicant_id';
}
