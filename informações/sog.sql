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
-- Estrutura da tabela `membproj`
--

CREATE TABLE IF NOT EXISTS `membproj` (
  `mp_chave_pro` int(255) NOT NULL,
  `mp_chave_membro` int(255) NOT NULL,
  `mp_cargo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `membproj`
--

INSERT INTO `membproj` (`mp_chave_pro`, `mp_chave_membro`, `mp_cargo`) VALUES
(1, 2, 'P.O.'),
(1, 5, 'Scrum Master'),
(1, 1, 'Desenvolvedor'),
(2, 7, 'P.O.'),
(2, 2, 'Scrum Master'),
(2, 12, 'Desenvolvedor'),
(3, 1, 'P.O.'),
(3, 2, 'Scrum Master'),
(3, 12, 'Desenvolvedor'),
(4, 2, 'P.O.'),
(4, 1, 'Scrum Master'),
(4, 7, 'Desenvolvedor');

-- --------------------------------------------------------

--
-- Estrutura da tabela `membros`
--

CREATE TABLE IF NOT EXISTS `membros` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Extraindo dados da tabela `membros`
--

INSERT INTO `membros` (`id`, `username`, `nome`, `senha`, `status`, `foto`, `nascimento`, `matricula`, `email_pessoal`, `email_empresarial`, `telefone1`, `telefone2`, `bairro`, `rua`, `numero`, `cep`, `ingresso`, `cargo`, `skype`, `github`) VALUES
(1, 'Nicolas', 'Nicolas Costa Cruz', '202cb962ac59075b964b07152d234b70', 'ativo', '', '20/04/1992', 1130378, 'nicolascc.uece@gmail.com', 'nicolas@acens.com.br', '88444083', '99966041', 'Rodolfo Teofilo', 'Ana Neri', 2006, '60430-430', '01/11/2012', 'Assessor de Projetos', 'nicolas.costa.cruz', 'Nicolasccuece'),
(2, 'Andre', 'Andre Pesati Revoredo', '1577b65054e39fe451f219e2861d3e35', 'ativo', '', '09/02/1991', 1130437, 'pesatirevoredo@gmail.com', 'andre@acens.com.br', '(85) 8793-8912', '', 'Meireles', 'Pereira Valente apto 503', 1401, '60160-250', '10/2011', 'Diretor de Recursos Humanos', 'pesati00', ''),
(3, 'Jonatas', 'Jonatas Fontele Dourado', '25db98254ca9dc27cc383e953e24abf6', 'ativo', '', '10/06/1992', 1196400, 'jonatasfontele@gmail.com', 'jonatas@acens.com.br', '96135842', '30884287', 'Centro', 'Conselheiro Tristão', 284, '60050-100', '', 'assessor de Marketing', 'jonatasfontele', ''),
(4, 'Hallisson', 'Hallisson', '105c50b7e4d9d255e6f44d97aaa9f1f5', 'ativo', '', '20/09/1993', 0, 'hallissonnn@gmail.com', 'hallisson@acens.çcom.br', '96669358', '', 'Cidade dos Funcionarios', 'Rua Senador Jerressate', 0, '', '01/01/2012', 'Assessor de Financeiro', '', 'hallisson'),
(5, 'Alisson', 'Alisson Soares', 'c5e172e2507e0a58fac8e343cdfd947d', 'ativo', '', '07/11/1993', 1196397, 'alissonrgs1993@gmail.com', 'alissonrgs1993@gmail.com', '32768702', '96537619', 'José de Alencar', 'Santa Marta', 877, '60830400', 'Novembro 2012', 'Assessor de Projetos', 'Alissonrgs', 'alissonrgs1993@gmail.com'),
(6, 'Levi', 'Francisco Levi Bizerril Damasceno', '8bcd245a862c652f76f64998e5ec128a', 'ativo', '', '03/11/1986', 1130476, 'leviuece@gmail.com', 'levi@acens.com.br', '88219781', '', 'Farias Brito', 'Dom Jeronimo', 339, '60011-170', '10/2011', 'Assessor de Recursos Humanos', '', 'leviuece'),
(7, 'Davi', 'Davi Vasconcelos Pinto', 'bd87a585da926cad09eac419e2c09a45', 'ativo', '', '04/08/1992', 1110117, 'davi.uece@gmail.com', 'davi@acens.com.br', '87798171', '96672833', 'Cajazeiras', 'D', 333, '60864-450', '08/2011', 'Presidente', 'davi.uece', ''),
(8, 'Teste', 'Teste', '827ccb0eea8a706c4c34a16891f84e7b', 'ativo', '', '20/04/1992', 1110117, 'nicolascc.uecwe@gmail.com', '', '88444043', '', '', '', 0, '', '10/2011', 'Assessor de Financeiro', '', ''),
(9, 'tes', 'tes', 'e10adc3949ba59abbe56e057f20f883e', 'ativo', '', '20/04/1992', 1130476, 'nicolascc.suedce@gmail.com', '', '88219784', '', '', '', 0, '', '10/2011', 'Assessor de Financeiro', '', ''),
(10, 'Eduardo', 'Eduardo Maranhão Braga', '5c152c75d908272374bbf5075bbb93d0', 'ativo', '', '19/09/1990', 1062959, 'eduardomb.uece@gmail.com', '', '99999999', '', '', '', 0, '', '01/11/2012', 'Diretor de Projetos', '', ''),
(11, 'Carlos', 'Carlos Joao', 'e10adc3949ba59abbe56e057f20f883e', '', '', '04/12/1994', 1130437, 'nicolascc.susdfecve@gmail.com', '', '(85) 2323-4234', '', '', '', 0, '', '01/01/1993', 'dirfinanceiro', '', ''),
(12, 'Jeovania', 'Jeovania Lopes Abreu', 'e10adc3949ba59abbe56e057f20f883e', '', '', '13/12/1990', 1021172, 'jeovaniaabru@gmail.com', 'jeovania@acens.com.br', '(85) 8503-9593', '', '', 'Av. Deputado Paulino Rocha', 208, '61880-000', '01/11/2012', 'dirmarketing', 'lopes.jeovania', 'Jeovania');

-- --------------------------------------------------------

--
-- Estrutura da tabela `notificacao`
--

CREATE TABLE IF NOT EXISTS `notificacao` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `acao` varchar(255) NOT NULL,
  `aonde` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `de` varchar(255) NOT NULL,
  `para` varchar(255) NOT NULL,
  `data` varchar(255) NOT NULL,
  `status` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `notificacao`
--

INSERT INTO `notificacao` (`id`, `acao`, `aonde`, `link`, `de`, `para`, `data`, `status`) VALUES
(1, 'modificou o arquivo', 'Projetos', '', 'Nicolas', 'Andre/Alisson', '16/06/2013//14:30', 0),
(2, 'comentou sobre o cartão', 'S.O.G.', '', 'Andre', 'Davi/Nicolas', '16/06/2013//14:34', 0),
(3, 'deu checkin no card', 'ESALQ', '', 'Nicolas', 'Eduardo/Hallisson', '16/06/2013//14:36', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `postit`
--

CREATE TABLE IF NOT EXISTS `postit` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `postit_chave_pro` int(255) NOT NULL,
  `postit_chave_sprint` int(255) NOT NULL,
  `postit_titulo` varchar(255) NOT NULL,
  `postit_prioridade` varchar(255) NOT NULL,
  `postit_horas` int(255) NOT NULL,
  `postit_conteudo` varchar(255) NOT NULL,
  `postit_chave_membro` varchar(255) NOT NULL,
  `postit_status` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `presenca`
--

CREATE TABLE IF NOT EXISTS `presenca` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `id_memb` int(255) NOT NULL,
  `date` date NOT NULL,
  `atividade` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `presenca`
--

INSERT INTO `presenca` (`id`, `id_memb`, `date`, `atividade`) VALUES
(3, 1, '2013-08-04', 'Inseirr\r\n'),
(4, 1, '2013-08-07', 'sdkgjbsdlsd[sf'),
(5, 1, '2013-08-01', 'sdkgjbsdlsd[sf'),
(6, 1, '2013-08-12', ' fvxbvlkvslkdv fsdfksblfsd'),
(7, 1, '2013-08-18', 'lfdjbdlvbkd;blvxbxbv xb\r\nbdfbdb,d \r\nbdghçfd\r\nfb:FG\r\n');

-- --------------------------------------------------------

--
-- Estrutura da tabela `projetos`
--

CREATE TABLE IF NOT EXISTS `projetos` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `pro_nome` varchar(255) NOT NULL,
  `pro_categoria` varchar(255) NOT NULL,
  `pro_inicio` varchar(255) NOT NULL,
  `pro_final` varchar(255) NOT NULL,
  `pro_prazo` varchar(255) NOT NULL,
  `pro_obs` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `projetos`
--

INSERT INTO `projetos` (`id`, `pro_nome`, `pro_categoria`, `pro_inicio`, `pro_final`, `pro_prazo`, `pro_obs`) VALUES
(1, 'SOG', 'Interno', '10/06/2013', '', '20/08/2013', 'Sistema de Gestão'),
(2, 'Plastec', '12', '01/01/2013', '', '20/06/2013', 'sdashdasgd'),
(3, 'Ecos', '12', '20/12/2012', '', '12/05/2013', '12'),
(4, 'Teste4', '12', '20/12/2012', '', '20/06/2014', 'wewrwv');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sprint`
--

CREATE TABLE IF NOT EXISTS `sprint` (
  `sprint_chave_pro` int(255) NOT NULL,
  `sprint_numero` int(255) NOT NULL,
  `sprint_inicio` varchar(255) NOT NULL,
  `sprint_final` varchar(255) NOT NULL,
  `sprint_pontos` int(255) NOT NULL,
  `sprint_obs` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
