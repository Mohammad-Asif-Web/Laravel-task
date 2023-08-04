<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthenticationController extends Controller
{
    public function home(){
        return view('welcome');
    }

    public function login(){
        if(Auth::check()){
            return redirect(route('home'));
        }
        return view('auth.login');
    }
    public function register(){
        if(Auth::check()){
            return redirect(route('home'));
        }
        return view('auth.register');
    }

    public function loginStore(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        $data = $request->only('email', 'password');

        if(Auth::attempt($data)){
            return redirect()->intended(route('home'));
        }
        return redirect(route('login'))->with('error', 'Login details not valid');

    }

    public function registerStore(Request $request){
        $request->validate([
            'name' => 'required',
            'role' => 'required|in:1,2',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);

        $data['name'] = $request->name;
        $data['role'] = $request->role;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $user = User::create($data);
        if(!$user){
            return redirect(route('register'))->with('error', 'Registration Failed, try again.');
        }
        return redirect(route('login'))->with('success', 'Registration Success, Login to access');
    }

    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect(route('login'));
    }
}
