<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PolicyHolderDetail extends Model
{
    protected $fillable = [
        'policy_id',
        'date_of_birth',
        'gender',
        'nationality',
        'contact_address',
        'email',
        'phone',
        'occupation',
        'health_status'
    ];

    protected $casts = [
        'date_of_birth' => 'date',
    ];

    public function policy()
    {
        return $this->belongsTo(Policy::class);
    }
}