<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    use HasFactory;

    protected $table = 'layanan'; // Sesuaikan dengan nama tabel di database Anda
    protected $fillable = ['nama', 'foto', 'keterangan']; // Sesuaikan dengan kolom di tabel sejarah
}
