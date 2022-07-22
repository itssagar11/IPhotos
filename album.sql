-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2022 at 07:09 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iphotos`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `id` int(255) NOT NULL,
  `thumbnail` text NOT NULL,
  `title` text NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `premium` tinyint(10) NOT NULL,
  `images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`images`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`id`, `thumbnail`, `title`, `description`, `status`, `premium`, `images`) VALUES
(39, 'images/istockphoto-842983114-612x612.jpg', 'Devpariyag- Origin of Ganges.', 'Devprayag is a town and a nagar panchayat in Tehri Garhwal District in the state of Uttarakhand, India, and is the final one of the Panch Prayag of Alaknanda River where Alaknanda meets the Bhagirathi river and both rivers thereafter flow on as the Ganges', 1, 0, '[\"images/AjitHota_BirthPlaceOfGanges.jpg\",\"images/76_big.jpg\"]'),
(40, 'images/kerala.jpg', 'Weather OF Kerela', 'Kerala, a state on India\'s tropical Malabar Coast, has nearly 600km of Arabian Sea shoreline. It\'s known for its palm-lined beaches and backwaters, a network of canals. Inland are the Western Ghats, mountains whose slopes support tea, coffee and spice pla', 1, 1, '[\"images/KeralaBackwaters_Main-730x410.jpg\",\"images/keralafacts-1535712045.jpg\"]'),
(41, 'images/delhi-lotus-temple-1486142341.jpg', 'Delhi-Capital city', 'Delhi, India’s capital territory, is a massive metropolitan area in the country’s north. In Old Delhi, a neighborhood dating to the 1600s, stands the imposing Mughal-era Red Fort, a symbol of India, and the sprawling Jama Masjid mosque,', 1, 0, '[\"images/shutterstockRF_432286909-1-7dc177eebf3f.jpg\"]'),
(42, 'images/istockphoto-484389570-612x612.jpg', 'Panchachuli peak', 'The panchachuli peak is situated in kumau region of uttarakhand.', 1, 0, '[\"images/istockphoto-1044787580-612x612.jpg\"]');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
