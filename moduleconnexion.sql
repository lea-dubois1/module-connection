-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 02 déc. 2022 à 13:52
-- Version du serveur : 10.6.5-MariaDB
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `moduleconnexion`
--

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `login`, `prenom`, `nom`, `password`) VALUES
(9, 'admin', 'admin', 'admin', '$2y$10$bp2cFUOaB5IAr6hqpcSVTOUE4KLDNYk6BQ.QbluVGgcAFt/nXRUAq'),
(11, 'ab007', 'Aurore', 'Benoist', '$2y$10$JoGDR/TfsDFUCU/biHQ1tObtfh0dLn/Ep5HhORKfRaajF95UIJKji'),
(7, 'juliedbs', 'huihv', 'buzih', '$2y$10$ZPQRTOI4u9Uw3failiuxOefEzECpihNIWw/UPN3wHPZTPQtszfkV2'),
(5, 'leadbs', 'lea', 'dubois', '$2y$10$r21e5CT0pFrE8WHUZF558uaYlnuR4doFUeOWLic4RtOlKpxy3tCgi'),
(12, 'azerty', 'wxcv', 'nbvc', '$2y$10$32/ktWtTSkiBVkuknQtPN.9S47RzYC1eTwPFwK4jWxfNCc4MceJfK'),
(13, 'poiuyt', 'iezbnixd', 'bdheizb', '$2y$10$BAyE9uZPVuURjN2IK5nXO.mhs3aaBo13IQIPoKG1E9KhF8jIb8I6K'),
(14, 'wxcvbn', 'buju', 'cghytc', '$2y$10$q.b4cBABKkyUIcCHaYAE/u6xpnTEkaFVIdSqWd5TSzVNJNiQuoOgu');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
