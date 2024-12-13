<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DaftarSerahTerimaRapor extends Model
{
    use HasFactory;
    protected $fillable = [
        'walas_id',
        'image_url'
    ];
}
