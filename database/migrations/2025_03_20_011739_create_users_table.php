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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('email')->unique();
            $table->enum('role', ['admin','member', 'trainer'])->default('member');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('specialty')->nullable();
            $table->string('photo')->nullable();
            $table->string('description')->nullable();
            $table->boolean('terms_accepted')->default(false);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
