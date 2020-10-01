-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 26 sep. 2020 à 20:34
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `simplon`
--

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `id` int(11) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`id`, `mot_de_passe`, `email`, `nom`, `date`) VALUES
(1, 'c20ad4d76fe97759aa27a0c99bff6710', 'test@gmail.com', 'test', '2020-09-25'),
(2, '202cb962ac59075b964b07152d234b70', 'test1@gmail.com', 'test1', '2020-09-25'),
(3, '81dc9bdb52d04dc20036dbd8313ed055', 'laety@gmail.com', 'seri gakou laeticia', '2020-09-26'),
(4, '827ccb0eea8a706c4c34a16891f84e7b', 'diamondsblak@gmail.com', 'SERI', '2020-09-26'),
(5, '202cb962ac59075b964b07152d234b70', 'franck@gmail.com', 'Franck-emerson Kouamé', '2020-09-26');

-- --------------------------------------------------------

--
-- Structure de la table `presence`
--

CREATE TABLE `presence` (
  `iduser` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `datesign` date NOT NULL DEFAULT current_timestamp(),
  `timesign` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `presence`
--

INSERT INTO `presence` (`iduser`, `id`, `datesign`, `timesign`) VALUES
(1, 1, '2020-09-25', '2020-09-25 20:30:19'),
(2, 2, '2020-09-25', '2020-09-25 20:42:22'),
(3, 3, '2020-09-26', '2020-09-26 16:11:38'),
(4, 4, '2020-09-26', '2020-09-26 17:29:14'),
(5, 5, '2020-09-26', '2020-09-26 18:32:07');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `presence`
--
ALTER TABLE `presence`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `presence`
--
ALTER TABLE `presence`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
