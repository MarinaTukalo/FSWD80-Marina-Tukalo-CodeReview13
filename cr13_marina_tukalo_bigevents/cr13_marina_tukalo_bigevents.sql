-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2019 at 04:46 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cr13_marina_tukalo_bigevents`
--
CREATE DATABASE IF NOT EXISTS `cr13_marina_tukalo_bigevents` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cr13_marina_tukalo_bigevents`;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `eventDateTime` datetime NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `capacity` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `webpage` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `eventType` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `eventDateTime`, `description`, `image`, `capacity`, `email`, `phone`, `address`, `webpage`, `eventType`) VALUES
(1, 'Ice Skating at Rathausplatz', '2019-12-23 11:00:00', 'Come to Vienna for the ultimate magical winter experience: outdoor ice skating in Austria\'s capital.', 'https://www.wien.info/media/images/eistraum-rathaus-burgtheater-3to2.jpeg', 'unlimited', 'iceskating@vienna.at', '01356488', 'Rathausplatz, 1010 Wien', 'https://www.wienerweihnachtstraum.at/en/the-little-ice-dream/', 'sport'),
(3, 'Jumanji: The Next Level', '2019-12-12 19:00:00', 'In Jumanji: The Next Level, the gang is back but the game has changed. As they return to rescue one of their own, the players will have to brave parts unknown from arid deserts to snowy mountains, to escape the world\'s most dangerous game.', 'https://express-images.franklymedia.com/6616/sites/380/2019/10/31113334/Jumanji-652x512.png', '585', 'cinema@millennium-city.at', '01 33760', 'Wehlistraße 66, 1200 Wien', 'https://www.cineplexx.at/film/jumanji-2/', 'movie'),
(4, 'Holiday on Ice SHOWTIME', '2020-01-29 18:00:00', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata', 'https://holidayonice.com/core/wp-content/uploads/sites/2/2019/03/Showtime_Holiday_on_Ice-1.jpg', '1000', 'ice@show.com', '123123', 'Vienna Cityhall', 'https://www.stadthalle.com/en/schauen/events/799/Holiday-on-Ice-SHOWTIME', 'theater'),
(5, '\"Peer Gynt\" von Henrik Ibsen', '2019-12-07 19:30:00', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata', 'https://filmfestival-rathausplatz.at/typo3temp/_processed_/csm_Peer_Gynt_1_ENSEMBLE_A_c__Wiener_Staatsballett_Ashley_Taylor_f0d6573659.jpg', '1500', 'volkstheater@vienna.at', '123123', 'Main Street 4, 1010 Vienna', 'http://www.volkstheater.at/stueck/peer-gynt/', 'theater'),
(6, 'Sisi Museum', '2020-01-06 11:00:00', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata', 'https://images.musement.com/cover/0001/28/vienna-hofburg-palace-ticket-and-tour-with-audioguide_header-27806.jpeg', '500', 'hofburg@vienna.at', '123123', 'Main Street 4, 1010 Vienna', 'https://www.hofburg-wien.at/', 'museum');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
