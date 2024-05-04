<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\View\Components\teg;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $orders = Order::join('teg_list', 'order.id', '=', 'teg_list.FK_order')
            ->join('teg', 'teg_list.FK_teg', '=', 'teg.id')
            ->select('order.*')
            ->selectRaw('GROUP_CONCAT(teg.teg_name) as teg_names')
            ->groupBy('order.id')
            ->get();
        $orders->transform(function ($order) {
            $order->teg_names = collect(explode(',', $order->teg_names));
            return $order;
        });

        return view('welcome', [
            'orders' => $orders
        ]);
    }
}
