<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Complainant extends Model
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
