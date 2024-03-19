<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index(){
        return view("authentication.login");
    }

    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();  
            if(Auth::user()->role == 'admin'){
                return redirect()->intended('dashboard');
            }else{
                return redirect()->intended('home');
            }
        }
        return back()->withErrors([
            'err' => 'Email dan password salah'
        ])->onlyInput('err');
    }

    public function logout(Request $request): RedirectResponse
{
    Auth::logout();
 
    $request->session()->invalidate();
 
    $request->session()->regenerateToken();
 
    return redirect('/');
}

public function register(){
    return view('authentication.register');
}

public function storeRegister(RegisterRequest $request){
    User::create([
        'email'=> $request->email,
        'password'=> Hash::make($request->password),
        'name' => $request->name,
        'role'=> $request->role
    ]);
    return redirect('/');
}
}