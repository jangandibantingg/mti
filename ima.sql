-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2020 at 03:23 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ima`
--

-- --------------------------------------------------------

--
-- Table structure for table `ima_data`
--

CREATE TABLE `ima_data` (
  `id_data` int(11) NOT NULL,
  `filename` text NOT NULL,
  `transfer` varchar(12) NOT NULL,
  `station_pengiriman` varchar(50) NOT NULL,
  `station_penerima` varchar(50) NOT NULL,
  `log_penerimaan` time NOT NULL,
  `log_penerima` time NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(35) NOT NULL,
  `id_station` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ima_file`
--

CREATE TABLE `ima_file` (
  `id_file` int(11) NOT NULL,
  `filename` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ima_log`
--

CREATE TABLE `ima_log` (
  `id_log` int(11) NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ima_log`
--

INSERT INTO `ima_log` (`id_log`, `link`) VALUES
(1, 'D:maret');

-- --------------------------------------------------------

--
-- Table structure for table `ima_station`
--

CREATE TABLE `ima_station` (
  `id_station` int(11) NOT NULL,
  `nama_station` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `desa` varchar(90) NOT NULL,
  `kecamatan` text NOT NULL,
  `kabupaten` text NOT NULL,
  `kode_pos` text NOT NULL,
  `provinsi` text NOT NULL,
  `telpon` text NOT NULL,
  `logo` text NOT NULL,
  `logo-prov` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`desa`, `kecamatan`, `kabupaten`, `kode_pos`, `provinsi`, `telpon`, `logo`, `logo-prov`) VALUES
('Mekarwangi', 'Lembang', 'Bandung', '64421', 'Jawa Barat', '(0271) 53889', '58Logo Provinsi Jawa Barat png.PNG', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(12) NOT NULL,
  `gerai` varchar(12) NOT NULL,
  `id_plan` int(11) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` enum('admin','invest','akun','ID','kasir','operator') NOT NULL,
  `blokir` enum('N','Y') NOT NULL,
  `email` varchar(90) NOT NULL,
  `nama` varchar(90) NOT NULL,
  `no_hp` varchar(90) NOT NULL,
  `alamat` text NOT NULL,
  `rd` date NOT NULL,
  `sponsoring` varchar(50) NOT NULL,
  `id` varchar(12) NOT NULL,
  `lastlogin` datetime NOT NULL,
  `activation_code` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `gerai`, `id_plan`, `password`, `level`, `blokir`, `email`, `nama`, `no_hp`, `alamat`, `rd`, `sponsoring`, `id`, `lastlogin`, `activation_code`) VALUES
(42, 'GERAI0000', 1, '81dc9bdb52d04dc20036dbd8313ed055', 'invest', 'N', 'thecodercoffeebar@gmail.com', 'operator', '081327717847', 'Nganjuk', '2019-10-15', '', 'ID0000002', '2020-02-25 00:17:34', ''),
(52, 'GERAI0002', 1, '81dc9bdb52d04dc20036dbd8313ed055', 'admin', 'N', 'test1@gmail.com', ' M AANG SYAIFUN NAJA', '', '', '2019-11-24', '', '', '2019-11-26 02:39:07', '102817'),
(54, 'GERAI0000', 1, '81dc9bdb52d04dc20036dbd8313ed055', 'operator', 'N', 'andihakim@gmail.com', '    andi hakim ', '', '', '2020-02-19', 'thecodercoffeebar@gmail.com', 'ID0000002', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `web_master`
--

CREATE TABLE `web_master` (
  `id_plan` int(11) NOT NULL,
  `gerai` varchar(12) NOT NULL,
  `tagline` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `title` text NOT NULL,
  `id_toko` varchar(11) NOT NULL,
  `address` text NOT NULL,
  `phone` text NOT NULL,
  `website` text NOT NULL,
  `instagram` text NOT NULL,
  `targetsales` int(11) NOT NULL,
  `operationalcost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `web_master`
--

INSERT INTO `web_master` (`id_plan`, `gerai`, `tagline`, `email`, `username`, `title`, `id_toko`, `address`, `phone`, `website`, `instagram`, `targetsales`, `operationalcost`) VALUES
(1, 'GERAI0000', 'good place to coffee and socialize', 'thecodercoffeebar@gmail.com', '', 'PT MITRA TEKNOLOGI IMA', '3', 'nganjuk - jatim', '081327717847', 'http://www.codercoffee.id/', 'codercoffee', 1000000, 458974),
(0, 'GERAI0001', '', 'thecodercoffeebar@gmail.com', '', 'CODER Coffee;', '', 'jalan merdeka no.26 Nganjuk', '081327717847', 'Terima Kasih atas Kunjungan Anda', '@codercoffee', 0, 0),
(0, 'GERAI0002', 'good place to coffee and socialize', 'test1@gmail.com', '', 'Geprek Mbahmun', '', 'tanggerang selatan', '081327717847', '', '', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ima_data`
--
ALTER TABLE `ima_data`
  ADD PRIMARY KEY (`id_data`);

--
-- Indexes for table `ima_file`
--
ALTER TABLE `ima_file`
  ADD PRIMARY KEY (`id_file`);

--
-- Indexes for table `ima_log`
--
ALTER TABLE `ima_log`
  ADD PRIMARY KEY (`id_log`);

--
-- Indexes for table `ima_station`
--
ALTER TABLE `ima_station`
  ADD PRIMARY KEY (`id_station`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`desa`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `web_master`
--
ALTER TABLE `web_master`
  ADD PRIMARY KEY (`gerai`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ima_data`
--
ALTER TABLE `ima_data`
  MODIFY `id_data` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ima_file`
--
ALTER TABLE `ima_file`
  MODIFY `id_file` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ima_log`
--
ALTER TABLE `ima_log`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ima_station`
--
ALTER TABLE `ima_station`
  MODIFY `id_station` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
