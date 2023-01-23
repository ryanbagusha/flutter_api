-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 22, 2023 at 07:50 PM
-- Server version: 5.7.36
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

DROP TABLE IF EXISTS `berita`;
CREATE TABLE IF NOT EXISTS `berita` (
  `id_berita` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `isi` text NOT NULL,
  `media` varchar(255) NOT NULL,
  `total_view` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_tag` int(11) NOT NULL,
  `id_type` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_berita`),
  KEY `id_kategori` (`id_kategori`,`id_tag`,`id_type`,`id_user`),
  KEY `id_tag` (`id_tag`),
  KEY `id_type` (`id_type`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `tanggal`, `isi`, `media`, `total_view`, `id_kategori`, `id_tag`, `id_type`, `id_user`) VALUES
(2, 'Jumat Curhat Polres Tala harapkan Kritik, Saran dan Informasi Tentang Kamtibmas', '2023-01-22', 'Polres Tanah Laut, Polda Kalsel menggelar kegiatan Jumat Curhat untuk mendengar langsung curhat warga mengenai saran kritikan masukan serta aduan masyarakat terkait dengan pelayanan kepolisian di warung simpang empat kuburan Jl. Pusara  Kelurahan Pelaihari Kabupaten Tanah Laut, Jumat (20/1/2023).\r\nKegiatan Jumat Curhat dihadiri Para Ketua RT dan Tokoh Agama, Masyarakat dan Pemuda setempat yang dipimpin langsung oleh Kapolres Tanah Laut AKBP Rofikoh Yunianto, S.I.K yang didampingi Pejabat Utama Polres Tanah Laut.', 'berita_1.jpeg', 12, 13, 6, 1, 2),
(3, 'Kapolres Tala Datangi Desa Sungai Riam, ini yang di keluhkan Warga', '2023-01-22', 'Polres Tanah Laut, Polda Kalsel kembali melaksanakan silaturahmi ke masyarakat dengan tajuk “Jumat Curhat”. Kali ini Kapolres Tanah Laut AKBP Rofikoh Yunianto, S.I.K bersama Pejabat Utama Polres Tanah Laut melakukan silaturahmi di Desa Sungai Riam, Kecamatan Pelaihari, Kabupaten Tanah Laut, Jumat pagi (13/1/2023).', 'berita_2.jpeg', 2, 13, 6, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

DROP TABLE IF EXISTS `kategori`;
CREATE TABLE IF NOT EXISTS `kategori` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama`, `deskripsi`) VALUES
(1, 'Kesehatan', NULL),
(2, 'Nasional', NULL),
(3, 'Kabupaten Balangan', NULL),
(4, 'Kabupaten Tabalong', NULL),
(5, 'Kabupaten Hulu Sungai Tengah', NULL),
(6, 'Kabupaten Hulu Sungai Utara', NULL),
(7, 'Kabupaten Hulu Sungai Selatan', NULL),
(8, 'Kabupaten Tapin', NULL),
(9, 'Kabupaten Barito Kuala', NULL),
(10, 'Kabupaten Kotabaru', NULL),
(11, 'Kabupaten Tanah Bumbu', NULL),
(12, 'Kabupaten Banjar', NULL),
(13, 'Kabupaten Tanah Laut', NULL),
(14, 'Kota Banjarmasin', NULL),
(15, 'Kota Banjarbaru', NULL),
(16, 'Provinsi Kalimantan Selatan', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
  `id_role` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(20) NOT NULL,
  PRIMARY KEY (`id_role`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id_role`, `nama`) VALUES
(1, 'Admin'),
(2, 'Admin Berita');

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

DROP TABLE IF EXISTS `tag`;
CREATE TABLE IF NOT EXISTS `tag` (
  `id_tag` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_tag`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tag`
--

INSERT INTO `tag` (`id_tag`, `nama`, `deskripsi`) VALUES
(1, 'Kejati Kalsel', NULL),
(2, 'Hot Topik', NULL),
(3, 'Teknologi', NULL),
(4, 'DPR', NULL),
(5, 'Politik', NULL),
(6, 'Daerah', NULL),
(7, 'Pop', NULL),
(8, 'Dangdut', NULL),
(9, 'IOS', NULL),
(10, 'Android', NULL),
(11, 'Bencana Alam', NULL),
(12, 'Kriminal', NULL),
(13, 'Bola', NULL),
(14, 'Toyota', NULL),
(15, 'Komputer', NULL),
(16, 'Microsoft', NULL),
(17, 'Covid 19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

DROP TABLE IF EXISTS `type`;
CREATE TABLE IF NOT EXISTS `type` (
  `id_type` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  PRIMARY KEY (`id_type`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id_type`, `nama`) VALUES
(1, 'Post'),
(2, 'Peristiwa'),
(3, 'Galeri');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL,
  `username` varchar(80) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id_role` int(11) NOT NULL,
  PRIMARY KEY (`id_user`),
  KEY `id_role` (`id_role`),
  KEY `id_role_2` (`id_role`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `username`, `password`, `id_role`) VALUES
(1, 'Admin', 'admin@newsupdate.co.id', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1),
(2, 'Admin Berita', 'admin_berita@newsupdate.co.id', 'admin_berita', '21232f297a57a5a743894a0e4a801fc3', 2);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `berita_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `berita_ibfk_2` FOREIGN KEY (`id_tag`) REFERENCES `tag` (`id_tag`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `berita_ibfk_3` FOREIGN KEY (`id_type`) REFERENCES `type` (`id_type`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `berita_ibfk_4` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
