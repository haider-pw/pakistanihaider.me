<?php

namespace App\Models\Resume;

use App\Resume;
use Illuminate\Database\Eloquent\Model;

class BlockVisibility extends Model
{
    protected $table = 'resumes_blocks_visibility';


    public function resume(){
        $this->belongsTo(Resume::class,'resume_id','id');
    }

}
