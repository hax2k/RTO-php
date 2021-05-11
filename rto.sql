-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2020 at 02:33 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rto`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(20) NOT NULL,
  `admin_name` varchar(200) NOT NULL,
  `admin_email` varchar(200) NOT NULL,
  `admin_contact` varchar(10) NOT NULL,
  `admin_password` varchar(20) NOT NULL,
  `admin_gender` varchar(10) NOT NULL,
  `admin_hobby` varchar(15) NOT NULL,
  `admin_dob` date NOT NULL,
  `admin_address` varchar(200) NOT NULL,
  `admin_profile` varchar(200) NOT NULL,
  `admin_role` varchar(200) NOT NULL,
  `status` int(200) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `admin_contact`, `admin_password`, `admin_gender`, `admin_hobby`, `admin_dob`, `admin_address`, `admin_profile`, `admin_role`, `status`, `created_at`, `updated_at`) VALUES
(11, 'xdv', 'a1@gmail.com', '0908979', '333', 'male', 'cricket', '0002-10-19', 'whdcuweghf', '1580987921_', 'user', 1, '2020-02-25 11:11:54', '2019-12-26 12:15:05'),
(12, 'Yash', 'r@gmail.com', '0989781245', '111', 'male', 'cricket', '0001-10-29', 'v ebdvjkbdev', '1593622552_images.jfif', 'admin', 1, '2020-07-02 03:54:48', '2019-12-26 12:15:32'),
(13, 'vjay', 'v@gmail.com', '9865321471', '12345', 'male', 'cricket,music', '1988-12-14', 'kscgsachgvsacbksa', '1579610754_', '', 1, '2020-02-25 11:11:54', '2020-01-21 12:41:19'),
(14, 'e1', 'e1@gmail.com', '2123564768', '333', 'male', 'music', '1991-07-26', 'ef', '1579696566_B&G-2.jpg', '', 1, '2020-02-25 11:11:54', '2020-01-22 11:43:06'),
(15, 'Kishan', 'k@gmail.com', '908909890', '123', 'male', 'cricket', '2000-02-02', 'poik,ujujmikol', '1582799826_DSC_2428.JPG', '', 1, '2020-08-12 10:53:15', '2020-02-27 10:37:06'),
(16, 'YASH', 'tailloryash008@gmail.com', '8849506541', '123456789', 'male', 'cricket,music', '1999-10-14', 'surat', '1592144490_download.jfif', '', 1, '2020-08-12 10:53:15', '2020-06-14 14:21:30');

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `area_id` int(10) NOT NULL,
  `area_state_id` int(10) NOT NULL,
  `area_city_id` int(10) NOT NULL,
  `area_name` varchar(300) NOT NULL,
  `status` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`area_id`, `area_state_id`, `area_city_id`, `area_name`, `status`) VALUES
(17, 10, 20, 'panji', 0),
(19, 11, 23, 'katargam', 0),
(21, 13, 24, 'Central', 0),
(22, 11, 23, 'amroli', 0),
(23, 14, 26, 'Bhopal pal', 0),
(24, 11, 28, 'Sabarmati', 1),
(25, 11, 29, 'Palavasna highway', 1),
(26, 11, 30, 'Near Market yard', 1),
(27, 11, 31, 'Dhanechi Vadla', 1),
(28, 11, 32, 'Pal', 1),
(29, 11, 33, 'Darjipura', 1),
(30, 11, 34, 'Mile Road', 1),
(31, 11, 35, 'Ambaji Road', 1),
(32, 11, 36, 'Himatnagar', 1),
(33, 11, 37, 'Lal Bangla Compound', 1),
(34, 11, 38, 'B/H -Dr Shubhash Academy', 1),
(35, 11, 39, 'Madhaper Road', 1),
(36, 11, 40, 'Kehrali Road', 1),
(37, 11, 41, 'Rajmahel Compound', 1),
(38, 11, 42, 'Dharanpur Road', 1),
(39, 11, 43, 'Nandevan Chockdi', 1),
(40, 11, 44, ' Near Commerce College', 1),
(41, 11, 45, 'Near G0 Circle', 1),
(42, 11, 46, ' Octroy Naka', 1),
(43, 11, 47, ' Highway bypass', 1),
(44, 11, 48, 'Italva', 1),
(45, 11, 49, 'Collector Office Building', 1),
(46, 11, 50, 'Borsad Chokdi', 1),
(47, 11, 51, 'Sidhpur Cross Road', 1),
(48, 11, 52, 'Vadia Road', 1),
(49, 11, 53, 'Bhenskatri Road', 1),
(50, 11, 55, 'Aahwa', 1),
(51, 11, 56, 'Shamlaji Modasa highway', 1),
(52, 11, 57, 'R & B building', 1),
(53, 11, 58, 'Pura Road', 1),
(54, 11, 59, 'Fatehpura Road', 1),
(55, 11, 60, 'Lunawada Bus Stand', 1),
(56, 11, 61, 'Morbi Maliya Bypass', 1),
(57, 11, 62, 'New ITI Jamnagar Highway', 1),
(58, 11, 63, 'Amrutbaug', 1),
(59, 15, 64, 'Bhopal pal', 0),
(60, 0, 0, '', 0),
(61, 0, 0, '', 0),
(62, 0, 0, '', 0),
(63, 11, 0, '', 0),
(64, 0, 0, '', 0),
(65, 0, 0, '', 0),
(66, 0, 0, '', 0),
(67, 0, 0, '', 0),
(68, 0, 0, '', 0),
(69, 18, 67, 'Borivali', 0);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(10) NOT NULL,
  `category_name` varchar(300) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `status`) VALUES
(4, 'Licence', 0),
(5, 'Vehical', 0),
(6, 'RC BOOK', 0);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(10) NOT NULL,
  `city_state_id` int(10) NOT NULL,
  `city_name` varchar(300) NOT NULL,
  `status` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `city_state_id`, `city_name`, `status`) VALUES
(28, 11, 'Ahemdabad', 1),
(29, 11, 'Mehsana', 1),
(30, 11, 'Rajkot', 1),
(31, 11, 'Bhavnagar', 1),
(32, 11, 'Surat', 1),
(33, 11, 'Vadodara', 1),
(34, 11, 'Kheda(Nadiad)', 1),
(35, 11, 'Palanpur', 1),
(36, 11, 'Sabarkantha', 1),
(37, 11, 'Jamnagar', 1),
(38, 11, 'Junagadh', 1),
(39, 11, 'Kutch', 1),
(40, 11, 'Surendranagar', 1),
(41, 11, 'Amreli', 1),
(42, 11, 'Valsad', 1),
(43, 11, 'Bharuch', 1),
(44, 11, 'Godhra', 1),
(45, 11, 'Gandhinagar', 1),
(46, 11, 'Bardoli', 1),
(47, 11, 'Dahod', 1),
(48, 11, 'Navsari', 1),
(49, 11, 'Narmada', 1),
(50, 11, 'Anand', 1),
(51, 11, 'Patan', 1),
(52, 11, 'Porbandar', 1),
(53, 11, 'Vyara', 1),
(55, 11, 'Ahwa', 1),
(56, 11, 'Arvalli', 1),
(57, 11, 'Veraval', 1),
(58, 11, 'Botad', 1),
(59, 11, 'Chhota Udepur', 1),
(60, 11, 'Mahisagar', 1),
(61, 11, 'Morbi', 1),
(62, 11, 'Khambhaliya', 1),
(63, 11, 'Bavla', 1),
(67, 18, 'Mumbai', 0);

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `exam_id` int(20) NOT NULL,
  `user_id` int(10) NOT NULL,
  `exam_state_id` int(20) NOT NULL,
  `exam_city_id` int(20) NOT NULL,
  `exam_area_id` int(20) NOT NULL,
  `exam_name` varchar(300) NOT NULL,
  `exam_time` varchar(200) NOT NULL,
  `exam_mark` int(20) NOT NULL,
  `exam_final_mark` int(20) NOT NULL,
  `status` int(20) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`exam_id`, `user_id`, `exam_state_id`, `exam_city_id`, `exam_area_id`, `exam_name`, `exam_time`, `exam_mark`, `exam_final_mark`, `status`, `created_at`, `updated_at`) VALUES
(1, 0, 0, 0, 13, '$exam_name', '$exam_time', 0, 0, 0, '2020-01-08 11:06:16', '2020-01-08 11:06:16'),
(7, 0, 9, 0, 13, 'm,dnnkn', ',.mkjhjg', 0, 0, 0, '2020-01-08 11:27:25', '2020-01-08 11:27:25'),
(8, 0, 9, 0, 14, 'm,dnnkn', ',.mkjhjg', 0, 0, 0, '2020-01-08 11:29:09', '2020-01-08 11:29:09'),
(9, 0, 9, 0, 14, 'm,dnnkn', ',.mkjhjg', 0, 0, 0, '2020-01-08 11:30:26', '2020-01-08 11:30:26'),
(11, 0, 10, 20, 0, 'ajhch', '2hr', 200, 2000, 0, '2020-01-10 03:00:33', '2020-01-10 03:00:33'),
(12, 0, 10, 20, 14, 'wdf', '4hr', 45, 50, 0, '2020-01-10 03:06:32', '2020-01-10 03:06:32'),
(13, 0, 10, 20, 0, 'sdk', '2hr', 100, 1000, 0, '2020-01-10 10:03:37', '2020-01-10 10:03:37'),
(14, 0, 9, 19, 13, 'dlfkj', 'glhkjk', 0, 0, 0, '2020-01-10 10:04:21', '2020-01-10 10:04:21'),
(15, 0, 9, 19, 13, 'dryty', 'dsfdtyt', 0, 0, 0, '2020-01-10 10:05:48', '2020-01-10 10:05:48'),
(16, 0, 9, 19, 13, 'test', '5', 20, 12, 0, '2020-01-10 10:10:35', '2020-01-10 10:10:35'),
(17, 0, 9, 19, 0, 'AA', '2 hr', 50, 18, 0, '2020-01-10 10:45:43', '2020-01-10 10:45:43'),
(23, 0, 9, 19, 15, 'kjhgf', '2', 17, 50, 0, '2020-01-10 10:57:31', '2020-01-10 10:57:31'),
(24, 0, 9, 19, 15, 'kjhgf', '2', 17, 50, 0, '2020-01-10 10:57:32', '2020-01-10 10:57:32'),
(25, 0, 9, 19, 15, 'kjhgf', '2', 17, 50, 0, '2020-01-10 10:57:33', '2020-01-10 10:57:33'),
(26, 0, 0, 0, 0, '', '', 0, 0, 0, '2020-01-10 12:13:14', '2020-01-10 12:13:14'),
(27, 0, 0, 0, 0, '', '', 0, 0, 0, '2020-01-10 12:22:46', '2020-01-10 12:22:46'),
(28, 0, 9, 19, 15, 'test123', '3', 30, 12, 0, '2020-01-13 12:22:19', '2020-01-13 12:22:19'),
(29, 0, 9, 19, 15, 'hjghgh', '5', 5, 6, 0, '2020-01-13 12:32:29', '2020-01-13 12:32:29'),
(30, 0, 9, 19, 15, 'mmm', '2', 2, 2, 0, '2020-01-13 12:34:00', '2020-01-13 12:34:00'),
(31, 0, 9, 19, 15, 'mmm', '2', 2, 2, 0, '2020-01-13 12:34:26', '2020-01-13 12:34:26'),
(32, 0, 10, 20, 16, 'sdf', '3hr', 50, 17, 0, '2020-01-16 12:46:48', '2020-01-16 12:46:48'),
(34, 0, 11, 23, 19, 'rr', '2.00', 100, 35, 0, '2020-02-26 09:27:51', '2020-02-26 09:27:51'),
(36, 0, 11, 23, 19, 'EXPO', '5', 50, 15, 0, '2020-03-11 10:22:18', '2020-03-11 10:22:18'),
(37, 0, 10, 20, 17, 'Abc', '2Hrs', 100, 35, 0, '2020-03-17 06:39:16', '2020-03-17 06:39:16'),
(38, 0, 13, 24, 21, 'Learning Licence', '15 Min.', 5, 3, 0, '2020-03-17 06:50:28', '2020-03-17 06:50:28'),
(39, 0, 11, 23, 19, 'TEST_RTO', '14', 5, 3, 0, '2020-03-17 07:13:38', '2020-03-17 07:13:38'),
(40, 0, 11, 23, 19, 'RTO_3_2020', '1', 5, 3, 0, '2020-03-17 07:20:02', '2020-03-17 07:20:02'),
(41, 12, 11, 23, 19, 'RTO_3_2020', '1', 5, 3, 0, '2020-03-17 07:20:29', '2020-03-17 07:20:29'),
(42, 12, 11, 23, 19, 'Learning Licence', '30 min ', 5, 3, 0, '2020-06-15 11:37:32', '2020-06-15 11:37:32'),
(43, 12, 14, 26, 23, 'Bhopal Expo', '2', 10, 6, 0, '2020-06-30 09:55:24', '2020-06-30 09:55:24'),
(44, 12, 15, 64, 59, 'Bhopal EXPO', '2:00', 3, 2, 0, '2020-07-01 15:32:18', '2020-07-01 15:32:18'),
(47, 12, 11, 32, 28, 'Surat', '5:00', 10, 2, 1, '2020-08-13 04:28:54', '2020-08-13 04:28:54');

-- --------------------------------------------------------

--
-- Table structure for table `exam_create`
--

CREATE TABLE `exam_create` (
  `exam_create_id` int(200) NOT NULL,
  `user_id` int(10) NOT NULL,
  `create_state_id` int(200) NOT NULL,
  `create_city_id` int(200) NOT NULL,
  `create_office_id` int(200) NOT NULL,
  `create_exam_id` int(200) NOT NULL,
  `create_slot_id` int(200) NOT NULL,
  `create_exam_date` date NOT NULL,
  `status` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exam_create`
--

INSERT INTO `exam_create` (`exam_create_id`, `user_id`, `create_state_id`, `create_city_id`, `create_office_id`, `create_exam_id`, `create_slot_id`, `create_exam_date`, `status`) VALUES
(22, 25, 11, 23, 9, 41, 16, '2020-02-28', 1),
(23, 24, 11, 23, 9, 41, 13, '2020-02-29', 1),
(24, 24, 11, 23, 9, 41, 14, '2020-02-29', 1),
(25, 27, 11, 23, 9, 16, 14, '2020-06-15', 1),
(27, 28, 11, 23, 9, 16, 12, '2020-06-15', 0),
(28, 28, 11, 23, 9, 16, 12, '2020-06-15', 0),
(29, 29, 11, 23, 9, 39, 13, '2020-06-15', 1),
(30, 29, 11, 23, 9, 40, 14, '2020-06-15', 1),
(31, 30, 11, 23, 9, 36, 13, '2020-06-15', 1),
(32, 30, 11, 23, 9, 40, 12, '2020-06-18', 20),
(33, 31, 11, 23, 9, 36, 13, '2020-06-16', 1),
(36, 31, 11, 23, 9, 40, 12, '2020-06-17', 1),
(40, 0, 11, 23, 9, 16, 14, '2020-04-16', 0),
(43, 29, 14, 26, 12, 43, 14, '2020-07-01', 20),
(44, 34, 14, 26, 12, 43, 13, '2020-07-02', 20),
(45, 29, 14, 26, 12, 43, 13, '2020-07-03', 1),
(46, 29, 14, 26, 12, 43, 14, '2020-07-01', 1),
(47, 29, 14, 26, 12, 43, 12, '2020-07-04', 1),
(48, 29, 14, 26, 12, 43, 12, '2020-07-06', 1),
(51, 44, 11, 32, 17, 45, 12, '2020-07-04', 1),
(52, 45, 11, 32, 17, 45, 14, '2020-08-13', 1),
(53, 45, 11, 32, 17, 45, 12, '2020-08-14', 1),
(54, 45, 11, 32, 17, 45, 12, '2020-08-16', 1),
(55, 46, 11, 32, 17, 28, 12, '2020-08-13', 1),
(56, 46, 11, 32, 17, 16, 12, '2020-08-14', 1),
(57, 46, 11, 32, 17, 16, 13, '2020-08-13', 1),
(58, 48, 11, 32, 17, 39, 13, '2020-08-13', 1),
(59, 49, 11, 32, 17, 45, 12, '2020-08-13', 1),
(63, 53, 11, 32, 17, 47, 12, '2020-08-14', 1);

-- --------------------------------------------------------

--
-- Table structure for table `exam_question`
--

CREATE TABLE `exam_question` (
  `exam_question_id` int(20) NOT NULL,
  `exam_id` int(20) NOT NULL,
  `question_id` int(20) NOT NULL,
  `question` varchar(300) NOT NULL,
  `ans1` varchar(200) NOT NULL,
  `ans2` varchar(200) NOT NULL,
  `ans3` varchar(200) NOT NULL,
  `ans4` varchar(200) NOT NULL,
  `final_ans` varchar(200) NOT NULL,
  `status` int(20) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exam_question`
--

INSERT INTO `exam_question` (`exam_question_id`, `exam_id`, `question_id`, `question`, `ans1`, `ans2`, `ans3`, `ans4`, `final_ans`, `status`, `created_at`, `updated_at`) VALUES
(43, 42, 2, 'Under What circumstances is it permissible to undertake a vehicle on its left side?', 'if it is turning right', 'if your are in a hurry', 'if it is going very slowly', 'if there is a wide verge', 'a', 1, '2020-06-15 11:37:32', '2020-06-15 11:37:32'),
(44, 42, 3, 'The only type of horn permitted on a motor vehicle is what?', 'A two tone electric horn', 'A single tone air horn', 'A single tone electric horn', 'A two tone air horn', 'c', 1, '2020-06-15 11:37:32', '2020-06-15 11:37:32'),
(45, 42, 4, 'If a road has no pavement for pedestrian, what should they do?', 'Walk in the center of the road', 'Walk on the left hand side', 'Walk on the right hand side', 'Take any of those option', 'c', 1, '2020-06-15 11:37:32', '2020-06-15 11:37:32'),
(46, 42, 5, 'You should not park within what distance of a fire hydrant?', '8 feet', '10 feet', '6 feet', '4 feet', 'b', 1, '2020-06-15 11:37:32', '2020-06-15 11:37:32'),
(60, 45, 1, 'The handbreak in your car is there for?', 'Emergencies', 'Protection agains theft', 'Parking ', 'Sharp Turns', 'c', 1, '2020-07-02 04:07:21', '2020-07-02 04:07:21'),
(61, 45, 2, 'Which of this color is not permitted for private vehicles?', 'Dark Blue', 'Bright Red', 'Metalic Black', 'Olive Green', 'd', 1, '2020-07-02 04:07:21', '2020-07-02 04:07:21'),
(62, 45, 3, 'When You Have parked you vehicle on the road at night,by law you must...?', 'Leave the hazard lights on', 'Lock it', 'leave the keys on the ignition', 'leave the parking light on', 'd', 1, '2020-07-02 04:07:21', '2020-07-02 04:07:21'),
(63, 45, 4, 'When towing another vehicle you must not exceed what speed?', '24 km/h', '32 km/h', '45 km/h', '82 km/h', 'a', 1, '2020-07-02 04:07:21', '2020-07-02 04:07:21'),
(64, 45, 5, 'Which one of these is a rule governing overtaking?', 'you must overtake at twise the speed of the other vehicle', 'You must sound your horn when overtaking', 'must overtake on the left hand side', 'you may overtake on the right handside', 'd', 1, '2020-07-02 04:07:21', '2020-07-02 04:07:21'),
(65, 45, 6, 'When driving on one way street,you must not,by law,do what?', 'Reverse', 'Park', 'Make right turns', 'Sound your Horn', 'a', 1, '2020-07-02 04:07:21', '2020-07-02 04:07:21'),
(66, 45, 7, 'When joining a main road from a side road you must give a way to?', 'Traffic coming from the left', 'No traffic,it must give way to you', 'traffic coming from the right', 'all traffic', 'd', 0, '2020-07-02 04:07:21', '2020-07-02 04:07:21'),
(67, 45, 8, 'What is the maximum number of the people who can be carried on a two wheeled vehicle?', 'one ', 'two', 'three', 'four', 'b', 0, '2020-07-02 04:07:21', '2020-07-02 04:07:21'),
(68, 45, 9, 'The maximum number of person permitted on a tractor is?', 'one', 'four', 'two', 'three', 'a', 0, '2020-07-02 04:07:21', '2020-07-02 04:07:21'),
(69, 45, 10, 'If you wish to drive a public transport vehicle you must be at least what age?', '17', '18', '20', '19', 'c', 0, '2020-07-02 04:07:21', '2020-07-02 04:07:21'),
(70, 46, 1, 'abc', 'a', 'a', 'a', 'a', 'd', 0, '2020-08-12 11:44:57', '2020-08-12 11:44:57'),
(71, 46, 2, 'efr', 'r', 't', 't', 't', 'd', 0, '2020-08-12 11:44:57', '2020-08-12 11:44:57'),
(72, 46, 3, 'fvfb', 'q', 'q', 'q', 'q', 'd', 0, '2020-08-12 11:44:57', '2020-08-12 11:44:57'),
(73, 46, 4, 'ee', 's', 's', 's', 's', 'd', 0, '2020-08-12 11:44:57', '2020-08-12 11:44:57'),
(74, 46, 5, 'uu', 'u', 'u', 'u', 'u', 'd', 0, '2020-08-12 11:44:57', '2020-08-12 11:44:57'),
(75, 47, 1, 'Under What circumstances is it permissible to undertake a vehicle on its left side?', 'if it is turning right', 'if your are in a hurry', 'if it is going very slowly', 'if there is a wide verge', 'a', 0, '2020-08-13 04:28:54', '2020-08-13 04:28:54'),
(76, 47, 2, 'The only type of horn permitted on a motor vehicle is what?', 'A two tone electric horn', 'A single tone air horn', 'A single tone electric horn', 'A two tone air horn', 'c', 0, '2020-08-13 04:28:54', '2020-08-13 04:28:54'),
(77, 47, 3, 'If a road has no pavement for pedestrian, what should they do?', 'Walk in the center of the road', 'Walk on the left hand side', 'Walk on the right hand side', 'Take any of those option', 'c', 0, '2020-08-13 04:28:54', '2020-08-13 04:28:54'),
(78, 47, 4, 'You should not park within what distance of a fire hydrant?', '8 feet', '10 feet', '6 feet', '4 feet', 'b', 0, '2020-08-13 04:28:54', '2020-08-13 04:28:54'),
(79, 47, 5, 'The handbreak in your car is there for?', 'Emergencies', 'Protection agains theft', 'Parking ', 'Sharp Turns', 'c', 0, '2020-08-13 04:28:54', '2020-08-13 04:28:54'),
(80, 47, 6, 'Which of this color is not permitted for private vehicles? ', 'Dark Blue', 'Bright Red', 'Metalic Black', 'Olive Green', 'd', 0, '2020-08-13 04:28:54', '2020-08-13 04:28:54'),
(81, 47, 7, 'When You Have parked you vehicle on the road at night,by law you must...?', 'Leave the hazard lights on', 'Lock it', 'leave the keys on the ignition', 'leave the parking light on', 'd', 0, '2020-08-13 04:28:54', '2020-08-13 04:28:54'),
(82, 47, 8, 'When towing another vehicle you must not exceed what speed?', '24 km/h', '32 km/h', '45 km/h', '82 km/h', 'a', 0, '2020-08-13 04:28:54', '2020-08-13 04:28:54'),
(83, 47, 9, 'Which one of these is a rule governing overtaking?', 'Which one of these is a rule governing overtaking?', 'You must sound your horn when overtaking', 'must overtake on the left hand side', 'you may overtake on the right handside', 'd', 0, '2020-08-13 04:28:54', '2020-08-13 04:28:54'),
(84, 47, 10, 'When driving on one way street,you must not,by law,do what?', 'Reverse', 'Park', 'Make right turns', 'Sound your Horn', 'a', 0, '2020-08-13 04:28:54', '2020-08-13 04:28:54');

-- --------------------------------------------------------

--
-- Table structure for table `final_result`
--

CREATE TABLE `final_result` (
  `final_result_id` int(20) NOT NULL,
  `result_exam_id` int(20) NOT NULL,
  `final_category_id` int(10) NOT NULL,
  `final_subcategory_id` int(10) NOT NULL,
  `final_register_id` int(10) NOT NULL,
  `t_ans` int(10) NOT NULL,
  `f_ans` int(10) NOT NULL,
  `total_ans` varchar(200) NOT NULL,
  `result_type` varchar(200) NOT NULL,
  `user_id` int(20) NOT NULL,
  `status` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `final_result`
--

INSERT INTO `final_result` (`final_result_id`, `result_exam_id`, `final_category_id`, `final_subcategory_id`, `final_register_id`, `t_ans`, `f_ans`, `total_ans`, `result_type`, `user_id`, `status`) VALUES
(33, 41, 4, 4, 0, 1, 4, '5', 'Fail', 24, 0),
(34, 41, 4, 3, 0, 2, 8, '10', 'Fail', 24, 0),
(35, 41, 4, 3, 0, 1, 4, '5', 'Fail', 25, 0),
(36, 41, 4, 4, 43, 5, 0, '5', 'Pass', 25, 1),
(37, 41, 4, 3, 44, 6, 4, '10', 'Pass', 25, 1),
(38, 39, 4, 3, 57, 0, 6, '6', 'Fail', 29, 0),
(39, 39, 4, 3, 60, 5, 1, '6', 'Pass', 30, 1),
(40, 40, 4, 4, 61, 1, 4, '5', 'Fail', 30, 0),
(41, 36, 4, 3, 62, 2, 3, '5', 'Fail', 31, 0),
(42, 36, 4, 4, 63, 5, 0, '5', 'Fail', 31, 0),
(43, 40, 4, 4, 63, 5, 0, '5', 'Pass', 31, 1),
(44, 40, 4, 3, 64, 5, 0, '5', 'Pass', 32, 1),
(45, 43, 4, 4, 72, 7, 3, '10', 'Pass', 34, 1),
(46, 43, 4, 4, 73, 14, 6, '20', 'Pass', 34, 1),
(47, 43, 4, 3, 75, 1, 9, '10', 'Fail', 35, 0),
(48, 0, 4, 4, 86, 0, 0, '', 'Pass', 0, 1),
(49, 0, 4, 4, 88, 0, 0, '', 'Fail', 0, 0),
(50, 0, 4, 4, 89, 0, 0, '', 'Fail', 0, 0),
(51, 0, 4, 3, 90, 0, 0, '', 'Fail', 0, 0),
(52, 0, 4, 3, 91, 0, 0, '', 'Fail', 0, 0),
(53, 0, 4, 3, 99, 0, 0, '', 'Fail', 0, 0),
(54, 45, 4, 3, 100, 10, 0, '10', 'Fail', 44, 0),
(55, 0, 4, 4, 101, 0, 0, '', 'Pass', 0, 1),
(56, 0, 4, 3, 103, 0, 0, '', 'Fail', 0, 0),
(57, 0, 4, 3, 104, 0, 0, '', 'Fail', 0, 0),
(58, 0, 4, 3, 105, 0, 0, '', 'Fail', 0, 0),
(59, 45, 4, 3, 105, 10, 0, '10', 'Fail', 45, 0),
(60, 45, 4, 3, 109, 21, 9, '30', 'Fail', 46, 0),
(61, 46, 4, 3, 114, 5, 0, '5', 'Pass', 50, 0),
(62, 45, 4, 3, 115, 10, 0, '10', 'Fail', 52, 0),
(63, 45, 4, 3, 116, 3, 7, '10', 'Pass', 53, 0);

-- --------------------------------------------------------

--
-- Table structure for table `fine`
--

CREATE TABLE `fine` (
  `fine_id` int(20) NOT NULL,
  `fine_category_id` int(20) NOT NULL,
  `fine_subcategory_id` int(20) NOT NULL,
  `fine_vehical_id` int(20) NOT NULL,
  `fine_state_id` int(20) NOT NULL,
  `fine_city_id` int(20) NOT NULL,
  `fine_office_id` int(20) NOT NULL,
  `fine_vehical_no` int(20) NOT NULL,
  `name` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `receipt_no` varchar(200) NOT NULL,
  `fine_user_id` int(100) NOT NULL,
  `fine_vehical_registration_id` int(100) NOT NULL,
  `status` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `licence_confirm`
--

CREATE TABLE `licence_confirm` (
  `confirm_id` int(20) NOT NULL,
  `confirm_user_id` int(20) NOT NULL,
  `licence_register_id` int(10) NOT NULL,
  `confirm_vehical_id` int(20) NOT NULL,
  `licence_type` varchar(200) NOT NULL,
  `issue_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `validity_date` date NOT NULL,
  `licence_subcategory_id` int(10) NOT NULL,
  `licence_num` varchar(100) NOT NULL,
  `status` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `licence_confirm`
--

INSERT INTO `licence_confirm` (`confirm_id`, `confirm_user_id`, `licence_register_id`, `confirm_vehical_id`, `licence_type`, `issue_date`, `validity_date`, `licence_subcategory_id`, `licence_num`, `status`) VALUES
(7, 25, 43, 5, 'DR', '2020-03-31 10:42:48', '2020-07-01', 4, '8488771246014', 1),
(8, 25, 44, 5, 'LR', '2020-03-31 12:05:11', '2020-07-01', 3, '6983113304158', 1),
(9, 30, 60, 5, 'LR', '2020-06-14 12:31:15', '2020-09-14', 3, '2389455509050', 1),
(10, 31, 63, 6, 'DR', '2020-06-14 13:55:24', '2020-09-14', 4, '3171315568337', 1),
(11, 32, 64, 5, 'LR', '2020-06-14 14:02:55', '2020-09-14', 3, '3529733466857', 1),
(12, 34, 73, 5, 'Driving Licence', '2020-06-30 10:54:53', '2020-09-30', 4, '5738183104853', 1),
(13, 34, 72, 6, 'Driving Licence', '2020-06-30 12:17:03', '2020-09-30', 4, '4913056677434', 1),
(15, 40, 88, 5, 'Driving Licence', '2020-07-01 06:45:55', '0000-00-00', 4, '', 1),
(16, 40, 89, 6, 'Driving Licence', '2020-07-01 06:54:35', '0000-00-00', 4, '', 1),
(17, 44, 101, 5, 'Driving Licence', '2020-07-02 05:40:29', '2020-10-02', 4, '5145778046700', 1);

-- --------------------------------------------------------

--
-- Table structure for table `licence_register`
--

CREATE TABLE `licence_register` (
  `licence_register_id` int(20) NOT NULL,
  `licence_category_id` int(20) NOT NULL,
  `licence_subcategory_id` int(20) NOT NULL,
  `licence_state_id` int(20) NOT NULL,
  `licence_city_id` int(20) NOT NULL,
  `licence_office_id` int(20) NOT NULL,
  `user_id` int(10) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `contact_no` varchar(20) NOT NULL,
  `vehical_id` int(20) NOT NULL,
  `dob` date NOT NULL,
  `blood_group` varchar(20) NOT NULL,
  `qualification` varchar(200) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `id_proof_type` varchar(200) NOT NULL,
  `id_proof_image` varchar(200) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `nominee_name` varchar(300) NOT NULL,
  `aadhar_no` varchar(100) NOT NULL,
  `rcbook_no` varchar(100) DEFAULT NULL,
  `status` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `licence_register`
--

INSERT INTO `licence_register` (`licence_register_id`, `licence_category_id`, `licence_subcategory_id`, `licence_state_id`, `licence_city_id`, `licence_office_id`, `user_id`, `name`, `email`, `address`, `contact_no`, `vehical_id`, `dob`, `blood_group`, `qualification`, `photo`, `id_proof_type`, `id_proof_image`, `register_date`, `created_at`, `updated_at`, `nominee_name`, `aadhar_no`, `rcbook_no`, `status`) VALUES
(40, 4, 3, 11, 23, 9, 24, '24', '24', 'fgdfjg', '2345678', 6, '2020-12-31', 'b', 'b', '1585572100_4 - Copy.jpg', '1', '1585572100_Array', '2020-06-14 11:37:49', '2020-03-30 12:41:40', '2020-03-30 12:41:40', 'dfgd', '23456789', '0', 5),
(41, 4, 4, 11, 23, 9, 24, '24', '24', 'gdhjfgdhj', '12345678', 5, '2020-12-31', 'b', 'b', '1585572555_1 - Copy.jpg', '1', '1585572555_Array', '2020-06-14 12:38:14', '2020-03-30 12:49:15', '2020-03-30 12:49:15', 'ghhfgh', '2345678', '0', 5),
(42, 4, 3, 11, 23, 9, 25, '25', '25', 'ytrtyrtyr', '23456789', 5, '2020-12-31', 'b', 'b', '1585584480_4.jpg', '1', '1585584480_Array', '2020-03-31 12:25:13', '2020-03-30 16:08:00', '2020-03-30 16:08:00', 'tfyy', '23456789', '0', 5),
(43, 4, 4, 11, 23, 9, 25, '25', '25', 'hjghj', '2345678', 5, '2020-12-31', 'bb', 'fdfd', '1585585713_4 - Copy.jpg', '1', '1585585713_Array', '2020-06-14 12:38:14', '2020-03-30 16:28:33', '2020-03-30 16:28:33', 'gfg', '34567', '0', 5),
(44, 4, 3, 11, 23, 9, 25, '25', '25', 'ghfgfgh', '234567890', 5, '2020-12-31', 'bb', 'bb', '1585655777_4 - Copy.jpg', '1', '1585655777_Array', '2020-06-14 11:37:49', '2020-03-31 11:56:17', '2020-03-31 11:56:17', 'gfg', '356789', '0', 5),
(45, 4, 3, 11, 23, 9, 26, '26', '26', 'gdhsdh', '2424', 5, '2020-12-31', 'jbb', 'bcbv', '1585658799_4.jpg', '1', '1585658799_Array', '2020-06-14 11:37:49', '2020-03-31 12:46:39', '2020-03-31 12:46:39', 'hh', '34567', '0', 5),
(46, 4, 4, 11, 23, 9, 26, '26', '26', 'bjfdjjbj', '334345', 5, '2020-12-31', 'hfhf', 'yygfgfg', '1585659876_2 - Copy.jpg', '1', '1585659877_Array', '2020-06-14 12:38:14', '2020-03-31 13:04:37', '2020-03-31 13:04:37', 'gf', '234567', '0', 5),
(47, 6, 7, 11, 23, 9, 24, '24', '24', 'hello', '2345678', 5, '2020-12-31', 'sghd', 'bca', '1587650554_4 - Copy.jpg', '1', '1587650554_Array', '2020-04-23 14:02:34', '2020-04-23 14:02:34', '2020-04-23 14:02:34', 'hgdhdg', '2345678', '0', 0),
(51, 6, 7, 11, 23, 9, 27, '27', '27', 'hjghg', '45', 5, '2020-12-31', 'gjg', 'gh', '1587652284_3 - Copy.jpg', '1', '1587652284_Array', '2020-04-23 14:31:24', '2020-04-23 14:31:24', '2020-04-23 14:31:24', 'th', '656', '4384654', 0),
(53, 4, 3, 11, 23, 9, 27, '27', '27', '121\r\nPramukhpark soc.,nr. r.v. patel collage,chhaparabhatha road', '9408227225', 5, '2020-12-31', 'b+', 'BCA', '1592126982_1583410855_images.png', '1', '1592126982', '2020-06-14 11:37:49', '2020-06-14 09:29:42', '2020-06-14 09:29:42', 'Kishan vadodariya', '9826 5678 6565', ' ', 5),
(54, 4, 3, 11, 23, 9, 25, '25', '25', 'amroli', '123456789', 6, '1999-10-14', 'b+', 'bca', '1592130926_download (1).jfif', '1', '1592130926', '2020-06-14 11:37:49', '2020-06-14 10:35:26', '2020-06-14 10:35:26', 'raj', '123256546578', ' ', 5),
(55, 4, 3, 11, 23, 9, 28, '28', '28', 'chhaprabhata', '1234567890', 6, '1999-02-18', 'b+', 'bca', '1592131284_download.jfif', '1', '1592131284', '2020-06-14 11:37:49', '2020-06-14 10:41:24', '2020-06-14 10:41:24', 'raj', '123256546578', ' ', 5),
(56, 4, 4, 11, 23, 9, 28, '28', '28', 'suart', '5201456307', 5, '1999-02-18', 'o+', 'bca', '1592132446_download.jfif', '---select ID Proof Type-----', '1592132446', '2020-06-14 12:38:14', '2020-06-14 11:00:46', '2020-06-14 11:00:46', 'raju', '512415247856', ' ', 5),
(57, 4, 3, 11, 23, 9, 29, '29', '29', 'sagfdsgfdsg', '5201456307', 5, '2001-10-27', 'o+', 'bca', '1592134509_images.jfif', '1', '1592134509', '2020-06-14 12:29:26', '2020-06-14 11:35:09', '2020-06-14 11:35:09', 'raju', '512415247856', ' ', 5),
(58, 6, 7, 11, 23, 9, 29, '29', '29', 'xdsfhj', '5201456307', 5, '1996-02-07', 'o+', 'bca', '1592135578_images.jfif', '1', '1592135578', '2020-06-14 12:17:52', '2020-06-14 11:52:58', '2020-06-14 11:52:58', 'raju', '512415247856', '1674890', 0),
(59, 4, 4, 11, 23, 9, 29, '29', '29', '5yrdyru', '5201456307', 6, '2012-09-02', 'o+', 'bca', '1592136671_download.jfif', '1', '1592136671', '2020-06-14 12:38:14', '2020-06-14 12:11:11', '2020-06-14 12:11:11', 'raju', '512415247856', ' ', 5),
(60, 4, 3, 11, 23, 9, 30, '30', '30', 'cgjtfj', '5201456307', 5, '2004-12-29', 'o+', 'bca', '1592137351_download.jfif', '1', '1592137351', '2020-06-14 13:48:47', '2020-06-14 12:22:31', '2020-06-14 12:22:31', 'raju', '512415247856', ' ', 5),
(61, 4, 4, 11, 23, 9, 30, '30', '30', 'vjgfu', '5201456307', 6, '2000-02-14', 'o+', 'bca', '1592138136_download (1).jfif', '1', '1592138136', '2020-06-14 13:52:49', '2020-06-14 12:35:36', '2020-06-14 12:35:36', 'raju', '512415247856', ' ', 5),
(62, 4, 3, 11, 23, 9, 31, '31', '31', '10 bcs soc ,surat', '5201456307', 5, '2000-02-17', 'o+', 'bca', '1592142339_download.jfif', '1', '1592142339', '2020-06-14 14:02:13', '2020-06-14 13:45:39', '2020-06-14 13:45:39', 'raju', '1234 2023 1234 1234', ' ', 5),
(63, 4, 4, 11, 23, 9, 31, '31', '31', 'qdd', '5201456307', 6, '2012-02-02', 'o+', 'bca', '1592142578_download.jfif', '1', '1592142578', '2020-06-30 10:21:13', '2020-06-14 13:49:38', '2020-06-14 13:49:38', 'raju', '1234 2023 1234 1234', ' ', 5),
(64, 4, 3, 11, 23, 9, 32, '32', '32', '10 abc soc', '5201456307', 5, '1996-02-20', 'o+', 'bca', '1592143156_download.jfif', '1', '1592143156', '2020-06-30 11:19:12', '2020-06-14 13:59:16', '2020-06-14 13:59:16', '', '1234 2023 1234 1234', ' ', 5),
(65, 6, 7, 11, 23, 9, 32, '32', '32', 'SURAT', '5201456307', 5, '1989-03-14', 'o+', 'bca', '1592143470_download.jfif', '1', '1592143470', '2020-06-14 14:04:30', '2020-06-14 14:04:30', '2020-06-14 14:04:30', 'raju', '512415247856', '7317037', 0),
(66, 5, 5, 11, 23, 9, 32, '32', '32', 'SURAT', '5201456307', 5, '1999-10-14', 'o+', 'bca', '1592143673_download.jfif', '1', '1592143673', '2020-06-14 14:07:53', '2020-06-14 14:07:53', '2020-06-14 14:07:53', 'raju', '1234 2023 1234 1234', ' ', 0),
(67, 4, 3, 11, 23, 9, 33, '33', '33', 'dyjdyd', '5201456307', 5, '2000-10-28', 'o+', 'bca', '1592219929_download (1).jfif', '1', '1592219929', '2020-06-30 11:19:12', '2020-06-15 11:18:49', '2020-06-15 11:18:49', 'raju', '512415247856', ' ', 5),
(68, 4, 4, 11, 23, 9, 33, '33', '33', 'dsggfiu', '987456536210', 5, '2004-10-30', 'o+', 'bca', '1592221468_download.jfif', '1', '1592221468', '2020-06-30 10:21:13', '2020-06-15 11:44:28', '2020-06-15 11:44:28', 'raju', '1234 2023 1234 1234', ' ', 5),
(69, 5, 5, 11, 23, 9, 33, '33', '33', 'test', '5201456307', 5, '2022-03-03', 'b', 'bca', '1592379415_download.jfif', '1', '1592379415', '2020-06-17 07:36:55', '2020-06-17 07:36:55', '2020-06-17 07:36:55', 'raju', '512415247856', ' ', 0),
(72, 4, 4, 14, 26, 12, 34, '34', '34', 'tt', '1234567898', 6, '2021-03-02', 'b+', 'bca', '1593512109_2admin.png', '1', '1593512109', '2020-06-30 12:17:03', '2020-06-30 10:15:09', '2020-06-30 10:15:09', 'raj', '123256546578', ' ', 4),
(73, 4, 4, 14, 26, 12, 34, '34', '34', 'rt', '1234567898', 5, '2020-02-02', 'b+', 'bca', '1593513466_download (1).jfif', '1', '1593513466', '2020-06-30 10:54:53', '2020-06-30 10:37:46', '2020-06-30 10:37:46', 'raj', '123256546578', ' ', 4),
(74, 6, 7, 14, 26, 12, 34, '34', '34', 'rtr', '1234567898', 5, '2021-03-02', 'b+', 'bca', '1593514718_download (1).jfif', '1', '1593514718', '2020-06-30 10:58:38', '2020-06-30 10:58:38', '2020-06-30 10:58:38', 'raj', '123256546578', '3337633', 0),
(75, 4, 3, 14, 26, 12, 35, '35', '35', 'ere', '1234567898', 5, '2022-03-02', 'b+', 'bca', '1593515168_download (1).jfif', '1', '1593515168', '2020-07-01 08:09:40', '2020-06-30 11:06:08', '2020-06-30 11:06:08', 'raj', '123256546578', ' ', 5),
(84, 4, 3, 14, 26, 12, 38, '38', '38', 'kbguygfuygu', '1234567898', 5, '1998-10-25', 'b+', 'bca', '1593583760_download.jfif', '2', '1593583760', '2020-07-01 08:09:40', '2020-07-01 06:09:20', '2020-07-01 06:09:20', 'raj', '123256546578', ' ', 5),
(85, 4, 4, 14, 26, 12, 38, 'amz1', 'amz1@gmail.com', 'hgh', '34879/798468', 5, '2021-03-02', 'b+', 'bca', '1593584319_download.jfif', '2', '1593584319', '2020-07-01 06:18:39', '2020-07-01 06:18:39', '2020-07-01 06:18:39', 'raj', '123256546578', ' ', 0),
(88, 4, 4, 14, 26, 12, 40, 'amz2', 'amz2@gmail.com', 'evdrsdv', '1234567898', 5, '1999-07-26', 'b+', 'bca', '1593585856_download.jfif', '1', '1593585856', '2020-07-01 06:52:09', '2020-07-01 06:44:16', '2020-07-01 06:44:16', 'raj', '123256546578', ' ', 3),
(89, 4, 4, 14, 26, 12, 40, 'amz2', 'amz2@gmail.com', 'efuigi', '1234567898', 6, '2005-04-26', 'b+', 'bca', '1593586425_download.jfif', '1', '1593586425', '2020-07-01 06:54:35', '2020-07-01 06:53:45', '2020-07-01 06:53:45', 'raj', '123256546578', ' ', 3),
(90, 4, 3, 14, 26, 12, 40, 'amz2', 'amz2@gmail.com', 'dsbfb', '12134648974', 5, '2002-02-02', 'b+', 'bca', '1593588366_download (1).jfif', '1', '1593588366', '2020-07-01 08:13:06', '2020-07-01 07:26:06', '2020-07-01 07:26:06', 'raj', '123256546578', ' ', 5),
(91, 4, 3, 14, 26, 12, 40, 'amz2', 'amz2@gmail.com', 'sds', '1234567898', 5, '2020-07-16', 'b+', 'bca', '1593591101_download.jfif', '1', '1593591101', '2020-07-02 04:18:38', '2020-07-01 08:11:41', '2020-07-01 08:11:41', 'raj', '123256546578', ' ', 5),
(92, 4, 3, 11, 32, 17, 41, 'Dharmesh', 'tejanidharmeshh@gmail.com', 'abc soc.,surat', '9854665255', 5, '2004-10-30', 'b+', 'bca', '1593605675_download.jfif', '1', '1593605675', '2020-07-02 04:18:38', '2020-07-01 12:14:35', '2020-07-01 12:14:35', 'raj', '123256546578', ' ', 5),
(94, 4, 3, 11, 32, 17, 42, 'Dharmesh', 'tejanidharmeshh@gmail.com', 'sdndbfibi', '1234567898', 5, '2008-07-02', 'b+', 'bca', '1593606319_download.jfif', '1', '1593606319', '2020-07-02 04:18:38', '2020-07-01 12:25:19', '2020-07-01 12:25:19', 'raj', '123256546578', ' ', 5),
(95, 4, 4, 11, 28, 13, 42, 'Dharmesh', 'tejanidharmeshh@gmail.com', 'Demo', '1234567898', 5, '2021-03-02', 'b+', 'bca', '1593616814_download (1).jfif', '1', '1593616814', '2020-07-01 15:20:14', '2020-07-01 15:20:14', '2020-07-01 15:20:14', 'raj', '123256546578', ' ', 0),
(96, 4, 3, 15, 64, 50, 33, 'Dhamo', 'tejanidharmeshh@gmail.com', 'abc soc,mp', '1234567897', 5, '1999-10-14', 'b+', 'bca', '1593617715_download (1).jfif', '1', '1593617715', '2020-07-02 04:18:38', '2020-07-01 15:35:15', '2020-07-01 15:35:15', 'raj', '123256546578', ' ', 5),
(97, 4, 3, 0, -1, -1, 33, 'Dhamo', 'tejanidharmeshh@gmail.com', '', '', 0, '0000-00-00', '', '', '1593626331_', '---select ID Proof Type-----', '1593626331', '2020-07-02 04:18:38', '2020-07-01 17:58:51', '2020-07-01 17:58:51', '', '', ' ', 5),
(98, 4, 3, 0, -1, -1, 33, 'Dhamo', 'tejanidharmeshh@gmail.com', '', '', 0, '0000-00-00', '', '', '1593626541_', '---select ID Proof Type-----', '1593626541', '2020-07-02 04:18:38', '2020-07-01 18:02:21', '2020-07-01 18:02:21', '', '', ' ', 5),
(99, 4, 3, 11, 32, 17, 43, 'Kishan', 'kishanvadodariya2000@gmail.com', 'abc soc,surat', '9408227225', 5, '2000-02-17', 'B+', 'bca', '1593663223_download.jfif', '1', '1593663223', '2020-07-02 05:35:39', '2020-07-02 04:13:43', '2020-07-02 04:13:43', 'raj', '123256546578', ' ', 5),
(100, 4, 3, 11, 32, 17, 44, 'Kishan', 'Kishanvadodariya2000@gmail.com', '121,pramukh park soc.,Amroli,surat-07', '9408227225', 5, '2000-02-17', 'b+', 'BCA', '1593667880_download.jfif', '1', '1593667880', '2020-08-12 08:12:28', '2020-07-02 05:31:20', '2020-07-02 05:31:20', 'Abc', '9826 3025 33534', ' ', 5),
(101, 4, 4, 11, 32, 17, 44, 'Kishan', 'Kishanvadodariya2000@gmail.com', '121 Abc soc,Amroi,surat-07', '9408227225', 5, '2000-02-17', 'b+', 'BCA', '1593668267_download.jfif', '1', '1593668267', '2020-07-02 05:40:29', '2020-07-02 05:37:47', '2020-07-02 05:37:47', 'ABc', '9826 3025 33534', ' ', 4),
(104, 4, 3, 11, 32, 17, 45, 'test', 'kishan.v.1702@gmail.com', 'abc', '9909988788', 5, '2000-02-13', 'B+', '12 pass', '1597220234_download (1).jfif', '1', '1597220234', '2020-08-12 08:38:57', '2020-08-12 08:17:14', '2020-08-12 08:17:14', 'dhamo', '9090 8978 8788', ' ', 5),
(105, 4, 3, 11, 32, 17, 45, 'test', 'kishan.v.1702@gmail.com', 'abc', '9909988788', 5, '2000-02-13', 'B+', '12 pass', '1597221158_download.jfif', '1', '1597221158', '2020-08-12 09:34:53', '2020-08-12 08:32:38', '2020-08-12 08:32:38', 'dhamo', '9090 8978 8788', ' ', 5),
(106, 4, 4, 11, 32, 17, 45, 'test', 'kishan.v.1702@gmail.com', 'surat', '123565789', 5, '2000-02-14', 'B+', '12 pass', '1597222996_download (1).jfif', '1', '1597222996', '2020-08-12 09:03:16', '2020-08-12 09:03:16', '2020-08-12 09:03:16', 'dhamo', '9090 8978 8788', ' ', 0),
(107, 4, 3, 11, 32, -1, 45, 'test', 'kishan.v.1702@gmail.com', 'surat', '9909988788', 6, '2000-10-14', 'B+', '12 pass', '1597223413_dream.jpg', '2', '1597223413', '2020-08-12 09:34:53', '2020-08-12 09:10:13', '2020-08-12 09:10:13', 'dhamo', '9090 8978 8788', ' ', 5),
(108, 5, 5, 11, 32, 17, 46, 'demo', 'tejanidharmeshh@gmail.com', 'suart', '9909988788', 5, '1999-10-14', 'A+', 'bca', '1597223761_download (1).jfif', '2', '1597223761', '2020-08-12 09:16:01', '2020-08-12 09:16:01', '2020-08-12 09:16:01', 'dhamo', '9090 8978 8788', ' ', 0),
(109, 4, 3, 11, 32, 17, 46, 'demo', 'tejanidharmeshh@gmail.com', 'surat', '1234567890', 6, '1999-10-14', 'B+', 'bca', '1597223895_download.jfif', '2', '1597223895', '2020-08-12 11:48:39', '2020-08-12 09:18:15', '2020-08-12 09:18:15', 'dhamo', '9090 8978 8788', ' ', 5),
(110, 4, 4, 11, 32, 17, 46, 'demo', 'tejanidharmeshh@gmail.com', 'surat', '9909988788', 6, '1999-10-14', 'A+', '12 pass', '1597224457_download (1).jfif', '2', '1597224457', '2020-08-12 09:27:37', '2020-08-12 09:27:37', '2020-08-12 09:27:37', 'dhamo', '9090 8978 8788', ' ', 0),
(111, 4, 3, 11, 32, 17, 46, 'demo', 'tejanidharmeshh@gmail.com', 'surat', '9909988788', 6, '2000-10-14', 'A+', 'bca', '1597226376_download (1).jfif', '1', '1597226376', '2020-08-12 11:48:39', '2020-08-12 09:59:36', '2020-08-12 09:59:36', 'dhamo', '9090 8978 8788', ' ', 5),
(112, 4, 3, 11, 32, 17, 48, 'veer', 'tejanidharmeshh@gmail.com', 'surat', '1234567890', 5, '1999-10-14', 'b+', 'bca', '1597226983_2admin.png', '1', '1597226983', '2020-08-12 11:48:39', '2020-08-12 10:09:43', '2020-08-12 10:09:43', 'dhamo', '9090 8978 8788', ' ', 5),
(113, 4, 3, 11, 32, 17, 49, 'test', 'tejanidharmeshh@gmail.com', 'surat', '9909988788', 5, '1999-08-12', 'B+', '12 pass', '1597229399_2admin.png', '1', '1597229399', '2020-08-12 11:48:39', '2020-08-12 10:49:59', '2020-08-12 10:49:59', 'dhamo', '9090 8978 8788', ' ', 5),
(114, 4, 3, 11, 32, 17, 50, 'demo1', 'demo1@gmail.com', 'dd', '9909988788', 5, '2020-08-12', 'A+', '12 pass', '1597232766_download (1).jfif', '1', '1597232766', '2020-08-13 04:18:29', '2020-08-12 11:46:06', '2020-08-12 11:46:06', 'dd', '9090 8978 8788', ' ', 5),
(115, 4, 3, 11, 32, 17, 52, 'Kishan', 'kishan.v.1702@gmail.com', '121,pramukhpark soc.,chhaparabhatha road,amroli,surat-07', '9408227225', 5, '2000-02-17', 'B+', 'BCA', '1597291957_download.jfif', '1', '1597291957', '2020-08-13 04:34:43', '2020-08-13 04:12:37', '2020-08-13 04:12:37', 'Dharmesh', '9826 3025 3534', ' ', 5),
(116, 4, 3, 11, 32, 17, 53, 'kishan', 'kishan.v.1702@gmail.com', '121,pramukh park soc.,amroli,surat-07', '9408227225', 5, '2000-02-17', 'B+', 'BCA', '1597293125_download.jfif', '1', '1597293125', '2020-08-13 04:34:43', '2020-08-13 04:32:05', '2020-08-13 04:32:05', 'Dharmesh', '9090 8978 8788', ' ', 2);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(200) NOT NULL,
  `user_id` int(200) NOT NULL,
  `slot_register_id` int(200) NOT NULL,
  `pay_charge` int(200) NOT NULL,
  `card_no` varchar(200) NOT NULL,
  `cvv` int(200) NOT NULL,
  `exp_year` varchar(100) NOT NULL,
  `exp_month` varchar(100) NOT NULL,
  `status` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `user_id`, `slot_register_id`, `pay_charge`, `card_no`, `cvv`, `exp_year`, `exp_month`, `status`) VALUES
(1, 26, 46, 50, '2147483647', 123, '2025', '0000-00-00', 0),
(2, 24, 47, 50, '2147483647', 123, '2025', '0000-00-00', 0),
(3, 27, 48, 50, '2147483647', 123, '2025', '0000-00-00', 0),
(4, 27, 51, 50, '2147483647', 123, '2025', '0000-00-00', 0),
(6, 27, 53, 50, '42424242', 123, '25', '12', 0),
(7, 25, 54, 50, '12012011201', 613, '24', '03', 0),
(8, 28, 55, 50, '258425962134', 581, '2025', '03', 0),
(9, 28, 56, 50, '521478956324', 581, '2027', '05', 0),
(10, 29, 57, 50, '3232323232323232', 125, '25', '12', 0),
(11, 29, 58, 50, '3232323232323232', 231, '25', '11', 0),
(12, 29, 59, 50, '2121212121212121', 255, '25', '11', 0),
(13, 30, 60, 50, '2525252525252525', 256, '23', '12', 0),
(14, 30, 61, 50, '12122121212121', 212, '23', '12', 0),
(15, 31, 62, 50, '1234 1236 1235 1245', 256, '23', '12', 0),
(16, 31, 63, 50, '2154 5236 4125 4521', 235, '25', '12', 0),
(17, 32, 64, 50, '1234 1245 1242 1234', 256, '25', '12', 0),
(18, 32, 65, 50, '234512345678', 147, '25', '10', 0),
(19, 32, 66, 50, '234567890134', 456, '25', '09', 0),
(20, 33, 67, 50, '216516541656', 412, '24', '12', 0),
(21, 33, 68, 50, '878787878787', 201, '24', '12', 0),
(26, 34, 72, 100, '4242424242424242', 0, '30', '11', 0),
(27, 34, 73, 100, '4242424242424242', 0, '28', '09', 0),
(28, 34, 74, 100, '4242424242424242', 0, '29', '10', 0),
(29, 35, 75, 100, '4242424242424242', 0, '29', '11', 0),
(30, 35, 76, 100, '4242424242424242', 0, '27', '08', 0),
(31, 36, 77, 100, '4242424242424242', 0, '30', '01', 0),
(32, 37, 78, 100, '4242424242424242', 0, '29', '01', 0),
(33, 38, 86, 100, '4242424242424242', 0, '29', '01', 0),
(34, 40, 88, 100, '4242424242424242', 0, '29', '01', 0),
(35, 40, 89, 100, '4242424242424242', 0, '29', '12', 0),
(36, 40, 90, 100, '4242424242424242', 0, '29', '01', 0),
(37, 40, 91, 100, '4242424242424242', 0, '28', '01', 0),
(38, 41, 92, 100, '4242424242424242', 0, '29', '01', 0),
(39, 41, 93, 100, '4242424242424242', 0, '29', '01', 0),
(40, 42, 94, 100, '4242424242424242', 0, '27', '12', 0),
(41, 42, 95, 100, '4242424242424242', 0, '29', '01', 0),
(42, 33, 96, 100, '4242424242424242', 0, '28', '01', 0),
(43, 43, 99, 100, '4242424242424242', 0, '28', '01', 0),
(44, 44, 100, 100, '4242424242424242', 0, '26', '01', 0),
(45, 44, 101, 100, '4242424242424242', 0, '26', '11', 0),
(46, 45, 102, 100, '4242424242424242', 0, '25', '01', 0),
(47, 45, 103, 100, '4242424242424242', 0, '25', '01', 0),
(48, 45, 104, 100, '4242424242424242', 0, '22', '03', 0),
(49, 45, 105, 100, '4242424242424242', 0, '23', '04', 0),
(50, 45, 106, 100, '4242424242424242', 0, '25', '01', 0),
(51, 45, 107, 100, '4242424242424242', 0, '23', '01', 0),
(52, 46, 108, 100, '4242424242424242', 0, '26', '10', 0),
(53, 46, 109, 100, '4242424242424242', 0, '27', '09', 0),
(54, 46, 110, 100, '4242424242424242', 0, '29', '10', 0),
(55, 46, 111, 100, '4242424242424242', 0, '27', '01', 0),
(56, 48, 112, 100, '4242424242424242', 0, '25', '01', 0),
(57, 49, 113, 100, '4242424242424242', 0, '25', '01', 0),
(58, 50, 114, 100, '4242424242424242', 0, '27', '12', 0),
(59, 52, 115, 100, '4242424242424242', 0, '23', '06', 0),
(60, 53, 116, 100, '4242424242424242', 0, '22', '01', 0);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(10) NOT NULL,
  `post_category_id` int(10) NOT NULL,
  `post_subcategory_id` int(10) NOT NULL,
  `post_title` varchar(300) NOT NULL,
  `post_type` varchar(300) NOT NULL,
  `post_description` varchar(300) NOT NULL,
  `admin_id` int(10) NOT NULL,
  `status` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `post_category_id`, `post_subcategory_id`, `post_title`, `post_type`, `post_description`, `admin_id`, `status`) VALUES
(17, 4, 3, 'abc', 'News', 'poiuygfdxcvhjk', 0, 1),
(18, 5, 4, 'zyx', 'Event', 'poiuytresxcghjk', 0, 1),
(19, 4, 3, 'Abc', 'Rules', 'popstsgHB', 0, 0),
(20, 0, 0, '', '', '', 0, 0),
(21, 4, 3, 'news', 'News', 'hgjhghgkhkkfk', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `post_image`
--

CREATE TABLE `post_image` (
  `post_image_id` int(10) NOT NULL,
  `post_id` int(10) NOT NULL,
  `post_image_path` varchar(300) NOT NULL,
  `status` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post_image`
--

INSERT INTO `post_image` (`post_image_id`, `post_id`, `post_image_path`, `status`) VALUES
(1, 15, '1580215277_1579696566_B&G-2.jpg', 0),
(2, 15, '1580215277_even.jpeg', 0),
(3, 16, '1580298539_1577774782_income.jpeg', 0),
(4, 16, '1580298539_1579610479_IMG_3538.JPG', 0),
(5, 17, '1582798613_', 0),
(6, 18, '1582798635_', 0),
(7, 19, '1583989977_20181105_124239.jpg', 0),
(8, 19, '1583989977_1564115629250.jpg', 0),
(9, 21, '1592139563_download.jfif', 0);

-- --------------------------------------------------------

--
-- Table structure for table `proof`
--

CREATE TABLE `proof` (
  `proof_id` int(10) NOT NULL,
  `proof_name` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `proof`
--

INSERT INTO `proof` (`proof_id`, `proof_name`) VALUES
(1, 'Aadhar Card'),
(2, 'Light Bill');

-- --------------------------------------------------------

--
-- Table structure for table `proof_image`
--

CREATE TABLE `proof_image` (
  `proof_image_id` int(200) NOT NULL,
  `licence_register_id` int(200) NOT NULL,
  `proof_image_path` varchar(200) NOT NULL,
  `status` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `proof_image`
--

INSERT INTO `proof_image` (`proof_image_id`, `licence_register_id`, `proof_image_path`, `status`) VALUES
(1, 21, '1583991158_20181105_124230.jpg', 0),
(2, 21, '1583991158_1564115629250.jpg', 0),
(3, 22, '1583991330_20181105_124230.jpg', 0),
(4, 22, '1583991330_1564115629250.jpg', 0),
(5, 23, '1583992244_20181105_124230.jpg', 0),
(6, 23, '1583992244_20181105_124239.jpg', 0),
(7, 23, '1583992244_1564115629250.jpg', 0),
(8, 24, '1583992747_BCA Practical Exam Certificate.jpg', 0),
(9, 24, '1583992747_BCA Practical Exam Index.jpg', 0),
(10, 25, '1584357475_1564115629250.jpg', 0),
(11, 25, '1584357475_Ganesh.png', 0),
(12, 26, '1584359493_20181105_124239.jpg', 0),
(13, 26, '1584359493_1564115629250.jpg', 0),
(14, 27, '1584427927_BCA Practical Exam Index.jpg', 0),
(15, 27, '1584427927_Ganesh.png', 0),
(16, 28, '1584430490_Ganesh.png', 0),
(17, 29, '1584438210_Ganesh.png', 0),
(18, 30, '1584438404_Ganesh.png', 0),
(19, 31, '1584438531_BCA Practical Exam Certificate.jpg', 0),
(20, 32, '1584439841_Ganesh.png', 0),
(21, 33, '1585207238_4 - Copy (2).jpg', 0),
(22, 33, '1585207238_4 - Copy.jpg', 0),
(23, 34, '1585547605_4 - Copy.jpg', 0),
(24, 34, '1585547605_4.jpg', 0),
(25, 35, '1585548291_4.jpg', 0),
(26, 36, '1585561686_1111.jpg', 0),
(27, 37, '1585562222_4 - Copy.jpg', 0),
(28, 37, '1585562222_4.jpg', 0),
(29, 38, '1585562764_4.jpg', 0),
(30, 39, '1585563452_4 - Copy (2).jpg', 0),
(31, 40, '1585572101_113.jpg', 0),
(32, 41, '1585572555_1 - Copy.jpg', 0),
(33, 42, '1585584480_6.jpg', 0),
(34, 43, '1585585713_5.jpg', 0),
(35, 44, '1585655777_4 - Copy.jpg', 0),
(36, 45, '1585658799_4 - Copy.jpg', 0),
(37, 46, '1585659877_1111.jpg', 0),
(38, 47, '1587650554_3.jpg', 0),
(39, 48, '1587651737_4 - Copy (2).jpg', 0),
(40, 49, '1587651980_3 - Copy.jpg', 0),
(41, 50, '1587652069_3 - Copy.jpg', 0),
(42, 51, '1587652285_3 - Copy.jpg', 0),
(43, 54, '1592130926_download.jfif', 0),
(44, 54, '1592130926_images.jfif', 0),
(45, 55, '1592131284_download (1).jfif', 0),
(46, 55, '1592131284_images.jfif', 0),
(47, 56, '1592132446_', 0),
(48, 57, '1592134509_download.jfif', 0),
(49, 57, '1592134509_images.jfif', 0),
(50, 58, '1592135578_download (1).jfif', 0),
(51, 58, '1592135578_download.jfif', 0),
(52, 59, '1592136671_download.jfif', 0),
(53, 59, '1592136671_images.jfif', 0),
(54, 60, '1592137351_download.jfif', 0),
(55, 60, '1592137351_images.jfif', 0),
(56, 61, '1592138136_download.jfif', 0),
(57, 61, '1592138136_images.jfif', 0),
(58, 62, '1592142339_download.jfif', 0),
(59, 62, '1592142339_images.jfif', 0),
(60, 63, '1592142578_download (1).jfif', 0),
(61, 63, '1592142578_download.jfif', 0),
(62, 64, '1592143156_download.jfif', 0),
(63, 64, '1592143156_images.jfif', 0),
(64, 65, '1592143470_download.jfif', 0),
(65, 65, '1592143470_images.jfif', 0),
(66, 66, '1592143673_download.jfif', 0),
(67, 66, '1592143673_images.jfif', 0),
(68, 67, '1592219929_download (1).jfif', 0),
(69, 67, '1592219929_download.jfif', 0),
(70, 68, '1592221468_download.jfif', 0),
(71, 68, '1592221468_images.jfif', 0),
(72, 69, '1592379415_download.jfif', 0),
(73, 70, '1593511343_2admin.png', 0),
(74, 71, '1593511663_2admin.png', 0),
(75, 72, '1593512109_2admin.png', 0),
(76, 73, '1593513466_2admin.png', 0),
(77, 74, '1593514718_2admin.png', 0),
(78, 75, '1593515168_download (1).jfif', 0),
(79, 76, '1593515276_download (1).jfif', 0),
(80, 77, '1593519663_download (1).jfif', 0),
(81, 77, '1593519663_download.jfif', 0),
(82, 78, '1593582557_download (1).jfif', 0),
(83, 78, '1593582557_download.jfif', 0),
(84, 86, '1593584328_2admin.png', 0),
(85, 87, '1593585725_', 0),
(86, 88, '1593585856_download (1).jfif', 0),
(87, 88, '1593585856_download.jfif', 0),
(88, 89, '1593586425_download (1).jfif', 0),
(89, 89, '1593586425_download.jfif', 0),
(90, 90, '1593588366_download (1).jfif', 0),
(91, 90, '1593588366_download.jfif', 0),
(92, 91, '1593591101_download (1).jfif', 0),
(93, 91, '1593591101_download.jfif', 0),
(94, 92, '1593605675_download (1).jfif', 0),
(95, 92, '1593605675_download.jfif', 0),
(96, 93, '1593606036_', 0),
(97, 94, '1593606319_download (1).jfif', 0),
(98, 94, '1593606319_download.jfif', 0),
(99, 95, '1593616814_download (1).jfif', 0),
(100, 96, '1593617715_download.jfif', 0),
(101, 97, '1593626331_', 0),
(102, 98, '1593626541_', 0),
(103, 99, '1593663223_download (1).jfif', 0),
(104, 99, '1593663223_download.jfif', 0),
(105, 100, '1593667880_download (1).jfif', 0),
(106, 100, '1593667880_download.jfif', 0),
(107, 101, '1593668267_download (1).jfif', 0),
(108, 101, '1593668267_download.jfif', 0),
(109, 102, '1597217075_download (1).jfif', 0),
(110, 102, '1597217075_download.jfif', 0),
(111, 103, '1597217325_download (1).jfif', 0),
(112, 103, '1597217325_download.jfif', 0),
(113, 104, '1597220234_download (1).jfif', 0),
(114, 104, '1597220234_download.jfif', 0),
(115, 105, '1597221158_download (1).jfif', 0),
(116, 105, '1597221158_download.jfif', 0),
(117, 106, '1597222996_download.jfif', 0),
(118, 107, '1597223413_2admin.png', 0),
(119, 107, '1597223413_download.jfif', 0),
(120, 108, '1597223761_2admin.png', 0),
(121, 108, '1597223761_download (1).jfif', 0),
(122, 109, '1597223895_download.jfif', 0),
(123, 110, '1597224457_2admin.png', 0),
(124, 110, '1597224457_download (1).jfif', 0),
(125, 111, '1597226376_download.jfif', 0),
(126, 111, '1597226376_images.jfif', 0),
(127, 112, '1597226983_download (1).jfif', 0),
(128, 112, '1597226983_download.jfif', 0),
(129, 113, '1597229399_download.jfif', 0),
(130, 114, '1597232766_download (1).jfif', 0),
(131, 114, '1597232766_download.jfif', 0),
(132, 115, '1597291957_download (1).jfif', 0),
(133, 115, '1597291957_download.jfif', 0),
(134, 116, '1597293125_download (1).jfif', 0),
(135, 116, '1597293125_download.jfif', 0);

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `result_id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `question_id` int(20) NOT NULL,
  `result_category_id` int(10) NOT NULL,
  `result_subcategory_id` int(10) NOT NULL,
  `ans` varchar(200) NOT NULL,
  `ans_result` int(100) NOT NULL,
  `result_exam_id` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`result_id`, `user_id`, `question_id`, `result_category_id`, `result_subcategory_id`, `ans`, `ans_result`, `result_exam_id`, `date`, `status`) VALUES
(161, 24, 38, 0, 0, 'd', 0, 41, '2020-03-30 12:58:45', 0),
(162, 24, 39, 0, 0, 'd', 0, 41, '2020-03-30 12:58:45', 0),
(163, 24, 40, 0, 0, 'd', 0, 41, '2020-03-30 12:58:45', 0),
(164, 24, 41, 0, 0, 'd', 0, 41, '2020-03-30 12:58:45', 0),
(165, 24, 42, 0, 0, 'd', 1, 41, '2020-03-30 12:58:45', 0),
(166, 24, 38, 0, 0, 'd', 0, 41, '2020-03-30 13:01:05', 0),
(167, 24, 39, 0, 0, 'd', 0, 41, '2020-03-30 13:01:05', 0),
(168, 24, 40, 0, 0, 'd', 0, 41, '2020-03-30 13:01:05', 0),
(169, 24, 41, 0, 0, 'd', 0, 41, '2020-03-30 13:01:06', 0),
(170, 24, 42, 0, 0, 'd', 1, 41, '2020-03-30 13:01:06', 0),
(171, 25, 38, 4, 3, 'a', 0, 41, '2020-03-30 16:27:12', 0),
(172, 25, 39, 4, 3, 'a', 0, 41, '2020-03-30 16:27:13', 0),
(173, 25, 40, 4, 3, 'a', 1, 41, '2020-03-30 16:27:13', 0),
(174, 25, 41, 4, 3, 'a', 0, 41, '2020-03-30 16:27:13', 0),
(175, 25, 42, 4, 3, 'a', 0, 41, '2020-03-30 16:27:13', 0),
(176, 25, 38, 4, 4, 'c', 1, 41, '2020-03-30 16:31:57', 0),
(177, 25, 39, 4, 4, 'c', 1, 41, '2020-03-30 16:31:57', 0),
(178, 25, 40, 4, 4, 'a', 1, 41, '2020-03-30 16:31:57', 0),
(179, 25, 41, 4, 4, 'c', 1, 41, '2020-03-30 16:31:57', 0),
(180, 25, 42, 4, 4, 'd', 1, 41, '2020-03-30 16:31:57', 0),
(181, 25, 38, 4, 3, 'c', 1, 41, '2020-03-31 12:00:14', 0),
(182, 25, 39, 4, 3, 'c', 1, 41, '2020-03-31 12:00:14', 0),
(183, 25, 40, 4, 3, 'a', 1, 41, '2020-03-31 12:00:14', 0),
(184, 25, 41, 4, 3, 'c', 1, 41, '2020-03-31 12:00:14', 0),
(185, 25, 42, 4, 3, 'd', 1, 41, '2020-03-31 12:00:14', 0),
(186, 29, 27, 4, 3, 'a', 0, 39, '2020-06-14 11:37:49', 0),
(187, 29, 28, 4, 3, 'b', 0, 39, '2020-06-14 11:37:49', 0),
(188, 29, 29, 4, 3, 'a', 0, 39, '2020-06-14 11:37:49', 0),
(189, 29, 30, 4, 3, 'c', 0, 39, '2020-06-14 11:37:49', 0),
(190, 29, 31, 4, 3, 'a', 0, 39, '2020-06-14 11:37:49', 0),
(191, 29, 32, 4, 3, 'b', 0, 39, '2020-06-14 11:37:49', 0),
(192, 30, 27, 4, 3, 'd', 1, 39, '2020-06-14 12:29:26', 0),
(193, 30, 28, 4, 3, 'a', 1, 39, '2020-06-14 12:29:26', 0),
(194, 30, 29, 4, 3, 'd', 1, 39, '2020-06-14 12:29:26', 0),
(195, 30, 30, 4, 3, 'a', 1, 39, '2020-06-14 12:29:26', 0),
(196, 30, 31, 4, 3, 'd', 1, 39, '2020-06-14 12:29:26', 0),
(197, 30, 32, 4, 3, 'a', 0, 39, '2020-06-14 12:29:26', 0),
(198, 30, 33, 4, 4, 'a', 0, 40, '2020-06-14 12:38:14', 0),
(199, 30, 34, 4, 4, 'a', 0, 40, '2020-06-14 12:38:14', 0),
(200, 30, 35, 4, 4, 'a', 1, 40, '2020-06-14 12:38:14', 0),
(201, 30, 36, 4, 4, 'b', 0, 40, '2020-06-14 12:38:14', 0),
(202, 30, 37, 4, 4, 'b', 0, 40, '2020-06-14 12:38:14', 0),
(203, 31, 15, 4, 3, 'a', 0, 36, '2020-06-14 13:48:47', 0),
(204, 31, 16, 4, 3, 'b', 0, 36, '2020-06-14 13:48:47', 0),
(205, 31, 17, 4, 3, 'b', 1, 36, '2020-06-14 13:48:47', 0),
(206, 31, 18, 4, 3, 'b', 1, 36, '2020-06-14 13:48:47', 0),
(207, 31, 19, 4, 3, 'a', 0, 36, '2020-06-14 13:48:47', 0),
(208, 31, 15, 4, 4, 'b', 1, 36, '2020-06-14 13:52:49', 0),
(209, 31, 16, 4, 4, 'c', 1, 36, '2020-06-14 13:52:49', 0),
(210, 31, 17, 4, 4, 'b', 1, 36, '2020-06-14 13:52:49', 0),
(211, 31, 18, 4, 4, 'b', 1, 36, '2020-06-14 13:52:49', 0),
(212, 31, 19, 4, 4, 'c', 1, 36, '2020-06-14 13:52:49', 0),
(213, 31, 33, 4, 4, 'c', 1, 40, '2020-06-14 13:54:36', 0),
(214, 31, 34, 4, 4, 'c', 1, 40, '2020-06-14 13:54:36', 0),
(215, 31, 35, 4, 4, 'a', 1, 40, '2020-06-14 13:54:36', 0),
(216, 31, 36, 4, 4, 'c', 1, 40, '2020-06-14 13:54:36', 0),
(217, 31, 37, 4, 4, 'd', 1, 40, '2020-06-14 13:54:36', 0),
(218, 32, 33, 4, 3, 'c', 1, 40, '2020-06-14 14:02:13', 0),
(219, 32, 34, 4, 3, 'c', 1, 40, '2020-06-14 14:02:13', 0),
(220, 32, 35, 4, 3, 'a', 1, 40, '2020-06-14 14:02:13', 0),
(221, 32, 36, 4, 3, 'c', 1, 40, '2020-06-14 14:02:13', 0),
(222, 32, 37, 4, 3, 'd', 1, 40, '2020-06-14 14:02:13', 0),
(223, 34, 47, 4, 4, 'b', 1, 43, '2020-06-30 10:21:13', 0),
(224, 34, 48, 4, 4, 'b', 1, 43, '2020-06-30 10:21:13', 0),
(225, 34, 49, 4, 4, 'b', 1, 43, '2020-06-30 10:21:13', 0),
(226, 34, 50, 4, 4, 'b', 1, 43, '2020-06-30 10:21:13', 0),
(227, 34, 51, 4, 4, 'b', 1, 43, '2020-06-30 10:21:13', 0),
(228, 34, 52, 4, 4, 'b', 1, 43, '2020-06-30 10:21:13', 0),
(229, 34, 53, 4, 4, 'c', 0, 43, '2020-06-30 10:21:13', 0),
(230, 34, 54, 4, 4, 'c', 1, 43, '2020-06-30 10:21:13', 0),
(231, 34, 55, 4, 4, 'c', 0, 43, '2020-06-30 10:21:13', 0),
(232, 34, 56, 4, 4, 'c', 0, 43, '2020-06-30 10:21:13', 0),
(233, 34, 47, 4, 4, 'b', 1, 43, '2020-06-30 10:45:09', 0),
(234, 34, 48, 4, 4, 'b', 1, 43, '2020-06-30 10:45:09', 0),
(235, 34, 49, 4, 4, 'b', 1, 43, '2020-06-30 10:45:09', 0),
(236, 34, 50, 4, 4, 'b', 1, 43, '2020-06-30 10:45:09', 0),
(237, 34, 51, 4, 4, 'b', 1, 43, '2020-06-30 10:45:09', 0),
(238, 34, 52, 4, 4, 'b', 1, 43, '2020-06-30 10:45:09', 0),
(239, 34, 53, 4, 4, 'c', 0, 43, '2020-06-30 10:45:09', 0),
(240, 34, 54, 4, 4, 'c', 1, 43, '2020-06-30 10:45:09', 0),
(241, 34, 55, 4, 4, 'c', 0, 43, '2020-06-30 10:45:09', 0),
(242, 34, 56, 4, 4, 'd', 0, 43, '2020-06-30 10:45:09', 0),
(243, 35, 47, 4, 3, 'a', 0, 43, '2020-06-30 11:19:12', 0),
(244, 35, 48, 4, 3, 'a', 0, 43, '2020-06-30 11:19:12', 0),
(245, 35, 49, 4, 3, 'a', 0, 43, '2020-06-30 11:19:12', 0),
(246, 35, 50, 4, 3, 'a', 0, 43, '2020-06-30 11:19:12', 0),
(247, 35, 51, 4, 3, 'a', 0, 43, '2020-06-30 11:19:12', 0),
(248, 35, 52, 4, 3, '', 0, 43, '2020-06-30 11:19:12', 0),
(249, 35, 53, 4, 3, 'a', 0, 43, '2020-06-30 11:19:12', 0),
(250, 35, 54, 4, 3, 'a', 0, 43, '2020-06-30 11:19:12', 0),
(251, 35, 55, 4, 3, 'a', 0, 43, '2020-06-30 11:19:12', 0),
(252, 35, 56, 4, 3, 'a', 1, 43, '2020-06-30 11:19:12', 0),
(253, 44, 60, 4, 3, 'c', 1, 45, '2020-07-02 05:35:39', 0),
(254, 44, 61, 4, 3, 'd', 1, 45, '2020-07-02 05:35:39', 0),
(255, 44, 62, 4, 3, 'd', 1, 45, '2020-07-02 05:35:39', 0),
(256, 44, 63, 4, 3, 'a', 1, 45, '2020-07-02 05:35:39', 0),
(257, 44, 64, 4, 3, 'd', 1, 45, '2020-07-02 05:35:39', 0),
(258, 44, 65, 4, 3, 'a', 1, 45, '2020-07-02 05:35:39', 0),
(259, 44, 66, 4, 3, 'd', 1, 45, '2020-07-02 05:35:39', 0),
(260, 44, 67, 4, 3, 'b', 1, 45, '2020-07-02 05:35:39', 0),
(261, 44, 68, 4, 3, 'a', 1, 45, '2020-07-02 05:35:39', 0),
(262, 44, 69, 4, 3, 'c', 1, 45, '2020-07-02 05:35:39', 0),
(263, 45, 60, 4, 3, 'c', 1, 45, '2020-08-12 08:42:35', 0),
(264, 45, 61, 4, 3, 'd', 1, 45, '2020-08-12 08:42:35', 0),
(265, 45, 62, 4, 3, 'd', 1, 45, '2020-08-12 08:42:35', 0),
(266, 45, 63, 4, 3, 'a', 1, 45, '2020-08-12 08:42:35', 0),
(267, 45, 64, 4, 3, 'd', 1, 45, '2020-08-12 08:42:35', 0),
(268, 45, 65, 4, 3, 'a', 1, 45, '2020-08-12 08:42:35', 0),
(269, 45, 66, 4, 3, 'd', 1, 45, '2020-08-12 08:42:35', 0),
(270, 45, 67, 4, 3, 'b', 1, 45, '2020-08-12 08:42:35', 0),
(271, 45, 68, 4, 3, 'a', 1, 45, '2020-08-12 08:42:35', 0),
(272, 45, 69, 4, 3, 'c', 1, 45, '2020-08-12 08:42:35', 0),
(273, 46, 60, 4, 3, 'c', 1, 45, '2020-08-12 09:33:31', 0),
(274, 46, 61, 4, 3, 'd', 1, 45, '2020-08-12 09:33:31', 0),
(275, 46, 62, 4, 3, 'd', 1, 45, '2020-08-12 09:33:31', 0),
(276, 46, 63, 4, 3, 'a', 1, 45, '2020-08-12 09:33:31', 0),
(277, 46, 64, 4, 3, 'c', 0, 45, '2020-08-12 09:33:31', 0),
(278, 46, 65, 4, 3, 'd', 0, 45, '2020-08-12 09:33:31', 0),
(279, 46, 66, 4, 3, 'a', 0, 45, '2020-08-12 09:33:31', 0),
(280, 46, 67, 4, 3, 'b', 1, 45, '2020-08-12 09:33:31', 0),
(281, 46, 68, 4, 3, 'a', 1, 45, '2020-08-12 09:33:31', 0),
(282, 46, 69, 4, 3, 'c', 1, 45, '2020-08-12 09:33:31', 0),
(283, 46, 60, 4, 3, 'c', 1, 45, '2020-08-12 09:34:39', 0),
(284, 46, 61, 4, 3, 'd', 1, 45, '2020-08-12 09:34:39', 0),
(285, 46, 62, 4, 3, 'd', 1, 45, '2020-08-12 09:34:39', 0),
(286, 46, 63, 4, 3, 'a', 1, 45, '2020-08-12 09:34:39', 0),
(287, 46, 64, 4, 3, 'c', 0, 45, '2020-08-12 09:34:39', 0),
(288, 46, 65, 4, 3, 'd', 0, 45, '2020-08-12 09:34:39', 0),
(289, 46, 66, 4, 3, 'c', 0, 45, '2020-08-12 09:34:39', 0),
(290, 46, 67, 4, 3, 'b', 1, 45, '2020-08-12 09:34:39', 0),
(291, 46, 68, 4, 3, 'a', 1, 45, '2020-08-12 09:34:39', 0),
(292, 46, 69, 4, 3, 'c', 1, 45, '2020-08-12 09:34:39', 0),
(293, 46, 60, 4, 3, 'c', 1, 45, '2020-08-12 09:34:53', 0),
(294, 46, 61, 4, 3, 'd', 1, 45, '2020-08-12 09:34:53', 0),
(295, 46, 62, 4, 3, 'd', 1, 45, '2020-08-12 09:34:53', 0),
(296, 46, 63, 4, 3, 'a', 1, 45, '2020-08-12 09:34:53', 0),
(297, 46, 64, 4, 3, 'c', 0, 45, '2020-08-12 09:34:53', 0),
(298, 46, 65, 4, 3, 'd', 0, 45, '2020-08-12 09:34:53', 0),
(299, 46, 66, 4, 3, 'c', 0, 45, '2020-08-12 09:34:53', 0),
(300, 46, 67, 4, 3, 'b', 1, 45, '2020-08-12 09:34:53', 0),
(301, 46, 68, 4, 3, 'a', 1, 45, '2020-08-12 09:34:53', 0),
(302, 46, 69, 4, 3, 'c', 1, 45, '2020-08-12 09:34:53', 0),
(303, 50, 70, 4, 3, 'd', 1, 46, '2020-08-12 11:48:39', 0),
(304, 50, 71, 4, 3, 'd', 1, 46, '2020-08-12 11:48:39', 0),
(305, 50, 72, 4, 3, 'd', 1, 46, '2020-08-12 11:48:39', 0),
(306, 50, 73, 4, 3, 'd', 1, 46, '2020-08-12 11:48:39', 0),
(307, 50, 74, 4, 3, 'd', 1, 46, '2020-08-12 11:48:39', 0),
(308, 52, 60, 4, 3, 'c', 1, 45, '2020-08-13 04:18:29', 0),
(309, 52, 61, 4, 3, 'd', 1, 45, '2020-08-13 04:18:29', 0),
(310, 52, 62, 4, 3, 'd', 1, 45, '2020-08-13 04:18:29', 0),
(311, 52, 63, 4, 3, 'a', 1, 45, '2020-08-13 04:18:29', 0),
(312, 52, 64, 4, 3, 'd', 1, 45, '2020-08-13 04:18:29', 0),
(313, 52, 65, 4, 3, 'a', 1, 45, '2020-08-13 04:18:29', 0),
(314, 52, 66, 4, 3, 'd', 1, 45, '2020-08-13 04:18:29', 0),
(315, 52, 67, 4, 3, 'b', 1, 45, '2020-08-13 04:18:29', 0),
(316, 52, 68, 4, 3, 'a', 1, 45, '2020-08-13 04:18:29', 0),
(317, 52, 69, 4, 3, 'c', 1, 45, '2020-08-13 04:18:29', 0),
(318, 53, 60, 4, 3, 'a', 0, 45, '2020-08-13 04:34:43', 0),
(319, 53, 61, 4, 3, 'c', 0, 45, '2020-08-13 04:34:43', 0),
(320, 53, 62, 4, 3, 'c', 0, 45, '2020-08-13 04:34:43', 0),
(321, 53, 63, 4, 3, 'b', 0, 45, '2020-08-13 04:34:43', 0),
(322, 53, 64, 4, 3, 'd', 1, 45, '2020-08-13 04:34:43', 0),
(323, 53, 65, 4, 3, 'd', 0, 45, '2020-08-13 04:34:43', 0),
(324, 53, 66, 4, 3, 'a', 0, 45, '2020-08-13 04:34:43', 0),
(325, 53, 67, 4, 3, 'd', 0, 45, '2020-08-13 04:34:43', 0),
(326, 53, 68, 4, 3, 'a', 1, 45, '2020-08-13 04:34:43', 0),
(327, 53, 69, 4, 3, 'c', 1, 45, '2020-08-13 04:34:43', 0);

-- --------------------------------------------------------

--
-- Table structure for table `rto_office`
--

CREATE TABLE `rto_office` (
  `office_id` int(10) NOT NULL,
  `office_state_id` int(10) NOT NULL,
  `office_city_id` int(10) NOT NULL,
  `office_area_id` int(10) NOT NULL,
  `office_address` varchar(200) NOT NULL,
  `image` varchar(300) NOT NULL,
  `status` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rto_office`
--

INSERT INTO `rto_office` (`office_id`, `office_state_id`, `office_city_id`, `office_area_id`, `office_address`, `image`, `status`) VALUES
(13, 11, 28, 24, 'RTO Office, Subhash Bridge, Sabarmati,Ahmedabad- 380027.\r\nEmail :rto-trans-ahd@gujarat.gov.in', '', 1),
(14, 11, 29, 25, 'RTO Office, Near Khari Nadi, Palavasna highway, Mehsana - 384002.\r\nEmail :rto-trans-meh@gujarat.gov.in', '', 1),
(15, 11, 30, 26, 'RTO Office, Near Market yard, Rajkot - 360001.\r\nEmail :rto-trans-raj@gujarat.gov.in', '', 1),
(16, 11, 31, 27, 'RTO Office, Dhanechi Vadla, Bhavnagar - 364003.\r\nEmail :rto-trans-bhv@gujarat.gov.in', '', 1),
(17, 11, 32, 28, 'RTO Office, Pal, Surat - 385001.\r\nEmail :rto-trans-sur@gujarat.gov.in', '', 1),
(18, 11, 33, 29, 'Nr.Golden Chokdi NH-8, Darjipura,\r\nVadodra - 390006.\r\nEmail :rto-trans-vad@gujarat.gov.in', '', 1),
(19, 11, 34, 30, 'Opposite Gov. Circuit house, Mile Road,\r\nNadiad-Kheda -387001.\r\nEmail :rto-trans-khe@gujarat.gov.in', '', 1),
(20, 11, 35, 31, 'RTO Office, Ambaji Road,\r\nPalanpur (Banaskatha) - 385001.\r\nEmail :rto-trans-pln@gujarat.gov.in', '', 1),
(21, 11, 36, 32, 'Savghadh vijapur bypass Road, Himatnagar,\r\nSabarkatha.\r\nEmail :rto-trans-hmt@gujarat.gov.in', '', 1),
(22, 11, 37, 33, 'Lal Bangla Compound,\r\nJamnagar - 388005.\r\nEmail :rto-trans-jmn@gujarat.gov.in', '', 1),
(24, 11, 38, 34, 'B/H -Dr Shubhash Academy,\r\nJunagadh - 362001.\r\nEmail :rto-trans-jun@gujarat.gov.in', '', 1),
(25, 11, 39, 35, 'Near Military Garison, Madhaper Road,\r\nBhuj - 370000.\r\nEmail :rto-trans-bhj@gujarat.gov.in', '', 1),
(26, 11, 40, 36, 'Multistore Building, Block-C, Ground floor,Kehrali Road, Surendranagar -363001.\r\nEmail :arto-trans-srn@gujarat.gov.in', '', 1),
(27, 11, 41, 37, 'ARTO Office, Second floor, M. S. Building,Rajmahel Compound. Amreli - 365001.\r\nEmail :arto-trans-amr@gujarat.gov.in', '', 1),
(28, 11, 42, 38, 'RTO Office, Atakpardi, Dharanpur Road,\r\nValsad - 369001.\r\nEmail :rto-trans-val@gujarat.gov.in', '', 1),
(29, 11, 43, 39, 'ARTO Office, Nandevan Chockdi,\r\nBharuch - 392001.\r\nEmail :arto-trans-brc@gujarat.gov.in', '', 1),
(30, 11, 44, 40, 'ARTO Office, Near Commerce College,\r\nGodhra -389001.\r\nEmail :rto-trans-gdr@gujarat.gov.in', '', 1),
(31, 11, 45, 41, 'ARTO Office, Sec-3A, Near G0 Circle, Gandhinagar.\r\nEmail :arto-trans-gnr@gujarat.gov.in', '', 1),
(32, 11, 46, 42, 'ARTO Office, Opposite Power House, Octroy Naka,Bardoli -344601. Dis: Surat.\r\nEmail :arto-trans-brd@gujarat.gov.in\r\n', '', 1),
(33, 11, 47, 43, 'ARTO Office, Dharbada Chockdi, Highway bypass,Dahod -389051.\r\nEmail :arto-trans-dhd@gujarat.gov.in', '', 1),
(34, 11, 48, 44, 'ARTO Office, Italva, Navsari -396445.\r\nEmail :arto-trans-nvs@gujarat.gov.in', '', 1),
(35, 11, 49, 45, 'ARTO Office, Sevasadan Office, Collector Office Building,R No.-13/14, DIS: Narmada - 393145.\r\nEmail :arto-trans-rjp@gujarat.gov.ina', '', 1),
(36, 11, 50, 46, 'ARTO Office, Sevasadan Ground, D.S.P. Office,\r\nBorsad Chokdi, Anand -388001.\r\nEmail :arto-trans-and@gujarat.gov.in', '', 1),
(37, 11, 51, 47, 'ARTO Office, GIDC Astet Building, No-3,Near Navjivan Hotel, Sidhpur Cross Road,\r\nPatan - 384265.\r\nEmail :arto-trans-ptn@gujarat.gov.in', '', 1),
(38, 11, 52, 48, 'ARTO Office, Opposite D. S. P. Office, New Kuvara, Vadia Road, Porbandar - 360575.\r\nEmail :arto-trans-por@gujarat.gov.in', '', 1),
(39, 11, 53, 49, 'ARTO Office, Japanish Farm, Panvadi, Bhenskatri Road, Vyara.\r\nEmail :arto-trans-vyr@gujarat.gov.in', '', 1),
(41, 11, 55, 50, 'ARTO Office, Aahwa, District: Surat.\r\nEmail :arto-trans-dng@gujarat.gov.in', '', 1),
(42, 11, 56, 51, 'ARTO Office, Shah Mukundadasa Vithaldas, Public Pharmacy College, Shamlaji Modasa highway, Modasa.\r\nEmail :arto-trans-arv@gujarat.gov.in', '', 1),
(43, 11, 57, 52, 'ARTO Office, R & B building, Veraval.\r\nEmail :arto-trans-grs@gujarat.gov.in', '', 1),
(44, 11, 58, 53, 'ARTO Office, Government colony, D Colony,Old Province Office,Botad police in front of the parade ground,Pura Road, Botad.\r\nEmail :arto-trans-btd@gujarat.gov.in', '', 1),
(45, 11, 59, 54, 'ARTO Office, Fatehpura Road, Choota Udepur, Dist: Chhota Udepur-391165.\r\nEmail :arto-trans-chu@gujarat.gov.in', '', 1),
(46, 11, 60, 55, 'ARTO Office,Bhadar Canal Colony, Opp: Lunawada Bus Stand, Lunawada, Dist: Mahisagar-389230.\r\nEmail :arto-trans-mhs@gujarat.gov.in', '', 1),
(47, 11, 61, 56, 'ARTO Office, Old Toll Naka Building, Opp: Uma Resort, Morbi Maliya Bypass, Morbi-363642.\r\nEmail :arto-trans-mrb@gujarat.gov.in', '', 1),
(48, 11, 62, 57, 'ARTO Office, Opp: New ITI Jamnagar Highway, Khambhaliya-361305.\r\nEmail :arto-trans-dbd@gujarat.gov.in', '', 1),
(49, 11, 63, 58, 'ARTO Office, Amrutbaug, Nr. Swaminarayan Gate, Bavla, Dist: Ahmedabad.\r\nEmail :artor-trans-ahd@gujarat.gov.in', '', 1),
(50, 15, 64, 59, 'TEST BHOPAL', '2admin.png', 0),
(51, 0, -1, 0, 'a', '', 0),
(52, 18, 67, 69, 'abc road', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `slot`
--

CREATE TABLE `slot` (
  `slot_id` int(200) NOT NULL,
  `slot_time` varchar(20) NOT NULL,
  `status` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slot`
--

INSERT INTO `slot` (`slot_id`, `slot_time`, `status`) VALUES
(12, '10:00 - 11:00', 1),
(13, '11:00 - 12:00', 1),
(14, '12:00 - 13:00', 1),
(15, '13:00 - 14:00', 1),
(16, '14:00 - 15:30', 1);

-- --------------------------------------------------------

--
-- Table structure for table `slot_book`
--

CREATE TABLE `slot_book` (
  `slot_book_id` int(200) NOT NULL,
  `book_user_id` int(200) NOT NULL,
  `book_register_id` int(10) NOT NULL,
  `book_schedule_id` int(200) NOT NULL,
  `book_state_id` int(200) NOT NULL,
  `book_city_id` int(200) NOT NULL,
  `book_office_id` int(200) NOT NULL,
  `book_category_id` int(10) NOT NULL,
  `book_subcategory_id` int(10) NOT NULL,
  `slot_no` int(200) NOT NULL,
  `slot_book_date` date NOT NULL,
  `status` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slot_book`
--

INSERT INTO `slot_book` (`slot_book_id`, `book_user_id`, `book_register_id`, `book_schedule_id`, `book_state_id`, `book_city_id`, `book_office_id`, `book_category_id`, `book_subcategory_id`, `slot_no`, `slot_book_date`, `status`) VALUES
(35, 24, 40, 5, 11, 23, 9, 4, 3, 12, '2020-02-28', 5),
(36, 24, 41, 5, 11, 23, 9, 4, 4, 13, '2020-02-29', 5),
(37, 25, 42, 5, 11, 23, 9, 4, 3, 16, '2020-02-28', 5),
(38, 25, 43, 5, 11, 23, 9, 4, 4, 13, '2020-02-29', 5),
(39, 25, 44, 5, 11, 23, 9, 4, 3, 14, '2020-02-29', 5),
(40, 26, 45, 5, 11, 23, 9, 4, 3, 16, '2020-04-02', 5),
(41, 26, 46, 5, 11, 23, 9, 4, 4, 15, '2020-05-06', 5),
(42, 27, 53, 5, 11, 23, 9, 4, 3, 14, '2020-06-15', 5),
(43, 25, 54, 5, 11, 23, 9, 4, 3, 15, '2020-06-17', 5),
(44, 25, 54, 5, 11, 23, 9, 4, 3, 15, '2020-06-17', 5),
(45, 28, 55, 5, 11, 23, 9, 4, 3, 12, '2020-06-21', 5),
(46, 28, 56, 5, 11, 23, 9, 4, 4, 12, '2020-06-15', 5),
(47, 29, 57, 5, 11, 23, 9, 4, 3, 13, '2020-06-15', 5),
(48, 29, 59, 5, 11, 23, 9, 4, 4, 14, '2020-06-15', 5),
(49, 30, 60, 5, 11, 23, 9, 4, 3, 13, '2020-06-15', 5),
(50, 30, 61, 5, 11, 23, 9, 4, 4, 12, '2020-06-18', 5),
(51, 31, 62, 5, 11, 23, 9, 4, 3, 13, '2020-06-16', 5),
(52, 31, 63, 5, 11, 23, 9, 4, 4, 12, '2020-06-17', 5),
(53, 32, 64, 5, 11, 23, 9, 4, 3, 13, '2020-06-20', 5),
(54, 33, 67, 5, 11, 23, 9, 4, 3, 14, '2020-06-16', 5),
(55, 33, 68, 5, 11, 23, 9, 4, 4, 14, '2020-06-16', 5),
(58, 34, 72, 6, 14, 26, 12, 4, 4, 14, '2020-07-01', 4),
(59, 34, 73, 6, 14, 26, 12, 4, 4, 13, '2020-07-03', 4),
(60, 35, 75, 6, 14, 26, 12, 4, 3, 14, '2020-07-01', 5),
(61, 35, 76, 6, 14, 26, 12, 4, 4, 15, '2020-07-01', 1),
(62, 36, 77, 6, 14, 26, 12, 4, 4, 12, '2020-07-02', 0),
(63, 37, 78, 6, 14, 26, 12, 4, 3, 12, '2020-07-02', 0),
(64, 38, 86, 6, 14, 26, 12, 4, 4, 13, '2020-07-01', 4),
(65, 40, 88, 6, 14, 26, 12, 4, 4, 12, '2020-07-02', 3),
(66, 40, 89, 6, 14, 26, 12, 4, 4, 12, '2020-07-02', 3),
(67, 40, 90, 6, 14, 26, 12, 4, 3, 12, '2020-07-04', 5),
(68, 40, 91, 6, 14, 26, 12, 4, 3, 12, '2020-07-06', 5),
(69, 41, 92, 0, 0, 0, 0, 4, 3, 12, '2020-07-03', 5),
(70, 41, 93, 0, 0, 0, 0, 4, 4, 12, '2020-07-04', 3),
(73, 33, 96, 7, 15, 64, 50, 4, 3, 12, '2020-07-03', 5),
(74, 43, 99, 0, 0, 0, 0, 4, 3, 12, '2020-07-04', 5),
(75, 43, 99, 8, 11, 32, 17, 4, 3, 12, '2020-07-04', 5),
(76, 44, 100, 8, 11, 32, 17, 4, 3, 12, '2020-07-04', 5),
(77, 44, 101, 8, 11, 32, 17, 4, 4, 12, '2020-07-06', 4),
(78, 45, 102, 8, 11, 32, 17, 4, 3, 13, '2020-08-13', 1),
(79, 45, 102, 8, 11, 32, 17, 4, 3, 13, '2020-08-12', 0),
(80, 45, 103, 8, 11, 32, 17, 4, 3, 13, '2020-08-13', 1),
(81, 45, 103, 8, 11, 32, 17, 4, 3, 14, '2020-08-13', 1),
(82, 45, 104, 8, 11, 32, 17, 4, 3, 12, '2020-08-14', 1),
(83, 45, 105, 8, 11, 32, 17, 4, 3, 12, '2020-08-16', 5),
(84, 45, 106, 8, 11, 32, 17, 4, 4, 12, '2020-08-13', 1),
(85, 45, 107, 0, 0, 0, 0, 4, 3, 12, '2020-08-13', 5),
(86, 46, 109, 8, 11, 32, 17, 4, 3, 12, '2020-08-14', 1),
(87, 46, 110, 8, 11, 32, 17, 4, 4, 12, '2020-08-14', 1),
(88, 46, 111, 8, 11, 32, 17, 4, 3, 13, '2020-08-13', 5),
(89, 48, 112, 8, 11, 32, 17, 4, 3, 13, '2020-08-13', 5),
(90, 49, 113, 8, 11, 32, 17, 4, 3, 12, '2020-08-13', 5),
(91, 50, 114, 8, 11, 32, 17, 4, 3, 12, '2020-08-15', 5),
(92, 52, 115, 8, 11, 32, 17, 4, 3, 12, '2020-08-17', 5),
(93, 53, 116, 8, 11, 32, 17, 4, 3, 12, '2020-08-14', 1);

-- --------------------------------------------------------

--
-- Table structure for table `slot_schedule`
--

CREATE TABLE `slot_schedule` (
  `slot_schedule_id` int(200) NOT NULL,
  `schedule_state_id` int(200) NOT NULL,
  `schedule_city_id` int(200) NOT NULL,
  `schedule_office_id` int(200) NOT NULL,
  `slot_start_date` date NOT NULL,
  `slot_end_date` date NOT NULL,
  `slot1` int(200) NOT NULL,
  `slot2` int(200) NOT NULL,
  `slot3` int(200) NOT NULL,
  `slot4` int(200) NOT NULL,
  `slot5` int(200) NOT NULL,
  `status` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slot_schedule`
--

INSERT INTO `slot_schedule` (`slot_schedule_id`, `schedule_state_id`, `schedule_city_id`, `schedule_office_id`, `slot_start_date`, `slot_end_date`, `slot1`, `slot2`, `slot3`, `slot4`, `slot5`, `status`) VALUES
(2, 0, 0, 0, '2020-02-21', '2020-02-29', 33, 44, 33, 44, 55, 1),
(3, 0, 0, 0, '2020-02-16', '2020-02-29', 12, 44, 33, 44, 55, 1),
(4, 0, 0, 0, '2020-02-01', '2020-03-01', 10, 10, 10, 10, 10, 1),
(5, 11, 23, 9, '2020-02-28', '2020-02-29', 10, 10, 10, 10, 10, 1),
(6, 14, 26, 12, '0000-00-00', '0000-00-00', 10, 10, 10, 10, 10, 1),
(7, 15, 64, 50, '0000-00-00', '0000-00-00', 10, 10, 10, 10, 10, 1),
(8, 11, 32, 17, '0000-00-00', '0000-00-00', 10, 10, 10, 10, 10, 1);

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `state_id` int(10) NOT NULL,
  `state_name` varchar(300) NOT NULL,
  `status` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`state_id`, `state_name`, `status`) VALUES
(11, 'Gujarat', 0),
(18, 'Maharashtra', 0),
(19, 'Uttar Pradesh', 0);

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `subcategory_id` int(10) NOT NULL,
  `sub_category_id` int(10) NOT NULL,
  `subcategory_name` varchar(300) NOT NULL,
  `status` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`subcategory_id`, `sub_category_id`, `subcategory_name`, `status`) VALUES
(3, 4, 'Learning Licence', 0),
(4, 4, 'Driving Licence', 0),
(5, 5, 'Transport', 0),
(6, 5, 'Non Transport', 0),
(7, 6, 'RC Book', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tutorial`
--

CREATE TABLE `tutorial` (
  `tutorial_id` int(10) NOT NULL,
  `tutorial_category_id` int(10) NOT NULL,
  `tutorial_subcategory_id` int(10) NOT NULL,
  `tutorial_type` varchar(300) NOT NULL,
  `tutorial_title` varchar(300) NOT NULL,
  `tutorial_description` varchar(300) NOT NULL,
  `tutorial_image` varchar(300) NOT NULL,
  `status` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tutorial`
--

INSERT INTO `tutorial` (`tutorial_id`, `tutorial_category_id`, `tutorial_subcategory_id`, `tutorial_type`, `tutorial_title`, `tutorial_description`, `tutorial_image`, `status`) VALUES
(31, 4, 3, 'Image', 'Road Signs ', 'This Signs Will Helps You In Learning Licence Computer Test', '1593604071_traffic_sign.jpg', 0),
(32, 4, 4, 'Image', 'Track', '2 Wheeler Driving Track', '1593604309_28DETRACK.jfif', 0),
(33, 5, 5, 'Image', 'Vehicle', 'Transport Vehicle Tutorial', '1593668553_SUBAD1MIN.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(20) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `user_email` varchar(200) NOT NULL,
  `user_contact` int(12) NOT NULL,
  `user_password` varchar(200) NOT NULL,
  `user_gender` varchar(200) NOT NULL,
  `user_hobby` varchar(200) NOT NULL,
  `user_dob` date NOT NULL,
  `user_address` varchar(200) NOT NULL,
  `user_profile` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `user_contact`, `user_password`, `user_gender`, `user_hobby`, `user_dob`, `user_address`, `user_profile`, `status`, `created_at`, `update_at`) VALUES
(24, 'test', 't@gmail.com', 1234567899, '123456', 'male', 'cricket,music', '2020-03-20', 'fhjdh', '1585547355_113.jpg', '', '2020-03-30 05:49:16', '2020-03-30 05:49:16'),
(25, 'm', 'm@gmail.com', 23456789, '123', 'male', 'music', '2020-03-13', 'vvhgvh', '1585584364_5.jpg', '', '2020-03-30 16:06:04', '2020-03-30 16:06:04'),
(26, 'p', 'p@gmail.com', 123456789, '123', 'male', 'cricket,music', '2020-03-12', 'hhvns', '1585657982_4.jpg', '', '2020-03-31 12:33:02', '2020-03-31 12:33:02'),
(27, 'h', 'h@gmail.com', 123, '123', 'female', 'music,reading', '2020-04-24', 'scdsc', '1587650957_4 - Copy.jpg', '', '2020-04-23 14:09:17', '2020-04-23 14:09:17'),
(29, 'Yash', 'yashtailor008@gmail.com', 2147483647, '123', 'male', 'cricket', '1999-10-26', 'gsdgdrdfhdh', '1592134447_download.jfif', '0', '2020-06-14 11:34:07', '2020-06-14 11:34:07'),
(32, 'Binal Naik', 'binni.naik594@gmail.com', 2147483647, '123', 'female', 'music', '1993-07-06', '10 soc abc ,surat', '1592143098_images.jfif', '0', '2020-06-14 13:58:18', '2020-06-14 13:58:18'),
(34, 'TestDemo', 'rnw1webriddhi@gmail.com', 2147483647, '12345', 'male', '', '2020-06-25', 'test', '1593511085_download (1).jfif', '0', '2020-06-30 09:58:05', '2020-06-30 09:58:05'),
(50, 'demo1', 'demo1@gmail.com', 123456789, '12345', 'female', '', '2020-08-04', 'test', '1597232493_download (1).jfif', '0', '2020-08-12 11:41:33', '2020-08-12 11:41:33');

-- --------------------------------------------------------

--
-- Table structure for table `vehical`
--

CREATE TABLE `vehical` (
  `vehical_id` int(200) NOT NULL,
  `vehical_name` varchar(200) NOT NULL,
  `status` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehical`
--

INSERT INTO `vehical` (`vehical_id`, `vehical_name`, `status`) VALUES
(5, '2 wheeler', 0),
(6, '4 wheeler', 0);

-- --------------------------------------------------------

--
-- Table structure for table `vehical_registration`
--

CREATE TABLE `vehical_registration` (
  `vehical_registration_id` int(20) NOT NULL,
  `user_id` int(10) NOT NULL,
  `vehical_id` int(20) NOT NULL,
  `licence_register_id` int(10) NOT NULL,
  `vehical_no` varchar(200) NOT NULL,
  `permanent_add` varchar(200) NOT NULL,
  `temp_add` varchar(200) NOT NULL,
  `body` varchar(200) NOT NULL,
  `year_of_manufacture` date NOT NULL,
  `no_of_cylinder` int(200) NOT NULL,
  `chassis_no` int(200) NOT NULL,
  `engine_no` int(200) NOT NULL,
  `registration_date` date NOT NULL,
  `status` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`area_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`),
  ADD KEY `city_state_id` (`city_state_id`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`exam_id`);

--
-- Indexes for table `exam_create`
--
ALTER TABLE `exam_create`
  ADD PRIMARY KEY (`exam_create_id`);

--
-- Indexes for table `exam_question`
--
ALTER TABLE `exam_question`
  ADD PRIMARY KEY (`exam_question_id`);

--
-- Indexes for table `final_result`
--
ALTER TABLE `final_result`
  ADD PRIMARY KEY (`final_result_id`);

--
-- Indexes for table `fine`
--
ALTER TABLE `fine`
  ADD PRIMARY KEY (`fine_id`);

--
-- Indexes for table `licence_confirm`
--
ALTER TABLE `licence_confirm`
  ADD PRIMARY KEY (`confirm_id`);

--
-- Indexes for table `licence_register`
--
ALTER TABLE `licence_register`
  ADD PRIMARY KEY (`licence_register_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `post_image`
--
ALTER TABLE `post_image`
  ADD PRIMARY KEY (`post_image_id`);

--
-- Indexes for table `proof`
--
ALTER TABLE `proof`
  ADD PRIMARY KEY (`proof_id`);

--
-- Indexes for table `proof_image`
--
ALTER TABLE `proof_image`
  ADD PRIMARY KEY (`proof_image_id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`result_id`);

--
-- Indexes for table `rto_office`
--
ALTER TABLE `rto_office`
  ADD PRIMARY KEY (`office_id`);

--
-- Indexes for table `slot`
--
ALTER TABLE `slot`
  ADD PRIMARY KEY (`slot_id`);

--
-- Indexes for table `slot_book`
--
ALTER TABLE `slot_book`
  ADD PRIMARY KEY (`slot_book_id`);

--
-- Indexes for table `slot_schedule`
--
ALTER TABLE `slot_schedule`
  ADD PRIMARY KEY (`slot_schedule_id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`subcategory_id`),
  ADD KEY `sub_category_id` (`sub_category_id`);

--
-- Indexes for table `tutorial`
--
ALTER TABLE `tutorial`
  ADD PRIMARY KEY (`tutorial_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `vehical`
--
ALTER TABLE `vehical`
  ADD PRIMARY KEY (`vehical_id`);

--
-- Indexes for table `vehical_registration`
--
ALTER TABLE `vehical_registration`
  ADD PRIMARY KEY (`vehical_registration_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `area_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `exam_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `exam_create`
--
ALTER TABLE `exam_create`
  MODIFY `exam_create_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `exam_question`
--
ALTER TABLE `exam_question`
  MODIFY `exam_question_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `final_result`
--
ALTER TABLE `final_result`
  MODIFY `final_result_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `fine`
--
ALTER TABLE `fine`
  MODIFY `fine_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `licence_confirm`
--
ALTER TABLE `licence_confirm`
  MODIFY `confirm_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `licence_register`
--
ALTER TABLE `licence_register`
  MODIFY `licence_register_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `post_image`
--
ALTER TABLE `post_image`
  MODIFY `post_image_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `proof`
--
ALTER TABLE `proof`
  MODIFY `proof_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `proof_image`
--
ALTER TABLE `proof_image`
  MODIFY `proof_image_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `result_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=328;

--
-- AUTO_INCREMENT for table `rto_office`
--
ALTER TABLE `rto_office`
  MODIFY `office_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `slot`
--
ALTER TABLE `slot`
  MODIFY `slot_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `slot_book`
--
ALTER TABLE `slot_book`
  MODIFY `slot_book_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `slot_schedule`
--
ALTER TABLE `slot_schedule`
  MODIFY `slot_schedule_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `state_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `subcategory_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tutorial`
--
ALTER TABLE `tutorial`
  MODIFY `tutorial_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `vehical`
--
ALTER TABLE `vehical`
  MODIFY `vehical_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `vehical_registration`
--
ALTER TABLE `vehical_registration`
  MODIFY `vehical_registration_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `city_state_id` FOREIGN KEY (`city_state_id`) REFERENCES `state` (`state_id`) ON DELETE CASCADE;

--
-- Constraints for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD CONSTRAINT `sub_category_id` FOREIGN KEY (`sub_category_id`) REFERENCES `category` (`category_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
