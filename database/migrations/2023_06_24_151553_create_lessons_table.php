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
            $table->foreignId('category_id')->constrained()->nullable();
            $table->foreignId('lesson_type_id')->constrained()->nullable();
            $table->string('title1');
            $table->string('title2')->nullable();
            $table->string('lectors_text')->nullable();
            $table->foreignId('language_id')->constrained();
            $table->date('lesson_date');
            $table->time('lesson_time');
            $table->foreignId('location_type_id')->constrained();
            $table->string('source')->nullable();
            $table->string('img');
            $table->boolean('approved')->default(false);
            $table->text('description')->nullable();
            $table->foreignId('user_id')->constrained()->nullable();

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
