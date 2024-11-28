<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="mx-3 sidebar-brand-text">Perpus<sup></sup></div>
    </a>

    <!-- Divider -->
    <hr class="my-0 sidebar-divider">

    <!-- Nav Item - Dashboard -->

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->


    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
            aria-controls="collapseTwo">
            <span>Buku</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="py-2 bg-white rounded collapse-inner">
                <h6 class="collapse-header">Buku:</h6>
                <a class="collapse-item" href="{{ route('buku.create') }}">Tambah Buku</a>
                <a class="collapse-item" href="{{ route('buku.index') }}">Data Buku</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true"
            aria-controls="collapseTwo">
            <span>Kategori</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="py-2 bg-white rounded collapse-inner">
                <h6 class="collapse-header">Kategori:</h6>
                <a class="collapse-item" href="{{ route('Kategori.create') }}">Tambah Kategori</a>
                <a class="collapse-item" href="{{ route('Kategori.index') }}">Data Kategori</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <span>Peminjaman</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="py-2 bg-white rounded collapse-inner">
                <h6 class="collapse-header">Peminjaman</h6>
                <a class="collapse-item" href="{{ route('formpinjaman') }}">Tambah peminjam Buku</a>
                <a class="collapse-item" href="{{ route('allpeminjaman') }}">Data Peminjam Buku</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed"  href="#" data-toggle="collapse" data-target="#collapsePage"
             aria-controls="collapsePages">
            <span>Pengembalian</span>
        </a>
        <div id="collapsePage" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="py-2 bg-white rounded collapse-inner">
                <h6 class="collapse-header">Pengembalian:</h6>
                <a class="collapse-item" href="{{ route('pengembalian.all') }}">Data Kembali Buku</a>
                <a class="collapse-item" href="{{ route('pengembalian.create') }}">Tambahkan Data Pengembalian</a>
            </div>
        </div>
    </li>
    <!-- Nav Item - Utilities Collapse Menu -->


    <!-- Divider -->
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="border-0 rounded-circle" id="sidebarToggle"></button>
    </div>

    <!-- Sidebar Message -->


</ul>
<!-- End of Sidebar -->
