-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2024 at 01:12 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lppm_unand`
--

-- --------------------------------------------------------

--
-- Table structure for table `agenda_lppm`
--

CREATE TABLE `agenda_lppm` (
  `id` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `waktu` time DEFAULT NULL,
  `kegiatan` varchar(255) DEFAULT NULL,
  `pic` varchar(100) DEFAULT NULL,
  `lokasi` varchar(255) DEFAULT NULL,
  `catatan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `agenda_lppm`
--

INSERT INTO `agenda_lppm` (`id`, `tanggal`, `waktu`, `kegiatan`, `pic`, `lokasi`, `catatan`) VALUES
(1, '2024-05-23', '08:00:00', 'Rapat Penyusunan Rencana Kerja', 'Dr. Ani', 'Ruang Rapat LPPM', 'Diskusi anggaran tahun depan'),
(2, '2024-05-25', '10:00:00', 'Pelatihan Proposal Penelitian', 'Prof. Budi', 'Auditorium LPPM', 'Peserta terdaftar sebanyak 50 orang'),
(3, '2024-05-27', '13:00:00', 'Pengumpulan Laporan Pengabdian Masyarakat', 'Dr. Cinta', 'Kantor LPPM', 'Deadline pengumpulan laporan telah ditetapkan'),
(4, '2024-05-30', '09:00:00', 'Presentasi Hasil Penelitian', 'Dr. Dharma', 'Ruang Seminar LPPM', 'Persiapan alat presentasi selesai'),
(5, '2024-06-02', '14:00:00', 'Evaluasi Progres Penelitian', 'Prof. Eka', 'Ruang Diskusi LPPM', 'Diskusi perkembangan penelitian mahasiswa'),
(6, '2024-06-05', '11:00:00', 'Diskusi Pemilihan Tema Pengabdian', 'Dr. Fandi', 'Kantor LPPM', 'Pemilihan tema pengabdian tahun depan'),
(7, '2024-06-08', '09:00:00', 'Rapat Koordinasi Program Pengabdian', 'Prof. Gina', 'Ruang Rapat LPPM', 'Koordinasi antarprogram pengabdian'),
(8, '2024-06-10', '10:00:00', 'Konsultasi Proposal Penelitian', 'Dr. Hasan', 'Kantor LPPM', 'Konsultasi dengan mahasiswa mengenai proposal penelitian'),
(9, '2024-06-12', '15:00:00', 'Sosialisasi Program Pengabdian', 'Dr. Ira', 'Aula LPPM', 'Sosialisasi kepada mahasiswa tentang program pengabdian masyarakat'),
(10, '2024-06-15', '13:00:00', 'Pertemuan dengan Stakeholder', 'Prof. Joko', 'Ruang Pertemuan LPPM', 'Diskusi strategi kerjasama dengan pihak eksternal');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `ID` int(11) NOT NULL,
  `Judul` varchar(255) NOT NULL,
  `Konten` text NOT NULL,
  `Penulis` varchar(100) NOT NULL,
  `Tanggal_Publikasi` datetime NOT NULL,
  `Kategori` varchar(50) DEFAULT NULL,
  `Ringkasan` text DEFAULT NULL,
  `Status` enum('draft','published','archived') DEFAULT 'draft'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`ID`, `Judul`, `Konten`, `Penulis`, `Tanggal_Publikasi`, `Kategori`, `Ringkasan`, `Status`) VALUES
(1, 'Peningkatan Kualitas Pendidikan di Desa A', 'Konten berita tentang upaya peningkatan kualitas pendidikan di Desa A...', 'Budi Santoso', '2024-05-01 10:00:00', 'Pendidikan', 'Upaya peningkatan pendidikan di Desa A', 'published'),
(2, 'Kampanye Kesehatan di Kecamatan B', 'Konten berita tentang kampanye kesehatan di Kecamatan B...', 'Siti Rahma', '2024-05-02 11:00:00', 'Kesehatan', 'Kampanye kesehatan untuk warga di Kecamatan B', 'published'),
(3, 'Ekonomi Kreatif Meningkatkan Pendapatan Warga', 'Konten berita tentang bagaimana ekonomi kreatif meningkatkan pendapatan warga...', 'Andi Setiawan', '2024-05-03 12:00:00', 'Ekonomi', 'Peningkatan pendapatan melalui ekonomi kreatif', 'draft'),
(4, 'Gerakan Penghijauan di Kota C', 'Konten berita tentang gerakan penghijauan yang dilakukan di Kota C...', 'Rina Dewi', '2024-05-04 13:00:00', 'Lingkungan', 'Penghijauan kota C', 'published'),
(5, 'Teknologi Tepat Guna untuk Petani Desa D', 'Konten berita tentang penerapan teknologi tepat guna bagi petani di Desa D...', 'Agus Priyanto', '2024-05-05 14:00:00', 'Teknologi', 'Teknologi tepat guna untuk petani Desa D', 'archived'),
(6, 'Workshop Peningkatan Kualitas Pendidikan', 'Konten berita tentang workshop peningkatan kualitas pendidikan...', 'Budi Santoso', '2024-05-06 15:00:00', 'Pendidikan', 'Workshop untuk meningkatkan kualitas pendidikan', 'published'),
(7, 'Penyuluhan Kesehatan di Desa E', 'Konten berita tentang penyuluhan kesehatan di Desa E...', 'Siti Rahma', '2024-05-07 16:00:00', 'Kesehatan', 'Penyuluhan kesehatan untuk warga Desa E', 'draft'),
(8, 'Pelatihan UMKM di Kecamatan F', 'Konten berita tentang pelatihan UMKM di Kecamatan F...', 'Andi Setiawan', '2024-05-08 17:00:00', 'Ekonomi', 'Pelatihan UMKM di Kecamatan F', 'published'),
(9, 'Program Pengelolaan Sampah di Kota G', 'Konten berita tentang program pengelolaan sampah di Kota G...', 'Rina Dewi', '2024-05-09 18:00:00', 'Lingkungan', 'Pengelolaan sampah di Kota G', 'archived'),
(10, 'Inovasi Teknologi di Bidang Pertanian', 'Konten berita tentang inovasi teknologi di bidang pertanian...', 'Agus Priyanto', '2024-05-10 19:00:00', 'Teknologi', 'Inovasi teknologi untuk pertanian', 'published'),
(11, 'Seminar Pendidikan Anak Usia Dini', 'Konten berita tentang seminar pendidikan anak usia dini...', 'Budi Santoso', '2024-05-11 10:00:00', 'Pendidikan', 'Seminar pendidikan anak usia dini', 'draft'),
(12, 'Layanan Kesehatan Gratis di Desa H', 'Konten berita tentang layanan kesehatan gratis di Desa H...', 'Siti Rahma', '2024-05-12 11:00:00', 'Kesehatan', 'Layanan kesehatan gratis di Desa H', 'published'),
(13, 'Peningkatan Ekonomi Melalui Wisata Desa', 'Konten berita tentang peningkatan ekonomi melalui wisata desa...', 'Andi Setiawan', '2024-05-13 12:00:00', 'Ekonomi', 'Wisata desa sebagai sumber ekonomi', 'archived'),
(14, 'Program Penanaman Pohon di Kecamatan I', 'Konten berita tentang program penanaman pohon di Kecamatan I...', 'Rina Dewi', '2024-05-14 13:00:00', 'Lingkungan', 'Penanaman pohon di Kecamatan I', 'published'),
(15, 'Pelatihan Penggunaan Teknologi untuk UMKM', 'Konten berita tentang pelatihan penggunaan teknologi untuk UMKM...', 'Agus Priyanto', '2024-05-15 14:00:00', 'Teknologi', 'Pelatihan teknologi untuk UMKM', 'draft'),
(16, 'Pengembangan Kurikulum Berbasis Lokal', 'Konten berita tentang pengembangan kurikulum berbasis lokal...', 'Budi Santoso', '2024-05-16 15:00:00', 'Pendidikan', 'Kurikulum berbasis lokal', 'published'),
(17, 'Program Kesehatan Ibu dan Anak di Desa J', 'Konten berita tentang program kesehatan ibu dan anak di Desa J...', 'Siti Rahma', '2024-05-17 16:00:00', 'Kesehatan', 'Kesehatan ibu dan anak di Desa J', 'archived'),
(18, 'Pengembangan Produk Lokal untuk Pasar Ekspor', 'Konten berita tentang pengembangan produk lokal untuk pasar ekspor...', 'Andi Setiawan', '2024-05-18 17:00:00', 'Ekonomi', 'Produk lokal untuk pasar ekspor', 'published'),
(19, 'Pengolahan Limbah Menjadi Energi di Kota K', 'Konten berita tentang pengolahan limbah menjadi energi di Kota K...', 'Rina Dewi', '2024-05-19 18:00:00', 'Lingkungan', 'Pengolahan limbah menjadi energi', 'draft'),
(20, 'Teknologi Informasi untuk Pendidikan di Desa L', 'Konten berita tentang teknologi informasi untuk pendidikan di Desa L...', 'Agus Priyanto', '2024-05-20 19:00:00', 'Teknologi', 'Teknologi informasi untuk pendidikan', 'published'),
(21, 'Pelatihan Guru di Kabupaten M', 'Konten berita tentang pelatihan guru di Kabupaten M...', 'Budi Santoso', '2024-05-21 10:00:00', 'Pendidikan', 'Pelatihan guru di Kabupaten M', 'archived'),
(22, 'Layanan Kesehatan Bergerak di Kecamatan N', 'Konten berita tentang layanan kesehatan bergerak di Kecamatan N...', 'Siti Rahma', '2024-05-22 11:00:00', 'Kesehatan', 'Layanan kesehatan bergerak', 'published'),
(23, 'Pemanfaatan Potensi Lokal untuk Perekonomian Desa O', 'Konten berita tentang pemanfaatan potensi lokal untuk perekonomian desa O...', 'Andi Setiawan', '2024-05-23 12:00:00', 'Ekonomi', 'Potensi lokal untuk perekonomian', 'draft'),
(24, 'Konservasi Lingkungan di Kecamatan P', 'Konten berita tentang konservasi lingkungan di Kecamatan P...', 'Rina Dewi', '2024-05-24 13:00:00', 'Lingkungan', 'Konservasi lingkungan', 'published'),
(25, 'Pelatihan Teknologi Tepat Guna di Desa Q', 'Konten berita tentang pelatihan teknologi tepat guna di Desa Q...', 'Agus Priyanto', '2024-05-25 14:00:00', 'Teknologi', 'Pelatihan teknologi tepat guna', 'draft'),
(26, 'Peningkatan Kualitas Pendidikan Melalui E-Learning', 'Konten berita tentang peningkatan kualitas pendidikan melalui e-learning...', 'Budi Santoso', '2024-05-26 15:00:00', 'Pendidikan', 'E-learning untuk pendidikan', 'published'),
(27, 'Penyuluhan Kesehatan Gizi di Desa R', 'Konten berita tentang penyuluhan kesehatan gizi di Desa R...', 'Siti Rahma', '2024-05-27 16:00:00', 'Kesehatan', 'Penyuluhan kesehatan gizi', 'archived'),
(28, 'Pengembangan Ekonomi Kreatif di Kota S', 'Konten berita tentang pengembangan ekonomi kreatif di Kota S...', 'Andi Setiawan', '2024-05-28 17:00:00', 'Ekonomi', 'Ekonomi kreatif di Kota S', 'published'),
(29, 'Program Pengelolaan Sampah di Desa T', 'Konten berita tentang program pengelolaan sampah di Desa T...', 'Rina Dewi', '2024-05-29 18:00:00', 'Lingkungan', 'Pengelolaan sampah di Desa T', 'draft'),
(30, 'Inovasi Teknologi di Bidang Pendidikan', 'Konten berita tentang inovasi teknologi di bidang pendidikan...', 'Agus Priyanto', '2024-05-30 19:00:00', 'Teknologi', 'Inovasi teknologi untuk pendidikan', 'published'),
(31, 'Workshop Peningkatan Kualitas Pendidikan di Desa U', 'Konten berita tentang workshop peningkatan kualitas pendidikan di Desa U...', 'Budi Santoso', '2024-05-31 10:00:00', 'Pendidikan', 'Workshop pendidikan di Desa U', 'archived'),
(32, 'Layanan Kesehatan Gratis di Kecamatan V', 'Konten berita tentang layanan kesehatan gratis di Kecamatan V...', 'Siti Rahma', '2024-06-01 11:00:00', 'Kesehatan', 'Layanan kesehatan gratis di Kecamatan V', 'published'),
(33, 'Peningkatan Ekonomi Melalui Produk Unggulan Desa W', 'Konten berita tentang peningkatan ekonomi melalui produk unggulan desa W...', 'Andi Setiawan', '2024-06-02 12:00:00', 'Ekonomi', 'Produk unggulan desa W', 'draft'),
(34, 'Gerakan Penghijauan di Kota X', 'Konten berita tentang gerakan penghijauan yang dilakukan di Kota X...', 'Rina Dewi', '2024-06-03 13:00:00', 'Lingkungan', 'Penghijauan kota X', 'published'),
(35, 'Teknologi Tepat Guna untuk Petani Desa Y', 'Konten berita tentang penerapan teknologi tepat guna bagi petani di Desa Y...', 'Agus Priyanto', '2024-06-04 14:00:00', 'Teknologi', 'Teknologi tepat guna untuk petani Desa Y', 'archived'),
(36, 'Workshop Peningkatan Kualitas Pendidikan di Desa Z', 'Konten berita tentang workshop peningkatan kualitas pendidikan di Desa Z...', 'Budi Santoso', '2024-06-05 15:00:00', 'Pendidikan', 'Workshop pendidikan di Desa Z', 'published'),
(37, 'Penyuluhan Kesehatan di Desa AA', 'Konten berita tentang penyuluhan kesehatan di Desa AA...', 'Siti Rahma', '2024-06-06 16:00:00', 'Kesehatan', 'Penyuluhan kesehatan di Desa AA', 'draft'),
(38, 'Pelatihan UMKM di Kecamatan BB', 'Konten berita tentang pelatihan UMKM di Kecamatan BB...', 'Andi Setiawan', '2024-06-07 17:00:00', 'Ekonomi', 'Pelatihan UMKM di Kecamatan BB', 'published'),
(39, 'Program Pengelolaan Sampah di Kota CC', 'Konten berita tentang program pengelolaan sampah di Kota CC...', 'Rina Dewi', '2024-06-08 18:00:00', 'Lingkungan', 'Pengelolaan sampah di Kota CC', 'archived'),
(40, 'Inovasi Teknologi di Bidang Pertanian', 'Konten berita tentang inovasi teknologi di bidang pertanian...', 'Agus Priyanto', '2024-06-09 19:00:00', 'Teknologi', 'Inovasi teknologi untuk pertanian', 'published'),
(41, 'Seminar Pendidikan Anak Usia Dini di Desa DD', 'Konten berita tentang seminar pendidikan anak usia dini di Desa DD...', 'Budi Santoso', '2024-06-10 10:00:00', 'Pendidikan', 'Seminar pendidikan anak usia dini', 'draft'),
(42, 'Layanan Kesehatan Gratis di Desa EE', 'Konten berita tentang layanan kesehatan gratis di Desa EE...', 'Siti Rahma', '2024-06-11 11:00:00', 'Kesehatan', 'Layanan kesehatan gratis di Desa EE', 'published'),
(43, 'Peningkatan Ekonomi Melalui Wisata Desa FF', 'Konten berita tentang peningkatan ekonomi melalui wisata desa FF...', 'Andi Setiawan', '2024-06-12 12:00:00', 'Ekonomi', 'Wisata desa FF sebagai sumber ekonomi', 'archived'),
(44, 'Program Penanaman Pohon di Kecamatan GG', 'Konten berita tentang program penanaman pohon di Kecamatan GG...', 'Rina Dewi', '2024-06-13 13:00:00', 'Lingkungan', 'Penanaman pohon di Kecamatan GG', 'published'),
(45, 'Pelatihan Penggunaan Teknologi untuk UMKM di Desa HH', 'Konten berita tentang pelatihan penggunaan teknologi untuk UMKM di Desa HH...', 'Agus Priyanto', '2024-06-14 14:00:00', 'Teknologi', 'Pelatihan teknologi untuk UMKM', 'draft'),
(46, 'Pengembangan Kurikulum Berbasis Lokal di Kecamatan II', 'Konten berita tentang pengembangan kurikulum berbasis lokal di Kecamatan II...', 'Budi Santoso', '2024-06-15 15:00:00', 'Pendidikan', 'Kurikulum berbasis lokal', 'published'),
(47, 'Program Kesehatan Ibu dan Anak di Desa JJ', 'Konten berita tentang program kesehatan ibu dan anak di Desa JJ...', 'Siti Rahma', '2024-06-16 16:00:00', 'Kesehatan', 'Kesehatan ibu dan anak di Desa JJ', 'archived'),
(48, 'Pengembangan Produk Lokal untuk Pasar Ekspor di Kecamatan KK', 'Konten berita tentang pengembangan produk lokal untuk pasar ekspor di Kecamatan KK...', 'Andi Setiawan', '2024-06-17 17:00:00', 'Ekonomi', 'Produk lokal untuk pasar ekspor', 'published'),
(49, 'Pengolahan Limbah Menjadi Energi di Kota LL', 'Konten berita tentang pengolahan limbah menjadi energi di Kota LL...', 'Rina Dewi', '2024-06-18 18:00:00', 'Lingkungan', 'Pengolahan limbah menjadi energi', 'draft'),
(50, 'Teknologi Informasi untuk Pendidikan di Desa MM', 'Konten berita tentang teknologi informasi untuk pendidikan di Desa MM...', 'Agus Priyanto', '2024-06-19 19:00:00', 'Teknologi', 'Teknologi informasi untuk pendidikan', 'published');

-- --------------------------------------------------------

--
-- Table structure for table `penelitian`
--

CREATE TABLE `penelitian` (
  `id_penelitian` int(11) NOT NULL,
  `judul_penelitian` varchar(255) NOT NULL,
  `peneliti_utama` varchar(100) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_selesai` date DEFAULT NULL,
  `status` enum('Diajukan','Sedang Berlangsung','Selesai') NOT NULL DEFAULT 'Diajukan'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penelitian`
--

INSERT INTO `penelitian` (`id_penelitian`, `judul_penelitian`, `peneliti_utama`, `tanggal_mulai`, `tanggal_selesai`, `status`) VALUES
(1, 'Pengembangan Sistem Informasi Manajemen Rumah Sakit', 'Dr. Agus Suprapto', '2020-01-15', '2020-06-15', 'Selesai'),
(2, 'Analisis Keamanan Jaringan Komputer di Perusahaan', 'Dr. Budi Santoso', '2020-02-20', '2020-08-20', 'Selesai'),
(3, 'Penerapan Machine Learning untuk Prediksi Cuaca', 'Dr. Citra Permata', '2020-03-10', '2020-09-10', 'Selesai'),
(4, 'Penggunaan Blockchain untuk Keamanan Data', 'Dr. Dian Pratama', '2020-04-05', '2020-10-05', 'Selesai'),
(5, 'Pengembangan Aplikasi Mobile untuk E-Commerce', 'Dr. Eka Rahmawati', '2020-05-25', '2020-11-25', 'Selesai'),
(6, 'Implementasi IoT untuk Smart Home', 'Dr. Fajar Sidiq', '2021-01-12', '2021-07-12', 'Selesai'),
(7, 'Analisis Big Data untuk Bisnis Ritel', 'Dr. Gita Nuraini', '2021-02-15', '2021-08-15', 'Selesai'),
(8, 'Pengembangan Chatbot dengan NLP', 'Dr. Hanafi Yusron', '2021-03-18', '2021-09-18', 'Selesai'),
(9, 'Penerapan Sistem Pakar untuk Diagnosa Penyakit', 'Dr. Irma Wahyuni', '2021-04-22', '2021-10-22', 'Selesai'),
(10, 'Penggunaan Augmented Reality untuk Pembelajaran', 'Dr. Joko Susilo', '2021-05-10', '2021-11-10', 'Selesai'),
(11, 'Pengembangan Sistem ERP Berbasis Cloud', 'Dr. Kamaludin', '2022-01-05', '2022-07-05', 'Selesai'),
(12, 'Analisis Forensik Digital pada Kasus Kejahatan Siber', 'Dr. Laila Sari', '2022-02-10', '2022-08-10', 'Selesai'),
(13, 'Implementasi Teknologi 5G di Indonesia', 'Dr. Mulyadi', '2022-03-15', '2022-09-15', 'Selesai'),
(14, 'Pengembangan Game Edukasi Berbasis Android', 'Dr. Nia Kurnia', '2022-04-20', '2022-10-20', 'Selesai'),
(15, 'Penggunaan AI untuk Analisis Sentimen di Media Sosial', 'Dr. Oka Prasetya', '2022-05-25', '2022-11-25', 'Selesai'),
(16, 'Penerapan Teknologi Virtual Reality untuk Pelatihan', 'Dr. Purnomo', '2023-01-10', '2023-07-10', 'Selesai'),
(17, 'Pengembangan Sistem Deteksi Wajah dengan Deep Learning', 'Dr. Qomaruddin', '2023-02-15', '2023-08-15', 'Selesai'),
(18, 'Analisis Efisiensi Energi pada Data Center', 'Dr. Rina Agustina', '2023-03-20', '2023-09-20', 'Selesai'),
(19, 'Penggunaan Drone untuk Monitoring Pertanian', 'Dr. Siti Aisyah', '2023-04-25', '2023-10-25', 'Selesai'),
(20, 'Pengembangan Sistem Keamanan Siber dengan AI', 'Dr. Taufik Hidayat', '2023-05-30', '2023-11-30', 'Sedang Berlangsung'),
(21, 'Operasi Perangkat Lunak Dengan Ai', 'Boi Cenly', '2023-07-15', '2023-10-15', 'Selesai');

-- --------------------------------------------------------

--
-- Table structure for table `pengabdian`
--

CREATE TABLE `pengabdian` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `tanggal_mulai` date DEFAULT NULL,
  `tanggal_selesai` date DEFAULT NULL,
  `koordinator` varchar(100) DEFAULT NULL,
  `anggaran` decimal(10,2) DEFAULT NULL,
  `status` enum('Rencana','Berjalan','Selesai','Dibatalkan') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengabdian`
--

INSERT INTO `pengabdian` (`id`, `judul`, `deskripsi`, `tanggal_mulai`, `tanggal_selesai`, `koordinator`, `anggaran`, `status`) VALUES
(1, 'Peningkatan Literasi Masyarakat Desa X', 'Melakukan pelatihan membaca dan menulis untuk masyarakat desa X', '2024-01-15', '2024-07-15', 'Dr. Ani', 50000000.00, 'Berjalan'),
(2, 'Pengembangan Sistem Pengolahan Sampah', 'Mengembangkan sistem pengolahan sampah menjadi produk bernilai ekonomis', '2024-03-01', '2024-12-31', 'Prof. Budi', 80000000.00, 'Rencana'),
(3, 'Pelatihan Keterampilan Usaha Kecil', 'Memberikan pelatihan keterampilan dan manajemen usaha untuk pedagang kecil', '2024-02-10', '2024-06-30', 'Dr. Cinta', 30000000.00, 'Selesai'),
(4, 'Pemberdayaan Petani Padi', 'Mengadakan pelatihan teknik pertanian modern kepada petani padi', '2024-04-20', '2024-09-30', 'Prof. Dharma', 60000000.00, 'Berjalan'),
(5, 'Kampung Ramah Anak', 'Membangun lingkungan yang ramah dan aman bagi anak-anak di kampung X', '2024-05-15', '2024-11-30', 'Dr. Eka', 70000000.00, 'Rencana'),
(6, 'Pembinaan Usaha Mikro Berbasis Digital', 'Membantu pengusaha mikro untuk mengembangkan usahanya secara digital', '2024-03-25', '2024-10-31', 'Prof. Fandi', 45000000.00, 'Berjalan'),
(7, 'Konservasi Hutan Mangrove', 'Melakukan kegiatan pemeliharaan dan penanaman hutan mangrove di pesisir pantai', '2024-06-10', '2024-12-15', 'Dr. Gina', 55000000.00, 'Rencana'),
(8, 'Promosi Kesehatan Masyarakat', 'Melakukan kegiatan penyuluhan dan pemeriksaan kesehatan gratis untuk masyarakat', '2024-01-20', '2024-07-20', 'Prof. Hasan', 40000000.00, 'Selesai'),
(9, 'Program Pengolahan Limbah Industri Kecil', 'Mengembangkan sistem pengolahan limbah industri kecil untuk mengurangi pencemaran lingkungan', '2024-04-05', '2024-11-15', 'Dr. Ira', 75000000.00, 'Berjalan'),
(10, 'Pemberdayaan Komunitas Tani Sayur', 'Memberikan pelatihan pertanian organik kepada komunitas tani sayur', '2024-02-15', '2024-08-31', 'Prof. Joko', 35000000.00, 'Selesai');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agenda_lppm`
--
ALTER TABLE `agenda_lppm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `penelitian`
--
ALTER TABLE `penelitian`
  ADD PRIMARY KEY (`id_penelitian`);

--
-- Indexes for table `pengabdian`
--
ALTER TABLE `pengabdian`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agenda_lppm`
--
ALTER TABLE `agenda_lppm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `penelitian`
--
ALTER TABLE `penelitian`
  MODIFY `id_penelitian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `pengabdian`
--
ALTER TABLE `pengabdian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
