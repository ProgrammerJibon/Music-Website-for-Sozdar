-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2022 at 10:13 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_32`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(255) NOT NULL,
  `event_date` varchar(255) NOT NULL,
  `event_name` varchar(1024) NOT NULL,
  `event_location` varchar(255) NOT NULL,
  `event_contact` varchar(1024) NOT NULL DEFAULT 'N/A',
  `time` int(255) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_date`, `event_name`, `event_location`, `event_contact`, `time`) VALUES
(1, '31 December 2022', '31st night', 'los angels', 'www.celebrate-los-angels-31st-night.com', 0),
(3, 'Wednesday, 15 Aug, 2012', 'Shok dibos', 'Rescorse moydan', 'mujib100.gov.bd', 1648926250);

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(255) NOT NULL,
  `name` varchar(1024) NOT NULL,
  `value` longtext NOT NULL,
  `time` int(255) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `name`, `value`, `time`) VALUES
(1, 'logo', 'uploads/2022/Apr/image-1648923904-54709033.png', 0),
(2, 'title', 'REVERSE MUSIC', 0),
(3, 'top_banner', 'uploads/2022/Apr/image-1648922024-133939101.jpeg', 0),
(4, 'facebook', 'https://www.facebook.com/musicbyreverse/', 0),
(5, 'twitter', 'https://twitter.com/REVERSE_MUSIC5', 0),
(6, 'instagram', 'https://www.instagram.com/music.reverse/', 0),
(7, 'spotify', 'https://open.spotify.com/artist/2mP4JDbd7FikmTaymCT5tt?si=Yh2_p516QhObJ-hiF80nCg', 0),
(8, 'youtube', 'https://www.youtube.com/channel/UCR_JXmzgA0qMMIx_5HkT_GQ', 0),
(10, 'about_me', 'Iranian-born DJ/Producer based in Germany\r\nOver 10 Million of Streams on Spotify\r\nSigned to labels like Selected. and Hexagon\r\nSupported by Don Diablo, Nicky Romero, Austin Kramer, Tomorrowland one-world Radio, Spinnin records, Future house music and many more\r\nReached top 100 most supported tracks on 1001 Tracklist\r\nBest track of the week on Lucas and Steve and Teammbl Radio show\r\nPlayed at 88.6FM Melbourne, Australia', 0),
(11, 'email', 'REVERSE.Music5@gmail.com', 0),
(12, 'booking_email', 'booking.reversemusic@gmail.com', 0),
(13, 'soundcloud', 'https://soundcloud.com/ali-kh', 0),
(14, 'apple_music', 'https://music.apple.com/us/artist/reverse/1274564451', 0),
(15, 'phone', '+880165XXXXXXXXX', 0),
(16, 'address', 'Madhabpasha, Barisal', 0),
(17, 'password', '2853d3544f105dd7b0bc4376e4f55c14', 0);

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(255) NOT NULL,
  `title` varchar(1024) NOT NULL DEFAULT 'N/A',
  `took_date` varchar(1024) NOT NULL,
  `pic` longtext NOT NULL,
  `time` int(255) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `title`, `took_date`, `pic`, `time`) VALUES
(1, 'N/A', '2011-7-10', '/cdn/0.jpg', 0),
(2, 'N/A', '2011-7-10', '/cdn/1.jpg', 0),
(3, 'N/A', '2011-7-10', '/cdn/2.jpg', 0),
(4, 'N/A', '2011-7-10', '/cdn/3.jpg', 0),
(5, 'N/A', '2011-7-10', '/cdn/4.jpg', 0),
(6, 'N/A', '2011-7-10', '/cdn/5.jpg', 0),
(7, 'N/A', '2011-7-10', '/cdn/6.jpg', 0),
(8, 'N/A', '2011-7-10', '/cdn/7.jpg', 0),
(9, 'N/A', '2011-7-10', '/cdn/8.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `subscribed`
--

CREATE TABLE `subscribed` (
  `id` int(255) NOT NULL,
  `email` varchar(1024) NOT NULL,
  `ip` varchar(1024) NOT NULL,
  `time` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribed`
--
ALTER TABLE `subscribed`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `subscribed`
--
ALTER TABLE `subscribed`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
