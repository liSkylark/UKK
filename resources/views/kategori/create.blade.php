@extends('admin.dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Buat Kategori</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('Kategori.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="Nama_Kategori" class="col-md-4 col-form-label text-md-right">Nama Kategori</label>

                            <div class="col-md-6">
                                <input id="Nama_Kategori" type="text" class="form-control @error('Nama_Kategori') is-invalid @enderror" name="Nama_Kategori" value="{{ old('Nama_Kategori') }}" required autocomplete="Nama_Kategori" autofocus>

                                @error('Nama Kategori')
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
