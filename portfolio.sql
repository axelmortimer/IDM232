-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 18, 2017 at 12:02 AM
-- Server version: 5.7.17-0ubuntu0.16.04.2
-- PHP Version: 7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `projectTitle` varchar(100) DEFAULT NULL,
  `courseImageSmall` varchar(200) DEFAULT NULL,
  `courseImageLarge` varchar(200) DEFAULT NULL,
  `tag` varchar(200) DEFAULT NULL,
  `description` text,
  `link` varchar(200) DEFAULT NULL,
  `tag-popup` varchar(50) DEFAULT NULL,
  `tag-popup-target` varchar(50) DEFAULT NULL,
  `tag-popup-window` varchar(50) DEFAULT NULL,
  `tag-popup-description` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `projectTitle`, `courseImageSmall`, `courseImageLarge`, `tag`, `description`, `link`, `tag-popup`, `tag-popup-target`, `tag-popup-window`, `tag-popup-description`) VALUES
(1, 'GORILLA VS. BEAR REDESIGN', 'media/gvb-small.jpg', 'media/gvb-large.jpg', 'gvb-redesign', 'Updating a music news site desperately in need of a responsive makeover', 'https://preview.uxpin.com/23d68bb08681c7466f13bd92cedb51b806bede75#/pages/67307022', 'gvb-redesign-popup', 'gvb-redesign-popup-target', 'gvb-redesign-window', 'This was the class project for IDM 212: We were tasked with redesigning a news site or blog that lacked responsive design. I chose Gorilla Vs. Bear, a music blog, because it had not updated its mobile site in years and was quite simple visually. I also saw the opportunity to add navigation features that would enhance the usability of the site. A big focus in this design was "Mobile First" design methodology. To read more, click the Case Study button.'),
(2, 'GOOGLE PLAY MUSIC DESKTOP REDESIGN', 'media/gpm-small.jpg', 'media/gpm-large.jpg', 'gplaymusic', 'Prioritizing what matters most to music listeners.', 'https://invis.io/PZ9ILXPEF', 'gplaymusic-popup', 'gplaymusic-popup-target', 'gplaymusic-window', 'This was a class project for IDM 211: User Interface Design I. We were tasked with redesigning a desktop interface, whether that was a website, video game, GUI application, etc. I chose Google Play Music because after using it for a few months, I felt that the information architecture was random and chaotic. This was my first attempt at redesigning anything, and I am proud of what I was able to accomplish. I learned a lot about why Google uses aspects of Material Design in the way they do, which has been a great basis for the rest of my design career at Drexel.'),
(3, 'JIMMY\'S TRUCK ORDERING APP', 'media/jimmysapp-small.jpg', 'media/jimmysapp-large.jpg', 'jimmysapp', 'Enhancing the user experience of a Drexel favorite.', '#', 'jimmysapp-popup', 'jimmysapp-popup-target', 'jimmysapp-window', 'This was a mobile application designed for IDM 215: User Experience Design. The class project was to design a fake prototype for a Philadelphia food truck that could take mobile orders. Throughout the process, we followed a standard UX Design process as it was taught week-to-week. It was a group project, and my role was team manager, although by the end of the quarter these titles were being used very loosely. I learned a lot about the minute details that go into the UX process and how to collaborate your design vision with a team. You can read more about my experience in the case study linked below.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
