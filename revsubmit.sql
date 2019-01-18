-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2019 at 01:10 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `revsubmit`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` int(5) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `username`, `password`, `email`) VALUES
(1, 'test', '$2y$10$BnNK5P6B6XOqEDovTqkPNOf2UKnBOqoPc.3Wo8SwUOzdIyqPE80m6', 'test'),
(2, 'test', '$2y$10$2zciuz9Q/pFJ9CXkiZgJ/OuCcC.XXHBPvHF4mRDpyhzGuxDSLuEWu', 'test'),
(3, 'test', '$2y$10$K7qHOHVPojxiKCrAR0Il/e8geD1K9LbbuXxRHVumOgmrMJPFbik02', 'test'),
(4, 'test', '$2y$10$Ydb9gGcgPeNmT9f77CsDbevRbEqLTGj8XTVuGk2AdzZCNToxXXuBa', 'cazhnet@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `blogID` int(5) NOT NULL,
  `vloggerID` int(5) NOT NULL,
  `vloggerWebsite` int(11) NOT NULL,
  `fans` int(11) DEFAULT NULL,
  `stats_recieved` int(11) DEFAULT NULL,
  `notes` text NOT NULL,
  `stats_reponse_rate` int(11) DEFAULT NULL,
  `stats_approve` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(5) NOT NULL,
  `authorID` int(5) DEFAULT NULL,
  `bookName` text,
  `Description` text NOT NULL,
  `Genre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `authorID`, `bookName`, `Description`, `Genre`) VALUES
(1, 1, 'fsdf', 'gdfg', 'dfg'),
(2, 1, 'fsdf', 'gdfg', 'dfg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
