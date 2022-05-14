-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Bulan Mei 2022 pada 11.05
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

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
-- Prosedur
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `simpan_fasilitas_hotel` (`id_fashotel` INT(11), `nama_fashotel` VARCHAR(50), `ket_fashotel` VARCHAR(255), `gambar` VARCHAR(255))   BEGIN
insert into fasilitas_hotel
values (id_fashotel, nama_fashotel, ket_fashotel, gambar);
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `simpan_fasilitas_kamar` (`id_faskamar` INT(11), `id_kamar` INT(11), `nama_faskamar` VARCHAR(255), `kategori` VARCHAR(255), `gambar` VARCHAR(255))   BEGIN
INSERT INTO fasilitas_kamar
    VALUES (id_faskamar, id_kamar, nama_faskamar, kategori, gambar);
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `simpan_login` (`id_login` INT(11), `username` VARCHAR(35), `password_user` VARCHAR(35), `level_user` ENUM('admin','resepsionis','tamu'), `tgl_lahir` DATE, `nowa` VARCHAR(50), `jenis_kelamin` ENUM('laki-laki','perempuan'), `nama` VARCHAR(50))   BEGIN
    insert into login
    values (id_login, username, password_user, level_user, tgl_lahir, nowa, jenis_kelamin, nama);
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `simpan_pemesanan` (`id_pemesanan` INT(11), `nama_pemesanan` VARCHAR(50), `email` VARCHAR(35), `no_hp` VARCHAR(35), `nama_tamu` VARCHAR(50), `id_kamar` INT(11), `tgl_cekin` DATE, `tgl_cekout` DATE, `jml_kamar` INT(11), `tipe_kamar` VARCHAR(50), `harga` INT(11), `status_kamar` ENUM('checkin','checkout'))   BEGIN
    insert into pemesanan
    values (id_pemesanan, nama_pemesanan, email, no_hp, nama_tamu, id_kamar, tgl_cekin, tgl_cekout, jml_kamar, tipe_kamar, harga, status_kamar);
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `simpan_tipe_kamar` (`id_kamar` INT(11), `nama_kamar` VARCHAR(50), `jmlh_kamar` INT(11), `gambar_tipekamar` VARCHAR(255), `harga` INT(11))   BEGIN
    insert into tipe_kamar
    values (id_kamar, nama_kamar, jmlh_kamar, gambar_tipekamar, harga);
    END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `fasilitas_hotel`
--

CREATE TABLE `fasilitas_hotel` (
  `id_fashotel` int(11) NOT NULL,
  `nama_fashotel` varchar(50) NOT NULL,
  `ket_fashotel` text NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `fasilitas_hotel`
--

INSERT INTO `fasilitas_hotel` (`id_fashotel`, `nama_fashotel`, `ket_fashotel`, `gambar`) VALUES
(1, 'tv', 'ukuran 23 inci', 'gambar.jpg'),
(2, 'kolam renang', '3 meter', 'gambar.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fasilitas_kamar`
--

CREATE TABLE `fasilitas_kamar` (
  `id_faskamar` int(11) NOT NULL,
  `id_kamar` int(11) NOT NULL,
  `nama_faskamar` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `fasilitas_kamar`
--

INSERT INTO `fasilitas_kamar` (`id_faskamar`, `id_kamar`, `nama_faskamar`, `kategori`, `gambar`) VALUES
(3, 1, 'tv', 'ukuran 23 inci', 'gambar.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
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
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id_login`, `username`, `password`, `level`, `tgl_lahir`, `nowa`, `jenis_kelamin`, `nama`) VALUES
(1, 'fraja', '123', 'tamu', '2022-04-01', '083112345678', 'laki-laki', 'Frajaramandaka'),
(4, 'resepsionis', '12345', 'resepsionis', '2022-04-01', '081236523874', 'perempuan', 'resepsionis'),
(5, 'admin', '12345678', 'admin', '2022-04-02', '0865419856', 'laki-laki', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
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
  `jmlh_kamar` int(11) NOT NULL,
  `tipe_kamar` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `status` enum('checkin','checkout') NOT NULL,
  `KodReff` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `nama_pemesan`, `email`, `no_hp`, `nama_tamu`, `id_kamar`, `tgl_cekin`, `tgl_cekout`, `jmlh_kamar`, `tipe_kamar`, `harga`, `status`, `KodReff`) VALUES
(8, 'dimas', 'dimas@gmail.com', '081234567890', 'dimas', 1, '2022-04-21', '2022-04-22', 1, '', 0, 'checkout', '220421Thu4740'),
(9, 'desu', 'desu@gmail.com', '081298563214', 'desu', 2, '2022-04-22', '2022-04-23', 1, '', 0, 'checkout', '220421Thu4847'),
(10, 'oka', 'oka@gmail.com', '081289654785', 'oka', 2, '2022-04-23', '2022-04-24', 1, '', 0, 'checkout', '220421Thu1524'),
(11, 'Sindi', 'Sindi@gmail.com', '081254126984', 'Sindi', 3, '2022-04-23', '2022-04-24', 1, '', 0, 'checkin', '220423Sat3235'),
(12, 'Rani', 'Rani@gmail.com', '081245879658', 'Rani', 4, '2022-04-25', '2022-04-26', 1, '', 0, 'checkout', '220423Sat1217'),
(13, 'Ginda', 'Ginda@gmail.com', '081265893254', 'Ginda', 4, '2022-04-26', '2022-04-27', 1, '', 0, 'checkin', '220423Sat1017'),
(14, 'Vita', 'Vita@gmail.com', '0845217896', 'Vita', 3, '2022-05-14', '2022-05-15', 1, '', 0, 'checkout', '220514Sat1449'),
(15, 'Vita', 'Vita@gmail.com', '0878546325', 'Vita', 3, '2022-05-14', '2022-05-15', 1, '', 0, 'checkout', '220514Sat2155'),
(16, 'Vita', 'Vita@gmail.com', '0812454521', 'Vita', 1, '2022-05-14', '2022-05-15', 1, '', 0, 'checkout', '220514Sat2335'),
(17, 'Vita', 'Vita@gmail.com', '24543252323', 'Vita', 2, '2022-05-14', '2022-05-15', 1, '', 0, 'checkout', '220514Sat2615');

--
-- Trigger `pemesanan`
--
DELIMITER $$
CREATE TRIGGER `Batal` AFTER UPDATE ON `pemesanan` FOR EACH ROW BEGIN
UPDATE tipe_kamar
SET jml_kamar = jml_kamar + OLD.jmlh_kamar
WHERE
id_kamar = OLD.id_kamar ;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `Stok Kamar` AFTER INSERT ON `pemesanan` FOR EACH ROW BEGIN
UPDATE tipe_kamar SET jml_kamar =
jml_kamar-new.jmlh_kamar
WHERE id_kamar = NEW.id_kamar;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tipe_kamar`
--

CREATE TABLE `tipe_kamar` (
  `id_kamar` int(11) NOT NULL,
  `nama_kamar` varchar(50) NOT NULL,
  `jml_kamar` int(11) NOT NULL,
  `gambar_tipekamar` text NOT NULL,
  `harga` varchar(11) NOT NULL,
  `detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tipe_kamar`
--

INSERT INTO `tipe_kamar` (`id_kamar`, `nama_kamar`, `jml_kamar`, `gambar_tipekamar`, `harga`, `detail`) VALUES
(1, 'Reguler Room', 10, 'reguler room.jpg', 'Rp.350.000', 'memiliki 1 buah kasur berukuran 1 orang dengan televisi berukuran 32 inci, serta memiliki sofa dan meja kecil untuk bersantai atau tempat bekerja, serta memiliki kamar mandi dengan shower.'),
(2, 'Silver Room', 10, 'silver room.jpg', 'Rp.500.000', 'memiliki 2 buah kasur berukuran 1 orang dengan televisi berukuran 32 inci, serta memiliki sofa dan meja kecil untuk bersantai atau tempat bekerja, serta memiliki kamar mandi dengan shower.'),
(3, 'Gold Room', 10, 'gold room.jpg', 'Rp.700.000', 'memiliki 1 buah kasur berukuran 2 orang dengan televisi berukuran 32 inci, serta memiliki 2 buah sofa dan meja untuk bersantai atau tempat bekerja, serta memiliki kamar mandi dengan bathup.'),
(4, 'Platinum Room', 10, 'platinum room.jpg', 'Rp.800.000', 'memiliki 1 buah kasur berukuran 2 orang dan 2 buah kasur berukuran 1 orang dengan televisi berukuran 32 inci, serta memiliki sofa dan meja untuk bersantai atau tempat bekerja, juga memiliki ruang makan untuk keluarga, dilengkapi kamar mandi dengan bathup.'),
(5, 'Deluxe Room', 10, 'deluxe room.jpg', 'Rp.950.000', 'memiliki 2 buah kasur berukuran 2 orang dengan televisi berukuran 32 inci, serta memiliki sofa dan meja untuk bersantai atau tempat bekerja, juga memiliki ruang makan untuk keluarga, dilengkapi kamar mandi dengan bathup.');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `fasilitas_hotel`
--
ALTER TABLE `fasilitas_hotel`
  ADD PRIMARY KEY (`id_fashotel`);

--
-- Indeks untuk tabel `fasilitas_kamar`
--
ALTER TABLE `fasilitas_kamar`
  ADD PRIMARY KEY (`id_faskamar`),
  ADD KEY `id_kamar` (`id_kamar`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indeks untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`),
  ADD KEY `id_kamar` (`id_kamar`);

--
-- Indeks untuk tabel `tipe_kamar`
--
ALTER TABLE `tipe_kamar`
  ADD PRIMARY KEY (`id_kamar`),
  ADD KEY `id_tipe` (`nama_kamar`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `fasilitas_hotel`
--
ALTER TABLE `fasilitas_hotel`
  MODIFY `id_fashotel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `fasilitas_kamar`
--
ALTER TABLE `fasilitas_kamar`
  MODIFY `id_faskamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `tipe_kamar`
--
ALTER TABLE `tipe_kamar`
  MODIFY `id_kamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `fasilitas_kamar`
--
ALTER TABLE `fasilitas_kamar`
  ADD CONSTRAINT `fasilitas_kamar_ibfk_1` FOREIGN KEY (`id_kamar`) REFERENCES `tipe_kamar` (`id_kamar`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `pemesanan_ibfk_1` FOREIGN KEY (`id_kamar`) REFERENCES `tipe_kamar` (`id_kamar`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
