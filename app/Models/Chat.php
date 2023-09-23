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

    protected $fillable = [
        'message',
        'sender_id',
    ];

    protected $keyType = 'string';
    public $incrementing = false;
    protected $table = "chats";
}
