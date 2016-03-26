-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 08, 2015 at 02:07 PM
-- Server version: 5.5.34
-- PHP Version: 5.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `workstarter`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_employer`
--

CREATE TABLE IF NOT EXISTS `add_employer` (
  `userid` varchar(50) NOT NULL,
  `sir_title` varchar(10) NOT NULL,
  `company_first_name` varchar(100) NOT NULL,
  `company_last_name` varchar(100) NOT NULL,
  `company_email` varchar(50) NOT NULL,
  `company_telephone` varchar(20) NOT NULL,
  `company_title` varchar(250) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `company_address` varchar(400) NOT NULL,
  `company_city` varchar(70) NOT NULL,
  `company_website` varchar(100) NOT NULL,
  `company_postal_code` varchar(20) NOT NULL,
  `company_country` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_employer`
--

INSERT INTO `add_employer` (`userid`, `sir_title`, `company_first_name`, `company_last_name`, `company_email`, `company_telephone`, `company_title`, `company_name`, `company_address`, `company_city`, `company_website`, `company_postal_code`, `company_country`) VALUES
('schoolmahender', 'Mrs', 'dsfdsf', 'dsfdsf', 'gfg@gmail.com', 'dsfdsf', '0', 'first employer', 'dsfdsfd', 'dfddsfd', 'dfdfd', 'dfddf', '826'),
('schoolmahender', 'Mrs', 'rtytr', 'ytry', 'tryrt@gmail.com', 'tryrty', '0', 'ytry', 'tryrty', 'try', 'try', 'try', '826'),
('schoolmahender', 'Mr', 'hjhj', 'jkljl', 'kljkl@gmail.com', '5456452', '0', 'gfdg', 'hgjghj', 'dfg', 'kjkl', 'kjk', '826'),
('schoolmahender', 'Mrs', 'trytry', 'trytry', 'tryrtyrty@gmail.com', '+44 454532123', '0', 'rytry', 'rtyrtyt', 'trytry', 'tryrty', 'tryrtyt', '826'),
('schoolmahender', 'Mrs', 'gfh', 'gfh', 'msdusad@gmail.com', '+44 09991106434', '0', 'ghh', 'ggfh', 'fgh', 'fgh', 'fgh', '826'),
('ghgh', 'gh', 'gh', 'gh', '', '', '0', '', '', '', '', '', ''),
('ghgh', 'gh', 'gh', 'gh', '', '', '0', '', '', '', '', '', ''),
('gh', 'gh', 'gh', '', '', '', '', '', '', '', '', '', ''),
('ghgh', 'gh', 'gh', 'gh', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `add_student`
--

CREATE TABLE IF NOT EXISTS `add_student` (
  `userid` varchar(50) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `current_form` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_student`
--

INSERT INTO `add_student` (`userid`, `first_name`, `last_name`, `current_form`, `gender`, `email`) VALUES
('schoolmahender', 'Mahender', 'Singh', 'no', 'Please Sel', 'msdusad@gmail.com'),
('schoolmahender', 'nm,', 'mn,', 'mn,', 'Please Sel', 'mn,mn'),
('schoolmahender', 'hgfh', 'gfh', 'gfh', 'Male', 'gfh@gg.com'),
('jhj', 'hjhjhj', '', '', '', ''),
('hjh', 'hjhj', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `add_users`
--

CREATE TABLE IF NOT EXISTS `add_users` (
  `userid` varchar(50) NOT NULL,
  `salutation` varchar(7) NOT NULL,
  `user_first_name` varchar(100) NOT NULL,
  `user_last_name` varchar(100) NOT NULL,
  `user_job_title` varchar(200) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_telephone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_users`
--

INSERT INTO `add_users` (`userid`, `salutation`, `user_first_name`, `user_last_name`, `user_job_title`, `user_email`, `user_telephone`) VALUES
('schoolmahender', 'Mrs', 'uytu', 'ytu', 'ytu', 'tyu@gmail.com', 'tyuytu');

-- --------------------------------------------------------

--
-- Table structure for table `create_vacancy`
--

CREATE TABLE IF NOT EXISTS `create_vacancy` (
  `userid` varchar(50) NOT NULL,
  `vacancy_title` varchar(1000) NOT NULL,
  `vacancy_location` varchar(50) NOT NULL,
  `vacancy_description` varchar(1000) NOT NULL,
  `number_places` varchar(20) NOT NULL,
  `duration` varchar(30) NOT NULL,
  `from_date1` varchar(20) NOT NULL,
  `from_date2` varchar(20) NOT NULL,
  `from_date3` varchar(20) NOT NULL,
  `to_date1` varchar(20) NOT NULL,
  `to_date2` varchar(20) NOT NULL,
  `to_date3` varchar(20) NOT NULL,
  `restriction_gender` varchar(200) NOT NULL,
  `schooling_level` varchar(50) NOT NULL,
  `selected_school_name` varchar(500) NOT NULL,
  `automatic_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `create_vacancy`
--

INSERT INTO `create_vacancy` (`userid`, `vacancy_title`, `vacancy_location`, `vacancy_description`, `number_places`, `duration`, `from_date1`, `from_date2`, `from_date3`, `to_date1`, `to_date2`, `to_date3`, `restriction_gender`, `schooling_level`, `selected_school_name`, `automatic_date`) VALUES
('employermahender', 'php developer', 'Solihull Branch', 'No Desciption', '3', '2 Weeks', '12/3/2015', '12/6/2015', '', '19/3/2015', '15/6/2015', '', 'Male Candidates Only', 'GCSE students only', 'no', '2015-08-19 17:28:58'),
('employermahender', 'php developer', 'Solihull Branch', 'No Desciption', '3', '2 Weeks', '12/3/2015', '12/6/2015', '', '19/3/2015', '15/6/2015', '', 'Male Candidates Only', 'GCSE students only', 'no', '2015-08-19 17:32:53'),
('employermahender', 'php developer', 'Solihull Branch', 'No Desciption', '3', '2 Weeks', '12/3/2015', '12/6/2015', '', '19/3/2015', '15/6/2015', '', 'Male Candidates Only', 'GCSE students only', 'no', '2015-08-19 17:33:19'),
('employermahender', '', '', '', 'Please Select', 'Please Select', '', '', '', '', '', '', 'Any', 'Any', '', '2015-08-19 17:45:29'),
('employermahender', '', '', '', 'Please Select', 'Please Select', '', '', '', '', '', '', 'Any', 'Any', '', '2015-08-19 17:53:40'),
('employermahender', '', '', '', 'Please Select', 'Please Select', '', '', '', '', '', '', 'Any', 'Any', '', '2015-09-04 16:01:08'),
('employermahender', 'tuyt', 'Solihull Branch', 'gfjhgfj', '2', '2 Weeks', 'fgjhg', '', '', 'hgjh', '', '', 'Male Candidates Only', 'GCSE students only', 'ghjh', '2015-09-04 17:14:36'),
('maahi', 'mmm', 'mm', 'mmmm', 'mmm', 'mm', 'mm', 'mm', '', '', '', '', 'mm', 'mm', 'mm', '2015-09-16 06:23:28');

-- --------------------------------------------------------

--
-- Table structure for table `employer_location`
--

CREATE TABLE IF NOT EXISTS `employer_location` (
  `userid` varchar(50) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `type_of_location` varchar(50) NOT NULL,
  `location_name` varchar(100) NOT NULL,
  `contact_title` varchar(10) NOT NULL,
  `contact_first_name` varchar(100) NOT NULL,
  `contact_last_name` varchar(100) NOT NULL,
  `conatct_email` varchar(50) NOT NULL,
  `contact_telephone` varchar(20) NOT NULL,
  `location_address` varchar(400) NOT NULL,
  `location_city` varchar(100) NOT NULL,
  `location_postal_code` varchar(20) NOT NULL,
  `create_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employer_location`
--

INSERT INTO `employer_location` (`userid`, `company_name`, `type_of_location`, `location_name`, `contact_title`, `contact_first_name`, `contact_last_name`, `conatct_email`, `contact_telephone`, `location_address`, `location_city`, `location_postal_code`, `create_time`) VALUES
('employermahenderss', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
('employermahenderss', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
('employermahenderss', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
('employermahenderss', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
('employermahenderss', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
('employermahenderss', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
('employermahenderss', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
('employermahenderss', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
('employermahenderssf', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
('employermahenderssf', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
('testing', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
('testing', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
('testing', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
('testing', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
('testinghhh', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
('testinghhh', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
('testing', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
('hj', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
('employermahender', 'ghjhg', 'Branch', 'hgjhgj', 'Mr', 'ghj', '', 'hghj@gmail.com', '56546', 'rdytry', 'ytryt', 'trytryt', '2015-09-04 17:31:18');

-- --------------------------------------------------------

--
-- Table structure for table `employer_registration`
--

CREATE TABLE IF NOT EXISTS `employer_registration` (
  `userid` varchar(50) NOT NULL,
  `company_terms` varchar(10) NOT NULL,
  `company_first_name` varchar(200) NOT NULL,
  `company_last_name` varchar(200) NOT NULL,
  `company_email` varchar(100) NOT NULL,
  `company_name` varchar(500) NOT NULL,
  `company_address` varchar(5000) NOT NULL,
  `company_region` varchar(200) NOT NULL,
  `company_city` varchar(100) NOT NULL,
  `company_postal_code` varchar(20) NOT NULL,
  `company_telephone` varchar(20) NOT NULL,
  `company_title` varchar(250) NOT NULL,
  `company_website` varchar(100) NOT NULL,
  `logo` varchar(200) NOT NULL,
  `join_date` datetime NOT NULL,
  UNIQUE KEY `userid` (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employer_registration`
--

INSERT INTO `employer_registration` (`userid`, `company_terms`, `company_first_name`, `company_last_name`, `company_email`, `company_name`, `company_address`, `company_region`, `company_city`, `company_postal_code`, `company_telephone`, `company_title`, `company_website`, `logo`, `join_date`) VALUES
('employermahender', 'checked', 'Mrs S.S', 'Bhowmic', 'msdusad@gmail.com', 'Nexg-Skills', ' ', 'Up', 'Noida', '127310', '9991106434', 'Software Tecnology', '', 'OilGas_logo.png', '2015-08-19 17:13:14'),
('employermahenderss', 'checked', 'Mrs testing', 'testing', 'testing@gmail.com', 'testing', 'testing', 'testing', 'testing', 'testing', 'testing', 'testing', '', '', '2015-08-20 14:41:58'),
('employermahenderssf', 'checked', 'Mrs testing', 'testing', 'testing@gmail.com', 'testing', 'testing', 'testing', 'testing', 'testing', 'testing', 'testing', '', '', '2015-08-20 16:28:25'),
('hj', 'checked', 'Mrs hj', 'hgj', 'hgj@gmail.com', 'hgjh', 'hgj', 'hgj', 'hgj', 'hgj', 'hgjh', 'ghj', '', '', '2015-08-27 17:36:23'),
('testing', 'unchecked', 'Mrs testing', 'testing', 'testing@gmail.com', 'testing', 'testing', 'testing', 'testing', 'testing', 'testing', 'testing', '', '', '2015-08-20 17:00:53'),
('testinghhh', 'unchecked', 'Mrs testing', 'testing', 'testing@gmail.com', 'testing', 'testing', 'testing', 'testing', 'testing', 'testing', 'testing', '', '', '2015-08-20 17:04:32');

-- --------------------------------------------------------

--
-- Table structure for table `interview_invitation`
--

CREATE TABLE IF NOT EXISTS `interview_invitation` (
  `student_invite` varchar(50) NOT NULL,
  `employer_sent` varchar(50) NOT NULL,
  `proposed_interview_date` varchar(10) NOT NULL,
  `contact_form_confirmation` varchar(100) NOT NULL,
  `email_for_confirmation` varchar(50) NOT NULL,
  `telephone_for_confirmation` varchar(20) NOT NULL,
  `message` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `interview_invitation`
--

INSERT INTO `interview_invitation` (`student_invite`, `employer_sent`, `proposed_interview_date`, `contact_form_confirmation`, `email_for_confirmation`, `telephone_for_confirmation`, `message`) VALUES
('studentmahender', 'employermahender', '12/7/13', 'SS.Bhowmic', 'info@nexg.in', '5555555', 'no Message');

-- --------------------------------------------------------

--
-- Table structure for table `job_applied`
--

CREATE TABLE IF NOT EXISTS `job_applied` (
  `student_userid` varchar(100) NOT NULL,
  `cover_letter` varchar(800) NOT NULL,
  `send_media` varchar(10) NOT NULL,
  `company_userid` varchar(100) NOT NULL,
  `vacancy_time` datetime NOT NULL,
  `apply_time` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_applied`
--

INSERT INTO `job_applied` (`student_userid`, `cover_letter`, `send_media`, `company_userid`, `vacancy_time`, `apply_time`, `status`) VALUES
('studentmahender', 'cover letter hear', 'yes', 'employermahender', '2015-08-19 17:33:19', '2015-08-19 17:36:13', 'Pending'),
('studentmahender', 'cover letter hear', 'yes', 'employermahender', '2015-08-19 17:33:19', '2015-08-19 17:37:24', 'Rejected'),
('studentmahender', 'no', 'yes', 'employermahender', '2015-08-19 17:33:19', '2015-08-19 18:09:03', 'Pending'),
('studentmahender', 'ui;pio;', 'yes', 'employermahender', '2015-08-19 17:33:19', '2015-09-08 14:43:24', 'Rejected'),
('', 'hgfhgfhgfhgfhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh', 'yes', 'employermahender', '2015-08-19 17:33:19', '2015-09-28 17:56:32', 'Pending'),
('studentmahender', 'hgfhgfhgfhgfhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh', 'yes', 'employermahender', '2015-08-19 17:33:19', '2015-09-28 18:01:13', 'Pending'),
('studentmahender', 'hgfhgfhgfhgfhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh', 'yes', 'employermahender', '2015-08-19 17:33:19', '2015-09-28 18:01:42', 'Pending'),
('studentmahender', '45ytytuiyy', 'yes', 'employermahender', '2015-08-19 17:32:53', '2015-09-29 11:27:27', 'Pending'),
('studentmahender', 'hggfhg', 'yes', 'employermahender', '2015-09-04 17:14:36', '2015-10-06 17:15:40', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `userid` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `category` varchar(20) NOT NULL,
  `email_confirmation` text NOT NULL,
  `last_login` datetime NOT NULL,
  UNIQUE KEY `userid` (`userid`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`userid`, `password`, `email`, `category`, `email_confirmation`, `last_login`) VALUES
('ak123', 'f294572a2042d5ec91e87a88fb4f38f1', 'gfhggg@gmail.com', 'School', '', '0000-00-00 00:00:00'),
('dfgfdgdfgf', '5d5cc48db70ecce234a443a9a05d66ee', 'gfgfgfdgfhg@gmail.com', 'Student', '', '0000-00-00 00:00:00'),
('employermahender', '6f8f57715090da2632453988d9a1501b', 'mdusad@gmail.com', 'Employer', '', '2015-10-08 15:11:15'),
('employermahenderss', '6f8f57715090da2632453988d9a1501b', 'testing@gmail.com', 'Employer', '', '0000-00-00 00:00:00'),
('fgfgfg', '01e2aec5149167fb8acec24e5889ff89', 'gfhg@gmail.com', 'Student', '', '0000-00-00 00:00:00'),
('fghfghfgfgfg', 'a5294aae137b94bc062918cb9c271bb6', 'gfhgfgfg@gmail.com', 'Student', '', '0000-00-00 00:00:00'),
('gfhgh', '2b287ba353732ca25cc95a4222017921', 'ghg@gmail.com', 'Student', '', '0000-00-00 00:00:00'),
('ghfgh', '01e2aec5149167fb8acec24e5889ff89', 'hgfhgfh@gmail.com', 'Student', '', '0000-00-00 00:00:00'),
('ghgh', '4124bc0a9335c27f086f24ba207a4912', 'gourav.zen@gmail.com', 'School', '', '0000-00-00 00:00:00'),
('ghjhgj', 'cf841bfbdda4d6d8771c09ad2a4b8811', 'jghjghj@gmail.com', 'Student', '', '0000-00-00 00:00:00'),
('ghjhgjgh', 'cd78d59375467022ff271d7da69eec3d', 'ghjghj@gmail.com', 'Student', '', '0000-00-00 00:00:00'),
('ghjhgjhgjhgj', '7d3f84fc633db0d67bb081a6d1785c3e', 'hgjghj@gmailo.com', 'Student', '', '0000-00-00 00:00:00'),
('gngn', 'eaf1b0d5293f0e2455346b3ff5a3c90b', 'ngfn@gmail.com', 'School', '', '0000-00-00 00:00:00'),
('hgfgfhgh', 'cf841bfbdda4d6d8771c09ad2a4b8811', 'bvvbn@gmail.com', 'Student', '', '0000-00-00 00:00:00'),
('hj', 'ba984cb106d5bcead9bfe67344b89a2a', 'hgj@gmail.com', 'Employer', '', '0000-00-00 00:00:00'),
('hjghjhgj', '01e2aec5149167fb8acec24e5889ff89', 'rtyr@gmail.com', 'Student', '', '0000-00-00 00:00:00'),
('jhgjhgjhj', '9a5c615d9507ec6026f7c0be142c9816', 'i@ie.co', 'Student', '', '0000-00-00 00:00:00'),
('jhkhjkjhk', 'f31a8a66f6f5e2365ff052a02e78f057', 'jhgjh@gmail.com', 'Student', '', '0000-00-00 00:00:00'),
('jklk', '01e2aec5149167fb8acec24e5889ff89', 'kjl@gmail.com', 'Student', '', '0000-00-00 00:00:00'),
('schoolmahender', '6f8f57715090da2632453988d9a1501b', 'msd@gmail.com', 'School', '', '2015-10-07 17:45:01'),
('studentmahender', '6f8f57715090da2632453988d9a1501b', 'msdusa@gmail.com', 'Student', '', '2015-10-07 09:39:14'),
('testing', '6f8f57715090da2632453988d9a1501b', 'testing@gmail.comg', 'Employer', '', '0000-00-00 00:00:00'),
('tyuu', '2b287ba353732ca25cc95a4222017921', 'fgh@gmail.com', 'School', '', '0000-00-00 00:00:00'),
('ytuytuytu', 'cf841bfbdda4d6d8771c09ad2a4b8811', 'tuytu@gmail.com', 'Student', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `reject_applications`
--

CREATE TABLE IF NOT EXISTS `reject_applications` (
  `student_id` varchar(50) NOT NULL,
  `employer_id` varchar(50) NOT NULL,
  `rejection_message` varchar(500) NOT NULL,
  `rejection_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reject_applications`
--

INSERT INTO `reject_applications` (`student_id`, `employer_id`, `rejection_message`, `rejection_time`) VALUES
('studentmahender', 'employermahender', 'no', '2015-08-19 17:53:21'),
('studentmahender', 'employermahender', 'gdfgfgbvvcb', '2015-09-27 15:37:58');

-- --------------------------------------------------------

--
-- Table structure for table `school_registration`
--

CREATE TABLE IF NOT EXISTS `school_registration` (
  `userid` varchar(50) NOT NULL,
  `school_first_name` varchar(200) NOT NULL,
  `school_last_name` varchar(200) NOT NULL,
  `school_email` varchar(50) NOT NULL,
  `school_name` varchar(200) NOT NULL,
  `school_address` varchar(500) NOT NULL,
  `school_region` varchar(200) NOT NULL,
  `school_city` varchar(100) NOT NULL,
  `school_postal_code` varchar(20) NOT NULL,
  `school_telephone` varchar(20) NOT NULL,
  `school_title` varchar(250) NOT NULL,
  `school_terms` varchar(10) NOT NULL,
  `school_name_title` varchar(10) NOT NULL,
  `school_website` varchar(100) NOT NULL,
  `school_logo` varchar(100) NOT NULL,
  UNIQUE KEY `school_name` (`school_name`),
  UNIQUE KEY `userid` (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_registration`
--

INSERT INTO `school_registration` (`userid`, `school_first_name`, `school_last_name`, `school_email`, `school_name`, `school_address`, `school_region`, `school_city`, `school_postal_code`, `school_telephone`, `school_title`, `school_terms`, `school_name_title`, `school_website`, `school_logo`) VALUES
('schoolmahender', 'Prittam', 'Singh', 'msdusad@gmail.com', 'Arya sr sec school', 'Jhojhu Kalan', 'Haryana', 'Bhiwani', '127310', '99999', 'HBSE', 'unchecked', 'Mrs', 'wwwyjuuik', '10336.jpg'),
('ghgh', 'gfhg', 'gfhg', 'gourav.zen@gmail.com', 'gfhgfh', 'gfhg', 'ghg', 'gfhg', 'gfhg', 'gfh', 'gfhg', 'unchecked', 'Mrs', '', ''),
('tyuu', 'gfh', 'gfh', 'fgh@gmail.com', 'gfhgh', 'gh', 'gh', 'gh', 'gfh', 'ghf', 'gfh', 'unchecked', 'Mrs', '', ''),
('gngn', 'gfn', 'gng', 'ngfn@gmail.com', 'gfn', 'ngg', 'ng', 'ngn', 'gng', 'gfn', 'ng', 'unchecked', 'Mrs', '', ''),
('ak123', 'gfhfgh', 'ggfhgfh', 'gfhggg@gmail.com', 'ghghg', 'hgfhfgh', 'fghgfh', 'fghgfh', 'fghgf', '54614958456', 'gfgfh', 'unchecked', 'Mr', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `student_achievements`
--

CREATE TABLE IF NOT EXISTS `student_achievements` (
  `userid` varchar(50) NOT NULL,
  `achievement1` varchar(300) NOT NULL,
  `achievement2` varchar(300) NOT NULL,
  `achievement3` varchar(300) NOT NULL,
  `achievement4` varchar(300) NOT NULL,
  `interest1` varchar(300) NOT NULL,
  `interest2` varchar(300) NOT NULL,
  `interest3` varchar(300) NOT NULL,
  `interest4` varchar(300) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_achievements`
--

INSERT INTO `student_achievements` (`userid`, `achievement1`, `achievement2`, `achievement3`, `achievement4`, `interest1`, `interest2`, `interest3`, `interest4`) VALUES
('dfgfdgdfgf', '', '', '', '', '', '', '', ''),
('fgfgfg', '', '', '', '', '', '', '', ''),
('fghfghfgfgfg', '', '', '', '', '', '', '', ''),
('gfhgh', '', '', '', '', '', '', '', ''),
('ghfgh', '', '', '', '', '', '', '', ''),
('ghjhgj', '', '', '', '', '', '', '', ''),
('ghjhgjgh', '', '', '', '', '', '', '', ''),
('ghjhgjhgjhgj', '', '', '', '', '', '', '', ''),
('hgfgfhgh', '', '', '', '', '', '', '', ''),
('hjghjhgj', '', '', '', '', '', '', '', ''),
('jhgjhgjhj', '', '', '', '', '', '', '', ''),
('jhkhjkjhk', '', '', '', '', '', '', '', ''),
('jklk', '', '', '', '', '', '', '', ''),
('studentmahender', 'f', 'f', 'f', 'f', 'f', 'f', 'f', 'f'),
('ytuytuytu', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `student_cv`
--

CREATE TABLE IF NOT EXISTS `student_cv` (
  `userid` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `phone_code` varchar(10) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `website` varchar(100) NOT NULL,
  `cv` varchar(2000) NOT NULL,
  `video` varchar(200) NOT NULL,
  `school_name` varchar(100) NOT NULL,
  `school_address` varchar(400) NOT NULL,
  `school_city` varchar(100) NOT NULL,
  `school_region` varchar(50) NOT NULL,
  `school_postalcode` varchar(20) NOT NULL,
  `gcsc_school_start_month` varchar(20) NOT NULL,
  `gcsc_school_start_year` varchar(10) NOT NULL,
  `currently_studying` varchar(10) NOT NULL,
  `gcse_summary` varchar(300) NOT NULL,
  `subject1` varchar(50) NOT NULL,
  `subject2` varchar(50) NOT NULL,
  `subject3` varchar(50) NOT NULL,
  `subject4` varchar(50) NOT NULL,
  `subject5` varchar(50) NOT NULL,
  `subject6` varchar(50) NOT NULL,
  `subject7` varchar(50) NOT NULL,
  `subject8` varchar(50) NOT NULL,
  `subject9` varchar(50) NOT NULL,
  `subject10` varchar(50) NOT NULL,
  `subject11` varchar(50) NOT NULL,
  `expected_grade1` varchar(10) NOT NULL,
  `expected_grade2` varchar(10) NOT NULL,
  `expected_grade3` varchar(10) NOT NULL,
  `expected_grade4` varchar(10) NOT NULL,
  `expected_grade5` varchar(10) NOT NULL,
  `expected_grade6` varchar(10) NOT NULL,
  `expected_grade7` varchar(10) NOT NULL,
  `expected_grade8` varchar(10) NOT NULL,
  `expected_grade9` varchar(10) NOT NULL,
  `expected_grade10` varchar(10) NOT NULL,
  `expected_grade11` varchar(10) NOT NULL,
  `alevels_summary` varchar(300) NOT NULL,
  `alevel_subject1` varchar(50) NOT NULL,
  `alevel_subject2` varchar(50) NOT NULL,
  `alevel_subject3` varchar(50) NOT NULL,
  `alevel_subject4` varchar(50) NOT NULL,
  `alevel_subject5` varchar(50) NOT NULL,
  `alevel_expected_grade1` varchar(10) NOT NULL,
  `alevel_expected_grade2` varchar(10) NOT NULL,
  `alevel_expected_grade3` varchar(10) NOT NULL,
  `alevel_expected_grade4` varchar(10) NOT NULL,
  `alevel_expected_grade5` varchar(10) NOT NULL,
  `select_school_same` varchar(10) NOT NULL,
  `other_school_name` varchar(200) NOT NULL,
  `other_school_address` varchar(400) NOT NULL,
  `other_school_city` varchar(100) NOT NULL,
  `other_school_region` varchar(50) NOT NULL,
  `other_school_postalcode` varchar(20) NOT NULL,
  `other_school_start_month` varchar(20) NOT NULL,
  `other_school_start_year` varchar(20) NOT NULL,
  `other_school_end_month` varchar(20) NOT NULL,
  `other_school_end_year` varchar(20) NOT NULL,
  UNIQUE KEY `userid` (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_cv`
--

INSERT INTO `student_cv` (`userid`, `first_name`, `last_name`, `phone_code`, `phone_number`, `email`, `website`, `cv`, `video`, `school_name`, `school_address`, `school_city`, `school_region`, `school_postalcode`, `gcsc_school_start_month`, `gcsc_school_start_year`, `currently_studying`, `gcse_summary`, `subject1`, `subject2`, `subject3`, `subject4`, `subject5`, `subject6`, `subject7`, `subject8`, `subject9`, `subject10`, `subject11`, `expected_grade1`, `expected_grade2`, `expected_grade3`, `expected_grade4`, `expected_grade5`, `expected_grade6`, `expected_grade7`, `expected_grade8`, `expected_grade9`, `expected_grade10`, `expected_grade11`, `alevels_summary`, `alevel_subject1`, `alevel_subject2`, `alevel_subject3`, `alevel_subject4`, `alevel_subject5`, `alevel_expected_grade1`, `alevel_expected_grade2`, `alevel_expected_grade3`, `alevel_expected_grade4`, `alevel_expected_grade5`, `select_school_same`, `other_school_name`, `other_school_address`, `other_school_city`, `other_school_region`, `other_school_postalcode`, `other_school_start_month`, `other_school_start_year`, `other_school_end_month`, `other_school_end_year`) VALUES
('dfgfdgdfgf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('fgfgfg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('fghfghfgfgfg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('gfhgh', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('ghfgh', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('ghjhgj', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('ghjhgjgh', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('ghjhgjhgjhgj', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('hgfgfhgh', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('hjghjhgj', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('jhgjhgjhj', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('jhkhjkjhk', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('jklk', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('studentmahender', 'Mahender', 'Rao', '+220', ' 99991212', 'msdusad@gmail.com', 'http://www.xyz.com', '', 'new12.mp4', 'Nex-G skiils', 'Noida', '12', '12', '127310', 'February', '1994', '2', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '11', '1', '1', '1', '1', '1', '1', '2', '1', '1', '1', '1', '', 'November', '1993', 'June', '1995'),
('ytuytuytu', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `student_preferences`
--

CREATE TABLE IF NOT EXISTS `student_preferences` (
  `userid` varchar(50) NOT NULL,
  `all_jobs` varchar(8) NOT NULL,
  `banking_finance` varchar(8) NOT NULL,
  `retail` varchar(8) NOT NULL,
  `construction` varchar(8) NOT NULL,
  `legal` varchar(8) NOT NULL,
  `medical` varchar(8) NOT NULL,
  `other` varchar(8) NOT NULL,
  `newsletter` varchar(8) NOT NULL,
  `vacancies_distance` varchar(5) NOT NULL,
  UNIQUE KEY `userid` (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_preferences`
--

INSERT INTO `student_preferences` (`userid`, `all_jobs`, `banking_finance`, `retail`, `construction`, `legal`, `medical`, `other`, `newsletter`, `vacancies_distance`) VALUES
('dfgfdgdfgf', '', '', '', '', '', '', '', '', ''),
('fgfgfg', '', '', '', '', '', '', '', '', ''),
('fghfghfgfgfg', '', '', '', '', '', '', '', '', ''),
('gfhgh', '', '', '', '', '', '', '', '', ''),
('ghfgh', '', '', '', '', '', '', '', '', ''),
('ghjhgj', '', '', '', '', '', '', '', '', ''),
('ghjhgjgh', '', '', '', '', '', '', '', '', ''),
('ghjhgjhgjhgj', '', '', '', '', '', '', '', '', ''),
('hgfgfhgh', '', '', '', '', '', '', '', '', ''),
('hjghjhgj', '', '', '', '', '', '', '', '', ''),
('jhgjhgjhj', '', '', '', '', '', '', '', '', ''),
('jhkhjkjhk', '', '', '', '', '', '', '', '', ''),
('jklk', '', '', '', '', '', '', '', '', ''),
('studentmahender', 'no', 'checked', 'checked', 'checked', 'checked', 'checked', 'no', 'no', '5'),
('ytuytuytu', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `student_profile`
--

CREATE TABLE IF NOT EXISTS `student_profile` (
  `userid` varchar(50) NOT NULL,
  `home_address` varchar(1000) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dob_day` varchar(2) NOT NULL,
  `dob_month` varchar(20) NOT NULL,
  `dob_year` varchar(10) NOT NULL,
  `t_c` tinyint(1) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `city` varchar(50) NOT NULL,
  `region` varchar(50) NOT NULL,
  `postal_code` varchar(20) NOT NULL,
  `website` varchar(250) NOT NULL,
  `profile_picture` varchar(100) NOT NULL,
  `video` varchar(100) NOT NULL,
  `cv` varchar(100) NOT NULL,
  `joining_date` datetime NOT NULL,
  UNIQUE KEY `userid` (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_profile`
--

INSERT INTO `student_profile` (`userid`, `home_address`, `phone`, `email`, `dob_day`, `dob_month`, `dob_year`, `t_c`, `first_name`, `last_name`, `gender`, `city`, `region`, `postal_code`, `website`, `profile_picture`, `video`, `cv`, `joining_date`) VALUES
('dfgfdgdfgf', '', '', 'gfgfgfdgfhg@gmail.com', '15', 'January', '1995', 1, 'fgrfg', 'fgfgf', 'Female', '', '', '', '', '', '', '', '2015-09-24 15:18:02'),
('fgfgfg', '', '', 'gfhg@gmail.com', 'na', 'na', 'na', 1, 'gfg', 'fg', 'Male', '', '', '', '', '', '', '', '2015-09-02 12:47:44'),
('fghfghfgfgfg', '', '', 'gfhgfgfg@gmail.com', 'na', 'na', 'na', 1, 'hfggf', 'hgfhg', 'Male', '', '', '', '', '', '', '', '2015-09-03 13:05:54'),
('gfhgh', '', '', 'ghg@gmail.com', '1', 'March', '2008', 1, 'ghg', 'hgh', 'Male', '', '', '', '', '', '', '', '2015-08-20 10:14:16'),
('ghfgh', '', '', 'hgfhgfh@gmail.com', 'na', 'na', 'na', 0, 'hgfhg', 'hgfhg', 'Male', '', '', '', '', '', '', '', '2015-09-03 13:07:35'),
('ghjhgj', '', '', 'jghjghj@gmail.com', 'na', 'na', 'na', 0, 'hgjhg', 'jhgjhg', 'Male', '', '', '', '', '', '', '', '2015-09-03 12:42:28'),
('ghjhgjgh', '', '', 'ghjghj@gmail.com', '17', 'March', '1993', 0, 'hgjhg', 'jhgj', 'Female', '', '', '', '', '', '', '', '2015-09-03 17:41:15'),
('ghjhgjhgjhgj', '', '', 'hgjghj@gmailo.com', 'na', 'na', 'na', 0, 'ghj', 'hgjh', 'Male', '', '', '', '', '', '', '', '2015-09-03 12:40:15'),
('hgfgfhgh', '', '', 'bvvbn@gmail.com', 'na', 'na', 'na', 0, 'bvn', 'bbvn', 'Male', '', '', '', '', '', '', '', '2015-09-03 13:10:42'),
('hjghjhgj', '', '', 'rtyr@gmail.com', 'na', 'na', 'na', 0, 'yrty', 'tytry', 'Male', '', '', '', '', '', '', '', '2015-09-03 12:59:22'),
('jhgjhgjhj', '', '', 'i@ie.co', 'na', 'na', 'na', 1, 'fghgf', 'gfh', 'Male', '', '', '', '', '', '', '', '2015-09-03 11:58:25'),
('jhkhjkjhk', '', '', 'jhgjh@gmail.com', 'na', 'na', 'na', 0, 'jhkhj', 'Kuhkj', 'Male', '', '', '', '', '', '', '', '2015-09-03 13:13:49'),
('jklk', '', '', 'kjl@gmail.com', 'na', 'na', 'na', 1, 'jlkj', 'lkjl', 'Male', '', '', '', '', '', '', '', '2015-09-03 14:19:29'),
('studentmahender', ' ', '9999', 'msdusad@gmail.com', '15', 'February', '1995', 1, 'Mahender', 'Dusad', 'Male', 'city', 'region', 'ps', 'http://www.xyz.com', 'Mohammed Elrabei Hassan Mohammed Ahmed.jpg', '', '', '2015-08-19 14:33:50'),
('ytuytuytu', '', '', 'tuytu@gmail.com', '1', 'na', 'na', 0, 'ytu', 'tyuy', 'Male', '', '', '', '', '', '', '', '2015-09-03 12:38:45');

-- --------------------------------------------------------

--
-- Table structure for table `student_school`
--

CREATE TABLE IF NOT EXISTS `student_school` (
  `userid` varchar(50) NOT NULL,
  `school_name` varchar(300) NOT NULL,
  `school_address` varchar(2000) NOT NULL,
  `school_city` varchar(150) NOT NULL,
  `school_region` varchar(50) NOT NULL,
  `school_postalcode` varchar(20) NOT NULL,
  `school_contact_sr` varchar(20) NOT NULL,
  `school_contact_fname` varchar(100) NOT NULL,
  `school_contact_lname` varchar(100) NOT NULL,
  `school_phone` varchar(20) NOT NULL,
  `school_email` varchar(100) NOT NULL,
  `school_website` varchar(100) NOT NULL,
  `reference_by_school` varchar(400) NOT NULL,
  `attendance_record` varchar(10) NOT NULL,
  `ref_from` varchar(20) NOT NULL,
  `ref_to` varchar(20) NOT NULL,
  `ref_comment` varchar(300) NOT NULL,
  `ref_date` datetime NOT NULL,
  UNIQUE KEY `userid` (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_school`
--

INSERT INTO `student_school` (`userid`, `school_name`, `school_address`, `school_city`, `school_region`, `school_postalcode`, `school_contact_sr`, `school_contact_fname`, `school_contact_lname`, `school_phone`, `school_email`, `school_website`, `reference_by_school`, `attendance_record`, `ref_from`, `ref_to`, `ref_comment`, `ref_date`) VALUES
('dfgfdgdfgf', '', '', '', '', '', '', '', '', '', '', '', 'schoolmahender', '55', 'gfg', 'fgfg', 'fgfgf', '2015-10-03 16:14:36'),
('fgfgfg', '', '', '', '', '', '', '', '', '', '', '', 'schoolmahender', '67', 'ytu', 'ytu', 'tyu', '2015-09-09 17:31:07'),
('fghfghfgfgfg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
('gfhgh', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
('ghfgh', '', '', '', '', '', '', '', '', '', '', '', 'schoolmahender', '565', '657', '67', '6767', '2015-09-09 17:31:24'),
('ghjhgj', '', '', '', '', '', '', '', '', '', '', '', 'schoolmahender', '67', '67', '67', '6767', '2015-09-09 17:31:46'),
('ghjhgjgh', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
('ghjhgjhgjhgj', '', '', '', '', '', '', '', '', '', '', '', 'schoolmahender', '565', '67', '676', '6767', '2015-09-09 17:33:55'),
('hgfgfhgh', '', '', '', '', '', '', '', '', '', '', '', 'schoolmahender', '65', 'ty', 'tfry', 'gfhgfh', '2015-09-09 17:35:13'),
('hjghjhgj', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
('jhgjhgjhj', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
('jhkhjkjhk', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
('jklk', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
('studentmahender', 'Nex-G', 'C-28 , Sector-65 ', 'Noida', 'Utter Prdesh', '123312', 'Mr', 'Mahender', 'Singh', '09991106434', 'msdusad@gmail.com', '', '', '', '', '', '', '0000-00-00 00:00:00'),
('ytuytuytu', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
