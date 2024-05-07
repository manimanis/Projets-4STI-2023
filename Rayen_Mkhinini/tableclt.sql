-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : lun. 06 mai 2024 à 11:13
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
-- Base de données : `tableclt`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `codeclt` int(10) NOT NULL,
  `nom` varchar(10) NOT NULL,
  `prenom` varchar(10) NOT NULL,
  `adr` varchar(30) NOT NULL,
  `tel` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`codeclt`, `nom`, `prenom`, `adr`, `tel`) VALUES
(12309, 'rfgth', 'RRR', 'sousse hamme sousse', 51861563),
(123456, 'rayen', 'mkhenini', '1430 oued la3rouk', 51861561),
(123679, 'IK', 'MLK', 'MEMME', 12345988);

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `numcom` int(11) NOT NULL,
  `datecom` date NOT NULL,
  `PUPiece` int(11) NOT NULL,
  `codeclt` int(11) NOT NULL,
  `numpiece` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `piece`
--

CREATE TABLE `piece` (
  `numpiece` int(11) NOT NULL,
  `libpiece` varchar(16) NOT NULL,
  `codevoiture` int(11) NOT NULL,
  `qtstock` int(11) NOT NULL,
  `prixA` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `piece`
--

INSERT INTO `piece` (`numpiece`, `libpiece`, `codevoiture`, `qtstock`, `prixA`) VALUES
(1, 'Parabrise', 1, 100, 574),
(2, 'Avant gauche', 2, 100, 609),
(3, 'Arrière droit', 3, 100, 619),
(4, 'Avant droite', 4, 100, 570),
(5, 'Avant gauche', 5, 100, 290),
(6, 'Lunette arrière', 6, 100, 301);

-- --------------------------------------------------------

--
-- Structure de la table `voiture`
--

CREATE TABLE `voiture` (
  `marquevoiture` varchar(16) NOT NULL,
  `modelvoiture` varchar(16) NOT NULL,
  `codevoitue` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `voiture`
--

INSERT INTO `voiture` (`marquevoiture`, `modelvoiture`, `codevoitue`) VALUES
('Toyota', 'Corolla', 1),
('Toyota', 'Camry', 2),
('Toyota', 'RAV4', 3),
('Volkswagen', 'Golf', 4),
('Volkswagen', 'Passat', 5),
('Volkswagen', 'Tiguan', 6),
('Peugeot', '208', 7),
('Peugeot', '3008', 8),
('Peugeot', '5008', 9),
('Renault', 'Clio', 10),
('Renault', 'Captur', 11),
('Renault', 'Megane', 12),
('Ford', 'Fiesta', 13),
('Ford', 'Focus', 14),
('Ford', 'Escape', 15),
('Nissan', 'Micra', 16),
('Nissan', 'Qashqai', 17),
('Nissan', 'X-Trail', 18),
('Hyundai', 'i20', 19),
('Hyundai', 'Tucson', 20),
('Hyundai', 'Santa Fe', 21),
('Kia', 'Rio', 22),
('Kia', 'Sportage', 23),
('Kia', 'Sorento', 24),
('BMW', '3 Series', 25),
('BMW', '5 Series', 26),
('BMW', 'X3', 27),
('Mercedes-Benz', 'A-Class', 28),
('Mercedes-Benz', 'C-Class', 29),
('Mercedes-Benz', 'GLC', 30),
('Dacia', 'Sandero', 31),
('Dacia', 'Duster', 32),
('Dacia', 'Logan', 33);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`codeclt`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`numcom`),
  ADD KEY `PKM` (`codeclt`),
  ADD KEY `nk` (`numpiece`);

--
-- Index pour la table `piece`
--
ALTER TABLE `piece`
  ADD PRIMARY KEY (`numpiece`),
  ADD KEY `fk_codevoiture` (`codevoiture`);

--
-- Index pour la table `voiture`
--
ALTER TABLE `voiture`
  ADD PRIMARY KEY (`codevoitue`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `numcom` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `piece`
--
ALTER TABLE `piece`
  MODIFY `numpiece` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `voiture`
--
ALTER TABLE `voiture`
  MODIFY `codevoitue` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `PKM` FOREIGN KEY (`codeclt`) REFERENCES `client` (`codeclt`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nk` FOREIGN KEY (`numpiece`) REFERENCES `piece` (`numpiece`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `piece`
--
ALTER TABLE `piece`
  ADD CONSTRAINT `fk_codevoiture` FOREIGN KEY (`codevoiture`) REFERENCES `voiture` (`codevoitue`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
