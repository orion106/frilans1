<?php

namespace App\Http\Controllers\profile;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function index(){
        $user = User::all();
        return view('profile.messages', compact('user'));
    }
}
