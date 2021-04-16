-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2021 at 06:42 AM
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
-- Database: `office_sports`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_user`
--

CREATE TABLE `admin_user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_user`
--

INSERT INTO `admin_user` (`id`, `name`, `email`, `password`, `added_on`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin123', '2021-03-26 07:21:29');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `title`, `description`, `image`, `status`, `added_on`) VALUES
(2, 'Test 1`', 'testingrfgthrt', '23423439_20170922_095059.jpg', 1, '2021-03-26 07:33:55'),
(3, 'Tesing 1', 'Testing', '66202624_20170922_112557.jpg', 1, '2021-03-26 09:28:39');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`c_id`, `c_name`, `description`, `image`, `status`, `added_on`) VALUES
(3, 'Cricket ', 'There is a consensus of expert opinion that cricket may have been invented during Saxon or Norman times by children living in the Weald, an area of dense woodlands and clearings in south-east England.   \r\n\r\nhe man most responsible for the transition from this rugby-like game to the sport of football we know today was Walter Camp, known as the “Father of American Football.” As a Yale undergraduate and medical student from 1876 to 1881, he played halfback and served as team captain, equivalent to head coach at the time..', '70186709_1088580.jpg', 1, '2021-03-26 07:45:11'),
(4, 'Football', 'he man most responsible for the transition from this rugby-like game to the sport of football we know today was Walter Camp, known as the “Father of American Football.” As a Yale undergraduate and medical student from 1876 to 1881, he played halfback and served as team captain, equivalent to head coach at the time. \r\n\r\nhe man most responsible for the transition from this rugby-like game to the sport of football we know today was Walter Camp, known as the “Father of American Football.” As a Yale undergraduate and medical student from 1876 to 1881, he played halfback and served as team captain, equivalent to head coach at the time..', '41918756_bxh4faL.jpg', 1, '2021-03-26 08:08:49'),
(5, 'Volleyball', 'In 1916, the skills of set and spike were originated during a match in the Philippines.  \r\n\r\nhe man most responsible for the transition from this rugby-like game to the sport of football we know today was Walter Camp, known as the “Father of American Football.” As a Yale undergraduate and medical student from 1876 to 1881, he played halfback and served as team captain, equivalent to head coach at the time..', '44978940_maxresdefault.jpg', 1, '2021-03-26 08:10:51');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` int(11) NOT NULL,
  `msg` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `mobile`, `msg`, `status`, `added_on`) VALUES
(1, 'azhar', 'azhar.coderr@gmail.com', 1655542523, 'TESTING', 1, '2021-03-26 08:29:02'),
(4, 'mike', 'mike@gmail.com', 2147483647, 'test', 1, '2021-03-30 04:37:03');

-- --------------------------------------------------------

--
-- Table structure for table `enquery`
--

CREATE TABLE `enquery` (
  `id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` int(11) NOT NULL,
  `msg` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enquery`
--

INSERT INTO `enquery` (`id`, `c_id`, `name`, `email`, `mobile`, `msg`, `status`, `added_on`) VALUES
(1, 4, 'Abc', 'abc@gmail.com', 1655542523, 'testing', 1, '2021-03-26 08:29:28'),
(2, 0, 'abc', 'abc@gmail.com', 1655542523, 'test', 1, '2021-03-27 05:32:18'),
(3, 0, 'admin', 'admin@gmail.com', 1655542523, 'test', 1, '2021-03-27 05:33:46'),
(4, 3, 'admin', 'admin@gmail.com', 2147483647, 'test', 1, '2021-03-27 05:35:51'),
(5, 5, 'azhar', 'azhar.coderr@gmail.com', 2147483647, 'test status', 1, '2021-03-27 05:41:07'),
(6, 0, 'sneha', 'azsq@g.c', 2147483647, 'asdwawdw', 1, '2021-03-27 05:56:29'),
(7, 0, 'admin', 'azhar.coderr@gmail.com', 2147483647, 'fg', 1, '2021-03-27 08:51:45'),
(8, 0, 'admin', 'azhar.coderr@gmail.com', 2147483647, 'n', 1, '2021-03-27 08:52:17'),
(9, 0, 'admin', 'u2@gmail.com', 2147483647, 'sdf', 1, '2021-03-27 08:55:35'),
(10, 0, 'azharawewr', 'awdawdw@a.d', 2147483647, 'sfesf', 1, '2021-03-27 09:09:35'),
(11, 5, 'sd', 'sara@gmail.com', 1655542523, 'test', 1, '2021-03-30 04:00:20'),
(12, 4, 'admin', 'admin@gmail.com', 1655542523, 'sd', 1, '2021-03-30 04:05:22'),
(13, 0, 'asdf', 'sdf@gmail.com', 2147483647, 'wsedf', 1, '2021-03-30 04:17:56');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `review` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `review`, `image`, `status`, `added_on`) VALUES
(1, 'Smith Doe', '“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do ei usmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo.”', '50568454_1.png', 1, '2021-03-26 08:25:53'),
(2, 'abc', 'Bonnie is the Operations Manager, looking after the translation service delivery team. She enjoys studying Mandarin and has previously lived in China for several years', '22368092_t4.png', 0, '2021-03-26 08:30:08');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `file` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `file`, `status`, `added_on`) VALUES
(1, 'media/gallery/1088580.jpg', 0, '2021-03-26 08:21:14'),
(3, 'media/gallery/20170922_112557.jpg', 1, '2021-03-26 08:21:14'),
(4, 'media/gallery/bxh4faL.jpg', 1, '2021-03-26 08:21:14'),
(5, 'media/gallery/e7d0d8edc6150c44dcb6aab149e6693e.jpg', 1, '2021-03-26 08:21:14'),
(7, 'media/gallery/1088580.jpg', 1, '2021-03-27 06:14:41');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `location` text NOT NULL,
  `event_date` date NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `name`, `description`, `location`, `event_date`, `image`, `status`, `added_on`) VALUES
(1, 'National Entry Level cricket School Match', 'upcoming event for Students with full Medical Care, National Entry Level cricket School Match', 'Surat', '2021-03-31', '74510380_02.jpg', 1, '2021-03-26 08:18:53'),
(2, 'Walk and Run', 'Its a Fitness Event and every age of People can take Participate in it', 'Surat', '2021-04-04', '45380176_e7d0d8edc6150c44dcb6aab149e6693e.jpg', 1, '2021-03-26 08:20:58');

-- --------------------------------------------------------

--
-- Table structure for table `trainer`
--

CREATE TABLE `trainer` (
  `t_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trainer`
--

INSERT INTO `trainer` (`t_id`, `c_id`, `name`, `description`, `image`, `status`, `added_on`) VALUES
(1, 3, 'John Deo', 'Expert in Cricket ', '71739587_3.jpg', 1, '2021-03-26 08:13:56'),
(2, 5, 'Mike', '3 Years of Experience', '42098711_1.jpg', 1, '2021-03-26 08:14:28'),
(3, 4, 'Alex', 'Well Trained Couch', '25573688_instra1.jpg', 1, '2021-03-26 08:15:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_user`
--
ALTER TABLE `admin_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquery`
--
ALTER TABLE `enquery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainer`
--
ALTER TABLE `trainer`
  ADD PRIMARY KEY (`t_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_user`
--
ALTER TABLE `admin_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `enquery`
--
ALTER TABLE `enquery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `trainer`
--
ALTER TABLE `trainer`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
