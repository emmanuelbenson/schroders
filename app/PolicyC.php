<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PolicyC extends Model
{
    protected $fillable = [
        'policy_id',
        'agent',
        'phone',
        'contact_address',
        'email'
    ];

    public function policy()
    {
        return $this->belongsTo(Policy::class);
    }
}