-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2021 at 01:38 PM
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
-- Database: `newsportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `id` int(11) NOT NULL,
  `AdminUserName` varchar(255) NOT NULL,
  `AdminPassword` varchar(255) NOT NULL,
  `AdminEmailId` varchar(255) NOT NULL,
  `Is_Active` int(11) NOT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`id`, `AdminUserName`, `AdminPassword`, `AdminEmailId`, `Is_Active`, `CreationDate`, `UpdationDate`) VALUES
(1, 'admin', '$2y$12$BFeOxr.ABSwoU4eN.p76ne1ULG5wsr9OAui7icKScLVyGilrAzxv2', 'ilmi.tabassum@g.bracu.ac.bd', 1, '2021-07-27 17:51:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tblcategory`
--

CREATE TABLE `tblcategory` (
  `id` int(11) NOT NULL,
  `CategoryName` varchar(200) DEFAULT NULL,
  `Description` mediumtext DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL,
  `Is_Active` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcategory`
--

INSERT INTO `tblcategory` (`id`, `CategoryName`, `Description`, `PostingDate`, `UpdationDate`, `Is_Active`) VALUES
(9, 'Save Plant', 'Donate to save this plant', '2021-08-20 21:20:49', NULL, 1),
(10, 'Gift Plants', 'BUY Plants', '2021-08-20 21:21:17', NULL, 1),
(11, 'Successful Project', 'Already Saved Plants', '2021-08-20 21:21:43', NULL, 1),
(16, 'Latest Projects', 'Latest Project are here', '2021-09-03 09:00:10', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblcomments`
--

CREATE TABLE `tblcomments` (
  `id` int(11) NOT NULL,
  `postId` char(11) DEFAULT NULL,
  `name` varchar(120) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `comment` mediumtext DEFAULT NULL,
  `postingDate` timestamp NULL DEFAULT current_timestamp(),
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcomments`
--

INSERT INTO `tblcomments` (`id`, `postId`, `name`, `email`, `comment`, `postingDate`, `status`) VALUES
(27, '39', 'ilmi122', 'ilmi@q.w', 'awesome project', '2021-08-30 20:39:24', 1),
(28, '37', 'ilmi122', 'ilmi@q.w', 'winter is coming', '2021-08-30 20:58:12', 1),
(30, '41', 'tanzila', 'tanzila@gmail.com', 'How to donate for this project?', '2021-08-31 05:51:28', 0),
(31, '38', 'tanzila', 'tanzila@gmail.com', 'I want to donate in this project', '2021-08-31 08:40:15', 0),
(34, '42', 'ilmi122', 'ilmi@q.w', 'Really Awesome project. Want to do some funding..', '2021-09-01 10:28:12', 1),
(37, '46', 'Ilmi Tabassum', 'ilmi@gmail.com', 'This is a really awesome Project.', '2021-09-02 19:04:46', 1),
(40, '50', 'Ilmi Tabassum', 'ilmi@gmail.com', 'I want to go for funding', '2021-09-02 23:05:52', 1),
(41, '51', 'Ilmi Tabassum', 'ilmi@gmail.com', 'Can I buy this tree??', '2021-09-03 06:07:36', 1),
(42, '51', 'TANZILA', 'Ilmi@g.brac.ac.bd', 'Awesome Money Plant!!How to buy them!', '2021-09-03 06:17:49', 1),
(43, '50', 'TANZILA', 'Ilmi@g.brac.ac.bd', 'I also want to do some funding', '2021-09-03 06:19:23', 1),
(44, '50', 'TANZILA', 'Ilmi@g.brac.ac.bd', 'HOW MUCH???!!!', '2021-09-03 06:20:12', 1),
(46, '46', 'TANZILA', 'Ilmi@g.brac.ac.bd', 'Congratulations! ', '2021-09-03 06:21:30', 1),
(48, '50', 'Ilmi Tabassum', 'ilmi@gmail.com', 'How much donation is required?', '2021-09-03 07:31:47', 1),
(49, '54', 'Ilmi Tabassum', 'ilmi@gmail.com', 'How much funding is required?', '2021-09-03 07:33:56', 1),
(53, '50', 'Esfar E Alam Turzo', 'esf@gmail.com', 'How much donation is required?', '2021-09-03 08:58:45', 1),
(54, '57', 'Esfar E Alam Turzo', 'esf@gmail.com', 'I want to donate', '2021-09-03 09:02:03', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbldonation`
--

CREATE TABLE `tbldonation` (
  `id` int(11) NOT NULL,
  `postId` char(11) DEFAULT NULL,
  `name` varchar(120) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `amount` int(255) DEFAULT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbldonation`
--

INSERT INTO `tbldonation` (`id`, `postId`, `name`, `email`, `amount`, `status`) VALUES
(20, '44', 'ilmi122', 'ilmi@q.w', 100, 1),
(21, '50', 'Ilmi Tabassum', 'ilmi@gmail.com', 200, 1),
(22, '48', 'Ilmi Tabassum', 'ilmi@gmail.com', 200, 1),
(23, '50', 'Ilmi Tabassum', 'ilmi@gmail.com', 200, 1),
(24, '51', 'Ilmi Tabassum', 'ilmi@gmail.com', 200, 1),
(25, '50', 'Ilmi Tabassum', 'ilmi@gmail.com', 200, 1),
(26, '51', 'Ilmi Tabassum', 'ilmi@gmail.com', 150, 1),
(27, '51', 'TANZILA', 'Ilmi@g.brac.ac.bd', 200, 1),
(28, '51', 'Ilmi Tabassum', 'ilmi@gmail.com', 200, 1),
(29, '50', 'Ilmi Tabassum', 'ilmi@gmail.com', 200, 1),
(30, '50', 'Esfar E Alam Turzo', 'esf@gmail.com', 150, 1),
(31, '50', 'Esfar E Alam Turzo', 'esf@gmail.com', 200, 1),
(32, '50', 'Esfar E Alam Turzo', 'esf@gmail.com', 150, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblpages`
--

CREATE TABLE `tblpages` (
  `id` int(11) NOT NULL,
  `PageName` varchar(200) DEFAULT NULL,
  `PageTitle` mediumtext DEFAULT NULL,
  `Description` longtext DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblposts`
--

CREATE TABLE `tblposts` (
  `id` int(11) NOT NULL,
  `PostTitle` longtext DEFAULT NULL,
  `CategoryId` int(11) DEFAULT NULL,
  `SubCategoryId` int(11) DEFAULT NULL,
  `PostDetails` longtext CHARACTER SET utf8 DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `Is_Active` int(1) DEFAULT NULL,
  `PostUrl` mediumtext DEFAULT NULL,
  `PostImage` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblposts`
--

INSERT INTO `tblposts` (`id`, `PostTitle`, `CategoryId`, `SubCategoryId`, `PostDetails`, `PostingDate`, `UpdationDate`, `Is_Active`, `PostUrl`, `PostImage`) VALUES
(38, 'Project Oxygen', 11, NULL, 'Government project to save plants', '2021-08-30 19:25:14', '2021-09-02 19:47:06', 0, 'Project-Oxygen', 'a66e6a4d1d3c9f7d291e06f7d9b0f457.PNG'),
(41, 'Bangladesh, Wonderful Mystic Land of Nature (Dhaka-Srimongal-Sylhet-Dhaka)', 9, NULL, 'The Panoramic Sylhet & Srimongal where the trees are being cut rapidly. Please donate to save the plants for future generation.', '2021-08-31 05:50:00', '2021-08-31 08:09:10', 0, 'Bangladesh,-Wonderful-Mystic-Land-of-Nature-(Dhaka-Srimongal-Sylhet-Dhaka)', '71a47115425c83b7ca6afede1c465863.jpg'),
(42, 'Save Sylhet', 9, 0, 'We are collecting fund to save the nature and grow more trees in Sylhet', '2021-08-31 08:07:34', '2021-09-02 21:19:21', 1, 'Save-Sylhet', 'e8651373a20c0e7cb64a894725edc9e8.PNG'),
(43, 'Gift Plant', 10, NULL, 'Gifting Plants is a noble act', '2021-08-31 08:51:18', '2021-09-01 11:28:55', 0, 'Gift-Plant', '0a9d86b699dbd65b1450d9b9527148af.PNG'),
(44, 'Comilla Project Fund', 9, NULL, 'Funding require for Trees For Tomorrow Project collaboration with Save Plant Save Planet Organization.', '2021-08-31 09:08:29', '2021-09-01 11:05:12', 1, 'Comilla-Project-Fund', '0f337a5ef5271aef02b982e7093af30b.jpg'),
(45, 'Stark', 11, NULL, 'hbheukqj', '2021-09-01 10:31:32', '2021-09-01 10:36:49', 0, 'Stark', '021707befb576979d48041257019f369.jpg'),
(46, 'Marking the National Tree Plantation Campaign 2020 and “Mujib Borsho” ', 11, NULL, '), Prime Minister Sheikh Hasina inaugurates the distribution and plantation of one crore saplings across the country on Gono Bhaban premises.', '2021-09-01 11:32:39', NULL, 1, 'Marking-the-National-Tree-Plantation-Campaign-2020-and-“Mujib-Borsho”-', 'c7da2202001ef3739c67954b4c9dbb31.PNG'),
(47, 'Window side decorative plants', 10, NULL, 'This is for gifting your loved ones as trees will remind them about you every morning..', '2021-09-02 19:29:07', '2021-09-02 19:45:58', 0, 'Window-side-decorative-plants', 'e0b1490a370f427d4f1042a0a93b982c.PNG'),
(48, 'Aleo Vera Plant', 10, NULL, 'The aleo vera plant is good for both decoration and have various health benefits. ', '2021-09-02 19:40:23', NULL, 1, 'Aleo-Vera-Plant', '4bc59c62486ccf3aa19b63207ba2b06a.PNG'),
(49, 'Window Side Plants', 10, NULL, 'Window side decorative plants\r\nThis is for gifting your loved ones as trees will remind them about you every morning..', '2021-09-02 19:46:28', NULL, 1, 'Window-Side-Plants', 'e0b1490a370f427d4f1042a0a93b982c.PNG'),
(50, 'Plant Oxygen Campaign', 9, NULL, 'This is a voluntary project belong to our foundation Save Plant Save Planet. ', '2021-09-02 19:48:30', NULL, 1, 'Plant-Oxygen-Campaign', 'a66e6a4d1d3c9f7d291e06f7d9b0f457.PNG'),
(51, 'Gift Plant', 10, NULL, 'Gift plant to your friends', '2021-09-02 22:51:11', '2021-09-02 22:52:01', 1, 'Gift-Plant', '6250c08a8a296d1dab68799207db58b8.png'),
(52, 'Gift Plant', 10, NULL, 'gift a plant', '2021-09-02 23:07:25', '2021-09-02 23:08:33', 0, 'Gift-Plant', '4bc59c62486ccf3aa19b63207ba2b06a.PNG'),
(53, 'New Project needs funding', 12, NULL, 'The project is voluntary based ', '2021-09-03 06:10:35', '2021-09-03 06:13:19', 0, 'New-Project-needs-funding', 'b2d315daa12778def4c8d3404a269d56.PNG'),
(54, 'new projects', 13, NULL, 'Please do make some funding', '2021-09-03 07:33:30', '2021-09-03 07:34:55', 0, 'new-projects', '6abdb716d3f864088fed8ff99d53d4e8.jpg'),
(55, 'New Plants', 14, NULL, 'Newly added projects', '2021-09-03 08:02:07', '2021-09-03 08:35:06', 0, 'New-Plants', '4241baaab78b3c1fb6bc04336d15d5f7.jpg'),
(56, 'Need funding to this project', 15, NULL, 'Please donate to continue ', '2021-09-03 08:34:40', '2021-09-03 09:01:21', 0, 'Need-funding-to-this-project', '0f337a5ef5271aef02b982e7093af30b.jpg'),
(57, 'Need funding', 16, NULL, 'Need funding to this project.', '2021-09-03 09:00:54', '2021-09-03 09:01:37', 1, 'Need-funding', '764e1fd691c6cc7b3e8970e20bbad890.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tblsubcategory`
--

CREATE TABLE `tblsubcategory` (
  `SubCategoryId` int(11) NOT NULL,
  `CategoryId` int(11) DEFAULT NULL,
  `Subcategory` varchar(255) DEFAULT NULL,
  `SubCatDescription` mediumtext DEFAULT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL,
  `Is_Active` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcategory`
--
ALTER TABLE `tblcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcomments`
--
ALTER TABLE `tblcomments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbldonation`
--
ALTER TABLE `tbldonation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblpages`
--
ALTER TABLE `tblpages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblposts`
--
ALTER TABLE `tblposts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblcategory`
--
ALTER TABLE `tblcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tblcomments`
--
ALTER TABLE `tblcomments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `tbldonation`
--
ALTER TABLE `tbldonation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tblpages`
--
ALTER TABLE `tblpages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblposts`
--
ALTER TABLE `tblposts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
