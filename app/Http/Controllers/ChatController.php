<?php

namespace App\Http\Controllers;

use App\Models\ChatRoom;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index($transactionID) {
        return view('chat.index', ["transactionID" => $transactionID]);
    }

    public function createChat($senderID, $receiverID, $transID) {
        $chatroom = ChatRoom::create(['id' => Str::uuid(), 'sender_id' => $senderID, 'receiver_id' => $receiverID]);
        $transactionID = $transID;
        return redirect()->route('chat.index', compact('transactionID'));
    }
}
