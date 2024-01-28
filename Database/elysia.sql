-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 18, 2023 at 09:44 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elysia`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `idadmin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(150) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `nohp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idadmin`, `username`, `password`, `nama`, `nohp`) VALUES
(1, 'derannmr', 'maulana8', 'Deran Maulana Rizki', '085158140511');

-- --------------------------------------------------------

--
-- Table structure for table `komen_6s`
--

CREATE TABLE `komen_6s` (
  `kodekomen` int(11) NOT NULL,
  `komen` varchar(150) NOT NULL,
  `tanggalkomen` date NOT NULL,
  `waktukomen` time NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `komen_6s`
--

INSERT INTO `komen_6s` (`kodekomen`, `komen`, `tanggalkomen`, `waktukomen`, `nama`) VALUES
(16, 'yahaha wahyu', '2023-02-08', '21:59:07', 'Deran Maulana Rizki'),
(17, 'mayad kuntul', '2023-02-08', '23:10:24', 'Deran Maulana');

-- --------------------------------------------------------

--
-- Table structure for table `komen_hof`
--

CREATE TABLE `komen_hof` (
  `kodekomen` int(11) NOT NULL,
  `komen` varchar(150) NOT NULL,
  `tanggalkomen` date NOT NULL,
  `waktukomen` time NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `komen_hof`
--

INSERT INTO `komen_hof` (`kodekomen`, `komen`, `tanggalkomen`, `waktukomen`, `nama`) VALUES
(17, 'tuna bakar', '2023-02-08', '22:00:27', 'Deran Maulana Rizki');

-- --------------------------------------------------------

--
-- Table structure for table `komen_hoh`
--

CREATE TABLE `komen_hoh` (
  `kodekomen` int(11) NOT NULL,
  `komen` varchar(150) NOT NULL,
  `tanggalkomen` date NOT NULL,
  `waktukomen` time NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `komen_hoh`
--

INSERT INTO `komen_hoh` (`kodekomen`, `komen`, `tanggalkomen`, `waktukomen`, `nama`) VALUES
(16, 'uwoghh', '2023-02-08', '22:00:14', 'Deran Maulana Rizki');

-- --------------------------------------------------------

--
-- Table structure for table `komen_hotr`
--

CREATE TABLE `komen_hotr` (
  `kodekomen` int(11) NOT NULL,
  `komen` varchar(150) NOT NULL,
  `tanggalkomen` date DEFAULT NULL,
  `waktukomen` time DEFAULT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `komen_hotr`
--

INSERT INTO `komen_hotr` (`kodekomen`, `komen`, `tanggalkomen`, `waktukomen`, `nama`) VALUES
(10001, 'nnnuyuj', '2023-02-08', '23:07:03', 'Deran Maulana'),
(10002, 'Bolonya onechan', '2023-02-08', '23:11:08', 'Deran Maulana');

-- --------------------------------------------------------

--
-- Table structure for table `komen_jk`
--

CREATE TABLE `komen_jk` (
  `kodekomen` int(11) NOT NULL,
  `komen` varchar(150) NOT NULL,
  `tanggalkomen` date NOT NULL,
  `waktukomen` time NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `komen_jk`
--

INSERT INTO `komen_jk` (`kodekomen`, `komen`, `tanggalkomen`, `waktukomen`, `nama`) VALUES
(16, 'sus', '2023-02-08', '21:59:45', 'Deran Maulana Rizki'),
(17, 'makasih informasinya bang', '2023-02-09', '14:55:49', 'reza imut dan ganteng'),
(18, 'reza sok asik banget', '2023-02-10', '08:45:09', 'Deran Maulana'),
(22, 'sushang kyaaa', '2023-02-10', '08:52:45', 'Deran Maulana'),
(23, 'terimakasih infonya', '2023-02-17', '17:22:48', 'deran');

-- --------------------------------------------------------

--
-- Table structure for table `komen_rc`
--

CREATE TABLE `komen_rc` (
  `kodekomen` int(11) NOT NULL,
  `komen` varchar(150) NOT NULL,
  `tanggalkomen` date NOT NULL,
  `waktukomen` time NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `komen_rc`
--

INSERT INTO `komen_rc` (`kodekomen`, `komen`, `tanggalkomen`, `waktukomen`, `nama`) VALUES
(17, 'meow', '2023-02-08', '22:00:55', 'Deran Maulana Rizki');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `nama`) VALUES
('bambank', 'bambank123', 'Bambank'),
('deran', 'deran123', 'deran'),
('derannmr', 'maulana8', 'Deran Maulana');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idadmin`);

--
-- Indexes for table `komen_6s`
--
ALTER TABLE `komen_6s`
  ADD PRIMARY KEY (`kodekomen`);

--
-- Indexes for table `komen_hof`
--
ALTER TABLE `komen_hof`
  ADD PRIMARY KEY (`kodekomen`);

--
-- Indexes for table `komen_hoh`
--
ALTER TABLE `komen_hoh`
  ADD PRIMARY KEY (`kodekomen`);

--
-- Indexes for table `komen_hotr`
--
ALTER TABLE `komen_hotr`
  ADD PRIMARY KEY (`kodekomen`);

--
-- Indexes for table `komen_jk`
--
ALTER TABLE `komen_jk`
  ADD PRIMARY KEY (`kodekomen`);

--
-- Indexes for table `komen_rc`
--
ALTER TABLE `komen_rc`
  ADD PRIMARY KEY (`kodekomen`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `idadmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `komen_6s`
--
ALTER TABLE `komen_6s`
  MODIFY `kodekomen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `komen_hof`
--
ALTER TABLE `komen_hof`
  MODIFY `kodekomen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `komen_hoh`
--
ALTER TABLE `komen_hoh`
  MODIFY `kodekomen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `komen_hotr`
--
ALTER TABLE `komen_hotr`
  MODIFY `kodekomen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10003;

--
-- AUTO_INCREMENT for table `komen_jk`
--
ALTER TABLE `komen_jk`
  MODIFY `kodekomen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `komen_rc`
--
ALTER TABLE `komen_rc`
  MODIFY `kodekomen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
