<?php

namespace App\Models\Resume;

use App\Models\System\PortfolioType;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $table = 'portfolio';


    public function type(){
        return $this->belongsTo(PortfolioType::class,'portfolio_type_id','id');
    }

    public function projects(){
        return $this->hasMany(Project::class);
    }
}
