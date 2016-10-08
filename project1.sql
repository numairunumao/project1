-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 08, 2016 at 10:16 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

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
-- Table structure for table `allprovince`
--

CREATE TABLE `allprovince` (
  `id` int(11) NOT NULL,
  `province_image` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `allprovince`
--

INSERT INTO `allprovince` (`id`, `province_image`) VALUES
(5, 'Flow งานที่ดิน.xlsx'),
(6, 'สูตรสำหรับ4ยุทธศาสตร์.xlsx'),
(9, 'แผนที่น่ารัก2.png');

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
(20, 'กรุงเทพมหานคร', 'ปริมนทน', '', '', '', '', '', '', '1.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2.png', '', '', '', '', '', '', '', '2.png', '', '', '', 'งานวิจัย.xlsx', ''),
(21, 'กรุงเทพมหานคร', 'ปิ่นเกล้า', 'ไม่รู้', 'ไม่รู้', '2016-09-17', 'ไม่รู้', '86', 'on', '1.png', '2016-09-17', 'on', '2016-09-17', 'on', '2016-09-17', '2016-09-17', 'ไม่รู้', 'ไม่รู้', 'ไม่รู้', 'ไม่รู้', '2016-09-17', '2016-09-17', '14 ไร่', 'เมือง', 'ไม่รู้', 'ไม่รู้', 'ไม่รู้', 'ไม่รู้', 'ไม่รู้', 'ไม่รู้', 'ไม่รู้', 'ไม่รู้', 'ไม่รู้', '2016-09-10', '2016-09-24', '2.png', 'on', '2016-09-17', 'on', '2016-09-17', '2016-09-17', '2016-09-17', '2016-09-17', '3.png', '2016-09-17', '2016-09-17', '2016-09-23', '4.png', ''),
(22, 'กรุงเทพมหานคร', 'ลองใหม่', 'ชื่อหน่วยงานที่รับผิดชอบ a3', 'ชื่อผู้กรอกข้อมูล a4', '2016-09-17', 'ขื่อพื้นที่ที่นำมาจัดที่ดินทำกิน b1', 'เนื้อที่เริ่มดำเนินการ (ไร่) b2', 'on', '1.png', '2016-09-01', 'on', '2016-09-17', 'on', '2016-09-17', '2016-09-17', 'อำเภอ', 'ตำบล', 'ตำบล', 'ตำบล', '2016-09-17', '2016-09-17', 'พื้นที่ที่ได้รับอนุญาติใช้ประโยชน์รวม (ไ', 'อำเภอ', 'ตำบล', 'ตำบล', 'ตำบล', 'พื้นที่ที่จัดเพื่ออยู่อาศัยรวม ', 'พื้นที่ที่จัดเพื่ออยู่อาศัยรวม', 'ผู้ที่ได้รับการจัดเพื่ออยู่อาศัย (คน) d1', 'พื้นที่ที่จัดเพื่อทำกินรวม (ไร่) d11', 'พื้นที่ที่จัดเพื่อทำกินรวม (แปลง) d12', 'ผู้ที่ได้รับการจัดเพื่อทำกิน (คน) d13', '2016-09-17', '2016-09-17', '3.png', 'on', '2016-09-17', 'on', '2016-09-30', '2016-09-23', '2016-09-29', '2016-09-30', '4.png', '2016-09-23', '2016-09-16', '2016-09-23', '4.png', ''),
(23, 'กรุงเทพมหานคร', 'ลองใหม่2', 'ไม่รู้', 'ไม่รู้', '2016-09-17', 'ไม่รู้', 'ไม่รู้', '', '1.png', '2016-09-02', 'on', '2016-09-15', 'on', '2016-09-21', '2016-09-30', 'ไม่รู้', 'ไม่รู้', 'ไม่รู้', 'ไม่รู้', '2016-09-15', '2016-09-10', 'ไม่รู้', 'ไม่รู้', 'ไม่รู้', 'ไม่รู้ไม่รู้', 'ไม่รู้', 'ไม่รู้', 'ไม่รู้', 'ไม่รู้', 'ไม่รู้', 'ไม่รู้', 'ไม่รู้', '2016-09-10', '2016-09-17', '3.png', 'on', '2016-09-22', 'on', '2016-09-16', '2016-09-15', '2016-09-05', '2016-09-30', '4.png', '2016-09-15', '2016-09-15', '2016-09-14', '4.png', 'ไม่รู้ไม่รู้ไม่รู้ไม่รู้ไม่รู้ไม่รู้ไม่รู้ไม่รู้ไม่รู้ไม่รู้ไม่รู้ไม่รู้ไม่รู้ไม่รู้ไม่รู้ไม่รู้ไม่รู้ไม่รู้ไม่รู้ไม่รู้ไม่รู้ไม่รู้ไม่รู้ไม่รู้ไม่รู้asdasdasd');

-- --------------------------------------------------------

--
-- Table structure for table `provincearea`
--

CREATE TABLE `provincearea` (
  `id` int(10) NOT NULL,
  `province` varchar(40) NOT NULL,
  `area` varchar(40) NOT NULL,
  `province_image2` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `provincearea`
--

INSERT INTO `provincearea` (`id`, `province`, `area`, `province_image2`) VALUES
(2, 'กรุงเทพมหานคร', 'การการกากรการก', 'สูตรสำหรับ4ยุทธศาสตร์.xlsx'),
(4, 'กรุงเทพมหานคร', 'อิอิอิอิ/', 'Flow งานที่ดิน.xlsx'),
(6, 'ตาก', 'ปิ่นเกล้า', 'แผนที่น่ารัก.png');

-- --------------------------------------------------------

--
-- Table structure for table `strategy1`
--

CREATE TABLE `strategy1` (
  `id` bigint(20) NOT NULL,
  `a1` bigint(20) NOT NULL,
  `a2` bigint(20) NOT NULL,
  `a3` bigint(20) NOT NULL,
  `a4` varchar(20) NOT NULL,
  `a5` bigint(20) NOT NULL,
  `a6` bigint(20) NOT NULL,
  `a7` varchar(20) NOT NULL,
  `a8` bigint(20) NOT NULL,
  `a9` bigint(20) NOT NULL,
  `a10` varchar(20) NOT NULL,
  `a11` bigint(20) NOT NULL,
  `a12` bigint(20) NOT NULL,
  `a13` varchar(20) NOT NULL,
  `a14` bigint(20) NOT NULL,
  `a15` bigint(20) NOT NULL,
  `a16` varchar(20) NOT NULL,
  `a17` bigint(20) NOT NULL,
  `a18` varchar(20) NOT NULL,
  `a19` bigint(20) NOT NULL,
  `a20` bigint(20) NOT NULL,
  `a21` varchar(20) NOT NULL,
  `a22` bigint(20) NOT NULL,
  `a23` varchar(20) NOT NULL,
  `a24` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `strategy1`
--

INSERT INTO `strategy1` (`id`, `a1`, `a2`, `a3`, `a4`, `a5`, `a6`, `a7`, `a8`, `a9`, `a10`, `a11`, `a12`, `a13`, `a14`, `a15`, `a16`, `a17`, `a18`, `a19`, `a20`, `a21`, `a22`, `a23`, `a24`) VALUES
(1, 1111112334, 11111123, 11111, '11111.11', 11111, 11111, '11111.11', 11111, 11111, '11111.11', 11111, 11111, '11111.11', 11111, 11111, '11111.11', 111111123123, '11111.11', 11111, 11111, '11111.11', 11111, '11111.11', 11111123123);

-- --------------------------------------------------------

--
-- Table structure for table `strategy2`
--

CREATE TABLE `strategy2` (
  `id` int(20) NOT NULL,
  `b1` varchar(20) NOT NULL,
  `b2` varchar(20) NOT NULL,
  `b3` varchar(20) NOT NULL,
  `b4` varchar(20) NOT NULL,
  `b5` varchar(20) NOT NULL,
  `b6` varchar(20) NOT NULL,
  `b7` varchar(20) NOT NULL,
  `b8` varchar(20) NOT NULL,
  `b9` varchar(20) NOT NULL,
  `b10` varchar(20) NOT NULL,
  `b11` varchar(20) NOT NULL,
  `b12` varchar(20) NOT NULL,
  `b13` varchar(20) NOT NULL,
  `b14` varchar(20) NOT NULL,
  `b15` varchar(20) NOT NULL,
  `b16` varchar(20) NOT NULL,
  `b17` varchar(20) NOT NULL,
  `b18` varchar(20) NOT NULL,
  `b19` varchar(20) NOT NULL,
  `b20` varchar(20) NOT NULL,
  `b21` varchar(20) NOT NULL,
  `b22` varchar(20) NOT NULL,
  `b23` varchar(20) NOT NULL,
  `b24` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `strategy2`
--

INSERT INTO `strategy2` (`id`, `b1`, `b2`, `b3`, `b4`, `b5`, `b6`, `b7`, `b8`, `b9`, `b10`, `b11`, `b12`, `b13`, `b14`, `b15`, `b16`, `b17`, `b18`, `b19`, `b20`, `b21`, `b22`, `b23`, `b24`) VALUES
(1, '2222221.21', '222222', '222222', '222222', '222222', '222222', '222222', '222222', '222222', '222222', '222222', '222222', '222222', '2222223123', '222222', '222222', '222222', '222222', '222222', '222222', '222222', '222222', '2222221', '222222213123');

-- --------------------------------------------------------

--
-- Table structure for table `strategy3`
--

CREATE TABLE `strategy3` (
  `id` int(40) NOT NULL,
  `s31` int(40) NOT NULL,
  `s31new` int(40) NOT NULL,
  `s32` int(40) NOT NULL,
  `s32new` int(40) NOT NULL,
  `s33` int(40) NOT NULL,
  `s33new` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `strategy3`
--

INSERT INTO `strategy3` (`id`, `s31`, `s31new`, `s32`, `s32new`, `s33`, `s33new`) VALUES
(1, 33333, 33333, 33333, 33333, 33333, 33333);

-- --------------------------------------------------------

--
-- Table structure for table `strategy4`
--

CREATE TABLE `strategy4` (
  `id` int(40) NOT NULL,
  `s41` int(40) NOT NULL,
  `s42` int(40) NOT NULL,
  `s43` int(40) NOT NULL,
  `s44` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `strategy4`
--

INSERT INTO `strategy4` (`id`, `s41`, `s42`, `s43`, `s44`) VALUES
(1, 44444, 44444, 44444, 44444);

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
(2, 'staff', '1234', 'สตาฟ', 'เคเค', 'staff'),
(3, 'board', '1234', 'กรรมการ', 'เคเค', 'board');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allprovince`
--
ALTER TABLE `allprovince`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dataFollow`
--
ALTER TABLE `dataFollow`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `provincearea`
--
ALTER TABLE `provincearea`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `strategy1`
--
ALTER TABLE `strategy1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `strategy2`
--
ALTER TABLE `strategy2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `strategy3`
--
ALTER TABLE `strategy3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `strategy4`
--
ALTER TABLE `strategy4`
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
-- AUTO_INCREMENT for table `allprovince`
--
ALTER TABLE `allprovince`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `dataFollow`
--
ALTER TABLE `dataFollow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `provincearea`
--
ALTER TABLE `provincearea`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `strategy1`
--
ALTER TABLE `strategy1`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `strategy2`
--
ALTER TABLE `strategy2`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `strategy3`
--
ALTER TABLE `strategy3`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `strategy4`
--
ALTER TABLE `strategy4`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
