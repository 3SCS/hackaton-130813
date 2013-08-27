-- phpMyAdmin SQL Dump
-- version 3.3.8.1
-- http://www.phpmyadmin.net
--
-- Serveur: 127.0.0.1
-- Généré le : Jeu 15 Août 2013 à 18:17
-- Version du serveur: 5.1.54
-- Version de PHP: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `utilisateur`
--

-- --------------------------------------------------------

--
-- Structure de la table `chapitre`
--

CREATE TABLE IF NOT EXISTS `chapitre` (
  `id_chapitre` int(11) NOT NULL,
  `id_exercice` int(11) DEFAULT NULL,
  `titre` varchar(30) DEFAULT NULL,
  `contenu` blob,
  PRIMARY KEY (`id_chapitre`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `chapitre`
--

INSERT INTO `chapitre` (`id_chapitre`, `id_exercice`, `titre`, `contenu`) VALUES
(5, 1, 'maintenance', 0x433a50726f6772616d2046696c6573456173795048502d352e332e342e307777776861636b746f6e696e666f726d6174697175656368617069747265312e747874);

-- --------------------------------------------------------

--
-- Structure de la table `matiere`
--

CREATE TABLE IF NOT EXISTS `matiere` (
  `id_matiere` int(11) NOT NULL,
  `nom` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_matiere`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `matiere`
--

INSERT INTO `matiere` (`id_matiere`, `nom`) VALUES
(1, 'exercice1'),
(2, 'exercice2');

-- --------------------------------------------------------

--
-- Structure de la table `profil`
--

CREATE TABLE IF NOT EXISTS `profil` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(20) NOT NULL,
  `nom` varchar(20) DEFAULT NULL,
  `prenom` varchar(30) DEFAULT NULL,
  `date_naiss` int(11) DEFAULT NULL,
  `id_badge` int(11) DEFAULT NULL,
  `login` varchar(20) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `sexe` varchar(3) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Contenu de la table `profil`
--

INSERT INTO `profil` (`id`, `type`, `nom`, `prenom`, `date_naiss`, `id_badge`, `login`, `password`, `sexe`) VALUES
(1, '', '', '', 0, 0, '', '', ''),
(4, '', 'Hamid', 'Mahamat', 15, 11223, 'hamidas', 'passer', 'm'),
(6, '', 'abass', 'ndiaye', 121188, 239494, 'abass', 'passer', 'm'),
(7, '', 'Taminou', 'Ndiaye', 230587, 23773, 'taminou', 'passer', 'm'),
(8, 'Etudiant', 'Bond', 'James', 11111980, 23202, 'jb007', 'passer', ''),
(9, 'Enseignant', 'Einstein', 'Albert', 14031879, 1, 'genius', 'passer', 'm'),
(10, 'Enseignant', 'Einstein', 'Albert', 14031879, 1, 'genius', 'passer', 'm'),
(11, 'Enseignant', 'Einstein', 'Albert', 14031879, 1, 'genius', 'passer', 'm');

-- --------------------------------------------------------

--
-- Structure de la table `visites`
--

CREATE TABLE IF NOT EXISTS `visites` (
  `idvisite` int(30) NOT NULL AUTO_INCREMENT,
  `login` varchar(30) NOT NULL,
  `id_exo` int(20) NOT NULL,
  `heure` varchar(20) NOT NULL,
  `phero` float NOT NULL,
  PRIMARY KEY (`idvisite`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `visites`
--

INSERT INTO `visites` (`idvisite`, `login`, `id_exo`, `heure`, `phero`) VALUES
(1, 'hamidas', 1, '', 0),
(2, 'hamidas', 1, '', 0),
(3, 'taminou', 1, '', 0),
(4, 'abass', 1, '17:13', 0),
(5, 'abass', 1, '17:17', 0.1),
(6, 'hamidas', 1, '17:48', 0.1),
(7, 'abass', 1, '17:53', 0.1),
(8, 'genius', 2, '18:06', 0.1);
