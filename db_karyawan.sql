-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 09, 2018 at 04:40 PM
-- Server version: 5.7.21-0ubuntu0.16.04.1
-- PHP Version: 7.0.26-1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_karyawan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `foto_user` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `password`, `foto_user`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'avatar.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_karyawan`
--

CREATE TABLE `tbl_karyawan` (
  `kd_karyawan` int(11) NOT NULL,
  `nama_karyawan` varchar(30) NOT NULL,
  `divisi_karyawan` varchar(20) NOT NULL,
  `alamat_karyawan` varchar(200) NOT NULL,
  `jk_karyawan` enum('Laki-laki','Perempuan') NOT NULL,
  `agama` varchar(15) NOT NULL,
  `email_karyawan` varchar(40) NOT NULL,
  `telp_karyawan` varchar(14) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_karyawan`
--

INSERT INTO `tbl_karyawan` (`kd_karyawan`, `nama_karyawan`, `divisi_karyawan`, `alamat_karyawan`, `jk_karyawan`, `agama`, `email_karyawan`, `telp_karyawan`, `foto`) VALUES
(12155266, 'Muamar Hanif', 'Web Development', 'jl. citepus 3', 'Laki-laki', 'Islam', 'muamarhanif05@gmail.com', '081324040241', 'profile-pic.jpg'),
(12155267, 'ucok', 'Network Security', 'jl.terserah', 'Laki-laki', 'Kristen', 'ucok@ucok.com', '081283943198', 'avatar.png'),
(12155268, 'Udin Smith', 'Project Manager', 'jl.buntu', 'Laki-laki', 'Budha', 'udin@udin.com', '082987311212', 'avatar4.png'),
(12155269, 'Aminah', 'Programmer', 'Jl.Kaki', 'Perempuan', 'Islam', 'aaaa@aaaa', '91741432841', 'avatar3.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_karyawan`
--
ALTER TABLE `tbl_karyawan`
  ADD PRIMARY KEY (`kd_karyawan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_karyawan`
--
ALTER TABLE `tbl_karyawan`
  MODIFY `kd_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12155271;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
