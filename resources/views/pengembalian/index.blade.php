@extends('admin.dashboard')
@section('title', 'dashboard')


@section('content')

    <body>
        <div class="wrapper">

            <div class="main-panel">


                <div class="container">
                    <div class="page-inner">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Daftar Buku</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <div id="basic_datatables_wrapper"
                                                class="dataTables_wrapper container-fluid dt-bootstrap-4">
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-6">
                                                        <div class="dataTables_length" id="basic_datatables_length">
                                                            <label>Show
                                                                <select name="basic_datatables_length"
                                                                    aria-controls="basic-datatables"
                                                                    class="form-control form-control-sm">
                                                                    <option value="10">10</option>
                                                                    <option value="25">25</option>
                                                                    <option value="50">50</option>
                                                                    <option value="100">100</option>
                                                                </select>
                                                                entries
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6">
                                                        <div class="dataTables_filter" id="basic-datatables_filter">
                                                            <a href="{{ route('pengembalian.generate') }}"
                                                                class="btn btn-success">Cetak</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <table id="basic-datatables"
                                                        class="table display table-striped table-hover dataTable"
                                                        role="grid" aria-describedby="basic-datatables_info">
                                                        <thead>
                                                            <tr role="row">
                                                                <th class="sorting" tabindex="0"
                                                                    aria-controls="multi-filter-select" rowspan="1"
                                                                    colspan="1" aria-sort="ascending"
                                                                    aria-label="Nama Jurusan: active to sort column descending">
                                                                    Nama Peminjam</th>
                                                                <th class="sorting" tabindex="0"
                                                                    aria-controls="multi-filter-select" rowspan="1"
                                                                    colspan="1" aria-sort="ascending"
                                                                    aria-label="jurusan: active to sort column">Judul Buku
                                                                </th>
                                                                <th class="sorting" tabindex="0"
                                                                    aria-controls="multi-filter-select" rowspan="1"
                                                                    colspan="1" aria-sort="ascending"
                                                                    aria-label="kategori: active to sort column">Tanggal
                                                                    Pengembalian</th>
                                                                <th class="sorting" tabindex="0"
                                                                    aria-controls="multi-filter-select" rowspan="1"
                                                                    colspan="1" aria-sort="ascending"
                                                                    aria-label="status: active to sort column">Status
                                                                    Pengembalian</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($pengembalian as $item)
                                                                <tr role="row">
                                                                    <td>{{ $item->peminjaman->user->name }}</td>
                                                                    <td>{{ $item->peminjaman->buku->Judul }}</td>
                                                                    <td>{{ $item->tanggal_pengembalian }}</td>
                                                                    <td>{{ $item->status }}</td>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12 col-md-5">
                                                    <div class="dataTables_info" id="basic-datatables_info"
                                                        role="status" aria-live="polite">Showing 1 to 10</div>
                                                </div>
                                                <div class="col-sm-12 col-md-7">
                                                    {{-- <div class="dataTables_paginate paging_simple_numbers" id="basic-datatables_paginate">
                                        <ul class="pagination">
                                            <li class="paginate_button page-item previous" id="basic-datatables_previous">
                                                <a href="#" aria-controls="basic-datatables" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                                            </li>
                                            <li class="paginate_button page-item">
                                                <a href="#" aria-controls="basic-datatables" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                                            </li>
                                            <li class="paginate_button page-item next" id="basic-datatables_next">
                                                <a href="#" aria-controls="basic-datatables" data-dt-idx="2" tabindex="0" class="page-link">Next</a>
                                            </li>
                                        </ul>
                                    </div> --}}
                                                    <div class="demo">
                                                        <ul class="pagination pg-primary">
                                                            <li class="page-item">
                                                                <a class="page-link" href="#"
                                                                    aria-label="Previous">
                                                                    <span aria-hidden="true">&laquo;</span>
                                                                    <span class="sr-only">Previous</span>
                                                                </a>
                                                            </li>
                                                            <li class="page-item active">
                                                                <a class="page-link" href="#">1</a>
                                                            </li>
                                                            <li class="page-item">
                                                                <a class="page-link" href="#">2</a>
                                                            </li>
                                                            <li class="page-item">
                                                                <a class="page-link" href="#">3</a>
                                                            </li>
                                                            <li class="page-item">
                                                                <a class="page-link" href="#" aria-label="Next">
                                                                    <span aria-hidden="true">&raquo;</span>
                                                                    <span class="sr-only">Next</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
@endsection
