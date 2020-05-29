-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 16 mai 2020 à 18:31
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestion_vols`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `CodeClient` int(11) NOT NULL,
  `Nom` varchar(254) DEFAULT NULL,
  `Prenom` varchar(254) DEFAULT NULL,
  `Address` varchar(254) DEFAULT NULL,
  `CodePostal` varchar(254) DEFAULT NULL,
  `Ville` varchar(254) DEFAULT NULL,
  `NumeroPassport` varchar(254) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`CodeClient`, `Nom`, `Prenom`, `Address`, `CodePostal`, `Ville`, `NumeroPassport`) VALUES
(1, 'homir', 'mohammed', '37 av chakib arsalane qu jnane chekkouri', '46000', 'safi', '33333'),
(2, 'amine', 'mohammed', '37 av chakib arsalane qu jnane chekkouri', '46000', 'safi', '33333');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `NumeroReservation` int(11) NOT NULL,
  `Id_client` int(11) DEFAULT NULL,
  `Id_vol` int(11) DEFAULT NULL,
  `DateReservation` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`NumeroReservation`, `Id_client`, `Id_vol`, `DateReservation`) VALUES
(1, 1, 3, '2020-05-16 16:29:36'),
(2, 2, 1, '2020-05-16 16:30:09');

-- --------------------------------------------------------

--
-- Structure de la table `vol`
--

CREATE TABLE `vol` (
  `Numvol` int(11) NOT NULL,
  `num_vol` int(11) DEFAULT NULL,
  `lieu_depart` varchar(30) DEFAULT NULL,
  `lieu_arrive` varchar(30) DEFAULT NULL,
  `date_depart` date DEFAULT NULL,
  `date_arrive` date DEFAULT NULL,
  `nom_places` int(11) DEFAULT NULL,
  `prix` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `vol`
--

INSERT INTO `vol` (`Numvol`, `num_vol`, `lieu_depart`, `lieu_arrive`, `date_depart`, `date_arrive`, `nom_places`, `prix`) VALUES
(1, 1920, 'Dakhla', 'Essaouira', '2020-05-01', '2020-05-03', 40, 550),
(2, 1, 'Essaouira', 'Safi', '2020-05-01', '2020-05-02', 70, 40),
(3, 2, 'Essaouira', 'Safi', '2020-05-04', '2020-05-05', 50, 30);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`CodeClient`),
  ADD UNIQUE KEY `CLIENT_PK` (`CodeClient`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`NumeroReservation`),
  ADD UNIQUE KEY `RESERVATION_PK` (`NumeroReservation`),
  ADD KEY `Id_vol` (`Id_vol`),
  ADD KEY `Id_client` (`Id_client`);

--
-- Index pour la table `vol`
--
ALTER TABLE `vol`
  ADD PRIMARY KEY (`Numvol`),
  ADD UNIQUE KEY `vol_PK` (`Numvol`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `CodeClient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `NumeroReservation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`Id_vol`) REFERENCES `vol` (`Numvol`),
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`Id_client`) REFERENCES `client` (`CodeClient`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
