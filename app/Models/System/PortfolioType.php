<?php

namespace App\Models\System;

use App\Models\Resume\Portfolio;
use Illuminate\Database\Eloquent\Model;

class PortfolioType extends Model
{
    protected $table = 'portfolio_type';
    protected $dates = ['deleted_at'];

    public function portfolios(){
        return $this->hasMany(Portfolio::class);
    }
}
