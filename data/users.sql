-- phpMyAdmin SQL Dump
-- version 5.2.3-1.el9
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 20, 2026 at 02:39 AM
-- Server version: 9.1.0-commercial
-- PHP Version: 8.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ismaie2_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(200) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `email`, `password`) VALUES
(1, 'a@b.c', '$2y$10$sDHL2bizea37hQjH8g29JOj770roPGHrS7Gw7PkkcAdy9YASH8fu.'),
(3, 'c@b.a', '$2y$10$MEs1bRmt29hgiVCpWiwoaOva01yq9omTxJx78G852AsiAEE8mCjb.'),
(4, 'name@example.com', '$2y$10$ZOYVmXbr/bsXIxSHyBnOLOXoTZBbWTcIpGLJcIrKh56f3Pn17EmBm'),
(5, 'some@name.idk', '$2y$10$RiAMU6ESUl5FvGaAXWBAdu4x1l4KPVJUGbwqEdYP9h1xW4Z48H5Qq'),
(7, 'n@e.w', '$2y$10$Qdp3Ho1DLEwNXrI2CVvWT.d/DOKGwfe3wiBSUdTHxXyZUc26gQo3K'),
(8, 'm@n.o', '$2y$10$.VQwZ9UAk5PQ2mjX9iatJ.hfUURrhK4WoxjSeaggq7jKu/sBFYNmq'),
(9, 'no@id.ea', '$2y$10$qpzTAZmgllKZVR7UhzuQHuf1IzPgeemVAc5HQuQhjp8M9meC62mhm'),
(10, 'emiya@test.com', '$2y$10$eMk.MAPc4XYHVrwElwPETeHYLq4zI3Mov0REASgRUEuxHocoTOI7W'),
(11, '', '$2y$10$1vm1OanLYExfQPhuknYXlei7Mul8h/aPk/.N.U8GZCFbbm6zcG5Om'),
(12, 'o@n.e', '$2y$10$40jPi8eeZfneWPH8et.hkOnqC66clj/s77CW5Ll5J6eqU4SGIrYie'),
(13, 'test@example.com', '$2y$10$E975L8kJV3wr4hWqzZP89eVKy6w3131Rg86vIN5hdEyA4HtT/iNPi'),
(14, 'generic@example.com', '$2y$10$XyOorGhImP7QGnnzoysH2O2dnWf5bRFLGObHdv1mQgJX7IFqAk3vO'),
(15, 'hi@example.com', '$2y$10$k5n5AkzIqrDtb8mT8ZXZ0OUqIta3Yn1.iUZVuuExzQOstqsDQg37W'),
(16, 'hello@example.come', '$2y$10$pi8atVN.0as90hxcfa1EyOb963bOYrGK80MKJwBFh1BRsbSVdleQq'),
(17, 'new@ex.com', '$2y$10$1o5SzKuYc/KGL1X6SZBaRuKpDZqGEKc9GJC2hI3CeEmZLEGchQK36'),
(18, 'uploader@teamp.ca', '$2y$10$MKxYA92sQVn36MmqUPV0X.jjpkuv9KmDHBvZABiJPy/QcZf06Q.u6'),
(19, 'another@test.com', '$2y$10$kQ.7P1mXZUYPoQD72EIMve94dGjw8Zb1ttHhHelFNuKDRxpHqlByy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
