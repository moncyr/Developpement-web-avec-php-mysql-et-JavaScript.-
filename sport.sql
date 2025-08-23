-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 23 août 2025 à 10:44
-- Version du serveur : 9.1.0
-- Version de PHP : 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `sport`
--

-- --------------------------------------------------------

--
-- Structure de la table `personne`
--

DROP TABLE IF EXISTS `personne`;
CREATE TABLE IF NOT EXISTS `personne` (
  `id_personne` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `depart` date NOT NULL,
  `email` varchar(256) NOT NULL,
  PRIMARY KEY (`id_personne`),
  UNIQUE KEY `id_personne` (`id_personne`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `personne`
--

INSERT INTO `personne` (`id_personne`, `nom`, `prenom`, `depart`, `email`) VALUES
(1, 'Monthe', 'Cyrille', '2025-08-20', 'moncyr90@gmail.com'),
(2, 'Parker', 'Tonny ', '2025-08-20', 'tonnyparker@gmail.com'),
(11, 'legrang', 'Alain', '2025-08-20', 'alainlegrand@gmail.com'),
(12, 'Giroit', 'Hermann', '2025-08-19', 'hermanngiroit@gmail.com'),
(13, 'laplante', 'Joel', '2025-08-10', 'joellaplante@gmail.com'),
(14, 'Loiselle', 'Anthony', '2025-08-18', 'antholoiselle@gmail.com'),
(17, 'Biren', 'Aimy', '2025-08-04', 'aimy1@gmail.com'),
(18, 'Biren', 'Aimy', '2025-08-04', 'aimy1@gmail.com'),
(19, 'Biren', 'Aimy', '2025-08-04', 'aimy1@gmail.com'),
(20, 'Brunelle', 'victor', '2025-08-20', 'victorbrunelle@gmail.com'),
(21, 'Edouard', 'Charles', '2025-08-06', 'charles@gmail.com'),
(22, 'Soli', 'olive', '2025-08-06', 'olisoli@yahoo.com'),
(23, 'Dubois', 'Anthony', '2025-08-21', 'anthonydubois@gmail.com'),
(24, 'Duprix', 'Manon', '2025-08-24', 'manonduprix@yahoo.com'),
(25, 'Simon', 'Jean', '2025-07-28', 'jeansimon@yahoo.fr'),
(26, 'Saumier', 'Nathalie', '2025-08-21', 'nathaliesaumier@gmail.com'),
(27, 'Degrace', 'Ange', '2025-08-22', 'angedegrace@gmail.com'),
(28, 'Tramblay', 'Joan', '2025-08-21', 'joantramblay@gmail.com'),
(29, 'Parker', 'Tonny ', '2025-08-20', 'tonnyparker@gmail.com'),
(30, 'Parker', 'Tonny ', '2025-08-21', 'tonnyparker@gmail.com'),
(31, 'Dubois', 'Anthony', '2025-08-20', 'anthonydubois@gmail.com'),
(32, 'laforge', 'lisette', '2025-08-23', 'lisettelaforge@gmail.com'),
(33, 'Monthe', 'Cyrille', '2025-08-22', 'moncyr90@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `pratique`
--

DROP TABLE IF EXISTS `pratique`;
CREATE TABLE IF NOT EXISTS `pratique` (
  `id_personne` int NOT NULL,
  `id_sport` int NOT NULL,
  `niveau` varchar(256) NOT NULL,
  PRIMARY KEY (`id_personne`,`id_sport`),
  KEY `id_sport` (`id_sport`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `pratique`
--

INSERT INTO `pratique` (`id_personne`, `id_sport`, `niveau`) VALUES
(12, 48, 'Debutant'),
(14, 50, 'Debutant'),
(18, 54, 'Debutant'),
(19, 55, 'Debutant'),
(20, 56, 'Confirme'),
(21, 57, 'Confirme'),
(22, 58, 'Confirme'),
(23, 59, 'Debutant'),
(24, 60, 'Debutant'),
(25, 61, 'Debutant'),
(26, 62, 'Debutant'),
(27, 63, 'Debutant'),
(28, 64, 'Debutant'),
(29, 65, 'Debutant'),
(30, 66, 'Debutant'),
(31, 67, 'Debutant'),
(32, 68, 'Debutant'),
(33, 69, 'Confirme');

-- --------------------------------------------------------

--
-- Structure de la table `sport`
--

DROP TABLE IF EXISTS `sport`;
CREATE TABLE IF NOT EXISTS `sport` (
  `id_sport` int NOT NULL AUTO_INCREMENT,
  `design` varchar(256) NOT NULL,
  PRIMARY KEY (`id_sport`)
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `sport`
--

INSERT INTO `sport` (`id_sport`, `design`) VALUES
(1, 'Soccer'),
(2, 'Boxe Anglaise'),
(3, 'Boxe '),
(4, 'Basket Ball'),
(5, 'Rugbi'),
(6, 'Trampoline'),
(7, 'Marathon'),
(8, 'Sprint'),
(9, 'Volley Ball'),
(10, 'Badminton'),
(11, 'Natation'),
(12, 'Velo'),
(13, 'Ski'),
(14, 'Course cheval'),
(15, 'Athlétisme'),
(16, 'gymnastic'),
(17, 'Lancer du poids'),
(18, 'Lancer de fleche'),
(19, 'Tir à l\'arc'),
(20, 'Saut en hauteur'),
(21, 'Saut en longueur'),
(22, 'Dance classique'),
(23, 'Marche'),
(24, 'Catch '),
(25, 'Lutte'),
(26, 'Judo'),
(27, 'karate   '),
(28, 'karate'),
(29, 'Kungfu'),
(30, 'Tennis'),
(31, 'Tennis de table'),
(32, 'Beach volley'),
(33, 'haltérophilie '),
(34, 'Sumo'),
(35, 'Decathlon '),
(36, 'Parachute'),
(37, 'Lancer de flechette'),
(38, 'Ski Nautique'),
(39, 'Surf sur planche'),
(40, 'MMA masculin'),
(41, 'MMA féminin'),
(42, 'Foot salle'),
(43, 'Foot salle'),
(44, 'Foot salle'),
(45, 'Foot salle'),
(46, 'Foot salle'),
(48, 'Foot Americain'),
(50, 'Tenis de table'),
(54, 'Foot salle'),
(55, 'Baise Ball'),
(56, 'Athlétisme'),
(57, 'Athlétisme'),
(58, 'Athlétisme'),
(59, 'Escallade'),
(60, 'Course a moto'),
(61, 'Glissade'),
(62, 'Natation'),
(63, 'Basket Ball'),
(64, 'Basket Ball'),
(65, 'Decathlon '),
(66, 'Foot Americain'),
(67, 'gymnastic'),
(68, 'gymnastic'),
(69, 'Athlétisme');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `pratique`
--
ALTER TABLE `pratique`
  ADD CONSTRAINT `pratique_ibfk_2` FOREIGN KEY (`id_personne`) REFERENCES `personne` (`id_personne`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pratique_ibfk_3` FOREIGN KEY (`id_sport`) REFERENCES `sport` (`id_sport`) ON DELETE CASCADE ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
