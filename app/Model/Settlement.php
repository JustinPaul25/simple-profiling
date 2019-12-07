<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Settlement extends Model
{
    protected $fillable = [
        'case_no',
        'agreement',
        'schedule'
    ];

    protected $casts = [
        'schedule' => 'date'
    ];

    public function Complainants(): HasMany
    {
        return $this->hasMany(Complainant::class);
    }

    public function Respondents(): HasMany
    {
        return $this->hasMany(Respondent::class);
    }
}
