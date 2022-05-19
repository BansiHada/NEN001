-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2022 at 06:10 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_30734380_tutorial11`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_machine`
--

CREATE TABLE `tbl_machine` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `machine_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_delete` tinyint(4) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_machine`
--

INSERT INTO `tbl_machine` (`id`, `machine_name`, `description`, `is_delete`, `created_at`, `updated_at`) VALUES
(1, 'DR-21', 'Drilling', 0, NULL, '2021-05-26 17:56:04'),
(2, 'TH-06', NULL, 0, NULL, '2021-05-26 17:54:02'),
(3, 'TH-07', NULL, 0, NULL, '2021-05-26 12:41:11'),
(4, 'TH-08', NULL, 0, NULL, NULL),
(5, 'DR-20', NULL, 0, NULL, NULL),
(6, 'DR-19', NULL, 0, NULL, NULL),
(7, 'DR-35', NULL, 0, NULL, NULL),
(8, 'SA-01', NULL, 0, NULL, NULL),
(9, 'SA-02', NULL, 0, NULL, NULL),
(10, 'DR-22', NULL, 0, NULL, NULL),
(11, 'TH-13', NULL, 0, NULL, '2021-05-26 18:01:01'),
(12, 'DR-51', NULL, 0, NULL, '2021-05-26 17:24:10'),
(13, 'AC-01', NULL, 0, NULL, NULL),
(17, 'DR-01', 'DRILL MACHINE', 0, '2021-06-21 04:10:33', NULL),
(18, 'DR-02', 'DRILL MACHINE', 0, '2021-06-21 04:10:49', NULL),
(19, 'DR-03', 'DRILL MACHINE', 0, '2021-06-21 04:10:58', NULL),
(20, 'DR-04', 'DRILL MACHINE', 0, '2021-06-21 04:11:23', NULL),
(21, 'DR-05', 'DRILL MACHINE', 0, '2021-06-21 04:11:40', NULL),
(22, 'DR-06', 'DRILL MACHINE', 0, '2021-06-21 04:12:40', NULL),
(23, 'DR-07', 'DRILL MACHINE', 0, '2021-06-21 04:12:48', NULL),
(24, 'DR-08', 'DRILL MACHINE', 0, '2021-06-21 04:13:01', NULL),
(25, 'DR-09', 'DRILL MACHINE', 0, '2021-06-21 04:13:17', NULL),
(26, 'DR-10', 'DRILL MACHINE', 0, '2021-06-21 04:13:29', NULL),
(27, 'DR-011', 'DRILL MACHINE', 1, '2021-06-21 04:13:44', '2021-06-21 04:19:06'),
(28, 'DR-12', 'DRILL MACHINE', 0, '2021-06-21 04:13:55', NULL),
(29, 'DR-11', 'DRILL MACHINE', 0, '2021-06-21 04:19:16', NULL),
(30, 'DR-13', 'DRILL MACHINE', 0, '2021-06-21 04:19:26', NULL),
(31, 'DR-14', 'DRILL MACHINE', 0, '2021-06-21 04:19:33', NULL),
(32, 'DR-15', 'DRILL MACHINE', 0, '2021-06-21 04:19:39', NULL),
(33, 'DR-16', 'DRILL MACHINE', 0, '2021-06-21 04:20:02', NULL),
(34, 'DR-17', 'DRILL MACHINE', 0, '2021-06-21 04:20:10', NULL),
(35, 'DR-18', 'DRILL MACHINE', 0, '2021-06-21 04:20:25', NULL),
(36, 'DR-23', 'DRILL MACHINE', 0, '2021-06-21 04:22:47', NULL),
(37, 'DR-24', 'DRILL MACHINE', 0, '2021-06-21 04:23:01', NULL),
(38, 'DR-25', 'DRILL MACHINE', 0, '2021-06-21 04:24:01', NULL),
(39, 'DR-26', 'DRILL MACHINE', 0, '2021-06-21 04:24:09', NULL),
(40, 'DR-27', 'DRILL MACHINE', 0, '2021-06-21 04:24:15', NULL),
(41, 'DR-28', 'DRILL MACHINE', 0, '2021-06-21 04:24:22', NULL),
(42, 'DR-29', 'DRILL MACHINE', 0, '2021-06-21 04:24:29', NULL),
(43, 'DR-30', 'DRILL MACHINE', 0, '2021-06-21 04:24:37', NULL),
(44, 'DR-31', 'DRILL MACHINE', 0, '2021-06-21 04:44:04', NULL),
(45, 'DR-32', 'DRILL MACHINE', 0, '2021-06-21 04:44:14', NULL),
(46, 'DR-33', 'DRILL MACHINE', 0, '2021-06-21 04:44:21', NULL),
(47, 'DR-34', 'DRILL MACHINE', 0, '2021-06-21 04:44:50', NULL),
(48, 'DR-36', 'DRILL MACHINE', 0, '2021-06-21 04:45:23', NULL),
(49, 'DR-37', 'DRILL MACHINE', 0, '2021-06-21 04:45:32', NULL),
(50, 'DR-38', 'DRILL MACHINE', 0, '2021-06-21 04:45:42', NULL),
(51, 'DR-39', 'DRILL MACHINE', 0, '2021-06-21 04:45:53', NULL),
(52, 'DR-40', 'DRILL MACHINE', 0, '2021-06-21 04:46:02', NULL),
(53, 'DR-41', 'DRILL MACHINE', 0, '2021-06-21 04:47:22', NULL),
(54, 'DR-42', 'DRILL MACHINE', 0, '2021-06-21 04:47:29', NULL),
(55, 'DR-43', 'DRILL MACHINE', 0, '2021-06-21 04:47:37', NULL),
(56, 'DR-44', 'DRILL MACHINE', 0, '2021-06-21 04:47:46', NULL),
(57, 'DR-45', 'DRILL MACHINE', 0, '2021-06-21 04:47:54', NULL),
(58, 'DR-46', 'DRILL MACHINE', 0, '2021-06-21 04:48:01', NULL),
(59, 'DR-47', 'DRILL MACHINE', 0, '2021-06-21 04:48:08', NULL),
(60, 'DR-48', 'DRILL MACHINE', 0, '2021-06-21 04:48:35', NULL),
(61, 'DR-49', 'DRILL MACHINE', 0, '2021-06-21 04:48:45', NULL),
(62, 'DR-50', 'DRILL MACHINE', 0, '2021-06-21 04:48:58', NULL),
(63, 'DR-52', 'DRILL MACHINE', 0, '2021-06-21 04:49:15', NULL),
(64, 'DR-53', 'DRILL MACHINE', 0, '2021-06-21 04:49:22', NULL),
(65, 'DR-54', 'DRILL MACHINE', 0, '2021-06-21 04:49:29', NULL),
(66, 'DR-55', 'DRILL MACHINE', 0, '2021-06-21 04:49:37', NULL),
(67, 'DR-56', 'DRILL MACHINE', 0, '2021-06-21 04:49:44', NULL),
(68, 'DR-57', 'DRILL MACHINE', 0, '2021-06-21 04:49:52', NULL),
(69, 'DR-58', 'DRILL MACHINE', 0, '2021-06-21 04:49:59', NULL),
(70, 'DR-59', 'DRILL MACHINE', 0, '2021-06-21 04:50:06', NULL),
(71, 'SA-03', 'SEMI-AUTO', 0, '2021-06-21 04:51:14', NULL),
(72, 'SA-04', 'SEMI-AUTO', 0, '2021-06-21 04:51:22', NULL),
(73, 'AC-02', 'AUTO CUTTING', 0, '2021-06-21 04:51:54', NULL),
(74, 'SL-01', 'SLOTTING MACHINE', 0, '2021-06-21 04:52:44', NULL),
(75, 'SL-02', 'SLOTTING MACHINE', 0, '2021-06-21 04:52:53', NULL),
(76, 'SL-03', 'SLOTTING MACHINE', 0, '2021-06-21 04:53:01', NULL),
(77, 'TH-01', 'THREADING MACHINE', 0, '2021-06-21 04:53:25', NULL),
(78, 'TH-02', 'THREADING MACHINE', 0, '2021-06-21 04:53:34', NULL),
(79, 'TH-03', 'THREADING MACHINE', 0, '2021-06-21 04:53:44', NULL),
(80, 'TH-04', 'THREADING MACHINE', 0, '2021-06-21 04:53:54', NULL),
(81, 'TH-05', 'THREADING MACHINE', 0, '2021-06-21 04:54:03', NULL),
(82, 'TH-09', 'THREADING MACHINE', 0, '2021-06-21 04:55:05', NULL),
(83, 'TH-10', 'THREADING MACHINE', 0, '2021-06-21 04:55:14', NULL),
(84, 'TH-11', 'THREADING MACHINE', 0, '2021-06-21 04:55:23', NULL),
(85, 'TH-12', 'THREADING MACHINE', 0, '2021-06-21 04:55:36', NULL),
(86, 'TH-14', 'THREADING MACHINE', 0, '2021-06-21 04:59:03', NULL),
(87, 'TH-15', 'THREADING MACHINE', 0, '2021-06-21 04:59:11', NULL),
(88, 'C-01', 'CUTTING MACHINE', 0, '2021-06-21 04:59:30', NULL),
(89, 'C-02', 'CUTTING MACHINE', 0, '2021-06-21 04:59:40', NULL),
(90, 'C-03', 'CUTTING MACHINE', 0, '2021-06-21 04:59:49', NULL),
(91, 'C-04', 'CUTTING MACHINE', 0, '2021-06-21 04:59:57', NULL),
(92, 'DR-61', 'DRILL MACHINE', 0, '2021-07-04 05:13:17', NULL),
(93, 'SA-05', 'SEMI-AUTO', 0, '2021-07-08 13:44:21', NULL),
(94, 'SPM-01', 'SPECIAL PURPOSE MACHINE', 0, '2021-07-08 13:44:42', NULL),
(95, 'SL-05', 'SLOTTING MACHINE', 0, '2021-10-03 09:05:23', '2021-10-03 09:33:19'),
(96, 'SL-06', 'SLOTTING MACHINE', 0, '2021-10-03 09:05:35', '2021-10-03 09:33:30'),
(97, 'SL-07', 'SLOTTING MACHINE', 0, '2021-10-03 09:05:49', '2021-10-03 09:33:42'),
(98, 'SL-08', 'SLOTTING MACHINE', 0, '2021-10-03 09:06:03', '2021-10-03 09:34:03'),
(99, 'SL-09', 'SLOTTING MACHINE', 0, '2021-10-03 09:06:11', '2021-10-03 09:34:15'),
(100, 'SL-10', 'SLOTTING MACHINE', 0, '2021-10-03 09:06:21', '2021-10-03 09:34:26'),
(101, 'SL-11', 'SLOTTING MACHINE', 0, '2021-10-03 09:06:32', '2021-10-03 09:34:40'),
(102, 'SL-12', 'SLOTTING MACHINE', 0, '2021-10-03 09:06:42', '2021-10-03 09:34:52'),
(103, 'SL-13', 'SLOTTING MACHINE', 0, '2021-10-03 09:06:53', '2021-10-03 09:35:03'),
(104, 'SL-14', 'SLOTTING MACHINE', 0, '2021-10-03 09:07:07', '2021-10-03 09:35:14'),
(105, 'SLOT-15', 'SLOTTING MACHINE', 1, '2021-10-03 09:07:16', '2021-10-03 09:32:59'),
(106, 'SLOT-16', 'SLOTTING MACHINE', 1, '2021-10-03 09:07:24', '2021-10-03 09:32:53'),
(107, 'SL-15', 'SLOTTING MACHINE', 0, '2021-10-03 09:35:26', NULL),
(108, 'SL-16', 'SLOTTING MACHINE', 0, '2021-10-03 09:35:36', NULL),
(109, 'SA-06', 'SEMI-AUTO', 0, '2021-12-04 13:12:27', NULL),
(110, 'SA-07', 'SEMI-AUTO', 0, '2021-12-04 13:12:35', NULL),
(111, 'SA-08', 'SEMI-AUTO', 0, '2021-12-04 13:12:45', NULL),
(112, 'SPM-03', 'SPECIAL PURPOSE MACHINE', 0, '2021-12-04 13:14:39', NULL),
(113, 'SPM-04', 'SPECIAL PURPOSE MACHINE', 0, '2021-12-04 13:14:48', NULL),
(114, 'SPM-05', 'SPECIAL PURPOSE MACHINE', 0, '2021-12-04 13:14:59', NULL),
(115, 'SPM-06', 'SPECIAL PURPOSE MACHINE', 0, '2021-12-04 13:15:13', NULL),
(116, 'SL-17', 'SLOTTING MACHINE', 0, '2021-12-04 13:15:45', NULL),
(117, 'SL-18', 'SLOTTING MACHINE', 0, '2021-12-04 13:15:54', NULL),
(118, 'THR-01', 'THREAD DRILL', 0, '2021-12-04 13:16:18', NULL),
(119, 'THR-02', 'THREAD DRILL', 0, '2021-12-04 13:16:35', NULL),
(120, 'THR-03', 'THREAD DRILL', 0, '2021-12-04 13:16:49', NULL),
(121, 'THR-04', 'THREAD DRILL', 0, '2021-12-04 13:16:58', NULL),
(122, 'THR-05', 'THREAD DRILL', 0, '2021-12-04 13:17:15', NULL),
(123, 'THR-06', 'THREAD DRILL', 0, '2021-12-04 13:17:26', NULL),
(124, 'DR-62', 'DRILL MACHINE', 0, '2021-12-04 13:17:48', NULL),
(125, 'DR-63', 'DRILL MACHINE', 0, '2021-12-04 13:17:56', NULL),
(126, 'DR-64', 'DRILL MACHINE', 0, '2021-12-04 13:18:02', NULL),
(127, 'DR-65', 'DRILL MACHINE', 0, '2021-12-04 13:18:09', NULL),
(128, 'DR-66', 'DRILL MACHINE', 0, '2021-12-04 13:18:21', NULL),
(129, 'DR-67', 'DRILL MACHINE', 0, '2021-12-04 13:18:30', NULL),
(130, 'DR-68', 'DRILL MACHINE', 0, '2021-12-04 13:18:37', NULL),
(131, 'DR-69', 'DRILL MACHINE', 0, '2021-12-04 13:18:46', NULL),
(132, 'DR-70', 'DRILL MACHINE', 0, '2021-12-04 13:18:55', NULL),
(133, 'DR-71', 'DRILL MACHINE', 0, '2021-12-04 13:19:02', NULL),
(134, 'DR-72', 'DRILL MACHINE', 0, '2021-12-04 13:19:09', NULL),
(135, 'DR-73', 'DRILL MACHINE', 0, '2021-12-04 13:19:17', NULL),
(136, 'DR-74', 'DRILL MACHINE', 0, '2021-12-04 13:19:24', NULL),
(137, 'DR-75', 'DRILL MACHINE', 0, '2021-12-04 13:19:31', NULL),
(138, 'DR-76', 'DRILL MACHINE', 0, '2021-12-04 13:19:38', NULL),
(139, 'DR-77', 'DRILL MACHINE', 0, '2021-12-04 13:19:45', NULL),
(140, 'DR-78', 'DRILL MACHINE', 0, '2021-12-04 13:20:09', NULL),
(141, 'AC-03', 'AUTO CUTTING', 0, '2021-12-04 13:20:27', NULL),
(142, 'SPM-02', 'SPECIAL PURPOSE MACHINE', 0, '2021-12-04 14:01:54', NULL),
(143, 'SL-04', 'SLOTTING MACHINE', 0, '2021-12-04 14:08:37', NULL),
(144, 'DR-60', 'DRILL MACHINE', 0, '2021-12-04 14:16:16', NULL),
(145, 'TH-16', 'THREADING MACHINE', 0, '2021-12-04 14:16:31', NULL),
(146, 'TH-17', 'THREADING MACHINE', 0, '2021-12-04 14:16:40', NULL),
(147, 'TH-18', 'THREADING MACHINE', 0, '2021-12-04 14:16:48', NULL),
(148, 'TH-19', 'THREADING MACHINE', 0, '2021-12-04 14:17:00', NULL),
(149, 'Test', 'Test', NULL, '2022-02-21 04:55:21', NULL),
(150, 'Test', 'Test1', 1, '2022-02-21 04:56:00', NULL),
(151, 'Test', 'Testww', 0, '2022-02-21 04:57:16', '2022-02-21 04:57:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `bio` text NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `password`, `bio`, `created`) VALUES
(1, 'Rajesh', 'Jethava', 'rajesh@gmail.com', '123456', 'student', '2021-03-29 00:00:00'),
(2, 'Jayesh', 'Tilva', 'jayesh@gmail.com', '123456', 'student', '2021-03-30 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_machine`
--
ALTER TABLE `tbl_machine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_machine`
--
ALTER TABLE `tbl_machine`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
