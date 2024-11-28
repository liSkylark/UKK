@extends('admin.dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Buat Buku Baru</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('buku.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="Judul" class="col-md-4 col-form-label text-md-right">Judul</label>

                            <div class="col-md-6">
                                <input id="Judul" type="text" class="form-control @error('Judul') is-invalid @enderror" name="Judul" value="{{ old('Judul') }}" required autocomplete="Judul" autofocus>

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
                                <input id="Penulis" class="form-control @error('Penulis') is-invalid @enderror" name="Penulis" required>{{ old('Penulis') }}</input>

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
                                <input id="Penerbit" class="form-control @error('Penerbit') is-invalid @enderror" name="Penerbit" required>{{ old('Penerbit') }}</input>

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
                                <input id="Tahun_Terbit" type="date" class="form-control @error('Tahun_Terbit') is-invalid @enderror" name="Tahun_Terbit" required>{{ old('Tahun_Terbit') }}</input>

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
                                <select name="kategori_id" id="kategori_id" class="form-control">
                                    <option value="">Pilih Kategori</option>
                                    @foreach ($kategori as $item)
                                        <option value="{{ $item->id }}">{{ $item->Nama_Kategori }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="mb-0 form-group row">
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
