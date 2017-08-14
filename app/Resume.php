<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    protected $fillable = [
        'user_id', 'available', 'position','max_skills_groups_boxes'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
