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
            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->date('date_of_birth');
            $table->enum('gender', ["Laki-laki", "Perempuan"]);
            $table->text('address');
            $table->string('phone_number');
            $table->text('profile_picture')->nullable();
            $table->text('bio')->nullable();
            $table->text('skills');
            $table->text('interests');
            $table->enum('role', ["admin", "relawan", "organisasi"]);
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
