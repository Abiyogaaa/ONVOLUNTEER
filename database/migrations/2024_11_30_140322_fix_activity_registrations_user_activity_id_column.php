<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('actvity_registrations', function (Blueprint $table) {
            // Jika kolom salah
            if (Schema::hasColumn('actvity_registrations', 'users_activity_id')) {
                $table->renameColumn('users_activity_id', 'user_activity_id');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('actvity_registrations', function (Blueprint $table) {
            // Rollback jika diperlukan
            if (Schema::hasColumn('actvity_registrations', 'user_activity_id')) {
                $table->renameColumn('user_activity_id', 'users_activity_id');
            }
        });
    }
};
