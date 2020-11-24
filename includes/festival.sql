-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mar. 24 nov. 2020 à 21:07
-- Version du serveur :  5.7.24
-- Version de PHP : 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `festival`
--

-- --------------------------------------------------------

--
-- Structure de la table `candidat`
--

CREATE TABLE `candidat` (
  `id` int(11) NOT NULL,
  `nom_groupe` varchar(300) NOT NULL,
  `scene` varchar(300) NOT NULL,
  `representant` varchar(300) NOT NULL,
  `style` varchar(300) NOT NULL,
  `année_creation` date NOT NULL,
  `presentation` text NOT NULL,
  `experience` text NOT NULL,
  `adresse_fb` varchar(150) NOT NULL,
  `adresse_yt` varchar(150) NOT NULL,
  `adresse_soundcloud` varchar(150) NOT NULL,
  `membre` varchar(300) NOT NULL,
  `statut associatif` tinyint(1) NOT NULL,
  `producteur` tinyint(1) NOT NULL,
  `sacem` tinyint(1) NOT NULL,
  `fichier1_mp3` varchar(300) NOT NULL,
  `fichier2_mp3` varchar(300) NOT NULL,
  `fichier3_mp3` varchar(300) NOT NULL,
  `dossier_presse` varchar(300) NOT NULL,
  `photo1` varchar(300) NOT NULL,
  `photo2` varchar(300) NOT NULL,
  `fiche_technique` varchar(300) NOT NULL,
  `document_sacem` varchar(300) NOT NULL,
  `liste_son` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `departement`
--

CREATE TABLE `departement` (
  `id` int(11) NOT NULL,
  `departement` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `scene`
--

CREATE TABLE `scene` (
  `id` int(11) NOT NULL,
  `style` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `nom_utilisateur` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `candidat`
--
ALTER TABLE `candidat`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `departement`
--
ALTER TABLE `departement`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `scene`
--
ALTER TABLE `scene`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `candidat`
--
ALTER TABLE `candidat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
