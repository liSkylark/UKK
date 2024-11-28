@extends('admin.dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data Buku</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('buku.update',$buku) }}" enctype="multipart/form-data">
                        @method('patch')
                        @csrf

                        <div class="form-group row">
                            <label for="Judul" class="col-md-4 col-form-label text-md-right">Judul</label>

                            <div class="col-md-6">
                                <input id="Judul" type="text" class="form-control @error('Judul') is-invalid @enderror" name="Judul" value="{{ $buku->Judul}}" required autocomplete="Judul" autofocus>

                                @error('Judul')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Penulis" class="col-md-4 col-form-label text-md-right">Penulis</label>

                            <div class="col-md-6">
                                <input id="Penulis" type="text" class="form-control @error('Penulis') is-invalid @enderror" name="Penulis" value="{{ $buku->Penulis }}" required autocomplete="Penulis" autofocus>

                                @error('Penulis')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Penerbit" class="col-md-4 col-form-label text-md-right">Penerbit</label>

                            <div class="col-md-6">
                                <input id="Penerbit" type="text" class="form-control @error('Penerbit') is-invalid @enderror" name="Penerbit" value="{{ $buku->Penerbit }}" required autocomplete="Penerbit" autofocus>

                                @error('Penerbit')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Tahun_Terbit" class="col-md-4 col-form-label text-md-right">Tahun Terbit</label>

                            <div class="col-md-6">
                                <input id="Tahun_Terbit" type="date" class="form-control @error('Tahun_Terbit') is-invalid @enderror" name="Tahun_Terbit" value="{{ $buku->Tahun_Terbit }}" required autocomplete="Tahun_Terbit" autofocus>

                                @error('Tahun_Terbit')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kategori_id" class="col-md-4 col-form-label text-md-right">Kategori</label>

                            <div class="col-md-6">
                                <input id="kategori_id" type="text" class="form-control @error('kategori_id') is-invalid @enderror" name="kategori_id" value="{{ $buku->kategori_id }}" required autocomplete="kategori_id" autofocus>

                                @error('kategori_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Simpan
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
