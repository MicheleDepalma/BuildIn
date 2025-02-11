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
            $table->foreignId('adsId')->references('id')->on('ads')->constrained()->onDelete('cascade');
            $table->enum('state', ['Confermato', 'Non Confermato'])->default('Non Confermato');
            $table->date('workStart');
            $table->date('workEnd');
            $table->decimal('ammount', 10,2);
            $table->enum('statePayment', ['Pagato', 'Non Pagato'])->default('Non Pagato');
            $table->unsignedBigInteger('attachmentsId')->nullable();
            $table->foreignId('usersId')->nullable()->references('id')->on('users')->constrained('users')->onDelete('cascade');
            $table->foreignId('recipientId')->nullable()->references('id')->on('users')->constrained('users')->onDelete('cascade');
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
