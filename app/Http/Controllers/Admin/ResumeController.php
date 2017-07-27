<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminController;
use App\User;
use App\Resume;
use Illuminate\Http\Request;

class ResumeController extends AdminController
{
    public function index()
    {
        return view('home');
    }

    public function basic(){
        $this->data['basics'] =  User::with('resume')->where('hasResume',1)->first();
        return view('admin.resume.basics')->with('data',$this->data);
    }

    public function basicsUpdate(Request $request){
        if(!$request){
            return false;
        }
        $userID = $request->get('userID');
        $user = User::find($userID);

        //Need To Validate the Records.
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required'
        ]);

        if(empty($user)){
            return false;
        }


        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->phone = $request['phone'];
        $user->address = $request['address'];

        $resume = Resume::find($user->id);
        $resume->position = $request['position'];
        $resume->available = $request['freelance'];

        $user->save();
        $resume->save();

        return $request['name'];
    }
}
