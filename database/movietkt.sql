-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2022 at 06:19 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movietkt`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `sn` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`sn`, `name`, `email`, `subject`, `message`) VALUES
(2, 'Avadhesh', 'avadheshs2013@gmail.com', 'demo check', 'sadfd dsfadsf sdfsdf sf s saf sf asf sf sf asf sadf sf sf sf sf sf sf sf sfs fsf sfsaf sf sf.');

-- --------------------------------------------------------

--
-- Table structure for table `now_showing_movies`
--

CREATE TABLE `now_showing_movies` (
  `sn` int(11) NOT NULL,
  `movie_id` varchar(10) NOT NULL,
  `movie_name` varchar(100) NOT NULL,
  `genre` varchar(100) NOT NULL,
  `release_date` date NOT NULL,
  `run_time` varchar(50) NOT NULL,
  `cast` varchar(200) NOT NULL,
  `director` varchar(50) NOT NULL,
  `about_movie` varchar(300) NOT NULL,
  `banner` varchar(50) NOT NULL,
  `poster` varchar(50) NOT NULL,
  `trailer_lnk` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `now_showing_movies`
--

INSERT INTO `now_showing_movies` (`sn`, `movie_id`, `movie_name`, `genre`, `release_date`, `run_time`, `cast`, `director`, `about_movie`, `banner`, `poster`, `trailer_lnk`) VALUES
(1, 'BLAD2022', 'Black Adam', 'Action, Thriller, Superhero, Fantasy, Sci-Fi', '2022-10-20', '2 hrs 05 min', 'Dwayne Johnson, Aldis Hodge, Noah Centineo, Sarah Shahi, Marwan Kenzari', 'Jaume Collet-Serra', 'Black Adam is a 2022 American superhero film starring Dwayne Johnson as the titular character. The film is a spin-off from Shazam! (2019) and the eleventh film in the DC Extended Universe (DCEU).', 'img/movie-thumbnail/BA.jpg', 'img/movie-shows/BA.jpg', 'https://www.youtube.com/embed/MY81VO-mSyw'),
(2, 'BLPT2022', 'Black Panther: Wakanda Forever', 'Action, Thriller, Superhero, Fantasy, Sci-Fi', '2022-10-26', '2 hrs 25 min', 'Letitia Wright, Lupita Nyong\'o, Danai Gurira, Winston Duke, Dominique Thorne', 'Ryan Coogler', 'Black Panther: Wakanda Forever is a 2022 American superhero film based on the Marvel Comics character Black Panther.', 'img/movie-thumbnail/BP.webp', 'img/movie-shows/BP.webp', 'https://www.youtube.com/embed/Yp-DBEBSOeE'),
(3, 'BRHM2022', 'Brahmastra', 'Action, Adventure, Fantasy, Sci-Fi', '2022-09-09', '2 hrs 39 mins', 'Ranbir Kapoor, Alia Bhatt, Amitabh Bachchan, Mouni Roy, Nagarjuna Akkineni', 'Ayan Mukherjee', 'BRAHMASTRA - the Trilogy, is a 3-part film franchise and the beginning of India`s first original universe The Astraverse.', 'img/movie-thumbnail/BRHM.jpg', 'img/movie-shows/BRM.jpg', 'https://www.youtube.com/embed/BUjXzrgntcY'),
(4, 'STRM2022', 'Sita Ramam', 'Romance, Historical Drama', '2022-08-05', '2 hrs 43 mins', 'Dulquer Salmaan,\r\nMrunal Thakur,\r\nRashmika Mandanna,\r\nSumanth', 'Hanu Raghavapudi', 'Sita Ramam is a 2022 Indian Telugu-language period romance film written and directed by Hanu Raghavapudi.', 'img/movie-thumbnail/SITARAM.jpg', 'img/movie-shows/SITARAM.jpg', 'https://www.youtube.com/embed/PFcE1Rw5lmo');

-- --------------------------------------------------------

--
-- Table structure for table `now_showing_movies_card`
--

CREATE TABLE `now_showing_movies_card` (
  `sn` int(11) NOT NULL,
  `movie_id` varchar(10) NOT NULL,
  `movie_name` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `now_showing_movies_card`
--

INSERT INTO `now_showing_movies_card` (`sn`, `movie_id`, `movie_name`, `image`) VALUES
(1, 'BLAD2022', 'Black Adam', 'img/movie-shows/BA.jpg'),
(2, 'BLPT2022', 'Black Panther 2', 'img/movie-shows/BP.webp'),
(3, 'BRHM2022', 'Brahmastra', 'img/movie-shows/BRM.jpg'),
(4, 'STRM2022', 'Sita Ramam', 'img/movie-shows/SITARAM.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `sn` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `userid` varchar(9) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `pic` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`sn`, `name`, `userid`, `email`, `gender`, `pic`) VALUES
(1, 'Avadhesh Shekhawat', 'Avadh0007', 'avadheshs2013@gmail.com', 'male', 'img1/ANDOR12.jpg'),
(3, 'Ranvijay', 'ranvijay1', 'rv@gmail.com', 'male', 'img1/AVT1.jpg'),
(4, 'Priyanka', 'priyank22', 'pc@gmail.com', 'female', 'img1/GOG.jpg'),
(5, 'Ankita ', 'ankita007', 'an@gmail.com', 'female', 'img1/MI.jpg'),
(6, 'Abhay Singh', 'abhay2022', 'ab@gmail.com', 'male', 'img1/SZM.jpg'),
(9, 'pradhuman', 'prd123456', 'prd@gmail.com', 'male', 'img1/'),
(10, 'Karan', 'karan1234', 'k@gmail.com', 'male', 'img1/IMG_20220928_141946.jpg'),
(11, 'Kunal', 'kun123456', 'kn@gmail.com', 'male', 'img1/IMG_20220928_141950.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `signin`
--

CREATE TABLE `signin` (
  `sn` int(11) NOT NULL,
  `userid` varchar(9) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signin`
--

INSERT INTO `signin` (`sn`, `userid`, `email`, `password`) VALUES
(28, 'Avadh0007', '', '123456'),
(29, 'ranvijay1', '', '123456'),
(30, 'priyank22', '', '123456'),
(31, 'ankita007', '', '123456'),
(32, 'abhay2022', '', '123456'),
(35, 'prd123456', 'prd@gmail.com', '123456'),
(36, 'karan1234', 'k@gmail.com', '123456'),
(37, 'kun123456', 'kn@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `sn` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `userid` varchar(9) NOT NULL,
  `email` varchar(30) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `password` varchar(50) NOT NULL,
  `pic` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`sn`, `name`, `userid`, `email`, `gender`, `password`, `pic`) VALUES
(32, 'Avadhesh Shekhawat', 'Avadh0007', 'avadheshs2013@gmail.com', 'male', '123456', 'img1/ANDOR12.jpg'),
(33, 'Ranvijay', 'ranvijay1', 'rv@gmail.com', 'male', '123456', 'img1/AVT1.jpg'),
(34, 'Priyanka', 'priyank22', 'pc@gmail.com', 'female', '123456', 'img1/GOG.jpg'),
(35, 'Ankita ', 'ankita007', 'an@gmail.com', 'female', '123456', 'img1/MI.jpg'),
(36, 'Abhay Singh', 'abhay2022', 'ab@gmail.com', 'male', '123456', 'img1/SZM.jpg'),
(41, 'pradhuman', 'prd123456', 'prd@gmail.com', 'male', '123456', 'img1/'),
(42, 'Karan', 'karan1234', 'k@gmail.com', 'male', '123456', 'img1/IMG_20220928_141946.jpg'),
(43, 'Kunal', 'kun123456', 'kn@gmail.com', 'male', '123456', 'img1/IMG_20220928_141950.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `sn` int(11) NOT NULL,
  `banner` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`sn`, `banner`) VALUES
(1, 'img/slider1.jpg'),
(2, 'img/slider2.jpg'),
(3, 'img/slider3.png'),
(4, 'img/slider4.png');

-- --------------------------------------------------------

--
-- Table structure for table `upcoming_movies`
--

CREATE TABLE `upcoming_movies` (
  `sn` int(11) NOT NULL,
  `movie_id` varchar(11) NOT NULL,
  `movie_name` varchar(50) NOT NULL,
  `trailer_link` varchar(200) NOT NULL,
  `image` varchar(50) NOT NULL,
  `release_date` date NOT NULL,
  `run_time` varchar(30) NOT NULL,
  `cast` varchar(100) NOT NULL,
  `director` varchar(50) NOT NULL,
  `about_movie` varchar(500) NOT NULL,
  `banner` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `upcoming_movies`
--

INSERT INTO `upcoming_movies` (`sn`, `movie_id`, `movie_name`, `trailer_link`, `image`, `release_date`, `run_time`, `cast`, `director`, `about_movie`, `banner`) VALUES
(1, 'AVTR2022', 'Avatar : The Way Of Water (2022)', 'https://www.youtube.com/embed/sQ3gMx4HSuA', 'img/AVT1.jpg', '2022-12-16', '3 H 10 M', 'Sam Worthington, Zoe Saldaña, Sigourney Weaver, Stephen Lang , Kate Winslet', '	James Cameron', 'Set more than a decade after the events of the first film, Avatar: The Way of Water begins to tell the story of the Sully family, the trouble that follows them, the lengths they go to keep each other.', 'img/movie-banner/avtr2banner.jpg'),
(2, 'MARO2023', 'Super Morio Bros (2023)', 'https://www.youtube.com/embed/KydqdKKyGEk', 'img/MARIO.jpg', '2023-04-07', '1 H 45 M', 'Chris Pratt, Anya Taylor-Joy, Charlie Day, Jack Black, Keegan-Michael Key', 'Aaron Horvath, Michael Jelenic', 'The Super Mario Bros. Movie is an upcoming computer-animated fantasy adventure comedy film based on Nintendo\'s Mario video game franchise.', 'img/movie-banner/marobanner1.jpg'),
(3, 'SZAM2023', 'Shazam : Fury Of Gods (2023)', 'https://www.youtube.com/embed/XluhBpp23sk', 'img/SZM.jpg', '2023-03-17', '2 H 10 M', 'Zachary Levi, Asher Angel, Jack Dylan Grazer, Rachel Zegler, Adam Brody', 'David F. Sandberg', 'Shazam! Fury of the Gods is an upcoming American superhero film based on the DC character Shazam. Produced by New Line Cinema, DC Studios, and the Safran Company.', 'img/movie-banner/szambanner.jpg'),
(4, 'MIIM2023', 'Misstion Impossible : Dead Reckoning Part 1 (2023)', 'https://www.youtube.com/embed/tEbhEWoO0OQ', 'img/MI.jpg', '2023-07-14', '2 H 23 M', 'Tom Cruise, Ving Rhames, Simon Pegg,Rebecca Ferguson, Vanessa Kirby', 'Christopher McQuarrie', 'Mission: Impossible – Dead Reckoning Part One is an upcoming American action spy film written, produced, and directed by Christopher McQuarrie.', 'img/movie-banner/mimibanner.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `upcoming_movies_card`
--

CREATE TABLE `upcoming_movies_card` (
  `sn` int(11) NOT NULL,
  `movie_id` varchar(10) NOT NULL,
  `movie_name` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `upcoming_movies_card`
--

INSERT INTO `upcoming_movies_card` (`sn`, `movie_id`, `movie_name`, `image`) VALUES
(1, 'AVTR2022', 'Avatar 2', 'img/AVT1.jpg'),
(2, 'MARO2023', 'Morio', 'img/MARIO.jpg'),
(3, 'SZAM2023', 'Shazam 2', 'img/SZM.jpg'),
(4, 'MIIM2023', 'MI 7 ', 'img/MI.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `now_showing_movies`
--
ALTER TABLE `now_showing_movies`
  ADD PRIMARY KEY (`sn`),
  ADD UNIQUE KEY `movie_id` (`movie_id`);

--
-- Indexes for table `now_showing_movies_card`
--
ALTER TABLE `now_showing_movies_card`
  ADD PRIMARY KEY (`sn`),
  ADD UNIQUE KEY `movie_id` (`movie_id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`sn`),
  ADD UNIQUE KEY `userid` (`userid`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `signin`
--
ALTER TABLE `signin`
  ADD PRIMARY KEY (`sn`),
  ADD UNIQUE KEY `userid` (`userid`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`sn`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `userid` (`userid`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `upcoming_movies`
--
ALTER TABLE `upcoming_movies`
  ADD PRIMARY KEY (`sn`),
  ADD UNIQUE KEY `movie_id` (`movie_id`);

--
-- Indexes for table `upcoming_movies_card`
--
ALTER TABLE `upcoming_movies_card`
  ADD PRIMARY KEY (`sn`),
  ADD UNIQUE KEY `movie_id` (`movie_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `now_showing_movies`
--
ALTER TABLE `now_showing_movies`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `now_showing_movies_card`
--
ALTER TABLE `now_showing_movies_card`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `signin`
--
ALTER TABLE `signin`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `upcoming_movies`
--
ALTER TABLE `upcoming_movies`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `upcoming_movies_card`
--
ALTER TABLE `upcoming_movies_card`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
