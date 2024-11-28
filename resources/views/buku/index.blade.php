@extends('admin.dashboard')
@section('title', 'dashboard')


@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <!-- Button to Create New Record -->
                {{-- <div class="card-title">
                    <a href="{{ route('buku.create') }}" class="btn btn-success btn-sm">Tambahkan Data Buku</a>
                </div> --}}

            </div>
            <!-- /.card-header -->
            <div class="p-0 card-body table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Judul</th>
                            <th>Penulis</th>
                            <th>Penerbit</th>
                            <th>Tahun Terbit</th>
                            <th>Kategori</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bukus as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->Judul }}</td>
                            <td>{{ $item->Penulis }}</td>
                            <td>{{ $item->Penerbit }}</td>
                            <td>{{ $item->Tahun_Terbit }}</td>
                            <td>{{ $item->kategori->Nama_Kategori }}</td>
                            <td>
                                <a href="{{ route('buku.edit', $item->id) }}"
                                    class="btn btn-primary btn-sm">Edit</a>
                                <!-- Tombol hapus jika diperlukan -->
                                <form action="{{ route('buku.destroy', $item->id) }}" method="POST"
                                    style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>
@endsection
