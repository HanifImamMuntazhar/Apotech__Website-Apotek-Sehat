<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tables Admin - APOTECH</title>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
        <!-- DataTables CSS -->
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <!-- Custom CSS -->
        <link href="<?= base_url('css/styless.css') ?>" rel="stylesheet" />
        <!-- Font Awesome -->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="dashboard">Dashboard</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Data Admin</div>
                            <a class="nav-link" href="chart">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Charts
                            </a>
                            <a class="nav-link" href="dashboard">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tables
                            </a>
                        </div>
                    </div>
                    <div class="text-center">
                                <a href="/" class="btn btn-primary mt-3">Kembali ke Beranda</a>
                            </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Admin Apotech
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Data Obat APOTECH</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="dashboard">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tables Obat</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                Data tabel ini menampilkan keseluruhan daftar Obat yang tersedia pada Apotech, jika anda mencari Obat yang tidak tersedia silahkan
                                <a href="https://wa.me/6281316742795" target="_blank" class="btn btn-success">
                                    Hubungi via WhatsApp
                                </a>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data Daftar Obat APOTECH
                            </div>
                            <div class="card-body">
                                <!-- Wrapper untuk tombol -->
                            <div class="d-flex justify-content-end">
                                <!-- Tombol untuk menambahkan obat -->
                                <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addObatModal">
                                    Tambah Daftar Obat
                                </button>
                            </div>
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nama Obat</th>
                                            <th>Deskripsi</th>
                                            <th>Indikasi</th>
                                            <th>Kontraindikasi</th>
                                            <th>Efek Samping</th>
                                            <th>Golongan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($obat as $item): ?>
                                        <tr>
                                            <td><?= $item['id'] ?></td>
                                            <td><?= $item['nama_obat'] ?></td>
                                            <td><?= $item['deskripsi'] ?></td>
                                            <td><?= $item['indikasi'] ?></td>
                                            <td><?= $item['kontraindikasi'] ?></td>
                                            <td><?= $item['efek_samping'] ?></td>
                                            <td><?= $item['golongan'] ?></td>
                                            <td>
                                            <button class="btn btn-warning btn-sm" onclick="editObat(<?= $item['id'] ?>)">Edit</button>
                                            <button class="btn btn-danger btn-sm" onclick="deleteObat(<?= $item['id'] ?>, '<?= $item['nama_obat'] ?>')">Hapus</button>
                                        </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Website APOTECH 2025</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>

        <!-- Modal untuk menambahkan obat -->
        <div class="modal fade" id="addObatModal" tabindex="-1" aria-labelledby="addObatModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addObatModalLabel">Tambah Obat</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Form untuk menambahkan obat -->
                        <form id="addObatForm">
                            <div class="mb-3">
                                <label for="nama_obat" class="form-label">Nama Obat</label>
                                <input type="text" class="form-control" id="nama_obat" name="nama_obat" required>
                            </div>
                            <div class="mb-3">
                                <label for="deskripsi" class="form-label">Deskripsi</label>
                                <textarea class="form-control" id="deskripsi" name="deskripsi" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="indikasi" class="form-label">Indikasi</label>
                                <textarea class="form-control" id="indikasi" name="indikasi" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="kontraindikasi" class="form-label">Kontraindikasi</label>
                                <textarea class="form-control" id="kontraindikasi" name="kontraindikasi" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="efek_samping" class="form-label">Efek Samping</label>
                                <textarea class="form-control" id="efek_samping" name="efek_samping" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="golongan" class="form-label">Golongan</label>
                                <input type="text" class="form-control" id="golongan" name="golongan" required>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="button" class="btn btn-primary" onclick="saveObat()">Simpan</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal untuk mengedit obat -->
        <div class="modal fade" id="editObatModal" tabindex="-1" aria-labelledby="editObatModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editObatModalLabel">Edit Obat</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Form untuk mengedit obat -->
                        <form id="editObatForm">
                            <input type="hidden" id="edit_id" name="id">
                            <div class="mb-3">
                                <label for="edit_nama_obat" class="form-label">Nama Obat</label>
                                <input type="text" class="form-control" id="edit_nama_obat" name="nama_obat" required>
                            </div>
                            <div class="mb-3">
                                <label for="edit_deskripsi" class="form-label">Deskripsi</label>
                                <textarea class="form-control" id="edit_deskripsi" name="deskripsi" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="edit_indikasi" class="form-label">Indikasi</label>
                                <textarea class="form-control" id="edit_indikasi" name="indikasi" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="edit_kontraindikasi" class="form-label">Kontraindikasi</label>
                                <textarea class="form-control" id="edit_kontraindikasi" name="kontraindikasi" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="edit_efek_samping" class="form-label">Efek Samping</label>
                                <textarea class="form-control" id="edit_efek_samping" name="efek_samping" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="edit_golongan" class="form-label">Golongan</label>
                                <input type="text" class="form-control" id="edit_golongan" name="golongan" required>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="button" class="btn btn-primary" onclick="updateObat()">Simpan</button>
                    </div>
                </div>
            </div>
        </div>


        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <!-- DataTables JS -->
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <!-- Custom Scripts -->
        <script src="<?= base_url('js/scripts.js') ?>"></script>
        <script src="<?= base_url('js/datatables-simple-demo.js') ?>"></script>
        <!-- Script untuk menyimpan obat -->
        <script>
            // Fungsi untuk menyimpan obat
            function saveObat() {
                $.ajax({
                    url: '/admin/addObat', // URL untuk menyimpan data
                    type: 'POST',
                    data: $('#addObatForm').serialize(), // Serialize form data
                    success: function(response) {
                        if (response.status === 'success') {
                            alert(response.message); // Tampilkan pesan sukses
                            location.reload(); // Refresh halaman setelah berhasil
                        } else {
                            alert('Terjadi kesalahan: ' + response.errors); // Tampilkan pesan error
                        }
                    },
                    error: function(xhr) {
                        alert('Terjadi kesalahan: ' + xhr.responseText); // Tampilkan pesan error
                    }
                });
            }
            // Fungsi untuk menghapus obat dengan konfirmasi
            function deleteObat(id, namaObat) {
                if (confirm("Apakah Anda yakin untuk menghapus Obat '" + namaObat + "'?")) {
                    $.ajax({
                        url: '/admin/deleteObat/' + id, // URL untuk menghapus data
                        type: 'POST',
                        success: function(response) {
                            if (response.status === 'success') {
                                alert(response.message); // Tampilkan pesan sukses
                                location.reload(); // Refresh halaman setelah berhasil
                            } else {
                                alert('Terjadi kesalahan: ' + response.errors); // Tampilkan pesan error
                            }
                        },
                        error: function(xhr) {
                            alert('Terjadi kesalahan: ' + xhr.responseText); // Tampilkan pesan error
                        }
                    });
                }
            }

            // Fungsi untuk mengambil data obat berdasarkan ID dan menampilkan di modal edit
            function editObat(id) {
                $.ajax({
                    url: '/admin/getObat/' + id, // Endpoint untuk mendapatkan data obat
                    type: 'GET',
                    success: function(response) {
                        if (response) {
                            // Isi form modal edit dengan data dari server
                            $('#edit_id').val(response.id);
                            $('#edit_nama_obat').val(response.nama_obat);
                            $('#edit_deskripsi').val(response.deskripsi);
                            $('#edit_indikasi').val(response.indikasi);
                            $('#edit_kontraindikasi').val(response.kontraindikasi);
                            $('#edit_efek_samping').val(response.efek_samping);
                            $('#edit_golongan').val(response.golongan);

                            // Tampilkan modal edit
                            $('#editObatModal').modal('show');
                        } else {
                            alert('Data tidak ditemukan.');
                        }
                    },
                    error: function(xhr) {
                        alert('Terjadi kesalahan: ' + xhr.responseText);
                    }
                });
            }

            // Fungsi untuk memperbarui data obat
            function updateObat() {
                $.ajax({
                    url: '/admin/updateObat/' + $('#edit_id').val(), // Endpoint untuk memperbarui data obat
                    type: 'POST',
                    data: $('#editObatForm').serialize(), // Kirim data form
                    success: function(response) {
                        if (response.status === 'success') {
                            alert(response.message); // Tampilkan pesan sukses
                            location.reload(); // Refresh halaman setelah berhasil
                        } else {
                            alert('Terjadi kesalahan: ' + response.errors); // Tampilkan pesan error
                        }
                    },
                    error: function(xhr) {
                        alert('Terjadi kesalahan: ' + xhr.responseText); // Tampilkan pesan error
                    }
                });
            }


        </script>
        
    </body>
</html>