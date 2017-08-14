<?php

namespace App;

use App\Models\Resume\BlockVisibility;
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

    public function blocks(){
        return $this->hasMany(BlockVisibility::class);
//        return BlockVisibility::where('resume_id',$this->id)->first();
    }

    public function showBlock($key){
        $selectedBlock = BlockVisibility::where('resume_id',$this->id)->where('key',$key)->first();
        if(!empty($selectedBlock)){
            $selectedBlock->value = 1;
            return $selectedBlock->save();
        }
        return false;
    }

    public function hideBlock($key){
        $selectedBlock = BlockVisibility::where('resume_id',$this->id)->where('key',$key)->first();
        if(!empty($selectedBlock)){
            $selectedBlock->value = 0;
            return $selectedBlock->save();
        }
        return false;
    }

    public function getBlockByKey($key,$resumeID){
        return BlockVisibility::where('resume_id',$this->id)->where('key',$key)->first();
    }
}
