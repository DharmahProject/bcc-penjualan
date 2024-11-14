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
            $table->string('photo', 500)->after('phone')->nullable();
            $table->dropColumn('about_me'); // Replace 'column_name' with the actual column name
            $table->dropColumn('location'); // Replace 'column_name' with the actual column name
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
                $table->dropColumn('photo');
                $table->string('about_me')->nullable();
                $table->string('location')->nullable();
            }
        });
    }
};
