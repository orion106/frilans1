<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index($id){
        $orders = Order::where('order.id',$id)->join('teg_list', 'order.id', '=', 'teg_list.FK_order')
            ->join('teg', 'teg_list.FK_teg', '=', 'teg.id')
            ->select('order.*')
            ->selectRaw('GROUP_CONCAT(teg.teg_name) as teg_names')
            ->groupBy('order.id')
            ->get();
        $orders->transform(function ($order) {
            $order->teg_names = collect(explode(',', $order->teg_names));
            return $order;
        });
        return view('order', [
            'order' => $orders
        ]);
    }
}
