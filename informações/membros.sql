-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 
-- Versão do Servidor: 5.5.24-log
-- Versão do PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `sog`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `membros`
--

CREATE TABLE IF NOT EXISTS `membros` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `nascimento` varchar(255) NOT NULL,
  `matricula` int(255) NOT NULL,
  `email_pessoal` varchar(255) NOT NULL,
  `email_empresarial` varchar(255) NOT NULL,
  `telefone1` varchar(255) NOT NULL,
  `telefone2` varchar(255) NOT NULL,
  `bairro` varchar(255) NOT NULL,
  `rua` varchar(255) NOT NULL,
  `numero` int(255) NOT NULL,
  `cep` varchar(255) NOT NULL,
  `ingresso` varchar(255) NOT NULL,
  `cargo` varchar(255) NOT NULL,
  `skype` varchar(255) NOT NULL,
  `github` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `membros`
--

INSERT INTO `membros` (`id`, `nome`, `senha`, `foto`, `nascimento`, `matricula`, `email_pessoal`, `email_empresarial`, `telefone1`, `telefone2`, `bairro`, `rua`, `numero`, `cep`, `ingresso`, `cargo`, `skype`, `github`) VALUES
(1, 'Nicolas Costa Cruz', '202cb962ac59075b964b07152d234b70', '', '20/04/1992', 1130378, 'nicolascc.uece@gmail.com', 'nicolas@acens.com.br', '88444083', '99966041', 'Rodolfo Teofilo', 'Ana Neri', 2006, '60430-430', '01/11/2012', 'Assessor de Projetos', 'nicolas.costa.cruz', 'Nicolasccuece');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
