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
        Schema::create('usersInformations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('userId')->references('id')->on('users')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->string('surname')->nullable();
            $table->string('nameCompany')->nullable();
            $table->string('pIva')->unique()->nullable();
            $table->string('address');
            $table->string('city');
            $table->string('cap');
            $table->string('pec')->nullable();
            $table->string('sdi')->nullable();
            $table->string('siteLink')->nullable();
            $table->string('state')->nullable();
            $table->string('currency')->nullable();
            $table->string('mobileNumber');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usersInformations');
    }
};
