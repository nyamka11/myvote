-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2020 at 11:04 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `election`
--
CREATE DATABASE IF NOT EXISTS `election` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `election`;

-- --------------------------------------------------------

--
-- Table structure for table `c_election_candidates`
--

DROP TABLE IF EXISTS `c_election_candidates`;
CREATE TABLE `c_election_candidates` (
  `election_district_id` int(11) NOT NULL COMMENT 'district_id',
  `party_id` int(11) NOT NULL,
  `candidate_id` int(11) NOT NULL COMMENT 'candidate_id',
  `plans_country` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'plans_country',
  `plans_district` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'plans_district',
  `plans_purpose` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'plans_purpose'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='c_election_candidates';

--
-- Dumping data for table `c_election_candidates`
--

INSERT INTO `c_election_candidates` (`election_district_id`, `party_id`, `candidate_id`, `plans_country`, `plans_district`, `plans_purpose`) VALUES
(1, 1, 1, '0000000001', '0000000001', '0000000001'),
(1, 2, 2, '0000000002', '0000000002', '0000000002'),
(1, 3, 3, '0000000003', '0000000003', '0000000003'),
(2, 1, 6, '0000000006', '0000000006', '0000000006'),
(2, 2, 7, '0000000007', '0000000007', '0000000007'),
(2, 3, 8, '0000000008', '0000000008', '0000000008');

-- --------------------------------------------------------

--
-- Table structure for table `m_name`
--

DROP TABLE IF EXISTS `m_name`;
CREATE TABLE `m_name` (
  `id` int(11) NOT NULL COMMENT 'id',
  `attr` tinyint(4) NOT NULL COMMENT 'attr',
  `order_num` tinyint(4) NOT NULL COMMENT 'order_num',
  `name` varchar(300) COLLATE utf8_unicode_ci NOT NULL COMMENT 'name'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='m_name';

--
-- Dumping data for table `m_name`
--

INSERT INTO `m_name` (`id`, `attr`, `order_num`, `name`) VALUES
(1, 1, 1, 'Дүүрэг01'),
(2, 1, 2, 'Дүүрэг02'),
(3, 1, 3, 'Дүүрэг03'),
(4, 1, 4, 'Дүүрэг04'),
(5, 1, 5, 'Дүүрэг05'),
(6, 1, 6, 'Дүүрэг06'),
(7, 1, 7, 'Дүүрэг07'),
(8, 1, 8, 'Дүүрэг08'),
(9, 1, 9, 'Дүүрэг09'),
(10, 1, 10, 'Дүүрэг10');

-- --------------------------------------------------------

--
-- Table structure for table `t_candidates`
--

DROP TABLE IF EXISTS `t_candidates`;
CREATE TABLE `t_candidates` (
  `id` int(11) NOT NULL COMMENT 'id',
  `first_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'first_name',
  `last_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'last_name',
  `fullname` varchar(200) COLLATE utf8_unicode_ci NOT NULL COMMENT 'fullname',
  `occupation` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'occupation',
  `degree` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'degree',
  `education` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'education',
  `experience` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'experience',
  `current_job` varchar(200) COLLATE utf8_unicode_ci NOT NULL COMMENT 'current_job',
  `web_site` varchar(500) COLLATE utf8_unicode_ci NOT NULL COMMENT 'web_site',
  `facebook` varchar(500) COLLATE utf8_unicode_ci NOT NULL COMMENT 'facebook',
  `twitter` varchar(200) COLLATE utf8_unicode_ci NOT NULL COMMENT 'twitter'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='t_candidates';

--
-- Dumping data for table `t_candidates`
--

INSERT INTO `t_candidates` (`id`, `first_name`, `last_name`, `fullname`, `occupation`, `degree`, `education`, `experience`, `current_job`, `web_site`, `facebook`, `twitter`) VALUES
(1, 'Нэр0000000001', 'Овог01', 'Оврг Нэр0000000001', 'мэргэжил01', 'цол01', 'Боловсрол0000000001', 'Туршлага01', '0000000001', '0000000001', '0000000001', '0000000001'),
(2, 'Нэр0000000002', 'Овог02', 'Оврг Нэр0000000002', 'мэргэжил02', 'цол02', 'Боловсрол0000000002', 'Туршлага02', '0000000002', '0000000002', '0000000002', '0000000002'),
(3, 'Нэр0000000003', 'Овог03', 'Оврг Нэр0000000003', 'мэргэжил03', 'цол03', 'Боловсрол0000000003', 'Туршлага03', '0000000003', '0000000003', '0000000003', '0000000003'),
(4, 'Нэр0000000004', 'Овог04', 'Оврг Нэр0000000004', 'мэргэжил04', 'цол04', 'Боловсрол0000000004', 'Туршлага04', '0000000004', '0000000004', '0000000004', '0000000004'),
(5, 'Нэр0000000005', 'Овог05', 'Оврг Нэр0000000005', 'мэргэжил05', 'цол05', 'Боловсрол0000000005', 'Туршлага05', '0000000005', '0000000005', '0000000005', '0000000005'),
(6, 'Нэр0000000006', 'Овог06', 'Оврг Нэр0000000006', 'мэргэжил06', 'цол06', 'Боловсрол0000000006', 'Туршлага06', '0000000006', '0000000006', '0000000006', '0000000006'),
(7, 'Нэр0000000007', 'Овог07', 'Оврг Нэр0000000007', 'мэргэжил07', 'цол07', 'Боловсрол0000000007', 'Туршлага07', '0000000007', '0000000007', '0000000007', '0000000007'),
(8, 'Нэр0000000008', 'Овог08', 'Оврг Нэр0000000008', 'мэргэжил08', 'цол08', 'Боловсрол0000000008', 'Туршлага08', '0000000008', '0000000008', '0000000008', '0000000008');

-- --------------------------------------------------------

--
-- Table structure for table `t_elections`
--

DROP TABLE IF EXISTS `t_elections`;
CREATE TABLE `t_elections` (
  `id` int(11) NOT NULL COMMENT 'id',
  `status` tinyint(4) NOT NULL COMMENT 'status',
  `election_year` year(4) NOT NULL COMMENT 'election_year',
  `election_date` date NOT NULL COMMENT 'election_date',
  `tag` varchar(15) COLLATE utf8_unicode_ci NOT NULL COMMENT 'tag',
  `title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL COMMENT 'is_active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='t_elections';

--
-- Dumping data for table `t_elections`
--

INSERT INTO `t_elections` (`id`, `status`, `election_year`, `election_date`, `tag`, `title`, `is_active`) VALUES
(1, 0, 2020, '2020-07-01', '2020-УИХ', 'Улсын Их Хурлын сонгууль', 1),
(2, 0, 2020, '2020-10-01', '2020-ИТХ', 'Иргэдийн төлөөлөгчид', 0);

-- --------------------------------------------------------

--
-- Table structure for table `t_election_district`
--

DROP TABLE IF EXISTS `t_election_district`;
CREATE TABLE `t_election_district` (
  `id` int(11) NOT NULL COMMENT 'id',
  `election_id` int(11) NOT NULL COMMENT 'election_id',
  `district_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'district_name',
  `district_area` tinyint(4) NOT NULL COMMENT 'district_area',
  `district_mandate` tinyint(4) NOT NULL COMMENT 'district_mandate'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='t_election_district';

--
-- Dumping data for table `t_election_district`
--

INSERT INTO `t_election_district` (`id`, `election_id`, `district_name`, `district_area`, `district_mandate`) VALUES
(1, 1, 'Тойрог0000000001', 1, 2),
(2, 1, 'Тойрог0000000002', 2, 2),
(3, 1, 'Тойрог0000000003', 3, 2),
(4, 1, 'Тойрог0000000004', 4, 2),
(5, 1, 'Тойрог0000000005', 5, 2),
(6, 1, 'Тойрог0000000006', 6, 2),
(7, 1, 'Тойрог0000000007', 7, 2),
(8, 1, 'Тойрог0000000008', 8, 2),
(9, 1, 'Тойрог0000000009', 9, 2),
(10, 1, 'Тойрог0000000010', 10, 2);

-- --------------------------------------------------------

--
-- Table structure for table `t_political_party`
--

DROP TABLE IF EXISTS `t_political_party`;
CREATE TABLE `t_political_party` (
  `id` int(11) NOT NULL COMMENT 'id',
  `status` tinyint(4) NOT NULL COMMENT 'status',
  `political_name` varchar(500) COLLATE utf8_unicode_ci NOT NULL COMMENT 'political_name',
  `short_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT 'short_name',
  `logo` varchar(300) COLLATE utf8_unicode_ci NOT NULL COMMENT 'logo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='t_political_party';

--
-- Dumping data for table `t_political_party`
--

INSERT INTO `t_political_party` (`id`, `status`, `political_name`, `short_name`, `logo`) VALUES
(1, 1, 'Нам0000000009', 'Нам0000000009', '0000000009'),
(2, 1, 'Нам0000000013', 'Нам0000000013', '0000000013'),
(3, 1, 'Нам0000000010', 'Нам0000000010', '0000000010'),
(4, 1, 'Нам0000000006', 'Нам0000000006', '0000000006'),
(5, 1, 'Нам0000000011', 'Нам0000000011', '0000000011'),
(6, 1, 'Нам0000000005', 'Нам0000000005', '0000000005'),
(7, 1, 'Нам0000000002', 'Нам0000000002', '0000000002'),
(8, 1, 'Нам0000000007', 'Нам0000000007', '0000000007'),
(9, 1, 'Нам0000000014', 'Нам0000000014', '0000000014'),
(10, 1, 'Нам0000000012', 'Нам0000000012', '0000000012'),
(11, 1, 'Нам0000000008', 'Нам0000000008', '0000000008'),
(12, 1, 'Нам0000000015', 'Нам0000000015', '0000000015'),
(13, 1, 'Нам0000000001', 'Нам0000000001', '0000000001'),
(14, 1, 'Нам0000000003', 'Нам0000000003', '0000000003'),
(15, 1, 'Нам0000000004', 'Нам0000000004', '0000000004');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `c_election_candidates`
--
ALTER TABLE `c_election_candidates`
  ADD UNIQUE KEY `c_election_candidates_IX1` (`candidate_id`);

--
-- Indexes for table `m_name`
--
ALTER TABLE `m_name`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_candidates`
--
ALTER TABLE `t_candidates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_elections`
--
ALTER TABLE `t_elections`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tag` (`tag`);

--
-- Indexes for table `t_election_district`
--
ALTER TABLE `t_election_district`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_political_party`
--
ALTER TABLE `t_political_party`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `t_political_party_IX1` (`political_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `m_name`
--
ALTER TABLE `m_name`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id', AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `t_candidates`
--
ALTER TABLE `t_candidates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id', AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `t_elections`
--
ALTER TABLE `t_elections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `t_election_district`
--
ALTER TABLE `t_election_district`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id', AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `t_political_party`
--
ALTER TABLE `t_political_party`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id', AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
