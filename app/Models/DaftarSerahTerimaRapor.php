<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DaftarSerahTerimaRapor extends Model
{
    use HasFactory;
    protected $fillable = [
        'walas_id',
        'image_url'
    ];
}
