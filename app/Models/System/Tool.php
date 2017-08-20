<?php

namespace App\Models\System;

use App\Models\Resume\Project;
use Illuminate\Database\Eloquent\Model;

class Tool extends Model
{
    public function projects(){
        return $this->belongsToMany(Project::class);
    }
}
