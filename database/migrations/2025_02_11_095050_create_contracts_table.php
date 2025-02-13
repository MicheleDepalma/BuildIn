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
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ad_id')->references('id')->on('ads')->constrained()->onDelete('cascade');
            $table->enum('state', ['Confermato', 'Non Confermato'])->default('Non Confermato');
            $table->date('work_start');
            $table->date('work_end');
            $table->decimal('ammount', 10,2);
            $table->enum('state_payment', ['Pagato', 'Non Pagato'])->default('Non Pagato');
            $table->unsignedBigInteger('attachment_id')->nullable();
            $table->foreignId('user_id')->nullable()->references('id')->on('users')->constrained('users')->onDelete('cascade');
            $table->foreignId('recipient_id')->nullable()->references('id')->on('users')->constrained('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contracts');
    }
};
