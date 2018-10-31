-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2018 at 05:14 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `td_basic`
--

CREATE TABLE `td_basic` (
  `b_id` int(11) NOT NULL,
  `b_vi_logo` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `b_vi_col` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `b_vi_vi` text COLLATE utf8_unicode_ci NOT NULL,
  `b_vi_img` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `b_ple` text COLLATE utf8_unicode_ci NOT NULL,
  `b_mg_name1` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `b_mg_position1` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `b_mg_img1` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `b_mg_name2` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `b_mg_position2` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `b_mg_img2` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `td_basic`
--

INSERT INTO `td_basic` (`b_id`, `b_vi_logo`, `b_vi_col`, `b_vi_vi`, `b_vi_img`, `b_ple`, `b_mg_name1`, `b_mg_position1`, `b_mg_img1`, `b_mg_name2`, `b_mg_position2`, `b_mg_img2`) VALUES
(1, 'พระอินทร์ประทับนั่งบนพระราชอาสน์  เปล่งรัศมีของความสุข  ความเจริญ   ความก้าวหน้า มาสู่ประชาราษฏร์ในเทศบาลตำบลอากาศอำนวย', 'สีเหลือง', 'อากาศอำนวยเป็นเมืองคุณภาพชีวิต  เป็นมิตรกับสิ่งแวดล้อม                        <br>ยุทศาสตร์                        <br>   ๑.                        <br>   ๒.                        <br>   ๓.                        <br>   ๔.                        <br>   ๕.                        <br>   ๖.                        <br>   ๗.                        <br>   ๘.', '101491882120181031_010020.jpg', '', 'นายวัชริน  รุณจักร', 'นายกเทศบาลตำบลอากาศอำนวย', '31567171320181031_010020.jpg', 'นายเจษฏา  พวงเงิน', 'ปลัดเทศบาลตำบลอากาศอำนวย', '95947460720181031_010020.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `td_book`
--

CREATE TABLE `td_book` (
  `bo_id` int(11) NOT NULL,
  `bo_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `bo_cate` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `bo_author` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `bo_year` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `bo_amount` int(11) NOT NULL,
  `bo_detail` text COLLATE utf8_unicode_ci NOT NULL,
  `bo_img` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `td_book`
--

INSERT INTO `td_book` (`bo_id`, `bo_name`, `bo_cate`, `bo_author`, `bo_year`, `bo_amount`, `bo_detail`, `bo_img`) VALUES
(3, 'test11', '000วิทยาการคอมพิวเตอร์ สารสนเทศและความรู้ทั่วไป', 'test12', 'test14', 4, 'sdfsdfsdfsdf', '196297020920181030_210123.jpg'),
(7, 'test11', '000วิทยาการคอมพิวเตอร์ สารสนเทศและความรู้ทั่วไป', 'test12', 'test14', 4, 'sdfsdfsdfsdf', '201935549720181030_210142.jpg'),
(8, 'ee1ee', '000วิทยาการคอมพิวเตอร์ สารสนเทศและความรู้ทั่วไป', 'ee2ee', 'ee3ee', 4, 'eewfwefwef444', '186429370520181030_210151.jpg'),
(9, 'วัคซีน2', 'จุลสาร', 'ee2ee', 'test144', 1, 'wasdsadasd', '59193987720181030_210334.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `td_history`
--

CREATE TABLE `td_history` (
  `h_id` int(11) NOT NULL,
  `h_detail` text COLLATE utf8_unicode_ci NOT NULL,
  `h_img` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `td_history`
--

INSERT INTO `td_history` (`h_id`, `h_detail`, `h_img`) VALUES
(1, '    ปี 2536 สุขาภิบาลอากาศอำนวย ในขณะนั้นก่อสร้างอาคารตลาดสดแห่งใหม่ บนพื้นที่ 3 ไร่ ประมาณ 2,272 ตารางเมตร แต่ผู้ประกอบการไม่มาจำหน่ายสินค้า เนื่องจากห่างไกลชุมชน ทำให้กลายเป็นที่จำหน่ายสินค้าตลาดนัด - ปี 2544 เทศบาลได้เข้ามาปรับปรุงและพัฒนาอาคารตลาดเป็นศูนย์แสดงและจำหน่ายสินค้าพื้นเมือง\r\n                    ตามนโยบายของรัฐบาลในขณะนั้น วันที่ 25 มีนาคม 2548 ได้จัดตั้งศูนย์การเรียนรู้ชุมชนและเปิดให้บริการอย่างเป็นทางการในวันแรกdfsdf', '68924344220181030_232935.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `td_member`
--

CREATE TABLE `td_member` (
  `m_id` int(11) NOT NULL,
  `m_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `m_tel` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `m_user` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `m_pass` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `td_member`
--

INSERT INTO `td_member` (`m_id`, `m_name`, `m_tel`, `m_user`, `m_pass`) VALUES
(1, 'admin', '0888888', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `td_order`
--

CREATE TABLE `td_order` (
  `o_id` int(11) NOT NULL,
  `o_id_p` int(11) NOT NULL,
  `o_id_b` int(11) NOT NULL,
  `o_date_loan` date NOT NULL,
  `0_date_night` date NOT NULL,
  `o_status` enum('จอง','คืน') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'จอง'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `td_order`
--

INSERT INTO `td_order` (`o_id`, `o_id_p`, `o_id_b`, `o_date_loan`, `0_date_night`, `o_status`) VALUES
(1, 4, 7, '2018-10-31', '2018-10-31', 'จอง'),
(2, 4, 3, '2018-10-30', '2018-10-31', 'จอง'),
(3, 4, 9, '2018-10-28', '2018-10-31', 'จอง');

-- --------------------------------------------------------

--
-- Table structure for table `td_personnel`
--

CREATE TABLE `td_personnel` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `p_home` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `p_district` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `p_state` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `p_province` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `p_zipcode` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `p_tel` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `p_idcard` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `td_personnel`
--

INSERT INTO `td_personnel` (`p_id`, `p_name`, `p_home`, `p_district`, `p_state`, `p_province`, `p_zipcode`, `p_tel`, `p_idcard`) VALUES
(1, 'นาย อรรถพงษ์ นิมี', '215 หมู่ 11 นาคำ', 'ssssssss', 'aaaaa', 'ccccccccccc', '145678', '0888888888', '11111111'),
(2, 'asdasd asdasd', 'gggg sssss', 'eeeee', 'cccccc', 'ddddd', '111444', '08888888', '11111111'),
(3, 'sadasdd wwwww', 'aaaaaaaaa sssssssssss', 'ddddd', 'ffffffff', 'gggggg', '23423432', '5432783543', '1111111111111'),
(4, '4trtwret', '215 หมู่ 11 บ้าน นาคำ, ตำบล นาคำ sdsadsa', 'asdsad', 'นครพนม', 'asdasd', '48150', '5432783543', '546546546546');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `td_basic`
--
ALTER TABLE `td_basic`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `td_book`
--
ALTER TABLE `td_book`
  ADD PRIMARY KEY (`bo_id`);

--
-- Indexes for table `td_history`
--
ALTER TABLE `td_history`
  ADD PRIMARY KEY (`h_id`);

--
-- Indexes for table `td_member`
--
ALTER TABLE `td_member`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `td_order`
--
ALTER TABLE `td_order`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `td_personnel`
--
ALTER TABLE `td_personnel`
  ADD PRIMARY KEY (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `td_basic`
--
ALTER TABLE `td_basic`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `td_book`
--
ALTER TABLE `td_book`
  MODIFY `bo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `td_history`
--
ALTER TABLE `td_history`
  MODIFY `h_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `td_member`
--
ALTER TABLE `td_member`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `td_order`
--
ALTER TABLE `td_order`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `td_personnel`
--
ALTER TABLE `td_personnel`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
