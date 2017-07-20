<?php

namespace App\Http\Controllers;

use App\Resume;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['activeResume'] = Resume::with('user')->where('active',1)->first();
//        return $this->data['activeResume'];
        return view('home')->with('data',$this->data);
    }
}
