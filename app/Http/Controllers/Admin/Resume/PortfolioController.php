<?php

namespace App\Http\Controllers\Admin\Resume;

use App\Http\Controllers\AdminController;
use App\Models\Resume\Portfolio;
use App\Models\Resume\Project;
use Illuminate\Http\Request;

class PortfolioController extends AdminController
{
    public function show(){
        $this->data['portfolio'] = Project::with('portfolio','tools')->get();
        return view('admin.portfolio.list')->with('data',$this->data);
    }
}
