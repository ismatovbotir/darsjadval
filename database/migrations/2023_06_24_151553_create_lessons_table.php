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
        Schema::create('lessons', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
            $table->foreignId('lesson_type_id');
            $table->string('title1');
            $table->string('title2')->nullable();
            $table->string('lectors')->nullable();
            $table->foreignId('language_id');
            $table->date('lesson_date');
            $table->time('lesson_time');
            $table->foreignId('location_type_id');
            $table->string('source')->nullable();
            $table->string('img');
            $table->boolean('approved')->default(false);
            $table->text('description')->nullable();
            $table->foreignId('user_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lessons');
    }
};
