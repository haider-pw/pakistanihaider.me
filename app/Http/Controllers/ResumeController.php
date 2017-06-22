<?php

namespace App\Http\Controllers;

use App\User;
use App\Resume;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function basic(){
        $this->data['basics'] =  User::with('resume')->where('resume',1)->first();
        return view('admin.resume.basics')->with('data',$this->data);
    }
}
