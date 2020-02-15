-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.36-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             10.3.0.5771
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for umkm
CREATE DATABASE IF NOT EXISTS `umkm` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `umkm`;

-- Dumping structure for table umkm.anggota_umkm
CREATE TABLE IF NOT EXISTS `anggota_umkm` (
  `id_status` int(11) NOT NULL AUTO_INCREMENT,
  `id_anggota_umkm` int(11) DEFAULT NULL,
  `id_profil_usaha` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_status`),
  KEY `FK_anggota_umkm_pendaftar_umkm` (`id_anggota_umkm`),
  KEY `FK_anggota_umkm_profil_usaha` (`id_profil_usaha`),
  KEY `FK_anggota_umkm_master_user` (`id_user`),
  CONSTRAINT `FK_anggota_umkm_master_user` FOREIGN KEY (`id_user`) REFERENCES `master_user` (`id_user`),
  CONSTRAINT `FK_anggota_umkm_pendaftar_umkm` FOREIGN KEY (`id_anggota_umkm`) REFERENCES `pendaftar_umkm` (`id_anggota_umkm`),
  CONSTRAINT `FK_anggota_umkm_profil_usaha` FOREIGN KEY (`id_profil_usaha`) REFERENCES `profil_usaha` (`id_profil_usaha`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Dumping data for table umkm.anggota_umkm: ~2 rows (approximately)
/*!40000 ALTER TABLE `anggota_umkm` DISABLE KEYS */;
INSERT INTO `anggota_umkm` (`id_status`, `id_anggota_umkm`, `id_profil_usaha`, `id_user`) VALUES
	(7, 1, 1, 1);
/*!40000 ALTER TABLE `anggota_umkm` ENABLE KEYS */;

-- Dumping structure for table umkm.jenis
CREATE TABLE IF NOT EXISTS `jenis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table umkm.jenis: ~4 rows (approximately)
/*!40000 ALTER TABLE `jenis` DISABLE KEYS */;
INSERT INTO `jenis` (`id`, `nama`) VALUES
	(1, 'Koperasi'),
	(2, 'PT'),
	(3, 'CV'),
	(4, 'Perorangan'),
	(5, 'Lainnya');
/*!40000 ALTER TABLE `jenis` ENABLE KEYS */;

-- Dumping structure for table umkm.kategori
CREATE TABLE IF NOT EXISTS `kategori` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

-- Dumping data for table umkm.kategori: ~18 rows (approximately)
/*!40000 ALTER TABLE `kategori` DISABLE KEYS */;
INSERT INTO `kategori` (`id`, `nama`) VALUES
	(1, 'Agribisnis'),
	(2, 'Makanan'),
	(3, 'Minuman'),
	(4, 'Makanandan dan Minuman'),
	(5, 'Fashion'),
	(6, 'Craft'),
	(7, 'Aksesoris'),
	(8, 'Bordir'),
	(9, 'JasaSalon'),
	(10, 'Batik'),
	(11, 'Mebel'),
	(12, 'Konveksi'),
	(13, 'Kuliner'),
	(14, 'Obat-Obatan'),
	(15, 'Industri'),
	(16, 'Dekorasi'),
	(17, 'Garmen'),
	(18, 'Toko atau Retail');
/*!40000 ALTER TABLE `kategori` ENABLE KEYS */;

-- Dumping structure for table umkm.level
CREATE TABLE IF NOT EXISTS `level` (
  `levelid` int(11) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table umkm.level: ~2 rows (approximately)
/*!40000 ALTER TABLE `level` DISABLE KEYS */;
INSERT INTO `level` (`levelid`, `nama`) VALUES
	(1, 'Admin'),
	(2, 'Operator');
/*!40000 ALTER TABLE `level` ENABLE KEYS */;

-- Dumping structure for table umkm.master_user
CREATE TABLE IF NOT EXISTS `master_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `jabatan` varchar(20) DEFAULT NULL,
  `level` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table umkm.master_user: ~3 rows (approximately)
/*!40000 ALTER TABLE `master_user` DISABLE KEYS */;
INSERT INTO `master_user` (`id_user`, `username`, `password`, `nama`, `alamat`, `email`, `jabatan`, `level`) VALUES
	(1, 'admin', 'admin', 'Administrator', 'Jl. Anggrek 3', 'admin@gmail.com', 'Administrator', '1'),
	(5, 'staff', 'staff', 'staff1', 'Kureksari', 'tes@email.com', 'kabid', '2');
/*!40000 ALTER TABLE `master_user` ENABLE KEYS */;

-- Dumping structure for table umkm.pendaftar_umkm
CREATE TABLE IF NOT EXISTS `pendaftar_umkm` (
  `id_anggota_umkm` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) DEFAULT NULL,
  `no_ktp` varchar(20) DEFAULT NULL,
  `pend_terakhir` varchar(20) DEFAULT NULL,
  `tempat_lahir` varchar(20) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `alamat_rumah` varchar(50) DEFAULT NULL,
  `no_telp` varchar(13) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `npwp_pribadi` varchar(20) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `kategori` varchar(50) DEFAULT NULL,
  `jenis` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_anggota_umkm`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

-- Dumping data for table umkm.pendaftar_umkm: ~8 rows (approximately)
/*!40000 ALTER TABLE `pendaftar_umkm` DISABLE KEYS */;
INSERT INTO `pendaftar_umkm` (`id_anggota_umkm`, `nama`, `no_ktp`, `pend_terakhir`, `tempat_lahir`, `tanggal_lahir`, `alamat_rumah`, `no_telp`, `email`, `password`, `npwp_pribadi`, `foto`, `kategori`, `jenis`) VALUES
	(1, 'tes', '12334', 'S1', 'Sidoarjo', '1988-01-18', 'waru', '1212', 'admin@gmail.com', '1', NULL, NULL, NULL, NULL),
	(2, 'dsad', '4545', 'qeqeq', 'dsdsd', '0000-00-00', 'dsad', '081234883660', 'Sudarnoinggris@gmail.com', '2', '345', '123', NULL, NULL),
	(13, 'asgiap', '', '', '', '0000-00-00', '', '', 'a@a.com', 'admin', '', '', NULL, NULL),
	(14, 'tes123', '', '', '', '2020-01-17', '', '', 'tes@tes.com', '1', '', '', NULL, NULL),
	(26, 'a', '', '', '', '0000-00-00', '', '', '1@gmail.com', '1', '', 'images.jpg', NULL, NULL),
	(27, 'a', '', '', '', '0000-00-00', '', '', '2@gmail.com', '1', '', 'images.jpg', NULL, NULL),
	(29, 'a', '', '', '', '0000-00-00', '', '', '3@gmail.com', '1', '', 'images.jpg', NULL, NULL),
	(32, 'tes', '', '', '', '0000-00-00', '', '', 'tes1@tes.com', '1', '', 'images.jpg', NULL, NULL),
	(33, 'Sudarno', '', '', 'Sidoarjo', '2020-02-14', 'Jl. Anggrek III No. 7 Kureksari Waru', '081230010212', 'test@test.com', '1', '', '', '1', '1'),
	(35, 'Sudarno', '5555', 'qeqeq', 'Sidoarjo', '2020-02-05', 'Jl. Anggrek III No. 7 Kureksari Waru', '081230010212', '2@test.com', '4342', '', '', '1', '3');
/*!40000 ALTER TABLE `pendaftar_umkm` ENABLE KEYS */;

-- Dumping structure for table umkm.profil_usaha
CREATE TABLE IF NOT EXISTS `profil_usaha` (
  `id_profil_usaha` int(11) NOT NULL AUTO_INCREMENT,
  `nama_usaha` varchar(30) DEFAULT NULL,
  `jenis_kegiatan_utama` varchar(30) DEFAULT NULL,
  `nama_produk` varchar(30) DEFAULT NULL,
  `merk_produk` varchar(30) DEFAULT NULL,
  `alamat_usaha` varchar(50) DEFAULT NULL,
  `status_tempat_usaha` varchar(30) DEFAULT NULL,
  `tahun_berdiri` date DEFAULT NULL,
  `no_telp` varchar(13) DEFAULT NULL,
  `email_usaha` varchar(30) DEFAULT NULL,
  `badan_usaha` varchar(30) DEFAULT NULL,
  `legalitas` varchar(100) DEFAULT NULL,
  `npwp_usaha` varchar(30) DEFAULT NULL,
  `foto_produk` varchar(100) DEFAULT NULL,
  `id_anggota_umkm` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_profil_usaha`),
  KEY `FK_profil_usaha_pendaftar_umkm` (`id_anggota_umkm`),
  CONSTRAINT `FK_profil_usaha_pendaftar_umkm` FOREIGN KEY (`id_anggota_umkm`) REFERENCES `pendaftar_umkm` (`id_anggota_umkm`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- Dumping data for table umkm.profil_usaha: ~2 rows (approximately)
/*!40000 ALTER TABLE `profil_usaha` DISABLE KEYS */;
INSERT INTO `profil_usaha` (`id_profil_usaha`, `nama_usaha`, `jenis_kegiatan_utama`, `nama_produk`, `merk_produk`, `alamat_usaha`, `status_tempat_usaha`, `tahun_berdiri`, `no_telp`, `email_usaha`, `badan_usaha`, `legalitas`, `npwp_usaha`, `foto_produk`, `id_anggota_umkm`) VALUES
	(1, 'Lancar Jaya', 'jenis', 'nama', 'merk', 'alamat', 'status', '2020-01-06', '123', '212@gmail.com', 'CV', 'legalista', '123', 'foto', 1),
	(3, 'Usaha1', 'jenis', 'nama', 'merk', 'alamat', 'status', '0000-00-00', '081234883660', '', '', '', '', '', 1),
	(15, 'te', 'jenis', 'nama', 'merk', '', '', '0000-00-00', '', '', '', 'sepeda.jpg', '', 'images.jpg', 14);
/*!40000 ALTER TABLE `profil_usaha` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
