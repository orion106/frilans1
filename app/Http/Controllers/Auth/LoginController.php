<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;


class LoginController extends Controller
{
    public function create(): View
    {
        return view('auth.login');
    }
    public function store(Request $request)
    {
        $request -> validate([
            'email' => ['required','email','string'],
            'password' => ['required','string']
        ]);
        if(Auth::attempt($request->only('email', 'password'))){
            return redirect()->route('profile');
        }else{
            return redirect() ->route('login');
        }

    }
}
