-- phpMyAdmin SQL Dump
-- version 5.0.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 08, 2020 at 06:00 PM
-- Server version: 10.3.22-MariaDB-0+deb10u1
-- PHP Version: 7.3.14-1~deb10u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lesmi935861_113zbvl`
--

-- --------------------------------------------------------

--
-- Table structure for table `_administrator_`
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
-- Dumping data for table `_administrator_`
--

INSERT INTO `_administrator_` (`_adm_id_`, `_adm_fst_name_`, `_adm_lst_name_`, `_adm_phone_`, `_adm_mail_`, `_adm_psswrd_`) VALUES
(3, 'bumba', 'olivier', 'bumbakam14@gmail.com', '0991337207', '77bc0f355cb85613e83c9d17ba01eebd'),
(4, 'merveil', 'mcinegena', 'mcinegena@lesmilleservices.com', '0970284772', 'a5a096ee495913f7d8a47325a8522c85'),
(5, 'david', 'maene', 'davidmaene@gmail.com', '0970284772', 'f947a2ef858de1041c00a8d72ba89ed4');

-- --------------------------------------------------------

--
-- Table structure for table `_bataTable_cars`
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
  `img9` text NOT NULL,
  `transmition` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `_bataTable_cars`
--

INSERT INTO `_bataTable_cars` (`id`, `model`, `marque`, `description`, `carInterchangeable`, `volant`, `portes`, `siege`, `carburant`, `coleur`, `imgPricipale`, `img1`, `img2`, `img3`, `img4`, `img5`, `img6`, `img7`, `img8`, `img9`, `transmition`) VALUES
(6, 'SURF ', 'TOYOTA', 'ECHANGE ET RECHERCHE UNE RAV 4', '57575', 'droit', 5, 5, 'essence', 'NOIRE', 'UntitleSDFSEd-1.jpg', 'photo_2020-05-19_14-37-44.jpg', 'photo_2020-05-19_14-37-27.jpg', 'photo_2020-05-19_14-37-37.jpg', 'photo_2020-05-19_14-38-00.jpg', 'photo_2020-05-19_14-37-50.jpg', 'photo_2020-05-19_14-37-27.jpg', 'photo_2020-05-19_14-37-37.jpg', 'photo_2020-05-19_14-38-00.jpg', 'photo_2020-05-19_14-37-27.jpg', 'automatique'),
(7, 'MAR II', 'TOYOTA', 'TRES BON ETAT, A LA RECHERCHE DE TERIOS OU TOUT AUTRE PETIT VEHICULE.', '57575', 'droit', 4, 5, 'essence', 'NOIRE', 'Unaddtitled-2.jpg', 'photo_2020-05-21_10-12-32.jpg', 'photo_2020-05-21_10-12-27.jpg', 'photo_2020-05-21_10-12-24.jpg', 'photo_2020-05-21_10-12-20.jpg', 'photo_2020-05-21_10-12-14.jpg', 'photo_2020-05-21_10-12-14.jpg', 'photo_2020-05-21_10-12-09.jpg', 'photo_2020-05-21_10-12-17.jpg', 'photo_2020-05-21_10-12-06.jpg', 'automatique'),
(8, 'TOYOTA', 'TOYOTA', 'a la recherche de RAUM', '57575', 'droit', 5, 5, 'essence', 'NOIRE', 'photo_2020-06-06_16-26-32.jpg', 'photo_2020-06-06_16-26-35.jpg', 'photo_2020-06-06_16-26-39.jpg', 'photo_2020-06-06_16-26-42.jpg', 'photo_2020-06-06_16-26-45.jpg', 'photo_2020-06-06_16-26-49.jpg', 'photo_2020-06-06_16-26-52.jpg', 'photo_2020-06-06_16-26-32.jpg', 'photo_2020-06-06_16-26-35.jpg', 'photo_2020-06-06_16-26-39.jpg', 'automatique');

-- --------------------------------------------------------

--
-- Table structure for table `_cars_table`
--

CREATE TABLE `_cars_table` (
  `id` int(11) NOT NULL,
  `model` varchar(60) NOT NULL,
  `marque` varchar(60) NOT NULL,
  `description` text NOT NULL,
  `price` varchar(60) NOT NULL,
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
  `img9` text NOT NULL,
  `transmition` varchar(60) NOT NULL,
  `categorie` int(11) NOT NULL,
  `Kilometrage` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `_cars_table`
--

INSERT INTO `_cars_table` (`id`, `model`, `marque`, `description`, `price`, `volant`, `portes`, `siege`, `carburant`, `coleur`, `imgPricipale`, `img1`, `img2`, `img3`, `img4`, `img5`, `img6`, `img7`, `img8`, `img9`, `transmition`, `categorie`, `Kilometrage`) VALUES
(11, 'LAND CRUISER 3.0', 'TOYOTA', 'TRES BON ETAT', '100', 'gauche', 5, 8, 'diesel', 'BLANCHE', 'Untitled-2.jpg', 'photo_2020-05-18_10-58-20.jpg', 'photo_2020-05-18_10-58-33.jpg', 'photo_2020-05-18_10-58-38.jpg', 'photo_2020-05-18_10-58-42.jpg', 'photo_2020-05-18_10-58-48.jpg', 'photo_2020-05-18_10-58-51.jpg', 'photo_2020-05-18_10-58-55.jpg', 'photo_2020-05-18_10-59-09.jpg', 'photo_2020-05-18_10-58-55.jpg', 'manuel', 84, ''),
(12, 'FORTUNER', 'TOYOTA', 'Year:2018\r\nWheels:18Â´\r\nColor:Black\r\nCar type:SUV/Crossover\r\nKilometers:61,000\r\nExport status:Can be exported\r\nSpecs:GCC\r\nGearbox:Automatic\r\nFuel:Gasoline\r\nSeats:7\r\nCylinders:4\r\nInterior:Tan', '38000', 'gauche', 5, 5, 'essence', 'NOIRE', 'qqq.jpg', 'photo_2020-05-19_10-25-24.jpg', 'photo_2020-05-19_10-25-43.jpg', 'photo_2020-05-19_10-25-47.jpg', 'photo_2020-05-19_10-25-52.jpg', 'photo_2020-05-19_10-25-57.jpg', 'photo_2020-05-19_10-26-00.jpg', 'photo_2020-05-19_10-26-05.jpg', 'photo_2020-05-19_10-26-09.jpg', 'photo_2020-05-19_10-28-01.jpg', 'automatique', 95, ''),
(14, 'LAND CRUISER', 'TOYOTA', 'TOYOTA LAND CRUISER PICKUP \r\nModel: 2019 \r\nWheels:16Â´\r\nColor:White\r\nCar type:Pick Up Truck\r\nKilometers:0\r\nGearbox:Manual\r\nFuel:Diesel\r\nSeats:6\r\nCylinders:6\r\nInterior:Grey', '40000', 'gauche', 4, 5, 'diesel', 'BLANCHE', 'Untitled-887.jpg', 'photo_2020-05-19_11-03-26.jpg', 'photo_2020-05-19_11-03-30.jpg', 'photo_2020-05-19_11-03-34.jpg', 'photo_2020-05-19_11-03-38.jpg', 'photo_2020-05-19_11-03-42.jpg', 'photo_2020-05-19_11-03-20.jpg', '', '', '', 'manuel', 95, ''),
(17, 'TX , PRADO', 'TOYOTA', 'TRES BON ETAT , DISPONIBLE POUR LA LOCATION', '120', 'gauche', 5, 8, 'essence', 'BLANCHE', 'JKK.jpg', 'photo_2020-05-19_11-24-30.jpg', 'photo_2020-05-19_13-06-11.jpg', 'photo_2020-05-19_13-06-19.jpg', 'photo_2020-05-19_13-06-22.jpg', 'photo_2020-05-19_13-06-26.jpg', 'photo_2020-05-19_13-06-33.jpg', 'photo_2020-05-19_13-06-38.jpg', 'photo_2020-05-19_13-06-44.jpg', 'photo_2020-05-19_13-06-26.jpg', 'automatique', 84, ''),
(18, 'RAUM', 'TOYOTA', 'TRES BON ETAT, EN VENTE', '4000', 'gauche', 5, 8, 'essence', 'BLEU', 'UnJJJtitled-2.jpg', 'photo_2020-05-19_13-39-46.jpg', 'photo_2020-05-19_13-39-33.jpg', 'photo_2020-05-19_13-39-50.jpg', 'photo_2020-05-19_13-40-00.jpg', 'photo_2020-05-19_13-39-57.jpg', 'photo_2020-05-19_13-39-53.jpg', 'photo_2020-05-19_13-39-46.jpg', 'photo_2020-05-19_13-39-38.jpg', 'photo_2020-05-19_13-40-00.jpg', 'automatique', 95, ''),
(23, 'NISSAN', 'URVAN', 'Nissan Urvan\r\nYear:2015\r\nWheels:15Â´\r\nColor:White\r\nCar type:Van\r\nKilometers:135,362\r\nSpecs:GCC\r\nGearbox:Manual\r\nFuel:Gasoline\r\nSeats:9+\r\nCylinders:4\r\nInterior:Black', '19000', 'gauche', 5, 16, 'essence', 'BLANCHE', 'NfHJ.jpg', 'photo_2020-05-19_10-48-38.jpg', 'photo_2020-05-19_10-48-43.jpg', 'photo_2020-05-19_10-48-47.jpg', 'photo_2020-05-19_10-48-52.jpg', 'photo_2020-05-19_10-48-55.jpg', 'photo_2020-05-19_10-48-33.jpg', 'photo_2020-05-19_10-48-38.jpg', 'photo_2020-05-19_10-48-43.jpg', 'photo_2020-05-19_10-48-52.jpg', 'manuel', 95, ''),
(24, 'LAND CRUISER', 'TOYOTA', 'TRES BON ETAT, ANNEE 2012\r\nEN VENTE', '36500', 'gauche', 5, 8, 'essence', 'BLANCHE', 'Untitled-3.jpg', 'photo_2020-05-19_13-40-08.jpg', 'photo_2020-05-19_14-30-15.jpg', 'photo_2020-05-19_13-40-15.jpg', 'photo_2020-05-19_13-40-19.jpg', 'photo_2020-05-19_13-40-27.jpg', 'photo_2020-05-19_13-40-31.jpg', 'Untitled-1.jpg', 'photo_2020-05-19_13-40-31.jpg', 'photo_2020-05-19_13-40-27.jpg', 'manuel', 95, ''),
(25, 'SURF, HILIX', 'TOYOTA', 'BON ETAT DISPONIBLE A GOMA', '8000', 'gauche', 5, 5, 'essence', 'NOIRE', 'UntitleSDFSEd-1.jpg', 'photo_2020-05-19_14-38-00.jpg', 'photo_2020-05-19_14-37-50.jpg', 'photo_2020-05-19_14-37-27.jpg', 'photo_2020-05-19_14-37-37.jpg', 'photo_2020-05-19_14-37-32.jpg', 'photo_2020-05-19_14-37-41.jpg', 'photo_2020-05-19_14-37-44.jpg', 'photo_2020-05-19_14-37-50.jpg', '10.jpg', 'automatique', 95, ''),
(27, 'TX PRADO', 'TOYOTA', 'TRES BON ETAT, DISPONIBLE A GOMA \r\nEN VENTE', '13000', 'gauche', 5, 5, 'essence', 'GRISE', 'UntLLLLLLBIYHBitled-1.jpg', 'photo_2020-05-19_15-14-53.jpg', 'photo_2020-05-19_15-14-50.jpg', 'photo_2020-05-19_15-14-45.jpg', 'photo_2020-05-19_15-14-45.jpg', 'photo_2020-05-19_15-14-58.jpg', 'photo_2020-05-19_15-14-53.jpg', 'photo_2020-05-19_15-14-45.jpg', 'photo_2020-05-19_15-14-41.jpg', 'photo_2020-05-19_15-14-50.jpg', 'automatique', 95, ''),
(28, 'CORONA', 'TOYOTA', 'TRES BON ETAT, DISPONIBLE A GOMA\r\nEN VENTE', '6000', 'droit', 4, 5, 'essence', 'GRISE', 'UntiRYUKtled-2.jpg', 'photo_2020-05-19_16-09-35.jpg', 'photo_2020-05-19_16-09-26.jpg', 'photo_2020-05-19_16-09-21.jpg', 'photo_2020-05-19_16-09-16.jpg', 'photo_2020-05-19_16-09-03.jpg', 'photo_2020-05-19_16-08-59.jpg', 'photo_2020-05-19_16-08-55.jpg', 'photo_2020-05-19_16-08-42.jpg', 'photo_2020-05-19_16-08-37.jpg', 'automatique', 95, ''),
(29, 'MURANO', 'NISSAN', 'TRES BON ETAT, DISPONIBLE A GOMA\r\nEN VENTE', '7000', 'gauche', 5, 5, 'essence', 'ROUGE', 'UntiOURFtled-1.jpg', 'photo_2020-05-19_16-32-51.jpg', 'photo_2020-05-19_16-33-21.jpg', 'photo_2020-05-19_16-33-10.jpg', 'photo_2020-05-19_16-32-59.jpg', 'photo_2020-05-19_16-32-51.jpg', 'photo_2020-05-19_16-32-55.jpg', 'photo_2020-05-19_16-33-21.jpg', 'photo_2020-05-19_16-32-46.jpg', 'photo_2020-05-19_16-32-55.jpg', 'automatique', 95, ''),
(31, 'MARK II', 'TOYOTA', 'BON ETAT \r\nDISPONIBLE A GOMA\r\nEN VENTE', '5000', 'droit', 4, 5, 'essence', 'NOIRE', 'Unaddtitled-2.jpg', 'photo_2020-05-20_08-38-17.jpg', 'photo_2020-05-20_08-38-09.jpg', 'photo_2020-05-20_08-38-04.jpg', 'photo_2020-05-20_08-38-01.jpg', 'photo_2020-05-20_08-37-26.jpg', 'photo_2020-05-20_08-38-13.jpg', 'photo_2020-05-20_08-37-26.jpg', 'photo_2020-05-20_08-38-09.jpg', 'photo_2020-05-20_08-37-26.jpg', 'automatique', 95, ''),
(32, 'LAND CRUISER', 'TOYOTA', 'Chassis #	JTEBV71J504006522	Version/Classe	4.5\r\nSerie	0	KilomÃ©trage	174,391 km\r\nCylindrÃ©e du moteur	4,461cc	Code moteur	-\r\nMotricitÃ©	4wheel drive	Volant	Droite\r\nTransmission	Manuelle	Couleur ext.	Argent\r\nEnregistrement\r\nAnnÃ©e/mois	2014/8	Carburant	Diesel\r\nFabrication\r\nAnnÃ©e/mois	2014/7	SiÃ¨ges	5\r\nPortes	4. \r\n\r\nLIVRAISON PAR COMMANDE ', '40000', 'gauche', 4, 5, 'essence', 'ARGENT', 'Untzqsditled-1.jpg', 'photo_2020-05-20_09-22-50.jpg', 'photo_2020-05-20_09-22-46.jpg', 'photo_2020-05-20_09-22-40.jpg', 'photo_2020-05-20_09-22-36.jpg', 'photo_2020-05-20_09-22-33.jpg', 'photo_2020-05-20_09-22-30.jpg', 'photo_2020-05-20_09-22-26.jpg', 'photo_2020-05-20_09-22-20.jpg', 'photo_2020-05-20_09-22-33.jpg', 'automatique', 95, ''),
(33, 'NOAH', 'TOYOTA', 'BON ETAT\r\nDISPONIBLE A GOMA\r\nEN VENTE', '5600', 'droit', 5, 7, 'essence', 'METALIQUE', 'Untitsjjoled-2.jpg', 'photo_2020-05-20_10-16-07.jpg', 'photo_2020-05-20_10-15-31.jpg', 'photo_2020-05-20_10-15-36.jpg', 'photo_2020-05-20_10-16-03.jpg', 'photo_2020-05-20_10-15-47.jpg', 'photo_2020-05-20_10-15-40.jpg', 'photo_2020-05-20_10-15-44.jpg', 'photo_2020-05-20_10-15-59.jpg', 'photo_2020-05-20_10-16-03.jpg', 'automatique', 95, ''),
(34, 'DISCOVERY', 'LAND ROVER', 'Chassis #	SAL60254	Version/Classe	AUTOMATIC DIESEL\r\nSerie	0	KilomÃ©trage	149,000 mile\r\nCylindrÃ©e du moteur	2,700cc	Code moteur	-\r\nMotricitÃ©	4wheel drive	Volant	Droite\r\nTransmission	Automatique	Couleur ext.	Noir\r\nEnregistrement\r\nAnnÃ©e/mois	2008/3	Carburant	Diesel\r\nFabrication\r\nAnnÃ©e/mois	N/A	SiÃ¨ges	7\r\nPortes	5\r\n\r\n\r\nLIVRAISON PAR COMMANDE IMPORTEE\r\nEN VENTE', '16000', 'droit', 5, 8, 'diesel', 'NOIRE', 'UntitlZRCVed-4.jpg', 'photo_2020-05-20_10-52-56.jpg', 'photo_2020-05-20_10-52-52.jpg', 'photo_2020-05-20_10-52-49.jpg', 'photo_2020-05-20_10-52-45.jpg', 'photo_2020-05-20_10-52-42.jpg', 'photo_2020-05-20_10-52-39.jpg', 'photo_2020-05-20_10-52-34.jpg', 'photo_2020-05-20_10-52-31.jpg', 'photo_2020-05-20_10-52-23.jpg', 'automatique', 95, ''),
(35, 'RAV 4', 'TOYOTA', 'BONN ETAT, \r\nDISPONIBLE A GOMA\r\nEN VENTE', '4000', 'droit', 5, 5, 'essence', 'BLEU', 'photo_2020-05-20_10-41-31.jpg', 'photo_2020-05-20_10-41-26.jpg', 'photo_2020-05-20_10-43-14.jpg', 'photo_2020-05-20_10-43-09.jpg', 'photo_2020-05-20_10-43-27.jpg', 'photo_2020-05-20_10-43-18.jpg', 'photo_2020-05-20_10-43-23.jpg', 'photo_2020-05-20_10-41-31.jpg', 'photo_2020-05-20_10-43-09.jpg', 'photo_2020-05-20_10-43-23.jpg', 'automatique', 95, ''),
(36, 'RAUM', 'TOYOTA', 'TRES BON ETAT, BIENTOT DISPONIBLE A GOMA', '4000', 'droit', 5, 8, 'essence', 'ROUGE', 'Uetyntitled-5.jpg', 'photo_2020-05-20_11-42-41.jpg', 'photo_2020-05-20_11-42-44.jpg', 'photo_2020-05-20_11-42-49.jpg', 'photo_2020-05-20_11-42-52.jpg', 'photo_2020-05-20_11-42-56.jpg', 'photo_2020-05-20_11-43-00.jpg', 'photo_2020-05-20_11-43-04.jpg', 'photo_2020-05-20_11-43-07.jpg', 'photo_2020-05-20_11-43-10.jpg', 'automatique', 95, ''),
(38, 'VITZ', 'TOYOTA', 'TOYOTA VITZ\r\n2008Â \r\nwhite\r\nSCP90\r\nF Limited\r\nFATÂ Â 1300Â cc\r\nAC\r\nFF87\r\n44000 kmÂ ', '4000', 'droit', 5, 5, 'essence', 'BLANCHE', 'Untisrktled-8.jpg', 'photo_2020-05-20_14-26-04.jpg', 'photo_2020-05-20_14-26-00.jpg', 'photo_2020-05-20_14-25-53.jpg', 'photo_2020-05-20_14-25-50.jpg', 'photo_2020-05-20_14-25-47.jpg', 'photo_2020-05-20_14-25-42.jpg', 'photo_2020-05-20_14-25-31.jpg', 'photo_2020-05-20_14-25-31.jpg', 'photo_2020-05-20_14-25-38.jpg', 'automatique', 95, ''),
(39, 'TRIBUTE', 'MAZDA', 'EN ETAT D\'UTILISATION,\r\n\r\nDISPONIBLE A GOMA\r\nEN VENTE', '3500', 'droit', 5, 5, 'essence', 'METALIQUE', 'Untitle6KNd-9.jpg', 'photo_2020-05-20_15-07-28.jpg', 'photo_2020-05-20_15-07-24.jpg', 'photo_2020-05-20_15-07-32.jpg', 'photo_2020-05-20_15-07-20.jpg', 'photo_2020-05-20_15-07-15.jpg', 'photo_2020-05-20_15-07-38.jpg', 'photo_2020-05-20_15-07-32.jpg', 'photo_2020-05-20_15-07-20.jpg', 'photo_2020-05-20_15-07-24.jpg', 'automatique', 95, ''),
(40, 'AVENSIS D', 'TOYOTA', 'Chassis #	AZT250-0027558	Version/Classe	XI\r\nSerie	CBA-AZT250\r\nTrouvez des piÃ¨ces dÃ©tachÃ©es pour ce modÃ¨le 	KilomÃ©trage	59,162 km\r\nCylindrÃ©e du moteur	1,990cc	Code moteur	1AZ\r\nMotricitÃ©	-	Volant	Droite\r\nTransmission	Automatique	Couleur ext.	Argent\r\nEnregistrement\r\nAnnÃ©e/mois	2005/3	Carburant	Essence\r\nFabrication\r\nAnnÃ©e/mois	2004/12	SiÃ¨ges	5\r\nPortes	4\r\n* L\' [Enregistrement AnnÃ©e/mois] est une date d\'enregistrement dans le stock du pays.\r\n\r\n* L\' [AnnÃ©e/mois de fabrication] sont fournis par le fournisseur de base de donnÃ©es. BE FORWARD ne pourra Ãªtre tenu responsable pour toute perte, dommages et problÃ¨mes causÃ©s par ces informations.\r\n\r\nTaille\r\n(LÃ—lÃ—H)	4.63Ã—1.76Ã—1.48 m\r\nM3	12.06\r\nPoids	1,370 kg\r\nMax Loading Capacity	-\r\n\r\nCOMMANDE A IMPORTER\r\n', '6000', 'droit', 5, 4, 'essence', 'METALIQUE', 'Untitled-10.jpg', 'photo_2020-05-20_16-04-43.jpg', 'photo_2020-05-20_16-04-47.jpg', 'photo_2020-05-20_16-04-51.jpg', 'photo_2020-05-20_16-04-55.jpg', 'photo_2020-05-20_16-04-59.jpg', 'photo_2020-05-20_16-08-07.jpg', 'photo_2020-05-20_16-08-12.jpg', 'photo_2020-05-20_16-05-02.jpg', 'photo_2020-05-20_16-05-06.jpg', 'automatique', 95, ''),
(41, 'RAV 4', 'TOYOTA', 'BON ETAT\r\nDISPONIBLE A GOMA\r\n\r\nEN VENTE', '3500', 'droit', 5, 5, 'essence', 'BLEU', 'Untitlaj5ed-1.jpg', 'photo_2020-05-21_08-51-15.jpg', 'photo_2020-05-21_08-51-11.jpg', 'photo_2020-05-21_08-51-06.jpg', 'photo_2020-05-21_08-51-02.jpg', 'photo_2020-05-21_08-50-58.jpg', 'photo_2020-05-21_08-50-53.jpg', 'photo_2020-05-21_08-50-49.jpg', 'photo_2020-05-21_08-50-43.jpg', 'photo_2020-05-21_08-51-11.jpg', 'automatique', 95, ''),
(42, 'PATROL', 'NISSAN', 'EN TRES BON ETAT, \r\nDIPONIBLE A GOMA\r\nEN VENTE', '17000', 'gauche', 5, 8, 'diesel', 'BLANCHE', 'Untidsttled-3.jpg', 'photo_2020-05-21_11-06-14.jpg', 'photo_2020-05-21_11-06-11.jpg', 'photo_2020-05-21_11-06-07.jpg', 'photo_2020-05-21_11-05-59.jpg', 'photo_2020-05-21_11-06-03.jpg', 'photo_2020-05-21_11-05-55.jpg', 'photo_2020-05-21_11-05-52.jpg', 'photo_2020-05-21_11-05-43.jpg', 'photo_2020-05-21_11-05-48.jpg', 'manuel', 95, ''),
(43, 'LAND CRUISER', 'TOYOTA', 'TRES BON ETAT \r\n\r\nDISPONIBLE A GOMA\r\nEN VENTE', '25000', 'gauche', 5, 8, 'diesel', 'BLANCHE', '.jpg', 'photo_2020-05-21_11-19-05.jpg', 'photo_2020-05-21_11-19-02.jpg', 'photo_2020-05-21_11-18-59.jpg', 'photo_2020-05-21_11-18-52.jpg', 'photo_2020-05-21_11-18-48.jpg', 'photo_2020-05-21_11-18-46.jpg', 'photo_2020-05-21_11-18-38.jpg', 'photo_2020-05-21_11-18-34.jpg', 'photo_2020-05-21_11-18-42.jpg', 'manuel', 95, ''),
(44, 'PRADO', 'TOYOTA', 'TOYOTA PRADO LHD (FACELIFTED 2020)\r\n2.7L 4 Cylinder Petrol\r\nYear:2010\r\nWheels:17Â´\r\nColor:Grey/Silver\r\nCar type:SUV\r\nGearbox:Automatic\r\nFuel:Gasoline\r\nSeats:7\r\nCylinders:4\r\nInterior:Black\r\nSteering side:Left hand\r\n \r\nLIVRAISON APRES IMPORTATION. 50 JOURS MAXIMUM', '40000', 'gauche', 5, 5, 'essence', 'BLANCHE', 'Untitl,xw569ed-5.jpg', 'photo_2020-05-21_14-19-53.jpg', 'photo_2020-05-21_14-19-56.jpg', 'photo_2020-05-21_14-19-50.jpg', 'photo_2020-05-21_14-19-47.jpg', 'photo_2020-05-21_14-19-43.jpg', 'photo_2020-05-21_14-19-40.jpg', 'photo_2020-05-21_14-19-20.jpg', 'photo_2020-05-21_14-19-03.jpg', 'photo_2020-05-21_14-19-20.jpg', 'manuel', 95, ''),
(45, 'ISIS 2009', 'TOYOTA', 'TRES BON ETAT\r\nDISPONIBLE A GOMA \r\nEN VENTE', '5000', 'droit', 5, 5, 'essence', 'ROUGE', 'Unt(tritled-1.jpg', 'photo_2020-05-22_08-48-04.jpg', 'photo_2020-05-22_08-48-00.jpg', 'photo_2020-05-22_08-47-56.jpg', 'photo_2020-05-22_08-47-52.jpg', 'photo_2020-05-22_08-47-48.jpg', 'photo_2020-05-22_08-47-44.jpg', 'photo_2020-05-22_08-47-39.jpg', 'photo_2020-05-22_08-47-34.jpg', 'photo_2020-05-22_08-47-30.jpg', 'automatique', 95, ''),
(46, 'RAV4', 'TOYOTA', 'tres bon etat. disponible a goma', '5370', 'droit', 5, 5, 'essence', 'BLANCHE', 'UntitleZETd-1.jpg', 'photo_2020-05-25_11-49-31.jpg', 'photo_2020-05-25_11-49-28.jpg', 'photo_2020-05-25_11-49-23.jpg', 'photo_2020-05-25_11-49-21.jpg', 'photo_2020-05-25_11-49-16.jpg', 'photo_2020-05-25_11-49-13.jpg', 'photo_2020-05-25_11-49-09.jpg', 'photo_2020-05-25_11-48-59.jpg', 'photo_2020-05-25_11-49-28.jpg', 'automatique', 95, ''),
(52, 'ACTROS', 'MERCEDES BENZ', 'Stock No:	DJE7998	Lieu:	Hamburg - Germany\r\nModÃ¨le:	ACTROS	AnnÃ©e:	2001/2\r\nBoÃ®te de vitesse:	MT	Couleur:	\r\nConduite:	8-4	Porte:	\r\nVolant:	Left	Nombre de places:	2\r\nStyle de carlingue:	Truck Crane	CylindrÃ©e du moteur:	11,946cc\r\nKilomÃ©trage :	409,390km	Carburant:	DIESEL\r\nCOMMANDE A IMPORTER, LE PRIX EST JUSQU\'A GOMA', '71260', 'gauche', 2, 3, 'diesel', 'JAUNE', 'UntiXDSFtled-1.jpg', '5fcbc4b2982cad6ac546b1b236c9e622.jpg', '8eb0ffdfadca04f0760641542d586113.jpg', '163e88c9f49fd92d1ad2de6ed5645919.jpg', '313142de30e3fc9ac1c5020f00856c0f.jpg', 'daaedd61163433d00cc1f6b0ad7e3e6a.jpg', 'f.jpg', 'r.jpg', '8eb0ffdfadca04f0760641542d586113.jpg', '5fcbc4b2982cad6ac546b1b236c9e622.jpg', 'automatique', 95, ''),
(53, 'ACTROS', 'MERCEDES BENZ', 'Stock No:	DBW5439	Lieu:	Hamburg - Germany\r\nModÃ¨le:	ACTROS	AnnÃ©e:	2001/10\r\nBoÃ®te de vitesse:	MT	Couleur:	\r\nConduite:	6-4	Porte:	\r\nVolant:	Left	Nombre de places:	2\r\nStyle de carlingue:	Truck Tractor	CylindrÃ©e du moteur:	11,967cc\r\nKilomÃ©trage :	506,000km	Carburant:	DIESEL\r\nLE PRIX EST JUSQUA GOMA , INCLUS DEDOINEMENT', '51200', 'gauche', 2, 2, 'diesel', 'GRISE', 'UCVFntitled-1.jpg', '2a0ac62e7bf90ca445429c57d4e01894.jpg', '140826c6cdec6797e24c99f9c9ec438c.jpg', 'd0f5a04944cdd830935109a4d04900b7.jpg', 'f.jpg', 'fca07e61ae540ae16b2a2573772f4ed2.jpg', 'r.jpg', '140826c6cdec6797e24c99f9c9ec438c.jpg', 'd0f5a04944cdd830935109a4d04900b7.jpg', 'fca07e61ae540ae16b2a2573772f4ed2.jpg', 'manuel', 95, ''),
(54, 'ACTROS', 'MERCEDES BENZ', 'ModÃ¨le:	ACTROS	AnnÃ©e:	2001\r\nBoÃ®te de vitesse:	AT	Couleur:	\r\nConduite:	4-2	Porte:	\r\nVolant:	Left	Nombre de places:	2\r\nStyle de carlingue:	Truck	CylindrÃ©e du moteur:	11,946cc\r\nKilomÃ©trage :	408,832km	Carburant:	DIESEL\r\nCOMMANDE A IMPORTER. LE PRIX EST JUSQU\'A DAR ES SALEM', '30000', 'gauche', 2, 2, 'diesel', 'BLANCHE', 'UntitlCSDed-1.jpg', 'e0579e2f0eaea9bdb817af503802f500.jpg', 'df7c0a62e3727583ffbd0e600d830f1c.jpg', 'bc45b27a89b48e5ed611510a98886d90.jpg', '3cfb37beedda2cd9901a3cd85c8ea00e.jpg', '2d4b203c9abba323cf3a8776094d1399.jpg', '1d0532ad3e50bf4fc90c49326637fd3b.jpg', 'df7c0a62e3727583ffbd0e600d830f1c.jpg', 'e0579e2f0eaea9bdb817af503802f500.jpg', '1d0532ad3e50bf4fc90c49326637fd3b.jpg', 'automatique', 95, ''),
(55, ' TITAN', 'MAZDA', 'RÃ©fÃ©rence du modÃ¨le:	BDG-LKR85AD	AnnÃ©e:	2007/4\r\nBoÃ®te de vitesse:	6F	Couleur:	Black\r\nConduite:	2WD	Porte:	2\r\nVolant:	RHD	SiÃ¨gesâ€‹:	3\r\nType de moteur:	4JJ1	Style de carlingue:	Truck\r\nCylindrÃ©e du moteur:	2,990cc	KilomÃ©trage :	255,000km\r\nCarburant:	DIESEL	Longueur du corps:	4.69m\r\nPoids Ã  vide:	2,750kg	Poids brut du vÃ©hicule:	5,915kg\r\nCapacitÃ© de chargement maximum:	3,000kg		\r\nCOMMANDE A IMPOTER, LE PRIX EST JUSQU\'A GOMA INCLUS DEDOINNEMENT', '11680', 'droit', 2, 2, 'diesel', 'ROUGE, NOIRE', 'UntitlFDJDed-1.jpg', '2.jpg', '4.jpg', '6.jpg', '9.jpg', '11.jpg', '12.jpg', '23.jpg', '5.jpg', '26.jpg', 'manuel', 95, ''),
(56, 'TITAN', 'MAZDA', 'ModÃ¨le:	TITAN	AnnÃ©e:	1999/1\r\nBoÃ®te de vitesse:	5F	Couleur:	\r\nConduite:	4-2	Porte:	\r\nVolant:	Right	Nombre de places:	3\r\nStyle de carlingue:	Truck Dump	CylindrÃ©e du moteur:	4,570cc\r\nKilomÃ©trage :	60,168km	Carburant:	DIESEL\r\nNumÃ©ro de chÃ¢ssis	WG61D-101***		\r\nCOMMANDE A IMPORTER, LE PRIX EST JUSQU\'A GOMA', '13600', 'droit', 2, 2, 'diesel', 'BLEU', 'UntitlQSFRed-1.jpg', '6fb0f287259c17a95e023d3739124ac6.jpg', 'a12b56b3daa385ddd67301d07fe08af2.jpg', 'e14cf278d1b224b3453ff3a8ae3267b8.jpg', '38e3a77c1612062e54a264106bb78352.jpg', '9c4a19abdb3d7e0cf80ab5be3ea94d00.jpg', '034041a72977bb19cb209695896cdb6d.jpg', '87a4c0d31b5b144d8e56834b791b4388.jpg', 'ebb1c773b085acc10c1f3b7ef0952979.jpg', '1a14c7f84c2dee983982f3571eb03628.jpg', 'manuel', 95, ''),
(57, 'SCANIA', 'SCANIA', 'ModÃ¨le:	SCANIA	AnnÃ©e:	1999/2\r\nBoÃ®te de vitesse:	MT	Couleur:	\r\nConduite:	6-2	Porte:	\r\nVolant:	Left	Nombre de places:	2\r\nStyle de carlingue:	Truck Tractor	CylindrÃ©e du moteur:	12,902cc\r\nKilomÃ©trage :	1,450,000km	Carburant:	DIESEL\r\nCOMMANDE A IMPORTER, LE PRIX EST JUSQU\'A DAR ES SALEM', '29000', 'gauche', 2, 2, 'diesel', 'ROUGE', 'UFTDUntitled-1.jpg', 'r.jpg', 'fdec6b841aa7932f068f41b6c2279642.jpg', 'f7a7f12fa49a9084db0dce8adb63fb3d.jpg', 'f.jpg', 'ce420c34aba56038a1651a98d468a206.jpg', 'c7f4d02cc1a1a641680812f5b7ee04e9.jpg', 'c7f4d02cc1a1a641680812f5b7ee04e9.jpg', 'b61e7ab1ee2430680837baa6a060da8a.jpg', 'fdec6b841aa7932f068f41b6c2279642.jpg', 'automatique', 95, ''),
(58, 'SCANIA', 'SCANIA', 'ModÃ¨le:	SCANIA	AnnÃ©e:	1999\r\nBoÃ®te de vitesse:	MT	Couleur:	\r\nConduite:	4-2	Porte:	\r\nVolant:	Left	Nombre de places:	2\r\nStyle de carlingue:	Truck Tractor	CylindrÃ©e du moteur:	11,705cc\r\nKilomÃ©trage :	641,332km	Carburant:	DIESEL\r\nCOMMANDE A IMPORTER\r\nLE PRIX EST JUSQU\'A DAR ES SALEM', '19360', 'gauche', 2, 2, 'diesel', 'ROUGE', 'UntRRFGitled-1.jpg', 'f.jpg', '6b35985156408ae02e7d3eaafcedb8a2.jpg', '6e49d7087a7ae592cb9648f3163bc790.jpg', '7b3b8a1bc8c122e7923519a3f1e8c51a.jpg', '8b7b9feef82d05a3ed1c64421516d01b.jpg', 'a4ac19fd989e1a59139593e73d832339.jpg', 'a4ac19fd989e1a59139593e73d832339.jpg', '6b35985156408ae02e7d3eaafcedb8a2.jpg', '6e49d7087a7ae592cb9648f3163bc790.jpg', 'automatique', 95, ''),
(59, 'MAN', 'MAN 1999', 'ModÃ¨le:	MAN	AnnÃ©e:	1999\r\nBoÃ®te de vitesse:	MT	Couleur:	\r\nConduite:	4-2	Porte:	\r\nVolant:	Left	Nombre de places:	2\r\nStyle de carlingue:	Truck Dump	CylindrÃ©e du moteur:	6,871cc\r\nKilomÃ©trage :	441,598km	Carburant:	DIESEL\r\nCOMMANDE A IMPOTER\r\nLE PRIX EST JUSQU A GOMA, INCLUS DEDOINEMENT', '34600', 'gauche', 2, 2, 'diesel', 'BLANCHE', 'UntitleQsdd-1.jpg', 'd24691db740b8f31810af7211d2611f7.jpg', 'd24691db740b8f31810af7211d2611f7.jpg', 'b473ebaf641b2e74c87d07e1c637d8ec.jpg', 'a37bc13af26b91a5338c734b3314d756.jpg', '6260a52d8cfd95da9a44f1e9d665289f.jpg', '21f7d1046122c679d17cc1c25d34072c.jpg', '5d4430f813e07b3f4c389f2413b6ef4f.jpg', '4bc21a26d907ba0359cb471ee7cf8dbc.jpg', '4bc21a26d907ba0359cb471ee7cf8dbc.jpg', 'automatique', 95, ''),
(60, 'MAN', 'MAN', 'ModÃ¨le:	MAN	AnnÃ©e:	1999/11\r\nBoÃ®te de vitesse:	MT	Couleur:	\r\nConduite:	4-2	Porte:	\r\nVolant:	Left	Nombre de places:	2\r\nStyle de carlingue:	Truck Flat Body	CylindrÃ©e du moteur:	0cc\r\nKilomÃ©trage :	278,510km	Carburant:	DIESEL\r\nCOMMANDE A IMPOTER\r\nLE PRIX EST JUSQU\'A GOMA', '32300', 'gauche', 2, 2, 'diesel', 'BLEU', 'Untitldtedeed-1.jpg', '693097131aa4f75e35213a0115430ba6.jpg', '7fc3a8aa61664bf9464b07320ed5c9ed.jpg', '9ef9e6ac92641b65c8232e5410f3354a.jpg', '26fd72a3f14cca6bca49b4d8e846528c.jpg', '34615de0420ad9a4d76a002a59eb57d2.jpg', '80596c696273e683cf6608a2365cc337.jpg', 'c42c4efcbf85fee647cc1dac93896ca3.jpg', 'ef6726f9f9321728d9c5bcf343ed960e.jpg', '80596c696273e683cf6608a2365cc337.jpg', 'manuel', 95, ''),
(61, 'HARRIER', 'TOYOTA', 'DISPONIBLE A GOMA', '9420', 'droit', 5, 5, 'essence', 'NOIRE', 'UntiZQEtled-1.jpg', 'photo_2020-05-28_11-40-27.jpg', 'photo_2020-05-28_11-40-21.jpg', 'photo_2020-05-28_11-40-13.jpg', 'photo_2020-05-28_11-40-10.jpg', 'photo_2020-05-28_11-38-49.jpg', 'photo_2020-05-28_11-38-45.jpg', 'photo_2020-05-28_11-38-41.jpg', 'photo_2020-05-28_11-38-31.jpg', 'photo_2020-05-28_11-38-49.jpg', 'automatique', 95, ''),
(62, 'TX', 'TOYOTA', 'DISPONIBLE A GOMA', '12570', 'droit', 5, 5, 'essence', 'METALIQUE', 'UntiZRE5tled-1.jpg', 'photo_2020-05-28_11-45-17.jpg', 'photo_2020-05-28_11-45-15.jpg', 'photo_2020-05-28_11-45-11.jpg', 'photo_2020-05-28_11-45-08.jpg', 'photo_2020-05-28_11-44-58.jpg', 'photo_2020-05-28_11-45-01.jpg', 'photo_2020-05-28_11-45-05.jpg', 'photo_2020-05-28_11-45-20.jpg', 'photo_2020-05-28_11-45-08.jpg', 'automatique', 95, ''),
(63, 'RAV 2019', 'TOYOTA', 'Model: 2017\r\nFuel: Petrol\r\nMileage: 12,000 km\r\nTransmission: Automatic \r\nCylinders: 4\r\nExterior color: Black\r\nSteering: Left hand drive \r\nFeatures:\r\nLeather seats\r\nSunroof\r\nFully equipped\r\nCOMMANDE A IMPORTER ,. LE PRIX EST JUSQU\'A GOMA', '27300', 'gauche', 5, 5, 'essence', 'NOIRE', 'UnLKYXtitled-1.jpg', 'photo_2020-05-28_11-59-02.jpg', 'photo_2020-05-28_11-58-43.jpg', 'photo_2020-05-28_11-58-39.jpg', 'photo_2020-05-28_11-58-45.jpg', 'photo_2020-05-28_11-58-55.jpg', 'photo_2020-05-28_11-58-52.jpg', 'photo_2020-05-28_11-59-14.jpg', 'photo_2020-05-28_11-59-02.jpg', 'photo_2020-05-28_11-59-18.jpg', 'automatique', 95, ''),
(64, 'JUKE', 'NISSAN', 'DISPONIBLE A GOMA EN TRES BON ETAT', '8422', 'droit', 5, 5, 'essence', 'VERTE', 'dfhgdfvd-1.jpg', 'photo_2020-05-28_12-02-55.jpg', 'photo_2020-05-28_12-02-59.jpg', 'photo_2020-05-28_12-02-51.jpg', 'photo_2020-05-28_12-02-48.jpg', 'photo_2020-05-28_12-02-59.jpg', 'photo_2020-05-28_12-02-55.jpg', 'photo_2020-05-28_12-02-51.jpg', 'photo_2020-05-28_12-02-48.jpg', 'photo_2020-05-28_12-02-59.jpg', 'automatique', 95, ''),
(65, 'ESCUDO', 'SUZUKI', 'DISPONIBLE A GOMA', '6720', 'droit', 5, 5, 'essence', 'NOIRE', 'UZASntitled-1.jpg', 'photo_2020-05-28_11-57-23.jpg', 'photo_2020-05-28_11-57-27.jpg', 'photo_2020-05-28_11-57-30.jpg', 'photo_2020-05-28_11-57-23.jpg', 'photo_2020-05-28_11-57-34.jpg', 'photo_2020-05-28_11-57-23.jpg', 'photo_2020-05-28_11-57-23.jpg', 'photo_2020-05-28_11-57-30.jpg', '', 'automatique', 95, ''),
(66, 'PASSO', 'TOYOTA', 'DISPONIBLE A GOMA', '2730', 'droit', 5, 5, 'essence', 'BLEU', 'UntitlZEARed-1.jpg', 'photo_2020-05-28_12-17-41.jpg', 'photo_2020-05-28_12-17-44.jpg', 'photo_2020-05-28_12-17-50.jpg', 'photo_2020-05-28_12-17-44.jpg', 'photo_2020-05-28_12-17-41.jpg', 'photo_2020-05-28_12-17-50.jpg', 'photo_2020-05-28_12-17-44.jpg', 'photo_2020-05-28_12-17-50.jpg', 'photo_2020-05-28_12-17-41.jpg', 'automatique', 95, ''),
(67, 'HIACE 1992', 'TOYOTA', 'DISPONIBLE A GOMA', '3120', 'droit', 5, 18, 'essence', 'BLANCHE', 'UnEZRUMtitled-1.jpg', 'photo_2020-05-28_12-23-50.jpg', 'photo_2020-05-28_12-23-47.jpg', 'photo_2020-05-28_12-23-44.jpg', 'photo_2020-05-28_12-23-37.jpg', 'photo_2020-05-28_12-23-34.jpg', 'photo_2020-05-28_12-23-30.jpg', 'photo_2020-05-28_12-23-27.jpg', 'photo_2020-05-28_12-23-24.jpg', 'photo_2020-05-28_12-23-21.jpg', 'automatique', 95, ''),
(68, 'LAND CRUISER 3.0', 'TOYOTA', 'DISPONIBLE A GOMA', '8920', 'droit', 5, 5, 'diesel', 'NOIRE', 'UntSGSDitled-1.jpg', 'photo_2020-05-28_12-30-24.jpg', 'photo_2020-05-28_12-30-16.jpg', 'photo_2020-05-28_12-30-13.jpg', 'photo_2020-05-28_12-30-21.jpg', 'photo_2020-05-28_12-30-24.jpg', 'photo_2020-05-28_12-30-16.jpg', 'photo_2020-05-28_12-30-13.jpg', 'photo_2020-05-28_12-30-24.jpg', 'photo_2020-05-28_12-30-13.jpg', 'manuel', 95, ''),
(69, 'NOAH', 'TOYOTA', 'DISPONIBLE A GOMA', '2660', 'droit', 4, 8, 'essence', 'BLANCHE', 'UnCXFFGRtitled-1.jpg', 'photo_2020-05-28_12-34-46.jpg', 'photo_2020-05-28_12-34-42.jpg', 'photo_2020-05-28_12-34-38.jpg', 'photo_2020-05-28_12-34-34.jpg', 'photo_2020-05-28_12-34-30.jpg', 'photo_2020-05-28_12-34-46.jpg', 'photo_2020-05-28_12-34-42.jpg', 'photo_2020-05-28_12-34-30.jpg', 'photo_2020-05-28_12-34-30.jpg', 'automatique', 95, ''),
(70, 'RAUM', 'TOYOTA', 'DISPONIBLE A GOMA', '3720', 'droit', 6, 6, 'essence', 'BLEU', 'UnDETUEtitled-1.jpg', 'photo_2020-05-28_12-41-35.jpg', 'photo_2020-05-28_12-41-32.jpg', 'photo_2020-05-28_12-41-29.jpg', 'photo_2020-05-28_12-41-23.jpg', 'photo_2020-05-28_12-41-20.jpg', 'photo_2020-05-28_12-41-16.jpg', 'photo_2020-05-28_12-41-13.jpg', 'photo_2020-05-28_12-41-10.jpg', 'photo_2020-05-28_12-41-07.jpg', 'automatique', 95, ''),
(71, 'TX', 'TOYOTA', 'Chassis #	GRJ120-5048609	Version/Classe	TX LIMITED\r\nSerie	CBA-GRJ120W\r\nTrouvez des piÃ¨ces dÃ©tachÃ©es pour ce modÃ¨le 	KilomÃ©trage	107,832 km\r\nCylindrÃ©e du moteur	3,950cc	Code moteur	1GR\r\nMotricitÃ©	4wheel drive	Volant	Droite\r\nTransmission	Automatique	Couleur ext.	Perle\r\nEnregistrement\r\nAnnÃ©e/mois	2006/2	Carburant	Essence\r\nFabrication\r\nAnnÃ©e/mois	2006/2	SiÃ¨ges	8\r\nPortes	5\r\nCOMMANDE A IMPORTER, LE PRIX EST JUSQU\'A GOMA', '13670', 'gauche', 5, 5, 'essence', 'BLANCHE', 'Utxntitled-1.jpg', 'photo_2020-05-28_14-06-15.jpg', 'photo_2020-05-28_14-06-12.jpg', 'photo_2020-05-28_14-06-09.jpg', 'photo_2020-05-28_14-06-05.jpg', 'photo_2020-05-28_14-06-02.jpg', 'photo_2020-05-28_14-05-58.jpg', 'photo_2020-05-28_14-05-55.jpg', 'photo_2020-05-28_14-05-52.jpg', 'photo_2020-05-28_14-05-38.jpg', 'automatique', 95, ''),
(72, 'PRADO TXL', 'TOYOTA', 'RÃ©fÃ©rence du modÃ¨le:	CBA-TRJ150W	AnnÃ©e:	2017/3\r\nBoÃ®te de vitesse:	AT	Couleur:	Pearl\r\nConduite:	4WD	Porte:	5\r\nVolant:	RHD	SiÃ¨gesâ€‹:	7\r\nType de moteur:	2TR	Style de carlingue:	SUV\r\nCylindrÃ©e du moteur:	2,690cc	KilomÃ©trage :	45,000km\r\nCarburant:	PETROL	Longueur du corps:	4.76m\r\nPoids Ã  vide:	2,110kg	Poids brut du vÃ©hicule:	2,495k\r\nCOMMANDE A IMPORTER , LE PRIX EST JUSQU\'A GOMA', '36280', 'gauche', 5, 5, 'essence', 'BLANCHE', 'UnQSDF5titled-1.jpg', '180.jpg', '142.jpg', '51.jpg', '50.jpg', '47.jpg', '44.jpg', '41.jpg', '30.jpg', '3.jpg', 'automatique', 95, ''),
(73, 'ML CLASS', 'MERCEDES BENZ', 'ModÃ¨le:	M CLASS	AnnÃ©e:	2006\r\nBoÃ®te de vitesse:	AT	Couleur:	\r\nConduite:	FF	Porte:	5\r\nVolant:	Left	Nombre de places:	5\r\nStyle de carlingue:	SUV	CylindrÃ©e du moteur:	3,498cc\r\nKilomÃ©trage :	243,835km	Carburant:	PETROL\r\nAccessoires\r\nSystÃ¨me de navigation	TÃ©lÃ©vison	roue en alliage	Toit panoramique\r\nSiÃ¨ges en cuir	Air conditionnÃ©	Direction AssistÃ©e	Vitres electriques\r\nAir Bag	Double Air Bag	systÃ¨me anti-blocage	BÃ©quet arriÃ¨re\r\ncalandre	Pneu de secours	Porte bagages	Feux de brouillard\r\nCOMMANDE A IMPORTER LE  PRIX EST JUSQUA GOMA', '13800', 'droit', 5, 5, 'essence', 'METALIQUE', 'UntiFHJFDtled-1.jpg', 'hhoin6705_114311994_NP6kf_6.jpg', 'hhoin6705_114311990_vSvfd_5.jpg', 'f.jpg', 'hhoin6705_11431208_gVnsv_10.jpg', 'hhoin6705_11431212_bCPVY_11.jpg', 'hhoin6705_11431221_QSrzf_13.jpg', 'hhoin6705_11431247_E1c8D_15.jpg', 'hhoin6705_11431243_pFINz_14.jpg', 'hhoin6705_11431247_E1c8D_15.jpg', 'automatique', 95, ''),
(74, 'SORENTO', 'KIA', 'ModÃ¨le:	SORENTO	AnnÃ©e:	2006\r\nBoÃ®te de vitesse:	AT	Couleur:	WHITE\r\nConduite:	4WD	Porte:	5\r\nVolant:	Left	Nombre de places:	7\r\nStyle de carlingue:	SUV	CylindrÃ©e du moteur:	2,497cc\r\nKilomÃ©trage :	77,417km	Carburant:	DIESEL\r\nCOMMANDE A IMPORTER LE PRIX EST JUSQU\'A GOMA', '5300', 'droit', 5, 5, 'diesel', 'BLANCHE', 'UnKJHGtitled-1.jpg', 'ableglobal_105811129_2Gbw5_3.jpg', 'ableglobal_105811169_OkhnK_7.jpg', 'ableglobal_105811202_ciFHd_10.jpg', 'ableglobal_105811226_RhBLW_13.jpg', 'ableglobal_105811233_Rm6E9_16.jpg', 'ableglobal_105811264_WUT7G_20.jpg', 'ableglobal_105811375_aa9rJ_40.jpg', 'ableglobal_105811355_SwLp7_32.jpg', 'ableglobal_105811339_FJyW6_31.jpg', 'automatique', 95, ''),
(75, 'SPORTAGE', 'KIA', 'KIA SPORTAGE\r\nModel: 2017\r\nExterior: Black\r\nMileage: 20,000 km\r\nSteering: left hand drive\r\nFeatures: \r\nFully loaded\r\nCOMMAQNDE A IMPORTER LE PRIX EST JUSQUA GOMA', '22100', 'gauche', 5, 5, 'essence', 'NOIRE', 'SGSUntitled-1.jpg', 'photo_2020-05-28_18-30-50.jpg', 'photo_2020-05-28_18-30-36.jpg', 'photo_2020-05-28_18-30-30.jpg', 'photo_2020-05-28_18-30-26.jpg', 'photo_2020-05-28_18-30-22.jpg', 'photo_2020-05-28_18-30-19.jpg', 'photo_2020-05-28_18-30-08.jpg', 'photo_2020-05-28_18-30-45.jpg', 'photo_2020-05-28_18-30-22.jpg', 'automatique', 95, ''),
(76, 'E CLASS 2007 E CLASS E350', 'MERCEDES BENZ', 'ModÃ¨le:	E CLASS	AnnÃ©e:	2007\r\nBoÃ®te de vitesse:	AT	Couleur:	\r\nConduite:	FF	Porte:	\r\nVolant:	Left	Nombre de places:	5\r\nStyle de carlingue:	Coupe	CylindrÃ©e du moteur:	3,498cc\r\nKilomÃ©trage :	225,165km	Carburant:	PETROL\r\nCOMMANDE A IMPORTER, LE PRIX EST JUSQU A GOMA', '10450', 'gauche', 5, 5, 'essence', 'METALIQUE', 'UnBEWtitled-1.jpg', 'hhoin6705_134425204_Gi8mz_2.jpg', 'f.jpg', 'hhoin6705_134425212_eZytJ_5.jpg', 'hhoin6705_134425228_bZuPQ_11.jpg', 'hhoin6705_134425275_KxWfw_15.jpg', 'hhoin6705_134425286_ApAaX_19.jpg', 'hhoin6705_134425280_GkMes_17.jpg', 'hhoin6705_134425222_3d8JY_9.jpg', 'hhoin6705_134425277_6t8Qp_16.jpg', 'automatique', 95, ''),
(77, 'TUSCANI 2007', 'HYNDAI', 'ModÃ¨le:	TUSCANI	AnnÃ©e:	2007\r\nBoÃ®te de vitesse:	AT	Couleur:	SILVER\r\nConduite:	FF	Porte:	2\r\nVolant:	Left	Nombre de places:	4\r\nStyle de carlingue:	Coupe	CylindrÃ©e du moteur:	1,975cc\r\nKilomÃ©trage :	142,049km	Carburant:	PETROL\r\nCOMMANDE A IMPORTER.. LE PRIX EST JUSQU\'A GOMA', '5870', 'gauche', 2, 5, 'essence', 'METALIQUE', 'QQQUntitled-1.jpg', 'f.jpg', 'hhoin6705_160639253_iquUi_4.jpg', 'hhoin6705_160639257_Wxcqe_5.jpg', 'hhoin6705_160639261_J3lyD_6.jpg', 'hhoin6705_160639342_lyljo_12.jpg', 'hhoin6705_160639321_tLfeJ_10.jpg', 'hhoin6705_160639418_Oyy51_15.jpg', 'hhoin6705_160639264_iJRFc_7.jpg', 'hhoin6705_160639354_IMxAE_13.jpg', 'automatique', 95, ''),
(79, 'A4', 'AUDI', 'RÃ©fÃ©rence du modÃ¨le:	GH-4FBDW	AnnÃ©e:	2005/3\r\nBoÃ®te de vitesse:	AT	Couleur:	Blue(D)\r\nConduite:	2WD	Porte:	4\r\nVolant:	RHD	SiÃ¨gesâ€‹:	5\r\nType de moteur:	BDW	Style de carlingue:	Sedan\r\nCylindrÃ©e du moteur:	2,390cc	KilomÃ©trage :	130,000km\r\nCarburant:	PETROL	Longueur du corps:	4.91m\r\nPoids Ã  vide:	1,670kg	Poids brut du vÃ©hicule:	1,945kg\r\nCapacitÃ© de chargement maximum:	- kg\r\nCOMMANDE A IMPORTER , LE PRIX EST JUSQU\'A GOMA INCLUS DEDOINEMENT', '5331', 'droit', 4, 5, 'essence', 'NOIRE', 'Untfdyhditled-1.jpg', '4.jpg', '8.jpg', '12.jpg', '13.jpg', '14.jpg', '15.jpg', '20.jpg', '24.jpg', 'r.jpg', 'automatique', 95, ''),
(80, 'A3', 'AUDI', 'RÃ©fÃ©rence du modÃ¨le:	GH-8PBLX	AnnÃ©e:	2005/1\r\nBoÃ®te de vitesse:	AT	Couleur:	Red\r\nConduite:	2WD	Porte:	5\r\nVolant:	RHD	SiÃ¨gesâ€‹:	5\r\nType de moteur:	BLX	Style de carlingue:	Hatchback\r\nCylindrÃ©e du moteur:	1,980cc	KilomÃ©trage :	101,000km\r\nCarburant:	PETROL	Longueur du corps:	4.28m\r\nPoids Ã  vide:	1,430kg	Poids brut du vÃ©hicule:	1,705kg\r\nCOMMANDE A IMPORTER JUSQU\'A GOMA INCLUS DEDOINEMMENT', '5230', 'gauche', 4, 5, 'essence', 'ROUGE', 'UntiTFHXtled-1.jpg', '2.jpg', '4.jpg', '7.jpg', '10.jpg', '15.jpg', '17.jpg', '19.jpg', '23.jpg', '27.jpg', 'automatique', 95, ''),
(81, 'BASE ', 'LEXUS', 'RÃ©fÃ©rence du modÃ¨le:	DAA-GWS191	AnnÃ©e:	2006/11\r\nBoÃ®te de vitesse:	AT	Couleur:	Silver\r\nConduite:	2WD	Porte:	4\r\nVolant:	RHD	SiÃ¨gesâ€‹:	5\r\nType de moteur:	2GR-1KM	Style de carlingue:	Sedan\r\nCylindrÃ©e du moteur:	3,450cc	KilomÃ©trage :	147,000km\r\nCarburant:	HYBRID(PETROL)	Longueur du corps:	4.83m\r\nPoids Ã  vide:	1,890kg	Poids brut du vÃ©hicule:	2,165kg\r\nCOMMANDE A IMPORTER, LE PRIX EST JUSQU\'A GOMA  INCLUS DEDOINEMENT', '5333', 'droit', 4, 5, 'essence', 'METALIQUE', 'USWDGVntitled-1.jpg', '3.jpg', '4.jpg', '6.jpg', '10.jpg', '12.jpg', '13.jpg', '19.jpg', '20.jpg', '24.jpg', 'automatique', 95, ''),
(82, 'SERE 3, 2006', 'BMW', 'ModÃ¨le:	3 SERIES	AnnÃ©e:	2006/3\r\nBoÃ®te de vitesse:	AT	Couleur:	BLACK\r\nConduite:	Other	Porte:	4\r\nVolant:	Right	Nombre de places:	5\r\nStyle de carlingue:	Sedan	CylindrÃ©e du moteur:	1,990cc\r\nKilomÃ©trage :	84,000km	Carburant:	PETROL\r\nNumÃ©ro de chÃ¢ssis	WBAVA76050NK21***	\r\nCOMMANDE A IMPORTER, LE PRIX EST JUSQU\'A GOAM INCLUS DEDOINEMENT', '6420', 'droit', 4, 5, 'essence', 'NOIRE', 'UntitGUJled-1.jpg', '04.jpg', '06.jpg', '08.jpg', '10.jpg', '16.jpg', '17.jpg', '21.jpg', '23.jpg', '26.jpg', 'automatique', 95, ''),
(83, 'TX', 'TOYOTA', 'Chassis #	TRJ120-5145064	Version/Classe	TX LIMITED\r\nSerie	CBA-TRJ120W\r\nTrouvez des piÃ¨ces dÃ©tachÃ©es pour ce modÃ¨le 	KilomÃ©trage	135,071 km\r\nCylindrÃ©e du moteur	2,690cc	Code moteur	2TR\r\nMotricitÃ©	-	Volant	Droite\r\nTransmission	Automatique	Couleur ext.	Perle\r\nEnregistrement\r\nAnnÃ©e/mois	2009/2	Carburant	Essence\r\nFabrication\r\nAnnÃ©e/mois	2009/1	SiÃ¨ges	8\r\nPortes	5\r\nCOMMANDE A IMPORTER , LE PRIX EST JUSQU A GOMA INCLUS DEDOINEMMENT', '13780', 'droit', 5, 5, 'essence', 'BLANCHE', 'TXd-1.jpg', 'BH165695_0d0cf1.jpg', 'BH165695_15fe44.jpg', 'BH165695_56e76b.jpg', 'BH165695_89cefd.jpg', 'BH165695_039790.jpg', 'BH165695_43884c.jpg', 'BH165695_a09827.jpg', 'BH165695_c3ba45.jpg', 'BH165695_d38f6c.jpg', 'automatique', 95, ''),
(84, 'SERIE 5', 'BMW', 'ModÃ¨le:	5 SERIES	AnnÃ©e:	2006\r\nBoÃ®te de vitesse:	AT	Couleur:	SILVER\r\nConduite:	FF	Porte:	4\r\nVolant:	Left	Nombre de places:	5\r\nStyle de carlingue:	Sedan	CylindrÃ©e du moteur:	2,497cc\r\nKilomÃ©trage :	184,917km	Carburant:	PETROL\r\nCOMMANDE A IMPORTER , LE PRIX EST JUSQU A GOMA INCLUS DEDOINEMMENT\r\n', '7560', 'gauche', 4, 5, 'essence', 'METALIQUE', 'UntitlHGEed-1.jpg', 'carwaracom_16201627_ZEZQj_43.jpg', 'carwaracom_16201642_dbXIF_47.jpg', 'carwaracom_162015841_XehOP_2.jpg', 'carwaracom_162015849_QSojd_4.jpg', 'carwaracom_162015885_T5lnU_13.jpg', 'carwaracom_162015917_HrLhO_17.jpg', 'carwaracom_162015984_cN5dT_32.jpg', 'carwaracom_162015992_zLDrD_34.jpg', 'carwaracom_162015961_KppQe_29.jpg', 'automatique', 95, ''),
(85, 'HARRIER', 'TOYOTA', 'RÃ©fÃ©rence du modÃ¨le:	TA-MCU10W	AnnÃ©e:	2000/11\r\nBoÃ®te de vitesse:	AT	Couleur:	\r\nConduite:	2WD	Porte:	5\r\nVolant:	RHD	SiÃ¨gesâ€‹:	5\r\nType de moteur:	1MZ	Style de carlingue:	SUV\r\nCylindrÃ©e du moteur:	2,990cc	KilomÃ©trage :	203,000km\r\nCarburant:	PETROL	Longueur du corps:	4.57m\r\nPoids Ã  vide:	1,630kg	Poids brut du vÃ©hicule:	1,905kg\r\nCOMMANDE A IMPORTER , LE PRIX EST JUSQU A GOMA INCLUS DEDOINEMMENT', '5698', 'droit', 5, 5, 'essence', 'VERTE ,BLANCHE', 'UntWVCitled-1.jpg', '3.jpg', '4.jpg', '8.jpg', '10.jpg', '15.jpg', '17.jpg', '19.jpg', '24.jpg', '26.jpg', 'automatique', 95, ''),
(86, 'HARRIER', 'TOYOTA', 'ModÃ¨le:	HARRIER	AnnÃ©e:	2003/9\r\nBoÃ®te de vitesse:	AT	Couleur:	BLUE\r\nConduite:	FF	Porte:	5\r\nVolant:	Right	Nombre de places:	5\r\nStyle de carlingue:	SUV	CylindrÃ©e du moteur:	2,362cc\r\nKilomÃ©trage :	82,397km	Carburant:	PETROL\r\nNumÃ©ro de chÃ¢ssis	ACU30-0011***	\r\nCOMMANDE A IMPORTER , LE PRIX EST JUSQU A GOMA INCLUS DEDOINEMMENT', '8430', 'gauche', 5, 5, 'essence', 'BLEU', 'UntQDQitled-1.jpg', '6b319c8a5f450e683f1aaa4df11ee03e.jpg', '3b4d06406b4fd66963ad6052e00ead7f.jpg', '7d53839a94e6d6b3b8c05754849c711b.jpg', '65accc5e10c713fee47fbfb3952d2fd0.jpg', '471b270d48f44bf5dc297d98f5e8df99.jpg', 'a53d7a6a6b926542b3f7e9aa275baf0e.jpg', 'bc32dbd441b7f3189f9fcd2ad14bb81a.jpg', 'ccea0e5335a743d2496986db70a62923.jpg', 'fdf9cbfaa08f314074612d3c1154601b.jpg', 'automatique', 95, ''),
(87, 'HILUX PICK UP', 'TOYOTA', 'Chassis #	LN1070023800	Version/Classe	\r\nSerie	0	KilomÃ©trage	241,500 km\r\nCylindrÃ©e du moteur	2,800cc	Code moteur	-\r\nMotricitÃ©	4wheel drive	Volant	Droite\r\nTransmission	Manuelle	Couleur ext.	Gris\r\nEnregistrement\r\nAnnÃ©e/mois	1995/10	Carburant	Diesel\r\nFabrication\r\nAnnÃ©e/mois	-	SiÃ¨ges	5\r\nPortes	4\r\nCOMMANDE A IMPORTER , LE PRIX EST JUSQU A GOMA INCLUS DEDOINEMMENT', '12530', 'droit', 4, 5, 'diesel', 'METALIQUE', 'HILUXUntitled-1.jpg', 'BG856376_3cf052.jpeg', 'BG856376_9f3e3a.jpeg', 'BG856376_17d0f4.jpeg', 'BG856376_968e85.jpeg', 'BG856376_3265d6.jpeg', 'BG856376_498567.jpeg', 'BG856376_a9a94e.jpeg', 'BG856376_b59a87.jpeg', 'BG856376_cb8272.jpeg', 'manuel', 95, ''),
(88, 'SURF HILUX', 'TOYOTA', 'RÃ©fÃ©rence du modÃ¨le:	CBA-TRN215W	AnnÃ©e:	2005/4\r\nBoÃ®te de vitesse:	AT	Couleur:	Black\r\nConduite:	4WD	Porte:	5\r\nVolant:	RHD	SiÃ¨gesâ€‹:	5\r\nType de moteur:	2TR	Style de carlingue:	SUV\r\nCylindrÃ©e du moteur:	2,690cc	KilomÃ©trage :	133,000km\r\nCarburant:	PETROL	Longueur du corps:	4.77m\r\nPoids Ã  vide:	1,840kg	Poids brut du vÃ©hicule:	2,115kg\r\nCOMMANDE A IMPORTER , LE PRIX EST JUSQU A GOMA INCLUS DEDOINEMMENT', '9903', 'droit', 5, 5, 'essence', 'NOIRE', 'Untitqszsygled-1.jpg', '2.jpg', '4.jpg', '5.jpg', '8.jpg', '11.jpg', '16.jpg', '17.jpg', '21.jpg', '25.jpg', 'automatique', 95, ''),
(89, 'SURF HILUX', 'TOYOTA', 'RÃ©fÃ©rence du modÃ¨le:	CBA-TRN215W	AnnÃ©e:	2005/7\r\nBoÃ®te de vitesse:	AT	Couleur:	Gray\r\nConduite:	4WD	Porte:	5\r\nVolant:	RHD	SiÃ¨gesâ€‹:	5\r\nType de moteur:	2TR	Style de carlingue:	SUV\r\nCylindrÃ©e du moteur:	2,690cc	KilomÃ©trage :	114,000km\r\nCarburant:	PETROL	Longueur du corps:	4.77m\r\nPoids Ã  vide:	1,830kg	Poids brut du vÃ©hicule:	2,105kg\r\nCOMMANDE A IMPORTER , LE PRIX EST JUSQU A GOMA INCLUS DEDOINEMMENT', '9763', 'droit', 5, 5, 'essence', 'BLEU', 'UntitlSEEFed-1.jpg', '3.jpg', '4.jpg', '22.jpg', '6.jpg', '8.jpg', '11.jpg', '13.jpg', '14.jpg', '17.jpg', 'automatique', 95, ''),
(90, 'SURF HILUX', 'TOYOTA', 'RÃ©fÃ©rence du modÃ¨le:	LA-RZN215W	AnnÃ©e:	2002/12\r\nBoÃ®te de vitesse:	AT	Couleur:	Silver\r\nConduite:	4WD	Porte:	5\r\nVolant:	RHD	SiÃ¨gesâ€‹:	5\r\nType de moteur:	3RZ	Style de carlingue:	SUV\r\nCylindrÃ©e du moteur:	2,690cc	KilomÃ©trage :	170,000km\r\nCarburant:	PETROL	Longueur du corps:	4.77m\r\nPoids Ã  vide:	1,880kg	Poids brut du vÃ©hicule:	2,155kg\r\nCOMMANDE A IMPORTER , LE PRIX EST JUSQU A GOMA INCLUS DEDOINEMMENT', '10084', 'droit', 5, 5, 'essence', 'METALIQUE', 'UnSFRStitled-1.jpg', '30.jpg', '41.jpg', '42.jpg', '43.jpg', '48.jpg', '51.jpg', '143.jpg', '180.jpg', '181.jpg', 'automatique', 95, ''),
(91, 'VITZ', 'TOYOTA', 'DISPONIBLE A GOMA', '3620', 'droit', 5, 5, 'essence', 'NOIRE', 'UnDDCHtitled-1.jpg', 'photo_2020-05-29_12-02-20.jpg', 'photo_2020-05-29_12-02-16.jpg', 'photo_2020-05-29_12-02-12.jpg', 'photo_2020-05-29_12-02-02.jpg', 'photo_2020-05-29_12-02-24.jpg', 'photo_2020-05-29_12-02-20.jpg', 'photo_2020-05-29_12-02-16.jpg', 'photo_2020-05-29_12-02-12.jpg', 'photo_2020-05-29_12-02-02.jpg', 'automatique', 95, ''),
(92, 'RAV4', 'TOYOTA', 'DISPONIBLE A GOMA', '2920', 'droit', 5, 5, 'essence', 'BLEU', 'UDXGDntitled-1.jpg', 'photo_2020-05-29_12-09-10.jpg', 'photo_2020-05-29_12-09-07.jpg', 'photo_2020-05-29_12-09-01.jpg', 'photo_2020-05-29_12-08-58.jpg', 'photo_2020-05-29_12-08-54.jpg', 'photo_2020-05-29_12-08-50.jpg', 'photo_2020-05-29_12-08-50.jpg', 'photo_2020-05-29_12-09-10.jpg', 'photo_2020-05-29_12-09-04.jpg', 'automatique', 95, ''),
(93, 'VANGUARD', 'TOYOTA', 'ModÃ¨le:	VANGUARD	AnnÃ©e:	2007/11\r\nBoÃ®te de vitesse:	AT	Couleur:	BLACK\r\nConduite:	4WD	Porte:	5\r\nVolant:	Right	Nombre de places:	7\r\nStyle de carlingue:	SUV	CylindrÃ©e du moteur:	2,362cc\r\nKilomÃ©trage :	148,924km	Carburant:	PETROL\r\nCOMMANDE A IMPORTER , LE PRIX EST JUSQU A GOMA INCLUS DEDOINEMMENT', '8075', 'droit', 5, 5, 'essence', 'NOIRE', 'UntiAQZQFtled-1.jpg', '8fda983545038511f72be3bd319d56d6.jpg', '9c3ce5041b39c24531012c0197a0fb8a.jpg', 'b79c401437d44bed11076a4c86db9c6e.jpg', '3479840201c3df44501b9377114aac3d.jpg', '672a8f66e5091d3f297e6440021a7d79.jpg', 'bbcb5d4cee40f504b540861b801b170f.jpg', 'cc7b1baa69f12064039a2650d4601784.jpg', 'daeea40d2e632079c50789316fd96e0b.jpg', 'f.jpg', 'automatique', 95, ''),
(94, 'RAV4', 'TOYOTA', 'ModÃ¨le:	RAV4	AnnÃ©e:	2007/6\r\nBoÃ®te de vitesse:	AT	Couleur:	RED\r\nConduite:	FF	Porte:	5\r\nVolant:	Right	Nombre de places:	5\r\nStyle de carlingue:	SUV	CylindrÃ©e du moteur:	2,362cc\r\nKilomÃ©trage :	120,000km	Carburant:	PETROL\r\nCOMMANDE A IMPORTER , LE PRIX EST JUSQU A GOMA INCLUS DEDOINEMMENT', '7995', 'gauche', 5, 5, 'essence', 'ROUGE', 'ROUntitled-1.jpg', '0f4368929191aa5142500af592a49f5f.jpg', '8edbc7fc9931063ae3b259ff11b733f2.jpg', '475ca015a05d15a44b61f87f3fb08ca9.jpg', '497cc3b27b1bf77ae92af2ba348f5b96.jpg', '5369a6d42173419ae616df0b6c324f22.jpg', 'af1c36964d493f154343761807156fb8.jpg', 'b50c45af581d1ecf55579ffac6acf28f.jpg', 'bf11f7dae26866e674643cf72a428f22.jpg', 'r.jpg', 'automatique', 95, ''),
(95, 'RAV4', 'TOYOTA', 'ModÃ¨le:	RAV4	AnnÃ©e:	2007/12\r\nBoÃ®te de vitesse:	AT	Couleur:	BLACK\r\nConduite:	FF	Porte:	5\r\nVolant:	Right	Nombre de places:	5\r\nStyle de carlingue:	SUV	CylindrÃ©e du moteur:	2,362cc\r\nKilomÃ©trage :	136,435km	Carburant:	PETROL\r\nNumÃ©ro de chÃ¢ssis	ACA36-5018***	\r\nCOMMANDE A IMPORTER , LE PRIX EST JUSQU A GOMA INCLUS DEDOUANEMMENT', '7320', 'droit', 5, 5, 'essence', 'NOIRE', 'aaUntitled-1.jpg', '7ac2c672d0c949feea56dca22d17bd71.jpg', '807e7ffffb6a719acf1c80be4dd50081.jpg', '7619b8565b4262a38e25a9ba543660d5.jpg', '8269dab0653a4373faf6bf55add5634b.jpg', 'c892e524e92dc4954672a8ddce7c5879.jpg', 'c11953db73b22405b1d9456c71eafa05.jpg', 'd36bd89a01900fb45c69f7293d3c571b.jpg', 'e5f69d3e595d3c9f2baa6000bfb9a8ff.jpg', 'f506d22b085a7adeaa15b36a55d3e4a8.jpg', 'automatique', 95, ''),
(96, 'NOAH', 'TOYOTA', 'DISPONIBLE A GOMA', '5490', 'droit', 5, 8, 'essence', 'METALIQUE', 'AAAAAAUntitled-1.jpg', 'photo_2020-05-29_14-31-37.jpg', 'photo_2020-05-29_14-31-33.jpg', 'photo_2020-05-29_14-31-25.jpg', 'photo_2020-05-29_14-31-20.jpg', 'photo_2020-05-29_14-31-16.jpg', 'photo_2020-05-29_14-31-12.jpg', 'photo_2020-05-29_14-31-02.jpg', 'photo_2020-05-29_14-31-08.jpg', 'photo_2020-05-29_14-31-25.jpg', 'automatique', 95, ''),
(97, 'TX', 'TOYOTA', 'Chassis #	RZJ120-0008860	Version/Classe	TX\r\nSerie	LA-RZJ120W\r\nTrouvez des piÃ¨ces dÃ©tachÃ©es pour ce modÃ¨le 	KilomÃ©trage	143,273 km\r\nCylindrÃ©e du moteur	2,690cc	Code moteur	3RZ\r\nMotricitÃ©	4wheel drive	Volant	Droite\r\nTransmission	Automatique	Couleur ext.	Perle\r\nEnregistrement\r\nAnnÃ©e/mois	2003/3	Carburant	Essence\r\nFabrication\r\nAnnÃ©e/mois	-	SiÃ¨ges	8\r\nPortes	5', '11920', 'gauche', 5, 5, 'essence', 'BLANCHE', 'mervUntitled-1.jpg', 'photo_2020-06-06_15-21-23.jpg', 'photo_2020-06-06_15-21-20.jpg', 'photo_2020-06-06_15-21-16.jpg', 'photo_2020-06-06_15-21-12.jpg', 'photo_2020-06-06_15-21-09.jpg', 'photo_2020-06-06_15-21-04.jpg', 'photo_2020-06-06_15-21-00.jpg', 'photo_2020-06-06_15-20-55.jpg', 'photo_2020-06-06_15-20-34.jpg', 'automatique', 95, ''),
(98, 'VANETTE', 'TOYOTA', 'DISPONIBLE A GOMA EN VENTE', '3720', 'gauche', 5, 5, 'essence', 'BLANCHE', 'photo_2020-06-06_15-56-33.jpg', 'photo_2020-06-06_15-56-12.jpg', 'photo_2020-06-06_15-56-29.jpg', 'photo_2020-06-06_15-56-36.jpg', 'photo_2020-06-06_15-56-40.jpg', 'photo_2020-06-06_15-56-43.jpg', 'photo_2020-06-06_15-56-46.jpg', 'photo_2020-06-06_15-56-49.jpg', 'photo_2020-06-06_15-56-40.jpg', 'photo_2020-06-06_15-56-33.jpg', 'manuel', 95, ''),
(99, 'TX PRADO', 'TOYOTA', 'DISPONIBLE A GOMA', '11250', 'gauche', 5, 5, 'essence', 'METALIQUE', 'photo_2020-06-06_16-00-40.jpg', 'photo_2020-06-06_16-00-14.jpg', 'photo_2020-06-06_16-00-17.jpg', 'photo_2020-06-06_16-00-20.jpg', 'photo_2020-06-06_16-00-24.jpg', 'photo_2020-06-06_16-00-31.jpg', 'photo_2020-06-06_16-00-34.jpg', 'photo_2020-06-06_16-00-37.jpg', 'photo_2020-06-06_16-00-40.jpg', 'photo_2020-06-06_16-00-27.jpg', 'automatique', 95, ''),
(100, 'YARRIS', 'TOYOTA', 'Year: 2015\r\nEngine: 1300 cc\r\nCar type: Hatch back\r\nSeats: 5\r\nSpecs: GCC \r\nTransmission: Automatic \r\nMileage: 85000 \r\nSteering: left hand side\r\nCOMMANDE A IMPORTER\r\nLE PRIX EST JUSQU\'A GOMA, INCLUS DEDOUANEMEMENT', '14300', 'gauche', 5, 5, 'essence', 'BLANCHE', 'photo_2020-06-06_16-14-05.jpg', 'photo_2020-06-06_16-14-02.jpg', 'photo_2020-06-06_16-13-59.jpg', 'photo_2020-06-06_16-13-56.jpg', 'photo_2020-06-06_16-13-53.jpg', 'photo_2020-06-06_16-13-49.jpg', 'photo_2020-06-06_16-13-47.jpg', 'photo_2020-06-06_16-14-05.jpg', 'photo_2020-06-06_16-13-59.jpg', 'photo_2020-06-06_16-13-53.jpg', 'automatique', 95, ''),
(101, 'HIACE VAN', 'TOYOTA', 'DISPONIBLE A GOMA', '12110', 'droit', 5, 16, 'essence', 'BLANCHE', 'photo_2020-06-06_16-20-27.jpg', 'photo_2020-06-06_16-20-23.jpg', 'photo_2020-06-06_16-20-30.jpg', 'photo_2020-06-06_16-20-34.jpg', 'photo_2020-06-06_16-20-42.jpg', 'photo_2020-06-06_16-20-38.jpg', 'photo_2020-06-06_16-20-46.jpg', 'photo_2020-06-06_16-20-49.jpg', 'photo_2020-06-06_16-20-53.jpg', 'photo_2020-06-06_16-20-27.jpg', 'manuel', 95, ''),
(102, 'VITZ', 'TOYOTA', 'DISPONIBLE A GOMA', '3720', 'droit', 5, 5, 'essence', 'BLEU', 'photo_2020-06-06_16-28-49.jpg', 'photo_2020-06-06_16-28-53.jpg', 'photo_2020-06-06_16-28-56.jpg', 'photo_2020-06-06_16-29-00.jpg', 'photo_2020-06-06_16-29-04.jpg', 'photo_2020-06-06_16-28-49.jpg', 'photo_2020-06-06_16-28-53.jpg', 'photo_2020-06-06_16-28-56.jpg', 'photo_2020-06-06_16-29-00.jpg', 'photo_2020-06-06_16-28-49.jpg', 'automatique', 95, ''),
(105, 'LAND CRUISER', 'TOYOTA', 'TOYOTA LAND CRUISER (FACELIFT 2020)\r\nYear: 2015\r\nWheels:20Â´\r\nColor:White\r\nCar type:SUV/Crossover\r\nKilometers:18,000\r\nExport status:Can be exported\r\nSpecs:GCC\r\nGearbox:Automatic\r\nFuel:petrol\r\nSeats:8\r\nCylinders:8\r\nInterior:Beige\r\nFEATURES\r\nFully loaded/equipped\r\n\r\nCNF price is $36,000 up to your port\r\nNote: due to COVID situation, we place orders with initial payment & remaining on 2 installments.\r\nLE PRIX EST JUSQU\'A GOMA INCLUS DEDOUANEMMENT', '41131', 'gauche', 5, 5, 'essence', 'NOIRE', 'WC.jpg', 'photo_2020-06-06_16-32-17.jpg', 'photo_2020-06-06_16-32-13.jpg', 'photo_2020-06-06_16-32-13.jpg', 'photo_2020-06-06_16-32-10.jpg', 'photo_2020-06-06_16-32-07.jpg', 'photo_2020-06-06_16-32-03.jpg', 'photo_2020-06-06_16-32-03.jpg', 'photo_2020-06-06_16-31-59.jpg', 'photo_2020-06-06_16-32-24.jpg', 'automatique', 95, ''),
(106, 'CAYENNE', 'PORSHE', 'Serie	9PA00\r\nTrouvez des piÃ¨ces dÃ©tachÃ©es pour ce modÃ¨le 	KilomÃ©trage	74,700 km\r\nCylindrÃ©e du moteur	4,500cc	Code moteur	-\r\nMotricitÃ©	2wheel drive	Volant	Gauche\r\nTransmission	Automatique	Couleur ext.	Argent\r\nEnregistrement\r\nAnnÃ©e/mois	2006/6	Carburant	Essence\r\nFabrication\r\nAnnÃ©e/mois	N/A	SiÃ¨ges	5\r\nPortes	5\r\nEN VENTE DISPONIBLE A GOMA', '11720', 'gauche', 5, 5, 'essence', 'NOIRE', ',ervvvvvvvvvvv.jpg', 'photo_2020-06-08_16-23-58.jpg', 'photo_2020-06-08_16-24-01.jpg', 'photo_2020-06-08_16-24-05.jpg', 'photo_2020-06-08_16-24-08.jpg', 'photo_2020-06-08_16-24-12.jpg', 'photo_2020-06-08_16-24-16.jpg', 'photo_2020-06-08_16-24-19.jpg', 'photo_2020-06-08_16-24-19.jpg', 'photo_2020-06-08_16-24-22.jpg', 'automatique', 95, '');

-- --------------------------------------------------------

--
-- Table structure for table `_cst_lve_comment_`
--

CREATE TABLE `_cst_lve_comment_` (
  `_id_` int(11) NOT NULL,
  `_name_cst_` varchar(60) NOT NULL,
  `_mail_cst_` varchar(60) NOT NULL,
  `_comment_cst_` text NOT NULL,
  `_time_stamp_` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `_cst_lve_comment_`
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
(11, 'za', 'zaza@gmail.com', 'zaxscdxs', '2020-02-22 15:56:18'),
(12, 'david', 'davidmened@gmail.com', 'je suis le meilleur de tous les gens qui me suivent jes sais', '2020-05-15 11:45:17'),
(13, 'david', 'davidmened@gmail.com', 'still testing comment', '2020-05-15 11:57:50'),
(14, 'merveil', 'mervajazz@gmail.com', 'beau vehicule', '2020-05-15 11:59:00');

-- --------------------------------------------------------

--
-- Table structure for table `_customer_`
--

CREATE TABLE `_customer_` (
  `_cst_id` int(11) NOT NULL,
  `_cst_fst_name_` varchar(60) NOT NULL,
  `_cst_lst_name_` varchar(60) NOT NULL,
  `_cst_mail_` varchar(60) NOT NULL,
  `_cst_phone_` varchar(60) NOT NULL,
  `_cst_password_` varchar(60) NOT NULL,
  `_cst_tkn` varchar(32) NOT NULL,
  `_cst_isActivated` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `_customer_`
--

INSERT INTO `_customer_` (`_cst_id`, `_cst_fst_name_`, `_cst_lst_name_`, `_cst_mail_`, `_cst_phone_`, `_cst_password_`, `_cst_tkn`, `_cst_isActivated`) VALUES
(1, 'david', 'maene', 'davidmened@gmail.com', '0970284772', '353a3f847836d20d967d753afe88ccb7', '090d80727ba2051557f776b023c20a7f', 1),
(2, 'joel', 'hyawehinyi', 'joelhyawehinyi@gmail.com', '+243977668457', 'b6a428dc1af936b95a52a2f995668311', '1fe467ccb1b1216910c7766703f2189a', 1),
(6, 'david', 'maene', 'maene.david.d@gmail.com', '0970284772', '59823a850e74cea1dd69c9c08373db93', '090d80727ba2051557f776b023c20a7f', 1),
(7, 'Mugisho', 'Baderhakuguma', 'red21gideon@gmail.com', '+243975784405', 'b1e0e5886457d8401fec750a112f5010', '0ab1529769cf9f654ca091c3cf168938', 1),
(8, 'merveil', 'jazz', 'mervajazz@gmail.com', '+243974739246', '867d03b7380c2f6bc7defb93721a72a7', '5204ea5bd4985753b4214538836538f4', 0),
(9, 'merveil', 'jazz', 'lesmilleservices@gmail.com', '+243974739246', '867d03b7380c2f6bc7defb93721a72a7', '5204ea5bd4985753b4214538836538f4', 0),
(10, 'merveil', 'jazz', 'necabi1924@tashjw.com', '+243974739246', '353a3f847836d20d967d753afe88ccb7', '5204ea5bd4985753b4214538836538f4', 0),
(11, 'Alain', 'Karasha', 'alainkarasha5@gmail.com', '+243976578007', '573f7faaa977bce4718d42313078c0a5', '5822598ba13bcfd7bf9fd140a9df010d', 0),
(12, 'Aganze', 'Hyawehinyi', 'hyawehinyi@gmail.com', '0995451125', '785e6d89d36f695e145ae34066a340ef', 'b30dfc718af348565b003aa7ca2d7500', 0),
(13, 'kawede', 'ezechiel', 'ezechielkawede12@gmail.com', '+243977743843', 'e7a59568d630b0f14ca77f6e987ded68', 'ff1012ede5d3ffb26ff5c8df8c4a5ab1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `_favorites`
--

CREATE TABLE `_favorites` (
  `id` int(11) NOT NULL,
  `idUser` varchar(32) NOT NULL,
  `idCar` int(11) NOT NULL,
  `_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `_historique`
--

CREATE TABLE `_historique` (
  `id` int(11) NOT NULL,
  `idUser` varchar(32) NOT NULL,
  `idCar` int(11) NOT NULL,
  `_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `_historique`
--

INSERT INTO `_historique` (`id`, `idUser`, `idCar`, `_date`) VALUES
(7, '7577ce0e91fa158407193843869ca855', 39, '2020-07-07 10:38:19'),
(9, '7577ce0e91fa158407193843869ca855', 32, '2020-07-07 10:39:03'),
(10, '7577ce0e91fa158407193843869ca855', 29, '2020-07-07 10:39:17'),
(12, '7577ce0e91fa158407193843869ca855', 11, '2020-07-07 11:28:51'),
(13, '7577ce0e91fa158407193843869ca855', 75, '2020-07-07 11:29:35'),
(14, '7577ce0e91fa158407193843869ca855', 25, '2020-07-07 11:29:57'),
(17, 'a19017a33e1e5b46f07d551265e8c338', 74, '2020-07-07 12:39:55'),
(18, '680c835f2c251384112d0aba517d6f2a', 106, '2020-07-07 12:41:17'),
(19, 'a19017a33e1e5b46f07d551265e8c338', 106, '2020-07-07 12:46:56'),
(21, 'a19017a33e1e5b46f07d551265e8c338', 105, '2020-07-07 12:59:53'),
(22, '49075febf3ab21bf19b53b0420ed767f', 27, '2020-07-07 14:16:28'),
(23, '49075febf3ab21bf19b53b0420ed767f', 46, '2020-07-07 14:16:38'),
(24, '49075febf3ab21bf19b53b0420ed767f', 14, '2020-07-07 14:17:01'),
(25, 'aa40133b4888fd6dabbab17a65f48ac1', 27, '2020-07-07 14:20:14'),
(26, 'aa40133b4888fd6dabbab17a65f48ac1', 43, '2020-07-07 14:20:27'),
(27, '0', 55, '2020-07-07 14:23:14'),
(28, '6e27df0d254721736e3526a742b23388', 106, '2020-07-07 14:26:19'),
(29, '680c835f2c251384112d0aba517d6f2a', 73, '2020-07-07 14:37:38'),
(30, '680c835f2c251384112d0aba517d6f2a', 32, '2020-07-07 14:41:41'),
(31, '680c835f2c251384112d0aba517d6f2a', 35, '2020-07-07 14:43:54'),
(32, 'aa40133b4888fd6dabbab17a65f48ac1', 28, '2020-07-07 14:53:35'),
(33, '680c835f2c251384112d0aba517d6f2a', 12, '2020-07-07 14:54:04'),
(34, '680c835f2c251384112d0aba517d6f2a', 27, '2020-07-07 14:54:18'),
(35, '680c835f2c251384112d0aba517d6f2a', 42, '2020-07-07 14:54:50'),
(40, '680c835f2c251384112d0aba517d6f2a', 39, '2020-07-07 16:29:07'),
(41, '0', 96, '2020-07-07 16:58:52'),
(42, '0', 65, '2020-07-07 17:51:58'),
(44, '0', 1, '2020-07-07 18:56:58'),
(45, '0', 58, '2020-07-07 19:02:25'),
(63, '0', 2147483647, '2020-07-08 04:39:50'),
(71, '0', 11999999, '2020-07-08 04:39:56'),
(73, '0', 1199999, '2020-07-08 04:39:57'),
(76, '0', 11, '2020-07-08 04:39:59'),
(77, '0', 60, '2020-07-08 08:22:50'),
(78, '0', 18, '2020-07-08 08:24:13'),
(79, '0', 41, '2020-07-08 08:24:14'),
(81, '0', 29, '2020-07-08 08:24:15'),
(82, '0', 25, '2020-07-08 08:24:16'),
(83, '0', 39, '2020-07-08 08:24:19'),
(84, '0', 32, '2020-07-08 08:24:19'),
(85, '0', 27, '2020-07-08 08:24:20'),
(87, '0', 24, '2020-07-08 08:24:22'),
(89, '0', 14, '2020-07-08 08:24:26'),
(91, '0', 12, '2020-07-08 08:24:29'),
(92, '0', 38, '2020-07-08 08:24:30'),
(93, '0', 23, '2020-07-08 08:24:31'),
(94, '0', 45, '2020-07-08 08:24:32'),
(95, '0', 34, '2020-07-08 08:24:33'),
(97, '0', 42, '2020-07-08 08:24:38'),
(98, '0', 43, '2020-07-08 08:24:38'),
(99, '0', 44, '2020-07-08 08:24:40'),
(100, '0', 46, '2020-07-08 08:24:41'),
(101, '0', 28, '2020-07-08 08:24:43'),
(102, '0', 106, '2020-07-08 08:24:44'),
(103, '0', 68, '2020-07-08 09:37:41'),
(104, '0', 31, '2020-07-08 10:06:37'),
(105, '49075febf3ab21bf19b53b0420ed767f', 24, '2020-07-08 10:36:05'),
(106, '0', 56, '2020-07-08 12:23:32'),
(107, '0', 36, '2020-07-08 13:42:21'),
(108, '0', 40, '2020-07-08 13:42:22'),
(109, '0', 35, '2020-07-08 13:42:23'),
(110, '0', 101, '2020-07-08 13:42:24'),
(111, '0', 85, '2020-07-08 13:42:26'),
(112, '0', 97, '2020-07-08 13:42:26'),
(113, '0', 94, '2020-07-08 13:42:27'),
(114, '0', 77, '2020-07-08 13:42:27'),
(115, '0', 82, '2020-07-08 13:42:28'),
(116, '0', 33, '2020-07-08 13:42:28'),
(117, '680c835f2c251384112d0aba517d6f2a', 41, '2020-07-08 15:12:39'),
(118, '680c835f2c251384112d0aba517d6f2a', 29, '2020-07-08 15:58:29');

-- --------------------------------------------------------

--
-- Table structure for table `_lease_table`
--

CREATE TABLE `_lease_table` (
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
  `img9` text NOT NULL,
  `transmition` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `_lease_table`
--

INSERT INTO `_lease_table` (`id`, `model`, `marque`, `description`, `carInterchangeable`, `volant`, `portes`, `siege`, `carburant`, `coleur`, `imgPricipale`, `img1`, `img2`, `img3`, `img4`, `img5`, `img6`, `img7`, `img8`, `img9`, `transmition`) VALUES
(3, 'Testing', 'testing', 'je suis entrain de tester l\'ajout du produit bata', '57575', 'gauche', 433, 23, 'essence', 'testting color', 'bkg-blu.jpg', 'bkg-blu.jpg', 'iis.png', 'bkg-blu.jpg', 'iis.png', 'iis.png', 'bkg-blu.jpg', 'bkg-blu.jpg', 'bkg-blu.jpg', 'bkg-blu.jpg', 'automatique'),
(4, 'Testing', 'testing', 'still testing bata car', '57575', 'gauche', 8, 5, 'essence', 'testing color', 'BG811081_4c3e63.jpg', 'BG811081_852afb.jpg', '_bx_assoc_imgs_BG811081_a55f25.jpg', 'BG811081_eba875.jpg', '_bx_assoc_imgs_BG811081_a55f25.jpg', '_bx_assoc_imgs_BG811081_eba875.jpg', '_bx_assoc_imgs_BG811081_a55f25.jpg', '_bx_assoc_imgs_BG811081_eba875.jpg', 'BG811081_852afb.jpg', '_bx_assoc_imgs_BG811646_2a120a.jpg', 'automatique');

-- --------------------------------------------------------

--
-- Table structure for table `_news_letter_`
--

CREATE TABLE `_news_letter_` (
  `_id_` int(11) NOT NULL,
  `_cst_mail_` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `_news_letter_`
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
(39, 'davidmened@gmail.com'),
(40, 'mulondajean94@gmail.com'),
(42, 'mervajazz@gmail.com'),
(43, 'red21gideon@gmail.com'),
(44, 'red21gideon@gmail.com'),
(45, 'red21gideon@gmail.com'),
(46, 'davidmened@gmail.com'),
(47, 'red21gideon@gmail.com'),
(48, 'davidmened@gmail.com'),
(50, 'davidmened@gmail.com'),
(51, 'davidmened@gmail.com'),
(52, 'davidmened@gmail.com'),
(53, 'red21gideon@gmail.com'),
(54, 'davidmened@gmail.com'),
(55, 'davidmened@gmail.com'),
(56, 'davidmened@gmail.com'),
(57, 'mervajazz@gmail.com'),
(58, 'joelhyawehinyi@gmail.com'),
(59, 'davidmened@gmail.com'),
(60, 'davidmened@gmail.com'),
(61, 'davidmened@gmail.com'),
(62, 'davidmened@gmail.com'),
(63, 'davidmened@gmail.com'),
(64, 'davidmened@gmail.com'),
(65, 'davidmened@gmail.com'),
(66, 'davidmened@gmail.com'),
(67, 'davidmened@gmail.com'),
(68, 'davidmened@gmail.com'),
(69, 'mervajazz@gmail.com'),
(70, 'davidmened@gmail.com'),
(71, 'davidmened@gmail.com'),
(72, 'davidmened@gmail.com'),
(73, 'kayembejoelle11@gmail.com'),
(74, 'davidmened@gmail.com'),
(75, 'red21gideon@gmail.com'),
(76, 'kawedeezechiele@gmail.com'),
(77, 'davidmaene@lesmilleservices.com'),
(78, 'davidmened@gmail.com'),
(79, 'davidmened@gmail.com'),
(80, 'davidmened@gmail.com'),
(81, 'davidmened@gmail.com'),
(82, 'davidmened@gmail.com'),
(83, 'davidmened@gmail.com'),
(84, 'davidmened@gmail.com'),
(85, 'davidmened@gmail.com'),
(86, 'davidmened@gmail.com'),
(87, 'davidmened@gmail.com'),
(88, 'davidmened@gmail.com'),
(89, 'davidmened@gmail.com'),
(90, 'Ubunturdc@gmail.com'),
(91, 'ubunturdc@gmail.com'),
(92, 'hyawehinyi@gmail.com'),
(93, 'hyawehinyi@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `_prd_commande_`
--

CREATE TABLE `_prd_commande_` (
  `_cmmd_id_` int(11) NOT NULL,
  `_cmmd_ctgrie_` int(11) NOT NULL,
  `_cmmd_id_prd_` int(11) NOT NULL,
  `_cmmd_id_cstmer_` varchar(100) NOT NULL,
  `_cmmd_timestamp_` timestamp NOT NULL DEFAULT current_timestamp(),
  `_refCar` varchar(60) NOT NULL,
  `_isAct` int(11) NOT NULL,
  `_couponFile` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `_prd_commande_`
--

INSERT INTO `_prd_commande_` (`_cmmd_id_`, `_cmmd_ctgrie_`, `_cmmd_id_prd_`, `_cmmd_id_cstmer_`, `_cmmd_timestamp_`, `_refCar`, `_isAct`, `_couponFile`) VALUES
(1, 95, 60, '02e74f10e0327ad868d138f2b4fdd6f0', '2020-05-26 14:26:53', 'MM-LM1000-60-G4W-L60', 1, 'Lettre de motivation Alicia.pdf'),
(2, 95, 28, 'c16a5320fa475530d9583c34fd356ef5', '2020-05-27 12:06:24', '', 0, ''),
(3, 95, 77, 'c16a5320fa475530d9583c34fd356ef5', '2020-05-29 11:03:19', 'TH-LM1000-77-G4W-L77', 1, 'photo_2020-05-19_10-25-24.jpg'),
(4, 95, 90, 'c16a5320fa475530d9583c34fd356ef5', '2020-05-29 11:06:01', 'ST-LM1000-90-G4W-L90', 1, 'photo_2020-05-19_10-48-55.jpg'),
(5, 95, 80, '02e74f10e0327ad868d138f2b4fdd6f0', '2020-05-29 11:08:49', 'AA-LM1000-80-G4W-L80', 1, 'factures orange.pdf'),
(6, 84, 11, '02e74f10e0327ad868d138f2b4fdd6f0', '2020-05-29 11:11:28', '', 0, ''),
(7, 95, 82, 'c16a5320fa475530d9583c34fd356ef5', '2020-05-29 11:18:00', 'SB-LM1000-82-G4W-L82', 1, 'photo_2020-05-19_10-25-43.jpg'),
(8, 95, 85, 'c16a5320fa475530d9583c34fd356ef5', '2020-05-29 11:25:53', 'HT-LM1000-85-G4W-L85', 1, 'photo_2020-05-19_11-24-00.jpg'),
(9, 95, 91, '02e74f10e0327ad868d138f2b4fdd6f0', '2020-06-03 09:21:03', '', 0, ''),
(10, 95, 101, 'c4ca4238a0b923820dcc509a6f75849b', '2020-06-08 12:21:05', '', 0, ''),
(11, 95, 93, 'c4ca4238a0b923820dcc509a6f75849b', '2020-06-08 12:47:05', '', 0, ''),
(12, 95, 106, 'c81e728d9d4c2f636f067f89cc14862c', '2020-06-09 11:07:41', '', 0, ''),
(13, 95, 106, 'c4ca4238a0b923820dcc509a6f75849b', '2020-06-09 15:55:17', '', 0, ''),
(14, 95, 32, 'c81e728d9d4c2f636f067f89cc14862c', '2020-07-02 15:20:27', '', 0, ''),
(15, 95, 39, 'c81e728d9d4c2f636f067f89cc14862c', '2020-07-02 15:22:26', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `_prd_detail_`
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
-- Dumping data for table `_prd_detail_`
--

INSERT INTO `_prd_detail_` (`_iddetail_`, `_face_1`, `_face_2`, `_face_3`, `_face_4`, `_id_produit`, `_prd_categorie_`) VALUES
(21, 'WhatsApp Image 2020-05-07 at 11.27.55 (1).jpeg', 'WhatsApp Image 2020-05-07 at 11.27.55.jpeg', 'WhatsApp Image 2020-05-07 at 11.29.38.jpeg', 'WhatsApp Image 2020-05-07 at 11.27.55 (4).jpeg', 6, 0),
(22, 'WhatsApp Image 2020-05-07 at 11.33.24 (1).jpeg', 'WhatsApp Image 2020-05-07 at 11.33.24 (3).jpeg', 'WhatsApp Image 2020-05-07 at 11.33.24.jpeg', 'WhatsApp Image 2020-05-07 at 11.33.24 (4).jpeg', 7, 0),
(23, 'WhatsApp Image 2020-05-07 at 11.38.04 (1).jpeg', 'WhatsApp Image 2020-05-07 at 11.38.04 (2).jpeg', 'WhatsApp Image 2020-05-07 at 11.38.04 (3).jpeg', 'WhatsApp Image 2020-05-07 at 11.38.04.jpeg', 8, 0),
(24, 'WhatsApp Image 2020-05-07 at 11.39.29 (3).jpeg', 'WhatsApp Image 2020-05-07 at 11.39.29 (2).jpeg', 'WhatsApp Image 2020-05-07 at 11.39.29 (4).jpeg', 'WhatsApp Image 2020-05-07 at 11.39.29 (2).jpeg', 9, 0),
(25, 'WhatsApp Image 2020-05-07 at 11.39.29 (1).jpeg', 'WhatsApp Image 2020-05-07 at 11.39.29 (5).jpeg', 'WhatsApp Image 2020-05-07 at 11.39.29 (9).jpeg', 'WhatsApp Image 2020-05-07 at 11.39.29 (6).jpeg', 10, 0),
(31, 'WhatsApp Image 2020-05-07 at 12.31.00 (2).jpeg', 'WhatsApp Image 2020-05-07 at 12.30.59.jpeg', 'WhatsApp Image 2020-05-07 at 12.31.00 (5).jpeg', 'WhatsApp Image 2020-05-07 at 12.31.00.jpeg', 12, 0),
(32, 'WhatsApp Image 2020-05-07 at 15.30.10 (7).jpeg', 'WhatsApp Image 2020-05-07 at 15.30.10 (5).jpeg', 'WhatsApp Image 2020-05-07 at 15.30.10 (3).jpeg', 'WhatsApp Image 2020-05-07 at 15.30.10 (6).jpeg', 14, 0),
(33, 'WhatsApp Image 2020-05-07 at 15.51.01 (7).jpeg', 'WhatsApp Image 2020-05-07 at 15.51.01 (8).jpeg', 'WhatsApp Image 2020-05-07 at 15.51.01 (2).jpeg', 'WhatsApp Image 2020-05-07 at 15.51.01 (6).jpeg', 15, 0),
(35, 'WhatsApp Image 2020-05-07 at 16.08.59.jpeg', 'WhatsApp Image 2020-05-07 at 15.30.10 (2).jpeg', 'WhatsApp Image 2020-05-07 at 15.30.10 (1).jpeg', 'WhatsApp Image 2020-05-07 at 16.08.59.jpeg', 20, 0),
(36, 'IMG_0636.JPG', 'IMG_0634.JPG', 'IMG_0641.JPG', 'IMG_0637.JPG', 19, 1),
(38, 'IMG_0618.JPG', 'IMG_0619.JPG', 'IMG_0622.JPG', 'IMG_0616.JPG', 21, 1),
(39, 'IMG_0625.JPG', 'IMG_0626.JPG', 'IMG_0628.JPG', 'IMG_0632.JPG', 22, 1),
(41, ',,,.jpg', 'WhatsApp Image 2020-05-07 at 11.39.29 (13).jpeg', 'WhatsApp Image 2020-05-07 at 11.39.29 (15).jpeg', 'WhatsApp Image 2020-05-07 at 11.39.29 (16).jpeg', 22, 0),
(42, 'qqq.jpg', 'WhatsApp Image 2020-05-09 at 12.54.57 (1).jpeg', 'WhatsApp Image 2020-05-09 at 12.54.57.jpeg', 'WhatsApp Image 2020-05-09 at 12.54.57.jpeg', 23, 0);

-- --------------------------------------------------------

--
-- Table structure for table `_preference`
--

CREATE TABLE `_preference` (
  `id` int(11) NOT NULL,
  `idCustomer` varchar(32) NOT NULL,
  `idCar` int(11) NOT NULL,
  `_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `_product_lease_`
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
-- Dumping data for table `_product_lease_`
--

INSERT INTO `_product_lease_` (`_prd_id_`, `_prd_name_`, `_prd_state_`, `_prd_marque_`, `_prd_src_`, `_prd_description_`, `_prd_price_`, `_prd_color_`, `_prd_added_date_`, `_prd_ctgrie_`) VALUES
(19, 'LAND CRUISER OBAMA', 0, 'TOYOTA', 'IMG_0636.JPG', 'TRES BON ETAT, INCLUS LOCATION ETRANGERE', '220', 'ROUGE', '2020-05-07 14:24:33', 84),
(21, 'HILUX', 0, 'TOYOTA', 'IMG_0618.JPG', 'BON ETAT', '120', 'BLANCHE', '2020-05-07 14:32:21', 84),
(22, 'LAND CRUISER', 0, 'TOYOTA', 'IMG_0625.JPG', 'BON ETAT', '150', 'BLANCHE', '2020-05-07 14:47:14', 84);

-- --------------------------------------------------------

--
-- Table structure for table `_product_sales_`
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
-- Dumping data for table `_product_sales_`
--

INSERT INTO `_product_sales_` (`_prd_id_`, `_prd_name_`, `_prd_state_`, `_prd_marque_`, `_prd_src_`, `_prd_description_`, `_prd_price_`, `_prd_color_`, `_prd_added_date_`, `_prd_ctgrie_`) VALUES
(6, 'LAND CRUISER', 0, 'TOYOTA', 'WhatsApp Image 2020-05-07 at 11.27.55 (1).jpeg', 'TRES BON ETAT', '38000', 'BLANCHE', '2020-05-07 09:31:50', 95),
(7, 'RAV4', 0, 'TOYOTA', 'WhatsApp Image 2020-05-07 at 11.33.24 (1).jpeg', 'TRES BON ETAT', '6500', 'BLEU', '2020-05-07 09:36:25', 95),
(8, 'IST', 0, 'TOYOTA', 'WhatsApp Image 2020-05-07 at 11.38.04 (1).jpeg', 'TRES BON ETAT', '4000', 'BLUE', '2020-05-07 09:43:26', 95),
(9, 'TOUAREG', 0, 'VW', 'WhatsApp Image 2020-05-07 at 11.39.29 (3).jpeg', 'BON ETAT', '7000', 'NOIRE', '2020-05-07 09:45:45', 95),
(10, 'JUKE', 0, 'NISSAN', 'WhatsApp Image 2020-05-07 at 11.39.29 (1).jpeg', 'TRES BON ETAT', '8500', 'VERTE', '2020-05-07 09:47:33', 95),
(12, 'SURF', 0, 'TOYOTA', 'WhatsApp Image 2020-05-07 at 12.31.00 (2).jpeg', 'TRES BON ETAT, AUTOMATIQUE, ESSENCE CAR', '10000', 'NOIRE', '2020-05-07 10:37:02', 95),
(14, 'TX', 0, 'TOYOTA', 'WhatsApp Image 2020-05-07 at 15.30.10 (7).jpeg', 'DIESEL, AUTOMATIQUE, 245.000 KM, BON ETAT', '13000', 'GRISE', '2020-05-07 13:48:00', 95),
(15, 'Q5', 0, 'BMW', 'WhatsApp Image 2020-05-07 at 15.51.01 (7).jpeg', 'ESSENCE, AUTOMATIQUE CAR', '6500', 'NOIRE', '2020-05-07 14:06:49', 95),
(20, 'LAND CRUISER 3.0', 0, 'TOYOTA', 'WhatsApp Image 2020-05-07 at 16.08.59.jpeg', 'DIESEL CARS, 205000KM TRES BON ETAT', '13500', 'NOIRE', '2020-05-07 14:16:22', 95),
(22, 'RAV4', 0, 'TOYOTA', ',,,.jpg', 'ESSANCE, AUTOMATIQUE CAR', '6000', 'GRISE', '2020-05-12 11:42:14', 95),
(23, 'FORTUNER', 0, 'TOYOTA', 'qqq.jpg', 'TOYOTA FORTUNER\r\nYear:2018\r\nWheels:18Â´\r\nColor:Black\r\nCar type:SUV/Crossover\r\nKilometers:61,000\r\nExport status:Can be exported\r\nSpecs:GCC\r\nGearbox:Automatic\r\nFuel:Gasoline\r\nSeats:7\r\nCylinders:4\r\nInterior:Tan', '38000', 'NOIRE', '2020-05-12 12:01:53', 95);

-- --------------------------------------------------------

--
-- Table structure for table `_pr_showup_`
--

CREATE TABLE `_pr_showup_` (
  `_pr_id_` int(11) NOT NULL,
  `_pr_catg_` varchar(60) NOT NULL,
  `_pr_name_` varchar(60) NOT NULL,
  `_pr_libelle_` text NOT NULL,
  `_pr_img_src_` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `_sale_table`
--

CREATE TABLE `_sale_table` (
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
  `img9` text NOT NULL,
  `transmition` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `_sale_table`
--

INSERT INTO `_sale_table` (`id`, `model`, `marque`, `description`, `carInterchangeable`, `volant`, `portes`, `siege`, `carburant`, `coleur`, `imgPricipale`, `img1`, `img2`, `img3`, `img4`, `img5`, `img6`, `img7`, `img8`, `img9`, `transmition`) VALUES
(3, 'Testing', 'testing', 'je suis entrain de tester l\'ajout du produit bata', '57575', 'gauche', 433, 23, 'essence', 'testting color', 'bkg-blu.jpg', 'bkg-blu.jpg', 'iis.png', 'bkg-blu.jpg', 'iis.png', 'iis.png', 'bkg-blu.jpg', 'bkg-blu.jpg', 'bkg-blu.jpg', 'bkg-blu.jpg', 'automatique'),
(4, 'Testing', 'testing', 'still testing bata car', '57575', 'gauche', 8, 5, 'essence', 'testing color', 'BG811081_4c3e63.jpg', 'BG811081_852afb.jpg', '_bx_assoc_imgs_BG811081_a55f25.jpg', 'BG811081_eba875.jpg', '_bx_assoc_imgs_BG811081_a55f25.jpg', '_bx_assoc_imgs_BG811081_eba875.jpg', '_bx_assoc_imgs_BG811081_a55f25.jpg', '_bx_assoc_imgs_BG811081_eba875.jpg', 'BG811081_852afb.jpg', '_bx_assoc_imgs_BG811646_2a120a.jpg', 'automatique');

-- --------------------------------------------------------

--
-- Table structure for table `_visitors`
--

CREATE TABLE `_visitors` (
  `id` int(11) NOT NULL,
  `_ipVisitor` varchar(70) NOT NULL,
  `_page` varchar(60) NOT NULL,
  `_times` int(11) NOT NULL,
  `_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `_visitors`
--

INSERT INTO `_visitors` (`id`, `_ipVisitor`, `_page`, `_times`, `_date`) VALUES
(1, '680c835f2c251384112d0aba517d6f2a', 'home', 1, '2020-07-08 15:12:28'),
(2, '680c835f2c251384112d0aba517d6f2a', '_product', 2, '2020-07-08 15:12:39'),
(3, '680c835f2c251384112d0aba517d6f2a', '_searchby', 3, '2020-07-08 15:13:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `_administrator_`
--
ALTER TABLE `_administrator_`
  ADD PRIMARY KEY (`_adm_id_`);

--
-- Indexes for table `_bataTable_cars`
--
ALTER TABLE `_bataTable_cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `_cars_table`
--
ALTER TABLE `_cars_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `_cst_lve_comment_`
--
ALTER TABLE `_cst_lve_comment_`
  ADD PRIMARY KEY (`_id_`);

--
-- Indexes for table `_customer_`
--
ALTER TABLE `_customer_`
  ADD PRIMARY KEY (`_cst_id`),
  ADD UNIQUE KEY `_cst_mail_` (`_cst_mail_`);

--
-- Indexes for table `_favorites`
--
ALTER TABLE `_favorites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `_historique`
--
ALTER TABLE `_historique`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `_lease_table`
--
ALTER TABLE `_lease_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `_news_letter_`
--
ALTER TABLE `_news_letter_`
  ADD PRIMARY KEY (`_id_`);

--
-- Indexes for table `_prd_commande_`
--
ALTER TABLE `_prd_commande_`
  ADD PRIMARY KEY (`_cmmd_id_`);

--
-- Indexes for table `_prd_detail_`
--
ALTER TABLE `_prd_detail_`
  ADD PRIMARY KEY (`_iddetail_`);

--
-- Indexes for table `_preference`
--
ALTER TABLE `_preference`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `_product_lease_`
--
ALTER TABLE `_product_lease_`
  ADD PRIMARY KEY (`_prd_id_`);

--
-- Indexes for table `_product_sales_`
--
ALTER TABLE `_product_sales_`
  ADD PRIMARY KEY (`_prd_id_`);

--
-- Indexes for table `_pr_showup_`
--
ALTER TABLE `_pr_showup_`
  ADD PRIMARY KEY (`_pr_id_`);

--
-- Indexes for table `_sale_table`
--
ALTER TABLE `_sale_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `_visitors`
--
ALTER TABLE `_visitors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `_administrator_`
--
ALTER TABLE `_administrator_`
  MODIFY `_adm_id_` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `_bataTable_cars`
--
ALTER TABLE `_bataTable_cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `_cars_table`
--
ALTER TABLE `_cars_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `_cst_lve_comment_`
--
ALTER TABLE `_cst_lve_comment_`
  MODIFY `_id_` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `_customer_`
--
ALTER TABLE `_customer_`
  MODIFY `_cst_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `_favorites`
--
ALTER TABLE `_favorites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `_historique`
--
ALTER TABLE `_historique`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `_lease_table`
--
ALTER TABLE `_lease_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `_news_letter_`
--
ALTER TABLE `_news_letter_`
  MODIFY `_id_` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `_prd_commande_`
--
ALTER TABLE `_prd_commande_`
  MODIFY `_cmmd_id_` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `_prd_detail_`
--
ALTER TABLE `_prd_detail_`
  MODIFY `_iddetail_` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `_preference`
--
ALTER TABLE `_preference`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `_product_lease_`
--
ALTER TABLE `_product_lease_`
  MODIFY `_prd_id_` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `_product_sales_`
--
ALTER TABLE `_product_sales_`
  MODIFY `_prd_id_` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `_pr_showup_`
--
ALTER TABLE `_pr_showup_`
  MODIFY `_pr_id_` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `_sale_table`
--
ALTER TABLE `_sale_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `_visitors`
--
ALTER TABLE `_visitors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

