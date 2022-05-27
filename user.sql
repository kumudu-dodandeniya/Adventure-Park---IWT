-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2020 at 02:03 PM
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
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(20) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `first_name`, `last_name`, `email`, `mobile`, `username`, `password`, `is_admin`) VALUES
(1, 'Loneth', 'Gunathilaka', 'Lonethgunathilaka@gmail.com', '0772628297', 'lonethgunathilaka', '6*$=$829', 0),
(2, 'Gayasha', 'Isurandi', 'gayasha@gmail.com', '0718987709', 'IT20102432', 'm20Xu00q', 1),
(3, 'Tharupa', 'Sandeepani', 'Tharupa@gmail.com', '07158724109', 'Tharu', 'Tharu@9965', 0),
(4, 'Kaveen', 'Dissanayaka', 'kaveendissanayaka@gmail.com', '0725643789', 'Kavee', 'Car@664', 0),
(5, 'Tharidu', 'Gamage', 'Tharidugamage@gmail.com', '0715837190', 'Tharidu@4', 'tharidu@456', 0),
(6, 'kumudu', 'madushani', 'kumudu@gmail.com', '0713810143', 'kumudu123', '18541', 1),
(7, 'Oshadha', 'Mihiran', 'mihirankura@gmail.com', '0718546784', 'mihirankura', 'kura@123', 1),
(8, 'Kawshika', 'Indunil', 'kawshika@gmail.com', '0713497208', 'kawshikaindunil', '123456', 1),
(9, 'Chathura ', 'Malshan', 'malshan14@gmail.com', '0728439728', 'chathura', 'asd147', 0),
(17, 'Janaki', 'Silva', 'JanakiS@gmail.com', '0728976103', 'Jsilva', 'JS@185', 0);

-- --------------------------------------------------------

--
-- Table structure for table `facility`
--

CREATE TABLE `facility` (
  `packageName` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL,
  `price` int(50) NOT NULL,
  `id2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `facility`
--

INSERT INTO `facility` (`packageName`, `description`, `price`, `id2`) VALUES
('Silver', 'Adventure Sports | A/C Caban House ', 10000, 13),
('Bronze', 'Adventure Sports', 5000, 14),
('Gold', 'Adventure Sports | A/C Caban House | Pool | Gym ', 20000, 15);

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
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facility`
--
ALTER TABLE `facility`
  ADD PRIMARY KEY (`id2`);

--
-- Indexes for table `orderpage`
--
ALTER TABLE `orderpage`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `facility`
--
ALTER TABLE `facility`
  MODIFY `id2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `orderpage`
--
ALTER TABLE `orderpage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
