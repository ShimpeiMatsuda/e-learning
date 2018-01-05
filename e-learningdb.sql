-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2018 年 1 朁E05 日 10:10
-- サーバのバージョン： 10.1.28-MariaDB
-- PHP Version: 7.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-learningdb`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `coursestbl`
--

CREATE TABLE `coursestbl` (
  `courseid` int(20) NOT NULL,
  `coursename` varchar(30) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- テーブルのデータのダンプ `coursestbl`
--

INSERT INTO `coursestbl` (`courseid`, `coursename`, `description`) VALUES
(1, 'English ', 'you can learn anything about English'),
(2, 'Mathematics', 'very difficult'),
(3, 'science ', 'bheipa');

-- --------------------------------------------------------

--
-- テーブルの構造 `topicstbl`
--

CREATE TABLE `topicstbl` (
  `topicid` int(20) NOT NULL,
  `title` varchar(30) NOT NULL,
  `details` varchar(50) NOT NULL,
  `date_added` date NOT NULL,
  `courseid` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- テーブルのデータのダンプ `topicstbl`
--

INSERT INTO `topicstbl` (`topicid`, `title`, `details`, `date_added`, `courseid`) VALUES
(2, 'grammar', 'fundamental skill to make English sentences', '0000-00-00', 1),
(3, 'physics', 'physics', '0000-00-00', 3),
(4, 'physics', ' physics', '2018-01-05', 3);

-- --------------------------------------------------------

--
-- テーブルの構造 `userstbl`
--

CREATE TABLE `userstbl` (
  `userid` int(20) NOT NULL,
  `username` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `account` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- テーブルのデータのダンプ `userstbl`
--

INSERT INTO `userstbl` (`userid`, `username`, `email`, `password`, `account`) VALUES
(1, 'kabo', 'kabo@gmail.com', '58217682ef7e15d921246a396b684fb7', 'user'),
(2, 'admin', 'shimpei@gamil.com', 'f098af58786723dc968f24548ebf7415', 'admin');

-- --------------------------------------------------------

--
-- テーブルの構造 `user_coursestbl`
--

CREATE TABLE `user_coursestbl` (
  `user_courses_id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `courses_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coursestbl`
--
ALTER TABLE `coursestbl`
  ADD PRIMARY KEY (`courseid`);

--
-- Indexes for table `topicstbl`
--
ALTER TABLE `topicstbl`
  ADD PRIMARY KEY (`topicid`);

--
-- Indexes for table `userstbl`
--
ALTER TABLE `userstbl`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `user_coursestbl`
--
ALTER TABLE `user_coursestbl`
  ADD PRIMARY KEY (`user_courses_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coursestbl`
--
ALTER TABLE `coursestbl`
  MODIFY `courseid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `topicstbl`
--
ALTER TABLE `topicstbl`
  MODIFY `topicid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `userstbl`
--
ALTER TABLE `userstbl`
  MODIFY `userid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_coursestbl`
--
ALTER TABLE `user_coursestbl`
  MODIFY `user_courses_id` int(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
