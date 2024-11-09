<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;  // Pastikan ini ada
use App\Models\Sejarah;
use App\Models\Layanan;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Menampilkan form untuk membuat sejarah
    public function createSejarah()
    {
        return view('admin.sejarah.index');
    }

    // Menyimpan data sejarah yang diinputkan
    public function storeSejarah(Request $request)
    {
        $validated = $request->validate([
            'tahun' => 'required|integer|digits:4', // Validasi tahun dengan 4 digit
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validasi foto
            'unit' => 'required|string|max:255', // Validasi nama layanan
            'keterangan' => 'required|string', // Validasi keterangan
        ]);

        // Mendapatkan file foto
        $foto = $request->file('foto');

        // Mendapatkan nama file dan ekstensi
        $filename = pathinfo($foto->getClientOriginalName(), PATHINFO_FILENAME);
        $extension = $foto->getClientOriginalExtension();

        // Menentukan folder penyimpanan file
        $folder = 'img/sejarah';

        // Membuat nama file unik dengan memeriksa apakah file sudah ada
        $fotoPath = $folder . '/' . $foto->getClientOriginalName();
        $counter = 1;

        // Mengecek apakah nama file sudah ada di storage
        while (Storage::disk('public')->exists($fotoPath)) {
            // Mengubah nama file dengan menambahkan angka di belakangnya
            $fotoPath = $folder . '/' . $filename . $counter . '.' . $extension;
            $counter++;
        }

        // Menyimpan file dengan nama unik di folder public
        $foto->storeAs($folder, basename($fotoPath), 'public');

        // Menyimpan data ke dalam database dengan hanya nama file
        Sejarah::create([
            'tahun' => $validated['tahun'], // Nama layanan yang sudah divalidasi
            'foto' => basename($fotoPath), // Hanya nama file yang disimpan, tanpa path
            'unit' => $validated['unit'], // Nama layanan yang sudah divalidasi
            'keterangan' => $validated['keterangan'], // Keterangan layanan
        ]);

        // Redirect dengan pesan sukses
        return redirect()->route('admin.sejarah.index')->with('success', 'Berhasil ditambahkan!');
    }

    // Menampilkan form untuk mengupdate sejarah
    public function editSejarah($id)
    {
        $sejarah = Sejarah::findOrFail($id);
        return view('admin.sejarah.index', compact('sejarah'));
    }

    public function updateSejarah(Request $request, $id)
    {
        // Validasi input
        $validated = $request->validate([
            'tahun' => 'required|integer|digits:4', // Validasi tahun dengan 4 digit
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Foto opsional untuk update
            'unit' => 'required|string|max:255',
            'keterangan' => 'required|string',
        ]);

        // Mencari data sejarah yang akan diupdate
        $sejarah = Sejarah::findOrFail($id);

        // Menyimpan foto baru jika ada foto yang diupload
        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($sejarah->foto) {
                Storage::disk('public')->delete($sejarah->foto);
            }

            // Mendapatkan file foto yang diupload
            $foto = $request->file('foto');

            // Mendapatkan nama file dan ekstensi
            $filename = pathinfo($foto->getClientOriginalName(), PATHINFO_FILENAME);
            $extension = $foto->getClientOriginalExtension();

            // Tentukan path tempat file akan disimpan
            $folder = 'img/sejarah';

            // Memeriksa apakah file dengan nama yang sama sudah ada
            $fotoPath = $folder . '/' . $foto->getClientOriginalName();
            $counter = 1;

            // Loop untuk memeriksa apakah nama file sudah ada
            while (Storage::disk('public')->exists($fotoPath)) {
                // Mengubah nama file dengan menambahkan angka di belakangnya
                $fotoPath = $folder . '/' . $filename . $counter . '.' . $extension;
                $counter++;
            }

            // Menyimpan foto dengan nama yang unik
            $foto->storeAs($folder, basename($fotoPath), 'public');

            // Menyimpan path foto baru ke data yang akan disimpan
            $validated['foto'] = $fotoPath;
        }

        // Update data sejarah dengan data yang sudah tervalidasi
        $sejarah->update([
            'tahun' => $validated['tahun'],       // Update tahun
            'unit' => $validated['unit'],         // Update unit
            'keterangan' => $validated['keterangan'], // Update keterangan
            'foto' => $validated['foto'] ?? $sejarah->foto, // Update foto hanya jika ada foto baru
        ]);

        // Redirect dengan pesan sukses
        return redirect()->route('admin.sejarah.index', $id)->with('success', 'Berhasil diperbarui!');
    }

    // Menghapus data sejarah
    public function destroySejarah($id)
    {
        $sejarah = Sejarah::findOrFail($id);

        // Menghapus foto jika ada
        if ($sejarah->foto) {
            // Tambahkan path folder jika yang tersimpan hanya nama file
            $fotoPath = 'img/sejarah/' . $sejarah->foto;

            // Hapus file dari penyimpanan
            Storage::disk('public')->delete($fotoPath);
        }

        // Menghapus data layanan dari database
        $sejarah->delete();

        // Redirect dengan pesan sukses
        return redirect()->route('admin.sejarah.index')->with('success', 'Berhasil dihapus!');
    }

    // Menampilkan semua data sejarah
    public function indexSejarah()
    {
        $sejarahs = Sejarah::all();
        return view('admin.sejarah.index', compact('sejarahs'));
    }

    // Layanan CRUD dan lainnya bisa ditambahkan dengan cara yang sama
    // Misalnya untuk layanan:
    public function createLayanan()
    {
        return view('admin.layanan.index');
    }

    public function storeLayanan(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255', // Validasi nama layanan
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validasi foto
            'keterangan' => 'required|string', // Validasi keterangan
        ]);

        // Mendapatkan file foto
        $foto = $request->file('foto');

        // Mendapatkan nama file dan ekstensi
        $filename = pathinfo($foto->getClientOriginalName(), PATHINFO_FILENAME);
        $extension = $foto->getClientOriginalExtension();

        // Menentukan folder penyimpanan file
        $folder = 'img/layanan';

        // Membuat nama file unik dengan memeriksa apakah file sudah ada
        $fotoPath = $folder . '/' . $foto->getClientOriginalName();
        $counter = 1;

        // Mengecek apakah nama file sudah ada di storage
        while (Storage::disk('public')->exists($fotoPath)) {
            // Mengubah nama file dengan menambahkan angka di belakangnya
            $fotoPath = $folder . '/' . $filename . $counter . '.' . $extension;
            $counter++;
        }

        // Menyimpan file dengan nama unik di folder public
        $foto->storeAs($folder, basename($fotoPath), 'public');

        // Menyimpan data ke dalam database dengan hanya nama file
        Layanan::create([
            'nama' => $validated['nama'], // Nama layanan yang sudah divalidasi
            'foto' => basename($fotoPath), // Hanya nama file yang disimpan, tanpa path
            'keterangan' => $validated['keterangan'], // Keterangan layanan
        ]);

        // Redirect dengan pesan sukses
        return redirect()->route('admin.layanan.index')->with('success', 'Berhasil ditambahkan!');
    }

    public function editLayanan($id)
    {
        $layanan = Layanan::findOrFail($id);
        return view('admin.layanan.index', compact('layanan'));
    }

    public function updateLayanan(Request $request, $id)
    {
        // Validasi input
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'keterangan' => 'required|string',
        ]);

        // Temukan layanan berdasarkan ID
        $layanan = Layanan::findOrFail($id);

        // Perbarui data nama dan keterangan
        $layanan->nama = $validated['nama'];
        $layanan->keterangan = $validated['keterangan'];

        // Jika ada file foto yang diunggah
        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($layanan->foto) {
                Storage::disk('public')->delete($layanan->foto);
            }

            // Simpan foto baru
            $foto = $request->file('foto');
            $fotoPath = $foto->store('img/layanan', 'public');
            $layanan->foto = $fotoPath;
        }

        // Simpan perubahan ke database
        $layanan->save();

        return redirect()->route('admin.layanan.index')->with('success', 'Data layanan berhasil diperbarui!');
    }
    public function destroyLayanan($id)
    {
        // Mencari data layanan berdasarkan ID
        $layanan = Layanan::findOrFail($id);

        // Menghapus foto jika ada
        if ($layanan->foto) {
            // Tambahkan path folder jika yang tersimpan hanya nama file
            $fotoPath = 'img/layanan/' . $layanan->foto;

            // Hapus file dari penyimpanan
            Storage::disk('public')->delete($fotoPath);
        }

        // Menghapus data layanan dari database
        $layanan->delete();

        // Redirect dengan pesan sukses
        return redirect()->route('admin.layanan.index')->with('success', 'Berhasil dihapus!');
    }

    public function indexLayanan()
    {
        $layanans = Layanan::all();
        return view('admin.layanan.index', compact('layanans'));
    }
}
