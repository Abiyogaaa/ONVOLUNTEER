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
        Schema::disableForeignKeyConstraints();

        Schema::create('organizations', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('user_id')->constrained();
            $table->string('name');
            $table->text('description');
            $table->text('address');
            $table->string('phone_number');
            $table->text('logo')->nullable();
            $table->string('website')->nullable();
            $table->string('activity_field');
            $table->foreignId('users_id');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('organizations');
    }
};
