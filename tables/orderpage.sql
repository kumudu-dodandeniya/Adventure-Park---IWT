-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2020 at 03:20 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `orderpage`
--

CREATE TABLE `orderpage` (
  `id` int(11) NOT NULL,
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `packages` enum('g','s','b','') NOT NULL,
  `address1` varchar(100) NOT NULL,
  `phone` int(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderpage`
--

INSERT INTO `orderpage` (`id`, `firstName`, `lastName`, `packages`, `address1`, `phone`, `email`, `date`) VALUES
(1, 'Janaki', 'Silva', 'b', 'Valivita,Malabe', 728976103, 'JanakiS@gmail.com', '2020-11-04'),
(2, 'Kavindu', 'Ganganath', 'b', '172,Richmond Hill Road', 728640330, 'kavindu35@gmail.com', '2020-10-29'),
(3, 'Sanjani', 'Gamage', 'b', '172,Galketiya Road,Galle', 768845009, 'Sanjani@gmail.com', '2020-11-11'),
(4, 'Manisha', 'Perera', 's', '167,Bokundara Road,Maharagama', 768994098, 'Manisha56@gmail.com', '2020-11-06'),
(5, 'Romesh', 'Withanage', 'g', 'F233,Wandela Road,Polgahawela', 726440229, 'romesh@gmail.com', '2020-11-11'),
(6, 'Malith', 'Lasika', 's', '234,Kahatagasthenna,Ruwanwella', 768400958, 'malith34@gmail.com', '2020-10-29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orderpage`
--
ALTER TABLE `orderpage`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orderpage`
--
ALTER TABLE `orderpage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
