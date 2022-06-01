-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 01-06-2022 a las 19:21:35
-- Versión del servidor: 5.7.31
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `php_tool`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `action`
--

DROP TABLE IF EXISTS `action`;
CREATE TABLE IF NOT EXISTS `action` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `action` varchar(100) NOT NULL,
  `id_CurrentMedication` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `action`
--

INSERT INTO `action` (`id`, `action`, `id_CurrentMedication`) VALUES
(1, 'CAUTION', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `currentmedication`
--

DROP TABLE IF EXISTS `currentmedication`;
CREATE TABLE IF NOT EXISTS `currentmedication` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `GroupPhenotype` varchar(100) NOT NULL,
  `Recommendation` varchar(1000) NOT NULL,
  `id_json` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `currentmedication`
--

INSERT INTO `currentmedication` (`id`, `GroupPhenotype`, `Recommendation`, `id_json`) VALUES
(1, 'Decreased Efficacy', 'Patients with this genotype are expected to have a Poor response to Tylenol. Physicians should follow FDA label recommendations.', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `drug`
--

DROP TABLE IF EXISTS `drug`;
CREATE TABLE IF NOT EXISTS `drug` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_CurrentMedication` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `drug`
--

INSERT INTO `drug` (`id`, `id_CurrentMedication`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `geneinfo`
--

DROP TABLE IF EXISTS `geneinfo`;
CREATE TABLE IF NOT EXISTS `geneinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gene` varchar(50) NOT NULL,
  `genotype` varchar(50) NOT NULL,
  `phenotype` varchar(50) NOT NULL,
  `id_CurrentMedication` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `geneinfo`
--

INSERT INTO `geneinfo` (`id`, `gene`, `genotype`, `phenotype`, `id_CurrentMedication`) VALUES
(1, 'FakeGene1', 'WT/WT', 'Normal Metabolizer', 1),
(2, 'FakeGene2', 'WT/WT', 'Poor Metabolizer', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generic`
--

DROP TABLE IF EXISTS `generic`;
CREATE TABLE IF NOT EXISTS `generic` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `id_drug` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `generic`
--

INSERT INTO `generic` (`id`, `name`, `id_drug`) VALUES
(1, 'Acetaminophen', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `json`
--

DROP TABLE IF EXISTS `json`;
CREATE TABLE IF NOT EXISTS `json` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `SampleNumber` varchar(50) NOT NULL,
  `PipelineVersion` varchar(50) NOT NULL,
  `Sequencer` varchar(50) NOT NULL,
  `KnowledgebaseVersion` varchar(50) NOT NULL,
  `DateGenerated` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `json`
--

INSERT INTO `json` (`id`, `SampleNumber`, `PipelineVersion`, `Sequencer`, `KnowledgebaseVersion`, `DateGenerated`) VALUES
(1, '12345', '0.0.1', 'iontorrent', '0.0.1', '06/11/2021 2:30PM EST');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `theraputicarea`
--

DROP TABLE IF EXISTS `theraputicarea`;
CREATE TABLE IF NOT EXISTS `theraputicarea` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `area` varchar(100) NOT NULL,
  `id_CurrentMedication` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `theraputicarea`
--

INSERT INTO `theraputicarea` (`id`, `area`, `id_CurrentMedication`) VALUES
(1, 'Pain Management', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trade`
--

DROP TABLE IF EXISTS `trade`;
CREATE TABLE IF NOT EXISTS `trade` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `id_drug` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `trade`
--

INSERT INTO `trade` (`id`, `name`, `id_drug`) VALUES
(1, 'Tylenol', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
