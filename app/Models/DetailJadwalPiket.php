<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailJadwalPiket extends Model
{
    use HasFactory;
    protected $table = 'detail_jadwal_pikets';
    protected $fillable = [
        'id',
        'jadwalpikets_id',
        'siswas_id'
    ];
    public $timestamps = false;
}
