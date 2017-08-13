<?php

namespace App\Http\Controllers\Admin\System;

use App\Http\Controllers\AdminController;
use App\Models\System\Skill as SystemSkill;
use Illuminate\Http\Request;

class SkillsController extends AdminController
{
    function __construct()
    {
        parent::__construct();
    }

    public function show(){
        $this->data['sysSkills'] = SystemSkill::all();
        return view('admin.system.skills.list')->with('data',$this->data);
    }
}
