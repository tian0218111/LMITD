<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Layanan; // Pastikan ini sesuai jika Anda menggunakan model Layanan
use App\Models\Sejarah; // Pastikan ini sesuai jika Anda menggunakan model Layanan

class LMITDController extends Controller
{
    public function index()
    {
        $data = Layanan::all(); // Ambil semua data dari model Layanan
        return view('lmitd.index', compact('data'));
    }
    public function sejarah()
    {
        $datasejarah = Sejarah::all(); // Ambil semua data dari model Sejarah
        return view('lmitd.sejarah', compact('datasejarah'));
    }
    public function tugas()
    {
        return view('lmitd.tugas'); 
    }
    public function struktur()
    {
        return view('lmitd.struktur'); 
    }
}