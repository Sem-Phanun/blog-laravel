<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }

    public function logins (){
        return view('auth.login');
    }

    public function createLogin (Request $request){
        $this->validate($request, [
            'email'=> 'required|email',
            'password'=>'required'
        ]);

        if(!auth()->attempt($request->only('email', 'password'))){
            return back()->with('success', 'Invalid login');
        }
        return redirect('/');
    }
}
