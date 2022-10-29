<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/home">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Serumpun Radio <sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>News</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Kategori
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a href="{{ url('/kategori') }}" class="nav-link collapsed">
            <i class="fas fa-fw fa-cog"></i>
            <span>Berita</span>
        </a>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a href="{{ url('/show-all-product') }}" class="nav-link collapsed">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Kategori</span>
        </a>
    </li>

    <li class="nav-item">
        <a href="{{ url('/show-all-product') }}" class="nav-link collapsed">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Krew</span>
        </a>
    </li>

    {{-- <li class="nav-item">
        <a href="{{ url('/show-all-product') }}" class="nav-link collapsed">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Musik</span>
        </a>
    </li> --}}

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        OTHER
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ url('/home') }}">
            <i class="fas fa-fw fa-folder"></i>
            <span>Informasi</span>
        </a>
    </li>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Pengaturan</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        {{-- <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-table"></i>
            <span>Keluar</span></a> --}}
        <a class="nav-link" href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            <i class="fas fa-fw fa-table"></i>
            <span>Keluar</span>
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    <!-- Sidebar Message -->
    <div class="sidebar-card d-none d-lg-flex">
        <img class="sidebar-card-illustration mb-2" src="{{ asset('startbootstrap-sb-admin-2') }}/img/undraw_rocket.svg"
            alt="...">
        <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!
        </p>
        <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
    </div>

</ul>
