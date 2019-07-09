<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PolicyB extends Model
{
    protected $fillable = [
        'policy_id',
        'nominee_ref',
        'nominee',
        'relationship',
        'contact_address',
        'email'
    ];

    public function policy()
    {
        return $this->belongsTo(Policy::class);
    }
}