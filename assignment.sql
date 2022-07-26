-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2022 at 02:34 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `id` int(20) NOT NULL,
  `album_name` varchar(512) NOT NULL,
  `price` varchar(20) NOT NULL,
  `description` varchar(512) NOT NULL,
  `image` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`id`, `album_name`, `price`, `description`, `image`) VALUES
(4, 'Jo Jas Sanga Sambhandhit Cha', 'NRs. 3000', 'Jo Jas Sanga Sambhandhit Cha (जो जससंग सम्बन्धित छ), released on 7 July 2005, is the first studio album by Albatross Nepal™ which consists of five singles.', '924965131507_sanotino_.jpg'),
(6, 'Atti Bhayo', 'NRs. 4500', 'Atti Bhayo (अत्ति भयो), released on 26 January 2011, is the second studio album by Albatross Nepal™ which consists of eight singles.', '536575957634_sanotino_.jpg'),
(7, 'Ma Ra Malai', 'NRs. 5000', 'Ma Ra Malai (म र मलाई), released on 4 March 2014, is the third studio album by Albatross Nepal™. This album consists of eight singles. ', '883145079923_sanotino_.jpg'),
(8, 'Raat Ko Rani', 'NRs. 1500', 'Raat Ko Rani (रातको रानी),  released on 8 June 2020, is the fourth studio album by Albatross Nepal™ which consists of three singles.', '204047365629_sanotino_.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `artists`
--

CREATE TABLE `artists` (
  `id` int(20) NOT NULL,
  `image` varchar(512) NOT NULL,
  `instagram` varchar(512) NOT NULL,
  `name` varchar(512) NOT NULL,
  `role` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artists`
--

INSERT INTO `artists` (`id`, `image`, `instagram`, `name`, `role`) VALUES
(1, '734817420802_artist_.jpg', 'shirishdali', 'Shirish Dalli', 'Vocalist'),
(2, '690659171434_artist_.jpg', 'kismat_dshrestha', 'Kismat D. Shrestha', 'Drummer'),
(3, '411006534949_artist_.jpg', 'avayabajracharya/', 'Avaya Siddhi Bajracharya', 'Bassist'),
(4, '966553890565_artist_.jpg', 'sunnychaman', 'Sunny Manandhar', 'Lead Guitarist');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(20) NOT NULL,
  `name` varchar(512) NOT NULL,
  `email` varchar(512) NOT NULL,
  `password` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES
(3, 'Sacheen Bhattarai', 'sacheenb10@gmail.com', 'e64b78fc3bc91bcbc7dc232ba8ec59e0'),
(4, 'Sacheen Bhattarai', 'sacheenb10@gmail.com', 'e64b78fc3bc91bcbc7dc232ba8ec59e0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artists`
--
ALTER TABLE `artists`
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
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `artists`
--
ALTER TABLE `artists`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
