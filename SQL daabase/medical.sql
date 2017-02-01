-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2016 at 05:08 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medical`
--

-- --------------------------------------------------------

--
-- Table structure for table `diseases`
--

CREATE TABLE `diseases` (
  `Id` int(11) NOT NULL,
  `Area` varchar(100) NOT NULL,
  `Disease` varchar(25) NOT NULL,
  `Symptom` varchar(25) NOT NULL,
  `very low` varchar(5) NOT NULL,
  `low` varchar(5) NOT NULL,
  `moderate` varchar(5) NOT NULL,
  `high` varchar(5) NOT NULL,
  `very high` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diseases`
--

INSERT INTO `diseases` (`Id`, `Area`, `Disease`, `Symptom`, `very low`, `low`, `moderate`, `high`, `very high`) VALUES
(1, 'Chest', 'common cold', 'runny nose', 'no', 'maybe', 'maybe', 'yes', 'yes'),
(2, 'Chest', 'common cold', 'fever', 'no', 'maybe', 'maybe', 'no', 'no'),
(3, 'Chest', 'common cold', 'cough', 'no', 'maybe', 'maybe', 'yes', 'yes'),
(4, 'Chest', 'common cold', 'body ache', 'no', 'no', 'maybe', 'no', 'no'),
(5, 'Chest', 'common cold', 'headache', 'no', 'no', 'maybe', 'no', 'no'),
(6, 'Chest', 'common cold', 'fatigue', 'no', 'no', 'no', 'maybe', 'maybe'),
(7, 'Chest', 'common cold', 'sore throat', 'no', 'maybe', 'maybe', 'yes', 'yes'),
(8, 'Chest', 'common cold', 'loss of appetite', 'no', 'maybe', 'maybe', 'no', 'no'),
(9, 'Chest', 'common cold', 'sneezing', 'no', 'no', 'maybe', 'yes', 'yes'),
(11, 'Chest', 'flu', 'runny nose', 'no', 'no', 'maybe', 'yes', 'yes'),
(12, 'Chest', 'flu', 'fever', 'no', 'maybe', 'yes', 'yes', 'yes'),
(13, 'Chest', 'flu', 'cough', 'no', 'maybe', 'yes', 'yes', 'yes'),
(14, 'Chest', 'flu', 'vomiting', 'no', 'no', 'yes', 'maybe', 'maybe'),
(15, 'Chest', 'flu', 'sore throat', 'no', 'no', 'yes', 'yes', 'yes'),
(16, 'Chest', 'flu', 'loss of appetite', 'no', 'maybe', 'yes', 'yes', 'yes'),
(17, 'Chest', 'flu', 'sneezing', 'maybe', 'maybe', 'yes', 'yes', 'yes'),
(18, 'Chest', 'flu', 'headache', 'no', 'maybe', 'yes', 'yes', 'yes'),
(19, 'Chest', 'flu', 'body ache', 'no', 'maybe', 'yes', 'yes', 'yes'),
(20, 'Chest', 'Pneumonia', 'cough', 'no', 'no', 'maybe', 'yes', 'yes'),
(21, 'Chest', 'Pneumonia', 'fever', 'no', 'no', 'maybe', 'yes', 'yes'),
(22, 'Chest', 'Pneumonia', 'chills', 'no', 'maybe', 'maybe', 'yes', 'yes'),
(23, 'Chest', 'Pneumonia', 'short breath', 'no', 'maybe', 'maybe', 'no', 'no'),
(24, 'Chest', 'Pneumonia', 'headache', 'no', 'no', 'maybe', 'no', 'no'),
(25, 'Chest', 'Pneumonia', 'chestpain', 'maybe', 'yes', 'yes', 'yes', 'yes'),
(26, 'Chest', 'Heartattack', 'short breath', 'no', 'no', 'maybe', 'yes', 'yes'),
(27, 'Chest', 'Heartattack', 'Palpitations (irregular h', 'no', 'maybe', 'yes', 'yes', 'yes'),
(28, 'Chest', 'Heartattack', 'faster heartbeat', 'no', 'maybe', 'yes', 'yes', 'yes'),
(29, 'Chest', 'Heartattack', 'sweating', 'no', 'yes', 'yes', 'yes', 'yes'),
(30, 'Chest', 'Heartattack', 'nausea', 'no', 'maybe', 'yes', 'yes', 'yes'),
(31, 'Chest', 'Heartattack', 'weakness', 'no', 'maybe', 'yes', 'yes', 'yes'),
(32, 'Blood', 'Anemia', 'Fatigue', 'no', 'no', 'maybe', 'yes', 'yes'),
(33, 'Blood', 'Anemia', 'Paleskin', 'no', 'no', 'maybe', 'maybe', 'yes'),
(34, 'Blood', 'Anemia', 'dizziness', 'no', 'no', 'maybe', 'maybe', 'no'),
(35, 'Blood', 'Anemia', 'Strange Cravings', 'maybe', 'maybe', 'yes', 'yes', 'yes'),
(36, 'Blood', 'Anemia', 'Leg Cramps', 'no', 'no', 'maybe', 'no', 'no'),
(37, 'Blood', 'Anemia', 'Shortness of Breath', 'no', 'no', 'maybe', 'no', 'no'),
(38, 'Blood', 'Anemia', 'Insomnia', 'no', 'no', 'maybe', 'no', 'no'),
(39, 'Head', 'migrane', 'headache', 'no', 'no', 'maybe', 'yes', 'yes'),
(40, 'Head', 'migrane', 'vomitting', 'no', 'no', 'maybe', 'maybe', 'no'),
(41, 'Head', 'migrane', 'weakness', 'no', 'no', 'maybe', 'maybe', 'no'),
(42, 'Head', 'migrane', 'confusion', 'maybe', 'maybe', 'maybe', 'yes', 'yes'),
(43, 'Head', 'migrane', 'noise sensitivity', 'no', 'no', 'maybe', 'maybe', 'yes'),
(44, 'Head', 'migrane', 'visual hallucination', 'maybe', 'maybe', 'yes', 'yes', 'no'),
(45, 'Head', 'migrane', 'blurred vision', 'no', 'maybe', 'maybe', 'no', 'no'),
(46, 'Head', 'meningitis', 'fever', 'no', 'no', 'maybe', 'yes', 'yes'),
(47, 'Head', 'meningitis', 'nausea', 'no', 'no', 'maybe', 'maybe', 'maybe'),
(48, 'Head', 'meningitis', 'irritability', 'no', 'maybe', 'maybe', 'yes', 'no'),
(49, 'Head', 'meningitis', 'diarrhea', 'no', 'no', 'maybe', 'maybe', 'no'),
(50, 'Head', 'meningitis', 'seizures', 'no', 'maybe', 'maybe', 'yes', 'yes'),
(51, 'Head', 'meningitis', 'reduced alertness', 'no', 'maybe', 'yes', 'maybe', 'no'),
(52, 'Head', 'meningitis', 'neck stiffness', 'no', 'no', 'maybe', 'maybe', 'no'),
(53, 'Blood', 'leukemia', 'fever', 'no', 'no', 'maybe', 'maybe', 'no'),
(54, 'Blood', 'leukemia', 'chills', 'no', 'no', 'maybe', 'maybe', 'no'),
(55, 'Blood', 'leukemia', 'fatigue', 'no', 'maybe', 'maybe', 'maybe', 'no'),
(56, 'Blood', 'leukemia', 'infection', 'no', 'maybe', 'maybe', 'yes', 'yes'),
(57, 'Blood', 'leukemia', 'easy bleeding/brusing', 'maybe', 'maybe', 'yes', 'yes', 'yes'),
(58, 'Blood', 'leukemia', 'nosebleed', 'maybe', 'maybe', 'maybe', 'yes', 'yes'),
(59, 'Blood', 'leukemia', 'bone pain', 'maybe', 'maybe', 'yes', 'yes', 'yes'),
(60, 'Blood', 'leukemia', 'red spots in skin', 'no', 'maybe', 'maybe', 'maybe', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `doc`
--

CREATE TABLE `doc` (
  `id` int(11) NOT NULL,
  `user` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `nmc` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doc`
--

INSERT INTO `doc` (`id`, `user`, `pass`, `fname`, `mname`, `lname`, `email`, `nmc`) VALUES
(1, 'amulya', 'amulya', 'Amulya', 'Raj', 'Budhathoki', 'budhathoki.amulya@gmail.com', '203'),
(2, 'ravi', 'ravi', 'Ravi', 'Garbuja', 'Pun', 'ravi@gmail.com', '33322');

-- --------------------------------------------------------

--
-- Table structure for table `drug`
--

CREATE TABLE `drug` (
  `id` int(11) NOT NULL,
  `disease` varchar(100) NOT NULL,
  `drug_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drug`
--

INSERT INTO `drug` (`id`, `disease`, `drug_name`) VALUES
(1, 'flu', 'Tamiflu oral'),
(2, 'flu', 'Relenza Diskhaler inhalation'),
(3, 'flu', 'Oseltamivir oral'),
(4, 'flu', 'Zenamivir inhalation'),
(5, 'common cold', 'Benadryl'),
(6, 'common cold', 'Vicks Nyquil D cold'),
(7, 'common cold', 'diphenhydramine'),
(8, 'common cold', 'Sudafed PE Cold & Cough');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `Id` int(11) NOT NULL,
  `doc_id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Contact` varchar(12) NOT NULL,
  `Age` int(11) NOT NULL,
  `symptoms` varchar(100) DEFAULT NULL,
  `disease_diag` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`Id`, `doc_id`, `Name`, `Gender`, `Address`, `Contact`, `Age`, `symptoms`, `disease_diag`) VALUES
(27, 1, 'Amulya Raj Budhathoki', 'Male', 'bishalnagar', '9808659941', 23, '', ''),
(28, 1, 'Pradip Pokhrel', 'Male', 'bishalnagar', '9808659941', 23, '', ''),
(29, 1, 'RAAS', 'Male', 'bishalnagar', '9808659941', 23, '', ''),
(30, 1, 'medicallav@gmail.com', 'Male', 'bishalnagar', '9808659941', 23, '', ''),
(38, 1, 'Amulya Raj Budhathoki', 'Male', 'bishalnagar', '9808659941', 44, '', ''),
(48, 1, 'Bikram Limbu', 'Other', 'bishalnagar', '9808659941', 32, '', ''),
(49, 1, 'Bikram Limbu', 'Other', 'bishalnagar', '9808659941', 32, '', ''),
(50, 1, 'Dipak Thapa', 'Male', 'nakhipot', '986666666', 23, '', ''),
(51, 1, 'Asrar', 'Male', 'Kalimati', '9841230470', 55, '', ''),
(52, 1, 'RAAS', 'Other', 'bsl', '9899889', 22, '', ''),
(53, 2, 'Bikram', 'Male', 'bishalnagar', '9808659941', 44, '', ''),
(54, 2, 'RAAS', 'Female', 'bishalnagar', '9808659941', 33, '', ''),
(55, 1, 'Emil Shrestha', 'Male', 'bishalnagar', '9808659941', 23, '', ''),
(56, 1, 'Emil Shrestha', 'Male', 'bishalnagar', '9808659941', 23, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `patient_info`
--

CREATE TABLE `patient_info` (
  `patient_id` int(11) NOT NULL,
  `prob_area` varchar(100) NOT NULL,
  `selected_symptoms` varchar(100) DEFAULT NULL,
  `diagnosed_disease` varchar(100) DEFAULT NULL,
  `confi_per` float DEFAULT NULL,
  `drug_pres` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_info`
--

INSERT INTO `patient_info` (`patient_id`, `prob_area`, `selected_symptoms`, `diagnosed_disease`, `confi_per`, `drug_pres`) VALUES
(6, 'Chest', 'all', 'flu', 0, ''),
(1, 'Chest', 'all', 'common cold', 0, ''),
(7, 'Chest', 'all', 'flu', 0, ''),
(7, 'Chest', 'all', 'flu', 0, ''),
(7, 'Chest', 'all', 'flu', 0, ''),
(7, 'Chest', 'all', 'flu', 0, ''),
(7, 'Chest', 'all', 'flu', 0, ''),
(7, 'Chest', 'all', 'flu', 0, ''),
(7, 'Chest', 'all', 'flu', 46.6667, ''),
(7, 'Chest', 'all', 'flu', 46.67, ''),
(7, 'Chest', 'all', 'flu', 46.67, ''),
(7, 'Chest', 'all', 'flu', 46.67, ''),
(7, 'Chest', 'all', 'flu', 46.67, ''),
(7, 'Chest', 'all', 'flu', 46.67, ''),
(7, 'Chest', 'all', 'flu', 46.67, ''),
(7, 'Chest', 'all', 'flu', 46.67, ''),
(7, 'Chest', 'all', 'flu', 46.67, ''),
(7, 'Chest', 'all', 'flu', 46.67, ''),
(7, 'Chest', 'all', 'flu', 46.67, ''),
(7, 'Chest', 'all', 'flu', 46.67, ''),
(7, 'Chest', 'all', 'flu', 46.67, ''),
(8, 'Chest', 'all', 'flu', 91.11, ''),
(9, 'Chest', 'all', 'flu', 94.44, ''),
(10, 'Chest', 'all', 'flu', 50, ''),
(10, 'Chest', 'all', 'flu', 50, ''),
(10, 'Chest', 'all', 'flu', 23.33, ''),
(10, 'Chest', 'all', 'flu', 23.33, ''),
(11, 'Chest', 'all', 'flu', 55.56, ''),
(11, 'Chest', 'all', 'flu', 55.56, ''),
(12, 'Chest', 'all', 'flu', 94.44, ''),
(13, 'Chest', 'all', 'flu', 50, ''),
(13, 'Chest', 'all', 'flu', 50, ''),
(13, 'Chest', 'all', 'flu', 50, ''),
(14, 'Chest', 'all', 'flu', 50, ''),
(0, '', 'all', 'flu', 0, NULL),
(16, '', 'all', 'flu', 0, NULL),
(17, '', 'all', 'flu', 0, NULL),
(17, '', 'all', 'flu', 0, NULL),
(18, '', 'all', 'flu', 0, NULL),
(19, 'Chest', '', '', 0, ''),
(19, '', 'all', 'flu', 0, NULL),
(20, 'Chest', '', '', 0, ''),
(20, '', 'all', 'flu', 0, NULL),
(21, 'Chest', '', '', 0, ''),
(22, 'Head', '', '', 0, ''),
(23, 'Chest', '', '', 0, ''),
(24, 'Chest', '', '', 0, ''),
(24, '', 'all', 'flu', 0, NULL),
(24, '', 'all', 'flu', 0, NULL),
(24, 'Chest', 'all', 'flu', 23.33, NULL),
(24, 'Chest', 'all', 'flu', 23.33, NULL),
(24, 'Chest', 'all', 'flu', 23.33, NULL),
(24, 'Chest', 'all', 'flu', 23.33, NULL),
(24, 'Chest', 'all', 'flu', 23.33, NULL),
(24, 'Chest', 'all', 'flu', 23.33, NULL),
(25, 'Chest', '', '', 0, ''),
(25, 'Chest', 'all', 'flu', 23.33, NULL),
(25, 'Chest', 'all', 'flu', 23.33, NULL),
(25, 'Chest', 'all', 'flu', 58.89, NULL),
(25, 'Chest', 'all', 'flu', 58.89, NULL),
(25, 'Chest', 'all', 'flu', 32.22, NULL),
(26, 'Chest', '', '', 0, ''),
(26, 'Chest', 'all', 'flu', 32.22, NULL),
(26, 'Chest', 'all', 'flu', 0, ''),
(26, 'Chest', 'all', 'flu', 32.22, ''),
(27, 'Chest', '', '', 0, ''),
(27, 'Chest', 'all', 'flu', 41.11, ''),
(27, 'Chest', 'all', 'flu', 41.11, ''),
(27, 'Chest', 'all', 'Pneumonia', 60, ''),
(27, 'Chest', 'all', 'Pneumonia', 60, ''),
(27, 'Chest', 'all', 'Pneumonia', 60, ''),
(27, 'Chest', 'all', 'Pneumonia', 60, ''),
(27, 'Chest', 'all', 'Pneumonia', 60, ''),
(27, 'Chest', 'all', 'Pneumonia', 60, ''),
(27, 'Chest', 'all', 'Pneumonia', 60, ''),
(27, 'Chest', 'all', 'Pneumonia', 60, ''),
(27, 'Chest', 'all', 'Pneumonia', 60, ''),
(0, '', '', '', 0, ''),
(28, 'Chest', '', '', 0, ''),
(28, 'Chest', 'all', 'flu', 76.67, ''),
(28, 'Chest', 'all', 'flu', 76.67, ''),
(29, 'Chest', '', '', 0, ''),
(29, 'Chest', 'all', 'Heartattack', 25, ''),
(29, 'Chest', 'all', 'Heartattack', 25, ''),
(29, 'Chest', 'all', 'Heartattack', 25, ''),
(29, 'Chest', 'all', 'Heartattack', 25, ''),
(29, 'Chest', 'all', 'Heartattack', 25, ''),
(29, 'Chest', 'all', 'Heartattack', 25, ''),
(29, 'Chest', 'all', 'Heartattack', 25, ''),
(29, 'Chest', 'all', 'Heartattack', 25, ''),
(29, 'Chest', 'all', 'Heartattack', 25, ''),
(29, 'Chest', 'all', 'Heartattack', 25, ''),
(29, 'Chest', 'all', 'Pneumonia', 25, ''),
(29, 'Chest', 'all', 'Pneumonia', 25, ''),
(29, 'Chest', 'all', 'Heartattack', 25, ''),
(29, 'Chest', 'all', 'Heartattack', 25, ''),
(29, 'Chest', 'all', 'Heartattack', 25, ''),
(29, 'Chest', 'all', 'Heartattack', 25, ''),
(29, 'Chest', 'all', 'Pneumonia', 46.67, ''),
(29, 'Chest', 'all', 'Pneumonia', 46.67, ''),
(29, 'Chest', 'all', 'Pneumonia', 46.67, ''),
(29, 'Chest', 'all', 'Pneumonia', 46.67, ''),
(29, 'Chest', 'all', 'Heartattack', 25, ''),
(29, 'Chest', 'all', 'Heartattack', 25, ''),
(0, '', '', '', 0, ''),
(30, 'Chest', '', '', 0, ''),
(30, 'Chest', 'all', 'Pneumonia', 25, ''),
(30, 'Chest', 'all', 'Heartattack', 25, ''),
(30, 'Chest', 'all', 'Pneumonia', 25, ''),
(30, 'Chest', 'all', 'Pneumonia', 25, ''),
(30, 'Chest', 'all', 'Pneumonia', 25, ''),
(30, 'Chest', 'all', 'Pneumonia', 25, ''),
(30, 'Chest', 'all', 'Pneumonia', 25, ''),
(30, 'Chest', 'all', 'Pneumonia', 25, ''),
(30, 'Chest', 'all', 'Pneumonia', 25, ''),
(30, 'Chest', 'all', 'Pneumonia', 25, ''),
(30, 'Chest', 'all', 'Pneumonia', 25, ''),
(31, 'Chest', '', '', 0, ''),
(31, 'Chest', 'all', 'Pneumonia', 65, ''),
(31, 'Chest', 'all', 'Pneumonia', 65, ''),
(0, 'Head', '', '', 0, ''),
(0, 'Head', 'all', 'migrane', 40, ''),
(0, 'Head', 'all', 'migrane', 40, ''),
(32, 'Chest', '', '', 0, ''),
(32, 'Chest', 'all', 'Pneumonia', 25, ''),
(33, 'Head', '', '', 0, ''),
(33, 'Head', 'all', 'migrane', 28.57, ''),
(34, 'Head', '', '', 0, ''),
(34, 'Head', 'all', 'migrane', 28.57, ''),
(35, 'Head', '', '', 0, ''),
(36, 'Chest', '', '', 0, ''),
(37, 'Blood', '', '', 0, ''),
(38, 'Head', '', '', 0, ''),
(39, 'Head', '', '', 0, ''),
(40, 'Head', '', '', 0, ''),
(41, 'Head', '', '', 0, ''),
(42, 'Chest', '', '', 0, ''),
(43, 'Blood', '', '', 0, ''),
(44, 'Chest', '', '', 0, ''),
(45, 'Blood', '', '', 0, ''),
(45, 'Blood', 'all', 'leukemia', 32.86, ''),
(45, 'Blood', 'all', 'leukemia', 32.86, ''),
(46, 'Chest', '', '', 0, ''),
(46, 'Chest', 'all', 'Heartattack', 25, ''),
(47, 'Blood', '', '', 0, ''),
(47, 'Blood', 'all', 'leukemia', 70, ''),
(47, 'Blood', 'all', 'leukemia', 70, ''),
(47, 'Blood', 'all', 'leukemia', 70, ''),
(48, 'Chest', '', '', 0, ''),
(49, 'Head', '', '', 0, ''),
(49, 'Head', 'all', 'migrane', 40, ''),
(49, 'Head', 'all', 'migrane', 40, ''),
(50, 'Blood', '', '', 0, ''),
(51, 'Head', '', '', 0, ''),
(50, 'Blood', 'all', 'leukemia', 51.43, ''),
(51, 'Head', 'all', 'migrane', 40, ''),
(52, 'Head', '', '', 0, ''),
(52, 'Head', 'all', 'meningitis', 45.71, ''),
(53, 'Head', '', '', 0, ''),
(53, 'Head', 'all', 'meningitis', 55.71, ''),
(54, 'Blood', '', '', 0, ''),
(54, 'Blood', 'all', 'leukemia', 32.86, ''),
(55, 'Chest', '', '', 0, ''),
(55, 'Chest', 'all', 'Heartattack', 33.33, ''),
(55, 'Chest', 'all', 'Heartattack', 60, ''),
(56, 'Chest', '', '', 0, ''),
(56, 'Chest', 'all', 'Pneumonia', 38.33, ''),
(56, 'Chest', 'all', 'Pneumonia', 38.33, '');

-- --------------------------------------------------------

--
-- Table structure for table `ques`
--

CREATE TABLE `ques` (
  `ques_id` int(11) NOT NULL,
  `disease` varchar(100) NOT NULL,
  `questions` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ques`
--

INSERT INTO `ques` (`ques_id`, `disease`, `questions`) VALUES
(1, 'Pneumonia', 'Infection in heart muscles?(X-Ray Mandatory)'),
(2, 'Pneumonia', 'Fluids Present in Chest Cavity?(X-Ray Mandatory)'),
(3, 'Heatattack', 'Is the Level of Enzyme''s creatine kinase (CK), and the proteins troponin I (TnI) and troponin T (TnT) HIGH??.'),
(4, 'Heartattack', 'ECG results irregular?'),
(6, 'migrane', 'Headache lasting more than 4 to 72 hours??'),
(7, 'Anemia', 'Hematocrit and Hemoglobin level'),
(8, 'meningitis', 'nfection in Urine?'),
(9, 'leukemia', 'abnormal level of white blood cell?'),
(10, 'migrane', 'one sided headache?'),
(11, 'Anemia', 'Colonoscopy results irregular?');

-- --------------------------------------------------------

--
-- Table structure for table `symptoms`
--

CREATE TABLE `symptoms` (
  `id` int(11) NOT NULL,
  `Symptoms` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `symptoms`
--

INSERT INTO `symptoms` (`id`, `Symptoms`) VALUES
(1, 'cough'),
(2, 'fever'),
(3, 'chestpain'),
(4, 'wheezing noise'),
(5, 'hoarseness'),
(6, 'vomit'),
(7, 'short breath'),
(8, 'thirst'),
(9, 'tiredness'),
(10, 'blurred vision'),
(11, 'numbness in hands and feet');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `test_id` int(11) NOT NULL,
  `disease` varchar(100) NOT NULL,
  `test` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`test_id`, `disease`, `test`) VALUES
(1, 'Pneumonia', 'X-Ray'),
(2, 'Pneumonia', 'Urine test'),
(3, 'Heartattack', 'Electrocardiogram (ECG),                      Blood tests cardiac enzymes                          Echocardiography,\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diseases`
--
ALTER TABLE `diseases`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `doc`
--
ALTER TABLE `doc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drug`
--
ALTER TABLE `drug`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `ques`
--
ALTER TABLE `ques`
  ADD PRIMARY KEY (`ques_id`);

--
-- Indexes for table `symptoms`
--
ALTER TABLE `symptoms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`test_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `diseases`
--
ALTER TABLE `diseases`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `doc`
--
ALTER TABLE `doc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `drug`
--
ALTER TABLE `drug`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT for table `ques`
--
ALTER TABLE `ques`
  MODIFY `ques_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `symptoms`
--
ALTER TABLE `symptoms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `test_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
