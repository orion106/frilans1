<?php

namespace App\Http\Controllers\profile;

use App\Http\Controllers\Controller;
use App\Models\Chats;
use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;


class MessageController extends Controller
{
    public function index($id){
        $user_id = auth()->user()->id;
        $receiver_messag = Message::where('sender_id', $id)->where('receiver_id', $user_id)->get();
        $receiver_messa = Message::where('sender_id', $user_id)->where('receiver_id', $id)->get();
        $receiver_message = $receiver_messag->concat($receiver_messa)->sortBy('created_at');
        $user = User::all()->find($id);
        return view('profile.message', [

            'user' => $user,
            'message' => $receiver_message,
        ]);
    }
    public function create(Request $request, $id)
    {
        $user_id = auth()->user()->id;
        $chat = Chats::all()->where('sender_id', $user_id)->where('receiver_id',$id)->first();
        $chats = Chats::all()->where('sender_id', $id)->where('receiver_id',$user_id)->first();
        if($chat ===  null and $chats ===  null){
            Chats::create([
                'sender_id' => $user_id,
                'receiver_id' => $id,
            ]);
        }
        $chat = Chats::all()->where('sender_id', $user_id)->where('receiver_id',$id)->first();
        if($chat ===  null){
            $chat =  Chats::all()->where('sender_id', $id)->where('receiver_id',$user_id)->first();
        }
        Message::create([
            'chat_id' =>$chat->id,
            'sender_id' => $user_id,
            'receiver_id' => $id,
            'message' => $request ->message
        ]);
        return redirect()->route('message', ['id' =>$id,]);
    }
}
