<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('broadcast_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('event_id')->constrained();
            $table->foreignId('guest_id')->nullable()->constrained();
            $table->enum('channel', ['whatsapp', 'email', 'physical'])->default('whatsapp');
            $table->string('recipient');
            $table->enum('status', ['pending', 'sent', 'delivered', 'failed'])->default('pending');
            $table->timestamp('sent_at')->nullable();
            $table->text('error_message')->nullable();
            $table->timestamps();
            
            $table->index(['event_id', 'status', 'channel']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('broadcast_logs');
    }
};