<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Models\System\Skill as systemSkill;

class Skill extends Model
{
    protected $fillable = [
        'skill_id', 'percentage'
    ];

    public function source(){
        return $this->belongsTo(systemSkill::class,'skill_id','id');
    }
}
