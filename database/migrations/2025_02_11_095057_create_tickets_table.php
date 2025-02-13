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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->references('id')->on('users')->constrained('users')->onDelete('cascade');
            $table->enum('state', ['nuovo', 'in lavorazione', 'chiuso'])->default('nuovo');
            $table->foreignId('revisor_id')->nullable()->references('id')->on('users')->constrained('users')->onDelete('cascade');
            $table->timestamp('modified_date')->useCurrent()->useCurrentOnUpdate();
            $table->text('request');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
