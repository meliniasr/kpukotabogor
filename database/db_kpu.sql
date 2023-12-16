-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Nov 2023 pada 02.31
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kpu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barchart_suratsuara`
--

CREATE TABLE `barchart_suratsuara` (
  `id` tinyint(2) NOT NULL,
  `tahun` year(4) NOT NULL,
  `suarasah_kotabogor` varchar(10) NOT NULL,
  `suarasah_provinsi` varchar(10) NOT NULL,
  `suarasah_nasional` varchar(10) NOT NULL,
  `suaratdksah_kotabogor` varchar(10) NOT NULL,
  `suaratdksah_provinsi` varchar(10) NOT NULL,
  `suaratdksah_nasional` varchar(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `barchart_suratsuara`
--

INSERT INTO `barchart_suratsuara` (`id`, `tahun`, `suarasah_kotabogor`, `suarasah_provinsi`, `suarasah_nasional`, `suaratdksah_kotabogor`, `suaratdksah_provinsi`, `suaratdksah_nasional`, `user_id`, `created`, `modified`) VALUES
(2, '2014', '550864', '23697696', '133574277', '10034', '292393', '1379690', 3, '2023-09-30 22:19:04', '2023-09-30 22:19:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barchart_tingkatpartisipasi`
--

CREATE TABLE `barchart_tingkatpartisipasi` (
  `id` tinyint(2) NOT NULL,
  `tahun` year(4) NOT NULL,
  `suarasah_tdksah_kotabogor` varchar(10) NOT NULL,
  `suarasah_tdksah_provinsi` varchar(10) NOT NULL,
  `suarasah_tdksah_nasional` varchar(10) NOT NULL,
  `tdkhakpemilih_kotabogor` varchar(10) NOT NULL,
  `tdkhakpemilih_provinsi` varchar(10) NOT NULL,
  `tdkhakpemilih_nasional` varchar(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `barchart_tingkatpartisipasi`
--

INSERT INTO `barchart_tingkatpartisipasi` (`id`, `tahun`, `suarasah_tdksah_kotabogor`, `suarasah_tdksah_provinsi`, `suarasah_tdksah_nasional`, `tdkhakpemilih_kotabogor`, `tdkhakpemilih_provinsi`, `tdkhakpemilih_nasional`, `user_id`, `created`, `modified`) VALUES
(2, '2014', '560898', '23990089', '134953967', '148066', '9831289', '58990183', 3, '2023-09-30 21:22:36', '2023-09-30 21:22:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dasarhukum`
--

CREATE TABLE `dasarhukum` (
  `id_dasarhukum` tinyint(2) NOT NULL,
  `tahun` year(4) NOT NULL,
  `deskripsi` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `dasarhukum`
--

INSERT INTO `dasarhukum` (`id_dasarhukum`, `tahun`, `deskripsi`, `user_id`, `created`, `modified`) VALUES
(2, '2014', '<ol>\r\n	<li style=\"text-align:justify\">UUD 1945.</li>\r\n	<li style=\"text-align:justify\">UU Nomor 42 Tahun 2008 tentang Pemilihan Umum Presiden dan Wakil Presiden.</li>\r\n	<li style=\"text-align:justify\">UU Nomor 2 Tahun 2011 Perubahan atas UU Nomor 2 Tahun 2008 tentang Partai Politik.</li>\r\n	<li style=\"text-align:justify\">UU Nomor 15 Tahun 2011 tentang Penyelenggara Pemilihan Umum.</li>\r\n	<li style=\"text-align:justify\">UU Nomor 8 Tahun 2012 tentang Pemilihan Umum Anggota DPR, DPD dan DPRD.</li>\r\n	<li style=\"text-align:justify\">Putusan Mahkamah Konstitusi Nomor Nomor 102/PUU-VII/2009.</li>\r\n	<li style=\"text-align:justify\">Putusan Mahkamah Konstitusi Nomor Nomor 50/PUU-XII/2014.</li>\r\n	<li style=\"text-align:justify\">Peraturan-Peraturan dan Keputusan-Keputusan KPU tentang Pedoman Teknis Penyelenggaraan Pemilihan Umum Presiden dan Wakil Presiden Tahun 2009.</li>\r\n</ol>', 3, '2023-08-28 13:03:17', '2023-10-02 22:16:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `datapemilih_dpk`
--

CREATE TABLE `datapemilih_dpk` (
  `id_datapemilih_dpk` tinyint(2) NOT NULL,
  `tahun` year(4) NOT NULL,
  `dpk_bogorbarat_laki` varchar(10) NOT NULL,
  `dpk_bogorselatan_laki` varchar(10) NOT NULL,
  `dpk_bogortengah_laki` varchar(10) NOT NULL,
  `dpk_bogortimur_laki` varchar(10) NOT NULL,
  `dpk_bogorutara_laki` varchar(10) NOT NULL,
  `dpk_tanahsareal_laki` varchar(10) NOT NULL,
  `dpk_laki_jumlahakhir` varchar(10) NOT NULL,
  `dpk_bogorbarat_perempuan` varchar(10) NOT NULL,
  `dpk_bogorselatan_perempuan` varchar(10) NOT NULL,
  `dpk_bogortengah_perempuan` varchar(10) NOT NULL,
  `dpk_bogortimur_perempuan` varchar(10) NOT NULL,
  `dpk_bogorutara_perempuan` varchar(10) NOT NULL,
  `dpk_tanahsareal_perempuan` varchar(10) NOT NULL,
  `dpk_perempuan_jumlahakhir` varchar(10) NOT NULL,
  `dpk_bogorbarat_jumlah` varchar(10) NOT NULL,
  `dpk_bogorselatan_jumlah` varchar(10) NOT NULL,
  `dpk_bogortengah_jumlah` varchar(10) NOT NULL,
  `dpk_bogortimur_jumlah` varchar(10) NOT NULL,
  `dpk_bogorutara_jumlah` varchar(10) NOT NULL,
  `dpk_tanahsareal_jumlah` varchar(10) NOT NULL,
  `dpk_jumlah_akhir` varchar(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `datapemilih_dpk`
--

INSERT INTO `datapemilih_dpk` (`id_datapemilih_dpk`, `tahun`, `dpk_bogorbarat_laki`, `dpk_bogorselatan_laki`, `dpk_bogortengah_laki`, `dpk_bogortimur_laki`, `dpk_bogorutara_laki`, `dpk_tanahsareal_laki`, `dpk_laki_jumlahakhir`, `dpk_bogorbarat_perempuan`, `dpk_bogorselatan_perempuan`, `dpk_bogortengah_perempuan`, `dpk_bogortimur_perempuan`, `dpk_bogorutara_perempuan`, `dpk_tanahsareal_perempuan`, `dpk_perempuan_jumlahakhir`, `dpk_bogorbarat_jumlah`, `dpk_bogorselatan_jumlah`, `dpk_bogortengah_jumlah`, `dpk_bogortimur_jumlah`, `dpk_bogorutara_jumlah`, `dpk_tanahsareal_jumlah`, `dpk_jumlah_akhir`, `user_id`, `created`, `modified`) VALUES
(2, '2014', '345', '154', '137', '101', '267', '268', '1272', '378', '127', '40', '144', '240', '306', '1235', '723', '281', '177', '245', '507', '574', '2507', 3, '2023-09-30 05:21:23', '2023-09-30 05:21:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `datapemilih_dpktb`
--

CREATE TABLE `datapemilih_dpktb` (
  `id_datapemilih_dpktb` tinyint(2) NOT NULL,
  `tahun` year(4) NOT NULL,
  `dpktb_bogorbarat_laki` varchar(10) NOT NULL,
  `dpktb_bogorselatan_laki` varchar(10) NOT NULL,
  `dpktb_bogortengah_laki` varchar(10) NOT NULL,
  `dpktb_bogortimur_laki` varchar(10) NOT NULL,
  `dpktb_bogorutara_laki` varchar(10) NOT NULL,
  `dpktb_tanahsareal_laki` varchar(10) NOT NULL,
  `dpktb_laki_jumlahakhir` varchar(10) NOT NULL,
  `dpktb_bogorbarat_perempuan` varchar(10) NOT NULL,
  `dpktb_bogorselatan_perempuan` varchar(10) NOT NULL,
  `dpktb_bogortengah_perempuan` varchar(10) NOT NULL,
  `dpktb_bogortimur_perempuan` varchar(10) NOT NULL,
  `dpktb_bogorutara_perempuan` varchar(10) NOT NULL,
  `dpktb_tanahsareal_perempuan` varchar(10) NOT NULL,
  `dpktb_perempuan_jumlahakhir` varchar(10) NOT NULL,
  `dpktb_bogorbarat_jumlah` varchar(10) NOT NULL,
  `dpktb_bogorselatan_jumlah` varchar(10) NOT NULL,
  `dpktb_bogortengah_jumlah` varchar(10) NOT NULL,
  `dpktb_bogortimur_jumlah` varchar(10) NOT NULL,
  `dpktb_bogorutara_jumlah` varchar(10) NOT NULL,
  `dpktb_tanahsareal_jumlah` varchar(10) NOT NULL,
  `dpktb_jumlah_akhir` varchar(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `datapemilih_dpktb`
--

INSERT INTO `datapemilih_dpktb` (`id_datapemilih_dpktb`, `tahun`, `dpktb_bogorbarat_laki`, `dpktb_bogorselatan_laki`, `dpktb_bogortengah_laki`, `dpktb_bogortimur_laki`, `dpktb_bogorutara_laki`, `dpktb_tanahsareal_laki`, `dpktb_laki_jumlahakhir`, `dpktb_bogorbarat_perempuan`, `dpktb_bogorselatan_perempuan`, `dpktb_bogortengah_perempuan`, `dpktb_bogortimur_perempuan`, `dpktb_bogorutara_perempuan`, `dpktb_tanahsareal_perempuan`, `dpktb_perempuan_jumlahakhir`, `dpktb_bogorbarat_jumlah`, `dpktb_bogorselatan_jumlah`, `dpktb_bogortengah_jumlah`, `dpktb_bogortimur_jumlah`, `dpktb_bogorutara_jumlah`, `dpktb_tanahsareal_jumlah`, `dpktb_jumlah_akhir`, `user_id`, `created`, `modified`) VALUES
(2, '2014', '2104', '1446', '786', '1271', '1855', '2456', '9918', '2549', '1574', '826', '1240', '2450', '2795', '11434', '4653', '3020', '1612', '2511', '4305', '5251', '21352', 3, '2023-09-30 05:23:29', '2023-09-30 05:23:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `datapemilih_dpt`
--

CREATE TABLE `datapemilih_dpt` (
  `id_datapemilih_dpt` tinyint(2) NOT NULL,
  `tahun` year(4) NOT NULL,
  `dpt_bogorbarat_laki` varchar(10) NOT NULL,
  `dpt_bogorselatan_laki` varchar(10) NOT NULL,
  `dpt_bogortengah_laki` varchar(10) NOT NULL,
  `dpt_bogortimur_laki` varchar(10) NOT NULL,
  `dpt_bogorutara_laki` varchar(10) NOT NULL,
  `dpt_tanahsareal_laki` varchar(10) NOT NULL,
  `dpt_laki_jumlahakhir` varchar(10) NOT NULL,
  `dpt_bogorbarat_perempuan` varchar(10) NOT NULL,
  `dpt_bogorselatan_perempuan` varchar(10) NOT NULL,
  `dpt_bogortengah_perempuan` varchar(10) NOT NULL,
  `dpt_bogortimur_perempuan` varchar(10) NOT NULL,
  `dpt_bogorutara_perempuan` varchar(10) NOT NULL,
  `dpt_tanahsareal_perempuan` varchar(10) NOT NULL,
  `dpt_perempuan_jumlahakhir` varchar(10) NOT NULL,
  `dpt_bogorbarat_jumlah` varchar(10) NOT NULL,
  `dpt_bogorselatan_jumlah` varchar(10) NOT NULL,
  `dpt_bogortengah_jumlah` varchar(10) NOT NULL,
  `dpt_bogortimur_jumlah` varchar(10) NOT NULL,
  `dpt_bogorutara_jumlah` varchar(10) NOT NULL,
  `dpt_tanahsareal_jumlah` varchar(10) NOT NULL,
  `dpt_jumlah_akhir` varchar(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `datapemilih_dpt`
--

INSERT INTO `datapemilih_dpt` (`id_datapemilih_dpt`, `tahun`, `dpt_bogorbarat_laki`, `dpt_bogorselatan_laki`, `dpt_bogortengah_laki`, `dpt_bogortimur_laki`, `dpt_bogorutara_laki`, `dpt_tanahsareal_laki`, `dpt_laki_jumlahakhir`, `dpt_bogorbarat_perempuan`, `dpt_bogorselatan_perempuan`, `dpt_bogortengah_perempuan`, `dpt_bogortimur_perempuan`, `dpt_bogorutara_perempuan`, `dpt_tanahsareal_perempuan`, `dpt_perempuan_jumlahakhir`, `dpt_bogorbarat_jumlah`, `dpt_bogorselatan_jumlah`, `dpt_bogortengah_jumlah`, `dpt_bogortimur_jumlah`, `dpt_bogorutara_jumlah`, `dpt_tanahsareal_jumlah`, `dpt_jumlah_akhir`, `user_id`, `created`, `modified`) VALUES
(3, '2014', '76625', '65166', '38786', '35410', '59379', '66652', '342018', '76097', '63178', '38127', '35077', '59510', '66169', '338158', '152722', '128344', '76913', '70487', '118889', '132821', '680176', 3, '2023-09-30 04:58:21', '2023-09-30 04:58:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `datapemilih_dptb`
--

CREATE TABLE `datapemilih_dptb` (
  `id_datapemilih_dptb` tinyint(2) NOT NULL,
  `tahun` year(4) NOT NULL,
  `dptb_bogorbarat_laki` varchar(10) NOT NULL,
  `dptb_bogorselatan_laki` varchar(10) NOT NULL,
  `dptb_bogortengah_laki` varchar(10) NOT NULL,
  `dptb_bogortimur_laki` varchar(10) NOT NULL,
  `dptb_bogorutara_laki` varchar(10) NOT NULL,
  `dptb_tanahsareal_laki` varchar(10) NOT NULL,
  `dptb_laki_jumlahakhir` varchar(10) NOT NULL,
  `dptb_bogorbarat_perempuan` varchar(10) NOT NULL,
  `dptb_bogorselatan_perempuan` varchar(10) NOT NULL,
  `dptb_bogortengah_perempuan` varchar(10) NOT NULL,
  `dptb_bogortimur_perempuan` varchar(10) NOT NULL,
  `dptb_bogorutara_perempuan` varchar(10) NOT NULL,
  `dptb_tanahsareal_perempuan` varchar(10) NOT NULL,
  `dptb_perempuan_jumlahakhir` varchar(10) NOT NULL,
  `dptb_bogorbarat_jumlah` varchar(10) NOT NULL,
  `dptb_bogorselatan_jumlah` varchar(10) NOT NULL,
  `dptb_bogortengah_jumlah` varchar(10) NOT NULL,
  `dptb_bogortimur_jumlah` varchar(10) NOT NULL,
  `dptb_bogorutara_jumlah` varchar(10) NOT NULL,
  `dptb_tanahsareal_jumlah` varchar(10) NOT NULL,
  `dptb_jumlah_akhir` varchar(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `datapemilih_dptb`
--

INSERT INTO `datapemilih_dptb` (`id_datapemilih_dptb`, `tahun`, `dptb_bogorbarat_laki`, `dptb_bogorselatan_laki`, `dptb_bogortengah_laki`, `dptb_bogortimur_laki`, `dptb_bogorutara_laki`, `dptb_tanahsareal_laki`, `dptb_laki_jumlahakhir`, `dptb_bogorbarat_perempuan`, `dptb_bogorselatan_perempuan`, `dptb_bogortengah_perempuan`, `dptb_bogortimur_perempuan`, `dptb_bogorutara_perempuan`, `dptb_tanahsareal_perempuan`, `dptb_perempuan_jumlahakhir`, `dptb_bogorbarat_jumlah`, `dptb_bogorselatan_jumlah`, `dptb_bogortengah_jumlah`, `dptb_bogortimur_jumlah`, `dptb_bogorutara_jumlah`, `dptb_tanahsareal_jumlah`, `dptb_jumlah_akhir`, `user_id`, `created`, `modified`) VALUES
(2, '2014', '590', '152', '418', '223', '568', '445', '2396', '553', '128', '543', '216', '650', '443', '2533', '1143', '280', '961', '439', '1218', '888', '4929', 3, '2023-09-30 05:18:49', '2023-09-30 05:18:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `geojson`
--

CREATE TABLE `geojson` (
  `id_geojson` tinyint(2) NOT NULL,
  `id_kelurahan` int(11) NOT NULL,
  `geojson` varchar(255) NOT NULL,
  `kode_kec` varchar(15) NOT NULL,
  `kode_kel` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `geojson`
--

INSERT INTO `geojson` (`id_geojson`, `id_kelurahan`, `geojson`, `kode_kec`, `kode_kel`) VALUES
(1, 1, 'balumbangjaya.geojson', '32.71.04', '32.71.04.1005'),
(2, 2, 'bubulak.geojson', '32.71.04', '32.71.04.1003'),
(3, 3, 'cilendekbarat.geojson', '32.71.04', '32.71.04.1008'),
(4, 4, 'cilendektimur.geojson', '32.71.04', '32.71.04.1009'),
(5, 5, 'curug.geojson', '32.71.04', '32.71.04.1011'),
(6, 6, 'curugmekar.geojson', '32.71.04', '32.71.04.1010'),
(7, 7, 'gunungbatu.geojson', '32.71.04', '32.71.04.1015'),
(8, 8, 'loji.geojson', '32.71.04', '32.71.04.1016'),
(9, 9, 'margajaya.geojson', '32.71.04', '32.71.04.1004'),
(10, 10, 'menteng.geojson', '32.71.04', '32.71.04.1001'),
(11, 11, 'pasirjaya.geojson', '32.71.04', '32.71.04.1012'),
(12, 12, 'pasirkude.geojson', '32.71.04', '32.71.04.1013'),
(13, 13, 'pasirmulya.geojson', '32.71.04', '32.71.04.1014'),
(14, 14, 'semplak.geojson', '32.71.04', '32.71.04.1007'),
(15, 15, 'sindangbarang.geojson', '32.71.04', '32.71.04.1002'),
(16, 16, 'situgede.geojson', '32.71.04', '32.71.04.1006'),
(17, 17, 'batutulis.geojson', '32.71.01', '32.71.01.1001'),
(18, 18, 'bojongkerta.geojson', '32.71.01', '32.71.01.1009'),
(19, 19, 'bondongan.geojson', '32.71.01', '32.71.01.1002'),
(20, 20, 'cikaret.geojson', '32.71.01', '32.71.01.1008'),
(21, 21, 'cipaku.geojson', '32.71.01', '32.71.01.1016'),
(22, 22, 'empang.geojson', '32.71.01', '32.71.01.1003'),
(23, 23, 'genteng.geojson', '32.71.01', '32.71.01.1014'),
(24, 24, 'harjasari.geojson', '32.71.01', '32.71.01.1012'),
(25, 25, 'kertamaya.geojson', '32.71.01', '32.71.01.1011'),
(26, 26, 'lawanggintung.geojson', '32.71.01', '32.71.01.1004'),
(27, 27, 'muarasari.geojson', '32.71.01', '32.71.01.1013'),
(28, 28, 'mulyaharja.geojson', '32.71.01', '32.71.01.1007'),
(29, 29, 'pakuan.geojson', '32.71.01', '32.71.01.1015'),
(30, 30, 'pamoyanan.geojson', '32.71.01', '32.71.01.1005'),
(31, 31, 'rancamaya.geojson', '32.71.01', '32.71.01.1010'),
(32, 32, 'ranggamekar.geojson', '32.71.01', '32.71.01.1006'),
(33, 33, 'babakan.geojson', '32.71.03', '32.71.03.1005'),
(34, 34, 'babakanpasar.geojson', '32.71.03', '32.71.03.1008'),
(35, 35, 'cibogor.geojson', '32.71.03', '32.71.03.1004'),
(36, 36, 'ciwaringin.geojson', '32.71.03', '32.71.03.1010'),
(37, 37, 'gudang.geojson', '32.71.03', '32.71.03.1001'),
(38, 38, 'kebonkalapa.geojson', '32.71.03', '32.71.03.1011'),
(39, 39, 'pabaton.geojson', '32.71.03', '32.71.03.1003'),
(40, 40, 'paledang.geojson', '32.71.03', '32.71.03.1002'),
(41, 41, 'panaragan.geojson', '32.71.03', '32.71.03.1009'),
(42, 42, 'sempur.geojson', '32.71.03', '32.71.03.1006'),
(43, 43, 'tegallega.geojson', '32.71.03', '32.71.03.1007'),
(44, 44, 'baranangsiang.geojson', '32.71.02', '32.71.02.1002'),
(45, 45, 'katulampa.geojson', '32.71.02', '32.71.02.1003'),
(46, 46, 'sindangrasa.geojson', '32.71.02', '32.71.02.1005'),
(47, 47, 'sindangsari.geojson', '32.71.02', '32.71.02.1004'),
(48, 49, 'tajur.geojson', '32.71.02', '32.71.02.1006'),
(49, 50, 'bantarjati.geojson', '32.71.05', '32.71.05.1001'),
(50, 51, 'cibuluh.geojson', '32.71.05', '32.71.05.1005'),
(51, 52, 'ciluar.geojson', '32.71.05', '32.71.05.1006'),
(52, 53, 'cimahpar.geojson', '32.71.05', '32.71.05.1008'),
(53, 54, 'ciparigi.geojson', '32.71.05', '32.71.05.1004'),
(54, 55, 'kedunghalang.geojson', '32.71.05', '32.71.05.1003'),
(55, 56, 'tanahbaru.geojson', '32.71.05', '32.71.05.1007'),
(56, 57, 'tegalgundil.geojson', '32.71.05', '32.71.05.1002'),
(57, 58, 'cibadak.geojson', '32.71.06', '32.71.06.1011'),
(58, 59, 'kayumanis.geojson', '32.71.06', '32.71.06.1010'),
(59, 60, 'kebonpedes.geojson', '32.71.06', '32.71.06.1002'),
(60, 61, 'kedungbadak.geojson', '32.71.06', '32.71.06.1003'),
(61, 62, 'kedungjaya.geojson', '32.71.06', '32.71.06.1006'),
(62, 63, 'kedungwaringin.geojson', '32.71.06', '32.71.06.1005'),
(63, 64, 'kencana.geojson', '32.71.06', '32.71.06.1009'),
(64, 65, 'mekarwangi.geojson', '32.71.06', '32.71.06.1008'),
(65, 66, 'sukadamai.geojson', '32.71.06', '32.71.06.1007'),
(66, 67, 'sukaresmi.geojson', '32.71.06', '32.71.06.1004'),
(67, 68, 'tanahsareal.geojson', '32.71.06', '32.71.06.1001'),
(68, 48, 'sukasari.geojson', '32.71.02', '32.71.02.1001');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hakpilih_dpk`
--

CREATE TABLE `hakpilih_dpk` (
  `id_hakpilih_dpk` tinyint(2) NOT NULL,
  `tahun` year(4) NOT NULL,
  `hakpilih_dpk_bogorbarat_laki` varchar(10) NOT NULL,
  `hakpilih_dpk_bogorselatan_laki` varchar(10) NOT NULL,
  `hakpilih_dpk_bogortengah_laki` varchar(10) NOT NULL,
  `hakpilih_dpk_bogortimur_laki` varchar(10) NOT NULL,
  `hakpilih_dpk_bogorutara_laki` varchar(10) NOT NULL,
  `hakpilih_dpk_tanahsareal_laki` varchar(10) NOT NULL,
  `hakpilih_dpk_laki_jumlahakhir` varchar(10) NOT NULL,
  `hakpilih_dpk_bogorbarat_perempuan` varchar(10) NOT NULL,
  `hakpilih_dpk_bogorselatan_perempuan` varchar(10) NOT NULL,
  `hakpilih_dpk_bogortengah_perempuan` varchar(10) NOT NULL,
  `hakpilih_dpk_bogortimur_perempuan` varchar(10) NOT NULL,
  `hakpilih_dpk_bogorutara_perempuan` varchar(10) NOT NULL,
  `hakpilih_dpk_tanahsareal_perempuan` varchar(10) NOT NULL,
  `hakpilih_dpk_perempuan_jumlahakhir` varchar(10) NOT NULL,
  `hakpilih_dpk_bogorbarat_jumlah` varchar(10) NOT NULL,
  `hakpilih_dpk_bogorselatan_jumlah` varchar(10) NOT NULL,
  `hakpilih_dpk_bogortengah_jumlah` varchar(10) NOT NULL,
  `hakpilih_dpk_bogortimur_jumlah` varchar(10) NOT NULL,
  `hakpilih_dpk_bogorutara_jumlah` varchar(10) NOT NULL,
  `hakpilih_dpk_tanahsareal_jumlah` varchar(10) NOT NULL,
  `hakpilih_dpk_jumlah_akhir` varchar(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `hakpilih_dpk`
--

INSERT INTO `hakpilih_dpk` (`id_hakpilih_dpk`, `tahun`, `hakpilih_dpk_bogorbarat_laki`, `hakpilih_dpk_bogorselatan_laki`, `hakpilih_dpk_bogortengah_laki`, `hakpilih_dpk_bogortimur_laki`, `hakpilih_dpk_bogorutara_laki`, `hakpilih_dpk_tanahsareal_laki`, `hakpilih_dpk_laki_jumlahakhir`, `hakpilih_dpk_bogorbarat_perempuan`, `hakpilih_dpk_bogorselatan_perempuan`, `hakpilih_dpk_bogortengah_perempuan`, `hakpilih_dpk_bogortimur_perempuan`, `hakpilih_dpk_bogorutara_perempuan`, `hakpilih_dpk_tanahsareal_perempuan`, `hakpilih_dpk_perempuan_jumlahakhir`, `hakpilih_dpk_bogorbarat_jumlah`, `hakpilih_dpk_bogorselatan_jumlah`, `hakpilih_dpk_bogortengah_jumlah`, `hakpilih_dpk_bogortimur_jumlah`, `hakpilih_dpk_bogorutara_jumlah`, `hakpilih_dpk_tanahsareal_jumlah`, `hakpilih_dpk_jumlah_akhir`, `user_id`, `created`, `modified`) VALUES
(2, '2014', '228', '108', '108', '76', '196', '178', '894', '285', '92', '28', '115', '165', '208', '893', '513', '200', '136', '191', '361', '386', '1787', 3, '2023-09-30 05:32:46', '2023-09-30 05:32:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hakpilih_dpktb`
--

CREATE TABLE `hakpilih_dpktb` (
  `id_hakpilih_dpktb` tinyint(2) NOT NULL,
  `tahun` year(4) NOT NULL,
  `hakpilih_dpktb_bogorbarat_laki` varchar(10) NOT NULL,
  `hakpilih_dpktb_bogorselatan_laki` varchar(10) NOT NULL,
  `hakpilih_dpktb_bogortengah_laki` varchar(10) NOT NULL,
  `hakpilih_dpktb_bogortimur_laki` varchar(10) NOT NULL,
  `hakpilih_dpktb_bogorutara_laki` varchar(10) NOT NULL,
  `hakpilih_dpktb_tanahsareal_laki` varchar(10) NOT NULL,
  `hakpilih_dpktb_laki_jumlahakhir` varchar(10) NOT NULL,
  `hakpilih_dpktb_bogorbarat_perempuan` varchar(10) NOT NULL,
  `hakpilih_dpktb_bogorselatan_perempuan` varchar(10) NOT NULL,
  `hakpilih_dpktb_bogortengah_perempuan` varchar(10) NOT NULL,
  `hakpilih_dpktb_bogortimur_perempuan` varchar(10) NOT NULL,
  `hakpilih_dpktb_bogorutara_perempuan` varchar(10) NOT NULL,
  `hakpilih_dpktb_tanahsareal_perempuan` varchar(10) NOT NULL,
  `hakpilih_dpktb_perempuan_jumlahakhir` varchar(10) NOT NULL,
  `hakpilih_dpktb_bogorbarat_jumlah` varchar(10) NOT NULL,
  `hakpilih_dpktb_bogorselatan_jumlah` varchar(10) NOT NULL,
  `hakpilih_dpktb_bogortengah_jumlah` varchar(10) NOT NULL,
  `hakpilih_dpktb_bogortimur_jumlah` varchar(10) NOT NULL,
  `hakpilih_dpktb_bogorutara_jumlah` varchar(10) NOT NULL,
  `hakpilih_dpktb_tanahsareal_jumlah` varchar(10) NOT NULL,
  `hakpilih_dpktb_jumlah_akhir` varchar(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `hakpilih_dpktb`
--

INSERT INTO `hakpilih_dpktb` (`id_hakpilih_dpktb`, `tahun`, `hakpilih_dpktb_bogorbarat_laki`, `hakpilih_dpktb_bogorselatan_laki`, `hakpilih_dpktb_bogortengah_laki`, `hakpilih_dpktb_bogortimur_laki`, `hakpilih_dpktb_bogorutara_laki`, `hakpilih_dpktb_tanahsareal_laki`, `hakpilih_dpktb_laki_jumlahakhir`, `hakpilih_dpktb_bogorbarat_perempuan`, `hakpilih_dpktb_bogorselatan_perempuan`, `hakpilih_dpktb_bogortengah_perempuan`, `hakpilih_dpktb_bogortimur_perempuan`, `hakpilih_dpktb_bogorutara_perempuan`, `hakpilih_dpktb_tanahsareal_perempuan`, `hakpilih_dpktb_perempuan_jumlahakhir`, `hakpilih_dpktb_bogorbarat_jumlah`, `hakpilih_dpktb_bogorselatan_jumlah`, `hakpilih_dpktb_bogortengah_jumlah`, `hakpilih_dpktb_bogortimur_jumlah`, `hakpilih_dpktb_bogorutara_jumlah`, `hakpilih_dpktb_tanahsareal_jumlah`, `hakpilih_dpktb_jumlah_akhir`, `user_id`, `created`, `modified`) VALUES
(2, '2014', '2104', '1446', '786', '1271', '1855', '2456', '9918', '2549', '1574', '826', '1240', '2450', '2795', '11434', '4653', '3020', '1612', '2511', '4305', '5251', '21352', 3, '2023-09-30 05:35:01', '2023-09-30 05:35:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hakpilih_dpt`
--

CREATE TABLE `hakpilih_dpt` (
  `id_hakpilih_dpt` tinyint(2) NOT NULL,
  `tahun` year(4) NOT NULL,
  `hakpilih_dpt_bogorbarat_laki` varchar(10) NOT NULL,
  `hakpilih_dpt_bogorselatan_laki` varchar(10) NOT NULL,
  `hakpilih_dpt_bogortengah_laki` varchar(10) NOT NULL,
  `hakpilih_dpt_bogortimur_laki` varchar(10) NOT NULL,
  `hakpilih_dpt_bogorutara_laki` varchar(10) NOT NULL,
  `hakpilih_dpt_tanahsareal_laki` varchar(10) NOT NULL,
  `hakpilih_dpt_laki_jumlahakhir` varchar(10) NOT NULL,
  `hakpilih_dpt_bogorbarat_perempuan` varchar(10) NOT NULL,
  `hakpilih_dpt_bogorselatan_perempuan` varchar(10) NOT NULL,
  `hakpilih_dpt_bogortengah_perempuan` varchar(10) NOT NULL,
  `hakpilih_dpt_bogortimur_perempuan` varchar(10) NOT NULL,
  `hakpilih_dpt_bogorutara_perempuan` varchar(10) NOT NULL,
  `hakpilih_dpt_tanahsareal_perempuan` varchar(10) NOT NULL,
  `hakpilih_dpt_perempuan_jumlahakhir` varchar(10) NOT NULL,
  `hakpilih_dpt_bogorbarat_jumlah` varchar(10) NOT NULL,
  `hakpilih_dpt_bogorselatan_jumlah` varchar(10) NOT NULL,
  `hakpilih_dpt_bogortengah_jumlah` varchar(10) NOT NULL,
  `hakpilih_dpt_bogortimur_jumlah` varchar(10) NOT NULL,
  `hakpilih_dpt_bogorutara_jumlah` varchar(10) NOT NULL,
  `hakpilih_dpt_tanahsareal_jumlah` varchar(10) NOT NULL,
  `hakpilih_dpt_jumlah_akhir` varchar(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `hakpilih_dpt`
--

INSERT INTO `hakpilih_dpt` (`id_hakpilih_dpt`, `tahun`, `hakpilih_dpt_bogorbarat_laki`, `hakpilih_dpt_bogorselatan_laki`, `hakpilih_dpt_bogortengah_laki`, `hakpilih_dpt_bogortimur_laki`, `hakpilih_dpt_bogorutara_laki`, `hakpilih_dpt_tanahsareal_laki`, `hakpilih_dpt_laki_jumlahakhir`, `hakpilih_dpt_bogorbarat_perempuan`, `hakpilih_dpt_bogorselatan_perempuan`, `hakpilih_dpt_bogortengah_perempuan`, `hakpilih_dpt_bogortimur_perempuan`, `hakpilih_dpt_bogorutara_perempuan`, `hakpilih_dpt_tanahsareal_perempuan`, `hakpilih_dpt_perempuan_jumlahakhir`, `hakpilih_dpt_bogorbarat_jumlah`, `hakpilih_dpt_bogorselatan_jumlah`, `hakpilih_dpt_bogortengah_jumlah`, `hakpilih_dpt_bogortimur_jumlah`, `hakpilih_dpt_bogorutara_jumlah`, `hakpilih_dpt_tanahsareal_jumlah`, `hakpilih_dpt_jumlah_akhir`, `user_id`, `created`, `modified`) VALUES
(2, '2014', '59154', '50384', '28600', '26195', '43968', '51431', '259732', '62863', '52608', '30083', '27610', '46677', '54021', '273862', '122017', '102992', '58683', '53805', '90645', '105452', '533594', 3, '2023-09-30 05:29:40', '2023-09-30 05:29:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hakpilih_dptb`
--

CREATE TABLE `hakpilih_dptb` (
  `id_hakpilih_dptb` tinyint(2) NOT NULL,
  `tahun` year(4) NOT NULL,
  `hakpilih_dptb_bogorbarat_laki` varchar(10) NOT NULL,
  `hakpilih_dptb_bogorselatan_laki` varchar(10) NOT NULL,
  `hakpilih_dptb_bogortengah_laki` varchar(10) NOT NULL,
  `hakpilih_dptb_bogortimur_laki` varchar(10) NOT NULL,
  `hakpilih_dptb_bogorutara_laki` varchar(10) NOT NULL,
  `hakpilih_dptb_tanahsareal_laki` varchar(10) NOT NULL,
  `hakpilih_dptb_laki_jumlahakhir` varchar(10) NOT NULL,
  `hakpilih_dptb_bogorbarat_perempuan` varchar(10) NOT NULL,
  `hakpilih_dptb_bogorselatan_perempuan` varchar(10) NOT NULL,
  `hakpilih_dptb_bogortengah_perempuan` varchar(10) NOT NULL,
  `hakpilih_dptb_bogortimur_perempuan` varchar(10) NOT NULL,
  `hakpilih_dptb_bogorutara_perempuan` varchar(10) NOT NULL,
  `hakpilih_dptb_tanahsareal_perempuan` varchar(10) NOT NULL,
  `hakpilih_dptb_perempuan_jumlahakhir` varchar(10) NOT NULL,
  `hakpilih_dptb_bogorbarat_jumlah` varchar(10) NOT NULL,
  `hakpilih_dptb_bogorselatan_jumlah` varchar(10) NOT NULL,
  `hakpilih_dptb_bogortengah_jumlah` varchar(10) NOT NULL,
  `hakpilih_dptb_bogortimur_jumlah` varchar(10) NOT NULL,
  `hakpilih_dptb_bogorutara_jumlah` varchar(10) NOT NULL,
  `hakpilih_dptb_tanahsareal_jumlah` varchar(10) NOT NULL,
  `hakpilih_dptb_jumlah_akhir` varchar(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `hakpilih_dptb`
--

INSERT INTO `hakpilih_dptb` (`id_hakpilih_dptb`, `tahun`, `hakpilih_dptb_bogorbarat_laki`, `hakpilih_dptb_bogorselatan_laki`, `hakpilih_dptb_bogortengah_laki`, `hakpilih_dptb_bogortimur_laki`, `hakpilih_dptb_bogorutara_laki`, `hakpilih_dptb_tanahsareal_laki`, `hakpilih_dptb_laki_jumlahakhir`, `hakpilih_dptb_bogorbarat_perempuan`, `hakpilih_dptb_bogorselatan_perempuan`, `hakpilih_dptb_bogortengah_perempuan`, `hakpilih_dptb_bogortimur_perempuan`, `hakpilih_dptb_bogorutara_perempuan`, `hakpilih_dptb_tanahsareal_perempuan`, `hakpilih_dptb_perempuan_jumlahakhir`, `hakpilih_dptb_bogorbarat_jumlah`, `hakpilih_dptb_bogorselatan_jumlah`, `hakpilih_dptb_bogortengah_jumlah`, `hakpilih_dptb_bogortimur_jumlah`, `hakpilih_dptb_bogorutara_jumlah`, `hakpilih_dptb_tanahsareal_jumlah`, `hakpilih_dptb_jumlah_akhir`, `user_id`, `created`, `modified`) VALUES
(2, '2014', '541', '142', '298', '203', '478', '362', '2024', '512', '121', '355', '200', '562', '391', '2141', '1053', '263', '653', '403', '1040', '753', '4165', 3, '2023-09-30 05:31:08', '2023-09-30 05:31:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` tinyint(2) NOT NULL,
  `tahun` year(4) DEFAULT NULL,
  `jadwal` varchar(25) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `tahun`, `jadwal`, `foto`, `user_id`, `created`, `modified`) VALUES
(3, '2014', 'Rabu, 09 Juli 2014', 'ppwp2014_06.png', 3, '2023-08-28 08:04:48', '2023-10-02 11:51:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jumlahkeseluruhan_datapemilih`
--

CREATE TABLE `jumlahkeseluruhan_datapemilih` (
  `id_jk_datapemilih` tinyint(2) NOT NULL,
  `tahun` year(4) NOT NULL,
  `jk_bogorbarat_laki` varchar(10) NOT NULL,
  `jk_bogorselatan_laki` varchar(10) NOT NULL,
  `jk_bogortengah_laki` varchar(10) NOT NULL,
  `jk_bogortimur_laki` varchar(10) NOT NULL,
  `jk_bogorutara_laki` varchar(10) NOT NULL,
  `jk_tanahsareal_laki` varchar(10) NOT NULL,
  `jk_laki_jumlahakhir` varchar(10) NOT NULL,
  `jk_bogorbarat_perempuan` varchar(10) NOT NULL,
  `jk_bogorselatan_perempuan` varchar(10) NOT NULL,
  `jk_bogortengah_perempuan` varchar(10) NOT NULL,
  `jk_bogortimur_perempuan` varchar(10) NOT NULL,
  `jk_bogorutara_perempuan` varchar(10) NOT NULL,
  `jk_tanahsareal_perempuan` varchar(10) NOT NULL,
  `jk_perempuan_jumlahakhir` varchar(10) NOT NULL,
  `jk_bogorbarat_jumlah` varchar(10) NOT NULL,
  `jk_bogorselatan_jumlah` varchar(10) NOT NULL,
  `jk_bogortengah_jumlah` varchar(10) NOT NULL,
  `jk_bogortimur_jumlah` varchar(10) NOT NULL,
  `jk_bogorutara_jumlah` varchar(10) NOT NULL,
  `jk_tanahsareal_jumlah` varchar(10) NOT NULL,
  `jk_jumlah_akhir` varchar(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `jumlahkeseluruhan_datapemilih`
--

INSERT INTO `jumlahkeseluruhan_datapemilih` (`id_jk_datapemilih`, `tahun`, `jk_bogorbarat_laki`, `jk_bogorselatan_laki`, `jk_bogortengah_laki`, `jk_bogortimur_laki`, `jk_bogorutara_laki`, `jk_tanahsareal_laki`, `jk_laki_jumlahakhir`, `jk_bogorbarat_perempuan`, `jk_bogorselatan_perempuan`, `jk_bogortengah_perempuan`, `jk_bogortimur_perempuan`, `jk_bogorutara_perempuan`, `jk_tanahsareal_perempuan`, `jk_perempuan_jumlahakhir`, `jk_bogorbarat_jumlah`, `jk_bogorselatan_jumlah`, `jk_bogortengah_jumlah`, `jk_bogortimur_jumlah`, `jk_bogorutara_jumlah`, `jk_tanahsareal_jumlah`, `jk_jumlah_akhir`, `user_id`, `created`, `modified`) VALUES
(2, '2014', '79664', '66918', '40127', '37005', '62069', '69821', '355604', '79577', '65007', '39536', '36677', '62850', '69713', '353360', '159241', '131925', '79663', '73682', '124919', '139534', '708964', 3, '2023-09-30 05:26:36', '2023-09-30 05:26:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jumlahkeseluruhan_hakpilih`
--

CREATE TABLE `jumlahkeseluruhan_hakpilih` (
  `id_jk_hakpilih` tinyint(2) NOT NULL,
  `tahun` year(4) NOT NULL,
  `hakpilih_jk_bogorbarat_laki` varchar(10) NOT NULL,
  `hakpilih_jk_bogorselatan_laki` varchar(10) NOT NULL,
  `hakpilih_jk_bogortengah_laki` varchar(10) NOT NULL,
  `hakpilih_jk_bogortimur_laki` varchar(10) NOT NULL,
  `hakpilih_jk_bogorutara_laki` varchar(10) NOT NULL,
  `hakpilih_jk_tanahsareal_laki` varchar(10) NOT NULL,
  `hakpilih_jk_laki_jumlahakhir` varchar(10) NOT NULL,
  `hakpilih_jk_bogorbarat_perempuan` varchar(10) NOT NULL,
  `hakpilih_jk_bogorselatan_perempuan` varchar(10) NOT NULL,
  `hakpilih_jk_bogortengah_perempuan` varchar(10) NOT NULL,
  `hakpilih_jk_bogortimur_perempuan` varchar(10) NOT NULL,
  `hakpilih_jk_bogorutara_perempuan` varchar(10) NOT NULL,
  `hakpilih_jk_tanahsareal_perempuan` varchar(10) NOT NULL,
  `hakpilih_jk_perempuan_jumlahakhir` varchar(10) NOT NULL,
  `hakpilih_jk_bogorbarat_jumlah` varchar(10) NOT NULL,
  `hakpilih_jk_bogorselatan_jumlah` varchar(10) NOT NULL,
  `hakpilih_jk_bogortengah_jumlah` varchar(10) NOT NULL,
  `hakpilih_jk_bogortimur_jumlah` varchar(10) NOT NULL,
  `hakpilih_jk_bogorutara_jumlah` varchar(10) NOT NULL,
  `hakpilih_jk_tanahsareal_jumlah` varchar(10) NOT NULL,
  `hakpilih_jk_jumlah_akhir` varchar(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `jumlahkeseluruhan_hakpilih`
--

INSERT INTO `jumlahkeseluruhan_hakpilih` (`id_jk_hakpilih`, `tahun`, `hakpilih_jk_bogorbarat_laki`, `hakpilih_jk_bogorselatan_laki`, `hakpilih_jk_bogortengah_laki`, `hakpilih_jk_bogortimur_laki`, `hakpilih_jk_bogorutara_laki`, `hakpilih_jk_tanahsareal_laki`, `hakpilih_jk_laki_jumlahakhir`, `hakpilih_jk_bogorbarat_perempuan`, `hakpilih_jk_bogorselatan_perempuan`, `hakpilih_jk_bogortengah_perempuan`, `hakpilih_jk_bogortimur_perempuan`, `hakpilih_jk_bogorutara_perempuan`, `hakpilih_jk_tanahsareal_perempuan`, `hakpilih_jk_perempuan_jumlahakhir`, `hakpilih_jk_bogorbarat_jumlah`, `hakpilih_jk_bogorselatan_jumlah`, `hakpilih_jk_bogortengah_jumlah`, `hakpilih_jk_bogortimur_jumlah`, `hakpilih_jk_bogorutara_jumlah`, `hakpilih_jk_tanahsareal_jumlah`, `hakpilih_jk_jumlah_akhir`, `user_id`, `created`, `modified`) VALUES
(3, '2014', '62027', '52080', '29792', '27745', '46497', '54427', '272568', '66209', '54395', '31292', '29165', '49854', '57415', '288330', '128236', '106475', '61084', '56910', '96351', '111842', '560898', 3, '2023-09-30 05:36:59', '2023-09-30 05:36:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id_kecamatan` int(11) NOT NULL,
  `kecamatan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kecamatan`
--

INSERT INTO `kecamatan` (`id_kecamatan`, `kecamatan`) VALUES
(1, 'Bogor Barat'),
(2, 'Bogor Selatan'),
(3, 'Bogor Tengah'),
(4, 'Bogor Timur'),
(5, 'Bogor Utara'),
(6, 'Tanah Sareal ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelurahan`
--

CREATE TABLE `kelurahan` (
  `id_kelurahan` int(11) NOT NULL,
  `id_kecamatan` int(11) NOT NULL,
  `kelurahan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kelurahan`
--

INSERT INTO `kelurahan` (`id_kelurahan`, `id_kecamatan`, `kelurahan`) VALUES
(1, 1, 'Balumbang Jaya'),
(2, 1, 'Bubulak'),
(3, 1, 'Cilendek Barat'),
(4, 1, 'Cilendek Timur'),
(5, 1, 'Curug'),
(6, 1, 'Curug Mekar'),
(7, 1, 'Gunung Batu'),
(8, 1, 'Loji'),
(9, 1, 'Margajaya'),
(10, 1, 'Menteng'),
(11, 1, 'Pasir Jaya'),
(12, 1, 'Pasir Kuda'),
(13, 1, 'Pasir Mulya'),
(14, 1, 'Semplak'),
(15, 1, 'Sindang Barang'),
(16, 1, 'Situ Gede'),
(17, 2, 'Batu Tulis'),
(18, 2, 'Bojongkerta'),
(19, 2, 'Bondongan'),
(20, 2, 'Cikaret'),
(21, 2, 'Cipaku'),
(22, 2, 'Empang'),
(23, 2, 'Genteng'),
(24, 2, 'Harjasari'),
(25, 2, 'Kertamaya'),
(26, 2, 'Lawang Gintung'),
(27, 2, 'Muarasari'),
(28, 2, 'Mulyaharja'),
(29, 2, 'Pakuan'),
(30, 2, 'Pamoyanan'),
(31, 2, 'Rancamaya'),
(32, 2, 'Ranggamekar'),
(33, 3, 'Babakan'),
(34, 3, 'Babakan Pasar'),
(35, 3, 'Cibogor'),
(36, 3, 'Ciwaringin'),
(37, 3, 'Gudang'),
(38, 3, 'Kebon Kalapa'),
(39, 3, 'Pabaton'),
(40, 3, 'Paledang'),
(41, 3, 'Panaragan'),
(42, 3, 'Sempur'),
(43, 3, 'Tegallega'),
(44, 4, 'Baranangsiang'),
(45, 4, 'Katulampa'),
(46, 4, 'Sindangrasa'),
(47, 4, 'Sindangsari'),
(48, 4, 'Sukasari'),
(49, 4, 'Tajur'),
(50, 5, 'Bantarjati'),
(51, 5, 'Cibuluh'),
(52, 5, 'Ciluar'),
(53, 5, 'Cimahpar'),
(54, 5, 'Ciparigi'),
(55, 5, 'Kedung Halang'),
(56, 5, 'Tanah Baru'),
(57, 5, 'Tegal Gundil'),
(58, 6, 'Cibadak'),
(59, 6, 'Kayu Manis'),
(60, 6, 'Kebon Pedes'),
(61, 6, 'Kedung Badak'),
(62, 6, 'Kedung Jaya'),
(63, 6, 'Kedung Waringin'),
(64, 6, 'Kencana'),
(65, 6, 'Mekar Wangi'),
(66, 6, 'Sukadamai'),
(67, 6, 'Sukaresmi'),
(68, 6, 'Tanah Sareal');

-- --------------------------------------------------------

--
-- Struktur dari tabel `logomaskot`
--

CREATE TABLE `logomaskot` (
  `id_logomaskot` tinyint(2) NOT NULL,
  `tahun` year(4) NOT NULL,
  `jadwal` varchar(25) NOT NULL,
  `desain_suratsuara` varchar(255) NOT NULL,
  `foto_paslon_satu` varchar(255) NOT NULL,
  `foto_paslon_dua` varchar(255) NOT NULL,
  `gambar_logo` varchar(255) NOT NULL,
  `gambar_maskot` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `logomaskot`
--

INSERT INTO `logomaskot` (`id_logomaskot`, `tahun`, `jadwal`, `desain_suratsuara`, `foto_paslon_satu`, `foto_paslon_dua`, `gambar_logo`, `gambar_maskot`, `user_id`, `created`, `modified`) VALUES
(44, '2014', 'Rabu, 09 Juli 2014', 'SuratSuara-Paslon-Pilpres-2014.png', 'Pilpres_2014_Prabowo-Hatta.png', 'Capres_2014-2019_Jokowi-JK-removebg-preview.png', 'logopemilu-2014.jpeg', 'maskot-2014.png', 3, '2023-10-16 00:06:58', '2023-10-16 00:06:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelantikan`
--

CREATE TABLE `pelantikan` (
  `id_pelantikan` tinyint(2) NOT NULL,
  `tahun` year(4) NOT NULL,
  `mulai_periode` year(4) NOT NULL,
  `akhir_periode` year(4) NOT NULL,
  `tgl_pelantikan` varchar(20) NOT NULL,
  `foto_presiden` varchar(255) NOT NULL,
  `nama_presiden` varchar(100) NOT NULL,
  `foto_wapres` varchar(255) NOT NULL,
  `nama_wapres` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pelantikan`
--

INSERT INTO `pelantikan` (`id_pelantikan`, `tahun`, `mulai_periode`, `akhir_periode`, `tgl_pelantikan`, `foto_presiden`, `nama_presiden`, `foto_wapres`, `nama_wapres`, `user_id`, `created`, `modified`) VALUES
(3, '2014', '2014', '2019', '20 Oktober 2014', 'Joko_Widodo_2014_official_portrait.jpg', 'Ir. H. Joko Widodo', 'Jusuf_Kalla_2014.jpg', 'Drs. H. Muhammad Jusuf Kalla', 3, '2023-11-01 08:48:19', '2023-11-01 09:17:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `piechart_kota`
--

CREATE TABLE `piechart_kota` (
  `id` tinyint(2) NOT NULL,
  `tahun` year(4) NOT NULL,
  `nama_capres_satu` varchar(100) NOT NULL,
  `nama_capres_dua` varchar(100) NOT NULL,
  `rincian_kotabogor_satu` varchar(10) NOT NULL,
  `rincian_persen_kotabogor_satu` varchar(5) NOT NULL,
  `rincian_kotabogor_dua` varchar(10) NOT NULL,
  `rincian_persen_kotabogor_dua` varchar(5) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `piechart_kota`
--

INSERT INTO `piechart_kota` (`id`, `tahun`, `nama_capres_satu`, `nama_capres_dua`, `rincian_kotabogor_satu`, `rincian_persen_kotabogor_satu`, `rincian_kotabogor_dua`, `rincian_persen_kotabogor_dua`, `user_id`, `created`, `modified`) VALUES
(3, '2014', 'H. Prabowo Subianto - Ir. H.M. Hatta Rajasa', 'Ir. H. Joko Widodo - Drs. H.M. Jusuf Kalla', '340286', '61.77', '210578', '38.22', 3, '2023-09-19 06:50:31', '2023-09-19 06:50:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `piechart_nasional`
--

CREATE TABLE `piechart_nasional` (
  `id` tinyint(2) NOT NULL,
  `tahun` year(4) NOT NULL,
  `nama_capres_satu` varchar(10) NOT NULL,
  `nama_capres_dua` varchar(10) NOT NULL,
  `rincian_nasional_satu` varchar(10) NOT NULL,
  `rincian_nasional_dua` varchar(10) NOT NULL,
  `rincian_persen_nasional_satu` varchar(10) NOT NULL,
  `rincian_persen_nasional_dua` varchar(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `piechart_nasional`
--

INSERT INTO `piechart_nasional` (`id`, `tahun`, `nama_capres_satu`, `nama_capres_dua`, `rincian_nasional_satu`, `rincian_nasional_dua`, `rincian_persen_nasional_satu`, `rincian_persen_nasional_dua`, `user_id`, `created`, `modified`) VALUES
(2, '2014', 'H. Prabowo', 'Ir. H. Jok', '62576444', '70997833', '46.8476756', '53.1523243', 3, '2023-09-19 10:59:15', '2023-09-19 10:59:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `piechart_provinsi`
--

CREATE TABLE `piechart_provinsi` (
  `id` tinyint(2) NOT NULL,
  `tahun` year(4) NOT NULL,
  `nama_capres_satu` varchar(100) NOT NULL,
  `nama_capres_dua` varchar(100) NOT NULL,
  `rincian_provinsi_satu` varchar(10) NOT NULL,
  `rincian_persen_provinsi_satu` varchar(5) NOT NULL,
  `rincian_provinsi_dua` varchar(10) NOT NULL,
  `rincian_persen_provinsi_dua` varchar(5) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `piechart_provinsi`
--

INSERT INTO `piechart_provinsi` (`id`, `tahun`, `nama_capres_satu`, `nama_capres_dua`, `rincian_provinsi_satu`, `rincian_persen_provinsi_satu`, `rincian_provinsi_dua`, `rincian_persen_provinsi_dua`, `user_id`, `created`, `modified`) VALUES
(2, '2014', 'H. Prabowo Subianto - Ir. H.M. Hatta Rajasa', 'Ir. H. Joko Widodo - Drs. H.M. Jusuf Kalla', '14167381', '59.78', '9530315', '40.21', 3, '2023-09-19 07:51:05', '2023-09-19 07:51:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekaphasilsuarasah_kecamatan`
--

CREATE TABLE `rekaphasilsuarasah_kecamatan` (
  `id_rekapkecamatan` tinyint(2) NOT NULL,
  `tahun` year(4) NOT NULL,
  `capres_satu` varchar(255) NOT NULL,
  `nama_capres_satu` varchar(100) NOT NULL,
  `capres_dua` varchar(255) NOT NULL,
  `nama_capres_dua` varchar(100) NOT NULL,
  `rincian_bogorbarat_satu` varchar(15) NOT NULL,
  `rincian_bogorselatan_satu` varchar(15) NOT NULL,
  `rincian_bogortengah_satu` varchar(15) NOT NULL,
  `rincian_bogortimur_satu` varchar(15) NOT NULL,
  `rincian_bogorutara_satu` varchar(15) NOT NULL,
  `rincian_tanahsareal_satu` varchar(15) NOT NULL,
  `jumlahakhir_rincian_satu` varchar(15) NOT NULL,
  `rincian_bogorbarat_dua` varchar(15) NOT NULL,
  `rincian_bogorselatan_dua` varchar(15) NOT NULL,
  `rincian_bogortengah_dua` varchar(15) NOT NULL,
  `rincian_bogortimur_dua` varchar(15) NOT NULL,
  `rincian_bogorutara_dua` varchar(15) NOT NULL,
  `rincian_tanahsareal_dua` varchar(15) NOT NULL,
  `jumlahakhir_rincian_dua` varchar(15) NOT NULL,
  `suarasah_bogorbarat` varchar(15) NOT NULL,
  `suarasah_bogorselatan` varchar(15) NOT NULL,
  `suarasah_bogortengah` varchar(15) NOT NULL,
  `suarasah_bogortimur` varchar(15) NOT NULL,
  `suarasah_bogorutara` varchar(15) NOT NULL,
  `suarasah_tanahsareal` varchar(15) NOT NULL,
  `jumlahakhir_suarasah` varchar(15) NOT NULL,
  `suaratdksah_bogorbarat` varchar(15) NOT NULL,
  `suaratdksah_bogorselatan` varchar(15) NOT NULL,
  `suaratdksah_bogortengah` varchar(15) NOT NULL,
  `suaratdksah_bogortimur` varchar(15) NOT NULL,
  `suaratdksah_bogorutara` varchar(15) NOT NULL,
  `suaratdksah_tanahsareal` varchar(15) NOT NULL,
  `jumlahakhir_suaratdksah` varchar(15) NOT NULL,
  `suarasah_tdksah_bogorbarat` varchar(15) NOT NULL,
  `suarasah_tdksah_bogorselatan` varchar(15) NOT NULL,
  `suarasah_tdksah_bogortengah` varchar(15) NOT NULL,
  `suarasah_tdksah_bogortimur` varchar(15) NOT NULL,
  `suarasah_tdksah_bogorutara` varchar(15) NOT NULL,
  `suarasah_tdksah_tanahsareal` varchar(15) NOT NULL,
  `jumlahakhir_suarasah_tdksah` varchar(15) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `rekaphasilsuarasah_kecamatan`
--

INSERT INTO `rekaphasilsuarasah_kecamatan` (`id_rekapkecamatan`, `tahun`, `capres_satu`, `nama_capres_satu`, `capres_dua`, `nama_capres_dua`, `rincian_bogorbarat_satu`, `rincian_bogorselatan_satu`, `rincian_bogortengah_satu`, `rincian_bogortimur_satu`, `rincian_bogorutara_satu`, `rincian_tanahsareal_satu`, `jumlahakhir_rincian_satu`, `rincian_bogorbarat_dua`, `rincian_bogorselatan_dua`, `rincian_bogortengah_dua`, `rincian_bogortimur_dua`, `rincian_bogorutara_dua`, `rincian_tanahsareal_dua`, `jumlahakhir_rincian_dua`, `suarasah_bogorbarat`, `suarasah_bogorselatan`, `suarasah_bogortengah`, `suarasah_bogortimur`, `suarasah_bogorutara`, `suarasah_tanahsareal`, `jumlahakhir_suarasah`, `suaratdksah_bogorbarat`, `suaratdksah_bogorselatan`, `suaratdksah_bogortengah`, `suaratdksah_bogortimur`, `suaratdksah_bogorutara`, `suaratdksah_tanahsareal`, `jumlahakhir_suaratdksah`, `suarasah_tdksah_bogorbarat`, `suarasah_tdksah_bogorselatan`, `suarasah_tdksah_bogortengah`, `suarasah_tdksah_bogortimur`, `suarasah_tdksah_bogorutara`, `suarasah_tdksah_tanahsareal`, `jumlahakhir_suarasah_tdksah`, `user_id`, `created`, `modified`) VALUES
(11, '2014', 'paslon1-prabowo_hatta.png', 'H. Prabowo Subianto - Ir. H.M. Hatta Rajasa', 'paslon2-jokowi_jusufkalla.png', 'Ir. H. Joko Widodo - Drs. H.M. Jusuf Kalla', '80800', '63572', '35204', '30962', '59389', '70359', '340286', '45640', '40203', '24812', '24809', '35076', '40038', '210578', '126440', '103775', '60016', '55771', '94465', '110397', '550864', '1796', '2700', '1068', '1139', '1886', '1445', '10034', '128236', '106475', '61084', '56910', '96351', '111842', '560898', 3, '2023-09-18 05:59:53', '2023-09-18 05:59:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekaphasilsuarasah_provinsi`
--

CREATE TABLE `rekaphasilsuarasah_provinsi` (
  `id_rekapprovinsi` tinyint(2) NOT NULL,
  `tahun` year(4) NOT NULL,
  `capres_satu` varchar(255) NOT NULL,
  `nama_capres_satu` varchar(100) NOT NULL,
  `capres_dua` varchar(255) NOT NULL,
  `nama_capres_dua` varchar(100) NOT NULL,
  `rincian_kotabogor_satu` varchar(15) NOT NULL,
  `rincian_persen_kotabogor_satu` varchar(5) NOT NULL,
  `rincian_provinsi_satu` varchar(15) NOT NULL,
  `rincian_persen_provinsi_satu` varchar(5) NOT NULL,
  `rincian_nasional_satu` varchar(15) NOT NULL,
  `rincian_persen_nasional_satu` varchar(5) NOT NULL,
  `rincian_kotabogor_dua` varchar(15) NOT NULL,
  `rincian_persen_kotabogor_dua` varchar(5) NOT NULL,
  `rincian_provinsi_dua` varchar(15) NOT NULL,
  `rincian_persen_provinsi_dua` varchar(5) NOT NULL,
  `rincian_nasional_dua` varchar(15) NOT NULL,
  `rincian_persen_nasional_dua` varchar(5) NOT NULL,
  `suarasah_kotabogor` varchar(15) NOT NULL,
  `suarasah_provinsi` varchar(15) NOT NULL,
  `suarasah_nasional` varchar(15) NOT NULL,
  `suaratdksah_kotabogor` varchar(15) NOT NULL,
  `suaratdksah_provinsi` varchar(15) NOT NULL,
  `suaratdksah_nasional` varchar(15) NOT NULL,
  `suarasah_tdksah_kotabogor` varchar(15) NOT NULL,
  `suarasah_tdksah_provinsi` varchar(15) NOT NULL,
  `suarasah_tdksah_nasional` varchar(15) NOT NULL,
  `hakpemilih_kotabogor` varchar(15) NOT NULL,
  `hakpemilih_provinsi` varchar(15) NOT NULL,
  `hakpemilih_nasional` varchar(15) NOT NULL,
  `tdkhakpemilih_kotabogor` varchar(15) NOT NULL,
  `tdkhakpemilih_provinsi` varchar(15) NOT NULL,
  `tdkhakpemilih_nasional` varchar(15) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `rekaphasilsuarasah_provinsi`
--

INSERT INTO `rekaphasilsuarasah_provinsi` (`id_rekapprovinsi`, `tahun`, `capres_satu`, `nama_capres_satu`, `capres_dua`, `nama_capres_dua`, `rincian_kotabogor_satu`, `rincian_persen_kotabogor_satu`, `rincian_provinsi_satu`, `rincian_persen_provinsi_satu`, `rincian_nasional_satu`, `rincian_persen_nasional_satu`, `rincian_kotabogor_dua`, `rincian_persen_kotabogor_dua`, `rincian_provinsi_dua`, `rincian_persen_provinsi_dua`, `rincian_nasional_dua`, `rincian_persen_nasional_dua`, `suarasah_kotabogor`, `suarasah_provinsi`, `suarasah_nasional`, `suaratdksah_kotabogor`, `suaratdksah_provinsi`, `suaratdksah_nasional`, `suarasah_tdksah_kotabogor`, `suarasah_tdksah_provinsi`, `suarasah_tdksah_nasional`, `hakpemilih_kotabogor`, `hakpemilih_provinsi`, `hakpemilih_nasional`, `tdkhakpemilih_kotabogor`, `tdkhakpemilih_provinsi`, `tdkhakpemilih_nasional`, `user_id`, `created`, `modified`) VALUES
(3, '2014', 'paslon1-prabowo_hatta.png', 'H. Prabowo Subianto - Ir. H.M. Hatta Rajasa', 'paslon2-jokowi_jusufkalla.png', 'Ir. H. Joko Widodo - Drs. H.M. Jusuf Kalla', '340286', '61.77', '14167381', '59.78', '62576444', '46.84', '210578', '38.22', '9530315', '40.21', '70997833', '53.15', '550864', '23697696', '133574277', '10034', '292393', '1379690', '560898', '23990089', '134953967', '708964', '33821378', '193944150', '148066', '9831289', '58990183', 3, '2023-09-18 07:25:49', '2023-09-18 07:25:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekappartisipasi_tps`
--

CREATE TABLE `rekappartisipasi_tps` (
  `id_rekap` tinyint(2) NOT NULL,
  `tahun` year(4) NOT NULL,
  `jml_kelurahan_bgrbarat` varchar(5) NOT NULL,
  `jml_tps_bgrbarat` varchar(5) NOT NULL,
  `jml_pemilih_laki_bgrbarat` varchar(10) NOT NULL,
  `jml_pemilih_perempuan_bgrbarat` varchar(10) NOT NULL,
  `jml_pemilih_lakiperempuan_bgrbarat` varchar(10) NOT NULL,
  `ket_bogorbarat` text NOT NULL,
  `jml_kelurahan_bgrselatan` varchar(5) NOT NULL,
  `jml_tps_bgrselatan` varchar(5) NOT NULL,
  `jml_pemilih_laki_bgrselatan` varchar(10) NOT NULL,
  `jml_pemilih_perempuan_bgrselatan` varchar(10) NOT NULL,
  `jml_pemilih_lakiperempuan_bgrselatan` varchar(10) NOT NULL,
  `ket_bogorselatan` text NOT NULL,
  `jml_kelurahan_bgrtengah` varchar(5) NOT NULL,
  `jml_tps_bgrtengah` varchar(5) NOT NULL,
  `jml_pemilih_laki_bgrtengah` varchar(10) NOT NULL,
  `jml_pemilih_perempuan_bgrtengah` varchar(10) NOT NULL,
  `jml_pemilih_lakiperempuan_bgrtengah` varchar(10) NOT NULL,
  `ket_bogortengah` text NOT NULL,
  `jml_kelurahan_bgrtimur` varchar(5) NOT NULL,
  `jml_tps_bgrtimur` varchar(5) NOT NULL,
  `jml_pemilih_laki_bgrtimur` varchar(10) NOT NULL,
  `jml_pemilih_perempuan_bgrtimur` varchar(10) NOT NULL,
  `jml_pemilih_lakiperempuan_bgrtimur` varchar(10) NOT NULL,
  `ket_bogortimur` text NOT NULL,
  `jml_kelurahan_bgrutara` varchar(5) NOT NULL,
  `jml_tps_bgrutara` varchar(5) NOT NULL,
  `jml_pemilih_laki_bgrutara` varchar(10) NOT NULL,
  `jml_pemilih_perempuan_bgrutara` varchar(10) NOT NULL,
  `jml_pemilih_lakiperempuan_bgrutara` varchar(10) NOT NULL,
  `ket_bogorutara` text NOT NULL,
  `jml_kelurahan_tnhsareal` varchar(5) NOT NULL,
  `jml_tps_tnhsareal` varchar(5) NOT NULL,
  `jml_pemilih_laki_tnhsareal` varchar(10) NOT NULL,
  `jml_pemilih_perempuan_tnhsareal` varchar(10) NOT NULL,
  `jml_pemilih_lakiperempuan_tnhsareal` varchar(10) NOT NULL,
  `ket_tanahsareal` text NOT NULL,
  `total_jmlkelurahan` varchar(10) NOT NULL,
  `total_jmltps` varchar(10) NOT NULL,
  `total_jmlpemilihlaki` varchar(10) NOT NULL,
  `total_jmlpemilihperempuan` varchar(10) NOT NULL,
  `total_jmlpemilihlakiperempuan` varchar(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `rekappartisipasi_tps`
--

INSERT INTO `rekappartisipasi_tps` (`id_rekap`, `tahun`, `jml_kelurahan_bgrbarat`, `jml_tps_bgrbarat`, `jml_pemilih_laki_bgrbarat`, `jml_pemilih_perempuan_bgrbarat`, `jml_pemilih_lakiperempuan_bgrbarat`, `ket_bogorbarat`, `jml_kelurahan_bgrselatan`, `jml_tps_bgrselatan`, `jml_pemilih_laki_bgrselatan`, `jml_pemilih_perempuan_bgrselatan`, `jml_pemilih_lakiperempuan_bgrselatan`, `ket_bogorselatan`, `jml_kelurahan_bgrtengah`, `jml_tps_bgrtengah`, `jml_pemilih_laki_bgrtengah`, `jml_pemilih_perempuan_bgrtengah`, `jml_pemilih_lakiperempuan_bgrtengah`, `ket_bogortengah`, `jml_kelurahan_bgrtimur`, `jml_tps_bgrtimur`, `jml_pemilih_laki_bgrtimur`, `jml_pemilih_perempuan_bgrtimur`, `jml_pemilih_lakiperempuan_bgrtimur`, `ket_bogortimur`, `jml_kelurahan_bgrutara`, `jml_tps_bgrutara`, `jml_pemilih_laki_bgrutara`, `jml_pemilih_perempuan_bgrutara`, `jml_pemilih_lakiperempuan_bgrutara`, `ket_bogorutara`, `jml_kelurahan_tnhsareal`, `jml_tps_tnhsareal`, `jml_pemilih_laki_tnhsareal`, `jml_pemilih_perempuan_tnhsareal`, `jml_pemilih_lakiperempuan_tnhsareal`, `ket_tanahsareal`, `total_jmlkelurahan`, `total_jmltps`, `total_jmlpemilihlaki`, `total_jmlpemilihperempuan`, `total_jmlpemilihlakiperempuan`, `user_id`, `created`, `modified`) VALUES
(16, '2014', '16', '322', '76625', '76097', '152722', '', '16', '317', '65166', '63178', '128344', '', '11', '203', '38786', '38127', '76913', '', '6', '191', '35410', '35077', '70487', '', '8', '288', '59379', '59510', '118889', '', '11', '386', '66652', '66169', '132821', '', '68', '1707', '342018', '338158', '680176', 3, '2023-09-29 10:38:27', '2023-09-29 10:38:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_partai`
--

CREATE TABLE `tb_partai` (
  `id_partai` int(11) NOT NULL,
  `nama_partai` varchar(100) NOT NULL,
  `bendera` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_partai`
--

INSERT INTO `tb_partai` (`id_partai`, `nama_partai`, `bendera`, `created`, `modified`) VALUES
(1, 'Partai Amanat Nasional', 'Partai_Amanat_Nasional1.png', '2023-08-28 07:22:12', '2023-08-28 07:30:14'),
(2, 'Partai Bulan Bintang', 'Partai_Bulan_Bintang1.png', '2023-08-28 07:22:39', '2023-08-28 07:31:30'),
(3, 'Partai Demokrasi Indonesia Perjuangan', 'Partai_Demokrasi_Indonesia_Perjuangan1.png', '2023-08-28 07:23:03', '2023-08-28 07:31:54'),
(4, 'Partai Gerakan Indonesia Raya', 'Partai_Gerakan_Indonesia_Raya1.png', '2023-08-28 07:23:39', '2023-08-28 07:23:39'),
(5, 'Partai Golongan Karya', 'Partai_Golongan_Karya1.png', '2023-08-28 07:24:01', '2023-08-28 07:24:01'),
(6, 'Partai Hati Nurani Rakyat', 'Logo_Hanura1.png', '2023-08-28 07:24:30', '2023-08-28 07:24:30'),
(8, 'Partai Keadilan Sejahtera', 'LOGO_PKS1.png', '2023-08-28 07:25:54', '2023-08-28 07:25:54'),
(9, 'Partai Kebangkitan Bangsa', 'Logo_PKB1.png', '2023-08-28 07:26:20', '2023-08-28 07:26:20'),
(10, 'Partai Nasional Demokrat', 'Partai_Nasional_Demokrat1.png', '2023-08-28 07:26:55', '2023-08-28 07:26:55'),
(11, 'Partai Persatuan Pembangunan', 'Partai_Persatuan_Pembangunan1.png', '2023-08-28 07:27:44', '2023-08-28 07:27:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pasangancalon`
--

CREATE TABLE `tb_pasangancalon` (
  `id_pasangancalon` int(11) NOT NULL,
  `tahun` year(4) NOT NULL,
  `foto_capres` varchar(255) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_pasangancalon`
--

INSERT INTO `tb_pasangancalon` (`id_pasangancalon`, `tahun`, `foto_capres`, `nama`, `visi`, `misi`, `kategori`, `user_id`, `created`, `modified`) VALUES
(63, '2014', 'paslon1-prabowo_hatta.png', 'H. Prabowo Subianto - Ir. H.M. Hatta Rajasa', '<p style=\"text-align:center\">&quot;MEMBANGUN INDONESIA YANG BERSATU, BERDAULAT, ADIL DAN MAKMUR SERTA MARTABAT&quot;</p>\r\n', '<ol>\r\n	<li>Mewujudkan NKRI yang aman dan stabil, sejahtera, demokratis dan berdaulat, serta berperan aktif dalam menciptakan perdamaian dunia, serta konsisten melaksanakan Pancasila dan UUD 1945.</li>\r\n	<li>Mewujudkan Indonesia yang adil, makmur, nerkerakyatan, dan mandiri.</li>\r\n	<li>Mewujudkan Indonesia yang berkeadilan sosial, dengan sumber daya manusia yang berakhlak, berbudaya luhur, berkualitas tinggi : sehat, cerdas, kreatif dan trampil.</li>\r\n</ol>\r\n', 'Pasangan Calon 1', 3, '2023-10-17 07:30:35', '2023-10-19 08:12:01'),
(64, '2014', 'paslon2-jokowi_jusufkalla.png', 'Ir. H. Joko Widodo - Drs. H.M. Jusuf Kalla', '<p style=\"text-align:center\">&quot;TERWUJUDNYA INDONESIA YANG BERDAULAT, MANDIRI DAN BERKEPRIBADIAN BERDASARKAN GOTONG ROYONG&quot;</p>\r\n', '<ol>\r\n	<li>Mewujudkan keamanan nasional yang mampu menjaga kedaulatan wilayah, menopang kemandirian ekonomi dengan mengamankan sumberdaya maritim, dan mencerminkan kepribadian Indonesia sebagai negara kepulauan.</li>\r\n	<li>Mewujudkan masyarakat maju, berkeseimbangan dan demokratis berlandasan negara hukum.</li>\r\n	<li>Mewujudkan politik luar negeri bebas aktif dan memperkuat jati diri sebagai negara maritim.</li>\r\n	<li>Mewujudkan kualitas hidup manusia Indonesia yang tinggi, mau dan sejahtera.</li>\r\n	<li>Mewujudkan bangsa yang berdaya saing.</li>\r\n	<li>Mewujudkan Indonesia menjadi negara maritim yang mandiri, maju, kuat, dan berbasiskan kepentingan nasional.</li>\r\n	<li>Mewujudkan masyarakat yang berkepribadian dalam kebudayaan.</li>\r\n</ol>\r\n', 'Pasangan Calon 2', 3, '2023-10-17 07:33:13', '2023-10-19 08:12:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pendukungpartai`
--

CREATE TABLE `tb_pendukungpartai` (
  `id_pendukungpartai` tinyint(2) NOT NULL,
  `paslon_id` int(11) NOT NULL,
  `partai_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_pendukungpartai`
--

INSERT INTO `tb_pendukungpartai` (`id_pendukungpartai`, `paslon_id`, `partai_id`, `user_id`, `created`, `modified`) VALUES
(113, 63, 1, 3, '2023-10-17 07:30:35', '2023-10-17 07:30:35'),
(114, 63, 2, 3, '2023-10-17 07:30:36', '2023-10-17 07:30:36'),
(115, 63, 4, 3, '2023-10-17 07:30:36', '2023-10-17 07:30:36'),
(116, 63, 5, 3, '2023-10-17 07:30:36', '2023-10-17 07:30:36'),
(117, 63, 8, 3, '2023-10-17 07:30:37', '2023-10-17 07:30:37'),
(118, 63, 11, 3, '2023-10-17 07:30:37', '2023-10-17 07:30:37'),
(119, 64, 3, 3, '2023-10-17 07:33:13', '2023-10-17 07:33:13'),
(120, 64, 6, 3, '2023-10-17 07:33:13', '2023-10-17 07:33:13'),
(121, 64, 9, 3, '2023-10-17 07:33:13', '2023-10-17 07:33:13'),
(122, 64, 10, 3, '2023-10-17 07:33:13', '2023-10-17 07:33:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `tahun` year(4) NOT NULL,
  `password` text NOT NULL,
  `level_user` int(2) NOT NULL,
  `status_user` int(2) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `tahun`, `password`, `level_user`, `status_user`, `created`, `modified`) VALUES
(3, 'Arsip Pilpres 2014', '2014', '$2y$10$b3vEkhwV96yruU3KnTVEl.WFGpAQciYs4UcQp6yykdc0EXs66WjDe', 1, 1, '2022-11-02 08:07:30', '2022-11-02 08:07:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `viewmap`
--

CREATE TABLE `viewmap` (
  `id_viewmap` int(11) NOT NULL,
  `tahun` year(4) NOT NULL,
  `kecamatan` varchar(15) NOT NULL,
  `kelurahan` varchar(130) NOT NULL,
  `geojson` varchar(255) NOT NULL,
  `warna` varchar(10) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `foto_capres` varchar(255) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jml_paslon_satu` varchar(5) NOT NULL,
  `jml_paslon_dua` varchar(5) NOT NULL,
  `persen_paslon_satu` varchar(3) NOT NULL,
  `persen_paslon_dua` varchar(3) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `viewmap`
--

INSERT INTO `viewmap` (`id_viewmap`, `tahun`, `kecamatan`, `kelurahan`, `geojson`, `warna`, `kategori`, `foto_capres`, `nama`, `jml_paslon_satu`, `jml_paslon_dua`, `persen_paslon_satu`, `persen_paslon_dua`, `user_id`) VALUES
(3, '2014', '1', '1', '1', '#ff8000', 'Pasangan Calon 1', 'paslon1-prabowo_hatta.png', 'H. Prabowo Subianto - Ir. H.M. Hatta Rajasa', '3918', '2834', '58', '42', 3),
(4, '2014', '1', '2', '2', '#ff8000', 'Pasangan Calon 1', 'paslon1-prabowo_hatta.png', 'H. Prabowo Subianto - Ir. H.M. Hatta Rajasa', '5278', '3406', '61', '39', 3),
(5, '2014', '1', '3', '3', '#ff8000', 'Pasangan Calon 1', 'paslon1-prabowo_hatta.png', 'H. Prabowo Subianto - Ir. H.M. Hatta Rajasa', '6435', '3671', '64', '36', 3),
(6, '2014', '1', '4', '4', '#ff8000', 'Pasangan Calon 1', 'paslon1-prabowo_hatta.png', 'H. Prabowo Subianto - Ir. H.M. Hatta Rajasa', '6674', '3292', '67', '33', 3),
(7, '2014', '1', '5', '5', '#ff8000', 'Pasangan Calon 1', 'paslon1-prabowo_hatta.png', 'H. Prabowo Subianto - Ir. H.M. Hatta Rajasa', '4226', '2591', '62', '38', 3),
(8, '2014', '1', '6', '6', '#ff8000', 'Pasangan Calon 1', 'paslon1-prabowo_hatta.png', 'H. Prabowo Subianto - Ir. H.M. Hatta Rajasa', '4323', '2868', '60', '40', 3),
(9, '2014', '1', '7', '7', '#ff8000', 'Pasangan Calon 1', 'paslon1-prabowo_hatta.png', 'H. Prabowo Subianto - Ir. H.M. Hatta Rajasa', '7423', '3570', '68', '32', 3),
(10, '2014', '1', '8', '8', '#ff8000', 'Pasangan Calon 1', 'paslon1-prabowo_hatta.png', 'H. Prabowo Subianto - Ir. H.M. Hatta Rajasa', '5639', '2456', '70', '30', 3),
(11, '2014', '1', '9', '9', '#ff8000', 'Pasangan Calon 1', 'paslon1-prabowo_hatta.png', 'H. Prabowo Subianto - Ir. H.M. Hatta Rajasa', '2067', '1331', '61', '39', 3),
(12, '2014', '1', '10', '10', '#ff8000', 'Pasangan Calon 1', 'paslon1-prabowo_hatta.png', 'H. Prabowo Subianto - Ir. H.M. Hatta Rajasa', '6148', '3507', '64', '36', 3),
(13, '2014', '1', '11', '11', '#ff8000', 'Pasangan Calon 1', 'paslon1-prabowo_hatta.png', 'H. Prabowo Subianto - Ir. H.M. Hatta Rajasa', '7573', '3688', '67', '33', 3),
(14, '2014', '1', '12', '12', '#ff8000', 'Pasangan Calon 1', 'paslon1-prabowo_hatta.png', 'H. Prabowo Subianto - Ir. H.M. Hatta Rajasa', '5852', '2648', '69', '31', 3),
(15, '2014', '1', '13', '13', '#ff8000', 'Pasangan Calon 1', 'paslon1-prabowo_hatta.png', 'H. Prabowo Subianto - Ir. H.M. Hatta Rajasa', '1975', '1208', '62', '38', 3),
(16, '2014', '1', '14', '14', '#ff8000', 'Pasangan Calon 1', 'paslon1-prabowo_hatta.png', 'H. Prabowo Subianto - Ir. H.M. Hatta Rajasa', '3831', '2679', '59', '41', 3),
(17, '2014', '1', '15', '15', '#ff8000', 'Pasangan Calon 1', 'paslon1-prabowo_hatta.png', 'H. Prabowo Subianto - Ir. H.M. Hatta Rajasa', '6024', '3345', '64', '36', 3),
(18, '2014', '1', '16', '16', '#ff8000', 'Pasangan Calon 1', 'paslon1-prabowo_hatta.png', 'H. Prabowo Subianto - Ir. H.M. Hatta Rajasa', '3413', '2546', '57', '43', 3),
(20, '2014', '2', '17', '17', '#ff0000', 'Pasangan Calon 1', 'paslon2-jokowi_jusufkalla.png', 'Ir. H. Joko Widodo - Drs. H.M. Jusuf Kalla', '2900', '3530', '45', '55', 3),
(21, '2014', '2', '18', '18', '#ff8000', 'Pasangan Calon 1', 'paslon1-prabowo_hatta.png', 'H. Prabowo Subianto - Ir. H.M. Hatta Rajasa', '3513', '1072', '77', '23', 3),
(22, '2014', '2', '19', '19', '#ff8000', 'Pasangan Calon 1', 'paslon1-prabowo_hatta.png', 'H. Prabowo Subianto - Ir. H.M. Hatta Rajasa', '4203', '4100', '51', '49', 3),
(23, '2014', '2', '20', '20', '#ff8000', 'Pasangan Calon 1', 'paslon1-prabowo_hatta.png', 'H. Prabowo Subianto - Ir. H.M. Hatta Rajasa', '7081', '3851', '65', '35', 3),
(24, '2014', '2', '21', '21', '#ff8000', 'Pasangan Calon 1', 'paslon1-prabowo_hatta.png', 'H. Prabowo Subianto - Ir. H.M. Hatta Rajasa', '4257', '3382', '56', '44', 3),
(25, '2014', '2', '22', '22', '#ff8000', 'Pasangan Calon 1', 'paslon1-prabowo_hatta.png', 'H. Prabowo Subianto - Ir. H.M. Hatta Rajasa', '6207', '3909', '61', '39', 3),
(26, '2014', '2', '23', '23', '#ff8000', 'Pasangan Calon 1', 'paslon1-prabowo_hatta.png', 'H. Prabowo Subianto - Ir. H.M. Hatta Rajasa', '3123', '1523', '67', '33', 3),
(27, '2014', '2', '24', '24', '#ff8000', 'Pasangan Calon 1', 'paslon1-prabowo_hatta.png', 'H. Prabowo Subianto - Ir. H.M. Hatta Rajasa', '4603', '2236', '67', '33', 3),
(28, '2014', '2', '25', '25', '#ff8000', 'Pasangan Calon 1', 'paslon1-prabowo_hatta.png', 'H. Prabowo Subianto - Ir. H.M. Hatta Rajasa', '2291', '829', '73', '27', 3),
(29, '2014', '2', '26', '26', '#ff8000', 'Pasangan Calon 1', 'paslon1-prabowo_hatta.png', 'H. Prabowo Subianto - Ir. H.M. Hatta Rajasa', '2462', '1601', '61', '39', 3),
(30, '2014', '2', '27', '27', '#ff8000', 'Pasangan Calon 1', 'paslon1-prabowo_hatta.png', 'H. Prabowo Subianto - Ir. H.M. Hatta Rajasa', '3693', '1902', '66', '34', 3),
(31, '2014', '2', '28', '28', '#ff8000', 'Pasangan Calon 1', 'paslon1-prabowo_hatta.png', 'H. Prabowo Subianto - Ir. H.M. Hatta Rajasa', '6312', '3598', '64', '36', 3),
(32, '2014', '2', '29', '29', '#ff0000', 'Pasangan Calon 2', 'paslon2-jokowi_jusufkalla.png', 'Ir. H. Joko Widodo - Drs. H.M. Jusuf Kalla', '1512', '1707', '47', '53', 3),
(33, '2014', '2', '30', '30', '#ff8000', 'Pasangan Calon 1', 'paslon1-prabowo_hatta.png', 'H. Prabowo Subianto - Ir. H.M. Hatta Rajasa', '4638', '2790', '62', '38', 3),
(34, '2014', '2', '31', '31', '#ff8000', 'Pasangan Calon 1', 'paslon1-prabowo_hatta.png', 'H. Prabowo Subianto - Ir. H.M. Hatta Rajasa', '2225', '1072', '67', '33', 3),
(35, '2014', '2', '32', '32', '#ff8000', 'Pasangan Calon 1', 'paslon1-prabowo_hatta.png', 'H. Prabowo Subianto - Ir. H.M. Hatta Rajasa', '4552', '3101', '59', '41', 3),
(36, '2014', '3', '33', '33', '#ff8000', 'Pasangan Calon 1', 'paslon1-prabowo_hatta.png', 'H. Prabowo Subianto - Ir. H.M. Hatta Rajasa', '2959', '1800', '62', '38', 3),
(37, '2014', '3', '34', '34', '#ff0000', 'Pasangan Calon 2', 'paslon2-jokowi_jusufkalla.png', 'Ir. H. Joko Widodo - Drs. H.M. Jusuf Kalla', '2930', '3672', '44', '56', 3),
(38, '2014', '3', '35', '35', '#ff8000', 'Pasangan Calon 1', 'paslon1-prabowo_hatta.png', 'H. Prabowo Subianto - Ir. H.M. Hatta Rajasa', '2596', '1709', '60', '40', 3),
(39, '2014', '3', '36', '36', '#ff8000', 'Pasangan Calon 1', 'paslon1-prabowo_hatta.png', 'H. Prabowo Subianto - Ir. H.M. Hatta Rajasa', '2974', '1763', '63', '37', 3),
(40, '2014', '3', '37', '37', '#ff0000', 'Pasangan Calon 2', 'paslon2-jokowi_jusufkalla.png', 'Ir. H. Joko Widodo - Drs. H.M. Jusuf Kalla', '1955', '2613', '43', '57', 3),
(41, '2014', '3', '38', '38', '#ff8000', 'Pasangan Calon 1', 'paslon1-prabowo_hatta.png', 'H. Prabowo Subianto - Ir. H.M. Hatta Rajasa', '4110', '2536', '62', '38', 3),
(42, '2014', '3', '39', '39', '#ff0000', 'Pasangan Calon 2', 'paslon2-jokowi_jusufkalla.png', 'Ir. H. Joko Widodo - Drs. H.M. Jusuf Kalla', '821', '1228', '40', '60', 3),
(43, '2014', '3', '40', '40', '#ff8000', 'Pasangan Calon 1', 'paslon1-prabowo_hatta.png', 'H. Prabowo Subianto - Ir. H.M. Hatta Rajasa', '4832', '2534', '66', '34', 3),
(44, '2014', '3', '41', '41', '#ff8000', 'Pasangan Calon 1', 'paslon1-prabowo_hatta.png', 'H. Prabowo Subianto - Ir. H.M. Hatta Rajasa', '2702', '1300', '68', '32', 3),
(45, '2014', '3', '42', '42', '#ff8000', 'Pasangan Calon 1', 'paslon1-prabowo_hatta.png', 'H. Prabowo Subianto - Ir. H.M. Hatta Rajasa', '3181', '1847', '63', '37', 3),
(46, '2014', '3', '43', '43', '#ff8000', 'Pasangan Calon 1', 'paslon1-prabowo_hatta.png', 'H. Prabowo Subianto - Ir. H.M. Hatta Rajasa', '6144', '3810', '62', '38', 3),
(47, '2014', '4', '44', '44', '#ff8000', 'Pasangan Calon 1', 'paslon1-prabowo_hatta.png', 'H. Prabowo Subianto - Ir. H.M. Hatta Rajasa', '8571', '7156', '54', '46', 3),
(48, '2014', '4', '45', '45', '#ff8000', 'Pasangan Calon 1', 'paslon1-prabowo_hatta.png', 'H. Prabowo Subianto - Ir. H.M. Hatta Rajasa', '7952', '7340', '52', '48', 3),
(49, '2014', '4', '46', '46', '#ff8000', 'Pasangan Calon 1', 'paslon1-prabowo_hatta.png', 'H. Prabowo Subianto - Ir. H.M. Hatta Rajasa', '4749', '3033', '61', '39', 3),
(50, '2014', '4', '47', '47', '#ff8000', 'Pasangan Calon 1', 'paslon1-prabowo_hatta.png', 'H. Prabowo Subianto - Ir. H.M. Hatta Rajasa', '3673', '1759', '68', '32', 3),
(51, '2014', '4', '48', '68', '#ff0000', 'Pasangan Calon 2', 'paslon2-jokowi_jusufkalla.png', 'Ir. H. Joko Widodo - Drs. H.M. Jusuf Kalla', '3607', '3918', '48', '52', 3),
(52, '2014', '4', '49', '48', '#ff8000', 'Pasangan Calon 1', 'paslon1-prabowo_hatta.png', 'H. Prabowo Subianto - Ir. H.M. Hatta Rajasa', '2410', '1603', '60', '40', 3),
(53, '2014', '5', '50', '49', '#ff8000', 'Pasangan Calon 1', 'paslon1-prabowo_hatta.png', 'H. Prabowo Subianto - Ir. H.M. Hatta Rajasa', '9050', '4629', '66', '34', 3),
(54, '2014', '5', '51', '50', '#ff8000', 'Pasangan Calon 1', 'paslon1-prabowo_hatta.png', 'H. Prabowo Subianto - Ir. H.M. Hatta Rajasa', '5499', '3439', '62', '38', 3),
(55, '2014', '5', '52', '51', '#ff8000', 'Pasangan Calon 1', 'paslon1-prabowo_hatta.png', 'H. Prabowo Subianto - Ir. H.M. Hatta Rajasa', '5636', '2792', '67', '33', 3),
(56, '2014', '5', '53', '52', '#ff8000', 'Pasangan Calon 1', 'paslon1-prabowo_hatta.png', 'H. Prabowo Subianto - Ir. H.M. Hatta Rajasa', '6344', '3635', '64', '36', 3),
(57, '2014', '5', '54', '53', '#ff8000', 'Pasangan Calon 1', 'paslon1-prabowo_hatta.png', 'H. Prabowo Subianto - Ir. H.M. Hatta Rajasa', '8163', '4951', '62', '38', 3),
(58, '2014', '5', '55', '54', '#ff8000', 'Pasangan Calon 1', 'paslon1-prabowo_hatta.png', 'H. Prabowo Subianto - Ir. H.M. Hatta Rajasa', '7071', '4872', '59', '41', 3),
(59, '2014', '5', '56', '55', '#ff8000', 'Pasangan Calon 1', 'paslon1-prabowo_hatta.png', 'H. Prabowo Subianto - Ir. H.M. Hatta Rajasa', '8371', '4759', '64', '36', 3),
(60, '2014', '5', '57', '56', '#ff8000', 'Pasangan Calon 1', 'paslon1-prabowo_hatta.png', 'H. Prabowo Subianto - Ir. H.M. Hatta Rajasa', '9255', '5999', '61', '39', 3),
(61, '2014', '6', '58', '57', '#ff8000', 'Pasangan Calon 1', 'paslon1-prabowo_hatta.png', 'H. Prabowo Subianto - Ir. H.M. Hatta Rajasa', '8211', '5547', '60', '40', 3),
(62, '2014', '6', '59', '58', '#ff8000', 'Pasangan Calon 1', 'paslon1-prabowo_hatta.png', 'H. Prabowo Subianto - Ir. H.M. Hatta Rajasa', '4836', '2700', '64', '36', 3),
(63, '2014', '6', '60', '59', '#ff8000', 'Pasangan Calon 1', 'paslon1-prabowo_hatta.png', 'H. Prabowo Subianto - Ir. H.M. Hatta Rajasa', '8409', '4905', '63', '37', 3),
(64, '2014', '6', '61', '60', '#ff8000', 'Pasangan Calon 1', 'paslon1-prabowo_hatta.png', 'H. Prabowo Subianto - Ir. H.M. Hatta Rajasa', '10473', '5869', '64', '36', 3),
(65, '2014', '6', '62', '61', '#ff8000', 'Pasangan Calon 1', 'paslon1-prabowo_hatta.png', 'H. Prabowo Subianto - Ir. H.M. Hatta Rajasa', '4825', '2312', '68', '32', 3),
(66, '2014', '6', '63', '62', '#ff8000', 'Pasangan Calon 1', 'paslon1-prabowo_hatta.png', 'H. Prabowo Subianto - Ir. H.M. Hatta Rajasa', '7574', '5055', '60', '40', 3),
(67, '2014', '6', '64', '63', '#ff8000', 'Pasangan Calon 1', 'paslon1-prabowo_hatta.png', 'H. Prabowo Subianto - Ir. H.M. Hatta Rajasa', '5681', '2941', '66', '34', 3),
(68, '2014', '6', '65', '64', '#ff8000', 'Pasangan Calon 1', 'paslon1-prabowo_hatta.png', 'H. Prabowo Subianto - Ir. H.M. Hatta Rajasa', '6743', '3678', '65', '35', 3),
(69, '2014', '6', '66', '65', '#ff8000', 'Pasangan Calon 1', 'paslon1-prabowo_hatta.png', 'H. Prabowo Subianto - Ir. H.M. Hatta Rajasa', '5414', '2707', '67', '33', 3),
(70, '2014', '6', '67', '66', '#ff8000', 'Pasangan Calon 1', 'paslon1-prabowo_hatta.png', 'H. Prabowo Subianto - Ir. H.M. Hatta Rajasa', '4897', '2226', '69', '31', 3),
(71, '2014', '6', '68', '67', '#ff8000', 'Pasangan Calon 1', 'paslon1-prabowo_hatta.png', 'H. Prabowo Subianto - Ir. H.M. Hatta Rajasa', '3296', '2098', '61', '39', 3);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barchart_suratsuara`
--
ALTER TABLE `barchart_suratsuara`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `barchart_tingkatpartisipasi`
--
ALTER TABLE `barchart_tingkatpartisipasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `dasarhukum`
--
ALTER TABLE `dasarhukum`
  ADD PRIMARY KEY (`id_dasarhukum`),
  ADD KEY `dasarhukum_ibfk_1` (`user_id`);

--
-- Indeks untuk tabel `datapemilih_dpk`
--
ALTER TABLE `datapemilih_dpk`
  ADD PRIMARY KEY (`id_datapemilih_dpk`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `datapemilih_dpktb`
--
ALTER TABLE `datapemilih_dpktb`
  ADD PRIMARY KEY (`id_datapemilih_dpktb`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `datapemilih_dpt`
--
ALTER TABLE `datapemilih_dpt`
  ADD PRIMARY KEY (`id_datapemilih_dpt`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `datapemilih_dptb`
--
ALTER TABLE `datapemilih_dptb`
  ADD PRIMARY KEY (`id_datapemilih_dptb`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `geojson`
--
ALTER TABLE `geojson`
  ADD PRIMARY KEY (`id_geojson`),
  ADD KEY `id_kelurahan` (`id_kelurahan`);

--
-- Indeks untuk tabel `hakpilih_dpk`
--
ALTER TABLE `hakpilih_dpk`
  ADD PRIMARY KEY (`id_hakpilih_dpk`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `hakpilih_dpktb`
--
ALTER TABLE `hakpilih_dpktb`
  ADD PRIMARY KEY (`id_hakpilih_dpktb`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `hakpilih_dpt`
--
ALTER TABLE `hakpilih_dpt`
  ADD PRIMARY KEY (`id_hakpilih_dpt`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `hakpilih_dptb`
--
ALTER TABLE `hakpilih_dptb`
  ADD PRIMARY KEY (`id_hakpilih_dptb`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `jumlahkeseluruhan_datapemilih`
--
ALTER TABLE `jumlahkeseluruhan_datapemilih`
  ADD PRIMARY KEY (`id_jk_datapemilih`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `jumlahkeseluruhan_hakpilih`
--
ALTER TABLE `jumlahkeseluruhan_hakpilih`
  ADD PRIMARY KEY (`id_jk_hakpilih`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id_kecamatan`);

--
-- Indeks untuk tabel `kelurahan`
--
ALTER TABLE `kelurahan`
  ADD PRIMARY KEY (`id_kelurahan`),
  ADD KEY `id_kecamatan` (`id_kecamatan`);

--
-- Indeks untuk tabel `logomaskot`
--
ALTER TABLE `logomaskot`
  ADD PRIMARY KEY (`id_logomaskot`),
  ADD KEY `logomaskot_ibfk_1` (`user_id`);

--
-- Indeks untuk tabel `pelantikan`
--
ALTER TABLE `pelantikan`
  ADD PRIMARY KEY (`id_pelantikan`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `piechart_kota`
--
ALTER TABLE `piechart_kota`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `piechart_nasional`
--
ALTER TABLE `piechart_nasional`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `piechart_provinsi`
--
ALTER TABLE `piechart_provinsi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `rekaphasilsuarasah_kecamatan`
--
ALTER TABLE `rekaphasilsuarasah_kecamatan`
  ADD PRIMARY KEY (`id_rekapkecamatan`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `rekaphasilsuarasah_provinsi`
--
ALTER TABLE `rekaphasilsuarasah_provinsi`
  ADD PRIMARY KEY (`id_rekapprovinsi`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `rekappartisipasi_tps`
--
ALTER TABLE `rekappartisipasi_tps`
  ADD PRIMARY KEY (`id_rekap`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `tb_partai`
--
ALTER TABLE `tb_partai`
  ADD PRIMARY KEY (`id_partai`);

--
-- Indeks untuk tabel `tb_pasangancalon`
--
ALTER TABLE `tb_pasangancalon`
  ADD PRIMARY KEY (`id_pasangancalon`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `tb_pendukungpartai`
--
ALTER TABLE `tb_pendukungpartai`
  ADD PRIMARY KEY (`id_pendukungpartai`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `tb_pendukungpartai_ibfk_2` (`paslon_id`),
  ADD KEY `partai_id` (`partai_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `viewmap`
--
ALTER TABLE `viewmap`
  ADD PRIMARY KEY (`id_viewmap`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barchart_suratsuara`
--
ALTER TABLE `barchart_suratsuara`
  MODIFY `id` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `barchart_tingkatpartisipasi`
--
ALTER TABLE `barchart_tingkatpartisipasi`
  MODIFY `id` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `dasarhukum`
--
ALTER TABLE `dasarhukum`
  MODIFY `id_dasarhukum` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `datapemilih_dpk`
--
ALTER TABLE `datapemilih_dpk`
  MODIFY `id_datapemilih_dpk` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `datapemilih_dpktb`
--
ALTER TABLE `datapemilih_dpktb`
  MODIFY `id_datapemilih_dpktb` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `datapemilih_dpt`
--
ALTER TABLE `datapemilih_dpt`
  MODIFY `id_datapemilih_dpt` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `datapemilih_dptb`
--
ALTER TABLE `datapemilih_dptb`
  MODIFY `id_datapemilih_dptb` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `geojson`
--
ALTER TABLE `geojson`
  MODIFY `id_geojson` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT untuk tabel `hakpilih_dpk`
--
ALTER TABLE `hakpilih_dpk`
  MODIFY `id_hakpilih_dpk` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `hakpilih_dpktb`
--
ALTER TABLE `hakpilih_dpktb`
  MODIFY `id_hakpilih_dpktb` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `hakpilih_dpt`
--
ALTER TABLE `hakpilih_dpt`
  MODIFY `id_hakpilih_dpt` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `hakpilih_dptb`
--
ALTER TABLE `hakpilih_dptb`
  MODIFY `id_hakpilih_dptb` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `jumlahkeseluruhan_datapemilih`
--
ALTER TABLE `jumlahkeseluruhan_datapemilih`
  MODIFY `id_jk_datapemilih` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `jumlahkeseluruhan_hakpilih`
--
ALTER TABLE `jumlahkeseluruhan_hakpilih`
  MODIFY `id_jk_hakpilih` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id_kecamatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `kelurahan`
--
ALTER TABLE `kelurahan`
  MODIFY `id_kelurahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT untuk tabel `logomaskot`
--
ALTER TABLE `logomaskot`
  MODIFY `id_logomaskot` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT untuk tabel `pelantikan`
--
ALTER TABLE `pelantikan`
  MODIFY `id_pelantikan` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `piechart_kota`
--
ALTER TABLE `piechart_kota`
  MODIFY `id` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `piechart_nasional`
--
ALTER TABLE `piechart_nasional`
  MODIFY `id` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `piechart_provinsi`
--
ALTER TABLE `piechart_provinsi`
  MODIFY `id` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `rekaphasilsuarasah_kecamatan`
--
ALTER TABLE `rekaphasilsuarasah_kecamatan`
  MODIFY `id_rekapkecamatan` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `rekaphasilsuarasah_provinsi`
--
ALTER TABLE `rekaphasilsuarasah_provinsi`
  MODIFY `id_rekapprovinsi` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `rekappartisipasi_tps`
--
ALTER TABLE `rekappartisipasi_tps`
  MODIFY `id_rekap` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `tb_partai`
--
ALTER TABLE `tb_partai`
  MODIFY `id_partai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tb_pasangancalon`
--
ALTER TABLE `tb_pasangancalon`
  MODIFY `id_pasangancalon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT untuk tabel `tb_pendukungpartai`
--
ALTER TABLE `tb_pendukungpartai`
  MODIFY `id_pendukungpartai` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `viewmap`
--
ALTER TABLE `viewmap`
  MODIFY `id_viewmap` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `barchart_suratsuara`
--
ALTER TABLE `barchart_suratsuara`
  ADD CONSTRAINT `barchart_suratsuara_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `barchart_tingkatpartisipasi`
--
ALTER TABLE `barchart_tingkatpartisipasi`
  ADD CONSTRAINT `barchart_tingkatpartisipasi_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `dasarhukum`
--
ALTER TABLE `dasarhukum`
  ADD CONSTRAINT `dasarhukum_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `datapemilih_dpk`
--
ALTER TABLE `datapemilih_dpk`
  ADD CONSTRAINT `datapemilih_dpk_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `datapemilih_dpktb`
--
ALTER TABLE `datapemilih_dpktb`
  ADD CONSTRAINT `datapemilih_dpktb_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `datapemilih_dpt`
--
ALTER TABLE `datapemilih_dpt`
  ADD CONSTRAINT `datapemilih_dpt_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `datapemilih_dptb`
--
ALTER TABLE `datapemilih_dptb`
  ADD CONSTRAINT `datapemilih_dptb_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `geojson`
--
ALTER TABLE `geojson`
  ADD CONSTRAINT `geojson_ibfk_1` FOREIGN KEY (`id_kelurahan`) REFERENCES `kelurahan` (`id_kelurahan`);

--
-- Ketidakleluasaan untuk tabel `hakpilih_dpk`
--
ALTER TABLE `hakpilih_dpk`
  ADD CONSTRAINT `hakpilih_dpk_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `hakpilih_dpktb`
--
ALTER TABLE `hakpilih_dpktb`
  ADD CONSTRAINT `hakpilih_dpktb_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `hakpilih_dpt`
--
ALTER TABLE `hakpilih_dpt`
  ADD CONSTRAINT `hakpilih_dpt_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `hakpilih_dptb`
--
ALTER TABLE `hakpilih_dptb`
  ADD CONSTRAINT `hakpilih_dptb_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `jadwal_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `jumlahkeseluruhan_datapemilih`
--
ALTER TABLE `jumlahkeseluruhan_datapemilih`
  ADD CONSTRAINT `jumlahkeseluruhan_datapemilih_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `jumlahkeseluruhan_hakpilih`
--
ALTER TABLE `jumlahkeseluruhan_hakpilih`
  ADD CONSTRAINT `jumlahkeseluruhan_hakpilih_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `kelurahan`
--
ALTER TABLE `kelurahan`
  ADD CONSTRAINT `kelurahan_ibfk_1` FOREIGN KEY (`id_kecamatan`) REFERENCES `kecamatan` (`id_kecamatan`);

--
-- Ketidakleluasaan untuk tabel `logomaskot`
--
ALTER TABLE `logomaskot`
  ADD CONSTRAINT `logomaskot_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pelantikan`
--
ALTER TABLE `pelantikan`
  ADD CONSTRAINT `pelantikan_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `piechart_kota`
--
ALTER TABLE `piechart_kota`
  ADD CONSTRAINT `piechart_kota_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `piechart_provinsi`
--
ALTER TABLE `piechart_provinsi`
  ADD CONSTRAINT `piechart_provinsi_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `rekaphasilsuarasah_kecamatan`
--
ALTER TABLE `rekaphasilsuarasah_kecamatan`
  ADD CONSTRAINT `rekaphasilsuarasah_kecamatan_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `rekaphasilsuarasah_provinsi`
--
ALTER TABLE `rekaphasilsuarasah_provinsi`
  ADD CONSTRAINT `rekaphasilsuarasah_provinsi_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `rekappartisipasi_tps`
--
ALTER TABLE `rekappartisipasi_tps`
  ADD CONSTRAINT `rekappartisipasi_tps_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_pasangancalon`
--
ALTER TABLE `tb_pasangancalon`
  ADD CONSTRAINT `tb_pasangancalon_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_pendukungpartai`
--
ALTER TABLE `tb_pendukungpartai`
  ADD CONSTRAINT `tb_pendukungpartai_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_pendukungpartai_ibfk_2` FOREIGN KEY (`paslon_id`) REFERENCES `tb_pasangancalon` (`id_pasangancalon`),
  ADD CONSTRAINT `tb_pendukungpartai_ibfk_3` FOREIGN KEY (`partai_id`) REFERENCES `tb_partai` (`id_partai`);

--
-- Ketidakleluasaan untuk tabel `viewmap`
--
ALTER TABLE `viewmap`
  ADD CONSTRAINT `viewmap_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
