-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2023 at 07:48 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wb_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `wb_companyinfoview`
--

CREATE TABLE `wb_companyinfoview` (
  `WB_DATAAREA` varchar(3) NOT NULL,
  `WB_NAME_EN` varchar(100) NOT NULL,
  `WB_NAME_TH` varchar(100) NOT NULL,
  `WB_STATUS` enum('"เปิด"','"ปิด"') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wb_companyinfoview`
--

INSERT INTO `wb_companyinfoview` (`WB_DATAAREA`, `WB_NAME_EN`, `WB_NAME_TH`, `WB_STATUS`) VALUES
('FIN', 'FIN MOBILE', 'ฟิน โมบาย', ''),
('INT', 'INET', 'ไอเน็ต', ''),
('KCL', 'KOT COOL', 'โครตคูล', ''),
('SCB', 'SCB', 'ไทยพาณิชย์', ''),
('TDC', 'THAI DATA CLOUD', 'ไทยดาต้าคลาวน์', ''),
('WOX', 'WOXA CROP', 'โวซ่าคอปป์', '');

-- --------------------------------------------------------

--
-- Table structure for table `wb_employee`
--

CREATE TABLE `wb_employee` (
  `id` int(11) NOT NULL,
  `WB_EMPLOYEEID` varchar(6) NOT NULL DEFAULT 'uuid()',
  `WB_DATAAREA` varchar(3) NOT NULL,
  `WB_EMPNAMEEN` varchar(100) NOT NULL,
  `WB_EMPNAMETH` varchar(100) NOT NULL,
  `WB_NICKNAME` varchar(100) NOT NULL,
  `WB_TEL` varchar(50) NOT NULL,
  `WB_MAIL` varchar(100) NOT NULL,
  `WB_USERNAME` varchar(100) NOT NULL,
  `WB_PASSWORD` varchar(255) NOT NULL,
  `WB_STATUS` enum('"เปิด"','"ปิด"') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wb_employee`
--

INSERT INTO `wb_employee` (`id`, `WB_EMPLOYEEID`, `WB_DATAAREA`, `WB_EMPNAMEEN`, `WB_EMPNAMETH`, `WB_NICKNAME`, `WB_TEL`, `WB_MAIL`, `WB_USERNAME`, `WB_PASSWORD`, `WB_STATUS`) VALUES
(1, 'INT001', 'INT', 'Nattawat Saetung', 'ณัฐวัฒน์ แซ่ตัง', 'บิว', '0612548375', 'billyforce@gmail.com', 'billyforce', 'billyforce1234', '\"เปิด\"');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `wb_companyinfoview`
--
ALTER TABLE `wb_companyinfoview`
  ADD PRIMARY KEY (`WB_DATAAREA`);

--
-- Indexes for table `wb_employee`
--
ALTER TABLE `wb_employee`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `WB_DATAAREA` (`WB_DATAAREA`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `wb_employee`
--
ALTER TABLE `wb_employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `wb_employee`
--
ALTER TABLE `wb_employee`
  ADD CONSTRAINT `wb_employee_ibfk_1` FOREIGN KEY (`WB_DATAAREA`) REFERENCES `wb_companyinfoview` (`WB_DATAAREA`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
