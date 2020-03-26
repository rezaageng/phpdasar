-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2020 at 07:52 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpdasar`
--

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nis` char(9) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nama`, `nis`, `email`, `jurusan`, `gambar`) VALUES
(1, 'Reza Ageng Trihandoko', '181910065', 'rezaageng5@gmail.com', 'Rekayasa Perangkat Lunak', 'reza.png'),
(2, 'Paijo', '181910099', 'paijo@gmail.com', 'Mesin Perkakas', 'paijo.png'),
(3, 'Paini', '181910056', 'paini@gmail.com', 'Tekstil', 'paini.jpg'),
(4, 'Tumingan', '181910044', 'tumingan@gmail.com', 'Mesin Perkakas', 'tumingan.png'),
(5, 'Aruto', '181910076', 'aruto@gmail.com', 'Rekayasa Perangkat Lunak', 'aruto.jpg'),
(6, 'Izu', '181910054', 'izu@gmail.com', 'Multimedia', 'izu.png'),
(7, 'Nezuko', '181910001', 'nezuko@gmail.com', 'Rekayasa Perangkat Lunak', 'nezu.jpg'),
(9, 'Tanjirou', '181910002', 'tanjirou@gmail.com', 'Rekayasa Perangkat Lunak', 'tanjiro.jpg'),
(22, 'NotWibu krek', '181910085', 'notwibucrack@gmail.com', 'Rekayasa Perangkat Lunak', '5dbbd1e5c858b.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `username`, `password`) VALUES
(1, 'paijoganteng', '$2y$10$qohbwt.h/mVas9AGv1PnaO2yzpSeIzYquOts3uhKYBxxss/HderE.'),
(2, 'rezaageng', '$2y$10$/gd/9bGi05.cnlnv7M7Oaust91.BmNz/Dxql2F3BVoZ0rLma4/u0y'),
(4, 'evolt', '$2y$10$BoMaKFZKpZ9Zfvpqocrspu4SlMZgbKhKuA87GK5XEXk8NUncyChOK'),
(6, 'siswa', '$2y$10$fnNut4B0WmKs22coLBFJZOsUNk/QlkqaWXHmdnj6eo7SirYZNlLEK'),
(7, 'garox', '$2y$10$SC1BMccuNzBS.y2iwVcn4OOC6rDwJLiJ4/uRYqENDWENXb0GlIt5q'),
(8, 'supratman', '$2y$10$vwJ1KDWD4vETamf2wgKgauyI/OxoSKwI7ZHAuwWoKcbRvVhA46mYe'),
(9, 'dioo', '$2y$10$xax1SFgJlePNXriB6RfrW.B/cxXCmxfpJ0wAZr6PeCrVUek5rgbPK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
