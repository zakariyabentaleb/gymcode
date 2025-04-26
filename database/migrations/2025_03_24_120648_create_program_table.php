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
        Schema::create('program', function (Blueprint $table) {
            $table->id();
            $table->string('title'); 
            $table->text('description'); 
            $table->enum('level', ['debutant','intermediaire', 'professionel'])->default('debutant');
            $table->decimal('price', 8, 2); 
            $table->string('image_url'); 
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            $table->foreignId('trainer_id')->constrained('users')->onDelete('cascade'); 
            $table->integer('duree')->default(1);
            $table->timestamps();  
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('program');
    }
};
