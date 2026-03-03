<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('guests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('event_id')->constrained();
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('unique_code', 20)->unique();
            $table->string('qr_code_path')->nullable();
            $table->enum('status', [
                'pending', 
                'invitation_sent', 
                'invitation_opened',
                'rsvp_yes', 
                'rsvp_no', 
                'attended'
            ])->default('pending');
            $table->enum('invitation_channel', ['whatsapp', 'email', 'physical'])->default('whatsapp');
            $table->timestamp('invitation_sent_at')->nullable();
            $table->timestamp('opened_at')->nullable();
            $table->integer('plus_one')->default(0);
            $table->text('notes')->nullable();
            $table->boolean('souvenir_taken')->default(false);
            $table->timestamp('souvenir_taken_at')->nullable();
            $table->timestamp('checked_in_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
            
            $table->index(['event_id', 'status']);
            $table->index('unique_code');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('guests');
    }
};