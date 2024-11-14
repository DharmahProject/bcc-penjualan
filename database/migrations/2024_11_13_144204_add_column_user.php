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
        Schema::table('users', function (Blueprint $table) {
            $table->integer('level_id')->after('about_me')->nullable();
            $table->integer('is_deleted')->after('level_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // menghapus perubahan
            if (Schema::hasColumn('users')) {
                $table->dropColumn('level_id');
                $table->dropColumn('is_deleted');
            }
        });
    }
};
