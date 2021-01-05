-- phpMyAdmin SQL Dump
-- version 4.6.6deb4+deb9u2
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Mer 30 Décembre 2020 à 14:29
-- Version du serveur :  10.1.47-MariaDB-0+deb9u1
-- Version de PHP :  7.0.33-0+deb9u10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projetCar`
--

-- --------------------------------------------------------

--
-- Structure de la table `annonce`
--

CREATE TABLE `annonce` (
  `id_annonce` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `date_annonce` datetime NOT NULL,
  `path_image` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prix` int(20) NOT NULL,
  `boite` varchar(20) NOT NULL,
  `km` int(20) NOT NULL,
  `chevaux` int(20) NOT NULL,
  `annee` int(20) NOT NULL,
  `marque` varchar(20) NOT NULL,
  `modele` varchar(20) NOT NULL,
  `couleur` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `annonce`
--

INSERT INTO `annonce` (`id_annonce`, `id_user`, `date_annonce`, `path_image`, `nom`, `prix`, `boite`, `km`, `chevaux`, `annee`, `marque`, `modele`, `couleur`) VALUES
(1, 1, '2020-12-27 22:58:00', '../img/cars/car-1.jpg', 'Porsche cayenne turbo s', 88000, 'auto', 13000, 736, 2016, 'Porsche', 'cayenne turbo s', 'blanc'),
(2, 1, '2020-12-27 22:58:00', '../img/cars/car-2.jpg', 'Porsche cayenne turbo s', 85000, 'auto', 8585, 875, 2020, 'Porsche', 'cayenne turbo s', 'rouge');

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

CREATE TABLE `panier` (
  `id_panier` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_annonce` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `date_creation` date NOT NULL,
  `login` varchar(20) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  `grade` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id_user`, `mail`, `nom`, `prenom`, `date_creation`, `login`, `mdp`, `grade`) VALUES
(1, 'fwantelez@la-providence.net', 'Wantelez', 'Florian', '2020-12-29', 'florian60430', '1234', 'admin');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `annonce`
--
ALTER TABLE `annonce`
  ADD PRIMARY KEY (`id_annonce`),
  ADD KEY `id_annonce` (`id_annonce`);

--
-- Index pour la table `panier`
--
ALTER TABLE `panier`
  ADD UNIQUE KEY `id_user` (`id_user`),
  ADD UNIQUE KEY `id_annonce` (`id_annonce`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `annonce`
--
ALTER TABLE `annonce`
  MODIFY `id_annonce` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
