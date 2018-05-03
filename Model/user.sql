-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  jeu. 03 mai 2018 à 12:01
-- Version du serveur :  5.6.34-log
-- Version de PHP :  7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projetwebcfa`
--

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(2) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `motdepasse` varchar(300) NOT NULL,
  `numero` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `mail`, `motdepasse`, `numero`) VALUES
(13, 'Hugo', 'Demarcq', 'hugo@isep.fr', '$2y$10$z..rgeM37z/Gbqmryvn8q.h4TiE3NK1o25fhxSV6G9MjuAFWubP52', 987654321),
(14, 'Adrien', 'Collot', 'adrien@isep.fr', '$2y$10$FYJ8LT.XvtS7REHXa50lEeJeUGrE8n.OXZkHbKT3y0YEYWaTsItdC', 987654321),
(15, 'Elodie', 'Parisot', 'elodie@isep.fr', '$2y$10$pQpUgrRVR1OQlIodgWtu.OcYx7FuLh2mMmtFzQZ2Ta8GEVArHt6kS', 987654321),
(16, 'Felix', 'Ly', 'felix@isep.fr', '$2y$10$BH1liAwjjOPR1/AOoF.VAuJHLCRAa9SsUYgX5x8rwvjlyy5E5x7R.', 987654321),
(17, 'Michel', 'Galabru', 'Michga@mail.fr', '$2y$10$jG4XdTfzslNzjyfZF3eXauB7Cge5K7R7biqqdzLXSf8sgli9W8KGO', 987654321),
(19, 'papa', 'outai', 'paps@mail.com', '$2y$10$vfobb.aGAgbBC3/o.Q6Q1.IlsEivZbe96pGugJS6L36asKYlGGOjW', 987654321),
(20, 'Bisou', 'Nours', 'zoubi@mail.fr', '$2y$10$0ActVtbRqeVOJ9xoGgeseeEGqBFjofbfuLOtTK5QDvrOURWGXad4q', 987654321),
(21, 'Paul', 'Pogba', 'popol@mail.fr', '$2y$10$MGkGMnFLXCsxtRVpDo8N0uie.5/D5aeiagNTiOW4iuU3ozKBNLNhS', 987654321),
(22, 'Sylvain', 'Duriff', 'sylv@mail.fr', '$2y$10$7r/DjN.g3YiUR6BWqtZrg.s1zXkEqG6fT5HeYb10i.sGKgud2Or8.', 987654321),
(23, 'Peppa', 'Pig', 'peppa@mail.fr', '$2y$10$yh17vVgmlCxJkYk5mFbfyez/1RNC/XnmegQK4E0c5MeXFkHOE8xg.', 987654321);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
