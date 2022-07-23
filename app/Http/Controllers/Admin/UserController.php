<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends Controller
{
    /**
     * @throws \Illuminate\Validation\ValidationException
     */
    public function register(){
        if(request()->isMethod('POST')){
            $this->validate(request(), [
                'name' => 'required|min:5|max:15',
                'surname' => 'required|min:5|max:15',
                'email' => 'required|email|unique:user',
                'username' => 'required|unique:user',
                'password' => 'required|confirmed',

            ]);
            $user = User::create([
                'name' => request('name'),
                'surname' => request('surname'),
                'email' => request('email'),
                'username' => request('username'),
                'password' => Hash::make(request('password')),
                'remember_token' => Str::random(50),
                'is_active' => 0,
                'role' => 'super_admin'
            ]);

            return redirect()->route('login');
        }
        return view('admin.pages.user.add');
    }

    public function login(){
        if(request() ->isMethod('POST')){
            $this->validate(request(), [
               'username' => 'required',
               'password' => 'required'
            ]);

            $credentials = [
                'username' => request()->get('username'),
                'password' => request()->get('password'),
            ];

            if(Auth::guard('admin')->attempt($credentials, request()->has('remember_me'))){
                return redirect()->route('home');
            }else {
                return back()->withInput()->withErrors(['username' => 'login error']);
            }
        }
        return view('admin.pages.login');
    }

    public function logout(){
        \auth()->logout();
        \request()->session()->flush();
        \request()->session()->regenerate();
        return redirect()->route('login');
    }
}
