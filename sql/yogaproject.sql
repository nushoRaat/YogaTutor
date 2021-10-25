-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2021 at 03:57 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yogaproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouttable`
--

CREATE TABLE `abouttable` (
  `inc` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `head` varchar(255) NOT NULL,
  `desone` varchar(1255) NOT NULL,
  `destwo` varchar(5255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `abouttable`
--

INSERT INTO `abouttable` (`inc`, `img`, `head`, `desone`, `destwo`) VALUES
(1, 'files/.yoga3.jpg.6062ca78106f92.97199418.jpg', 'fsef ese rfsefg gggggggggg', 'qqqqqqqq eeeeeeeeeeeeee rrrrrrrrrrr tttttttttttttttt yyyyyyyyyyyuuuuuuuuuuuuuu', 'aaaaaaaaaaaaaaaa ssssssssssssssssssssssssssssffffffffffffffff ffffffffffffffg gggggggggggggggggggggggggggggggggggggggggggggg hhhhhhhhhhhhhhhhhhhhhhhhhhh'),
(2, 'files/.yogamat.jpg.6062cca8e8f035.34030005.jpg', 'Meditation and mindfulness are buzzwords these days for good reason', 'Take your yoga off the mat and into your           life for more balance and clarity in everything from relationships and                    authentic lifestyle despite everyday stress.', 'The poem owes a great debt to the Gita as well as the Katha Upanishad. The first verse in particular seems to have been lifted almost verbatim from chapter 2 of the Gita, when Krishna is trying to persuade Arjuna to fight: “The man who believeth that it is the soul which killeth, and he who thinketh that the soul may be killed.” Taken with a few lines that appear later—”I am the sacrifice; I am the worship” and “He also is my beloved servant…to whom praise and blame are one”—you have many elements of Emerson’s poem. Historian James A. Hijiya argues that this teaching of created the bomb and advocated its use on Hiroshima and Nagasaki, only to become a leading critic of nuclear weapons and war. Just as Krishna insisted that renouncing action was far worse than taking discipline action (and was ultimately not possible in any case), so Oppenheimer rejected the ivory tower, and its illusion of remove, for the Manhattan Project.');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `message` varchar(100) NOT NULL,
  `querytime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `phone`, `message`, `querytime`) VALUES
(1, ' nushrat', 'abc@gmail.com', '0987665', 'hi', '2021-03-17 09:46:30'),
(2, ' nushrat', 'abc@gmail.com', '0987665', 'your page is great.', '2021-03-02 09:46:57'),
(3, ' miyamura', 'abcd@gmail.com', '987643221', 'WoW amazing Page ', '2021-03-30 09:45:46'),
(4, ' nushrat', 'abc@gmail.com', '0987665', 'your page is good', '2021-03-30 15:29:09');

-- --------------------------------------------------------

--
-- Table structure for table `coverup`
--

CREATE TABLE `coverup` (
  `cpic` varchar(255) NOT NULL,
  `ctitle` varchar(255) NOT NULL,
  `cdes` varchar(255) NOT NULL,
  `gdes` varchar(255) NOT NULL,
  `cid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coverup`
--

INSERT INTO `coverup` (`cpic`, `ctitle`, `cdes`, `gdes`, `cid`) VALUES
(' files/.lilyheader.jpg.6061f59a5a5435.63602602.jpg', 'Wisdom', 'Expand the foundation of your yoga practice with our guides to different yoga styles, yoga terminology, philosophy, history, and much more.', 'Find The Types of Yoga For You.', 2);

-- --------------------------------------------------------

--
-- Table structure for table `hompage`
--

CREATE TABLE `hompage` (
  `serial` int(11) NOT NULL,
  `bgcover` varchar(255) NOT NULL,
  `welmsg` varchar(255) NOT NULL,
  `sectitle` varchar(255) NOT NULL,
  `secdes` varchar(5255) NOT NULL,
  `contactno` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `openhrs` varchar(255) NOT NULL,
  `sectwoheader` varchar(255) NOT NULL,
  `sectwodes` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hompage`
--

INSERT INTO `hompage` (`serial`, `bgcover`, `welmsg`, `sectitle`, `secdes`, `contactno`, `email`, `openhrs`, `sectwoheader`, `sectwodes`) VALUES
(15, 'files/.bgpic.jpg.606122f0c6a031.55905116.jpg', 'Welcome to Yoga tutor', 'Learn yoga anywhere any time', 'Known as a teacher’s teacher, international yogi, author, and health and wellness expert Tiffany Cruikshank founded Yoga Medicine as a platform to connect people and doctors with experienced yoga teachers. Yoga Medicine’s ever-expanding community of teachers are trained to understand body anatomy, biomechanics, physiology, and the traditional practice of yoga.', '778965444', 'yogatutor@gmail.com', 'Daily 9.00-20.00', '7 Ways to Get Your Best Sleep Ever', 'Celebrate World Sleep Day by having a lie in and trying some of our best ever tips for using yoga to sleep deeper and wake more rested.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uId` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL DEFAULT current_timestamp(),
  `bio` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uId`, `user_name`, `Name`, `email`, `password`, `status`, `created_date`, `updated_date`, `bio`) VALUES
(3, 'nush', 'Nushrat Jahan', 'abc@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 1, '2021-03-27 16:41:48', '2021-03-27 16:41:48', NULL),
(4, 'njs', 'jahan', 'njs@gmail.com\r\n', '562b530cff1f5bca3b1a4c1ad4ad9962', 1, '2021-03-27 16:41:48', '2021-03-27 16:41:48', NULL),
(9, 'sleep', 'Kakashi ', 'abc@gmail.com\r\n', '827ccb0eea8a706c4c34a16891f84e7b', 1, '2021-03-27 20:56:41', '2021-03-27 20:56:41', NULL),
(10, 'edie', 'Edward alchemy', 'ed99@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 1, '2021-03-28 04:39:59', '2021-03-30 13:41:20', 'I am a simple person'),
(13, 'shoto', 'Shoto todoroki', 'sho04@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 2, '2021-03-28 23:34:04', '2021-03-30 10:28:53', 'Ice and Fire both is me!!!aoi sora'),
(14, 'nushrat', 'nushrat jahan', 'nushrat.j01@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 2, '2021-03-30 13:47:10', '2021-03-30 13:47:10', NULL),
(15, 'poly', 'Nilufar Hossain', 'poly@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 1, '2021-03-30 13:57:05', '2021-03-30 13:57:05', NULL),
(16, 'nilu', 'Nilufar', 'abc@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1, '2021-03-30 15:28:00', '2021-03-30 15:28:34', 'Hi i am Poly');

-- --------------------------------------------------------

--
-- Table structure for table `yogaimages`
--

CREATE TABLE `yogaimages` (
  `imgId` int(11) NOT NULL,
  `titleImg` varchar(255) NOT NULL,
  `desImg` varchar(10000) NOT NULL,
  `imgFullName` varchar(255) NOT NULL,
  `fileName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `yogaimages`
--

INSERT INTO `yogaimages` (`imgId`, `titleImg`, `desImg`, `imgFullName`, `fileName`) VALUES
(52, ' Prenatal yoga', 'A practice uniquely designed for pregnancy, Prenatal Yoga can help support moms-to-be emotionally and physically. With an emphasis on core strength.', 'files/.prenatal.jpg.6062529f0084f0.34268724.jpg', 'prenatal.php'),
(53, ' Acro Yoga', 'Once you’ve tried Acro classic sequence, get inspired by these advanced yogis who take the basic poses to new heights.As such it also draws on traditions of dance acro.', 'files/.acro.jpg.606255b4371894.17985376.jpg', 'serviceDetails.php'),
(54, ' Asthanga Yoga', 'This dynamic, physically demanding practice synchronizes breath and movement to produce an internal heat designed to purify the body.', 'files/.yogafaq.jpg.6062b40d8f77c4.46605170.jpg', 'Ashtanga.php'),
(55, ' Hatha Yoga', 'The word “hatha” can be translated two ways: as “willful” or “forceful,” or the yoga of activity, and as “sun” (ha) and “moon” (tha), the yoga of balance.', 'files/.hatha.jpg.6062cf613e8063.93181098.jpg', 'Hatha.php'),
(56, ' Power Yoga', 'Power Yoga is a fitness-based vinyasa practice. An offshoot of Ashtanga Yoga, it has many of the same qualities.', 'files/.power2.jpg.6062cfecc89ef1.05723554.jpg', 'power.php'),
(57, ' Hot Yoga', 'ny style of yoga practiced in an intentionally heated room is Hot Yoga in our book. This would include Bikram Yoga, Forrest Yoga, Baptiste Yoga .', 'files/.hot2.jpg.6062d03983bfc1.02476062.jpg', 'Hot.php'),
(58, ' Lyengar Yoga', 'By paying close attention to anatomical details and the alignment of each posture, Iyengar Yoga is the practice of precision.', 'files/.lyenger2.jpg.6062d0a4cdfee2.07432534.jpg', 'lyengar.php'),
(59, ' Jivamukti Yoga', 'Incorporating chanting, meditation, pranayama, philosophy, and music into a vigorous flowing asana, or vinyasa, practice.', 'files/.jivamukti.jpg.6062d122545143.87741248.jpg', 'jivamukti.php'),
(60, ' trial yoga', ' for trial', 'files/.acro3.webp.6062eb65d15127.63691434.webp', 'power.php'),
(61, ' Demo', 'Demo image', 'files/.acrobg.jpg.6062ef910e7e10.90868734.jpg', 'power.php');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouttable`
--
ALTER TABLE `abouttable`
  ADD PRIMARY KEY (`inc`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coverup`
--
ALTER TABLE `coverup`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `hompage`
--
ALTER TABLE `hompage`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uId`);

--
-- Indexes for table `yogaimages`
--
ALTER TABLE `yogaimages`
  ADD PRIMARY KEY (`imgId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouttable`
--
ALTER TABLE `abouttable`
  MODIFY `inc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `coverup`
--
ALTER TABLE `coverup`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `hompage`
--
ALTER TABLE `hompage`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `yogaimages`
--
ALTER TABLE `yogaimages`
  MODIFY `imgId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
