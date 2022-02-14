-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2022 at 03:06 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pariwisata`
--

-- --------------------------------------------------------

--
-- Table structure for table `agama`
--

CREATE TABLE `agama` (
  `agama_id` int(11) NOT NULL,
  `nama_agama` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

CREATE TABLE `agenda` (
  `agenda_id` int(11) NOT NULL,
  `agenda_nama` varchar(255) DEFAULT NULL,
  `agenda_isi` text DEFAULT NULL,
  `agenda_lokasi` text DEFAULT NULL,
  `agenda_mulai` varchar(255) DEFAULT NULL,
  `agenda_selesai` varchar(255) DEFAULT NULL,
  `status` smallint(2) NOT NULL,
  `agenda_photoid` varchar(255) DEFAULT NULL,
  `agenda_latitude` varchar(255) DEFAULT NULL,
  `agenda_longitude` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agenda`
--

INSERT INTO `agenda` (`agenda_id`, `agenda_nama`, `agenda_isi`, `agenda_lokasi`, `agenda_mulai`, `agenda_selesai`, `status`, `agenda_photoid`, `agenda_latitude`, `agenda_longitude`) VALUES
(3, 'Pariaman Food Truck Festival', 'Pariaman food truck festival adalah acara yang dilaksanakan oleh Kota Pariaman setiap tahun nya di pantai Kata Pariaman', 'Lokasi Pantai Kata, Kota Pariaman', '2019-12-18', '2019-12-22', 1, '1573521885-WhatsApp Image 2019-11-12 at 06.56.02.jpeg', '-0.6464965', '100.1268444'),
(4, 'Open Fishing Tournament dalam Rangka Hari Nusantara 2019', 'Open Fishing Tournament dalam Rangka Hari Nusantara 2019 adalah ', 'Kota Padang dan Kota Pariaman, Sumbar', '2019-12-07', '2019-12-08', 1, '1573521800-WhatsApp Image 2019-11-12 at 06.56.03.jpeg', '-0.6464965', '100.1268444'),
(5, 'PARIAMAN INTERNATIONAL TRIATHLON 2019', 'IKUTI & SAKSIKAN!!\r\n\r\nPARIAMAN INTERNATIONAL TRIATHLON 2019', 'Pantai Kata, Pariaman', '2020-01-21', '2020-01-22', 1, 'triatlon.jpg', '12', '22');

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `biodata_id` int(11) NOT NULL,
  `NIK` int(16) DEFAULT NULL,
  `NAMA_LGKP` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `JENIS_KLMIN` int(1) NOT NULL,
  `TMPT_LHR` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `TGL_LHR` date NOT NULL,
  `NO_AKTA_LHR` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `GOL_DRH` int(3) NOT NULL,
  `AGAMA` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `STAT_KWN` int(1) NOT NULL,
  `STAT_HBKEL` int(2) DEFAULT NULL,
  `PDDK_AKH` int(2) DEFAULT NULL,
  `JENIS_PKRJN` int(2) DEFAULT NULL,
  `TGL_ENTRI` date DEFAULT NULL,
  `NO_KK` int(16) DEFAULT NULL,
  `Nama_PROP` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Nama_KAB` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Nama_KEC` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Nama_KEL` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Nama_DS` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `KEBANGSAAN` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cagar_budaya`
--

CREATE TABLE `cagar_budaya` (
  `cagar_id` int(11) NOT NULL,
  `cagar_nama` varchar(100) DEFAULT NULL,
  `cagar_detail` text DEFAULT NULL,
  `cagar_alamat` text DEFAULT NULL,
  `cagar_tahun` varchar(10) DEFAULT NULL,
  `cagar_status` varchar(15) DEFAULT NULL,
  `cagar_foto1` varchar(255) DEFAULT NULL,
  `cagar_foto2` varchar(255) DEFAULT NULL,
  `cagar_foto3` varchar(255) DEFAULT NULL,
  `cagar_foto4` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cagar_budaya`
--

INSERT INTO `cagar_budaya` (`cagar_id`, `cagar_nama`, `cagar_detail`, `cagar_alamat`, `cagar_tahun`, `cagar_status`, `cagar_foto1`, `cagar_foto2`, `cagar_foto3`, `cagar_foto4`) VALUES
(1, 'testing 2', 'sdasdsa', 'asdasdasd', '2021', '1', 'solar-system-minimalism-q1.jpg', 'solar-system-minimalism-q1.jpg', 'solar-system-minimalism-q1.jpg', 'solar-system-minimalism-q1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `destinasi_wisata`
--

CREATE TABLE `destinasi_wisata` (
  `id_destinasi` int(11) NOT NULL,
  `nama_destinasi` varchar(255) DEFAULT NULL,
  `detail` text NOT NULL,
  `keunggulan` text NOT NULL,
  `fasilitas` text NOT NULL,
  `alamat` text NOT NULL,
  `latitude` varchar(255) DEFAULT NULL,
  `longitude` varchar(255) DEFAULT NULL,
  `tahun` int(5) NOT NULL,
  `status` smallint(2) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `foto2` varchar(255) DEFAULT NULL,
  `foto3` varchar(255) DEFAULT NULL,
  `foto4` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `destinasi_wisata`
--

INSERT INTO `destinasi_wisata` (`id_destinasi`, `nama_destinasi`, `detail`, `keunggulan`, `fasilitas`, `alamat`, `latitude`, `longitude`, `tahun`, `status`, `foto`, `foto2`, `foto3`, `foto4`) VALUES
(17, 'Monumen TNI AL', '<p>Monumen TNI AL yang terletak di ujung muaro Pariaman, yang diresmikan oleh KSAL ini, menjadi Destinasi wisata sambil mengenang sejarah di Kota Pariaman</p>\r\n', 'Terletak di pantai gandoriah yang sangat dekat dengan perkotaan', '-', 'Pariaman, Indonesia', '-0.6230112', '100.1138609', 2020, 1, 'foto bersama di monumen ALRI.jpg', 'DJI_0107.jpg', 'DJI_0116.jpg', 'DJI_0105.jpg'),
(18, 'Pantai Gandoriah', '<p>Sebagai salah satu pantai favorit, pasir putih digunakan untuk berbagai kegiatan seperti pertemuan keluarga, senam, sepak bola, bola voli pantai, atau layang-layang terbang. Kemudian, jika Anda datang selama musim selancar, ada banyak klub selancar di pantai ini yang ingin membantu Anda mengendarai ombak eksotis itu.</p>\r\n\r\n<p>Asal usul nama Pantai Gandoriah memiliki kisah tersendiri. Gandoriah adalah nama seorang gadis dalam cerita rakyat Minangkabau. Menurut Kepala Kerjasama Pemasaran dan Pariwisata Kota Pariaman, Asnul Nazar, kisah ini semakin kurang dikenal masyarakat, kecuali oleh para sesepuh masyarakat. Kisah tersebut menceritakan perjalanan cinta seorang pemuda bernama Anggun Nan Tongga bersama Puti Gandoriah, yang tidak lain adalah sepupunya.<br />\r\nDikisahkan, Anggun Nan Tongga pergi berlayar mencari tiga mamak (paman) yang tidak pulang dari luar negeri. Pada perjalanan yang melewati banyak rintangan, Nan Tongga berhasil menemukan pamannya satu per satu. Karena pengkhianatan seorang teman yang pertama kali kembali ke kota asalnya, Puti Gandoriah mengira kekasihnya telah meninggal.<br />\r\nDalam kesedihannya, Puti Gandoriah memutuskan untuk bermeditasi di Gunung Ledang. Kisah ini berakhir tragis ketika Nan Tongga dan Puti Gandoriah bertemu lagi, tetapi harus menerima kenyataan bahwa mereka adalah saudara dan saudari yang tidak diperbolehkan menikah satu sama lain.</p>\r\n', '-', '-', 'Pasir, Pariaman Tengah, Kota Pariaman', '-0.6262856', '100.1128859', 2020, 1, 'DSC_0078.jpg', 'GANDORIAH.jpg', 'GANDORIAH 3.jpg', 'GANDORIAH 4.jpg'),
(19, 'Pantai Lohong', '<p>Di pantai ini ada taman khusus untuk Anas Malik. pemimpin lokal yang bertanggung jawab atas tata kelola di tingkat masyarakat. Taman ini dihiasi dengan deretan pohon kelapa berdaun dan memiliki pemandangan indah ke lautan India. Dekat dengan itu, ada daya tarik baru untuk anak yang disebut Pohon Rumah Pariaman dan sebuah monumen yang dikenal sebagai Taman Pemuda Asean.</p>\r\n', '-', '-', 'Kelurahan Lohong, Pariaman Tengah', '-0.6339177', '100.118613', 2020, 1, 'apriputra1@gmail.com.1.jpg', 'rian.desrian@gmail.com.3.jpg', 'taman anas malik (7).jpg', 'pembangunan taman dan pendestrian dari kawasan pantai lohong sampai pantai cermin (6).jpg'),
(20, 'Pantai Cermin', '<p>Terletak di pantai kota Pariaman paling selatan, pantai ini membentang di desa Karan Aur dan Taluak. Kata itu sendiri adalah singkatan dari nama dua desa yang berdekatan. Menawarkan panorama pantai alami yang masih asri dan alami, pantai ini cocok untuk Anda yang gemar beraktifitas berjalan. Selain itu, bagi pecinta olahraga bersepeda, pantai ini juga merupakan pilihan yang pas.</p>\r\n', '-', '-', 'Kelurahan Karan Aur, Pariaman Tengah', '-0.6355229', '100.1199944', 2020, 1, 'rian.desrian@gmail.com.2.jpg', 'ariyadii28.08@gmail.com.2.jpg', 'DSC_0032ed.jpg', 'DSC_0081.jpg'),
(21, 'Pantai Kata', '<p>Terletak di pantai kota Pariaman paling selatan, pantai ini membentang di desa Karan Aur dan Taluak. Kata itu sendiri adalah singkatan dari nama dua desa yang berdekatan. Menawarkan panorama pantai alami yang masih asri dan alami, pantai ini cocok untuk Anda yang gemar beraktifitas berjalan. Selain itu, bagi pecinta olahraga bersepeda, pantai ini juga merupakan pilihan yang pas.</p>\r\n', '-', '-', 'Kelurahan Karan Aur, Pariaman Tengah', '-0.6464965', '100.1268444', 2020, 1, 'DSC_0017.jpg', 'DSC_0009.jpg', 'DSC_0063ed.jpg', 'DSC_0059ed.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas_hotel`
--

CREATE TABLE `fasilitas_hotel` (
  `fh_id` int(11) NOT NULL,
  `fh_hotel` int(11) DEFAULT NULL,
  `fh_ac` int(2) DEFAULT NULL,
  `fh_kolam_renang` int(2) DEFAULT NULL,
  `fh_tempat_parkir` int(2) DEFAULT NULL,
  `fh_wifi` int(2) DEFAULT NULL,
  `fh_restorant` int(2) DEFAULT NULL,
  `fh_resepsionis` int(2) DEFAULT NULL,
  `fh_transportasi` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fasilitas_hotel`
--

INSERT INTO `fasilitas_hotel` (`fh_id`, `fh_hotel`, `fh_ac`, `fh_kolam_renang`, `fh_tempat_parkir`, `fh_wifi`, `fh_restorant`, `fh_resepsionis`, `fh_transportasi`) VALUES
(2, 4, 1, 1, 1, 1, 1, 2, 0),
(3, 5, 1, 1, 2, 1, 2, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas_kamar_hotel`
--

CREATE TABLE `fasilitas_kamar_hotel` (
  `fkh_id` int(11) NOT NULL,
  `kh_id` int(11) DEFAULT NULL,
  `fkh_kategori_kamar` int(11) NOT NULL,
  `fkh_balkon` int(2) DEFAULT NULL,
  `fkh_coffe_maker` int(2) DEFAULT NULL,
  `fkh_ac` int(2) DEFAULT NULL,
  `fkh_hot_water` int(2) DEFAULT NULL,
  `fkh_wifi` int(2) DEFAULT NULL,
  `fkh_sarapan` int(2) DEFAULT NULL,
  `fkh_shower` int(2) DEFAULT NULL,
  `fkh_tv` int(2) DEFAULT NULL,
  `fkh_kulkas` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fasilitas_kamar_hotel`
--

INSERT INTO `fasilitas_kamar_hotel` (`fkh_id`, `kh_id`, `fkh_kategori_kamar`, `fkh_balkon`, `fkh_coffe_maker`, `fkh_ac`, `fkh_hot_water`, `fkh_wifi`, `fkh_sarapan`, `fkh_shower`, `fkh_tv`, `fkh_kulkas`) VALUES
(7, 5, 0, 1, 1, 1, 2, 2, 2, 1, 1, 1),
(8, 4, 0, 2, 1, 1, 1, 1, 2, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `hotel_id` int(11) NOT NULL,
  `h_nama` varchar(255) DEFAULT NULL,
  `h_alamat` text DEFAULT NULL,
  `h_telp` varchar(12) DEFAULT NULL,
  `tahun` int(5) NOT NULL,
  `status` smallint(2) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `foto2` varchar(255) DEFAULT NULL,
  `foto3` varchar(255) DEFAULT NULL,
  `foto4` varchar(255) DEFAULT NULL,
  `h_latitude` varchar(255) DEFAULT NULL,
  `h_longitude` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`hotel_id`, `h_nama`, `h_alamat`, `h_telp`, `tahun`, `status`, `foto`, `foto2`, `foto3`, `foto4`, `h_latitude`, `h_longitude`) VALUES
(4, 'Nan Tongga Beach', 'Pasir, Pariaman Tengah, Kota Pariaman,', '(0751) 91666', 2020, 1, 'nan tongga.jpg', 'nan tongga 3.jpg', 'nan tongga 2.jpg', 'nan tongga 4.jpg', '-0.6237813', '100.1143587'),
(5, 'Hotel Kasandra', 'Jl. Wolter Monginsidi, Kp. Gadang, Pariaman Tim., Kota Pariaman', '(0751) 91111', 2020, 1, 'kasandra.jpg', 'kasandra.jpg', 'kasandra.jpg', 'kasandra.jpg', '-0.601977', '100.1254248,15'),
(6, 'Hotel Madinah', 'Jl. Kol. H. Anas Malik, Kp. Gadang, Pariaman Tim., Kota Pariaman', ' (021) 29707', 2020, 1, 'madina 1.jpg', 'madina 3.jpg', 'madina 2.jpg', 'madina 4.jpg', '-0.6019564', '100.125218,15');

-- --------------------------------------------------------

--
-- Table structure for table `kamar_hotel`
--

CREATE TABLE `kamar_hotel` (
  `kh_id` int(11) NOT NULL,
  `kh_hotel` int(11) DEFAULT NULL,
  `kh_nama` varchar(255) DEFAULT NULL,
  `kh_luas_kamar` varchar(255) DEFAULT NULL,
  `kh_jenis_bed` int(11) DEFAULT NULL,
  `kh_harga` int(11) DEFAULT NULL,
  `kh_sisa_kamar` int(11) DEFAULT NULL,
  `kh_jumlah_tamu` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kamar_hotel`
--

INSERT INTO `kamar_hotel` (`kh_id`, `kh_hotel`, `kh_nama`, `kh_luas_kamar`, `kh_jenis_bed`, `kh_harga`, `kh_sisa_kamar`, `kh_jumlah_tamu`) VALUES
(4, 4, '5', '30m x 34m', 3, 500000, 12, 5),
(5, 4, '1', '22m x 44m', 2, 250000, 10, 3),
(6, 4, '2', '30m x 34m', 1, 250000, 9, 2),
(7, 4, '3', '20m x 45m', 1, 250000, 5, 3),
(8, 4, '4', '22m x 44m', 2, 350000, 5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `kategori_bed`
--

CREATE TABLE `kategori_bed` (
  `id_bed` int(11) NOT NULL,
  `nama_bed` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_bed`
--

INSERT INTO `kategori_bed` (`id_bed`, `nama_bed`) VALUES
(1, 'Twin Bed'),
(2, 'Single Bed'),
(3, 'King Bed'),
(4, 'Double Bed');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_kamar`
--

CREATE TABLE `kategori_kamar` (
  `id_kamar` int(11) NOT NULL,
  `nama_kamaar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_kamar`
--

INSERT INTO `kategori_kamar` (`id_kamar`, `nama_kamaar`) VALUES
(1, 'Standar Room'),
(2, 'Superior Room'),
(3, 'Deluxe Room'),
(4, 'Junior Sweet Room'),
(5, 'Sweet Room'),
(6, 'Presidental Suit');

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `kecamatan_id` int(11) NOT NULL,
  `nama_kec` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kd_kecamatan` int(2) DEFAULT NULL,
  `id_kota` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kerajinan`
--

CREATE TABLE `kerajinan` (
  `kerajinan_id` int(11) NOT NULL,
  `kerajinan_jenis` varchar(255) DEFAULT NULL,
  `kerajinan_usaha` varchar(255) DEFAULT NULL,
  `kerajinan_pemilik` varchar(255) DEFAULT NULL,
  `kerajinan_alamat` varchar(255) DEFAULT NULL,
  `kerajinan_telepon` varchar(20) DEFAULT NULL,
  `kerajinan_keterangan` varchar(255) DEFAULT NULL,
  `kerajinan_foto1` varchar(255) NOT NULL,
  `kerajinan_foto2` varchar(255) NOT NULL,
  `latitude` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL,
  `tahun` int(5) NOT NULL,
  `status` smallint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kerajinan`
--

INSERT INTO `kerajinan` (`kerajinan_id`, `kerajinan_jenis`, `kerajinan_usaha`, `kerajinan_pemilik`, `kerajinan_alamat`, `kerajinan_telepon`, `kerajinan_keterangan`, `kerajinan_foto1`, `kerajinan_foto2`, `latitude`, `longitude`, `tahun`, `status`) VALUES
(3, '2', 'Sulaman Upik Mayang', 'Fitrinawati(Upik)', 'Desa Padang Birik-birik, Kec. Pariaman Utara', '0813 7428 6204', 'Aneka Produk Sulman( Tas, Dalamak, Pakaian, Hiasan Dinding, dan Souvenir', '', '', '', '', 2019, 1);

-- --------------------------------------------------------

--
-- Table structure for table `kuliner`
--

CREATE TABLE `kuliner` (
  `id_kuliner` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `keterangan` text NOT NULL,
  `tahun` int(5) NOT NULL,
  `status` smallint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kuliner`
--

INSERT INTO `kuliner` (`id_kuliner`, `nama`, `foto`, `keterangan`, `tahun`, `status`) VALUES
(4, 'NASIK SEK', 'nasi.jpg', '<p>SEK merupakan singkatan dari Seribu Kenyang. Karena dulunya nasi SEK memang dijual murah serta mengenyangkan Kini tak ada yang berubah sih dengan Nasi SEK, baik penyajian maupun lauk pauknya masih sama, yang berubah hanya tarif saja. Untuk menikmati Nasi SEK cukup datang ke Pantai Gandoriah, karena disana banyak warung-warung makan yang menyediakannya.</p>\r\n', 2020, 1),
(5, 'Sala Lauakk', '1580353708-sala.jpg', '<p>Bagi warga Kota Pariaman, Sumatera Barat,&nbsp;<strong><em>sala lauak</em></strong>&nbsp;atau lauk merupakan salah satu penganan pelengkap saat menyantap sarapan</p>\r\n', 2020, 1);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_KAB` int(2) DEFAULT NULL,
  `id_KEC` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `id_user`, `id_KAB`, `id_KEC`) VALUES
(1, 3, 1, 1),
(2, 4, 1, 1),
(3, NULL, 77, 1),
(4, 24, 77, 3),
(5, 25, 77, 1),
(6, 35, 77, 1),
(7, 63, 77, 2);

-- --------------------------------------------------------

--
-- Table structure for table `map`
--

CREATE TABLE `map` (
  `idmap` int(11) NOT NULL,
  `latitude` varchar(45) NOT NULL,
  `longtitude` varchar(45) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `npsn` varchar(8) NOT NULL,
  `image` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `map`
--

INSERT INTO `map` (`idmap`, `latitude`, `longtitude`, `alamat`, `npsn`, `image`, `created_at`, `updated_at`) VALUES
(2, '-7.7777356', '110.3649118', 'JL. AM. SANGAJI 47, Cokrodiningratan, Kec. Jetis, Kota Yogyakarta Prop. D.I. Yogyakarta', '20403280', 'uploads/smk 2 yogyakarta.jpg', '2016-11-03 21:27:16', '2016-11-17 09:19:11'),
(3, '-7.7930025', '110.3554427', 'Jalan Kemetiran Kidul No.60, 001, Gedong Tengen, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55272', '20404180', 'uploads/Smk n 1.jpg', '2016-11-08 20:23:20', '2016-11-08 20:23:20'),
(4, '-7.777709', '110.3637483', 'Jl. R.W. Monginsidi 2 Yogyakarta ', '20404181', 'uploads/nopicture.png', '2016-11-15 21:43:55', '2016-11-15 21:43:55'),
(5, '-7.821191', '110.3836643', 'Jl. Sidikan 60 YK \\r\\n', '20403282', 'uploads/nopicture.png', '2016-11-15 21:45:39', '2016-11-17 09:08:52'),
(6, '-7.7977363', '110.3803202', 'Jl. Kenari no. 4 Yk \\r\\n', '20404182', 'uploads/nopicture.png', '2016-11-15 21:48:11', '2016-11-15 21:48:11'),
(7, '-7.800817', '110.3931672', 'Jl. Kenari no. 71 Yk \\r\\n', '20403283', 'uploads/nopicture.png', '2016-11-17 08:27:06', '2016-11-17 09:20:22'),
(8, '-7.7894827', '110.3844901', 'Jl. Gowongan Kidul JT III/ 416 Yk \\r\\n', '20403295', 'uploads/nopicture.png', '2016-11-17 09:10:16', '2016-11-17 09:10:16');

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
('m000000_000000_base', 1542182388),
('m130524_201442_init', 1542182391),
('m181119_065915_tb_setting_tandatangan', 1542611079),
('m181121_032545_tb_daerah', 1542850727),
('m181122_010325_tb_provinsi', 1542849754),
('m181122_010335_tb_kota', 1542849754),
('m181122_010342_tb_kecamatan', 1542849754),
('m181122_010356_tb_desa', 1542849755),
('m181122_010520_tb_dusun', 1542849755),
('m181122_011752_tb_kk', 1543292290),
('m181122_011805_tb_penduduk', 1543292292),
('m181122_011811_tb_ktp', 1543292292),
('m181122_034546_tb_seting_kop', 1542858489),
('m181126_030959_tb_jenis_surat', 1543201872),
('m181127_020312_tb_data_keluarga', 1543291782),
('m181127_030010_tb_biodata_wni', 1543291783),
('m181127_140721_tb_biodata', 1543372638),
('m181128_015202_tb_surat', 1543372820),
('m181128_023010_tb_nik_surat', 1543372821),
('m181130_095718_tb_pendidikan', 1544407145),
('m181130_095737_tb_jenis_pekerjaan', 1544407145),
('m181210_015548_tb_keluarga', 1544407146),
('m181216_005549_tb_kk_luar', 1545011256),
('m181217_013652_tb_pend_luar', 1545011258),
('m181225_135756_tb_login', 1545747463),
('m181225_140840_tb_adm_desa', 1545747463),
('m181228_082410_tb_pekerjaan', 1545985595),
('m181229_035835_tb_hub_kel', 1546415058),
('m190102_003606_tb_agama', 1546415058),
('m190107_013000_tb_ultah', 1546824947),
('m190109_103517_tb_golda', 1547030238),
('m190109_103533_tb_statk', 1547030238),
('m190116_081035_tb_jenis_kelamin', 1547626374),
('m190116_081719_tb_stat_nik', 1547626675);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `category` varchar(100) NOT NULL,
  `created_date` date NOT NULL,
  `update_date` date NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `category`, `created_date`, `update_date`, `status`) VALUES
(3, 'testing 1', '<p>testing aplikasi</p>\r\n', 'umum', '2022-02-14', '2022-02-14', '1');

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `prof_id` int(11) NOT NULL,
  `prof_judul` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prof_gambar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `prof_isi` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `prof_status` smallint(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`prof_id`, `prof_judul`, `prof_gambar`, `prof_isi`, `slug`, `prof_status`) VALUES
(1, 'Profil PPID Kota Pariaman', '1540025908-bg.jpg', '<p>Salah satu elemen penting dalam mewujudkan penyelenggaraan negara yang terbuka adalah hak publik untuk memperoleh Informasi sesuai dengan peraturan perundang&not;undangan. Hak atas Informasi menjadi sangat penting karena makin terbuka penyelenggaraan negara untuk diawasi publik, penyelenggaraan negara tersebut makin dapat dipertanggungjawabkan. Hak setiap Orang untuk memperoleh Informasi juga relevan untuk meningkatkan kualitas pelibatan masyarakat dalam proses pengambilan keputusan publik. Partisipasi atau pelibatan masyarakat tidak banyak berarti tanpa jaminan keterbukaan Informasi Publik.</p>\r\n\r\n<p>Keberadaan Undang-undang tentang Keterbukaan Informasi Publik sangat penting sebagai landasan hukum yang berkaitan dengan :</p>\r\n\r\n<blockquote>\r\n<ol>\r\n	<li><em>hak setiap Orang untuk memperoleh Informasi</em></li>\r\n	<li><em>kewajiban Badan Publik menyediakan dan melayani permintaan Informasi secara cepat, tepat waktu, biaya ringan/proporsional, dan cara sederhana</em></li>\r\n	<li><em>pengecualian bersifat ketat dan terbatas</em></li>\r\n	<li><em>kewajiban Badan Publik untuk membenahi sistem dokumentasi dan pelayanan Informasi</em></li>\r\n</ol>\r\n</blockquote>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Setiap Badan Publik mempunyai kewajiban untuk membuka akses atas Informasi Publik yang berkaitan dengan Badan Publik tersebut untuk masyarakat luas. Lingkup Badan Publik dalam Undang-undang ini meliputi lembaga eksekutif, yudikatif, legislatif, serta penyelenggara negara lainnya yang mendapatkan dana dari Anggaran Pendapatan dan Belanja Negara (APBN)/Anggaran Pendapatan dan Belanja Daerah (APBD) dan mencakup pula organisasi nonpemerintah, baik yang berbadan hukum maupun yang tidak berbadan hukum, seperti lembaga swadaya masyarakat, perkumpulan, serta organisasi lainnya yang mengelola atau menggunakan dana yang sebagian atau seluruhnya bersumber dari APBN/APBD, sumbangan masyarakat, dan/atau luar negeri.</p>\r\n\r\n<p>Sesuai dengan amanat pasal 13 UU No.14 Tahun 2008, Kementerian Komunikasi sebagai salah satu Badan Publik telah membentuk Pejabat Pengelola Informasi dan Dokumentasi (PPID) melalui Keputusan Menteri Komunikasi dan Informatika Nomor 117 Tahun 2010 Tentang Organisasi Pengelola Informasi dan Dokumentasi. Dengan terbentuknya PPID pemohon informasi sesuai dengan haknya dapat memperoleh informasi public yang dihasilkan oleh Kementerian Komunikasi dan Informatika sesuai dengan ketentuan dalam UU No. 14 Tahun 2008.</p>\r\n', 'profil-ppid-kota-pariaman', 1),
(2, 'Visi dan Misi serta Program Unggulan', NULL, '', 'visi-dan-misi-serta-program-unggulan', 1),
(3, 'Struktur Organisasi', NULL, '', 'struktur-organisasi', 1),
(4, 'Pejabat Struktural Organisasi', NULL, '', 'pejabat-struktural-organisasi', 1),
(5, 'Kontak PPID', NULL, '', 'kontak-ppid', 1);

-- --------------------------------------------------------

--
-- Table structure for table `restoran`
--

CREATE TABLE `restoran` (
  `restoran_id` int(11) NOT NULL,
  `restoran_nama` varchar(50) DEFAULT NULL,
  `restoran_alamat` text DEFAULT NULL,
  `restoran_telepon` varchar(50) DEFAULT NULL,
  `restoran_detail` text DEFAULT NULL,
  `restoran_menu` varchar(255) NOT NULL,
  `restoran_photo` varchar(255) DEFAULT NULL,
  `restoran_pemilik` varchar(50) DEFAULT NULL,
  `restoran_latitude` varchar(255) DEFAULT NULL,
  `restoran_longitude` varchar(255) DEFAULT NULL,
  `tahun` int(5) NOT NULL,
  `status` smallint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restoran`
--

INSERT INTO `restoran` (`restoran_id`, `restoran_nama`, `restoran_alamat`, `restoran_telepon`, `restoran_detail`, `restoran_menu`, `restoran_photo`, `restoran_pemilik`, `restoran_latitude`, `restoran_longitude`, `tahun`, `status`) VALUES
(1, 'Kuretangin', 'Jalan Sentot Ali Basa No.11 Kel. Jati Mudik Kec. Pariaman Tengah Kota Pariaman Sumatera Barat 25519 Indonesia', '0813-6355-5444', 'Kuretangin berdiri sejak Tahun 2005 berlokasi di Jalan sentot alibasa Kelurahan jati Kecamatan pariaman timur Kota Pariaman. Kuretangin siap bersaing dengan bisnis - bisnis sejenisnya di area Kota Pariaman. Jika memerlukan informasi mengenai kuretangin, silahkan hubungi kami di nomor telepon yang tertera pada website.', '', 'DSC_0320.jpg', '-', '-0.6175234', '100.1359736', 2019, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_akses`
--

CREATE TABLE `tb_akses` (
  `akses_id` int(11) NOT NULL,
  `akses_destinasi` varchar(255) NOT NULL,
  `akses_transportasi` varchar(255) NOT NULL,
  `akses_distance` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_akses`
--

INSERT INTO `tb_akses` (`akses_id`, `akses_destinasi`, `akses_transportasi`, `akses_distance`) VALUES
(1, 'Padang - Pariaman', 'Bus, Taxi', '1,5 Hours'),
(2, 'Minangkabau Airport - Pariaman', 'Taxi, Car', '30 Minute'),
(3, 'Padang - Pariaman', 'Train', '1,5 Hours'),
(4, 'Jakarta - Minangkabau Airport', 'Plane', '1,5 Hours');

-- --------------------------------------------------------

--
-- Table structure for table `tb_atm`
--

CREATE TABLE `tb_atm` (
  `atm_id` int(11) NOT NULL,
  `atm_nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `atm_nama_bank` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `atm_alamat` text COLLATE utf8_unicode_ci NOT NULL,
  `atm_latitude` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `atm_longitude` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tahun` int(5) NOT NULL,
  `status` smallint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_atm`
--

INSERT INTO `tb_atm` (`atm_id`, `atm_nama`, `atm_nama_bank`, `atm_alamat`, `atm_latitude`, `atm_longitude`, `tahun`, `status`) VALUES
(1, 'ATM BNI SPBU Jati', 'BNI', 'Jalan Bypass Jati, Cimparuh, Pariaman Tengah, Kota Pariaman', '-0.6278626', '100.153057', 2020, 1),
(2, 'ATM BNI Diponegoro', 'BNI', 'Jalan Diponegoro No. 34, Kampung Pondok, Pariaman Tengah, Kota Pariaman', '-0.6233633', '100.1110881', 2020, 1),
(3, 'ATM BNI RSUD Pariaman', 'BNI', 'Kampung Pondok, Pariaman Tengah, Kota Pariaman', '-0.6313668', '100.1168019', 2020, 1),
(4, 'ATM BRI Nana Swalayan', 'BRI', 'Jati Mudik, Pariaman Tengah, Kota Pariaman', '-0.6278197', '100.153014', 2020, 1),
(5, 'ARM BRI Kantor Cabang Pariaman', 'BRI', 'Jalan Merdeka No. 21 Pasir, Pariaman Tengah, Kota Pariaman', '-0.6252635', '100.1086872', 2020, 1),
(6, 'ATM Bank Nagari Kantor Walikota Pariaman', 'Bank Nagari', 'Jalan Imam Bonjol No. 44, Pariaman Tengah, Kota Pariaman', '-0.6278197', '100.153014', 2020, 1),
(7, 'ATM Bank Nagari - 05BAS1', 'Bank Nagari', 'Jalan Jendral Sudirman No. 25, Pariaman Tengah, Kota Pariaman', '-0.6254418', '100.1115595', 2020, 1),
(8, 'ATM Bank Nagari - 710401', 'Bank Nagari', 'Kantor Bank Nagari Capem Syariah Pariaman, Jalan Pahlawan No. 21, Kota Pariaman', '-0.623837', '100.1127216', 2020, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_berita`
--

CREATE TABLE `tb_berita` (
  `berita_id` int(11) NOT NULL,
  `berita_foto` text COLLATE utf8_unicode_ci NOT NULL,
  `berita_judul` text COLLATE utf8_unicode_ci NOT NULL,
  `berita_isi` text COLLATE utf8_unicode_ci NOT NULL,
  `berita_tanggal` datetime NOT NULL,
  `berita_hit` int(11) DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `berita_status` smallint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_berita`
--

INSERT INTO `tb_berita` (`berita_id`, `berita_foto`, `berita_judul`, `berita_isi`, `berita_tanggal`, `berita_hit`, `slug`, `berita_status`) VALUES
(4, '1582513411-berita.jpg', 'Pemko Pariaman Study Tiru ke Mesjid Paripurna Kota Pekanbaru', '<p>Pemko Pariaman Study Tiru ke Mesjid Paripurna Kota Pekanbaru&nbsp;Pemko Pariaman Study Tiru ke Mesjid Paripurna Kota Pekanbaru&nbsp;Pemko Pariaman Study Tiru ke Mesjid Paripurna Kota Pekanbaru&nbsp;Pemko Pariaman Study Tiru ke Mesjid Paripurna Kota Pekanbaru&nbsp;Pemko Pariaman Study Tiru ke Mesjid Paripurna Kota Pekanbaru&nbsp;Pemko Pariaman Study Tiru ke Mesjid Paripurna Kota Pekanbaru&nbsp;Pemko Pariaman Study Tiru ke Mesjid Paripurna Kota Pekanbaru</p>\r\n', '2020-02-24 00:00:00', 19, 'pemko-pariaman-study-tiru-ke-mesjid-paripurna-kota-pekanbaru', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_masjid`
--

CREATE TABLE `tb_masjid` (
  `m_id` int(11) NOT NULL,
  `m_nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `m_alamat` text COLLATE utf8_unicode_ci NOT NULL,
  `m_latitude` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `m_longitude` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tahun` int(5) NOT NULL,
  `status` smallint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_masjid`
--

INSERT INTO `tb_masjid` (`m_id`, `m_nama`, `m_alamat`, `m_latitude`, `m_longitude`, `tahun`, `status`) VALUES
(1, 'Masjid Raya Kota Pariaman', 'Jl. Bagindo Aziz Chan No.56, Kp. Perak, Pariaman Tengah, Kota Pariaman', '-0.6201344', '100.1365504', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_namakamar`
--

CREATE TABLE `tb_namakamar` (
  `namakamar_id` int(11) NOT NULL,
  `namakamar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_parkir`
--

CREATE TABLE `tb_parkir` (
  `p_id` int(11) NOT NULL,
  `p_nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `p_alamat` text COLLATE utf8_unicode_ci NOT NULL,
  `p_latitude` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `p_longitude` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `p_status` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_parkir`
--

INSERT INTO `tb_parkir` (`p_id`, `p_nama`, `p_alamat`, `p_latitude`, `p_longitude`, `p_status`) VALUES
(1, 'Lokasi Parkir Rinaldo', 'Pasir, Pariaman Tengah', '-0.6266202', '100.1160767', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pemesanan`
--

CREATE TABLE `tb_pemesanan` (
  `pemesanan_id` int(11) NOT NULL,
  `pemesanan_hotel_id` int(11) DEFAULT NULL,
  `pemesanan_checkin` datetime DEFAULT NULL,
  `pemesanan_durasi` varchar(50) DEFAULT NULL,
  `pemesanan_tamu_dewasa` int(2) DEFAULT NULL,
  `pemesanan_tamu_anak` int(2) DEFAULT NULL,
  `pemesanan_jumlah_kamar` int(2) DEFAULT NULL,
  `pemesanan_total` double DEFAULT NULL,
  `pemesanan_nama` varchar(255) DEFAULT NULL,
  `pemesanan_notelp` varchar(50) DEFAULT NULL,
  `pemesanan_email` varchar(50) DEFAULT NULL,
  `pemesanan_status` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pemesanan`
--

INSERT INTO `tb_pemesanan` (`pemesanan_id`, `pemesanan_hotel_id`, `pemesanan_checkin`, `pemesanan_durasi`, `pemesanan_tamu_dewasa`, `pemesanan_tamu_anak`, `pemesanan_jumlah_kamar`, `pemesanan_total`, `pemesanan_nama`, `pemesanan_notelp`, `pemesanan_email`, `pemesanan_status`) VALUES
(14, 4, '2020-07-05 00:00:00', '2', 2, 1, 1, NULL, 'sindi', '088052258558', 'sindi@gmail.com', 1),
(15, 5, '2020-07-10 00:00:00', '1', 1, 1, 1, NULL, 'gina', '0812', 'gina@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_rs`
--

CREATE TABLE `tb_rs` (
  `rs_id` int(11) NOT NULL,
  `rs_nama` text COLLATE utf8_unicode_ci NOT NULL,
  `rs_alamat` text COLLATE utf8_unicode_ci NOT NULL,
  `rs_latitude` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rs_longitude` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rs_status` smallint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_rs`
--

INSERT INTO `tb_rs` (`rs_id`, `rs_nama`, `rs_alamat`, `rs_latitude`, `rs_longitude`, `rs_status`) VALUES
(1, 'RSUD Pariaman', 'Jalan Prof. Yamin SH No. 5, Kampung Baru, Pariaman Tengah, Kota Pariaman', '-0.6308976', '100.123669', 0),
(2, 'RS Tamar Medical Centre Pariaman', 'Jl. Basuki Rahmat No.1, Karan Aur, Pariaman Tengah, Kota Pariaman', '-0.6384196', '100.1268327', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_spbu`
--

CREATE TABLE `tb_spbu` (
  `spbu_id` int(11) NOT NULL,
  `spbu_nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `spbu_alamat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `spbu_latitude` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `spbu_longitude` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tahun` int(5) NOT NULL,
  `status` smallint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_spbu`
--

INSERT INTO `tb_spbu` (`spbu_id`, `spbu_nama`, `spbu_alamat`, `spbu_latitude`, `spbu_longitude`, `tahun`, `status`) VALUES
(1, 'SPBU 14.255590 Pertamina', 'Toboh Gadang, Sintuk Toboh Gadang, Kabupaten Padang Pariaman', '-0.6670129', '100.2362926', 0, 1),
(2, 'SPBU Toboh Pertamina', 'Jalan Imam Bonjol, Toboh Palabah, Pariaman Selatan, Kota Pariaman', '-0.6260591', '100.1629116', 0, 1),
(3, 'SPBU Jati', 'Jalan Wolter Monginsidi, Jati Mudik, Pariaman Tengah, Kota Pariaman', '-0.6211331', '100.1444618', 0, 1),
(4, 'SPBU Kampung Pondok', 'Kampung Pondok, Pariaman Tengah, Kota Pariaman', '-0.6219988', '100.121572', 0, 1),
(5, 'SPBU Padang Birik-Birik', 'Padang Birik-Birik, Pariaman Utara, Kota Pariaman', '-0.5636678', '100.1089151', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level` int(11) NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT 10,
  `desa` int(11) DEFAULT NULL,
  `nama_desa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `level`, `status`, `desa`, `nama_desa`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'xf4pQy3jjZprinN31u2nLZm_WgdIvidX', '$2y$13$BQP54tWmYAqnH3kWUNDbPOZCLRcNhlDgmiOhs1AIdLuulnxx/IXX6', NULL, 'adm@gmail.com', 1, 10, 0, '', 1565422383, 1542264946),
(2, 'pariwisata', 'j9DAxkbrOnZnN-Lvm2xUREDNOVcZ-ITa', '$2y$13$jFf5iwo7NkHauHeLzpD8fOZR5z4l29iyuuEcZBYojoxHdCfJwV8dy', NULL, '', 2, 10, NULL, '', 1591845085, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agama`
--
ALTER TABLE `agama`
  ADD PRIMARY KEY (`agama_id`);

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`agenda_id`);

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`biodata_id`);

--
-- Indexes for table `cagar_budaya`
--
ALTER TABLE `cagar_budaya`
  ADD PRIMARY KEY (`cagar_id`);

--
-- Indexes for table `destinasi_wisata`
--
ALTER TABLE `destinasi_wisata`
  ADD PRIMARY KEY (`id_destinasi`);

--
-- Indexes for table `fasilitas_hotel`
--
ALTER TABLE `fasilitas_hotel`
  ADD PRIMARY KEY (`fh_id`);

--
-- Indexes for table `fasilitas_kamar_hotel`
--
ALTER TABLE `fasilitas_kamar_hotel`
  ADD PRIMARY KEY (`fkh_id`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`hotel_id`);

--
-- Indexes for table `kamar_hotel`
--
ALTER TABLE `kamar_hotel`
  ADD PRIMARY KEY (`kh_id`),
  ADD KEY `kh_jenis_bed` (`kh_jenis_bed`);

--
-- Indexes for table `kategori_bed`
--
ALTER TABLE `kategori_bed`
  ADD PRIMARY KEY (`id_bed`);

--
-- Indexes for table `kategori_kamar`
--
ALTER TABLE `kategori_kamar`
  ADD PRIMARY KEY (`id_kamar`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`kecamatan_id`),
  ADD KEY `fk_kecamatan_kota` (`id_kota`);

--
-- Indexes for table `kerajinan`
--
ALTER TABLE `kerajinan`
  ADD PRIMARY KEY (`kerajinan_id`);

--
-- Indexes for table `kuliner`
--
ALTER TABLE `kuliner`
  ADD PRIMARY KEY (`id_kuliner`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`),
  ADD KEY `fk_login_user` (`id_user`);

--
-- Indexes for table `map`
--
ALTER TABLE `map`
  ADD PRIMARY KEY (`idmap`),
  ADD KEY `idx-map-npsn` (`npsn`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`prof_id`);

--
-- Indexes for table `restoran`
--
ALTER TABLE `restoran`
  ADD PRIMARY KEY (`restoran_id`);

--
-- Indexes for table `tb_akses`
--
ALTER TABLE `tb_akses`
  ADD PRIMARY KEY (`akses_id`);

--
-- Indexes for table `tb_atm`
--
ALTER TABLE `tb_atm`
  ADD PRIMARY KEY (`atm_id`);

--
-- Indexes for table `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`berita_id`);

--
-- Indexes for table `tb_masjid`
--
ALTER TABLE `tb_masjid`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `tb_namakamar`
--
ALTER TABLE `tb_namakamar`
  ADD PRIMARY KEY (`namakamar_id`);

--
-- Indexes for table `tb_parkir`
--
ALTER TABLE `tb_parkir`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  ADD PRIMARY KEY (`pemesanan_id`);

--
-- Indexes for table `tb_rs`
--
ALTER TABLE `tb_rs`
  ADD PRIMARY KEY (`rs_id`);

--
-- Indexes for table `tb_spbu`
--
ALTER TABLE `tb_spbu`
  ADD PRIMARY KEY (`spbu_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agama`
--
ALTER TABLE `agama`
  MODIFY `agama_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `agenda_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `biodata`
--
ALTER TABLE `biodata`
  MODIFY `biodata_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cagar_budaya`
--
ALTER TABLE `cagar_budaya`
  MODIFY `cagar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `destinasi_wisata`
--
ALTER TABLE `destinasi_wisata`
  MODIFY `id_destinasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `fasilitas_hotel`
--
ALTER TABLE `fasilitas_hotel`
  MODIFY `fh_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fasilitas_kamar_hotel`
--
ALTER TABLE `fasilitas_kamar_hotel`
  MODIFY `fkh_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `hotel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kamar_hotel`
--
ALTER TABLE `kamar_hotel`
  MODIFY `kh_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kategori_bed`
--
ALTER TABLE `kategori_bed`
  MODIFY `id_bed` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kategori_kamar`
--
ALTER TABLE `kategori_kamar`
  MODIFY `id_kamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `kecamatan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kerajinan`
--
ALTER TABLE `kerajinan`
  MODIFY `kerajinan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kuliner`
--
ALTER TABLE `kuliner`
  MODIFY `id_kuliner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `map`
--
ALTER TABLE `map`
  MODIFY `idmap` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `prof_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `restoran`
--
ALTER TABLE `restoran`
  MODIFY `restoran_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_akses`
--
ALTER TABLE `tb_akses`
  MODIFY `akses_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_atm`
--
ALTER TABLE `tb_atm`
  MODIFY `atm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `berita_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_masjid`
--
ALTER TABLE `tb_masjid`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_namakamar`
--
ALTER TABLE `tb_namakamar`
  MODIFY `namakamar_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_parkir`
--
ALTER TABLE `tb_parkir`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  MODIFY `pemesanan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_rs`
--
ALTER TABLE `tb_rs`
  MODIFY `rs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_spbu`
--
ALTER TABLE `tb_spbu`
  MODIFY `spbu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kamar_hotel`
--
ALTER TABLE `kamar_hotel`
  ADD CONSTRAINT `kamar_hotel_ibfk_1` FOREIGN KEY (`kh_jenis_bed`) REFERENCES `kategori_bed` (`id_bed`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
