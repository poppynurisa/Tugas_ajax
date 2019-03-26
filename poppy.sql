-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2019 at 03:50 PM
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
-- Database: `poppy`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `gambar` blob NOT NULL,
  `desk` text NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `nama`, `gambar`, `desk`, `lokasi`, `waktu`) VALUES
(40, 'poppy', 0x356338376334363563343131322e6a706567, 'proses', 'stadion sinus zona 9', '2019-03-12 14:40:45'),
(41, 'yoyo', 0x356338613833633464303039302e6a7067, 'jalan longsor menutup akses jalan penghubung kecamatan a dan b', 'desa c', '2019-03-14 16:39:32'),
(42, 'komandan', 0x356338613834623461313965612e6a7067, 'rusaknya eskalator stasiun lrt sehinggaa stasiun ditutup sementara', 'desa a', '2019-03-14 16:43:32'),
(43, 'yoyo', 0x356338613863303365373536342e6a7067, 'msdjfhksdnv s ewo weoetnwen fdgfshkl slewu gwrjkgjs9duiovs kwrgwi  djfhdgy8r gkhlsdhfg  saahr htsh gioxgng ihoso8eytwb gjxchkvysir hg dfkg iusdoiguwo egb hxiuvhui g er', 'iouteiow4utbds', '2019-03-14 17:14:43'),
(44, 'yolo yolo', 0x356338616639373661613036612e6a7067, 'taman itu rusak akibat adanya demonstrasi masal di area wali kota', 'taman firdaus dekat balai wali kota', '2019-03-15 01:01:42'),
(45, 'yaya', 0x356338616661363962333462362e6a706567, 'kerusakan di stadion', 'stadion gbk', '2019-03-15 01:05:45');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES
(5, 'poppy', 'd6456de966d4b03fd9678313842ba860', 'asn');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
