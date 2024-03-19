<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index(){
        return view("login.index");
    }

    public function authenticate(Request $request){

        $credentials = $request-> validate([
            "username"=> "required",
            "password"=> "required"
        ]);

        if (Auth::attempt($credentials)){
            $request ->session()->regenerate();
            return redirect()->intended('/home');
        }

        return back()->with('loginError','Login failed!');
           
    }

    public function tentang(){
        return view("login.tentang");
    }

    public function daftar(){
        return view("login.daftar");
    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users',
            'password' => 'required|string|max:255',
            'nim' => 'required|string|max:255'
            ]);

        $validatedData =[
                'name' => $request->name,
                'username' => $request->username,
                'password' => $request->password,
                'nim' => $request->nim
            ];


        if ($request['password'] != $request['password2']){
            return back()->with('gagal','Password tidak sama!');
        }

        $validatedData['password'] = Hash::make($validatedData['password']);

        $user = User::create($validatedData);

        return redirect('/')->with('success', 'Registration successful! Please login');
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerate();

        return redirect("/");
    }

}
