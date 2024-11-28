<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Peminjaman;
use App\Models\Pengembalian;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PengembalianController extends Controller
{
   public function create()
   {
        $peminjamans = Peminjaman::with('buku','user')->get();
        return view('pengembalian.create', compact('peminjamans'));
   }

   public function store(Request $request)
   {
        $tanggal_pengembalian = now()->toDateString();

        // $denda = $this->hitungdenda($peminjaman, $tanggal_pengembalian);

        // if ($peminjaman->pengembalian) {
        //     return response()->json(['message' => 'Buku sudah dikembalikan.'], 400);
        // }

        // $buku = Buku::findOrFail($peminjaman->buku_id);

        // $buku->increment('stok');


        $pengembalian = Pengembalian::create([
            'peminjaman_id' => $request->peminjaman_id,
            'tanggal_pengembalian' => $tanggal_pengembalian,
            // 'denda' => $denda,
            'status' => 'dikembalikan',
        ]);

        // $pengembalian->prosesPengembalian();

        return redirect()->route('pengembalian.all')->with('success','Pengembalian buku berhasil');
   }

//    public function hitungdenda(Peminjaman $peminjaman, $tanggal_pengembalian)
//    {
//         $tanggal_pengembalian = Carbon::parse($tanggal_pengembalian);
//         $tanggal_tempo = $peminjaman->tanggal_tempo();

//         if($tanggal_pengembalian->gt($tanggal_tempo)){
//             $selisih_hari = $tanggal_pengembalian->diffInDays($tanggal_tempo);
//             return $selisih_hari * 1000;
//         }

//         return 0;
//    }

//    public function approve($id)
//    {
//         $pengembalian = Pengembalian::findOrFail($id);
//         $pengembalian->update([
//             'status' => 'Dikembalikan',
//         ]);

//         return redirect()->route('pengembalian.index')->with('success','Buku berhasil di kembalikan');
//    }

//    public function pengembalian()
//    {
//         $pengembalian = Pengembalian::where('status','Menunggu Persetujuan')->get();
//         return view('pengembalian.index',compact('pengembalian'));
//    }

   public function allpengembalian()
   {
     $pengembalian = Pengembalian::with('peminjaman')->get();
     return view('pengembalian.index',compact('pengembalian'));
   }
}
