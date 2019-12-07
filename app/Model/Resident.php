<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Resident extends Model
{
    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'allias',
        'gender',
        'birth_date',
        'birth_place',
        'civil_status',
        'voter_status'
    ];

    protected $casts = [
        'birth_date' => 'datetime'
    ];
}
