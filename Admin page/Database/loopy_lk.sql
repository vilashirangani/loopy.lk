-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2018 at 09:23 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 7.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loopy.lk`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `address` varchar(300) NOT NULL,
  `tel_no` varchar(10) NOT NULL,
  `mob_no` varchar(10) NOT NULL,
  `age` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `name`, `address`, `tel_no`, `mob_no`, `age`) VALUES
(8, 'chika', 'bhathiya1995@gmail.com', '213', 'Bhathiya Mihiran Bandara', '8/1c, Wekunugoda lane,, Bope, Galle,, Srilanka.', '0766548833', '766548833', '23'),
(9, 'Surath', 'Surath@gmail.com', 'sura', 'Surath', '8/1c, Wekunugoda lane,, Bope, Galle,, Srilanka.', '0766548833', '766548833', '23'),
(15, 'chika', 'chika@gmail.com', '456', 'Chika', '8/1c, Wekunugoda lane,, Bope, Galle,, Srilanka.', '0766548833', '324', '45');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `categorey` varchar(50) NOT NULL,
  `location_keyword` varchar(50) NOT NULL,
  `bussiness_name` varchar(100) NOT NULL,
  `address` varchar(50) NOT NULL,
  `tel_no` int(10) NOT NULL,
  `mob_no` int(10) NOT NULL,
  `location_link` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `username`, `email`, `password`, `categorey`, `location_keyword`, `bussiness_name`, `address`, `tel_no`, `mob_no`, `location_link`) VALUES
(1, 'bhathiya', '', '123', 'Agricultue', 'Agricultue', 'damro', '', 0, 0, ''),
(4, 'nimal', '', '123456', 'Agricultue', 'Agricultue', 'sada', '', 0, 0, ''),
(5, 'bha', '', '123', 'Agricultue', 'Agricultue', '', '', 0, 0, ''),
(6, 'bha', '', '123', 'Agricultue', 'Agricultue', '', '', 0, 0, ''),
(7, 'bha', '', '123', 'Agricultue', 'Agricultue', '', '', 0, 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
