<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    protected $fillable = [
        'user_id', 'available',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
