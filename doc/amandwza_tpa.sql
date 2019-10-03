-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  Dim 29 sep. 2019 à 11:15
-- Version du serveur :  5.6.41-84.1-log
-- Version de PHP :  7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `amandwza_tpa`
--

-- --------------------------------------------------------

--
-- Structure de la table `app_users`
--

CREATE TABLE `app_users` (
  `id` int(11) NOT NULL,
  `username` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `calendrier_production`
--

CREATE TABLE `calendrier_production` (
  `id` int(11) NOT NULL,
  `speculation` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `surfaceCultive` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_debut` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_fin` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `destination` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `producteur_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `calendrier_production`
--

INSERT INTO `calendrier_production` (`id`, `speculation`, `surfaceCultive`, `date_debut`, `date_fin`, `destination`, `producteur_id`) VALUES
(1, 'spec1', 'sur1', '02/28/2018', '07/20/2018', 'dest1', 2),
(2, 'spec1', 'sur1', '04/11/2018', '07/20/2018', 'dest1', 2),
(3, '5412', '25', '2018-08-01', '2018-08-31', 'kjnhbgv', 32),
(4, '5412', '25', '2018-08-01', '2018-08-31', 'kjnhbgv', 33),
(5, '5412', '25', '2018-08-01', '2018-08-31', 'kjnhbgv', 34),
(6, '5412', '25', '2018-08-01', '2018-08-31', 'France', 36),
(7, 'FDd', '45', '2018-08-01', '2018-09-30', 'Belgique', 36),
(8, '5412', '25', '2018-08-16', '2018-08-31', 'kjnhbgv', 37),
(9, 'Riz', '100', '2018-09-01', '2018-12-31', 'USA', 38),
(10, 'Arachide', '240', '2018-09-01', '2018-12-31', 'Chine', 38),
(11, 'Arachide', '100', '2018-10-01', '2018-12-31', 'Europe', 39),
(12, 'Riz', '200', '2018-10-01', '2018-12-31', 'Asie', 39),
(13, 'Mais doux', '22', '2018-10-26', '2018-11-29', 'Europe', 40),
(14, 'Mangue', '2', '2018-10-25', '2019-01-31', 'Amerique', 40),
(15, 'Mais doux', '5', '2018-10-31', '2018-11-30', 'Europe', 43),
(16, 'Mangue', '10', '2019-06-27', '2019-09-25', 'Asie', 43),
(17, 'mangue', '12', '2018-11-18', '2019-04-26', 'Europe', 44),
(18, 'Maïs', '20', '2018-11-24', '2019-05-31', 'Afrique', 44);

-- --------------------------------------------------------

--
-- Structure de la table `campagne`
--

CREATE TABLE `campagne` (
  `identifiant` int(11) NOT NULL,
  `zone_production` int(11) DEFAULT NULL,
  `campagne` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `variete` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `n_ordre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `code_parcelle` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `poids_brut` double NOT NULL,
  `nom_chauffeur` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `heure_depart` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `heure_arrivee` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `immatriculation_camion` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `nom_responsable_parcelle` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nombre_cageots` int(11) NOT NULL,
  `poids_net` double NOT NULL,
  `date_reception` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `campagne`
--

INSERT INTO `campagne` (`identifiant`, `zone_production`, `campagne`, `variete`, `n_ordre`, `code_parcelle`, `poids_brut`, `nom_chauffeur`, `heure_depart`, `heure_arrivee`, `immatriculation_camion`, `nom_responsable_parcelle`, `nombre_cageots`, `poids_net`, `date_reception`) VALUES
(1, 1, 'Campagne 1', 'Arachide', '52', '5844', 58, 'Mamadou Tall', '15h10mn', '16h25mn', 'DK-ygff', 'Mansour Faye', 442, 4861, '2018-07-17'),
(2, 1, 'Campagne 2', 'Riz', '58', '96855', 589, 'Damby Ba', '12h', '15h', 'Zg-JU4G', 'Modou Diouf', 258, 65898, '2018-06-26'),
(3, 1, 'Campagne 3', 'Manioc', '25', '96855', 58, 'Mamadou Tall', '15h10mn', '16h25mn', 'Zg-JU4G', 'Mansour Faye', 25, 4861, '2018-08-10'),
(4, 2, 'Campagne 4', 'Blé', '125', 'P589', 58, 'Mamadou Tall', '15h10mn', '16h25mn', 'Zg-JU4G', 'Mansour Faye', 5, 152, '2018-08-22'),
(5, 12, 'Campagne 6', 'Arachide', '548', '96855', 589, 'Mamadou Tall', '15h10mn', '16h25mn', 'Zg-JU4G', 'Mansour Faye', 50, 580, '2018-08-31'),
(6, 2, 'Campagne 7', 'Manioc', '178', '24855', 78, 'Mamadou Tall', '12h', '16h25mn', 'Zg-JU4G', 'Modou Diouf', 58, 75, '2018-09-22'),
(7, 22, 'Campagne 8', 'Mangue', '00122', 'P122', 245, 'Abou', '11H34', '23H00', 'DK3342AC', 'Modou Mbaye', 22, 200, '2018-10-12'),
(8, 23, 'Campagne 9', 'Mangue', '0010', 'P10', 245, 'Sidy', '11H34', '23H00', 'DK2298AB', 'Moussa', 10, 200, '2018-10-31'),
(9, 1, 'Campagne 10', 'Mangue', '0013', 'P11', 245, 'iBOU', '11H34', '23H00', 'DK3342BC', 'BOUBA', 15, 200, '2018-11-05'),
(10, 28, 'Campagne 9', 'Mangue', '0012', 'P122', 245, 'Abou', '11H34', '23H00', 'DK3342BB', 'BOUBA', 12, 200, '2018-11-18');

-- --------------------------------------------------------

--
-- Structure de la table `certificat`
--

CREATE TABLE `certificat` (
  `id` int(11) NOT NULL,
  `producteur_id` int(11) DEFAULT NULL,
  `numero_cert` int(11) DEFAULT NULL,
  `date_cert` date DEFAULT NULL,
  `date_exp` date DEFAULT NULL,
  `certificat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `certificat`
--

INSERT INTO `certificat` (`id`, `producteur_id`, `numero_cert`, `date_cert`, `date_exp`, `certificat`) VALUES
(1, 34, 14, '2018-08-01', '2018-08-31', '64fe68cc3450a819556d822ff4405c33.jpeg'),
(2, 36, 14, '2018-08-15', '2018-08-31', '954339e0402319ef423bdd6d75a9d969.jpeg'),
(3, 36, 25, '2018-08-01', '2018-08-31', 'bbb7b7dd580ac28ff2a87e53aae92526.jpeg'),
(4, 36, 45, '2018-08-01', '2018-08-31', '94265fdbfe6ce1248644512019368e5d.jpeg'),
(5, 37, NULL, NULL, NULL, '9dd94099cf12eebbc536cfcc9fede162.jpeg'),
(6, 39, 7895, '2018-10-01', '2018-12-31', 'a7f73af8be744ed19f376d5507a8dcf8.jpeg'),
(7, 39, 9862, '2018-10-01', '2018-12-31', '318a08d854fcd00501bbd060cb22ab64.jpeg'),
(8, 40, NULL, NULL, NULL, '59fbaa719a97b6b53881e95647a3da46.png'),
(9, 41, NULL, NULL, NULL, '5bd78fe761c85a181b0d1dbd7f300eec.png'),
(10, 42, NULL, NULL, NULL, '53ddd04ad404fd2504f35337ca6d9091.png'),
(11, 43, NULL, NULL, NULL, '4fa5b20add5f70e79530cba7fdbaaa0e.png'),
(12, 44, 22222, '2018-11-18', '2019-11-17', '7d7a4127fa79c4e760423aaa1beae504.png');

-- --------------------------------------------------------

--
-- Structure de la table `demande`
--

CREATE TABLE `demande` (
  `id` int(11) NOT NULL,
  `typeDemande` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dateDepot` datetime DEFAULT NULL,
  `producteur_id` int(11) DEFAULT NULL,
  `statut` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `demande`
--

INSERT INTO `demande` (`id`, `typeDemande`, `dateDepot`, `producteur_id`, `statut`) VALUES
(1, NULL, NULL, 12, 2),
(2, NULL, NULL, 15, 2),
(3, 'Mise à jou', '2018-08-27 11:46:52', 16, 2),
(4, 'Mise à jour', '2018-08-28 19:20:14', 17, 0),
(5, 'Nouvelle', '2018-08-29 09:42:58', 32, 0),
(6, 'Nouvelle', '2018-08-29 09:43:56', 33, 0),
(7, 'Nouvelle', '2018-08-29 09:46:13', 34, 0),
(8, 'Nouvelle', '2018-08-29 09:53:03', 35, 0),
(9, 'Nouvelle', '2018-08-29 09:58:04', 36, 1),
(10, 'Nouvelle', '2018-08-29 11:41:48', 37, 1),
(11, 'Nouvelle', '2018-10-08 18:41:55', 38, 1),
(12, 'Nouvelle', '2018-10-10 09:19:09', 39, 1),
(13, 'Nouvelle', '2018-10-25 22:18:39', 40, 1),
(14, 'Nouvelle', '2018-10-25 22:22:06', 41, 1),
(15, 'Nouvelle', '2018-10-25 22:27:24', 42, 1),
(16, 'Nouvelle', '2018-10-31 09:44:55', 43, 1),
(17, 'Nouvelle', '2018-11-17 23:16:36', 44, 0),
(18, 'Nouvelle', '2018-11-30 01:14:20', 45, 0),
(19, 'Nouvelle', '2018-11-30 18:55:55', 46, 0),
(20, 'Nouvelle', '2019-01-09 11:00:54', 47, 0);

-- --------------------------------------------------------

--
-- Structure de la table `deposerdemande`
--

CREATE TABLE `deposerdemande` (
  `demande_id` int(11) NOT NULL,
  `producteur_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `detail_lot`
--

CREATE TABLE `detail_lot` (
  `identifiant` int(11) NOT NULL,
  `id_lot` int(11) DEFAULT NULL,
  `id_campagne` int(11) DEFAULT NULL,
  `calibre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nombre_carton` int(11) NOT NULL,
  `poids_net` double NOT NULL,
  `n_palette` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `detail_lot`
--

INSERT INTO `detail_lot` (`identifiant`, `id_lot`, `id_campagne`, `calibre`, `nombre_carton`, `poids_net`, `n_palette`) VALUES
(1, 1, 2, '15', 2, 25, 5),
(2, 1, 2, '58', 5, 25, 69),
(3, 1, 2, '225', 12, 1, 5),
(4, 2, 1, '21', 21, 21, 22),
(5, 2, 1, '22', 22, 22, 22),
(6, 3, 3, '1', 12, 50, 1),
(7, 3, 3, '2', 12, 100, 2),
(8, 3, 3, '3', 25, 150, 3),
(9, 3, 3, '4', 30, 180, 4),
(10, 4, 3, '1', 2, 100, 2588),
(11, 4, 3, '2', 1, 45, 255),
(12, 5, 4, '15', 2, 50, 1455),
(13, 5, 4, '14', 2, 50, 255),
(14, 5, 4, '125', 2, 52, 25),
(15, 6, 5, '15', 5, 45, 588),
(16, 7, 8, 'moyen', 3, 22, 12),
(17, 8, 7, 'moyen', 3, 22, 12),
(18, 8, 7, 'Petit', 4, 44, 13);

-- --------------------------------------------------------

--
-- Structure de la table `exportation`
--

CREATE TABLE `exportation` (
  `id` int(11) NOT NULL,
  `denomEntreprise` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `prenoNomInspecteur` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dateInspection` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lieuInspection` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `personneRencontre` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fonctionpersonneRencontre` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `variete` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `categorie` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `qteDeclare` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nbColis` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `typeTransport` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tailleEchantillon` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nbColiControle` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nbMangueControle` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `registreReceptionMangue` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `declarationSupp` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `marqueColis` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `conformiteColis` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `numeroLot` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `conformiteLot` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `numeroPalette` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `conformitePalette` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `maturite` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `piqureMoucheFruit` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pourriturePendonculaire` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `charanconNoyaux` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `traceArthrocnose` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `marquageNIMP15` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `etatSanitaireGeneral` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `commentaire` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `fiche_exportation`
--

CREATE TABLE `fiche_exportation` (
  `id` int(11) NOT NULL,
  `numero_exporation` int(11) NOT NULL,
  `date_exportation` datetime NOT NULL,
  `moyen_utilise` varchar(75) NOT NULL,
  `pays_exportation` varchar(100) NOT NULL,
  `nom_compagnie` varchar(200) NOT NULL,
  `nom_recepteur` varchar(100) DEFAULT NULL,
  `date_reception` datetime DEFAULT NULL,
  `statut` int(11) NOT NULL DEFAULT '0',
  `variete` varchar(50) NOT NULL,
  `id_campage` int(11) NOT NULL,
  `id_producteur` int(11) NOT NULL,
  `id_palettisation` int(11) NOT NULL,
  `commentaire` varchar(250) DEFAULT NULL,
  `photo` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `fiche_exportation`
--

INSERT INTO `fiche_exportation` (`id`, `numero_exporation`, `date_exportation`, `moyen_utilise`, `pays_exportation`, `nom_compagnie`, `nom_recepteur`, `date_reception`, `statut`, `variete`, `id_campage`, `id_producteur`, `id_palettisation`, `commentaire`, `photo`) VALUES
(1, 4589638, '2018-09-05 12:19:19', 'Bateau', 'Amerique', 'Kane Transport', 'Racine Ndiaye', '2018-09-04 00:00:00', 1, 'Arachide', 3, 2, 3, NULL, NULL),
(2, 1525, '2018-09-11 22:40:51', 'Avion', 'Amerique', 'Kane Transport', 'Abouba', '2018-10-26 00:00:00', 1, 'Manioc', 1, 2, 5, NULL, NULL),
(3, 2558, '2018-09-11 22:42:55', 'Avion', 'Afrique', 'Faye Transport', NULL, NULL, 0, 'Arachide', 1, 2, 6, NULL, NULL),
(4, 11221, '2018-10-31 00:03:39', 'Avion', 'Amerique', 'MINAM', 'Indjé', '2018-10-31 00:00:00', 1, 'MAIS', 1, 2, 4, NULL, NULL),
(5, 232342, '2018-10-31 10:26:11', 'Avion', 'Europe', 'MINAM', 'Marcel', '2018-12-26 00:00:00', 1, 'Mangue', 2, 2, 1, NULL, NULL),
(6, 1223, '2018-11-17 23:35:13', 'Avion', 'Afrique', 'MINAM', 'Abouba', '2018-11-18 00:00:00', 2, 'MAIS', 8, 40, 7, 'Pas conforme au cahier de charge', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `fiche_operateur`
--

CREATE TABLE `fiche_operateur` (
  `id` int(11) NOT NULL,
  `tableTravail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `chambreFroide` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `temperature` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `conformite` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `emballage` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sanitaire` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `securite` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pharmacie` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lavage` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `installation` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `marcheEnAvant` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `qualiteCond` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `docArchive` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MaterielAutoControle` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `responsableQualite` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `niveauResponsable` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `marquageEmballage` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `uniteTraitementNTMP` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `paletteEmbTraite` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `paletteEmbRecup` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `supportEnreg` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `supportAJour` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `note` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noteChambre` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noteSysteme` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noteConformiteTemp` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noteUniteTrait` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noteSanitaire` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `afficheSecurite` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `notePharmacie` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `notelavageMain` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noteConformiteInstallation` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noteMarcheAvant` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noteQualiteCond` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noteDocArchivage` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noteMaterielAutoControle` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noteResponsableQualite` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noteNiveauResponsable` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `typeCertificat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noteCertificat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tesco` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bio` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `globalGap` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `conditionnement_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `fiche_operateur`
--

INSERT INTO `fiche_operateur` (`id`, `tableTravail`, `chambreFroide`, `temperature`, `conformite`, `emballage`, `sanitaire`, `securite`, `pharmacie`, `lavage`, `installation`, `marcheEnAvant`, `qualiteCond`, `docArchive`, `MaterielAutoControle`, `responsableQualite`, `niveauResponsable`, `marquageEmballage`, `uniteTraitementNTMP`, `paletteEmbTraite`, `paletteEmbRecup`, `supportEnreg`, `supportAJour`, `note`, `noteChambre`, `noteSysteme`, `noteConformiteTemp`, `noteUniteTrait`, `noteSanitaire`, `afficheSecurite`, `notePharmacie`, `notelavageMain`, `noteConformiteInstallation`, `noteMarcheAvant`, `noteQualiteCond`, `noteDocArchivage`, `noteMaterielAutoControle`, `noteResponsableQualite`, `noteNiveauResponsable`, `typeCertificat`, `noteCertificat`, `tesco`, `bio`, `globalGap`, `conditionnement_id`) VALUES
(22, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3', 'type1', 'type2', 'type3', NULL),
(23, 'NON', 'NON', 'NON', 'NON', 'NON', 'NON', 'NON', 'NON', 'NON', 'NON', 'NON', 'NON', 'NON', 'NON', 'NON', 'NON', 'NON', 'NON', 'NON', 'NON', 'NON', 'NON', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `fos_user`
--

CREATE TABLE `fos_user` (
  `id` int(11) NOT NULL,
  `username` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `confirmation_token` varchar(180) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `fos_user`
--

INSERT INTO `fos_user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `confirmation_token`, `password_requested_at`, `roles`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', 'admin@gmail.com', 1, NULL, '$2y$13$WPzkEjsWPwzqZObpGcSdMOZt4Y3NEsY6NffK5aiBwHb5s0dG62EhK', '2019-09-26 21:18:36', NULL, NULL, 'a:2:{i:0;s:11:\"ROLE_GERANT\";i:1;s:10:\"ROLE_ADMIN\";}'),
(2, 'producteur', 'producteur', 'contact@gmail.com', 'contact@gmail.com', 1, NULL, '$2y$13$mbTBsCQOIAlaC/2AdZ7vdO8RfffDrSAavn9w7pNDpsRv19G/CVH5y', '2018-08-27 15:46:52', NULL, NULL, 'a:2:{i:0;s:11:\"ROLE_GERANT\";i:1;s:15:\"ROLE_PRODUCTEUR\";}'),
(4, 'exportateur', 'exportateur', 'exp@gmail.com', 'exp@gmail.com', 1, NULL, '$2y$13$/FqzKWC7ixYoattxrhviDuA2le9WgJgzkH33xycAXDHahB4uWhIb.', '2018-08-27 16:01:42', NULL, NULL, 'a:2:{i:0;s:11:\"ROLE_GERANT\";i:1;s:16:\"ROLE_EXPORTATEUR\";}'),
(5, 'assonko', 'assonko', 'assonko@mlouma.com', 'assonko@mlouma.com', 0, NULL, '$2y$13$V2x5kQmThgvcL.Qf0fPA5O4.KEOlUihEkVBJ4ufBJ83chd75GArlu', NULL, NULL, NULL, 'a:1:{i:0;s:15:\"ROLE_PRODUCTEUR\";}'),
(6, 'sidy', 'sidy', 'assonk@mlouma.com', 'assonk@mlouma.com', 0, NULL, '$2y$13$6pvPwLaDQcd4miZcXarn0ugG6LAFA00mUBC5ijfbyNMGnaOFSDpNG', NULL, NULL, NULL, 'a:1:{i:0;s:11:\"ROLE_CLIENT\";}'),
(7, 'dce', 'dce', 'dce@gmail.com', 'dce@gmail.com', 0, NULL, '$2y$13$3kOsVlrdbgHxelGt/xLuTO3g7jSrhsnBXyI1akWpX723yLT/DYje6', NULL, NULL, NULL, 'a:1:{i:0;s:10:\"ROLE_ADMIN\";}'),
(8, 'mansour@test.sn', 'mansour@test.sn', 'mansour@test.sn', 'mansour@test.sn', 1, NULL, '$2y$13$87EBlTjrdyyAjkvId8Ou6O3Z.F/n.n.9ksg2aE9cOEBlJUqgus6aq', NULL, NULL, NULL, 'a:1:{i:0;s:15:\"ROLE_PRODUCTEUR\";}'),
(9, 'sonkoaboubacry@gmail.com', 'sonkoaboubacry@gmail.com', 'sonkoaboubacry@gmail.com', 'sonkoaboubacry@gmail.com', 1, NULL, '$2y$13$7hNULsZqeWG2rHIvSQIpcuJbtCOzZ0NkFMCzpYX238SCpp88tDv3.', NULL, NULL, NULL, 'a:1:{i:0;s:15:\"ROLE_PRODUCTEUR\";}'),
(12, 'sfsfsfdfsf', 'sfsfsfdfsf', 'sfsfsfdfsf', 'sfsfsfdfsf', 1, NULL, '$2y$13$DGaPwETuy5iEPtMa1tOVwO.k9JRElDvPaP5pZecx0EBULlT8eV/5q', NULL, NULL, NULL, 'a:1:{i:0;s:15:\"ROLE_PRODUCTEUR\";}'),
(13, 'momar@tpa.sn', 'momar@tpa.sn', 'momar@tpa.sn', 'momar@tpa.sn', 1, NULL, '$2y$13$gngNKFXclEyNIMWU4J90DuvhuUCjKw2PJeKwH/Z/jPVlxGurBxv8e', NULL, NULL, NULL, 'a:1:{i:0;s:15:\"ROLE_PRODUCTEUR\";}'),
(15, 'mamadou@gmail.com', 'mamadou@gmail.com', 'mamadou@gmail.com', 'mamadou@gmail.com', 1, NULL, '$2y$13$TT4GaeUwpD4xubCCo7hyPuWyv6lCZZcPq0drtwEcSzNR87H3CdMjO', NULL, NULL, NULL, 'a:1:{i:0;s:15:\"ROLE_PRODUCTEUR\";}');

-- --------------------------------------------------------

--
-- Structure de la table `gestion_qualite`
--

CREATE TABLE `gestion_qualite` (
  `id` int(11) NOT NULL,
  `systemGesQual` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gestionInterne` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `consultant` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `autre` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noteAutre` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `gestion_qualite`
--

INSERT INTO `gestion_qualite` (`id`, `systemGesQual`, `gestionInterne`, `consultant`, `autre`, `noteAutre`) VALUES
(1, NULL, '', '', '', NULL),
(2, '10', '', '', '1', '10'),
(3, NULL, '', '', '', NULL),
(4, NULL, '', '', '', NULL),
(5, NULL, '', '', '', NULL),
(6, NULL, '1', '1', '', NULL),
(7, NULL, '1', '', '', NULL),
(8, NULL, '', '', '', NULL),
(9, NULL, '', '', '', NULL),
(10, NULL, '', '', '', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `inspection_mangue`
--

CREATE TABLE `inspection_mangue` (
  `id` int(11) NOT NULL,
  `date` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `referenceNotification` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `exportateur` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `numeroEnregistrement` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `motifNotification` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quantite` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `refCertifPhyto` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `refFichInspection` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `equipeInvestig` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `conditionnement_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `lot`
--

CREATE TABLE `lot` (
  `identifiant` int(11) NOT NULL,
  `id_campagne` int(11) DEFAULT NULL,
  `code_lot` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `n_lot_recolte` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nombre_cageots` int(11) NOT NULL,
  `poids_brut` double NOT NULL,
  `poids_net` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `lot`
--

INSERT INTO `lot` (`identifiant`, `id_campagne`, `code_lot`, `n_lot_recolte`, `nombre_cageots`, `poids_brut`, `poids_net`) VALUES
(1, 2, 'NJ45', '54', 14, 25, 25),
(2, 1, 'N8555', '2558', 2, 15, 12),
(3, 3, 'C3001', '475', 15, 500, 480),
(4, 3, 'C3002', '589', 25, 150, 145),
(5, 4, 'QS254', '125', 5, 58, 152),
(6, 5, '5852', '548', 50, 589, 580),
(7, 8, '00122', '0010', 10, 245, 200),
(8, 7, '111111', '00122', 22, 245, 200);

-- --------------------------------------------------------

--
-- Structure de la table `personne`
--

CREATE TABLE `personne` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `num_tel` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `num_fixe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `num_fax` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `statut` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `producteur`
--

CREATE TABLE `producteur` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `prenom` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `addresse` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `statutLegal` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ninea` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `siegeSocial` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `region` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ville` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `departement` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `commune` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `arrondissement` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `village` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `numTel` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `numFixe` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fex` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `prenomRep` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nomRep` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `addresseRep` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fonctionRep` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobileRep` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fixeRep` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `faxeRep` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `emailRep` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nomManager` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `prenomManager` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `titreManager` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telManager` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `emailManager` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `conditionnement` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `exportation` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vulgarisation` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bordChamp` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `europe` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `regie` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `enStation` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `autre` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gestionInterne` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `consultant` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `noteProduction` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noteExportation` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noteCond` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `notePrestation` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `producteur`
--

INSERT INTO `producteur` (`id`, `nom`, `prenom`, `addresse`, `statutLegal`, `ninea`, `siegeSocial`, `region`, `ville`, `departement`, `commune`, `arrondissement`, `village`, `numTel`, `numFixe`, `fex`, `email`, `prenomRep`, `nomRep`, `addresseRep`, `fonctionRep`, `mobileRep`, `fixeRep`, `faxeRep`, `emailRep`, `nomManager`, `prenomManager`, `titreManager`, `telManager`, `emailManager`, `conditionnement`, `exportation`, `vulgarisation`, `bordChamp`, `europe`, `regie`, `enStation`, `autre`, `gestionInterne`, `consultant`, `date`, `noteProduction`, `noteExportation`, `noteCond`, `notePrestation`) VALUES
(2, 'diop', 'mamadou', 'addresse', 'statut', 'ninea', 'siege', 'Dakar', 'ville', 'departement', 'commune', 'arrondissement', 'village', 'mobile', 'fixe', 'faxe', 'mail', 'mamadou', 'diop', 'addresse', 'fonction', 'mobile', 'fixe', 'faxe', 'mail', 'manager', 'manager', 'manager', 'tel', 'mail', '', '', '1', '', '', '', '1', '', NULL, NULL, '2018-05-18 10:31:31', 'note', NULL, 'note', NULL),
(10, 'nan', 'mor', 'dakar', 'statut', 'ninea', 'siege', 'Kédougou', 'ville', 'kedougou', 'commune', 'arrondissement', 'village', 'mobile', 'fixe', 'faxe', 'test', 'mor', 'nan', 'dakar', NULL, 'mobile', 'fixe', 'faxe', 'test', 'manager', 'manager', 'titre', 'tel', 'mail', '1', '1', '1', '1', '1', '1', '1', '1', NULL, NULL, '2018-08-27 11:27:17', 'note', 'note', 'note', 'note'),
(11, 'nan', 'mor', 'dakar', 'statut', 'ninea', 'siege', 'Kédougou', 'ville', 'kedougou', 'commune', 'arrondissement', 'village', 'mobile', 'fixe', 'faxe', 'test', 'mor', 'nan', 'dakar', NULL, 'mobile', 'fixe', 'faxe', 'test', 'manager', 'manager', 'titre', 'tel', 'mail', '1', '1', '1', '1', '1', '1', '1', '1', NULL, NULL, '2018-08-27 11:27:20', 'note', 'note', 'note', 'note'),
(12, 'nan', 'mor', 'dakar', 'statut', 'ninea', 'siege', 'Kédougou', 'ville', 'kedougou', 'commune', 'arrondissement', 'village', 'mobile', 'fixe', 'faxe', 'test', 'mor', 'nan', 'dakar', NULL, 'mobile', 'fixe', 'faxe', 'test', 'manager', 'manager', 'titre', 'tel', 'mail', '1', '1', '1', '1', '1', '1', '1', '1', NULL, NULL, '2018-08-27 11:37:51', 'note', 'note', 'note', 'note'),
(13, 'nan', 'mor', 'dakar', 'statut', 'ninea', 'siege', 'Kédougou', 'ville', 'kedougou', 'commune', 'arrondissement', 'village', 'mobile', 'fixe', 'faxe', 'test', 'mor', 'nan', 'dakar', NULL, 'mobile', 'fixe', 'faxe', 'test', 'manager', 'manager', 'titre', 'tel', 'mail', '1', '1', '1', '1', '1', '1', '1', '1', NULL, NULL, '2018-08-27 11:39:57', 'note', 'note', 'note', 'note'),
(14, 'nan', 'mor', 'dakar', 'statut', 'ninea', 'siege', 'Kédougou', 'ville', 'kedougou', 'commune', 'arrondissement', 'village', 'mobile', 'fixe', 'faxe', 'test', 'mor', 'nan', 'dakar', NULL, 'mobile', 'fixe', 'faxe', 'test', 'manager', 'manager', 'titre', 'tel', 'mail', '1', '1', '1', '1', '1', '1', '1', '1', NULL, NULL, '2018-08-27 11:40:25', 'note', 'note', 'note', 'note'),
(15, 'nan', 'mor', 'dakar', 'statut', 'ninea', 'siege', 'Kédougou', 'ville', 'kedougou', 'commune', 'arrondissement', 'village', 'mobile', 'fixe', 'faxe', 'test', 'mor', 'nan', 'dakar', NULL, 'mobile', 'fixe', 'faxe', 'test', 'manager', 'manager', 'titre', 'tel', 'mail', '1', '1', '1', '1', '1', '1', '1', '1', NULL, NULL, '2018-08-27 11:42:50', 'note', 'note', 'note', 'note'),
(16, 'nan', 'mor', 'dakar', 'statut', 'ninea', 'siege', 'Kédougou', 'ville', 'kedougou', 'commune', 'arrondissement', 'village', 'mobile', 'fixe', 'faxe', 'test', 'mor', 'nan', 'dakar', 'fonction', 'mobile', 'fixe', 'faxe', 'test', 'manager', 'manager', 'titre', 'tel', 'mail', '1', '1', '1', '1', '1', '1', '1', '1', NULL, NULL, '2018-08-27 11:46:52', 'note', 'note', 'note', 'note'),
(17, 'aaa', 'aaaa', 'aaaa', 'aaa', 'aaa', 'ggfff', 'Dakar', 'ssssss', 'sssssss', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', NULL, NULL, '2018-08-28 19:20:14', NULL, NULL, NULL, NULL),
(18, 'Fall', 'Abdul Aziz', 'Scat Urbam', 'VFr', '1258TG', 'Scat Urbam', 'Dakar', 'Dakar', 'Dakar', 'Grand Yoff', 'Grand Yoff', NULL, '771500440', '338254789', NULL, 'zizasenior@gmail.com', 'Abdul Aziz', 'Fall', 'Scat Urbam', NULL, '771500440', '338254789', NULL, 'zizasenior@gmail.com', 'Kane', 'Mody', 'Manager', '772215896', 'mody@hhf.com', '1', '1', '', '1', '1', '1', '', '', NULL, NULL, NULL, '8', '9', '6', '9'),
(19, 'Fall', 'Abdul Aziz', 'Scat Urbam', 'VFr', '1258TG', 'Scat Urbam', 'Dakar', 'Dakar', 'Dakar', 'Grand Yoff', 'Grand Yoff', NULL, '771500440', '338254789', NULL, 'zizasenior@gmail.com', 'Abdul Aziz', 'Fall', 'Scat Urbam', NULL, '771500440', '338254789', NULL, 'zizasenior@gmail.com', 'Kane', 'Mody', 'Manager', '772215896', 'mody@hhf.com', '1', '1', '', '1', '1', '1', '', '', NULL, NULL, NULL, '8', '9', '6', '9'),
(20, 'Fall', 'Abdul Aziz', 'Scat Urbam', 'VFr', '1258TG', 'Scat Urbam', 'Dakar', 'Dakar', 'Dakar', 'Grand Yoff', 'Grand Yoff', NULL, '771500440', '338254789', NULL, 'zizasenior@gmail.com', 'Abdul Aziz', 'Fall', 'Scat Urbam', NULL, '771500440', '338254789', NULL, 'zizasenior@gmail.com', 'Kane', 'Mody', 'Manager', '772215896', 'mody@hhf.com', '1', '1', '', '1', '1', '1', '', '', NULL, NULL, NULL, '8', '9', '6', '9'),
(21, 'F', 'a', NULL, NULL, NULL, NULL, 'Dakar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 'F', 'a', NULL, NULL, NULL, NULL, 'Dakar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 'F', 'a', NULL, NULL, NULL, NULL, 'Dakar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 'sd', ',knj', 'njnj', 'njnn', 'njnj', 'njnj', 'Dakar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ',knj', 'sd', 'njnj', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, 'sd', ',knj', 'njnj', 'njnn', 'njnj', 'njnj', 'Dakar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ',knj', 'sd', 'njnj', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, 'sd', ',knj', 'njnj', 'njnn', 'njnj', 'njnj', 'Dakar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ',knj', 'sd', 'njnj', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, 'b', 'b', 'b', 'b', 'b', 'b', 'Dakar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'b', 'b', 'b', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(28, 'b', 'b', 'b', 'b', 'b', 'b', 'Dakar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'b', 'b', 'b', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(29, 'b', 'b', 'b', 'b', 'b', 'b', 'Dakar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'b', 'b', 'b', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(30, 'c', 'c', 'c', 'c', 'c', 'c', 'Dakar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(31, 'c', 'c', 'c', 'c', 'c', 'c', 'Dakar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(32, 'h', 'h', 'h', 'h', 'h', 'h', 'Dakar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33, 'h', 'h', 'h', 'h', 'h', 'h', 'Dakar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(34, 'h', 'h', 'h', 'h', 'h', 'h', 'Dakar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(35, 'Faye', 'Mansour', 'Liberte 6', 'SA', '25mKH', 'Zac Mbao', 'Dakar', 'Dakar', 'Pkine', 'Mbao', NULL, NULL, '778259645', '338965478', NULL, 'mansour@test.sn', 'Mansour', 'Faye', 'Liberte 6', 'Chef', '778259645', '338965478', 'Senegal', 'mansour@test.sn', 'Faye', 'Khady', 'Manager', '339586245', 'khady@test.sn', '', '1', '1', '', '1', '', '1', '', NULL, NULL, NULL, '6', '6', '8', '9'),
(36, 'Faye', 'Mansour', 'Liberte 6', 'SA', '25mKH', 'Zac Mbao', 'Dakar', 'Dakar', 'Pkine', 'Mbao', NULL, NULL, '778259645', '338965478', NULL, 'mansour@test.sn', 'Mansour', 'Faye', 'Liberte 6', 'Chef', '778259645', '338965478', 'Senegal', 'mansour@test.sn', 'Faye', 'Khady', 'Manager', '339586245', 'khady@test.sn', '', '1', '1', '', '1', '', '1', '', NULL, NULL, NULL, '6', '6', '8', '9'),
(37, 'Faye', 'Mansour', 'Liberte 6', 'SA', '25mKH', 'Zac Mbao', 'Dakar', 'Dakar', 'Pkine', 'Mbao', NULL, NULL, NULL, NULL, NULL, 'test@test.sn', 'Mansour', 'Faye', 'Liberte 6', 'Chef', NULL, NULL, NULL, NULL, 'Faye', 'Khady', 'Manager', NULL, NULL, '', '', '', '1', '', '1', '', '1', NULL, NULL, NULL, '6', NULL, NULL, NULL),
(38, 'Gueye', 'Mamadou', 'Liberte 6', 'SA', '25mKH', 'Zac Mbao', 'Dakar', 'Dakar', 'Rufisque', 'Mbao', NULL, NULL, '778965478', '338596258', NULL, 'mamadou@gmail.com', 'Mamadou', 'Gueye', 'Liberte 6', 'Producteur', '778965478', '338596258', NULL, 'mamadou@gmail.com', 'Faye', 'Babacar', 'Manager', '778953642', 'babacarfaye@tpa.sn', '', '1', '1', '', '1', '', '', '', NULL, NULL, NULL, 'RAS', 'RAS', 'RAS', 'Ras'),
(39, 'Diop', 'Momar', 'Grand Thiés', 'SA', '25MOU8', 'Thiés', 'Thiès', 'Thiés', 'Thiés', 'Thiés', NULL, NULL, '778956321', '339986525', NULL, 'momar@tpa.sn', 'Momar', 'Diop', 'Grand Thiés', 'Chef', '778956321', '339986525', NULL, 'momar@tpa.sn', 'Sall', 'Habib', 'Manager', '778547520', 'habibsall@tpa.sn', '1', '', '1', '1', '1', '', '', '', NULL, NULL, NULL, 'RAS', 'RAS', 'RAS', 'RAS'),
(40, 'SONKO', 'Aboubacar', 'Dakar', NULL, '1122334444', 'Dakar', 'Saint-Louis', 'Dakar', 'fsf', 'sfsf', 'sffs', 'sfsfs', 'ssfsfsfs', 'dsds', NULL, 'sfsfsfdfsf', 'dsdsd', 'dsdsdd', 'dsdsds', 'dsdsds', 'ssfsfsfs', 'dsds', NULL, 'sfsfsfdfsf', 'dsdsds', 'sdsdd', 'dsdsds', 'sdsdsds', 'sdsdsdsdd', '', '', '1', '1', NULL, '1', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(41, 'SONKO', 'Aboubacar', 'Dakar', NULL, '1122334444', 'Dakar', 'Saint-Louis', 'Dakar', 'fsf', 'sfsf', 'sffs', 'sfsfs', 'ssfsfsfs', 'dsds', NULL, 'sfsfsfdfsf', 'dsdsd', 'dsdsdd', 'dsdsds', 'dsdsds', 'ssfsfsfs', 'dsds', NULL, 'sfsfsfdfsf', 'dsdsds', 'sdsdd', 'dsdsds', 'sdsdsds', 'sdsdsdsdd', '', '', '1', '1', NULL, '1', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(42, 'SONKO', 'Aboubacar', 'Dakar', NULL, '1122334444', 'Dakar', 'Saint-Louis', 'Dakar', 'fsf', 'sfsf', 'sffs', 'sfsfs', 'ssfsfsfs', 'dsds', NULL, 'sonkoaboubacry@gmail.com', 'dsdsd', 'dsdsdd', 'dsdsds', 'dsdsds', 'ssfsfsfs', 'dsds', NULL, 'sfsfsfdfsf', 'dsdsds', 'sdsdd', 'dsdsds', 'sdsdsds', 'asonkoaboubacry@gmail.com', '', '', '1', '1', NULL, '1', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(43, 'SONKO', 'Sidy', 'GT', 'SA', '11110000', 'dakar', 'Dakar', 'dakar', 'dakar', 'GTFC', 'Plateau', NULL, '775348919', '775348919', NULL, 'sonkoaboubacry@gmail.com', 'Sidy', 'SONKO', 'GT', 'Gérant', '775348919', '775348919', NULL, 'sonkoaboubacry@gmail.com', 'SONKO', 'Aboubacar Sidy', 'Gérant', NULL, 'sonkoaboubacry@gmail.com', '1', '1', '1', '', NULL, '', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(44, 'BADJI', 'Moussa', 'Pikine', 'aaaa', '12345666', 'Pikine', 'Dakar', 'Pikine', 'Pikine', 'Thiaroye', 'Thiaroy', NULL, '775458819', NULL, NULL, 'sonkoaboubacry@gmail.com', 'Moussa', 'BADJI', 'Pikine', 'Manager', '775458819', NULL, NULL, 'sonkoaboubacry@gmail.com', 'BADJI', 'Moussa', 'manager', '775348898', 'sonkoaboubacry@gmail.com', '1', '1', '1', '', NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(45, NULL, NULL, NULL, NULL, NULL, NULL, 'Fatick', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(46, NULL, NULL, NULL, NULL, NULL, NULL, 'Dakar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(47, NULL, NULL, NULL, NULL, NULL, NULL, 'Dakar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `registre_palettisation`
--

CREATE TABLE `registre_palettisation` (
  `id` int(11) NOT NULL,
  `code_lot` int(11) DEFAULT NULL,
  `id_campagne` int(11) DEFAULT NULL,
  `date` date NOT NULL,
  `n_palette` int(11) NOT NULL,
  `nbre_cartons` int(11) NOT NULL,
  `total_cartons` int(11) NOT NULL,
  `heure_entree_ch_froide` int(11) NOT NULL,
  `heure_sortie_ch_froide` int(11) NOT NULL,
  `destinataire` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `parcking_liste` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `paragraphe` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `produit_calibre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `statut` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `registre_palettisation`
--

INSERT INTO `registre_palettisation` (`id`, `code_lot`, `id_campagne`, `date`, `n_palette`, `nbre_cartons`, `total_cartons`, `heure_entree_ch_froide`, `heure_sortie_ch_froide`, `destinataire`, `parcking_liste`, `paragraphe`, `produit_calibre`, `statut`) VALUES
(1, 2, 2, '2018-07-05', 125, 25, 52, 12, 15, 'juu', 'jhgf', 'bbggt', 'vv', 1),
(2, 3, 3, '2018-08-17', 2, 15, 15, 12, 15, 'juu', 'jhgf', 'bbggt', 'vv', 1),
(3, 3, 3, '2018-08-01', 4, 20, 20, 14, 22, 'vr', 'fr', 'rr', 'rr', 1),
(4, 1, 1, '2018-09-07', 1001, 15, 15, 12, 15, 'juu', 'jhgf', 'bbggt', 'vv', 1),
(5, 1, 1, '2018-09-14', 1002, 20, 20, 14, 22, 'vr', 'fr', 'rr', 'rr', 1),
(6, 1, 1, '2018-09-20', 1003, 15, 15, 14, 23, 'juu', 'hyf', 'tfftf', 'cffc', 1),
(7, 7, 8, '2018-10-31', 112, 2, 2, 11, 22, 'IVES', 'éé', '555555', '4444', 1);

-- --------------------------------------------------------

--
-- Structure de la table `registre_reception`
--

CREATE TABLE `registre_reception` (
  `ordre_arrive` int(11) NOT NULL,
  `id_campagne` int(11) DEFAULT NULL,
  `parcelle_origine` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `date_recolte` date NOT NULL,
  `variete` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nombre_cageots` int(11) NOT NULL,
  `poids_brut` int(11) NOT NULL,
  `poids_net` int(11) NOT NULL,
  `code_attribue` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `registre_reception`
--

INSERT INTO `registre_reception` (`ordre_arrive`, `id_campagne`, `parcelle_origine`, `date_recolte`, `variete`, `nombre_cageots`, `poids_brut`, `poids_net`, `code_attribue`) VALUES
(1, 1, 'Azure', '2018-07-05', 'Arachide', 22, 525, 258, '558'),
(2, 1, 'Parcelle', '2018-07-11', 'Manioc', 25, 25, 25, '255'),
(3, 2, 'Niaguiss', '2018-07-16', 'Ble', 15, 150, 145, 'C589'),
(4, 4, 'Niaguiss', '2018-08-13', 'Ble', 25, 480, 450, 'B89'),
(5, 6, 'Niaguiss', '2018-09-08', 'Arachide', 22, 525, 500, '1200'),
(6, 6, 'Parcelle', '2018-09-01', 'Manioc', 25, 799, 780, '1201'),
(7, 5, 'PARCELLE', '2018-10-26', 'MIL', 2, 344, 300, '0112'),
(8, 8, 'P10', '2018-10-31', 'Mangue', 10, 245, 200, '0001'),
(9, 9, 'P10', '2018-11-05', 'Mangue', 15, 245, 200, '0006'),
(10, 7, 'PARCELLE', '2018-11-20', 'Mangue', 10, 245, 200, '0112');

-- --------------------------------------------------------

--
-- Structure de la table `site_conditionnement`
--

CREATE TABLE `site_conditionnement` (
  `id` int(11) NOT NULL,
  `producteur_id` int(11) DEFAULT NULL,
  `speculation` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `siteCond` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lacalisation` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `site_conditionnement`
--

INSERT INTO `site_conditionnement` (`id`, `producteur_id`, `speculation`, `siteCond`, `lacalisation`) VALUES
(1, 2, 'speculation 1', 'site1', 'localsation 1'),
(2, 2, 'speculation 1', 'site1', 'localsation 1'),
(3, 33, 'kjhgfd', 'hygtfrdftgyhu', 'Dakar'),
(4, 34, 'kjhgfd', 'hygtfrdftgyhu', 'Dakar'),
(5, 36, 'hhhh', 'HHHHH', 'HHHHH'),
(6, 36, 'HHHHH', 'kkkkkk', 'kkkkks'),
(7, 37, 'kjhgfd', 'hygtfrdftgyhu', 'Dakar'),
(8, 38, 'Riz', 'Barguy', 'Dakar'),
(9, 38, 'Arachide', 'Rufisque', 'Dakar'),
(10, 39, 'Arachide', 'Pout', 'Thiés'),
(11, 39, 'Riz', 'Pout', 'Thiés'),
(12, 40, 'Mais doux', '', 'DAKAR'),
(13, 40, 'Mangue', '', ''),
(14, 43, 'Mais doux', '', 'DAKAR'),
(15, 43, 'Mangue', '', 'dakar'),
(16, 44, 'Mangue', '', 'Mbour'),
(17, 44, 'Mais', '', 'Mbour');

-- --------------------------------------------------------

--
-- Structure de la table `site_production`
--

CREATE TABLE `site_production` (
  `id` int(11) NOT NULL,
  `perimetre` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `localisation` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `superficie` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `speculation` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `regie` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `producteur_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `site_production`
--

INSERT INTO `site_production` (`id`, `perimetre`, `localisation`, `superficie`, `speculation`, `regie`, `producteur_id`) VALUES
(1, '1000', 'Niayes', '1h', 'jjj', 'jjjj', 2),
(2, '1000', 'Niaguiss', '1h', 'ddddd', 'ddddddddddddd2', 2),
(3, 'perim1', 'localsation 1', 'SuperficieUn', 'speculation 1', 'regie1', 2),
(4, 'perim1', 'localsation 1', 'speup1', 'speculation 1', 'regie1', 2),
(5, '25', ',nbv', '255', 'ijuhgvfc', 'bgv', 24),
(6, '25', ',nbv', '255', 'ijuhgvfc', 'bgv', 25),
(7, '25', ',nbv', '255', 'ijuhgvfc', 'bgv', 26),
(8, '125', 'kk', '125', 'll', 'j', 27),
(9, '125', 'kk', '125', 'll', 'j', 28),
(10, '125', 'kk', '125', 'll', 'j', 29),
(11, '125', 'Dakar', '125', 'kjhgfd', 'vfds', 30),
(12, '125', 'Dakar', '125', 'kjhgfd', 'vfds', 31),
(13, '125', 'Dakar', '125', 'kjhgfd', 'vfds', 32),
(14, '125', 'Dakar', '125', 'kjhgfd', 'vfds', 33),
(15, '125', 'Dakar', '125', 'kjhgfd', 'vfds', 34),
(16, '125', 'HHHHH', '125', 'hhhh', 'vfds', 36),
(17, '254', 'kkkkks', '254', 'HHHHH', 'gfdsr', 36),
(18, '125', 'Dakar', '125', 'kjhgfd', 'vfds', 37),
(19, '125', 'Dakar', '125', 'Riz', 'Regies', 38),
(20, '254', 'Dakar', '254', 'Arachide', 'Vulgarisation', 38),
(21, '125', 'Thiés', '125', 'Arachide', 'Regies', 39),
(22, '254', 'Thiés', '254', 'Riz', 'Vulgarisation', 39),
(23, '1', 'DAKAR', '222', 'Mais doux', 'SDSD', 40),
(24, '2', '', '12', 'Mangue', 'DSDS', 40),
(25, '2', 'DAKAR', '5', 'Mais doux', '', 43),
(26, '3', 'dakar', '10', 'Mangue', '', 43),
(27, '1', 'Mbour', '222', 'Mangue', 'REGIES', 44),
(28, '2', 'Mbour', '333', 'Mais', '', 44);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `app_users`
--
ALTER TABLE `app_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_C2502824F85E0677` (`username`),
  ADD UNIQUE KEY `UNIQ_C2502824E7927C74` (`email`);

--
-- Index pour la table `calendrier_production`
--
ALTER TABLE `calendrier_production`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_C8483468AB9BB300` (`producteur_id`);

--
-- Index pour la table `campagne`
--
ALTER TABLE `campagne`
  ADD PRIMARY KEY (`identifiant`),
  ADD KEY `FK_F3E43E25AB9BB300` (`zone_production`);

--
-- Index pour la table `certificat`
--
ALTER TABLE `certificat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_27448F77AB9BB300` (`producteur_id`);

--
-- Index pour la table `demande`
--
ALTER TABLE `demande`
  ADD PRIMARY KEY (`id`),
  ADD KEY `producteur_id` (`producteur_id`);

--
-- Index pour la table `deposerdemande`
--
ALTER TABLE `deposerdemande`
  ADD PRIMARY KEY (`demande_id`,`producteur_id`),
  ADD KEY `IDX_21CAAE6880E95E18` (`demande_id`),
  ADD KEY `IDX_21CAAE68AB9BB300` (`producteur_id`);

--
-- Index pour la table `detail_lot`
--
ALTER TABLE `detail_lot`
  ADD PRIMARY KEY (`identifiant`),
  ADD KEY `FK5qbslk1ioudummg` (`id_campagne`),
  ADD KEY `FK5qbslk1ioudummgell60ha644478` (`id_lot`);

--
-- Index pour la table `exportation`
--
ALTER TABLE `exportation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `fiche_exportation`
--
ALTER TABLE `fiche_exportation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_F3E43E25A255zza` (`id_producteur`),
  ADD KEY `FK_F3E43E25A2bff47` (`id_campage`),
  ADD KEY `FK_F3E43E25A25dd58d4` (`id_palettisation`);

--
-- Index pour la table `fiche_operateur`
--
ALTER TABLE `fiche_operateur`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_33D94475A222637` (`conditionnement_id`);

--
-- Index pour la table `fos_user`
--
ALTER TABLE `fos_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_957A647992FC23A8` (`username_canonical`),
  ADD UNIQUE KEY `UNIQ_957A6479A0D96FBF` (`email_canonical`),
  ADD UNIQUE KEY `UNIQ_957A6479C05FB297` (`confirmation_token`);

--
-- Index pour la table `gestion_qualite`
--
ALTER TABLE `gestion_qualite`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `inspection_mangue`
--
ALTER TABLE `inspection_mangue`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_6AC7E186A222637` (`conditionnement_id`);

--
-- Index pour la table `lot`
--
ALTER TABLE `lot`
  ADD PRIMARY KEY (`identifiant`),
  ADD KEY `FK5qbslk1ioudummgell60ha65585587` (`id_campagne`);

--
-- Index pour la table `personne`
--
ALTER TABLE `personne`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `producteur`
--
ALTER TABLE `producteur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `registre_palettisation`
--
ALTER TABLE `registre_palettisation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK5qbslk1ioudummgell60ha6` (`id_campagne`),
  ADD KEY `FK5qbslk1ioudummgell60ha6hhgfd` (`code_lot`);

--
-- Index pour la table `registre_reception`
--
ALTER TABLE `registre_reception`
  ADD PRIMARY KEY (`ordre_arrive`),
  ADD KEY `FK5qbslk1ioudummgell60ha69j` (`id_campagne`);

--
-- Index pour la table `site_conditionnement`
--
ALTER TABLE `site_conditionnement`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_31D134D1AB9BB300` (`producteur_id`);

--
-- Index pour la table `site_production`
--
ALTER TABLE `site_production`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_F3E43E25AB9BB3002558` (`producteur_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `app_users`
--
ALTER TABLE `app_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `calendrier_production`
--
ALTER TABLE `calendrier_production`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `campagne`
--
ALTER TABLE `campagne`
  MODIFY `identifiant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `certificat`
--
ALTER TABLE `certificat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `demande`
--
ALTER TABLE `demande`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `detail_lot`
--
ALTER TABLE `detail_lot`
  MODIFY `identifiant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `exportation`
--
ALTER TABLE `exportation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `fiche_exportation`
--
ALTER TABLE `fiche_exportation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `fiche_operateur`
--
ALTER TABLE `fiche_operateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `fos_user`
--
ALTER TABLE `fos_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `gestion_qualite`
--
ALTER TABLE `gestion_qualite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `inspection_mangue`
--
ALTER TABLE `inspection_mangue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `lot`
--
ALTER TABLE `lot`
  MODIFY `identifiant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `personne`
--
ALTER TABLE `personne`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `producteur`
--
ALTER TABLE `producteur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT pour la table `registre_palettisation`
--
ALTER TABLE `registre_palettisation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `registre_reception`
--
ALTER TABLE `registre_reception`
  MODIFY `ordre_arrive` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `site_conditionnement`
--
ALTER TABLE `site_conditionnement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `site_production`
--
ALTER TABLE `site_production`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `calendrier_production`
--
ALTER TABLE `calendrier_production`
  ADD CONSTRAINT `FK_F3E43E25AB9BB30024558` FOREIGN KEY (`producteur_id`) REFERENCES `producteur` (`id`);

--
-- Contraintes pour la table `campagne`
--
ALTER TABLE `campagne`
  ADD CONSTRAINT `FK_F3E43E25AB9BB3002558AQQZ` FOREIGN KEY (`zone_production`) REFERENCES `site_production` (`id`);

--
-- Contraintes pour la table `certificat`
--
ALTER TABLE `certificat`
  ADD CONSTRAINT `FK_F3E43E25AB9BB3002588` FOREIGN KEY (`producteur_id`) REFERENCES `producteur` (`id`);

--
-- Contraintes pour la table `demande`
--
ALTER TABLE `demande`
  ADD CONSTRAINT `FK_F3E43E2583002558` FOREIGN KEY (`producteur_id`) REFERENCES `producteur` (`id`);

--
-- Contraintes pour la table `fiche_exportation`
--
ALTER TABLE `fiche_exportation`
  ADD CONSTRAINT `FK_F3E43E25A255zza` FOREIGN KEY (`id_producteur`) REFERENCES `producteur` (`id`),
  ADD CONSTRAINT `FK_F3E43E25A25dd58d4` FOREIGN KEY (`id_palettisation`) REFERENCES `registre_palettisation` (`id`),
  ADD CONSTRAINT `FK_F3E43E25A2bff47` FOREIGN KEY (`id_campage`) REFERENCES `campagne` (`identifiant`);

--
-- Contraintes pour la table `lot`
--
ALTER TABLE `lot`
  ADD CONSTRAINT `FK_F3E43E25AB9BBAZE258` FOREIGN KEY (`id_campagne`) REFERENCES `campagne` (`identifiant`);

--
-- Contraintes pour la table `registre_palettisation`
--
ALTER TABLE `registre_palettisation`
  ADD CONSTRAINT `FK_F3E43E25AB9BB30ZZAA8` FOREIGN KEY (`id_campagne`) REFERENCES `campagne` (`identifiant`),
  ADD CONSTRAINT `FK_F3E43E25AB9BB30ZZAAz` FOREIGN KEY (`code_lot`) REFERENCES `lot` (`identifiant`);

--
-- Contraintes pour la table `site_conditionnement`
--
ALTER TABLE `site_conditionnement`
  ADD CONSTRAINT `FK_F3E43E25AB9BB300224477` FOREIGN KEY (`producteur_id`) REFERENCES `producteur` (`id`);

--
-- Contraintes pour la table `site_production`
--
ALTER TABLE `site_production`
  ADD CONSTRAINT `FK_F3E43E25AB9BB3002558` FOREIGN KEY (`producteur_id`) REFERENCES `producteur` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
