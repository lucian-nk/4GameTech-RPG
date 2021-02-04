-- phpMyAdmin SQL Dump
-- version 4.6.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 11, 2016 at 10:27 AM
-- Server version: 5.7.11-4-log
-- PHP Version: 5.5.36-1~dotdeb+7.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u85934db1`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlog`
--

CREATE TABLE `adminlog` (
  `entryID` int(11) NOT NULL,
  `value` varchar(255) NOT NULL,
  `entryTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tickcount` int(12) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `aplications`
--

CREATE TABLE `aplications` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `intrebarea1` text NOT NULL,
  `status` int(69) NOT NULL DEFAULT '0',
  `factionid` int(69) NOT NULL DEFAULT '0',
  `playerid` int(69) NOT NULL,
  `intrebarea2` text NOT NULL,
  `intrebarea3` text NOT NULL,
  `intrebarea4` text NOT NULL,
  `intrebarea5` text NOT NULL,
  `intrebarea6` text NOT NULL,
  `intrebarea7` text NOT NULL,
  `intrebarea8` text NOT NULL,
  `intrebarea9` text NOT NULL,
  `intrebarea10` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bans`
--

CREATE TABLE `bans` (
  `ID` int(11) NOT NULL,
  `Name` varchar(25) NOT NULL DEFAULT 'name',
  `IP` varchar(16) NOT NULL DEFAULT '000.000.000.000',
  `Admin` varchar(25) NOT NULL DEFAULT 'admin',
  `Reason` varchar(64) NOT NULL DEFAULT 'reason',
  `BanY` int(5) NOT NULL DEFAULT '0',
  `BanM` int(5) NOT NULL DEFAULT '0',
  `BanD` int(5) NOT NULL DEFAULT '0',
  `BanH` int(5) NOT NULL DEFAULT '0',
  `UnbanY` int(5) NOT NULL DEFAULT '0',
  `UnbanM` int(5) NOT NULL DEFAULT '0',
  `UnbanD` int(5) NOT NULL DEFAULT '0',
  `UnbanH` int(5) NOT NULL DEFAULT '0',
  `Days` int(5) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `business`
--

CREATE TABLE `business` (
  `ID` int(11) NOT NULL,
  `EntranceX` float NOT NULL,
  `EntranceY` float NOT NULL,
  `EntranceZ` float NOT NULL,
  `ExitX` float NOT NULL,
  `ExitY` float NOT NULL,
  `ExitZ` float NOT NULL,
  `Interior` int(11) NOT NULL,
  `Owned` int(11) NOT NULL,
  `Owner` varchar(24) NOT NULL,
  `Name` varchar(48) NOT NULL,
  `Level` int(11) NOT NULL,
  `Price` int(11) NOT NULL,
  `EntranceCost` int(11) NOT NULL,
  `ItemPrice` int(11) NOT NULL,
  `Safe` int(11) NOT NULL,
  `Locked` int(11) NOT NULL,
  `SBiz` int(11) NOT NULL,
  `Discription` varchar(65) NOT NULL DEFAULT 'Business Name',
  `Virtual` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `business`
--

INSERT INTO `business` (`ID`, `EntranceX`, `EntranceY`, `EntranceZ`, `ExitX`, `ExitY`, `ExitZ`, `Interior`, `Owned`, `Owner`, `Name`, `Level`, `Price`, `EntranceCost`, `ItemPrice`, `Safe`, `Locked`, `SBiz`, `Discription`, `Virtual`) VALUES
(1, 1791.53, -1164.31, 23.828, 314.821, -141.432, 999.602, 7, 1, 'V@L0aR3', 'Gun Shop Los Santos', 10, 100000, 1, 1, 53311, 0, 0, 'Business Name', 0),
(2, 1461.65, -1011.39, 26.8438, 2935.27, -1803.74, 1191.07, 0, 0, 'The State', 'Bank Los Santos', 15, 1250000, 1, 1, 164094, 0, 0, 'Banca Los Santos!', 0),
(3, 1000.18, -919.99, 42.3281, -27.2973, -30.5104, 1003.56, 4, 0, 'The State', '24/7 VineWood', 5, 50000, 1, 1, 0, 1, 0, 'Business Name', 0),
(4, 1833.11, -1842.56, 13.5781, 6.09118, -29.2719, 1003.55, 10, 1, 'TG.Trickster.', '24/7 Taxi', 5, 50000, 1, 1, 96617, 0, 0, 'Business Name', 0),
(5, 835.763, -1385.41, 13.5516, 0, 0, 0, 0, 0, 'The State', 'Hot Dog Company', 7, 650000, 1, 1, 480, 1, 1, '<<FULLVIUSS HOTDOG>>', 0),
(6, 564.08, -1293.21, 17.2482, 0, 0, 0, 0, 0, 'The State', 'Rent Car Los Santos', 7, 750000, 1, 0, 13, 1, 1, 'Business Name', 0),
(7, 1110.91, -1796.79, 16.594, 0, 0, 0, 0, 1, 'Lucian50', 'CNN Los Santos', 15, 150000, 1, 1, 10, 1, 1, 'Business Name', 0),
(8, 1509.6, -1060.35, 25.0625, 0, 0, 0, 0, 0, 'The State', 'Phone Company', 10, 100000, 1, 1, 0, 1, 1, 'Business Name', 0),
(9, 921.751, -1298.76, 14.0938, 0, 0, 0, 0, 0, 'The State', 'Vehicle Tow Company', 10, 750000, 1, 0, 100, 1, 1, 'Business Name', 0),
(10, 1024.84, -1030.51, 32.0454, 0, 0, 0, 0, 1, 'ady.bo$$', 'Pay \'N Spray', 3, 30000, 200, 0, 6600, 1, 1, 'Business Name', 0),
(11, 2072.74, -1831.4, 13.5469, 0, 0, 0, 0, 0, 'The State', 'Pay \'N Spray', 7, 750000, 1, 0, 4, 1, 1, 'Business Name', 0),
(12, 488.535, -1733.87, 11.1803, 0, 0, 0, 0, 1, 'thinkzone', 'Pay \'N Spray', 7, 70000, 1, 0, 2, 1, 1, 'Business Name', 0),
(13, 1457.43, -1137.64, 23.9772, 161.38, -96.1595, 1001.8, 18, 0, 'The State', 'ZIP', 5, 50000, 1, 0, 0, 1, 0, 'Business Name', 0),
(14, 1025.26, -946.644, 42.4563, 0, 0, 0, 0, 0, 'The State', 'Gas Station', 7, 700000, 1, 0, 1, 1, 1, 'Business Name', 0),
(15, 1928.82, -1776.28, 13.5469, 0, 0, 0, 0, 0, 'The State', 'Gas Station', 7, 700000, 1, 0, 0, 1, 1, 'Business Name', 0),
(16, -78.9478, -1169.66, 2.1507, 0, 0, 0, 0, 0, 'The State', 'Gas Station', 7, 700000, 1, 0, 0, 1, 1, 'Business Name', 0),
(17, 1836.55, -1682.49, 13.343, 493.391, -22.7228, 1000.68, 17, 0, 'The State', 'Alhambra Night Club', 8, 1000000, 1, 0, 0, 1, 0, 'Business Name', 0),
(18, 1172.73, -1323.29, 15.4015, 0, 0, 0, 0, 1, 'Sayeed', 'Los Santos Hospital', 10, 100000, 2500, 0, 10750, 0, 1, 'Spitalul Judetean LS', 0),
(19, 1310.07, -1367.32, 13.5286, 0, 0, 0, 0, 0, 'The State', 'PaintBall Los Santos', 10, 1000000, 1, 0, 9, 0, 1, 'Doar pentru Campioni', 0),
(20, 1035.01, -1028.12, 32.1016, 0, 0, 0, 0, 1, 'TG.mAlwaRe', 'Transfender Los Santos', 8, 80000, 100, 0, 100, 1, 1, 'Business Name', 0),
(21, 2650.37, -2021.85, 14.1766, 0, 0, 0, 0, 0, 'The State', 'Loco Low Los Santos', 7, 750000, 1, 0, 0, 1, 1, 'Business Name', 0),
(22, 1607.42, -1560.3, 14.1787, 0, 0, 0, 0, 0, 'The State', 'Vehicle Color', 7, 750000, 1, 0, 582500, 1, 1, 'Business Name', 0),
(23, 1471.06, -1177.85, 23.9209, 0, 0, 0, 0, 0, 'The State', 'Insurance and Vehicle Registrations', 10, 1000000, 1, 0, 10186, 1, 1, 'Business Name', 0),
(24, 1498.42, -1581.28, 13.5498, -794.981, 490.535, 1376.2, 1, 0, 'The State', 'Restaurant LS', 5, 50000, 1, 0, 0, 1, 0, 'Business Name', 0),
(25, 2695.72, -1704.75, 11.844, 0, 0, 0, 7, 0, 'The State', 'Racing Arena', 7, 70000, 1, 0, 0, 1, 1, 'Curse cu masini.', 0),
(26, 1631.85, -1172.57, 24.0843, -2158.85, 642.589, 1052.38, 1, 0, 'The State', 'Inside Betting', 7, 70000, 1, 1, 0, 1, 0, 'Business Name', 0),
(27, 661.292, -573.401, 16.336, -27.2973, -30.5104, 1003.56, 4, 0, 'The State', '24/7 Dillimore', 5, 500000, 1, 1, 0, 1, 0, 'Business Name', 1),
(28, 720.089, -464.703, 16.3359, 0, 0, 0, 0, 0, 'The State', 'Pay \'N Spray', 7, 750000, 1, 1, 0, 1, 0, 'Business Name', 0),
(29, 655.789, -564.87, 16.336, 0, 0, 0, 0, 0, 'The State', 'Gas Station ', 7, 700000, 1, 1, 0, 1, 1, 'Mall Romania', 0),
(30, 2596.63, 1089.36, 10.8222, 314.821, -141.432, 999.602, 7, 0, 'The State', 'Gun Shop Las Venturas', 10, 1000000, 1, 1, 0, 1, 0, 'Business Name', 1),
(31, 2577.56, 1324.95, 10.8203, 2935.27, -1803.74, 1191.07, 0, 0, 'The State', 'Bank Las Venturas', 15, 1250000, 1, 1, 0, 1, 0, 'Banca Las Venturas!', 1),
(32, 2079.55, 2045.41, 11.058, 0, 0, 0, 0, 0, 'The State', 'CNN Los Santos', 15, 1000000, 1, 0, 0, 1, 1, 'Business Name', 0),
(33, 2102.69, 2257.48, 11.0234, 161.38, -96.1595, 1001.8, 18, 0, 'The State', 'ZIP Las Venturas', 5, 500000, 1, 0, 0, 1, 0, 'Business Name', 1),
(34, 2194.2, 1990.93, 12.2969, -27.2973, -30.5104, 1003.56, 4, 0, 'The State', '24/7 Las Venturas', 5, 500000, 1, 1, 0, 1, 0, 'Business Name', 2);

-- --------------------------------------------------------

--
-- Table structure for table `clans`
--

CREATE TABLE `clans` (
  `ID` int(11) NOT NULL,
  `Name` varchar(64) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `Tag` varchar(24) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `TagType` int(11) NOT NULL DEFAULT '0',
  `Slots` int(11) NOT NULL DEFAULT '0',
  `HQType` int(11) NOT NULL DEFAULT '0',
  `HouseHQ` int(11) NOT NULL DEFAULT '0',
  `News` varchar(128) NOT NULL DEFAULT '0',
  `WWars` int(11) NOT NULL DEFAULT '0',
  `Best` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clans`
--

INSERT INTO `clans` (`ID`, `Name`, `Tag`, `TagType`, `Slots`, `HQType`, `HouseHQ`, `News`, `WWars`, `Best`) VALUES
(1, 'Faraonii', '[F]R.', 0, 5, 1, 6, 'Suntem smkery si valorosy, dar din pacate nu e o noutate pentru noi si ceilalti ', 0, 1),
(2, 'Taylor Gang', 'TG.', 0, 10, 0, 0, '0', 0, 0),
(3, 'OlteanClan', '.OCB', 1, 20, 0, 0, '0', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `dsveh`
--

CREATE TABLE `dsveh` (
  `ID` int(2) NOT NULL,
  `Model` int(11) NOT NULL,
  `Price` int(11) NOT NULL DEFAULT '1',
  `Stock` int(2) NOT NULL DEFAULT '0',
  `Doors` int(3) NOT NULL DEFAULT '1',
  `Type` varchar(25) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT 'Unknown',
  `MaxSpeed` int(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dsveh`
--

INSERT INTO `dsveh` (`ID`, `Model`, `Price`, `Stock`, `Doors`, `Type`, `MaxSpeed`) VALUES
(1, 509, 70000, 30, 0, 'Bike', 93),
(2, 481, 85000, 17, 0, 'Bike', 86),
(3, 462, 100000, 10, 0, 'Bike', 99),
(4, 499, 300000, 14, 2, 'Industrial', 109),
(5, 411, 6500000, 99, 2, 'Sport', 545);

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE `email` (
  `id` int(11) NOT NULL,
  `text` text NOT NULL,
  `playerid` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `creator` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `email`
--

INSERT INTO `email` (`id`, `text`, `playerid`, `time`, `creator`) VALUES
(1, 'Your aplication for Los Santos Police Department has been accepted.', 0, '2016-04-28 09:09:17', 0),
(2, 'Your aplication for Los Santos Police Department has been accepted.', 0, '2016-04-28 09:09:18', 0),
(3, 'Your aplication for Los Santos Police Department has been accepted.', 0, '2016-04-28 09:09:22', 0),
(4, 'Your aplication for Los Santos Police Department has been accepted.', 0, '2016-04-28 09:09:31', 0),
(5, 'Your aplication for Los Santos Police Department has been accepted.', 0, '2016-04-28 09:10:52', 0),
(6, 'Your aplication for Los Santos Police Department has been accepted.', 0, '2016-04-28 09:11:00', 0),
(7, 'Your aplication for Los Santos Police Department has been accepted.', 0, '2016-04-28 09:11:05', 0),
(8, 'Your aplication for Los Santos Police Department has been accepted.', 0, '2016-04-28 09:11:23', 0),
(9, 'Your aplication for Los Santos Police Department has been accepted.', 0, '2016-04-28 09:14:27', 0),
(10, 'Your aplication for Los Santos Police Department has been accepted.', 0, '2016-04-28 09:16:28', 0),
(11, 'Your aplication for Los Santos Police Department has been accepted.', 0, '2016-04-28 10:34:25', 0),
(12, 'Your aplication for Los Santos Police Department has been accepted.', 0, '2016-04-28 10:35:23', 0),
(13, 'Your aplication for Los Santos Police Department has been accepted.', 0, '2016-04-28 10:51:52', 0),
(14, 'Your aplication for Los Santos Police Department has been accepted.', 0, '2016-04-28 12:49:15', 0),
(15, 'Your aplication for Federal Bureau Of Investigation has been accepted.', 0, '2016-04-28 20:39:21', 0);

-- --------------------------------------------------------

--
-- Table structure for table `factionlogs`
--

CREATE TABLE `factionlogs` (
  `ID` int(11) NOT NULL,
  `FactionID` int(11) NOT NULL DEFAULT '0',
  `Leader` int(11) NOT NULL DEFAULT '0',
  `Player` int(11) NOT NULL DEFAULT '0',
  `Text` varchar(128) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `Date` varchar(128) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `factionlogs`
--

INSERT INTO `factionlogs` (`ID`, `FactionID`, `Leader`, `Player`, `Text`, `Date`) VALUES
(1, 2, 182, 175, 'Joined in a faction', '27/04/2016 - 18:55:39'),
(2, 1, 179, 201, 'Joined in a faction', '27/04/2016 - 21:43:36'),
(3, 1, 179, 201, 'Got rank 6', '27/04/2016 - 21:43:45'),
(4, 1, 179, 195, 'Joined in a faction', '27/04/2016 - 21:50:04'),
(5, 1, 179, 195, 'Got rank 4', '27/04/2016 - 21:51:02'),
(6, 1, 179, 176, 'Joined in a faction', '28/04/2016 - 13:39:50'),
(7, 7, 180, 225, 'Joined in a faction', '30/04/2016 - 15:11:03'),
(8, 7, 180, 225, 'Got rank 4', '30/04/2016 - 15:14:05'),
(9, 7, 180, 225, 'Got rank 3', '30/04/2016 - 15:14:27'),
(10, 7, 180, 225, 'Got rank 5', '30/04/2016 - 15:14:32'),
(11, 1, 179, 230, 'Joined in a faction', '30/04/2016 - 19:13:06'),
(12, 1, 179, 232, 'Joined in a faction', '30/04/2016 - 19:38:30'),
(13, 2, 182, 236, 'Joined in a faction', '30/04/2016 - 19:44:46'),
(14, 2, 182, 205, 'Joined in a faction', '30/04/2016 - 19:47:22'),
(15, 2, 182, 235, 'Joined in a faction', '30/04/2016 - 19:47:51'),
(16, 1, 179, 230, 'Got rank 5', '30/04/2016 - 19:50:28'),
(17, 1, 179, 232, 'Got rank 4', '30/04/2016 - 19:50:33'),
(18, 2, 182, 241, 'Joined in a faction', '30/04/2016 - 20:04:19'),
(19, 2, 179, 247, 'Joined in a faction', '30/04/2016 - 20:23:09'),
(20, 5, 194, 228, 'Joined in a faction', '30/04/2016 - 20:58:53'),
(21, 5, 194, 238, 'Joined in a faction', '30/04/2016 - 21:02:01'),
(22, 2, 180, 249, 'Joined in a faction', '30/04/2016 - 21:08:42'),
(23, 5, 194, 228, 'Got rank 3', '30/04/2016 - 21:10:56'),
(24, 5, 194, 238, 'Got rank 3', '30/04/2016 - 21:11:04'),
(25, 7, 241, 235, 'Joined in a faction', '30/04/2016 - 21:12:25'),
(26, 7, 241, 234, 'Joined in a faction', '30/04/2016 - 21:14:12'),
(27, 7, 241, 235, 'Got rank 6', '30/04/2016 - 21:14:16'),
(28, 7, 241, 234, 'Got rank 6', '30/04/2016 - 21:14:20'),
(29, 4, 176, 238, 'Joined in a faction', '30/04/2016 - 21:32:27'),
(30, 2, 182, 238, 'Joined in a faction', '30/04/2016 - 21:41:03'),
(31, 1, 179, 230, 'Joined in a faction', '01/05/2016 - 15:47:20'),
(32, 2, 182, 230, 'Joined in a faction', '01/05/2016 - 15:47:43'),
(33, 1, 179, 230, 'Joined in a faction', '01/05/2016 - 15:50:57'),
(34, 5, 194, 228, 'Got rank 6', '01/05/2016 - 15:57:41'),
(35, 2, 182, 229, 'Joined in a faction', '01/05/2016 - 15:58:33'),
(36, 2, 182, 229, 'Got rank 6', '01/05/2016 - 15:59:00'),
(37, 2, 229, 180, 'Joined in a faction', '01/05/2016 - 20:10:34'),
(38, 3, 229, 180, 'Joined in a faction', '01/05/2016 - 20:12:29'),
(39, 3, 229, 180, 'Got rank 2', '01/05/2016 - 20:17:36'),
(40, 2, 180, 238, 'Got rank 2', '01/05/2016 - 20:59:23'),
(41, 2, 180, 238, 'Got rank 3', '01/05/2016 - 21:00:02'),
(42, 1, 176, 230, 'Got rank 5', '02/05/2016 - 10:57:21'),
(43, 5, 182, 268, 'Joined in a faction', '13/05/2016 - 17:10:11'),
(44, 5, 182, 268, 'Got rank 6', '13/05/2016 - 17:10:12'),
(45, 5, 182, 270, 'Joined in a faction', '13/05/2016 - 22:47:17');

-- --------------------------------------------------------

--
-- Table structure for table `factionl_apply`
--

CREATE TABLE `factionl_apply` (
  `ID` int(11) NOT NULL,
  `Author` text NOT NULL,
  `Faction` int(11) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Content` text NOT NULL,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faction_apply`
--

CREATE TABLE `faction_apply` (
  `ID` int(11) NOT NULL,
  `Author` text NOT NULL,
  `Faction` int(11) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Content` text NOT NULL,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faction_complaints`
--

CREATE TABLE `faction_complaints` (
  `id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `factionid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feed`
--

CREATE TABLE `feed` (
  `id` int(11) NOT NULL,
  `text` text NOT NULL,
  `time` bigint(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feed`
--

INSERT INTO `feed` (`id`, `text`, `time`) VALUES
(103, '~276~ was banned by admin ~276~ for 69 days, reason: iei muie, mars mã de aici', 1463906414),
(102, '~236~ was banned by admin ~276~ for 69 days, reason: iei muie, mars mã de aici', 1463906409);

-- --------------------------------------------------------

--
-- Table structure for table `flogs`
--

CREATE TABLE `flogs` (
  `id` int(11) NOT NULL,
  `text` text NOT NULL,
  `playerID` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `faction` int(25) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `groupID` int(12) NOT NULL,
  `groupRankName1` varchar(32) NOT NULL DEFAULT '(null)',
  `groupRankName2` varchar(32) NOT NULL DEFAULT '(null)',
  `groupRankName3` varchar(32) NOT NULL DEFAULT '(null)',
  `groupRankName4` varchar(32) NOT NULL DEFAULT '(null)',
  `groupRankName5` varchar(32) NOT NULL DEFAULT '(null)',
  `groupRankName6` varchar(32) NOT NULL DEFAULT '(null)',
  `groupRankName7` varchar(32) NOT NULL,
  `grup` varchar(32) DEFAULT NULL,
  `groupName` varchar(255) NOT NULL DEFAULT 'None',
  `groupHQExteriorPosX` varchar(255) NOT NULL DEFAULT '0',
  `groupHQExteriorPosY` varchar(255) NOT NULL DEFAULT '0',
  `groupHQExteriorPosZ` varchar(255) NOT NULL DEFAULT '0',
  `groupHQInteriorPosX` varchar(255) NOT NULL DEFAULT '0',
  `groupHQInteriorPosY` varchar(255) NOT NULL DEFAULT '0',
  `groupHQInteriorPosZ` varchar(255) NOT NULL DEFAULT '0',
  `groupHQInteriorID` int(4) NOT NULL DEFAULT '0',
  `groupHQLockStatus` int(2) NOT NULL DEFAULT '1',
  `groupMOTD` varchar(128) NOT NULL DEFAULT '(null)',
  `groupSafePosX` varchar(255) NOT NULL DEFAULT '0',
  `groupSafePosY` varchar(255) NOT NULL DEFAULT '0',
  `groupSafePosZ` varchar(255) NOT NULL DEFAULT '0',
  `groupType` int(12) NOT NULL DEFAULT '0',
  `groupSafeMoney` int(6) NOT NULL DEFAULT '1',
  `groupSafeMats` int(6) NOT NULL DEFAULT '1',
  `groupSafeDrugs` int(6) NOT NULL DEFAULT '1',
  `groupMembers` int(6) NOT NULL DEFAULT '0',
  `groupLeader` varchar(23) NOT NULL DEFAULT 'None',
  `groupAplication` int(11) NOT NULL DEFAULT '0',
  `groupSlots` int(11) NOT NULL DEFAULT '0',
  `levelminim` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`groupID`, `groupRankName1`, `groupRankName2`, `groupRankName3`, `groupRankName4`, `groupRankName5`, `groupRankName6`, `groupRankName7`, `grup`, `groupName`, `groupHQExteriorPosX`, `groupHQExteriorPosY`, `groupHQExteriorPosZ`, `groupHQInteriorPosX`, `groupHQInteriorPosY`, `groupHQInteriorPosZ`, `groupHQInteriorID`, `groupHQLockStatus`, `groupMOTD`, `groupSafePosX`, `groupSafePosY`, `groupSafePosZ`, `groupType`, `groupSafeMoney`, `groupSafeMats`, `groupSafeDrugs`, `groupMembers`, `groupLeader`, `groupAplication`, `groupSlots`, `levelminim`) VALUES
(11, '[1]Little Gangsta', 'Leader of Los Vagos', '[3] Futu', 'Gãozar', '[5]Veteran', '[6]Vagos Prince', '(7) Al capone', NULL, 'The Corleone Family', '725.623', '-1440.4', '13.532', '2545.037', '-1304.96', '1054.641', 2, 1, '', '2546.805', '-1280.944', '1060.984', 11, 21, 0, 0, 0, 'None', 1, 10, 5),
(10, '[1] Little Gangsta', '[2] Gangsta', '[3] Original Gangsta', '[4] Pro Killer', '[5] Professional Gangsta', '[6] Salieri Prince', 'Lord of Balla`s ', NULL, 'The Tattaglia Family', '2233.568', '-1332.256', '23.981', '2544.845', '-1305.074', '1054.641', 2, 1, '', '2546.824', '-1280.949', '1060.984', 10, 0, 0, 0, 0, 'None', 1, 10, 5),
(9, 'The Disciple', 'The Unstoopable', 'The Killer ', 'The Bloody', 'The Bester', 'Nab suprem', 'Codat Infect', NULL, 'The Paterno Family', '1022.395', '-1121.421', '23.87', '2544.676', '-1304.907', '1054.641', 2, 1, '', '2546.808', '-1280.943', '1060.984', 9, 0, 0, 0, 0, 'None', 1, 10, 5),
(8, '(1)Codat cu clasa', '(2)Avansat', '(3)Rus', '(4)Manager', '(5)Legenda', 'Russian Aimer', 'Leader', NULL, 'The Barzini Family', '1123.017', '-2037.009', '69.894', '2544.451', '-1304.766', '1054.641', 2, 0, '', '2548.221', '-1281.795', '1060.984', 6, 0, 0, 0, 0, 'None', 1, 10, 5),
(7, '(1)RaMb0', '(2)AsSasSin', '(3)Sheriff', '', 'Contract Killer', 'Veteran Hitman', 'King of San Andreas.', NULL, 'Hitman Agency', '1080.952', '-345.403', '73.984', '774.15', '-48.952', '1000.586', 6, 1, '', '755.641', '-48.394', '1000.78', 12, 0, 0, 0, 1, 'None', 1, 7, 10),
(5, 'Trainee', 'Taxi Rookie', 'Experinced Driver', 'Dispacher', 'Shift Supervizor', 'Taxi Co-Owner', '[7] Taxi owner & Shaf ', NULL, 'Taxi Cab Company', '1752.803', '-1903.004', '13.563', '1700.534', '-1667.799', '20.219', 18, 1, '', '1700.948', '-1648.206', '20.219', 14, 0, 0, 0, 0, 'None', 1, 7, 3),
(6, 'Trainee', 'Taxi Rookie', 'Experinced Driver', 'Dispacher', 'Shift Supervizor', 'Taxi Co-Owner', '[7] Taxi owner & Shaf ', NULL, 'Tow Truck Company', '1752.803', '-1903.004', '13.563', '1700.534', '-1667.799', '20.219', 18, 1, '', '1700.948', '-1648.206', '20.219', 14, 0, 0, 0, 0, 'None', 1, 7, 3),
(4, '[1] Cameraman', '[2] Ziarist', '[3] Reporter local', '[4] Reporter de teren', '[5] Reporter national', '[6] News Vice-Director', '"Director-Shaf"', NULL, 'News Reporters', '-329.689', '1537.041', '76.612', '288.765', '167.185', '1007.172', 3, 1, '', '300.781', '187.928', '1007.172', 15, 0, 0, 0, 0, 'None', 1, 7, 3),
(2, '[1] F.B.I Secretar', '[2] F.B.I Agent Pietonal', '[3] F.B.I Agent Omucideri', '[4] F.B.I Agent de Marina', '[5] F.B.I Agent Secret', '[6] F.B.I Vice-Director', '[7] F.B.I Director', NULL, 'Federal Bureau Of Investigation', '626.965', '-571.779', '17.921', '246.317', '107.3', '1003.219', 10, 1, '', '258.344', '108.256', '1003.219', 1, 0, 0, 0, 0, 'None', 1, 10, 10),
(3, 'Secretar', 'Bodyguard', 'LV Inspector', 'Vice Premier', 'Premier', 'Vice Primar', 'Primar', NULL, 'Gouvernment', '1481.13', '-1772.179', '18.796', '390.386', '174.031', '1008.383', 3, 1, '', '354.371', '173.773', '1008.383', 1, 0, 0, 0, 0, 'None', 1, 5, 10),
(1, '(1) LSPD Officer', '(2) LSPD Inspector', '(3) LSPD Lieutenant', '(4) LSPD Commander', '(5) LSPD Sergeant', '(6) LSPD Vice Director', '(7) LSPD Chief', NULL, 'Los Santos Police Department', '242.258', '66.395', '1003.641', '288.765', '167.185', '1007.172', 3, 1, '', '300.817', '187.792', '1007.172', 1, 0, 0, 0, 0, 'None', 0, 10, 7);

-- --------------------------------------------------------

--
-- Table structure for table `houses`
--

CREATE TABLE `houses` (
  `ID` int(11) NOT NULL,
  `EntranceX` float NOT NULL,
  `EntranceY` float NOT NULL,
  `EntranceZ` float NOT NULL,
  `ExitX` float NOT NULL,
  `ExitY` float NOT NULL,
  `ExitZ` float NOT NULL,
  `Owner` varchar(24) NOT NULL,
  `Value` int(11) NOT NULL,
  `Interior` int(11) NOT NULL,
  `Lock` int(11) NOT NULL,
  `Owned` int(11) NOT NULL,
  `Rent` int(11) NOT NULL,
  `Rentable` int(11) NOT NULL,
  `Safe` int(11) NOT NULL,
  `Level` int(11) NOT NULL,
  `World` int(11) NOT NULL,
  `SellPrice` int(8) NOT NULL DEFAULT '0',
  `Type` int(11) NOT NULL,
  `Name` varchar(64) NOT NULL DEFAULT 'House Name'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `houses`
--

INSERT INTO `houses` (`ID`, `EntranceX`, `EntranceY`, `EntranceZ`, `ExitX`, `ExitY`, `ExitZ`, `Owner`, `Value`, `Interior`, `Lock`, `Owned`, `Rent`, `Rentable`, `Safe`, `Level`, `World`, `SellPrice`, `Type`, `Name`) VALUES
(1, 1497.18, -687.994, 95.563, 140.17, 1366.07, 1083.65, 'MarianBoSS', 100000, 5, 1, 1, 10, 1, 0, 10, 1, 0, 0, 'House Name'),
(2, 1527.75, -772.519, 80.578, 261.12, 1284.3, 1080.26, 'The State', 50000, 4, 1, 0, 1, 1, 0, 5, 2, 0, 0, 'House Name'),
(3, 1535.04, -800.175, 72.849, 2468.84, -1698.24, 1013.51, 'The State', 50000, 2, 1, 0, 1, 0, 0, 5, 3, 0, 0, 'House Name'),
(4, 1540.29, -851.471, 64.336, 22.88, 1403.33, 1084.44, 'The State', 60000, 5, 1, 0, 1, 0, 0, 6, 4, 0, 0, 'House Name'),
(5, 1535.83, -885.361, 57.657, 2283.04, -1140.28, 1050.9, 'The State', 300000, 11, 1, 0, 1, 0, 0, 3, 5, 0, 0, 'House Name'),
(6, 1468.58, -906.167, 54.836, -68.81, 1351.21, 1080.21, '[F]R.TreNdy', 50000, 6, 1, 1, 5, 0, 0, 5, 6, 0, 0, 'House Name'),
(7, 1421.91, -886.227, 50.686, 2317.89, -1026.76, 1050.22, 'The State', 50000, 9, 1, 0, 1, 1, 0, 5, 7, 0, 0, 'House Name'),
(8, 1411.26, -920.896, 38.422, 24.04, 1340.17, 1084.38, 'The State', 650000, 10, 1, 0, 1, 0, 0, 6, 8, 0, 0, 'House Name'),
(9, 1440.8, -926.188, 39.648, 24.04, 1340.17, 1084.38, 'The State', 650000, 10, 1, 0, 1, 0, 0, 6, 9, 0, 0, 'House Name'),
(10, 1298.47, -798.083, 84.141, 234.19, 1063.73, 1084.21, 'The State', 100000, 6, 1, 0, 69, 1, 0, 10, 10, 0, 0, 'House Name'),
(11, 2451.94, -1641.42, 14.066, 223.2, 1287.08, 1082.14, 'The State', 700000, 1, 1, 0, 1, 0, 0, 7, 11, 0, 0, 'House Name'),
(12, 2486.36, -1644.53, 14.077, 223.2, 1287.08, 1082.14, 'The State', 700000, 1, 1, 0, 1, 0, 0, 7, 12, 0, 0, 'House Name'),
(13, 2498.58, -1642.27, 14.113, 223.2, 1287.08, 1082.14, 'The State', 700000, 1, 1, 0, 1, 0, 0, 7, 13, 0, 0, 'House Name'),
(14, 2513.65, -1650.18, 14.356, 223.2, 1287.08, 1082.14, 'The State', 700000, 1, 1, 0, 1, 0, 0, 7, 14, 0, 0, 'House Name'),
(15, 2524.71, -1658.55, 15.824, 223.2, 1287.08, 1082.14, 'The State', 700000, 1, 1, 0, 1, 0, 0, 7, 15, 0, 0, 'House Name'),
(16, 2514.34, -1691.57, 14.046, 223.2, 1287.08, 1082.14, 'The State', 700000, 1, 1, 0, 1, 0, 0, 7, 16, 0, 0, 'House Name'),
(17, 2413.89, -1646.79, 14.012, 223.2, 1287.08, 1082.14, 'The State', 700000, 1, 1, 0, 1, 0, 0, 7, 17, 0, 0, 'House Name'),
(18, 2408.95, -1674.91, 14.375, 223.2, 1287.08, 1082.14, 'The State', 700000, 1, 1, 0, 1, 0, 0, 7, 18, 0, 0, 'House Name'),
(19, 2393.33, -1646.03, 13.905, 223.2, 1287.08, 1082.14, 'The State', 700000, 1, 1, 0, 1, 0, 0, 7, 19, 0, 0, 'House Name'),
(20, 2384.81, -1675.83, 15.246, 223.2, 1287.08, 1082.14, 'The State', 700000, 1, 1, 0, 1, 0, 0, 7, 20, 0, 0, 'House Name'),
(21, 2368.4, -1675.34, 14.168, 223.2, 1287.08, 1082.14, 'The State', 700000, 1, 1, 0, 1, 0, 0, 7, 21, 0, 0, 'House Name'),
(22, 2362.8, -1643.16, 14.352, 223.2, 1287.08, 1082.14, 'The State', 700000, 1, 1, 0, 1, 0, 0, 7, 22, 0, 0, 'House Name'),
(23, 1094.03, -807.054, 107.419, 2270.38, -1210.35, 1047.56, 'The State', 750000, 10, 1, 0, 1, 0, 0, 8, 23, 0, 0, 'House Name'),
(24, 2326.9, -1681.93, 14.93, 223.2, 1287.08, 1082.14, 'The State', 700000, 1, 1, 0, 1, 0, 0, 7, 24, 0, 0, 'House Name'),
(25, 1034.79, -813.183, 101.852, 261.12, 1284.3, 1080.26, 'The State', 500000, 4, 1, 0, 1, 0, 0, 5, 25, 0, 0, 'House Name'),
(26, 989.773, -828.671, 95.469, 221.92, 1140.2, 1082.61, 'The State', 650000, 4, 1, 0, 1, 0, 0, 6, 26, 0, 0, 'House Name'),
(27, 937.813, -848.739, 93.577, -68.81, 1351.21, 1080.21, 'The State', 50000, 6, 1, 0, 1, 0, 0, 5, 27, 0, 0, 'House Name'),
(28, 827.634, -858.049, 70.331, -68.81, 1351.21, 1080.21, 'The State', 50000, 6, 1, 0, 1, 0, 0, 5, 28, 0, 0, 'House Name'),
(29, 835.862, -894.79, 68.769, 491.07, 1398.5, 1080.26, 'The State', 800000, 2, 1, 0, 1, 0, 0, 10, 29, 0, 0, 'House Name'),
(30, 315.604, -1139.06, 81.593, 235.34, 1186.68, 1080.26, 'The State', 2000000, 3, 1, 0, 1, 0, 0, 10, 30, 0, 0, 'House Name'),
(31, 1111.32, -976.447, 42.766, 2196.85, -1204.25, 1049.02, 'The State', 50000, 6, 1, 0, 1, 0, 0, 5, 31, 0, 0, 'House Name'),
(32, -553.428, 2593.95, 53.935, 226.3, 1114.24, 1080.99, 'Sayeed', 50000, 5, 0, 1, 1, 1, 9, 5, 32, 0, 0, 'House Name'),
(33, 1045.08, -642.953, 120.117, 140.17, 1366.07, 1083.65, 'The State', 10000, 5, 1, 0, 1, 1, 0, 1, 33, 0, 0, 'House Name'),
(34, 870.24, -25.364, 63.956, -260.49, 1456.75, 1084.37, 'The State', 50000, 4, 1, 0, 1, 1, 0, 5, 34, 0, 0, 'House Name'),
(35, 1331.9, -633.192, 109.135, 140.17, 1366.07, 1083.65, 'The State', 10000, 5, 1, 0, 69, 0, 0, 1, 35, 0, 0, 'House Name'),
(36, 980.453, -676.869, 121.976, 140.17, 1366.07, 1083.65, 'Alex_Alex224', 10000, 5, 0, 1, 1, 1, 0, 1, 36, 0, 0, 'House Name'),
(37, 965.575, -847.027, 95.527, 140.17, 1366.07, 1083.65, 'The State', 10000, 5, 1, 0, 500, 0, 0, 1, 37, 0, 0, 'House Name'),
(38, 859.026, -844.92, 77.381, 140.17, 1366.07, 1083.65, 'The State', 10000, 5, 1, 0, 1, 0, 0, 1, 38, 0, 0, 'House Name'),
(39, 808.591, -759.088, 76.531, 140.17, 1366.07, 1083.65, 'ReTurN', 10000, 5, 1, 1, 1, 0, 0, 1, 39, 0, 0, 'House Name'),
(40, 977.328, -770.871, 112.203, 140.17, 1366.07, 1083.65, 'The State', 10000, 5, 1, 0, 10, 0, 0, 1, 40, 0, 0, 'House Name'),
(41, 897.938, -678.059, 116.89, 140.17, 1366.07, 1083.65, 'Boquila', 10000, 5, 0, 1, 100, 1, 0, 1, 41, 0, 0, 'House Name'),
(42, 945.494, -709.671, 122.211, 140.17, 1366.07, 1083.65, 'The State', 10000, 5, 1, 0, 1, 0, 0, 1, 42, 0, 0, 'House Name'),
(43, 1442.78, -628.835, 95.719, 140.17, 1366.07, 1083.65, 'The State', 10000, 5, 1, 0, 1, 0, 0, 1, 43, 0, 0, 'House Name'),
(44, 1095.07, -647.36, 113.648, 140.17, 1366.07, 1083.65, 'FunFlash', 10000, 5, 1, 1, 1, 0, 0, 1, 44, 0, 0, 'House Name'),
(45, 300.393, -1154.6, 81.391, 140.17, 1366.07, 1083.65, 'OnLyKeNz[]', 10000, 5, 1, 1, 1, 0, 0, 1, 45, 0, 0, 'House Name'),
(46, 219.781, -1250.21, 78.333, 140.17, 1366.07, 1083.65, 'The State', 10000, 5, 1, 0, 1, 0, 0, 1, 46, 0, 0, 'House Name'),
(47, 251.942, -1220.09, 76.102, 140.17, 1366.07, 1083.65, 'Deceneu.[]', 10000, 5, 0, 1, 69, 1, 69, 1, 47, 0, 0, 'House Name'),
(48, 253.472, -1269.81, 74.43, 140.17, 1366.07, 1083.65, 'Jack', 10000, 5, 1, 1, 1, 0, 0, 1, 48, 0, 0, 'House Name'),
(49, 189.639, -1308.46, 70.249, 140.17, 1366.07, 1083.65, 'Asoman', 10000, 5, 1, 1, 1, 0, 0, 1, 49, 0, 0, 'House Name'),
(50, -2425.55, 337.559, 37.002, -283.44, 1470.93, 1084.38, 'ady.bo$$', 10000, 15, 0, 1, 1, 1, 0, 1, 50, 0, 0, 'House Name'),
(51, 1981.05, -1719.22, 17.031, 226.3, 1114.24, 1080.99, 'The State', 80000, 5, 1, 0, 100, 1, 0, 8, 51, 0, 0, 'House Name'),
(52, 953.495, -911.287, 45.766, 140.17, 1366.07, 1083.65, 'The State', 10000, 5, 1, 0, 1, 0, 0, 1, 52, 0, 0, 'House Name'),
(53, 347.482, -2041.29, 9.312, 140.17, 1366.07, 1083.65, 'The State', 50000, 5, 1, 0, 1, 0, 0, 5, 53, 0, 0, 'House Name'),
(54, 1518.34, -1453.92, 14.208, 234.19, 1063.73, 1084.21, 'The State', 200000, 6, 1, 0, 1, 0, 0, 20, 54, 0, 0, 'House Name'),
(55, 1457.43, 2773.29, 10.82, 140.17, 1366.07, 1083.65, 'The State', 1, 5, 1, 0, 1, 0, 0, 1, 55, 0, 0, 'House Name'),
(56, -2720.54, -320.34, 7.844, 234.19, 1063.73, 1084.21, 'The State', 50000, 6, 1, 0, 1, 0, 0, 5, 56, 0, 0, 'House Name'),
(57, -2717.95, -317.737, 7.844, 234.19, 1063.73, 1084.21, 'RaduRS.OCB', 50000, 6, 1, 1, 1, 0, 0, 5, 57, 0, 0, 'House Name'),
(58, 346.181, -2065.21, 9.307, -260.49, 1456.75, 1084.37, 'Albert.OCB', 10000, 4, 1, 1, 1, 0, 0, 1, 58, 0, 0, 'House Name');

-- --------------------------------------------------------

--
-- Table structure for table `lastpunish`
--

CREATE TABLE `lastpunish` (
  `id` int(11) NOT NULL,
  `text` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `playerID` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lostpass`
--

CREATE TABLE `lostpass` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip` varchar(50) NOT NULL,
  `token` varchar(255) NOT NULL,
  `time` bigint(20) NOT NULL,
  `expire` bigint(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mdc`
--

CREATE TABLE `mdc` (
  `ID` int(11) NOT NULL,
  `Crime1` varchar(32) NOT NULL DEFAULT 'None',
  `Crime1W` int(11) NOT NULL DEFAULT '0',
  `Crime2` varchar(32) NOT NULL DEFAULT 'None',
  `Crime2W` int(11) NOT NULL DEFAULT '0',
  `Crime3` varchar(32) NOT NULL DEFAULT 'None',
  `Crime3W` int(11) NOT NULL DEFAULT '0',
  `Crime4` varchar(32) NOT NULL DEFAULT 'None',
  `Crime4W` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mdc`
--

INSERT INTO `mdc` (`ID`, `Crime1`, `Crime1W`, `Crime2`, `Crime2W`, `Crime3`, `Crime3W`, `Crime4`, `Crime4W`) VALUES
(1, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(2, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(3, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(4, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(5, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(6, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(7, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(8, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(9, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(10, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(11, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(12, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(13, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(14, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(15, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(16, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(17, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(18, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(19, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(21, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(22, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(23, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(24, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(25, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(26, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(27, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(28, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(29, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(30, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(31, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(32, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(33, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(34, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(35, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(36, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(37, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(38, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(41, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(42, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(43, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(45, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(46, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(47, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(48, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(49, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(50, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(52, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(53, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(54, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(55, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(56, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(57, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(58, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(59, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(60, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(61, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(62, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(63, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(64, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(65, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(66, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(67, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(68, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(69, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(70, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(71, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(72, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(73, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(74, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(75, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(76, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(77, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(78, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(79, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(80, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(81, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(82, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(83, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(84, 'Nu ai acceptat ticket', 6, 'None', 0, 'None', 0, 'None', 0),
(85, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(86, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(87, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(88, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(89, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(90, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(91, 'Car Jacking', 1, 'Car Jacking', 1, 'None', 0, 'None', 0),
(92, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(93, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(94, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(95, 'Robing the bank', 6, 'None', 0, 'None', 0, 'None', 0),
(96, 'Robing the bank', 6, 'None', 0, 'None', 0, 'None', 0),
(97, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(98, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(99, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(101, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(102, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(103, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(104, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(105, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(106, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(107, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(108, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(109, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(110, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(111, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(112, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(113, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(114, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(115, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(117, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(118, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(119, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(120, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(121, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(122, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(123, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(124, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(125, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(126, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(127, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(128, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(129, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(130, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(131, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(132, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(133, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(134, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(135, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(136, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(137, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(138, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(139, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(141, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(142, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(143, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(144, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(145, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(146, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(147, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(148, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(149, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(150, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(151, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(153, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(154, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(155, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(156, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(157, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(158, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(159, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(160, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(161, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(162, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(163, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(164, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(165, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(166, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(167, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(168, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(169, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(170, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(171, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(173, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(174, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(175, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(176, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(177, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(178, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(179, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(180, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(181, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(182, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(183, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(184, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(185, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(186, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(187, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(188, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(189, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(190, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(191, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(193, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(194, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(195, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(196, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(197, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(198, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(199, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(200, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(201, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(202, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(203, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(204, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(205, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(206, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(207, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(208, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(209, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(210, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(211, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(212, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(213, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(214, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(215, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(216, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(217, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(218, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(219, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(220, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(221, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(222, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(223, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(224, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(225, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(226, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(227, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(228, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(229, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(230, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(231, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(232, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(234, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(235, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(236, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(238, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(241, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(247, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(249, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(251, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(253, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(256, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(257, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(259, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(260, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(261, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(262, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(263, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(264, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(265, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(267, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(268, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(270, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(271, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(273, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(274, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(275, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(276, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(279, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(280, 'None', 0, 'None', 0, 'None', 0, 'None', 0),
(282, 'None', 0, 'None', 0, 'None', 0, 'None', 0);

-- --------------------------------------------------------

--
-- Table structure for table `newss`
--

CREATE TABLE `newss` (
  `message` varchar(250) NOT NULL,
  `author` varchar(21) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `text` text NOT NULL,
  `time` bigint(20) NOT NULL,
  `seen` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `others`
--

CREATE TABLE `others` (
  `ID` int(11) NOT NULL,
  `Charity` int(11) NOT NULL DEFAULT '0',
  `Tax` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `phonelogs`
--

CREATE TABLE `phonelogs` (
  `logID` int(32) NOT NULL,
  `phoneNumber` int(32) NOT NULL,
  `phoneName` varchar(24) NOT NULL,
  `phoneAction` varchar(768) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `ID` int(11) NOT NULL,
  `Name` varchar(25) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT 'name',
  `AName` varchar(25) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT 'aname',
  `Password` varchar(64) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT 'password',
  `Level` int(11) NOT NULL DEFAULT '1',
  `AdminLevel` int(11) NOT NULL DEFAULT '0',
  `HelperLevel` int(11) NOT NULL DEFAULT '0',
  `Cash` int(24) NOT NULL DEFAULT '25000',
  `Account` int(24) NOT NULL DEFAULT '50000',
  `Email` varchar(128) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT 'email@default.com',
  `Registred` int(11) NOT NULL DEFAULT '0',
  `Tutorial` int(11) NOT NULL DEFAULT '0',
  `Sex` int(11) NOT NULL DEFAULT '0',
  `Age` int(11) NOT NULL DEFAULT '0',
  `PhoneNumber` int(11) NOT NULL DEFAULT '0',
  `PhoneBook` int(11) NOT NULL DEFAULT '0',
  `WalkieTalkie` int(11) NOT NULL DEFAULT '0',
  `Lighter` int(11) NOT NULL DEFAULT '0',
  `Cigarettes` int(11) NOT NULL DEFAULT '0',
  `PremiumAccount` int(11) DEFAULT '0',
  `Respect` int(11) NOT NULL DEFAULT '0',
  `PayCheck` int(11) NOT NULL DEFAULT '0',
  `PayDay` int(11) NOT NULL DEFAULT '0',
  `PayDayHad` int(11) NOT NULL DEFAULT '0',
  `HoursPlayed` int(11) NOT NULL DEFAULT '0',
  `Leader` int(11) NOT NULL DEFAULT '0',
  `Member` int(11) NOT NULL DEFAULT '0',
  `Rank` int(11) NOT NULL DEFAULT '0',
  `Skin` int(11) NOT NULL DEFAULT '299',
  `FWarns` int(11) NOT NULL DEFAULT '0',
  `FPunish` int(11) NOT NULL DEFAULT '0',
  `Warns` int(11) NOT NULL DEFAULT '0',
  `Muted` int(11) NOT NULL DEFAULT '0',
  `MuteTime` int(24) NOT NULL DEFAULT '0',
  `DrivingLic` int(11) NOT NULL DEFAULT '0',
  `FlyingLic` int(11) NOT NULL DEFAULT '0',
  `GunLic` int(11) NOT NULL DEFAULT '0',
  `SailLic` int(11) NOT NULL DEFAULT '0',
  `FishingLic` int(11) NOT NULL DEFAULT '0',
  `BiggestFish` int(11) NOT NULL DEFAULT '0',
  `Job` int(11) NOT NULL DEFAULT '0',
  `StockPile` int(11) NOT NULL DEFAULT '0',
  `Wanted` int(11) NOT NULL DEFAULT '0',
  `WantedLost` int(11) NOT NULL DEFAULT '1800',
  `Jailed` int(11) NOT NULL DEFAULT '0',
  `JailTime` int(11) NOT NULL DEFAULT '0',
  `Bail` int(11) NOT NULL DEFAULT '0',
  `Materials` int(11) NOT NULL DEFAULT '0',
  `Drugs` int(11) NOT NULL DEFAULT '0',
  `HouseKey` int(11) NOT NULL DEFAULT '0',
  `RentKey` int(11) NOT NULL DEFAULT '0',
  `BizzKey` int(11) NOT NULL DEFAULT '0',
  `HeadValue` int(24) NOT NULL DEFAULT '0',
  `Contracted` int(11) NOT NULL DEFAULT '0',
  `Contract` varchar(25) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT 'No-one',
  `ContractTime` int(24) NOT NULL DEFAULT '0',
  `TowPoints` int(11) NOT NULL DEFAULT '0',
  `SpawnChange` int(11) NOT NULL DEFAULT '1',
  `AJailed` int(11) NOT NULL DEFAULT '0',
  `AJailTime` int(11) NOT NULL DEFAULT '0',
  `Referral` int(11) NOT NULL DEFAULT '-1',
  `Rob` int(11) NOT NULL DEFAULT '0',
  `FreePoints` int(11) NOT NULL DEFAULT '0',
  `CLeader` int(11) NOT NULL DEFAULT '0',
  `CMember` int(11) NOT NULL DEFAULT '0',
  `CRank` int(11) NOT NULL DEFAULT '0',
  `Kills` int(11) NOT NULL DEFAULT '0',
  `Deaths` int(11) NOT NULL DEFAULT '0',
  `Crimes` int(11) NOT NULL DEFAULT '0',
  `Arrests` int(11) NOT NULL DEFAULT '0',
  `WantedDeaths` int(11) NOT NULL DEFAULT '0',
  `VehicleSlots` int(11) NOT NULL DEFAULT '3',
  `TruckerSkill` int(11) NOT NULL DEFAULT '0',
  `GarbageSkill` int(11) NOT NULL DEFAULT '0',
  `RobSkill` int(11) NOT NULL DEFAULT '0',
  `MechanicSkill` int(11) NOT NULL DEFAULT '0',
  `FarmerSkill` int(11) NOT NULL DEFAULT '0',
  `WoodSkill` int(11) NOT NULL DEFAULT '0',
  `PizzaSkill` int(11) NOT NULL DEFAULT '0',
  `TReferralRespect` int(11) NOT NULL DEFAULT '0',
  `TReferralMoney` int(11) NOT NULL DEFAULT '0',
  `ReferralRespect` int(11) NOT NULL DEFAULT '0',
  `ReferralMoney` int(11) NOT NULL DEFAULT '0',
  `PlayerPickups` varchar(256) NOT NULL DEFAULT '0',
  `Achievements` varchar(128) NOT NULL DEFAULT '0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0',
  `Coins` int(11) NOT NULL DEFAULT '0',
  `MoneyBoost` int(11) NOT NULL DEFAULT '0',
  `RPBoost` int(11) NOT NULL DEFAULT '0',
  `TutVeh` int(11) NOT NULL DEFAULT '0',
  `Fuel` int(11) NOT NULL DEFAULT '0',
  `Status` int(11) NOT NULL DEFAULT '0',
  `RegisteredDate` varchar(128) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT '01/01/2013 00:00',
  `LastLogin` varchar(128) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT '01/01/2013 00:00',
  `Gift` int(11) NOT NULL DEFAULT '0',
  `Banned` int(11) NOT NULL DEFAULT '0',
  `PIN` int(11) NOT NULL DEFAULT '0',
  `GiftPoints` int(11) NOT NULL DEFAULT '0',
  `newemail` int(11) NOT NULL,
  `playerEmail` int(11) NOT NULL,
  `Inima` int(11) NOT NULL DEFAULT '0',
  `Inima2` int(11) NOT NULL DEFAULT '0',
  `Inima3` int(11) NOT NULL DEFAULT '0',
  `Inima4` int(11) NOT NULL DEFAULT '0',
  `Inima5` int(11) NOT NULL DEFAULT '0',
  `Inima6` int(11) NOT NULL DEFAULT '0',
  `Inima7` int(11) NOT NULL DEFAULT '0',
  `Inima8` int(11) NOT NULL DEFAULT '0',
  `Inima9` int(11) NOT NULL DEFAULT '0',
  `Inima10` int(11) NOT NULL DEFAULT '0',
  `Inima11` int(11) NOT NULL DEFAULT '0',
  `Inima12` int(11) NOT NULL DEFAULT '0',
  `Inima13` int(11) NOT NULL DEFAULT '0',
  `Inima14` int(11) NOT NULL DEFAULT '0',
  `Inima15` int(11) NOT NULL DEFAULT '0',
  `Inima16` int(11) NOT NULL DEFAULT '0',
  `Inima17` int(11) NOT NULL DEFAULT '0',
  `Inima18` int(11) NOT NULL DEFAULT '0',
  `Inima19` int(11) NOT NULL DEFAULT '0',
  `Inima20` int(11) NOT NULL DEFAULT '0',
  `Inima21` int(11) NOT NULL DEFAULT '0',
  `Inima22` int(11) NOT NULL DEFAULT '0',
  `Inima23` int(11) NOT NULL DEFAULT '0',
  `Inima24` int(11) NOT NULL DEFAULT '0',
  `Inima25` int(11) NOT NULL DEFAULT '0',
  `Inima26` int(11) NOT NULL DEFAULT '0',
  `Inima27` int(11) NOT NULL DEFAULT '0',
  `Inima28` int(11) NOT NULL DEFAULT '0',
  `Inima29` int(11) NOT NULL DEFAULT '0',
  `Inima30` int(11) NOT NULL DEFAULT '0',
  `Inima31` int(11) NOT NULL DEFAULT '0',
  `Inima32` int(11) NOT NULL DEFAULT '0',
  `Inima33` int(11) NOT NULL DEFAULT '0',
  `Inima34` int(11) NOT NULL DEFAULT '0',
  `Inima35` int(11) NOT NULL DEFAULT '0',
  `Inima36` int(11) NOT NULL DEFAULT '0',
  `Inima37` int(11) NOT NULL DEFAULT '0',
  `Inima38` int(11) NOT NULL DEFAULT '0',
  `Inima39` int(11) NOT NULL DEFAULT '0',
  `Inima40` int(11) NOT NULL DEFAULT '0',
  `Inima41` int(11) NOT NULL DEFAULT '0',
  `Inima42` int(11) NOT NULL DEFAULT '0',
  `Inima43` int(11) NOT NULL DEFAULT '0',
  `Inima44` int(11) NOT NULL DEFAULT '0',
  `Inima45` int(11) NOT NULL DEFAULT '0',
  `Inima46` int(11) NOT NULL DEFAULT '0',
  `Inima47` int(11) NOT NULL DEFAULT '0',
  `Inima48` int(11) NOT NULL DEFAULT '0',
  `Inima49` int(11) NOT NULL DEFAULT '0',
  `Inima50` int(11) NOT NULL DEFAULT '0',
  `Inimi` int(11) NOT NULL DEFAULT '0',
  `Married` varchar(11) NOT NULL DEFAULT 'Name',
  `MarriedTo` varchar(11) NOT NULL DEFAULT 'name',
  `Limba` int(11) NOT NULL DEFAULT '0',
  `rpgon` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`ID`, `Name`, `AName`, `Password`, `Level`, `AdminLevel`, `HelperLevel`, `Cash`, `Account`, `Email`, `Registred`, `Tutorial`, `Sex`, `Age`, `PhoneNumber`, `PhoneBook`, `WalkieTalkie`, `Lighter`, `Cigarettes`, `PremiumAccount`, `Respect`, `PayCheck`, `PayDay`, `PayDayHad`, `HoursPlayed`, `Leader`, `Member`, `Rank`, `Skin`, `FWarns`, `FPunish`, `Warns`, `Muted`, `MuteTime`, `DrivingLic`, `FlyingLic`, `GunLic`, `SailLic`, `FishingLic`, `BiggestFish`, `Job`, `StockPile`, `Wanted`, `WantedLost`, `Jailed`, `JailTime`, `Bail`, `Materials`, `Drugs`, `HouseKey`, `RentKey`, `BizzKey`, `HeadValue`, `Contracted`, `Contract`, `ContractTime`, `TowPoints`, `SpawnChange`, `AJailed`, `AJailTime`, `Referral`, `Rob`, `FreePoints`, `CLeader`, `CMember`, `CRank`, `Kills`, `Deaths`, `Crimes`, `Arrests`, `WantedDeaths`, `VehicleSlots`, `TruckerSkill`, `GarbageSkill`, `RobSkill`, `MechanicSkill`, `FarmerSkill`, `WoodSkill`, `PizzaSkill`, `TReferralRespect`, `TReferralMoney`, `ReferralRespect`, `ReferralMoney`, `PlayerPickups`, `Achievements`, `Coins`, `MoneyBoost`, `RPBoost`, `TutVeh`, `Fuel`, `Status`, `RegisteredDate`, `LastLogin`, `Gift`, `Banned`, `PIN`, `GiftPoints`, `newemail`, `playerEmail`, `Inima`, `Inima2`, `Inima3`, `Inima4`, `Inima5`, `Inima6`, `Inima7`, `Inima8`, `Inima9`, `Inima10`, `Inima11`, `Inima12`, `Inima13`, `Inima14`, `Inima15`, `Inima16`, `Inima17`, `Inima18`, `Inima19`, `Inima20`, `Inima21`, `Inima22`, `Inima23`, `Inima24`, `Inima25`, `Inima26`, `Inima27`, `Inima28`, `Inima29`, `Inima30`, `Inima31`, `Inima32`, `Inima33`, `Inima34`, `Inima35`, `Inima36`, `Inima37`, `Inima38`, `Inima39`, `Inima40`, `Inima41`, `Inima42`, `Inima43`, `Inima44`, `Inima45`, `Inima46`, `Inima47`, `Inima48`, `Inima49`, `Inima50`, `Inimi`, `Married`, `MarriedTo`, `Limba`, `rpgon`) VALUES
(175, 'TG.mAlwaRe', 'mAlwaRe', 'ionut123', 8, 7, 0, 689050, 348139, 'skizoionut@gmail.com', 1, 1, 1, 11, 1985967, 0, 0, 0, 0, 0, 3, 3600, 12, 0, 11, 0, 2, 1, 217, 0, 0, 0, 0, 0, 68, 0, 77, 0, 0, 0, 0, 7, 0, 1800, 0, 0, 0, 0, 0, 51, 0, 20, 0, 0, 'No-one', 0, 0, 2, 0, 0, 0, 16, 3, 2, 0, 0, 3, 9, 0, 0, 0, 3, 0, 0, 0, 0, 0, 2, 0, 0, 4000, 0, 4000, '0', '0|0|1|1|1|1|1|0|0|0|1|0|0|0|0|0|1|0|1|0|0|1|0|0|0|1', 1210, 0, 0, 1, 0, 0, '26/04/2016 - 13:48:26', '04/05/2016 - 19:32:38', 0, 0, 5274, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 'Name', 'name', 2, 1),
(176, 'Lucian50', 'aname', '12345', 10, 10, 5, 596995, 2063643, 'lucylucian8@gmail.com', 1, 1, 1, 14, 2357944, 1, 0, 20, 10, 1, 9, 6000, 20, 2, 41, 4, 0, 7, 147, 0, 0, 0, 0, 0, 993, 993, 993, 993, 0, 0, 15, 77, 0, 0, 0, 0, 0, 0, 0, 0, 0, 7, 0, 0, 'No-one', 0, 0, 1, 0, 0, 0, 12, 3, 0, 0, 0, 3, 13, 3, 0, 0, 4, 0, 0, 1, 0, 7, 1, 0, 27, 336000, 27, 336000, '0', '1|1|1|1|1|0|1|1|0|1|1|1|1|1|0|0|1|1|1|0|0|1|0|0|0|1', 460, 0, 0, 1, 0, 0, '26/04/2016 - 13:47:25', '27/05/2016 - 14:24:50', 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 'Name', 'name', 2, 1),
(177, 'HIGHMAN', 'aname', 'highman', 4, 1, 0, 166190, 110042, 'dadadx@yahoo.com', 1, 1, 1, 17, 9355222, 0, 0, 0, 0, 0, 2, 7200, 36, 0, 4, 0, 0, 0, 217, 0, 0, 0, 0, 0, 96, 0, 0, 0, 0, 0, 0, 0, 0, 1800, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'No-one', 0, 0, 1, 0, 0, 0, 4, 0, 0, 0, 0, 0, 8, 3, 0, 1, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', '0|0|0|0|0|0|0|0|0|0|1|0|0|0|0|1|0|0|1|0|0|0|0|0|0|1', 500, 0, 0, 1, 0, 0, '26/04/2016 - 13:49:27', '01/05/2016 - 22:49:47', 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Name', 'name', 2, 0),
(178, 'BruceLee', 'aname', 'SECURITATE', 3, 0, 0, 69526, 67097, 'morar_darius1@yahoo.com', 1, 1, 1, 14, 6301501, 0, 0, 0, 0, 0, 0, 4200, 21, 0, 2, 0, 0, 0, 60, 0, 0, 0, 0, 0, 98, 0, 0, 0, 0, 0, 8, 67, 0, 1800, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'No-one', 0, 0, 1, 0, 0, 176, 2, 0, 0, 0, 0, 0, 4, 0, 0, 0, 3, 0, 0, 0, 0, 2, 1, 0, 0, 0, 0, 0, '0', '0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|1|0|1|0|0|0|0|0|0|1', 300, 0, 0, 1, 0, 0, '26/04/2016 - 13:47:59', '26/04/2016 - 16:48:25', 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Name', 'name', 1, 1),
(179, 'OnLyKeNz[]', 'OnLyKeNz[]', 'Calin2016', 12, 10, 0, 81584, 627347, 'cilibiabogdan130@gmail.com', 1, 1, 1, 19, 1379505, 0, 0, 0, 0, 1, 7, 11200, 28, 1, 25, 1, 0, 7, 217, 0, 0, 0, 0, 0, 72, 0, 971, 0, 0, 0, 1, 69, 0, 1800, 0, 0, 0, 0, 0, 45, 0, 0, 0, 0, 'No-one', 0, 0, 1, 0, 0, 176, 10, 3, 0, 0, 0, 8, 21, 0, 0, 0, 5, 0, 0, 0, 0, 0, 0, 0, 0, 8000, 0, 8000, '0', '0|0|1|0|1|1|0|0|0|1|1|1|0|1|0|0|1|0|0|0|0|0|0|0|1|1', 999998759, 0, 0, 1, 0, 0, '26/04/2016 - 13:48:05', '19/05/2016 - 23:46:10', 0, 0, 0, 2, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, 'Name', 'name', 2, 1),
(180, 'TG.Trickster.', 'Trickster.', 'legenda123', 11, 9, 0, 764871, 536709, 'andrei.mihay9@yahoo.com', 1, 1, 1, 18, 1932996, 1, 1, 20, 0, 1, 1, 14000, 35, 0, 22, 1, 0, 7, 266, 0, 0, 0, 0, 0, 44, 991, 62, 0, 0, 0, 15, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, 0, 0, 'No-one', 0, 10, 1, 0, 0, 176, 16, 1, 0, 2, 5, 19, 42, 4, 1, 0, 5, 0, 0, 1, 0, 12, 1, 0, 0, 0, 0, 0, '0', '0|1|1|1|0|1|1|0|0|0|1|1|1|1|1|0|1|1|1|0|0|0|0|0|0|1', 1710, 0, 0, 1, 0, 0, '26/04/2016 - 13:49:14', '07/05/2016 - 14:54:51', 0, 0, 1234, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 'Name', 'name', 2, 1),
(181, 'Radu18', 'aname', 'Raduku2002', 2, 0, 0, 237982, 104852, 'eusuntradu1@gmail.com', 1, 1, 1, 18, 8846793, 0, 0, 0, 0, 0, 0, 2600, 13, 0, 4, 0, 0, 0, 60, 0, 0, 0, 0, 0, 96, 0, 0, 0, 0, 0, 8, 0, 0, 1800, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'No-one', 0, 0, 1, 0, 0, 179, 4, 0, 0, 0, 0, 0, 3, 0, 0, 0, 3, 0, 0, 0, 0, 4, 1, 0, 0, 0, 0, 0, '0', '0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|1|0|1|0|0|0|0|0|0|1', 400, 0, 0, 1, 0, 0, '26/04/2016 - 14:10:51', '27/04/2016 - 22:10:13', 0, 0, 0, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Name', 'name', 2, 0),
(182, 'Albert.OCB', 'Albert', 'albert2506', 69, 10, 0, 74034550, 354315, 'albertalexandru74@yahoo.com', 1, 1, 1, 16, 4495933, 0, 0, 0, 0, 1, 12, 7200, 9, 2, 24, 8, 0, 7, 271, 0, 0, 0, 1, 509, 98, 93, 1999, 0, 0, 0, 15, 5, 0, 1800, 0, 0, 0, 0, 0, 58, 0, 0, 0, 0, 'No-one', 0, 0, 2, 0, 0, 0, 9, 2, 3, 0, 0, 60, 45, 2, 0, 0, 5, 0, 0, 0, 0, 0, 0, 0, 0, 4000, 0, 4000, '0', '1|0|1|1|1|0|0|0|0|0|1|1|0|1|0|0|1|0|0|0|0|0|1|0|0|1', 999999149, 0, 0, 1, 0, 0, '26/04/2016 - 14:29:29', '21/05/2016 - 21:02:10', 0, 0, 6969, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 'Name', 'name', 2, 1),
(183, 'George4994', 'aname', 'nuomaistiu', 1, 0, 0, 25000, 50000, 'nuomaistiu@yahoo.com', 1, 1, 1, 16, 2589174, 0, 0, 0, 0, 0, 0, 600, 3, 0, 0, 0, 0, 0, 60, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1800, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'No-one', 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', '0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|1', 100, 0, 0, 0, 0, 0, '26/04/2016 - 14:30:51', '26/04/2016 - 14:30:30', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Name', 'name', 2, 0),
(184, 'PaulTheBoss', 'aname', 'romania1', 1, 0, 0, 25000, 50000, 'smariusghita@yahoo.com', 1, 1, 1, 11, 2992540, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 60, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1800, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'No-one', 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', '0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|1', 100, 0, 0, 0, 0, 0, '26/04/2016 - 14:34:22', '26/04/2016 - 14:34:05', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Name', 'name', 2, 0),
(185, 'MARYUS', 'aname', 'romania1', 2, 0, 0, 118343, 55305, 'smariusghita@yahoo.com', 1, 1, 1, 11, 9433853, 0, 0, 0, 0, 0, 1, 6600, 33, 0, 1, 0, 0, 0, 60, 0, 0, 0, 0, 0, 99, 0, 0, 0, 0, 0, 8, 150, 0, 1800, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'No-one', 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 5, 1, 0, 0, 0, 0, 0, '0', '0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|1|0|1|0|0|0|0|0|0|1', 300, 0, 0, 1, 0, 0, '26/04/2016 - 14:35:18', '26/04/2016 - 15:37:31', 0, 0, 1111, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Name', 'name', 2, 0),
(186, 'djbasudhasdlk', 'aname', '9569', 1, 0, 0, 25000, 50000, 'mihnea.banu4@gmail.com', 0, 0, 1, 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 60, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1800, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'No-one', 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', '0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0', 0, 0, 0, 0, 0, 0, '01/01/2013 00:00', '26/04/2016 - 14:42:00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Name', 'name', 2, 0),
(187, 'MihneaGaming', 'aname', '9569', 2, 0, 0, 51405, 50000, 'mihnea.banu4@gmail.com', 1, 1, 1, 9, 4187168, 0, 0, 0, 0, 0, 0, 8800, 44, 0, 0, 0, 0, 0, 60, 0, 0, 0, 0, 0, 100, 0, 0, 0, 0, 0, 10, 8, 0, 1800, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'No-one', 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 3, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, '0', '0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|1|0|1|0|0|0|0|0|0|1', 300, 0, 0, 1, 0, 0, '26/04/2016 - 14:45:00', '05/05/2016 - 16:23:02', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Name', 'name', 2, 0),
(188, 'Mr.Kup', 'aname', '95829582k', 2, 0, 0, 254346, 14000, 'creeperboom400@gmail.com', 1, 1, 1, 50, 6491035, 0, 0, 0, 0, 0, 1, 3400, 17, 0, 1, 0, 0, 0, 60, 0, 0, 0, 0, 0, 99, 0, 0, 0, 0, 0, 8, 0, 0, 1800, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'No-one', 0, 0, 1, 0, 0, 179, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 10, 0, 0, 0, 0, 0, 0, '0', '0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|1|0|1|0|0|0|0|0|0|1', 300, 0, 0, 1, 0, 0, '26/04/2016 - 14:48:11', '29/04/2016 - 15:33:32', 0, 0, 9582, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Name', 'name', 2, 0),
(189, 'Hero_Golden', 'aname', '12decembrie', 2, 0, 0, 295075, 86767, 'florymihalceanu18@gmail.com', 1, 1, 1, 10, 2019217, 0, 0, 0, 0, 0, 1, 1000, 5, 0, 3, 0, 0, 0, 60, 0, 0, 0, 0, 0, 97, 0, 0, 0, 0, 0, 10, 0, 0, 1800, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'No-one', 0, 0, 1, 0, 0, 0, 3, 0, 0, 0, 0, 0, 2, 0, 0, 0, 3, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, '0', '0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|1|0|1|0|0|0|0|0|0|1', 300, 0, 0, 1, 0, 0, '26/04/2016 - 14:49:58', '08/05/2016 - 13:34:34', 0, 0, 0, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 'Name', 'name', 2, 0),
(190, 'Shady', 'aname', 'maxim123', 1, 0, 0, 25000, 50000, 'mail.ru@mail.ru', 1, 1, 1, 23, 5477643, 0, 0, 0, 0, 0, 0, 400, 2, 0, 0, 0, 0, 0, 60, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1800, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'No-one', 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', '0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|1', 100, 0, 0, 0, 0, 0, '26/04/2016 - 14:56:45', '26/04/2016 - 14:57:49', 0, 0, 5555, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Name', 'name', 2, 1),
(191, 'Scotianu', 'aname', 'handicapat', 3, 0, 0, 677134, 81114, 'teobengu@yahoo.com', 1, 1, 1, 17, 9233897, 0, 0, 0, 0, 0, 0, 4800, 24, 0, 2, 0, 0, 0, 60, 0, 0, 0, 0, 0, 98, 99, 0, 0, 0, 0, 8, 0, 0, 1800, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'No-one', 0, 0, 1, 0, 0, 176, 2, 0, 0, 0, 0, 0, 3, 0, 0, 0, 3, 0, 0, 0, 0, 37, 0, 0, 0, 0, 0, 0, '0', '0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|1|0|1|1|0|0|0|0|0|1', 410, 0, 0, 1, 0, 0, '26/04/2016 - 15:04:12', '27/04/2016 - 19:10:38', 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Name', 'name', 2, 0),
(192, 'Dakr', 'aname', 'Boss', 1, 0, 0, 25000, 50000, 'email@default.com', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 299, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1800, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'No-one', 0, 0, 1, 0, 0, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', '0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0', 0, 0, 0, 0, 0, 0, '01/01/2013 00:00', '01/01/2013 00:00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Name', 'name', 0, 0),
(193, 'Ristei.', 'aname', 'dragos09', 1, 0, 0, 50000, 50000, '.@yahoo.ru', 1, 1, 1, 22, 1529881, 0, 0, 0, 0, 0, 1, 800, 4, 0, 0, 0, 0, 0, 60, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1800, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'No-one', 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', '0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|1', 100, 0, 0, 0, 0, 0, '26/04/2016 - 15:45:15', '26/04/2016 - 15:43:39', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Name', 'name', 2, 0),
(194, 'Asoman', 'aname', 'nucavicuulapu', 5, 0, 3, 592563, 92565, 'asoman.asoman@yahoo.com', 1, 1, 1, 14, 7489766, 0, 0, 0, 0, 0, 2, 10600, 53, 0, 3, 5, 0, 7, 61, 0, 0, 0, 0, 0, 97, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 49, 0, 0, 0, 0, 'No-one', 0, 0, 2, 0, 0, 0, 3, 0, 0, 0, 0, 1, 11, 1, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', '0|0|1|0|1|0|0|0|0|1|0|1|0|0|0|0|0|0|1|0|0|0|0|0|0|1', 600, 0, 0, 1, 0, 0, '26/04/2016 - 15:46:09', '01/05/2016 - 15:30:07', 0, 0, 1234, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Name', 'name', 2, 1),
(195, '[F]R.Andru.', 'Andru.', 'wrestling12', 3, 0, 0, 188950, 72166, 'muie@cuvox.de', 1, 1, 1, 14, 7318526, 0, 0, 0, 0, 0, 2, 2600, 13, 0, 2, 0, 1, 4, 283, 0, 0, 0, 0, 0, 98, 0, 0, 0, 0, 0, 0, 0, 0, 1800, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'No-one', 0, 0, 1, 0, 0, 0, 2, 1, 0, 1, 5, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 2, 40000, 2, 40000, '0', '0|0|0|0|0|0|1|0|0|0|0|0|0|0|0|0|0|0|1|0|0|0|0|0|0|1', 400, 0, 0, 1, 0, 0, '26/04/2016 - 15:47:29', '27/04/2016 - 21:58:02', 0, 0, 0, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 'Name', 'name', 2, 1),
(196, 'Deceneu.[]', 'aname', 'sebilie', 3, 1, 0, 68749, 72709, 'sebastian.ghidiu@yahoo.com', 1, 1, 1, 15, 3982267, 0, 0, 0, 0, 0, 3, 3000, 15, 0, 2, 0, 0, 0, 217, 0, 0, 0, 0, 0, 98, 0, 8, 0, 0, 0, 8, 0, 0, 1800, 0, 0, 0, 0, 0, 47, 0, 0, 0, 0, 'No-one', 0, 0, 2, 0, 0, 0, 2, 0, 0, 0, 0, 1, 8, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', '0|0|1|0|0|0|0|0|0|0|1|0|0|0|0|0|1|0|1|0|0|0|0|0|0|1', 550, 0, 0, 1, 0, 0, '26/04/2016 - 15:46:39', '30/04/2016 - 19:20:07', 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 'Name', 'name', 2, 0),
(197, 'CrIzZzaTu', 'aname', 'lumeamea1234', 1, 0, 0, 25000, 50000, 'stefan.cristian11@yahoo.com', 1, 1, 1, 14, 1680911, 0, 0, 0, 0, 0, 0, 600, 3, 0, 0, 0, 0, 0, 60, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1800, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'No-one', 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', '0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|1', 100, 0, 0, 0, 0, 0, '26/04/2016 - 18:54:31', '26/04/2016 - 18:54:14', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Name', 'name', 2, 0),
(198, 'KenT.', 'aname', 'telefonxxl', 1, 0, 0, 20100, 50000, 'adrianmarian53@gmail.com', 1, 1, 1, 17, 6371759, 0, 0, 0, 0, 0, 0, 2400, 12, 0, 0, 0, 0, 0, 60, 0, 0, 0, 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 1800, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'No-one', 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', '0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|1|0|0|0|0|0|0|1', 210, 0, 0, 1, 0, 0, '26/04/2016 - 19:51:54', '26/04/2016 - 19:51:29', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Name', 'name', 1, 0),
(199, 'Ca77a', 'aname', 'edicroabis', 1, 0, 0, 25000, 50000, 'edicroabis11@icloud.com', 1, 1, 1, 13, 2623011, 0, 0, 0, 0, 0, 0, 400, 2, 0, 0, 0, 0, 0, 60, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1800, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'No-one', 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', '0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|1', 100, 0, 0, 0, 0, 0, '26/04/2016 - 20:13:07', '26/04/2016 - 20:12:52', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Name', 'name', 2, 0),
(200, 'ROYNS', 'aname', 'max123', 1, 0, 0, 25000, 54505, 'maxim.negara.02@mail.ru', 1, 1, 1, 16, 2008165, 0, 0, 0, 0, 0, 1, 600, 3, 0, 1, 0, 0, 0, 217, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1800, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'No-one', 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', '0|0|0|0|0|0|0|0|0|0|1|0|0|0|0|0|0|0|0|0|0|0|0|0|0|1', 200, 0, 0, 0, 0, 0, '26/04/2016 - 20:37:09', '26/04/2016 - 20:55:53', 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Name', 'name', 2, 0),
(201, '[F]R.TreNdy', 'TreNdy', 'octav2002', 5, 0, 0, 785536, 17864, 'tavi_dumitru10@yahoo.com', 1, 1, 1, 18, 2964298, 0, 0, 0, 0, 0, 2, 3600, 18, 0, 8, 0, 1, 6, 295, 0, 0, 0, 0, 0, 92, 0, 94, 95, 0, 0, 1, 0, 0, 1800, 0, 0, 0, 0, 0, 6, 0, 0, 0, 0, 'No-one', 0, 0, 2, 0, 0, 195, 10, 3, 1, 0, 0, 4, 9, 0, 0, 0, 3, 0, 0, 0, 0, 23, 0, 0, 0, 0, 0, 0, '0', '1|0|1|0|0|0|1|0|0|0|0|0|0|0|0|0|1|0|1|0|1|0|0|0|0|1', 800, 0, 0, 1, 0, 0, '26/04/2016 - 20:58:16', '30/04/2016 - 14:28:18', 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 'Name', 'name', 2, 0),
(202, 'V1P3R', 'aname', 'v1p3r021', 1, 0, 0, 25000, 50000, 'savu)costi40@yahoo.com', 1, 1, 1, 15, 4102705, 0, 0, 0, 0, 0, 0, 200, 1, 0, 0, 0, 0, 0, 60, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1800, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'No-one', 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', '0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|1', 100, 0, 0, 0, 0, 0, '26/04/2016 - 22:08:42', '26/04/2016 - 22:08:14', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Name', 'name', 2, 0),
(203, '.NeWt0N[]', 'aname', 'ivan1234', 1, 0, 0, 20000, 50000, 'fcsbsteaua@yah00.com', 1, 1, 1, 19, 9052333, 0, 0, 0, 0, 0, 0, 1000, 5, 0, 0, 0, 0, 0, 60, 0, 0, 0, 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 1800, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'No-one', 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', '0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|1|0|0|0|0|0|0|1', 200, 0, 0, 1, 0, 0, '27/04/2016 - 10:27:32', '27/04/2016 - 10:26:19', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Name', 'name', 2, 0),
(204, 'Bobo', 'aname', 'bobo', 1, 0, 0, 20000, 50000, 'casas@yahoo.com', 1, 1, 1, 16, 4082401, 0, 0, 0, 0, 0, 0, 800, 4, 0, 0, 0, 0, 0, 60, 0, 0, 0, 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 1800, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'No-one', 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', '0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|1|0|0|0|0|0|0|1', 200, 0, 0, 1, 0, 0, '27/04/2016 - 12:52:01', '27/04/2016 - 12:51:45', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Name', 'name', 2, 0),
(205, 'igor21', 'aname', 'rotari', 3, 0, 0, 104239, 66305, 'hanawa@mail.ru', 1, 1, 1, 14, 3277983, 0, 0, 0, 0, 0, 3, 1800, 9, 0, 1, 0, 2, 1, 286, 0, 0, 0, 0, 0, 99, 0, 99, 0, 0, 0, 0, 0, 0, 1800, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'No-one', 0, 0, 1, 0, 0, 176, 1, 1, 0, 0, 0, 0, 3, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', '0|0|1|0|0|0|1|0|0|0|0|0|0|0|0|0|1|0|1|0|0|0|0|0|0|1', 550, 0, 0, 1, 0, 0, '27/04/2016 - 13:26:10', '30/04/2016 - 19:15:51', 0, 0, 3333, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Name', 'name', 2, 0),
(206, 'Raul.', 'aname', 'andreas12', 1, 0, 0, 25000, 50000, 'email@default.com', 0, 0, 1, 23, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 60, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1800, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'No-one', 0, 0, 1, 0, 0, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', '0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0', 0, 0, 0, 0, 0, 0, '01/01/2013 00:00', '27/04/2016 - 14:09:41', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Name', 'name', 2, 0),
(207, 'Yomazz', 'aname', 'handicapat', 1, 0, 0, 20100, 50000, 'yoma@yahoo.com', 1, 1, 1, 18, 3534997, 0, 0, 0, 0, 0, 0, 2400, 12, 0, 0, 0, 0, 0, 60, 0, 0, 0, 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 1800, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'No-one', 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', '0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|1|0|0|0|0|0|0|1', 200, 0, 0, 1, 0, 0, '27/04/2016 - 15:11:05', '27/04/2016 - 15:10:43', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Name', 'name', 2, 0),
(208, 'Alex_Codreanu', 'aname', 'alexcodreanu', 1, 0, 0, 69114, 50000, 'alex.codreanu@hotmail.com', 1, 1, 1, 16, 8304445, 0, 0, 0, 0, 0, 1, 3000, 15, 0, 0, 0, 0, 0, 60, 0, 0, 0, 0, 0, 100, 0, 0, 0, 0, 0, 10, 21, 0, 1800, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'No-one', 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, '0', '0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|1|0|1|0|0|0|0|0|0|1', 300, 0, 0, 1, 0, 0, '27/04/2016 - 15:58:10', '27/04/2016 - 15:56:22', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Name', 'name', 2, 0),
(209, 'Diana', 'aname', 'boule021', 1, 0, 0, 25000, 50000, 'elenaely@yahoo.com', 1, 1, 2, 16, 9514100, 0, 0, 0, 0, 0, 0, 800, 4, 0, 0, 0, 0, 0, 56, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1800, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'No-one', 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', '0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|1', 100, 0, 0, 0, 0, 0, '27/04/2016 - 16:40:58', '27/04/2016 - 16:40:39', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Name', 'name', 2, 0),
(210, 'D1aNa', 'aname', 'boule021', 1, 0, 0, 50000, 50000, 'elenaely021@yahoo.com', 1, 1, 2, 18, 9145479, 0, 0, 0, 0, 0, 1, 200, 1, 0, 0, 0, 0, 0, 56, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1800, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'No-one', 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', '0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|1', 100, 0, 0, 0, 0, 0, '27/04/2016 - 16:47:27', '27/04/2016 - 16:45:45', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Name', 'name', 2, 0),
(211, 'valy77', 'aname', 'deltaplan', 1, 0, 0, 7996, 50000, 'stanuta_v@yahoo.com', 1, 1, 1, 17, 2756273, 1, 0, 20, 0, 0, 0, 1800, 9, 0, 0, 0, 0, 0, 60, 0, 0, 0, 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 1800, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'No-one', 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', '0|1|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|1|0|0|0|0|0|0|1', 300, 0, 0, 1, 0, 0, '27/04/2016 - 17:25:48', '27/04/2016 - 17:25:18', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Name', 'name', 2, 0),
(212, 'HeyArt', 'aname', 'mosgerila13', 1, 0, 0, 45000, 50000, 'gesterx87@gmail.com', 1, 1, 1, 22, 2389548, 0, 0, 0, 0, 0, 1, 2200, 11, 0, 0, 0, 0, 0, 60, 0, 0, 0, 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 1800, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'No-one', 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', '0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|1|0|0|0|0|0|0|1', 200, 0, 0, 1, 0, 0, '27/04/2016 - 17:48:42', '28/04/2016 - 15:53:59', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Name', 'name', 1, 0),
(213, 'BoomAndru.', 'aname', 'albert2506', 1, 0, 0, 25000, 50000, 'andrei@yahoo.com', 1, 1, 1, 15, 5413502, 0, 0, 0, 0, 0, 0, 200, 1, 0, 0, 0, 0, 0, 60, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1800, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'No-one', 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', '0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|1', 100, 0, 0, 0, 0, 0, '27/04/2016 - 18:05:25', '27/04/2016 - 18:04:49', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Name', 'name', 2, 0),
(214, 'Alex', 'aname', 'albert2506', 1, 0, 0, 25000, 50000, 'andrei@yahoo.com', 1, 1, 1, 15, 4273060, 0, 0, 0, 0, 0, 0, 200, 1, 0, 0, 0, 0, 0, 60, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1800, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'No-one', 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', '0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|1', 100, 0, 0, 0, 0, 0, '27/04/2016 - 18:07:57', '27/04/2016 - 18:07:31', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Name', 'name', 2, 0),
(215, 'Adrian', 'aname', 'mercedesmh11hel', 2, 0, 0, 510051, 25063, 'asdknrkn@yahoo.com', 1, 1, 1, 18, 7585333, 1, 1, 20, 10, 0, 0, 3400, 17, 0, 2, 5, 0, 7, 61, 0, 0, 0, 0, 0, 98, 0, 0, 0, 0, 0, 0, 0, 0, 1800, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'No-one', 0, 0, 1, 0, 0, 182, 2, 0, 0, 0, 0, 0, 19, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', '0|1|0|0|0|0|0|0|0|0|0|1|0|0|0|0|0|0|0|0|0|0|0|0|0|1', 400, 0, 0, 1, 0, 0, '27/04/2016 - 18:28:58', '27/04/2016 - 22:29:14', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Name', 'name', 2, 1),
(216, 'OnlySkyy', 'aname', '12345mama', 1, 0, 0, 45000, 50000, 'grozavbogdan55@yahoo.com', 1, 1, 1, 25, 7285644, 0, 0, 0, 0, 0, 1, 1400, 7, 0, 0, 0, 0, 0, 60, 0, 0, 0, 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 1800, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'No-one', 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', '0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|1|0|0|0|0|0|0|1', 200, 0, 0, 1, 0, 0, '28/04/2016 - 12:25:35', '28/04/2016 - 12:29:59', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Name', 'name', 2, 0),
(217, 'Zevo', 'aname', 'anita2004', 1, 0, 0, 33028, 50000, 'dragnel.gamer@yahoo.com', 1, 1, 1, 22, 2972966, 0, 0, 0, 0, 0, 0, 5400, 27, 0, 0, 0, 0, 0, 60, 0, 0, 0, 0, 0, 100, 0, 0, 0, 0, 0, 8, 0, 0, 1800, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'No-one', 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 3, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, '0', '0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|1|0|1|0|0|0|0|0|0|1', 300, 0, 0, 1, 0, 0, '28/04/2016 - 12:57:37', '28/04/2016 - 15:48:48', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Name', 'name', 2, 0),
(218, 'WiNk', 'aname', '123123', 1, 0, 0, 20000, 50000, 'y@ho.ocm', 1, 1, 1, 21, 9552779, 0, 0, 0, 0, 0, 0, 2600, 13, 0, 0, 0, 0, 0, 217, 0, 0, 0, 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 1800, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'No-one', 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', '0|0|0|0|0|0|0|0|0|0|1|0|0|0|0|0|0|0|1|0|0|0|0|0|0|1', 300, 0, 0, 1, 0, 0, '28/04/2016 - 12:57:38', '28/04/2016 - 14:18:28', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Name', 'name', 2, 0),
(219, 'Furious', 'aname', 'Furious25', 2, 0, 0, 17750, 55905, 'furioustrap@gmail.com', 1, 1, 1, 21, 1685295, 0, 0, 0, 0, 0, 1, 600, 3, 0, 1, 0, 0, 0, 60, 0, 0, 0, 0, 0, 99, 0, 0, 0, 0, 0, 0, 0, 0, 1800, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'No-one', 0, 0, 1, 0, 0, 175, 1, 0, 0, 0, 0, 0, 2, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', '0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|1|0|0|0|0|0|0|1', 200, 0, 0, 1, 0, 0, '28/04/2016 - 15:31:04', '28/04/2016 - 15:29:58', 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Name', 'name', 2, 0),
(220, 'Kevin.', 'aname', 'andreas12', 1, 0, 0, 25000, 50000, 'andreas.raul2002@gmail.com', 1, 1, 1, 23, 4633321, 0, 0, 0, 0, 0, 0, 200, 1, 0, 0, 0, 0, 0, 60, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1800, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'No-one', 0, 0, 1, 0, 0, 185, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', '0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|1', 100, 0, 0, 0, 0, 0, '28/04/2016 - 19:26:58', '28/04/2016 - 19:26:34', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Name', 'name', 2, 0),
(221, 'AndreiK_YT', 'aname', 'Andrei-2003', 1, 0, 0, 31561, 50000, 'andreikgaming@gmail.com', 1, 1, 1, 13, 3243296, 0, 0, 0, 0, 0, 0, 5000, 25, 0, 0, 0, 0, 0, 60, 0, 0, 0, 0, 0, 100, 0, 0, 0, 0, 0, 10, 22, 0, 1800, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'No-one', 0, 0, 1, 0, 0, 176, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, '0', '0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|1|0|1|0|0|0|0|0|0|1', 300, 0, 0, 1, 0, 0, '29/04/2016 - 16:04:49', '29/04/2016 - 16:04:10', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Name', 'name', 2, 0),
(222, 'TheHammer', 'aname', 'poiuytrewq', 1, 0, 0, 19990, 50000, 'vamoonown@yahoo.com', 1, 1, 1, 13, 2434446, 0, 0, 0, 0, 0, 0, 3600, 18, 0, 0, 0, 0, 0, 60, 0, 0, 0, 0, 0, 100, 0, 0, 0, 0, 0, 10, 6, 0, 1800, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'No-one', 0, 0, 1, 0, 0, 221, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', '0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|1|0|1|0|0|0|0|0|0|1', 300, 0, 0, 1, 0, 0, '29/04/2016 - 16:11:17', '29/04/2016 - 16:10:32', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Name', 'name', 2, 0),
(223, 'sdk', 'aname', 'madalina2005!', 3, 0, 0, 23500, 95425, 'n.goit@mail.ru', 1, 1, 1, 17, 4084540, 0, 0, 0, 0, 0, 1, 4600, 23, 0, 8, 0, 0, 0, 217, 0, 0, 1, 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 1800, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'No-one', 0, 0, 1, 0, 0, 176, 6, 0, 0, 0, 0, 0, 4, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', '0|0|0|0|0|0|0|0|0|0|1|0|0|0|0|0|0|0|1|0|0|0|0|0|0|1', 300, 0, 0, 1, 0, 0, '29/04/2016 - 18:21:53', '01/05/2016 - 14:08:13', 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Name', 'name', 2, 0),
(224, 'TheKill', 'aname', 'nustiu98', 1, 0, 0, 20000, 50000, 'silviu.elisei@mxc.ro', 1, 1, 1, 25, 7080058, 0, 0, 0, 0, 0, 0, 600, 3, 0, 0, 0, 0, 0, 60, 0, 0, 0, 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 1800, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'No-one', 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', '0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|1|0|0|0|0|0|0|1', 200, 0, 0, 1, 0, 0, '30/04/2016 - 14:12:34', '30/04/2016 - 14:12:18', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Name', 'name', 2, 0),
(225, 'Wizzle', 'aname', 'cocojambo', 1, 0, 0, 22990, 50000, 'wizzybaby912@gmail.com', 1, 1, 1, 21, 9787895, 0, 0, 0, 0, 0, 0, 3000, 15, 0, 0, 0, 7, 5, 165, 0, 0, 0, 0, 0, 99, 0, 99, 0, 0, 0, 0, 0, 0, 1800, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 'No-one', 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', '0|0|0|0|0|1|1|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|1', 300, 0, 0, 1, 0, 0, '30/04/2016 - 15:03:53', '30/04/2016 - 17:19:27', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Name', 'name', 2, 0),
(226, 'PikachuAreShotgun', 'aname', 'foarfeca1', 3, 0, 0, 50000, 50000, 'mccristi69@yahoo.com', 1, 1, 1, 25, 2825046, 0, 0, 0, 0, 0, 1, 13200, 66, 0, 0, 10, 0, 7, 126, 0, 0, 0, 0, 0, 1000, 1000, 1000, 0, 0, 0, 9, 0, 0, 1800, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'No-one', 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', '0|0|0|0|0|0|0|0|0|0|0|1|0|0|0|0|1|0|1|0|0|0|0|0|0|1', 450, 0, 0, 1, 0, 0, '30/04/2016 - 15:05:55', '30/04/2016 - 19:26:12', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Name', 'name', 2, 0),
(227, '[Rares]', 'aname', 'Internet123', 3, 0, 1, 49750, 50000, 'simon.corbu@yahoo.co', 1, 1, 1, 14, 7120784, 0, 0, 0, 0, 0, 1, 9600, 48, 0, 0, 8, 0, 7, 271, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1800, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'No-one', 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', '0|0|0|0|0|0|0|0|0|1|0|1|0|0|0|0|0|0|0|0|0|0|0|0|0|1', 300, 0, 0, 0, 0, 0, '30/04/2016 - 18:40:10', '01/05/2016 - 17:33:52', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Name', 'name', 2, 0),
(228, 'thinkzone', 'aname', 'hergandez', 7, 1, 0, 8480842, 41539224, 'petruursachi2000@yandex.com', 1, 1, 1, 16, 5454, 1, 0, 20, 0, 0, 6, 15000, 50, 0, 14, 0, 5, 6, 217, 0, 0, 0, 0, 0, 68, 95, 68, 98, 0, 0, 10, 0, 0, 755, 0, 0, 0, 0, 3, 0, 32, 12, 0, 0, 'No-one', 0, 0, 2, 0, 0, 0, -1594, 0, 0, 0, 0, 11, 95, 191, 0, 6, 3, 0, 0, 163, 0, 4, 0, 0, 0, 0, 0, 0, '0', '0|1|1|1|1|1|1|0|0|0|1|0|1|0|0|1|1|1|1|0|0|0|0|0|0|1', 1450, 0, 0, 1, 0, 0, '30/04/2016 - 18:56:56', '06/05/2016 - 22:00:12', 0, 0, 1903, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 'Name', 'name', 2, 1),
(229, 'Sayeed', 'aname', 'dima123red', 13, 6, 0, 55846904, 100503764, 'dima_ursachi@mail.ru', 1, 1, 1, 14, 1654497, 0, 0, 0, 0, 1, 4, 19200, 48, 1, 26, 0, 0, 0, 117, 0, 0, 0, 0, 0, 56, 82, 56, 60, 0, 0, 0, 51, 0, 900, 0, 0, 0, 0, 0, 32, 0, 18, 0, 0, 'No-one', 0, 0, 2, 0, 0, 0, -4666, 3, 0, 0, 0, 13, 88, 477, 1, 1, 5, 0, 0, 472, 0, 0, 0, 0, 0, 0, 0, 0, '0', '0|1|1|1|1|1|1|0|0|0|1|1|1|1|1|1|1|1|1|0|1|0|0|0|0|1', 999999549, 36, 0, 1, 0, 0, '30/04/2016 - 18:55:28', '22/05/2016 - 13:10:59', 0, 0, 6969, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 4, 'Name', 'name', 2, 1),
(230, 'ady.bo$$', 'aname', 'adrianbogdan', 7, 0, 0, 2488277, 132347, 'ady.adrian2007@gmail.com', 1, 1, 1, 26, 5673879, 1, 1, 0, 0, 0, 0, 10800, 36, 0, 18, 0, 1, 5, 295, 0, 0, 0, 0, 0, 980, 97, 980, 0, 0, 0, 1, 0, 0, 1800, 0, 0, 0, 0, 0, 50, 0, 10, 0, 0, 'No-one', 0, 0, 2, 0, 0, 0, 12, 3, 0, 0, 0, 17, 18, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', '0|1|1|1|1|0|1|1|0|0|0|0|0|0|0|0|1|0|0|0|0|0|0|0|0|1', 950, 0, 0, 1, 0, 0, '30/04/2016 - 19:04:22', '06/05/2016 - 15:28:33', 0, 0, 1234, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Name', 'name', 2, 0),
(231, 'Adrian.....', 'aname', 'salcefaci', 3, 0, 0, 275000, 50000, 'adrian-stefan.lupitu@titeica.com', 1, 1, 1, 49, 7227080, 0, 0, 0, 0, 0, 1, 8000, 40, 0, 0, 0, 0, 0, 60, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1800, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'No-one', 0, 0, 1, 0, 0, 182, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', '0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|1', 150, 0, 0, 0, 0, 0, '30/04/2016 - 19:11:04', '30/04/2016 - 19:15:14', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Name', 'name', 2, 0),
(232, 'ReTurN', 'aname', 'dragos', 3, 0, 0, 6609998, 55705, 'sc@yahoo.ro', 1, 1, 1, 16, 4322862, 0, 0, 0, 0, 0, 3, 2000, 10, 0, 1, 0, 1, 4, 283, 0, 0, 0, 0, 0, 99, 99, 99, 99, 0, 0, 1, 0, 0, 1800, 0, 0, 0, 0, 0, 39, 0, 0, 0, 0, 'No-one', 0, 0, 1, 0, 0, 0, 1, 1, 0, 0, 0, 0, 4, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', '0|0|1|0|0|0|1|0|0|0|0|0|0|0|0|0|1|0|0|0|0|0|0|0|0|1', 450, 0, 0, 1, 0, 0, '30/04/2016 - 19:37:30', '01/05/2016 - 07:30:30', 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Name', 'name', 2, 0),
(233, 'Adrian_99', 'aname', '1243245', 1, 0, 0, 25000, 50000, 'email@default.com', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 299, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1800, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'No-one', 0, 0, 1, 0, 0, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', '0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0', 0, 0, 0, 0, 0, 0, '01/01/2013 00:00', '01/01/2013 00:00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Name', 'name', 0, 0),
(234, 'Alex_Alex224', 'aname', 'george', 4, 0, 0, 9991169, 6531843, 'asd@tag.gom', 1, 1, 2, 50, 650000, 0, 0, 0, 0, 0, 1, 5800, 29, 0, 1, 0, 7, 6, 294, 0, 0, 0, 0, 0, 98, 98, 98, 98, 0, 0, 1, 0, 0, 1800, 0, 0, 0, 0, 0, 36, 0, 0, 0, 0, 'No-One', 0, 0, 2, 0, 0, 0, 2, 0, 0, 0, 0, 0, 13, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', '0|0|1|0|1|0|1|0|0|0|0|1|0|0|0|0|1|0|0|0|0|0|0|0|0|1', 650, 0, 0, 1, 0, 0, '30/04/2016 - 19:39:17', '02/05/2016 - 14:38:22', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 'Name', 'name', 2, 0),
(235, 'Boquila', 'aname', 'MUIE1997', 5, 0, 0, 924661, 187350, 'oprea.alin.921@yahoo.com', 1, 1, 1, 32, 7971012, 0, 0, 0, 0, 1, 5, 1800, 9, 1, 7, 0, 7, 6, 294, 0, 0, 0, 0, 0, 94, 94, 72, 0, 0, 0, 1, 0, 0, 819, 0, 0, 0, 0, 0, 41, 0, 0, 0, 0, 'No-One', 0, 0, 1, 0, 0, 0, 9, 2, 0, 0, 0, 4, 17, 3, 0, 1, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', '1|0|1|0|1|0|1|0|0|0|0|0|1|1|0|1|1|0|1|0|0|1|0|0|0|1', 1150, 0, 0, 1, 0, 0, '30/04/2016 - 19:39:34', '02/05/2016 - 14:37:34', 0, 0, 0, 4, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 'Name', 'name', 2, 0),
(236, 'MarianBoSS', 'MarianBoSS', 'raidmax', 79, 1, 0, 216263623, 81044, 'matel.marian@yahoo.com', 1, 1, 1, 13, 3252780, 0, 0, 0, 0, 0, 3, 26400, 33, 0, 2, 1, 0, 7, 217, 0, 0, 0, 1, 4000, 98, 0, 98, 0, 0, 0, 1, 0, 0, 1800, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 'No-one', 0, 0, 2, 0, 0, 0, 2, 2, 0, 0, 0, 5, 7, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', '0|0|1|0|1|0|1|0|0|1|1|1|0|0|0|0|1|0|0|0|0|0|0|0|0|1', 1280730614, 0, 0, 1, 0, 0, '30/04/2016 - 19:39:14', '22/05/2016 - 11:39:51', 0, 0, 0, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Name', 'name', 2, 0),
(237, 'V@L0aR3.', 'aname', 'tudirica', 1, 0, 0, 25000, 50000, 'email@default.com', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 299, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1800, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'No-one', 0, 0, 1, 0, 0, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', '0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0', 0, 0, 0, 0, 0, 0, '01/01/2013 00:00', '01/01/2013 00:00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Name', 'name', 0, 0),
(238, 'V@L0aR3', 'aname', 'tudorica', 4, 0, 0, 39240, 169629, 'soicaradu.@1.yahoo.com', 1, 1, 1, 9, 3843245, 1, 0, 0, 0, 0, 3, 15600, 78, 0, 5, 0, 2, 3, 164, 0, 0, 0, 0, 0, 95, 0, 96, 0, 0, 0, 1, 0, 0, 1800, 0, 0, 0, 0, 1, 0, 0, 1, 0, 0, 'No-one', 0, 0, 2, 0, 0, 0, 5, 3, 0, 0, 0, 2, 18, 7, 1, 1, 3, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, '0', '0|1|1|1|0|0|1|0|0|0|0|1|1|0|1|1|1|0|1|0|0|1|0|0|0|1', 1250, 0, 0, 1, 0, 0, '30/04/2016 - 19:41:59', '03/05/2016 - 16:37:25', 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 'Name', 'name', 2, 0),
(239, 'COGEAC', 'aname', 'RAIDMAX', 1, 0, 0, 25000, 50000, 'email@default.com', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 299, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1800, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'No-one', 0, 0, 1, 0, 0, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', '0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0', 0, 0, 0, 0, 0, 0, '01/01/2013 00:00', '01/01/2013 00:00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Name', 'name', 2, 0),
(240, 'ALEX24', 'aname', 'RAIDMAX', 1, 0, 0, 25000, 50000, 'email@default.com', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 299, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1800, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'No-one', 0, 0, 1, 0, 0, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', '0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0', 0, 0, 0, 0, 0, 0, '01/01/2013 00:00', '01/01/2013 00:00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Name', 'name', 2, 0),
(241, 'FunFlash', 'aname', 'vali1122', 3, 0, 0, 151636, 88401, 'alexvali320@yahoo.com', 1, 1, 1, 13, 5250529, 0, 0, 0, 0, 0, 3, 1400, 7, 0, 2, 7, 0, 7, 294, 0, 0, 0, 0, 0, 97, 98, 97, 0, 0, 0, 1, 0, 0, 216, 0, 0, 0, 0, 0, 44, 0, 0, 0, 0, 'No-One', 0, 0, 1, 0, 0, 235, 4, 0, 0, 0, 0, 3, 12, 5, 0, 1, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', '0|0|1|0|1|0|1|0|0|0|0|1|1|0|0|1|1|0|0|0|0|0|0|0|0|1', 800, 0, 0, 1, 0, 0, '30/04/2016 - 20:01:12', '02/05/2016 - 11:35:05', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Name', 'name', 2, 0),
(242, 'ALXEAMDRU', 'aname', 'RAIDMAX', 1, 0, 0, 25000, 50000, 'email@default.com', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 299, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1800, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'No-one', 0, 0, 1, 0, 0, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', '0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0', 0, 0, 0, 0, 0, 0, '01/01/2013 00:00', '01/01/2013 00:00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Name', 'name', 2, 0),
(243, 'ALEXAMDRU', 'aname', 'RAIDMAX', 1, 0, 0, 25000, 50000, 'email@default.com', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 299, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1800, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'No-one', 0, 0, 1, 0, 0, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', '0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0', 0, 0, 0, 0, 0, 0, '01/01/2013 00:00', '01/01/2013 00:00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Name', 'name', 2, 0),
(244, 'DAVID', 'aname', 'RAIDMAX', 1, 0, 0, 25000, 50000, 'email@default.com', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 299, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1800, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'No-one', 0, 0, 1, 0, 0, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', '0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0', 0, 0, 0, 0, 0, 0, '01/01/2013 00:00', '01/01/2013 00:00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Name', 'name', 2, 0),
(245, 'jake', 'aname', 'raidmax', 1, 0, 0, 25000, 50000, 'email@default.com', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 299, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1800, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'No-one', 0, 0, 1, 0, 0, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', '0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0', 0, 0, 0, 0, 0, 0, '01/01/2013 00:00', '01/01/2013 00:00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Name', 'name', 2, 0),
(246, 'dracula', 'aname', 'raidmax', 1, 0, 0, 25000, 50000, 'email@default.com', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 299, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1800, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'No-one', 0, 0, 1, 0, 0, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', '0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0', 0, 0, 0, 0, 0, 0, '01/01/2013 00:00', '01/01/2013 00:00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Name', 'name', 0, 0),
(247, 'Jack', 'aname', 'raidmax', 3, 0, 0, 6030918, 100086, 'duhaliu.alex@yahoo.com', 1, 1, 1, 12, 8494413, 0, 0, 0, 0, 0, 2, 3400, 17, 0, 2, 0, 2, 1, 286, 0, 0, 0, 0, 0, 997, 0, 997, 0, 0, 0, 1, 0, 0, 1800, 0, 0, 0, 0, 0, 48, 0, 0, 10000, 0, 'No-one', 0, 0, 1, 0, 0, 0, 2, 2, 0, 0, 0, 0, 6, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', '0|0|1|0|1|0|1|0|0|0|0|0|0|0|0|0|1|0|0|0|0|0|0|0|0|1', 500, 0, 0, 1, 0, 0, '30/04/2016 - 20:12:31', '07/05/2016 - 14:45:06', 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 'Name', 'name', 2, 0);
INSERT INTO `players` (`ID`, `Name`, `AName`, `Password`, `Level`, `AdminLevel`, `HelperLevel`, `Cash`, `Account`, `Email`, `Registred`, `Tutorial`, `Sex`, `Age`, `PhoneNumber`, `PhoneBook`, `WalkieTalkie`, `Lighter`, `Cigarettes`, `PremiumAccount`, `Respect`, `PayCheck`, `PayDay`, `PayDayHad`, `HoursPlayed`, `Leader`, `Member`, `Rank`, `Skin`, `FWarns`, `FPunish`, `Warns`, `Muted`, `MuteTime`, `DrivingLic`, `FlyingLic`, `GunLic`, `SailLic`, `FishingLic`, `BiggestFish`, `Job`, `StockPile`, `Wanted`, `WantedLost`, `Jailed`, `JailTime`, `Bail`, `Materials`, `Drugs`, `HouseKey`, `RentKey`, `BizzKey`, `HeadValue`, `Contracted`, `Contract`, `ContractTime`, `TowPoints`, `SpawnChange`, `AJailed`, `AJailTime`, `Referral`, `Rob`, `FreePoints`, `CLeader`, `CMember`, `CRank`, `Kills`, `Deaths`, `Crimes`, `Arrests`, `WantedDeaths`, `VehicleSlots`, `TruckerSkill`, `GarbageSkill`, `RobSkill`, `MechanicSkill`, `FarmerSkill`, `WoodSkill`, `PizzaSkill`, `TReferralRespect`, `TReferralMoney`, `ReferralRespect`, `ReferralMoney`, `PlayerPickups`, `Achievements`, `Coins`, `MoneyBoost`, `RPBoost`, `TutVeh`, `Fuel`, `Status`, `RegisteredDate`, `LastLogin`, `Gift`, `Banned`, `PIN`, `GiftPoints`, `newemail`, `playerEmail`, `Inima`, `Inima2`, `Inima3`, `Inima4`, `Inima5`, `Inima6`, `Inima7`, `Inima8`, `Inima9`, `Inima10`, `Inima11`, `Inima12`, `Inima13`, `Inima14`, `Inima15`, `Inima16`, `Inima17`, `Inima18`, `Inima19`, `Inima20`, `Inima21`, `Inima22`, `Inima23`, `Inima24`, `Inima25`, `Inima26`, `Inima27`, `Inima28`, `Inima29`, `Inima30`, `Inima31`, `Inima32`, `Inima33`, `Inima34`, `Inima35`, `Inima36`, `Inima37`, `Inima38`, `Inima39`, `Inima40`, `Inima41`, `Inima42`, `Inima43`, `Inima44`, `Inima45`, `Inima46`, `Inima47`, `Inima48`, `Inima49`, `Inima50`, `Inimi`, `Married`, `MarriedTo`, `Limba`, `rpgon`) VALUES
(248, 'Lupi', 'aname', 'raidmax123', 1, 0, 0, 25000, 50000, 'email@default.com', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 299, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1800, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'No-one', 0, 0, 1, 0, 0, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', '0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0', 0, 0, 0, 0, 0, 0, '01/01/2013 00:00', '01/01/2013 00:00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Name', 'name', 0, 0),
(249, 'Amaro', 'aname', 'colivie', 3, 0, 0, 12019031, 50000, 'mihaivldu@yahoo.com', 1, 1, 2, 16, 1858903, 0, 0, 0, 0, 0, 0, 14000, 70, 0, 0, 0, 2, 1, 76, 0, 0, 0, 0, 0, 100, 0, 6, 0, 0, 0, 1, 0, 0, 1800, 0, 0, 0, 0, 0, 0, 47, 0, 55554, 0, 'No-one', 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 3, 3, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', '0|0|0|0|0|1|1|0|0|0|0|0|0|0|0|0|1|0|1|0|0|0|0|0|0|1', 500, 0, 0, 1, 0, 0, '30/04/2016 - 20:42:04', '17/05/2016 - 17:02:11', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Name', 'name', 2, 0),
(250, 'Jack2.1', 'aname', 'raidmax', 1, 0, 0, 25000, 50000, 'email@default.com', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 299, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1800, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'No-one', 0, 0, 1, 0, 0, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', '0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0', 0, 0, 0, 0, 0, 0, '01/01/2013 00:00', '01/01/2013 00:00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Name', 'name', 0, 0),
(251, 'Thebloody', 'aname', 'hergandez', 1, 0, 0, 25000, 50000, 'petruursachi2000@yandex.com', 1, 1, 1, 16, 6222382, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 60, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1800, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'No-one', 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', '0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|1', 100, 0, 0, 0, 0, 0, '01/05/2016 - 11:07:42', '01/05/2016 - 11:08:51', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Name', 'name', 2, 0),
(252, '[RSS]Minion...', 'aname', 'Onternet123', 1, 0, 0, 25000, 50000, 'email@default.com', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 299, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1800, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'No-one', 0, 0, 1, 0, 0, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', '0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0', 0, 0, 0, 0, 0, 0, '01/01/2013 00:00', '01/01/2013 00:00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Name', 'name', 0, 0),
(253, 'HaritoN', 'aname', '4882561', 1, 0, 0, 39298, 63906, 'hariton@mail.ru', 1, 1, 1, 18, 1398352, 0, 0, 0, 0, 0, 2, 3000, 15, 0, 1, 0, 0, 0, 170, 0, 0, 0, 0, 0, 99, 99, 99, 0, 0, 0, 0, 0, 0, 1800, 0, 0, 0, 0, 0, 0, 32, 0, 0, 0, 'No-one', 0, 0, 2, 0, 0, 229, 1, 0, 0, 0, 0, 1, 11, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', '0|0|0|0|0|1|0|0|0|0|0|0|0|0|0|0|0|0|1|0|0|0|0|0|0|1', 300, 0, 0, 1, 0, 0, '01/05/2016 - 18:53:49', '04/05/2016 - 13:25:07', 0, 0, 1111, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Name', 'name', 2, 0);
-- --------------------------------------------------------

--
-- Table structure for table `rpg_comm`
--

CREATE TABLE `rpg_comm` (
  `id` int(11) NOT NULL,
  `Author` text NOT NULL,
  `Topic` int(11) NOT NULL,
  `Comm` text NOT NULL,
  `Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rpg_comma`
--

CREATE TABLE `rpg_comma` (
  `id` int(11) NOT NULL,
  `Author` text NOT NULL,
  `Topic` int(11) NOT NULL,
  `Comm` text NOT NULL,
  `Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rpg_commc`
--

CREATE TABLE `rpg_commc` (
  `id` int(11) NOT NULL,
  `Author` text NOT NULL,
  `Topic` int(11) NOT NULL,
  `Comm` text NOT NULL,
  `Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rpg_commh`
--

CREATE TABLE `rpg_commh` (
  `id` int(11) NOT NULL,
  `Author` text NOT NULL,
  `Topic` int(11) NOT NULL,
  `Comm` text NOT NULL,
  `Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rpg_comml`
--

CREATE TABLE `rpg_comml` (
  `id` int(11) NOT NULL,
  `Author` text NOT NULL,
  `Topic` int(11) NOT NULL,
  `Comm` text NOT NULL,
  `Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rpg_complaints`
--

CREATE TABLE `rpg_complaints` (
  `id` int(11) NOT NULL,
  `Author` text NOT NULL,
  `Player` text NOT NULL,
  `Details` text NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rpg_complaintsa`
--

CREATE TABLE `rpg_complaintsa` (
  `id` int(11) NOT NULL,
  `Author` text NOT NULL,
  `Player` text NOT NULL,
  `Details` text NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rpg_complaintsc`
--

CREATE TABLE `rpg_complaintsc` (
  `id` int(11) NOT NULL,
  `Author` text NOT NULL,
  `Player` text NOT NULL,
  `Details` text NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rpg_complaintsh`
--

CREATE TABLE `rpg_complaintsh` (
  `id` int(11) NOT NULL,
  `Author` text NOT NULL,
  `Player` text NOT NULL,
  `Details` text NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rpg_complaintsl`
--

CREATE TABLE `rpg_complaintsl` (
  `id` int(11) NOT NULL,
  `Author` text NOT NULL,
  `Player` text NOT NULL,
  `Details` text NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `safes`
--

CREATE TABLE `safes` (
  `ID` int(11) NOT NULL,
  `PosX` float NOT NULL DEFAULT '0',
  `PosY` float NOT NULL DEFAULT '0',
  `PosZ` float NOT NULL DEFAULT '0',
  `Money` int(11) NOT NULL DEFAULT '0',
  `Drugs` int(11) NOT NULL DEFAULT '0',
  `Materials` int(11) NOT NULL DEFAULT '0',
  `News` varchar(128) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `safes`
--

INSERT INTO `safes` (`ID`, `PosX`, `PosY`, `PosZ`, `Money`, `Drugs`, `Materials`, `News`) VALUES
(1, 226.858, 81.5722, 1005.04, 0, 0, 0, 'La 10/10 se vor alege 1 rank 6 , 1 rank 5'),
(2, 292.829, 188.262, 1007.17, 0, 0, 0, ''),
(3, 0, 0, 0, 0, 0, 0, ''),
(4, 1492.11, 1304.44, 1093.3, 1, 0, 0, ''),
(5, -2025.93, -114.18, 1035.17, 0, 0, 0, ''),
(6, -1226.3, -90.616, 14.4761, 0, 0, 0, ''),
(7, 2195.45, 1610.83, 999.968, 0, 0, 0, ''),
(8, 1723.06, -1673.16, 20.2232, 0, 0, 0, ''),
(9, 970.355, -43.3238, 1001.12, 50000, 0, 5000, ''),
(10, 2315.28, -1135, 1054.3, 6511750, 0, 0, ''),
(11, 1260.9, -772.721, 1091.91, 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `unbancomments`
--

CREATE TABLE `unbancomments` (
  `id` int(11) NOT NULL,
  `unbanid` int(69) NOT NULL,
  `text` text NOT NULL,
  `name` varchar(50) NOT NULL,
  `playerid` int(69) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `unbans`
--

CREATE TABLE `unbans` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(69) NOT NULL DEFAULT '0',
  `text` text NOT NULL,
  `playerid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `CarID` int(10) UNSIGNED NOT NULL,
  `Model` int(24) NOT NULL DEFAULT '410',
  `Color1` int(24) NOT NULL DEFAULT '0',
  `Color2` int(24) NOT NULL DEFAULT '0',
  `Price` int(24) NOT NULL DEFAULT '0',
  `Owner` varchar(24) NOT NULL DEFAULT 'Unbought',
  `vPosX` float NOT NULL DEFAULT '0',
  `vPosY` float NOT NULL DEFAULT '0',
  `vPosZ` float NOT NULL DEFAULT '0',
  `vPosA` float NOT NULL DEFAULT '0',
  `Plate` varchar(24) NOT NULL DEFAULT 'AG:RP',
  `PaintJ` int(24) NOT NULL DEFAULT '6',
  `Locked` int(24) NOT NULL DEFAULT '0',
  `Spawned` int(24) NOT NULL DEFAULT '0',
  `Destroyed` int(24) NOT NULL DEFAULT '0',
  `Km` float NOT NULL DEFAULT '0',
  `Neon` int(24) NOT NULL DEFAULT '0',
  `Fuel` int(11) NOT NULL DEFAULT '100',
  `Type` int(11) NOT NULL DEFAULT '0',
  `vMod1` int(24) NOT NULL DEFAULT '0',
  `vMod2` int(24) NOT NULL DEFAULT '0',
  `vMod3` int(24) NOT NULL DEFAULT '0',
  `vMod4` int(24) NOT NULL DEFAULT '0',
  `vMod5` int(24) NOT NULL DEFAULT '0',
  `vMod6` int(24) NOT NULL DEFAULT '0',
  `vMod7` int(24) NOT NULL DEFAULT '0',
  `vMod8` int(24) NOT NULL DEFAULT '0',
  `vMod9` int(24) NOT NULL DEFAULT '0',
  `vMod10` int(24) NOT NULL DEFAULT '0',
  `vMod11` int(24) NOT NULL DEFAULT '0',
  `vMod12` int(24) NOT NULL DEFAULT '0',
  `vMod13` int(24) NOT NULL DEFAULT '0',
  `vMod14` int(24) NOT NULL DEFAULT '0',
  `vMod15` int(24) NOT NULL DEFAULT '0',
  `vMod16` int(24) NOT NULL DEFAULT '0',
  `vMod17` int(24) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`CarID`, `Model`, `Color1`, `Color2`, `Price`, `Owner`, `vPosX`, `vPosY`, `vPosZ`, `vPosA`, `Plate`, `PaintJ`, `Locked`, `Spawned`, `Destroyed`, `Km`, `Neon`, `Fuel`, `Type`, `vMod1`, `vMod2`, `vMod3`, `vMod4`, `vMod5`, `vMod6`, `vMod7`, `vMod8`, `vMod9`, `vMod10`, `vMod11`, `vMod12`, `vMod13`, `vMod14`, `vMod15`, `vMod16`, `vMod17`) VALUES
(1, 462, 0, 0, 0, 'Lucian50', 1560.74, -2234.47, 13.146, 90.345, 'New Car', 6, 1, 0, 0, 3.05, 0, 97, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 462, 0, 0, 0, 'TG.mAlwaRe', 1560.94, -2315.54, 13.146, 92.613, 'New Car', 6, 1, 0, 0, 4.26, 0, 88, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 462, 0, 0, 0, 'HIGHMAN', 1529.78, -2210.9, 13.154, 181.171, 'New Car', 6, 1, 1, 0, 8.89, 0, 70, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 462, 0, 0, 0, 'OnLyKeNz[]', 1560.82, -2335.15, 13.147, 91.796, 'New Car', 6, 1, 1, 0, 3, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 462, 0, 0, 0, 'Radu18', 1560.76, -2264.23, 13.146, 88.871, 'New Car', 6, 1, 1, 0, 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 462, 0, 0, 0, 'TG.Trickster.', 1498.92, -2211.2, 13.146, 182.214, 'New Car', 6, 1, 1, 0, 16.22, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 462, 0, 0, 0, 'BruceLee', 1492.42, -2210.93, 13.146, 180.248, 'New Car', 6, 1, 1, 0, 12.29, 0, 66, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, 462, 0, 0, 0, 'MARYUS', 1549.5, -2210.74, 13.154, 180.897, 'New Car', 6, 1, 1, 0, 3.39, 0, 88, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(9, 462, 0, 0, 0, 'MihneaGaming', 1560.88, -2318.76, 13.147, 93.186, 'MihGamerul', 6, 0, 1, 0, 3.01, 0, 92, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(10, 462, 0, 0, 0, 'Mr.Kup', 1492.42, -2210.93, 13.146, 180.248, 'New Car', 6, 1, 1, 0, 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(11, 462, 0, 0, 0, 'Hero_Golden', 1539.68, -2361.73, 13.154, 359.868, 'New Car', 6, 0, 1, 0, 12.12, 0, 58, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(12, 462, 0, 0, 0, 'Scotianu', 1512.11, -2211.54, 13.154, 179.831, 'New Car', 6, 1, 1, 0, 13.4, 0, 63, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(13, 462, 0, 0, 0, 'Asoman', 1560.88, -2331.89, 13.146, 91.639, 'New Car', 6, 1, 0, 0, 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(14, 462, 0, 0, 0, 'Deceneu.[]', 1499.03, -2362.1, 13.148, 359.604, 'New Car', 6, 0, 1, 0, 4.72, 0, 94, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(15, 462, 0, 0, 0, '[F]R.Andru.', 1549.5, -2210.74, 13.154, 180.897, 'New Car', 6, 0, 1, 0, 23.52, 0, 60, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(16, 462, 0, 0, 0, 'KenT.', 1560.74, -2234.47, 13.146, 90.345, 'New Car', 6, 1, 1, 0, 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(17, 462, 0, 0, 0, '[F]R.TreNdy', 1526.44, -2210.84, 13.153, 183.123, 'New Car', 6, 0, 1, 0, 21.49, 0, 50, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(18, 462, 0, 0, 0, '.NeWt0N[]', 1536.39, -2361.76, 13.154, 359.885, 'New Car', 6, 1, 1, 0, 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(19, 462, 0, 0, 0, 'Bobo', 1526.53, -2361.89, 13.154, 358.927, 'New Car', 6, 1, 1, 0, 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(20, 462, 0, 0, 0, 'igor21', 1560.77, -2247.69, 13.147, 90.552, 'New Car', 6, 1, 1, 0, 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(21, 462, 0, 0, 0, 'Yomazz', 1549.5, -2210.74, 13.154, 180.897, 'New Car', 6, 1, 1, 0, 1.47, 0, 91, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(22, 462, 0, 0, 0, 'Alex_Codreanu', 1560.77, -2247.69, 13.147, 90.552, 'New Car', 6, 1, 1, 0, 2.93, 0, 93, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(23, 462, 0, 0, 0, 'valy77', 1505.44, -2362.1, 13.149, 0.485, 'New Car', 6, 1, 1, 0, 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(24, 462, 0, 0, 0, 'HeyArt', 1526.53, -2361.89, 13.154, 358.927, 'New Car', 6, 1, 1, 0, 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(25, 462, 0, 0, 0, 'Adrian', 1536.45, -2211.1, 13.153, 178.048, 'New Car', 6, 1, 1, 0, 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(26, 462, 0, 0, 0, 'OnlySkyy', 1552.79, -2361.65, 13.153, 359.238, 'New Car', 6, 1, 1, 0, 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(27, 462, 0, 0, 0, 'Zevo', 1533.21, -2362.04, 13.154, 359.707, 'New Car', 6, 1, 1, 0, 0.91, 0, 97, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(28, 462, 0, 0, 0, 'WiNk', 1546.27, -2210.81, 13.155, 179.87, 'New Car', 6, 1, 1, 0, 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(29, 462, 0, 0, 0, 'Furious', 1526.44, -2210.84, 13.153, 183.123, 'New Car', 6, 1, 1, 0, 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(30, 462, 0, 0, 0, 'AndreiK_YT', 1560.73, -2325.27, 13.146, 90.427, 'AndreiK', 6, 1, 1, 0, 0.88, 0, 97, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(31, 462, 0, 0, 0, 'TheHammer', 1518.62, -2211.46, 13.153, 181.086, 'New Car', 6, 1, 1, 0, 1.54, 0, 98, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(32, 462, 0, 0, 0, 'TheKill', 1529.67, -2362.13, 13.155, 0.418, 'New Car', 6, 1, 1, 0, 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(33, 462, 0, 0, 0, 'PikachuAreShotgun', 1560.88, -2331.89, 13.146, 91.639, 'New Car', 6, 1, 1, 0, 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(34, 462, 0, 0, 0, 'Wizzle', 1505.52, -2211.4, 13.151, 181.269, 'New Car', 6, 1, 1, 0, 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(35, 401, 0, 0, 0, 'MarianBoSS', 1560.84, -2241.09, 13.146, 90.145, 'New Car', 6, 1, 0, 0, 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(36, 462, 0, 0, 0, 'V@L0aR3', 1560.86, -2308.76, 13.146, 90.539, 'New Car', 6, 1, 1, 0, 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(37, 401, 0, 0, 0, 'Alex_Alex224', 1533.21, -2362.04, 13.154, 359.707, 'New Car', 6, 1, 0, 0, 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(38, 401, 0, 0, 0, 'ReTurN', 1515.26, -2362.08, 13.153, 1.196, 'New Car', 6, 1, 1, 0, 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(39, 411, 0, 0, 6500000, 'MarianBoSS', 967.67, -842.32, 95.33, 206.43, 'New Car', 6, 1, 0, 0, 4.4, 0, 87, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(40, 411, 0, 0, 6500000, 'Lucian50', 1485.3, -696.98, 94.47, 270.3, 'NT-50-PHP', 6, 1, 1, 0, 25.89, 0, 83, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(41, 462, 0, 0, 0, 'Boquila', 1560.88, -2331.89, 13.146, 91.639, 'New Car', 6, 1, 0, 0, 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(42, 401, 0, 0, 0, 'FunFlash', 1560.77, -2247.69, 13.147, 90.552, 'New Car', 6, 1, 0, 0, 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(43, 411, 175, 205, 6500000, 'OnLyKeNz[]', 283.43, -1159.87, 80.52, 224.67, 'New Car', 6, 1, 1, 0, 3.72, 2, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(44, 411, 44, 2, 6500000, 'ady.bo$$', -2429.83, 321.99, 34.89, 241.04, 'ady.bo$$', 6, 1, 1, 0, 356.48, 0, 89, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1078, 0),
(45, 411, 0, 0, 6500000, 'Alex_Alex224', 1000.85, -667.37, 120.87, 35.6, 'New Car', 6, 1, 1, 1, 18.13, 0, 77, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(46, 411, 0, 0, 6500000, 'Boquila', 913.5, -664.67, 116.74, 236.66, 'New Car', 6, 0, 1, 0, 31.26, 0, 74, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(47, 411, 0, 0, 6500000, 'FunFlash', 1025.39, -1470.43, 13.155, 89.431, 'New Car', 6, 0, 1, 1, 5.26, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(48, 401, 0, 0, 0, 'Jack', 1546.09, -2361.7, 13.154, 359.001, 'New Car', 6, 1, 0, 0, 3.41, 0, 90, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(49, 411, 0, 0, 6500000, 'Asoman', 166.46, -1341.55, 69.4, 209.49, 'New Car', 6, 1, 1, 1, 23.51, 0, 55, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(50, 462, 0, 0, 0, 'Amaro', 1560.77, -2247.69, 13.147, 90.552, 'New Car', 6, 1, 1, 0, 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(51, 411, 0, 0, 6500000, 'Jack', 664.9, -582.49, 16.06, 1.87, 'New Car', 6, 1, 1, 1, 20.22, 0, 95, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(52, 411, 3, 6, 6500000, 'MarianBoSS', 859.1, -825.32, 89.18, 202.05, 'New Car', 6, 1, 1, 0, 43.75, 0, 44, 0, 0, 1010, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1087, 0, 0, 0, 1098, 0),
(53, 462, 0, 0, 0, 'sdk', 1560.76, -2264.23, 13.146, 88.871, 'New Car', 6, 1, 1, 0, 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(54, 411, 3, 0, 6500000, 'TG.mAlwaRe', 1973.18, -1727.91, 15.65, 269.62, 'New Car', 6, 1, 1, 0, 14.51, 0, 73, 0, 0, 1010, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1087, 0, 0, 0, 1096, 0),
(55, 462, 0, 0, 0, 'HaritoN', 1542.77, -2361.78, 13.154, 2.657, 'New Car', 6, 1, 1, 0, 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(56, 411, 205, 154, 6500000, 'Sayeed', -538.75, 2603.77, 53.14, 269.96, 'Admin', 6, 1, 1, 0, 164.91, 1, 90, 0, 0, 1010, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(57, 462, 0, 0, 0, 'Fabyyy1', 1495.72, -2362.13, 13.146, 359.136, 'New Car', 6, 1, 1, 0, 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(58, 411, 205, 154, 6500000, 'thinkzone', -539.18, 2582.96, 53.14, 270.19, 'thinkzone', 6, 0, 1, 0, 48.32, 2, 23, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(59, 462, 0, 0, 0, 'PUSS', 1502.17, -2362.02, 13.151, 0.248, 'New Car', 6, 1, 1, 0, 19.59, 0, 45, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(60, 462, 0, 0, 0, 'mihaitabudau123415', 1560.77, -2247.69, 13.147, 90.552, 'New Car', 6, 0, 1, 0, 1.17, 0, 94, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(61, 462, 0, 0, 0, '[Boss]David', 1529.67, -2362.13, 13.155, 0.418, 'New Car', 6, 1, 1, 0, 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(62, 411, 205, 194, 6500000, 'Mede suge.OCB', 975.4, -758.61, 111.71, 95.56, 'New Car', 6, 1, 0, 0, 0.69, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(63, 411, 194, 205, 6500000, 'Mede suge.OCB', 957.76, -761.2, 109.07, 98.88, 'New Car', 6, 0, 1, 1, 6.75, 0, 99, 0, 0, 1010, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1087, 0, 0, 0, 1077, 0),
(64, 411, 205, 194, 6500000, 'Mede suge.OCB', 963.47, -760.26, 109.97, 98.64, 'New Car', 6, 1, 1, 1, 6.91, 0, 99, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(65, 411, 226, 205, 6500000, 'Mede suge.OCB', 1512.82, -1434.2, 13.14, 271.28, 'New Car', 6, 1, 1, 0, 1.37, 0, 97, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(66, 445, 0, 0, 0, 'RaduRS.OCB', 1499.03, -2362.1, 13.148, 359.604, 'New Car', 6, 1, 0, 0, 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(67, 411, 175, 205, 6500000, 'RaduRS.OCB', -2723.9, -308.91, 6.76, 136.48, 'New Car', 6, 1, 1, 1, 1.03, 0, 97, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(68, 445, 0, 0, 0, 'FlorynFTW', 1556.39, -2361.81, 13.153, 1.01, 'New Car', 6, 1, 1, 0, 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(69, 462, 0, 0, 0, 'RaduSR', 1546.27, -2210.81, 13.155, 179.87, 'New Car', 6, 1, 1, 0, 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(70, 462, 0, 0, 0, 'WooDs[M14]', 1499.03, -2362.1, 13.148, 359.604, 'New Car', 6, 1, 1, 0, 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(71, 445, 0, 0, 0, 'Bogdy1337', 1560.8, -2237.76, 13.147, 91.219, 'New Car', 6, 1, 0, 0, 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(72, 411, 0, 0, 6500000, 'Bogdy1337', 1025.39, -1470.43, 13.155, 89.431, 'New Car', 6, 1, 1, 0, 5.73, 0, 90, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(73, 462, 0, 0, 0, 'gamervali12', 1560.69, -2260.7, 13.145, 91.521, 'New Car', 6, 1, 1, 0, 0.11, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `zones`
--

CREATE TABLE `zones` (
  `ID` int(11) NOT NULL,
  `MinX` float NOT NULL DEFAULT '0',
  `MinY` float NOT NULL DEFAULT '0',
  `MaxX` float NOT NULL DEFAULT '0',
  `MaxY` float NOT NULL DEFAULT '0',
  `Team` int(11) NOT NULL DEFAULT '0',
  `Hours` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zones`
--

INSERT INTO `zones` (`ID`, `MinX`, `MinY`, `MaxX`, `MaxY`, `Team`, `Hours`) VALUES
(1, 114.21, -1364.93, 506.54, -912.91, 11, 0),
(2, 506.54, -1364.93, 899.25, -912.91, 11, 0),
(3, 899.25, -1313.7, 1313.58, -912.91, 11, 0),
(4, 1313.58, -1364.93, 1727.49, -912.91, 9, 0),
(5, 1727.49, -1364.93, 2108.13, -912.91, 11, 0),
(6, 2108.13, -1364.93, 2499.38, -912.91, 9, 0),
(7, 2499.38, -1313.7, 2916.17, -912.91, 9, 0),
(8, 114.21, -1821.03, 506.54, -1364.93, 11, 0),
(9, 506.54, -1821.03, 899.25, -1364.93, 11, 0),
(10, 899.25, -1721.9, 1313.58, -1313.7, 11, 0),
(11, 1313.58, -1821.03, 1727.49, -1364.93, 11, 0),
(12, 1727.49, -1821.03, 2108.13, -1364.93, 11, 0),
(13, 2108.13, -1821.03, 2499.38, -1364.93, 8, 0),
(14, 2499.38, -1737.65, 2916.17, -1313.7, 9, 0),
(15, 899.25, -2131.32, 1313.58, -1721.9, 10, 0),
(16, 899.25, -2489.99, 1313.58, -2131.32, 10, 0),
(17, 1313.58, -2250.92, 1727.49, -1821.03, 10, 0),
(18, 1727.49, -2250.92, 2108.13, -1821.03, 9, 0),
(19, 2108.13, -2250.92, 2499.38, -1821.03, 9, 0),
(20, 2499.38, -2172.41, 2916.17, -1737.65, 9, 0),
(21, 1313.58, -2690.47, 1727.49, -2250.92, 10, 0),
(22, 1727.49, -2690.47, 2108.13, -2250.92, 10, 0),
(23, 2108.13, -2690.47, 2499.38, -2250.92, 11, 0),
(24, 2499.38, -2567.91, 2916.17, -2172.41, 9, 0),
(25, 1348.54, 659.011, 1618.85, 906.639, 9, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlog`
--
ALTER TABLE `adminlog`
  ADD PRIMARY KEY (`entryID`);

--
-- Indexes for table `aplications`
--
ALTER TABLE `aplications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bans`
--
ALTER TABLE `bans`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Name` (`Name`);

--
-- Indexes for table `business`
--
ALTER TABLE `business`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `clans`
--
ALTER TABLE `clans`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `dsveh`
--
ALTER TABLE `dsveh`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `factionlogs`
--
ALTER TABLE `factionlogs`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `factionl_apply`
--
ALTER TABLE `factionl_apply`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `faction_apply`
--
ALTER TABLE `faction_apply`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `feed`
--
ALTER TABLE `feed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flogs`
--
ALTER TABLE `flogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`groupID`);

--
-- Indexes for table `houses`
--
ALTER TABLE `houses`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `lastpunish`
--
ALTER TABLE `lastpunish`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lostpass`
--
ALTER TABLE `lostpass`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mdc`
--
ALTER TABLE `mdc`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `others`
--
ALTER TABLE `others`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `phonelogs`
--
ALTER TABLE `phonelogs`
  ADD PRIMARY KEY (`logID`);

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `rpg_comm`
--
ALTER TABLE `rpg_comm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rpg_complaints`
--
ALTER TABLE `rpg_complaints`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `safes`
--
ALTER TABLE `safes`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `unbancomments`
--
ALTER TABLE `unbancomments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unbans`
--
ALTER TABLE `unbans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`CarID`);

--
-- Indexes for table `zones`
--
ALTER TABLE `zones`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlog`
--
ALTER TABLE `adminlog`
  MODIFY `entryID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `aplications`
--
ALTER TABLE `aplications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=229;
--
-- AUTO_INCREMENT for table `bans`
--
ALTER TABLE `bans`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `business`
--
ALTER TABLE `business`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `clans`
--
ALTER TABLE `clans`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `dsveh`
--
ALTER TABLE `dsveh`
  MODIFY `ID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `email`
--
ALTER TABLE `email`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `factionlogs`
--
ALTER TABLE `factionlogs`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `factionl_apply`
--
ALTER TABLE `factionl_apply`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `faction_apply`
--
ALTER TABLE `faction_apply`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `feed`
--
ALTER TABLE `feed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;
--
-- AUTO_INCREMENT for table `flogs`
--
ALTER TABLE `flogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `groupID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;
--
-- AUTO_INCREMENT for table `lastpunish`
--
ALTER TABLE `lastpunish`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lostpass`
--
ALTER TABLE `lostpass`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `others`
--
ALTER TABLE `others`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `phonelogs`
--
ALTER TABLE `phonelogs`
  MODIFY `logID` int(32) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=283;
--
-- AUTO_INCREMENT for table `rpg_comm`
--
ALTER TABLE `rpg_comm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rpg_complaints`
--
ALTER TABLE `rpg_complaints`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `safes`
--
ALTER TABLE `safes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `unbancomments`
--
ALTER TABLE `unbancomments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `unbans`
--
ALTER TABLE `unbans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `CarID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
--
-- AUTO_INCREMENT for table `zones`
--
ALTER TABLE `zones`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
