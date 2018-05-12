-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 12 Mei 2018 pada 11.31
-- Versi Server: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rumahsakit`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `profildokter`
--

CREATE TABLE `profildokter` (
  `dokter_id` int(11) NOT NULL,
  `dokter_nama` varchar(30) DEFAULT NULL,
  `dokter_spesialis` varchar(20) DEFAULT NULL,
  `dokter_notelp` varchar(12) DEFAULT NULL,
  `dokter_waktupraktek` datetime DEFAULT NULL,
  `dokter_foto` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `profildokter`
--

INSERT INTO `profildokter` (`dokter_id`, `dokter_nama`, `dokter_spesialis`, `dokter_notelp`, `dokter_waktupraktek`, `dokter_foto`) VALUES
(14, 'hida', 'xyz', '081334091577', '2018-05-14 09:00:00', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profilpasien`
--

CREATE TABLE `profilpasien` (
  `pasien_id` int(11) NOT NULL,
  `pasien_nama` varchar(30) DEFAULT NULL,
  `pasien_alamat` varchar(100) DEFAULT NULL,
  `pasien_notelp` varchar(12) DEFAULT NULL,
  `pasien_keluhan` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `profilpasien`
--

INSERT INTO `profilpasien` (`pasien_id`, `pasien_nama`, `pasien_alamat`, `pasien_notelp`, `pasien_keluhan`) VALUES
(1, 'hida', 'xx', '081334091577', 'sakit xx'),
(2, 'hida', 'xyz', '081334091577', 'sakit xyzabc'),
(3, 'septian', 'zz', '081334091588', 'sakit xx'),
(4, 'jono', 'jl. xx', '081334091577', 'sakit xx'),
(5, 'hida', 'xx', '081334091577', 'sakit xx'),
(6, 'dhika', 'jl. xx', '081334091588', 'abcd\r\n'),
(7, 'dhika', 'jl. xx', '081334091588', 'abcd\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `profildokter`
--
ALTER TABLE `profildokter`
  ADD PRIMARY KEY (`dokter_id`);

--
-- Indexes for table `profilpasien`
--
ALTER TABLE `profilpasien`
  ADD PRIMARY KEY (`pasien_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `profildokter`
--
ALTER TABLE `profildokter`
  MODIFY `dokter_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `profilpasien`
--
ALTER TABLE `profilpasien`
  MODIFY `pasien_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
