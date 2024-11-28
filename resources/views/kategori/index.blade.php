@extends('admin.dashboard')
@section('title', 'dashboard')


@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <!-- Button to Create New Record -->
                <div class="card-title">
                    <a href="{{ route('Kategori.create') }}" class="btn btn-success btn-sm">Buat Kategori</a>
                </div>

            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive ">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Nama Kategori</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kategori as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->Nama_Kategori }}</td>
                            <td>
                                <a href="{{ route('Kategori.edit', $item->id) }}"
                                    class="btn btn-primary btn-sm">Edit</a>
                                <!-- Tombol hapus jika diperlukan -->
                                <form action="{{ route('Kategori.destroy', $item->id) }}" method="POST"
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
