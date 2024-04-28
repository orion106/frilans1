<?php

namespace App\Http\Controllers\profile;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MessageController extends Controller
{
    public function index($id){
        $user = User::all()->find($id);
        return view('profile.message', [
        'user' => $user,
        ]);
    }
}
