-- phpMyAdmin SQL Dump
-- version 3.3.8
-- http://www.phpmyadmin.net
--
-- Serveur: 127.0.0.1
-- Généré le : Jeu 15 Août 2013 à 11:41
-- Version du serveur: 5.1.52
-- Version de PHP: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `defi`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `log` text NOT NULL,
  `mdp` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`id`, `log`, `mdp`) VALUES
(1, 'toto', 'e7247759c1633c0f9f1485f3690294a9');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE IF NOT EXISTS `categorie` (
  `id_cat` int(11) NOT NULL AUTO_INCREMENT,
  `libelle_cat` text NOT NULL,
  PRIMARY KEY (`id_cat`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `categorie`
--


-- --------------------------------------------------------

--
-- Structure de la table `chalange`
--

CREATE TABLE IF NOT EXISTS `chalange` (
  `id_Q` int(10) NOT NULL AUTO_INCREMENT,
  `iid_et` int(10) NOT NULL,
  `A1` varchar(50) NOT NULL,
  `A2` varchar(50) NOT NULL,
  `A3` varchar(50) NOT NULL,
  `A4` varchar(50) NOT NULL,
  `A5` varchar(50) NOT NULL,
  `A6` varchar(50) NOT NULL,
  `A7` varchar(50) NOT NULL,
  `A8` varchar(50) NOT NULL,
  `A9` varchar(50) NOT NULL,
  PRIMARY KEY (`id_Q`),
  KEY `id_Q` (`id_Q`),
  KEY `id_Q_2` (`id_Q`),
  KEY `id_Q_3` (`id_Q`),
  KEY `id_Q_4` (`id_Q`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Contenu de la table `chalange`
--

INSERT INTO `chalange` (`id_Q`, `iid_et`, `A1`, `A2`, `A3`, `A4`, `A5`, `A6`, `A7`, `A8`, `A9`) VALUES
(29, 40, 'diop', 'nokia', 'thies', 'thies', 'diagne', 'diagne', 'diagne', 'chien', 'diagne'),
(28, 39, '', '', '', '', '', '', '', '', ''),
(27, 38, 'gueye', 'alcatel', 'thies', 'louga', 'diene', 'diagne', 'diene', 'fourmis', 'diagne'),
(30, 41, '', '', '', '', '', '', '', '', ''),
(31, 41, '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE IF NOT EXISTS `etudiant` (
  `id_et` int(11) NOT NULL AUTO_INCREMENT,
  `login` text NOT NULL,
  `mdp` text NOT NULL,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  PRIMARY KEY (`id_et`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Contenu de la table `etudiant`
--

INSERT INTO `etudiant` (`id_et`, `login`, `mdp`, `nom`, `prenom`) VALUES
(39, 'ltdsi', 'd41d8cd98f00b204e9800998ecf8427e', '', ''),
(40, 'Ouba', 'e7247759c1633c0f9f1485f3690294a9', 'Ba', 'Ousseynou'),
(38, 'jules', 'e7247759c1633c0f9f1485f3690294a9', 'Diagne', 'Souleymane');

-- --------------------------------------------------------

--
-- Structure de la table `question`
--

CREATE TABLE IF NOT EXISTS `question` (
  `idq` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` text NOT NULL,
  PRIMARY KEY (`idq`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `question`
--

INSERT INTO `question` (`idq`, `libelle`) VALUES
(1, 'Votre maitre au CI'),
(2, 'La marque de votre premier telephone'),
(3, 'La ville natale de votre mere'),
(4, 'La ville natale de votre pere'),
(5, 'Votre premier prof de Math'),
(6, 'Votre premier prof de francais'),
(7, 'Votre premier prof d anglais'),
(8, 'Votre animal prefere'),
(9, 'Votre prof prefere');

-- --------------------------------------------------------

--
-- Structure de la table `type_q`
--

CREATE TABLE IF NOT EXISTS `type_q` (
  `id_t_q` int(11) NOT NULL AUTO_INCREMENT,
  `libelle_type` text NOT NULL,
  PRIMARY KEY (`id_t_q`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `type_q`
--

