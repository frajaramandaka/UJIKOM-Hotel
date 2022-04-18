-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2022 at 06:35 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hotel`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `simpan_fasilitas_hotel` (`id_fashotel` INT(11), `nama_fashotel` VARCHAR(50), `ket_fashotel` VARCHAR(255), `gambar` VARCHAR(255))  BEGIN
insert into fasilitas_hotel
values (id_fashotel, nama_fashotel, ket_fashotel, gambar);
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `simpan_fasilitas_kamar` (`id_faskamar` INT(11), `id_kamar` INT(11), `nama_faskamar` VARCHAR(255), `kategori` VARCHAR(255), `gambar` VARCHAR(255))  BEGIN
INSERT INTO fasilitas_kamar
    VALUES (id_faskamar, id_kamar, nama_faskamar, kategori, gambar);
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `simpan_login` (`id_login` INT(11), `username` VARCHAR(35), `password_user` VARCHAR(35), `level_user` ENUM('admin','resepsionis','tamu'), `tgl_lahir` DATE, `nowa` VARCHAR(50), `jenis_kelamin` ENUM('laki-laki','perempuan'), `nama` VARCHAR(50))  BEGIN
    insert into login
    values (id_login, username, password_user, level_user, tgl_lahir, nowa, jenis_kelamin, nama);
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `simpan_pemesanan` (`id_pemesanan` INT(11), `nama_pemesanan` VARCHAR(50), `email` VARCHAR(35), `no_hp` VARCHAR(35), `nama_tamu` VARCHAR(50), `id_kamar` INT(11), `tgl_cekin` DATE, `tgl_cekout` DATE, `jml_kamar` INT(11), `tipe_kamar` VARCHAR(50), `harga` INT(11), `status_kamar` ENUM('checkin','checkout'))  BEGIN
    insert into pemesanan
    values (id_pemesanan, nama_pemesanan, email, no_hp, nama_tamu, id_kamar, tgl_cekin, tgl_cekout, jml_kamar, tipe_kamar, harga, status_kamar);
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `simpan_tipe_kamar` (`id_kamar` INT(11), `nama_kamar` VARCHAR(50), `jmlh_kamar` INT(11), `gambar_tipekamar` VARCHAR(255), `harga` INT(11))  BEGIN
    insert into tipe_kamar
    values (id_kamar, nama_kamar, jmlh_kamar, gambar_tipekamar, harga);
    END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas_hotel`
--

CREATE TABLE `fasilitas_hotel` (
  `id_fashotel` int(11) NOT NULL,
  `nama_fashotel` varchar(50) NOT NULL,
  `ket_fashotel` text NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fasilitas_hotel`
--

INSERT INTO `fasilitas_hotel` (`id_fashotel`, `nama_fashotel`, `ket_fashotel`, `gambar`) VALUES
(1, 'tv', 'ukuran 23 inci', 'gambar.jpg'),
(2, 'kolam renang', '3 meter', 'gambar.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas_kamar`
--

CREATE TABLE `fasilitas_kamar` (
  `id_faskamar` int(11) NOT NULL,
  `id_kamar` int(11) NOT NULL,
  `nama_faskamar` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fasilitas_kamar`
--

INSERT INTO `fasilitas_kamar` (`id_faskamar`, `id_kamar`, `nama_faskamar`, `kategori`, `gambar`) VALUES
(3, 1, 'tv', 'ukuran 23 inci', 'gambar.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_login` int(11) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(35) NOT NULL,
  `level` enum('admin','resepsionis','tamu') NOT NULL,
  `tgl_lahir` date NOT NULL,
  `nowa` varchar(50) NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_login`, `username`, `password`, `level`, `tgl_lahir`, `nowa`, `jenis_kelamin`, `nama`) VALUES
(1, 'fraja', '123', 'tamu', '2022-04-01', '083112345678', 'laki-laki', 'Frajaramandaka'),
(4, 'resepsionis', '12345', 'resepsionis', '2022-04-01', '081236523874', 'perempuan', 'resepsionis'),
(5, 'admin', '12345678', 'admin', '2022-04-02', '0865419856', 'laki-laki', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` int(11) NOT NULL,
  `nama_pemesan` varchar(50) NOT NULL,
  `email` varchar(35) NOT NULL,
  `no_hp` varchar(35) NOT NULL,
  `nama_tamu` varchar(50) NOT NULL,
  `id_kamar` int(11) NOT NULL,
  `tgl_cekin` date NOT NULL,
  `tgl_cekout` date NOT NULL,
  `jml_kamar` int(11) NOT NULL,
  `tipe_kamar` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `status` enum('checkin','checkout') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `nama_pemesan`, `email`, `no_hp`, `nama_tamu`, `id_kamar`, `tgl_cekin`, `tgl_cekout`, `jml_kamar`, `tipe_kamar`, `harga`, `status`) VALUES
(2, 'dimas', 'dimas@gmail.com', '081234567890', 'dimas', 1, '2022-04-16', '2022-04-17', 1, '', 0, 'checkout'),
(3, 'desu', 'desu@gmail.com', '081234567890', 'desu', 3, '2022-04-16', '2022-04-17', 1, '', 0, 'checkout'),
(4, 'oka', 'oka@gmail.com', '081234567890', 'oka', 1, '2022-04-15', '2022-04-16', 1, 'reguler room', 350000, 'checkin');

-- --------------------------------------------------------

--
-- Table structure for table `tipe_kamar`
--

CREATE TABLE `tipe_kamar` (
  `id_kamar` int(11) NOT NULL,
  `nama_kamar` varchar(50) NOT NULL,
  `jmlh_kamar` int(11) NOT NULL,
  `gambar_tipekamar` text NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tipe_kamar`
--

INSERT INTO `tipe_kamar` (`id_kamar`, `nama_kamar`, `jmlh_kamar`, `gambar_tipekamar`, `harga`) VALUES
(1, 'reguler room', 10, 'reguler room.jpg', 350000),
(2, 'silver room', 10, 'silver room.jpg', 500000),
(3, 'gold room', 10, 'gold room.jpg', 700000),
(4, 'platinum room', 10, 'platinum room.jpg', 800000),
(5, 'deluxe room', 10, 'deluxe room.jpg', 950000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fasilitas_hotel`
--
ALTER TABLE `fasilitas_hotel`
  ADD PRIMARY KEY (`id_fashotel`);

--
-- Indexes for table `fasilitas_kamar`
--
ALTER TABLE `fasilitas_kamar`
  ADD PRIMARY KEY (`id_faskamar`),
  ADD KEY `id_kamar` (`id_kamar`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`),
  ADD KEY `id_kamar` (`id_kamar`);

--
-- Indexes for table `tipe_kamar`
--
ALTER TABLE `tipe_kamar`
  ADD PRIMARY KEY (`id_kamar`),
  ADD KEY `id_tipe` (`nama_kamar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fasilitas_hotel`
--
ALTER TABLE `fasilitas_hotel`
  MODIFY `id_fashotel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fasilitas_kamar`
--
ALTER TABLE `fasilitas_kamar`
  MODIFY `id_faskamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tipe_kamar`
--
ALTER TABLE `tipe_kamar`
  MODIFY `id_kamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `fasilitas_kamar`
--
ALTER TABLE `fasilitas_kamar`
  ADD CONSTRAINT `fasilitas_kamar_ibfk_1` FOREIGN KEY (`id_kamar`) REFERENCES `tipe_kamar` (`id_kamar`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `pemesanan_ibfk_1` FOREIGN KEY (`id_kamar`) REFERENCES `tipe_kamar` (`id_kamar`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
