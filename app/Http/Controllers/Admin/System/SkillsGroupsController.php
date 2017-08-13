<?php

namespace App\Http\Controllers\Admin\System;

use App\Http\Controllers\AdminController;
use App\Models\System\SkillsGroup;
use Illuminate\Http\Request;

class SkillsGroupsController extends AdminController
{

    public function show(){
        $this->data['sysSkillsGroups'] = SkillsGroup::all();
        return view('admin.system.skills_groups.list')->with('data',$this->data);
    }
}
