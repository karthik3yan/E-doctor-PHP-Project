-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2019 at 08:56 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-doctor`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(3) NOT NULL,
  `category_title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `category_title`) VALUES
(1, 'Allergies'),
(2, 'Blood & Immune System'),
(3, 'Bones, joints and muscles'),
(4, 'Brain and nerves'),
(5, 'Cancer'),
(6, 'Chest and lungs'),
(7, 'Child health'),
(8, 'Contraception and sexual health'),
(9, 'Diabetes and hormone problems'),
(10, 'Ears, nose, throat and mouth'),
(11, 'Eyes'),
(12, 'General'),
(13, 'Genito-urinary/Kidney'),
(14, 'Gut, bowel and stomach'),
(15, 'Health promotion'),
(16, 'Heart Health'),
(17, 'Infections'),
(18, 'Injury and accidents'),
(19, 'Liver and gallbladder'),
(20, 'Medicines'),
(21, 'Men\'s health'),
(22, 'Mental health'),
(23, 'Operations and surgical procedures'),
(24, 'Pregnancy and newborn'),
(25, 'Senior health'),
(26, 'Skin and nails'),
(27, 'Symptoms'),
(28, 'Teenage health'),
(29, 'Tests and investigations'),
(30, 'Women\'s health');

-- --------------------------------------------------------

--
-- Table structure for table `chatstart`
--

CREATE TABLE `chatstart` (
  `chatstartid` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `doctor_id` int(3) NOT NULL,
  `dateandtime` datetime NOT NULL,
  `startby` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chatstart`
--

INSERT INTO `chatstart` (`chatstartid`, `user_name`, `doctor_id`, `dateandtime`, `startby`) VALUES
(4, 'karthi', 2, '2019-03-21 12:30:08', ''),
(5, 'karthi', 2, '2019-03-21 12:30:22', ''),
(6, 'karthi', 2, '2019-03-21 12:31:22', ''),
(7, 'karthi', 2, '2019-03-21 12:31:22', ''),
(8, 'karthi', 0, '2019-03-21 13:08:57', ''),
(9, 'karthi', 2, '2019-03-21 13:09:15', ''),
(10, 'karthi', 2, '2019-03-21 13:44:26', ''),
(11, 'karthi', 2, '2019-03-21 14:21:47', 'patient'),
(12, 'karthi', 1, '2019-03-21 14:29:29', 'doctor'),
(13, 'karthi', 1, '2019-03-21 14:29:42', 'doctor'),
(14, '', 1, '2019-03-21 14:29:42', 'doctor'),
(15, '', 1, '2019-03-21 14:31:25', 'doctor'),
(16, 'karthi', 1, '2019-03-21 14:33:04', 'doctor'),
(17, 'karthi', 2, '2019-03-21 14:33:40', 'patient'),
(18, 'karthi', 1, '2019-03-21 14:33:44', 'patient'),
(19, 'karthi', 1, '2019-03-21 14:33:50', 'patient'),
(20, 'karthi', 1, '2019-03-21 14:33:51', 'patient'),
(21, 'karthi', 1, '2019-03-21 14:33:58', 'doctor'),
(22, 'karthi', 1, '2019-03-21 14:34:49', 'doctor'),
(23, 'karthi', 1, '2019-03-21 14:36:11', 'doctor'),
(24, '1', 1, '2019-03-21 14:36:11', 'doctor'),
(25, 'karthi', 1, '2019-03-21 14:36:32', 'doctor'),
(26, 'karthi', 1, '2019-03-21 14:36:35', 'doctor'),
(27, 'karthi', 1, '2019-03-21 14:36:36', 'doctor'),
(28, 'karthi', 1, '2019-03-21 14:36:42', 'doctor'),
(29, 'karthi', 1, '2019-03-21 14:36:43', 'doctor'),
(30, 'karthi', 1, '2019-03-21 14:36:48', 'patient'),
(31, 'karthi', 1, '2019-03-21 14:38:14', 'doctor'),
(32, 'karthi', 1, '2019-03-21 15:00:21', 'doctor'),
(33, 'karthi', 1, '2019-03-21 15:01:40', 'doctor'),
(34, 'karthi', 1, '2019-03-21 15:01:41', 'doctor'),
(35, 'karthi', 1, '2019-03-21 15:02:01', 'patient'),
(36, 'karthi', 1, '2019-03-21 15:02:15', 'patient'),
(37, 'karthi', 1, '2019-03-21 15:02:16', 'patient'),
(38, 'karthi', 1, '2019-03-21 15:02:21', 'doctor'),
(39, 'karthi', 2, '2019-03-21 15:03:04', 'patient'),
(40, 'karthi', 1, '2019-03-21 15:03:15', 'patient'),
(41, 'karthi', 1, '2019-03-21 16:14:54', 'doctor'),
(42, 'karthi', 1, '2019-03-21 16:57:41', 'doctor'),
(43, 'karthi', 1, '2019-03-21 17:20:31', 'doctor'),
(44, 'karthi', 1, '2019-03-21 20:33:28', 'doctor'),
(45, 'admin', 4, '2019-03-21 21:30:09', 'patient'),
(46, 'admin', 2, '2019-03-21 21:30:27', 'patient'),
(47, 'karthi', 1, '2019-03-21 21:37:03', 'patient'),
(48, 'karthi', 4, '2019-03-21 21:37:36', 'patient'),
(49, 'karthi', 1, '2019-03-21 21:37:59', 'patient'),
(50, 'karthi', 2, '2019-03-22 11:12:08', 'patient'),
(51, 'karthi', 2, '2019-03-22 11:12:17', 'patient'),
(52, 'karthi', 2, '2019-03-22 11:12:17', 'patient'),
(53, 'karthi', 1, '2019-03-22 11:16:44', 'doctor'),
(54, 'karthi', 1, '2019-04-02 14:16:28', 'patient'),
(55, 'karthi', 1, '2019-04-02 14:16:45', 'patient'),
(56, 'karthi', 1, '2019-04-02 14:16:46', 'patient'),
(57, 'karthi', 1, '2019-04-02 14:17:01', 'doctor'),
(58, 'karthi', 1, '2019-04-02 14:17:09', 'doctor'),
(59, 'karthi', 1, '2019-04-02 14:17:09', 'doctor'),
(60, 'karthi', 1, '2019-04-02 14:17:13', 'patient'),
(61, 'karthi', 2, '2019-04-02 14:18:24', 'patient'),
(62, 'karthi', 1, '2019-04-02 14:20:15', 'doctor'),
(63, 'karthi', 1, '2019-04-02 14:22:34', 'patient'),
(64, 'karthi', 1, '2019-04-24 14:02:21', 'patient'),
(65, 'karthi', 2, '2019-04-24 14:02:28', 'patient'),
(66, 'karthi', 1, '2019-04-24 14:03:37', 'doctor'),
(67, 'karthi', 1, '2019-06-12 14:36:38', 'patient'),
(68, 'karthi', 1, '2019-06-12 14:36:44', 'patient'),
(69, 'karthi', 1, '2019-06-12 14:36:45', 'patient'),
(70, 'karthi', 1, '2019-06-12 14:36:52', 'doctor'),
(71, 'karthi', 1, '2019-06-12 14:36:57', 'doctor'),
(72, 'karthi', 1, '2019-06-12 14:36:58', 'doctor'),
(73, 'karthi', 1, '2019-06-12 14:37:00', 'patient'),
(74, 'karthi', 1, '2019-06-12 14:37:09', 'patient'),
(75, 'karthi', 1, '2019-06-12 14:37:09', 'patient'),
(76, 'karthi', 1, '2019-06-12 14:37:13', 'doctor');

-- --------------------------------------------------------

--
-- Table structure for table `consult`
--

CREATE TABLE `consult` (
  `consult_id` int(3) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `doctor_id` int(3) NOT NULL,
  `dateandtime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `consult`
--

INSERT INTO `consult` (`consult_id`, `user_name`, `doctor_id`, `dateandtime`) VALUES
(191, 'karthi', 2, '2019-03-21 12:29:09'),
(192, 'karthi', 1, '2019-03-21 13:08:57'),
(193, 'admin', 4, '2019-03-21 21:30:09'),
(194, 'admin', 2, '2019-03-21 21:30:27'),
(195, 'karthi', 4, '2019-03-21 21:37:36');

-- --------------------------------------------------------

--
-- Table structure for table `dept`
--

CREATE TABLE `dept` (
  `dept_id` int(3) NOT NULL,
  `dept_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dept`
--

INSERT INTO `dept` (`dept_id`, `dept_name`) VALUES
(1, 'Paediatrics'),
(2, 'Psyhciatry'),
(3, 'ENT'),
(4, 'Neurology'),
(5, 'General Medicine');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `dr_id` int(11) NOT NULL,
  `dr_name` varchar(50) NOT NULL,
  `dr_password` varchar(50) NOT NULL,
  `dr_phone` int(11) NOT NULL,
  `dr_availabilty` varchar(100) NOT NULL,
  `dept` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`dr_id`, `dr_name`, `dr_password`, `dr_phone`, `dr_availabilty`, `dept`, `image`) VALUES
(1, 'Ramesh', '1234', 12345, '20:00 to 23:00', 'General Health', 'dr1.jpg'),
(2, 'Suresh', '1234', 545, '17:00 to 20:00', 'Cardiology', 'dr2.jpg'),
(3, 'Ganesh', '1234', 5631, '15:00 to 18:00', 'Dental', 'dr3.jpg'),
(4, 'Vignesh', '1234', 4681, '12:00 to 15:00', 'Medical Research', 'dr1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(3) NOT NULL,
  `dr_id` int(3) NOT NULL,
  `user_id` int(3) NOT NULL,
  `sender` varchar(50) NOT NULL,
  `message` varchar(300) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `dr_id`, `user_id`, `sender`, `message`, `date`) VALUES
(45, 2, 18, 'karthi', 'hello', '2019-03-21 12:31:22'),
(46, 1, 18, 'Ramesh', 'hi', '2019-03-21 14:29:42'),
(47, 1, 18, 'karthi', 'heloo', '2019-03-21 14:33:50'),
(48, 1, 18, 'Ramesh', 'hi', '2019-03-21 14:36:11'),
(49, 1, 18, 'Ramesh', 'hi', '2019-03-21 14:36:35'),
(50, 1, 18, 'Ramesh', 'hehe', '2019-03-21 14:36:42'),
(51, 1, 18, 'Ramesh', 'hi', '2019-03-21 15:01:41'),
(52, 1, 18, 'karthi', 'kk', '2019-03-21 15:02:15'),
(53, 2, 18, 'karthi', 'hi', '2019-03-22 11:12:17'),
(54, 1, 18, 'karthi', 'hello', '2019-04-02 14:16:45'),
(55, 1, 18, 'Ramesh', 'hiii', '2019-04-02 14:17:09'),
(56, 1, 18, 'karthi', '1234', '2019-06-12 14:36:45'),
(57, 1, 18, 'Ramesh', 'ok', '2019-06-12 14:36:58'),
(58, 1, 18, 'karthi', 'pl', '2019-06-12 14:37:09');

-- --------------------------------------------------------

--
-- Table structure for table `online`
--

CREATE TABLE `online` (
  `oid` int(3) NOT NULL,
  `type` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `online`
--

INSERT INTO `online` (`oid`, `type`, `status`, `name`) VALUES
(1, '', '', ''),
(2, 'doctor', 'on', 'Ramesh'),
(4, 'pat', 'on', 'karthi');

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE `replies` (
  `reply_id` int(3) NOT NULL,
  `topic_id` int(3) NOT NULL,
  `author` varchar(20) NOT NULL,
  `comment` text NOT NULL,
  `date_posted` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `replies`
--

INSERT INTO `replies` (`reply_id`, `topic_id`, `author`, `comment`, `date_posted`) VALUES
(20, 28, 'Ramesh', 'Hi sorry might be too late on the reply but In case anyone else need this. I also noticed a year ago as soon as I drink San pelegrino or cocktails from Tesco and other shops in a can - I get itchy so I completely stopped drinking them last year. However it doesn\'t mean you are allergic to mineral water. It is probably some of the ingredients in it..', '2019-03-21'),
(21, 28, 'Salman', 'you can\'t, that\'s what I\'ve read', '2019-03-21'),
(22, 30, 'Ramesh', 'Yes,go to doctors,but in the mean time rest the wrist and apply cold compresses. A bag of frozen peas is excellent for this.<br />\r\n<br />\r\nThanks for the weather update but not sure its relevant.', '2019-03-21'),
(23, 31, 'Ramesh', 'iuhi', '2019-04-02'),
(24, 32, 'Ramesh', 'ok', '2019-06-12');

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `subcat_id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `subcategory_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`subcat_id`, `parent_id`, `subcategory_title`) VALUES
(13, 1, 'Allergic Disorders'),
(16, 1, 'Ashtma'),
(17, 1, 'Dermatitis And Eczema'),
(18, 1, 'Rhinitis'),
(19, 1, 'Steroids'),
(20, 1, 'Urticarial Rash'),
(21, 2, 'Anaemia'),
(22, 2, 'Anticoagulants'),
(23, 2, 'Blood Test - General'),
(24, 2, 'Stroke and TIA'),
(25, 3, 'Accidents and Injuries'),
(26, 3, 'Ankle Problems'),
(27, 3, 'Backache'),
(28, 3, 'Cramps'),
(29, 3, 'Elbow Problems'),
(30, 4, 'Alzheimer\'s Disease'),
(31, 4, 'Amitriptyline'),
(32, 4, 'Carpal Tunnel'),
(33, 4, 'Depression'),
(34, 4, 'Headache'),
(35, 5, 'Bowel Cancer'),
(36, 5, 'Breast Cancer and Screening'),
(37, 5, 'Oesophageal Cancer'),
(38, 5, 'Prostate Cancer'),
(39, 5, 'Smoking'),
(40, 6, 'Asthma'),
(41, 6, 'Breast Pain, Lumps and Disorders'),
(42, 6, 'Chest Pain'),
(43, 6, 'Respiratory Symptoms and Disorders'),
(44, 6, 'Sarcoidosis'),
(45, 6, 'Smoking'),
(46, 7, 'Accidents and Injuries'),
(47, 7, 'Anaemia'),
(48, 7, 'Asthma'),
(49, 7, 'Autistic Spectrum Disorders'),
(50, 7, 'Child Health'),
(51, 7, 'Ear Problems'),
(52, 7, 'Vaccinations and Immunisations'),
(53, 8, 'Atrophic Vaginitis'),
(54, 8, 'Bacterial Vaginosis'),
(55, 8, 'Genital Herpes Simplex'),
(56, 8, 'Penis Disorders'),
(57, 8, 'Sexual Health'),
(58, 8, 'Testicular Pain and Disorders'),
(59, 8, 'Vasectomy'),
(60, 9, 'Adrenal Disorders'),
(61, 9, 'Autoimmune Disorders'),
(62, 9, 'Diabetes'),
(63, 9, 'Menopause'),
(64, 9, 'Steroids'),
(65, 10, 'Abscess - Non-dental'),
(66, 10, 'Allergic Disorders'),
(67, 10, 'Dental Abscess'),
(68, 10, 'Ear Problems'),
(69, 10, 'Nasal Problems'),
(70, 11, 'Allergic Disorders'),
(71, 11, 'Blepharitis'),
(72, 11, 'Eye Problems'),
(73, 11, 'Herpes - Non Genital'),
(74, 11, 'Scleritis And Episcleritis'),
(75, 12, 'Alternative and Complementary Medicine'),
(76, 12, 'Benefits and Allowances'),
(77, 12, 'Chatroom'),
(78, 12, 'Other Conditions and General Health'),
(79, 13, 'Bacterial Vaginosis'),
(80, 13, 'Kidney Failure and CKD'),
(81, 14, 'Weight Loss - Intentional'),
(82, 14, 'Abdominal Disorders'),
(83, 14, 'Bowel Cancer'),
(84, 15, 'Alcohol Consumption'),
(85, 15, 'Contraception'),
(86, 16, 'ACE Inhibitors'),
(87, 16, 'Autoimmune Disorders'),
(88, 16, 'Hypertension'),
(89, 17, 'Antibiotics'),
(90, 17, 'Dental Abscess'),
(91, 17, 'Fungal and Yeast Infections'),
(92, 17, 'Hand Foot And Mouth Disease'),
(93, 18, 'Ankle Problems'),
(94, 18, 'Benefits and Allowances'),
(95, 18, 'Finger and Hand Problems'),
(96, 18, 'Foot and Toe Problems'),
(97, 18, 'Spinal Problems'),
(98, 19, 'Alcohol Consumption'),
(99, 19, 'Liver Problems'),
(100, 20, 'ACE Inhibitors'),
(101, 20, 'Methotrexate'),
(102, 20, 'Vaccinations and Immunisations'),
(103, 21, 'Alopecia and Hair Disorders'),
(104, 21, 'Contraception'),
(105, 21, 'Hydrocele'),
(106, 21, 'Prostate Problems'),
(107, 22, 'Alcohol Consumption'),
(108, 22, 'Anxiety Disorders'),
(109, 22, 'Autistic Spectrum Disorders'),
(110, 22, 'Citalopram'),
(111, 22, 'Depression'),
(112, 22, 'PTSD - Post Traumatic Stress Disorder'),
(113, 23, 'Hip Replacement'),
(114, 23, 'Surgery and Anaesthetics'),
(115, 24, 'Benefits and Allowances'),
(116, 24, 'Pregnancy and Genetic Disorders'),
(118, 25, 'Elderly Care'),
(119, 25, 'Stroke and TIA'),
(120, 26, 'Dermatology'),
(121, 26, 'Psoriasis and Psoriatic Arthritis'),
(122, 26, 'Vulval Problems'),
(123, 27, 'Abdominal Disorders'),
(124, 27, 'Vertigo and Dizziness'),
(125, 27, 'Weight Loss and Gain - Unintentional'),
(126, 28, 'Acne'),
(127, 28, 'Alcohol Consumption'),
(128, 28, 'Depression'),
(129, 28, 'Infectious Mononucleosis'),
(130, 28, 'Sweating'),
(131, 29, 'Blood Test - General'),
(132, 29, 'Investigations and Procedures'),
(133, 29, 'Surgery and Anaesthetics'),
(134, 30, 'Atrophic Vaginitis'),
(135, 30, 'Bartholin\'s Cyst'),
(136, 30, 'Breast Pain, Lumps and Disorders'),
(137, 30, 'Cervical Smear and Disorders'),
(138, 30, 'Genitourinary Prolapse');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `topic_id` int(8) NOT NULL,
  `category_id` int(3) NOT NULL,
  `subcategory_id` int(3) NOT NULL,
  `author` varchar(20) NOT NULL,
  `title` varchar(150) NOT NULL,
  `content` varchar(2000) NOT NULL,
  `date_posted` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`topic_id`, `category_id`, `subcategory_id`, `author`, `title`, `content`, `date_posted`) VALUES
(28, 1, 13, 'karthi', 'Can I be allergic to mineral water?', 'My alchohol intake got out of control and I managed to come of it pretty much, just the occasional drink now, BUT I like to have a long drink in the evening so started drinking San Pellegrino sparkling mineral water instead, up to 3 litres a day, but often less.  I soon noticed that I was getting an itching all over my skin, especially in the evening.  When I stop drinking the mineral water the itching stopped.  I\'ve never heard of this before and wondered if anyone else had experienced anything similar. ', '2019-03-21'),
(29, 1, 16, 'Salman', 'Having severe asthma attacks. Asthma is getting progressively worse.', 'Lately, I have been having severe asthma attacks along with constant shortness of breath and very bad coughing with phlegm and sometimes blood. I have had asthma all my life and it used to be bad when I was little, then it somewhat subsided for a few years, then it returned recently. It got worse after I had two very bad bouts of bronchitis ( both lasting a month ) within the last 3 months. I have been having very bad asthma attacks every day now and have to take about 10 puffs of my albuterol inhaler ( ProAir brand ) everyday as well as 3 breathing treatments too on average. ', '2019-03-21'),
(30, 3, 25, 'Salman', 'My daughter had a broken wrist in December now its swollen n painful', 'My daughter had a broken wrist in December now its swollen n painful . It is currently raining outside also. Is this something to be worried about n go to the doctor for ?', '2019-03-21'),
(31, 1, 13, 'karthi', '123', 'jhgjh', '2019-04-02'),
(32, 1, 13, 'karthi', 'hello', '12345', '2019-06-12');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(10) UNSIGNED NOT NULL,
  `username` text NOT NULL,
  `userpassword` varchar(50) NOT NULL,
  `userdob` date NOT NULL,
  `userphone` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `userpassword`, `userdob`, `userphone`) VALUES
(18, 'karthi', '1234', '1997-10-25', 9896574512),
(20, 'Salman', '1234', '2001-11-25', 9895684457);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `chatstart`
--
ALTER TABLE `chatstart`
  ADD PRIMARY KEY (`chatstartid`);

--
-- Indexes for table `consult`
--
ALTER TABLE `consult`
  ADD PRIMARY KEY (`consult_id`);

--
-- Indexes for table `dept`
--
ALTER TABLE `dept`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`dr_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`),
  ADD KEY `dr_id` (`dr_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `online`
--
ALTER TABLE `online`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`reply_id`),
  ADD KEY `topic_id` (`topic_id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`subcat_id`),
  ADD KEY `parent_id` (`parent_id`) USING BTREE;

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`topic_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `subcategory_id` (`subcategory_id`) USING BTREE;

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `chatstart`
--
ALTER TABLE `chatstart`
  MODIFY `chatstartid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `consult`
--
ALTER TABLE `consult`
  MODIFY `consult_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=196;

--
-- AUTO_INCREMENT for table `dept`
--
ALTER TABLE `dept`
  MODIFY `dept_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `dr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `online`
--
ALTER TABLE `online`
  MODIFY `oid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `reply_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `subcat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `topic_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
