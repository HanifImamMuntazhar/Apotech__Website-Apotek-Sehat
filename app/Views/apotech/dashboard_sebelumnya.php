<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="APOTECH - Solusi Kesehatan Anda" />
    <meta name="author" content="APOTECH" />
    <title>APOTECH - Inovasi Hidup Sehat</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons -->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        /* Custom CSS Anda */
    </style>
</head>
<body id="page-top">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#page-top">APOTECH</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars text-white"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#projects">Konsultasi Dokter</a></li>
                    <li class="nav-item"><a class="nav-link" href="#signup" id="adminLoginLink">Login Admin</a></li>
                </ul>
                <a class="btn btn-success btn-sm ms-3" href="/daftar-obat">Lihat Daftar Obat</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="hero">
        <div class="container">
            <h1>APOTECH</h1>
            <h2>Inovasi untuk Hidup Sehat</h2>
            <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a>
        </div>
    </header>

    <!-- About Section -->
    <section class="about-section text-center" id="about">
        <div class="container">
            <h2 class="section-title">Tentang APOTECH</h2>
            <p class="lead">APOTECH adalah solusi kesehatan modern yang menggabungkan teknologi terkini untuk memberikan pelayanan kesehatan yang cepat, terpercaya, dan mudah diakses.</p>
            <img src="<?= base_url('images/Apotech.png') ?>" class="img-fluid mt-4" alt="Illustration">
        </div>
    </section>

    <!-- Projects Section -->
    <section class="projects-section bg-light" id="projects">
        <div class="container">
            <h2 class="section-title text-center">Konsultasi Dokter</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="<?= base_url('images/Konsultasi_online.jpg') ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Konsultasi Online</h5>
                            <p class="card-text">Bicarakan masalah kesehatan Anda dengan dokter terbaik melalui layanan online kami.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="<?= base_url('images/Resep_digital.jpg') ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Resep Digital</h5>
                            <p class="card-text">Dapatkan resep dokter langsung di aplikasi kami dan tebus obat dengan mudah.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="<?= base_url('images/Pemeriksaan_langsung.jpg') ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Pemeriksaan Langsung</h5>
                            <p class="card-text">Jadwalkan pertemuan langsung dengan dokter ahli di fasilitas kesehatan terdekat.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2025 APOTECH. Semua Hak Dilindungi.</p>
            <a href="#page-top">Kembali ke Atas</a>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('adminLoginLink').addEventListener('click', function (e) {
            e.preventDefault();
            const adminLoginModal = new bootstrap.Modal(document.getElementById('adminLoginModal'));
            adminLoginModal.show();
        });

        <?php if (session()->getFlashdata('error')): ?>
            document.addEventListener('DOMContentLoaded', function () {
                const errorModal = new bootstrap.Modal(document.getElementById('errorModal'));
                document.getElementById('errorMessage').innerText = "<?= session()->getFlashdata('error'); ?>";
                errorModal.show();
            });
        <?php endif; ?>
    </script>
</body>
</html>