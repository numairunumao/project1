-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 16, 2016 at 09:33 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project1`
--

-- --------------------------------------------------------

--
-- Table structure for table `dataFollow`
--

CREATE TABLE `dataFollow` (
  `id` int(11) NOT NULL,
  `a1` varchar(40) NOT NULL,
  `a2` varchar(40) NOT NULL,
  `a3` varchar(40) NOT NULL,
  `a4` varchar(40) NOT NULL,
  `a5` varchar(40) NOT NULL,
  `b1` varchar(40) NOT NULL,
  `b2` varchar(40) NOT NULL,
  `b3` varchar(40) NOT NULL,
  `b4` varchar(40) NOT NULL,
  `c1` varchar(40) NOT NULL,
  `c2` varchar(40) NOT NULL,
  `c3` varchar(40) NOT NULL,
  `c4` varchar(40) NOT NULL,
  `c5` varchar(40) NOT NULL,
  `c6` varchar(40) NOT NULL,
  `c7` varchar(40) NOT NULL,
  `c8` varchar(40) NOT NULL,
  `c9` varchar(40) NOT NULL,
  `c10` varchar(40) NOT NULL,
  `d1` varchar(40) NOT NULL,
  `d2` varchar(40) NOT NULL,
  `d3` varchar(40) NOT NULL,
  `d4` varchar(40) NOT NULL,
  `d5` varchar(40) NOT NULL,
  `d6` varchar(40) NOT NULL,
  `d7` varchar(40) NOT NULL,
  `d8` varchar(40) NOT NULL,
  `d9` varchar(40) NOT NULL,
  `d10` varchar(40) NOT NULL,
  `d11` varchar(40) NOT NULL,
  `d12` varchar(40) NOT NULL,
  `d13` varchar(40) NOT NULL,
  `d14` varchar(40) NOT NULL,
  `d15` varchar(40) NOT NULL,
  `d16` varchar(40) NOT NULL,
  `d17` varchar(40) NOT NULL,
  `d18` varchar(40) NOT NULL,
  `d19` varchar(40) NOT NULL,
  `d20` varchar(40) NOT NULL,
  `d21` varchar(40) NOT NULL,
  `d22` varchar(40) NOT NULL,
  `d23` varchar(40) NOT NULL,
  `d24` varchar(40) NOT NULL,
  `e1` varchar(40) NOT NULL,
  `e2` varchar(40) NOT NULL,
  `e3` varchar(40) NOT NULL,
  `f1` varchar(40) NOT NULL,
  `f2` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dataFollow`
--

INSERT INTO `dataFollow` (`id`, `a1`, `a2`, `a3`, `a4`, `a5`, `b1`, `b2`, `b3`, `b4`, `c1`, `c2`, `c3`, `c4`, `c5`, `c6`, `c7`, `c8`, `c9`, `c10`, `d1`, `d2`, `d3`, `d4`, `d5`, `d6`, `d7`, `d8`, `d9`, `d10`, `d11`, `d12`, `d13`, `d14`, `d15`, `d16`, `d17`, `d18`, `d19`, `d20`, `d21`, `d22`, `d23`, `d24`, `e1`, `e2`, `e3`, `f1`, `f2`) VALUES
(14, 'พะเยา', '', '', '', '', '', '', '', '3.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'งานวิจัย.xlsx', '', '', '', '', '', '', '', 'ประเมินงาน.xlsx', '', '', '', '', ''),
(15, 'พะเยา', '', '', '', '', '', '', '', '1.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2.png', '', '', '', '', '', '', '', '3.png', '', '', '', '4.png', ''),
(16, 'กรุงเทพมหานคร', 'กกกกก', 'ฟหกฟหก', 'กกกกก', '2016-09-13', 'ฟหกหฟก', 'ฟหกฟหก', 'on', '1.png', '2016-09-09', 'on', '2016-09-08', 'on', '2016-09-22', '2016-09-30', 'เมือง', 'เมือง', 'เมืองเ', 'เมือง', '2016-09-09', '2016-09-03', '12', 'เมือง', 'อุโมงค์', 'อุโมงค์', 'อุโมงค์', '12', '12', '12', '12', '12', '12', '2016-09-07', '2016-09-21', 'ประเมินงาน.xlsx', 'on', '2016-09-07', 'on', '2016-09-24', '2016-09-03', '2016-09-13', '2016-09-22', '3.png', '2016-09-27', '2016-09-15', '2016-09-09', '4.png', ''),
(17, 'พะเยา', '', '', '', '', '', '', '', 'งานวิจัย.xlsx', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'ประเมินงาน.xlsx', '', '', '', '', '', '', '', '4.png', '', '', '', '2.png', ''),
(18, 'พะเยา', '', '', '', '', '', '', '', '1.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2.png', '', '', '', '', '', '', '', '3.png', '', '', '', '4.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(40) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `name`, `lastname`, `role`) VALUES
(1, 'ceo', '1234', 'ผู้บริหาร', 'เคเค', 'ceo'),
(2, 'staff', '1234', 'สตาฟนะจ๊ะ', 'เคเค', 'staff'),
(3, 'board', '1234', 'กรรมการ', 'เคเค', 'board');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dataFollow`
--
ALTER TABLE `dataFollow`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dataFollow`
--
ALTER TABLE `dataFollow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
