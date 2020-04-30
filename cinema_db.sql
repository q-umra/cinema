-- This page for sql code 


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";



-- Database: `cinema_db`
--  structure for `bookingTable`


CREATE TABLE IF NOT EXISTS `bookingtable` (
  `bookingID` int(11) NOT NULL,
  `movieName` varchar(100) DEFAULT NULL,
  `bookingTheatre` varchar(100) NOT NULL,
  `bookingType` varchar(100) DEFAULT NULL,
  `bookingDate` varchar(50) NOT NULL,
  `bookingTime` varchar(50) NOT NULL,
  `bookingFName` varchar(100) NOT NULL,
  `bookingLName` varchar(100) DEFAULT NULL,
  `bookingPNumber` varchar(12) NOT NULL
 ) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;


-- Dumping data for table `bookingTable`
--

INSERT INTO `bookingtable` (`bookingID`, `movieName`, `bookingTheatre`, `bookingType`, `bookingDate`, `bookingTime`, `bookingFName`, `bookingLName`, `bookingPNumber`) VALUES
(19, 'Captain Marvel', 'main-hall', '3d', '13-3', '15-00', 'Ahmed', 'Ismael', '010152658930'),
(22, 'The Lego Movie', 'vip-hall', 'imax', '13-3', '18-00', 'Kareem', 'Ahmed', '01589965');



-- Table structure for table `movieTable`


CREATE TABLE IF NOT EXISTS `movieTable` (
  `movieID` int(11) NOT NULL,
  `movieImg` varchar(150) NOT NULL,
  `movieTitle` varchar(100) NOT NULL,
  `movieGenre` varchar(50) NOT NULL,
  `movieDuration` int(11) NOT NULL,
  `movieRelDate` date NOT NULL,
  `movieDirector` varchar(50) NOT NULL,
  `movieActors` varchar(150) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;


-- insert data into table `movieTable`


INSERT INTO `movieTable` (`movieID`, `movieImg`, `movieTitle`, `movieGenre`, `movieDuration`, `movieRelDate`, `movieDirector`, `movieActors`) VALUES
(1, 'img/movie-poster-1.jpg', 'Captain Marvel', ' Action, Adventure, Sci-Fi ', 220, '2018-10-18', 'Anna Boden, Ryan Fleck', 'Brie Larson, Samuel L. Jackson, Ben Mendelsohn'),
(2, 'img/movie-poster-2.jpg', 'Lion King  ', 'Adventure', 110, '2020-04-08', 'Jon Favreau', 'Donald Glver, Seth Elencher'),
(3, 'img/movie-poster-3.jpg', 'Born a King', 'Drama', 110, '2020-06-07', 'Agusti Villaronga', 'Abdullah Ali, Meg Lake, Hermione Corfield'),
(4, 'img/movie-poster-4.jpg', 'Joker ', 'Drama', 180, '2020-06-07', ' Todd Philips', 'Joaquin Phoenix, Robert De Niro, Zazie Beets'),
(5, 'img/movie-poster-5.jpg', 'The Call', 'Mystery,suspence', 170, '2020-06-07', 'Oriol Paulo', 'Mario Casas, Ana Wagener'),
(6, 'img/movie-poster-6.jpg', 'The Invisible Guest', ' Mystery, Thriller', 107, '2020-06-04', 'Kristoffer Nyholm', 'Gerard Butler, Peter Mullan, Connor Swindells'),
(7, 'img/movie-poster-7.jpg', 'Escape Room', 'Horror, Thriller', 100, '2020-06-05', 'Adam Robitel', 'Taylor Russell, Logan Miller'),
(8, 'img/movie-poster-8.jpg', 'Spenser Confidential', 'Action, Crime', 120, '2020-06-07', 'Peter Breg', 'Mark Wahlberg, Winston Duke'), 
(9, 'img/movie-poster-9.jpg', 'The platform', 'Thriller', 130, '2020-06-09', 'Glader Gaztelu', 'Alexandra Masangkay, Ivan Massague'), 
(10, 'img/movie-poster-10.jpg', 'The Hitmans Bodyguard', 'Comedy, Action ', 120, '2020-06-12', 'Patrick Hughes', 'Ryan Reynolds, Samuel Jackson'),
(11, 'img/movie-poster-11.jpg', 'Miracle in cell no 7', 'Drama', 130, '2020-06-09', 'Muhemmed Ada', 'Aras Bulut, Nisa Sofia'), 
(12, 'img/movie-poster-12.jpg', 'Tom Raider', 'Action , Adventure', 118, '2020-06-10', 'Roar Uthaug', 'Alicia Vikander, Walton Goggins'), 
(13, 'img/movie-poster-13.jpg', 'Maleficent: Mistress of Evil', 'Adventure, Fantasy', 118, '2020-06-10', 'Joachim Ronning', 'Angelina Jolie, Elle Fanning'),
(14, 'img/movie-poster-14.jpg', 'Billal', 'Action , Adventure', 105, '2020-06-14', 'Ayman Jamal', 'Adwale Akinnuoyo, China Anne'),
(15, 'img/movie-poster-15.jpg', 'Train to Busan', 'Horror , Thriller', 118, '2020-06-15', 'yeon sang-ho', 'Gong yoo, Ma Dong-Seok'),
(16, 'img/movie-poster-16.jpg', 'Toy Story 4', 'Family , Comedy', 150, '2020-06-11', 'Josh Cooly', 'Tom Hanks, Tim Allen') 
(17, 'img/movie-poster-17.jpg', 'The Jungle Book', 'Family , Adventure', 150, '2020-06-12', 'Jon Favreau', 'Jon Favreau, Scarlett Johansson')
(18, 'img/movie-poster-18.jpg', 'Victoria and Abdul', 'Drama , History', 120, '2020-06-11', 'Stephen Frears', 'Tudi Dench, Ali Fazal');
-- Indexes for dumped tables
--

-- Indexes for table `bookingTable`

ALTER TABLE `bookingtable`
  ADD PRIMARY KEY (`bookingID`),
  ADD UNIQUE KEY `bookingID` (`bookingID`),
  ADD KEY `bookingID_2` (`bookingID`),
  ADD KEY `bookingID_3` (`bookingID`),
  ADD KEY `bookingID_4` (`bookingID`);

--
-- Indexes for table `movieTable`
--
ALTER TABLE `movieTable`
  ADD PRIMARY KEY (`movieID`),
  ADD UNIQUE KEY `movieID` (`movieID`);


--
-- AUTO_INCREMENT for table `bookingTable`
--
ALTER TABLE `bookingtable`
  MODIFY `bookingID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--

--AUTO_INCREMENT for table `movieTable`
-
ALTER TABLE `movieTable`
  MODIFY `movieID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
