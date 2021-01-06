-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2021 at 06:32 PM
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
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(10) NOT NULL,
  `menu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `menu`) VALUES
(1, 'Nasi Goreng Ayam'),
(2, 'Nasi Goreng Ikan Asin'),
(3, 'Semur Bola Daging'),
(4, 'Ayam Panggan'),
(5, 'Kering Tempe'),
(6, 'Rendang Daging'),
(7, 'Udang Balado'),
(8, 'Ikan Panggang'),
(9, 'Tumis Jamur'),
(10, 'Udang Penyet'),
(11, 'Capcay Basah'),
(12, 'Cah Tauge'),
(13, 'Udang Goreng Tepung'),
(14, 'Cumi Goreng Tepung'),
(15, 'Ayam Asam Manis'),
(16, 'Chicken Steak'),
(17, 'Beef Steak'),
(18, 'Sate Ayam'),
(19, 'Sate Sapi'),
(20, 'Tempe Bacem'),
(21, 'Sapo Tahu Ayam'),
(22, 'Sup Jagung'),
(23, 'Sup Tahu'),
(24, 'Sup Asparagus'),
(25, 'Sup Kepiting'),
(26, 'Fish and Chips'),
(27, 'Chicken Rolls'),
(28, 'Terong Balado'),
(29, 'Ayam Rica-rica'),
(30, 'Ayam Goreng Mentega'),
(31, 'Udang Goreng Mentega'),
(32, 'Bistik Daging'),
(33, 'Mie Goreng'),
(34, 'Mie Goreng Sapi'),
(35, 'Ikan Asam Manis'),
(36, 'Bihun Goreng'),
(37, 'Bakso Malang'),
(38, 'Soto Ayam'),
(39, 'Nasi Bakar Tuna'),
(40, 'Gulai Ayam'),
(41, 'Gulai Ikan'),
(42, 'Ayam Lada Hitam'),
(43, 'Telur Dadar Penyet'),
(44, 'Telur Bakar'),
(45, 'Chicken Katsu'),
(46, 'Spicy Chicken Soup'),
(47, 'Perkedel Kentang'),
(48, 'Rawon'),
(49, 'Nasi Uduk'),
(50, 'Sayur Ayam');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id_test` int(10) NOT NULL,
  `id_menu` int(10) NOT NULL,
  `hasil` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `testitem`
--

CREATE TABLE `testitem` (
  `id_testitem` int(10) NOT NULL,
  `id_test` int(10) NOT NULL,
  `id_bahan` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `train`
--

CREATE TABLE `train` (
  `id_train` int(10) NOT NULL,
  `id_menu` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `train`
--

INSERT INTO `train` (`id_train`, `id_menu`) VALUES
(12, 3),
(13, 17),
(14, 20),
(16, 45);

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
(25, 12, 1),
(26, 12, 3),
(27, 12, 2),
(28, 12, 14),
(29, 12, 17),
(30, 12, 12),
(31, 13, 7),
(32, 13, 19),
(33, 13, 4),
(34, 13, 16),
(35, 13, 19),
(36, 13, 15),
(37, 14, 5),
(38, 14, 4),
(39, 14, 15),
(40, 14, 17),
(41, 14, 15),
(42, 14, 18),
(49, 16, 4),
(50, 16, 2),
(51, 16, 13),
(52, 16, 7),
(53, 16, 2),
(54, 16, 11);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bahan`
--
ALTER TABLE `bahan`
  ADD PRIMARY KEY (`id_bahan`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id_test`),
  ADD KEY `id_menu` (`id_menu`);

--
-- Indexes for table `testitem`
--
ALTER TABLE `testitem`
  ADD PRIMARY KEY (`id_testitem`),
  ADD KEY `id_test` (`id_test`),
  ADD KEY `id_bahan` (`id_bahan`);

--
-- Indexes for table `train`
--
ALTER TABLE `train`
  ADD PRIMARY KEY (`id_train`),
  ADD KEY `id_menu` (`id_menu`);

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
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id_test` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testitem`
--
ALTER TABLE `testitem`
  MODIFY `id_testitem` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `train`
--
ALTER TABLE `train`
  MODIFY `id_train` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `trainitem`
--
ALTER TABLE `trainitem`
  MODIFY `id_trainitem` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `test`
--
ALTER TABLE `test`
  ADD CONSTRAINT `test_ibfk_1` FOREIGN KEY (`id_menu`) REFERENCES `menu` (`id_menu`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `testitem`
--
ALTER TABLE `testitem`
  ADD CONSTRAINT `testitem_ibfk_1` FOREIGN KEY (`id_bahan`) REFERENCES `bahan` (`id_bahan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `testitem_ibfk_2` FOREIGN KEY (`id_test`) REFERENCES `test` (`id_test`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `train`
--
ALTER TABLE `train`
  ADD CONSTRAINT `train_ibfk_1` FOREIGN KEY (`id_menu`) REFERENCES `menu` (`id_menu`) ON DELETE CASCADE ON UPDATE CASCADE;

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
