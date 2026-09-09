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
-- Table structure for table `uploads`
--

CREATE TABLE `uploads` (
  `id` int NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `original_name` varchar(255) NOT NULL,
  `file_size` int NOT NULL,
  `mime_type` varchar(100) NOT NULL,
  `uploaded_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `uploads`
--

INSERT INTO `uploads` (`id`, `user_email`, `filename`, `original_name`, `file_size`, `mime_type`, `uploaded_at`) VALUES
(1, 'uploader@teamp.ca', 'img_69e5569668def1.70145653.jpeg', 'IMG_6262.jpeg', 1723840, 'image/jpeg', '2026-04-19 18:26:30'),
(2, 'uploader@teamp.ca', 'img_69e5569b0404a6.34893247.jpeg', 'IMG_6257.jpeg', 5669499, 'image/jpeg', '2026-04-19 18:26:35'),
(3, 'uploader@teamp.ca', 'img_69e5569f4d7228.99463695.jpeg', 'IMG_5670.jpeg', 4813239, 'image/jpeg', '2026-04-19 18:26:39'),
(4, 'uploader@teamp.ca', 'img_69e556a5147609.45619260.jpeg', 'IMG_1810.jpeg', 1329718, 'image/jpeg', '2026-04-19 18:26:45'),
(5, 'uploader@teamp.ca', 'img_69e556a8e65e24.19850447.jpeg', 'IMG_1803.jpeg', 3423168, 'image/jpeg', '2026-04-19 18:26:48'),
(6, 'uploader@teamp.ca', 'img_69e556acd37280.64967803.jpeg', 'IMG_1770.jpeg', 1609917, 'image/jpeg', '2026-04-19 18:26:52'),
(7, 'uploader@teamp.ca', 'img_69e556aff2b428.95443745.jpeg', 'IMG_1460.jpeg', 4021798, 'image/jpeg', '2026-04-19 18:26:55'),
(8, 'uploader@teamp.ca', 'img_69e556b38ebaf9.09488008.jpeg', 'IMG_1233.jpeg', 4444399, 'image/jpeg', '2026-04-19 18:26:59'),
(9, 'uploader@teamp.ca', 'img_69e556b7a6cfc9.68585469.jpeg', 'IMG_1150.jpeg', 1765868, 'image/jpeg', '2026-04-19 18:27:03'),
(10, 'uploader@teamp.ca', 'img_69e556bb274474.96290448.jpg', 'cpm35_2026-04-07_2203533A7F17BE3634.jpg', 4314348, 'image/jpeg', '2026-04-19 18:27:07'),
(11, 'uploader@teamp.ca', 'img_69e556c188e4e9.18778489.jpg', 'cpm35_2026-02-20_131257EC44403DE539.jpg', 4536897, 'image/jpeg', '2026-04-19 18:27:13'),
(12, 'uploader@teamp.ca', 'img_69e556c4e4f361.13080453.jpg', 'cpm35_2026-01-31_000204E738348C51B2.jpg', 4376839, 'image/jpeg', '2026-04-19 18:27:16'),
(13, 'uploader@teamp.ca', 'img_69e556c9386922.71268540.jpg', 'cpm35_2026-01-29_19525885B516419588.jpg', 4471057, 'image/jpeg', '2026-04-19 18:27:21'),
(14, 'uploader@teamp.ca', 'img_69e5571876f787.95921694.jpg', 'cpm35_2026-01-29_19525885B516419588.jpg', 4471057, 'image/jpeg', '2026-04-19 18:28:40'),
(15, 'uploader@teamp.ca', 'img_69e5571e6971b0.08746078.jpg', 'cpm35_2026-01-29_2003381ADE412860A4.jpg', 4058613, 'image/jpeg', '2026-04-19 18:28:46'),
(16, 'uploader@teamp.ca', 'img_69e557233f5cd5.76382101.jpg', 'cpm35_2026-01-29_1953438C03DD8B7F7A.jpg', 4436813, 'image/jpeg', '2026-04-19 18:28:51'),
(17, 'uploader@teamp.ca', 'img_69e55727720265.59340448.jpg', 'cpm35_2026-01-10_090340.908.jpg', 3959153, 'image/jpeg', '2026-04-19 18:28:55'),
(18, 'uploader@teamp.ca', 'img_69e5572b2fc8e6.44145115.jpg', 'cpm35_2026-01-09_193235.558.jpg', 4073542, 'image/jpeg', '2026-04-19 18:28:59'),
(19, 'uploader@teamp.ca', 'img_69e5572f3ba629.66429343.jpg', 'cpm35_2026-01-08_230306.794.jpg', 3927342, 'image/jpeg', '2026-04-19 18:29:03'),
(20, 'uploader@teamp.ca', 'img_69e55732c59792.39578036.jpg', '095633BE-BE2B-461C-BF92-0CF44C4004EF.jpg', 406531, 'image/jpeg', '2026-04-19 18:29:06'),
(21, 'uploader@teamp.ca', 'img_69e55737a8e081.37508615.jpg', '6D1B01D2-427C-4715-9F37-34BB3F93AB34.jpg', 221594, 'image/jpeg', '2026-04-19 18:29:11'),
(22, 'uploader@teamp.ca', 'img_69e5751603ba86.29030445.jpeg', 'header_image.jpeg', 302717, 'image/jpeg', '2026-04-19 20:36:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `uploads`
--
ALTER TABLE `uploads`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `uploads`
--
ALTER TABLE `uploads`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
