<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;

class RegisterController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function register_form(): View
    {
        return view('auth.register');
    }

    public function register(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'between:5,255'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        $validated['password'] = Hash::make($validated['password']);
        $user = User::create($validated);

        $role = Role::where('nom', 'user')->first();
        $user->roles()->attach($role);

        Auth::login($user);

        $user->load('roles');

        session()->flash('success', 'Inscription réussie');

        return redirect()->intended($user->redirectTo());

    }
}
