-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 16 mai 2022 à 19:43
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet_java`
--

-- --------------------------------------------------------

--
-- Structure de la table `archive`
--

CREATE TABLE `archive` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` date NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `archive`
--

INSERT INTO `archive` (`id`, `username`, `email`, `gender`, `deleted_at`, `created_at`) VALUES
(4, 'oussama1', 'fatimafatouma784@gmail.com', 'male', '2022-04-14', '2022-04-14'),
(5, 'oussama455', 'oussama.jmaa@esprit.tn', NULL, '2022-04-14', '2022-04-14'),
(6, 'oussama2', 'oussama.jmaa@esprit.tn', 'male', '2022-04-14', '2022-04-14'),
(7, 'oussama44', 'fatimafatouma784@gmail.com', 'male', '2022-04-14', '2022-04-14'),
(8, 'oussama555', 'fatimafatouma784@gmail.com', 'male', '2022-04-14', '2022-04-14'),
(9, 'fathi', 'jemaaoussama64@gmail.com', NULL, '2022-04-16', '2022-04-16'),
(10, 'oussama jmaa', 'jemaaoussama64@gmail.com', NULL, '2022-04-16', '2022-04-16'),
(11, 'Shockswave99', 'jemaaoussama64@gmail.com', NULL, '2022-04-16', '2022-04-16'),
(12, 'oussama jmaa', 'jemaaoussama64@gmail.com', 'male', '2022-04-18', '2022-04-17'),
(13, 'oussama jmaa', 'jemaaoussama64@gmail.com', 'female', '2022-04-18', '2022-04-18'),
(14, 'oussama jmaa', 'jemaaoussama64@gmail.com', 'male', '2022-04-18', '2022-04-18'),
(15, 'oussama jmaa', 'jemaaoussama64@gmail.com', 'male', '2022-04-19', '2022-04-18'),
(16, 'oussama55', 'oussama.jmaa@esprit.tn', 'female', '2022-04-23', '2022-04-23'),
(17, 'oussama2', 'oussama.jmaa@esprit.tn', 'male', '2022-04-24', '2022-04-23'),
(18, 'oussama jmaa', 'jemaaoussama64@gmail.com', 'female', '2022-04-24', '2022-04-23'),
(19, 'roukaia22', 'roukaia70@gmail.com', 'female', '2022-04-24', '2022-04-23'),
(20, 'oussama2', 'oussama.jmaa@esprit.tn', 'male', '2022-04-24', '2022-04-23'),
(21, 'oussama2', 'oussama.jmaa@esprit.tn', 'male', '2022-04-24', '2022-04-23'),
(22, 'oussama1', 'oussama.jmaa@esprit.tn', 'male', '2022-04-25', '2022-04-24'),
(23, 'oussama55', 'jemaaoussama64@gmail.com', 'male', '2022-04-25', '2022-04-24'),
(24, 'roukaia1', 'roukaia70@gmail.com', 'female', '2022-04-25', '2022-04-25'),
(25, 'oussama22', 'jemaaoussama64@gmail.com', 'male', '2022-04-25', '2022-04-25'),
(26, 'oussama2', 'jemaaoussama64@gmail.com', 'male', '2022-04-25', '2022-04-25'),
(27, 'oussama77', 'fatimafatouma784@gmail.com', 'female', '2022-04-25', '2022-04-16'),
(28, 'roukaia22', 'roukaia70@gmail.com', 'male', '2022-04-25', '2022-04-25'),
(29, 'fatima', 'fatimafatouma784@gmail.com', 'male', '2022-04-27', '2022-04-25'),
(30, 'Oussama Jmâa', 'jemaaoussama64@gmail.com', 'male', '2022-04-27', '2022-04-27'),
(31, 'oussama77', 'jemaaoussama64@gmail.com', 'male', '2022-04-28', '2022-04-27'),
(32, 'oussama24', 'fatimafatouma784@gmail.com', 'male', '2022-04-29', '2022-04-28'),
(33, 'oussama120', 'jemaaoussama64@gmail.com', 'male', '2022-05-12', '2022-05-12'),
(34, 'oussama120', 'jemaaoussama64@gmail.com', 'male', '2022-05-12', '2022-05-12'),
(35, 'oussama120', 'jemaaoussama64@gmail.com', 'male', '2022-05-12', '2022-05-12'),
(36, 'oussama99', 'jemaaoussama64@gmail.com', 'female', '2022-05-15', '2022-05-15');

-- --------------------------------------------------------

--
-- Structure de la table `bracket`
--

CREATE TABLE `bracket` (
  `id` int(11) NOT NULL,
  `equipe1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `equipe2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_team1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_team2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discription` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `discription`) VALUES
(3, 'cat3', 'test3'),
(6, 'arcade', 'arcade games'),
(8, 'action', 'violent games'),
(9, 'fps', 'fps games'),
(10, 'fifa', 'soccer game');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id` int(11) NOT NULL,
  `nbproduit` int(11) NOT NULL,
  `date` date NOT NULL,
  `methodedepaiement` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `etat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prixtotale` double NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`id`, `nbproduit`, `date`, `methodedepaiement`, `etat`, `prixtotale`, `user_id`) VALUES
(2, 7, '2022-05-13', 'Espece', 'en cours', 55, NULL),
(3, 1, '2022-05-11', 'Cheque', 'En cours', 20, NULL),
(4, 1, '2022-05-11', 'Cheque', 'livré', 20, NULL),
(6, 3, '2022-07-11', 'Espece', 'terminé', 95, NULL),
(7, 2, '2022-05-11', 'Cheque', 'terminé', 110, NULL),
(8, 2, '2022-05-11', 'Cheque', 'terminé', 110, NULL),
(9, 4, '2022-05-11', 'Cheque', 'En cours', 115, NULL),
(10, 2, '2022-06-11', 'Cheque', 'En cours', 110, NULL),
(11, 3, '2023-03-01', 'Espece', 'En cours', 60, NULL),
(12, 66, '2023-01-22', 'Cheque', 'En cours', 1320, NULL),
(13, 8, '2024-01-01', 'Espece', 'Terminé', 160, NULL),
(37, 5, '2022-05-15', 'par chèque', 'en attente', 500, 206),
(38, 50, '2022-05-15', 'espèce', 'en cours', 5000, 206),
(41, 2, '2022-05-21', 'Cheque', 'En cours', 22, 215);

-- --------------------------------------------------------

--
-- Structure de la table `commande_produit`
--

CREATE TABLE `commande_produit` (
  `commande_id` int(11) NOT NULL,
  `produit_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `commande_produit`
--

INSERT INTO `commande_produit` (`commande_id`, `produit_id`) VALUES
(11, 6),
(12, 6),
(13, 7),
(37, 4),
(38, 4),
(41, 7);

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `publication_id` int(11) DEFAULT NULL,
  `auteur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contenu` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `comment`
--

INSERT INTO `comment` (`id`, `publication_id`, `auteur`, `contenu`, `created_at`, `user_id`) VALUES
(11, 6, 'fatima123', 'salut', '2022-05-14 02:34:24', 206),
(12, 3, 'fatima123', 'salut publication 3', '2022-05-14 02:39:29', 206),
(13, 5, 'fatima123', 'test 55', '2022-05-14 02:40:48', 206),
(15, 1, 'oussama55', 'hey2', '2022-05-14 02:54:29', 205),
(16, 1, 'oussama55', 'admin comment', '2022-05-14 03:18:35', NULL),
(17, 1, 'fatima123', 'salut', '2022-05-16 02:43:36', 206),
(18, 13, 'oussama55', 'salut', '2022-05-16 15:17:19', 216),
(19, 13, 'roukaia33', 'salutt admin', '2022-05-16 15:18:50', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE `commentaires` (
  `id_com` int(11) NOT NULL,
  `description_com` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20220404133945', '2022-04-04 15:39:48', 506),
('DoctrineMigrations\\Version20220406210130', '2022-04-06 23:01:53', 365),
('DoctrineMigrations\\Version20220406211232', '2022-04-06 23:12:35', 51),
('DoctrineMigrations\\Version20220406211643', '2022-04-06 23:16:46', 30),
('DoctrineMigrations\\Version20220406231255', '2022-04-07 01:13:00', 47),
('DoctrineMigrations\\Version20220406234803', '2022-04-07 01:48:08', 35),
('DoctrineMigrations\\Version20220407015056', '2022-04-07 03:51:09', 97),
('DoctrineMigrations\\Version20220414015920', '2022-04-14 03:59:28', 143),
('DoctrineMigrations\\Version20220414021457', '2022-04-14 04:15:42', 29),
('DoctrineMigrations\\Version20220414022612', '2022-04-14 04:26:15', 60),
('DoctrineMigrations\\Version20220414235818', '2022-04-15 01:58:24', 140),
('DoctrineMigrations\\Version20220415004047', '2022-04-15 02:40:52', 129),
('DoctrineMigrations\\Version20220415190247', '2022-04-15 21:03:12', 262),
('DoctrineMigrations\\Version20220415215457', '2022-04-15 23:56:45', 115),
('DoctrineMigrations\\Version20220416040425', '2022-04-16 06:04:37', 91),
('DoctrineMigrations\\Version20220418070213', '2022-04-18 09:02:18', 165),
('DoctrineMigrations\\Version20220419213328', '2022-04-19 23:33:42', 302),
('DoctrineMigrations\\Version20220421041929', '2022-04-21 06:19:36', 257),
('DoctrineMigrations\\Version20220421075622', '2022-04-21 09:56:24', 50),
('DoctrineMigrations\\Version20220421103030', '2022-04-21 12:30:36', 297),
('DoctrineMigrations\\Version20220424055328', '2022-04-24 07:53:34', 667),
('DoctrineMigrations\\Version20220425041344', '2022-04-25 06:13:49', 346),
('DoctrineMigrations\\Version20220425044240', '2022-04-25 06:42:45', 202),
('DoctrineMigrations\\Version20220426235711', '2022-04-27 01:57:18', 634),
('DoctrineMigrations\\Version20220428060448', '2022-04-28 08:05:24', 148),
('DoctrineMigrations\\Version20220428065333', '2022-04-28 08:53:39', 31),
('DoctrineMigrations\\Version20220428071157', '2022-04-28 09:12:00', 27),
('DoctrineMigrations\\Version20220428072206', '2022-04-28 09:22:11', 28),
('DoctrineMigrations\\Version20220428081951', '2022-04-28 10:19:55', 152),
('DoctrineMigrations\\Version20220429135321', '2022-04-29 15:53:27', 739),
('DoctrineMigrations\\Version20220504005820', '2022-05-04 02:58:23', 377),
('DoctrineMigrations\\Version20220504022246', '2022-05-04 04:22:51', 161),
('DoctrineMigrations\\Version20220504023921', '2022-05-04 04:39:24', 39),
('DoctrineMigrations\\Version20220506132644', '2022-05-06 15:26:52', 304),
('DoctrineMigrations\\Version20220506135816', '2022-05-06 15:58:20', 142),
('DoctrineMigrations\\Version20220506162634', '2022-05-06 18:26:38', 180),
('DoctrineMigrations\\Version20220506165452', '2022-05-06 18:54:54', 234),
('DoctrineMigrations\\Version20220510225817', '2022-05-11 00:58:23', 1167),
('DoctrineMigrations\\Version20220511003847', '2022-05-11 02:38:53', 603),
('DoctrineMigrations\\Version20220511004234', '2022-05-11 02:42:41', 147),
('DoctrineMigrations\\Version20220511230059', '2022-05-12 01:01:04', 1207),
('DoctrineMigrations\\Version20220512113629', '2022-05-12 13:36:38', 719),
('DoctrineMigrations\\Version20220512172223', '2022-05-12 19:22:30', 630),
('DoctrineMigrations\\Version20220512225124', '2022-05-13 00:51:29', 700),
('DoctrineMigrations\\Version20220512233046', '2022-05-13 01:30:50', 57),
('DoctrineMigrations\\Version20220512233248', '2022-05-13 01:32:52', 523),
('DoctrineMigrations\\Version20220512233509', '2022-05-13 01:35:13', 54),
('DoctrineMigrations\\Version20220512233707', '2022-05-13 01:37:10', 37),
('DoctrineMigrations\\Version20220512233823', '2022-05-13 01:38:27', 41),
('DoctrineMigrations\\Version20220512234028', '2022-05-13 01:40:32', 38),
('DoctrineMigrations\\Version20220513225934', '2022-05-14 00:59:39', 703),
('DoctrineMigrations\\Version20220514013138', '2022-05-14 03:31:43', 725),
('DoctrineMigrations\\Version20220514022047', '2022-05-14 04:20:52', 219),
('DoctrineMigrations\\Version20220514022143', '2022-05-14 04:21:47', 430),
('DoctrineMigrations\\Version20220514022329', '2022-05-14 04:23:32', 45),
('DoctrineMigrations\\Version20220514022424', '2022-05-14 04:24:28', 232),
('DoctrineMigrations\\Version20220514034858', '2022-05-14 05:49:02', 67),
('DoctrineMigrations\\Version20220515215219', '2022-05-15 23:52:26', 817);

-- --------------------------------------------------------

--
-- Structure de la table `equipe`
--

CREATE TABLE `equipe` (
  `id` int(11) NOT NULL,
  `nom_equipe` varchar(30) NOT NULL,
  `membres` int(11) DEFAULT NULL,
  `pts_exp` int(11) DEFAULT NULL,
  `tournois_gagne` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `equipe`
--

INSERT INTO `equipe` (`id`, `nom_equipe`, `membres`, `pts_exp`, `tournois_gagne`) VALUES
(48, 'valorant', 5, 10, 555),
(51, 'test', 5, NULL, NULL),
(52, 'hello', 2, NULL, NULL),
(53, 'roukeee', 2, 20, 0),
(54, 'hii', 4, 0, 0),
(55, 'league', 4, NULL, NULL),
(56, 'vvv', 4, 55, 3),
(57, 'roukaia', 2, NULL, NULL),
(58, 'roukaa', 2, NULL, NULL),
(59, 'eyas888', 5, NULL, NULL),
(62, 'valorant888', 2, NULL, NULL),
(63, 'hello8', 12, NULL, NULL),
(65, 'tattatat', 2, NULL, NULL),
(66, 'test', 5, NULL, NULL),
(67, 'testTEAM', 1, NULL, NULL),
(68, 'AAAAAAAAAA', 5, 0, 52),
(69, 'liquid', 4, NULL, NULL),
(70, 'fnatic', 4, NULL, NULL),
(71, 'liquid', 2, NULL, NULL),
(72, 'liquid', 2, NULL, NULL),
(73, 'helo22', 1, NULL, NULL),
(74, 'helloooo', 1, NULL, NULL),
(75, 'aaaaaaa', 1, NULL, NULL),
(77, 'oussama', 55, NULL, NULL),
(78, 'cloud9', 2, NULL, NULL),
(79, 'heyyyy', 55, NULL, NULL),
(80, 'samira', 2, NULL, NULL),
(81, 'eazrezrzer', 2, NULL, NULL),
(82, 'helloo', 4, NULL, NULL),
(83, 'teamtest', 4, NULL, NULL),
(84, 'wolves', 4, NULL, NULL),
(86, 'test70', 4, NULL, NULL),
(87, 'teamRoukaia', 2, NULL, NULL),
(88, 'teamRoukaia', 2, NULL, NULL),
(89, 'teamRoukaia', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `game`
--

CREATE TABLE `game` (
  `game_id` int(11) NOT NULL,
  `idcategory` int(11) DEFAULT NULL,
  `game_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `game_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `game_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `game_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nbr_vu` int(11) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `game`
--

INSERT INTO `game` (`game_id`, `idcategory`, `game_name`, `game_description`, `game_link`, `game_img`, `nbr_vu`, `rating`) VALUES
(20, 8, 'valorant', 'Valorant is a tactical shooting game involving two teams with 5 players in each team. Every player can sign in and play remotely from anywhere in the world. Every game has 25 rounds and the team that wins 13 of them first wins the game. Players can choose', 'valorant', '6281a28003ddc.jpeg', NULL, NULL),
(22, 8, 'god of war', 'action game', 'test', '627d060276ab8.png', NULL, NULL),
(23, 10, 'fifa', 'soccer game', 'test', '8eefda9bca3ccf237ff0f8b9590dad29.jpeg', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `recipient_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `is_read` tinyint(1) NOT NULL,
  `deleted_from` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

CREATE TABLE `panier` (
  `id` int(11) NOT NULL,
  `id_produit` int(11) DEFAULT NULL,
  `prix` int(11) NOT NULL,
  `image` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `participation`
--

CREATE TABLE `participation` (
  `id` int(11) NOT NULL,
  `id_tournois` int(11) DEFAULT NULL,
  `id_equipe` int(11) DEFAULT NULL,
  `tournois_nom` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `equipe_nom` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `participation`
--

INSERT INTO `participation` (`id`, `id_tournois`, `id_equipe`, `tournois_nom`, `equipe_nom`) VALUES
(3, 3, 59, 'Valorant Tournament', 'easy'),
(4, 3, 58, 'Valorant Tournament', 'roukaa'),
(5, 3, 52, 'Valorant Tournament', 'hello'),
(6, 3, 55, 'Valorant Tournament', 'league'),
(7, 4, 66, 'test11', 'test'),
(8, 4, 69, 'test11', 'liquid'),
(16, 4, 83, 'test11', 'teamtest'),
(17, 4, 78, 'test11', 'cloud9'),
(18, 11, 87, 'tournoi33', 'teamRoukaia');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix` double NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantite` int(11) NOT NULL,
  `avis` int(11) DEFAULT NULL,
  `nbavis` int(11) DEFAULT NULL,
  `promotion_id` int(11) DEFAULT NULL,
  `reduction` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `nom`, `prix`, `image`, `quantite`, `avis`, `nbavis`, `promotion_id`, `reduction`) VALUES
(4, 'produit1', 44, '1b3d31a60025ee06510e30e94dd45eae.png', 800, 0, 0, 8, 50),
(6, 'produit88', 3, '1b3d31a60025ee06510e30e94dd45eae.png', 889, 0, 0, 11, 70),
(7, 'produit3', 11, 'ba59d400bac75bc7e4a0d570042b0a3f.tmp', 798, 0, 0, 13, NULL),
(8, 'micro-casque', 55, 'ba59d400bac75bc7e4a0d570042b0a3f.tmp', 1000, 0, 0, 7, 50),
(11, 'mannette', 27, '38ff9fd97ca18a6a290db76061ee3b3b.jpeg', 22, 0, 0, 7, NULL),
(13, 'micro-casq', 11, '072d3c2b2398f469da30ada3cdf624be.jpeg', -1, 0, 0, 15, 20),
(14, 'roukaia', 224.5, '1b3d31a60025ee06510e30e94dd45eae.png', 500, NULL, NULL, 7, 50),
(15, 'korsi', 50, '1b3d31a60025ee06510e30e94dd45eae.png', 330, NULL, NULL, 7, NULL),
(17, 'Chaise', 50, '8a480c3452bba1a89b57b8b2c210325e.tmp', 25, NULL, NULL, 7, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `promotion`
--

CREATE TABLE `promotion` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'NULL',
  `prix_pro` int(11) DEFAULT NULL,
  `datef` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'NULL'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `promotion`
--

INSERT INTO `promotion` (`id`, `nom`, `date`, `prix_pro`, `datef`) VALUES
(7, 'testttt', '22/10/2022', 50, '22/10/2022'),
(8, 'helooo', '22/10/2022', 44, '22/10/2022'),
(11, 'roukaia', '2022-05-26', 70, '2022-06-04'),
(12, 'php', '2022-04-28', 80, '2022-06-02'),
(13, 'testmobile', '22/10/2022', 22, '22/30/2022'),
(14, 'test33', '22/10/2022', 40, '22/10/2022'),
(15, 'test44', '22/10/2022', 20, '22/10/2022'),
(16, 'test99', '2022-05-17', 30, '2022-05-26');

-- --------------------------------------------------------

--
-- Structure de la table `publication`
--

CREATE TABLE `publication` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contenu` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp() COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `publication`
--

INSERT INTO `publication` (`id`, `titre`, `contenu`, `image`, `created_at`) VALUES
(1, 'test', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,\r\nmolestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum\r\nnumquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium\r\noptio, eaque rerum! Provident similique accusantium nemo autem. Veritatis\r\nobcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam\r\nnihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,\r\ntenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,\r\nquia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos \r\nsapiente officiis modi at sunt excepturi expedita sint? Sed quibusdam\r\nrecusandae alias error harum maxime adipisci amet laborum. Perspiciatis \r\nminima nesciunt dolorem! Officiis iure rerum voluptates a cumque velit \r\nquibusdam sed amet tempora. Sit laborum ab, eius fugit doloribus tenetur \r\nfugiat, temporibus enim commodi iusto libero magni deleniti quod quam \r\nconsequuntur! Commodi minima excepturi repudiandae velit hic maxime\r\ndoloremque. Quaerat provident commodi consectetur veniam similique ad \r\nearum omnis ipsum saepe, voluptas, hic voluptates pariatur est explicabo \r\nfugiat, dolorum eligendi quam cupiditate excepturi mollitia maiores labore \r\nsuscipit quas? Nulla, placeat. Voluptatem quaerat non architecto ab laudantium\r\nmodi minima sunt esse temporibus sint culpa, recusandae aliquam numquam \r\ntotam ratione voluptas quod exercitationem fuga. Possimus quis earum veniam \r\nquasi aliquam eligendi, placeat qui corporis!\r\n', '627557d68b90c.png', '2022-05-06 16:42:02'),
(3, 'test', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,\r\nmolestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum\r\nnumquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium\r\noptio, eaque rerum! Provident similique accusantium nemo autem. Veritatis\r\nobcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam\r\nnihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,\r\ntenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,\r\nquia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos \r\nsapiente officiis modi at sunt excepturi expedita sint? Sed quibusdam\r\nrecusandae alias error harum maxime adipisci amet laborum. Perspiciatis \r\nminima nesciunt dolorem! Officiis iure rerum voluptates a cumque velit \r\nquibusdam sed amet tempora. Sit laborum ab, eius fugit doloribus tenetur \r\nfugiat, temporibus enim commodi iusto libero magni deleniti quod quam \r\nconsequuntur! Commodi minima excepturi repudiandae velit hic maxime\r\ndoloremque. Quaerat provident commodi consectetur veniam similique ad \r\nearum omnis ipsum saepe, voluptas, hic voluptates pariatur est explicabo \r\nfugiat, dolorum eligendi quam cupiditate excepturi mollitia maiores labore \r\nsuscipit quas? Nulla, placeat. Voluptatem quaerat non architecto ab laudantium\r\nmodi minima sunt esse temporibus sint culpa, recusandae aliquam numquam \r\ntotam ratione voluptas quod exercitationem fuga. Possimus quis earum veniam \r\nquasi aliquam eligendi, placeat qui corporis!\r\n', '627557d68b90c.png', '2022-05-06 18:18:35'),
(5, 'testt55', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,\r\nmolestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum\r\nnumquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium\r\noptio, eaque rerum! Provident similique accusantium nemo autem. Veritatis\r\nobcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam\r\nnihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,\r\ntenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,\r\nquia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos \r\nsapiente officiis modi at sunt excepturi expedita sint? Sed quibusdam\r\nrecusandae alias error harum maxime adipisci amet laborum. Perspiciatis \r\nminima nesciunt dolorem! Officiis iure rerum voluptates a cumque velit \r\nquibusdam sed amet tempora. Sit laborum ab, eius fugit doloribus tenetur \r\nfugiat, temporibus enim commodi iusto libero magni deleniti quod quam \r\nconsequuntur! Commodi minima excepturi repudiandae velit hic maxime\r\ndoloremque. Quaerat provident commodi consectetur veniam similique ad \r\nearum omnis ipsum saepe, voluptas, hic voluptates pariatur est explicabo \r\nfugiat, dolorum eligendi quam cupiditate excepturi mollitia maiores labore \r\nsuscipit quas? Nulla, placeat. Voluptatem quaerat non architecto ab laudantium\r\nmodi minima sunt esse temporibus sint culpa, recusandae aliquam numquam \r\ntotam ratione voluptas quod exercitationem fuga. Possimus quis earum veniam \r\nquasi aliquam eligendi, placeat qui corporis!\r\n', '627557d68b90c.png', '2022-05-12 13:43:40'),
(6, 'bonjour2', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,\r\nmolestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum\r\nnumquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium\r\noptio, eaque rerum! Provident similique accusantium nemo autem. Veritatis\r\nobcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam\r\nnihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,\r\ntenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,\r\nquia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos \r\nsapiente officiis modi at sunt excepturi expedita sint? Sed quibusdam\r\nrecusandae alias error harum maxime adipisci amet laborum. Perspiciatis \r\nminima nesciunt dolorem! Officiis iure rerum voluptates a cumque velit \r\nquibusdam sed amet tempora. Sit laborum ab, eius fugit doloribus tenetur \r\nfugiat, temporibus enim commodi iusto libero magni deleniti quod quam \r\nconsequuntur! Commodi minima excepturi repudiandae velit hic maxime\r\ndoloremque. Quaerat provident commodi consectetur veniam similique ad \r\nearum omnis ipsum saepe, voluptas, hic voluptates pariatur est explicabo \r\nfugiat, dolorum eligendi quam cupiditate excepturi mollitia maiores labore \r\nsuscipit quas? Nulla, placeat. Voluptatem quaerat non architecto ab laudantium\r\nmodi minima sunt esse temporibus sint culpa, recusandae aliquam numquam \r\ntotam ratione voluptas quod exercitationem fuga. Possimus quis earum veniam \r\nquasi aliquam eligendi, placeat qui corporis!\r\n', '627557d68b90c.png', '2022-05-12 14:15:35'),
(8, 'java', 'java', '627d060276ab8.png', '2022-05-15 22:22:01'),
(11, 'hello', 'heyyyy', '169c41994b87749f925aae23ee0c7d8b.jpeg', '2022-05-16 00:00:47'),
(12, 'oussama', 'test', '627b86dc7a61e.png', '2022-05-15 23:06:35'),
(13, 'roukaia', 'test', 'featured_game_thumb01.jpg', '2022-05-16 14:16:20');

-- --------------------------------------------------------

--
-- Structure de la table `publications`
--

CREATE TABLE `publications` (
  `id_pub` int(11) NOT NULL,
  `titre_pub` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_pub` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_commentaire` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `rating`
--

CREATE TABLE `rating` (
  `rating_id` int(11) NOT NULL,
  `rating_value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `reset_password_request`
--

CREATE TABLE `reset_password_request` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `selector` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hashed_token` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `requested_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `expires_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `tournois`
--

CREATE TABLE `tournois` (
  `id` int(11) NOT NULL,
  `nom_tournois` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `capacite` int(11) DEFAULT NULL,
  `recompense` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_tournois` date DEFAULT NULL,
  `pts_xp` int(11) DEFAULT NULL,
  `time_t` time DEFAULT NULL,
  `platforme` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `tournois`
--

INSERT INTO `tournois` (`id`, `nom_tournois`, `capacite`, `recompense`, `date_tournois`, `pts_xp`, `time_t`, `platforme`) VALUES
(3, 'Valorant Tournament', 4, '2', '2022-05-16', 555, '17:00:00', NULL),
(4, 'test11', 4, '1', '2022-08-06', 25, '13:18:00', NULL),
(5, 'test22', 5, '2', '2022-09-28', 44, '17:29:22', NULL),
(8, 'tournoi55', 4, '1', '2022-05-13', 25, '14:16:00', NULL),
(11, 'tournoi33', 5, '25', '2022-05-18', 22, '18:00:00', 'play');

-- --------------------------------------------------------

--
-- Structure de la table `tournois_equipe`
--

CREATE TABLE `tournois_equipe` (
  `tournois_id` int(11) NOT NULL,
  `equipe_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `trash`
--

CREATE TABLE `trash` (
  `id` int(11) NOT NULL,
  `sender_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `recipient_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_from` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `trash`
--

INSERT INTO `trash` (`id`, `sender_id`, `recipient_id`, `message`, `title`, `deleted_from`) VALUES
(12, 'oussama22', 'oussama55', 'hello', 'wiw', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `nationality` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `equipe` int(30) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `roles` longtext NOT NULL DEFAULT '["ROLE_USER"]' COMMENT '(DC2Type:json)',
  `is_verified` tinyint(1) DEFAULT NULL,
  `unread_m` int(11) DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `is_social` tinyint(1) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `java_password` varchar(255) DEFAULT NULL,
  `password2` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `username`, `email`, `password`, `gender`, `address`, `phone`, `nationality`, `image`, `equipe`, `created_at`, `roles`, `is_verified`, `unread_m`, `last_login`, `is_social`, `role`, `java_password`, `password2`) VALUES
(205, 'oussama', 'jmaa', 'oussama0022', 'roukaia70@gmail.com', '$2a$12$ap/kPVjBqfgmUwVzmOdtGeKagdiKMASiHGtZzy4BWJW9w9mzBi2Nu', 'female', 'nabeul', 22658131, 'Tunisia', 'a78a1571df23466a179f83513070b917.jpeg', NULL, '2022-05-13 14:09:04', '[\"ROLE_ADMIN\"]', 0, NULL, '2022-11-16 03:55:34', NULL, 'admin', 'Azerty1234@', NULL),
(206, 'oussama', 'jmaa', 'oussama44', 'fatimafatouma784@gmail.com', '$2y$13$uUqKrOez1KOJckPS0pagX.A9XZb84.5Io4qmR8xhi7ltbd5mNfq/O', 'female', 'nabeul', 22658131, 'Tunisia', '09e4390a0db37c095df23f10480622bc.jpeg', 78, '2022-05-13 21:40:50', '[\"ROLE_USER\"]', 1, NULL, '2022-05-16 04:12:26', NULL, 'client', 'Azerty555@', NULL),
(211, 'roukaia', 'khelifi', 'roukaia33', 'roukaia.khelifi@esprit.tn', '$2a$12$Q7uPcm73xpK1VVLKQ.hyN.u1Ajl05wp8yI3cohj.gzeBBEScncQq.', 'Female', 'nabeul', 22658131, 'Tunisia', '9dd5f50f8ba6ef71d7154198a363660c.png', NULL, '2022-05-15 23:22:52', '[\"ROLE_ADMIN\"]', 0, NULL, '2022-05-16 13:17:50', NULL, 'admin', 'Azerty000@', NULL),
(214, 'oussama', 'oussama', 'oussama99', 'hh', '$2y$13$w8M7Yi.o7ZWX/qNoNpw1iuuaGVKL55tjKzkbtE9cIEn0U/lqsrCE6', NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-16 12:18:10', '[\"ROLE_USER\"]', 0, NULL, NULL, NULL, 'client', 'Azerty1234@', NULL),
(215, 'oussama', NULL, 'oussama33', 'oussama.jmaa@esprit.tn', '$2a$12$3uHhC1o1EkoZtdbVnzh7WOGAf4Z3ZGAR3qMAF7oYRmyUyqyOLJq/6', 'male', NULL, NULL, NULL, '099f19a33fa878ae75b8a3acfcdd911b.jpeg', NULL, '2022-05-16 12:20:53', '[\"ROLE_USER\"]', 1, NULL, '2022-05-16 13:53:51', NULL, 'client', 'Azerty12345@', NULL),
(216, NULL, NULL, 'oussama55', 'jemaaoussama64@gmail.com', '$2y$13$5F65JFS8nrgKyRRBVWCRVeRcSD8NDwWxlwnl7R.xxGfhRzRUEZp/C', 'male', NULL, NULL, NULL, NULL, 87, '2022-05-16 14:47:00', '[\"ROLE_USER\"]', 1, NULL, '2022-05-16 14:58:50', NULL, 'client', 'Azerty123456789@', NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `archive`
--
ALTER TABLE `archive`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `bracket`
--
ALTER TABLE `bracket`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`),
  ADD UNIQUE KEY `category_name` (`category_name`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_6EEAA67DA76ED395` (`user_id`);

--
-- Index pour la table `commande_produit`
--
ALTER TABLE `commande_produit`
  ADD PRIMARY KEY (`commande_id`,`produit_id`),
  ADD KEY `IDX_DF1E9E8782EA2E54` (`commande_id`),
  ADD KEY `IDX_DF1E9E87F347EFB` (`produit_id`);

--
-- Index pour la table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_9474526C38B217A7` (`publication_id`),
  ADD KEY `IDX_9474526CA76ED395` (`user_id`);

--
-- Index pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`id_com`);

--
-- Index pour la table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `equipe`
--
ALTER TABLE `equipe`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`game_id`),
  ADD KEY `FK_category_id` (`idcategory`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_B6BD307FF624B39D` (`sender_id`),
  ADD KEY `IDX_B6BD307FE92F8F78` (`recipient_id`);

--
-- Index pour la table `panier`
--
ALTER TABLE `panier`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_produit` (`id_produit`);

--
-- Index pour la table `participation`
--
ALTER TABLE `participation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_e` (`id_equipe`),
  ADD KEY `fk_t` (`id_tournois`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_29A5EC27139DF194` (`promotion_id`);

--
-- Index pour la table `promotion`
--
ALTER TABLE `promotion`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `publication`
--
ALTER TABLE `publication`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `publications`
--
ALTER TABLE `publications`
  ADD PRIMARY KEY (`id_pub`);

--
-- Index pour la table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`rating_id`);

--
-- Index pour la table `reset_password_request`
--
ALTER TABLE `reset_password_request`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_7CE748AA76ED395` (`user_id`);

--
-- Index pour la table `tournois`
--
ALTER TABLE `tournois`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tournois_equipe`
--
ALTER TABLE `tournois_equipe`
  ADD PRIMARY KEY (`tournois_id`,`equipe_id`),
  ADD KEY `IDX_5E5796AC752534C` (`tournois_id`),
  ADD KEY `IDX_5E5796AC6D861B89` (`equipe_id`);

--
-- Index pour la table `trash`
--
ALTER TABLE `trash`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649F85E0677` (`username`),
  ADD UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`),
  ADD KEY `fk_equipe` (`equipe`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `archive`
--
ALTER TABLE `archive`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT pour la table `bracket`
--
ALTER TABLE `bracket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT pour la table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `id_com` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `equipe`
--
ALTER TABLE `equipe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT pour la table `game`
--
ALTER TABLE `game`
  MODIFY `game_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT pour la table `panier`
--
ALTER TABLE `panier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `participation`
--
ALTER TABLE `participation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `promotion`
--
ALTER TABLE `promotion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `publication`
--
ALTER TABLE `publication`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `publications`
--
ALTER TABLE `publications`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `rating`
--
ALTER TABLE `rating`
  MODIFY `rating_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `reset_password_request`
--
ALTER TABLE `reset_password_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `tournois`
--
ALTER TABLE `tournois`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `trash`
--
ALTER TABLE `trash`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=217;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `FK_6EEAA67DA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `commande_produit`
--
ALTER TABLE `commande_produit`
  ADD CONSTRAINT `FK_DF1E9E8782EA2E54` FOREIGN KEY (`commande_id`) REFERENCES `commande` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_DF1E9E87F347EFB` FOREIGN KEY (`produit_id`) REFERENCES `produit` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `FK_9474526C38B217A7` FOREIGN KEY (`publication_id`) REFERENCES `publication` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_9474526CA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `game`
--
ALTER TABLE `game`
  ADD CONSTRAINT `FK_232B318CAC9951CC` FOREIGN KEY (`idcategory`) REFERENCES `category` (`category_id`);

--
-- Contraintes pour la table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `FK_B6BD307FE92F8F78` FOREIGN KEY (`recipient_id`) REFERENCES `user` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_B6BD307FF624B39D` FOREIGN KEY (`sender_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `panier`
--
ALTER TABLE `panier`
  ADD CONSTRAINT `FK_24CC0DF2F7384557` FOREIGN KEY (`id_produit`) REFERENCES `produit` (`id`);

--
-- Contraintes pour la table `participation`
--
ALTER TABLE `participation`
  ADD CONSTRAINT `FK_AB55E24F27E0FF8` FOREIGN KEY (`id_equipe`) REFERENCES `equipe` (`id`),
  ADD CONSTRAINT `FK_AB55E24F5DA14302` FOREIGN KEY (`id_tournois`) REFERENCES `tournois` (`id`);

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `FK_29A5EC27139DF194` FOREIGN KEY (`promotion_id`) REFERENCES `promotion` (`id`);

--
-- Contraintes pour la table `reset_password_request`
--
ALTER TABLE `reset_password_request`
  ADD CONSTRAINT `FK_7CE748AA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `tournois_equipe`
--
ALTER TABLE `tournois_equipe`
  ADD CONSTRAINT `FK_5E5796AC6D861B89` FOREIGN KEY (`equipe_id`) REFERENCES `equipe` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_5E5796AC752534C` FOREIGN KEY (`tournois_id`) REFERENCES `tournois` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `FK_8D93D6492449BA15` FOREIGN KEY (`equipe`) REFERENCES `equipe` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
