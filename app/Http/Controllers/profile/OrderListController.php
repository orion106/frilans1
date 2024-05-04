<?php

namespace App\Http\Controllers\profile;

use App\Http\Controllers\Controller;
use App\Models\Group;
use Illuminate\Http\Request;
use Illuminate\View\View;

class OrderListController extends Controller
{
    public function index(Request $request): View
    {
        return view('profile.order-list',[
        'user' => $request->user(),
        ]);
    }
}
