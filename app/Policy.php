<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Policy extends Model
{
    protected $fillable = [
        'user_id',
        'date_of_death',
        'cause_of_death',
        'benefit',
        'beneficiary',
        'trustee',
        'date_of_claim',
        'date_of_payment'
    ];

    protected $casts = [
        'date_of_death' => 'date',
        'date_of_claim' => 'date',
        'date_of_payment' => 'date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function sectionA()
    {
        return $this->hasOne(PolicyA::class);
    }

    public function sectionB()
    {
        return $this->hasOne(PolicyB::class);
    }

    public function sectionC()
    {
        return $this->hasOne(PolicyC::class);
    }

    public function holderDetails()
    {
        return $this->hasOne(PolicyHolderDetail::class);
    }
}
