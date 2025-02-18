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
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f9f9f9;
            overflow-x: hidden;
        }
        .navbar {
            background: linear-gradient(90deg, #00c6ff, #0072ff);
        }
        .navbar-brand {
            font-weight: bold;
            font-size: 1.5rem;
            color: white !important;
        }
        .nav-link {
            color: white !important;
            font-weight: 500;
            transition: color 0.3s;
        }
        .nav-link:hover {
            color: #d1eaff !important;
        }
        .hero {
            background: linear-gradient(90deg, #0072ff, #00c6ff);
            color: white;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }
        .hero h1 {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 20px;
        }
        .hero h2 {
            font-size: 1.5rem;
            font-weight: 300;
        }
        .hero .btn {
            margin-top: 30px;
            font-size: 1.2rem;
            padding: 10px 30px;
            border-radius: 50px;
            background-color: white;
            color: #0072ff;
            transition: all 0.3s ease-in-out;
        }
        .hero .btn:hover {
            background-color: #0056d2;
            color: white;
        }
        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 30px;
        }
        .about-section {
            padding: 60px 0;
            background-color: #f1f1f1;
        }
        .projects-section {
            padding: 60px 0;
        }
        .card {
            border: none;
            transition: transform 0.3s;
        }
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }
        .footer {
            background-color: #0072ff;
            color: white;
            padding: 20px 0;
            text-align: center;
        }
        .footer a {
            color: #d1eaff;
            text-decoration: none;
        }
        .footer a:hover {
            color: white;
        }
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

    <!-- Modal Login -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Login Member</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('auth/userAuth/processLogin') ?>" method="post">
                        <div class="mb-3">
                            <label for="loginUsername" class="form-label">Username</label>
                            <input type="text" class="form-control" id="loginUsername" name="username" required>
                        </div>
                        <div class="mb-3">
                            <label for="loginPassword" class="form-label">Password</label>
                            <input type="password" class="form-control" id="loginPassword" name="password" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Daftar -->
    <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="registerModalLabel">Daftar Member Baru</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('auth/processRegister') ?>" method="post">
                        <div class="mb-3">
                            <label for="registerUsername" class="form-label">Username</label>
                            <input type="text" class="form-control" id="registerUsername" name="username" required>
                        </div>
                        <div class="mb-3">
                            <label for="registerPassword" class="form-label">Password</label>
                            <input type="password" class="form-control" id="registerPassword" name="password" required>
                        </div>
                        <button type="submit" class="btn btn-success">Daftar</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <p>Sudah punya akun? <a href="#" data-bs-toggle="modal" data-bs-target="#loginModal" data-bs-dismiss="modal">Login di sini</a></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Login Admin -->
    <div class="modal fade" id="adminLoginModal" tabindex="-1" aria-labelledby="adminLoginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="adminLoginModalLabel">Login Admin</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php if (session()->getFlashdata('error')): ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <?= session()->getFlashdata('error'); ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>
                    <form action="<?= base_url('/admin/processLogin') ?>" method="post">
                        <div class="mb-3">
                            <label for="adminUsername" class="form-label">Username</label>
                            <input type="text" class="form-control" id="adminUsername" name="username" required>
                        </div>
                        <div class="mb-3">
                            <label for="adminPassword" class="form-label">Password</label>
                            <input type="password" class="form-control" id="adminPassword" name="password" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Error -->
    <div class="modal fade" id="errorModal" tabindex="-1" aria-labelledby="errorModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="errorModalLabel">Error</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p id="errorMessage"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

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