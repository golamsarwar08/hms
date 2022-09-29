-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2022 at 04:39 PM
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
-- Database: `hospitalmanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `Doctor_Name` varchar(50) NOT NULL,
  `Department` varchar(50) NOT NULL,
  `App_Date` date NOT NULL,
  `App_Time` time(6) NOT NULL,
  `Patient_Name` varchar(200) NOT NULL,
  `Phone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`Doctor_Name`, `Department`, `App_Date`, `App_Time`, `Patient_Name`, `Phone`) VALUES
('', '', '0000-00-00', '00:00:00.000000', '', ''),
('Md. Amin', 'Cardiologist', '0000-00-00', '08:00:00.000000', 'Md. Tangidul', '01039894879'),
('Md. Amin', 'Cardiologist ', '2022-09-29', '17:19:24.000000', 'Md. Ruhul', '013546546454'),
('Md. Borhan', 'Pathology', '2022-09-30', '23:05:24.123208', 'Md. Kalam', '015454468464'),
('Md. Tanjidul', 'Medicine', '2022-10-03', '15:05:24.123208', 'Md. Nijam', '01654564564'),
('Md. Amin', 'Cardiologist', '0000-00-00', '00:00:10.000000', 'Md. Sarwar', '01927274894'),
('Md. Borhan', 'Pathology', '0000-00-00', '07:00:00.000000', 'Md. Hasan', '019298439843');

-- --------------------------------------------------------

--
-- Table structure for table `contact us`
--

CREATE TABLE `contact us` (
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Department` varchar(50) NOT NULL,
  `Problem` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact us`
--

INSERT INTO `contact us` (`Name`, `Email`, `Department`, `Problem`) VALUES
('', '', '', ''),
('', '', 'cardiologist', '');

-- --------------------------------------------------------

--
-- Table structure for table `doctorlist`
--

CREATE TABLE `doctorlist` (
  `Name` varchar(20) NOT NULL,
  `Department` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Fees` int(10) NOT NULL,
  `dc_id` int(5) NOT NULL,
  `Phone No.` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctorlist`
--

INSERT INTO `doctorlist` (`Name`, `Department`, `Email`, `Fees`, `dc_id`, `Phone No.`) VALUES
('Md. Amin', 'Cardiologist ', 'amin@amin.com', 1000, 1, '0156161651'),
('Md. Borhan', 'Pathology', 'borhan@borhan.com', 800, 2, '05641516151'),
('Md. Tanjidul', 'Medicine', 'tanjidul@tanji.com', 1000, 3, '011984984554'),
('Lamha Akter', 'Anatomy', 'lamha@lamha.com', 1000, 4, '09165194894'),
('Dr. Joyo', 'Forensic Medicine', 'joyo@joyo.com', 1000, 5, '04199846564'),
('Md. Hasan', 'Surgery', 'hasan@hasan.com', 1500, 6, '01051948515');

-- --------------------------------------------------------

--
-- Table structure for table `doctorlogin`
--

CREATE TABLE `doctorlogin` (
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctorlogin`
--

INSERT INTO `doctorlogin` (`email`, `password`) VALUES
('admin@admin.com', 'admin'),
('test@test.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `patientinfo`
--

CREATE TABLE `patientinfo` (
  `pt_id` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Age` int(20) NOT NULL,
  `Weigth` int(20) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Problem` varchar(500) NOT NULL,
  `department` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patientinfo`
--

INSERT INTO `patientinfo` (`pt_id`, `Name`, `Age`, `Weigth`, `Address`, `Problem`, `department`) VALUES
('1', 'Md. Rabbi', 29, 60, '3 rankin street, Dhaka', 'Heart Disease, High Pressure.', 'Cardiologist'),
('2', 'Md. Hassan', 23, 65, '4 dhanmondi road, Dhaka', 'Obesity, Skin Problem', 'Pathology'),
('3', 'Md. Jisan', 25, 70, '9 Nazimuddin road, Dhaka', 'Stomach Pain, High Fever', 'Medicine'),
('4', 'Md. Kamal', 30, 80, '920 ddjskd road, dh', 'Lungs Problem, Trouble Breathing', 'Cardiologist'),
('5', 'Jinia Begum', 27, 58, '982e7jkh kjhk kdhs ', 'Type 2 diabetes', 'Cardiologist'),
('6', 'Neha Islam', 35, 75, '2343 sdklsad ksdl', 'Colon and rectal cancer', 'Surgeon');

-- --------------------------------------------------------

--
-- Table structure for table `patientlogin`
--

CREATE TABLE `patientlogin` (
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patientlogin`
--

INSERT INTO `patientlogin` (`email`, `password`) VALUES
('patient1@patient.com', 'patient'),
('patient@patient.com', 'patient');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`Phone`);

--
-- Indexes for table `doctorlist`
--
ALTER TABLE `doctorlist`
  ADD PRIMARY KEY (`dc_id`);

--
-- Indexes for table `doctorlogin`
--
ALTER TABLE `doctorlogin`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `patientinfo`
--
ALTER TABLE `patientinfo`
  ADD PRIMARY KEY (`pt_id`);

--
-- Indexes for table `patientlogin`
--
ALTER TABLE `patientlogin`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
