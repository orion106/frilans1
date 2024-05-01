<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Chats extends Model
{
    use HasFactory;
    protected $table = 'chats';
    protected $fillable = [
        'id',
        'sender_id',
        'receiver_id',
    ];
    public function message(): HasOne
    {
        return $this->hasOne(Message::class, 'id',);
    }
}
