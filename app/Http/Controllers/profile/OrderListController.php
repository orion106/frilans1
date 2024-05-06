<?php

namespace App\Http\Controllers\profile;

use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\View\View;

class OrderListController extends Controller
{
    public function index(Request $request): View
    {
        $user_id = auth()->user()->id;
        $orders = Order::where('FK_Customer',$user_id)->get();
        return view('profile.order-list',[
            'user' => $request->user(),
            'orders' => $orders
        ]);
    }
}
