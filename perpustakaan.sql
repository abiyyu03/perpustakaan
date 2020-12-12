-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2019 at 12:04 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `panggilan` varchar(32) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `panggilan`, `username`, `password`) VALUES
(1, 'Abiyyu Cakra', 'adminkece', '123'),
(3, 'Cakra Abiyyu', 'admin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `data_peminjam`
--

CREATE TABLE `data_peminjam` (
  `id` int(11) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `nis` char(9) NOT NULL,
  `kelas` char(3) NOT NULL,
  `jurusan` varchar(32) NOT NULL,
  `judul_buku` varchar(32) NOT NULL,
  `penerbit` varchar(16) NOT NULL,
  `halaman` varchar(16) NOT NULL,
  `tanggal_peminjaman` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_peminjam`
--

INSERT INTO `data_peminjam` (`id`, `nama`, `nis`, `kelas`, `jurusan`, `judul_buku`, `penerbit`, `halaman`, `tanggal_peminjaman`) VALUES
(3, 'Zaky Raditya Fauzy', '101805499', 'XI', 'RPL', 'Mengenal alutista tanpa kenalan', 'Tentara', '200', '2019-12-14'),
(4, 'Raihan Nurhadi', '123456789', 'XI', 'ELEKTRONIKA INDUSTRI', 'Mengenal alutista tanpa kenalan', 'Tentara', '200', '2019-12-14');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_anggota`
--

CREATE TABLE `tabel_anggota` (
  `id` int(11) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `nis` char(9) NOT NULL,
  `tempat_lahir` varchar(16) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `kelas` varchar(8) NOT NULL,
  `jurusan` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_anggota`
--

INSERT INTO `tabel_anggota` (`id`, `nama`, `nis`, `tempat_lahir`, `tanggal_lahir`, `kelas`, `jurusan`, `email`) VALUES
(1, 'Luthfi Fikriansyah', '123456789', 'Bogor', '2001-12-12', 'XII', 'Rekayasa Perangkat Lunak', 'luthfi@yahoo.com'),
(2, 'Abiyyu Cakra', '101805483', 'Bogor', '0000-00-00', 'XI', 'Rekayasa Perangkat Lunak', 'abiyyu652@gmail.com'),
(4, 'Zaky Raditya Fauzy', '101805123', 'Bogor', '2003-04-28', 'XI', 'Rekayasa Perangkat Lunak', ''),
(5, 'Aldi', '101805484', 'Jampang', '2003-07-29', 'XI', 'Instrumentasi Logam', 'aldirama@ggmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_buku`
--

CREATE TABLE `tabel_buku` (
  `id_buku` int(11) NOT NULL,
  `gambar` varchar(64) NOT NULL,
  `judul_buku` varchar(32) NOT NULL,
  `penulis` varchar(32) NOT NULL,
  `penerbit` varchar(32) NOT NULL,
  `halaman` varchar(4) NOT NULL,
  `jumlah` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_buku`
--

INSERT INTO `tabel_buku` (`id_buku`, `gambar`, `judul_buku`, `penulis`, `penerbit`, `halaman`, `jumlah`) VALUES
(9, 'IMG-20181021-WA0019.jpg', 'Koetjhing agent of change', 'Mr. X', 'cakra publishing', '190', '1'),
(12, 'IMG-20181030-WA0039.jpg', 'Mengenal alutista tanpa kenalan', 'Penulis', 'penulis media', '100', '12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_peminjam`
--
ALTER TABLE `data_peminjam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_anggota`
--
ALTER TABLE `tabel_anggota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_buku`
--
ALTER TABLE `tabel_buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `data_peminjam`
--
ALTER TABLE `data_peminjam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tabel_anggota`
--
ALTER TABLE `tabel_anggota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tabel_buku`
--
ALTER TABLE `tabel_buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
