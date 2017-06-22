<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function basic(){
        return view('admin.resume.basics');
    }
}
