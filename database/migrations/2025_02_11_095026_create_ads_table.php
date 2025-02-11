<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Ad;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->id();
            $table->enum('categories', Ad::CATEGORIES)->nullable();
            $table->enum('subCategories', Ad::SUBCATEGORIES)->nullable();
            $table->json('city');
            $table->decimal('budgetMin', 10,2);
            $table->decimal('budgetMax', 10,2);
            $table->integer('squareMeters')->nullable();
            $table->text('description');
            $table->string('title');
            $table->unsignedBigInteger('imageId')->nullable();
            $table->string('serviceType')->nullable();
            $table->enum('buildingCategories', Ad::BUILDING_CATEGORIES)->nullable();
            $table->enum('localCategories', Ad::LOCAL_CATEGORIES)->nullable();
            $table->string('address')->nullable();
            $table->string('cap')->nullable();
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
        Schema::dropIfExists('ads');
    }
};
