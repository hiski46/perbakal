-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for perbakal
CREATE DATABASE IF NOT EXISTS `perbakal` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `perbakal`;

-- Dumping structure for table perbakal.anggota
CREATE TABLE IF NOT EXISTS `anggota` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  `kepengurusan` int(11) NOT NULL,
  `jabatan` enum('bph','koordinator','anggota','dp') DEFAULT NULL,
  `tempat_lahir` varchar(100) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `foto` text,
  `medsos` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- Dumping data for table perbakal.anggota: ~13 rows (approximately)
/*!40000 ALTER TABLE `anggota` DISABLE KEYS */;
INSERT INTO `anggota` (`id`, `nama`, `kepengurusan`, `jabatan`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `foto`, `medsos`) VALUES
	(1, 'DR. Sopian Sitepu S.H. M.H. M.Kn.', 2, 'bph', '', '0000-00-00', '', '1659083864_93e8625dc2252df2fffb.jpg', ''),
	(2, NULL, 3, 'bph', NULL, NULL, NULL, NULL, NULL),
	(3, NULL, 4, 'bph', NULL, NULL, NULL, NULL, NULL),
	(4, 'Drs. Abadi Tarigan', 5, 'bph', '', '0000-00-00', '', 'default.jpg', ''),
	(5, NULL, 6, 'bph', NULL, NULL, NULL, NULL, NULL),
	(6, NULL, 7, 'bph', NULL, NULL, NULL, NULL, NULL),
	(7, 'Firdaus F. Barus S.H. M.Kn.', 8, 'bph', '', '0000-00-00', '', 'default.jpg', ''),
	(8, NULL, 9, 'bph', NULL, NULL, NULL, NULL, NULL),
	(9, '', 10, 'koordinator', '', NULL, '', '', ''),
	(10, '', 12, 'koordinator', '', NULL, '', '', ''),
	(11, NULL, 14, 'koordinator', NULL, NULL, NULL, NULL, NULL),
	(12, NULL, 15, 'koordinator', NULL, NULL, NULL, NULL, NULL),
	(13, NULL, 16, 'koordinator', NULL, NULL, NULL, NULL, NULL);
/*!40000 ALTER TABLE `anggota` ENABLE KEYS */;

-- Dumping structure for table perbakal.baner
CREATE TABLE IF NOT EXISTS `baner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` tinytext,
  `gambar` tinytext,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table perbakal.baner: ~0 rows (approximately)
/*!40000 ALTER TABLE `baner` DISABLE KEYS */;
INSERT INTO `baner` (`id`, `text`, `gambar`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'Hallo Gaes', '1658753325_bb4bccf466ad04f65fc0.jpg', NULL, NULL, NULL),
	(2, 'PERMATA', '1659081099_57f22832b4f979fc7e8c.jpeg', NULL, NULL, NULL);
/*!40000 ALTER TABLE `baner` ENABLE KEYS */;

-- Dumping structure for table perbakal.berita
CREATE TABLE IF NOT EXISTS `berita` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `create_at` datetime NOT NULL,
  `type` enum('berita','kutip','artikel') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table perbakal.berita: ~0 rows (approximately)
/*!40000 ALTER TABLE `berita` DISABLE KEYS */;
INSERT INTO `berita` (`id`, `judul`, `penulis`, `thumbnail`, `isi`, `create_at`, `type`) VALUES
	(3, 'Rossi Jadi Pelatih Marini di MotoGP 2022', 'https://www.cnnindonesia.com/olahraga/20220729104427-156-827677/rossi-jadi-pelatih-marini-di-motogp-2022', 'https://akcdn.detik.net.id/visual/2022/05/29/motogp-italia-2022-3_169.jpeg?w=650', '', '2022-07-29 00:13:48', 'kutip'),
	(4, 'Penanaman Mangrove', 'Hiskia Pulungan', '1659073184_b0f759c3b2749cdaf448.jpeg', '<p>Ini isi nya<br></p>', '2022-07-29 00:19:59', 'berita'),
	(5, 'Paskah', 'Hiskia Pulungan', '1659073615_1385a8e931c2901964ca.jpg', '<p>Ini isi berita<br></p>', '2022-07-29 00:46:55', 'berita');
/*!40000 ALTER TABLE `berita` ENABLE KEYS */;

-- Dumping structure for table perbakal.groups
CREATE TABLE IF NOT EXISTS `groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Dumping data for table perbakal.groups: ~2 rows (approximately)
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;
INSERT INTO `groups` (`id`, `name`, `description`) VALUES
	(1, 'admin', 'Administrator'),
	(2, 'members', 'General User');
/*!40000 ALTER TABLE `groups` ENABLE KEYS */;

-- Dumping structure for table perbakal.kepengurusan
CREATE TABLE IF NOT EXISTS `kepengurusan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jabatan` varchar(100) NOT NULL DEFAULT '',
  `type` enum('dp','bph','sie') DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- Dumping data for table perbakal.kepengurusan: ~14 rows (approximately)
/*!40000 ALTER TABLE `kepengurusan` DISABLE KEYS */;
INSERT INTO `kepengurusan` (`id`, `jabatan`, `type`) VALUES
	(1, 'Dewan Penasehat', 'dp'),
	(2, 'Ketua', 'bph'),
	(3, 'Ketua I', 'bph'),
	(4, 'Ketua II', 'bph'),
	(5, 'Sekretaris', 'bph'),
	(6, 'Sekretaris I', 'bph'),
	(7, 'Sekretaris II', 'bph'),
	(8, 'Bendahara', 'bph'),
	(9, 'Bendahara I', 'bph'),
	(10, 'Seksi Bidang Seni, Adat, dan Budaya (Peradaten)', 'sie'),
	(12, 'Seksi Bidang Humas', 'sie'),
	(14, 'Seksi Bidang Dana dan Usaha', 'sie'),
	(15, 'Seksi Bidang Pemuda dan Olahraga', 'sie'),
	(16, 'Seksi Bidang Pendidikan', 'sie');
/*!40000 ALTER TABLE `kepengurusan` ENABLE KEYS */;

-- Dumping structure for table perbakal.kontak_alamat
CREATE TABLE IF NOT EXISTS `kontak_alamat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `alamat` text,
  `telepon` tinytext,
  `email` tinytext,
  `facebook` tinytext,
  `youtube` tinytext,
  `instagram` tinytext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table perbakal.kontak_alamat: ~0 rows (approximately)
/*!40000 ALTER TABLE `kontak_alamat` DISABLE KEYS */;
INSERT INTO `kontak_alamat` (`id`, `alamat`, `telepon`, `email`, `facebook`, `youtube`, `instagram`) VALUES
	(1, 'LBH Nasional Jl. KiMaja No.172 WayHalim Bandarlampung', '0721-784454', 'perbakal@gmail.com', '', '', '');
/*!40000 ALTER TABLE `kontak_alamat` ENABLE KEYS */;

-- Dumping structure for table perbakal.login_attempts
CREATE TABLE IF NOT EXISTS `login_attempts` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) DEFAULT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table perbakal.login_attempts: ~0 rows (approximately)
/*!40000 ALTER TABLE `login_attempts` DISABLE KEYS */;
/*!40000 ALTER TABLE `login_attempts` ENABLE KEYS */;

-- Dumping structure for table perbakal.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table perbakal.migrations: ~0 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
	(1, '20181211100537', 'IonAuth\\Database\\Migrations\\Migration_Install_ion_auth', '', 'IonAuth', 1657992032, 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table perbakal.organisasi
CREATE TABLE IF NOT EXISTS `organisasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `logo` tinytext,
  `visi` text,
  `misi` text,
  `tentang` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table perbakal.organisasi: ~0 rows (approximately)
/*!40000 ALTER TABLE `organisasi` DISABLE KEYS */;
INSERT INTO `organisasi` (`id`, `logo`, `visi`, `misi`, `tentang`) VALUES
	(1, '1658765624_48f62a3dc5dda42a81c5.PNG', '<ol><li>Visi satu</li><li>Visi dua</li><li>Visi tiga</li></ol>', '<ol><li>Misi Satu</li><li>Misi Dua</li><li>Misi Tiga</li></ol>', '<p>Ini Tentang</p><p>&nbsp;</p>');
/*!40000 ALTER TABLE `organisasi` ENABLE KEYS */;

-- Dumping structure for table perbakal.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(254) NOT NULL,
  `activation_selector` varchar(255) DEFAULT NULL,
  `activation_code` varchar(255) DEFAULT NULL,
  `forgotten_password_selector` varchar(255) DEFAULT NULL,
  `forgotten_password_code` varchar(255) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_selector` varchar(255) DEFAULT NULL,
  `remember_code` varchar(255) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `activation_selector` (`activation_selector`),
  UNIQUE KEY `forgotten_password_selector` (`forgotten_password_selector`),
  UNIQUE KEY `remember_selector` (`remember_selector`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Dumping data for table perbakal.users: ~2 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `email`, `activation_selector`, `activation_code`, `forgotten_password_selector`, `forgotten_password_code`, `forgotten_password_time`, `remember_selector`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
	(3, '::1', 'su@mail.com', '$2y$12$oKDeYlTBhoY.BxUA9i2DpOriTk8hrOtEn.Rp9jjAc9rO9kc7e1boO', 'su@mail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1657992738, 1658248915, 1, 'Super', 'Admin', '-', '-'),
	(4, '::1', 'hiski46@gmail.com', '$2y$10$rr2zOc0kH5jWKg9KDL4ipO0Gslq4QZ1ih960vBqGRokmGqIwDFbUi', 'hiski46@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1657992882, 1659061195, 1, 'Hiskia', 'Pulungan', '-', '-');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Dumping structure for table perbakal.users_groups
CREATE TABLE IF NOT EXISTS `users_groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `users_groups_user_id_foreign` (`user_id`),
  KEY `users_groups_group_id_foreign` (`group_id`),
  CONSTRAINT `users_groups_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `users_groups_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- Dumping data for table perbakal.users_groups: ~2 rows (approximately)
/*!40000 ALTER TABLE `users_groups` DISABLE KEYS */;
INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
	(12, 3, 1),
	(13, 3, 2),
	(14, 4, 2);
/*!40000 ALTER TABLE `users_groups` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
