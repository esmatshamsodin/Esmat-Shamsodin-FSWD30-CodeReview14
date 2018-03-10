-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2018 at 04:19 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cr14_esmat_shamsodin_bigevents`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `description` varchar(200) NOT NULL,
  `capacity` int(55) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phonnumber` int(55) NOT NULL,
  `address` varchar(200) NOT NULL,
  `URL` varchar(200) NOT NULL,
  `type` varchar(55) NOT NULL,
  `image` varchar(200) NOT NULL,
  `startday` date NOT NULL,
  `starttime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `description`, `capacity`, `email`, `phonnumber`, `address`, `URL`, `type`, `image`, `startday`, `starttime`) VALUES
(1, 'Operas in Vienna', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, ', 550, 'admin@admin.com', 688960011, 'kohlgasse 1050 wien', 'Vienna State Opera', 'music', ' https://www.viennaconcerts.com/images/opera-history3.jpg', '2018-09-10', '14:30:00'),
(2, 'Carnival competition', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, ', 400, 'admin@admin.com', 688960011, 'Museumsquartier, Vienna, 1070 Wien', 'https://www.gayinvienna.com/en/events-0', 'music', ' https://www.gayinvienna.com/sites/www.gayinvienna.com/files/styles/giv_large/public/p1020519_0_0.jpg?itok=fq8KEAQi', '2018-05-12', '09:00:00'),
(3, 'Sport & Wellness', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, ', 954, 'admin@admin.com', 954867123, 'Fuhrmannsgasse 18, 1080 Wien', 'https://www.wien.info/en/vienna-for/sports', 'sport', ' https://www.wien.info/media/images/wings-for-life-world-run-2017-vienna-start-teilnehmer-19to1.jpeg', '2018-03-21', '12:00:00'),
(4, 'Ball des sport', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, ', 562, 'admin@admin.com', 56231456, 'Klabundgasse 11, 1190 Wien', 'http://vienna2017.fivb.com/', 'sport', ' http://www.fivb.org/Vis2009/Images/GetImage.asmx?No=71220&type=Press&width=947&height=598&stretch=uniformtofill', '2018-08-21', '12:00:00'),
(5, '27th Music Film Festival 2017', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, ', 1000, 'admin@admin.com', 87594621, 'Rathausplatz, 1010 Wien', 'www.filmfestivalrathausplatz.at', 'movie', 'https://www.wien.info/media/images/40768-musikfilm-festival-am-rathausplatz-3to2.jpeg/image_gallery', '0000-00-00', '00:00:00'),
(6, 'FILM FESTIVAL AUF DEM WIENER RATHAUSPLATZ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, ', 456, 'admin@admin.com', 741258, 'Friedrich-Schmidt-Platz 1, 1010 Wien', 'http://wien-event.at/unsere-events/film-festival/', 'movie', 'http://wien-event.at/uploads/tx_bannerrot/Filmfestival_2_01.png', '0000-00-00', '00:00:00'),
(7, 'Bruno Gironcoli. Shy at Work', 'Bruno Gironcoli is one of the most idiosyncratic artists of the twentieth century. He gained public recognition with his late large-scale sculptures, in which archetypes and trivial elements meld to f', 410, 'admin@admin.com', 68896001, 'Herzgasse79/38 1100 ', 'https://events.wien.info/en/uvt/bruno-gironcoli-shy-at-work/', 'movie', 'https://events.wien.info/media/full/30515_1.jpg', '0000-00-00', '00:00:00'),
(8, 'The Magic Flute', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,', 450, 'admin@admin.com', 688960011, 'Schloss SchÃ¶nbrunn, Hofratstrakt  1130 Wien', 'www.wien-ticket.at', 'music', 'https://events.wien.info/media/full/kinderzauberfl%C3%B6te_1_1.jpg', '0000-00-00', '00:00:00'),
(9, 'Scrume', 'This training is provided by Omni212 headquartered in Bellevue, WA. Omni212 is an authorized training partner for VMEdu, a global Agile & Scrum education provider. For more information, please visit', 500, 'admin@admin.com', 688960011, 'Instructor Led Online | Video Conference 1010 wien', 'https://www.omni212.com/services/training/', 'movie', 'https://img.evbuc.com/https%3A%2F%2Fcdn.evbuc.com%2Fimages%2F41670000%2F48810397700%2F1%2Foriginal.jpg?w=800&rect=0%2C0%2C300%2C150&s=c2824d6a4d3d5353b75738178fc86a17', '2018-03-31', '00:00:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `userName` varchar(30) NOT NULL,
  `userEmail` varchar(60) NOT NULL,
  `userPass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userName`, `userEmail`, `userPass`) VALUES
(1, 'admin', 'admin@admin.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `userEmail` (`userEmail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
