<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    protected $data;

    function __construct()
    {
        $this->middleware(function ($request, $next) {
            if (!\Auth::check()) {
                return redirect('/login');
            }
            $this->data['loggedInUser'] = Auth::user()?Auth::user():null; // you can access user here
            return $next($request);
        });
    }
}
