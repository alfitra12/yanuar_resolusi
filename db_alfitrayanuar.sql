-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2020 at 05:25 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_alfitrayanuar`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_daftaruser`
--

CREATE TABLE `tb_daftaruser` (
  `id` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `hp` int(12) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_daftaruser`
--

INSERT INTO `tb_daftaruser` (`id`, `nama`, `email`, `hp`, `password`) VALUES
(1, 'fitra', 'admin@gmail.com', 2147483647, '12345');

-- --------------------------------------------------------

--
-- Table structure for table `tb_galleri`
--

CREATE TABLE `tb_galleri` (
  `id` int(5) NOT NULL,
  `nama_foto` varchar(50) NOT NULL,
  `deskripsi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_galleri`
--

INSERT INTO `tb_galleri` (`id`, `nama_foto`, `deskripsi`) VALUES
(1, 'bg_33.jpg', 'mantap'),
(2, 'IMG_20190828_105015.jpg', 'kali'),
(3, 'IMG_20190828_105015.jpg', 'mungkin'),
(4, 'index.jpg', 'mantap');

-- --------------------------------------------------------

--
-- Table structure for table `tb_home`
--

CREATE TABLE `tb_home` (
  `id` int(5) NOT NULL,
  `pembuka` text NOT NULL,
  `penutup` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_home`
--

INSERT INTO `tb_home` (`id`, `pembuka`, `penutup`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kontak`
--

CREATE TABLE `tb_kontak` (
  `id` int(5) NOT NULL,
  `email` varchar(50) NOT NULL,
  `hp` int(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `isi_pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kontak`
--

INSERT INTO `tb_kontak` (`id`, `email`, `hp`, `nama`, `isi_pesan`) VALUES
(1, 'admin@gmail.com', 2147483647, 'fitra', 'mantap kali');

-- --------------------------------------------------------

--
-- Table structure for table `tb_profil`
--

CREATE TABLE `tb_profil` (
  `id` int(5) NOT NULL,
  `sejarah` text NOT NULL,
  `foto` varchar(50) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_profil`
--

INSERT INTO `tb_profil` (`id`, `sejarah`, `foto`, `visi`, `misi`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'index.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.');

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id` int(10) NOT NULL,
  `id_siswa` int(50) NOT NULL,
  `nama_foto` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `ttl` varchar(50) NOT NULL,
  `kelamin` varchar(10) NOT NULL,
  `umur` int(10) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `tgl_daftar` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`id`, `id_siswa`, `nama_foto`, `nama`, `ttl`, `kelamin`, `umur`, `alamat`, `agama`, `tgl_daftar`) VALUES
(10, 876543, 'IMG_20190512_091017.jpg', 'amir', 'cikampak 1b,28 januari 1998', 'Laki-laki', 50, 'cikampak 1b', 'Islam', 30),
(4, 9876644, 'bg_33.jpg', 'fitra', 'cikampak 1b,28 januari 1998', 'Laki-laki', 18, 'cikampak 1b11', 'Islam', 12),
(8, 12121123, 'IMG_20190828_105015.jpg', 'fitra yanuar', 'cikampak 1b,28 januari 1998', 'Laki-laki', 18, 'cikampak 1b', 'Islam', 30),
(9, 123454312, 'bg_33.jpg', 'yanuar', 'cikampak 1b,28 januari 1998', 'Laki-laki', 18, 'cikampak 1b11', 'Islam', 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_daftaruser`
--
ALTER TABLE `tb_daftaruser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_galleri`
--
ALTER TABLE `tb_galleri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_home`
--
ALTER TABLE `tb_home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kontak`
--
ALTER TABLE `tb_kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_profil`
--
ALTER TABLE `tb_profil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD KEY `index` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_daftaruser`
--
ALTER TABLE `tb_daftaruser`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_galleri`
--
ALTER TABLE `tb_galleri`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_home`
--
ALTER TABLE `tb_home`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_kontak`
--
ALTER TABLE `tb_kontak`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_profil`
--
ALTER TABLE `tb_profil`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
