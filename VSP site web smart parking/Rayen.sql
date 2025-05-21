-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 26 avr. 2023 à 00:35
-- Version du serveur : 10.4.20-MariaDB
-- Version de PHP : 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `id20478768_project`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `cin` int(8) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prénom` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`cin`, `nom`, `prénom`, `email`, `password`) VALUES
(0, 'abdelhafidh', 'moutie', 'moutie@gmail.com', 'moutie123'),
(0, 'mathlouthi', 'rayen', 'rayen@gmail.com', 'rayen123'),
(85214769, 'mathlouthi', 'rayen', 'rayen@gmail.com', 'rayen123'),
(0, 'mathlouthi', 'rayen123', 'rayen123@gmail.com', 'rayen123');

-- --------------------------------------------------------

--
-- Structure de la table `historique`
--

CREATE TABLE `historique` (
  `id` int(11) NOT NULL,
  `matricule` int(8) NOT NULL,
  `date_action` varchar(40) NOT NULL,
  `action` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `historique`
--

INSERT INTO `historique` (`id`, `matricule`, `date_action`, `action`) VALUES
(27, 13433, '2023-04-02 12:42:15', 'Hjg a affecté LOG IN'),
(38, 13433, '2023-04-02 12:46:57', 'Hjg a affecté LOG IN'),
(41, 17171717, '2023-04-02 12:51:26', 'rayen1542 a affecté une réserv'),
(42, 13433, '2023-04-02 12:58:30', 'Hjg a affecté LOG IN'),
(43, 13433, '2023-04-02 13:00:19', 'Hjg a affecté LOG IN'),
(75, 627526, '2023-04-02 13:49:47', ' a affecté une réservation'),
(76, 13032143, '2023-04-02 13:49:56', 'la barrière est ouvert par Hel'),
(77, 13032143, '2023-04-02 13:50:32', 'la barrière est ouvert par Hello'),
(78, 0, '2023-04-02 16:02:28', 'moutie  a affecté Login'),
(79, 0, '2023-04-02 17:09:41', 'moutie  a affecté Login'),
(80, 0, '2023-04-02 17:53:37', '  a démarré la caméra'),
(81, 3121432, '2023-04-17 00:25:09', 'Oussama a affecté LOG IN'),
(82, 3121432, '2023-04-17 00:25:14', 'Oussama a affecté LOG IN'),
(83, 3121432, '2023-04-17 00:28:41', 'Oussama a affecté LOG IN'),
(84, 3121432, '2023-04-17 00:29:25', 'Oussama a affecté LOG IN'),
(85, 98765432, '2023-04-17 00:30:12', ' a affecté une réservation'),
(86, 98765432, '2023-04-17 00:31:16', ' a affecté une réservation'),
(87, 0, '2023-04-22 01:18:51', 'moutie  a affecté Login'),
(88, 0, '2023-04-22 01:19:00', '  a démarré la caméra'),
(89, 0, '2023-04-22 01:19:21', 'moutie  a affecté Login'),
(90, 0, '2023-04-22 01:19:30', 'moutie  a affecté Login'),
(91, 3121432, '2023-04-22 01:20:50', 'Oussama a affecté Login'),
(92, 0, '2023-04-22 01:41:07', 'moutie  a affecté Login'),
(93, 17171717, '2023-04-22 01:50:18', 'rayen1542 a affecté Login'),
(94, 17171717, '2023-04-22 01:59:58', 'rayen1542 a affecté Login'),
(95, 17171717, '2023-04-22 02:06:27', 'rayen1542 a affecté Login'),
(96, 17171717, '2023-04-22 13:11:17', 'rayen1542 a affecté Login'),
(97, 0, '2023-04-22 13:22:40', 'rayen1542  a affecté une réservation'),
(98, 17171717, '2023-04-22 13:22:51', 'rayen1542 a affecté Login'),
(99, 0, '2023-04-22 13:22:58', 'rayen1542  a affecté une réservation'),
(100, 0, '2023-04-22 13:23:56', 'rayen1542  a affecté une réservation'),
(101, 0, '2023-04-22 13:36:41', 'rayen1542  a affecté une réservation'),
(102, 0, '2023-04-22 13:37:06', 'rayen1542  a affecté une réservation'),
(103, 0, '2023-04-22 13:38:54', 'rayen1542  a affecté une réservation'),
(104, 0, '2023-04-22 13:39:51', 'rayen1542  a affecté une réservation'),
(105, 0, '2023-04-22 13:47:02', 'rayen1542  a affecté une réservation'),
(106, 0, '2023-04-22 13:52:45', 'rayen1542  a affecté une réservation'),
(107, 17171717, '2023-04-22 13:53:33', 'rayen1542 a affecté Login'),
(108, 0, '2023-04-22 13:53:45', 'moutie  a affecté Login'),
(109, 0, '2023-04-22 13:55:14', 'moutie  a affecté Login'),
(110, 0, '2023-04-22 13:56:03', 'moutie  a affecté Login'),
(111, 0, '2023-04-22 14:36:28', 'moutie  a affecté Login'),
(112, 3121432, '2023-04-23 20:48:25', 'Oussama a affecté LOG IN'),
(113, 3121432, '2023-04-23 20:48:29', 'Oussama a affecté LOG IN'),
(114, 3121432, '2023-04-23 20:50:52', 'Oussama a affecté LOG IN'),
(115, 3121432, '2023-04-23 20:52:25', 'Oussama a affecté LOG IN'),
(116, 3121432, '2023-04-23 20:53:36', 'Oussama a affecté LOG IN'),
(117, 3121432, '2023-04-23 20:54:56', 'Oussama a affecté LOG IN'),
(118, 3121432, '2023-04-23 20:54:56', 'Oussama a affecté LOG IN'),
(119, 3121432, '2023-04-23 20:55:58', 'Oussama a affecté LOG IN'),
(120, 3121432, '2023-04-23 21:01:02', 'Oussama a affecté LOG IN'),
(121, 3121432, '2023-04-23 21:02:48', 'Oussama a affecté LOG IN'),
(122, 3121432, '2023-04-23 21:03:01', 'Oussama a affecté LOG IN'),
(123, 3121432, '2023-04-23 21:42:53', 'Oussama a affecté LOG IN'),
(124, 17171717, '2023-04-24 23:03:13', 'rayen1542 a affecté Login'),
(125, 0, '2023-04-24 23:03:28', 'rayen123  a affecté Login'),
(126, 17171717, '2023-04-24 23:06:27', 'rayen1542 a affecté Login'),
(127, 0, '2023-04-24 23:08:06', 'rayen1542  a affecté une réservation');

-- --------------------------------------------------------

--
-- Structure de la table `parking`
--

CREATE TABLE `parking` (
  `id` int(11) NOT NULL,
  `nb_places_libres` int(11) NOT NULL,
  `nb_totale_des_places` int(11) NOT NULL DEFAULT 4,
  `date_ouverture` varchar(11) NOT NULL DEFAULT '7:00',
  `date_fermeture` varchar(11) NOT NULL DEFAULT '22:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `parking`
--

INSERT INTO `parking` (`id`, `nb_places_libres`, `nb_totale_des_places`, `date_ouverture`, `date_fermeture`) VALUES
(1, 4, 4, '7:00', '22:00');

-- --------------------------------------------------------

--
-- Structure de la table `réservation`
--

CREATE TABLE `réservation` (
  `matricule` int(11) NOT NULL,
  `heure_arriv` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `heure_dep` varchar(20) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `réservation`
--

INSERT INTO `réservation` (`matricule`, `heure_arriv`, `heure_dep`) VALUES
(1111111, '01-01-2002', '12'),
(44444444, 'Lundi', 'Mardi'),
(888, '88888', '8888'),
(13032143, 'lundi:12h', 'mardi:13h'),
(0, '', ''),
(0, '', ''),
(413627, 'Lundi:11', 'Lundi:11.30'),
(13433, 'jeudi:14h', 'jeudi:15h'),
(1346532, 'Lundi 12:30', 'Lundi 17'),
(18745214, 'Lundi 12:30', 'Lundi 17'),
(3121432, 'Lundi 12:30', 'Lundi 17'),
(3121432, 'Lundi 12:30', 'Lundi 17'),
(3121432, 'Lundi 12:30', 'Lundi 17'),
(3121432, 'Lundi 12:30', 'Lundi 17'),
(17171717, 'Lundi 10:30', 'Lundi 12'),
(17171717, 'Lundi 10:30', 'Lundi 12'),
(17171717, 'Lundi 10:30', 'Lundi 12'),
(6251715, 'Dkdje', 'Hdkeh'),
(527462, 'Hsje', 'Vjdjej'),
(3362662, 'Hdkdhe', 'Ggdjshue'),
(63752, 'Gdidhje', 'Hjdjdhe'),
(736562, 'Jxjdhe', 'Bdjdjeg'),
(62652, 'Vwjdbd', 'Dbdjege'),
(582862, 'Vdjehz', 'Bdjeuz'),
(627526, 'Hzjzhgz', 'Jeueg'),
(98765432, '4/17/2023 1', '4/17/2023 1'),
(98765432, '4/17/2023 12:29', '4/17/2023 13:29'),
(17171717, ':h', ':h'),
(17171717, ':h', ':h'),
(17171717, ':h', ':h'),
(17171717, '2023-04-0315:52', '2023-04-0316:52'),
(17171717, '2023-04-2610:07', '2023-04-1210:09');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `matricule` varchar(30) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prénom` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`matricule`, `nom`, `prénom`, `email`, `password`) VALUES
('03121432', 'Hamdi', 'Oussama', 'oussama@gmail.com', 'oussama123'),
('03212321', 'Hamdi', 'oussama', 'oussama@gmail.com', 'oussama123'),
('1111111', '111111', '111111', '111111', '1111'),
('1112111', '111111', '111111', '111111', '1111'),
('1115111', '111111', '111111', '111111', '1111'),
('13032143', 'Hi', 'Hello', 'hi@gmail.com', 'hi123'),
('13433', 'Ythh', 'Hjg', 'montassartinsa2@gmail.com', 'jihgft'),
('13525151', 'Yassine', 'Rayen', 'yassine@gmail.com', 'yassinr123'),
('17171717', 'rayen', 'rayen1542', 'rayen@gmail.com', 'rayen123'),
('18745214', 'aziz', 'khemiri', 'aziz123@gmail.com', 'aziz123'),
('72651', 'Cjshhe', 'Ueuve', 'moutieabdelhafidh10@gmail.com', 'jzjuzh'),
('72652', 'Cjshhe', 'Ueuve', 'moutieabdelhafidh01@gmail.com', 'jzjuzh'),
('matricule', 'date', 'duree', 'matricule', 'date');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `historique`
--
ALTER TABLE `historique`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `parking`
--
ALTER TABLE `parking`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`matricule`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `historique`
--
ALTER TABLE `historique`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT pour la table `parking`
--
ALTER TABLE `parking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
