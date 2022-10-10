-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2022 at 08:34 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crms`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `stud_id` int(11) NOT NULL,
  `stud_firstname` varchar(255) NOT NULL,
  `stud_lastname` varchar(255) NOT NULL,
  `stud_email` varchar(255) NOT NULL,
  `stud_password` varchar(255) NOT NULL,
  `stud_mobile` bigint(20) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `stud_gander` varchar(225) NOT NULL,
  `upload_photo` varchar(1024) NOT NULL,
  `stud_state` varchar(255) NOT NULL,
  `stud_city` varchar(255) NOT NULL,
  `stud_address` text NOT NULL,
  `rdatetime` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stud_id`, `stud_firstname`, `stud_lastname`, `stud_email`, `stud_password`, `stud_mobile`, `dob`, `stud_gander`, `upload_photo`, `stud_state`, `stud_city`, `stud_address`, `rdatetime`) VALUES
(1, 'chandan', 'jal', '', 'user123456', 0, '', '1', 'upload/a.jpg', 'gujrat', 'rajkot', '', ''),
(2, 'fname', 'lname', 'ajksan@gmail.com', 'MTIz', 122551545, '2022-02-02', 'male', 'uploads/logo.jpg', 'in', 'ahem', 'hi', '0000-00-00'),
(3, 'fname', 'lname', 'ajksan@gmail.com', 'MTIz', 122551545, '2022-02-02', 'male', 'uploads/logo.jpg', 'in', 'ahem', 'hi', '0000-00-00'),
(4, 'chandan', 'jal', 'jalchandan@gmail.com', 'YXNkZmdoamts', 123456789, '2022-10-14', 'male', 'uploads/logo.jpg', 'jp', 'city', 'hi', '0000-00-00'),
(5, 'chandan', 'jal', 'jalchandan@gmail.com', 'YXNkZmdoamts', 123456789, '2022-10-14', 'male', 'uploads/logo.jpg', 'jp', 'city', 'hi', '0000-00-00'),
(6, 'jk', 'kj', 'ajksan@gmail.com', 'MTIz', 1252, '2222-05-25', 'male', 'uploads/logo.jpg', 'state', 'city', 'hi', '0000-00-00'),
(7, 'chandan', 'jal', 'ajksan@gmail.com', 'MTQ1', 1564654, '0045-05-05', 'male', 'uploads/logo.jpg', 'state', 'city', 'hi', '05/10/2022 20:30:46 PM'),
(8, 'fname', 'lname', 'jalchandan50@gmail.com', 'MTIz', 123456789, '2022-10-20', 'male', 'uploads/11th.jpg', 'state', 'jam', 'hi', '10/10/2022 11:45:32 AM');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `contact_id` int(11) NOT NULL,
  `text_fname` varchar(255) NOT NULL,
  `text_email` varchar(255) NOT NULL,
  `text_mobile` bigint(15) NOT NULL,
  `text_address` varchar(255) NOT NULL,
  `rdatetime` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`contact_id`, `text_fname`, `text_email`, `text_mobile`, `text_address`, `rdatetime`) VALUES
(1, 'ab', 'admin@gmail.com', 99, 'hi', '06-10-2022 11:23:09 AM'),
(2, 'chandan', 'jalchandan@gmail.com', 84464231654, 'hi', '06-10-2022 12:05:40 PM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`stud_id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `stud_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
