-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 20-Abr-2019 às 17:19
-- Versão do servidor: 5.7.23
-- versão do PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pegasus`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

DROP TABLE IF EXISTS `funcionario`;
CREATE TABLE IF NOT EXISTS `funcionario` (
  `idFuncionario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `senha` varchar(45) DEFAULT NULL,
  `data_cadastro` datetime DEFAULT NULL,
  PRIMARY KEY (`idFuncionario`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`idFuncionario`, `nome`, `email`, `senha`, `data_cadastro`) VALUES
(1, 'sindy uau', 'sindy_antunes@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2018-11-12 20:51:13'),
(2, 'joao blabla', 'joao@hotmail.com', 'd5f12e53a182c062b6bf30c1445153faff12269a', '2018-11-13 03:21:56'),
(3, 'sdssss', 'sdssss@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2018-11-13 11:38:51'),
(4, 'Maria', 'maria@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2018-11-13 13:01:05');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ingredientlist`
--

DROP TABLE IF EXISTS `ingredientlist`;
CREATE TABLE IF NOT EXISTS `ingredientlist` (
  `idingredient` int(11) NOT NULL AUTO_INCREMENT,
  `ingredient` text,
  PRIMARY KEY (`idingredient`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `person`
--

DROP TABLE IF EXISTS `person`;
CREATE TABLE IF NOT EXISTS `person` (
  `idPerson` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `phone` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`idPerson`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `person`
--

INSERT INTO `person` (`idPerson`, `name`, `phone`) VALUES
(1, 'Julye', '(51)64579033'),
(2, 'Maria', '(51)987654345'),
(3, 'Jhon', '(51)333333');

-- --------------------------------------------------------

--
-- Estrutura da tabela `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `iddproduct` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `description` text,
  `idrecipe` int(11) DEFAULT NULL,
  PRIMARY KEY (`iddproduct`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `recipe`
--

DROP TABLE IF EXISTS `recipe`;
CREATE TABLE IF NOT EXISTS `recipe` (
  `idrecipe` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `methodPreparation` text,
  `idproduct` int(11) DEFAULT NULL,
  `idingredient` int(11) DEFAULT NULL,
  PRIMARY KEY (`idrecipe`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
