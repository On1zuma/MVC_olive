-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- HÃ´te : 127.0.0.1:3306
-- GÃ©nÃ©rÃ© le : lun. 07 fÃ©v. 2022 Ã  08:31
-- Version du serveur : 5.7.36
-- Version de PHP : 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de donnÃ©es : `test`
--

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nomCategory` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- DÃ©chargement des donnÃ©es de la table `category`
--

INSERT INTO `category` (`ID`, `nomCategory`) VALUES
(7, 'Test'),
(13, 'Framework');

-- --------------------------------------------------------

--
-- Structure de la table `documentation`
--

DROP TABLE IF EXISTS `documentation`;
CREATE TABLE IF NOT EXISTS `documentation` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `body` varchar(10000) NOT NULL,
  `IDCategory` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- DÃ©chargement des donnÃ©es de la table `documentation`
--

INSERT INTO `documentation` (`ID`, `title`, `body`, `IDCategory`) VALUES
(1, '<h1>Hello world</h1>', '<p>Salut</p>', 7),
(4, 'MVC', 'Pour le MVC, nous avons utilisÃ© le modÃ¨le fourni par notre professeur.\r\nNous avons utilisÃ© ce modÃ¨le car il est simple et accessible Ã  tous.', 13);

-- --------------------------------------------------------

--
-- Structure de la table `token`
--

DROP TABLE IF EXISTS `token`;
CREATE TABLE IF NOT EXISTS `token` (
  `email_user` varchar(50) NOT NULL,
  `token_mdp` varchar(100) NOT NULL,
  `date_creation` datetime NOT NULL,
  `date_expiration` datetime NOT NULL,
  PRIMARY KEY (`email_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` enum('U','A') NOT NULL,
  `bloquer` tinyint(1) NOT NULL DEFAULT '0',
  `last_connexion` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `current_connexion` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `nb_connexion` int(11) NOT NULL DEFAULT '0',
  `tentatives` int(11) DEFAULT '0',
  `token` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`ID`,`email`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- DÃ©chargement des donnÃ©es de la table `user`
--

INSERT INTO `user` (`ID`, `nom`, `prenom`, `email`, `password`, `role`, `bloquer`, `last_connexion`, `current_connexion`, `nb_connexion`, `tentatives`, `token`) VALUES
(9, '11', '11', 'jean-christophe.nguyen@etu.univ-amu.fr', '$2y$10$GVDwvFbxk9mNlhroYOWI2Og1CD8qc3esAk.XBtqf34Was29ZUSVl6', 'U', 0, '2022-01-09 16:50:58', '2022-01-09 20:06:10', 19, 0, 0),
(18, '88', '88', 'jean-christophe.nguyen@gogaille.fr', '$2y$10$NcIGRz4nhAsTnad/mbMH2.QwQLRpmp6ooc0iMv1H4JLV9JsAjOMPK', 'U', 1, '2022-01-17 22:09:35', '2022-01-17 22:12:53', 4, 9, 0),
(16, '00', '00', 'nguyenjeanchristophe9051@gmail.com', '$2y$10$udhNBJxy6uN6VDfYES2lveVdi5eUoIK3UE7pi9cewsd2ZoiF8hoVG', 'U', 0, '2022-01-09 16:37:37', '2022-01-09 16:37:43', 1, 0, 0),
(19, '11', '11', 'Ptut.troc@gmail.com', '$2y$10$GWqpk/v9yx3MZZVklp.W5.ITJT4gkJkoVUeevK8nA6OypEdObaSY6', 'U', 0, '2022-01-28 17:54:53', '2022-01-30 21:50:45', 7, 0, 0),
(20, 'test', 'test', 'test@test.fr', '$2y$10$zTIeo28JoUANJ9tvkfS6o.2yoo090cxPhNcBnViS9zFFmVZu5llU.', 'A', 0, '2022-01-30 21:51:06', '2022-01-31 18:11:18', 3, 0, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
