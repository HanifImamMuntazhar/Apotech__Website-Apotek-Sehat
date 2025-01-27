-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 27 Jan 2025 pada 07.19
-- Versi server: 11.4.3-MariaDB-log
-- Versi PHP: 8.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apotech`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$nqVWK48lZnI2fT/FGE9OV.n5gEhrjBkG2GqYWBSmhtQso.SvNzXQu', '2025-01-26 10:33:24', '2025-01-26 10:33:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2025-01-25-064528', 'App\\Database\\Migrations\\CreateUsersTable', 'default', 'App', 1737887603, 1),
(2, '2025-01-25-064602', 'App\\Database\\Migrations\\CreateObatTable', 'default', 'App', 1737887604, 1),
(3, '2025-01-25-100658', 'App\\Database\\Migrations\\CreateAdminTable', 'default', 'App', 1737887604, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `obat`
--

CREATE TABLE `obat` (
  `id` int(11) UNSIGNED NOT NULL,
  `nama_obat` varchar(255) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `indikasi` text DEFAULT NULL,
  `kontraindikasi` text DEFAULT NULL,
  `efek_samping` text DEFAULT NULL,
  `golongan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `obat`
--

INSERT INTO `obat` (`id`, `nama_obat`, `deskripsi`, `indikasi`, `kontraindikasi`, `efek_samping`, `golongan`) VALUES
(1, 'Paracetamol', 'Obat pereda nyeri dan demam', 'Demam, sakit kepala', 'Alergi terhadap paracetamol', 'Mual, ruam kulit', 'Analgesik'),
(2, 'Ibuprofen', 'Obat antiinflamasi nonsteroid', 'Nyeri, radang, demam', 'Tukak lambung', 'Gangguan pencernaan, pusing', 'Analgesik'),
(3, 'Amoxicillin', 'Antibiotik untuk infeksi bakteri', 'Infeksi saluran pernapasan', 'Alergi terhadap penisilin', 'Diare, ruam kulit', 'Antibiotik'),
(4, 'Cetirizine', 'Obat antihistamin', 'Alergi, gatal-gatal', 'Gangguan ginjal', 'Kantuk, mulut kering', 'Antihistamin'),
(5, 'Simvastatin', 'Menurunkan kolesterol', 'Kolesterol tinggi', 'Gangguan hati', 'Nyeri otot, gangguan pencernaan', 'Statin'),
(6, 'Ranitidine', 'Obat antasida', 'Asam lambung, tukak lambung', 'Porfiria akut', 'Sakit kepala, sembelit', 'Antasida'),
(7, 'Salbutamol', 'Obat bronkodilator', 'Asma, bronkitis', 'Gangguan jantung', 'Tremor, palpitasi', 'Bronkodilator'),
(8, 'Metformin', 'Obat antidiabetes', 'Diabetes tipe 2', 'Gagal ginjal', 'Mual, diare', 'Antidiabetes'),
(9, 'Omeprazole', 'Obat penghambat asam lambung', 'GERD, tukak lambung', 'Alergi terhadap omeprazole', 'Sakit kepala, gangguan pencernaan', 'Antasida'),
(10, 'Loratadine', 'Obat antihistamin', 'Alergi, gatal-gatal', 'Gangguan hati', 'Kantuk ringan', 'Antihistamin'),
(11, 'Diclofenac', 'Obat antiinflamasi nonsteroid', 'Nyeri sendi, radang', 'Tukak lambung', 'Sakit kepala, mual', 'Analgesik'),
(12, 'Aspirin', 'Obat pereda nyeri dan demam', 'Nyeri, demam, pencegahan stroke', 'Gangguan pembekuan darah', 'Gangguan pencernaan, perdarahan', 'Analgesik'),
(13, 'Ciprofloxacin', 'Antibiotik untuk infeksi bakteri', 'Infeksi saluran kemih', 'Gangguan tendon', 'Mual, diare', 'Antibiotik'),
(14, 'Furosemide', 'Obat diuretik', 'Edema, hipertensi', 'Dehidrasi', 'Pusing, gangguan elektrolit', 'Diuretik'),
(15, 'Clopidogrel', 'Obat antiplatelet', 'Pencegahan stroke', 'Tukak lambung aktif', 'Perdarahan, sakit kepala', 'Antiplatelet'),
(16, 'Dexamethasone', 'Obat kortikosteroid', 'Radang, alergi', 'Infeksi aktif', 'Gangguan tidur, tekanan darah naik', 'Kortikosteroid'),
(17, 'Alprazolam', 'Obat untuk kecemasan', 'Gangguan kecemasan', 'Depresi berat', 'Kantuk, ketergantungan', 'Ansiolitik'),
(18, 'Propranolol', 'Obat beta-blocker', 'Hipertensi, angina', 'Asma', 'Lelah, bradikardia', 'Beta-blocker'),
(19, 'Amlodipine', 'Obat antihipertensi', 'Hipertensi, angina', 'Gangguan hati', 'Edema kaki, sakit kepala', 'Antihipertensi'),
(20, 'Ceftriaxone', 'Antibiotik untuk infeksi bakteri', 'Infeksi saluran pernapasan', 'Alergi terhadap cefalosporin', 'Reaksi alergi, diare', 'Antibiotik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','user') NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES
(1, 'saya', '$2y$10$csh4HZX2vQ6yknjce5T4yeWTclAx4ungiYZ/C3.mCLmE0.yks88j.', 'user'),
(2, 'saya', '$2y$10$ta/SBomDgf1ZX5erM.5lfOkv50c8v0tHMSly4ZkjLoH1yUSQL1XYS', 'user'),
(3, 'saya', '$2y$10$v/.zFBPWHNLbQfX8yUBHy.wS2pI35R38/cuMTwqY3cuDZG/ir3kQm', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `obat`
--
ALTER TABLE `obat`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
