<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    use HasFactory;

    protected $fillable = [
        "NIM",
        "nama_mhs",
        "prodi_mhs",
        "alamat_mhs",
        "notelp_mhs",
        "ttl_mhs"
    ] ;
}
