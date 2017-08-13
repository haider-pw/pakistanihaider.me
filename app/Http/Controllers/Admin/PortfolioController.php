<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminController;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends AdminController
{
    public function show(){
        $this->data['portfolio'] = Portfolio::all();
        return view('admin.portfolio.list')->with('data',$this->data);
    }
}