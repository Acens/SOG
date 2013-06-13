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
  `nick` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Extraindo dados da tabela `membros`
--

INSERT INTO `membros` (`id`, `nick`, `nome`, `senha`, `status`, `foto`, `nascimento`, `matricula`, `email_pessoal`, `email_empresarial`, `telefone1`, `telefone2`, `bairro`, `rua`, `numero`, `cep`, `ingresso`, `cargo`, `skype`, `github`) VALUES
(1, 'Nicolas', 'Nicolas Costa Cruz', '202cb962ac59075b964b07152d234b70', 'ativo', '', '20/04/1992', 1130378, 'nicolascc.uece@gmail.com', 'nicolas@acens.com.br', '88444083', '99966041', 'Rodolfo Teofilo', 'Ana Neri', 2006, '60430-430', '01/11/2012', 'Assessor de Projetos', 'nicolas.costa.cruz', 'Nicolasccuece'),
(2, 'Andre', 'Andre Pesati Revoredo', '1577b65054e39fe451f219e2861d3e35', 'ativo', '', '09/02/1991', 1130437, 'pesatirevoredo@gmail.com', 'andre@acens.com.br', '(85) 8793-8912', '', 'Meireles', 'Pereira Valente apto 503', 1401, '60160-250', '10/2011', 'Diretor de Recursos Humanos', 'pesati00', ''),
(3, 'Jonatas', 'Jonatas Fontele Dourado', '25db98254ca9dc27cc383e953e24abf6', 'ativo', '', '10/06/1992', 1196400, 'jonatasfontele@gmail.com', 'jonatas@acens.com.br', '96135842', '30884287', 'Centro', 'Conselheiro Tristão', 284, '60050-100', '', 'assessor de Marketing', 'jonatasfontele', ''),
(4, 'Hallisson', 'Hallisson', '105c50b7e4d9d255e6f44d97aaa9f1f5', 'ativo', '', '20/09/1993', 0, 'hallissonnn@gmail.com', 'hallisson@acens.çcom.br', '96669358', '', 'Cidade dos Funcionarios', 'Rua Senador Jerressate', 0, '', '01/01/2012', 'Assessor de Financeiro', '', 'hallisson'),
(5, 'Alisson', 'Alisson Soares', 'c5e172e2507e0a58fac8e343cdfd947d', 'ativo', '', '07/11/1993', 1196397, 'alissonrgs1993@gmail.com', 'alissonrgs1993@gmail.com', '32768702', '96537619', 'José de Alencar', 'Santa Marta', 877, '60830400', 'Novembro 2012', 'Assessor de Projetos', 'Alissonrgs', 'alissonrgs1993@gmail.com'),
(6, 'Levi', 'Francisco Levi Bizerril Damasceno', '8bcd245a862c652f76f64998e5ec128a', 'ativo', '', '03/11/1986', 1130476, 'leviuece@gmail.com', 'levi@acens.com.br', '88219781', '', 'Farias Brito', 'Dom Jeronimo', 339, '60011-170', '10/2011', 'Assessor de Recursos Humanos', '', 'leviuece'),
(7, 'Davi', 'Davi Vasconcelos Pinto', 'bd87a585da926cad09eac419e2c09a45', 'ativo', '', '04/08/1992', 1110117, 'davi.uece@gmail.com', 'davi@acens.com.br', '87798171', '96672833', 'Cajazeiras', 'D', 333, '60864-450', '08/2011', 'Presidente', 'davi.uece', ''),
(8, 'Teste', 'Teste', '827ccb0eea8a706c4c34a16891f84e7b', 'ativo', '', '20/04/1992', 1110117, 'nicolascc.uecwe@gmail.com', '', '88444043', '', '', '', 0, '', '10/2011', 'Assessor de Financeiro', '', ''),
(9, 'tes', 'tes', 'e10adc3949ba59abbe56e057f20f883e', 'ativo', '', '20/04/1992', 1130476, 'nicolascc.suedce@gmail.com', '', '88219784', '', '', '', 0, '', '10/2011', 'Assessor de Financeiro', '', ''),
(10, 'Eduardo', 'Eduardo Maranhão Braga', '5c152c75d908272374bbf5075bbb93d0', 'ativo', '', '19/09/1990', 1062959, 'eduardomb.uece@gmail.com', '', '99999999', '', '', '', 0, '', '01/11/2012', 'Diretor de Projetos', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
