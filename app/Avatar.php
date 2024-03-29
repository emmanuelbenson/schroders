<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avatar extends Model
{
    protected $fillable = [
        'profile_id',
        'avatar'
    ];

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }
}
