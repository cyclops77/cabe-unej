-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 29, 2019 at 10:49 AM
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
  `status` varchar(20) NOT NULL,
  `perusahaan_id` bigint(20) NOT NULL,
  `fakultas_id` bigint(20) DEFAULT NULL,
  `prodi_id` bigint(20) DEFAULT NULL,
  `nama_beasiswa` varchar(191) NOT NULL,
  `slug_beasiswa` varchar(191) NOT NULL,
  `point_ipk` int(11) DEFAULT NULL,
  `point_gaji` int(11) DEFAULT NULL,
  `point_organisasi` int(11) DEFAULT NULL,
  `point_sertifikat` int(11) DEFAULT NULL,
  `batas_akhir` datetime NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `beasiswa`
--

INSERT INTO `beasiswa` (`id`, `status`, `perusahaan_id`, `fakultas_id`, `prodi_id`, `nama_beasiswa`, `slug_beasiswa`, `point_ipk`, `point_gaji`, `point_organisasi`, `point_sertifikat`, `batas_akhir`, `created_at`, `updated_at`) VALUES
(1834, 'aktiv', 4, 15, 54, 'Fun Teaching', 'teaching-and-money', 35, 15, 20, 30, '2019-12-08 00:00:00', '2019-11-08 13:18:10', '2019-10-04 18:59:33'),
(1841, 'aktiv', 4, 1, 1, 'Perco baaan 2', 'perco-baaan-2', 35, 15, 20, 30, '2019-12-08 00:00:00', '2019-11-08 03:45:16', '2019-11-05 19:07:36'),
(2502, 'aktiv', 4, 14, 44, 'contoh beasiswa', 'contoh-beasiswa', 35, 15, 20, 30, '2019-12-08 00:00:00', '2019-11-08 03:45:16', '2019-10-04 19:08:48'),
(3037, 'aktiv', 4, 1, NULL, 'IT Globality', 'it-globality', 35, 15, 20, 30, '2019-12-08 00:00:00', '2019-11-08 03:45:16', '2019-09-27 08:20:53'),
(3290, 'aktiv', 4, 1, 1, 'Test Nih template', 'test-nih-template', 30, 30, 30, 10, '2019-12-08 00:00:00', '2019-11-08 11:17:24', '2019-11-08 04:17:24'),
(3308, 'tidak aktiv', 4, 1, NULL, 'Beasiswa Z', 'beasiswa-z', 50, 20, 10, 20, '2019-12-19 00:00:00', '2019-11-14 19:02:42', '2019-11-14 19:02:42'),
(3628, 'aktiv', 4, 3, 8, 'English First', 'beasiswa-english-first', 35, 15, 20, 30, '2019-12-08 00:00:00', '2019-11-08 13:17:42', '2019-11-06 06:00:06'),
(4076, 'tidak aktiv', 4, 1, NULL, 'English Seconds', 'beasiswa-english-seconds', 25, 20, 25, 30, '2019-12-08 00:00:00', '2019-11-09 07:16:56', '2019-11-09 00:16:56'),
(4798, 'aktiv', 4, 1, 1, 'Analyst Systems', 'analyst-systems', 35, 15, 20, 30, '2019-12-08 00:00:00', '2019-11-08 03:45:16', '2019-09-27 08:20:32'),
(5138, 'aktiv', 4, 9, 26, 'Teknik Mesin', 'teknik-mesin', 35, 15, 20, 30, '2019-12-08 00:00:00', '2019-11-08 03:45:16', '2019-09-27 09:37:56'),
(6204, 'tidak aktiv', 4, 3, NULL, 'Indo Laktosa', 'indo-laktosa', 50, 10, 20, 20, '2019-11-22 00:00:00', '2019-11-09 07:19:01', '2019-11-09 00:19:01'),
(6556, 'aktiv', 4, 1, NULL, 'Test', 'test', 35, 15, 20, 30, '2019-12-08 00:00:00', '2019-11-08 03:45:16', '2019-11-06 06:00:58'),
(6563, 'aktiv', 4, 1, 1, 'Creative Systems', 'creative-systems', 35, 15, 20, 30, '2019-12-08 00:00:00', '2019-11-08 03:45:16', '2019-09-27 08:19:47'),
(7743, 'aktiv', 4, 9, 26, 'Teknik Jaya', 'teknik-jaya', 35, 15, 20, 30, '2019-12-08 00:00:00', '2019-11-08 03:45:16', '2019-10-04 19:15:05'),
(7918, 'aktiv', 4, 2, NULL, 'Test ID', 'test-id', 35, 15, 20, 30, '2019-12-08 00:00:00', '2019-11-08 03:45:16', '2019-11-06 09:16:47'),
(8081, 'aktiv', 4, 9, 31, 'teknik Kimia', 'teknik-kimia', 40, 10, 20, 30, '2019-12-08 00:00:00', '2019-11-09 08:27:49', '2019-11-09 01:27:49'),
(8156, 'aktiv', 4, 1, 1, 'Beasiswa Percobaan', 'beasiswa-percobaan', 35, 15, 20, 30, '2019-12-08 00:00:00', '2019-11-08 03:45:16', '2019-11-05 19:04:19'),
(8795, 'aktiv', 4, NULL, NULL, 'BCA Foundation', 'bca-foundation', 35, 15, 20, 30, '2019-12-08 00:00:00', '2019-11-08 03:45:16', '2019-09-26 22:26:47'),
(8945, 'aktiv', 4, 9, NULL, 'Engineer Smile', 'engineer-smile', 35, 15, 20, 30, '2019-11-06 00:00:00', '2019-11-09 08:57:14', '2019-09-27 09:37:43'),
(9128, 'aktiv', 4, NULL, NULL, 'Pemkab Kabupaten', 'pemkab-kabupaten', 35, 15, 20, 30, '2019-12-08 00:00:00', '2019-11-08 03:45:16', '2019-10-04 19:00:38'),
(9656, 'tidak aktiv', 26, 1, NULL, 'Djarum \'45', 'djarum-45', 25, 10, 40, 25, '2019-11-30 00:00:00', '2019-11-09 08:30:07', '2019-11-09 01:30:07');

-- --------------------------------------------------------

--
-- Table structure for table `beasiswa_atribut`
--

CREATE TABLE `beasiswa_atribut` (
  `id` bigint(20) NOT NULL,
  `beasiswa_id` bigint(20) NOT NULL,
  `right_text` varchar(500) NOT NULL,
  `middle_text` varchar(1000) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `beasiswa_atribut`
--

INSERT INTO `beasiswa_atribut` (`id`, `beasiswa_id`, `right_text`, `middle_text`, `updated_at`, `created_at`) VALUES
(1251, 6072, '<p>Test</p>', '<p>LOL</p>', '2019-11-09 01:19:21', '2019-11-09 01:19:21'),
(1536, 9656, '<p>Hey&nbsp;</p>', '<p>kau yang cantik</p>', '2019-11-09 01:24:59', '2019-11-09 01:24:59'),
(1611, 9781, '<p>jnjjnkj</p>', '<p>bhbbhbjh<img alt=\"heart\" src=\"http://127.0.0.1:8000/ckeditor/plugins/smiley/images/heart.png\" style=\"height:23px; width:23px\" title=\"heart\" /></p>', '2019-11-07 20:58:28', '2019-11-07 20:58:28'),
(1707, 9276, '<p>jnjjnkj</p>', '<p>bhbbhbjh<img alt=\"heart\" src=\"http://127.0.0.1:8000/ckeditor/plugins/smiley/images/heart.png\" style=\"height:23px; width:23px\" title=\"heart\" /></p>', '2019-11-07 20:58:11', '2019-11-07 20:58:11'),
(2605, 8445, '<p>asds</p>', '<p>kamskdmaskd</p>', '2019-11-06 09:16:13', '2019-11-06 09:16:13'),
(3079, 7918, '<p>asds</p>', '<p>kamskdmaskd</p>', '2019-11-06 09:16:47', '2019-11-06 09:16:47'),
(3303, 6085, '<p>jnjjnkj</p>', '<p>bhbbhbjh<img alt=\"heart\" src=\"http://127.0.0.1:8000/ckeditor/plugins/smiley/images/heart.png\" style=\"height:23px; width:23px\" title=\"heart\" /></p>', '2019-11-07 20:58:47', '2019-11-07 20:58:47'),
(3370, 5637, '<p>Test INI BROO</p>', '<p>KMASKMSKASKAS&nbsp;<a href=\"http://127.0.0.1:8000/buat-beasiswa\">http://127.0.0.1:8000/buat-beasiswa</a></p>\r\n\r\n<p>amskamskamskamsls f asdkmaskdfmsadf sldfsdf SDFO JASDASDI NAS&nbsp; LAS MAA M JJA S ASYB K</p>', '2019-11-07 02:16:04', '2019-11-07 02:16:04'),
(4402, 6204, '<p>jnkjnknkjnkjn</p>', '<p>klnknhbk</p>', '2019-11-07 21:01:24', '2019-11-07 21:01:24'),
(5320, 6556, '<p>kmaksmkas</p>', '<p><strong>Beasiswa BCA merupakan beasiswa yang diselenggarakan oleh perusahaan kami untuk membantu biaya perkuliahan mahasiswa jenjang S1. Beasiswa ini diberiikan selama satu tahun penuh di jurusan apapun dan di universitas manapun di Indonesia. Beasiswa kami menyediakan kurang lebih 500 beasiswa setiap tahunnya.</strong></p>\r\n\r\n<p><strong>Diselenggarakan pertama kali pada tahun 2014, beasiswa ini akan mendanai studimu secara penuh selama satu tahun. Beasiswa BCA dibuka setiap tahunnya dan dibuka pada bulan Agustus. Daftarkan dirimu sekarang juga.</strong></p>\r\n\r\n<p><br />\r\n&nbsp;</p>', '2019-11-06 06:00:58', '2019-11-06 06:00:58'),
(5542, 3308, '<p>saasdads</p>', '<p>sdsfd</p>', '2019-11-14 19:02:42', '2019-11-14 19:02:42'),
(5767, 1477, '<p>jnjjnkj</p>', '<p>bhbbhbjh<img alt=\"heart\" src=\"http://127.0.0.1:8000/ckeditor/plugins/smiley/images/heart.png\" style=\"height:23px; width:23px\" title=\"heart\" /></p>', '2019-11-07 20:54:00', '2019-11-07 20:54:00'),
(6610, 7615, '<p>jnjjnkj</p>', '<p>bhbbhbjh<img alt=\"heart\" src=\"http://127.0.0.1:8000/ckeditor/plugins/smiley/images/heart.png\" style=\"height:23px; width:23px\" title=\"heart\" /></p>', '2019-11-07 20:55:35', '2019-11-07 20:55:35'),
(7042, 4076, '<p>makksakkasmkmas</p>', '<p><strong>&nbsp;sadadsasdasdad&nbsp;sadadsasdasdad&nbsp;sadadsasdasdad&nbsp;sadadsasdasdadsadadsasdasdad vv&nbsp;&nbsp;sadadsasdasdad&nbsp;sadadsasdasdad&nbsp;sadadsasdasdad&nbsp;sadadsasdasdad</strong></p>', '2019-11-07 19:45:26', '2019-11-07 19:45:26'),
(7160, 3628, '<p><strong>safhjsadfjdhsfjsd</strong></p>', '<p>Beasiswa BCA merupakan beasiswa yang diselenggarakan oleh perusahaan kami untuk membantu biaya perkuliahan mahasiswa jenjang S1. Beasiswa ini diberiikan selama satu tahun penuh di jurusan apapun dan di universitas manapun di Indonesia. Beasiswa kami menyediakan kurang lebih 500 beasiswa setiap tahunnya.</p>\r\n\r\n<p>Diselenggarakan pertama kali pada tahun 2014, beasiswa ini akan mendanai studimu secara penuh selama satu tahun. Beasiswa BCA dibuka setiap tahunnya dan dibuka pada bulan Agustus. Daftarkan dirimu sekarang juga.</p>\r\n\r\n<p><br />\r\n&nbsp;</p>', '2019-11-06 06:00:05', '2019-11-06 06:00:05'),
(7465, 3290, '<p>Test INI BROO</p>', '<p>KMASKMSKASKAS&nbsp;<a href=\"http://127.0.0.1:8000/buat-beasiswa\">http://127.0.0.1:8000/buat-beasiswa</a></p>\r\n\r\n<p>amskamskamskamsls f asdkmaskdfmsadf sldfsdf SDFO JASDASDI NAS&nbsp; LAS MAA M JJA S ASYB K</p>', '2019-11-07 02:17:29', '2019-11-07 02:17:29');

-- --------------------------------------------------------

--
-- Table structure for table `beasiswa_revisi`
--

CREATE TABLE `beasiswa_revisi` (
  `id` bigint(20) NOT NULL,
  `beasiswa_id` bigint(20) NOT NULL,
  `jenis_kesalahan` varchar(200) NOT NULL,
  `catatan` varchar(500) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `beasiswa_revisi`
--

INSERT INTO `beasiswa_revisi` (`id`, `beasiswa_id`, `jenis_kesalahan`, `catatan`, `created_at`, `updated_at`) VALUES
(410, 6204, 'POint gaji ortu kecilikan', 'HEHEHE LOL', '2019-11-09 08:31:01', '2019-11-09 08:31:01');

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
(1, 'Fakultas Ilmu Komputer', '2019-11-05 15:03:46', '0000-00-00 00:00:00'),
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
  `sertifikat` int(20) NOT NULL,
  `organisasi` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `user_id`, `fakultas_id`, `prodi_id`, `nama_lengkap`, `nohp`, `semester`, `ipk`, `gaji_ortu`, `sertifikat`, `organisasi`, `created_at`, `updated_at`) VALUES
(10209, 12262, 1, 2, 'nur dwi sofiana', '08912213312', 5, '3.75', 10000000, 3, 'Pengurus Inti', '2019-11-05 09:10:30', '2019-11-05 09:10:30'),
(10757, 13928, 1, 1, 'aga123', '0822756756', 5, '3.76', 10000000, 3, 'Ketua dan Wakil Ketua', '2019-11-06 06:13:28', '2019-11-06 06:13:28'),
(10941, 13781, 9, 26, 'alfian ferdiansyah', '12313131', 2, '3.32', 3000000, 3, 'Ketua dan Wakil Ketua', '2019-10-28 17:36:50', '2019-10-28 17:36:50'),
(11018, 14400, 1, 1, 'aga123', '0822756756', 5, '3.76', 10000000, 3, 'Ketua dan Wakil Ketua', '2019-11-06 06:14:00', '2019-11-06 06:14:00'),
(11442, 13965, 3, 9, 'alfian ferdiansyah', '088234234', 5, '4', 10000000, 0, 'Ketua dan Wakil Ketua', '2019-10-27 09:41:03', '2019-09-26 22:22:09'),
(11682, 14482, 1, 1, 'Arizha Izul', '08912213312', 5, '3.5', 10000009, 4, 'Ketua dan Wakil Ketua', '2019-11-09 00:24:59', '2019-11-09 00:24:59'),
(12206, 13650, 1, 1, 'Eka Yastina', '0822756756', 5, '3.5', 10000000, 3, 'Pengurus Divisi', '2019-11-09 00:32:26', '2019-11-09 00:32:26'),
(12428, 10578, 9, 27, 'aww', '0822756756', 5, '3.5', 3500000, 2, 'Ketua dan Wakil Ketua', '2019-10-28 17:37:47', '2019-10-28 17:37:47'),
(12504, 12644, 2, 49, 'alfian ferdiansyah', '0822756756', 5, '3.5', 10000000, 3, 'Ketua dan Wakil Ketua', '2019-11-05 07:05:47', '2019-11-05 07:05:47'),
(12575, 11586, 9, 27, 'asdasd', '08912213312', 3, '3.75', 1500000, 2, 'Ketua dan Wakil Ketua', '2019-10-31 05:51:25', '2019-10-31 05:51:25'),
(13575, 11172, 1, 1, 'Izul Fikri', '08912213312', 5, '3.5', 10000000, 3, 'Ketua dan Wakil Ketua', '2019-11-14 18:54:18', '2019-11-14 18:54:18'),
(14071, 12326, 11, 34, 'asd', '0822756756', 5, '3.5', 123123123, 12, 'Pengurus Divisi', '2019-11-03 20:22:22', '2019-11-03 20:22:22'),
(14219, 10855, 12, 35, 'alfian ferdiansyah', '0822756756', 5, '4', 10000000, 4, 'Ketua dan Wakil Ketua', '2019-10-27 09:41:01', '2019-09-30 08:55:33'),
(14644, 15391, 1, 1, 'Taufik Rahman', '0822756756', 5, '3.75', 8000000, 4, 'Ketua dan Wakil Ketua', '2019-11-04 17:23:41', '2019-11-04 17:23:41'),
(15625, 13925, 1, 1, 'Muhammad Alfian', '082257851837', 5, '3.75', 12000000, 2, 'Ketua dan Wakil Ketua', '2019-11-04 03:55:10', '2019-11-04 03:55:10'),
(15731, 10785, 1, 1, 'agaa', '08225785837', 5, '3.5', 8000000, 2, 'Ketua dan Wakil Ketua', '2019-11-04 18:12:20', '2019-11-04 18:12:20'),
(15761, 16529, 1, 1, 'Muhammad Alfian', '082257851837', 5, '3.75', 12000000, 2, 'Pengurus Inti', '2019-11-04 03:55:55', '2019-11-04 03:55:55'),
(16237, 14717, 8, 24, 'alfian ferdiansyah', '08912213312', 5, '4', 10000000, 2, 'Ketua dan Wakil Ketua', '2019-11-05 07:05:04', '2019-11-05 07:05:04'),
(16352, 18495, 9, 26, 'taufik', '12313131', 3, '4', 10000000, 0, 'Ketua dan Wakil Ketua', '2019-10-27 09:40:59', '2019-09-30 03:32:05'),
(16439, 15244, 1, 3, 'Bima Saputra', '08912213312', 5, '3.75', 10000000, 3, 'Ketua dan Wakil Ketua', '2019-11-05 09:11:49', '2019-11-05 09:11:49'),
(16451, 13976, 9, 26, 'Mashudah Sabilaturrizqi', '08912213312', 5, '3.7', 9000000, 10, 'Pengurus Inti', '2019-11-09 08:05:00', '2019-11-09 01:05:00'),
(16579, 15125, 9, 31, 'Aga', '24234', 4, '4', 10000000, 0, 'Ketua dan Wakil Ketua', '2019-10-27 09:40:37', '2019-09-27 09:39:54'),
(16854, 11060, 1, 1, 'henry', '08912213312', 5, '4', 10000000, 0, 'Ketua dan Wakil Ketua', '2019-10-27 09:40:50', '2019-09-27 08:22:26'),
(17227, 12001, 9, 26, 'Henry Kristiano', '08656', 4, '3.76', 10000000, 4, 'Ketua dan Wakil Ketua', '2019-10-28 01:08:42', '2019-10-02 00:30:41'),
(17466, 14224, 1, 1, 'aga', '08233123', 5, '3.5', 8000000, 3, 'Ketua dan Wakil Ketua', '2019-11-04 18:13:22', '2019-11-04 18:13:22'),
(17739, 17573, 1, 1, 'Afry', '08912213312', 5, '3.5', 10000000, 1, 'Ketua dan Wakil Ketua', '2019-11-24 04:17:21', '2019-11-24 04:17:21'),
(17783, 14717, 1, 1, 'Kufra', '08912213312', 5, '4', 10000000, 2, 'Ketua dan Wakil Ketua', '2019-11-18 21:25:41', '2019-11-18 21:25:41'),
(18597, 19589, 1, 1, 'Afry', '08912213312', 5, '3.5', 10000000, 1, 'Ketua dan Wakil Ketua', '2019-11-24 04:18:33', '2019-11-24 04:18:33'),
(18642, 19741, 1, 3, 'Firmansyah Wahyu', '0822756756', 5, '3.5', 10000000, 4, 'Pengurus Inti', '2019-11-11 09:12:52', '2019-11-11 09:12:52'),
(18965, 18230, 1, 1, 'alfian', '23423', 5, '4', 9999999, 99, 'Ketua dan Wakil Ketua', '2019-10-27 09:40:56', '2019-10-17 18:32:15');

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
  `bukti_organisasi` varchar(200) DEFAULT NULL,
  `output` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftar_beasiswa`
--

INSERT INTO `pendaftar_beasiswa` (`id`, `user_id`, `beasiswa_id`, `point`, `bukti_ipk`, `bukti_gaji`, `bukti_sertifikat`, `bukti_organisasi`, `output`, `created_at`, `updated_at`) VALUES
(2198, 10578, 8945, 60, 'a1.jpeg', 'a2.jpeg', 'a3.jpeg', 'a4.jpeg', 'Dipertimbangkan', '2019-10-28 17:40:10', '2019-10-28 17:40:10'),
(2739, 11172, 6563, 55, '1abf80ae-d97b-4c58-ae6d-78d858c2d23a.jpeg', 'organisasi.png', 'sertif.png', 'slip.png', 'Dipertimbangkan', '2019-11-14 18:56:21', '2019-11-14 18:56:21'),
(3935, 12001, 7743, 65, 'Screenshot from 2019-10-26 15-43-14.png', 'Screenshot from 2019-10-20 14-10-52.png', 'Screenshot from 2019-10-23 12-02-05.png', 'Screenshot from 2019-10-18 21-43-16.png', 'Dipertimbangkan', '2019-10-27 18:27:22', '2019-10-27 18:27:22'),
(6577, 15391, 4798, 65, '1abf80ae-d97b-4c58-ae6d-78d858c2d23a.jpeg', 'organisasi.png', 'sertif.png', 'slip.png', 'Dipertimbangkan', '2019-11-04 17:24:14', '2019-11-04 17:24:14'),
(7827, 16529, 6563, 48, '1abf80ae-d97b-4c58-ae6d-78d858c2d23a.jpeg', 'slip.png', 'sertif.png', 'organisasi.png', 'Dipertimbangkan', '2019-11-04 03:58:02', '2019-11-04 03:58:02'),
(9529, 14224, 4798, 55, '1abf80ae-d97b-4c58-ae6d-78d858c2d23a.jpeg', 'sertif.png', 'slip.png', 'organisasi.png', 'Dipertimbangkan', '2019-11-04 18:14:56', '2019-11-04 18:14:56'),
(9681, 13976, 7743, 68, 'organisasi.png', 'slip.png', 'organisasi.png', '0009012IMG-20160730-091855780x390.jpg', 'Dipertimbangkan', '2019-11-05 09:59:38', '2019-11-05 09:59:38');

-- --------------------------------------------------------

--
-- Table structure for table `perusahaan`
--

CREATE TABLE `perusahaan` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `nama_perusahaan` varchar(200) NOT NULL,
  `jenis_perusahaan` varchar(200) NOT NULL,
  `nama_penanggung` varchar(200) NOT NULL,
  `email_perusahaan` varchar(200) NOT NULL,
  `bukti` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perusahaan`
--

INSERT INTO `perusahaan` (`id`, `user_id`, `nama_perusahaan`, `jenis_perusahaan`, `nama_penanggung`, `email_perusahaan`, `bukti`, `status`, `updated_at`, `created_at`) VALUES
(3, 99321, 'Djarum Super', 'Koperasi', 'alfian ferdiansyah', '', '', '', '2019-09-07 03:50:29', '2019-09-07 03:50:29'),
(4, 90816, 'Bca Mandiri', 'Bank', 'alim', 'bca@gmail.com', '', 'terverifikasi', '2019-09-26 04:10:46', '2019-09-07 08:47:23'),
(5, 72420, 'Bank', 'Bank', 'izul', 'p@gmail.com', '', 'terverifikasi', '2019-09-17 06:38:18', '2019-09-17 06:08:14'),
(6, 83286, 'Semen Holcim', 'Bank', 'henry', 'h@gmail.com', '', 'terverifikasi', '2019-09-17 09:35:29', '2019-09-17 06:24:09'),
(7, 84148, 'Djarum Mild', 'Bank', 'alfian ferdiansyah', 'jarum11@gmail.com', '', 'terverifikasi', '2019-09-17 09:35:29', '2019-09-17 09:30:03'),
(9, 86118, 'kopi', 'Koperasi', 'alfian', 'kopi@gmail.com', '', 'terverifikasi', '2019-09-19 02:45:07', '2019-09-19 02:42:23'),
(10, 50270, 'Djarum Mild', 'Koperasi', 'alim', 'asdfdf@gmail.com', '', 'terverifikasi', '2019-10-04 19:32:00', '2019-10-04 19:29:45'),
(11, 64694, 'Contoh Perusahaan', 'Bank', 'henry', 'a@gmail.com', '', 'terverifikasi', '2019-10-16 19:52:35', '2019-10-04 19:34:46'),
(12, 93602, 'pt surya', 'Koperasi', 'asdasdasd', 'jarum@gmail.com', '', 'terverifikasi', '2019-10-16 19:52:26', '2019-10-05 08:31:12'),
(13, 91708, 'CONTOH', 'Bank', 'aga', 'bni@gmail.com', '', 'terverifikasi', '2019-11-04 06:59:48', '2019-10-08 09:43:19'),
(14, 67480, 'Djarum Mild', 'Bank', 'izul', 'bghhhca@gmail.com', '', 'tidak terverifikasi', '2019-11-04 07:01:23', '2019-10-31 06:31:38'),
(15, NULL, 'Bank2an', 'Bank', 'alfian', 'bank2@gmail.com', 'Screenshot from 2019-08-15 23-29-40.png', 'terverifikasi', '2019-11-04 15:25:15', '2019-11-04 04:29:11'),
(16, 61201, 'Pt Siba Surya1', 'Bank', 'alfian ferdiansyah', 'alfian000000@gmasil.com', 'Screenshot from 2019-08-15 23-29-40.png', 'terverifikasi', '2019-11-04 15:25:11', '2019-11-04 05:59:49'),
(17, 67382, 'Pt Siba Surya', 'Bank', 'alfian ferdiansyah', 'alfian000000@gmail.com', 'Screenshot from 2019-08-15 23-29-40.png', 'terverifikasi', '2019-11-07 09:32:53', '2019-11-04 06:00:13'),
(18, 70704, 'Perusahaan Kerupuk', 'Bank', 'Arizha Izzul', 'arizhajuli@gmail.com', 'Screenshot from 2019-08-15 23-29-40.png', 'terverifikasi', '2019-11-04 15:25:02', '2019-11-04 07:47:05'),
(19, 55582, 'Bank Muammalat', 'Bank', 'Alim', 'alimpes12@gmail.com', 'Screenshot from 2019-08-15 23-29-40.png', 'terverifikasi', '2019-11-04 08:24:36', '2019-11-04 08:17:59'),
(20, 55677, 'Bank Muammalat', 'Bank', 'Alim', 'alimpes12@gmail.com', 'Screenshot from 2019-08-15 23-29-40.png', 'terverifikasi', '2019-11-14 18:58:06', '2019-11-04 08:18:20'),
(21, 83074, 'Perusahaan A', 'Bank', 'henry', 'perusahaanA@gmail.com', 'sertif.png', 'terverifikasi', '2019-11-04 08:28:58', '2019-11-04 08:28:26'),
(22, 52569, 'PerusahaanB', 'Bank', 'ijul ijul', 'perb@gmail.com', 'Screenshot from 2019-09-12 20-45-50.png', 'terverifikasi', '2019-11-04 08:34:36', '2019-11-04 08:33:56'),
(23, 50465, 'Perusahaan C', 'Bank', 'ijul', 'perc@gmail.com', 'sertif.png', 'terverifikasi', '2019-11-04 17:28:24', '2019-11-04 17:27:32'),
(24, 72194, 'Perusahaan Z', 'Bank', 'izul', 'agagx18@gmail.com', 'organisasi.png', 'Belum Terverifikasi', '2019-11-04 18:22:04', '2019-11-04 18:22:04'),
(25, 97196, 'Perusahaan Z', 'Bank', 'alfian', 'agagx18@gmail.com', 'organisasi.png', 'Belum Terverifikasi', '2019-11-04 18:24:44', '2019-11-04 18:24:44'),
(26, 50426, 'Surya Perindo', 'Bank', 'Henry', 'suryaperindo@gmail.com', 'organisasi.png', 'terverifikasi', '2019-11-09 01:07:59', '2019-11-09 00:57:15'),
(27, 93409, 'Suryanaga', 'Bank', 'henry', 'suryanaga@gmail.com', 'sertif.png', 'Belum Terverifikasi', '2019-11-11 09:10:36', '2019-11-11 09:10:36'),
(28, 50530, 'Surya', 'Bank', 'izul fikri', '12a@gmail.com', 'sertif.png', 'Belum Terverifikasi', '2019-11-14 19:00:33', '2019-11-14 19:00:33');

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `id` bigint(20) NOT NULL,
  `fakultas_id` bigint(20) NOT NULL,
  `nama` varchar(191) NOT NULL,
  `nim` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`id`, `fakultas_id`, `nama`, `nim`, `created_at`, `updated_at`) VALUES
(1, 1, 'Sistem Informasi', 2410101, '2019-11-05 15:07:56', '0000-00-00 00:00:00'),
(2, 1, 'Teknologi Informasi', 2410102, '2019-11-05 15:08:02', '0000-00-00 00:00:00'),
(3, 1, 'Informatika', 2410103, '2019-11-05 15:08:08', '0000-00-00 00:00:00'),
(4, 2, 'Pendidikan Matematika', 0, '2019-09-19 18:13:15', '0000-00-00 00:00:00'),
(5, 2, 'Pendidikan Fisika', 0, '2019-09-19 18:13:15', '0000-00-00 00:00:00'),
(6, 2, 'Pendidikan Biologi', 0, '2019-09-19 18:13:15', '0000-00-00 00:00:00'),
(7, 2, 'Pendidikan Ilmu Pengetahuan Alam (IPA)', 0, '2019-09-19 18:13:15', '0000-00-00 00:00:00'),
(8, 3, 'Agroteknologi', 0, '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(9, 3, 'Agribisnis', 0, '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(10, 3, 'Proteksi Tanaman', 0, '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(11, 3, 'Sain (Ilmu) Tanah', 0, '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(12, 3, 'Agronomi', 0, '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(13, 3, 'Ilmu Pertanian/Perkebunan', 0, '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(14, 3, 'Peternakan', 0, '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(15, 4, 'Teknologi Hasil Pertanian', 0, '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(16, 4, 'Teknik Pertanian', 0, '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(17, 4, 'Teknologi Industri Pertanian', 0, '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(18, 5, 'Pendidikan Dokter Gigi', 0, '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(19, 6, 'Matematika', 0, '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(20, 6, 'Fisika', 0, '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(21, 6, 'Kimia', 0, '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(22, 6, 'Biologi', 0, '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(23, 7, 'Pendidikan Dokter', 0, '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(24, 8, 'Kesehatan Masyarakat', 0, '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(25, 8, 'Ilmu Gizi', 0, '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(26, 9, 'Teknik Mesin', 0, '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(27, 9, 'Teknik Elektro', 0, '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(28, 9, 'Teknik Sipil', 0, '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(29, 9, 'Perencanaan Wilayah dan Tata Kota', 0, '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(30, 9, 'Teknik Lingkungan', 0, '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(31, 9, 'Teknik Kimia', 0, '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(32, 9, 'Teknik Konstruksi Perkapalan', 0, '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(33, 10, 'Ilmu Farmasi', 0, '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(34, 11, 'Ilmu Keperawatan', 0, '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(35, 12, 'Ilmu Hukum', 0, '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(36, 13, 'Ilmu Hubungan Internasional', 0, '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(37, 13, 'Ilmu Administrasi Negara', 0, '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(38, 13, 'Ilmu Administrasi Bisnis', 0, '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(39, 13, 'Ilmu Kesejahteraan Sosial', 0, '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(40, 13, 'Sosiologi', 0, '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(41, 14, 'Ekonomi Pembangunan', 0, '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(42, 14, 'Manajemen', 0, '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(43, 14, 'Akuntansi', 0, '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(44, 14, 'Ekonomi Syariah', 0, '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(45, 2, 'Pendidikan Luar Sekolah', 0, '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(46, 2, 'Pendidikan Ekonomi', 0, '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(47, 2, 'Pendidikan Sejarah', 0, '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(48, 2, 'Pendidikan Bahasa Inggris', 0, '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(49, 2, 'Pendidikan Bahasa dan Sastra Indonesia', 0, '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(50, 2, 'Pendidikan Guru Sekolah Dasar (PGSD)', 0, '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(51, 2, 'Pendidikan Guru Pendidikan Anak Usia Dini (PGPAUD)', 0, '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(52, 2, 'Pendidikan Geografi', 0, '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(53, 15, 'Sastra Indonesia', 0, '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(54, 15, 'Sastra Inggris', 0, '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(55, 15, 'Ilmu Sejarah', 0, '2019-09-26 16:50:00', '0000-00-00 00:00:00'),
(56, 15, 'Televisi dan Film', 0, '2019-09-26 16:50:00', '0000-00-00 00:00:00');

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
(10578, 'mahasiswa', 'aww', 'aw111@gmail.com', NULL, '$2y$10$Ipyhu4hyY17VCRIinQzaHupjP2LeAAthxoHIElp3LrteyHWF3piBu', NULL, '2019-10-28 17:37:47', '2019-10-28 17:37:47'),
(10841, 'mahasiswa', 'as', 'alimpes12@gmail.com11', NULL, '$2y$10$jDIX2WNF1tLCvexDy.TW4eMDUDJhzwghCTpghMNe4ZTB.UdjRa6Mi', NULL, '2019-09-24 05:01:13', '2019-09-24 05:01:13'),
(10855, 'mahasiswa', 'alfian ferdiansyah', 'ear@gmail.com', NULL, '$2y$10$dbTxzDMldnTeV50XhHJ5.e3TpOOs81BcHZLxwREBavQKFP84DNV8K', NULL, '2019-09-30 08:55:33', '2019-09-30 08:55:33'),
(11060, 'mahasiswa', 'henry', 'henry@gmail.com', NULL, '$2y$10$1mrHSnU/njbKu.SD3pPHne1fsiMxO.D/vqefisW08W/daXKodFXka', NULL, '2019-09-27 08:22:26', '2019-09-27 08:22:26'),
(11172, 'mahasiswa', 'Izul Fikri', 'izzulfikri@gmail.com', NULL, '$2y$10$jahFjgoyyYO8lIFV2dABO.C81p5clYu.kWwYhsrfTk1Mgd7lfUGH2', NULL, '2019-11-14 18:54:18', '2019-11-14 18:54:18'),
(12001, 'mahasiswa', 'Henry Kristiano', 'hkristiano@gmail.com', NULL, '$2y$10$j0usFWtKe6cTP.a2ZPC7YOINWy3bUZVuUMsqRzk7Puty0rR3uexmK', NULL, '2019-09-30 17:46:12', '2019-09-30 17:46:12'),
(12107, 'mahasiswa', 'test', 'alfian000000111@gmail.com', NULL, '$2y$10$wSYKPQOWb1APuO7CqIwFYuuBFPcMA0fOsdt3H2WC6Cz0/ub5yOGvW', NULL, '2019-09-17 09:25:02', '2019-09-17 09:25:02'),
(12262, 'mahasiswa', 'nur dwi sofiana', 's12@gmail.com', NULL, '$2y$10$p1HIwWMcdSieDqbA0DE9OOB4J7evzEKkVF/fxjm1aMhgW0WAAgfFC', NULL, '2019-11-05 09:10:30', '2019-11-05 09:10:30'),
(12326, 'mahasiswa', 'asd', 'alfian000000asasas@gmail.com', NULL, '$2y$10$K8ucSQ0ozDkkODGVGSHBmu2mHKiei/XOY1fpwwvg4Y0XaPb1Xh7Aa', NULL, '2019-11-03 20:22:22', '2019-11-03 20:22:22'),
(12348, 'mahasiswa', 'kntl', 'kntol@gmail.com', NULL, '$2y$10$M0GDSW9lXz75svy0v.TGMO2UYdSnzODEQm7h6e8X9Ooo8OJjlN4Oy', NULL, '2019-09-24 10:38:09', '2019-09-24 10:38:09'),
(13378, 'mahasiswa', 'alfian ferdiansyah', 'alfian000000@gmail.coma', NULL, '$2y$10$ZAe46.ZdokP/7NvVWOc/8.ZTN8.7Es46GFpapkx1XI.RQZ5FCdBfu', NULL, '2019-09-06 08:16:37', '2019-09-06 08:16:37'),
(13650, 'mahasiswa', 'Eka Yastina', 'eka@gmail.com', NULL, '$2y$10$mxxVvaH0CIk62whIR6omVOg4bBwXd2rrYBeEXZIi5Oid60FwVjwp6', NULL, '2019-11-09 00:32:27', '2019-11-09 00:32:27'),
(13925, 'mahasiswa', 'kont', 'er1111@gmail.com', NULL, '$2y$10$LC.qP6SsId5WaRROoq6LeOR8NmzjxGKQa5N5bTslxwHbEb3UmNI1u', NULL, '2019-09-24 04:29:51', '2019-09-24 04:29:51'),
(13965, 'mahasiswa', 'alfian ferdiansyah', 'alfian2@gmail.com', NULL, '$2y$10$pTuNWuOnGpWKAyBDiOeKsO.KTVv.WPlWvXpUEj0563ujFrVmydWpC', NULL, '2019-09-26 22:22:10', '2019-09-26 22:22:10'),
(13976, 'mahasiswa', 'bila', 'bila@gmail.com', NULL, '$2y$10$DPeDTXLco13q1/5MVVZ4v.y0Z97atCXoAkLnkP7EhE7ZLRKqrsWJG', NULL, '2019-09-27 09:38:58', '2019-09-27 09:38:58'),
(14224, 'mahasiswa', 'aga', 'aga123@gmail.com', NULL, '$2y$10$5Pp9rkQIPr/qwv8yy6JuCeQ1lIm4Ie3K9SLGioCPaQWj55.X07hLu', NULL, '2019-11-04 18:13:22', '2019-11-04 18:13:22'),
(14400, 'mahasiswa', 'aga123', 'ariza@gmail.com', NULL, '$2y$10$ZaFqABQNH0l2rHN0N/xkG.G60SN0cYd5Rs7YLu6IpnPMpDL9w86RC', NULL, '2019-11-06 06:14:00', '2019-11-06 06:14:00'),
(14482, 'mahasiswa', 'Arizha Izul', 'izzzzul@gmail.com', NULL, '$2y$10$W6C6lFoCDxkEq.GZ5lbQleM9Gy4bQmBcPozEh8P4Rv31ibfDfTfqS', NULL, '2019-11-09 00:25:00', '2019-11-09 00:25:00'),
(14717, 'mahasiswa', 'Kufra', 'Kufra@gmail.com', NULL, '$2y$10$PJTAz9jfRBNeHH0Zg2Qn9eG1epp/tGGgwkB.9BmqIJqzHH6mxPuFK', NULL, '2019-11-18 21:25:41', '2019-11-18 21:25:41'),
(15125, 'mahasiswa', 'Aga', 'Aga@gmail.com', NULL, '$2y$10$UKHh5rS.byebGHrolJ48..uYCa5TKgxGSjX20qTWenL1xzkThBadS', NULL, '2019-09-27 09:39:54', '2019-09-27 09:39:54'),
(15170, 'mahasiswa', 'asdasd', 'er@gmail.acom', NULL, '$2y$10$/ngHtgnNpUjubKdEQNfuCuWk2sy0uNSOGACoduMJjEFkEeS/gRCmO', NULL, '2019-09-24 20:07:56', '2019-09-24 20:07:56'),
(15244, 'mahasiswa', 'Bima Saputra', 'asas1212122@gmail.com', NULL, '$2y$10$DxemBaKphMHjLhxb7Fiks.CO50UWPNqaJ9Jb7wRwz7O4AiWGIb9SG', NULL, '2019-11-05 09:11:49', '2019-11-05 09:11:49'),
(15315, 'mahasiswa', 'tania', 'tania@gmail.com', NULL, '$2y$10$wNUWNMlbF3/ao8qOibCv8e7fnHrR6iaYPEgIb.mQ6gazImlkWycNG', NULL, '2019-09-06 08:17:45', '2019-09-06 08:17:45'),
(15391, 'mahasiswa', 'Taufik Rahman', 'tr@gmail.com', NULL, '$2y$10$7T4LGNiBz9GiG7Iwp6Uqqe/Svp7opLRvs1ulzuOve/qB/le2cxCp.', NULL, '2019-11-04 17:23:41', '2019-11-04 17:23:41'),
(15711, 'mahasiswa', 'asd', 'er@gmail.com', NULL, '$2y$10$CbcgPc2UEWcDORcfEnxCTeR3u1cUQXoh5ZEyVYRWwGplhwvTrFbJi', NULL, '2019-09-24 10:30:59', '2019-09-24 10:30:59'),
(16529, 'mahasiswa', 'Muhammad Alfian', 'al.fian12@gmail.com', NULL, '$2y$10$laVIYk3/QJV.WhoeaRm3uOXzFgCQwGuZinPQRuC5l3WgcHw/yW93O', NULL, '2019-11-04 03:55:55', '2019-11-04 03:55:55'),
(16631, 'mahasiswa', 'terimalah', 'aw@gmail.com', NULL, '$2y$10$Mx9mpb9WHJeMUVX7DW2LNuSUQzfJYnXT0Wf/QZyetdRUeoIo2Inh2', NULL, '2019-09-16 18:58:09', '2019-09-16 18:58:09'),
(16996, 'mahasiswa', 'as', 'asdasd@gmai.com', NULL, '$2y$10$vTlqqIJN1c8A1ThtYG9H5ehAjcrgL7Yhu6W3XUwmo3rOAQpqMY8xO', NULL, '2019-09-24 04:38:48', '2019-09-24 04:38:48'),
(17922, 'mahasiswa', 'ijul', 'zzzz@gmail.com', NULL, '$2y$10$yZHnWYYfIzmi51ctPVkGkO2BUdzNbTnn59tPd71Nxp3tIB0jgRx2y', NULL, '2019-09-19 02:36:09', '2019-09-19 02:36:09'),
(18230, 'mahasiswa', 'alfian', 'lol@gmail.com', NULL, '$2y$10$QgBU/l90zSWC4IAOg7hulurM6qluLazl7O8kEUPq5GvtDmUE9u.aC', NULL, '2019-10-17 18:32:16', '2019-10-17 18:32:16'),
(18495, 'mahasiswa', 'taufik', 'taufik@gmail.com', NULL, '$2y$10$.Sj1aBrcZNAqoCs4jiZP1epaTfma114J1qYCV9UwEAY037qkTIBPq', NULL, '2019-09-30 03:32:06', '2019-09-30 03:32:06'),
(18866, 'mahasiswa', 'as', 'v@gmail.com', NULL, '$2y$10$1xlAjLiYVyAgoNQBV/abW.mAXDahhUpqO5s.rLA9u0LrNgTSwTu86', NULL, '2019-09-25 06:43:35', '2019-09-25 06:43:35'),
(19589, 'mahasiswa', 'Afry', 'huhu@gmail.com', NULL, '$2y$10$WGQCdqQKXQmCMLAchLxkuOpccUm/u8C8ON4TAKE8mPFD.dO9LyOVq', NULL, '2019-11-24 04:18:33', '2019-11-24 04:18:33'),
(19694, 'mahasiswa', 'alfian ferdiansyah', 'alfian0000000aa@gmail.com', NULL, '$2y$10$mbOjzLJhjmnn13cQay27CeXj98mYA59P1/a13V.xHbquIjNnxhYwy', NULL, '2019-09-24 21:10:38', '2019-09-24 21:10:38'),
(19741, 'mahasiswa', 'Firmansyah Wahyu', 'firman@gmai.com', NULL, '$2y$10$9Mo4tEXAGcqrcgklNgLvmuI/ILMOlHPOqGpFijoCCO2BfwIRcRcsa', NULL, '2019-11-11 09:12:52', '2019-11-11 09:12:52'),
(50270, 'perusahaan', 'Djarum Mild', 'asdfdf@gmail.com', NULL, '$2y$10$CKu4oLPIsgHnslbBgyKnlODJsCgLvw6zELBlCsLQRdooz1EaYVjAa', NULL, '2019-10-04 19:32:00', '2019-10-04 19:32:00'),
(50426, 'perusahaan', 'Surya Perindo', 'suryaperindo@gmail.com', NULL, '$2y$10$gQF6wex6lL9o.Q7akuuY.uKOZ9tlaLkXr8eiWfN322LqD/5F2orLy', NULL, '2019-11-09 00:57:16', '2019-11-09 00:57:16'),
(50465, 'perusahaan', 'Perusahaan C', 'perc@gmail.com', NULL, '$2y$10$4z2gXy/XhP/91sMHGv9K8usLPmhylG2Xdr.loI3NhDTRnWCAYKNIm', NULL, '2019-11-04 17:27:34', '2019-11-04 17:27:34'),
(50530, 'perusahaan', 'Surya', '12a@gmail.com', NULL, '$2y$10$tvFSnQn5RR8xQbD92G.uQ.tdsJFGxZqKqRZu7nT8mqbGS2yjuocA.', NULL, '2019-11-14 19:00:33', '2019-11-14 19:00:33'),
(52569, 'perusahaan', 'PerusahaanB', 'perb@gmail.com', NULL, '$2y$10$WZwedQDoGT7zAurcwCT/IuqrfuqvuoADV7F7dydHLKeDVEj615sjq', NULL, '2019-11-04 08:33:57', '2019-11-04 08:33:57'),
(55677, 'perusahaan', 'Bank Muammalat', 'alimpes12@gmail.com', NULL, '$2y$10$mIlpi9oK7PetMcVQ5utsTOD7l0RWl3DinRz3/nkzrAMYFdE2PfAcq', NULL, '2019-11-04 08:18:20', '2019-11-04 08:18:20'),
(64694, 'perusahaan', 'Contoh Perusahaan', 'a@gmail.com', NULL, '$2y$10$PbaZ7Mg/3IxTzdPdZEIDsOYywMI1nDgsMPmdqPTKxrr2/ksHjIPG.', NULL, '2019-10-16 19:52:36', '2019-10-16 19:52:36'),
(67382, 'perusahaan', 'Pt Siba Surya', 'alfian000000@gmail.com', NULL, '$2y$10$svjajVQuPfAp16pCMhwMkuQ56lwlmV8u41JCz5fL2pE0lodaxlOIO', NULL, '2019-11-04 06:00:13', '2019-11-04 06:00:13'),
(67480, 'perusahaan', 'Djarum Mild', 'bghhhca@gmail.com', NULL, '$2y$10$ddeT3eJrCZP5OWb3MEAbq.O92gEiQzDzWlgDZm/hVcoZWfqVF3qJ2', NULL, '2019-10-31 07:12:19', '2019-10-31 07:12:19'),
(70704, 'perusahaan', 'Perusahaan Kerupuk', 'arizhajuli@gmail.com', NULL, '$2y$10$7HBy1o1O7TapylYHxt.NFuApoVnz7ChnHcaFTj0KYmoCrAGvrO7GW', NULL, '2019-11-04 07:47:05', '2019-11-04 07:47:05'),
(72194, 'perusahaan', 'Perusahaan Z', 'agagx18@gmail.com', NULL, '$2y$10$t0FvYjWxpwhvTEyLP6t87uKfIsC.VMmrESYCEJ7LsCnqa7uSKk5vu', NULL, '2019-11-04 18:22:04', '2019-11-04 18:22:04'),
(72420, 'perusahaan', 'Bank', 'p@gmail.com', NULL, '$2y$10$UBaak6bPRoXaZbIsbwhOr.GhwS8f7XmjArRH16O8r4AhxuWyC8fie', NULL, '2019-09-17 06:38:19', '2019-09-17 06:38:19'),
(83074, 'perusahaan', 'Perusahaan A', 'perusahaanA@gmail.com', NULL, '$2y$10$KDJDR33MIAaLy6Eo9RX4feYcHBC6.5YgLe58F7LZmiMF462BdXdA6', NULL, '2019-11-04 08:28:27', '2019-11-04 08:28:27'),
(83286, 'perusahaan', 'Semen Holcim', 'h@gmail.com', NULL, '$2y$10$NqadedV7/p1XUjZSq.BFK.k0/5m3bbVds0z4spVId02KjohBbpfKy', NULL, '2019-09-17 09:35:29', '2019-09-17 09:35:29'),
(84148, 'perusahaan', 'Djarum Mild', 'jarum11@gmail.com', NULL, '$2y$10$oNuTLvB0PNjEIzLKWrbkiubfIE9tMzAVTsDv.8XBP9bc5zYtvRaE6', NULL, '2019-09-17 09:35:29', '2019-09-17 09:35:29'),
(86118, 'perusahaan', 'kopi', 'kopi@gmail.com', NULL, '$2y$10$VfpH2/3u1vLnUN/FF2v0v.7QbTqPmtWUjRMJ8zWgqS4Ul/K5oI8ma', NULL, '2019-09-19 02:45:07', '2019-09-19 02:45:07'),
(90816, 'perusahaan', 'Bca Mandiri', 'bca@gmail.com', NULL, '$2y$10$p00ri2.U5gSmh/jJk0A2reFbIL5ckXyghTlhxKkVrM6tbijcBWJ1i', NULL, '2019-09-07 08:47:24', '2019-09-07 08:47:24'),
(91708, 'perusahaan', 'CONTOH', 'bni@gmail.com', NULL, '$2y$10$vfKiLxl5R0QN7eMhJv.ziuRFd1oyEHVAen1U5GCttXi8aMWhjlMw.', NULL, '2019-10-31 07:12:19', '2019-10-31 07:12:19'),
(93409, 'perusahaan', 'Suryanaga', 'suryanaga@gmail.com', NULL, '$2y$10$UJl6Q.ybpZ2dVfxr6FLvqOfugCysncJZytfOF1acDXgCz0Fi0Gsdy', NULL, '2019-11-11 09:10:37', '2019-11-11 09:10:37'),
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
-- Indexes for table `beasiswa_atribut`
--
ALTER TABLE `beasiswa_atribut`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `beasiswa_revisi`
--
ALTER TABLE `beasiswa_revisi`
  ADD KEY `beasiswa_id` (`beasiswa_id`);

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
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9657;

--
-- AUTO_INCREMENT for table `beasiswa_atribut`
--
ALTER TABLE `beasiswa_atribut`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7466;

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
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18966;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `perusahaan`
--
ALTER TABLE `perusahaan`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

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
  ADD CONSTRAINT `beasiswa_ibfk_3` FOREIGN KEY (`perusahaan_id`) REFERENCES `perusahaan` (`id`);

--
-- Constraints for table `beasiswa_revisi`
--
ALTER TABLE `beasiswa_revisi`
  ADD CONSTRAINT `beasiswa_revisi_ibfk_1` FOREIGN KEY (`beasiswa_id`) REFERENCES `beasiswa` (`id`);

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
-- Constraints for table `prodi`
--
ALTER TABLE `prodi`
  ADD CONSTRAINT `prodi_ibfk_1` FOREIGN KEY (`fakultas_id`) REFERENCES `fakultas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
