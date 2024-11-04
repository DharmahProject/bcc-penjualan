<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        if (!Schema::hasTable('penjualan')) {
            Schema::create('penjualan', function (Blueprint $table) {
                $table->integer('id_penjualan')->primary();
                $table->dateTime('tanggal_booking')->nullable();
                $table->dateTime('tanggal_akad')->nullable();
                $table->integer('diskon_disetujui');
                $table->integer('id_cluster');
                $table->float('bobot_ppjb');
                $table->string('cara_beli', 32);
                $table->integer('id_team');
                $table->string('nama_konsumen', 128);
                $table->text('alamat');
                $table->string('telepon', 16);
                $table->bigInteger('nik');
                $table->string('email', 256);
                $table->float('harga_jual_standar');
                $table->float('diskon');
                $table->float('harga_setelah_diskon');
                $table->float('kelebihan_tanah');
                $table->float('strategis')->nullable();
                $table->float('ppn')->nullable();
                $table->float('bphtb')->nullable();
                $table->float('adm_ajb')->nullable();
                $table->float('harga_pengikat')->nullable();
                $table->float('uang_muka')->nullable();
                $table->float('kpr')->nullable();
                $table->string('changed_by', 128)->nullable();
                $table->dateTime('changed_at')->nullable();
                $table->string('updated_by', 128)->nullable();
                $table->dateTime('updated_at')->nullable();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('penjualan');
    }
};
