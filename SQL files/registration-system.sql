-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2021 at 01:39 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration-system`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactinfo`
--

CREATE TABLE `contactinfo` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactinfo`
--

INSERT INTO `contactinfo` (`id`, `name`, `email`, `message`) VALUES
(1, 'ilmi taba', 'ilmi@g.brac', 'thanks for this project'),
(50, 'ilmi Tabassum', 'ilmi.tabassum@g.bracu.ac.bd', 'we want to know more');

-- --------------------------------------------------------

--
-- Table structure for table `pwdreset`
--

CREATE TABLE `pwdreset` (
  `pwdResetId` int(255) NOT NULL,
  `pwdResetEmail` text NOT NULL,
  `pwdResetSelector` text NOT NULL,
  `pwdResetToken` longtext NOT NULL,
  `pwdResetExpires` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pwdreset`
--

INSERT INTO `pwdreset` (`pwdResetId`, `pwdResetEmail`, `pwdResetSelector`, `pwdResetToken`, `pwdResetExpires`) VALUES
(10, 'ilmitabassum@g.com', 'b69bc96d574b50e2', '$2y$10$sFcG9zxZDFy9B2W9nyAwJeoVaqmDt2yFXzVUyfTOkqjIDuKUF77fC', '1629298354'),
(12, 'ilmi@g.bracuweee', '3bacfa5f27368e7b', '$2y$10$6xeMAN0sFN1TtcYhtabCXOHtyIX0tAx4xtFdB0WXqHsbuqNw2Pn/C', '1629300546');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `usersId` int(255) NOT NULL,
  `usersName` varchar(255) NOT NULL,
  `usersEmail` varchar(255) NOT NULL,
  `usersUid` varchar(255) NOT NULL,
  `usersCountry` varchar(255) NOT NULL,
  `usersGender` varchar(255) NOT NULL,
  `usersPwd` varchar(255) NOT NULL,
  `pwdRepeat` varchar(255) NOT NULL,
  `cardID` varchar(255) NOT NULL,
  `expMonth` varchar(255) NOT NULL,
  `expYear` varchar(255) NOT NULL,
  `cvv` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usersId`, `usersName`, `usersEmail`, `usersUid`, `usersCountry`, `usersGender`, `usersPwd`, `pwdRepeat`, `cardID`, `expMonth`, `expYear`, `cvv`, `amount`) VALUES
(33, 'ilmi', 'ilmi@g.bracu', 'ilmi', 'Albania', 'Female', '$2y$10$S/0CZrublTV8BqSwZdEXc.FMrgwIihuHGn5XD/acGtI/UedKigJUa', '', '', '', '', '', ''),
(34, 'ILMI Tabassum', 'qwer@g.bracu', 'qwer', 'Bangladesh', 'Female', '$2y$10$fX84G7T9xwaNY8R0.mKQfeesy2TA5V7YNOSxeTJgWs3WoIQ35SaLS', '', '', '', '', '', ''),
(35, 'Ilmi Tabassum', 'ilmi@gmail.com', 'ILMI17101130', 'Bangladesh', 'Female', '$2y$10$rb6rSEp0YevdBib9IR8hBu9jyg0PZ1ty7FgU3AOKJQPejnjSMdbnC', '', '', '', '', '', ''),
(36, 'TANZILA', 'Ilmi@g.brac.ac.bd', 'TANZILA', 'Canada', 'Female', '$2y$10$Tsh8x2YSm5fZxn/I7pmjB.W12q2rBukPJieQKVoXlvqIUGkAExYXS', '', '', '', '', '', ''),
(37, 'Esfar E Alam Turzo', 'esf@gmail.com', 'Esfar', 'Bangladesh', 'Male', '$2y$10$vlji5Ypdczm9rJTD12uh4u.7fnqklRcVc3T7IgJ3Wfx.H8qUOd6W.', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactinfo`
--
ALTER TABLE `contactinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactinfo`
--
ALTER TABLE `contactinfo`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usersId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
