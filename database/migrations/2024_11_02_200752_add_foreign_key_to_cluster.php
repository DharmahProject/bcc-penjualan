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
        Schema::table('cluster', function (Blueprint $table) {
            //
            $table->integer('tipe_fk')->unsigned()->nullable(); 
            $table->integer('floor_fk')->unsigned()->nullable(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cluster', function (Blueprint $table) {
            //
            $table->dropColumn(['tipe_fk', 'floor_fk']);
        });
    }
};
