<?php

namespace App\Http\Controllers\profile;

use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index($id)
    {
        $user = User::all()->find($id);
        $group = Group::all()->find($user->group_id);
        return view('profile.user', [
            'user' => $user,
            'group' => $group
        ]);
    }
}
