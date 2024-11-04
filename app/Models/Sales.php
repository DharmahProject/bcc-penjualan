<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    use HasFactory;

    // Define the table name
    protected $table = 'penjualan';

    // Define the primary key
    protected $primaryKey = 'id_penjualan';

    // Specify the primary key type if it's not an incrementing integer
    public $incrementing = true;
    protected $keyType = 'int';

    // Specify the fillable attributes for mass assignment
    protected $fillable = [
        'tanggal_booking',
        'tanggal_akad',
        'diskon_disetujui',
        'id_cluster',
        'bobot_ppjb',
        'cara_beli',
        'id_team',
        'nama_konsumen',
        'alamat',
        'telepon',
        'nik',
        'email',
        'harga_jual_standar',
        'diskon',
        'harga_setelah_diskon',
        'kelebihan_tanah',
        'strategis',
        'ppn',
        'bphtb',
        'adm_ajb',
        'harga_pengikat',
        'uang_muka',
        'kpr',
        'changed_by',
        'changed_at',
        'updated_by',
        'updated_at'
    ];

    // Specify the attributes that should be cast to specific data types
    protected $casts = [
        'tanggal_booking' => 'datetime',
        'tanggal_akad' => 'datetime',
        'changed_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    // Disable timestamps if they are not used
    public $timestamps = false;
}
