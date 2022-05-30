-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2022 at 11:59 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nftuser`
--

-- --------------------------------------------------------

--
-- Table structure for table `cardcreation`
--

CREATE TABLE `cardcreation` (
  `userid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `descriptions` varchar(2555) NOT NULL,
  `salesprice` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `getUserid` int(11) NOT NULL,
  `view` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cardcreation`
--

INSERT INTO `cardcreation` (`userid`, `name`, `descriptions`, `salesprice`, `image`, `getUserid`, `view`) VALUES
(339, 'Sean', 'hello I\'m a freelancer web dev and digital painter', '200', 'anotherme.jpg', 74, 0),
(340, 'claude', 'hello I\'m a freelancer web dev and digital painter', '12', 'CaelJPEGJPEGJPEGJPEGJPEGJPEGJPEGJPEGCAEL.jpg', 72, 0),
(341, 'claude', 'hello I\'m a freelancer web dev and digital painter', '12', 'necromancerJPEGG.jpg', 73, 0),
(343, 'claude', 'He wandered down the stairs and into the basement. The damp, musty smell of unuse hung in the air. A single, small window let in a glimmer of light, but this simply made the shadows in the basement deeper. He inhaled deeply and looked around at a mess that had been accumulating for over 25 years. He was positive that this was the place he wanted to live.', '100', 'NUMBER-04JPEG.jpg', 75, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `repassword` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `password`, `repassword`, `status`) VALUES
(72, 'benjie', '$2y$10$zl5PaKVLN.Hjh/Eeh8wEGeJwBTfRzBrQ2.SVvfdZDzaSAhJYDBGqu', '$2y$10$ChuWaumNXN7DNdXgAKmW2e.MjbULu6yiKIOX0ucVCDaZy6jnDISVS', 0),
(73, 'yasuo', '$2y$10$t/uh27pKQ5WahpIAA9Xjnuj.mtS/Qa0DlNi31SBW.kdhSXbxXFvum', '$2y$10$5myXrYeRfqZs6EmD5vcHeuc9TH/9OWAZIubU3V3eLEr1fwZaYsJj2', 0),
(74, 'silvano', '$2y$10$yEVBLF30Sl/2zoamJQ/9nuBdA6sXQLoRH8u7uMuQy565CUOO7ceDu', '$2y$10$rl0pPFsxv2vPBu4mbE1WTuiGVZNCU2AzXDbsO8zMhxmU1bZROBsMm', 0),
(75, 'kakarot', '$2y$10$dEIjhd9i0x9vOW4vKDKet.02QjPd0ezdVwYa.uhdD895/KJKYjUUG', '$2y$10$JxsA5J4efDeNrEYEfwjAMOpd7dbiSnmOv3SyeP0YJV6yvRnzgJeiK', 1);

-- --------------------------------------------------------

--
-- Table structure for table `userprofile`
--

CREATE TABLE `userprofile` (
  `bio_id` int(11) NOT NULL,
  `bio` longtext NOT NULL,
  `userid` int(11) NOT NULL,
  `cover_photo` varchar(255) NOT NULL,
  `profile_photo` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userprofile`
--

INSERT INTO `userprofile` (`bio_id`, `bio`, `userid`, `cover_photo`, `profile_photo`, `instagram`, `twitter`) VALUES
(85, 'Sometimes it\'s simply better to ignore the haters. That\'s the lesson that Tom\'s dad had been trying to teach him, but Tom still couldn\'t let it go. He latched onto them and their hate and couldn\'t let it go, but he also realized that this wasn\'t healthy. That\'s when he came up with his devious plan.', 73, 'COVERJPEG.jpg', 'METIFFFFFJPEGJPEG.jpg', 'https://www.youtube.com/channel/UC9voLGh2JAZtN2ND-Z8Yh1g', 'https://www.facebook.com/benjie.silvano.3720/'),
(86, 'Debbie knew she was being selfish and unreasonable. She understood why the others in the room were angry and frustrated with her and the way she was acting. In her eyes, it didn\'t really matter how they felt because she simply didn\'t care.', 72, '1500x500.jpg', 'MEJPEGWITHBADTZMARU.jpg', 'https://paras.id/kratoss.near/collectibles', 'https://paras.id/kratoss.near/collectibles'),
(87, 'hello I\'m a freelancer web dev and digital painter ', 74, 'LOGOJPEG.jpg', 'GAMERJPEG.jpg', 'https://www.instagram.com/kratoss.near/', 'https://twitter.com/benjie_silvano'),
(88, 'hello I\'m a freelancer web dev and digital painter', 75, 'LOGOJPEG.jpg', 'FIRECARROTMANJPEG.jpg', 'https://www.instagram.com/kratoss.near/', 'https://twitter.com/benjie_silvano');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cardcreation`
--
ALTER TABLE `cardcreation`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `userprofile`
--
ALTER TABLE `userprofile`
  ADD PRIMARY KEY (`bio_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cardcreation`
--
ALTER TABLE `cardcreation`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=344;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `userprofile`
--
ALTER TABLE `userprofile`
  MODIFY `bio_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
