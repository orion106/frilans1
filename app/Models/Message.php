<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    protected $table = 'message';
    protected $fillable = [
        'chat_id',
        'id',
        'sender_id',
        'receiver_id',
        'message'
    ];
}
