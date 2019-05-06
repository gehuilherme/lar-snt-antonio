-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 10-Abr-2019 às 22:38
-- Versão do servidor: 5.7.21
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pjenfermagem`
--
CREATE DATABASE IF NOT EXISTS `pjenfermagem` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `pjenfermagem`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `agenda`
--

DROP TABLE IF EXISTS `agenda`;
CREATE TABLE IF NOT EXISTS `agenda` (
  `age_id` int(11) NOT NULL AUTO_INCREMENT,
  `age_pac_id` int(11) DEFAULT NULL,
  `age_camp` text,
  `age_dt` date NOT NULL,
  `age_hora` time NOT NULL,
  `age_rua` varchar(30) DEFAULT NULL,
  `age_num` varchar(10) DEFAULT NULL,
  `age_status` varchar(20) NOT NULL,
  PRIMARY KEY (`age_id`),
  KEY `age_pac_id` (`age_pac_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `anotacoesprontuario`
--

DROP TABLE IF EXISTS `anotacoesprontuario`;
CREATE TABLE IF NOT EXISTS `anotacoesprontuario` (
  `ano_id` int(11) NOT NULL AUTO_INCREMENT,
  `ano_pac_id` int(11) DEFAULT NULL,
  `ano_tipoAnotacao` varchar(40) NOT NULL,
  `ano_camp` text,
  `ano_dt` date NOT NULL,
  PRIMARY KEY (`ano_id`),
  KEY `ano_pac_id` (`ano_pac_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `doencas`
--

DROP TABLE IF EXISTS `doencas`;
CREATE TABLE IF NOT EXISTS `doencas` (
  `doe_id` int(11) NOT NULL AUTO_INCREMENT,
  `doe_nome` varchar(50) DEFAULT NULL,
  `doe_obs` text,
  PRIMARY KEY (`doe_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `medicamentos`
--

DROP TABLE IF EXISTS `medicamentos`;
CREATE TABLE IF NOT EXISTS `medicamentos` (
  `med_id` int(11) NOT NULL AUTO_INCREMENT,
  `med_nome` varchar(100) NOT NULL,
  `med_info` text,
  `med_Dosagem` varchar(20) NOT NULL,
  PRIMARY KEY (`med_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pacdoencas`
--

DROP TABLE IF EXISTS `pacdoencas`;
CREATE TABLE IF NOT EXISTS `pacdoencas` (
  `pacDoe_id` int(11) NOT NULL AUTO_INCREMENT,
  `pacDoe_pac_id` int(11) DEFAULT NULL,
  `pacDoe_doe_id` int(11) DEFAULT NULL,
  `pacDoe_info` text,
  PRIMARY KEY (`pacDoe_id`),
  KEY `pacDoe_pac_id` (`pacDoe_pac_id`),
  KEY `pacDoe_doe_id` (`pacDoe_doe_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `paciente`
--

DROP TABLE IF EXISTS `paciente`;
CREATE TABLE IF NOT EXISTS `paciente` (
  `pac_id` int(11) NOT NULL AUTO_INCREMENT,
  `pac_nome` varchar(100) NOT NULL,
  `pac_sobrenome` varchar(100) NOT NULL,
  `pac_rg` varchar(10) DEFAULT NULL,
  `pac_CPF` varchar(11) DEFAULT NULL,
  `pac_dt_nasc` date NOT NULL,
  `pac_est_civil` varchar(20) NOT NULL,
  `pac_religiao` int(11) DEFAULT NULL,
  `pac_dt_entrada` date NOT NULL,
  `pac_sexo` varchar(15) NOT NULL,
  `pac_etnia` varchar(30) NOT NULL,
  `pac_peso` decimal(5,2) DEFAULT NULL,
  `pac_alt` decimal(3,2) DEFAULT NULL,
  `pac_status` varchar(10) NOT NULL,
  `pac_enc` varchar(50) NOT NULL,
  `pac_chegada` varchar(20) NOT NULL,
  `pac_chegadaDesc` text,
  `pac_dep` varchar(20) NOT NULL,
  `pac_vicio` varchar(3) NOT NULL,
  `pac_vicioDesc` text,
  `pac_hipertenso` varchar(3) NOT NULL,
  `pac_diabete` varchar(3) NOT NULL,
  `pac_cirurgia` varchar(3) NOT NULL,
  `pac_cirurgiaDesc` text,
  `pac_ulcera` varchar(3) NOT NULL,
  `pac_ulceraEst` varchar(3) DEFAULT NULL,
  `pac_crise_con` varchar(3) NOT NULL,
  `pac_medicamento` varchar(3) NOT NULL,
  `pac_medicamentoDesc` text,
  `pac_alergia_med` varchar(3) NOT NULL,
  `pac_alergiaDesc` text,
  PRIMARY KEY (`pac_id`),
  KEY `pac_religiao` (`pac_religiao`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pacmedicamentos`
--

DROP TABLE IF EXISTS `pacmedicamentos`;
CREATE TABLE IF NOT EXISTS `pacmedicamentos` (
  `pacMed_id` int(11) NOT NULL AUTO_INCREMENT,
  `pacMed_pac_id` int(11) DEFAULT NULL,
  `pacMed_med_id` int(11) DEFAULT NULL,
  `pacMed_info` text,
  `pacMed_Dosagem` varchar(10) DEFAULT NULL,
  `pacMed_Inicio` date NOT NULL,
  `pacMed_Fim` date NOT NULL,
  `pacMed_hora` time DEFAULT NULL,
  `pacMed_Hora2` time NOT NULL,
  `pacMed_Hora3` time NOT NULL,
  `pacMed_Dom` varchar(3) NOT NULL,
  `pacMed_Seg` varchar(3) NOT NULL,
  `pacMed_Ter` varchar(3) NOT NULL,
  `pacMed_Qua` varchar(3) NOT NULL,
  `pacMed_Qui` varchar(3) NOT NULL,
  `pacMed_Sex` varchar(3) NOT NULL,
  `pacMed_Sab` varchar(3) NOT NULL,
  PRIMARY KEY (`pacMed_id`),
  KEY `pacMed_pac_id` (`pacMed_pac_id`),
  KEY `pacMed_med_id` (`pacMed_med_id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `religiao`
--

DROP TABLE IF EXISTS `religiao`;
CREATE TABLE IF NOT EXISTS `religiao` (
  `rel_id` int(11) NOT NULL AUTO_INCREMENT,
  `rel_nome` varchar(50) NOT NULL,
  `rel_vertente` varchar(50) DEFAULT NULL,
  `rel_desc` text,
  PRIMARY KEY (`rel_id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `responsaveis`
--

DROP TABLE IF EXISTS `responsaveis`;
CREATE TABLE IF NOT EXISTS `responsaveis` (
  `res_cpf` varchar(11) NOT NULL,
  `res_pac_id` int(11) NOT NULL,
  `res_nome` varchar(20) NOT NULL,
  `res_sobrenome` varchar(30) NOT NULL,
  `res_dt_nasc` date NOT NULL,
  `res_estado` varchar(2) NOT NULL,
  `res_cidade` varchar(30) NOT NULL,
  `res_end_rua` varchar(30) NOT NULL,
  `res_end_num` int(11) NOT NULL,
  `res_telDDD` varchar(2) DEFAULT NULL,
  `res_telNum1` varchar(9) DEFAULT NULL,
  PRIMARY KEY (`res_cpf`),
  KEY `res_pac_id` (`res_pac_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
