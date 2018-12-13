<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class EntrepriseLoginController extends Controller
{

    public function __construct()
    {

        $this->middleware('guest:entreprise',['except' =>['logout']]);
    }


    public function showLoginForm(){
        return view('auth.entreprise-login');
    }

    public function login(Request $request){

        $this->validate($request,[
            'email' => 'required',
            'password' => 'required|min:6'

        ]);

        if (Auth::guard('entreprise')->attempt(['email'=>$request->email, 'password'=> $request->password], $request->remember))
        {

            return redirect()->intended(route('entreprise'));

        }

        return redirect()->back()->withInput($request->only('email','remember'));

    }


    public function logout(Request $request)
    {
        Auth::guard('entreprise')->logout();



        return redirect('/');
    }
}
