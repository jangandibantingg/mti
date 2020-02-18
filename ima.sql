-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2020 at 12:57 AM
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
  `station_penerimaan` varchar(50) NOT NULL,
  `station_penerima` varchar(50) NOT NULL,
  `log_penerimaan` time NOT NULL,
  `log_penerima` time NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(35) NOT NULL,
  `id_station` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ima_data`
--

INSERT INTO `ima_data` (`id_data`, `filename`, `transfer`, `station_penerimaan`, `station_penerima`, `log_penerimaan`, `log_penerima`, `tanggal`, `status`, `id_station`) VALUES
(1, 'D:maret/transfers.20191022.log', '187002', 'FARMASI Lt.2  ', 'MAWAR 1 Lt.8  ', '00:05:53', '00:07:07', '2019-10-22', 'Complete', 117),
(2, 'D:maret/transfers.20191022.log', '187003', 'MAWAR 1 Lt.8  ', 'FARMASI Lt.2  ', '00:08:54', '00:10:06', '2019-10-22', 'Complete', 204),
(3, 'D:maret/transfers.20191022.log', '187004', 'FARMASI Lt.2  ', 'TERATAI Lt.6  ', '00:19:21', '00:20:26', '2019-10-22', 'Complete', 213),
(4, 'D:maret/transfers.20191022.log', '187005', 'TERATAI Lt.6  ', 'FARMASI Lt.2  ', '00:22:41', '00:23:42', '2019-10-22', 'Complete', 204),
(5, 'D:maret/transfers.20191022.log', '187006', 'FARMASI Lt.2  ', 'MAWAR 1 Lt.8  ', '00:22:42', '00:24:20', '2019-10-22', 'Complete', 117),
(6, 'D:maret/transfers.20191022.log', '187007', 'MAWAR 1 Lt.8  ', 'FARMASI Lt.2  ', '00:24:20', '00:25:31', '2019-10-22', 'Complete', 204),
(7, 'D:maret/transfers.20191022.log', '187008', 'MAWAR 1 Lt.8  ', 'FARMASI Lt.2  ', '00:25:12', '00:26:27', '2019-10-22', 'Complete', 204),
(8, 'D:maret/transfers.20191022.log', '187009', 'FARMASI Lt.2  ', 'MELATI Lt 4  ', '01:24:50', '01:25:52', '2019-10-22', 'Complete', 112),
(9, 'D:maret/transfers.20191022.log', '187010', 'MELATI Lt 4  ', 'FARMASI Lt.2  ', '01:26:29', '01:27:32', '2019-10-22', 'Complete', 204),
(10, 'D:maret/transfers.20191022.log', '187011', 'FARMASI Lt.2  ', 'ANGGREK 1 Lt.8  ', '02:14:17', '02:15:14', '2019-10-22', 'Complete', 2),
(11, 'D:maret/transfers.20191022.log', '187012', 'ANGGREK 1 Lt.8  ', 'FARMASI Lt.2  ', '02:17:46', '02:18:50', '2019-10-22', 'Complete', 204),
(12, 'D:maret/transfers.20191022.log', '187013', 'FARMASI Lt.2  ', 'MAWAR 1 Lt.8  ', '04:05:32', '04:06:43', '2019-10-22', 'Complete', 117),
(13, 'D:maret/transfers.20191022.log', '187014', 'MAWAR 1 Lt.8  ', 'FARMASI Lt.2  ', '04:13:48', '04:15:02', '2019-10-22', 'Complete', 204),
(14, 'D:maret/transfers.20191022.log', '187015', 'FARMASI Lt.2  ', 'MAWAR 1 Lt.8  ', '05:44:32', '05:45:37', '2019-10-22', 'Complete', 117),
(15, 'D:maret/transfers.20191022.log', '187016', 'FARMASI Lt.2  ', 'TULIP Lt.6  ', '06:15:05', '06:16:10', '2019-10-22', 'Complete', 115),
(16, 'D:maret/transfers.20191022.log', '187017', 'TULIP Lt.6  ', 'FARMASI Lt.2  ', '06:31:01', '06:32:09', '2019-10-22', 'Complete', 204),
(17, 'D:maret/transfers.20191022.log', '187018', 'FARMASI Lt.2  ', 'MAWAR 1 Lt.8  ', '07:22:14', '07:23:22', '2019-10-22', 'Complete', 117),
(18, 'D:maret/transfers.20191022.log', '187019', 'BEDAH SENTRAL  ', 'TULIP Lt.6  ', '07:50:02', '07:50:43', '2019-10-22', 'Complete', 115),
(19, 'D:maret/transfers.20191022.log', '187020', 'LAB Z1  ', 'BANK DARAH Lt2  ', '08:32:11', '08:33:07', '2019-10-22', 'Complete', 105),
(20, 'D:maret/transfers.20191022.log', '187021', 'TERATAI Lt.6  ', 'FARMASI Lt.2  ', '08:37:39', '08:38:46', '2019-10-22', 'Complete', 204),
(21, 'D:maret/transfers.20191022.log', '187022', 'FARMASI Lt.2  ', 'ANGGREK 2 Lt.7  ', '08:38:53', '08:39:55', '2019-10-22', 'Complete', 215),
(22, 'D:maret/transfers.20191022.log', '187023', 'FARMASI Lt.2  ', 'TERATAI Lt.6  ', '08:40:25', '08:41:24', '2019-10-22', 'Complete', 213),
(23, 'D:maret/transfers.20191022.log', '187024', 'ANGGREK 2 Lt.7  ', 'FARMASI Lt.2  ', '08:44:58', '08:46:16', '2019-10-22', 'Complete', 204),
(24, 'D:maret/transfers.20191022.log', '187025', 'FARMASI Lt.2  ', 'MAWAR 1 Lt.8  ', '08:51:18', '08:52:29', '2019-10-22', 'Complete', 117),
(25, 'D:maret/transfers.20191022.log', '187026', 'ANYELIR 1  ', 'APOTIK Lt.1  ', '08:53:35', '08:55:14', '2019-10-22', 'Complete', 110),
(26, 'D:maret/transfers.20191022.log', '187027', 'MAWAR 1 Lt.8  ', 'FARMASI Lt.2  ', '08:55:14', '08:56:29', '2019-10-22', 'Complete', 204),
(27, 'D:maret/transfers.20191022.log', '187028', 'FARMASI Lt.2  ', 'ICU Lt.3  ', '08:55:44', '08:56:41', '2019-10-22', 'Complete', 211),
(28, 'D:maret/transfers.20191022.log', '187029', 'FARMASI Lt.2  ', 'ANGGREK 2 Lt.7  ', '08:57:56', '08:59:00', '2019-10-22', 'Complete', 215),
(29, 'D:maret/transfers.20191022.log', '187031', 'BANK DARAH Lt2  ', 'LAB Z1  ', '08:59:59', '09:00:53', '2019-10-22', 'Complete', 108),
(30, 'D:maret/transfers.20191022.log', '187030', 'ICU Lt.3  ', 'FARMASI Lt.2  ', '08:59:58', '09:01:03', '2019-10-22', 'Complete', 204),
(31, 'D:maret/transfers.20191022.log', '187032', 'ANGGREK 2 Lt.7  ', 'FARMASI Lt.2  ', '09:02:53', '09:04:18', '2019-10-22', 'Complete', 204),
(32, 'D:maret/transfers.20191022.log', '187033', 'FARMASI Lt.2  ', 'ANGGREK 2 Lt.7  ', '09:05:17', '09:06:14', '2019-10-22', 'Complete', 215),
(33, 'D:maret/transfers.20191022.log', '187034', 'FARMASI Lt.2  ', 'ANGGREK 2 Lt.7  ', '09:11:03', '09:12:05', '2019-10-22', 'Complete', 215),
(34, 'D:maret/transfers.20191022.log', '187035', 'FARMASI Lt.2  ', 'ANGGREK 2 Lt.7  ', '09:12:05', '09:13:01', '2019-10-22', 'Aborted', 215),
(35, 'D:maret/transfers.20191022.log', '187036', 'MAWAR 2 Lt.7  ', 'MAWAR 1 Lt.8  ', '09:15:19', '09:16:04', '2019-10-22', 'Complete', 117),
(36, 'D:maret/transfers.20191022.log', '187037', 'ANYELIR 1  ', 'FARMASI Lt.2  ', '09:15:55', '09:16:59', '2019-10-22', 'Complete', 204),
(37, 'D:maret/transfers.20191022.log', '187038', 'FARMASI Lt.2  ', 'ANGGREK 2 Lt.7  ', '09:18:19', '09:19:19', '2019-10-22', 'Complete', 215),
(38, 'D:maret/transfers.20191022.log', '187039', 'FARMASI Lt.2  ', 'ANGGREK 2 Lt.7  ', '09:19:19', '09:20:15', '2019-10-22', 'Aborted', 215),
(39, 'D:maret/transfers.20191022.log', '187040', 'APOTIK Lt.1  ', 'ANYELIR 1  ', '09:21:11', '09:22:49', '2019-10-22', 'Complete', 209),
(40, 'D:maret/transfers.20191022.log', '187041', 'FARMASI Lt.2  ', 'MAWAR 1 Lt.8  ', '09:23:23', '09:24:31', '2019-10-22', 'Complete', 117),
(41, 'D:maret/transfers.20191022.log', '187042', 'ANYELIR 1  ', 'APOTIK Lt.1  ', '09:23:59', '09:25:32', '2019-10-22', 'Complete', 110),
(42, 'D:maret/transfers.20191022.log', '187044', 'TERATAI Lt.6  ', 'FARMASI Lt.2  ', '09:30:39', '09:31:45', '2019-10-22', 'Complete', 204),
(43, 'D:maret/transfers.20191022.log', '187045', 'ANGGREK 2 Lt.7  ', 'FARMASI Lt.2  ', '09:31:51', '09:33:14', '2019-10-22', 'Complete', 204),
(44, 'D:maret/transfers.20191022.log', '187046', 'ANGGREK 2 Lt.7  ', 'FARMASI Lt.2  ', '09:33:14', '09:34:28', '2019-10-22', 'Complete', 204),
(45, 'D:maret/transfers.20191022.log', '187047', 'CEMPAKA Lt.5  ', 'FARMASI Lt.2  ', '09:34:28', '09:35:38', '2019-10-22', 'Complete', 204),
(46, 'D:maret/transfers.20191022.log', '187048', 'FARMASI Lt.2  ', 'TULIP Lt.6  ', '09:35:38', '09:36:43', '2019-10-22', 'Complete', 115),
(47, 'D:maret/transfers.20191022.log', '187049', 'FARMASI Lt.2  ', 'CEMPAKA Lt.5  ', '09:48:06', '09:49:08', '2019-10-22', 'Complete', 114),
(48, 'D:maret/transfers.20191022.log', '187050', 'FARMASI Lt.2  ', 'ICU Lt.3  ', '09:53:05', '09:54:16', '2019-10-22', 'Complete', 211),
(49, 'D:maret/transfers.20191022.log', '187051', 'ICU Lt.3  ', 'FARMASI Lt.2  ', '09:54:16', '09:55:19', '2019-10-22', 'Complete', 204),
(50, 'D:maret/transfers.20191022.log', '187052', 'CEMPAKA Lt.5  ', 'FARMASI Lt.2  ', '09:55:30', '09:56:36', '2019-10-22', 'Complete', 204),
(51, 'D:maret/transfers.20191022.log', '187053', 'LAB Lt.1 Z2  ', 'P.CENDANA Lt.2  ', '09:59:56', '10:01:14', '2019-10-22', 'Complete', 106),
(52, 'D:maret/transfers.20191022.log', '187054', 'ANYELIR 1  ', 'TULIP Lt.6  ', '10:02:15', '10:03:44', '2019-10-22', 'Aborted', 115),
(53, 'D:maret/transfers.20191022.log', '187055', 'FARMASI Lt.2  ', 'TERATAI Lt.6  ', '10:05:24', '10:06:25', '2019-10-22', 'Complete', 213),
(54, 'D:maret/transfers.20191022.log', '187056', 'TULIP Lt.6  ', 'TERATAI Lt.6  ', '10:06:25', '10:07:52', '2019-10-22', 'Complete', 213),
(55, 'D:maret/transfers.20191022.log', '187057', 'FARMASI Lt.2  ', 'TERATAI Lt.6  ', '10:07:11', '10:08:07', '2019-10-22', 'Complete', 213),
(56, 'D:maret/transfers.20191022.log', '187058', 'BEDAH SENTRAL  ', 'TERATAI Lt.6  ', '10:08:08', '10:09:25', '2019-10-22', 'Complete', 213),
(57, 'D:maret/transfers.20191022.log', '187059', 'FARMASI Lt.2  ', 'MAWAR 2 Lt.7  ', '10:08:07', '10:09:31', '2019-10-22', 'Complete', 116),
(58, 'D:maret/transfers.20191022.log', '187060', 'FARMASI Lt.2  ', 'ICU Lt.3  ', '10:12:51', '10:13:48', '2019-10-22', 'Complete', 211),
(59, 'D:maret/transfers.20191022.log', '187062', 'MAWAR 1 Lt.8  ', 'ANGGREK 2 Lt.7  ', '10:14:27', '10:16:04', '2019-10-22', 'Cancelled', 215),
(60, 'D:maret/transfers.20191022.log', '187061', 'FARMASI Lt.2  ', 'ICU Lt.3  ', '10:13:48', '10:14:13', '2019-10-22', 'Aborted', 211),
(61, 'D:maret/transfers.20191022.log', '187063', 'MAWAR 1 Lt.8  ', 'FARMASI Lt.2  ', '10:16:19', '10:17:37', '2019-10-22', 'Complete', 204),
(62, 'D:maret/transfers.20191022.log', '187064', 'ANGGREK 1 Lt.8  ', 'ANGGREK 2 Lt.7  ', '10:16:51', '10:17:32', '2019-10-22', 'Aborted', 215),
(63, 'D:maret/transfers.20191022.log', '187065', 'MAWAR 1 Lt.8  ', 'FARMASI Lt.2  ', '10:20:06', '10:21:18', '2019-10-22', 'Complete', 204),
(64, 'D:maret/transfers.20191022.log', '187066', 'BEDAH SENTRAL  ', 'ANGGREK 2 Lt.7  ', '10:20:41', '10:22:09', '2019-10-22', 'Complete', 215),
(65, 'D:maret/transfers.20191022.log', '187067', 'MAWAR 2 Lt.7  ', 'ANGGREK 2 Lt.7  ', '10:21:42', '10:23:12', '2019-10-22', 'Complete', 215),
(66, 'D:maret/transfers.20191022.log', '187068', 'MAWAR 2 Lt.7  ', 'ANGGREK 2 Lt.7  ', '10:23:15', '10:24:42', '2019-10-22', 'Complete', 215),
(67, 'D:maret/transfers.20191022.log', '187069', 'LAB Z1  ', 'BANK DARAH Lt2  ', '10:25:04', '10:26:01', '2019-10-22', 'Complete', 105),
(68, 'D:maret/transfers.20191022.log', '187070', 'FARMASI Lt.2  ', 'MAWAR 1 Lt.8  ', '10:27:03', '10:28:13', '2019-10-22', 'Complete', 117),
(69, 'D:maret/transfers.20191022.log', '187071', 'FARMASI Lt.2  ', 'MAWAR 1 Lt.8  ', '10:27:39', '10:28:48', '2019-10-22', 'Complete', 117),
(70, 'D:maret/transfers.20191022.log', '187072', 'CEMPAKA Lt.5  ', 'FARMASI Lt.2  ', '10:28:48', '10:29:52', '2019-10-22', 'Complete', 204),
(71, 'D:maret/transfers.20191022.log', '187073', 'MELATI Lt 4  ', 'FARMASI Lt.2  ', '10:31:37', '10:32:47', '2019-10-22', 'Complete', 204),
(72, 'D:maret/transfers.20191022.log', '187074', 'CEMPAKA Lt.5  ', 'FARMASI Lt.2  ', '10:34:03', '10:35:11', '2019-10-22', 'Complete', 204),
(73, 'D:maret/transfers.20191022.log', '187075', 'ANGGREK 2 Lt.7  ', 'FARMASI Lt.2  ', '10:35:33', '10:36:51', '2019-10-22', 'Complete', 204),
(74, 'D:maret/transfers.20191022.log', '187077', 'BANK DARAH Lt2  ', 'LAB Z1  ', '10:36:36', '10:37:27', '2019-10-22', 'Complete', 108),
(75, 'D:maret/transfers.20191022.log', '187076', 'ANGGREK 2 Lt.7  ', 'FARMASI Lt.2  ', '10:36:51', '10:38:07', '2019-10-22', 'Complete', 204),
(76, 'D:maret/transfers.20191022.log', '187078', 'ANGGREK 2 Lt.7  ', 'FARMASI Lt.2  ', '10:38:07', '10:39:20', '2019-10-22', 'Complete', 204),
(77, 'D:maret/transfers.20191022.log', '187079', 'FARMASI Lt.2  ', 'ANGGREK 2 Lt.7  ', '10:40:57', '10:41:54', '2019-10-22', 'Complete', 215),
(78, 'D:maret/transfers.20191022.log', '187080', 'FARMASI Lt.2  ', 'ANGGREK 2 Lt.7  ', '10:41:54', '10:42:55', '2019-10-22', 'Complete', 215),
(79, 'D:maret/transfers.20191022.log', '187081', 'BANK DARAH Lt2  ', 'LAB Z1  ', '10:42:41', '10:43:32', '2019-10-22', 'Complete', 108),
(80, 'D:maret/transfers.20191022.log', '187082', 'FARMASI Lt.2  ', 'R.ANAK Lt.4  ', '10:44:29', '10:45:16', '2019-10-22', 'Complete', 210),
(81, 'D:maret/transfers.20191022.log', '187083', 'MAWAR 1 Lt.8  ', 'FARMASI Lt.2  ', '10:48:54', '10:50:09', '2019-10-22', 'Complete', 204),
(82, 'D:maret/transfers.20191022.log', '187084', 'R.ANAK Lt.4  ', 'FARMASI Lt.2  ', '10:51:34', '10:52:23', '2019-10-22', 'Complete', 204),
(83, 'D:maret/transfers.20191022.log', '187085', 'FARMASI Lt.2  ', 'MAWAR 1 Lt.8  ', '10:53:02', '10:54:10', '2019-10-22', 'Complete', 117),
(84, 'D:maret/transfers.20191022.log', '187086', 'LAB Lt.1 Z2  ', 'P.CENDANA Lt.2  ', '10:57:27', '10:58:45', '2019-10-22', 'Complete', 106),
(85, 'D:maret/transfers.20191022.log', '187087', 'P.CENDANA Lt.2  ', 'LAB Z1  ', '10:59:35', '11:00:28', '2019-10-22', 'Complete', 108),
(86, 'D:maret/transfers.20191022.log', '187088', 'BEDAH SENTRAL  ', 'MAWAR 2 Lt.7  ', '11:05:22', '11:06:02', '2019-10-22', 'Complete', 116),
(87, 'D:maret/transfers.20191022.log', '187089', 'MELATI Lt 4  ', 'FARMASI Lt.2  ', '11:18:05', '11:19:18', '2019-10-22', 'Complete', 204),
(88, 'D:maret/transfers.20191022.log', '187090', 'ANGGREK 2 Lt.7  ', 'FARMASI Lt.2  ', '11:19:17', '11:20:34', '2019-10-22', 'Complete', 204),
(89, 'D:maret/transfers.20191022.log', '187091', 'MAWAR 1 Lt.8  ', 'MAWAR 2 Lt.7  ', '11:21:56', '11:22:43', '2019-10-22', 'Complete', 116),
(90, 'D:maret/transfers.20191022.log', '187092', 'FARMASI Lt.2  ', 'ANGGREK 2 Lt.7  ', '11:27:18', '11:28:16', '2019-10-22', 'Complete', 215),
(91, 'D:maret/transfers.20191022.log', '187093', 'FARMASI Lt.2  ', 'ANGGREK 1 Lt.8  ', '11:28:20', '11:29:12', '2019-10-22', 'Complete', 2),
(92, 'D:maret/transfers.20191022.log', '187094', 'ANGGREK 2 Lt.7  ', 'FARMASI Lt.2  ', '11:29:12', '11:30:30', '2019-10-22', 'Complete', 204),
(93, 'D:maret/transfers.20191022.log', '187095', 'FARMASI Lt.2  ', 'ANGGREK 2 Lt.7  ', '11:30:47', '11:31:48', '2019-10-22', 'Complete', 215),
(94, 'D:maret/transfers.20191022.log', '187096', 'ANGGREK 1 Lt.8  ', 'FARMASI Lt.2  ', '11:32:18', '11:33:18', '2019-10-22', 'Complete', 204),
(95, 'D:maret/transfers.20191022.log', '187097', 'FARMASI Lt.2  ', 'CEMPAKA Lt.5  ', '11:34:18', '11:35:22', '2019-10-22', 'Complete', 114),
(96, 'D:maret/transfers.20191022.log', '187098', 'FARMASI Lt.2  ', 'CEMPAKA Lt.5  ', '11:34:49', '11:35:57', '2019-10-22', 'Complete', 114),
(97, 'D:maret/transfers.20191022.log', '187099', 'FARMASI Lt.2  ', 'MAWAR 1 Lt.8  ', '11:37:56', '11:39:03', '2019-10-22', 'Complete', 117),
(98, 'D:maret/transfers.20191022.log', '187100', 'ANGGREK 2 Lt.7  ', 'FARMASI Lt.2  ', '11:41:32', '11:42:45', '2019-10-22', 'Complete', 204),
(99, 'D:maret/transfers.20191022.log', '187101', 'FARMASI Lt.2  ', 'ANGGREK 1 Lt.8  ', '11:53:02', '11:53:51', '2019-10-22', 'Complete', 2),
(100, 'D:maret/transfers.20191022.log', '187102', 'MAWAR 1 Lt.8  ', 'FARMASI Lt.2  ', '11:54:41', '11:55:53', '2019-10-22', 'Complete', 204),
(101, 'D:maret/transfers.20191022.log', '187103', 'ANGGREK 1 Lt.8  ', 'FARMASI Lt.2  ', '11:58:54', '11:59:54', '2019-10-22', 'Complete', 204),
(102, 'D:maret/transfers.20191022.log', '187104', 'TERATAI Lt.6  ', 'FARMASI Lt.2  ', '12:08:06', '12:09:19', '2019-10-22', 'Complete', 204),
(103, 'D:maret/transfers.20191022.log', '187105', 'FARMASI Lt.2  ', 'MAWAR 1 Lt.8  ', '12:12:08', '12:13:16', '2019-10-22', 'Complete', 117),
(104, 'D:maret/transfers.20191022.log', '187106', 'MAWAR 1 Lt.8  ', 'MAWAR 2 Lt.7  ', '12:35:47', '12:36:35', '2019-10-22', 'Complete', 116),
(105, 'D:maret/transfers.20191022.log', '187107', 'FARMASI Lt.2  ', 'ICU Lt.3  ', '12:43:35', '12:44:30', '2019-10-22', 'Complete', 211),
(106, 'D:maret/transfers.20191022.log', '187108', 'FARMASI Lt.2  ', 'ICU Lt.3  ', '12:44:30', '12:44:55', '2019-10-22', 'Aborted', 211),
(107, 'D:maret/transfers.20191022.log', '187109', 'APOTIK Lt.1  ', 'FARMASI Lt.2  ', '12:47:01', '12:48:23', '2019-10-22', 'Complete', 204),
(108, 'D:maret/transfers.20191022.log', '187110', 'FARMASI Lt.2  ', 'APOTIK Lt.1  ', '12:49:31', '12:50:37', '2019-10-22', 'Complete', 110),
(109, 'D:maret/transfers.20191022.log', '187111', 'MAWAR 2 Lt.7  ', 'CEMPAKA Lt.5  ', '12:57:34', '12:58:18', '2019-10-22', 'Complete', 114),
(110, 'D:maret/transfers.20191022.log', '187112', 'MAWAR 2 Lt.7  ', 'CEMPAKA Lt.5  ', '12:58:18', '12:58:56', '2019-10-22', 'Complete', 114),
(111, 'D:maret/transfers.20191022.log', '187113', 'MAWAR 2 Lt.7  ', 'CEMPAKA Lt.5  ', '12:58:56', '12:59:34', '2019-10-22', 'Complete', 114),
(112, 'D:maret/transfers.20191022.log', '187114', 'MAWAR 2 Lt.7  ', 'CEMPAKA Lt.5  ', '12:59:34', '13:00:12', '2019-10-22', 'Complete', 114),
(113, 'D:maret/transfers.20191022.log', '187115', 'MAWAR 2 Lt.7  ', 'CEMPAKA Lt.5  ', '13:00:12', '13:00:49', '2019-10-22', 'Complete', 114),
(114, 'D:maret/transfers.20191022.log', '187116', 'LAB Z1  ', 'BANK DARAH Lt2  ', '13:02:09', '13:03:03', '2019-10-22', 'Complete', 105),
(115, 'D:maret/transfers.20191022.log', '187117', 'BEDAH SENTRAL  ', 'MAWAR 2 Lt.7  ', '13:04:15', '13:04:53', '2019-10-22', 'Complete', 116),
(116, 'D:maret/transfers.20191022.log', '187118', 'FARMASI Lt.2  ', 'ANGGREK 2 Lt.7  ', '13:10:37', '13:11:44', '2019-10-22', 'Complete', 215),
(117, 'D:maret/transfers.20191022.log', '187119', 'BEDAH SENTRAL  ', 'MAWAR 1 Lt.8  ', '13:17:29', '13:18:09', '2019-10-22', 'Complete', 117),
(118, 'D:maret/transfers.20191022.log', '187120', 'ANGGREK 2 Lt.7  ', 'FARMASI Lt.2  ', '13:24:05', '13:25:18', '2019-10-22', 'Complete', 204),
(119, 'D:maret/transfers.20191022.log', '187121', 'MAWAR 1 Lt.8  ', 'MAWAR 2 Lt.7  ', '13:29:30', '13:30:16', '2019-10-22', 'Complete', 116),
(120, 'D:maret/transfers.20191022.log', '187122', 'P.CENDANA Lt.2  ', 'LAB Z1  ', '13:36:49', '13:37:39', '2019-10-22', 'Complete', 108),
(121, 'D:maret/transfers.20191022.log', '187123', 'BANK DARAH Lt2  ', 'LAB Z1  ', '13:37:39', '13:38:29', '2019-10-22', 'Complete', 108),
(122, 'D:maret/transfers.20191022.log', '187124', 'ICU Lt.3  ', 'FARMASI Lt.2  ', '13:42:39', '13:43:51', '2019-10-22', 'Complete', 204),
(123, 'D:maret/transfers.20191022.log', '187125', 'ICU Lt.3  ', 'FARMASI Lt.2  ', '13:52:15', '13:56:03', '2019-10-22', 'Complete', 204),
(124, 'D:maret/transfers.20191022.log', '187126', 'APOTIK Lt.1  ', 'P.CENDANA Lt.2  ', '13:56:18', '13:57:15', '2019-10-22', 'Complete', 106),
(125, 'D:maret/transfers.20191022.log', '187127', 'BEDAH SENTRAL  ', 'ANGGREK 1 Lt.8  ', '14:01:10', '14:02:25', '2019-10-22', 'Complete', 2),
(126, 'D:maret/transfers.20191022.log', '187128', 'P.CENDANA Lt.2  ', 'APOTIK Lt.1  ', '14:10:49', '14:11:43', '2019-10-22', 'Complete', 110),
(127, 'D:maret/transfers.20191022.log', '187129', 'LAB Z1  ', 'BANK DARAH Lt2  ', '14:18:25', '14:19:20', '2019-10-22', 'Complete', 105),
(128, 'D:maret/transfers.20191022.log', '187130', 'LAB Z1  ', 'BANK DARAH Lt2  ', '14:25:02', '14:25:53', '2019-10-22', 'Complete', 105),
(129, 'D:maret/transfers.20191022.log', '187131', 'FARMASI Lt.2  ', 'ANGGREK 1 Lt.8  ', '14:30:34', '14:31:24', '2019-10-22', 'Complete', 2),
(130, 'D:maret/transfers.20191022.log', '187132', 'ICU Lt.3  ', 'FARMASI Lt.2  ', '14:40:24', '14:41:28', '2019-10-22', 'Complete', 204),
(131, 'D:maret/transfers.20191022.log', '187133', 'LAB Z1  ', 'BANK DARAH Lt2  ', '14:43:21', '14:44:12', '2019-10-22', 'Complete', 105),
(132, 'D:maret/transfers.20191022.log', '187134', 'R.ANAK Lt.4  ', 'MAWAR 2 Lt.7  ', '14:50:49', '14:52:01', '2019-10-22', 'Complete', 116),
(133, 'D:maret/transfers.20191022.log', '187135', 'R.ANAK Lt.4  ', 'MAWAR 2 Lt.7  ', '15:06:33', '15:07:41', '2019-10-22', 'Complete', 116),
(134, 'D:maret/transfers.20191022.log', '187136', 'FARMASI Lt.2  ', 'MELATI Lt 4  ', '15:09:02', '15:10:11', '2019-10-22', 'Aborted', 112),
(135, 'D:maret/transfers.20191022.log', '187141', 'APOTIK Lt.1  ', 'ANYELIR 1  ', '15:17:09', '15:18:53', '2019-10-22', 'Complete', 209),
(136, 'D:maret/transfers.20191022.log', '187142', 'APOTIK Lt.1  ', 'ANYELIR 1  ', '15:18:08', '15:19:42', '2019-10-22', 'Complete', 209),
(137, 'D:maret/transfers.20191022.log', '187143', 'BEDAH SENTRAL  ', 'ANGGREK 1 Lt.8  ', '15:22:03', '15:23:19', '2019-10-22', 'Complete', 2),
(138, 'D:maret/transfers.20191022.log', '187144', 'ANYELIR 1  ', 'APOTIK Lt.1  ', '15:44:00', '15:45:34', '2019-10-22', 'Complete', 110),
(139, 'D:maret/transfers.20191022.log', '187145', 'R.ANAK Lt.4  ', 'CEMPAKA Lt.5  ', '15:54:00', '15:55:12', '2019-10-22', 'Complete', 114),
(140, 'D:maret/transfers.20191022.log', '187146', 'FARMASI Lt.2  ', 'MAWAR 1 Lt.8  ', '16:00:50', '16:02:03', '2019-10-22', 'Complete', 117),
(141, 'D:maret/transfers.20191022.log', '187147', 'LAB Z1  ', 'BANK DARAH Lt2  ', '16:10:56', '16:11:53', '2019-10-22', 'Complete', 105),
(142, 'D:maret/transfers.20191022.log', '187148', 'FARMASI Lt.2  ', 'MELATI Lt 4  ', '16:11:54', '16:12:58', '2019-10-22', 'Complete', 112),
(143, 'D:maret/transfers.20191022.log', '187150', 'MAWAR 1 Lt.8  ', 'CEMPAKA Lt.5  ', '16:42:25', '16:43:07', '2019-10-22', 'Complete', 114),
(144, 'D:maret/transfers.20191022.log', '187151', 'CEMPAKA Lt.5  ', 'MAWAR 1 Lt.8  ', '16:43:28', '16:44:07', '2019-10-22', 'Complete', 117),
(145, 'D:maret/transfers.20191022.log', '187152', 'FARMASI Lt.2  ', 'R.ANAK Lt.4  ', '16:47:43', '16:48:29', '2019-10-22', 'Complete', 210),
(146, 'D:maret/transfers.20191022.log', '187153', 'MAWAR 1 Lt.8  ', 'FARMASI Lt.2  ', '17:07:58', '17:09:11', '2019-10-22', 'Complete', 204),
(147, 'D:maret/transfers.20191022.log', '187154', 'ANGGREK 2 Lt.7  ', 'FARMASI Lt.2  ', '17:08:36', '17:10:07', '2019-10-22', 'Complete', 204),
(148, 'D:maret/transfers.20191022.log', '187155', 'FARMASI Lt.2  ', 'ANGGREK 2 Lt.7  ', '17:29:07', '17:30:05', '2019-10-22', 'Complete', 215),
(149, 'D:maret/transfers.20191022.log', '187157', 'CEMPAKA Lt.5  ', 'BEDAH SENTRAL  ', '17:38:10', '17:38:45', '2019-10-22', 'Complete', 111),
(150, 'D:maret/transfers.20191022.log', '187156', 'ANGGREK 2 Lt.7  ', 'BEDAH SENTRAL  ', '17:37:48', '17:39:19', '2019-10-22', 'Complete', 111),
(151, 'D:maret/transfers.20191022.log', '187158', 'MAWAR 1 Lt.8  ', 'BEDAH SENTRAL  ', '17:38:45', '17:39:27', '2019-10-22', 'Complete', 111),
(152, 'D:maret/transfers.20191022.log', '187159', 'MAWAR 2 Lt.7  ', 'BEDAH SENTRAL  ', '17:39:27', '17:40:07', '2019-10-22', 'Complete', 111),
(153, 'D:maret/transfers.20191022.log', '187160', 'MELATI Lt 4  ', 'BEDAH SENTRAL  ', '17:40:07', '17:40:44', '2019-10-22', 'Complete', 111),
(154, 'D:maret/transfers.20191022.log', '187161', 'R.ANAK Lt.4  ', 'BEDAH SENTRAL  ', '17:40:44', '17:41:47', '2019-10-22', 'Complete', 111),
(155, 'D:maret/transfers.20191022.log', '187163', 'TULIP Lt.6  ', 'BEDAH SENTRAL  ', '17:41:34', '17:42:19', '2019-10-22', 'Complete', 111),
(156, 'D:maret/transfers.20191022.log', '187162', 'TERATAI Lt.6  ', 'BEDAH SENTRAL  ', '17:41:10', '17:42:42', '2019-10-22', 'Complete', 111),
(157, 'D:maret/transfers.20191022.log', '187164', 'FARMASI Lt.2  ', 'APOTIK Lt.1  ', '17:42:19', '17:43:46', '2019-10-22', 'Complete', 110),
(158, 'D:maret/transfers.20191022.log', '187165', 'ANGGREK 1 Lt.8  ', 'FARMASI Lt.2  ', '17:45:28', '17:46:27', '2019-10-22', 'Complete', 204),
(159, 'D:maret/transfers.20191022.log', '187166', 'FARMASI Lt.2  ', 'ANGGREK 2 Lt.7  ', '17:46:27', '17:47:25', '2019-10-22', 'Complete', 215),
(160, 'D:maret/transfers.20191022.log', '187167', 'ANGGREK 2 Lt.7  ', 'FARMASI Lt.2  ', '17:49:46', '17:50:56', '2019-10-22', 'Complete', 204),
(161, 'D:maret/transfers.20191022.log', '187168', 'FARMASI Lt.2  ', 'TERATAI Lt.6  ', '17:53:02', '17:53:57', '2019-10-22', 'Complete', 213),
(162, 'D:maret/transfers.20191022.log', '187169', 'R.ANAK Lt.4  ', 'FARMASI Lt.2  ', '17:54:12', '17:54:59', '2019-10-22', 'Complete', 204),
(163, 'D:maret/transfers.20191022.log', '187170', 'FARMASI Lt.2  ', 'MAWAR 1 Lt.8  ', '18:19:58', '18:21:11', '2019-10-22', 'Complete', 117),
(164, 'D:maret/transfers.20191022.log', '187171', 'FARMASI Lt.2  ', 'TERATAI Lt.6  ', '18:28:00', '18:28:57', '2019-10-22', 'Complete', 213),
(165, 'D:maret/transfers.20191022.log', '187172', 'TERATAI Lt.6  ', 'FARMASI Lt.2  ', '18:28:57', '18:29:57', '2019-10-22', 'Complete', 204),
(166, 'D:maret/transfers.20191022.log', '187174', 'BANK DARAH Lt2  ', 'LAB Z1  ', '18:36:48', '18:37:45', '2019-10-22', 'Complete', 108),
(167, 'D:maret/transfers.20191022.log', '187173', 'MAWAR 1 Lt.8  ', 'FARMASI Lt.2  ', '18:36:46', '18:38:30', '2019-10-22', 'Complete', 204),
(168, 'D:maret/transfers.20191022.log', '187175', 'BANK DARAH Lt2  ', 'LAB Z1  ', '18:38:30', '18:39:22', '2019-10-22', 'Complete', 108),
(169, 'D:maret/transfers.20191022.log', '187176', 'FARMASI Lt.2  ', 'TERATAI Lt.6  ', '18:42:03', '18:43:02', '2019-10-22', 'Complete', 213),
(170, 'D:maret/transfers.20191022.log', '187177', 'FARMASI Lt.2  ', 'ANGGREK 2 Lt.7  ', '18:43:02', '18:44:08', '2019-10-22', 'Complete', 215),
(171, 'D:maret/transfers.20191022.log', '187178', 'TERATAI Lt.6  ', 'FARMASI Lt.2  ', '18:44:08', '18:45:28', '2019-10-22', 'Complete', 204),
(172, 'D:maret/transfers.20191022.log', '187179', 'APOTIK Lt.1  ', 'FARMASI Lt.2  ', '19:02:17', '19:03:40', '2019-10-22', 'Complete', 204),
(173, 'D:maret/transfers.20191022.log', '187180', 'FARMASI Lt.2  ', 'APOTIK Lt.1  ', '19:04:05', '19:05:11', '2019-10-22', 'Complete', 110),
(174, 'D:maret/transfers.20191022.log', '187181', 'FARMASI Lt.2  ', 'MAWAR 1 Lt.8  ', '19:49:28', '19:50:37', '2019-10-22', 'Complete', 117),
(175, 'D:maret/transfers.20191022.log', '187182', 'MAWAR 1 Lt.8  ', 'FARMASI Lt.2  ', '19:50:37', '19:51:47', '2019-10-22', 'Complete', 204),
(176, 'D:maret/transfers.20191022.log', '187183', 'FARMASI Lt.2  ', 'TERATAI Lt.6  ', '21:22:37', '21:23:37', '2019-10-22', 'Complete', 213),
(177, 'D:maret/transfers.20191022.log', '187184', 'APOTIK Lt.1  ', 'FARMASI Lt.2  ', '21:48:13', '21:49:30', '2019-10-22', 'Complete', 204),
(178, 'D:maret/transfers.20191022.log', '187185', 'FARMASI Lt.2  ', 'ANGGREK 1 Lt.8  ', '21:49:21', '21:50:17', '2019-10-22', 'Complete', 2),
(179, 'D:maret/transfers.20191022.log', '187186', 'ANGGREK 1 Lt.8  ', 'FARMASI Lt.2  ', '21:56:57', '21:57:59', '2019-10-22', 'Complete', 204),
(180, 'D:maret/transfers.20191022.log', '187187', 'FARMASI Lt.2  ', 'TERATAI Lt.6  ', '22:03:59', '22:04:53', '2019-10-22', 'Complete', 213),
(181, 'D:maret/transfers.20191022.log', '187188', 'TERATAI Lt.6  ', 'FARMASI Lt.2  ', '22:04:53', '22:05:55', '2019-10-22', 'Complete', 204),
(182, 'D:maret/transfers.20191022.log', '187189', 'ICU Lt.3  ', 'ANGGREK 2 Lt.7  ', '22:25:44', '22:27:01', '2019-10-22', 'Complete', 215),
(183, 'D:maret/transfers.20191022.log', '187190', 'ANGGREK 2 Lt.7  ', 'ICU Lt.3  ', '22:28:07', '22:29:18', '2019-10-22', 'Complete', 211),
(184, 'D:maret/transfers.20191022.log', '187191', 'MELATI Lt 4  ', 'FARMASI Lt.2  ', '22:42:18', '22:43:27', '2019-10-22', 'Complete', 204),
(185, 'D:maret/transfers.20191022.log', '187192', 'FARMASI Lt.2  ', 'MELATI Lt 4  ', '22:42:25', '22:43:28', '2019-10-22', 'Complete', 112),
(186, 'D:maret/transfers.20191022.log', '187193', 'CEMPAKA Lt.5  ', 'FARMASI Lt.2  ', '23:41:52', '23:42:59', '2019-10-22', 'Complete', 204),
(187, 'D:maret/transfers.20191022.log', '187194', 'FARMASI Lt.2  ', 'CEMPAKA Lt.5  ', '23:42:59', '23:43:56', '2019-10-22', 'Complete', 114),
(188, 'D:maret/transfers.20191023.log', '187195', 'FARMASI Lt.2  ', 'TERATAI Lt.6  ', '00:07:46', '00:08:44', '2019-10-23', 'Complete', 213),
(189, 'D:maret/transfers.20191023.log', '187196', 'FARMASI Lt.2  ', 'TERATAI Lt.6  ', '00:12:22', '00:13:19', '2019-10-23', 'Complete', 213),
(190, 'D:maret/transfers.20191023.log', '187197', 'FARMASI Lt.2  ', 'ANGGREK 2 Lt.7  ', '00:14:35', '00:15:37', '2019-10-23', 'Complete', 215),
(191, 'D:maret/transfers.20191023.log', '187198', 'TERATAI Lt.6  ', 'FARMASI Lt.2  ', '00:16:11', '00:17:13', '2019-10-23', 'Complete', 204),
(192, 'D:maret/transfers.20191023.log', '187199', 'TERATAI Lt.6  ', 'FARMASI Lt.2  ', '00:17:13', '00:18:18', '2019-10-23', 'Complete', 204),
(193, 'D:maret/transfers.20191023.log', '187200', 'ANGGREK 2 Lt.7  ', 'FARMASI Lt.2  ', '00:18:38', '00:19:53', '2019-10-23', 'Complete', 204),
(194, 'D:maret/transfers.20191023.log', '187201', 'ANGGREK 1 Lt.8  ', 'FARMASI Lt.2  ', '00:38:12', '00:39:15', '2019-10-23', 'Complete', 204),
(195, 'D:maret/transfers.20191023.log', '187202', 'FARMASI Lt.2  ', 'ANGGREK 2 Lt.7  ', '04:25:04', '04:26:03', '2019-10-23', 'Complete', 215),
(196, 'D:maret/transfers.20191023.log', '187203', 'ANGGREK 2 Lt.7  ', 'FARMASI Lt.2  ', '04:29:00', '04:30:15', '2019-10-23', 'Complete', 204),
(197, 'D:maret/transfers.20191023.log', '187204', 'FARMASI Lt.2  ', 'ANGGREK 2 Lt.7  ', '04:46:26', '04:47:23', '2019-10-23', 'Complete', 215),
(198, 'D:maret/transfers.20191023.log', '187205', 'ANGGREK 2 Lt.7  ', 'FARMASI Lt.2  ', '04:52:30', '04:53:45', '2019-10-23', 'Complete', 204),
(199, 'D:maret/transfers.20191023.log', '187206', 'FARMASI Lt.2  ', 'ANGGREK 1 Lt.8  ', '05:16:22', '05:17:11', '2019-10-23', 'Complete', 2),
(200, 'D:maret/transfers.20191023.log', '187207', 'ANGGREK 1 Lt.8  ', 'FARMASI Lt.2  ', '05:20:49', '05:21:47', '2019-10-23', 'Complete', 204),
(201, 'D:maret/transfers.20191023.log', '187208', 'TULIP Lt.6  ', 'FARMASI Lt.2  ', '06:25:57', '06:27:12', '2019-10-23', 'Complete', 204),
(202, 'D:maret/transfers.20191023.log', '187211', 'FARMASI Lt.2  ', 'R.ANAK Lt.4  ', '06:44:48', '06:45:34', '2019-10-23', 'Complete', 210),
(203, 'D:maret/transfers.20191023.log', '187212', 'R.ANAK Lt.4  ', 'FARMASI Lt.2  ', '06:45:58', '06:46:45', '2019-10-23', 'Complete', 204),
(204, 'D:maret/transfers.20191023.log', '187213', 'APOTIK Lt.1  ', 'ANYELIR 1  ', '07:51:31', '07:53:13', '2019-10-23', 'Complete', 209),
(205, 'D:maret/transfers.20191023.log', '187214', 'FARMASI Lt.2  ', 'TERATAI Lt.6  ', '08:41:30', '08:42:30', '2019-10-23', 'Complete', 213),
(206, 'D:maret/transfers.20191023.log', '187215', 'TERATAI Lt.6  ', 'FARMASI Lt.2  ', '08:56:17', '08:57:22', '2019-10-23', 'Complete', 204),
(207, 'D:maret/transfers.20191023.log', '187216', 'FARMASI Lt.2  ', 'TERATAI Lt.6  ', '08:58:06', '08:58:59', '2019-10-23', 'Complete', 213),
(208, 'D:maret/transfers.20191023.log', '187217', 'TERATAI Lt.6  ', 'FARMASI Lt.2  ', '09:01:41', '09:02:42', '2019-10-23', 'Complete', 204),
(209, 'D:maret/transfers.20191023.log', '187218', 'APOTIK Lt.1  ', 'FARMASI Lt.2  ', '09:09:29', '09:10:46', '2019-10-23', 'Complete', 204),
(210, 'D:maret/transfers.20191023.log', '187219', 'FARMASI Lt.2  ', 'MAWAR 1 Lt.8  ', '09:10:46', '09:11:53', '2019-10-23', 'Complete', 117),
(211, 'D:maret/transfers.20191023.log', '187220', 'ANGGREK 1 Lt.8  ', 'MAWAR 2 Lt.7  ', '09:14:11', '09:15:36', '2019-10-23', 'Complete', 116),
(212, 'D:maret/transfers.20191023.log', '187221', 'ICU Lt.3  ', 'FARMASI Lt.2  ', '09:15:48', '09:16:54', '2019-10-23', 'Complete', 204),
(213, 'D:maret/transfers.20191023.log', '187222', 'FARMASI Lt.2  ', 'R.ANAK Lt.4  ', '09:21:32', '09:22:14', '2019-10-23', 'Complete', 210),
(214, 'D:maret/transfers.20191023.log', '187223', 'FARMASI Lt.2  ', 'CEMPAKA Lt.5  ', '09:21:56', '09:22:57', '2019-10-23', 'Complete', 114),
(215, 'D:maret/transfers.20191023.log', '187224', 'LAB Z1  ', 'BANK DARAH Lt2  ', '09:26:01', '09:26:59', '2019-10-23', 'Complete', 105),
(216, 'D:maret/transfers.20191023.log', '187225', 'LAB Lt.1 Z2  ', 'P.CENDANA Lt.2  ', '09:31:08', '09:33:25', '2019-10-23', 'Complete', 106),
(217, 'D:maret/transfers.20191023.log', '187226', 'CEMPAKA Lt.5  ', 'FARMASI Lt.2  ', '09:33:25', '09:34:29', '2019-10-23', 'Complete', 204),
(218, 'D:maret/transfers.20191023.log', '187228', 'BANK DARAH Lt2  ', 'LAB Z1  ', '09:34:38', '09:35:40', '2019-10-23', 'Complete', 108),
(219, 'D:maret/transfers.20191023.log', '187227', 'P.CENDANA Lt.2  ', 'LAB Lt.1 Z2  ', '09:34:23', '09:37:15', '2019-10-23', 'Aborted', 208),
(220, 'D:maret/transfers.20191023.log', '187229', 'CEMPAKA Lt.5  ', 'FARMASI Lt.2  ', '09:40:49', '09:41:58', '2019-10-23', 'Complete', 204),
(221, 'D:maret/transfers.20191023.log', '187230', 'FARMASI Lt.2  ', 'TULIP Lt.6  ', '09:54:18', '09:55:27', '2019-10-23', 'Complete', 115),
(222, 'D:maret/transfers.20191023.log', '187231', 'FARMASI Lt.2  ', 'TULIP Lt.6  ', '09:54:57', '09:56:05', '2019-10-23', 'Complete', 115),
(223, 'D:maret/transfers.20191023.log', '187232', 'TERATAI Lt.6  ', 'FARMASI Lt.2  ', '09:56:58', '09:58:03', '2019-10-23', 'Complete', 204),
(224, 'D:maret/transfers.20191023.log', '187233', 'TULIP Lt.6  ', 'FARMASI Lt.2  ', '10:01:18', '10:02:38', '2019-10-23', 'Complete', 204),
(225, 'D:maret/transfers.20191023.log', '187234', 'TULIP Lt.6  ', 'TERATAI Lt.6  ', '10:07:25', '10:09:02', '2019-10-23', 'Complete', 213),
(226, 'D:maret/transfers.20191023.log', '187235', 'FARMASI Lt.2  ', 'ICU Lt.3  ', '10:08:14', '10:09:05', '2019-10-23', 'Complete', 211),
(227, 'D:maret/transfers.20191023.log', '187236', 'FARMASI Lt.2  ', 'ANGGREK 2 Lt.7  ', '10:09:48', '10:10:55', '2019-10-23', 'Complete', 215),
(228, 'D:maret/transfers.20191023.log', '187237', 'ANGGREK 2 Lt.7  ', 'FARMASI Lt.2  ', '10:12:56', '10:14:09', '2019-10-23', 'Complete', 204),
(229, 'D:maret/transfers.20191023.log', '187238', 'FARMASI Lt.2  ', 'ANGGREK 1 Lt.8  ', '10:14:22', '10:15:11', '2019-10-23', 'Complete', 2),
(230, 'D:maret/transfers.20191023.log', '187240', 'FARMASI Lt.2  ', 'MELATI Lt 4  ', '10:17:25', '10:18:27', '2019-10-23', 'Complete', 112),
(231, 'D:maret/transfers.20191023.log', '187239', 'MELATI Lt 4  ', 'FARMASI Lt.2  ', '10:17:23', '10:18:31', '2019-10-23', 'Complete', 204),
(232, 'D:maret/transfers.20191023.log', '187242', 'FARMASI Lt.2  ', 'MELATI Lt 4  ', '10:18:31', '10:19:29', '2019-10-23', 'Complete', 112),
(233, 'D:maret/transfers.20191023.log', '187241', 'MELATI Lt 4  ', 'FARMASI Lt.2  ', '10:18:27', '10:19:33', '2019-10-23', 'Complete', 204),
(234, 'D:maret/transfers.20191023.log', '187243', 'FARMASI Lt.2  ', 'MELATI Lt 4  ', '10:19:33', '10:20:32', '2019-10-23', 'Complete', 112),
(235, 'D:maret/transfers.20191023.log', '187244', 'FARMASI Lt.2  ', 'TERATAI Lt.6  ', '10:26:11', '10:27:10', '2019-10-23', 'Complete', 213),
(236, 'D:maret/transfers.20191023.log', '187245', 'ANGGREK 1 Lt.8  ', 'FARMASI Lt.2  ', '10:27:43', '10:28:41', '2019-10-23', 'Complete', 204),
(237, 'D:maret/transfers.20191023.log', '187246', 'TERATAI Lt.6  ', 'FARMASI Lt.2  ', '10:30:27', '10:31:34', '2019-10-23', 'Complete', 204),
(238, 'D:maret/transfers.20191023.log', '187247', 'FARMASI Lt.2  ', 'CEMPAKA Lt.5  ', '10:40:26', '10:41:32', '2019-10-23', 'Complete', 114),
(239, 'D:maret/transfers.20191023.log', '187248', 'CEMPAKA Lt.5  ', 'FARMASI Lt.2  ', '10:43:30', '10:44:35', '2019-10-23', 'Complete', 204),
(240, 'D:maret/transfers.20191023.log', '187249', 'FARMASI Lt.2  ', 'ANGGREK 2 Lt.7  ', '10:50:29', '10:51:37', '2019-10-23', 'Complete', 215),
(241, 'D:maret/transfers.20191023.log', '187250', 'FARMASI Lt.2  ', 'TERATAI Lt.6  ', '10:52:36', '10:53:35', '2019-10-23', 'Complete', 213),
(242, 'D:maret/transfers.20191023.log', '187251', 'ANGGREK 1 Lt.8  ', 'FARMASI Lt.2  ', '10:54:22', '10:55:30', '2019-10-23', 'Complete', 204),
(243, 'D:maret/transfers.20191023.log', '187252', 'MAWAR 2 Lt.7  ', 'FARMASI Lt.2  ', '11:03:56', '11:05:21', '2019-10-23', 'Complete', 204),
(244, 'D:maret/transfers.20191023.log', '187253', 'MAWAR 2 Lt.7  ', 'FARMASI Lt.2  ', '11:06:20', '11:07:39', '2019-10-23', 'Complete', 204),
(245, 'D:maret/transfers.20191023.log', '187254', 'FARMASI Lt.2  ', 'MAWAR 2 Lt.7  ', '11:08:15', '11:09:21', '2019-10-23', 'Complete', 116),
(246, 'D:maret/transfers.20191023.log', '187255', 'P.CENDANA Lt.2  ', 'APOTIK Lt.1  ', '11:08:44', '11:09:58', '2019-10-23', 'Complete', 110),
(247, 'D:maret/transfers.20191023.log', '187256', 'MAWAR 1 Lt.8  ', 'FARMASI Lt.2  ', '11:09:21', '11:10:55', '2019-10-23', 'Complete', 204),
(248, 'D:maret/transfers.20191023.log', '187257', 'FARMASI Lt.2  ', 'MAWAR 2 Lt.7  ', '11:10:55', '11:12:00', '2019-10-23', 'Complete', 116),
(249, 'D:maret/transfers.20191023.log', '187258', 'ANGGREK 1 Lt.8  ', 'MAWAR 2 Lt.7  ', '11:11:30', '11:12:55', '2019-10-23', 'Complete', 116),
(250, 'D:maret/transfers.20191023.log', '187259', 'MAWAR 2 Lt.7  ', 'LAB Z1  ', '11:22:08', '11:23:22', '2019-10-23', 'Complete', 108),
(251, 'D:maret/transfers.20191023.log', '187260', 'MAWAR 2 Lt.7  ', 'LAB Z1  ', '11:23:22', '11:24:30', '2019-10-23', 'Complete', 108),
(252, 'D:maret/transfers.20191023.log', '187261', 'MAWAR 2 Lt.7  ', 'LAB Z1  ', '11:24:30', '11:25:38', '2019-10-23', 'Complete', 108),
(253, 'D:maret/transfers.20191023.log', '187262', 'MAWAR 2 Lt.7  ', 'LAB Z1  ', '11:25:38', '11:26:44', '2019-10-23', 'Complete', 108),
(254, 'D:maret/transfers.20191023.log', '187264', 'BEDAH SENTRAL  ', 'LAB Lt.1 Z2  ', '11:26:21', '11:28:02', '2019-10-23', 'Aborted', 208),
(255, 'D:maret/transfers.20191023.log', '187263', 'MAWAR 2 Lt.7  ', 'LAB Z1  ', '11:26:44', '11:27:51', '2019-10-23', 'Complete', 108),
(256, 'D:maret/transfers.20191023.log', '187267', 'BEDAH SENTRAL  ', 'LAB Lt.1 Z2  ', '11:27:43', '11:30:23', '2019-10-23', 'Aborted', 208),
(257, 'D:maret/transfers.20191023.log', '187265', 'LAB Z1  ', 'BANK DARAH Lt2  ', '11:27:51', '11:28:54', '2019-10-23', 'Complete', 105),
(258, 'D:maret/transfers.20191023.log', '187266', 'BEDAH SENTRAL  ', 'LAB Z1  ', '11:28:54', '11:29:51', '2019-10-23', 'Complete', 108),
(259, 'D:maret/transfers.20191023.log', '187271', 'BEDAH SENTRAL  ', 'LAB Z1  ', '11:29:51', '11:30:50', '2019-10-23', 'Complete', 108),
(260, 'D:maret/transfers.20191023.log', '187272', 'TERATAI Lt.6  ', 'FARMASI Lt.2  ', '11:43:52', '11:44:56', '2019-10-23', 'Complete', 204),
(261, 'D:maret/transfers.20191023.log', '187277', 'MAWAR 1 Lt.8  ', 'TULIP Lt.6  ', '11:48:52', '11:49:50', '2019-10-23', 'Complete', 115),
(262, 'D:maret/transfers.20191023.log', '187278', 'MELATI Lt 4  ', 'FARMASI Lt.2  ', '11:56:57', '11:58:15', '2019-10-23', 'Complete', 204),
(263, 'D:maret/transfers.20191023.log', '187279', 'FARMASI Lt.2  ', 'ANGGREK 2 Lt.7  ', '12:01:31', '12:02:04', '2019-10-23', 'Aborted', 215),
(264, 'D:maret/transfers.20191023.log', '187281', 'FARMASI Lt.2  ', 'CEMPAKA Lt.5  ', '12:15:17', '12:16:19', '2019-10-23', 'Complete', 114),
(265, 'D:maret/transfers.20191023.log', '187282', 'FARMASI Lt.2  ', 'MAWAR 1 Lt.8  ', '12:16:04', '12:17:14', '2019-10-23', 'Complete', 117),
(266, 'D:maret/transfers.20191023.log', '187283', 'ANGGREK 2 Lt.7  ', 'FARMASI Lt.2  ', '12:17:14', '12:18:26', '2019-10-23', 'Complete', 204),
(267, 'D:maret/transfers.20191023.log', '187284', 'MAWAR 1 Lt.8  ', 'TULIP Lt.6  ', '12:34:28', '12:35:29', '2019-10-23', 'Complete', 115),
(268, 'D:maret/transfers.20191023.log', '187285', 'APOTIK Lt.1  ', 'FARMASI Lt.2  ', '12:34:34', '12:36:28', '2019-10-23', 'Complete', 204),
(269, 'D:maret/transfers.20191023.log', '187286', 'FARMASI Lt.2  ', 'MAWAR 1 Lt.8  ', '12:43:23', '12:44:31', '2019-10-23', 'Complete', 117),
(270, 'D:maret/transfers.20191023.log', '187287', 'MAWAR 1 Lt.8  ', 'FARMASI Lt.2  ', '12:48:46', '12:50:03', '2019-10-23', 'Complete', 204),
(271, 'D:maret/transfers.20191023.log', '187288', 'LAB Z1  ', 'BANK DARAH Lt2  ', '12:52:44', '12:53:50', '2019-10-23', 'Complete', 105),
(272, 'D:maret/transfers.20191023.log', '187289', 'APOTIK Lt.1  ', 'FARMASI Lt.2  ', '12:55:22', '12:56:51', '2019-10-23', 'Complete', 204),
(273, 'D:maret/transfers.20191023.log', '187290', 'LAB Z1  ', 'ICU Lt.3  ', '13:10:28', '13:12:06', '2019-10-23', 'Complete', 211),
(274, 'D:maret/transfers.20191023.log', '187291', 'MAWAR 1 Lt.8  ', 'MAWAR 2 Lt.7  ', '13:28:00', '13:28:58', '2019-10-23', 'Complete', 116),
(275, 'D:maret/transfers.20191023.log', '187292', 'LAB Z1  ', 'ICU Lt.3  ', '13:29:50', '13:31:17', '2019-10-23', 'Complete', 211),
(276, 'D:maret/transfers.20191023.log', '187293', 'APOTIK Lt.1  ', 'P.CENDANA Lt.2  ', '13:41:43', '13:42:55', '2019-10-23', 'Complete', 106),
(277, 'D:maret/transfers.20191023.log', '187294', 'MELATI Lt 4  ', 'FARMASI Lt.2  ', '13:41:50', '13:43:40', '2019-10-23', 'Complete', 204),
(278, 'D:maret/transfers.20191023.log', '187295', 'BANK DARAH Lt2  ', 'LAB Z1  ', '13:44:31', '13:45:39', '2019-10-23', 'Complete', 108),
(279, 'D:maret/transfers.20191023.log', '187296', 'FARMASI Lt.2  ', 'ANGGREK 2 Lt.7  ', '13:53:23', '13:54:30', '2019-10-23', 'Complete', 215),
(280, 'D:maret/transfers.20191023.log', '187297', 'ANGGREK 2 Lt.7  ', 'FARMASI Lt.2  ', '13:55:48', '13:57:00', '2019-10-23', 'Complete', 204),
(281, 'D:maret/transfers.20191023.log', '187298', 'FARMASI Lt.2  ', 'ANGGREK 2 Lt.7  ', '14:34:41', '14:35:39', '2019-10-23', 'Complete', 215),
(282, 'D:maret/transfers.20191023.log', '187299', 'ANGGREK 2 Lt.7  ', 'FARMASI Lt.2  ', '14:38:47', '14:41:06', '2019-10-23', 'Complete', 204),
(283, 'D:maret/transfers.20191023.log', '187300', 'FARMASI Lt.2  ', 'ANGGREK 2 Lt.7  ', '14:53:02', '14:53:59', '2019-10-23', 'Complete', 215),
(284, 'D:maret/transfers.20191023.log', '187301', 'FARMASI Lt.2  ', 'MAWAR 1 Lt.8  ', '14:53:11', '14:54:34', '2019-10-23', 'Complete', 117),
(285, 'D:maret/transfers.20191023.log', '187302', 'MAWAR 1 Lt.8  ', 'FARMASI Lt.2  ', '14:55:07', '14:56:35', '2019-10-23', 'Complete', 204),
(286, 'D:maret/transfers.20191023.log', '187303', 'MAWAR 1 Lt.8  ', 'FARMASI Lt.2  ', '14:55:42', '14:57:32', '2019-10-23', 'Complete', 204),
(287, 'D:maret/transfers.20191023.log', '187304', 'FARMASI Lt.2  ', 'ANGGREK 1 Lt.8  ', '14:56:43', '14:57:38', '2019-10-23', 'Complete', 2),
(288, 'D:maret/transfers.20191023.log', '187306', 'ANGGREK 1 Lt.8  ', 'FARMASI Lt.2  ', '14:58:38', '14:59:11', '2019-10-23', 'Cancelled', 204),
(289, 'D:maret/transfers.20191023.log', '187305', 'FARMASI Lt.2  ', 'ANGGREK 2 Lt.7  ', '14:57:38', '14:58:40', '2019-10-23', 'Complete', 215),
(290, 'D:maret/transfers.20191023.log', '187307', 'ANGGREK 1 Lt.8  ', 'FARMASI Lt.2  ', '14:58:51', '14:59:48', '2019-10-23', 'Complete', 204),
(291, 'D:maret/transfers.20191023.log', '187308', 'ANGGREK 2 Lt.7  ', 'FARMASI Lt.2  ', '14:59:48', '15:01:05', '2019-10-23', 'Complete', 204),
(292, 'D:maret/transfers.20191023.log', '187309', 'FARMASI Lt.2  ', 'ANGGREK 1 Lt.8  ', '15:04:22', '15:05:11', '2019-10-23', 'Complete', 2),
(293, 'D:maret/transfers.20191023.log', '187310', 'FARMASI Lt.2  ', 'CEMPAKA Lt.5  ', '15:19:28', '15:20:31', '2019-10-23', 'Complete', 114),
(294, 'D:maret/transfers.20191023.log', '187311', 'CEMPAKA Lt.5  ', 'FARMASI Lt.2  ', '15:20:59', '15:22:05', '2019-10-23', 'Complete', 204),
(295, 'D:maret/transfers.20191023.log', '187312', 'ANGGREK 1 Lt.8  ', 'BEDAH SENTRAL  ', '15:41:19', '15:42:38', '2019-10-23', 'Complete', 111),
(296, 'D:maret/transfers.20191023.log', '187313', 'LAB Z1  ', 'BANK DARAH Lt2  ', '15:41:42', '15:42:48', '2019-10-23', 'Complete', 105),
(297, 'D:maret/transfers.20191023.log', '187314', 'ANGGREK 2 Lt.7  ', 'BEDAH SENTRAL  ', '15:42:48', '15:44:19', '2019-10-23', 'Complete', 111),
(298, 'D:maret/transfers.20191023.log', '187315', 'CEMPAKA Lt.5  ', 'BEDAH SENTRAL  ', '15:43:47', '15:44:34', '2019-10-23', 'Complete', 111),
(299, 'D:maret/transfers.20191023.log', '187316', 'MELATI Lt 4  ', 'BEDAH SENTRAL  ', '15:44:34', '15:45:25', '2019-10-23', 'Complete', 111),
(300, 'D:maret/transfers.20191023.log', '187317', 'BEDAH SENTRAL  ', 'ANGGREK 2 Lt.7  ', '15:44:49', '15:46:20', '2019-10-23', 'Complete', 215),
(301, 'D:maret/transfers.20191023.log', '187318', 'R.ANAK Lt.4  ', 'BEDAH SENTRAL  ', '15:45:25', '15:46:28', '2019-10-23', 'Complete', 111),
(302, 'D:maret/transfers.20191023.log', '187319', 'TERATAI Lt.6  ', 'BEDAH SENTRAL  ', '15:46:20', '15:47:38', '2019-10-23', 'Complete', 111),
(303, 'D:maret/transfers.20191023.log', '187320', 'TULIP Lt.6  ', 'BEDAH SENTRAL  ', '15:46:46', '15:47:47', '2019-10-23', 'Complete', 111),
(304, 'D:maret/transfers.20191023.log', '187321', 'MAWAR 1 Lt.8  ', 'BEDAH SENTRAL  ', '15:55:09', '15:56:12', '2019-10-23', 'Complete', 111),
(305, 'D:maret/transfers.20191023.log', '187322', 'FARMASI Lt.2  ', 'MAWAR 2 Lt.7  ', '16:09:18', '16:10:27', '2019-10-23', 'Complete', 116),
(306, 'D:maret/transfers.20191023.log', '187323', 'BEDAH SENTRAL  ', 'MAWAR 1 Lt.8  ', '16:12:09', '16:13:06', '2019-10-23', 'Complete', 117),
(307, 'D:maret/transfers.20191023.log', '187324', 'MAWAR 2 Lt.7  ', 'BEDAH SENTRAL  ', '16:14:57', '16:15:53', '2019-10-23', 'Complete', 111),
(308, 'D:maret/transfers.20191023.log', '187325', 'BANK DARAH Lt2  ', 'LAB Z1  ', '16:18:06', '16:19:10', '2019-10-23', 'Complete', 108),
(309, 'D:maret/transfers.20191023.log', '187326', 'FARMASI Lt.2  ', 'CEMPAKA Lt.5  ', '16:33:45', '16:34:48', '2019-10-23', 'Complete', 114),
(310, 'D:maret/transfers.20191023.log', '187327', 'BANK DARAH Lt2  ', 'LAB Z1  ', '16:42:17', '16:43:26', '2019-10-23', 'Complete', 108),
(311, 'D:maret/transfers.20191023.log', '187329', 'FARMASI Lt.2  ', 'MAWAR 1 Lt.8  ', '16:46:22', '16:47:31', '2019-10-23', 'Complete', 117),
(312, 'D:maret/transfers.20191023.log', '187328', 'MAWAR 1 Lt.8  ', 'FARMASI Lt.2  ', '16:46:07', '16:47:46', '2019-10-23', 'Complete', 204),
(313, 'D:maret/transfers.20191023.log', '187330', 'BEDAH SENTRAL  ', 'TERATAI Lt.6  ', '16:47:31', '16:48:53', '2019-10-23', 'Complete', 213),
(314, 'D:maret/transfers.20191023.log', '187331', 'FARMASI Lt.2  ', 'MAWAR 1 Lt.8  ', '16:51:13', '16:52:23', '2019-10-23', 'Complete', 117),
(315, 'D:maret/transfers.20191023.log', '187332', 'FARMASI Lt.2  ', 'MAWAR 1 Lt.8  ', '16:56:08', '16:57:17', '2019-10-23', 'Complete', 117),
(316, 'D:maret/transfers.20191023.log', '187333', 'FARMASI Lt.2  ', 'TERATAI Lt.6  ', '18:30:11', '18:31:08', '2019-10-23', 'Complete', 213),
(317, 'D:maret/transfers.20191023.log', '187334', 'BANK DARAH Lt2  ', 'R.ANAK Lt.4  ', '18:34:02', '18:35:32', '2019-10-23', 'Complete', 210),
(318, 'D:maret/transfers.20191023.log', '187335', 'FARMASI Lt.2  ', 'TERATAI Lt.6  ', '18:53:10', '18:54:06', '2019-10-23', 'Complete', 213),
(319, 'D:maret/transfers.20191023.log', '187336', 'FARMASI Lt.2  ', 'MAWAR 1 Lt.8  ', '19:16:15', '19:17:24', '2019-10-23', 'Complete', 117),
(320, 'D:maret/transfers.20191023.log', '187337', 'MAWAR 1 Lt.8  ', 'FARMASI Lt.2  ', '19:21:55', '19:23:19', '2019-10-23', 'Complete', 204),
(321, 'D:maret/transfers.20191023.log', '187338', 'TERATAI Lt.6  ', 'FARMASI Lt.2  ', '19:30:04', '19:31:08', '2019-10-23', 'Complete', 204),
(322, 'D:maret/transfers.20191023.log', '187339', 'MAWAR 1 Lt.8  ', 'FARMASI Lt.2  ', '19:31:08', '19:32:30', '2019-10-23', 'Complete', 204),
(323, 'D:maret/transfers.20191023.log', '187340', 'ANGGREK 1 Lt.8  ', 'BEDAH SENTRAL  ', '19:31:11', '19:32:36', '2019-10-23', 'Complete', 111),
(324, 'D:maret/transfers.20191023.log', '187341', 'FARMASI Lt.2  ', 'ANGGREK 1 Lt.8  ', '19:34:36', '19:35:24', '2019-10-23', 'Complete', 2),
(325, 'D:maret/transfers.20191023.log', '187342', 'FARMASI Lt.2  ', 'MAWAR 1 Lt.8  ', '19:52:29', '19:53:36', '2019-10-23', 'Complete', 117),
(326, 'D:maret/transfers.20191023.log', '187343', 'R.ANAK Lt.4  ', 'MAWAR 1 Lt.8  ', '20:01:29', '20:02:50', '2019-10-23', 'Complete', 117),
(327, 'D:maret/transfers.20191023.log', '187344', 'LAB Z1  ', 'TERATAI Lt.6  ', '20:05:05', '20:06:40', '2019-10-23', 'Complete', 213),
(328, 'D:maret/transfers.20191023.log', '187345', 'FARMASI Lt.2  ', 'ANGGREK 2 Lt.7  ', '20:22:14', '20:23:17', '2019-10-23', 'Complete', 215),
(329, 'D:maret/transfers.20191023.log', '187346', 'ANGGREK 2 Lt.7  ', 'FARMASI Lt.2  ', '20:25:37', '20:26:50', '2019-10-23', 'Complete', 204),
(330, 'D:maret/transfers.20191023.log', '187347', 'FARMASI Lt.2  ', 'MAWAR 1 Lt.8  ', '20:35:14', '20:36:26', '2019-10-23', 'Complete', 117),
(331, 'D:maret/transfers.20191023.log', '187348', 'MAWAR 1 Lt.8  ', 'FARMASI Lt.2  ', '20:42:50', '20:44:11', '2019-10-23', 'Complete', 204),
(332, 'D:maret/transfers.20191023.log', '187349', 'FARMASI Lt.2  ', 'MELATI Lt 4  ', '20:59:20', '21:00:24', '2019-10-23', 'Complete', 112),
(333, 'D:maret/transfers.20191023.log', '187350', 'MELATI Lt 4  ', 'FARMASI Lt.2  ', '21:03:19', '21:04:27', '2019-10-23', 'Complete', 204),
(334, 'D:maret/transfers.20191023.log', '187351', 'FARMASI Lt.2  ', 'CEMPAKA Lt.5  ', '21:26:02', '21:27:04', '2019-10-23', 'Complete', 114),
(335, 'D:maret/transfers.20191023.log', '187352', 'FARMASI Lt.2  ', 'ICU Lt.3  ', '22:09:14', '22:10:08', '2019-10-23', 'Complete', 211),
(336, 'D:maret/transfers.20191023.log', '187353', 'ICU Lt.3  ', 'FARMASI Lt.2  ', '22:12:31', '22:13:34', '2019-10-23', 'Complete', 204),
(337, 'D:maret/transfers.20191023.log', '187354', 'ANGGREK 2 Lt.7  ', 'FARMASI Lt.2  ', '23:00:27', '23:01:41', '2019-10-23', 'Complete', 204),
(338, 'D:maret/transfers.20191023.log', '187355', 'FARMASI Lt.2  ', 'CEMPAKA Lt.5  ', '23:15:53', '23:16:58', '2019-10-23', 'Complete', 114),
(339, 'D:maret/transfers.20191023.log', '187356', 'CEMPAKA Lt.5  ', 'FARMASI Lt.2  ', '23:17:25', '23:18:32', '2019-10-23', 'Complete', 204);

-- --------------------------------------------------------

--
-- Table structure for table `ima_file`
--

CREATE TABLE `ima_file` (
  `id_file` int(11) NOT NULL,
  `filename` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ima_file`
--

INSERT INTO `ima_file` (`id_file`, `filename`, `date`) VALUES
(24, 'D:maret/transfers.20191022.log', '2020-02-19'),
(25, 'D:maret/transfers.20191023.log', '2020-02-19');

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
(42, 'GERAI0000', 1, '81dc9bdb52d04dc20036dbd8313ed055', 'invest', 'N', 'thecodercoffeebar@gmail.com', 'operator', '081327717847', 'Nganjuk', '2019-10-15', '', 'ID0000002', '2020-02-19 06:50:51', ''),
(52, 'GERAI0002', 1, '81dc9bdb52d04dc20036dbd8313ed055', 'admin', 'N', 'test1@gmail.com', ' M AANG SYAIFUN NAJA', '', '', '2019-11-24', '', '', '2019-11-26 02:39:07', '102817'),
(54, 'GERAI0000', 1, '81dc9bdb52d04dc20036dbd8313ed055', 'operator', 'N', 'andihakim@gmail.com', ' andi hakim ', '', '', '2020-02-19', 'thecodercoffeebar@gmail.com', 'ID0000002', '0000-00-00 00:00:00', '');

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
  MODIFY `id_data` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=340;

--
-- AUTO_INCREMENT for table `ima_file`
--
ALTER TABLE `ima_file`
  MODIFY `id_file` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

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
