<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Siswa extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'rombels_id',
        'jenis_kelamin',
        'no_wa',
        'password',
        'image_url',
        'status'
    ];
    public $timestamps = false;
}
