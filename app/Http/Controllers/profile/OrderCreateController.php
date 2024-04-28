<?php

namespace App\Http\Controllers\profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class OrderCreateController extends Controller
{
    public function create(Request $request): View
    {
        return view('profile.order-create',[
            'user' => $request->user(),
        ]);
    }
}
