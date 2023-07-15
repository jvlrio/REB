-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2023 at 07:50 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final project`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `CartID` int(255) NOT NULL,
  `playerid` varchar(20) NOT NULL,
  `ProductID` varchar(255) NOT NULL,
  `ProductName` varchar(250) NOT NULL,
  `Price` int(255) NOT NULL,
  `Quantity` int(255) NOT NULL,
  `picture` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`CartID`, `playerid`, `ProductID`, `ProductName`, `Price`, `Quantity`, `picture`) VALUES
(96, '9999 9999 9999', 'L1001', 'New Trainer Box', 249, 1, 'https://drive.google.com/uc?id=1YFInAqKsDoo9aZohLOis3MOFFYEcOZnM');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `historyid` int(11) NOT NULL,
  `playerid` varchar(20) NOT NULL,
  `total` int(10) NOT NULL,
  `contactnumber` bigint(12) NOT NULL,
  `purchasedate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`historyid`, `playerid`, `total`, `contactnumber`, `purchasedate`) VALUES
(54, '9999 9999 9999', 0, 999553317, '2023-07-15'),
(55, '5555 5555 5555', 249, 9870002121, '2023-07-15');

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `playerid` varchar(20) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pswd` varchar(50) NOT NULL,
  `img` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`playerid`, `firstname`, `lastname`, `email`, `pswd`, `img`) VALUES
('1031 1010 0124', 'Suyin', 'Beifong', 'julieandrews@gmail.com', '777', 'mamshie.png'),
('1111 1111 1111', '', '', 'junemarfajardo@gmail.com', 'wewe', NULL),
('1111 2222 3333', 'Kobe', 'Paras', 'koby@gmail.com', 'kobeparas', '1111 2222 3333.jpg'),
('1122 5555 9999', '', '', 'jevelynrosario31@gmail.com', 'qq', '.jpg'),
('1123 1122 1123', '', '', 'cateeofficial@gmail.com', 'asas', NULL),
('1212 1212 1212', '', '', 'jevelynrosario31@gmail.com', 'zzz', NULL),
('1234 1234 1234', '', '', 'jevelynrosario31@gmail.com', '123', '1234 1234 1234.jpg'),
('2222 2222 2222', '', '', 'romina@gmail.com', 'romina', '2222 2222 2222.'),
('5555 5555 5555', '', '', 'asdsad@gmail.com', 'mamamo', '5555 5555 5555.'),
('7777 8888 9999', '', '', 'jevelynrosario31@gmail.com', '111', '7777 8888 9999.jpg'),
('9999 9999 9999', 'Cate', 'Blanchett', 'cateeofficial@gmail.com', 'cutie', '9999 9999 9999.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Product ID` varchar(255) NOT NULL,
  `Product Name` varchar(250) NOT NULL,
  `Price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Product ID`, `Product Name`, `Price`) VALUES
('L1002', 'Voyager Box', 249),
('L1003', 'Starter Box', 149),
('L1004', 'Soltice Box', 499),
('L1005', 'Go Rocket Box', 499),
('L1006', 'Anniversary Box', 249),
('L1007', 'Ultra Community Day Box', 499),
('P4001', '100 Pokecoins', 29),
('P4002', '550 Pokecoins', 249),
('P4003', '600 PokéCoins (50 web store bonus coins)', 249),
('P4004', '1,200 Pokecoins', 499),
('P4005', '1,300 PokéCoins (100 web store bonus coins)', 499),
('P4006', '2,500 PokéCoins ', 999),
('P4007', '2,700 PokéCoins (200 web store bonus coins)', 999),
('P4008', '5,200 PokéCoins', 1990),
('P4009', '5,600 PokéCoins (400 web store bonus coins)', 1990),
('P4100', '14,500 PokéCoins', 4990),
('P4101', '15,500 PokéCoins', 7863),
('P4102', '15,500 PokéCoins (1,000 web store bonus coins)', 4990),
('S3001', '5 Item Bags (250 item storage)', 499),
('S3002', '5 Pokémon Storage (250 item storage)', 499);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`CartID`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`historyid`);

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`playerid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Product ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `CartID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `historyid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
