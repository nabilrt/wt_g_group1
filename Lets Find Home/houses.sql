-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2021 at 11:19 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `houses`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(100) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `pass` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `NID` varchar(15) NOT NULL,
  `Gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `uname`, `pass`, `email`, `NID`, `Gender`) VALUES
('Zarif Amir', 'Sanad', 'S@nad123', 'zarif@gmail.com', '1024152010', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `basha_vara`
--

CREATE TABLE `basha_vara` (
  `Owner_ID` varchar(12) NOT NULL,
  `Renter_ID` varchar(12) NOT NULL,
  `Rent` varchar(6) NOT NULL,
  `Area` varchar(20) NOT NULL,
  `AD_No` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `basha_vara`
--

INSERT INTO `basha_vara` (`Owner_ID`, `Renter_ID`, `Rent`, `Area`, `AD_No`) VALUES
('1122334455', '2233445566', '18000', 'Shantinagar', '1002'),
('1122334455', '2233445566', '30000', 'Uttara', '1003');

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `Message_No` varchar(10) NOT NULL,
  `Owner_ID` varchar(12) NOT NULL,
  `Renter_ID` varchar(12) NOT NULL,
  `RMessage` varchar(60) NOT NULL,
  `HMessage` varchar(60) NOT NULL,
  `AD_No` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `Transaction` varchar(10) NOT NULL,
  `Reason` varchar(40) DEFAULT NULL,
  `Description` varchar(300) DEFAULT NULL,
  `Amount` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`Transaction`, `Reason`, `Description`, `Amount`) VALUES
('T-142', 'Donation', 'Donated this amount to a charity organization.', 1500),
('T-290', 'Depreciation', 'Needed to fix the frontend of the website.', 3500),
('T-3', 'Domain', 'We bought domain Hosting', 2000),
('T-701', 'Manager Module', 'Needed  to rebuild the manager module.', 7000);

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `Name` varchar(40) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `NID` varchar(20) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Degree` varchar(200) NOT NULL,
  `Image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`Name`, `Email`, `NID`, `Gender`, `Password`, `Degree`, `Image`) VALUES
('Adhir Ashraful', 'ashraf@aiub.edu', '3344556677', 'Male', 'adhir@123', '../files/1295747.jpg', '../files/pexels-maksim-goncharenok-5821029.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `Owner_ID` varchar(15) NOT NULL,
  `R_ID` varchar(15) NOT NULL,
  `AD_ID` varchar(5) NOT NULL,
  `Notice` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`Owner_ID`, `R_ID`, `AD_ID`, `Notice`) VALUES
('1122334455', '2233445566', '1005', 'Hello Arpita didi'),
('1122334455', '2001', '111', 'The House is nice.'),
('1122334455', '2005', '878', 'Big House'),
('1122334455', '2233445566', '1005', 'The House is nice.'),
('1122334455', '2233445566', '919', 'The House is nice.'),
('1122334455', '2233445566', '1003', 'Hi Renter, Pay Rent timely'),
('1122334455', '2233445566', '1003', 'Hello Renter'),
('1122334455', '2233445566', '1002', 'Hello'),
('1122334455', '2233445566', '1002', 'Pay the rent ASAP');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `ID` varchar(15) NOT NULL,
  `Notify` varchar(200) NOT NULL,
  `Time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`ID`, `Notify`, `Time`) VALUES
('2233445566', 'You request for house has been accepted for 1003, Welcome.', '1638820401'),
('1122334455', 'Rent for month April has been paid for 1003.', '09:17:08pm'),
('1122334455', 'Renter has left the house of 878', '09:17:33pm'),
('2233445566', 'There is a new notice from house owner for AD-ID 1003', '02:28:09am'),
('2233445566', 'There is a new notice from house owner for AD-ID 1003', '02:37:09am'),
('2233445566', 'There is a new notice from house owner for AD-ID 1002', '01:24:14pm'),
('2233445566', 'There is a new notice from house owner for AD-ID 1002', '2021-12-10 11:14:34pm'),
('1122334455', 'Rent for month September has been paid for AD-ID 1003.', '2021-12-10 06:41:10pm');

-- --------------------------------------------------------

--
-- Table structure for table `owners`
--

CREATE TABLE `owners` (
  `Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `NID` varchar(12) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Gender` varchar(12) NOT NULL,
  `Image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `owners`
--

INSERT INTO `owners` (`Name`, `Email`, `NID`, `Password`, `Gender`, `Image`) VALUES
('Nabil Rahman', 'nabilrt51@gmail.com', '1122334455', 'nabil@12345', 'Male', '../files/20211205_162520.jpg'),
('Sazin Israk Prioty', 'sazin@gmail.com', '1122334466', 'sazin@12345', 'Female', '../files/normal.png'),
('Abidur Rahman', 'abidur@aiub.com', '2111111113', 'abidur@1234', 'Male', '../files/normal.png');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `AD_No` varchar(10) NOT NULL,
  `Owner_ID` varchar(15) NOT NULL,
  `Renter_ID` varchar(15) NOT NULL,
  `Rent` varchar(8) NOT NULL,
  `Paid` varchar(8) NOT NULL,
  `Month` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`AD_No`, `Owner_ID`, `Renter_ID`, `Rent`, `Paid`, `Month`) VALUES
('1005', '2233445566', '2233445566', '23000', '23000', 'March'),
('1005', '1122334455', '2233445566', '23000', '23000', 'Nov'),
('1003', '1122334455', '2233445566', '30000', '30000', 'April'),
('1003', '1122334455', '2233445566', '30000', '30000', 'September');

-- --------------------------------------------------------

--
-- Table structure for table `renters`
--

CREATE TABLE `renters` (
  `name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `nid` varchar(40) NOT NULL,
  `password` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `Image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `renters`
--

INSERT INTO `renters` (`name`, `email`, `nid`, `password`, `gender`, `dob`, `Image`) VALUES
('Jakia Sultana', 'nupur@aiub.edu', '1122335566', 'jakia@123', 'Female', '2000-01-12', '../images/bg3.jpg'),
('Mahim Mohim', 'nabilrti1511@gmail.com', '2111366123', 'mahim@123', 'Male', '2015-02-03', '../images/bg3.jpg'),
('Arpita Datta', 'arpita@aiub.edu', '2233445566', 'arpita@123', 'Female', '21-09-1999', '../Pictures/default.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `unapprovedads`
--

CREATE TABLE `unapprovedads` (
  `AD_ID` varchar(15) NOT NULL,
  `H_Owner_ID` varchar(15) NOT NULL,
  `AD_Rent` varchar(6) NOT NULL,
  `AD_Address` varchar(50) NOT NULL,
  `AD_Area` varchar(15) NOT NULL,
  `AD_des` varchar(100) NOT NULL,
  `Picture1` varchar(60) NOT NULL,
  `Picture2` varchar(60) NOT NULL,
  `Picture3` varchar(60) NOT NULL,
  `decision` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `unapprovedads`
--

INSERT INTO `unapprovedads` (`AD_ID`, `H_Owner_ID`, `AD_Rent`, `AD_Address`, `AD_Area`, `AD_des`, `Picture1`, `Picture2`, `Picture3`, `decision`) VALUES
('111', '1122334455', '31000', 'Riyad', 'Saudi Arabia', 'Hello', '../files/735858.jpg', '../files/6047790.jpg', '../files/bedroom_anime_art-wallpaper-1920x1080.jpg', NULL),
('2334', '1122334455', '17000', 'F Block, Road-15, House 33', 'Bashundhara R/A', 'This house has every facility you are looking for. Rent is also negotiatable.', '../files/10.jpg', '../files/9.jpg', '../files/8.jpg', 'Accepted'),
('2771', '1122334455', '45000', 'Narinda, Puran Dhaka', 'Lalbag', 'This house has all the needing facilities. Electricity and Gas is also available.', '../files/13.jpg', '../files/12.jpg', '../files/11.jpg', 'Accepted'),
('711', '1122334455', '29000', '693,Begum Rokeya Road,Kharampotty', 'Badda', 'Big House', '../files/4.jpg', '../files/5.jpg', '../files/San-Siro-Stadium-Giuseppe-Meazza-ArchEyes-18.jpg', NULL),
('AD-4209', '1122334455', '25000', 'Shewrapara, Mirpur-2', 'Mirpur', 'This House has all the modern facilities you are looking for. Contact for booking asap', '../files/7.jpg', '../files/6.jpg', '../files/5.jpg', 'Accepted'),
('AD-4302', '1122334455', '16000', 'Nikunja-2, Road 19, House 31', 'Nikunja', 'This house has two verandas for fresh air. Has 2 Room with attached washrooms.', '../files/4.jpg', '../files/3.jpg', '../files/2.jpg', 'Accepted');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`uname`);

--
-- Indexes for table `basha_vara`
--
ALTER TABLE `basha_vara`
  ADD PRIMARY KEY (`AD_No`);

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`Message_No`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`Transaction`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`NID`);

--
-- Indexes for table `owners`
--
ALTER TABLE `owners`
  ADD PRIMARY KEY (`NID`);

--
-- Indexes for table `renters`
--
ALTER TABLE `renters`
  ADD PRIMARY KEY (`nid`);

--
-- Indexes for table `unapprovedads`
--
ALTER TABLE `unapprovedads`
  ADD PRIMARY KEY (`AD_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
