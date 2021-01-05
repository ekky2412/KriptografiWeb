-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2021 at 04:17 AM
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
-- Database: `projekkripto`
--

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(11) NOT NULL,
  `email_pengirim` varchar(100) NOT NULL,
  `email_penerima` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `pesan` varchar(1000) NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `email_pengirim`, `email_penerima`, `subject`, `pesan`, `waktu`) VALUES
(2, 'ekky.raharjo@gmail.com', 'john@gmail.com', 'Tes', 'Testing 123', '2020-12-26 15:04:25'),
(3, 'john@gmail.com', 'ekky.raharjo@gmail.com', 'Testing 2', 'Ok siap', '2020-12-29 12:52:20'),
(4, 'ekky.raharjo@gmail.com', 'john@gmail.com', 'Penting!', 'ÁS¼2Ïßékª¥¶åD»Ö(Ü>ó03Wx®H)õŒÚAfªv‹Þ$<ô‰èk	c‚', '2020-12-29 16:58:31'),
(5, 'ekky.raharjo@gmail.com', 'john@gmail.com', 'Urgent!', 'VO¥æ|ÈkÂ«‰þÃ6Od‡ RÈV}Æ¡÷éýê÷Ã', '2020-12-29 23:17:46');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `namaLengkap` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`email`, `password`, `namaLengkap`) VALUES
('ekky.raharjo@gmail.com', '12345678', 'Rezky Putratama Raharjo'),
('john@gmail.com', '23456789', 'John Denver');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`),
  ADD KEY `fk_penerima` (`email_penerima`),
  ADD KEY `fk_pengirim` (`email_pengirim`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pesan`
--
ALTER TABLE `pesan`
  ADD CONSTRAINT `fk_penerima` FOREIGN KEY (`email_penerima`) REFERENCES `user` (`email`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_pengirim` FOREIGN KEY (`email_pengirim`) REFERENCES `user` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
