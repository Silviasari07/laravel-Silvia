<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    // 1. Menampilkan Daftar Pelanggan
    public function index()
    {
        $dataPelanggan = Pelanggan::latest()->get();
        return view('pelanggan.index', compact('dataPelanggan'));
    }

    // 2. Menampilkan Form Tambah Pelanggan
    public function create()
    {
        return view('pelanggan.create');
    }

    // 3. Menyimpan Data Pelanggan Baru
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name'  => 'required',
            'birthday'   => 'required|date',
            'gender'     => 'required|in:Male,Female',
            'email'      => 'required|email|unique:pelanggan,email',
            'phone'      => 'required|numeric',
        ]);

        Pelanggan::create([
            'first_name' => $request->first_name,
            'last_name'  => $request->last_name,
            'birthday'   => $request->birthday,
            'gender'     => $request->gender,
            'email'      => $request->email,
            'phone'      => $request->phone,
        ]);

        return redirect()->route('pelanggan.index')->with('success', 'Data Pelanggan Berhasil Ditambahkan!');
    }

    // 4. Menampilkan Form Edit Pelanggan
    public function edit(string $id)
    {
        $dataPelanggan = Pelanggan::findOrFail($id);
        return view('pelanggan.edit', compact('dataPelanggan'));
    }

    // 5. Mengupdate Data Pelanggan
    public function update(Request $request, string $id)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name'  => 'required',
            'birthday'   => 'required|date',
            'gender'     => 'required|in:Male,Female',
            'email'      => 'required|email|unique:pelanggan,email,' . $id . ',pelanggan_id',
            'phone'      => 'required|numeric',
        ]);

        $pelanggan = Pelanggan::findOrFail($id);

        $pelanggan->first_name = $request->first_name;
        $pelanggan->last_name  = $request->last_name;
        $pelanggan->birthday   = $request->birthday;
        $pelanggan->gender     = $request->gender;
        $pelanggan->email      = $request->email;
        $pelanggan->phone      = $request->phone;

        $pelanggan->save();

        return redirect()->route('pelanggan.index')->with('success', 'Perubahan Data Berhasil!');
    }

    // 6. Menghapus Data Pelanggan
    public function destroy(string $id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        $pelanggan->delete();

        return redirect()->route('pelanggan.index')->with('success', 'Data Pelanggan Berhasil Dihapus!');
    }
}