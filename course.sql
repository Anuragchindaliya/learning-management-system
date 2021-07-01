-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2021 at 01:08 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_28626503_geek`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(255) COLLATE utf8_bin NOT NULL,
  `course_desc` text COLLATE utf8_bin NOT NULL,
  `course_category` varchar(20) COLLATE utf8_bin NOT NULL DEFAULT 'coursePlaceholder',
  `course_level` enum('0','1','2') COLLATE utf8_bin NOT NULL,
  `course_author` varchar(255) COLLATE utf8_bin NOT NULL,
  `course_img` text COLLATE utf8_bin NOT NULL,
  `course_duration` int(11) NOT NULL,
  `course_mrp` int(11) NOT NULL,
  `course_price` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`, `course_desc`, `course_category`, `course_level`, `course_author`, `course_img`, `course_duration`, `course_mrp`, `course_price`, `created_at`) VALUES
(77, 'working fine', 'baby awesome', 'Vue', '2', 'sunil', 'C:fakepathanuragweb.jpg', 0, 0, 0, '2021-05-20 20:01:19'),
(78, 'Lean wordpress', 'Advance custom wordpress', 'HTML', '2', 'sunil', 'C:fakepath19350.jpg', 0, 0, 0, '2021-05-23 14:09:51'),
(79, 'Laravel from basic to advance', 'Laravel is php Framework', 'Laravel', '0', 'sunil', 'C:fakepath19350.jpg', 0, 0, 0, '2021-05-23 14:17:33'),
(80, 'Gatsby', 'javascript library, static webpage Generator', 'Gatsby', '0', 'sunil', 'C:fakepath19350.jpg', 0, 0, 0, '2021-05-23 14:51:33'),
(81, 'Node', 'node provide runtime environment for javascript', 'node', '0', 'sunil', 'C:fakepath19350.jpg', 0, 0, 399, '2021-05-23 14:55:41'),
(82, 'Lean AI with python', 'real word project with AI using python', 'python', '2', 'sunil', 'C:fakepath19350.jpg', 0, 0, 490877, '2021-05-23 15:10:17'),
(83, 'learn Bootstrap from scratch with utility', 'Bootstrap framework is a css framework which help in rapid developement', 'bootstrap', '2', 'sunil', 'C:fakepath19350.jpg', 0, 0, 599999, '2021-05-23 15:20:30'),
(84, 'sass Lang', 'css preprocessor', 'css', '2', 'sunil', 'C:fakepath19350.jpg', 0, 0, 3999, '2021-05-23 15:39:49'),
(85, 'HTML : Advance html', 'html from beginner to advance', 'html', '2', 'sunil', 'C:fakepath19350.jpg', 0, 0, 8555, '2021-05-24 11:05:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
