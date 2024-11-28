@extends('admin.dashboard')
@section('title', 'dashboard')

@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Form Peminjaman</div>
            </div>
            <form action="{{ route('pengembalian.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="form-group">
                                <label for="peminjaman_id">Nama Peminjam</label>
                                <select class="form-control" name="peminjaman_id" id="peminjaman_id">
                                    <option disabledvalue>Pilih Peminjaman</option>
                                    @foreach ($peminjamans as $item)
                                        <option value="{{ $item->id }}">{{ $item->user->name }}</option>
                                    @endforeach
                                </select>
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

@endsection
