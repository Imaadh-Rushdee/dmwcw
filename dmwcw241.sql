-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 05, 2025 at 04:12 PM
-- Server version: 8.3.0
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dmwcw241`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `addNo` int NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `adress` varchar(200) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `age` int NOT NULL,
  `dob` date NOT NULL,
  `doa` date NOT NULL,
  `mname` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mcontact` int NOT NULL,
  `fgcontact` int NOT NULL,
  `currentgrade` varchar(10) NOT NULL,
  `studentphoto` varchar(500) NOT NULL,
  `imagename` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`addNo`)
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`addNo`, `firstname`, `lastname`, `adress`, `gender`, `age`, `dob`, `doa`, `mname`, `fname`, `mcontact`, `fgcontact`, `currentgrade`, `studentphoto`, `imagename`) VALUES
(23, 'Imaadh', 'Rushdee', 'fvfdv', 'Male', 12, '1111-01-01', '1111-11-11', 'dfsvsdfvsdfv', 'dsfvdsvsdfvdsfv58565', 56156165, 2147483647, '15', '', ''),
(24, 'Imaadh', 'Rushdee', 'fvfdv', 'Male', 12, '1111-01-01', '1111-11-11', 'dfsvsdfvsdfv', 'dsfvdsvsdfvdsfv58565', 56156165, 2147483647, '10', 'uploads/img1.png', ''),
(42, 'Imaadh', 'Rushdee', 'fvfdv', 'Male', 12, '1111-01-01', '1111-11-11', 'dfsvsdfvsdfv', 'dsfvdsvsdfvdsfv58565', 56156165, 2147483647, '7', '', ''),
(43, 'Imaadh', '', 'Ratnapura', 'Male', 16, '2025-02-19', '2025-02-06', 'dfsvsdfvsdfv', 'dsfvdsvsdfvdsfv58565', 12345678, 411415454, '11', 'uploads/img1.png', ''),
(44, 'Imaadh', 'Rushdee', 'Ratnapura', 'Male', 16, '0000-00-00', '0000-00-00', 'dfsvsdfvsdfv', 'dsfvdsvsdfvdsfv58565', 123456789, 12346789, '5', 'uploads/skyline-1925943_1920.jpg', ''),
(45, 'Yummna', 'Rushdee', 'fvfdv', 'Female', 19, '2025-02-19', '2025-02-12', 'dfsvsdfvsdfv', 'dsfvdsvsdfvdsfv58565', 111, 111, '4', 'uploads/img1.png', ''),
(46, 'Imaadh', 'Rushdee', 'Ratnapura', 'Male', 16, '0000-00-00', '0000-00-00', 'dfsvsdfvsdfv', 'dsfvdsvsdfvdsfv58565', 0, 0, '3', 'uploads/img1.png', ''),
(47, 'Yummna', 'Rushdee', 'Ratnapura', 'Male', 16, '2025-02-14', '2025-02-26', 'Shanfara', 'Rushdee', 123456789, 123456789, 'pregrade', 'uploads/skyline-1925943_1920.jpg', ''),
(49, 'Iyaadh', 'Rushdee', 'Ratnapura', 'Male', 12, '2013-04-20', '2014-01-01', 'Shanfara', 'Rushdee', 755555555, 755555555, '8', 'uploads/img.png', 'img.png'),
(50, 'Imaadh', 'Rushdee', 'Ratnapura', 'Male', 16, '2001-01-01', '2013-01-01', 'Shanfara', 'Rushdee', 2147483647, 2147483647, '9', 'no image', ''),
(51, 'nono', 'momo', 'Ratnapura', 'Male', 16, '2025-02-20', '2025-02-12', 'kkkkkkkkk', 'dsfvdsvsdfvdsfv', 123456789, 123456789, '6', 'no image', ''),
(52, 'nnnnn', 'mmmmmm', 'Ratnapura', 'Male', 15, '2025-02-08', '2025-02-10', 'dfsvsdfvsdfv', 'dcscsdcsdcsd', 123456789, 123456789, '6', 'no image', ''),
(53, 'nvsbhbvhsf', 'bfhvbjdhvb', 'Ratnapura', 'Male', 12, '2025-02-22', '2025-02-17', 'sdcdcsdcsdcsdcsd', 'sdcsdcsdcsdc', 123456789, 123456789, '8', 'no image', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `lastname` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `adress` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` int NOT NULL,
  `usertype` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `userphoto` varchar(200) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `firstname`, `lastname`, `adress`, `email`, `contact`, `usertype`, `username`, `password`, `userphoto`) VALUES
(1, 'Imaadh', 'Rushdee', 'Director', 'imaadh@gmail.com', 123456789, 'Student', 'dddd', '0123456789', ''),
(2, 'Iyaadh', '0022', 'Student', '', 0, '', '', '', ''),
(3, 'Yummna', '0044', 'Teacher', '', 0, '', '', '', ''),
(4, 'Example', '0044', 'Parent', '', 0, '', '', '', ''),
(5, 'Imaadh', 'Rushdee', 'Ratnapura', 'imaadh@gmail.com', 123456789, 'director', 'imaadh', '012345678', 'uploads/skyline-1925943_1920.jpg'),
(7, 'Yummna', 'Rushdee', 'Ratnapura', 'yum@gmail.com', 123456789, 'teacher', 'yummna', '012345678', 'uploads/img.png'),
(8, 'Rushdee', 'Sheriffdeen', 'Ratnapura', 'rush@gmail.com', 721234569, 'parent', 'rush', '012345678', 'uploads/img.png'),
(9, 'Yummna', 'Rushdee', 'Ratnapura', 'yum@gmail.com', 0, 'director', 'yummna', '0234897651', 'uploads/img.png'),
(10, 'Imaadh', 'Sheriffdeen', 'Ratnapura', 'imaadh@gmail.com', 2147483647, 'director', 'fvfds', '98989898', 'uploads/'),
(11, 'Yummna', 'Rushdee', 'imiimimim', 'imimim@gmail.com', 2147483647, 'director', 'fvfds', '11111111', 'no image'),
(12, 'Shanfara', 'Rushdee', 'Ratnapura', 'yum@gmail.com', 123456789, 'principal', 'shan', '012345678', 'no image');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
