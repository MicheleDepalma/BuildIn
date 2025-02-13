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
        Schema::create('userInformations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->string('surname')->nullable();
            $table->string('name_company')->nullable();
            $table->string('p_iva')->unique()->nullable();
            $table->string('address');
            $table->string('city');
            $table->string('cap');
            $table->string('pec')->nullable();
            $table->string('sdi')->nullable();
            $table->string('site_link')->nullable();
            $table->string('state')->nullable();
            $table->string('currency')->nullable();
            $table->string('mobile_number');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('userInformations');
    }
};
