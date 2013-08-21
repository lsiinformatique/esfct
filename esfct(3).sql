-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Lun 19 Août 2013 à 16:37
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `esfct`
--
CREATE DATABASE IF NOT EXISTS `esfct` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `esfct`;

-- --------------------------------------------------------

--
-- Structure de la table `match`
--

CREATE TABLE IF NOT EXISTS `match` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `link` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL,
  `categorie` int(1) NOT NULL,
  `challenger1` varchar(255) NOT NULL,
  `challenger2` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `match`
--

INSERT INTO `match` (`id`, `link`, `images`, `categorie`, `challenger1`, `challenger2`, `date`) VALUES
(1, 'http://csgo.esfct.com', 'csgo', 1, 'P-CORE', '5VLST', '08/09/2013');

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

CREATE TABLE IF NOT EXISTS `membres` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `session` text NOT NULL,
  `pseudo` text NOT NULL,
  `passe` text NOT NULL,
  `email` text NOT NULL,
  `niv_admin` int(1) NOT NULL,
  `ffjvr` varchar(255) NOT NULL,
  `depart` text NOT NULL,
  `cat_username` int(11) NOT NULL,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `age` text NOT NULL,
  `active_equipe` int(1) NOT NULL,
  `nom_equipe` text NOT NULL,
  `active_csgo` int(1) NOT NULL,
  `rank_csgo` text NOT NULL,
  `active_shoot` int(1) NOT NULL,
  `rank_shoot` text NOT NULL,
  `active_dota2` int(1) NOT NULL,
  `rank_dota2` text NOT NULL,
  `active_sc2` int(1) NOT NULL,
  `rank_sc2` text NOT NULL,
  `active_fifa` int(1) NOT NULL,
  `rank_fifa` text NOT NULL,
  `active_trackmania` int(1) NOT NULL,
  `rank_trackmania` int(11) NOT NULL,
  `class_csgo` text NOT NULL,
  `class_shoot` text NOT NULL,
  `class_dota2` text NOT NULL,
  `class_sc2` text NOT NULL,
  `class_fifa` text NOT NULL,
  `class_trackmania` text NOT NULL,
  UNIQUE KEY `id_2` (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `membres`
--

INSERT INTO `membres` (`id`, `session`, `pseudo`, `passe`, `email`, `niv_admin`, `ffjvr`, `depart`, `cat_username`, `nom`, `prenom`, `age`, `active_equipe`, `nom_equipe`, `active_csgo`, `rank_csgo`, `active_shoot`, `rank_shoot`, `active_dota2`, `rank_dota2`, `active_sc2`, `rank_sc2`, `active_fifa`, `rank_fifa`, `active_trackmania`, `rank_trackmania`, `class_csgo`, `class_shoot`, `class_dota2`, `class_sc2`, `class_fifa`, `class_trackmania`) VALUES
(1, 'ZS5ANHLBPEL2PHLB3852YCVFXHIBN8', 'Administrateur', '201c238c414b3f9d7bec9bb76567f65a', 'contact@esfct.com', 1, '40003310', '85', 2, 'MOCKELYN', 'MAXIME', '21', 1, 'TEST', 0, '', 0, '', 0, '', 0, '\r\n', 0, '', 0, 0, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categorie_news` int(1) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `desc` longtext NOT NULL,
  `images` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `news`
--

INSERT INTO `news` (`id`, `categorie_news`, `title`, `date`, `author`, `desc`, `images`) VALUES
(1, 0, 'ESFCT 1st Edition: ORION', '10 aout 2013', 'Syltheron', '<p>Le moment est arriv&eacute;e.</p>', 'esfct');

-- --------------------------------------------------------

--
-- Structure de la table `slide`
--

CREATE TABLE IF NOT EXISTS `slide` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `categorie` varchar(255) NOT NULL,
  `desc` longtext NOT NULL,
  `images` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `slide`
--

INSERT INTO `slide` (`id`, `title`, `categorie`, `desc`, `images`) VALUES
(2, 'DUEL OF CHAMPION', 'game', 'Nouveau n&eacute; de la s&eacute;rie Heroes Might And Magic, ce jeux est entr&eacute; dans notre ligue tournoi. Suivez les joueurs et les news de ce jeux dans la rubrique jeux > DUAL OF CHAMPION.', 'dual-of-champion');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
