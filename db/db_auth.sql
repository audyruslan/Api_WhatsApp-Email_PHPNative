-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2022 at 06:24 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_auth`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_regis`
--

CREATE TABLE `tb_regis` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `keperluan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_regis`
--

INSERT INTO `tb_regis` (`id`, `nama_lengkap`, `email`, `no_hp`, `alamat`, `keperluan`) VALUES
(16, 'Audy Ruslan', '4udyruslan@gmail.com', '082292879489', 'BTN TAMAN RIA ESTATE', 'Desain Rumah'),
(17, 'Audy Ruslan', '4udyruslan@gmail.com', '082259708665', 'BTN TAMAN RIA ESTATE', 'asd'),
(18, 'Audy Ruslan', '4udyruslan@gmail.com', '+6282155319317', 'BTN TAMAN RIA ESTATE', 'Desain Rumah'),
(19, 'Audy Ruslan', '4udyruslan@gmail.com', '+6282155319317', 'BTN TAMAN RIA ESTATE', 'Desain Rumah'),
(20, 'Audy Ruslan', '4udyruslan@gmail.com', '+6282155319317', 'BTN TAMAN RIA ESTATE', 'Desain Rumah'),
(21, 'Audy Ruslan', '4udyruslan@gmail.com', '+6282155319317', 'BTN TAMAN RIA ESTATE', 'Desain Rumah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_regis`
--
ALTER TABLE `tb_regis`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_regis`
--
ALTER TABLE `tb_regis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
