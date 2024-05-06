<?php

namespace App\Http\Controllers\profile;

use App\Http\Controllers\Controller;
use App\Models\Chats;
use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function index(){
        $user_id = auth()->user()->id;
        $user_my = User::all()->find($user_id);
        $chats = Chats::where('sender_id', $user_id)->orWhere('receiver_id', $user_id)->get();
        $chat_users = [];
        foreach ($chats as $chat) {
            if ($chat->sender_id == $user_id) {
                $chat_users[] = $chat->receiver_id;
            } elseif ($chat->receiver_id == $user_id) {
                $chat_users[] = $chat->sender_id;
            }
        }
        $unique_chat_users = array_unique($chat_users);
        $user = User::whereIn('id', $unique_chat_users)->get();

        return view('profile.messages',[
            'user_my' => $user_my,
            'user' => $user,
        ]);
    }
}
