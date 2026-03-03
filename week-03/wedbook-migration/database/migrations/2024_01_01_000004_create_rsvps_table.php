<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('rsvps', function (Blueprint $table) {
            $table->id();
            $table->foreignId('guest_id')->constrained();
            $table->foreignId('event_id')->constrained();
            $table->enum('response', ['hadir', 'tidak_hadir', 'ragu'])->nullable();
            $table->integer('total_attendees')->default(1);
            $table->text('message')->nullable();
            $table->timestamps();
            
            $table->unique(['guest_id', 'event_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('rsvps');
    }
};