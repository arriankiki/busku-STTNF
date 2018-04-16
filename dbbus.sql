-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2018 at 09:39 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbbus`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(30) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `deskripsi`, `isi`, `gambar`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'Juventus Membalikan Keadaan Sempat tertinggal 2 gol di 7 Menit awal', 'Mental Kekuatan Juventus yang menjadi inti kemenangan', 'MANTAPPPPPPPPPPPPPP JUVENTUS JUARA LAGI', '', '2017-08-27 10:40:43', NULL, '2017-08-27 10:46:36', 1),
(2, 'Calon IT yang bersaing masuk universitas favorit', 'Calon IT yang bersaing masuk universitas favorit bla bla bla bla bla  1', 'Calon IT yang bersaing masuk universitas favorit bla bla bla bla bla ', '', '2017-08-27 10:42:13', NULL, '2017-08-27 10:47:02', 1),
(3, 'Dybala Hat-trick, Juventus Tekuk Genoa', 'Paulo Dybala jadi bintang Juventus pada laga melawan Genoa. Penyerang asal Argentina itu mengukir hat-trick untuk memenangkan Bianconeri dengan skor 4-2.', 'Genoa - Paulo Dybala jadi bintang Juventus pada laga melawan Genoa. Penyerang asal Argentina itu mengukir hat-trick untuk memenangkan Bianconeri dengan skor 4-2.\r\n\r\nDybala menyumbangkan tiga gol untuk Juve dalam lanjutan Serie A di Stadio Luigi Ferraris, Sabtu (26/8/2017). Satu gol Juve lainnya tercatat atas nama Juan Cuadrado.\r\n\r\nMeski menang, Juve sebenarnya mengawali pertandingan dengan sangat buruk. Tim asuhan Massimiliano Allegri itu ketinggalan 0-2 dalam waktu tujuh menit.\r\n\r\nSaat pertandingan belum genap berjalan semenit, gawang Juve sudah jebol oleh gol bunuh diri Miralem Pjanic. Gol ini diawali tusukan Goran Pandev di sisi kanan. Bola umpan dari Pandev mengenai lutut Pjanic dan berbelok masuk ke gawang Juve.\r\n\r\nPada menit ketujuh, Juventus terkena hukuman penalti setelah wasit memakai teknologi VAR untuk melihat pelanggaran Daniele Rugani terhadap Andrej Galabinov. Galabinov sendiri yang maju sebagai eksekutor dan sukses memperdaya Gianluigi Buffon.\r\n\r\nJuventus baru bisa memperkecil ketertinggalan pada menit ke-14 melalui gol Dybala. Sontekan Dybala meneruskan operan Pjanic merobek gawang Genoa yang dikawal oleh Mattia Perin.\r\n\r\nSkor berubah menjadi 2-2 ketika pertandingan memasuki injury time babak pertama. Juventus menyamakan kedudukan melalui tendangan penalti Dybala. Kali ini teknologi VAR menguntungkan Juventus karena dipakai wasit untuk melihat adanya handball Darko Lazovic.\r\n\r\nJuventus berbalik unggul 3-2 berkat gol Cuadrado pada menit ke-62. Cuadrado mengontrol umpan dari Mario Mandzukic dengan dadanya, lalu mengecoh satu pemain lawan sebelum menuntaskan aksinya dengan tembakan ke pojok atas gawang.\r\n\r\nDybala memantapkan kemenangan Juventus sekaligus menyempurnakan hat-trick-nya di injury time. Tembakan mendatarnya ke tiang dekat tak mampu dijangkau Perin.\r\n\r\nBerkat kemenangan ini, Juventus masih sempurna dalam dua laga Serie A musim ini. Dengan perolehan enam poin, mereka memuncaki klasemen sementara. Adapun Genoa berada di posisi ke-13 dengan satu poin.\r\n\r\nSusunan Pemain :\r\nGenoa: Perin; Biraschi, Rossettini, Gentiletti; Lazovic, Bertolacci, Veloso, Laxalt; Pandev (Lapadula 77), Galabinov (Centurion 72), Taarabt (Palladino 50)\r\n\r\nJuventus: Buffon; Lichtsteiner (Barzagli 74), Rugani, Chiellini, Alex Sandro; Pjanic (Bentancur 81), Khedira (Matuidi 58); Cuadrado, Dybala, Mandzukic; Higuain ', '', '2017-08-27 10:49:58', 2, '2017-08-27 10:53:07', 2),
(4, 'Dybala: Nomor 10 Membawa Keberuntungan', 'Paulo Dybala memborong hat-trick dalam kemenangan 4-2 Juventus atas Genoa. Ia mengaku nomor punggung 10-nya cukup membawa keberuntungan.', 'Genoa - Paulo Dybala memborong hat-trick dalam kemenangan 4-2 Juventus atas Genoa. Ia mengaku nomor punggung 10-nya cukup membawa keberuntungan.\r\n\r\nJuve dibuat kesusahahan oleh Genoa di Stadion Luigi Ferraris, Sabtu (16/8/2017) malam WIB. Bianconeri sempat tertinggal 0-2 di awal babak pertama.\r\n\r\nSaat tertinggal itu, Dybala beraksi. Ia mencetak dua gol di menit 14 dan injury time babak pertama untuk mengubah skor menjadi 2-2.\r\n\r\nJuan Cuadrado membawa Juventus berbalik unggul di menit ke-62, sebelum Dybala menyempurnakan penampilannya dengan hat-trick sekaligus memastikan kemenangan di injury time.\r\n\r\n\"Saya sangat senang, seperti yang kita tahu, ini adalah laga yang sulit. Kami memulainya dengan sedikit lambat dan langsung kebobolan, tapi kami bisa mengubahnya,\" Dybala menuturkan kepada Mediaset Premium yang dilansir Football-Italia.\r\n\r\n\"Kami sudah membicarakan kekalahan musim lalu, tapi kali ini kami bisa melawan dan bangkit dari start yang buruk,\" Dybala menambahkan.\r\n\r\nHat-trick ke gawang Genoa membuat Dybala sudah bikin empat gol di awal musim. Yang pertama dicetaknya ke gawang Cagliari di pekan pembuka.\r\n\r\n\"Secara pribadi, saya sangat senang dengan apa yang saya lakukan musim ini. Saya tahu mengenakan nomor 10 Juventus menjadi tantangan yang sulit, tapi sejauh ini nomor itu memberi saya keberuntungan,\" pemain asal Argentina itu mengungkapkan.', '', '2017-08-27 10:52:27', 2, '2017-08-27 10:53:34', 2),
(5, 'PSG Gaet Neymar dan Berpotensi Dapatkan Mbappe, Matuidi Tak Menyesal Gabung Juve', '<p><strong>Turin - Blaise Matuidi mantap dengan keputusannya bergabung Juventus. Sekalipun Paris St. Germain kini telah diperkuat Neymar dan berpotensi membeli Kylian Mbappe. </strong></p>\r\n', '<p><strong>Blaise Matuidi mantap dengan keputusannya bergabung Juventus.</strong></p>\r\n', '', '2017-08-27 11:33:43', 2, '2017-08-27 11:33:43', 2),
(6, 'Begini Rute Rekayasa Lalu Lintas Malam Tahun Baru di Jakarta', 'Jakarta - Malam pergantian tahun baru 2018 di DKI Jakarta akan difokuskan di tiga titik, yaitu Jalan MH Thamrin, Bundaran Hotel Indonesia, dan Ancol. Akan ada pengalihan lalu lintas karena ada kegiatan di kawasan tersebut.', 'Jakarta - Malam pergantian tahun baru 2018 di DKI Jakarta akan difokuskan di tiga titik, yaitu Jalan MH Thamrin, Bundaran Hotel Indonesia, dan Ancol. Akan ada pengalihan lalu lintas karena ada kegiatan di kawasan tersebut.\r\n\r\n\"Di sana akan ada pengalihan arus,\" kata Direktur Lalu Lintas Polda Metro Jaya Kombes Pol Halim Pagarra di Mapolda Metro Jaya, Sabtu (30/12/2017).\r\n\r\nDia mengatakan, dalam malam tahun baru juga ada kegiatan car free night di kawasan Jalan Jenderal Sudirman hingga Jalan MH Thamrin. Dengan begitu, dilakukan penutupan kendaraan bermotor mulai pukul 17.00 WIB, hingga 02.00 WIB 1 Januari 2018.\r\n\r\n\r\n\"Mulai Bundaran Hotel Indonesia kita sudah rekayasa pada waktu Semanggi kemudian Jalan Karet untuk pengalihan atau rekayasa arus,\" kata Halim.\r\n\r\nBerikut rekayasa pengalihan lalu lintas untuk malam pergantian Tahun Baru 2018:\r\n\r\n1. Arus lalu lintas dari Hayam Wuruk dialihkan ke Jalan Juanda-Pasar Baru-Jalan Gunung Sahari atau ke Lapangan Banteng-Pejambon-Jalan Ridwan Rais-Tugu Tani.\r\n\r\n2. Arus lalu lintas dari Semanggi arah Bundaran HI akan dialihkan ke Jalan Karet Tanah Abang-Cideng.\r\n\r\n3. Arus lalu lintas dari Jalan Medan Merdeka Timur arah ke Medan Merdeka Utara dialihkan ke Jalan Perwira-Lapangan Banteng-Jalan Veteran Raya- Harmoni atau ke Jalan Pasar Baru-Jalan Gunung Sahari.\r\n\r\n4. Arus lalu lintas dari Tugu Tani arah Jalan Medan Merdeka Selatan akan dialihkan ke Jalan Ridwan Rais-Jalan Medan Merdeka Timur-Jalan Perwira-Lapangan Banteng dan seterusnya atau ke Jalan Budi Kemuliaan-Jalan Abdul Muis-Jalan Majapahit.', '', '2018-01-06 12:30:13', 1, '2018-01-06 12:30:56', 1),
(7, 'Hari Terakhir 2017, Lalu Lintas Jakarta Pagi Ini Lancar', 'Jakarta - Menjelang pergantian tahun, kondisi lalu lintas Jakarta dan sekitarnya terpantau lancar. Mulai Tol Jakarta hingga Cikampek arus lalu lintas di jalur ini terpantau lancar. Tampak tidak ada kenaikan volume kendaraan yang melintas di jalur ini.', 'Jakarta - Menjelang pergantian tahun, kondisi lalu lintas Jakarta dan sekitarnya terpantau lancar. Mulai Tol Jakarta hingga Cikampek arus lalu lintas di jalur ini terpantau lancar. Tampak tidak ada kenaikan volume kendaraan yang melintas di jalur ini.\r\n\r\nSementara itu, bagi anda yang melewati ruas Tol JLJ Ulujami menuju Serpong, Tol JLJ TMMI - Rorotan, Tol Purbaleunyi menuju Cileunyi, Tol CTC Cawang arah Cengkareng. Lalu lintas di ruas wilayah tersebut masih terpantau lancar. Pun demikian, di ruas Tol Jagorawi Cawang menuju Ciawi. Lalu lintas di ruas jalan ini terpantau lancar.\r\n\r\n\r\nSituasi lancar juga terjadi di GT Senayan menuju arah Slipi dan Tol Exit Semanggi. Namun meski lalu lintas lancar pengendara tetap diimbau untuk menjaga keselamatan berkendara.\r\n\r\n\r\n06:15 WIB Situasi lalu lintas Tol Jakarta - Cikampek KM 34 arah Jakarta lancar kedua arah.\r\n\r\n06.32 WIB Tol JLJ Ulujami-Pd Ranji-Serpong lancar; Serpong-Pd Ranji-Ulujami lancar.\r\n\r\n06.32 WIB Tol JLJ TMII-Cikunir-Cakung-Rorotan lancar. Rorotan-Cakung-Cikunir-TMII lancar.\r\n\r\n06.32 WIB Tol Purbaleunyi Dawuan-Padalarang-Pasteur-Cileunyi lancar. Cileunyi-Pasteur-Padalarang-Dawuan lancar.\r\n\r\n06.32 WIB Tol CTC Cawang-Tomang-Pluit-Cengkareng lancar. Cengkareng-Pluit-Tomang-Cawang lancar.\r\n\r\n06.32 WIB Tol Jagorawi Cawang-TMII-Cibubur-Bogor-Ciawi lancar. Ciawi-Bogor-Cibubur-TMII-Cawang lancar.\r\n\r\n06:50 WIB Situasi lalu lintas GT Senayan arah Slipi lancar\r\n\r\n06:53 WIB Situasi lalu lintas Exit Tol Semanggi lancar.', '', '2018-01-06 12:32:37', 1, '2018-01-06 12:32:37', 1);

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE `jenis` (
  `id` int(11) NOT NULL,
  `merk` varchar(20) NOT NULL,
  `tipe` varchar(20) NOT NULL,
  `seat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`id`, `merk`, `tipe`, `seat`) VALUES
(1, 'Isuzu		', 'NKR 55 CO', 11),
(2, 'Hino	', 'Dutro Bus 130 MDBL', 25),
(3, 'Hino	', 'R 260', 43),
(4, 'Hino	', 'RN 285', 40),
(5, 'Mercedes Benz	', 'MB 1626', 43),
(6, 'Mercedes Benz	', 'MB 1836', 40),
(7, 'Scania	', 'K310IB-4x2', 40),
(8, 'Scania	', 'K360IB-4x2', 40),
(9, 'MAN	', 'MAN R37', 40);

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan`
--

CREATE TABLE `kendaraan` (
  `id` int(11) NOT NULL,
  `nopol` varchar(10) NOT NULL,
  `jenis_id` int(11) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `fasilitas` text NOT NULL,
  `status` enum('Bebas','Jalan') NOT NULL,
  `foto` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kendaraan`
--

INSERT INTO `kendaraan` (`id`, `nopol`, `jenis_id`, `tahun`, `fasilitas`, `status`, `foto`) VALUES
(1, 'B 1111 VGA', 1, '2011', 'Reclining seats,Foot rests,Multimedia player', 'Jalan', 'B 1111 VGA.jpg'),
(2, 'B 2222 VGA', 2, '2011', 'Reclining seats,Foot rests,LCD,Multimedia player,Wireless microphone', 'Jalan', 'B 2222 VGA.jpg'),
(3, 'B 3333 VGA', 3, '2011', 'Reclining seats,Foot rests,LCD,Multimedia player,Wireless microphone,Koneksi wifi,Toilet', 'Jalan', 'B 3333 VGA.jpg'),
(4, 'B 4444 VGA', 4, '2012', 'Reclining seats,Foot rests,LCD,Multimedia player,Wireless microphone,Koneksi wifi,Toilet', 'Bebas', 'B 4444 VGA.jpg'),
(5, 'B 5555 VGA', 5, '2011', 'Reclining seats,Foot rests,LCD,Multimedia player,Wireless microphone,Koneksi wifi,Toilet', 'Bebas', 'B 5555 VGA.jpg'),
(6, 'B 6666 VGA', 6, '2012', 'Reclining seats,Foot rests,LCD,Multimedia player,Wireless microphone,Koneksi wifi,Toilet', 'Bebas', 'B 6666 VGA.jpg'),
(7, 'B 7777 VGA', 7, '2011', 'Reclining seats', 'Bebas', 'B 7777 VGA.jpg'),
(8, 'B 8888 VGA', 8, '2012', 'Reclining seats,Foot rests,LCD,Multimedia player,Wireless microphone,Koneksi wifi,Toilet', 'Bebas', 'B 8888 VGA.jpg'),
(9, 'B 9999 VGA', 9, '2012', 'Reclining seats,Foot rests,LCD,Multimedia player,Wireless microphone,Koneksi wifi', 'Bebas', 'B 9999 VGA.jpg'),
(10, 'B 1010 VGA', 1, '2017', 'LCD,Toilet', 'Bebas', 'B 1010 VGA.jpg'),
(11, 'B 1212 VGA', 2, '2015', 'Reclining seats,Foot rests,LCD,Koneksi wifi,Toilet', 'Bebas', 'B 1212 VGA.jpg'),
(12, 'B 3886 TUI', 2, '2015', 'Reclining seats,Foot rests,LCD,Wireless microphone', 'Bebas', 'B 3886 TUI.png'),
(13, 'B 1100 VGA', 9, '2017', 'Reclining seats,Foot rests,LCD,Multimedia player,Wireless microphone,Koneksi wifi,Toilet', 'Bebas', 'B 1100 VGA.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1500780097),
('m130524_201442_init', 1500780104),
('m140209_132017_init', 1515319220),
('m140403_174025_create_account_table', 1515319222),
('m140504_113157_update_tables', 1515319227),
('m140504_130429_create_token_table', 1515319230),
('m140830_171933_fix_ip_field', 1515319231),
('m140830_172703_change_account_table_name', 1515319231),
('m141222_110026_update_ip_field', 1515319232),
('m141222_135246_alter_username_length', 1515319233),
('m150614_103145_update_social_account_table', 1515319237),
('m150623_212711_fix_username_notnull', 1515319237),
('m151218_234654_add_timezone_to_profile', 1515319238),
('m160929_103127_add_last_login_at_to_user_table', 1515319239);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id`, `nama`, `alamat`, `telepon`) VALUES
(1, 'Andi', 'Jakarta', '0812 1111'),
(2, 'Tono', 'Bekasi', '0812 2222'),
(3, 'Citra', 'Depok', '0812 3333'),
(4, 'Dewi	', 'Bogor	', '0812 4444'),
(5, 'Marzuki	', 'Tangerang	', '0812 5555'),
(6, 'Arrian', 'Jakarta', '0812 3311'),
(7, 'Bella Almira', 'Jakarta Timur', '0812 3344'),
(8, 'naorah', 'karawang', '0812 3355'),
(9, 'dwi', 'kakaka', '0812 3310'),
(10, 'Wirda Mansyur', 'Jakarta', '0812 331011'),
(11, 'Fawwaz', 'Depok', '0812 331088'),
(12, 'Inaya', 'Depok', '0812 335665'),
(13, 'Hudha', 'Bekasi', '0812 331089'),
(14, 'Bhayu', 'Bogor', '0812 331022'),
(15, 'Alif', 'Depok', '0812 3310112');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `public_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gravatar_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gravatar_id` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bio` text COLLATE utf8_unicode_ci,
  `timezone` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`user_id`, `name`, `public_email`, `gravatar_email`, `gravatar_id`, `location`, `website`, `bio`, `timezone`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `social_account`
--

CREATE TABLE `social_account` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `client_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `data` text COLLATE utf8_unicode_ci,
  `code` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sopir`
--

CREATE TABLE `sopir` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `ktp` varchar(20) NOT NULL,
  `sim` varchar(20) NOT NULL,
  `status` enum('Bebas','Jalan') NOT NULL,
  `foto` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sopir`
--

INSERT INTO `sopir` (`id`, `nama`, `alamat`, `telepon`, `ktp`, `sim`, `status`, `foto`) VALUES
(1, 'Naruto', 'Jakarta', '08181111	', '1234 1111', '6789 111', 'Jalan', '6789 111.jpg'),
(2, 'Sasuke', 'Bekasi', '08182222', '1234 2222', '6789 2222', 'Jalan', '6789 2222.jpg'),
(3, 'Hinata		', 'Depok', '08183333', '1234 3333', '6789 3333', 'Jalan', '6789 3333.jpg'),
(4, 'Sakura			', 'Bogor', '08184444', '1234 4444', '6789 4444', 'Bebas', '6789 4444.jpg'),
(5, 'Ino', 'Jakarta', '08185555', '1234 5555', '6789 5555', 'Bebas', '6789 5555.jpg'),
(6, 'Sai', 'Bekasi', '08186666', '1234 6666', '6789 6666', 'Bebas', '6789 6666.jpg'),
(7, 'Shikamaru	', 'Depok', '08187777', '1234 7777', '6789 7777', 'Bebas', '6789 7777.jpg'),
(8, 'Shino	', 'Bogor	', '08188888', '1234 8888', '6789 8888', 'Bebas', '6789 8888.png'),
(9, 'Temari	', 'Tangerang', '08189999', '1234 9999', '6789 99', 'Bebas', '6789 99.png');

-- --------------------------------------------------------

--
-- Table structure for table `tarif`
--

CREATE TABLE `tarif` (
  `id` int(11) NOT NULL,
  `tarif_perhari` double NOT NULL,
  `tarif_overtime` double NOT NULL,
  `kendaraan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tarif`
--

INSERT INTO `tarif` (`id`, `tarif_perhari`, `tarif_overtime`, `kendaraan_id`) VALUES
(1, 1000000, 1000000, 1),
(2, 2000000, 2100000, 2),
(3, 3000000, 3300000, 3),
(4, 3200000, 3500000, 4),
(5, 3000000, 3500000, 5),
(6, 3500000, 3700000, 6),
(7, 3500000, 3700000, 7),
(8, 4000000, 4500000, 8),
(9, 5000000, 6000000, 9),
(10, 2200000, 2100000, 12),
(11, 2200000, 2000000, 13);

-- --------------------------------------------------------

--
-- Table structure for table `token`
--

CREATE TABLE `token` (
  `user_id` int(11) NOT NULL,
  `code` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) NOT NULL,
  `type` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `token`
--

INSERT INTO `token` (`user_id`, `code`, `created_at`, `type`) VALUES
(1, 'Mtw-yQQJsVmapAXAPJvRIcHqdLRYZSSl', 1515319300, 0),
(2, 'gxybiJbbcV5Kstxx1iJ4ow26fRHFD49h', 1515320748, 0);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `kendaraan_id` int(11) DEFAULT NULL,
  `pelanggan_id` int(11) NOT NULL,
  `sopir_id` int(11) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `tgl_overtime` date DEFAULT NULL,
  `status` enum('Mulai','Selesai') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `kendaraan_id`, `pelanggan_id`, `sopir_id`, `tgl_mulai`, `tgl_selesai`, `tgl_overtime`, `status`) VALUES
(1, 12, 13, 7, '2018-01-23', '2018-01-24', NULL, 'Selesai'),
(2, 1, 14, 1, '2018-01-11', '2018-01-12', NULL, 'Selesai'),
(3, 1, 6, 1, '2018-01-23', '2018-01-24', NULL, 'Mulai'),
(4, 3, 7, 3, '2018-01-23', '2018-01-24', NULL, 'Mulai'),
(5, 2, 15, 2, '2018-01-29', '2018-01-30', NULL, 'Mulai');

--
-- Triggers `transaksi`
--
DELIMITER $$
CREATE TRIGGER `updateStatus` AFTER INSERT ON `transaksi` FOR EACH ROW BEGIN
UPDATE sopir SET status = 'Jalan'
WHERE id = new.sopir_id;
UPDATE kendaraan SET status = 'Jalan'
WHERE id = new.kendaraan_id;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `updateStatus1` AFTER DELETE ON `transaksi` FOR EACH ROW BEGIN
UPDATE kendaraan SET status = 'Bebas'
WHERE id = old.kendaraan_id;
UPDATE sopir SET status = 'Bebas'
WHERE id = old.sopir_id;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `updateStatus2` AFTER UPDATE ON `transaksi` FOR EACH ROW BEGIN
UPDATE sopir SET status = 'Bebas'
WHERE id = old.sopir_id;
UPDATE kendaraan SET status = 'Bebas'
WHERE id = old.kendaraan_id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `confirmed_at` int(11) DEFAULT NULL,
  `unconfirmed_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `blocked_at` int(11) DEFAULT NULL,
  `registration_ip` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `flags` int(11) NOT NULL DEFAULT '0',
  `last_login_at` int(11) DEFAULT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password_hash`, `auth_key`, `confirmed_at`, `unconfirmed_email`, `blocked_at`, `registration_ip`, `created_at`, `updated_at`, `flags`, `last_login_at`, `status`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$/symOykdqWroEq4mgs0qHOoym9GNvkxDSUu9J1uIy.LuzscJ7hPMS', 'C1acs-UPV-3Gs7AS93nBqUx-n9VbB0WH', NULL, NULL, NULL, '::1', 1515319300, 1515319300, 0, 1519792125, 10),
(2, 'kiki', 'kiki@gmail.com', '$2y$10$T3WMHHACk4Aaz13xuC/ite9lPnwBgwA8HdCUFWC0EoyKVi.bdQBxC', 'L0ma6pSEH2c6LKruQ2JNgnrzD7FesiEQ', NULL, NULL, NULL, '::1', 1515320747, 1515320747, 0, 1515320795, 10);

-- --------------------------------------------------------

--
-- Table structure for table `userold`
--

CREATE TABLE `userold` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `userold`
--

INSERT INTO `userold` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', '80JQCExXfF7jsfHifcQNWbrfwOSSAdFN', '$2y$13$O97OjfPvzlodvT5T7C3Xzea8j7EMFr9vVCzkLits0j7gO9C6TmDVa', NULL, 'admin@gmail.com', 10, 1500781336, 1500781336),
(2, 'kiki', '_HIw-9Er-kuL_46Gq-1b8-eDiGFBXP-k', '$2y$13$Wh.KJ4F1shtrLbJc0Yl0YOb5lUOvZ//TeIRkGIlKVK88/SQ/Cuin.', NULL, 'kiki@gmail.com', 10, 1503805680, 1503805680),
(3, 'febri', 'BwJhHdaUhDOvRGKC1kQIGoaHednZ1Usd', '$2y$13$QkOMwm7ke1zTaUedaG9WHeOXfQhfIeTNf4Bg4CC4O.JYQc9.lTh1G', NULL, 'febri@gmail.com', 10, 1505695734, 1505695734),
(4, 'arrian123', 'ZmO0UFGhbxvQk9kwjjiTJ_OCLlkA926r', '$2y$13$L4josEy.8vrp25Tjs1XhB.cRSAyAgAVAF6cxxV4CfTGnO6PRwT0GG', NULL, 'arrian@gmail.com', 10, 1514092871, 1514092871),
(5, 'naorah', 'J_EEVkAViMZP7KYICQXRLbi1z2WIO9KU', '$2y$13$.E4/El4ee2iiY.XDZTSikOQy2hgCXJy2gVvbwpA42ARdtG45YyX8S', NULL, 'naorah@gmail.com', 10, 1514435914, 1514435914);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nopol_UNIQUE` (`nopol`),
  ADD KEY `fk_kendaraan_jenis` (`jenis_id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `social_account`
--
ALTER TABLE `social_account`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `account_unique` (`provider`,`client_id`),
  ADD UNIQUE KEY `account_unique_code` (`code`),
  ADD KEY `fk_user_account` (`user_id`);

--
-- Indexes for table `sopir`
--
ALTER TABLE `sopir`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ktp_UNIQUE` (`ktp`),
  ADD UNIQUE KEY `sim_UNIQUE` (`sim`);

--
-- Indexes for table `tarif`
--
ALTER TABLE `tarif`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tarif_kendaraan1` (`kendaraan_id`);

--
-- Indexes for table `token`
--
ALTER TABLE `token`
  ADD UNIQUE KEY `token_unique` (`user_id`,`code`,`type`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_kendaraan_has_pelanggan_kendaraan1` (`kendaraan_id`),
  ADD KEY `fk_kendaraan_has_pelanggan_pelanggan1` (`pelanggan_id`),
  ADD KEY `fk_transaksi_sopir1` (`sopir_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_unique_username` (`username`),
  ADD UNIQUE KEY `user_unique_email` (`email`);

--
-- Indexes for table `userold`
--
ALTER TABLE `userold`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `kendaraan`
--
ALTER TABLE `kendaraan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `social_account`
--
ALTER TABLE `social_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sopir`
--
ALTER TABLE `sopir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tarif`
--
ALTER TABLE `tarif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `userold`
--
ALTER TABLE `userold`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD CONSTRAINT `fk_kendaraan_jenis` FOREIGN KEY (`jenis_id`) REFERENCES `jenis` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `fk_user_profile` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `social_account`
--
ALTER TABLE `social_account`
  ADD CONSTRAINT `fk_user_account` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tarif`
--
ALTER TABLE `tarif`
  ADD CONSTRAINT `fk_tarif_kendaraan1` FOREIGN KEY (`kendaraan_id`) REFERENCES `kendaraan` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `token`
--
ALTER TABLE `token`
  ADD CONSTRAINT `fk_user_token` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `fk_kendaraan_has_pelanggan_kendaraan1` FOREIGN KEY (`kendaraan_id`) REFERENCES `kendaraan` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_kendaraan_has_pelanggan_pelanggan1` FOREIGN KEY (`pelanggan_id`) REFERENCES `pelanggan` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_transaksi_sopir1` FOREIGN KEY (`sopir_id`) REFERENCES `sopir` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
