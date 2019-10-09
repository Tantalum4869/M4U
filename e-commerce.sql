-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 09, 2019 at 05:27 PM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-commerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `apron`
--

CREATE TABLE `apron` (
  `ID` int(255) NOT NULL,
  `Img` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `Name` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `Description` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `Color` varchar(100) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `apron`
--

INSERT INTO `apron` (`ID`, `Img`, `Name`, `Description`, `Color`) VALUES
(2001, 'eggeg.jpg', 'ผ้ากันเปื้อน', '152', 'สีดำ');

-- --------------------------------------------------------

--
-- Table structure for table `hat`
--

CREATE TABLE `hat` (
  `ID` int(11) NOT NULL,
  `Img` varchar(100) DEFAULT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Description` varchar(500) DEFAULT NULL,
  `Color` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hat`
--

INSERT INTO `hat` (`ID`, `Img`, `Name`, `Description`, `Color`) VALUES
(1001, '-3-6-mh-kid-.jpg', 'หมวกสวยก555', 'กuuuuu', 'สีชมพู่'),
(1003, '1123.png', 'เสื้อโปโลแ', 'เสื้อตัวนี้สีแดง', 'สีแดง');

-- --------------------------------------------------------

--
-- Table structure for table `jacket`
--

CREATE TABLE `jacket` (
  `ID` int(11) NOT NULL,
  `Img` varchar(100) DEFAULT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Description` varchar(500) DEFAULT NULL,
  `Color` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jacket`
--

INSERT INTO `jacket` (`ID`, `Img`, `Name`, `Description`, `Color`) VALUES
(3001, '302d363c-7af3-9ca1-526f-5aeaffeb44de.jpg', 'แจ็คเก็ต', '55645121', 'สีฟ้า');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `UserID` int(3) UNSIGNED ZEROFILL NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `FName` varchar(100) NOT NULL,
  `LName` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `Status` enum('ADMIN','USER') NOT NULL DEFAULT 'USER'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`UserID`, `Username`, `Password`, `FName`, `LName`, `email`, `phone`, `Status`) VALUES
(001, 'Benz', '123456', 'สุรพัศ', 'สุขสวัสดิ์', 's5902041610088@email.kmutnb.ac.th', '0874141491', 'ADMIN');

-- --------------------------------------------------------

--
-- Table structure for table `pants`
--

CREATE TABLE `pants` (
  `ID` int(11) NOT NULL,
  `Img` varchar(100) DEFAULT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Description` varchar(500) DEFAULT NULL,
  `Color` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pants`
--

INSERT INTO `pants` (`ID`, `Img`, `Name`, `Description`, `Color`) VALUES
(4001, 'pants.jpg', 'กางเกง', '5555555555', 'สีดำ');

-- --------------------------------------------------------

--
-- Table structure for table `polo`
--

CREATE TABLE `polo` (
  `ID` int(11) NOT NULL,
  `Img` varchar(100) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Description` varchar(500) DEFAULT NULL,
  `Color` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `polo`
--

INSERT INTO `polo` (`ID`, `Img`, `Name`, `Description`, `Color`) VALUES
(12, '1123.png', 'เสื้อโปโลแ555', 'เสื้อตัวนี้สีแดง', 'สีแดง');

-- --------------------------------------------------------

--
-- Table structure for table `quotation`
--

CREATE TABLE `quotation` (
  `Number` int(15) NOT NULL,
  `Dates` date DEFAULT NULL,
  `Description` varchar(200) DEFAULT NULL,
  `Quantity` int(10) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `Amount` float DEFAULT NULL,
  `subtotal` float DEFAULT NULL,
  `vat` float DEFAULT NULL,
  `GrandTotal` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `ID` int(10) NOT NULL,
  `Name` text COLLATE utf8_unicode_ci NOT NULL,
  `Review` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`ID`, `Name`, `Review`) VALUES
(8, 'กชกร ขวัญชื่น', 'ผ้าสวย เนื้อผ้าดีมาก บริการดีงาม สุดยอดดจ้าาา'),
(9, 'ปัญญา เทือกมูล', 'ส่งเร็ว ผ้าสวยมาก'),
(10, 'กนิษฐา โกอินต๊ะ', 'ส่งเร็ว ผ้าสวยมาก ใส่สบาย นุ่ม ราคาถูก บริการดีมาก'),
(11, 'มทร ธนบุรี', 'ดีดีดี');

-- --------------------------------------------------------

--
-- Table structure for table `sport`
--

CREATE TABLE `sport` (
  `ID` int(11) NOT NULL,
  `Img` varchar(100) DEFAULT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Description` varchar(500) DEFAULT NULL,
  `Color` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sport`
--

INSERT INTO `sport` (`ID`, `Img`, `Name`, `Description`, `Color`) VALUES
(5001, 'bc.jpg', 'เสื้อบอล', 'กไไกดกดไๆก', 'สีม่วง');

-- --------------------------------------------------------

--
-- Table structure for table `suits`
--

CREATE TABLE `suits` (
  `ID` int(11) NOT NULL,
  `Img` varchar(100) DEFAULT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Description` varchar(500) DEFAULT NULL,
  `Color` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `suits`
--

INSERT INTO `suits` (`ID`, `Img`, `Name`, `Description`, `Color`) VALUES
(6001, 'suit.jpg', 'สูท', 'กไอดไำดไกไกไกไ', 'สีม่วง');

-- --------------------------------------------------------

--
-- Table structure for table `tshirt`
--

CREATE TABLE `tshirt` (
  `ID` int(11) NOT NULL,
  `Img` varchar(100) DEFAULT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Description` varchar(500) DEFAULT NULL,
  `Color` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tshirt`
--

INSERT INTO `tshirt` (`ID`, `Img`, `Name`, `Description`, `Color`) VALUES
(7001, '00_414443.jpg', 'เสื้อยืด', 'หกๆไดๆดๆกๆ', 'สีขาว');

-- --------------------------------------------------------

--
-- Table structure for table `umbrella`
--

CREATE TABLE `umbrella` (
  `ID` int(11) NOT NULL,
  `Img` varchar(100) DEFAULT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Description` varchar(500) DEFAULT NULL,
  `Color` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `umbrella`
--

INSERT INTO `umbrella` (`ID`, `Img`, `Name`, `Description`, `Color`) VALUES
(8001, '1.jpg', 'ร่ม', 'ถัภะ-พ-พ-', 'สีเหลือง');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apron`
--
ALTER TABLE `apron`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID_apron` (`ID`);

--
-- Indexes for table `hat`
--
ALTER TABLE `hat`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID_hat` (`ID`);

--
-- Indexes for table `jacket`
--
ALTER TABLE `jacket`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID_jacket` (`ID`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- Indexes for table `pants`
--
ALTER TABLE `pants`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID_pants` (`ID`);

--
-- Indexes for table `polo`
--
ALTER TABLE `polo`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID_polo` (`ID`);

--
-- Indexes for table `quotation`
--
ALTER TABLE `quotation`
  ADD PRIMARY KEY (`Number`),
  ADD UNIQUE KEY `Number` (`Number`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `sport`
--
ALTER TABLE `sport`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID_sport` (`ID`);

--
-- Indexes for table `suits`
--
ALTER TABLE `suits`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID_Suits` (`ID`);

--
-- Indexes for table `tshirt`
--
ALTER TABLE `tshirt`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID_Tshirt` (`ID`);

--
-- Indexes for table `umbrella`
--
ALTER TABLE `umbrella`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID_umbrella` (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apron`
--
ALTER TABLE `apron`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2003;
--
-- AUTO_INCREMENT for table `hat`
--
ALTER TABLE `hat`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1004;
--
-- AUTO_INCREMENT for table `jacket`
--
ALTER TABLE `jacket`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3002;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `UserID` int(3) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pants`
--
ALTER TABLE `pants`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4002;
--
-- AUTO_INCREMENT for table `polo`
--
ALTER TABLE `polo`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `quotation`
--
ALTER TABLE `quotation`
  MODIFY `Number` int(15) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `sport`
--
ALTER TABLE `sport`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5003;
--
-- AUTO_INCREMENT for table `suits`
--
ALTER TABLE `suits`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6002;
--
-- AUTO_INCREMENT for table `tshirt`
--
ALTER TABLE `tshirt`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7002;
--
-- AUTO_INCREMENT for table `umbrella`
--
ALTER TABLE `umbrella`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8002;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
