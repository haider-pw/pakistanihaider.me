<?php

namespace App\Models\Resume;

use App\Models\System\Tool;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'portfolio_id', 'title', 'website','company','tools','cover_image','images','description'
    ];

    public function portfolio(){
        return $this->belongsTo(Portfolio::class,'portfolio_id','id');
    }

    public function tools(){
        return $this->belongsToMany(Tool::class);
    }
}
