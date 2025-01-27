<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "apotech";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Query untuk mengambil data obat
$sql = "SELECT * FROM obat";
$result = $conn->query($sql);

// Cek apakah ada data yang ditemukan
if ($result->num_rows > 0) {
    // Data ditemukan
} else {
    echo "Tidak ada data obat.";
}

// Menutup koneksi
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Obat - APOTECH</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Nunito', sans-serif;
        }
        .hero {
            background: linear-gradient(90deg, #00c6ff, #0072ff);
            color: white;
            padding: 50px 0;
        }
        .hero h1 {
            font-size: 2.5rem;
            font-weight: bold;
        }
        .table-container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .btn-primary {
            background-color: #0072ff;
            border: none;
        }
        .btn-primary:hover {
            background-color: #0056d2;
        }
        .table th {
            background-color: #0072ff;
            color: white;
        }
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #f9f9f9;
        }
        .footer {
            background-color: #0072ff;
            color: white;
            padding: 20px 0;
            text-align: center;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <!-- Hero Section -->
    <section class="hero text-center">
        <div class="container">
            <h1>Daftar Obat di APOTECH</h1>
            <p class="lead">Temukan informasi lengkap tentang obat-obatan kami untuk mendukung kesehatan Anda.</p>
        </div>
    </section>

    <!-- Table Section -->
    <div class="container mt-5">
        <div class="table-container">
            <h2 class="text-center mb-4">Daftar Obat</h2>
            <table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Obat</th>
            <th>Deskripsi</th>
            <th>Indikasi</th>
            <th>Kontraindikasi</th>
            <th>Efek Samping</th>
            <th>Golongan</th>
        </tr>
    </thead>
    <tbody>
        <?php if ($result->num_rows > 0) : ?>
            <?php $no = 1; // Menambahkan variabel untuk nomor urut ?>
            <?php while ($row = $result->fetch_assoc()) : ?>
                <tr>
                    <td><?= $no++; ?></td> <!-- Menampilkan nomor urut -->
                    <td><?= $row['nama_obat']; ?></td>
                    <td><?= $row['deskripsi']; ?></td>
                    <td><?= $row['indikasi']; ?></td>
                    <td><?= $row['kontraindikasi']; ?></td>
                    <td><?= $row['efek_samping']; ?></td>
                    <td><?= $row['golongan']; ?></td>
                </tr>
            <?php endwhile; ?>
        <?php else : ?>
            <tr>
                <td colspan="7" class="text-center">Tidak ada data obat.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

                </tbody>
            </table>
                <div class="text-center">
                     <a href="/" class="btn btn-primary mt-3">Kembali ke Beranda</a>
                </div>
        </div>
    </div>

    <!-- Pie Chart Section -->
    <section class="pie-chart-section bg-light py-5" id="pie-chart">
        <div class="container px-4 px-lg-5">
            <h2 class="text-center mb-5">Distribusi Golongan Obat</h2>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <canvas id="myPieChart"></canvas>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        fetch('<?= base_url('pie/getChartData') ?>') // Endpoint untuk mengambil data golongan
            .then(response => response.json())
            .then(data => {
                const chartData = {
                    labels: data.labels, // Label golongan (misal: Analgesik, Antibiotik, dll)
                    datasets: [{
                        data: data.values, // Jumlah obat per golongan
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.7)', // Warna untuk golongan 1
                            'rgba(54, 162, 235, 0.7)', // Warna untuk golongan 2
                            'rgba(255, 206, 86, 0.7)', // Warna untuk golongan 3
                            'rgba(75, 192, 192, 0.7)', // Warna untuk golongan 4
                            'rgba(153, 102, 255, 0.7)' // Warna untuk golongan 5
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)'
                        ],
                        borderWidth: 1
                    }]
                };

                const config = {
                    type: 'pie',
                    data: chartData,
                    options: {
                        responsive: true,
                        plugins: {
                            legend: {
                                position: 'top',
                            },
                            title: {
                                display: true,
                                text: 'Distribusi Golongan Obat'
                            }
                        }
                    }
                };

                const myPieChart = new Chart(
                    document.getElementById('myPieChart'),
                    config
                );
            })
            .catch(error => console.error('Error fetching chart data:', error));
    });
    </script>

    <!-- Footer Section -->
    <footer class="footer mt-5">
        <div class="container">
            <p>&copy; 2025 APOTECH - Semua Hak Dilindungi. Dibangun dengan ❤ untuk kesehatan Anda.</p>
        </div>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
