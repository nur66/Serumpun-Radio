<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        
        @include('admin.component.Navbar')

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            </div>

            <!-- Card -->
            <div class="row">

                <!-- Politik -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Politik</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $data['politik'] }}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Olahraga -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                        Olahraga</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $data['olahraga'] }}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Ekonomi -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-info shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                        Ekonomi</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $data['ekonomi'] }}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Musik -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-warning shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                        Musik</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $data['musik'] }}
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-duotone fa-star text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Content Row -->

            <div class="row">
                <div class="card shadow mb-4 col-xl-12 col-md-12 col-sm-12 mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Daftar Berita</h6>
                    </div>

                    <div class="row justify-content-end my-3 mr-3">
                        <form action="/show-all-transaction/search">
                            <div class="input-group justify-content-end">
                                <input type="text" class="form-control" placeholder="Search..." name="search"
                                    value="{{ request('search') }}">
                                <button class="btn btn-primary" type="submit">Search</button>
                            </div>
                        </form>
                    </div>

                    <div class="mx-3">
                        <table class="table table-striped table-bordered">
                            <thead class="text-center">
                                <tr>
                                    <th>No</th>
                                    <th>Judul Berita</th>
                                    <th>Kategori</th>
                                    <th>Tipe</th>
                                    <th>Tanggal</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tfoot class="text-center">
                                <tr>
                                    <th>No</th>
                                    <th>Judul Berita</th>
                                    <th>Kategori</th>
                                    <th>Tipe</th>
                                    <th>Tanggal</th>
                                    <th>Aksi</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php $no = 1; ?>
                                @foreach ($data['berita'] as $item)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $item->judul }}</td>
                                    <td>{{ $item->kategori }}</td>
                                    <td>{{ $item->tipe }}</td>
                                    <td>{{ $item->created_at }}</td>
                                    <td class="text-center">
                                        &nbsp;
                                        {{-- <a href="{{ url('/delete-invoice') }}/{{ $item['id'] }}" --}}
                                        <a href="{{ url('/delete-invoice') }}/" class="btn btn-danger btn-sm px-3"
                                            onclick="return confirm('Apakah kamu yakin ingin menghapus invoice ini?');">Hapus</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- Footer -->
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Serumpun Radio</span>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->

</div>
