<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
//manytomany
class Obat extends Model
{
    protected $fillable = [
        'nama_obat',
        'kemasan',
        'harga',
    ];

    public function periksa()
    {
        return $this->belongsToMany(Periksa::class, 'detail_periksa', 'id_obat', 'id_periksa');
    }
}
