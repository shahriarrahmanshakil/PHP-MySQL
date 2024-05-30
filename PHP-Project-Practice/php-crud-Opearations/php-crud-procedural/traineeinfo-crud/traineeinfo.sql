-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2024 at 08:46 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `learning_php_mysql`
--

-- --------------------------------------------------------

--
-- Table structure for table `traineeinfo`
--

CREATE TABLE `traineeinfo` (
  `id` int(10) NOT NULL,
  `traineeid` int(10) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `batch` varchar(50) DEFAULT NULL,
  `round` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `traineeinfo`
--

INSERT INTO `traineeinfo` (`id`, `traineeid`, `name`, `batch`, `round`) VALUES
(1, 1279903, 'Md. Sakul Islam', 'WDPF/NCLC-A/58/01', 58),
(2, 1279917, 'FIMA AKTER SUMA', 'WDPF/NCLC-A/58/01', 58),
(3, 1280023, ' Md. Abdullah-Al-Mamun', 'WDPF/NCLC-A/58/01', 58),
(4, 1280208, 'MD. SHAHEEN MIAH', 'WDPF/NCLC-A/58/01', 58),
(5, 1280488, ' Mahmuda Binte Sayeed', 'WDPF/NCLC-A/58/01', 58),
(6, 1280641, 'Md Raihan Molla Raju', 'WDPF/NCLC-A/58/01', 58),
(7, 1280674, 'Md. Tuhin Mia', 'WDPF/NCLC-A/58/01', 58),
(8, 1280737, ' Shahriar Rahman Shakil', 'WDPF/NCLC-A/58/01', 58),
(9, 1280775, ' Md. Rakibul Islam', 'WDPF/NCLC-A/58/01', 58),
(10, 1280910, ' Farjana Epa', 'WDPF/NCLC-A/58/01', 58),
(11, 1281012, 'MD Jakir Hossain', 'WDPF/NCLC-A/58/01', 58),
(12, 1281130, ' Rafia khan tuly', 'WDPF/NCLC-A/58/01', 58);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `traineeinfo`
--
ALTER TABLE `traineeinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `traineeinfo`
--
ALTER TABLE `traineeinfo`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
