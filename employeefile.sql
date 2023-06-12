-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2023 at 03:04 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employeedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `employeefile`
--

CREATE TABLE `employeefile` (
  `recid` bigint(20) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `civilstat` varchar(255) NOT NULL,
  `contactnum` varchar(255) NOT NULL,
  `salary` decimal(10,2) NOT NULL,
  `isactive` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employeefile`
--

INSERT INTO `employeefile` (`recid`, `fullname`, `address`, `birthdate`, `age`, `gender`, `civilstat`, `contactnum`, `salary`, `isactive`, `email`, `pass`) VALUES
(12, 'Dave Gray', 'Zarraga, USA', '2000-05-30', 22, 'male', 'Married', '09567534597', '20000.53', 1, 'dave@email.com', '$2y$10$qU4ntMp7cF1Yi1EXzn0wEOqYOJVNNjH1Dck.1XFc550KHxr.ogI4W'),
(13, 'Steve Wris', 'Sambag, Manila', '2000-06-13', 22, 'male', 'Single', '09623478956', '24000.00', 0, 'steve@email.com', '$2y$10$LSON9q/HIzynwpsdd8xFROTGftsJugIaNMag3EIBaWyg2piK5Qfbq'),
(14, 'Jays Bringshed', 'Dumangas, Bacolod', '1999-10-10', 23, 'male', 'separated', '095670678591', '28000.00', 1, 'jays@email.com', '$2y$10$ZVt7JLaK65rhzN/e4jK/be4zAynl0m4BYwws4UzTibwXCkOp8zJie'),
(15, 'Shane Ong', 'Kilid, Makati', '1998-12-17', 23, 'female', 'single', '090684297412', '30000.00', 1, 'shane@email.com', '$2y$10$HIzLLp3S3oh2VK6ww0dGx.40tCq08ctb9FVXJah1SUhcMgEBnV0nW'),
(16, 'Kristine Geahm', 'Sampalok, Palawan', '1988-05-23', 30, 'female', 'Widowed', '09784930612', '40000.45', 0, 'kris@email.com', '$2y$10$VnztJBeozasXepmt/Dg.Hu/l0KLsvjonFYv5nB4vldyBYGdQJBzKK'),
(17, 'Eric James', 'Lapaz, Iloilo', '2002-02-12', 20, 'male', 'single', '09715236123', '19000.25', 1, 'eric@email.com', '$2y$10$gW2BNJDZkAC8aFo7TEq4XOR/MPuMGgIG116GjCiCoXjtFS4CFsanK'),
(18, 'Shyla Sting', 'Jaro, Davao', '1987-07-07', 36, 'other', 'widowed', '09784632897', '50000.00', 1, 'shyla@gmail.com', '$2y$10$..fpI3./AJQ67B6VXsiYpuo1KtR20lRy27p8FctKPd6Lh1gmAmLBO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employeefile`
--
ALTER TABLE `employeefile`
  ADD PRIMARY KEY (`recid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employeefile`
--
ALTER TABLE `employeefile`
  MODIFY `recid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
