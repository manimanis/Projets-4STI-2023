-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : sam. 04 mai 2024 à 09:27
-- Version du serveur : 5.7.39
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projetmranis`
--

-- --------------------------------------------------------

--
-- Structure de la table `boitier`
--

CREATE TABLE `boitier` (
  `id` int(11) NOT NULL,
  `reference` varchar(32) NOT NULL,
  `format` varchar(32) NOT NULL,
  `prix` float NOT NULL,
  `photo` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `boitier`
--

INSERT INTO `boitier` (`id`, `reference`, `format`, `prix`, `photo`) VALUES
(1, 'MARS GAMING COMPACT MC300 BLANC', 'MicroATX', 129, 'https://www.cdiscount.com/pdt2/6/7/6/1/700x700/mar4711099471676/rw/mars-gaming-mc300-rose-boitier-pc-micro-atx-ve.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `cpu`
--

CREATE TABLE `cpu` (
  `id` int(11) NOT NULL,
  `marque` varchar(32) NOT NULL,
  `modele` varchar(8) NOT NULL,
  `reference` varchar(32) NOT NULL,
  `generation` int(11) NOT NULL,
  `frequence` float NOT NULL,
  `coeurs` int(11) NOT NULL,
  `thread` int(11) NOT NULL,
  `rammax` int(11) NOT NULL,
  `socket` varchar(32) NOT NULL,
  `cache` int(11) NOT NULL,
  `prix` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `cpu`
--

INSERT INTO `cpu` (`id`, `marque`, `modele`, `reference`, `generation`, `frequence`, `coeurs`, `thread`, `rammax`, `socket`, `cache`, `prix`) VALUES
(1, 'intel', 'I5', 'I5-12600K', 12, 3.7, 10, 16, 128, 'LGA 1700', 20, 925),
(2, 'AMD', 'Ryzen 7', 'AMD Ryzen 7 5700X', 5, 3.4, 8, 16, 128, 'AMD AM4', 36, 669);

-- --------------------------------------------------------

--
-- Structure de la table `gpu`
--

CREATE TABLE `gpu` (
  `id` int(11) NOT NULL,
  `marque` varchar(32) NOT NULL,
  `reference` varchar(32) NOT NULL,
  `memoire` int(11) NOT NULL,
  `prix` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `gpu`
--

INSERT INTO `gpu` (`id`, `marque`, `reference`, `memoire`, `prix`) VALUES
(1, 'MSI', 'NVIDIA GeForce RTX 4090', 24, 8999);

-- --------------------------------------------------------

--
-- Structure de la table `mother`
--

CREATE TABLE `mother` (
  `id` int(11) NOT NULL,
  `marque` varchar(32) NOT NULL,
  `reference` varchar(32) NOT NULL,
  `format` varchar(32) NOT NULL,
  `socket` varchar(32) NOT NULL,
  `ram` int(11) NOT NULL,
  `slotram` int(11) NOT NULL,
  `prix` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `mother`
--

INSERT INTO `mother` (`id`, `marque`, `reference`, `format`, `socket`, `ram`, `slotram`, `prix`) VALUES
(1, 'MSI', 'PRO H510M-B', 'MicroATX', 'AMD AM4', 64, 2, 199),
(2, 'GIGABYTE', 'B760M GAMING X AX DDR5', 'ATX', 'LGA 1700', 128, 4, 579),
(3, 'COLORFUL', 'BATTLE-AX H610M-E ', 'MicroATX', 'AMD AM4', 64, 2, 299);

-- --------------------------------------------------------

--
-- Structure de la table `ram`
--

CREATE TABLE `ram` (
  `id` int(11) NOT NULL,
  `marque` varchar(32) NOT NULL,
  `reference` varchar(32) NOT NULL,
  `total` int(11) NOT NULL,
  `slot` int(11) NOT NULL,
  `prix` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ram`
--

INSERT INTO `ram` (`id`, `marque`, `reference`, `total`, `slot`, `prix`) VALUES
(1, 'Colorful', 'Battle-Ax Redline DDR4 4000Mhz', 16, 2, 179);

-- --------------------------------------------------------

--
-- Structure de la table `stockage`
--

CREATE TABLE `stockage` (
  `id` int(11) NOT NULL,
  `marque` varchar(32) NOT NULL,
  `reference` varchar(32) NOT NULL,
  `stockage` int(11) NOT NULL,
  `prix` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `stockage`
--

INSERT INTO `stockage` (`id`, `marque`, `reference`, `stockage`, `prix`) VALUES
(1, 'MSI', 'SPATIUM S270', 480, 118);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `boitier`
--
ALTER TABLE `boitier`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `cpu`
--
ALTER TABLE `cpu`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `gpu`
--
ALTER TABLE `gpu`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `mother`
--
ALTER TABLE `mother`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ram`
--
ALTER TABLE `ram`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `stockage`
--
ALTER TABLE `stockage`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `boitier`
--
ALTER TABLE `boitier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `cpu`
--
ALTER TABLE `cpu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `gpu`
--
ALTER TABLE `gpu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `mother`
--
ALTER TABLE `mother`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `ram`
--
ALTER TABLE `ram`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `stockage`
--
ALTER TABLE `stockage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
