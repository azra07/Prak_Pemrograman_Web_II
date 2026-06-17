<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        $buku = Buku::all();
        return view('buku.index', compact('buku'));
    }

    public function create()
    {
        return view('buku.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string',
            'penulis' => 'required|string',
            'penerbit' => 'required|string',
            'tahun_terbit' => 'required|numeric|gt:1800|lt:2024',
        ], [
            'judul.required' => 'Judul harus diisi.',
            'judul.string' => 'Judul harus berupa teks.',
            'penulis.required' => 'Penulis harus diisi.',
            'penulis.string' => 'Penulis harus berupa teks.',
            'penerbit.required' => 'Penerbit harus diisi.',
            'penerbit.string' => 'Penerbit harus berupa teks.',
            'tahun_terbit.required' => 'Tahun terbit harus diisi.',
            'tahun_terbit.numeric' => 'Tahun terbit harus berupa angka.',
            'tahun_terbit.gt' => 'Tahun terbit harus lebih besar dari 1800.',
            'tahun_terbit.lt' => 'Tahun terbit harus lebih kecil dari 2024.',
        ]);

        Buku::create($request->all());

        return redirect()->route('buku.index')->with('success', 'Data buku berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $buku = Buku::findOrFail($id);
        return view('buku.edit', compact('buku'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string',
            'penulis' => 'required|string',
            'penerbit' => 'required|string',
            'tahun_terbit' => 'required|numeric|gt:1800|lt:2024',
        ], [
            'judul.required' => 'Judul harus diisi.',
            'penulis.required' => 'Penulis harus diisi.',
            'penerbit.required' => 'Penerbit harus diisi.',
            'tahun_terbit.required' => 'Tahun terbit harus diisi.',
            'tahun_terbit.numeric' => 'Tahun terbit harus berupa angka.',
            'tahun_terbit.gt' => 'Tahun terbit harus lebih besar dari 1800.',
            'tahun_terbit.lt' => 'Tahun terbit harus lebih kecil dari 2024.',
        ]);

        $buku = Buku::findOrFail($id);
        $buku->update($request->all());

        return redirect()->route('buku.index')->with('success', 'Data buku berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $buku = Buku::findOrFail($id);
        $buku->delete();

        return redirect()->route('buku.index')->with('success', 'Data buku berhasil dihapus.');
    }
}