<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('chats', function (Blueprint $table) {
            $table->uuid('id');
            $table->text('message');
            $table->unsignedBigInteger('sender_id');
            $table->uuid('chatroom_id');
            $table->timestamp('timestamp');
            $table->timestamps();

            $table->foreign('sender_id')->references('id')->on('users');
            $table->foreign('chatroom_id')->references('id')->on('chat_rooms');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chats');
    }
};
