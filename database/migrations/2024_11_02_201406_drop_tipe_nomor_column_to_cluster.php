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
            
            $table->dropColumn(['tipe', 'nomor']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cluster', function (Blueprint $table) {
            //
            
            $table->string('tipe',32)->unsigned()->nullable(); 
            $table->string('nomor',6)->unsigned()->nullable(); 
        });
    }
};
