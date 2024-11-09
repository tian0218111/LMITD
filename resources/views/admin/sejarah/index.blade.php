<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Admin</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Custom styles -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.0/css/dataTables.bootstrap5.css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <!-- Custom Admin Styles -->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <x-sidebarAdmin />
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <x-navbarAdmin />

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Sejarah</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                    </div>
                    <!-- Table -->
                    <!-- Tombol untuk Tambah Data -->
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalTambah">
                        <i class="fa-solid fa-plus"></i> Tambah Sejarah
                    </button>

                    <!-- Content Row -->
                    <div class="row">

                    </div>
                    <!-- Table -->
                    <div class="container">
                        <div class="card mt-3">
                            <div class="card-header text-white bg-secondary mb-10">
                                Data Sejarah
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-hover" id="example">
                                        <thead>
                                            <tr>
                                                <th width="80px">No</th>
                                                <th>Tahun</th>
                                                <th>Unit</th>
                                                <th>Foto</th>
                                                <th>Keterangan</th>
                                                <th width="120px">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($sejarahs as $index => $item)
                                                <!-- Add $index to track numbering -->
                                                <tr>
                                                    <td>{{ $index + 1 }}</td>
                                                    <!-- Show the index number correctly -->
                                                    <td>{{ $item->tahun }}</td>
                                                    <td>{{ $item->unit }}</td>
                                                    <!-- Access item properties correctly -->
                                                    <td><img src="{{ asset('storage/img/sejarah/' . $item->foto) }}"
                                                            width="100%"></td>
                                                    <td>{{ $item->keterangan }}</td>
                                                    <td>
                                                        <a href="{{ route('admin.sejarah.edit', $item->id) }}"
                                                            class="btn btn-warning" data-bs-toggle="modal"
                                                            data-bs-target="#modalUbah{{ $item->id }}">
                                                            <i class="fa-solid fa-pen-to-square"></i>
                                                        </a>
                                                        <a href="#" class="btn btn-danger" data-bs-toggle="modal"
                                                            data-bs-target="#modalHapus{{ $item->id }}">
                                                            <i class="fa-solid fa-trash"></i>
                                                        </a>
                                                    </td>
                                                </tr>

                                                <!-- Modal Ubah -->
                                                <div class="modal fade" id="modalUbah{{ $item->id }}"
                                                    data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">
                                                                    Ubah Data Sejarah</h1>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <form
                                                                action="{{ route('admin.sejarah.update', $item->id) }}"
                                                                method="POST" enctype="multipart/form-data">
                                                                @csrf
                                                                @method('PUT')

                                                                <div class="modal-body">
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Tahun</label>
                                                                        <input type="text" class="form-control"
                                                                            name="tahun" value="{{ $item->tahun }}"
                                                                            autocomplete="off">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Foto</label>
                                                                        <input type="file" class="form-control"
                                                                        name="foto">
                                                                        <small class="form-text text-muted">Kosongkan
                                                                            jika tidak ingin mengganti foto</small>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label class="form-label">Unit</label>
                                                                            <input type="text" class="form-control"
                                                                                name="unit" value="{{ $item->unit }}"
                                                                                autocomplete="off">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                        <label class="form-label">Keterangan</label>
                                                                        <textarea name="keterangan" rows="6" class="form-control">{{ $item->keterangan }}</textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-danger"
                                                                        data-bs-dismiss="modal">Keluar</button>
                                                                    <button type="submit"
                                                                        class="btn btn-primary">Ubah</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Modal Hapus -->
                                                <div class="modal fade" id="modalHapus{{ $item->id }}"
                                                    tabindex="-1" aria-labelledby="modalHapusLabel"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="modalHapusLabel">
                                                                    Konfirmasi Penghapusan</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal"
                                                                    aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                Apakah Anda yakin ingin menghapus layanan
                                                                <strong>{{ $item->unit }}</strong>?
                                                            </div>
                                                            <div class="modal-footer">
                                                                <form
                                                                    action="{{ route('admin.sejarah.destroy', $item->id) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-bs-dismiss="modal">Batal</button>
                                                                    <button type="submit"
                                                                        class="btn btn-danger">Hapus</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal Tambah -->
                    <div class="modal fade" id="modalTambah" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Data Sejarah</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <!-- Form untuk tambah data sejarah -->
                                <form action="{{ route('admin.sejarah.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label class="form-label">Tahun</label>
                                            <input type="text" class="form-control" name="tahun" required
                                                autocomplete="off">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Foto</label>
                                            <input type="file" class="form-control" name="foto" required>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Unit</label>
                                            <input type="text" class="form-control" name="unit" required
                                                autocomplete="off">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Keterangan</label>
                                            <textarea name="keterangan" rows="6" class="form-control" required></textarea>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Keluar</button>
                                        <button type="submit" class="btn btn-primary">Tambah</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Akhir Modal Tambah -->
                </div>
            </div>
            <x-footerAdmin />
        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Bootstrap core JavaScript-->
        <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

        <!-- Core plugin JavaScript-->
        <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

        <!-- Custom scripts for all pages-->
        <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

        <!-- Page level plugins -->
        <script src="{{ asset('vendor/chart.js/Chart.min.js') }}"></script>

        <!-- Page level custom scripts -->
        <script src="{{ asset('js/demo/chart-area-demo.js') }}"></script>
        <script src="{{ asset('js/demo/chart-pie-demo.js') }}"></script>
        <script src="https://cdn.datatables.net/2.0.0/js/dataTables.js"></script>
        <script src="https://cdn.datatables.net/2.0.0/js/dataTables.bootstrap5.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#example').DataTable();
            });
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
</body>

</html>
