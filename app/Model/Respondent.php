<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Respondent extends Model
{
    protected $fillable = [
        'settlement_id',
        'name'
    ];

    public function Settlement(): BelongsTo
    {
        return $this->belongsTo(Settlement::class);
    }
}
