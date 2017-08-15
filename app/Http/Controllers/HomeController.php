<?php

namespace App\Http\Controllers;

use App\Resume;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     */
    public function index()
    {
        $this->data['activeResume'] = Resume::with('user','blocks')->where('active',1)->first();
        if(!empty($this->data['activeResume'])){
            $this->data['blocks'] = collect($this->data['activeResume']->blocks)->pluck('value','key')->toArray();
        }

//        return $this->data['activeResume'];
        return view('home')->with('data',$this->data);
    }
}
