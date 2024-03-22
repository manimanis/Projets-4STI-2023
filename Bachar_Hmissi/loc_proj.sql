-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 22 mars 2024 à 14:18
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
-- Base de données : `loc_proj`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `IdClient` int(11) NOT NULL,
  `NP` varchar(64) DEFAULT NULL,
  `Genre` char(1) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `Tel` char(8) DEFAULT NULL,
  `Adresse` varchar(64) NOT NULL
) ;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`IdClient`, `NP`, `Genre`, `DOB`, `Tel`, `Adresse`) VALUES
(1, 'Mohamed Bachar Khalifa Hemissi', 'M', '2005-08-11', '26288764', '26,rue bouali lahouar'),
(2, 'mamÃ©lodie', 'M', '2004-07-22', '23300554', '3655,rue bouali lahouar');

-- --------------------------------------------------------

--
-- Structure de la table `location`
--

CREATE TABLE `location` (
  `IdClient` int(11) NOT NULL,
  `IdProduit` int(11) NOT NULL,
  `DateLoc` date NOT NULL DEFAULT current_timestamp(),
  `Duree` decimal(4,1) NOT NULL,
  `Qte` int(11) NOT NULL
) ;

--
-- Déchargement des données de la table `location`
--

INSERT INTO `location` (`IdClient`, `IdProduit`, `DateLoc`, `Duree`, `Qte`) VALUES
(1, 3, '2024-03-01', 3.0, 2),
(1, 3, '2024-03-21', 36.0, 5),
(1, 4, '2024-03-01', 6.5, 2),
(1, 4, '2024-03-04', 2.5, 2),
(1, 4, '2024-03-17', 5.0, 2);

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `IdProd` int(11) NOT NULL,
  `Libelle` varchar(32) NOT NULL,
  `NbreDisp` int(11) NOT NULL,
  `PrixUnitHeure` decimal(10,2) NOT NULL,
  `Description` varchar(32) NOT NULL
) ;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`IdProd`, `Libelle`, `NbreDisp`, `PrixUnitHeure`, `Description`) VALUES
(3, 'Camera Canon EOS C70', 2, 10.00, 'etat neuf cachete 4K ULTRA'),
(4, 'carte graphique', 4, 20.00, 'etat neuf GTX3060 ');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`IdClient`);

--
-- Index pour la table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`IdClient`,`IdProduit`,`DateLoc`),
  ADD KEY `fk2` (`IdProduit`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`IdProd`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `IdClient` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `IdProd` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `location`
--
ALTER TABLE `location`
  ADD CONSTRAINT `fk1` FOREIGN KEY (`IdClient`) REFERENCES `client` (`IdClient`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk2` FOREIGN KEY (`IdProduit`) REFERENCES `produit` (`IdProd`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
