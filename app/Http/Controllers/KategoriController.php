<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    private $rules = [
        'Nama_Kategori' => 'required|string|max:255|unique:kategoris,Nama_Kategori'
    ];

    public function index()
    {
        $kategori = kategori::all();
        return view('Kategori.index', compact('kategori'));
    }

    public function create()
    {
        return view('kategori.create');
    }

    public function store(Request $request)
    {
        // $validated = $request->validate($this->rules);

        // try {
        //     Kategori::create($validated);
        //     return redirect()->route('kategori.index')
        //         ->with('success', 'Kategori berhasil ditambahkan');
        // } catch (\Exception $e) {
        //     return back()->with('error', 'Terjadi kesalahan saat menambahkan kategori');
        // }

        kategori::create([
            'Nama_Kategori'=>$request->Nama_Kategori,
        ]);

        return redirect()->route('Kategori.index');
    }

    public function edit(Kategori $kategori)
    {
        return view('Kategori.edit', compact('kategori'));
    }

    public function update(Request $request, Kategori $kategori)
    {
        $rules = $this->rules;
        $rules['nama_kategori'] .= ',' . $kategori->id;

        $validated = $request->validate($rules);

        try {
            $kategori->update($validated);
            return redirect()->route('Kategori.index')
                ->with('success', 'Kategori berhasil diperbarui');
        } catch (\Exception $e) {
            return back()->with('error', 'Terjadi kesalahan saat memperbarui kategori');
        }
    }

    public function destroy(Kategori $kategori)
    {
        try {
            $kategori->delete();
            return redirect()->route('Kategori.index')
                ->with('success', 'Kategori berhasil dihapus');
        } catch (\Exception $e) {
            return back()->with('error', 'Terjadi kesalahan saat menghapus kategori');
        }
    }
}
