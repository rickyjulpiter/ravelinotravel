-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 14, 2019 at 06:58 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ravelinoDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_TentangTravel`
--

CREATE TABLE `tbl_TentangTravel` (
  `id_travel` int(10) NOT NULL,
  `nama_travel` varchar(100) DEFAULT NULL,
  `deskripsi_travel` text DEFAULT NULL,
  `slogan_travel` text DEFAULT NULL,
  `alamat_travel` text DEFAULT NULL,
  `email_travel` varchar(100) DEFAULT NULL,
  `nohp_travel` varchar(13) DEFAULT NULL,
  `logo_travel` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_TentangTravel`
--

INSERT INTO `tbl_TentangTravel` (`id_travel`, `nama_travel`, `deskripsi_travel`, `slogan_travel`, `alamat_travel`, `email_travel`, `nohp_travel`, `logo_travel`) VALUES
(1, 'Ravelino Travel', 'Our home island Sumatra - the second largest island in Indonesia - is in the fourth place in procuring total visits of foreign tourists following Jakarta, Bali and Batam. This region has a remarkable panorama, thick with virgin forests, lush vegetation, strong rivers, beautiful waterfalls, peaceful sandy beaches and large ancient lakes. The diversity of arts, people and culture literally make Sumatra a Garden of Eden for social scientists and culture seekers.					                                					                                ', 'YOUR LINK TO THE BEST TRAVELING', 'Nama Alamat', 'tourntravel@testmail.com', '0811651399', 'Yatra-01.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_User`
--

CREATE TABLE `tbl_User` (
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_User`
--

INSERT INTO `tbl_User` (`email`, `password`) VALUES
('rickyjulpiter14@gmail.com', '271d472914faeba95a0c13426e05b027');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_WisataWilayah`
--

CREATE TABLE `tbl_WisataWilayah` (
  `id_wisata` int(50) NOT NULL,
  `nama_wisata` varchar(100) DEFAULT NULL,
  `deskripsi_wisata` text DEFAULT NULL,
  `gambar_wisata` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_WisataWilayah`
--

INSERT INTO `tbl_WisataWilayah` (`id_wisata`, `nama_wisata`, `deskripsi_wisata`, `gambar_wisata`) VALUES
(1, 'Northen Sumatra', 'Lorem ipsum dolor sit amet, consectet ur adipiscing elit, sedpr do eiusmod tempor incididunt ut', 'danauToba.jpg'),
(2, 'West Sumatra', '<span style=\"color: rgb(85, 85, 85); font-family: Poppins, sans-serif; font-size: 15px;\">Lorem ipsum dolor sit amet, consectet ur adipiscing elit, sedpr do eiusmod tempor incididunt ut.</span>', 'westSumatra.jpg'),
(3, 'South Sumatra', 'Lorem ipsum dolor sit amet, consectet ur adipiscing elit, sedpr do eiusmod tempor incididunt ut.					                                					                                ', 'southSumatra.jpg'),
(4, 'Java Island', 'Lorem ipsum dolor sit amet, consectet ur adipiscing elit, sedpr do eiusmod tempor incididunt ut.					                                					                                ', 'javaIsland.jpg'),
(6, 'East Indonesia', 'Lorem ipsum dolor sit amet, consectet ur adipiscing elit, sedpr do eiusmod tempor incididunt ut.					                                					                                ', 'eastIndonesia.jpg'),
(8, 'Bali Island', 'Lorem ipsum dolor sit amet, consectet ur adipiscing elit, sedpr do eiusmod tempor incididunt ut.					                                					                                					                                ', 'eastIndonesia.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_WisataWilayahArea`
--

CREATE TABLE `tbl_WisataWilayahArea` (
  `id_wisata_area` int(50) NOT NULL,
  `nama_wisata_area` varchar(100) DEFAULT NULL,
  `deskripsi_wisata_area` text DEFAULT NULL,
  `gambar_wisata_area` text DEFAULT NULL,
  `nama_wisata` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_WisataWilayahArea`
--

INSERT INTO `tbl_WisataWilayahArea` (`id_wisata_area`, `nama_wisata_area`, `deskripsi_wisata_area`, `gambar_wisata_area`, `nama_wisata`) VALUES
(4, 'Brastagi, Sumatera utara', 'Lorem ipmsum', 'think-twice-code-once-1920x1080.jpg', 'Northen Sumatra');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_TentangTravel`
--
ALTER TABLE `tbl_TentangTravel`
  ADD PRIMARY KEY (`id_travel`);

--
-- Indexes for table `tbl_User`
--
ALTER TABLE `tbl_User`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `tbl_WisataWilayah`
--
ALTER TABLE `tbl_WisataWilayah`
  ADD PRIMARY KEY (`id_wisata`);

--
-- Indexes for table `tbl_WisataWilayahArea`
--
ALTER TABLE `tbl_WisataWilayahArea`
  ADD PRIMARY KEY (`id_wisata_area`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_TentangTravel`
--
ALTER TABLE `tbl_TentangTravel`
  MODIFY `id_travel` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_WisataWilayah`
--
ALTER TABLE `tbl_WisataWilayah`
  MODIFY `id_wisata` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_WisataWilayahArea`
--
ALTER TABLE `tbl_WisataWilayahArea`
  MODIFY `id_wisata_area` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
