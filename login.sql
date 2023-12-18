-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2023 at 02:31 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`username`, `password`, `email`) VALUES
('adib', 'adib123', 'adibraihan4321@gmail.com'),
('admin', 'admin', 'admin123@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `data_akun`
--

CREATE TABLE `data_akun` (
  `email` varchar(255) NOT NULL,
  `gender` enum('Laki - laki','Perempuan') NOT NULL,
  `nim` int(20) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_akun`
--

INSERT INTO `data_akun` (`email`, `gender`, `nim`, `prodi`, `tanggal_lahir`, `alamat`, `password`, `nama`) VALUES
('', '', 0, '', '0000-00-00', '', '', ''),
('aaa111@gmail.com', 'Laki - laki', 120, 'IF', '0000-00-00', 'dimana aja', '123', 'aaa123'),
('gebi123@gmail.com', '', 123, '', '1940-10-10', 'merdeka', '123', 'gebi'),
('haris111@gmail.com', '', 1111, 'aktuaria', '2001-10-10', 'belwis', 'haris123', 'haris'),
('oliltampan123@gmail.com', '', 1234, '', '2011-11-11', 'dimana aja', '1234567890', 'olil'),
('martin@gmail.com', '', 2222, 'IF', '2010-02-12', 'dimanamana', 'martin123', 'martin'),
('adi222@gmail.com', '', 22222, '', '2001-10-10', 'halah', '123', 'adi'),
('sam123@gmail.com', '', 1234444, '', '2222-02-02', 'gatau', '210', 'sam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `data_akun`
--
ALTER TABLE `data_akun`
  ADD PRIMARY KEY (`nim`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `nim` (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
