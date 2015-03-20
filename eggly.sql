-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Ven 20 Mars 2015 à 16:57
-- Version du serveur: 5.5.40-0ubuntu0.14.04.1
-- Version de PHP: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `eggly`
--

-- --------------------------------------------------------

--
-- Structure de la table `bookmarks`
--

CREATE TABLE IF NOT EXISTS `bookmarks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(2048) NOT NULL,
  `title` text NOT NULL,
  `id_category` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=armscii8 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `bookmarks`
--

INSERT INTO `bookmarks` (`id`, `url`, `title`, `id_category`) VALUES
(1, 'http://angularjs.org', 'AngularJS', 1),
(2, 'http://angularjs.org', 'Egghead.io', 1),
(3, 'http://alistapart.com', 'A List Apart', 2),
(4, 'http://onepagelove.com', 'One Page Love', 2),
(5, 'http://www.mobilitywod.com', 'MobilityWOD', 3),
(6, 'http://robbwolf.com', 'Robb Wolf', 3),
(7, 'http://memebase.cheezburger.com/senorgif', 'Senor Gif', 4),
(8, 'http://wimp.com', 'Wimp', 4),
(9, 'http://dump.com', 'Dump', 4);

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=armscii8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Development'),
(2, 'Design'),
(3, 'Exercise'),
(4, 'Humor');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
