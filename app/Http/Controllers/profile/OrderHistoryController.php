<?php

namespace App\Http\Controllers\profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class OrderHistoryController extends Controller
{
    public function create(Request $request): View
    {
        return view('profile.create_order',[
            'user' => $request->user(),
        ]);
    }
}
