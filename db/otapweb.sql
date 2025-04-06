-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2023 at 10:20 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `otapweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `CategoryID` int(5) NOT NULL,
  `CategoryName` text NOT NULL,
  `regionID` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`CategoryID`, `CategoryName`, `regionID`) VALUES
(10001, 'ผ้าซิ่นย้อมคราม', 1),
(10002, 'ผ้าคลุมไหล่ย้อมคราม', 1);

-- --------------------------------------------------------

--
-- Table structure for table `member_tb`
--

CREATE TABLE `member_tb` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `member_tb`
--

INSERT INTO `member_tb` (`username`, `password`, `email`) VALUES
('ph', 't', '1'),
('pheetza01', '0858332970a', 'duangtawan2562@gmail.com'),
('Tawan', 't', 'kuypond@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `orderdb`
--

CREATE TABLE `orderdb` (
  `OrderID` int(3) NOT NULL,
  `OrderDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `OrderDetailID` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orderdb`
--

INSERT INTO `orderdb` (`OrderID`, `OrderDate`, `OrderDetailID`) VALUES
(1, '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `OrderDetailID` int(3) NOT NULL,
  `ProductID` int(3) NOT NULL,
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`OrderDetailID`, `ProductID`, `username`) VALUES
(88, 4, 'Tawan'),
(89, 2, 'Tawan'),
(90, 4, 'Tawan'),
(91, 4, 'Tawan'),
(92, 4, 'Tawan'),
(93, 4, 'Tawan'),
(95, 12, 'pheetza01'),
(96, 4, 'pheetza01'),
(97, 2, 'ph'),
(99, 4, 'ph'),
(100, 4, 'pheetza01'),
(101, 6, 'pheetza01'),
(102, 2, 'pheetza01');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ProductID` int(3) NOT NULL,
  `CategoryID` int(5) NOT NULL,
  `img` varchar(20) NOT NULL,
  `ProductName` varchar(50) NOT NULL,
  `Price` int(10) NOT NULL,
  `Quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ProductID`, `CategoryID`, `img`, `ProductName`, `Price`, `Quantity`) VALUES
(1, 10001, 'p1.jpg', 'ลายดอกหญ้า ทอมือแบบ 2 ตะกอ', 2000, 50),
(2, 10001, 'p1.jpg', 'ลายดอกหญ้า ทอมือแบบ 2 ตะกอ', 2000, 20),
(4, 10001, 'p2.jpg', 'ลายตีนช่อ ทอมือ ', 2000, 20),
(6, 10001, 'p3.jpg', 'ลายขั้นหวีช่อ', 2000, 20),
(8, 10001, 'p4.jpg', 'ลายต้นสนนาคน้อย ทอมือ 2 ตะกอ', 2000, 50),
(10, 10002, 'q1.jpg', 'ลายราชวัตร', 1690, 20),
(12, 10002, 'q2.jpg', 'ลายน้ำไหลประยุค ทอมือแบบ 4 ตะกอ', 1390, 20),
(14, 10002, 'q3.jpg', 'ลายสร้อยพร้าว ทอมือแบบ 4 ตะกอ', 1390, 20),
(16, 10001, 'p5.jpg', 'ลายต้นสนเล็ก ย้อมครามแบบธรรมชาติ', 2000, 20),
(18, 10002, 'q4.jpg', 'ลายปีกแมลงภู่ ทอมือแบบ 4 ตะกอ', 1390, 50),
(19, 10002, 'q5.jpg', 'ลายผีเสื้อน้อย ทอมือแบบ 4 ตะกอ', 1390, 50),
(20, 10002, 'q6.jpg', 'ลาย จตุคราม ทอมือแบบ 4 ตะกอ', 1390, 50);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`CategoryID`),
  ADD KEY `region` (`regionID`);

--
-- Indexes for table `member_tb`
--
ALTER TABLE `member_tb`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `orderdb`
--
ALTER TABLE `orderdb`
  ADD PRIMARY KEY (`OrderID`),
  ADD KEY `orderdetails` (`OrderDetailID`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`OrderDetailID`),
  ADD KEY `productid` (`ProductID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ProductID`),
  ADD KEY `CategoryID` (`CategoryID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orderdb`
--
ALTER TABLE `orderdb`
  MODIFY `OrderID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `OrderDetailID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ProductID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD CONSTRAINT `productid` FOREIGN KEY (`ProductID`) REFERENCES `products` (`ProductID`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `CategoryID` FOREIGN KEY (`CategoryID`) REFERENCES `categories` (`CategoryID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
