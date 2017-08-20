<?php

namespace App\Models\System;

use App\Models\Resume\Project;
use Illuminate\Database\Eloquent\Model;
use Sofa\Eloquence\Eloquence;

class Tool extends Model
{
    use Eloquence;
    protected $table = 'tools';
    protected $searchableColumns = ['name', 'label'];
    protected $fillable = ['name', 'label'];

    public function projects(){
        return $this->belongsToMany(Project::class);
    }
}
