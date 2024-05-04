<?php

namespace App\Http\Controllers\profile;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Teg;
use Illuminate\Http\Request;
use Illuminate\View\View;

class OrderCreateController extends Controller
{
    public function index(): View
    {
        $teg = Teg::all();
        return view('profile.order-create',[
            'teg' => $teg
        ]);
    }
    public function create(Request $request)
    {
        $Tags_id = $request['teg'];
        unset($request['teg']);
        $user_id = auth()->user()->id;
        $order = Order::firstOrCreate([
            'name_order' => $request->name_order,
            'description_order' => $request->description_order,
            'FK_Customer' => $user_id
        ]);
        $order ->tagsist()->attach($Tags_id);
    }
}
