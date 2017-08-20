<?php

namespace App\Http\Controllers\Admin\Resume;

use App\Http\Controllers\AdminController;
use App\Models\Resume\Portfolio;
use App\Models\System\PortfolioType;
use Illuminate\Http\Request;

class ProjectController extends AdminController
{
    public function create(){
        $this->data['types'] = PortfolioType::all();
        dd($this->data['types']);
        return view('admin.portfolio.add',$this->data);
    }

    public function store(Request $request){
        dd($request->all());

        //First of All validate the Request
        $this->validate($request,[
            'title' => 'required',
            'type' => 'type'
        ]);
    }
}
