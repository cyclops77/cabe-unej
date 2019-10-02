-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 02, 2019 at 05:17 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `besisq`
--

-- --------------------------------------------------------

--
-- Table structure for table `beasiswa`
--

CREATE TABLE `beasiswa` (
  `id` bigint(20) NOT NULL,
  `perusahaan_id` bigint(20) NOT NULL,
  `fakultas_id` bigint(20) DEFAULT NULL,
  `prodi_id` bigint(20) DEFAULT NULL,
  `nama_beasiswa` varchar(191) NOT NULL,
  `slug_beasiswa` varchar(191) NOT NULL,
  `ipk` int(11) DEFAULT NULL,
  `point_ipk` int(11) DEFAULT NULL,
  `gaji` int(11) DEFAULT NULL,
  `point_gaji` int(11) DEFAULT NULL,
  `usia` int(11) DEFAULT NULL,
  `point_usia` int(11) DEFAULT NULL,
  `sertifikat` int(11) DEFAULT NULL,
  `point_sertifikat` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `beasiswa`
--

INSERT INTO `beasiswa` (`id`, `perusahaan_id`, `fakultas_id`, `prodi_id`, `nama_beasiswa`, `slug_beasiswa`, `ipk`, `point_ipk`, `gaji`, `point_gaji`, `usia`, `point_usia`, `sertifikat`, `point_sertifikat`, `created_at`, `updated_at`) VALUES
(3037, 90816, 1, NULL, 'IT Globality', 'it-globality', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-27 08:20:53', '2019-09-27 08:20:53'),
(4798, 90816, 1, 1, 'Analyst Systems', 'analyst-systems', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-27 08:20:32', '2019-09-27 08:20:32'),
(5138, 90816, 9, 26, 'Teknik Mesin', 'teknik-mesin', 4, 80, NULL, NULL, NULL, NULL, NULL, NULL, '2019-10-01 04:42:06', '2019-09-27 09:37:56'),
(6563, 90816, 1, 1, 'Creative Systems', 'creative-systems', 4, 50, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-27 08:19:47', '2019-09-27 08:19:47'),
(8081, 90816, 9, 31, 'teknik Kimia', 'teknik-kimia', 4, 20, NULL, NULL, NULL, NULL, NULL, NULL, '2019-10-01 04:36:08', '2019-09-27 09:38:11'),
(8795, 90816, NULL, NULL, 'BCA Foundation', 'bca-foundation', 4, 4, 2000, 4, 4, 4, 4, 4, '2019-10-02 02:16:06', '2019-09-26 22:26:47'),
(8945, 90816, 9, NULL, 'Engineer Smile', 'engineer-smile', NULL, NULL, NULL, NULL, 4, 4, NULL, NULL, '2019-10-02 02:08:58', '2019-09-27 09:37:43');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fakultas`
--

CREATE TABLE `fakultas` (
  `id` bigint(20) NOT NULL,
  `nama_fak` varchar(200) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fakultas`
--

INSERT INTO `fakultas` (`id`, `nama_fak`, `updated_at`, `created_at`) VALUES
(1, 'Fakultas Ilmu Komputer', '2019-09-27 05:18:56', '0000-00-00 00:00:00'),
(2, 'Fakultas Keguruan dan Ilmu Pendidikan', '2019-09-27 05:18:56', '0000-00-00 00:00:00'),
(3, 'Fakultas Pertanian', '2019-09-27 05:18:56', '0000-00-00 00:00:00'),
(4, 'Fakultas Teknologi Pertanian', '2019-09-27 05:18:56', '0000-00-00 00:00:00'),
(5, 'Fakultas Kedokteran Gigi', '2019-09-27 05:18:56', '0000-00-00 00:00:00'),
(6, 'Fakultas Matematika dan Ilmu Pengetahuan Alam', '2019-09-27 05:18:56', '0000-00-00 00:00:00'),
(7, 'Fakultas Kedokteran', '2019-09-27 05:18:56', '0000-00-00 00:00:00'),
(8, 'Fakultas Kesehatan Masyarakat', '2019-09-27 05:18:56', '0000-00-00 00:00:00'),
(9, 'Fakultas Teknik', '2019-09-27 05:18:56', '0000-00-00 00:00:00'),
(10, 'Fakultas Farmasi', '2019-09-27 05:18:56', '0000-00-00 00:00:00'),
(11, 'Fakultas Keperawatan', '2019-09-27 05:18:56', '0000-00-00 00:00:00'),
(12, 'Fakultas Hukum', '2019-09-27 05:18:56', '0000-00-00 00:00:00'),
(13, 'Fakultas Ilmu Sosial dan Ilmu Politik', '2019-09-27 05:18:56', '0000-00-00 00:00:00'),
(14, 'Fakultas Ekonomi dan Bisnis', '2019-09-27 05:18:56', '0000-00-00 00:00:00'),
(15, 'Fakultas Ilmu Budaya', '2019-09-27 05:18:56', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `fakultas_id` bigint(20) NOT NULL,
  `prodi_id` bigint(20) NOT NULL,
  `nama_lengkap` varchar(200) NOT NULL,
  `nohp` varchar(200) NOT NULL,
  `semester` int(11) NOT NULL,
  `ipk` varchar(20) NOT NULL,
  `gaji_ortu` int(11) NOT NULL,
  `usia` int(11) NOT NULL,
  `sertifikat` int(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `user_id`, `fakultas_id`, `prodi_id`, `nama_lengkap`, `nohp`, `semester`, `ipk`, `gaji_ortu`, `usia`, `sertifikat`, `created_at`, `updated_at`) VALUES
(11442, 13965, 3, 9, 'alfian ferdiansyah', '088234234', 5, '4', 10000000, 23, 0, '2019-09-26 22:22:09', '2019-09-26 22:22:09'),
(14219, 10855, 12, 35, 'alfian ferdiansyah', '0822756756', 5, '4', 10000000, 21, 4, '2019-09-30 08:55:33', '2019-09-30 08:55:33'),
(16352, 18495, 9, 26, 'taufik', '12313131', 3, '4', 10000000, 23, 0, '2019-09-30 03:32:05', '2019-09-30 03:32:05'),
(16451, 13976, 9, 26, 'bila', '08912213312', 5, '3.75', 10000000, 22, 0, '2019-10-01 04:45:00', '2019-09-30 21:45:00'),
(16579, 15125, 9, 31, 'Aga', '24234', 4, '4', 10000000, 2, 0, '2019-09-27 09:39:54', '2019-09-27 09:39:54'),
(16854, 11060, 1, 1, 'henry', '08912213312', 5, '4', 10000000, 22, 0, '2019-09-27 08:22:26', '2019-09-27 08:22:26'),
(17227, 12001, 9, 26, 'Henry Kristiano', '08656', 4, '3.76', 100000000, 21, 4, '2019-10-02 07:30:41', '2019-10-02 00:30:41');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pendaftar_beasiswa`
--

CREATE TABLE `pendaftar_beasiswa` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `beasiswa_id` bigint(20) NOT NULL,
  `point` int(11) DEFAULT NULL,
  `bukti_ipk` varchar(200) DEFAULT NULL,
  `bukti_gaji` varchar(200) DEFAULT NULL,
  `bukti_sertifikat` varchar(200) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftar_beasiswa`
--

INSERT INTO `pendaftar_beasiswa` (`id`, `user_id`, `beasiswa_id`, `point`, `bukti_ipk`, `bukti_gaji`, `bukti_sertifikat`, `created_at`, `updated_at`) VALUES
(5689, 13976, 5138, NULL, '1570029357_Screenshot (42).png', NULL, NULL, '2019-10-02 08:15:57', '2019-10-02 08:15:57'),
(7348, 12001, 5138, NULL, '1570029338_Screenshot (44).png', NULL, NULL, '2019-10-02 08:15:38', '2019-10-02 08:15:38');

-- --------------------------------------------------------

--
-- Table structure for table `perusahaan`
--

CREATE TABLE `perusahaan` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `nama_perusahaan` varchar(200) NOT NULL,
  `jenis_perusahaan` varchar(200) NOT NULL,
  `nama_penanggung` varchar(200) NOT NULL,
  `email_perusahaan` varchar(200) NOT NULL,
  `status` varchar(50) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perusahaan`
--

INSERT INTO `perusahaan` (`id`, `user_id`, `nama_perusahaan`, `jenis_perusahaan`, `nama_penanggung`, `email_perusahaan`, `status`, `updated_at`, `created_at`) VALUES
(3, 99321, 'Djarum Super', 'Koperasi', 'alfian ferdiansyah', '', '', '2019-09-07 03:50:29', '2019-09-07 03:50:29'),
(4, 90816, 'Bca Mandiri', 'Bank', 'alim', 'bca@gmail.com', 'terverifikasi', '2019-09-26 04:10:46', '2019-09-07 08:47:23'),
(5, 72420, 'Bank', 'Bank', 'izul', 'p@gmail.com', 'terverifikasi', '2019-09-17 06:38:18', '2019-09-17 06:08:14'),
(6, 83286, 'Semen Holcim', 'Bank', 'henry', 'h@gmail.com', 'terverifikasi', '2019-09-17 09:35:29', '2019-09-17 06:24:09'),
(7, 84148, 'Djarum Mild', 'Bank', 'alfian ferdiansyah', 'jarum11@gmail.com', 'terverifikasi', '2019-09-17 09:35:29', '2019-09-17 09:30:03'),
(9, 86118, 'kopi', 'Koperasi', 'alfian', 'kopi@gmail.com', 'terverifikasi', '2019-09-19 02:45:07', '2019-09-19 02:42:23');

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `id` bigint(20) NOT NULL,
  `fakultas_id` bigint(20) NOT NULL,
  `nama` varchar(191) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`id`, `fakultas_id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 1, 'Sistem Informasi', '2019-09-19 18:12:00', '0000-00-00 00:00:00'),
(2, 1, 'Teknologi Informasi', '2019-09-19 18:12:00', '0000-00-00 00:00:00'),
(3, 1, 'Informatika', '2019-09-19 18:13:15', '0000-00-00 00:00:00'),
(4, 2, 'Pendidikan Matematika', '2019-09-19 18:13:15', '0000-00-00 00:00:00'),
(5, 2, 'Pendidikan Fisika', '2019-09-19 18:13:15', '0000-00-00 00:00:00'),
(6, 2, 'Pendidikan Biologi', '2019-09-19 18:13:15', '0000-00-00 00:00:00'),
(7, 2, 'Pendidikan Ilmu Pengetahuan Alam (IPA)', '2019-09-19 18:13:15', '0000-00-00 00:00:00'),
(8, 3, 'Agroteknologi', '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(9, 3, 'Agribisnis', '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(10, 3, 'Proteksi Tanaman', '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(11, 3, 'Sain (Ilmu) Tanah', '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(12, 3, 'Agronomi', '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(13, 3, 'Ilmu Pertanian/Perkebunan', '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(14, 3, 'Peternakan', '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(15, 4, 'Teknologi Hasil Pertanian', '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(16, 4, 'Teknik Pertanian', '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(17, 4, 'Teknologi Industri Pertanian', '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(18, 5, 'Pendidikan Dokter Gigi', '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(19, 6, 'Matematika', '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(20, 6, 'Fisika', '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(21, 6, 'Kimia', '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(22, 6, 'Biologi', '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(23, 7, 'Pendidikan Dokter', '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(24, 8, 'Kesehatan Masyarakat', '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(25, 8, 'Ilmu Gizi', '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(26, 9, 'Teknik Mesin', '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(27, 9, 'Teknik Elektro', '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(28, 9, 'Teknik Sipil', '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(29, 9, 'Perencanaan Wilayah dan Tata Kota', '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(30, 9, 'Teknik Lingkungan', '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(31, 9, 'Teknik Kimia', '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(32, 9, 'Teknik Konstruksi Perkapalan', '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(33, 10, 'Ilmu Farmasi', '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(34, 11, 'Ilmu Keperawatan', '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(35, 12, 'Ilmu Hukum', '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(36, 13, 'Ilmu Hubungan Internasional', '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(37, 13, 'Ilmu Administrasi Negara', '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(38, 13, 'Ilmu Administrasi Bisnis', '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(39, 13, 'Ilmu Kesejahteraan Sosial', '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(40, 13, 'Sosiologi', '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(41, 14, 'Ekonomi Pembangunan', '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(42, 14, 'Manajemen', '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(43, 14, 'Akuntansi', '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(44, 14, 'Ekonomi Syariah', '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(45, 2, 'Pendidikan Luar Sekolah', '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(46, 2, 'Pendidikan Ekonomi', '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(47, 2, 'Pendidikan Sejarah', '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(48, 2, 'Pendidikan Bahasa Inggris', '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(49, 2, 'Pendidikan Bahasa dan Sastra Indonesia', '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(50, 2, 'Pendidikan Guru Sekolah Dasar (PGSD)', '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(51, 2, 'Pendidikan Guru Pendidikan Anak Usia Dini (PGPAUD)', '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(52, 2, 'Pendidikan Geografi', '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(53, 15, 'Sastra Indonesia', '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(54, 15, 'Sastra Inggris', '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(55, 15, 'Ilmu Sejarah', '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(56, 15, 'Televisi dan Film', '2019-09-26 16:50:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(999, 'admin', 'si_admin', 'admin@gmail.com', NULL, '$2y$10$p00ri2.U5gSmh/jJk0A2reFbIL5ckXyghTlhxKkVrM6tbijcBWJ1i', NULL, NULL, NULL),
(10520, 'mahasiswa', 'zzzz', 'z@gmail.com', NULL, '$2y$10$nmSp0iG2jJoN7hb2jStn2eiUW6knhy7gg4MdPSaU1opgo/hdMJkrS', NULL, '2019-09-17 09:37:05', '2019-09-17 09:37:05'),
(10841, 'mahasiswa', 'as', 'alimpes12@gmail.com', NULL, '$2y$10$jDIX2WNF1tLCvexDy.TW4eMDUDJhzwghCTpghMNe4ZTB.UdjRa6Mi', NULL, '2019-09-24 05:01:13', '2019-09-24 05:01:13'),
(10855, 'mahasiswa', 'alfian ferdiansyah', 'ear@gmail.com', NULL, '$2y$10$dbTxzDMldnTeV50XhHJ5.e3TpOOs81BcHZLxwREBavQKFP84DNV8K', NULL, '2019-09-30 08:55:33', '2019-09-30 08:55:33'),
(11060, 'mahasiswa', 'henry', 'henry@gmail.com', NULL, '$2y$10$1mrHSnU/njbKu.SD3pPHne1fsiMxO.D/vqefisW08W/daXKodFXka', NULL, '2019-09-27 08:22:26', '2019-09-27 08:22:26'),
(12001, 'mahasiswa', 'Henry Kristiano', 'hkristiano@gmail.com', NULL, '$2y$10$j0usFWtKe6cTP.a2ZPC7YOINWy3bUZVuUMsqRzk7Puty0rR3uexmK', NULL, '2019-09-30 17:46:12', '2019-09-30 17:46:12'),
(12107, 'mahasiswa', 'test', 'alfian000000111@gmail.com', NULL, '$2y$10$wSYKPQOWb1APuO7CqIwFYuuBFPcMA0fOsdt3H2WC6Cz0/ub5yOGvW', NULL, '2019-09-17 09:25:02', '2019-09-17 09:25:02'),
(12348, 'mahasiswa', 'kntl', 'kntol@gmail.com', NULL, '$2y$10$M0GDSW9lXz75svy0v.TGMO2UYdSnzODEQm7h6e8X9Ooo8OJjlN4Oy', NULL, '2019-09-24 10:38:09', '2019-09-24 10:38:09'),
(13378, 'mahasiswa', 'alfian ferdiansyah', 'alfian000000@gmail.com', NULL, '$2y$10$ZAe46.ZdokP/7NvVWOc/8.ZTN8.7Es46GFpapkx1XI.RQZ5FCdBfu', NULL, '2019-09-06 08:16:37', '2019-09-06 08:16:37'),
(13925, 'mahasiswa', 'kont', 'er1111@gmail.com', NULL, '$2y$10$LC.qP6SsId5WaRROoq6LeOR8NmzjxGKQa5N5bTslxwHbEb3UmNI1u', NULL, '2019-09-24 04:29:51', '2019-09-24 04:29:51'),
(13965, 'mahasiswa', 'alfian ferdiansyah', 'alfian2@gmail.com', NULL, '$2y$10$pTuNWuOnGpWKAyBDiOeKsO.KTVv.WPlWvXpUEj0563ujFrVmydWpC', NULL, '2019-09-26 22:22:10', '2019-09-26 22:22:10'),
(13976, 'mahasiswa', 'bila', 'bila@gmail.com', NULL, '$2y$10$DPeDTXLco13q1/5MVVZ4v.y0Z97atCXoAkLnkP7EhE7ZLRKqrsWJG', NULL, '2019-09-27 09:38:58', '2019-09-27 09:38:58'),
(15125, 'mahasiswa', 'Aga', 'Aga@gmail.com', NULL, '$2y$10$UKHh5rS.byebGHrolJ48..uYCa5TKgxGSjX20qTWenL1xzkThBadS', NULL, '2019-09-27 09:39:54', '2019-09-27 09:39:54'),
(15170, 'mahasiswa', 'asdasd', 'er@gmail.acom', NULL, '$2y$10$/ngHtgnNpUjubKdEQNfuCuWk2sy0uNSOGACoduMJjEFkEeS/gRCmO', NULL, '2019-09-24 20:07:56', '2019-09-24 20:07:56'),
(15315, 'mahasiswa', 'tania', 'tania@gmail.com', NULL, '$2y$10$wNUWNMlbF3/ao8qOibCv8e7fnHrR6iaYPEgIb.mQ6gazImlkWycNG', NULL, '2019-09-06 08:17:45', '2019-09-06 08:17:45'),
(15711, 'mahasiswa', 'asd', 'er@gmail.com', NULL, '$2y$10$CbcgPc2UEWcDORcfEnxCTeR3u1cUQXoh5ZEyVYRWwGplhwvTrFbJi', NULL, '2019-09-24 10:30:59', '2019-09-24 10:30:59'),
(16631, 'mahasiswa', 'terimalah', 'aw@gmail.com', NULL, '$2y$10$Mx9mpb9WHJeMUVX7DW2LNuSUQzfJYnXT0Wf/QZyetdRUeoIo2Inh2', NULL, '2019-09-16 18:58:09', '2019-09-16 18:58:09'),
(16996, 'mahasiswa', 'as', 'asdasd@gmai.com', NULL, '$2y$10$vTlqqIJN1c8A1ThtYG9H5ehAjcrgL7Yhu6W3XUwmo3rOAQpqMY8xO', NULL, '2019-09-24 04:38:48', '2019-09-24 04:38:48'),
(17922, 'mahasiswa', 'ijul', 'zzzz@gmail.com', NULL, '$2y$10$yZHnWYYfIzmi51ctPVkGkO2BUdzNbTnn59tPd71Nxp3tIB0jgRx2y', NULL, '2019-09-19 02:36:09', '2019-09-19 02:36:09'),
(18495, 'mahasiswa', 'taufik', 'taufik@gmail.com', NULL, '$2y$10$.Sj1aBrcZNAqoCs4jiZP1epaTfma114J1qYCV9UwEAY037qkTIBPq', NULL, '2019-09-30 03:32:06', '2019-09-30 03:32:06'),
(18866, 'mahasiswa', 'as', 'v@gmail.com', NULL, '$2y$10$1xlAjLiYVyAgoNQBV/abW.mAXDahhUpqO5s.rLA9u0LrNgTSwTu86', NULL, '2019-09-25 06:43:35', '2019-09-25 06:43:35'),
(19694, 'mahasiswa', 'alfian ferdiansyah', 'alfian0000000@gmail.com', NULL, '$2y$10$mbOjzLJhjmnn13cQay27CeXj98mYA59P1/a13V.xHbquIjNnxhYwy', NULL, '2019-09-24 21:10:38', '2019-09-24 21:10:38'),
(72420, 'perusahaan', 'Bank', 'p@gmail.com', NULL, '$2y$10$UBaak6bPRoXaZbIsbwhOr.GhwS8f7XmjArRH16O8r4AhxuWyC8fie', NULL, '2019-09-17 06:38:19', '2019-09-17 06:38:19'),
(83286, 'perusahaan', 'Semen Holcim', 'h@gmail.com', NULL, '$2y$10$NqadedV7/p1XUjZSq.BFK.k0/5m3bbVds0z4spVId02KjohBbpfKy', NULL, '2019-09-17 09:35:29', '2019-09-17 09:35:29'),
(84148, 'perusahaan', 'Djarum Mild', 'jarum11@gmail.com', NULL, '$2y$10$oNuTLvB0PNjEIzLKWrbkiubfIE9tMzAVTsDv.8XBP9bc5zYtvRaE6', NULL, '2019-09-17 09:35:29', '2019-09-17 09:35:29'),
(86118, 'perusahaan', 'kopi', 'kopi@gmail.com', NULL, '$2y$10$VfpH2/3u1vLnUN/FF2v0v.7QbTqPmtWUjRMJ8zWgqS4Ul/K5oI8ma', NULL, '2019-09-19 02:45:07', '2019-09-19 02:45:07'),
(90816, 'perusahaan', 'Bca Mandiri', 'bca@gmail.com', NULL, '$2y$10$p00ri2.U5gSmh/jJk0A2reFbIL5ckXyghTlhxKkVrM6tbijcBWJ1i', NULL, '2019-09-07 08:47:24', '2019-09-07 08:47:24'),
(99321, 'perusahaan', 'Djarum Super', 'jarum@gmail.com', NULL, '$2y$10$OAwZElmdUl0rO4Zq1BixruX8.Xov6wx4ae5UI.j97CL7S0hG6PRQS', NULL, '2019-09-07 03:50:29', '2019-09-07 03:50:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beasiswa`
--
ALTER TABLE `beasiswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fakultas_id` (`fakultas_id`),
  ADD KEY `prodi_id` (`prodi_id`),
  ADD KEY `perusahaan_id` (`perusahaan_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fakultas`
--
ALTER TABLE `fakultas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prodi_id` (`prodi_id`),
  ADD KEY `fakultas_id` (`fakultas_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pendaftar_beasiswa`
--
ALTER TABLE `pendaftar_beasiswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `beasiswa_id` (`beasiswa_id`);

--
-- Indexes for table `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fakultas_id` (`fakultas_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beasiswa`
--
ALTER TABLE `beasiswa`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8946;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fakultas`
--
ALTER TABLE `fakultas`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17228;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `perusahaan`
--
ALTER TABLE `perusahaan`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99322;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `beasiswa`
--
ALTER TABLE `beasiswa`
  ADD CONSTRAINT `beasiswa_ibfk_1` FOREIGN KEY (`fakultas_id`) REFERENCES `fakultas` (`id`),
  ADD CONSTRAINT `beasiswa_ibfk_2` FOREIGN KEY (`prodi_id`) REFERENCES `prodi` (`id`),
  ADD CONSTRAINT `beasiswa_ibfk_3` FOREIGN KEY (`perusahaan_id`) REFERENCES `perusahaan` (`user_id`);

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_ibfk_2` FOREIGN KEY (`prodi_id`) REFERENCES `prodi` (`id`),
  ADD CONSTRAINT `mahasiswa_ibfk_3` FOREIGN KEY (`fakultas_id`) REFERENCES `fakultas` (`id`);

--
-- Constraints for table `pendaftar_beasiswa`
--
ALTER TABLE `pendaftar_beasiswa`
  ADD CONSTRAINT `pendaftar_beasiswa_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `pendaftar_beasiswa_ibfk_2` FOREIGN KEY (`beasiswa_id`) REFERENCES `beasiswa` (`id`);

--
-- Constraints for table `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD CONSTRAINT `perusahaan_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `prodi`
--
ALTER TABLE `prodi`
  ADD CONSTRAINT `prodi_ibfk_1` FOREIGN KEY (`fakultas_id`) REFERENCES `fakultas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
