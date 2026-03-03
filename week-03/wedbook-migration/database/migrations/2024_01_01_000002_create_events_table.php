<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('groom_name')->nullable();
            $table->string('bride_name')->nullable();
            $table->enum('event_type', ['wedding', 'graduation', 'anniversary', 'seminar', 'corporate', 'other'])->default('wedding');
            $table->date('event_date');
            $table->time('event_time')->nullable();
            $table->string('location_name');
            $table->text('location_maps_url')->nullable();
            $table->string('theme')->nullable();
            $table->enum('status', ['draft', 'published', 'ongoing', 'completed', 'cancelled'])->default('draft');
            $table->integer('total_guests')->default(0);
            $table->integer('max_guests')->nullable();
            $table->integer('max_souvenir')->nullable();
            $table->json('broadcast_settings')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};