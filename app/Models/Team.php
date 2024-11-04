<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $table = 'team'; 
    protected $primaryKey = 'id_team';

    protected $fillable = [
        'nama_pegawai',
        'alamat',
        'id_jabatan', 
        'telepon', 
        'sales_coordinator', 
        'sales_manager', 
        'created_by',
        'updated_by', 
        'profile_picture'
    ];

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class, 'id_jabatan'); 
    }
}
