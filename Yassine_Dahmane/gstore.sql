-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2024 at 09:52 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Genre` varchar(20) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Price` decimal(4,2) NOT NULL,
  `release_date` date NOT NULL,
  `developer` varchar(20) NOT NULL,
  `rating` decimal(2,1) NOT NULL,
  `logo` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`id`, `Name`, `Genre`, `Description`, `Price`, `release_date`, `developer`, `rating`, `logo`) VALUES
(1, 'Counter-Strike 2', 'FPS', 'For over two decades, Counter-Strike has offered an elite competitive experience, one shaped by millions of players from across the globe. And now the next chapter in the CS story is about to begin. This is Counter-Strike 2', 0.00, '2012-08-21', 'Valve', 8.7, 'Games/cs2.jpg'),
(2, 'Dota 2', 'MOBA', 'Every day, millions of players worldwide enter battle as one of over a hundred Dota heroes. And no matter if it\'s their 10th hour of play or 1,000th, there\'s always something new to discover. With regular updates that ensure a constant evolution of gameplay, features, and heroes, Dota 2 has taken on a life of its own', 0.00, '2013-07-09', 'Valve', 8.1, 'Games/dota2.jpg'),
(3, 'PUBG: BATTLEGROUNDS', 'Battle Royale', 'Land on strategic locations, loot weapons and supplies, and survive to become the last team standing across various, diverse Battlegrounds.', 0.00, '2017-11-21', 'KRAFTON, Inc', 5.8, 'Games/pubg.jpg'),
(4, 'Apex Legends', 'Battle Royale', 'Apex Legends is the award-winning, free-to-play Hero Shooter from Respawn Entertainment. Master an ever-growing roster of legendary characters with powerful abilities, and experience strategic squad play and innovative gameplay in the next evolution of Hero Shooter and Battle Royale.', 0.00, '2020-11-05', 'Respawn Entertainmen', 7.8, 'Games/apex.jpg'),
(5, 'Stardew Valley', 'Farming Sim', 'You have inherited your grandfather\'s old farm plot in Stardew Valley. Armed with hand-me-down tools and a few coins, you set out to begin your new life. Can you learn to live off the land and turn these overgrown fields into a thriving home?', 5.99, '2016-02-26', 'ConcernedApe', 9.7, 'Games/stardew_valley.png'),
(6, 'Tom Clancy\'s Rainbow Six Siege', 'FPS', 'Tom Clancy\'s Rainbow Six® Siege is an elite, tactical team-based shooter where superior planning and execution triumph.', 20.00, '2015-12-01', 'Ubisoft', 8.4, 'Games/r6s.jpg'),
(7, 'RUST', 'Survival', 'The only aim in Rust is to survive. Everything wants you to die - the island’s wildlife and other inhabitants, the environment, other survivors. Do whatever it takes to last another night.', 40.00, '2018-02-08', 'Facepunch Studios', 8.6, 'Games/rust.jpg'),
(8, 'Grand Theft Auto 5', 'Open World', 'Grand Theft Auto V for PC offers players the option to explore the award-winning world of Los Santos and Blaine County in resolutions of up to 4k and beyond, as well as the chance to experience the game running at 60 frames per second.', 40.00, '2015-04-13', 'Rockstar Games', 8.6, 'Games/gta5.png'),
(9, 'Red Dead Redemption 2', 'Open World', 'RDR2 is the epic tale of outlaw Arthur Morgan and the infamous Van der Linde gang, on the run across America at the dawn of the modern age. Also includes access to the shared living world of Red Dead Online.', 60.00, '2019-12-05', 'Rockstar Games', 9.0, 'Games/rdr2.jpg'),
(10, 'Portal 2', 'Puzzle', 'The \"Perpetual Testing Initiative\" has been expanded to allow you to design co-op puzzles for you and your friends!', 2.00, '2011-04-19', 'Valve', 9.7, 'Games/portal2.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user` varchar(64) NOT NULL,
  `password` varchar(16) NOT NULL,
  `avatar` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user`, `password`, `avatar`, `email`) VALUES
(2, 'yassine', '12345678', 'users/user1.jpg', 'yassinedahmen05@gmail.com'),
(3, 'John Wick', '123123123', 'users/user2.jpg', 'johnwick@gmail.com'),
(4, 'Batman', '123123123', 'users/user1.jpg', 'batman@gmail.com'),
(6, 'Yosri', '12345678', 'users/user2.jpg', 'yosriayedi@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
