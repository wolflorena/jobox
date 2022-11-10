-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 07, 2020 at 11:56 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `joboxdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'iulian', 'ffa1d6dd22119b761ce7c2531c656ad0'),
(4, 'lorena', 'bf4397d8b4dc061e1b6d191a352e9134'),
(13, 'test', '098f6bcd4621d373cade4e832627b4f6');

-- --------------------------------------------------------

--
-- Table structure for table `gmessage`
--

CREATE TABLE `gmessage` (
  `id` int(11) NOT NULL,
  `email` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_romanian_ci NOT NULL,
  `subject` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_romanian_ci NOT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_romanian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gmessage`
--

INSERT INTO `gmessage` (`id`, `email`, `subject`, `message`) VALUES
(4, 'iulian.tr14@gmail.com', 'Intrebare', 'Cum imi pot face cont pe platforma JOBOX?'),
(5, 'wolflorenaani@gmail.com', 'lorem ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Volutpat maecenas volutpat blandit aliquam etiam erat velit scelerisque. Neque vitae tempus quam pellentesque nec. Nulla malesuada pellentesque elit eget gravida cum. Massa sed elementum tempus egestas sed sed. Vestibulum lorem sed risus ultricies tristique. Aliquam id diam maecenas ultricies mi eget mauris pharetra. Orci porta non pulvinar neque. Cras ornare arcu dui vivamus arcu felis bibendum. Elit scelerisque mauris pellentesque pulvinar pellentesque habitant morbi tristique senectus. Duis at consectetur lorem donec massa. Commodo viverra maecenas accumsan lacus vel. Pellentesque habitant morbi tristique senectus et netus et malesuada fames. Sit amet purus gravida quis blandit turpis cursus. Vitae proin sagittis nisl rhoncus mattis rhoncus. Enim lobortis scelerisque fermentum dui faucibus in ornare. Commodo sed egestas egestas fringilla phasellus faucibus scelerisque. Egestas sed sed risus pretium quam. Pharetra convallis posuere morbi leo urna molestie.'),
(6, 'purple.sunrise_b@yahoo.com', 'lorem ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Volutpat maecenas volutpat blandit aliquam etiam erat velit scelerisque. Neque vitae tempus quam pellentesque nec. Nulla malesuada pellentesque elit eget gravida cum. Massa sed elementum tempus egestas sed sed. Vestibulum lorem sed risus ultricies tristique. Aliquam id diam maecenas ultricies mi eget mauris pharetra. Orci porta non pulvinar neque. Cras ornare arcu dui vivamus arcu felis bibendum. Elit scelerisque mauris pellentesque pulvinar pellentesque habitant morbi tristique senectus. Duis at consectetur lorem donec massa. Commodo viverra maecenas accumsan lacus vel. Pellentesque habitant morbi tristique senectus et netus et malesuada fames. Sit amet purus gravida quis blandit turpis cursus. Vitae proin sagittis nisl rhoncus mattis rhoncus. Enim lobortis scelerisque fermentum dui faucibus in ornare. Commodo sed egestas egestas fringilla phasellus faucibus scelerisque. Egestas sed sed risus pretium quam. Pharetra convallis posuere morbi leo urna molestie.'),
(7, 'iulian.tr14@gmail.com', 'noi', 'asdjasdsadasdas'),
(8, 'iulian.tr14@gmail.com', 'sadasda', 'sadasdasdsadasdas');

-- --------------------------------------------------------

--
-- Table structure for table `motto`
--

CREATE TABLE `motto` (
  `id` int(11) NOT NULL,
  `mottom` varchar(100) NOT NULL DEFAULT '{Your career starts here}'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `motto`
--

INSERT INTO `motto` (`id`, `mottom`) VALUES
(1, 'dsadasdasdasasds');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(300) DEFAULT NULL,
  `occupation` varchar(50) NOT NULL,
  `contactno` varchar(11) DEFAULT NULL,
  `descript` text NOT NULL,
  `cv` longtext NOT NULL,
  `posting_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`, `occupation`, `contactno`, `descript`, `cv`, `posting_date`) VALUES
(37, 'Trif', 'Iulian', 'iulian.tr14@gmail.com', '1234', 'Programmer', '0773826311', 'MERGEEEE MAAA', 'Add your CV', '2020-03-31 19:35:55'),
(38, 'Iulian', 'Trif', 'iulian.tr14@gmail.com', 'asdasd', 'adasda', '0773826311', 'Modify the description', 'Add your CV', '2020-03-31 21:32:11'),
(39, 'asdsa', 'sadasd', 'asdasasd', 'sadas', 'dsaasdas', 'dsas', 'Modify the description', 'Add your CV', '2020-03-31 21:32:54'),
(40, 'lorenutz', 'wolf', 'wolflorenaani@gmail.com', 'sadad', 'sadasd', 'sadasda', 'Modify the description', 'Add your CV', '2020-03-31 21:33:17'),
(41, 'asdsa', 'sadasd', 'asdasasd', 'sadas', 'dsaasdas', 'dsas', 'Modify the description', 'Add your CV', '2020-03-31 21:38:10'),
(42, 'Iulian', 'Trif', 'iulian.tr14@gmail.com', '234324', '324234', '0773826311', 'Modify the description', 'Add your CV', '2020-03-31 21:40:15'),
(43, 'Iulian', 'Trif', 'iulian.tr14@gmail.com', '234324', '324234', '0773826311', 'Modify the description', 'Add your CV', '2020-03-31 21:40:19'),
(44, 'Iulian', 'Trif', 'iulian.tr14@gmail.com', '1234', '3242334', '0773826311', 'Modify the description', 'Add your CV', '2020-03-31 21:44:09'),
(45, 'lorena', 'wolf', 'wolflorenaani@gmail.com', '1234', 'programator', '123455', 'Modify the description', 'Add your CV', '2020-04-10 10:31:40'),
(46, 'lorena', 'wolf', 'wolflorenaani@gmail.com', '1234', 'programator', '123455', 'Modify the description', 'Add your CV', '2020-04-10 10:32:12'),
(47, 'lorena', 'wolf', 'wolflorenaani@gmail.com', '1234', 'programator', '123455', 'Modify the description', 'Add your CV', '2020-04-10 10:32:13'),
(48, 'adsiaas', 'sadasdad', 'asdas@gma.s', 'asdafas', 'dasdasda', 'dasda', 'Modify the description', 'Add your CV', '2020-04-10 11:32:35'),
(49, 'Terovan', 'asjdjshjdajhs', 'diatero@gmail.com', 'informatica', 'profesor', '321423423', 'Modify the description', 'Add your CV', '2020-04-10 11:33:41'),
(51, 'andrei', 'andrei', 'andrei@gmail.com', 'test', 'programator', '12345', 'Modify the description', 'Add your CV', '2020-05-08 10:12:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gmessage`
--
ALTER TABLE `gmessage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `motto`
--
ALTER TABLE `motto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `gmessage`
--
ALTER TABLE `gmessage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `motto`
--
ALTER TABLE `motto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
