<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('scan_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('guest_id')->constrained();
            $table->foreignId('scanner_id')->constrained('users');
            $table->foreignId('event_id')->constrained();
            $table->enum('scan_type', ['check_in', 'souvenir']);
            $table->enum('status', ['success', 'failed', 'duplicate'])->default('success');
            $table->text('notes')->nullable();
            $table->timestamp('scanned_at')->useCurrent();
            $table->timestamps();
            
            $table->index(['event_id', 'scan_type', 'scanned_at']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('scan_logs');
    }
};