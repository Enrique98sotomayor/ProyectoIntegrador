<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function store(Request $request){
        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required'
        ]);

        if(!auth()->attempt($request->only('email','password'))){
            return to_route('dashboard');
        }

        return redirect()->route('dashboard');
    }
    public function indexdocente(){
        return view('auth.login2');
    }
    public function indexsecretaria(){
        return view('auth.login3');
    }
}
