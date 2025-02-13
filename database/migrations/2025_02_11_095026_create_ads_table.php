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
            $table->foreignId('user_id')->nullable()->references('id')->on('users')->constrained('users')->onDelete('cascade');
            $table->enum('categories', Ad::CATEGORIES)->nullable();
            $table->enum('sub_categories', Ad::SUBCATEGORIES)->nullable();
            $table->json('city');
            $table->decimal('budget_min', 10,2);
            $table->decimal('budget_max', 10,2);
            $table->integer('square_meters')->nullable();
            $table->text('description');
            $table->string('title');
            $table->unsignedBigInteger('image_id')->nullable();
            $table->enum('service_type', Ad::SERVICE_TYPE)->nullable();
            $table->enum('building_categories', Ad::BUILDING_CATEGORIES)->nullable();
            $table->enum('local_categories', Ad::LOCAL_CATEGORIES)->nullable();
            $table->string('address')->nullable();
            $table->string('cap')->nullable();
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
