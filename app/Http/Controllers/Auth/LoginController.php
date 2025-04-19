<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
        public function __construct()
        {
            $this->middleware('guest')->except('logout');
            $this->middleware('auth')->only('logout');

        }

    public function login_form():View
    {
        return view('auth.login');
    }

    public function login(LoginRequest $request): RedirectResponse
    {
        //Authentification des utilisateurs
        $request->authenticate();
        $request->session()->regenerate();

        // recuparation du role de l'utilisateur
        $user = Auth::user()->load('roles');
        session()->flash('success', 'Connexion réussie');
        return redirect()->intended($user->redirectTo());
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->flush();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
