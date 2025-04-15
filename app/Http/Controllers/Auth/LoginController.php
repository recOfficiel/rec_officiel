<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LoginController extends Controller
{
    //
    public function login_form():View
    {
        return view('auth.login');
    }
}
