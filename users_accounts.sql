-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2021 at 10:38 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users_accounts`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `email` varchar(255) NOT NULL,
  `name` char(30) DEFAULT NULL,
  `password` varchar(15) DEFAULT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `block_user` char(1) DEFAULT NULL,
  `date_created` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`email`, `name`, `password`, `picture`, `block_user`, `date_created`) VALUES
('ab@gmail.com', 'abc', 'bahs', 'art_horses_foal_sky_sunset_1920x1200.jpg', '0', '20-11-2021'),
('basitkhawaja0003@gmail.com', 'basit', 'akakka', 'horses_1920x1200.jpg', '0', '20-11-2021'),
('Basitkhawaja13@gmail.com', 'Basit khawaja', 'basit', 'headphones_Japan_black_and_white_music_Germany_metal_AKG_Acoustics_grayscale_monochrome_AKG_still_life_K1000_stax_2560x1440.jpg', '0', '21-11-2021');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
