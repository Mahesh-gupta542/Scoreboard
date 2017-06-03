-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2017 at 01:15 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scoreboard_db`
--
CREATE DATABASE IF NOT EXISTS `scoreboard_db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `scoreboard_db`;

-- --------------------------------------------------------

--
-- Table structure for table `sb_players`
--

CREATE TABLE `sb_players` (
  `player_id` int(10) NOT NULL,
  `player_name` varchar(50) NOT NULL,
  `player_score` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Table will store the name of the players and their score.';

--
-- Dumping data for table `sb_players`
--

INSERT INTO `sb_players` (`player_id`, `player_name`, `player_score`) VALUES
(1, 'Ken Murphy', 165),
(2, 'Mark Jackson', 185),
(3, 'Sheila Abbott', 60),
(4, 'Susan Sullivan', 55);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sb_players`
--
ALTER TABLE `sb_players`
  ADD UNIQUE KEY `player_id` (`player_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
