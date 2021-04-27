-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2021 at 10:08 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_tubes_203040023`
--

-- --------------------------------------------------------

--
-- Table structure for table `bundle`
--

CREATE TABLE `bundle` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `Detail` varchar(100) NOT NULL,
  `Price` varchar(100) NOT NULL,
  `StokItem` varchar(100) NOT NULL,
  `Picture` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bundle`
--

INSERT INTO `bundle` (`id`, `Name`, `Description`, `Detail`, `Price`, `StokItem`, `Picture`) VALUES
(1, 'Bundle Glitch Pop', 'Weapon Skin dengan tema kekinian', 'Berisi Skin : Knife, Frenzy, Odin, Judge, Bulldog', '870000', '5', 'gp.jpg'),
(2, 'Bundle Glitch Pop 2.0', 'Weapon Skin dengan tema kekinian versi ke 2', 'Berisi Skin : Knife, Operator, Vandal, Phantom, Classic', '870000', '6', 'gp2.0.jpg'),
(3, 'Bundle Elder Flame', 'Weapon Skin dengan tema naga yang sangar', 'Berisi Skin : Knife, Operator, Judge, Frenzy, Vandal', '990000', '3', 'elderflames.jpg'),
(4, 'Bundle Sovereign', 'Weapon Skin dengan tema kerajaan', 'Berisi Skin : Knife, Marshal, Ghost, Guardian, Stinger', '710000', '8', 'sovereign.jfif'),
(5, 'Bundle Blast X', 'Weapon Skin dengan tema senjata mainan atau bisa dibilang senjata nerf', 'Berisi Skin : Knife, Odin, Frenzy, Phantom, Spectre', '870000', '10', 'blastx.jpg'),
(6, 'Bundle Reaver', 'Weapon Skin dengan tema kematian yang sangat menyeramkan', 'Berisi Skin : Operator, Sheriff, Vandal, Guardian, Knife', '710000', '8', 'reaver.png'),
(7, 'Bundle Magepunk', 'Magepunk memiliki tema klasik dan futuristik yang dikenal sebagai steampunk', 'Berisi Skin : Ghost, Spectre, Bucky, Marshal,Knife', '674000', '14', 'magepunk.jpg'),
(8, 'Bundle Prim', 'Weapon Skin dengan tema serigala yang elegan', 'Berisi Skin : Vandal, Guardian, Classic, Spectre, Knife', '710000', '4', 'prime.png'),
(9, 'Bundle Prime 2.0', 'Weapon Skin dengan tema yang sama dengan prime pertama tetapi beda bentukan hewan yakni 2.0 mengguna', 'Berisi Skin : Odin, Phantom, Frenzy, Bucky, Knife', '710000', '12', 'prime2.0.jpg'),
(10, 'Bundle Singuarity', 'Weapon Skin dengan tema luar angkasa yang gelap', 'Berisi Skin : Sheriff, Spectre, Phantom, Ares, Knife', '870000', '11', 'singularity.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bundle`
--
ALTER TABLE `bundle`
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
-- AUTO_INCREMENT for table `bundle`
--
ALTER TABLE `bundle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
