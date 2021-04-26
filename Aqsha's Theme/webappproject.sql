-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2021 at 10:23 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webappproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `paintings`
--

CREATE TABLE `paintings` (
  `ID` int(11) NOT NULL,
  `Title` varchar(255) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Copyright` varchar(50) DEFAULT NULL,
  `Source` varchar(255) DEFAULT NULL,
  `UploaderID` int(11) DEFAULT NULL,
  `Description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `photography`
--

CREATE TABLE `photography` (
  `ID` int(11) NOT NULL,
  `Title` varchar(255) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Copyright` varchar(50) DEFAULT NULL,
  `Source` varchar(255) DEFAULT NULL,
  `UploaderID` int(11) DEFAULT NULL,
  `Description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `photography`
--

INSERT INTO `photography` (`ID`, `Title`, `Date`, `Copyright`, `Source`, `UploaderID`, `Description`) VALUES
(1, 'Casual', '2021-03-28', 'Jane Piasora', 'Image/1.png', 1, 'New casualwear that is seen trending all over Eorzea, sleek and comfortable.'),
(2, 'Level-headed Merc', '2021-03-28', 'Jane Piasora', 'Image/2.jpg', 1, ''),
(3, 'Foxy Mage', '2021-03-28', 'Jane Piasora', 'Image/3.jpg', 1, ''),
(4, 'White Witch', '2021-03-28', 'Jane Piasora', 'Image/4.jpg', 1, ''),
(5, 'Guard of Seiryu', '2021-03-28', 'Jane Piasora', 'Image/5.jpg', 1, ''),
(6, 'Urban Chic', '2021-03-28', 'Jane Piasora', 'Image/6.jpg', 1, ''),
(7, 'Elegant Dancer', '2021-03-28', 'Jane Piasora', 'Image/7.png', 1, ''),
(8, 'Dark Defender', '2021-03-28', 'Jane Piasora', 'Image/8.jpg', 1, ''),
(9, 'Classy Bookworm', '2021-03-28', 'Jane Piasora', 'Image/9.jpg', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `sculptures`
--

CREATE TABLE `sculptures` (
  `ID` int(11) NOT NULL,
  `Title` varchar(255) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Copyright` varchar(50) DEFAULT NULL,
  `Source` varchar(255) DEFAULT NULL,
  `UploaderID` int(11) DEFAULT NULL,
  `Description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Email`, `Password`, `Username`) VALUES
(1, 'stanllyhenrietta@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Jane');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `paintings`
--
ALTER TABLE `paintings`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `UploaderPhoto` (`UploaderID`);

--
-- Indexes for table `photography`
--
ALTER TABLE `photography`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `UploaderPaint` (`UploaderID`);

--
-- Indexes for table `sculptures`
--
ALTER TABLE `sculptures`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Uploader` (`UploaderID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `paintings`
--
ALTER TABLE `paintings`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `photography`
--
ALTER TABLE `photography`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sculptures`
--
ALTER TABLE `sculptures`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `photography`
--
ALTER TABLE `photography`
  ADD CONSTRAINT `UploaderPaint` FOREIGN KEY (`UploaderID`) REFERENCES `users` (`ID`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `sculptures`
--
ALTER TABLE `sculptures`
  ADD CONSTRAINT `Uploader` FOREIGN KEY (`UploaderID`) REFERENCES `users` (`ID`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
