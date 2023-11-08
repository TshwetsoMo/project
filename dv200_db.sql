-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2023 at 11:33 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dv200_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `Patient` varchar(25) NOT NULL,
  `Doctor` varchar(25) NOT NULL,
  `Room` int(11) NOT NULL,
  `Date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`Patient`, `Doctor`, `Room`, `Date`) VALUES
('Nelson Mandela', 'Dr. S Biko', 101, 2023),
('Henry Ford', 'Dr. J Christ', 909, 2023),
('Nelson Mandela', 'Dr. S Biko', 101, 0);

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(25) NOT NULL,
  `RoomNumber` int(25) NOT NULL,
  `ProfileImg` int(25) DEFAULT NULL,
  `NameSurname` varchar(25) NOT NULL,
  `Age` int(25) NOT NULL,
  `Gender` varchar(25) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Password` varchar(25) NOT NULL,
  `PhoneNumber` int(25) NOT NULL,
  `Specialization` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `RoomNumber`, `ProfileImg`, `NameSurname`, `Age`, `Gender`, `Email`, `Password`, `PhoneNumber`, `Specialization`) VALUES
(660125926, 808, 0, 'Dr. S Biko', 57, '', 'stevebiko@emails.com', 'revit101', 62345678, 'Orthopedic surgeon'),
(690127945, 303, 0, 'Dr. B.Y Jochannan', 54, '', 'benyosef@emails.com', 'history456', 278234567, 'Clinical Psychologist'),
(700529634, 606, 0, 'Dr. P Lumumba', 53, '', 'plolumumba@emails.com', 'history789', 711134567, 'General Practitioner'),
(830424076, 101, 0, 'Dr. U Johnson', 40, '', 'umarJ@emails.com', 'newedu', 123345678, 'Otolaryngologists'),
(870401234, 505, 0, 'Dr. J Christ', 33, '', 'jesuschrist@emails.com', 'sonoman', 773334567, 'Cardiologist'),
(880121539, 404, 0, 'Dr. I Yoichi', 35, '', 'isagiy@emails.com', 'egoistanime', 661234567, 'Optometrist'),
(880125099, 202, 0, 'Dr. M Musa', 35, '', 'mansamusa@emails.com', 'richestOAT', 123445678, 'Dermatologist'),
(890711675, 909, 0, 'Dr. M X', 34, '', 'malcomx@emails.com', 'oratorskill', 123456789, 'General Practitioner'),
(910723756, 707, 0, 'Dr. J Peterson', 32, '', 'jordanp@emails.com', 'psychoanalysis', 887654321, 'Cognitive Psychologist');

-- --------------------------------------------------------

--
-- Table structure for table `receptionist`
--

CREATE TABLE `head receptionist` (
  `ID` int(25) NOT NULL,
  `Profile img` text NOT NULL,
  `NameSurname` varchar(25) NOT NULL,
  `Age` int(25) NOT NULL,
  `Gender` varchar(25) NOT NULL,
  `phone number` int(25) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Password` varchar(25) NOT NULL,
  `Rank` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `head receptionist`
--

INSERT INTO `head receptionist` (`ID`, `Profile img`, `NameSurname`, `Age`, `Gender`, `phone number`, `Email`, `Password`, `Rank`) VALUES
(123456789, '', 'Shahrazad Ali', 50, 'Female', 123456789, 'Sali@emails.com', 'sistalk', 'Head Receptionist');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `ID` int(25) NOT NULL,
  `ProfileImg` int(11) NOT NULL,
  `NameSurname` text NOT NULL,
  `Age` int(25) NOT NULL,
  `Gender` text NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Password` varchar(25) NOT NULL,
  `PhoneNumber` int(25) NOT NULL,
  `MedicalAidNumber` int(25) NOT NULL,
  `history` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`ID`, `ProfileImg`, `NameSurname`, `Age`, `Gender`, `Email`, `Password`, `PhoneNumber`, `MedicalAidNumber`, `history`) VALUES
(20550889, 0, 'Nelson Mandela', 102, 'Male', 'Mandela@emails.com', 'Madiba', 123455678, 321, 'Doc_003NM'),
(230101297, 0, 'Thoth Tresmegistres', 100, 'Male', 'kaba@emails.com', 'emeraldtab', 821234567, 999, 'Doc_010TT'),
(700429756, 0, 'Bruce Lee', 53, 'Male', 'Blee@emails.com', 'hayao101', 731234567, 888, 'Doc_011BL'),
(800206509, 0, 'Ramana Maharshi', 43, 'Male', 'Rmaharshi@emails.com', 'enlightenment', 122345677, 987, 'Doc_009RM'),
(800620546, 0, 'Allan Watts', 43, 'Male', 'Watts@emails.com', 'zenmind123', 112234567, 564, 'Doc_005AW'),
(830315508, 0, 'John H. Clark', 40, 'Male', 'JHClark@emails.com', 'history123', 123456678, 456, 'Doc_004JHC'),
(880519653, 0, 'Henry Ford', 35, 'Male', 'Hford@emails.com', 'trialnerror', 761234567, 786, 'Doc_013HF'),
(880925786, 0, 'Niccolo Machiavelli', 35, 'Male', 'Niccolo@emails.com', 'theprince', 123455667, 897, 'Doc_008NM'),
(900804408, 0, 'Robert Greene', 33, 'Male', 'RG@emails.com', 'humannature', 123456789, 123, 'Doc_001RG'),
(930315425, 0, 'Lao Tsu', 30, 'Female', 'lautsu@emails.com', 'artowar', 123445567, 789, 'Doc_007LT'),
(931109374, 0, 'Kevin Samuels', 30, 'Male', 'KS@emails.com', 'truthbetold', 661234566, 876, 'Doc012KS'),
(970103877, 0, 'Virgil Abloh', 26, 'Male', 'vabloh@emails.com', 'freegame', 278356589, 234, 'Doc_014VA'),
(980915804, 0, 'Napoleon Hill', 25, 'Male', 'nhill@emails.com', 'thinkrich', 122345678, 231, 'Doc_002NH'),
(990827723, 0, 'Frederick Nietzsche', 24, 'Male', 'ubermen@emails.com', 'nein9', 122334567, 654, 'Doc_006FN');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `ID` int(25) NOT NULL,
  `Profile img` geometry NOT NULL,
  `NameSurname` varchar(25) NOT NULL,
  `Age` int(25) NOT NULL,
  `Gender` varchar(25) NOT NULL,
  `phone number` int(25) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Password` varchar(25) NOT NULL,
  `Rank` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `receptionist`
--

CREATE TABLE `receptionist` (
  `id` int(25) NOT NULL,
  `ProfileImg` text NOT NULL,
  `NameSurname` varchar(25) NOT NULL,
  `Age` int(25) NOT NULL,
  `Gender` varchar(25) NOT NULL,
  `PhoneNumber` int(25) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Password` varchar(25) NOT NULL,
  `Rank` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `receptionist`
--

INSERT INTO `receptionist` (`id`, `ProfileImg`, `NameSurname`, `Age`, `Gender`, `PhoneNumber`, `Email`, `Password`, `Rank`) VALUES
(980909675, '', 'Chimamanda Adiche', 25, 'Female', 123456789, 'adiche@emails.com', 'bosslady', 'Receptionist'),
(1123456789, '', 'Maya Angelou', 33, 'Female', 123456789, 'Mangelou@emails.com', 'meta101', 'Receptionist'),
(1223456789, '', 'Ayn Rand', 43, 'Female', 123456789, 'Arand@emails.com', 'selfish101', 'Receptionist'),
(1233456789, '', 'Nandi Zulu', 36, 'Female', 123456789, 'Nzulu@emails.com', 'mashaka', 'Receptionist'),
(1234456789, '', 'Wangari Maathai', 39, 'Female', 123456789, 'wm@emails.com', 'greenbelt', 'Receptionist');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `ID` int(25) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `Number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`Number`) VALUES
(101),
(202),
(303),
(404),
(505),
(606),
(707),
(808),
(909);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `head receptionist`
--
ALTER TABLE `head receptionist`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `receptionist`
--
ALTER TABLE `receptionist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`Number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=910723758;

--
-- AUTO_INCREMENT for table `head receptionist`
--
ALTER TABLE `head receptionist`
  MODIFY `ID` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123456790;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `ID` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1020550890;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `ID` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `receptionist`
--
ALTER TABLE `receptionist`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1234456790;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `Number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=910;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
