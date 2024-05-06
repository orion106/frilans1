<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Chats;
use App\Models\Message;
use App\Models\Order;
use Illuminate\Http\Request;

class ResponseController extends Controller
{
    public function index($id){
        $user_id = auth()->user()->id;
        $order = Order::where('id',$id)->update([
            'FK_Executor' => $user_id
        ]);
        $orders = Order::where('id', $id)->get()->first();
        $chat = Chats::all()->where('sender_id', $user_id)->where('receiver_id',$orders->FK_Customer)->first();
        $chats = Chats::all()->where('sender_id', $orders->FK_Customer)->where('receiver_id',$user_id)->first();
        if($chat ===  null and $chats ===  null){
            Chats::create([
                'sender_id' => $user_id,
                'receiver_id' => $id,
            ]);
        }
        $chat = Chats::all()->where('sender_id', $user_id)->where('receiver_id',$orders->FK_Customer)->first();
        if($chat ===  null){
            $chat =  Chats::all()->where('sender_id', $orders->FK_Customer)->where('receiver_id',$user_id)->first();
        }
        Message::create([
            'chat_id' =>$chat->id,
            'sender_id' => $user_id,
            'receiver_id' => $orders->FK_Customer,
            'message' => 'На ваш заказ откликнулись!'
        ]);
        return redirect()->route('message', ['id' => $orders->FK_Customer]);
    }
}
