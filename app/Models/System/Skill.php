<?php

namespace App\Models\System;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Skill extends Model
{
    use SoftDeletes;
    protected $table = 'sys_skills';
    protected $dates = ['deleted_at'];

    public function group(){
        return $this->belongsTo(SkillsGroup::class,'skill_group_id','id');
    }
}
