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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->foreignId('usersId')->nullable()->references('id')->on('users')->constrained('users')->onDelete('cascade');
            $table->foreignId('recipientId')->nullable()->references('id')->on('users')->constrained('users')->onDelete('cascade');
            $table->integer('vote')->check('vote BETWEEN 1 AND 5');
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
