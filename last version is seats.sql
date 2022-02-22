-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 22 fév. 2022 à 15:31
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.2

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
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `idadmin` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`idadmin`, `email`, `password`) VALUES
(1, 'hamza88@gmail.com', 'azert');

-- --------------------------------------------------------

--
-- Structure de la table `booking`
--

CREATE TABLE `booking` (
  `idbooking` int(11) NOT NULL,
  `idflight` int(100) DEFAULT NULL,
  `iduser` int(100) DEFAULT NULL,
  `idpassenger` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `booking`
--

INSERT INTO `booking` (`idbooking`, `idflight`, `iduser`, `idpassenger`) VALUES
(1, 12, 4, 0),
(2, 12, 5, 0),
(3, 12, 2, 0),
(4, 12, 1, 9),
(5, 12, 1, 10),
(6, 12, 1, 9),
(7, 12, 1, 9),
(8, 12, 1, 11);

-- --------------------------------------------------------

--
-- Structure de la table `flight`
--

CREATE TABLE `flight` (
  `id` int(100) NOT NULL,
  `departurePlace` varchar(100) DEFAULT NULL,
  `arrivalPlace` varchar(100) DEFAULT NULL,
  `departureDate` varchar(100) DEFAULT NULL,
  `passengerNumber` int(100) DEFAULT NULL,
  `placeNumber` int(100) DEFAULT NULL,
  `price` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `flight`
--

INSERT INTO `flight` (`id`, `departurePlace`, `arrivalPlace`, `departureDate`, `passengerNumber`, `placeNumber`, `price`) VALUES
(12, 'Safi', 'Paris', '2022-02-01', 1, 5, 500);

-- --------------------------------------------------------

--
-- Structure de la table `passenger`
--

CREATE TABLE `passenger` (
  `idPassenger` int(100) NOT NULL,
  `iduser` int(100) NOT NULL,
  `idbooking` int(100) DEFAULT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `gender` text NOT NULL,
  `age` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `passenger`
--

INSERT INTO `passenger` (`idPassenger`, `iduser`, `idbooking`, `firstname`, `lastname`, `gender`, `age`) VALUES
(9, 1, NULL, 'Kibo', 'Ross', 'Maiores sint quae di', 34),
(10, 1, NULL, 'hamza1', 'Wooten', 'Dicta dignissimos ar', 23),
(11, 1, NULL, 'Kibo', 'Ross', 'Dicta dignissimos ar', 21);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `iduser` int(100) NOT NULL,
  `firstname` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `age` int(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`iduser`, `firstname`, `lastname`, `age`, `email`, `password`) VALUES
(1, 'abdelghafour', 'ettaqui', 21, 'ettaqui88@gmail.com', '12345678'),
(2, 'hamza', 'analikayn', 21, 'analikayn@analikyn.analikyn', '12345'),
(3, 'reda', 'lkhray', 21, 'lkheray@reda.analikyn', '12345'),
(4, 'yassine', 'kolxiwajed', 21, 'kilxiwajed@analikyn.analikyn', '12345'),
(5, 'cobi coli', 'na9la', 21, 'walo@analikyn.analikyn', '12345'),
(6, 'Laura', 'Stafford', 12, 'ettaqui88@gmail.com', '123'),
(7, 'hamza1', 'Wooten', 12, 'ettaqui88@gmail.com', '123456'),
(8, 'hamza1', 'Wooten', 12, 'ettaqui88@gmail.com', '1234'),
(9, 'hamza1', 'Wooten', 12, 'ettaqui88@gmail.com', '1234'),
(10, 'Laura', 'Stafford', 12, 'ettaqui88@gmail.com', '123'),
(11, 'Laura', 'Wooten', 13, 'ettaqui88@gmail.com', '12345');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idadmin`);

--
-- Index pour la table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`idbooking`),
  ADD KEY `if k foreigner` (`idflight`),
  ADD KEY `if j foreigner` (`iduser`);

--
-- Index pour la table `flight`
--
ALTER TABLE `flight`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `passenger`
--
ALTER TABLE `passenger`
  ADD PRIMARY KEY (`idPassenger`),
  ADD KEY `relations` (`idbooking`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `idadmin` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `booking`
--
ALTER TABLE `booking`
  MODIFY `idbooking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `flight`
--
ALTER TABLE `flight`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `passenger`
--
ALTER TABLE `passenger`
  MODIFY `idPassenger` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `if j foreigner` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `if k foreigner` FOREIGN KEY (`idflight`) REFERENCES `flight` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `passenger`
--
ALTER TABLE `passenger`
  ADD CONSTRAINT `relations` FOREIGN KEY (`idbooking`) REFERENCES `booking` (`idbooking`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
