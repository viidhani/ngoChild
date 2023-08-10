-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2022 at 01:54 PM
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
-- Database: `childngo-1`
--

-- --------------------------------------------------------

--
-- Table structure for table `accept_donation`
--

CREATE TABLE `accept_donation` (
  `id` int(11) NOT NULL,
  `donation_id` int(11) NOT NULL,
  `volunteer_id` int(11) NOT NULL,
  `donor_id` int(11) NOT NULL,
  `accept_datetime` varchar(50) NOT NULL,
  `accept_remarks` text NOT NULL,
  `received_datetime` varchar(100) NOT NULL,
  `received_remarks` text NOT NULL,
  `delivery_datetime` varchar(50) NOT NULL,
  `delivery_remarks` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accept_donation`
--

INSERT INTO `accept_donation` (`id`, `donation_id`, `volunteer_id`, `donor_id`, `accept_datetime`, `accept_remarks`, `received_datetime`, `received_remarks`, `delivery_datetime`, `delivery_remarks`) VALUES
(2, 11, 15, 14, '2022-02-04 10:52:42 am', 'OK', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `email`, `password`) VALUES
(1, 'Drashti', 'diya@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `adoptionrequest`
--

CREATE TABLE `adoptionrequest` (
  `request_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `child_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `habits` text NOT NULL,
  `familymem` text NOT NULL,
  `why` text NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adoptionrequest`
--

INSERT INTO `adoptionrequest` (`request_id`, `user_id`, `child_id`, `city_id`, `occupation`, `habits`, `familymem`, `why`, `description`, `date`, `status`) VALUES
(1, 1, 6, 1, 'Job ', 'God habits', 'Father\r\nMother \r\nWife', 'Want to Became a Parent', 'we are Brahmin', '2022-02-07', 'MeetUs'),
(2, 1, 5, 1, 'Husband - Businesss\r\nMother - Housewife', 'Good Habits', 'Wife \r\nHusband', 'Want a Family', 'Family ', '2022-02-07', 'Sorry');

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `area_id` int(11) NOT NULL,
  `area_name` varchar(100) NOT NULL,
  `city_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`area_id`, `area_name`, `city_id`) VALUES
(1, 'Gurukul', 1),
(2, 'Maninagar', 1),
(3, 'Varachcha', 2),
(4, 'Kankariya', 1),
(5, 'Raiya Road', 3);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(1, 'Food'),
(2, 'Cloths'),
(3, 'Emergency Kits'),
(4, 'Products');

-- --------------------------------------------------------

--
-- Table structure for table `child`
--

CREATE TABLE `child` (
  `child_id` int(11) NOT NULL,
  `age` int(2) NOT NULL,
  `name` varchar(30) NOT NULL,
  `height` int(3) NOT NULL,
  `weight` int(2) NOT NULL,
  `color` varchar(20) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `about` text NOT NULL,
  `gallery` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `child`
--

INSERT INTO `child` (`child_id`, `age`, `name`, `height`, `weight`, `color`, `gender`, `about`, `gallery`, `date`) VALUES
(2, 5, 'Nishant', 3, 15, 'White', 'boy', 'He is A Clever Boy ', 'nishant.jpg', '2017-02-05'),
(3, 5, 'Divya', 5, 30, 'White', 'girl', 'She is Girl So Cute', 'kid2.jpg', '2018-07-19'),
(4, 5, 'Prerna', 3, 16, 'White', 'girl', 'She Is So Preety', 'kid3.jpg', '2015-06-15'),
(5, 5, 'Hritik', 5, 30, 'White', 'boy', 'he Is a good Boy', 'kid4.jpg', '2019-07-10'),
(6, 2, 'Shrusti', 3, 15, 'White', 'girl', 'She is Little One here', 'kid5.jpg', '2022-02-16');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(11) NOT NULL,
  `city_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `city_name`) VALUES
(1, 'Ahmedabad'),
(2, 'Surat '),
(3, 'Rajkot');

-- --------------------------------------------------------

--
-- Table structure for table `donation_user`
--

CREATE TABLE `donation_user` (
  `donation_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `area_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `subject` text NOT NULL,
  `description` text NOT NULL,
  `pickadd` text NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `status` varchar(50) DEFAULT NULL,
  `remarks` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donation_user`
--

INSERT INTO `donation_user` (`donation_id`, `cat_id`, `city_id`, `area_id`, `user_id`, `subject`, `description`, `pickadd`, `date`, `time`, `status`, `remarks`) VALUES
(4, 1, 1, 4, 1, 'Dont Be Greedy Help the Needy. The debt crisis fac', 'Donate', 'Maninagar', '2022-02-01', '10:00:00', 'Pending', ''),
(5, 2, 1, 4, 3, 'Cloths For Old Aged', 'cloths', 'Maninagar', '2022-01-13', '12:00:00', 'Accept', 'At Sharp Time'),
(6, 3, 1, 4, 3, 'Cloths For Old Aged womens', 'Needy Persons', 'Kakariya', '2022-01-13', '12:00:00', 'Received', ''),
(7, 1, 1, 4, 3, 'All Donations to HelpAge India are 50% Tax Exempt ', 'ALl Donations', 'Kakariya', '2022-01-11', '12:00:00', 'Accept', ''),
(8, 4, 1, 4, 3, 'All Donations to HelpAge India are 50% Tax Exempt ', 'The value of life is not in its duration, but in its donation. You are not important because of how ', 'Kakariya', '2022-02-16', '04:00:00', 'Pending', ''),
(9, 1, 1, 4, 3, 'Cloths For Old Aged', 'No one has ever become poor by giving. ― Anne Frank\r\n', 'Kakariya', '2022-02-16', '05:00:00', 'Received', ''),
(11, 1, 1, 2, 14, 'Food Donation for Child', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2022-02-04', '18:58:00', 'Accept', 'OK'),
(12, 1, 1, 3, 14, 'afsrsdfsd', 'sadfsdf', 'sdfsdf', '2022-02-04', '19:07:00', 'Pending', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_id` int(11) NOT NULL,
  `event_title` varchar(50) NOT NULL,
  `event_description` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Pending',
  `reason` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `event_title`, `event_description`, `user_id`, `date`, `time`, `status`, `reason`) VALUES
(3, 'plan a Event', 'Khusiyan', 1, '2022-02-01', '17:15:00', 'Accept', ''),
(4, 'Lets Spread Happiness', 'Lets Spread Happiness', 3, '2022-02-24', '10:30:00', 'Reject', 'Because we already Organized other event on that Day'),
(6, 'BirthDay Celebration', 'Lorem Ipsum is simply du', 14, '2022-02-02', '16:56:00', 'Pending', ''),
(7, 'Testing', 'asfsdfsd', 14, '2022-02-02', '15:57:00', 'Pending', ''),
(8, 'Testing', 'ADSADASD', 14, '2022-02-02', '16:00:00', 'Pending', ''),
(9, 'Testing', 'asdasdsad', 14, '2022-02-02', '17:02:00', 'Pending', ''),
(10, 'qasfdeswaf', 'sadfsdafsdf', 14, '2022-03-01', '15:05:00', 'Pending', ''),
(11, 'asfsdf', 'sdfsdfsdf', 14, '2022-02-23', '15:06:00', 'Pending', '');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL,
  `message` varchar(300) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `review` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `message`, `user_id`, `date`, `review`) VALUES
(1, 'Hello I Want to Donate Food', 2, '2022-12-12', ''),
(3, '‘keep doing that - it’s great work’', 4, '2022-01-30', ''),
(4, 'Giving Something Means a Lot For me', 3, '2022-01-31', '5'),
(5, 'qwertewqrwrwe', 14, '2022-02-04', '3 Star');

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `inq_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `contact` bigint(10) NOT NULL,
  `message` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`inq_id`, `name`, `contact`, `message`, `date`) VALUES
(1, 'Drashti Mandaviya', 8160703789, 'Require Cal lFrom Uh', '2022-02-06');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `role_details` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role_details`) VALUES
(1, 'volunteer'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `area_id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(25) NOT NULL,
  `contact` bigint(10) NOT NULL,
  `address` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL,
  `reg_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `role_id`, `city_id`, `area_id`, `fname`, `lname`, `gender`, `dob`, `email`, `contact`, `address`, `password`, `reg_date`) VALUES
(1, 2, 1, 1, 'Nirav', 'Mandaviya', 'Male', '2001-07-16', 'nirav@gmail.com', 8866172602, 'Gurukul Road', '789', '2022-01-09'),
(2, 1, 1, 4, 'Aayush', 'Bhavsar', 'Male', '2001-07-16', 'ayush@gmail.com', 9898961135, 'Maninagar', '789', '2022-01-09'),
(3, 2, 1, 4, 'Falguni', 'Bhavsar', 'Female', '2012-01-12', 'falguni@gmail.com', 9898961138, 'Maninagar', '12345', '2022-01-09'),
(14, 2, 1, 2, 'Alkesh', 'Kaba', 'Male', '2022-02-02', 'kabaalkesh293@gmail.com ', 9016647480, 'Bhaktinagar', '456', '2022-02-04'),
(15, 1, 1, 2, 'Alkesh', 'Kaba', 'Male', '2022-02-02', 'alkesh@gmail.com', 9725883312, 'ADSADSAD', '123', '2022-02-04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accept_donation`
--
ALTER TABLE `accept_donation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `donation_id` (`donation_id`),
  ADD KEY `volunteer_id` (`volunteer_id`),
  ADD KEY `donor_id` (`donor_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `adoptionrequest`
--
ALTER TABLE `adoptionrequest`
  ADD PRIMARY KEY (`request_id`),
  ADD KEY `city_id` (`city_id`),
  ADD KEY `user_id` (`user_id`,`child_id`);

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`area_id`),
  ADD KEY `city_id` (`city_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `child`
--
ALTER TABLE `child`
  ADD PRIMARY KEY (`child_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `donation_user`
--
ALTER TABLE `donation_user`
  ADD PRIMARY KEY (`donation_id`),
  ADD KEY `cat_id` (`cat_id`),
  ADD KEY `city_id` (`city_id`),
  ADD KEY `area_id` (`area_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`inq_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `role_id` (`role_id`),
  ADD KEY `city_id` (`city_id`),
  ADD KEY `area_id` (`area_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accept_donation`
--
ALTER TABLE `accept_donation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `adoptionrequest`
--
ALTER TABLE `adoptionrequest`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `area_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `child`
--
ALTER TABLE `child`
  MODIFY `child_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `donation_user`
--
ALTER TABLE `donation_user`
  MODIFY `donation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `inq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `accept_donation`
--
ALTER TABLE `accept_donation`
  ADD CONSTRAINT `accept_donation_ibfk_1` FOREIGN KEY (`donation_id`) REFERENCES `donation_user` (`donation_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `accept_donation_ibfk_2` FOREIGN KEY (`volunteer_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `accept_donation_ibfk_3` FOREIGN KEY (`donor_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `adoptionrequest`
--
ALTER TABLE `adoptionrequest`
  ADD CONSTRAINT `adoptionrequest_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `area`
--
ALTER TABLE `area`
  ADD CONSTRAINT `area_ibfk_1` FOREIGN KEY (`city_id`) REFERENCES `city` (`city_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `donation_user`
--
ALTER TABLE `donation_user`
  ADD CONSTRAINT `donation_user_ibfk_1` FOREIGN KEY (`area_id`) REFERENCES `area` (`area_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `donation_user_ibfk_2` FOREIGN KEY (`cat_id`) REFERENCES `category` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `donation_user_ibfk_3` FOREIGN KEY (`city_id`) REFERENCES `city` (`city_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `donation_user_ibfk_4` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `event_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`role_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`city_id`) REFERENCES `city` (`city_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_ibfk_3` FOREIGN KEY (`area_id`) REFERENCES `area` (`area_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
