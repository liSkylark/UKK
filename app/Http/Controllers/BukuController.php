<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Kategori;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bukus = Buku::with('kategori')->get();
        return view('buku.index', compact('bukus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view('buku.create',compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Judul' => 'required',
            'Penulis' => 'required',
            'Penerbit' => 'required',
            'Tahun_Terbit' => 'required',
            'kategori_id' => 'required',
        ]);

        Buku::create([
            'Judul' => $request->Judul,
            'Penulis' => $request->Penulis,
            'Penerbit' => $request->Penerbit,
            'Tahun_Terbit' => $request->Tahun_Terbit,
            'kategori_id' => $request->kategori_id,
        ]);

        return redirect()->route('buku.index')
            ->with('success', 'Data berhasil ditambahkan');
    }


    public function show(string $id)
    {
        $buku = Buku::findOrFail($id);

        return view('buku.show', compact('buku'));
    }

    public function edit(string $id)
    {
        $buku = Buku::findOrFail($id);

        return view('buku.edit', compact('buku'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'Judul' => 'required|string|max:255',
            'Penulis' => 'required|string',
            'Penerbit' => 'required|string',
            'Tahun_Terbit' => 'required|date',
            'kategori_id' => 'required|string',
        ]);
        $buku = Buku::findOrFail($id);

        $buku->update([
            'Judul'=>$request->input('Judul'),
            'Penulis'=>$request->input('Penulis'),
            'Penerbit'=>$request->input('Penerbit'),
            'Tahun_Terbit'=>$request->input('Tahun_Terbit'),
            'kategori_id'=>$request->input('kategori_id'),
        ]);
        return redirect()->route('buku.index')
            ->with('success', 'Data berhasil diperbarui.');

        //perbarui$ata yang sesuai dengan ID
        //redirect ke halaman index dengan pesan sukses

    }
    public function destroy(string $id)
    {
        $buku = Buku::findOrFail($id);
        $buku->delete();

        return redirect()->route('buku.index')->with('succes', 'Data Telah Dihapus');
    }
}
