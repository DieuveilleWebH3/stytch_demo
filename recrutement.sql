-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 16 Octobre 2014 à 13:28
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `recrutement`
--

-- --------------------------------------------------------

--
-- Structure de la table `connu_par`
--

CREATE TABLE IF NOT EXISTS `connu_par` (
  `id` int(8) unsigned NOT NULL AUTO_INCREMENT,
  `intitule` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `connu_par`
--

INSERT INTO `connu_par` (`id`, `intitule`) VALUES
(1, 'Presse'),
(2, 'TV'),
(3, 'Telephone');

-- --------------------------------------------------------

--
-- Structure de la table `qualite`
--

CREATE TABLE IF NOT EXISTS `qualite` (
  `id` int(8) unsigned NOT NULL AUTO_INCREMENT,
  `intitule` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `qualite`
--

INSERT INTO `qualite` (`id`, `intitule`) VALUES
(1, 'Prospect');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(8) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `adresse` text NOT NULL,
  `ville` varchar(50) NOT NULL,
  `code_postal` varchar(5) NOT NULL,
  `tel` varchar(25) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  `date_inscription` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur_connu_par`
--

CREATE TABLE IF NOT EXISTS `utilisateur_connu_par` (
  `id` int(8) unsigned NOT NULL AUTO_INCREMENT,
  `id_utilisateur` int(8) unsigned NOT NULL,
  `id_connu_par` int(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `connu_par_unique` (`id_utilisateur`,`id_connu_par`),
  KEY `id_utilisateur` (`id_utilisateur`),
  KEY `id_connu_par` (`id_connu_par`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur_qualite`
--

CREATE TABLE IF NOT EXISTS `utilisateur_qualite` (
  `id` int(8) unsigned NOT NULL AUTO_INCREMENT,
  `id_utilisateur` int(8) unsigned NOT NULL,
  `id_qualite` int(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `qualite_unique` (`id_utilisateur`,`id_qualite`),
  KEY `id_utilisateur` (`id_utilisateur`),
  KEY `id_qualite` (`id_qualite`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `utilisateur_connu_par`
--
ALTER TABLE `utilisateur_connu_par`
  ADD CONSTRAINT `utilisateur_connu_par_ibfk_2` FOREIGN KEY (`id_connu_par`) REFERENCES `connu_par` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `utilisateur_connu_par_ibfk_1` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `utilisateur_qualite`
--
ALTER TABLE `utilisateur_qualite`
  ADD CONSTRAINT `utilisateur_qualite_ibfk_2` FOREIGN KEY (`id_qualite`) REFERENCES `qualite` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `utilisateur_qualite_ibfk_1` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
