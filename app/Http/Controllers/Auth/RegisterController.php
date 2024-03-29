<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }
    public function registers (){
        return view('auth.register');
    }
    public function createRegister (Request $request){
        $this->validate($request, [
            'name'=> 'required|max:255',
            'email'=> 'required|max:255',
            'username'=>'required|max:255',
            'password'=>'required|confirmed'
        ]);

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'username'=>$request->username,
            'password'=>Hash::make($request->password)
        ]);
        auth()->attempt($request->only('email', 'password'));
        return redirect('/')->with('success', 'Account Created Successfully');
    }
}
