<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('souvenir_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('guest_id')->constrained();
            $table->foreignId('event_id')->constrained();
            $table->foreignId('scanner_id')->constrained('users');
            $table->integer('quantity')->default(1);
            $table->timestamp('taken_at')->useCurrent();
            $table->timestamps();
            
            $table->unique(['guest_id', 'event_id'], 'unique_souvenir_per_guest');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('souvenir_logs');
    }
};