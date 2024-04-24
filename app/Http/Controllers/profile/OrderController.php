<?php

namespace App\Http\Controllers\profile;

use App\Http\Controllers\Controller;
use App\Models\Group;
use Illuminate\Http\Request;
use Illuminate\View\View;

class OrderController extends Controller
{
    public function create(Request $request): View
    {
        return view('profile.list_order',[
        'user' => $request->user(),
        ]);
    }
}
