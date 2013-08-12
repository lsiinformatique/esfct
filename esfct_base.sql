-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Lun 12 Août 2013 à 16:18
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
-- Structure de la table `membre`
--

CREATE TABLE IF NOT EXISTS `membre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `login` text NOT NULL,
  `pass_md5` text NOT NULL,
  `type_cpt` int(1) NOT NULL,
  `niv_admin` int(1) NOT NULL,
  `club` int(1) NOT NULL,
  `nom_club` text NOT NULL,
  `rank_csgo` text NOT NULL,
  `rank_dual` text NOT NULL,
  `rank_lol` text NOT NULL,
  `rank_sc2` text NOT NULL,
  `rank_shoot` text NOT NULL,
  `rank_fifa` text NOT NULL,
  `csgo_active` int(1) NOT NULL,
  `dual_active` int(1) NOT NULL,
  `lol_active` int(1) NOT NULL,
  `sc2_active` int(1) NOT NULL,
  `shoot_active` int(1) NOT NULL,
  `fifa_active` int(1) NOT NULL,
  `num_license_ffjvr` int(13) NOT NULL,
  `depart` text NOT NULL,
  `cat_username` int(1) NOT NULL,
  `age` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `membre`
--

INSERT INTO `membre` (`id`, `nom`, `prenom`, `login`, `pass_md5`, `type_cpt`, `niv_admin`, `club`, `nom_club`, `rank_csgo`, `rank_dual`, `rank_lol`, `rank_sc2`, `rank_shoot`, `rank_fifa`, `csgo_active`, `dual_active`, `lol_active`, `sc2_active`, `shoot_active`, `fifa_active`, `num_license_ffjvr`, `depart`, `cat_username`, `age`) VALUES
(1, 'MOCKELYN', 'Maxime\r\n', 'Administrateur', '201c238c414b3f9d7bec9bb76567f65a', 1, 1, 0, '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 40003310, '85', 2, '21');

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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

INSERT INTO `news` (`id`, `title`, `date`, `author`, `desc`, `images`) VALUES
(1, 'ESFCT 1st Edition: ORION', '10 aout 2013', 'Syltheron', '<p>Le moment est arriv&eacute;e.</p>', 'esfct');

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
