<?php

namespace App\Models\System;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SkillsGroup extends Model
{
    use SoftDeletes;

    protected $table = 'skills_groups';
    protected $dates = ['deleted_at'];
}
