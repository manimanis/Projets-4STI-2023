-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : sam. 11 mai 2024 à 00:52
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `animebook`
--

-- --------------------------------------------------------

--
-- Structure de la table `anime`
--

CREATE TABLE `anime` (
  `aid` int(11) NOT NULL,
  `aname` varchar(32) NOT NULL,
  `adesc` text NOT NULL,
  `rating` decimal(5,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `anime`
--

INSERT INTO `anime` (`aid`, `aname`, `adesc`, `rating`) VALUES
(1, 'hunter x hunter', 'The show centers around Gon Freecss, a 12-year-old boy who goes on an adventure to become a Hunter in hopes of finding his father. The Hunters Association holds an annual exam to determine if applicants are worthy of a Hunter\'s license which is for elite humans with extraordinary abilities', 0),
(2, 'naruto', 'His carefree, optimistic, and boisterous personality enables him to befriend other Konoha ninjas, as well as ninja from other villages.', 0),
(3, 'attack on titan', 'Attack On Titan is about how a boy\'s life changes when he loses his family to titans. The main protagonist is a 15-year-old named Eren Yeager who lives with his sister and parents until one day, his village is destroyed by giants called titans', 0),
(4, 'sword art online', 'SWORD ART ONLINE is the story of a multiplayer virtual-reality game that takes a deadly turn when players discover they can\'t escape of their own will but must play to victory or to death', 0),
(5, 'one piece', 'The series focuses on Monkey D. Luffy—a young man made of rubber after unintentionally eating a Devil Fruit—who sets off on a journey from the East Blue Sea to find the deceased King of the Pirates Gol D. Roger\'s ultimate treasure known as the \"One Piece\", and take over his prior title', 0);

-- --------------------------------------------------------

--
-- Structure de la table `revs`
--

CREATE TABLE `revs` (
  `rid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `aid` int(11) NOT NULL,
  `title` varchar(32) NOT NULL,
  `descrip` text NOT NULL,
  `likes` int(11) NOT NULL,
  `dislike` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `revs`
--

INSERT INTO `revs` (`rid`, `userid`, `aid`, `title`, `descrip`, `likes`, `dislike`) VALUES
(1, 3, 1, 'hunter hunter', 'i really like  this anime its my favorite it has a great story and makes you live with the characters', 4, 0),
(2, 3, 5, 'one piece', 'very good anime but very long too its has too many episodes ', 6, 9),
(3, 6, 3, 'aot', ' attack on titan is my favourite anime! there was so much suspense and i felt every feeling watching it!', 21, 4),
(4, 6, 2, 'naruto', 'souyaaaaaa!!! i love this anime so much i grew up watching it its a great anime i advise you guys to watch it', 20, 0),
(5, 3, 3, 'attack on titian', 'i haven\'t seen this anime yet but many people advised me too so i think i\'ll gice it a shot', 6, 3),
(6, 3, 1, 'hunterxhunter', 'did you hear the news hunter x hunter may be returning', 0, 0),
(7, 7, 2, 'naruto', 'very good anime i liked it so much', 12, 0);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `uname` varchar(32) NOT NULL,
  `passwd` varchar(255) NOT NULL,
  `email` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`userid`, `uname`, `passwd`, `email`) VALUES
(3, 'adam', '8de351db99e32c9c8ec55828acdde2f4', 'shadowzzr00@gmail.com'),
(6, 'amal', '605f1082356f58d653f362fd0b49d020', 'amalkar3oufa@gmail.com'),
(7, 'amal2', 'e10adc3949ba59abbe56e057f20f883e', 'amalkar3oufa@gmail.com'),
(8, 'serine', '68053af2923e00204c3ca7c6a3150cf7', 'amalkrifa5@gmail.com');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `anime`
--
ALTER TABLE `anime`
  ADD PRIMARY KEY (`aid`);

--
-- Index pour la table `revs`
--
ALTER TABLE `revs`
  ADD PRIMARY KEY (`rid`),
  ADD KEY `fk1` (`aid`),
  ADD KEY `fk2` (`userid`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `revs`
--
ALTER TABLE `revs`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `revs`
--
ALTER TABLE `revs`
  ADD CONSTRAINT `fk1` FOREIGN KEY (`aid`) REFERENCES `anime` (`aid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk2` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
