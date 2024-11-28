@extends('admin.dashboard')
@section('title', 'dashboard')


@section('content')
    <div class="container">



            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Form Peminjaman</div>
                        </div>
                        <form action="{{ route('manualpeminjaman') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <label for="bukupilih">Judul Buku</label>
                                            <select class="form-control" name="buku_id" id="bukupilih">
                                                <option disabledvalue>Pilih Buku</option>
                                                @foreach ($bukus as $item)
                                                    <option value="{{ $item->id }}">{{ $item->Judul }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="userpilih">Nama Peminjam Buku</label>
                                            <select class="form-control" name="user_id" id="userpilih">
                                                <option>Pilih Peminjam</option>
                                                @foreach ($users as $item)
                                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="tanggal_pinjam">Tanggal Pinjam</label>
                                            <input type="date" class="form-control" id="tanggal_pinjam"
                                                placeholder="Masukkan Tanggal Pinjam" name="tanggal_pinjam"
                                                min="{{ date('Y-m-d') }}" />
                                        </div>
                                        <div class="form-group">
                                            <label for="tanggal_kembali">Tanggal Pengembalian</label>
                                            <input type="date" class="form-control" id="tanggal_kembali"
                                                placeholder="Masukkan Tanggal Kembali" name="tanggal_kembali" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-action">
                                <button type="submit" class="btn btn-success">Simpan</button>
                                <button class="btn btn-danger">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

    </div>

    </html>
@endsection
