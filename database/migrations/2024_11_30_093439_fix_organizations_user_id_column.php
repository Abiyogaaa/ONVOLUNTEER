<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('organizations', function (Blueprint $table) {
            // Jika kolom salah
            if (Schema::hasColumn('organizations', 'users_id')) {
                $table->renameColumn('users_id', 'user_id');
            }
        });
    }

    public function down()
    {
        Schema::table('organizations', function (Blueprint $table) {
            // Rollback jika diperlukan
            if (Schema::hasColumn('organizations', 'user_id')) {
                $table->renameColumn('user_id', 'users_id');
            }
        });
    }
};
