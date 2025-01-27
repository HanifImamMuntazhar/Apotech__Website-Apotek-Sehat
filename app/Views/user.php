<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="APOTECH - Solusi Kesehatan Anda" />
    <meta name="author" content="APOTECH" />
    <title>APOTECH - Halaman User</title>
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
            height: 60vh;
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
        /* Custom style untuk tombol logout */
        .btn-logout {
            background-color: #dc3545; /* Warna merah */
            color: white;
            border: none;
        }
        .btn-logout:hover {
            background-color: #c82333; /* Warna merah lebih gelap saat hover */
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
                    <!-- Tombol Login Admin (Nonaktif) -->
                    <li class="nav-item"><a class="nav-link" href="#" id="adminLoginLink">Login Admin</a></li>
                </ul>
                <!-- Tombol Logout di Navbar -->
                <a class="btn btn-logout btn-sm ms-3" href="/user/logout">Logout</a>
                <a class="btn btn-success btn-sm ms-3" href="/daftar-obat">Lihat Daftar Obat</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="hero">
        <div class="container">
            <h1>Selamat Datang, Pengguna!</h1>
            <h2>APOTECH - Solusi Kesehatan Anda</h2>
            <!-- Hapus tombol Login dan hanya tampilkan tombol Dashboard -->
            <a class="btn btn-primary" href="/user/dashboard">Dashboard</a>
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
</body>
</html>