-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2020 at 04:39 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31
SET
  SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

START TRANSACTION;

SET
  time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */
;

/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */
;

/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */
;

/*!40101 SET NAMES utf8mb4 */
;

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
) ENGINE = InnoDB DEFAULT CHARSET = latin1;

--
-- Dumping data for table `admin`
--
INSERT INTO
  `admin` (
    `admin_id`,
    `admin_name`,
    `admin_email`,
    `admin_contact`,
    `admin_password`,
    `admin_gender`,
    `admin_hobby`,
    `admin_dob`,
    `admin_address`,
    `admin_profile`,
    `admin_role`,
    `status`,
    `created_at`,
    `updated_at`
  )
VALUES
  (
    8,
    'KKK',
    'kishanvadodariya2000@gmail.com',
    '4345345',
    '111',
    'female',
    'music',
    '0006-09-19',
    'hvhg',
    'even.jpeg',
    '',
    1,
    '2020-02-27 09:21:08',
    '2019-12-26 12:09:44'
  ),
  (
    11,
    'xdv',
    'a1@gmail.com',
    '0908979',
    '333',
    'male',
    'cricket',
    '0002-10-19',
    'whdcuweghf',
    '1580987921_',
    'user',
    1,
    '2020-02-25 11:11:54',
    '2019-12-26 12:15:05'
  ),
  (
    12,
    'Yash',
    'r@gmail.com',
    '098978',
    '111',
    'male',
    'cricket',
    '0001-10-29',
    'v ebdvjkbdev',
    '1580987947_1579693386_B&G-2.jpg',
    'admin',
    1,
    '2020-02-27 09:02:10',
    '2019-12-26 12:15:32'
  ),
  (
    13,
    'vjay',
    'v@gmail.com',
    '9865321471',
    '12345',
    'male',
    'cricket,music',
    '1988-12-14',
    'kscgsachgvsacbksa',
    '1579610754_',
    '',
    1,
    '2020-02-25 11:11:54',
    '2020-01-21 12:41:19'
  ),
  (
    14,
    'e1',
    'e1@gmail.com',
    '2123564768',
    '333',
    'male',
    'music',
    '1991-07-26',
    'ef',
    '1579696566_B&G-2.jpg',
    '',
    1,
    '2020-02-25 11:11:54',
    '2020-01-22 11:43:06'
  ),
  (
    15,
    'Kishan',
    'k@gmail.com',
    '908909890',
    '123',
    'male',
    'cricket',
    '2000-02-02',
    'poik,ujujmikol',
    '1582799826_DSC_2428.JPG',
    '',
    0,
    '2020-02-27 10:37:06',
    '2020-02-27 10:37:06'
  ),
  (
    16,
    'YASH',
    'tailloryash008@gmail.com',
    '8849506541',
    '123456789',
    'male',
    'cricket,music',
    '1999-10-14',
    'surat',
    '1592144490_download.jfif',
    '',
    0,
    '2020-06-14 14:21:30',
    '2020-06-14 14:21:30'
  );

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
) ENGINE = InnoDB DEFAULT CHARSET = latin1;

--
-- Dumping data for table `area`
--
INSERT INTO
  `area` (
    `area_id`,
    `area_state_id`,
    `area_city_id`,
    `area_name`,
    `status`
  )
VALUES
  (17, 10, 20, 'panji', 0),
  (19, 11, 23, 'katargam', 0),
  (21, 13, 24, 'Central', 0),
  (22, 11, 23, 'amroli', 0);

-- --------------------------------------------------------
--
-- Table structure for table `category`
--
CREATE TABLE `category` (
  `category_id` int(10) NOT NULL,
  `category_name` varchar(300) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE = InnoDB DEFAULT CHARSET = latin1;

--
-- Dumping data for table `category`
--
INSERT INTO
  `category` (`category_id`, `category_name`, `status`)
VALUES
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
) ENGINE = InnoDB DEFAULT CHARSET = latin1;

--
-- Dumping data for table `city`
--
INSERT INTO
  `city` (
    `city_id`,
    `city_state_id`,
    `city_name`,
    `status`
  )
VALUES
  (23, 11, 'surat', 0),
  (24, 13, 'Mumbai', 0),
  (25, 11, 'surat', 0);

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
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

--
-- Dumping data for table `exam`
--
INSERT INTO
  `exam` (
    `exam_id`,
    `user_id`,
    `exam_state_id`,
    `exam_city_id`,
    `exam_area_id`,
    `exam_name`,
    `exam_time`,
    `exam_mark`,
    `exam_final_mark`,
    `status`,
    `created_at`,
    `updated_at`
  )
VALUES
  (
    1,
    0,
    0,
    0,
    13,
    '$exam_name',
    '$exam_time',
    0,
    0,
    0,
    '2020-01-08 11:06:16',
    '2020-01-08 11:06:16'
  ),
  (
    7,
    0,
    9,
    0,
    13,
    'm,dnnkn',
    ',.mkjhjg',
    0,
    0,
    0,
    '2020-01-08 11:27:25',
    '2020-01-08 11:27:25'
  ),
  (
    8,
    0,
    9,
    0,
    14,
    'm,dnnkn',
    ',.mkjhjg',
    0,
    0,
    0,
    '2020-01-08 11:29:09',
    '2020-01-08 11:29:09'
  ),
  (
    9,
    0,
    9,
    0,
    14,
    'm,dnnkn',
    ',.mkjhjg',
    0,
    0,
    0,
    '2020-01-08 11:30:26',
    '2020-01-08 11:30:26'
  ),
  (
    11,
    0,
    10,
    20,
    0,
    'ajhch',
    '2hr',
    200,
    2000,
    0,
    '2020-01-10 03:00:33',
    '2020-01-10 03:00:33'
  ),
  (
    12,
    0,
    10,
    20,
    14,
    'wdf',
    '4hr',
    45,
    50,
    0,
    '2020-01-10 03:06:32',
    '2020-01-10 03:06:32'
  ),
  (
    13,
    0,
    10,
    20,
    0,
    'sdk',
    '2hr',
    100,
    1000,
    0,
    '2020-01-10 10:03:37',
    '2020-01-10 10:03:37'
  ),
  (
    14,
    0,
    9,
    19,
    13,
    'dlfkj',
    'glhkjk',
    0,
    0,
    0,
    '2020-01-10 10:04:21',
    '2020-01-10 10:04:21'
  ),
  (
    15,
    0,
    9,
    19,
    13,
    'dryty',
    'dsfdtyt',
    0,
    0,
    0,
    '2020-01-10 10:05:48',
    '2020-01-10 10:05:48'
  ),
  (
    16,
    0,
    9,
    19,
    13,
    'test',
    '5',
    20,
    12,
    0,
    '2020-01-10 10:10:35',
    '2020-01-10 10:10:35'
  ),
  (
    17,
    0,
    9,
    19,
    0,
    'AA',
    '2 hr',
    50,
    18,
    0,
    '2020-01-10 10:45:43',
    '2020-01-10 10:45:43'
  ),
  (
    23,
    0,
    9,
    19,
    15,
    'kjhgf',
    '2',
    17,
    50,
    0,
    '2020-01-10 10:57:31',
    '2020-01-10 10:57:31'
  ),
  (
    24,
    0,
    9,
    19,
    15,
    'kjhgf',
    '2',
    17,
    50,
    0,
    '2020-01-10 10:57:32',
    '2020-01-10 10:57:32'
  ),
  (
    25,
    0,
    9,
    19,
    15,
    'kjhgf',
    '2',
    17,
    50,
    0,
    '2020-01-10 10:57:33',
    '2020-01-10 10:57:33'
  ),
  (
    26,
    0,
    0,
    0,
    0,
    '',
    '',
    0,
    0,
    0,
    '2020-01-10 12:13:14',
    '2020-01-10 12:13:14'
  ),
  (
    27,
    0,
    0,
    0,
    0,
    '',
    '',
    0,
    0,
    0,
    '2020-01-10 12:22:46',
    '2020-01-10 12:22:46'
  ),
  (
    28,
    0,
    9,
    19,
    15,
    'test123',
    '3',
    30,
    12,
    0,
    '2020-01-13 12:22:19',
    '2020-01-13 12:22:19'
  ),
  (
    29,
    0,
    9,
    19,
    15,
    'hjghgh',
    '5',
    5,
    6,
    0,
    '2020-01-13 12:32:29',
    '2020-01-13 12:32:29'
  ),
  (
    30,
    0,
    9,
    19,
    15,
    'mmm',
    '2',
    2,
    2,
    0,
    '2020-01-13 12:34:00',
    '2020-01-13 12:34:00'
  ),
  (
    31,
    0,
    9,
    19,
    15,
    'mmm',
    '2',
    2,
    2,
    0,
    '2020-01-13 12:34:26',
    '2020-01-13 12:34:26'
  ),
  (
    32,
    0,
    10,
    20,
    16,
    'sdf',
    '3hr',
    50,
    17,
    0,
    '2020-01-16 12:46:48',
    '2020-01-16 12:46:48'
  ),
  (
    34,
    0,
    11,
    23,
    19,
    'rr',
    '2.00',
    100,
    35,
    0,
    '2020-02-26 09:27:51',
    '2020-02-26 09:27:51'
  ),
  (
    36,
    0,
    11,
    23,
    19,
    'EXPO',
    '5',
    50,
    15,
    0,
    '2020-03-11 10:22:18',
    '2020-03-11 10:22:18'
  ),
  (
    37,
    0,
    10,
    20,
    17,
    'Abc',
    '2Hrs',
    100,
    35,
    0,
    '2020-03-17 06:39:16',
    '2020-03-17 06:39:16'
  ),
  (
    38,
    0,
    13,
    24,
    21,
    'Learning Licence',
    '15 Min.',
    5,
    3,
    0,
    '2020-03-17 06:50:28',
    '2020-03-17 06:50:28'
  ),
  (
    39,
    0,
    11,
    23,
    19,
    'TEST_RTO',
    '14',
    5,
    3,
    0,
    '2020-03-17 07:13:38',
    '2020-03-17 07:13:38'
  ),
  (
    40,
    0,
    11,
    23,
    19,
    'RTO_3_2020',
    '1',
    5,
    3,
    0,
    '2020-03-17 07:20:02',
    '2020-03-17 07:20:02'
  ),
  (
    41,
    12,
    11,
    23,
    19,
    'RTO_3_2020',
    '1',
    5,
    3,
    0,
    '2020-03-17 07:20:29',
    '2020-03-17 07:20:29'
  );

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
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

--
-- Dumping data for table `exam_create`
--
INSERT INTO
  `exam_create` (
    `exam_create_id`,
    `user_id`,
    `create_state_id`,
    `create_city_id`,
    `create_office_id`,
    `create_exam_id`,
    `create_slot_id`,
    `create_exam_date`,
    `status`
  )
VALUES
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
  (37, 32, 11, 23, 9, 40, 13, '2020-06-20', 1);

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
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

--
-- Dumping data for table `exam_question`
--
INSERT INTO
  `exam_question` (
    `exam_question_id`,
    `exam_id`,
    `question_id`,
    `question`,
    `ans1`,
    `ans2`,
    `ans3`,
    `ans4`,
    `final_ans`,
    `status`,
    `created_at`,
    `updated_at`
  )
VALUES
  (
    4,
    29,
    1,
    'test',
    't',
    't',
    't',
    't',
    'c',
    0,
    '2020-01-13 12:32:29',
    '2020-01-13 12:32:29'
  ),
  (
    6,
    30,
    1,
    'hgshgchs',
    'h',
    'h',
    'h',
    'h',
    'b',
    0,
    '2020-01-13 12:34:01',
    '2020-01-13 12:34:01'
  ),
  (
    8,
    31,
    2,
    'hgshgchs',
    'h',
    'h',
    'h',
    'h',
    'b',
    0,
    '2020-01-13 12:34:26',
    '2020-01-13 12:34:26'
  ),
  (
    9,
    32,
    1,
    'gh',
    'gh',
    'a',
    'c',
    'n',
    'a',
    0,
    '2020-01-16 12:46:48',
    '2020-01-16 12:46:48'
  ),
  (
    10,
    32,
    2,
    'jj',
    'jj',
    'm',
    'n',
    'b',
    'a',
    0,
    '2020-01-16 12:46:48',
    '2020-01-16 12:46:48'
  ),
  (
    11,
    33,
    1,
    '1',
    '23',
    '25',
    '23',
    '23',
    'a',
    0,
    '2020-02-26 09:26:23',
    '2020-02-26 09:26:23'
  ),
  (
    12,
    33,
    2,
    '2',
    '52',
    '63',
    '45',
    '85',
    'b',
    0,
    '2020-02-26 09:26:23',
    '2020-02-26 09:26:23'
  ),
  (
    13,
    34,
    1,
    '45',
    '52',
    '63',
    '45',
    '2',
    'a',
    0,
    '2020-02-26 09:27:52',
    '2020-02-26 09:27:52'
  ),
  (
    14,
    35,
    1,
    '5',
    '6',
    '5',
    '6',
    '4',
    'a',
    0,
    '2020-02-26 09:28:16',
    '2020-02-26 09:28:16'
  ),
  (
    15,
    36,
    1,
    'hh',
    'h',
    'h',
    'h',
    'h',
    'b',
    0,
    '2020-03-11 10:22:18',
    '2020-03-11 10:22:18'
  ),
  (
    16,
    36,
    2,
    'fggdgd',
    'f',
    'f',
    'f',
    'f',
    'c',
    0,
    '2020-03-11 10:22:18',
    '2020-03-11 10:22:18'
  ),
  (
    17,
    36,
    3,
    'hdghsh',
    'b',
    'b',
    'b',
    'b',
    'b',
    0,
    '2020-03-11 10:22:18',
    '2020-03-11 10:22:18'
  ),
  (
    18,
    36,
    4,
    'tdgdg',
    'n',
    'n',
    'n',
    'n',
    'b',
    0,
    '2020-03-11 10:22:18',
    '2020-03-11 10:22:18'
  ),
  (
    19,
    36,
    5,
    'dcjgvjhgd',
    'q',
    'q',
    'q',
    'q',
    'c',
    0,
    '2020-03-11 10:22:18',
    '2020-03-11 10:22:18'
  ),
  (
    20,
    37,
    1,
    'Aaa',
    'a',
    'b',
    'c',
    'd',
    'b',
    0,
    '2020-03-17 06:39:16',
    '2020-03-17 06:39:16'
  ),
  (
    21,
    37,
    2,
    'Baa',
    'd',
    'c',
    'b',
    'a',
    'c',
    0,
    '2020-03-17 06:39:16',
    '2020-03-17 06:39:16'
  ),
  (
    22,
    38,
    1,
    'aa',
    'a',
    'b',
    'c',
    'd',
    'a',
    0,
    '2020-03-17 06:50:28',
    '2020-03-17 06:50:28'
  ),
  (
    23,
    38,
    2,
    'bb',
    'a',
    'b',
    'c',
    'd',
    'b',
    0,
    '2020-03-17 06:50:28',
    '2020-03-17 06:50:28'
  ),
  (
    24,
    38,
    3,
    'cc',
    'a',
    'b',
    'c',
    'd',
    'c',
    0,
    '2020-03-17 06:50:28',
    '2020-03-17 06:50:28'
  ),
  (
    25,
    38,
    4,
    'dd',
    'a',
    'b',
    'c',
    'd',
    'd',
    0,
    '2020-03-17 06:50:28',
    '2020-03-17 06:50:28'
  ),
  (
    26,
    38,
    5,
    'ee',
    'a',
    'b',
    'c',
    'd',
    'a',
    0,
    '2020-03-17 06:50:28',
    '2020-03-17 06:50:28'
  ),
  (
    27,
    39,
    1,
    'demo',
    'd',
    'd',
    'd',
    'd',
    'd',
    0,
    '2020-03-17 07:13:38',
    '2020-03-17 07:13:38'
  ),
  (
    28,
    39,
    2,
    'hello',
    'h',
    'h',
    'h',
    'h',
    'a',
    0,
    '2020-03-17 07:13:38',
    '2020-03-17 07:13:38'
  ),
  (
    29,
    39,
    3,
    'nnnn',
    'n',
    'n',
    'n',
    'n',
    'd',
    0,
    '2020-03-17 07:13:38',
    '2020-03-17 07:13:38'
  ),
  (
    30,
    39,
    4,
    'hhhh',
    'h',
    'h',
    'h',
    'h',
    'a',
    0,
    '2020-03-17 07:13:38',
    '2020-03-17 07:13:38'
  ),
  (
    31,
    39,
    5,
    'rrr',
    'r',
    'r',
    'r',
    'r',
    'd',
    0,
    '2020-03-17 07:13:39',
    '2020-03-17 07:13:39'
  ),
  (
    32,
    39,
    6,
    'b',
    '',
    '',
    '',
    '',
    '',
    0,
    '2020-03-17 07:13:39',
    '2020-03-17 07:13:39'
  ),
  (
    33,
    40,
    1,
    'wwwwwwwwwww',
    'w',
    'w',
    'w',
    'w',
    'c',
    0,
    '2020-03-17 07:20:02',
    '2020-03-17 07:20:02'
  ),
  (
    34,
    40,
    2,
    'bbbbbbbbbbb',
    'b',
    'b',
    'b',
    'b',
    'c',
    0,
    '2020-03-17 07:20:02',
    '2020-03-17 07:20:02'
  ),
  (
    35,
    40,
    3,
    'rrrrrrrrrrrrrrrrrr',
    'r',
    'r',
    'r',
    'r',
    'a',
    0,
    '2020-03-17 07:20:02',
    '2020-03-17 07:20:02'
  ),
  (
    36,
    40,
    4,
    'uuuuuuuuuuuuu',
    'u',
    'u',
    'u',
    'u',
    'c',
    0,
    '2020-03-17 07:20:02',
    '2020-03-17 07:20:02'
  ),
  (
    37,
    40,
    5,
    'sssssss',
    's',
    's',
    's',
    's',
    'd',
    0,
    '2020-03-17 07:20:02',
    '2020-03-17 07:20:02'
  ),
  (
    38,
    41,
    1,
    'wwwwwwwwwww',
    'w',
    'w',
    'w',
    'w',
    'c',
    0,
    '2020-03-17 07:20:29',
    '2020-03-17 07:20:29'
  ),
  (
    39,
    41,
    2,
    'bbbbbbbbbbb',
    'b',
    'b',
    'b',
    'b',
    'c',
    0,
    '2020-03-17 07:20:29',
    '2020-03-17 07:20:29'
  ),
  (
    40,
    41,
    3,
    'rrrrrrrrrrrrrrrrrr',
    'r',
    'r',
    'r',
    'r',
    'a',
    0,
    '2020-03-17 07:20:29',
    '2020-03-17 07:20:29'
  ),
  (
    41,
    41,
    4,
    'uuuuuuuuuuuuu',
    'u',
    'u',
    'u',
    'u',
    'c',
    0,
    '2020-03-17 07:20:29',
    '2020-03-17 07:20:29'
  ),
  (
    42,
    41,
    5,
    'sssssss',
    's',
    's',
    's',
    's',
    'd',
    0,
    '2020-03-17 07:20:29',
    '2020-03-17 07:20:29'
  );

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
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

--
-- Dumping data for table `final_result`
--
INSERT INTO
  `final_result` (
    `final_result_id`,
    `result_exam_id`,
    `final_category_id`,
    `final_subcategory_id`,
    `final_register_id`,
    `t_ans`,
    `f_ans`,
    `total_ans`,
    `result_type`,
    `user_id`,
    `status`
  )
VALUES
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
  (44, 40, 4, 3, 64, 5, 0, '5', 'Pass', 32, 1);

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
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

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
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

--
-- Dumping data for table `licence_confirm`
--
INSERT INTO
  `licence_confirm` (
    `confirm_id`,
    `confirm_user_id`,
    `licence_register_id`,
    `confirm_vehical_id`,
    `licence_type`,
    `issue_date`,
    `validity_date`,
    `licence_subcategory_id`,
    `licence_num`,
    `status`
  )
VALUES
  (
    7,
    25,
    43,
    5,
    'DR',
    '2020-03-31 10:42:48',
    '2020-07-01',
    4,
    '8488771246014',
    1
  ),
  (
    8,
    25,
    44,
    5,
    'LR',
    '2020-03-31 12:05:11',
    '2020-07-01',
    3,
    '6983113304158',
    1
  ),
  (
    9,
    30,
    60,
    5,
    'LR',
    '2020-06-14 12:31:15',
    '2020-09-14',
    3,
    '2389455509050',
    1
  ),
  (
    10,
    31,
    63,
    6,
    'DR',
    '2020-06-14 13:55:24',
    '2020-09-14',
    4,
    '3171315568337',
    1
  ),
  (
    11,
    32,
    64,
    5,
    'LR',
    '2020-06-14 14:02:55',
    '2020-09-14',
    3,
    '3529733466857',
    1
  );

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
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

--
-- Dumping data for table `licence_register`
--
INSERT INTO
  `licence_register` (
    `licence_register_id`,
    `licence_category_id`,
    `licence_subcategory_id`,
    `licence_state_id`,
    `licence_city_id`,
    `licence_office_id`,
    `user_id`,
    `name`,
    `email`,
    `address`,
    `contact_no`,
    `vehical_id`,
    `dob`,
    `blood_group`,
    `qualification`,
    `photo`,
    `id_proof_type`,
    `id_proof_image`,
    `register_date`,
    `created_at`,
    `updated_at`,
    `nominee_name`,
    `aadhar_no`,
    `rcbook_no`,
    `status`
  )
VALUES
  (
    40,
    4,
    3,
    11,
    23,
    9,
    24,
    '24',
    '24',
    'fgdfjg',
    '2345678',
    6,
    '2020-12-31',
    'b',
    'b',
    '1585572100_4 - Copy.jpg',
    '1',
    '1585572100_Array',
    '2020-06-14 11:37:49',
    '2020-03-30 12:41:40',
    '2020-03-30 12:41:40',
    'dfgd',
    '23456789',
    '0',
    5
  ),
  (
    41,
    4,
    4,
    11,
    23,
    9,
    24,
    '24',
    '24',
    'gdhjfgdhj',
    '12345678',
    5,
    '2020-12-31',
    'b',
    'b',
    '1585572555_1 - Copy.jpg',
    '1',
    '1585572555_Array',
    '2020-06-14 12:38:14',
    '2020-03-30 12:49:15',
    '2020-03-30 12:49:15',
    'ghhfgh',
    '2345678',
    '0',
    5
  ),
  (
    42,
    4,
    3,
    11,
    23,
    9,
    25,
    '25',
    '25',
    'ytrtyrtyr',
    '23456789',
    5,
    '2020-12-31',
    'b',
    'b',
    '1585584480_4.jpg',
    '1',
    '1585584480_Array',
    '2020-03-31 12:25:13',
    '2020-03-30 16:08:00',
    '2020-03-30 16:08:00',
    'tfyy',
    '23456789',
    '0',
    5
  ),
  (
    43,
    4,
    4,
    11,
    23,
    9,
    25,
    '25',
    '25',
    'hjghj',
    '2345678',
    5,
    '2020-12-31',
    'bb',
    'fdfd',
    '1585585713_4 - Copy.jpg',
    '1',
    '1585585713_Array',
    '2020-06-14 12:38:14',
    '2020-03-30 16:28:33',
    '2020-03-30 16:28:33',
    'gfg',
    '34567',
    '0',
    5
  ),
  (
    44,
    4,
    3,
    11,
    23,
    9,
    25,
    '25',
    '25',
    'ghfgfgh',
    '234567890',
    5,
    '2020-12-31',
    'bb',
    'bb',
    '1585655777_4 - Copy.jpg',
    '1',
    '1585655777_Array',
    '2020-06-14 11:37:49',
    '2020-03-31 11:56:17',
    '2020-03-31 11:56:17',
    'gfg',
    '356789',
    '0',
    5
  ),
  (
    45,
    4,
    3,
    11,
    23,
    9,
    26,
    '26',
    '26',
    'gdhsdh',
    '2424',
    5,
    '2020-12-31',
    'jbb',
    'bcbv',
    '1585658799_4.jpg',
    '1',
    '1585658799_Array',
    '2020-06-14 11:37:49',
    '2020-03-31 12:46:39',
    '2020-03-31 12:46:39',
    'hh',
    '34567',
    '0',
    5
  ),
  (
    46,
    4,
    4,
    11,
    23,
    9,
    26,
    '26',
    '26',
    'bjfdjjbj',
    '334345',
    5,
    '2020-12-31',
    'hfhf',
    'yygfgfg',
    '1585659876_2 - Copy.jpg',
    '1',
    '1585659877_Array',
    '2020-06-14 12:38:14',
    '2020-03-31 13:04:37',
    '2020-03-31 13:04:37',
    'gf',
    '234567',
    '0',
    5
  ),
  (
    47,
    6,
    7,
    11,
    23,
    9,
    24,
    '24',
    '24',
    'hello',
    '2345678',
    5,
    '2020-12-31',
    'sghd',
    'bca',
    '1587650554_4 - Copy.jpg',
    '1',
    '1587650554_Array',
    '2020-04-23 14:02:34',
    '2020-04-23 14:02:34',
    '2020-04-23 14:02:34',
    'hgdhdg',
    '2345678',
    '0',
    0
  ),
  (
    51,
    6,
    7,
    11,
    23,
    9,
    27,
    '27',
    '27',
    'hjghg',
    '45',
    5,
    '2020-12-31',
    'gjg',
    'gh',
    '1587652284_3 - Copy.jpg',
    '1',
    '1587652284_Array',
    '2020-04-23 14:31:24',
    '2020-04-23 14:31:24',
    '2020-04-23 14:31:24',
    'th',
    '656',
    '4384654',
    0
  ),
  (
    53,
    4,
    3,
    11,
    23,
    9,
    27,
    '27',
    '27',
    '121\r\nPramukhpark soc.,nr. r.v. patel collage,chhaparabhatha road',
    '9408227225',
    5,
    '2020-12-31',
    'b+',
    'BCA',
    '1592126982_1583410855_images.png',
    '1',
    '1592126982',
    '2020-06-14 11:37:49',
    '2020-06-14 09:29:42',
    '2020-06-14 09:29:42',
    'Kishan vadodariya',
    '9826 5678 6565',
    ' ',
    5
  ),
  (
    54,
    4,
    3,
    11,
    23,
    9,
    25,
    '25',
    '25',
    'amroli',
    '123456789',
    6,
    '1999-10-14',
    'b+',
    'bca',
    '1592130926_download (1).jfif',
    '1',
    '1592130926',
    '2020-06-14 11:37:49',
    '2020-06-14 10:35:26',
    '2020-06-14 10:35:26',
    'raj',
    '123256546578',
    ' ',
    5
  ),
  (
    55,
    4,
    3,
    11,
    23,
    9,
    28,
    '28',
    '28',
    'chhaprabhata',
    '1234567890',
    6,
    '1999-02-18',
    'b+',
    'bca',
    '1592131284_download.jfif',
    '1',
    '1592131284',
    '2020-06-14 11:37:49',
    '2020-06-14 10:41:24',
    '2020-06-14 10:41:24',
    'raj',
    '123256546578',
    ' ',
    5
  ),
  (
    56,
    4,
    4,
    11,
    23,
    9,
    28,
    '28',
    '28',
    'suart',
    '5201456307',
    5,
    '1999-02-18',
    'o+',
    'bca',
    '1592132446_download.jfif',
    '---select ID Proof Type-----',
    '1592132446',
    '2020-06-14 12:38:14',
    '2020-06-14 11:00:46',
    '2020-06-14 11:00:46',
    'raju',
    '512415247856',
    ' ',
    5
  ),
  (
    57,
    4,
    3,
    11,
    23,
    9,
    29,
    '29',
    '29',
    'sagfdsgfdsg',
    '5201456307',
    5,
    '2001-10-27',
    'o+',
    'bca',
    '1592134509_images.jfif',
    '1',
    '1592134509',
    '2020-06-14 12:29:26',
    '2020-06-14 11:35:09',
    '2020-06-14 11:35:09',
    'raju',
    '512415247856',
    ' ',
    5
  ),
  (
    58,
    6,
    7,
    11,
    23,
    9,
    29,
    '29',
    '29',
    'xdsfhj',
    '5201456307',
    5,
    '1996-02-07',
    'o+',
    'bca',
    '1592135578_images.jfif',
    '1',
    '1592135578',
    '2020-06-14 12:17:52',
    '2020-06-14 11:52:58',
    '2020-06-14 11:52:58',
    'raju',
    '512415247856',
    '1674890',
    0
  ),
  (
    59,
    4,
    4,
    11,
    23,
    9,
    29,
    '29',
    '29',
    '5yrdyru',
    '5201456307',
    6,
    '2012-09-02',
    'o+',
    'bca',
    '1592136671_download.jfif',
    '1',
    '1592136671',
    '2020-06-14 12:38:14',
    '2020-06-14 12:11:11',
    '2020-06-14 12:11:11',
    'raju',
    '512415247856',
    ' ',
    5
  ),
  (
    60,
    4,
    3,
    11,
    23,
    9,
    30,
    '30',
    '30',
    'cgjtfj',
    '5201456307',
    5,
    '2004-12-29',
    'o+',
    'bca',
    '1592137351_download.jfif',
    '1',
    '1592137351',
    '2020-06-14 13:48:47',
    '2020-06-14 12:22:31',
    '2020-06-14 12:22:31',
    'raju',
    '512415247856',
    ' ',
    5
  ),
  (
    61,
    4,
    4,
    11,
    23,
    9,
    30,
    '30',
    '30',
    'vjgfu',
    '5201456307',
    6,
    '2000-02-14',
    'o+',
    'bca',
    '1592138136_download (1).jfif',
    '1',
    '1592138136',
    '2020-06-14 13:52:49',
    '2020-06-14 12:35:36',
    '2020-06-14 12:35:36',
    'raju',
    '512415247856',
    ' ',
    5
  ),
  (
    62,
    4,
    3,
    11,
    23,
    9,
    31,
    '31',
    '31',
    '10 bcs soc ,surat',
    '5201456307',
    5,
    '2000-02-17',
    'o+',
    'bca',
    '1592142339_download.jfif',
    '1',
    '1592142339',
    '2020-06-14 14:02:13',
    '2020-06-14 13:45:39',
    '2020-06-14 13:45:39',
    'raju',
    '1234 2023 1234 1234',
    ' ',
    5
  ),
  (
    63,
    4,
    4,
    11,
    23,
    9,
    31,
    '31',
    '31',
    'qdd',
    '5201456307',
    6,
    '2012-02-02',
    'o+',
    'bca',
    '1592142578_download.jfif',
    '1',
    '1592142578',
    '2020-06-14 13:55:24',
    '2020-06-14 13:49:38',
    '2020-06-14 13:49:38',
    'raju',
    '1234 2023 1234 1234',
    ' ',
    4
  ),
  (
    64,
    4,
    3,
    11,
    23,
    9,
    32,
    '32',
    '32',
    '10 abc soc',
    '5201456307',
    5,
    '1996-02-20',
    'o+',
    'bca',
    '1592143156_download.jfif',
    '1',
    '1592143156',
    '2020-06-14 14:02:55',
    '2020-06-14 13:59:16',
    '2020-06-14 13:59:16',
    '',
    '1234 2023 1234 1234',
    ' ',
    4
  ),
  (
    65,
    6,
    7,
    11,
    23,
    9,
    32,
    '32',
    '32',
    'SURAT',
    '5201456307',
    5,
    '1989-03-14',
    'o+',
    'bca',
    '1592143470_download.jfif',
    '1',
    '1592143470',
    '2020-06-14 14:04:30',
    '2020-06-14 14:04:30',
    '2020-06-14 14:04:30',
    'raju',
    '512415247856',
    '7317037',
    0
  ),
  (
    66,
    5,
    5,
    11,
    23,
    9,
    32,
    '32',
    '32',
    'SURAT',
    '5201456307',
    5,
    '1999-10-14',
    'o+',
    'bca',
    '1592143673_download.jfif',
    '1',
    '1592143673',
    '2020-06-14 14:07:53',
    '2020-06-14 14:07:53',
    '2020-06-14 14:07:53',
    'raju',
    '1234 2023 1234 1234',
    ' ',
    0
  );

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
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

--
-- Dumping data for table `payment`
--
INSERT INTO
  `payment` (
    `payment_id`,
    `user_id`,
    `slot_register_id`,
    `pay_charge`,
    `card_no`,
    `cvv`,
    `exp_year`,
    `exp_month`,
    `status`
  )
VALUES
  (
    1,
    26,
    46,
    50,
    '2147483647',
    123,
    '2025',
    '0000-00-00',
    0
  ),
  (
    2,
    24,
    47,
    50,
    '2147483647',
    123,
    '2025',
    '0000-00-00',
    0
  ),
  (
    3,
    27,
    48,
    50,
    '2147483647',
    123,
    '2025',
    '0000-00-00',
    0
  ),
  (
    4,
    27,
    51,
    50,
    '2147483647',
    123,
    '2025',
    '0000-00-00',
    0
  ),
  (6, 27, 53, 50, '42424242', 123, '25', '12', 0),
  (7, 25, 54, 50, '12012011201', 613, '24', '03', 0),
  (
    8,
    28,
    55,
    50,
    '258425962134',
    581,
    '2025',
    '03',
    0
  ),
  (
    9,
    28,
    56,
    50,
    '521478956324',
    581,
    '2027',
    '05',
    0
  ),
  (
    10,
    29,
    57,
    50,
    '3232323232323232',
    125,
    '25',
    '12',
    0
  ),
  (
    11,
    29,
    58,
    50,
    '3232323232323232',
    231,
    '25',
    '11',
    0
  ),
  (
    12,
    29,
    59,
    50,
    '2121212121212121',
    255,
    '25',
    '11',
    0
  ),
  (
    13,
    30,
    60,
    50,
    '2525252525252525',
    256,
    '23',
    '12',
    0
  ),
  (
    14,
    30,
    61,
    50,
    '12122121212121',
    212,
    '23',
    '12',
    0
  ),
  (
    15,
    31,
    62,
    50,
    '1234 1236 1235 1245',
    256,
    '23',
    '12',
    0
  ),
  (
    16,
    31,
    63,
    50,
    '2154 5236 4125 4521',
    235,
    '25',
    '12',
    0
  ),
  (
    17,
    32,
    64,
    50,
    '1234 1245 1242 1234',
    256,
    '25',
    '12',
    0
  ),
  (
    18,
    32,
    65,
    50,
    '234512345678',
    147,
    '25',
    '10',
    0
  ),
  (
    19,
    32,
    66,
    50,
    '234567890134',
    456,
    '25',
    '09',
    0
  );

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
) ENGINE = InnoDB DEFAULT CHARSET = latin1;

--
-- Dumping data for table `post`
--
INSERT INTO
  `post` (
    `post_id`,
    `post_category_id`,
    `post_subcategory_id`,
    `post_title`,
    `post_type`,
    `post_description`,
    `admin_id`,
    `status`
  )
VALUES
  (17, 4, 3, 'abc', 'News', 'poiuygfdxcvhjk', 0, 1),
  (
    18,
    5,
    4,
    'zyx',
    'Event',
    'poiuytresxcghjk',
    0,
    1
  ),
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
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

--
-- Dumping data for table `post_image`
--
INSERT INTO
  `post_image` (
    `post_image_id`,
    `post_id`,
    `post_image_path`,
    `status`
  )
VALUES
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
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

--
-- Dumping data for table `proof`
--
INSERT INTO
  `proof` (`proof_id`, `proof_name`)
VALUES
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
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

--
-- Dumping data for table `proof_image`
--
INSERT INTO
  `proof_image` (
    `proof_image_id`,
    `licence_register_id`,
    `proof_image_path`,
    `status`
  )
VALUES
  (1, 21, '1583991158_20181105_124230.jpg', 0),
  (2, 21, '1583991158_1564115629250.jpg', 0),
  (3, 22, '1583991330_20181105_124230.jpg', 0),
  (4, 22, '1583991330_1564115629250.jpg', 0),
  (5, 23, '1583992244_20181105_124230.jpg', 0),
  (6, 23, '1583992244_20181105_124239.jpg', 0),
  (7, 23, '1583992244_1564115629250.jpg', 0),
  (
    8,
    24,
    '1583992747_BCA Practical Exam Certificate.jpg',
    0
  ),
  (
    9,
    24,
    '1583992747_BCA Practical Exam Index.jpg',
    0
  ),
  (10, 25, '1584357475_1564115629250.jpg', 0),
  (11, 25, '1584357475_Ganesh.png', 0),
  (12, 26, '1584359493_20181105_124239.jpg', 0),
  (13, 26, '1584359493_1564115629250.jpg', 0),
  (
    14,
    27,
    '1584427927_BCA Practical Exam Index.jpg',
    0
  ),
  (15, 27, '1584427927_Ganesh.png', 0),
  (16, 28, '1584430490_Ganesh.png', 0),
  (17, 29, '1584438210_Ganesh.png', 0),
  (18, 30, '1584438404_Ganesh.png', 0),
  (
    19,
    31,
    '1584438531_BCA Practical Exam Certificate.jpg',
    0
  ),
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
  (67, 66, '1592143673_images.jfif', 0);

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
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

--
-- Dumping data for table `result`
--
INSERT INTO
  `result` (
    `result_id`,
    `user_id`,
    `question_id`,
    `result_category_id`,
    `result_subcategory_id`,
    `ans`,
    `ans_result`,
    `result_exam_id`,
    `date`,
    `status`
  )
VALUES
  (
    161,
    24,
    38,
    0,
    0,
    'd',
    0,
    41,
    '2020-03-30 12:58:45',
    0
  ),
  (
    162,
    24,
    39,
    0,
    0,
    'd',
    0,
    41,
    '2020-03-30 12:58:45',
    0
  ),
  (
    163,
    24,
    40,
    0,
    0,
    'd',
    0,
    41,
    '2020-03-30 12:58:45',
    0
  ),
  (
    164,
    24,
    41,
    0,
    0,
    'd',
    0,
    41,
    '2020-03-30 12:58:45',
    0
  ),
  (
    165,
    24,
    42,
    0,
    0,
    'd',
    1,
    41,
    '2020-03-30 12:58:45',
    0
  ),
  (
    166,
    24,
    38,
    0,
    0,
    'd',
    0,
    41,
    '2020-03-30 13:01:05',
    0
  ),
  (
    167,
    24,
    39,
    0,
    0,
    'd',
    0,
    41,
    '2020-03-30 13:01:05',
    0
  ),
  (
    168,
    24,
    40,
    0,
    0,
    'd',
    0,
    41,
    '2020-03-30 13:01:05',
    0
  ),
  (
    169,
    24,
    41,
    0,
    0,
    'd',
    0,
    41,
    '2020-03-30 13:01:06',
    0
  ),
  (
    170,
    24,
    42,
    0,
    0,
    'd',
    1,
    41,
    '2020-03-30 13:01:06',
    0
  ),
  (
    171,
    25,
    38,
    4,
    3,
    'a',
    0,
    41,
    '2020-03-30 16:27:12',
    0
  ),
  (
    172,
    25,
    39,
    4,
    3,
    'a',
    0,
    41,
    '2020-03-30 16:27:13',
    0
  ),
  (
    173,
    25,
    40,
    4,
    3,
    'a',
    1,
    41,
    '2020-03-30 16:27:13',
    0
  ),
  (
    174,
    25,
    41,
    4,
    3,
    'a',
    0,
    41,
    '2020-03-30 16:27:13',
    0
  ),
  (
    175,
    25,
    42,
    4,
    3,
    'a',
    0,
    41,
    '2020-03-30 16:27:13',
    0
  ),
  (
    176,
    25,
    38,
    4,
    4,
    'c',
    1,
    41,
    '2020-03-30 16:31:57',
    0
  ),
  (
    177,
    25,
    39,
    4,
    4,
    'c',
    1,
    41,
    '2020-03-30 16:31:57',
    0
  ),
  (
    178,
    25,
    40,
    4,
    4,
    'a',
    1,
    41,
    '2020-03-30 16:31:57',
    0
  ),
  (
    179,
    25,
    41,
    4,
    4,
    'c',
    1,
    41,
    '2020-03-30 16:31:57',
    0
  ),
  (
    180,
    25,
    42,
    4,
    4,
    'd',
    1,
    41,
    '2020-03-30 16:31:57',
    0
  ),
  (
    181,
    25,
    38,
    4,
    3,
    'c',
    1,
    41,
    '2020-03-31 12:00:14',
    0
  ),
  (
    182,
    25,
    39,
    4,
    3,
    'c',
    1,
    41,
    '2020-03-31 12:00:14',
    0
  ),
  (
    183,
    25,
    40,
    4,
    3,
    'a',
    1,
    41,
    '2020-03-31 12:00:14',
    0
  ),
  (
    184,
    25,
    41,
    4,
    3,
    'c',
    1,
    41,
    '2020-03-31 12:00:14',
    0
  ),
  (
    185,
    25,
    42,
    4,
    3,
    'd',
    1,
    41,
    '2020-03-31 12:00:14',
    0
  ),
  (
    186,
    29,
    27,
    4,
    3,
    'a',
    0,
    39,
    '2020-06-14 11:37:49',
    0
  ),
  (
    187,
    29,
    28,
    4,
    3,
    'b',
    0,
    39,
    '2020-06-14 11:37:49',
    0
  ),
  (
    188,
    29,
    29,
    4,
    3,
    'a',
    0,
    39,
    '2020-06-14 11:37:49',
    0
  ),
  (
    189,
    29,
    30,
    4,
    3,
    'c',
    0,
    39,
    '2020-06-14 11:37:49',
    0
  ),
  (
    190,
    29,
    31,
    4,
    3,
    'a',
    0,
    39,
    '2020-06-14 11:37:49',
    0
  ),
  (
    191,
    29,
    32,
    4,
    3,
    'b',
    0,
    39,
    '2020-06-14 11:37:49',
    0
  ),
  (
    192,
    30,
    27,
    4,
    3,
    'd',
    1,
    39,
    '2020-06-14 12:29:26',
    0
  ),
  (
    193,
    30,
    28,
    4,
    3,
    'a',
    1,
    39,
    '2020-06-14 12:29:26',
    0
  ),
  (
    194,
    30,
    29,
    4,
    3,
    'd',
    1,
    39,
    '2020-06-14 12:29:26',
    0
  ),
  (
    195,
    30,
    30,
    4,
    3,
    'a',
    1,
    39,
    '2020-06-14 12:29:26',
    0
  ),
  (
    196,
    30,
    31,
    4,
    3,
    'd',
    1,
    39,
    '2020-06-14 12:29:26',
    0
  ),
  (
    197,
    30,
    32,
    4,
    3,
    'a',
    0,
    39,
    '2020-06-14 12:29:26',
    0
  ),
  (
    198,
    30,
    33,
    4,
    4,
    'a',
    0,
    40,
    '2020-06-14 12:38:14',
    0
  ),
  (
    199,
    30,
    34,
    4,
    4,
    'a',
    0,
    40,
    '2020-06-14 12:38:14',
    0
  ),
  (
    200,
    30,
    35,
    4,
    4,
    'a',
    1,
    40,
    '2020-06-14 12:38:14',
    0
  ),
  (
    201,
    30,
    36,
    4,
    4,
    'b',
    0,
    40,
    '2020-06-14 12:38:14',
    0
  ),
  (
    202,
    30,
    37,
    4,
    4,
    'b',
    0,
    40,
    '2020-06-14 12:38:14',
    0
  ),
  (
    203,
    31,
    15,
    4,
    3,
    'a',
    0,
    36,
    '2020-06-14 13:48:47',
    0
  ),
  (
    204,
    31,
    16,
    4,
    3,
    'b',
    0,
    36,
    '2020-06-14 13:48:47',
    0
  ),
  (
    205,
    31,
    17,
    4,
    3,
    'b',
    1,
    36,
    '2020-06-14 13:48:47',
    0
  ),
  (
    206,
    31,
    18,
    4,
    3,
    'b',
    1,
    36,
    '2020-06-14 13:48:47',
    0
  ),
  (
    207,
    31,
    19,
    4,
    3,
    'a',
    0,
    36,
    '2020-06-14 13:48:47',
    0
  ),
  (
    208,
    31,
    15,
    4,
    4,
    'b',
    1,
    36,
    '2020-06-14 13:52:49',
    0
  ),
  (
    209,
    31,
    16,
    4,
    4,
    'c',
    1,
    36,
    '2020-06-14 13:52:49',
    0
  ),
  (
    210,
    31,
    17,
    4,
    4,
    'b',
    1,
    36,
    '2020-06-14 13:52:49',
    0
  ),
  (
    211,
    31,
    18,
    4,
    4,
    'b',
    1,
    36,
    '2020-06-14 13:52:49',
    0
  ),
  (
    212,
    31,
    19,
    4,
    4,
    'c',
    1,
    36,
    '2020-06-14 13:52:49',
    0
  ),
  (
    213,
    31,
    33,
    4,
    4,
    'c',
    1,
    40,
    '2020-06-14 13:54:36',
    0
  ),
  (
    214,
    31,
    34,
    4,
    4,
    'c',
    1,
    40,
    '2020-06-14 13:54:36',
    0
  ),
  (
    215,
    31,
    35,
    4,
    4,
    'a',
    1,
    40,
    '2020-06-14 13:54:36',
    0
  ),
  (
    216,
    31,
    36,
    4,
    4,
    'c',
    1,
    40,
    '2020-06-14 13:54:36',
    0
  ),
  (
    217,
    31,
    37,
    4,
    4,
    'd',
    1,
    40,
    '2020-06-14 13:54:36',
    0
  ),
  (
    218,
    32,
    33,
    4,
    3,
    'c',
    1,
    40,
    '2020-06-14 14:02:13',
    0
  ),
  (
    219,
    32,
    34,
    4,
    3,
    'c',
    1,
    40,
    '2020-06-14 14:02:13',
    0
  ),
  (
    220,
    32,
    35,
    4,
    3,
    'a',
    1,
    40,
    '2020-06-14 14:02:13',
    0
  ),
  (
    221,
    32,
    36,
    4,
    3,
    'c',
    1,
    40,
    '2020-06-14 14:02:13',
    0
  ),
  (
    222,
    32,
    37,
    4,
    3,
    'd',
    1,
    40,
    '2020-06-14 14:02:13',
    0
  );

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
) ENGINE = InnoDB DEFAULT CHARSET = latin1;

--
-- Dumping data for table `rto_office`
--
INSERT INTO
  `rto_office` (
    `office_id`,
    `office_state_id`,
    `office_city_id`,
    `office_area_id`,
    `office_address`,
    `image`,
    `status`
  )
VALUES
  (5, 9, 19, 10, 'ghgh', 'rcbook.jpg', 0),
  (6, 9, 19, 13, 'gtgt', '', 0),
  (
    7,
    9,
    19,
    13,
    '121\r\nPramukhpark soc.,nr. r.v. patel collage,chhaparabhatha road',
    '',
    0
  ),
  (
    8,
    9,
    19,
    15,
    '260,Green Plaza,Golden Circle,Golden Road,Mota Varachha,Surat - 06',
    '',
    0
  ),
  (9, 11, 23, 19, 'hello', '12.png', 0),
  (
    10,
    13,
    24,
    21,
    'Pathan Vadi',
    '1564115629250.jpg',
    0
  ),
  (
    11,
    11,
    23,
    19,
    'test1,rto office',
    'download.jfif',
    0
  );

-- --------------------------------------------------------
--
-- Table structure for table `slot`
--
CREATE TABLE `slot` (
  `slot_id` int(200) NOT NULL,
  `slot_time` varchar(20) NOT NULL,
  `status` int(10) NOT NULL DEFAULT 0
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

--
-- Dumping data for table `slot`
--
INSERT INTO
  `slot` (`slot_id`, `slot_time`, `status`)
VALUES
  (12, '10:00 - 11:00', 0),
  (13, '11:00 - 12:00', 0),
  (14, '12:00 - 13:00', 0),
  (15, '13:00 - 14:00', 0),
  (16, '14:00 - 15:30', 0);

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
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

--
-- Dumping data for table `slot_book`
--
INSERT INTO
  `slot_book` (
    `slot_book_id`,
    `book_user_id`,
    `book_register_id`,
    `book_schedule_id`,
    `book_state_id`,
    `book_city_id`,
    `book_office_id`,
    `book_category_id`,
    `book_subcategory_id`,
    `slot_no`,
    `slot_book_date`,
    `status`
  )
VALUES
  (
    35,
    24,
    40,
    5,
    11,
    23,
    9,
    4,
    3,
    12,
    '2020-02-28',
    5
  ),
  (
    36,
    24,
    41,
    5,
    11,
    23,
    9,
    4,
    4,
    13,
    '2020-02-29',
    5
  ),
  (
    37,
    25,
    42,
    5,
    11,
    23,
    9,
    4,
    3,
    16,
    '2020-02-28',
    5
  ),
  (
    38,
    25,
    43,
    5,
    11,
    23,
    9,
    4,
    4,
    13,
    '2020-02-29',
    5
  ),
  (
    39,
    25,
    44,
    5,
    11,
    23,
    9,
    4,
    3,
    14,
    '2020-02-29',
    5
  ),
  (
    40,
    26,
    45,
    5,
    11,
    23,
    9,
    4,
    3,
    16,
    '2020-04-02',
    5
  ),
  (
    41,
    26,
    46,
    5,
    11,
    23,
    9,
    4,
    4,
    15,
    '2020-05-06',
    5
  ),
  (
    42,
    27,
    53,
    5,
    11,
    23,
    9,
    4,
    3,
    14,
    '2020-06-15',
    5
  ),
  (
    43,
    25,
    54,
    5,
    11,
    23,
    9,
    4,
    3,
    15,
    '2020-06-17',
    5
  ),
  (
    44,
    25,
    54,
    5,
    11,
    23,
    9,
    4,
    3,
    15,
    '2020-06-17',
    5
  ),
  (
    45,
    28,
    55,
    5,
    11,
    23,
    9,
    4,
    3,
    12,
    '2020-06-21',
    5
  ),
  (
    46,
    28,
    56,
    5,
    11,
    23,
    9,
    4,
    4,
    12,
    '2020-06-15',
    5
  ),
  (
    47,
    29,
    57,
    5,
    11,
    23,
    9,
    4,
    3,
    13,
    '2020-06-15',
    5
  ),
  (
    48,
    29,
    59,
    5,
    11,
    23,
    9,
    4,
    4,
    14,
    '2020-06-15',
    5
  ),
  (
    49,
    30,
    60,
    5,
    11,
    23,
    9,
    4,
    3,
    13,
    '2020-06-15',
    5
  ),
  (
    50,
    30,
    61,
    5,
    11,
    23,
    9,
    4,
    4,
    12,
    '2020-06-18',
    5
  ),
  (
    51,
    31,
    62,
    5,
    11,
    23,
    9,
    4,
    3,
    13,
    '2020-06-16',
    5
  ),
  (
    52,
    31,
    63,
    5,
    11,
    23,
    9,
    4,
    4,
    12,
    '2020-06-17',
    4
  ),
  (
    53,
    32,
    64,
    5,
    11,
    23,
    9,
    4,
    3,
    13,
    '2020-06-20',
    4
  );

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
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

--
-- Dumping data for table `slot_schedule`
--
INSERT INTO
  `slot_schedule` (
    `slot_schedule_id`,
    `schedule_state_id`,
    `schedule_city_id`,
    `schedule_office_id`,
    `slot_start_date`,
    `slot_end_date`,
    `slot1`,
    `slot2`,
    `slot3`,
    `slot4`,
    `slot5`,
    `status`
  )
VALUES
  (
    2,
    0,
    0,
    0,
    '2020-02-21',
    '2020-02-29',
    33,
    44,
    33,
    44,
    55,
    0
  ),
  (
    3,
    0,
    0,
    0,
    '2020-02-16',
    '2020-02-29',
    12,
    44,
    33,
    44,
    55,
    0
  ),
  (
    4,
    0,
    0,
    0,
    '2020-02-01',
    '2020-03-01',
    10,
    10,
    10,
    10,
    10,
    0
  ),
  (
    5,
    11,
    23,
    9,
    '2020-02-28',
    '2020-02-29',
    10,
    10,
    10,
    10,
    10,
    1
  );

-- --------------------------------------------------------
--
-- Table structure for table `state`
--
CREATE TABLE `state` (
  `state_id` int(10) NOT NULL,
  `state_name` varchar(300) NOT NULL,
  `status` int(10) NOT NULL DEFAULT 0
) ENGINE = InnoDB DEFAULT CHARSET = latin1;

--
-- Dumping data for table `state`
--
INSERT INTO
  `state` (`state_id`, `state_name`, `status`)
VALUES
  (10, 'Goa', 0),
  (11, 'Gujarat', 0),
  (13, 'Maharashtra', 0);

-- --------------------------------------------------------
--
-- Table structure for table `subcategory`
--
CREATE TABLE `subcategory` (
  `subcategory_id` int(10) NOT NULL,
  `sub_category_id` int(10) NOT NULL,
  `subcategory_name` varchar(300) NOT NULL,
  `status` int(10) NOT NULL DEFAULT 0
) ENGINE = InnoDB DEFAULT CHARSET = latin1;

--
-- Dumping data for table `subcategory`
--
INSERT INTO
  `subcategory` (
    `subcategory_id`,
    `sub_category_id`,
    `subcategory_name`,
    `status`
  )
VALUES
  (3, 4, 'LR', 0),
  (4, 4, 'DR', 0),
  (5, 5, 'Transport', 0),
  (6, 5, 'Non Transport', 0),
  (7, 6, 'RC', 0),
  (8, 4, 'learning licence', 0);

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
) ENGINE = InnoDB DEFAULT CHARSET = latin1;

--
-- Dumping data for table `tutorial`
--
INSERT INTO
  `tutorial` (
    `tutorial_id`,
    `tutorial_category_id`,
    `tutorial_subcategory_id`,
    `tutorial_type`,
    `tutorial_title`,
    `tutorial_description`,
    `tutorial_image`,
    `status`
  )
VALUES
  (
    20,
    4,
    3,
    'Learning Licence',
    'oppsakl',
    'asdd',
    '1584331929_1564115629250.jpg',
    0
  ),
  (
    21,
    4,
    3,
    'Learning Licence',
    'oppsakl',
    'asdd',
    '1584331952_Ganesh.png',
    0
  ),
  (
    22,
    6,
    3,
    'Learning Licence',
    'posty',
    'oiuyufytd',
    '1584090253_',
    0
  ),
  (
    23,
    4,
    3,
    'Learning Licence',
    'oppsakl',
    'asdd',
    '1584099260_',
    0
  ),
  (
    24,
    5,
    3,
    'Learning Licence',
    'oppsakl',
    'kwkcsnk',
    '1584090644_1564115629250.jpg',
    0
  ),
  (
    25,
    4,
    3,
    'Learning Licence',
    'posty',
    'asdfg',
    '1584091408_',
    0
  ),
  (
    26,
    5,
    4,
    '----- Select Tutorial -----',
    'oppsakl',
    'asdd',
    '1584091040_Ganesh.png',
    0
  );

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
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

--
-- Dumping data for table `user`
--
INSERT INTO
  `user` (
    `user_id`,
    `user_name`,
    `user_email`,
    `user_contact`,
    `user_password`,
    `user_gender`,
    `user_hobby`,
    `user_dob`,
    `user_address`,
    `user_profile`,
    `status`,
    `created_at`,
    `update_at`
  )
VALUES
  (
    24,
    'test',
    't@gmail.com',
    1234567899,
    '123456',
    'male',
    'cricket,music',
    '2020-03-20',
    'fhjdh',
    '1585547355_113.jpg',
    '',
    '2020-03-30 05:49:16',
    '2020-03-30 05:49:16'
  ),
  (
    25,
    'm',
    'm@gmail.com',
    23456789,
    '123',
    'male',
    'music',
    '2020-03-13',
    'vvhgvh',
    '1585584364_5.jpg',
    '',
    '2020-03-30 16:06:04',
    '2020-03-30 16:06:04'
  ),
  (
    26,
    'p',
    'p@gmail.com',
    123456789,
    '123',
    'male',
    'cricket,music',
    '2020-03-12',
    'hhvns',
    '1585657982_4.jpg',
    '',
    '2020-03-31 12:33:02',
    '2020-03-31 12:33:02'
  ),
  (
    27,
    'h',
    'h@gmail.com',
    123,
    '123',
    'female',
    'music,reading',
    '2020-04-24',
    'scdsc',
    '1587650957_4 - Copy.jpg',
    '',
    '2020-04-23 14:09:17',
    '2020-04-23 14:09:17'
  ),
  (
    29,
    'Yash',
    'yashtailor008@gmail.com',
    2147483647,
    '123',
    'male',
    'cricket',
    '1999-10-26',
    'gsdgdrdfhdh',
    '1592134447_download.jfif',
    '0',
    '2020-06-14 11:34:07',
    '2020-06-14 11:34:07'
  ),
  (
    31,
    'Kishan',
    'kishanvadodariya2000@gmail.com',
    2147483647,
    '123',
    'male',
    'cricket',
    '2000-02-17',
    '10 abc soc,surat',
    '1592142221_download.jfif',
    '0',
    '2020-06-14 13:43:41',
    '2020-06-14 13:43:41'
  ),
  (
    32,
    'Binal Naik',
    'binni.naik594@gmail.com',
    2147483647,
    '123',
    'female',
    'music',
    '1993-07-06',
    '10 soc abc ,surat',
    '1592143098_images.jfif',
    '0',
    '2020-06-14 13:58:18',
    '2020-06-14 13:58:18'
  );

-- --------------------------------------------------------
--
-- Table structure for table `vehical`
--
CREATE TABLE `vehical` (
  `vehical_id` int(200) NOT NULL,
  `vehical_name` varchar(200) NOT NULL,
  `status` int(10) NOT NULL DEFAULT 0
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

--
-- Dumping data for table `vehical`
--
INSERT INTO
  `vehical` (`vehical_id`, `vehical_name`, `status`)
VALUES
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
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

--
-- Indexes for dumped tables
--
--
-- Indexes for table `admin`
--
ALTER TABLE
  `admin`
ADD
  PRIMARY KEY (`admin_id`);

--
-- Indexes for table `area`
--
ALTER TABLE
  `area`
ADD
  PRIMARY KEY (`area_id`);

--
-- Indexes for table `category`
--
ALTER TABLE
  `category`
ADD
  PRIMARY KEY (`category_id`);

--
-- Indexes for table `city`
--
ALTER TABLE
  `city`
ADD
  PRIMARY KEY (`city_id`),
ADD
  KEY `city_state_id` (`city_state_id`);

--
-- Indexes for table `exam`
--
ALTER TABLE
  `exam`
ADD
  PRIMARY KEY (`exam_id`);

--
-- Indexes for table `exam_create`
--
ALTER TABLE
  `exam_create`
ADD
  PRIMARY KEY (`exam_create_id`);

--
-- Indexes for table `exam_question`
--
ALTER TABLE
  `exam_question`
ADD
  PRIMARY KEY (`exam_question_id`);

--
-- Indexes for table `final_result`
--
ALTER TABLE
  `final_result`
ADD
  PRIMARY KEY (`final_result_id`);

--
-- Indexes for table `fine`
--
ALTER TABLE
  `fine`
ADD
  PRIMARY KEY (`fine_id`);

--
-- Indexes for table `licence_confirm`
--
ALTER TABLE
  `licence_confirm`
ADD
  PRIMARY KEY (`confirm_id`);

--
-- Indexes for table `licence_register`
--
ALTER TABLE
  `licence_register`
ADD
  PRIMARY KEY (`licence_register_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE
  `payment`
ADD
  PRIMARY KEY (`payment_id`);

--
-- Indexes for table `post`
--
ALTER TABLE
  `post`
ADD
  PRIMARY KEY (`post_id`);

--
-- Indexes for table `post_image`
--
ALTER TABLE
  `post_image`
ADD
  PRIMARY KEY (`post_image_id`);

--
-- Indexes for table `proof`
--
ALTER TABLE
  `proof`
ADD
  PRIMARY KEY (`proof_id`);

--
-- Indexes for table `proof_image`
--
ALTER TABLE
  `proof_image`
ADD
  PRIMARY KEY (`proof_image_id`);

--
-- Indexes for table `result`
--
ALTER TABLE
  `result`
ADD
  PRIMARY KEY (`result_id`);

--
-- Indexes for table `rto_office`
--
ALTER TABLE
  `rto_office`
ADD
  PRIMARY KEY (`office_id`);

--
-- Indexes for table `slot`
--
ALTER TABLE
  `slot`
ADD
  PRIMARY KEY (`slot_id`);

--
-- Indexes for table `slot_book`
--
ALTER TABLE
  `slot_book`
ADD
  PRIMARY KEY (`slot_book_id`);

--
-- Indexes for table `slot_schedule`
--
ALTER TABLE
  `slot_schedule`
ADD
  PRIMARY KEY (`slot_schedule_id`);

--
-- Indexes for table `state`
--
ALTER TABLE
  `state`
ADD
  PRIMARY KEY (`state_id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE
  `subcategory`
ADD
  PRIMARY KEY (`subcategory_id`),
ADD
  KEY `sub_category_id` (`sub_category_id`);

--
-- Indexes for table `tutorial`
--
ALTER TABLE
  `tutorial`
ADD
  PRIMARY KEY (`tutorial_id`);

--
-- Indexes for table `user`
--
ALTER TABLE
  `user`
ADD
  PRIMARY KEY (`user_id`);

--
-- Indexes for table `vehical`
--
ALTER TABLE
  `vehical`
ADD
  PRIMARY KEY (`vehical_id`);

--
-- Indexes for table `vehical_registration`
--
ALTER TABLE
  `vehical_registration`
ADD
  PRIMARY KEY (`vehical_registration_id`);

--
-- AUTO_INCREMENT for dumped tables
--
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE
  `admin`
MODIFY
  `admin_id` int(20) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 17;

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE
  `area`
MODIFY
  `area_id` int(10) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 23;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE
  `category`
MODIFY
  `category_id` int(10) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 7;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE
  `city`
MODIFY
  `city_id` int(10) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 26;

--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE
  `exam`
MODIFY
  `exam_id` int(20) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 42;

--
-- AUTO_INCREMENT for table `exam_create`
--
ALTER TABLE
  `exam_create`
MODIFY
  `exam_create_id` int(200) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 38;

--
-- AUTO_INCREMENT for table `exam_question`
--
ALTER TABLE
  `exam_question`
MODIFY
  `exam_question_id` int(20) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 43;

--
-- AUTO_INCREMENT for table `final_result`
--
ALTER TABLE
  `final_result`
MODIFY
  `final_result_id` int(20) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 45;

--
-- AUTO_INCREMENT for table `fine`
--
ALTER TABLE
  `fine`
MODIFY
  `fine_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `licence_confirm`
--
ALTER TABLE
  `licence_confirm`
MODIFY
  `confirm_id` int(20) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 12;

--
-- AUTO_INCREMENT for table `licence_register`
--
ALTER TABLE
  `licence_register`
MODIFY
  `licence_register_id` int(20) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 67;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE
  `payment`
MODIFY
  `payment_id` int(200) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 20;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE
  `post`
MODIFY
  `post_id` int(10) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 22;

--
-- AUTO_INCREMENT for table `post_image`
--
ALTER TABLE
  `post_image`
MODIFY
  `post_image_id` int(10) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 10;

--
-- AUTO_INCREMENT for table `proof`
--
ALTER TABLE
  `proof`
MODIFY
  `proof_id` int(10) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 3;

--
-- AUTO_INCREMENT for table `proof_image`
--
ALTER TABLE
  `proof_image`
MODIFY
  `proof_image_id` int(200) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 68;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE
  `result`
MODIFY
  `result_id` int(20) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 223;

--
-- AUTO_INCREMENT for table `rto_office`
--
ALTER TABLE
  `rto_office`
MODIFY
  `office_id` int(10) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 12;

--
-- AUTO_INCREMENT for table `slot`
--
ALTER TABLE
  `slot`
MODIFY
  `slot_id` int(200) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 17;

--
-- AUTO_INCREMENT for table `slot_book`
--
ALTER TABLE
  `slot_book`
MODIFY
  `slot_book_id` int(200) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 54;

--
-- AUTO_INCREMENT for table `slot_schedule`
--
ALTER TABLE
  `slot_schedule`
MODIFY
  `slot_schedule_id` int(200) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 6;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE
  `state`
MODIFY
  `state_id` int(10) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 14;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE
  `subcategory`
MODIFY
  `subcategory_id` int(10) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 9;

--
-- AUTO_INCREMENT for table `tutorial`
--
ALTER TABLE
  `tutorial`
MODIFY
  `tutorial_id` int(10) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 27;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE
  `user`
MODIFY
  `user_id` int(20) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 33;

--
-- AUTO_INCREMENT for table `vehical`
--
ALTER TABLE
  `vehical`
MODIFY
  `vehical_id` int(200) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 7;

--
-- AUTO_INCREMENT for table `vehical_registration`
--
ALTER TABLE
  `vehical_registration`
MODIFY
  `vehical_registration_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--
--
-- Constraints for table `city`
--
ALTER TABLE
  `city`
ADD
  CONSTRAINT `city_state_id` FOREIGN KEY (`city_state_id`) REFERENCES `state` (`state_id`) ON DELETE CASCADE;

--
-- Constraints for table `subcategory`
--
ALTER TABLE
  `subcategory`
ADD
  CONSTRAINT `sub_category_id` FOREIGN KEY (`sub_category_id`) REFERENCES `category` (`category_id`) ON DELETE CASCADE;

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */
;

/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */
;

/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */
;