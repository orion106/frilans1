<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use function Webmozart\Assert\Tests\StaticAnalysis\email;

class RegisterController extends Controller
{
    public function create(): View
    {
        return view('auth.registration');
    }
    public function store(Request $request)
    {
        $request -> validate([
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'role' => 'required'
        ]);

        $user = User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' =>$request->role,
        ]);
        return redirect()->route('login');
    }
}
