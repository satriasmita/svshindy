/*
SQLyog Professional v13.1.1 (32 bit)
MySQL - 10.4.22-MariaDB : Database - pariwisata
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`pariwisata` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `pariwisata`;

/*Table structure for table `agama` */

DROP TABLE IF EXISTS `agama`;

CREATE TABLE `agama` (
  `agama_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_agama` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`agama_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Table structure for table `agenda` */

DROP TABLE IF EXISTS `agenda`;

CREATE TABLE `agenda` (
  `agenda_id` int(11) NOT NULL AUTO_INCREMENT,
  `agenda_nama` varchar(255) DEFAULT NULL,
  `agenda_isi` text DEFAULT NULL,
  `agenda_lokasi` text DEFAULT NULL,
  `agenda_mulai` varchar(255) DEFAULT NULL,
  `agenda_selesai` varchar(255) DEFAULT NULL,
  `status` smallint(2) NOT NULL,
  `agenda_photoid` varchar(255) DEFAULT NULL,
  `agenda_latitude` varchar(255) DEFAULT NULL,
  `agenda_longitude` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`agenda_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Table structure for table `biodata` */

DROP TABLE IF EXISTS `biodata`;

CREATE TABLE `biodata` (
  `biodata_id` int(11) NOT NULL AUTO_INCREMENT,
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
  `KEBANGSAAN` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`biodata_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Table structure for table `destinasi_wisata` */

DROP TABLE IF EXISTS `destinasi_wisata`;

CREATE TABLE `destinasi_wisata` (
  `id_destinasi` int(11) NOT NULL AUTO_INCREMENT,
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
  `foto4` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_destinasi`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

/*Table structure for table `fasilitas_hotel` */

DROP TABLE IF EXISTS `fasilitas_hotel`;

CREATE TABLE `fasilitas_hotel` (
  `fh_id` int(11) NOT NULL AUTO_INCREMENT,
  `fh_hotel` int(11) DEFAULT NULL,
  `fh_ac` int(2) DEFAULT NULL,
  `fh_kolam_renang` int(2) DEFAULT NULL,
  `fh_tempat_parkir` int(2) DEFAULT NULL,
  `fh_wifi` int(2) DEFAULT NULL,
  `fh_restorant` int(2) DEFAULT NULL,
  `fh_resepsionis` int(2) DEFAULT NULL,
  `fh_transportasi` int(2) NOT NULL,
  PRIMARY KEY (`fh_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Table structure for table `fasilitas_kamar_hotel` */

DROP TABLE IF EXISTS `fasilitas_kamar_hotel`;

CREATE TABLE `fasilitas_kamar_hotel` (
  `fkh_id` int(11) NOT NULL AUTO_INCREMENT,
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
  `fkh_kulkas` int(2) DEFAULT NULL,
  PRIMARY KEY (`fkh_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Table structure for table `hotel` */

DROP TABLE IF EXISTS `hotel`;

CREATE TABLE `hotel` (
  `hotel_id` int(11) NOT NULL AUTO_INCREMENT,
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
  `h_longitude` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`hotel_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Table structure for table `kamar_hotel` */

DROP TABLE IF EXISTS `kamar_hotel`;

CREATE TABLE `kamar_hotel` (
  `kh_id` int(11) NOT NULL AUTO_INCREMENT,
  `kh_hotel` int(11) DEFAULT NULL,
  `kh_nama` varchar(255) DEFAULT NULL,
  `kh_luas_kamar` varchar(255) DEFAULT NULL,
  `kh_jenis_bed` int(11) DEFAULT NULL,
  `kh_harga` int(11) DEFAULT NULL,
  `kh_sisa_kamar` int(11) DEFAULT NULL,
  `kh_jumlah_tamu` int(11) DEFAULT NULL,
  PRIMARY KEY (`kh_id`),
  KEY `kh_jenis_bed` (`kh_jenis_bed`),
  CONSTRAINT `kamar_hotel_ibfk_1` FOREIGN KEY (`kh_jenis_bed`) REFERENCES `kategori_bed` (`id_bed`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Table structure for table `kategori_bed` */

DROP TABLE IF EXISTS `kategori_bed`;

CREATE TABLE `kategori_bed` (
  `id_bed` int(11) NOT NULL AUTO_INCREMENT,
  `nama_bed` varchar(255) NOT NULL,
  PRIMARY KEY (`id_bed`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Table structure for table `kategori_kamar` */

DROP TABLE IF EXISTS `kategori_kamar`;

CREATE TABLE `kategori_kamar` (
  `id_kamar` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kamaar` varchar(255) NOT NULL,
  PRIMARY KEY (`id_kamar`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Table structure for table `kecamatan` */

DROP TABLE IF EXISTS `kecamatan`;

CREATE TABLE `kecamatan` (
  `kecamatan_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kec` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kd_kecamatan` int(2) DEFAULT NULL,
  `id_kota` int(11) DEFAULT NULL,
  PRIMARY KEY (`kecamatan_id`),
  KEY `fk_kecamatan_kota` (`id_kota`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Table structure for table `kerajinan` */

DROP TABLE IF EXISTS `kerajinan`;

CREATE TABLE `kerajinan` (
  `kerajinan_id` int(11) NOT NULL AUTO_INCREMENT,
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
  `status` smallint(2) NOT NULL,
  PRIMARY KEY (`kerajinan_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Table structure for table `kuliner` */

DROP TABLE IF EXISTS `kuliner`;

CREATE TABLE `kuliner` (
  `id_kuliner` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `keterangan` text NOT NULL,
  `tahun` int(5) NOT NULL,
  `status` smallint(2) NOT NULL,
  PRIMARY KEY (`id_kuliner`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Table structure for table `login` */

DROP TABLE IF EXISTS `login`;

CREATE TABLE `login` (
  `login_id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `id_KAB` int(2) DEFAULT NULL,
  `id_KEC` int(2) DEFAULT NULL,
  PRIMARY KEY (`login_id`),
  KEY `fk_login_user` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Table structure for table `map` */

DROP TABLE IF EXISTS `map`;

CREATE TABLE `map` (
  `idmap` int(11) NOT NULL AUTO_INCREMENT,
  `latitude` varchar(45) NOT NULL,
  `longtitude` varchar(45) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `npsn` varchar(8) NOT NULL,
  `image` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`idmap`),
  KEY `idx-map-npsn` (`npsn`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Table structure for table `migration` */

DROP TABLE IF EXISTS `migration`;

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `profil` */

DROP TABLE IF EXISTS `profil`;

CREATE TABLE `profil` (
  `prof_id` int(11) NOT NULL AUTO_INCREMENT,
  `prof_judul` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prof_gambar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `prof_isi` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `prof_status` smallint(2) DEFAULT NULL,
  PRIMARY KEY (`prof_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Table structure for table `restoran` */

DROP TABLE IF EXISTS `restoran`;

CREATE TABLE `restoran` (
  `restoran_id` int(11) NOT NULL AUTO_INCREMENT,
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
  `status` smallint(2) NOT NULL,
  PRIMARY KEY (`restoran_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Table structure for table `tb_akses` */

DROP TABLE IF EXISTS `tb_akses`;

CREATE TABLE `tb_akses` (
  `akses_id` int(11) NOT NULL AUTO_INCREMENT,
  `akses_destinasi` varchar(255) NOT NULL,
  `akses_transportasi` varchar(255) NOT NULL,
  `akses_distance` varchar(255) NOT NULL,
  PRIMARY KEY (`akses_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Table structure for table `tb_atm` */

DROP TABLE IF EXISTS `tb_atm`;

CREATE TABLE `tb_atm` (
  `atm_id` int(11) NOT NULL AUTO_INCREMENT,
  `atm_nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `atm_nama_bank` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `atm_alamat` text COLLATE utf8_unicode_ci NOT NULL,
  `atm_latitude` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `atm_longitude` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tahun` int(5) NOT NULL,
  `status` smallint(2) NOT NULL,
  PRIMARY KEY (`atm_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Table structure for table `tb_berita` */

DROP TABLE IF EXISTS `tb_berita`;

CREATE TABLE `tb_berita` (
  `berita_id` int(11) NOT NULL AUTO_INCREMENT,
  `berita_foto` text COLLATE utf8_unicode_ci NOT NULL,
  `berita_judul` text COLLATE utf8_unicode_ci NOT NULL,
  `berita_isi` text COLLATE utf8_unicode_ci NOT NULL,
  `berita_tanggal` datetime NOT NULL,
  `berita_hit` int(11) DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `berita_status` smallint(3) NOT NULL,
  PRIMARY KEY (`berita_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Table structure for table `tb_masjid` */

DROP TABLE IF EXISTS `tb_masjid`;

CREATE TABLE `tb_masjid` (
  `m_id` int(11) NOT NULL AUTO_INCREMENT,
  `m_nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `m_alamat` text COLLATE utf8_unicode_ci NOT NULL,
  `m_latitude` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `m_longitude` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tahun` int(5) NOT NULL,
  `status` smallint(2) NOT NULL,
  PRIMARY KEY (`m_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Table structure for table `tb_namakamar` */

DROP TABLE IF EXISTS `tb_namakamar`;

CREATE TABLE `tb_namakamar` (
  `namakamar_id` int(11) NOT NULL AUTO_INCREMENT,
  `namakamar` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`namakamar_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `tb_parkir` */

DROP TABLE IF EXISTS `tb_parkir`;

CREATE TABLE `tb_parkir` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `p_alamat` text COLLATE utf8_unicode_ci NOT NULL,
  `p_latitude` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `p_longitude` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `p_status` int(3) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Table structure for table `tb_pemesanan` */

DROP TABLE IF EXISTS `tb_pemesanan`;

CREATE TABLE `tb_pemesanan` (
  `pemesanan_id` int(11) NOT NULL AUTO_INCREMENT,
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
  `pemesanan_status` int(2) DEFAULT NULL,
  PRIMARY KEY (`pemesanan_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

/*Table structure for table `tb_rs` */

DROP TABLE IF EXISTS `tb_rs`;

CREATE TABLE `tb_rs` (
  `rs_id` int(11) NOT NULL AUTO_INCREMENT,
  `rs_nama` text COLLATE utf8_unicode_ci NOT NULL,
  `rs_alamat` text COLLATE utf8_unicode_ci NOT NULL,
  `rs_latitude` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rs_longitude` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rs_status` smallint(3) NOT NULL,
  PRIMARY KEY (`rs_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Table structure for table `tb_spbu` */

DROP TABLE IF EXISTS `tb_spbu`;

CREATE TABLE `tb_spbu` (
  `spbu_id` int(11) NOT NULL AUTO_INCREMENT,
  `spbu_nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `spbu_alamat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `spbu_latitude` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `spbu_longitude` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tahun` int(5) NOT NULL,
  `status` smallint(2) NOT NULL,
  PRIMARY KEY (`spbu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
