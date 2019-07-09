<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class PolicyA extends Model
{
    protected $fillable = [
        'policy_id',
        'holder',
        'number',
        'type',
        'designation',
        'commencement_date',
        'expiry_date',
        'amount_coverage',
        'coverage_type',
        'premium',
        'frequency'
    ];

    protected $casts = [
        'commencement_date' => 'date',
        'expiry_date' => 'date',
    ];

    public function policy()
    {
        return $this->belongsTo(Policy::class);
    }
}
