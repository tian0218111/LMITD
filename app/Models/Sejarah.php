<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sejarah extends Model
{
    use HasFactory;
    public $timestamps = false; 
    protected $table = 'sejarah'; // Sesuaikan dengan nama tabel di database Anda
    protected $fillable = ['tahun','unit', 'foto', 'keterangan']; // Sesuaikan dengan kolom di tabel sejarah
}
