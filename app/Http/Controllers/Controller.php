<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $data;
    function __construct() {
        $this->middleware(function ($request, $next) {
            if (!\Auth::check()) {
                return redirect('/login');
            }
            $this->data['loggedInUser'] = Auth::user()?Auth::user():null; // you can access user here
            return $next($request);
        });
    }
}
