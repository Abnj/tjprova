-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 13-Jan-2020 às 01:32
-- Versão do servidor: 10.4.10-MariaDB
-- versão do PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `trt_abner`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `advogados`
--

DROP TABLE IF EXISTS `advogados`;
CREATE TABLE IF NOT EXISTS `advogados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome_advogados` varchar(250) DEFAULT NULL,
  `cpf` bigint(11) DEFAULT NULL,
  `num_oab` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `advogados`
--

INSERT INTO `advogados` (`id`, `nome_advogados`, `cpf`, `num_oab`) VALUES
(1, 'Pedro Antonio', 10020030022, 2120992),
(2, 'Maria Aparecida', 3348144426, 445867),
(3, 'Caio Souza Gomes', 44622222341, 2820240),
(4, 'Ana Paula Dias', 12032132200, 1722330),
(5, 'julia Souza Pinheiro', 22022122348, 1223340);

-- --------------------------------------------------------

--
-- Estrutura da tabela `alvara`
--

DROP TABLE IF EXISTS `alvara`;
CREATE TABLE IF NOT EXISTS `alvara` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `numcontajudicial` bigint(255) NOT NULL,
  `processos` varchar(25) NOT NULL,
  `data_validade` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `alvara`
--

INSERT INTO `alvara` (`id`, `numcontajudicial`, `processos`, `data_validade`) VALUES
(1, 1234567891123456, '9999999-99.2019.9.99.9999', '2020-01-15'),
(2, 16214415484622, '9999999-99.2019.9.99.9999', '2020-01-01'),
(3, 1215484022442460, '9999999-99.2019.9.99.9999', '2020-01-03'),
(4, 2200002394123456, '9999999-99.2019.9.99.9999', '2020-01-07'),
(5, 1020402243102346, '9999999-99.2019.9.99.9999', '2020-01-14');

-- --------------------------------------------------------

--
-- Estrutura da tabela `dados_sacador`
--

DROP TABLE IF EXISTS `dados_sacador`;
CREATE TABLE IF NOT EXISTS `dados_sacador` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `naturezasacador` varchar(25) NOT NULL,
  `nome_sacador` varchar(250) CHARACTER SET utf8 NOT NULL,
  `cpf` bigint(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `dados_sacador`
--

INSERT INTO `dados_sacador` (`id`, `naturezasacador`, `nome_sacador`, `cpf`) VALUES
(1, 'Pessoa Jurídica ', 'Pedro Antonio', 10020030041),
(2, 'Pessoa Física', 'Marcos Pascal', 33304877787),
(3, 'Pessoa Jurídica ', 'Maria Aparecida', 3348144426),
(4, 'Pessoa Jurídica ', 'Ana Paula Dias', 12032132200),
(5, 'Pessoa Jurídica ', 'Julia Souza Pinheiro', 2202212348);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
