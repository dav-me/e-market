-- phpMyAdmin SQL Dump
-- version 5.0.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  mer. 06 mai 2020 à 17:58
-- Version du serveur :  10.3.22-MariaDB-0+deb10u1
-- Version de PHP :  7.3.14-1~deb10u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `lesmi935861_113zbvl`
--

-- --------------------------------------------------------

--
-- Structure de la table `_administrator_`
--

CREATE TABLE `_administrator_` (
  `_adm_id_` int(11) NOT NULL,
  `_adm_fst_name_` varchar(60) NOT NULL,
  `_adm_lst_name_` varchar(60) NOT NULL,
  `_adm_phone_` varchar(60) NOT NULL,
  `_adm_mail_` varchar(60) NOT NULL,
  `_adm_psswrd_` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `_administrator_`
--

INSERT INTO `_administrator_` (`_adm_id_`, `_adm_fst_name_`, `_adm_lst_name_`, `_adm_phone_`, `_adm_mail_`, `_adm_psswrd_`) VALUES
(3, 'bumba', 'olivier', 'bumbakam14@gmail.com', '0991337207', '77bc0f355cb85613e83c9d17ba01eebd'),
(4, 'merveil', 'mcinegena', 'mcinegena@lesmilleservices.com', '0970284772', 'a5a096ee495913f7d8a47325a8522c85'),
(5, 'david', 'maene', 'davidmaene@gmail.com', '0970284772', 'f947a2ef858de1041c00a8d72ba89ed4');

-- --------------------------------------------------------

--
-- Structure de la table `_bataTable_cars`
--

CREATE TABLE `_bataTable_cars` (
  `id` int(11) NOT NULL,
  `model` varchar(60) NOT NULL,
  `marque` varchar(60) NOT NULL,
  `description` text NOT NULL,
  `carInterchangeable` varchar(60) NOT NULL,
  `volant` varchar(60) NOT NULL,
  `portes` int(11) NOT NULL,
  `siege` int(11) NOT NULL,
  `carburant` varchar(60) NOT NULL,
  `coleur` varchar(60) NOT NULL,
  `imgPricipale` text NOT NULL,
  `img1` text NOT NULL,
  `img2` text NOT NULL,
  `img3` text NOT NULL,
  `img4` text NOT NULL,
  `img5` varchar(60) NOT NULL,
  `img6` text NOT NULL,
  `img7` text NOT NULL,
  `img8` text NOT NULL,
  `img9` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `_bataTable_cars`
--

INSERT INTO `_bataTable_cars` (`id`, `model`, `marque`, `description`, `carInterchangeable`, `volant`, `portes`, `siege`, `carburant`, `coleur`, `imgPricipale`, `img1`, `img2`, `img3`, `img4`, `img5`, `img6`, `img7`, `img8`, `img9`) VALUES
(1, 'raw', 'toyota', 'Voiture interchangeable avec un toyota tx si en bonne etat on augmente quelque dollars', 'Toyota Tx', 'droit', 5, 4, 'essence', 'blache', 'jsjsjsjsjsdkancojnasdcp;jodnascj', 'pxcnsdicnssososmsx', 'sssxsxsxsx', 'sxsxsxsxsxsx', 'xsxsxsxsxsx', 'xsdcdcdcdcdcd', 'oeoeoeoeoe', 'sssxslslslxsx', 'olsxosoxsxsx', 'osxsoxsxpsx');

-- --------------------------------------------------------

--
-- Structure de la table `_cst_lve_comment_`
--

CREATE TABLE `_cst_lve_comment_` (
  `_id_` int(11) NOT NULL,
  `_name_cst_` varchar(60) NOT NULL,
  `_mail_cst_` varchar(60) NOT NULL,
  `_comment_cst_` text NOT NULL,
  `_time_stamp_` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `_cst_lve_comment_`
--

INSERT INTO `_cst_lve_comment_` (`_id_`, `_name_cst_`, `_mail_cst_`, `_comment_cst_`, `_time_stamp_`) VALUES
(2, 'xs', 'xs@xs.cd', 'zaxscdfv', '2020-02-22 13:40:12'),
(3, 'zaxs', 'zaxs@xsdc.cd', 'xsxsxsxsx', '2020-02-22 13:44:32'),
(4, 'xs', 'za@sx.cd', 'zaxsdcxsza', '2020-02-22 13:51:10'),
(5, 'xs', 'za@sx.cd', 'zaxsdcxsza', '2020-02-22 13:51:27'),
(6, 'ds', 'sw@gma.cd', 'jsjsjsjss', '2020-02-22 14:05:45'),
(7, 'zaaz', 'azza@xs.cd', 'xsdcsxdc', '2020-02-22 14:10:59'),
(8, 'xs', 'xs@sx.cd', 'xscdsxdc', '2020-02-22 14:23:58'),
(9, 'xs', 'sza@swd.cd', 'ssssssss', '2020-02-22 14:24:45'),
(10, 'david', 'davidmened@gmail.com', 'je suis tres heruex que le systeme marche bien', '2020-02-22 14:32:38'),
(11, 'za', 'zaza@gmail.com', 'zaxscdxs', '2020-02-22 15:56:18');

-- --------------------------------------------------------

--
-- Structure de la table `_customer_`
--

CREATE TABLE `_customer_` (
  `_cst_id` int(11) NOT NULL,
  `_cst_fst_name_` varchar(60) NOT NULL,
  `_cst_lst_name_` varchar(60) NOT NULL,
  `_cst_mail_` varchar(60) NOT NULL,
  `_cst_phone_` varchar(60) NOT NULL,
  `_cst_password_` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `_customer_`
--

INSERT INTO `_customer_` (`_cst_id`, `_cst_fst_name_`, `_cst_lst_name_`, `_cst_mail_`, `_cst_phone_`, `_cst_password_`) VALUES
(1, 'david', 'maene', 'davidmaene@gmail.com', '+243970284772', '378b7ca644c641bac3173eb114ca15d8'),
(2, 'olivier', 'bumba', 'oliverbumba@gmail.com', '+24398028734', '353a3f847836d20d967d753afe88ccb7'),
(3, 'bumba', 'olivier', 'bumbakam14@gmail.com', '0991337207', '77bc0f355cb85613e83c9d17ba01eebd'),
(4, 'merveil', 'jazz', 'mervajazz@gmail.com', '+243974739246', '49d6859443e0244e8aec7947fa1be4fd'),
(5, 'bumba', 'olivier', 'bumbakam14@gmail.com', '0991337207', '77bc0f355cb85613e83c9d17ba01eebd'),
(6, 'bumba', 'olivier', 'bumbakam14@gmail.com', '0991337207', '77bc0f355cb85613e83c9d17ba01eebd'),
(7, 'david', 'maene', 'davidmened@gmail.com', '+243970284772', '378b7ca644c641bac3173eb114ca15d8'),
(8, 'sulemani', 'kas', 'sulemanyes85@gmail.com', '0970284772', '353a3f847836d20d967d753afe88ccb7'),
(9, 'david', 'Maene', 'davidmaene@gmail.com', '0970284772', '353a3f847836d20d967d753afe88ccb7'),
(10, 'david', 'Maene', 'davidmaene@gmail.com', '0970284772', '353a3f847836d20d967d753afe88ccb7'),
(11, 'david', 'Maene', 'davidmaene@gmail.com', '0970284772', '353a3f847836d20d967d753afe88ccb7'),
(12, 'david', 'Maene', 'davidmaene@gmail.com', '0970284772', '353a3f847836d20d967d753afe88ccb7');

-- --------------------------------------------------------

--
-- Structure de la table `_news_letter_`
--

CREATE TABLE `_news_letter_` (
  `_id_` int(11) NOT NULL,
  `_cst_mail_` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `_news_letter_`
--

INSERT INTO `_news_letter_` (`_id_`, `_cst_mail_`) VALUES
(2, 'davidmened@gmail.com'),
(3, 'kab@gmail.com'),
(24, 'jes@gmail.com'),
(31, 'jes@gmail.comss'),
(32, 'jackma@gmail.com'),
(34, 'fre@de.cd'),
(35, 'calsheb@der.cd'),
(36, 'bumbakam14@gmail.com'),
(37, 'yst n,jkxy ,diystnutn'),
(38, 'yjyurnutrn,utnz,ujtn'),
(39, 'davidmened@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `_prd_commande_`
--

CREATE TABLE `_prd_commande_` (
  `_cmmd_id_` int(11) NOT NULL,
  `_cmmd_ctgrie_` int(11) NOT NULL,
  `_cmmd_id_prd_` int(11) NOT NULL,
  `_cmmd_id_cstmer_` varchar(100) NOT NULL,
  `_cmmd_timestamp_` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `_prd_commande_`
--

INSERT INTO `_prd_commande_` (`_cmmd_id_`, `_cmmd_ctgrie_`, `_cmmd_id_prd_`, `_cmmd_id_cstmer_`, `_cmmd_timestamp_`) VALUES
(18, 95, 4, '172522ec1028ab781d9dfd17eaca4427', '2020-03-15 16:09:44'),
(19, 84, 1, '172522ec1028ab781d9dfd17eaca4427', '2020-03-15 16:50:06'),
(20, 84, 4, '172522ec1028ab781d9dfd17eaca4427', '2020-03-15 17:05:44'),
(21, 95, 2, '172522ec1028ab781d9dfd17eaca4427', '2020-03-15 17:08:04'),
(22, 84, 4, '0e7a6660f2ac725766f4e3107305ffc9', '2020-03-15 17:30:03'),
(23, 95, 2, 'e7f1e5c1fa5857650ebb4d7ae515dfbc', '2020-03-16 08:51:57'),
(24, 84, 1, '0e7a6660f2ac725766f4e3107305ffc9', '2020-03-16 12:12:35'),
(25, 95, 2, '0e7a6660f2ac725766f4e3107305ffc9', '2020-03-16 12:35:03'),
(26, 95, 2, 'd5e37771a2aa70301c0ae5b40e756604', '2020-03-16 12:45:51'),
(27, 95, 4, '0e7a6660f2ac725766f4e3107305ffc9', '2020-03-16 12:53:06'),
(28, 84, 4, 'd5e37771a2aa70301c0ae5b40e756604', '2020-03-16 12:54:24'),
(29, 84, 8, 'd3ca5dde60f88db606021eeba2499c02', '2020-05-06 07:52:42');

-- --------------------------------------------------------

--
-- Structure de la table `_prd_detail_`
--

CREATE TABLE `_prd_detail_` (
  `_iddetail_` int(11) NOT NULL,
  `_face_1` varchar(100) NOT NULL,
  `_face_2` varchar(100) NOT NULL,
  `_face_3` varchar(100) NOT NULL,
  `_face_4` varchar(100) NOT NULL,
  `_id_produit` int(11) NOT NULL,
  `_prd_categorie_` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `_prd_detail_`
--

INSERT INTO `_prd_detail_` (`_iddetail_`, `_face_1`, `_face_2`, `_face_3`, `_face_4`, `_id_produit`, `_prd_categorie_`) VALUES
(17, 'BG811081_4c3e63.jpg', 'BG811081_4d89f2.jpg', 'BG811081_c153d5.jpg', 'BG811081_17bc31.jpg', 13, 1),
(18, 'BG811081_4c3e63.jpg', 'BG811081_4d89f2.jpg', 'BG811081_c153d5.jpg', 'BG811081_17bc31.jpg', 14, 1),
(19, 'BG811081_4c3e63.jpg', 'BG811081_4d89f2.jpg', 'BG811081_c153d5.jpg', 'BG811081_17bc31.jpg', 4, 0),
(20, 'BH176770_718ba3.jpg', 'BH176770_736012.jpg', 'BH176770_2bb8a1.jpg', 'BH176770_0f6887.jpg', 5, 0);

-- --------------------------------------------------------

--
-- Structure de la table `_product_lease_`
--

CREATE TABLE `_product_lease_` (
  `_prd_id_` int(11) NOT NULL,
  `_prd_name_` varchar(60) NOT NULL,
  `_prd_state_` int(11) NOT NULL,
  `_prd_marque_` varchar(60) NOT NULL,
  `_prd_src_` varchar(100) NOT NULL,
  `_prd_description_` text NOT NULL,
  `_prd_price_` varchar(60) NOT NULL,
  `_prd_color_` varchar(60) NOT NULL,
  `_prd_added_date_` timestamp NOT NULL DEFAULT current_timestamp(),
  `_prd_ctgrie_` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='table pour les produits de location';

--
-- Déchargement des données de la table `_product_lease_`
--

INSERT INTO `_product_lease_` (`_prd_id_`, `_prd_name_`, `_prd_state_`, `_prd_marque_`, `_prd_src_`, `_prd_description_`, `_prd_price_`, `_prd_color_`, `_prd_added_date_`, `_prd_ctgrie_`) VALUES
(13, 'Noah', 0, 'toyota', 'BG811081_4c3e63.jpg', 'Un mini bus pour le deplacement de la famille', '4300', 'mauve', '2020-05-06 12:21:12', 84),
(14, 'Noah', 0, 'toyota', 'BG811081_4c3e63.jpg', 'Un mini bus pour le deplacement de la famille', '35', 'mauve', '2020-05-06 12:27:22', 84);

-- --------------------------------------------------------

--
-- Structure de la table `_product_sales_`
--

CREATE TABLE `_product_sales_` (
  `_prd_id_` int(11) NOT NULL,
  `_prd_name_` varchar(60) NOT NULL,
  `_prd_state_` int(11) NOT NULL,
  `_prd_marque_` varchar(60) NOT NULL,
  `_prd_src_` varchar(100) NOT NULL,
  `_prd_description_` text NOT NULL,
  `_prd_price_` varchar(60) NOT NULL,
  `_prd_color_` varchar(60) NOT NULL,
  `_prd_added_date_` timestamp NOT NULL DEFAULT current_timestamp(),
  `_prd_ctgrie_` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='table pour les produits de location';

--
-- Déchargement des données de la table `_product_sales_`
--

INSERT INTO `_product_sales_` (`_prd_id_`, `_prd_name_`, `_prd_state_`, `_prd_marque_`, `_prd_src_`, `_prd_description_`, `_prd_price_`, `_prd_color_`, `_prd_added_date_`, `_prd_ctgrie_`) VALUES
(4, 'Noah', 0, 'toyota', 'BG811081_4c3e63.jpg', 'Un mini bus pour le deplacement de la famille', '4500', 'mauve', '2020-05-06 12:31:30', 95),
(5, 'vitz', 0, 'toyota', 'BH176770_718ba3.jpg', 'tres bon etat', '4500', 'grise', '2020-05-06 12:47:50', 95);

-- --------------------------------------------------------

--
-- Structure de la table `_pr_showup_`
--

CREATE TABLE `_pr_showup_` (
  `_pr_id_` int(11) NOT NULL,
  `_pr_catg_` varchar(60) NOT NULL,
  `_pr_name_` varchar(60) NOT NULL,
  `_pr_libelle_` text NOT NULL,
  `_pr_img_src_` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `_administrator_`
--
ALTER TABLE `_administrator_`
  ADD PRIMARY KEY (`_adm_id_`);

--
-- Index pour la table `_bataTable_cars`
--
ALTER TABLE `_bataTable_cars`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `_cst_lve_comment_`
--
ALTER TABLE `_cst_lve_comment_`
  ADD PRIMARY KEY (`_id_`);

--
-- Index pour la table `_customer_`
--
ALTER TABLE `_customer_`
  ADD PRIMARY KEY (`_cst_id`);

--
-- Index pour la table `_news_letter_`
--
ALTER TABLE `_news_letter_`
  ADD PRIMARY KEY (`_id_`);

--
-- Index pour la table `_prd_commande_`
--
ALTER TABLE `_prd_commande_`
  ADD PRIMARY KEY (`_cmmd_id_`);

--
-- Index pour la table `_prd_detail_`
--
ALTER TABLE `_prd_detail_`
  ADD PRIMARY KEY (`_iddetail_`);

--
-- Index pour la table `_product_lease_`
--
ALTER TABLE `_product_lease_`
  ADD PRIMARY KEY (`_prd_id_`);

--
-- Index pour la table `_product_sales_`
--
ALTER TABLE `_product_sales_`
  ADD PRIMARY KEY (`_prd_id_`);

--
-- Index pour la table `_pr_showup_`
--
ALTER TABLE `_pr_showup_`
  ADD PRIMARY KEY (`_pr_id_`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `_administrator_`
--
ALTER TABLE `_administrator_`
  MODIFY `_adm_id_` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `_bataTable_cars`
--
ALTER TABLE `_bataTable_cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `_cst_lve_comment_`
--
ALTER TABLE `_cst_lve_comment_`
  MODIFY `_id_` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `_customer_`
--
ALTER TABLE `_customer_`
  MODIFY `_cst_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `_news_letter_`
--
ALTER TABLE `_news_letter_`
  MODIFY `_id_` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT pour la table `_prd_commande_`
--
ALTER TABLE `_prd_commande_`
  MODIFY `_cmmd_id_` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT pour la table `_prd_detail_`
--
ALTER TABLE `_prd_detail_`
  MODIFY `_iddetail_` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `_product_lease_`
--
ALTER TABLE `_product_lease_`
  MODIFY `_prd_id_` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `_product_sales_`
--
ALTER TABLE `_product_sales_`
  MODIFY `_prd_id_` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `_pr_showup_`
--
ALTER TABLE `_pr_showup_`
  MODIFY `_pr_id_` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

