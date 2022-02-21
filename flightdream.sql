-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 16 fév. 2022 à 11:06
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `flightdream`
--

-- --------------------------------------------------------

--
-- Structure de la table `flight`
--

CREATE TABLE `flight` (
  `id` int(100) NOT NULL,
  `departurePlace` varchar(100) DEFAULT NULL,
  `arrivalPlace` varchar(100) DEFAULT NULL,
  `departureDate` date DEFAULT NULL,
  `passengerNumber` int(100) DEFAULT NULL,
  `placeNumber` int(100) DEFAULT NULL,
  `price` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `flight`
--

INSERT INTO `flight` (`id`, `departurePlace`, `arrivalPlace`, `departureDate`, `passengerNumber`, `placeNumber`, `price`) VALUES
(3, '', '', '0000-00-00', 0, 0, 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `flight`
--
ALTER TABLE `flight`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `flight`
--
ALTER TABLE `flight`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
