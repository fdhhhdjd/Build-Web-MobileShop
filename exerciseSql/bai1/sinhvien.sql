-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2021 at 05:32 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sinhvien`
--

-- --------------------------------------------------------

--
-- Table structure for table `lop`
--

CREATE TABLE `lop` (
  `ID_Lop` tinyint(4) NOT NULL,
  `TenLop` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lop`
--

INSERT INTO `lop` (`ID_Lop`, `TenLop`) VALUES
(2, '60CNTT-1'),
(4, '60CNTT-2'),
(6, '60CNTT-3');

-- --------------------------------------------------------

--
-- Table structure for table `sv`
--

CREATE TABLE `sv` (
  `MaSV` tinyint(4) NOT NULL,
  `Ho` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Ten` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DiaChi` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Khoa` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ID_Lop` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sv`
--

INSERT INTO `sv` (`MaSV`, `Ho`, `Ten`, `DiaChi`, `Khoa`, `ID_Lop`) VALUES
(10, 'Lê Trọng', 'Kha', 'Phú Yên', 'K60', 4),
(11, 'Nguyễn', 'Phương', 'Khánh Hòa', 'K60', 2),
(13, 'Nguyễn', 'Toàn', 'Phú Yên', 'K61', 2),
(19, 'Lê Trọng', 'Kha', 'Nha Trang', 'K61', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lop`
--
ALTER TABLE `lop`
  ADD PRIMARY KEY (`ID_Lop`);

--
-- Indexes for table `sv`
--
ALTER TABLE `sv`
  ADD PRIMARY KEY (`MaSV`),
  ADD KEY `ID_Lop` (`ID_Lop`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lop`
--
ALTER TABLE `lop`
  MODIFY `ID_Lop` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sv`
--
ALTER TABLE `sv`
  MODIFY `MaSV` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sv`
--
ALTER TABLE `sv`
  ADD CONSTRAINT `FK_Lop` FOREIGN KEY (`ID_Lop`) REFERENCES `lop` (`ID_Lop`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
