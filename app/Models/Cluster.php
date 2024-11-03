<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cluster extends Model
{
    use HasFactory;

    protected $table = 'cluster';
    protected $primaryKey = 'id_cluster';

    protected $fillable = [
        'periode',
        'tipe_fk',
        'floor_fk',
        'blok',
        'nomor',
        'luas_bangunan',
        'luas_tanah',
        'harga_jual_standar',
        'tunai_keras',
        'tunai_bertahap',
        'kpr',
        'uang_muka',
        'angsuran',
        'created_by', 
        'updated_by', 
	'is_deleted',
    ];

    public function propertyType()
    {
        return $this->belongsTo(PropertyType::class, 'tipe_fk'); 
    }

    public function propertyFloor()
    {
        return $this->belongsTo(PropertyFloor::class, 'floor_fk');
    }
}
