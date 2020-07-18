-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2020 at 05:35 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cr10_admirsaraseli_biglibrary`
--
CREATE DATABASE IF NOT EXISTS `cr10_admirsaraseli_biglibrary` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cr10_admirsaraseli_biglibrary`;

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `author_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`author_id`, `name`) VALUES
(1, 'Stephenie Meyer'),
(2, 'Dan Brown'),
(3, 'Arthur Golden'),
(4, 'Oscar Wilde'),
(9, 'Dua Lipa'),
(10, 'The Weeknd'),
(11, 'Wagner Moura'),
(12, 'Chris Bender'),
(13, 'Jerry Bruckheimer'),
(14, 'Joe Russo'),
(15, 'Kevin Parker');

-- --------------------------------------------------------

--
-- Table structure for table `medias`
--

CREATE TABLE `medias` (
  `media_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `image` varchar(500) NOT NULL,
  `isbn` varchar(50) NOT NULL,
  `description` varchar(300) NOT NULL,
  `publish_date` date NOT NULL,
  `type` varchar(50) NOT NULL,
  `author_id` int(11) NOT NULL,
  `publisher_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medias`
--

INSERT INTO `medias` (`media_id`, `title`, `status`, `image`, `isbn`, `description`, `publish_date`, `type`, `author_id`, `publisher_id`) VALUES
(9, 'Twilight', 0, 'https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1361039443l/41865.jpg', '0316015849 ', 'Edward was a vampire and there was a part of him that I did not know how dominant might be that thirsted for my blood. ', '2005-10-05', 'book', 1, 1),
(10, 'The Da Vinci Code', 0, 'https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1579621267l/968.jpg', '0307277674 ', 'The Da Vinci Code is a mystery thriller novel by Dan Brown.It is second novel to include the character Robert Langdon.', '2003-03-18', 'book', 2, 2),
(11, 'Memoirs of a Geisha', 0, 'https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1409595968l/929.jpg', '1400096898 ', 'A literary sensation and runaway bestseller, presents the true confessions of one of Japan\'s most celebrated geisha.', '2005-11-22', 'book', 3, 3),
(12, 'The Picture of Dorian Gray', 0, 'https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1454087681l/489732._SY475_.jpg', '0141439572 ', 'Enthralled by his own exquisite portrait, Dorian Gray exchanges his soul for eternal youth and beauty. ', '2003-01-30', 'book', 4, 4),
(16, 'Future Nostalgia', 1, 'https://upload.wikimedia.org/wikipedia/en/thumb/f/f5/Dua_Lipa_-_Future_Nostalgia_%28Official_Album_Cover%29.png/220px-Dua_Lipa_-_Future_Nostalgia_%28Official_Album_Cover%29.png', '0307277674', 'Future Nostalgia is the second studio album by English singer Dua Lipa, released on 27 March 2020 by Warner Records.', '2020-03-27', 'cd', 9, 9),
(17, 'After Hours', 1, 'https://upload.wikimedia.org/wikipedia/en/thumb/c/c1/The_Weeknd_-_After_Hours.png/220px-The_Weeknd_-_After_Hours.png', '1411096891', 'After Hours is the fourth studio album by Canadian singer The Weeknd. The standard edition has no features.', '2020-03-20', 'cd', 10, 10),
(18, 'Sergio', 1, 'https://upload.wikimedia.org/wikipedia/en/thumb/d/da/Sergio_poster.jpeg/220px-Sergio_poster.jpeg', '0307274444', 'Sergio is a 2020 American biographical drama film about the United Nations diplomat Sérgio Vieira de Mello.', '2020-01-28', 'dvd', 11, 11),
(19, 'My Spy', 1, 'https://upload.wikimedia.org/wikipedia/en/thumb/2/26/My_Spy_poster.jpg/220px-My_Spy_poster.jpg', '0307288874', 'The film follows a CIA agent who finds himself at the mercy of a precocious nine-year-old girl.', '2020-01-09', 'dvd', 12, 12),
(20, 'Bad Boys for Life', 1, 'https://upload.wikimedia.org/wikipedia/en/9/90/Bad_Boys_for_Life_poster.jpg', '0307274113', 'Bad Boys for Life is a 2020 American action comedy film that is the sequel to Bad Boys II (2003) and the third installment in the Bad Boys film series.', '2020-01-17', 'dvd', 13, 13),
(21, 'Extraction', 1, 'https://upload.wikimedia.org/wikipedia/en/thumb/8/89/Extraction_%282020_film%29.png/220px-Extraction_%282020_film%29.png', '1237274478', 'Extraction is a 2020 American action-thriller film directed by Sam Hargrave (in his feature debut) and written by Joe Russo.', '2020-04-24', 'dvd', 14, 14),
(22, 'The Slow Rush', 1, 'https://upload.wikimedia.org/wikipedia/en/thumb/5/54/Tame_Impala_-_The_Slow_Rush.png/220px-Tame_Impala_-_The_Slow_Rush.png', '2227277674', 'The Slow Rush is the fourth studio album by Australian musical project Tame Impala, released on 14 February 2020.', '0000-00-00', 'cd', 15, 15);

-- --------------------------------------------------------

--
-- Table structure for table `publishers`
--

CREATE TABLE `publishers` (
  `publisher_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `size` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `publishers`
--

INSERT INTO `publishers` (`publisher_id`, `name`, `size`, `address`) VALUES
(1, 'Little, Brown and Company', 'big', '53 State St, Boston, MA 02109, United States'),
(2, 'Doubleday (US) Transworld & Bantam Books (UK)', 'big', '20 Vauxhall Bridge Rd, London,'),
(3, 'Vintage Books USA', 'medium', 'New York City'),
(4, ' Penguin Classics', 'medium', 'Westminster, London, England.'),
(9, 'Warner', NULL, NULL),
(10, 'XO & Republic Records', NULL, NULL),
(11, 'Netflix', NULL, NULL),
(12, 'Amazon Studios', NULL, NULL),
(13, 'Sony Pictures Releasing', NULL, NULL),
(14, 'Netflix', NULL, NULL),
(15, 'Modular', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`author_id`);

--
-- Indexes for table `medias`
--
ALTER TABLE `medias`
  ADD PRIMARY KEY (`media_id`),
  ADD KEY `author_id` (`author_id`),
  ADD KEY `publisher_id` (`publisher_id`);

--
-- Indexes for table `publishers`
--
ALTER TABLE `publishers`
  ADD PRIMARY KEY (`publisher_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `author_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `medias`
--
ALTER TABLE `medias`
  MODIFY `media_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `publishers`
--
ALTER TABLE `publishers`
  MODIFY `publisher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `medias`
--
ALTER TABLE `medias`
  ADD CONSTRAINT `medias_ibfk_1` FOREIGN KEY (`author_id`) REFERENCES `authors` (`author_id`),
  ADD CONSTRAINT `medias_ibfk_2` FOREIGN KEY (`publisher_id`) REFERENCES `publishers` (`publisher_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
