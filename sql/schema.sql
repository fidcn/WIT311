-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 08, 2018 at 08:00 PM
-- Server version: 5.7.21-0ubuntu0.16.04.1
-- PHP Version: 5.6.34-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wit311`
--

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `location_id` int(11) NOT NULL,
  `location_name` varchar(40) NOT NULL,
  `location_description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`location_id`, `location_name`, `location_description`) VALUES
(1, 'Mission Hill', 'The Mission Hill neighborhood of the Back Bay and Roxbury areas in Boston, MA.'),
(2, 'Longwood', 'The Longwood Medical Center neighborhood of the Back Bay area in Boston, MA.'),
(3, 'Back Bay', 'The Back Bay neighborhood of Boston, MA.');

-- --------------------------------------------------------

--
-- Table structure for table `permission`
--

CREATE TABLE `permission` (
  `user_id` int(11) NOT NULL,
  `permission_type` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `permission_type`
--

CREATE TABLE `permission_type` (
  `permission_id` int(11) NOT NULL,
  `permission_name` varchar(20) NOT NULL,
  `permission_description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permission_type`
--

INSERT INTO `permission_type` (`permission_id`, `permission_name`, `permission_description`) VALUES
(1, 'Regular', 'A standard user with no special permissions other than being able to report incidents.'),
(2, 'PWD Member', 'A member of a public works department that can respond to reports and change their status.');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `report_id` int(11) NOT NULL,
  `location_id` tinyint(4) NOT NULL,
  `reporter_id` int(11) NOT NULL,
  `report_type` tinyint(4) NOT NULL,
  `report_description` varchar(500) NOT NULL,
  `report_status` tinyint(4) NOT NULL,
  `time_submitted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `report_status`
--

CREATE TABLE `report_status` (
  `status_id` int(11) NOT NULL,
  `status_name` varchar(40) NOT NULL,
  `status_description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report_status`
--

INSERT INTO `report_status` (`status_id`, `status_name`, `status_description`) VALUES
(1, 'Open', 'The report hasn\'t had its default status changed yet. No work has been done thus far.'),
(2, 'Investigating', 'The report is being investigated for validity and scope of work.'),
(3, 'In Progress', 'The work necessary to address the issue that was reported is underway.'),
(4, 'Complete', 'The necessary work has been completed and the issue has been resolved.');

-- --------------------------------------------------------

--
-- Table structure for table `report_type`
--

CREATE TABLE `report_type` (
  `type_id` tinyint(4) NOT NULL,
  `type_name` varchar(30) NOT NULL,
  `type_description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report_type`
--

INSERT INTO `report_type` (`type_id`, `type_name`, `type_description`) VALUES
(1, 'Un-plowed Road', ''),
(2, 'Un-sanded/salted Road', ''),
(3, 'Un-plowed Walkway', ''),
(4, 'Frost Heaves', ''),
(5, 'Black Ice / Icy Road', ''),
(6, 'Damaged Signage', ''),
(7, 'Damaged Traffic Lights', ''),
(8, 'Downed Telephone Pole', ''),
(9, 'Damaged Electrical Equipment', ''),
(10, 'Street Light Outage', ''),
(11, 'Flooding / Stormwater', ''),
(12, 'Vermin / Rodents', ''),
(13, 'Fallen Tree / Branches', ''),
(14, 'Improper Trash Disposal', ''),
(15, 'Grafiti', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `hash` varchar(700) NOT NULL,
  `email` varchar(75) NOT NULL,
  `session_token` varchar(1000) NOT NULL,
  `time_lastlogin` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `time_register` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`location_id`);

--
-- Indexes for table `permission`
--
ALTER TABLE `permission`
  ADD UNIQUE KEY `user_id` (`user_id`),
  ADD KEY `permission_type` (`permission_type`);

--
-- Indexes for table `permission_type`
--
ALTER TABLE `permission_type`
  ADD PRIMARY KEY (`permission_id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`report_id`),
  ADD KEY `reporter_id` (`reporter_id`),
  ADD KEY `location_id` (`location_id`),
  ADD KEY `report_type` (`report_type`);

--
-- Indexes for table `report_status`
--
ALTER TABLE `report_status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `report_type`
--
ALTER TABLE `report_type`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `permission_type`
--
ALTER TABLE `permission_type`
  MODIFY `permission_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `report_status`
--
ALTER TABLE `report_status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `report_type`
--
ALTER TABLE `report_type`
  MODIFY `type_id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
