<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $register = new User;
        $register->name = $request->name;
        $register->email = $request->email;
        $register->password = $request->password;

        $register->save();

        return redirect('/login');
    }

    public function login(Request $request)
    {
    	if (Auth::attempt($request->only('email', 'password'))) {
    		return redirect('/');
    	}

    	return redirect('/login');
    }

    public function logout()
    {
    	Auth::logout();
    	return redirect('/login');
    }
}
