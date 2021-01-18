-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2021 at 03:56 PM
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
-- Database: `db_naivebayes`
--

-- --------------------------------------------------------

--
-- Table structure for table `bahan`
--

CREATE TABLE `bahan` (
  `id_bahan` int(10) NOT NULL,
  `bahan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bahan`
--

INSERT INTO `bahan` (`id_bahan`, `bahan`) VALUES
(1, 'Bawang'),
(2, 'Cabe'),
(3, 'Tomat'),
(4, 'Telur'),
(5, 'Wortel'),
(6, 'Jagung'),
(7, 'Tepung'),
(8, 'Susu'),
(9, 'Kecap'),
(10, 'Saus'),
(11, 'Jahe'),
(12, 'Kunyit'),
(13, 'Ayam'),
(14, 'Daging'),
(15, 'Seafood'),
(16, 'Tempe/tahu'),
(17, 'Sayur-mayur(aditional)'),
(18, 'Kentang'),
(19, '( Kosong )');

-- --------------------------------------------------------

--
-- Table structure for table `train`
--

CREATE TABLE `train` (
  `id_train` int(10) NOT NULL,
  `menu` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `train`
--

INSERT INTO `train` (`id_train`, `menu`) VALUES
(19, 'Tempe Penyet'),
(20, 'Bakso'),
(21, 'Mie Ayam');

-- --------------------------------------------------------

--
-- Table structure for table `trainitem`
--

CREATE TABLE `trainitem` (
  `id_trainitem` int(10) NOT NULL,
  `id_train` int(10) NOT NULL,
  `id_bahan` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trainitem`
--

INSERT INTO `trainitem` (`id_trainitem`, `id_train`, `id_bahan`) VALUES
(79, 19, 19),
(80, 19, 5),
(81, 19, 19),
(82, 19, 8),
(83, 19, 19),
(84, 19, 4),
(85, 20, 11),
(86, 20, 9),
(87, 20, 11),
(88, 20, 9),
(89, 20, 7),
(90, 20, 6),
(91, 21, 14),
(92, 21, 8),
(93, 21, 8),
(94, 21, 14),
(95, 21, 6),
(96, 21, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bahan`
--
ALTER TABLE `bahan`
  ADD PRIMARY KEY (`id_bahan`);

--
-- Indexes for table `train`
--
ALTER TABLE `train`
  ADD PRIMARY KEY (`id_train`);

--
-- Indexes for table `trainitem`
--
ALTER TABLE `trainitem`
  ADD PRIMARY KEY (`id_trainitem`),
  ADD KEY `id_train` (`id_train`),
  ADD KEY `id_bahan` (`id_bahan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bahan`
--
ALTER TABLE `bahan`
  MODIFY `id_bahan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `train`
--
ALTER TABLE `train`
  MODIFY `id_train` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `trainitem`
--
ALTER TABLE `trainitem`
  MODIFY `id_trainitem` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `trainitem`
--
ALTER TABLE `trainitem`
  ADD CONSTRAINT `trainitem_ibfk_1` FOREIGN KEY (`id_bahan`) REFERENCES `bahan` (`id_bahan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `trainitem_ibfk_2` FOREIGN KEY (`id_train`) REFERENCES `train` (`id_train`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
