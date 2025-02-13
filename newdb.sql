-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 24, 2020 at 11:40 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `newdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE IF NOT EXISTS `appointment` (
  `appointmentid` int(10) NOT NULL AUTO_INCREMENT,
  `patientname` varchar(50) NOT NULL,
  `fathername` varchar(50) NOT NULL,
  `contact` varchar(25) NOT NULL,
  `departmentid` int(10) NOT NULL,
  `appointmentdate` date NOT NULL,
  `appointmenttime` time NOT NULL,
  `doctorid` int(10) NOT NULL,
  `app_reason` text NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`appointmentid`),
  UNIQUE KEY `appointmentid` (`appointmentid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appointmentid`, `patientname`, `fathername`, `contact`, `departmentid`, `appointmentdate`, `appointmenttime`, `doctorid`, `app_reason`, `status`) VALUES
(1, 'anjali', 'ashok kumar', '8851406766', 1, '2020-04-10', '10:32:00', 2, 'for checkup', 'Active'),
(3, 'pooja', 'madan singh', '7756984123', 5, '2020-06-10', '13:40:00', 6, 'ill', 'Active'),
(4, 'shaima', 'raj singh', '8826417166', 7, '2020-07-10', '22:09:00', 5, 'feffug', 'Active'),
(5, 'anjali', 'raj singh', '8826417166', 6, '2020-05-07', '14:19:00', 6, 'ddxcc x', 'Active'),
(6, 'anjali', 'raj singh', '8826417166', 6, '2020-05-07', '14:19:00', 6, 'ddxcc x', 'Active'),
(7, 'anjali', 'raj singh', '8826417166', 6, '2020-05-07', '14:19:00', 6, 'ddxcc x', 'Active'),
(8, 'anjali', 'raj singh', '8826417166', 6, '2020-05-07', '14:19:00', 6, 'ddxcc x', 'Active'),
(9, 'anjali', 'raj singh', '8826417166', 6, '2020-05-07', '14:19:00', 6, 'ddxcc x', 'Active'),
(10, 'anjali', 'raj singh', '8826417166', 6, '2020-05-07', '14:19:00', 6, 'ddxcc x', 'Active'),
(11, 'anjali', 'raj singh', '8826417166', 6, '2020-05-07', '14:19:00', 6, 'ddxcc x', 'Active'),
(12, 'anjali', 'raj singh', '8826417166', 6, '2020-05-07', '14:19:00', 6, 'ddxcc x', 'Active'),
(13, 'anjali', 'raj singh', '8826417166', 6, '2020-05-07', '14:19:00', 6, 'ddxcc x', 'Active'),
(14, 'anjali', 'raj singh', '8826417166', 6, '2020-05-07', '14:19:00', 6, 'ddxcc x', 'Active'),
(15, 'anjali', 'raj singh', '8826417166', 6, '2020-05-07', '14:19:00', 6, 'ddxcc x', 'Active'),
(16, 'anjali', 'raj singh', '8826417166', 6, '2020-05-07', '14:19:00', 6, 'ddxcc x', 'Active'),
(17, 'anjali', 'raj singh', '8826417166', 6, '2020-05-07', '14:19:00', 6, 'ddxcc x', 'Active'),
(18, 'anjali', 'raj singh', '8826417166', 6, '2020-05-07', '14:19:00', 6, 'ddxcc x', 'Active'),
(19, 'anjali', 'raj singh', '8826417166', 6, '2020-05-07', '14:19:00', 6, 'ddxcc x', 'Active'),
(20, 'anjali', 'raj singh', '8826417166', 6, '2020-05-07', '14:19:00', 6, 'ddxcc x', 'Active'),
(21, 'anjali', 'raj singh', '8826417166', 6, '2020-05-07', '14:19:00', 6, 'ddxcc x', 'Active'),
(22, 'anjali', 'raj singh', '8826417166', 6, '2020-05-07', '14:19:00', 6, 'ddxcc x', 'Active'),
(23, 'anjali', 'ram singh', '6326417166', 7, '2020-05-07', '14:19:00', 1, 'ddxcc x', 'Active'),
(24, 'annpurna devi', 'hanuman', '8866553322', 4, '2020-05-07', '12:23:00', 5, 'eye checkup', 'Active'),
(25, 'sweata', 'kkmd', '1236549874', 5, '2020-06-14', '12:43:00', 6, 'iriiririrgggigieee', 'Active'),
(26, 'rosi', 'jackson', '5566998877', 2, '2020-06-14', '14:00:00', 2, 'trttiyopjo', 'Active'),
(27, 'joty', 'darshan', '8851406766', 10, '2020-05-14', '13:17:00', 6, 'ffddffffvfvvdfd', 'Active'),
(28, 'aaaaaaaaaa', 'scxzzcdc', '56551431324', 1, '2020-05-14', '13:41:00', 5, 'akc,ss,s,,sc', 'Active'),
(29, 'joy', 'nrnrenrr', '1653285656', 1, '2020-03-14', '13:48:00', 2, 'iiiregriri', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `departmentid` int(10) NOT NULL AUTO_INCREMENT,
  `departmentname` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`departmentid`),
  UNIQUE KEY `departmentid` (`departmentid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`departmentid`, `departmentname`, `description`, `status`) VALUES
(2, 'Children doctor', 'All kinds of disease', 'Active'),
(4, 'ENT Specialist', 'Ear, Nose and Tongue Doctor', 'Active'),
(5, 'Neurologist', 'Related neurons, bones', 'Active'),
(6, 'Surgery', 'Includes plastic surgery, brain and neurology surgery', 'Active'),
(7, 'Pediatrics', 'Pediatrics doctor', 'Active'),
(8, 'Pharmacy', 'Providing patients with medicines prescribed by specialist physicians', 'Active'),
(9, 'Laboratory and Blood bank', 'Includes detailed lab investigations and blood bank are developing considerably as per international standards  ', 'Active'),
(10, 'Physiotherapy', 'Includes services to specialized clinic inpatients who are referred by hospital physicians or primary health care clinics.', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE IF NOT EXISTS `doctor` (
  `doctorid` int(10) NOT NULL AUTO_INCREMENT,
  `doctorname` varchar(50) NOT NULL,
  `mobileno` varchar(15) NOT NULL,
  `departmentid` int(10) NOT NULL,
  `loginid` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `education` varchar(25) NOT NULL,
  `experience` float NOT NULL,
  `consultancy_charge` float NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`doctorid`),
  UNIQUE KEY `doctorid` (`doctorid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doctorid`, `doctorname`, `mobileno`, `departmentid`, `loginid`, `password`, `education`, `experience`, `consultancy_charge`, `status`) VALUES
(1, 'Lokesh Kumar Chopra', '8756332456', 1, 'doctor1', '12345678', 'MBBS MD', 2, 550, 'Active'),
(2, 'Sandeep H S', '8851406766', 2, 'dortor2', '12345678', 'MBBS MD IDCCM', 5, 700, 'Active'),
(3, 'Shivshankar', '9988556632', 3, 'dotor3', '12345678', 'MBBS', 3, 660, 'Active'),
(5, 'Aditya maurya', '9812453678', 4, 'doctor4', '12345678', 'MBBS MD IDCCM', 7, 700, 'Active'),
(6, 'Ranjan kumar', '9876543210', 5, 'doctor5', '1122334455', 'MBBS MD IDCCM', 6, 1000, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_timings`
--

CREATE TABLE IF NOT EXISTS `doctor_timings` (
  `doctor_timings_id` int(10) NOT NULL AUTO_INCREMENT,
  `doctorid` int(10) NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `available_day` varchar(15) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`doctor_timings_id`),
  UNIQUE KEY `doctor_timings_id` (`doctor_timings_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `doctor_timings`
--

INSERT INTO `doctor_timings` (`doctor_timings_id`, `doctorid`, `start_time`, `end_time`, `available_day`, `status`) VALUES
(4, 1, '07:45:00', '15:45:00', 'sun-fri', 'Active'),
(7, 2, '06:00:00', '19:00:00', 'wed-sat', 'Active'),
(8, 3, '14:00:00', '21:00:00', 'mon-thr', 'Active'),
(9, 5, '19:01:00', '23:00:00', 'tue-fri', 'Active'),
(10, 6, '10:00:00', '16:00:00', 'thr-sun', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `patient_detail`
--

CREATE TABLE IF NOT EXISTS `patient_detail` (
  `patientid` int(10) NOT NULL AUTO_INCREMENT,
  `patientname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `place` text NOT NULL,
  `contact` varchar(15) NOT NULL,
  `blood_group` varchar(25) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `tbl_age` int(25) NOT NULL,
  `time` time NOT NULL,
  PRIMARY KEY (`patientid`),
  UNIQUE KEY `patientid` (`patientid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `patient_detail`
--

INSERT INTO `patient_detail` (`patientid`, `patientname`, `email`, `password`, `place`, `contact`, `blood_group`, `dob`, `gender`, `tbl_age`, `time`) VALUES
(4, 'anjali', 'somyasani2001@gmail.com', '12345678', 'faridabad', '8851406766', '', '2001-03-15', 'Female', 19, '11:58:35'),
(5, 'pooja', 'moruyapooja543@gmail.com', '98765432', 'faridabad', '7050659884', '', '1999-08-16', 'Female', 20, '12:00:08'),
(7, 'shlipa', 'dubeyshilpa@gmail.com', '12345678', 'sector-3,faridabad', '9988445566', '', '1998-02-10', 'Female', 22, '15:13:00'),
(8, 'menka', 'menkashah543@gmail.com', '99887766', 'dabua colony,fbd', '8855226644', '', '1999-04-10', 'Female', 21, '15:28:07'),
(9, 'shaima', 'shaimapraveen123@gmail.com', '12345678', 'ajronda,fbd', '7745896321', 'B-', '2001-10-10', 'Female', 18, '15:32:02'),
(10, 'hii', 'goku@gmail.com', '12345678', 'h.no.4561,nehru colony', '9988445566', 'A-', '2011-07-24', 'Male', 8, '08:45:27');

-- --------------------------------------------------------

--
-- Table structure for table `service_type`
--

CREATE TABLE IF NOT EXISTS `service_type` (
  `service_type_id` int(10) NOT NULL AUTO_INCREMENT,
  `service_type` varchar(100) NOT NULL,
  `servicecharge` float NOT NULL,
  `description` text NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`service_type_id`),
  UNIQUE KEY `service_type_id` (`service_type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `service_type`
--

INSERT INTO `service_type` (`service_type_id`, `service_type`, `servicecharge`, `description`, `status`) VALUES
(1, 'X ray', 250, 'To take fractured photo copy', 'Active'),
(2, 'X ray', 250, 'To take fractured photo copy', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `treatment`
--

CREATE TABLE IF NOT EXISTS `treatment` (
  `treatmentid` int(10) NOT NULL AUTO_INCREMENT,
  `treatmenttype` varchar(25) NOT NULL,
  `treatment_cost` decimal(10,0) NOT NULL,
  `note` text NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`treatmentid`),
  UNIQUE KEY `treatmentid` (`treatmentid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `treatment`
--

INSERT INTO `treatment` (`treatmentid`, `treatmenttype`, `treatment_cost`, `note`, `status`) VALUES
(1, 'Treatment for Malaria', '450', 'Providing medicine and tonic with injection', 'Active'),
(2, 'Treatment for Dengue', '20000', 'Providing massage and home made tips', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `treatment_records`
--

CREATE TABLE IF NOT EXISTS `treatment_records` (
  `treatment_records_id` int(10) NOT NULL AUTO_INCREMENT,
  `treatmentid` int(10) NOT NULL,
  `appointmentid` int(10) NOT NULL,
  `patientid` int(10) NOT NULL,
  `doctorid` int(10) NOT NULL,
  `treatment_description` text NOT NULL,
  `uploads` varchar(100) NOT NULL,
  `treatment_date` date NOT NULL,
  `treatment_time` time NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`treatment_records_id`),
  UNIQUE KEY `treatment_records_id` (`treatment_records_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `treatment_records`
--

INSERT INTO `treatment_records` (`treatment_records_id`, `treatmentid`, `appointmentid`, `patientid`, `doctorid`, `treatment_description`, `uploads`, `treatment_date`, `treatment_time`, `status`) VALUES
(13, 1, 1, 4, 1, 'dhgnfhk', '226346.jpg', '2020-04-12', '13:50:00', 'Active'),
(15, 2, 4, 9, 5, 'kknknknkkn', '26712', '2019-04-12', '13:51:00', 'Active'),
(16, 1, 6, 4, 1, 'hhb', '163326.jpg', '2020-06-24', '09:00:00', 'Active'),
(17, 1, 6, 4, 1, 'hhb', '5336.jpg', '2020-06-24', '09:00:00', 'Active'),
(18, 1, 6, 4, 1, 'hhb', '248746.jpg', '2020-06-24', '09:00:00', 'Active'),
(19, 1, 6, 4, 1, 'hhb', '233236.jpg', '2020-06-24', '09:00:00', 'Active'),
(20, 2, 7, 7, 2, 'ygukkj,', '270381st.jpeg', '2020-06-24', '09:29:00', 'Active');
