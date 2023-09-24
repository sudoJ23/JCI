<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;

    public function sender() {
        return $this->belongsTo(User::class, 'sender_id');
    }

    public function chatroom() {
        return $this->belongsTo(ChatRoom::class, 'chatroom_id');
    }

    protected $fillable = [
        'message',
        'sender_id',
        'chatroom_id',
        'timestamp',
    ];

    protected $keyType = 'string';
    public $incrementing = false;
    protected $table = "chats";
}
