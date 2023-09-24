<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChatRoom extends Model
{
    use HasFactory;

    public function chat() {
        return $this->hasOne(Chat::class);
    }

    protected $fillable = [
        'id',
        'sender_id',
        'receiver_id',
    ];
    protected $table = "chat_rooms";
}
