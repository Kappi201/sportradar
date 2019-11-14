-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2019 at 06:24 PM
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
-- Database: `sportradar`
--

-- --------------------------------------------------------

--
-- Table structure for table `dates`
--

CREATE TABLE `dates` (
  `id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `team_a_id` int(11) NOT NULL,
  `team_b_id` int(11) NOT NULL,
  `location_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dates`
--

INSERT INTO `dates` (`id`, `date`, `team_a_id`, `team_b_id`, `location_id`) VALUES
(2, '2019-10-20 08:45:00', 3, 4, 1),
(20, '2019-11-08 04:05:00', 2, 1, 1),
(24, '2019-10-10 08:09:00', 1, 2, 1),
(25, '1999-09-09 03:05:00', 3, 4, 1),
(27, '2019-11-14 05:01:00', 1, 2, 1),
(28, '2019-12-15 15:00:00', 15, 16, 4);

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `name`, `address`) VALUES
(1, 'Eissportzentrum Klagenfurt', '9020 Klagenfurt am Woerthersee, Oesterreich'),
(2, 'Merkur Arena', 'Stadionpl. 1, 8041 Graz, Oesterreich'),
(4, 'Allianz Stadion', 'Gerhard-Hanappi-Platz 1, 1140 Wien, Ã–sterreich'),
(5, 'Generali Arena', 'Horrpl. 1, 1100 Wien, Ã–sterreich');

-- --------------------------------------------------------

--
-- Table structure for table `sports`
--

CREATE TABLE `sports` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sports`
--

INSERT INTO `sports` (`id`, `name`) VALUES
(1, 'Eishockey'),
(2, 'Fussball'),
(4, 'Basketball');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sport_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `sport_id`) VALUES
(1, 'FC Red Bull Salzburg', 2),
(2, 'SK Sturm Graz', 2),
(3, 'EC KAC', 1),
(4, 'Vienna Capitals', 1),
(15, 'Rapid Wien', 2),
(16, 'Austria Wien', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dates`
--
ALTER TABLE `dates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sports`
--
ALTER TABLE `sports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dates`
--
ALTER TABLE `dates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sports`
--
ALTER TABLE `sports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
