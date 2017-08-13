<?php

namespace App\Http\Controllers\Admin\System;

use App\Http\Controllers\AdminController;
use Illuminate\Http\Request;

class ConfigurationController extends AdminController
{
    function __construct()
    {
        parent::__construct();
    }

    public function show(){
        return view('admin.system.configurations.main')->with('data',$this->data);
    }
}
