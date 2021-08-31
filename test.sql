-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 01 oct. 2019 à 12:49
-- Version du serveur :  5.7.21
-- Version de PHP :  5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `test`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

DROP TABLE IF EXISTS `administrateur`;
CREATE TABLE IF NOT EXISTS `administrateur` (
  `ID_Admin` int(11) NOT NULL AUTO_INCREMENT,
  `Pseudo_Admin` varchar(150) NOT NULL,
  `Email_Admin` varchar(150) NOT NULL,
  `Password_Admin` varchar(150) NOT NULL,
  PRIMARY KEY (`ID_Admin`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `administrateur`
--

INSERT INTO `administrateur` (`ID_Admin`, `Pseudo_Admin`, `Email_Admin`, `Password_Admin`) VALUES
(1, 'Moctar', 'moctar@gmail.com', '3e2a3f734a6cb069ff18ea6e46214a1c626399dd');

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

DROP TABLE IF EXISTS `etudiant`;
CREATE TABLE IF NOT EXISTS `etudiant` (
  `matEtud` varchar(10) NOT NULL COMMENT 'matricule de l''etudiant',
  `nomEtud` varchar(15) DEFAULT NULL COMMENT 'nom de l''etudiant',
  `prenomEtud` varchar(25) DEFAULT NULL COMMENT 'prenom de l''etudiant',
  `dateNaissEtud` date DEFAULT NULL COMMENT 'date de naissance de l''etudiant',
  `lieuNaissEtud` varchar(150) NOT NULL COMMENT 'Lieu de naissance de l''étudiant',
  `adressEtud` text NOT NULL COMMENT 'Adresse de l''étudiant',
  `emailEtud` varchar(30) DEFAULT NULL COMMENT 'Email de l''etudiant',
  `telEtud` varchar(20) DEFAULT NULL COMMENT 'téléphone de l''étudiant',
  `sexeEtud` char(1) DEFAULT NULL COMMENT 'sexe de l''etudiant',
  `codeOption` int(11) NOT NULL COMMENT 'code filière de  l''étudiant',
  `codeNiv` int(11) NOT NULL COMMENT 'code du niveau',
  PRIMARY KEY (`matEtud`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`matEtud`, `nomEtud`, `prenomEtud`, `dateNaissEtud`, `lieuNaissEtud`, `adressEtud`, `emailEtud`, `telEtud`, `sexeEtud`, `codeOption`, `codeNiv`) VALUES
('201901AZE', 'CISSE', 'Anta', '2020-10-01', 'Kaolack', 'Guinguineo', 'anta@gmail.com', '771234567', 'F', 2, 1),
('201901BVC', 'GUEYE', 'Fatou', '2019-07-08', 'Kaolack', 'Guinguineo', 'fatougueye@gmail.com', '771121118', 'F', 2, 3),
('201901CVB', 'FAYE', 'Mbaye', '2019-08-03', 'Kaolack', 'Guinguineo', 'mbaye@gmail.com', '771121115', 'M', 1, 3),
('201901CXW', 'GNINGNUE', 'Mame Diarra', '2019-07-28', 'Kaolack', 'Guinguineo', 'mamediarra2@gmail.com', '771121120', 'F', 2, 3),
('201901DFG', 'DIOUF', 'Issa', '2020-10-01', 'Kaolack', 'Guinguineo', 'issa@gmail.com', '771256721', 'M', 2, 2),
('201901ERT', 'DIOP', 'Daouda', '2020-10-07', 'Kaolack', 'Guinguineo', 'daouda@gmail.com', '771246789', 'M', 2, 1),
('201901FGH', 'DIOUF', 'Mamadou', '2020-10-02', 'Kaolack', 'Guinguineo', 'mamadou@gmail.com', '771256722', 'M', 1, 2),
('201901GHJ', 'DIOUF', 'Mariama', '2020-10-24', 'Kaolack', 'Guinguineo', 'mariama@gmail.com', '771256723', 'F', 2, 2),
('201901HJK', 'DIOUF', 'Raphael', '2020-10-27', 'Kaolack', 'Guinguineo', 'raphael@gmail.com', '771256724', 'M', 1, 2),
('201901JKL', 'DIOUF', 'Selbe', '2020-11-13', 'Kaolack', 'Guinguineo', 'selbe@gmail.com', '771256725', 'F', 2, 2),
('201901KLM', 'FALL', 'Adama', '2020-11-19', 'Kaolack', 'Guinguineo', 'adama@gmail.com', '771256726', 'M', 1, 2),
('201901LMW', 'FAYE', 'Aliou', '2020-08-19', 'Kaolack', 'Guinguineo', 'aliou@gmail.com', '771256727', 'M', 2, 2),
('201901MWX', 'FAYE', 'Cheikh', '2019-08-19', 'Kaolack', 'Guinguineo', 'cheikh@gmail.com', '771121112', 'M', 1, 2),
('201901NBV', 'GUEYE', 'Demba', '2019-05-05', 'Kaolack', 'Guinguineo', 'demba@gmail.com', '771121117', 'M', 1, 3),
('201901OPQ', 'DIOUF', 'Cheikh Tidiane', '2020-05-08', 'Kaolack', 'Guinguineo', 'cheikhtidiane@gmail.com', '771246717', 'M', 1, 1),
('201901PQS', 'DIOUF', 'Bernard', '2020-05-09', 'Kaolack', 'Guinguineo', 'bernard@gmail.com', '771246723', 'M', 1, 1),
('201901QSD', 'DIOUF', 'El Hadj', '2020-10-09', 'Kaolack', 'Guinguineo', 'elhadj@gmail.com', '771256723', 'M', 1, 2),
('201901RTY', 'DIOP', 'Gorgui', '2020-10-09', 'Kaolack', 'Guinguineo', 'gorgui@gmail.com', '771246780', 'M', 2, 1),
('201901SDF', 'DIOUF', 'Fatou', '2020-10-26', 'Kaolack', 'Guinguineo', 'fatou@gmail.com', '771256720', 'F', 1, 2),
('201901TYU', 'DIOP', 'Saly', '2020-10-20', 'Kaolack', 'Guinguineo', 'saly@gmail.com', '771246712', 'F', 2, 1),
('201901UIO', 'DIOUF', 'Amy', '2020-02-03', 'Kaolack', 'Guinguineo', 'amy@gmail.com', '771246714', 'F', 1, 1),
('201901VBN', 'GUEYE', 'Barkham', '2019-08-04', 'Kaolack', 'Guinguineo', 'barkham@gmail.com', '771121116', 'M', 2, 3),
('201901VCX', 'GUEYE', 'Fatou', '2019-07-09', 'Kaolack', 'Guinguineo', 'fatougueye2@gmail.com', '771121119', 'F', 1, 3),
('201901WML', 'NDAO', 'Fatou ', '2019-11-01', 'Kaolack', 'Guinguineo', 'fatoundao@gmail.com', '771121122', 'F', 2, 3),
('201901WXC', 'FAYE', 'Mame Diarra', '2019-08-01', 'Kaolack', 'Guinguineo', 'mamediarra@gmail.com', '771121113', 'F', 1, 3),
('201901XCV', 'FAYE', 'Marie', '2019-08-02', 'Kaolack', 'Guinguineo', 'marie@gmail.com', '771121114', 'F', 2, 3),
('201901XWM', 'NDAW', 'Fatou ', '2019-11-29', 'Kaolack', 'Guinguineo', 'fatoundaw@gmail.com', '771121121', 'F', 1, 3),
('201901YUI', 'DIOUF', 'Ada', '2020-10-21', 'Kaolack', 'Guinguineo', 'ada@gmail.com', '771246713', 'M', 1, 1),
('201901ZER', 'DIAGNE', 'Modou', '2020-10-02', 'Kaolack', 'Guinguineo', 'modou@gmail.com', '771236789', 'M', 2, 1),
('201902QWE', 'GAZAL', 'Mouhamed', '1995-09-10', 'Dakar', 'Mariste', 'gazal@gmail.com', '775506542', 'M', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

DROP TABLE IF EXISTS `formation`;
CREATE TABLE IF NOT EXISTS `formation` (
  `codeOption` int(11) NOT NULL AUTO_INCREMENT,
  `nomOption` varchar(150) NOT NULL,
  PRIMARY KEY (`codeOption`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `formation`
--

INSERT INTO `formation` (`codeOption`, `nomOption`) VALUES
(1, 'Math-Crypto'),
(2, 'Crypto-Info');

-- --------------------------------------------------------

--
-- Structure de la table `matiere`
--

DROP TABLE IF EXISTS `matiere`;
CREATE TABLE IF NOT EXISTS `matiere` (
  `ID_Matiere` int(11) NOT NULL AUTO_INCREMENT,
  `nom_Matiere` varchar(150) NOT NULL,
  `niv_matiere` int(11) NOT NULL,
  `ID_prof` varchar(150) NOT NULL,
  PRIMARY KEY (`ID_Matiere`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `matiere`
--

INSERT INTO `matiere` (`ID_Matiere`, `nom_Matiere`, `niv_matiere`, `ID_prof`) VALUES
(1, 'Algebre', 1, '201905/F'),
(2, 'Langage C', 1, '201905/F'),
(3, 'Analyse', 1, '202905/B');

-- --------------------------------------------------------

--
-- Structure de la table `messagerie`
--

DROP TABLE IF EXISTS `messagerie`;
CREATE TABLE IF NOT EXISTS `messagerie` (
  `ID_Message` int(11) NOT NULL AUTO_INCREMENT,
  `ID_Expediteur` varchar(150) CHARACTER SET utf8 NOT NULL,
  `ID_Destinataire` varchar(150) CHARACTER SET utf8 NOT NULL,
  `Message` text CHARACTER SET utf8 NOT NULL,
  `Statut` varchar(11) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`ID_Message`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `messagerie`
--

INSERT INTO `messagerie` (`ID_Message`, `ID_Expediteur`, `ID_Destinataire`, `Message`, `Statut`) VALUES
(7, 'Boucar', 'Habib', 'salut', '1'),
(8, 'Habib', 'Moctar', 'bonjour cher admin', '1'),
(9, 'Habib', 'Moctar', 'Regarde ta boite de reception!', '1'),
(10, 'Habib', 'Moctar', 'salut', '1');

-- --------------------------------------------------------

--
-- Structure de la table `niveau`
--

DROP TABLE IF EXISTS `niveau`;
CREATE TABLE IF NOT EXISTS `niveau` (
  `codeNiv` int(11) NOT NULL AUTO_INCREMENT,
  `nomNiv` varchar(150) NOT NULL,
  PRIMARY KEY (`codeNiv`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `niveau`
--

INSERT INTO `niveau` (`codeNiv`, `nomNiv`) VALUES
(1, 'Licence1'),
(2, 'Licence2'),
(3, 'Licence3');

-- --------------------------------------------------------

--
-- Structure de la table `professeur`
--

DROP TABLE IF EXISTS `professeur`;
CREATE TABLE IF NOT EXISTS `professeur` (
  `nomProf` varchar(150) NOT NULL COMMENT 'Nom du Professeur',
  `prenomProf` varchar(150) NOT NULL COMMENT 'Prénom Professeur',
  `adresseProf` varchar(150) NOT NULL COMMENT 'Adresse Professeur',
  `emailProf` varchar(150) NOT NULL COMMENT 'Email Professeur',
  `telProf` int(11) NOT NULL COMMENT 'Téléphone Professeur',
  `matProf` varchar(150) NOT NULL COMMENT 'Matricule Professeur',
  `pwdProf` varchar(150) NOT NULL COMMENT 'Mot de passe Professeur',
  PRIMARY KEY (`matProf`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `professeur`
--

INSERT INTO `professeur` (`nomProf`, `prenomProf`, `adresseProf`, `emailProf`, `telProf`, `matProf`, `pwdProf`) VALUES
('NDIAYE', 'Habib', 'Dakar', 'habib@gmail.com', 771234567, '201905/F', 'cfd397d5aef8ca88844b16cfa7055afa5f591edd'),
('DEME', 'Boucar', 'Louga', 'francais@gmail.com', 772708485, '202905/B', '96604cd6f904bbbc191079cff50d96cd1152dcf8');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
