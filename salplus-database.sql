-- Database strucutre for SAL PLUS update
-- Copyright : Luis E. S. Dias 2013
-- smartbyte.systems@gmail.com


SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sal`
--

-- --------------------------------------------------------

--
-- Table structure for table `aditivos`
--

CREATE TABLE IF NOT EXISTS `aditivos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numero` varchar(15) NOT NULL,
  `contrato_id` int(11) NOT NULL,
  `numero_processo` varchar(15) DEFAULT NULL,
  `ano_processo` varchar(4) DEFAULT NULL,
  `tipoaditivo_id` int(11) DEFAULT NULL,
  `dt_assinatura` date DEFAULT NULL,
  `dt_publicacao` date DEFAULT NULL,
  `veiculo_publicacao` varchar(50) DEFAULT NULL,
  `texto_aditivo` text,
  `documento` varchar(255) DEFAULT NULL,
  `valor_global` float(12,2) DEFAULT NULL,
  `valor_parcela` float(12,2) DEFAULT NULL,
  `prazo` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `contrato_id` (`contrato_id`),
  KEY `tipoaditivo_id` (`tipoaditivo_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `aditivos`
--

INSERT INTO `aditivos` (`id`, `numero`, `contrato_id`, `numero_processo`, `ano_processo`, `tipoaditivo_id`, `dt_assinatura`, `dt_publicacao`, `veiculo_publicacao`, `texto_aditivo`, `documento`, `valor_global`, `valor_parcela`, `prazo`, `created`, `modified`, `modified_by`) VALUES
(4, '500A-ADT', 9, '300', '2013', 1, '2013-05-21', '2013-05-30', 'D.O.U.', 'Nunc auctor molestie elit eu sollicitudin. Sed et ullamcorper dui. Morbi in nibh sapien. Donec egestas velit in mauris varius eu venenatis nibh lobortis. Vivamus vitae urna purus. Vivamus varius tempor lacinia. Etiam iaculis viverra est sed tempus. Curabitur accumsan mauris et felis lacinia luctus. Sed non faucibus enim. Fusce eu dui arcu, et adipiscing mauris. Nulla nec felis eu nibh interdum accumsan fringilla in ligula.\r\n', 'img/aditivos/exemplo-aditivo.jpg', 150000.00, 15000.00, 365, '2013-05-21 19:05:32', '2013-05-21 19:44:53', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contratantes`
--

CREATE TABLE IF NOT EXISTS `contratantes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `tipo` varchar(7) NOT NULL,
  `categoria` varchar(10) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `contratantes`
--

INSERT INTO `contratantes` (`id`, `name`, `tipo`, `categoria`, `created`, `modified`, `modified_by`) VALUES
(1, 'Depto Nacional de Infra-Estrutura de Transportes', 'Adm Dir', 'União', '2009-03-24 09:00:00', '2011-09-29 21:41:06', 1),
(23, 'Fundação Univers.Federal/MS', 'Fdc Pub', 'União', '2011-09-29 21:29:55', '2011-09-29 21:41:23', NULL),
(26, '1 Batalhão de Comunicações Divisionario/RS', 'Autarq', 'Estadual', '2011-09-29 21:37:54', '2011-09-29 21:40:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contratos`
--

CREATE TABLE IF NOT EXISTS `contratos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `situacao_id` int(11) DEFAULT NULL,
  `numero` varchar(15) DEFAULT NULL,
  `objeto` text,
  `regime_execucao` text,
  `valor_global` double(12,2) DEFAULT NULL,
  `valor_parcela` float(12,2) DEFAULT NULL,
  `condicoes_pagto` text,
  `criterios` text,
  `dt_base` date DEFAULT NULL,
  `dt_inicio` date DEFAULT NULL,
  `prazo_vigencia` int(11) DEFAULT NULL,
  `dt_conclusao` date DEFAULT NULL,
  `dt_assinatura` date DEFAULT NULL,
  `dt_publicacao` date DEFAULT NULL,
  `veiculo_publicacao` varchar(50) DEFAULT NULL,
  `reajuste_id` int(11) DEFAULT NULL,
  `atualizacao_monetaria` int(11) DEFAULT NULL,
  `garantia_id` int(11) DEFAULT NULL,
  `percentual_garantia` float(12,2) DEFAULT NULL,
  `numero_processo` varchar(15) DEFAULT NULL,
  `ano_processo` varchar(4) DEFAULT NULL,
  `licitacao_id` int(11) DEFAULT NULL,
  `documento` varchar(255) DEFAULT NULL,
  `numero_empenho` varchar(15) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `situacao_id` (`situacao_id`),
  KEY `reajuste_id` (`reajuste_id`),
  KEY `garantia_id` (`garantia_id`),
  KEY `licitacao_id` (`licitacao_id`),
  KEY `created` (`created`),
  KEY `modified` (`modified`),
  KEY `modified_by` (`modified_by`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `contratos`
--

INSERT INTO `contratos` (`id`, `situacao_id`, `numero`, `objeto`, `regime_execucao`, `valor_global`, `valor_parcela`, `condicoes_pagto`, `criterios`, `dt_base`, `dt_inicio`, `prazo_vigencia`, `dt_conclusao`, `dt_assinatura`, `dt_publicacao`, `veiculo_publicacao`, `reajuste_id`, `atualizacao_monetaria`, `garantia_id`, `percentual_garantia`, `numero_processo`, `ano_processo`, `licitacao_id`, `documento`, `numero_empenho`, `created`, `modified`, `modified_by`) VALUES
(9, 1, '500A', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae orci quam, sit amet luctus libero. Quisque malesuada vulputate libero ut molestie. Quisque porttitor rutrum ligula quis sollicitudin. Duis at erat eu urna condimentum auctor quis et nisl. Proin sed odio laoreet lectus bibendum facilisis vel a tellus. Aliquam erat volutpat. Integer et lacus vitae elit varius cursus sit amet a massa.\r\n', 'In vestibulum ultrices lacus a posuere. Praesent mauris eros, aliquam non sollicitudin sit amet, vehicula id leo. Fusce pharetra scelerisque lorem, et porta magna viverra ac. Nulla non diam mi, et consectetur massa. Vestibulum nisi lectus, varius et mattis sagittis, scelerisque eget sapien. Mauris ante urna, suscipit ut auctor id, lacinia nec velit. Vivamus ligula mauris, blandit a semper eget, cursus sit amet lacus. Nam dapibus arcu sit amet tortor fringilla in facilisis purus interdum. Nullam iaculis elit ornare magna porttitor a commodo mauris ullamcorper.\r\n', 100000.00, 10000.00, 'Etiam bibendum nulla a mauris pharetra elementum. Morbi fringilla libero a nibh porta suscipit. Duis at quam consectetur lectus vulputate fermentum. Quisque placerat lobortis quam vitae sodales. Mauris gravida pellentesque ipsum eu sollicitudin. Aenean felis urna, euismod non pretium non, mollis ut velit. Etiam id accumsan orci. Nam porta neque consectetur enim egestas hendrerit. Vivamus tristique congue sodales. Pellentesque non odio vel mauris iaculis suscipit.\r\n', 'Duis leo nibh, tincidunt nec iaculis at, condimentum a lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Quisque quis felis nec nulla consectetur pharetra. In a lacus ligula. Aenean convallis massa justo, pellentesque porta lectus. Duis condimentum accumsan velit ut viverra. Nam sit amet quam lorem. Nullam auctor massa id est congue luctus. Praesent vel dictum turpis. Phasellus arcu velit, tincidunt vitae rutrum eget, porttitor et sapien. Suspendisse eu massa a turpis ullamcorper venenatis. Aliquam ac odio justo, sed malesuada justo. Integer euismod nibh quis lorem dignissim condimentum.\r\n', CURDATE() - INTERVAL 20 DAY, CURDATE() - INTERVAL 90 DAY, NULL, CURDATE() + INTERVAL 10 MONTH, CURDATE() - INTERVAL 80 DAY, CURDATE() - INTERVAL 80 DAY, 'D.O.U.', 5, 10, 1, 5.00, '100', '2013', 1, 'img/contratos/exemplo-contrato.jpg', '100E', '2013-03-04 13:50:59', '2013-05-21 19:43:47', 1);

-- --------------------------------------------------------

--
-- Table structure for table `empresas`
--

CREATE TABLE IF NOT EXISTS `empresas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `razao_social` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `cnpj` varchar(14) DEFAULT NULL,
  `endereco` varchar(50) DEFAULT NULL,
  `complemento` varchar(20) DEFAULT NULL,
  `bairro` varchar(30) DEFAULT NULL,
  `cidade` varchar(30) DEFAULT NULL,
  `estado` char(2) DEFAULT NULL,
  `cep` varchar(8) DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `website` varchar(50) DEFAULT NULL,
  `tipo_emp` varchar(12) DEFAULT NULL,
  `contato_01` varchar(30) DEFAULT NULL,
  `telefone_01` varchar(15) DEFAULT NULL,
  `email_01` varchar(50) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `empresas`
--

INSERT INTO `empresas` (`id`, `razao_social`, `name`, `cnpj`, `endereco`, `complemento`, `bairro`, `cidade`, `estado`, `cep`, `telefone`, `website`, `tipo_emp`, `contato_01`, `telefone_01`, `email_01`, `created`, `modified`, `modified_by`) VALUES
(3, 'Concorrente B LTDA', 'Concorrente B', '1234567890', 'Rua ABC 123', '999', 'Centro', 'Rio de Janeiro', 'RJ', '20000100', '25558989', 'www.concorrente-b.com.br', 'Concorrente', 'Ciclano', '5557896', 'ciclano@concorrente-b.com.br', NULL, '2013-05-20 18:30:24', 1),
(5, 'Concorrente A LTDA', 'Concorrente A', '', '', '', '', '', '', '', '', '', 'Concorrente', '', '', '', '2012-09-26 19:17:48', '2013-05-20 18:30:36', 1),
(6, 'Parceira A LTDA', 'Parceira A', '', '', '', '', '', '', '', '', '', 'Parceiro', '', '', '', '2012-09-26 19:39:50', '2013-05-20 18:31:17', 1),
(7, 'Nossa Empresa LTDA', 'Nossa Empresa', '', '', '', '', '', '', '', '', '', 'Outro', '', '', '', '2013-05-21 18:01:55', '2013-05-21 18:01:55', 1);

-- --------------------------------------------------------

--
-- Table structure for table `eventos`
--

CREATE TABLE IF NOT EXISTS `eventos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dt_eve` date DEFAULT '0000-00-00',
  `texto_eve` text,
  `tipoevento_id` int(11) DEFAULT NULL,
  `licitacao_id` int(11) NOT NULL DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `licitacao_id` (`licitacao_id`),
  KEY `tipoevento_id` (`tipoevento_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `eventos`
--

INSERT INTO `eventos` (`id`, `dt_eve`, `texto_eve`, `tipoevento_id`, `licitacao_id`, `created`, `modified`, `modified_by`) VALUES
(3, CURDATE() + INTERVAL 10 DAY, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nibh lacus, lobortis nec hendrerit a, hendrerit eu nibh. Nullam nibh purus, dignissim sit amet commodo non, porttitor quis ipsum. Aliquam scelerisque dolor et risus mollis ullamcorper.', 10, 2, '2009-04-29 10:48:26', '2013-05-21 19:22:23', 1),
(5, CURDATE() + INTERVAL 25 DAY, 'Donec in est at libero luctus mollis ac dignissim mi. Phasellus id sem non diam pretium tristique ut quis lectus. Mauris justo erat, tempor in vehicula nec, commodo sed neque. Ut gravida interdum libero, vel molestie est mollis sed. Nulla quis libero ante, quis blandit massa. Suspendisse ac arcu ante, ut aliquet lorem. Cras a ante ac felis facilisis mattis in sit amet lacus. Nam in eros erat, ut vehicula erat. Aenean vitae ligula id neque molestie vulputate nec sed felis.\r\n', 9, 2, '2009-05-03 19:53:23', '2013-05-21 19:22:17', 1),
(10, CURDATE() + INTERVAL 60 DAY, 'Donec purus justo, auctor eu viverra non, faucibus vel arcu. Duis bibendum lorem sollicitudin neque posuere interdum. Proin purus massa, vulputate non fermentum quis, faucibus aliquam libero. Fusce sodales volutpat sagittis. Vivamus accumsan felis et urna mattis viverra. Proin eu arcu lectus, ut faucibus orci. Quisque in mi in massa rhoncus porttitor sed vel diam.\r\n', 1, 2, '2011-09-26 22:28:44', '2013-05-21 19:22:09', 1);

-- --------------------------------------------------------

--
-- Table structure for table `garantias`
--

CREATE TABLE IF NOT EXISTS `garantias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(20) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `garantias`
--

INSERT INTO `garantias` (`id`, `title`, `created`, `modified`, `modified_by`) VALUES
(1, 'Caução em Dinheiro', '2013-02-28 00:00:00', '2013-02-28 00:00:00', 1),
(2, 'Seguro Garantia', '2013-02-28 00:00:00', '2013-02-28 00:00:00', 1),
(3, 'Fiança Bancária', '2013-02-28 00:00:00', '2013-02-28 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `licitacoes`
--

CREATE TABLE IF NOT EXISTS `licitacoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(12) DEFAULT NULL,
  `cl` varchar(50) DEFAULT NULL,
  `num_edital` varchar(10) DEFAULT NULL,
  `indice` varchar(10) DEFAULT NULL,
  `local` varchar(50) DEFAULT NULL,
  `objeto` text,
  `historico` text,
  `dt_abertura` date DEFAULT NULL,
  `modalidade_id` int(11) NOT NULL DEFAULT '0',
  `tipolicitacao_id` int(11) NOT NULL DEFAULT '0',
  `regime` varchar(10) NOT NULL,
  `usuario_id` int(11) NOT NULL DEFAULT '0',
  `vlr_lic` float(10,2) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `contratante_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `num_edital` (`num_edital`,`indice`),
  KEY `modalidade_id` (`modalidade_id`),
  KEY `modified_by` (`modified_by`),
  KEY `tipolicitacao_id` (`tipolicitacao_id`),
  KEY `contrato_id` (`contratante_id`),
  KEY `usuario_id` (`usuario_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `licitacoes`
--

INSERT INTO `licitacoes` (`id`, `status`, `cl`, `num_edital`, `indice`, `local`, `objeto`, `historico`, `dt_abertura`, `modalidade_id`, `tipolicitacao_id`, `regime`, `usuario_id`, `vlr_lic`, `created`, `modified`, `modified_by`, `contratante_id`) VALUES
(1, 'Encerrada', '999', '100', '100', 'Rua A, Número 1', '', '', CURDATE() - INTERVAL 12 MONTH, 1, 3, 'Global', 1, 60000.00, NULL, '2013-05-23 16:49:55', 1, 1),
(2, 'Publicada', '', '200', '200', 'Rua B, Número 2', 'Licitação Exemplo', 'Licitação Exemplo', CURDATE() - INTERVAL 3 MONTH, 2, 3, 'Unitário', 1, 150000.00, NULL, '2013-05-21 19:28:57', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `lotes`
--

CREATE TABLE IF NOT EXISTS `lotes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `num_lote` varchar(5) DEFAULT NULL,
  `vlr_lote` float(12,2) DEFAULT NULL,
  `prazo_lote` int(11) DEFAULT NULL,
  `licitacao_id` int(11) NOT NULL DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `licitacao_id` (`licitacao_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `lotes`
--

INSERT INTO `lotes` (`id`, `num_lote`, `vlr_lote`, `prazo_lote`, `licitacao_id`, `created`, `modified`, `modified_by`) VALUES
(2, '01', 10000.00, 150, 1, NULL, '2013-05-21 18:14:40', 1),
(3, '02', 20000.00, 180, 1, NULL, '2013-05-21 18:14:51', 1),
(4, '03', 30000.00, 150, 1, NULL, '2013-05-21 18:15:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `modalidades`
--

CREATE TABLE IF NOT EXISTS `modalidades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `title` (`title`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `modalidades`
--

INSERT INTO `modalidades` (`id`, `title`, `created`, `modified`, `modified_by`) VALUES
(1, 'Concorrência', '2009-03-24 09:00:00', '2011-09-15 16:11:03', NULL),
(2, 'Tomada de preços', '2009-03-24 09:00:00', '2011-09-15 16:11:09', NULL),
(3, 'Convite', '2009-03-24 09:00:00', '2011-09-15 16:11:21', NULL),
(4, 'Concurso', '2009-03-24 09:00:00', '2011-09-15 16:11:50', NULL),
(5, 'Leilão', '2011-09-15 16:12:02', '2011-09-15 16:12:02', NULL),
(6, 'Pregão', '2011-09-15 18:47:19', '2011-09-15 18:47:19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ocorrencias`
--

CREATE TABLE IF NOT EXISTS `ocorrencias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dt_ocorrencia` date DEFAULT '0000-00-00',
  `texto_ocorrencia` text,
  `contrato_id` int(11) NOT NULL,
  `tipoocorrencia_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `modified_by` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `contrato_id` (`contrato_id`),
  KEY `tipoocorrencia_id` (`tipoocorrencia_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `ocorrencias`
--

INSERT INTO `ocorrencias` (`id`, `dt_ocorrencia`, `texto_ocorrencia`, `contrato_id`, `tipoocorrencia_id`, `created`, `modified`, `modified_by`) VALUES
(4,  CURDATE() - INTERVAL 15 DAY, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae orci quam, sit amet luctus libero. Quisque malesuada vulputate libero ut molestie. Quisque porttitor rutrum ligula quis sollicitudin. Duis at erat eu urna condimentum auctor quis et nisl. Proin sed odio laoreet lectus bibendum facilisis vel a tellus. Aliquam erat volutpat. Integer et lacus vitae elit varius cursus sit amet a massa.', 9, 1, '2013-04-20 14:16:50', '2013-05-21 19:07:13', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pessoas`
--

CREATE TABLE IF NOT EXISTS `pessoas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `celular` varchar(15) DEFAULT NULL,
  `fax` varchar(15) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `papel` varchar(25) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `pessoas`
--

INSERT INTO `pessoas` (`id`, `nome`, `email`, `telefone`, `celular`, `fax`, `website`, `papel`, `created`, `modified`, `modified_by`) VALUES
(1, 'João', 'joao@internet.com', '555-1234', '', '', '', 'Supervisor', '2013-03-01 17:51:24', '2013-05-21 17:55:37', 1),
(5, 'Maria', 'maria@internet.com', '555-6549', '', '', '', 'Analista', '2013-03-01 19:07:02', '2013-05-21 17:56:39', 1),
(7, 'José', 'jose@internet.com', '555-9876', '', '', '', 'Gerente', '2013-03-01 19:07:24', '2013-05-21 17:56:12', 1);

-- --------------------------------------------------------

--
-- Table structure for table `reajustes`
--

CREATE TABLE IF NOT EXISTS `reajustes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(20) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `reajustes`
--

INSERT INTO `reajustes` (`id`, `title`, `created`, `modified`, `modified_by`) VALUES
(1, 'Mensal', '2013-02-28 00:00:00', '2013-02-28 00:00:00', 1),
(2, 'Bimestral', '2013-02-28 00:00:00', '2013-02-28 00:00:00', 1),
(3, 'Trimestral', '2013-02-28 00:00:00', '2013-02-28 00:00:00', 1),
(4, 'Semestral', '2013-02-28 00:00:00', '2013-02-28 00:00:00', 1),
(5, 'Anual', '2013-02-28 00:00:00', '2013-02-28 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `recebimentos`
--

CREATE TABLE IF NOT EXISTS `recebimentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contrato_id` int(11) NOT NULL,
  `dt_emissao` date DEFAULT NULL,
  `dt_vencto` date DEFAULT NULL,
  `dt_pagto` date DEFAULT NULL,
  `numero_documento` varchar(25) DEFAULT NULL,
  `valor_parcela` double DEFAULT NULL,
  `valor_pago` double DEFAULT NULL,
  `centro_de_custo` varchar(25) DEFAULT NULL,
  `codigo_historico` varchar(25) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `recebimentos_ibfk_1` (`contrato_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `recebimentos`
--

INSERT INTO `recebimentos` (`id`, `contrato_id`, `dt_emissao`, `dt_vencto`, `dt_pagto`, `numero_documento`, `valor_parcela`, `valor_pago`, `centro_de_custo`, `codigo_historico`, `created`, `modified`, `modified_by`) VALUES
(2, 9, CURDATE() - INTERVAL 70 DAY, CURDATE() - INTERVAL 60 DAY, CURDATE() - INTERVAL 59 DAY, 'NF100', 15000, 15000, '', '', '2013-04-19 16:39:38', '2013-05-21 19:19:16', 1),
(5, 9, CURDATE() - INTERVAL 40 DAY, CURDATE() - INTERVAL 30 DAY, '0000-00-00', 'NF200', 15000, NULL, '', '', '2013-05-08 22:33:06', '2013-05-21 19:13:18', 1),
(6, 9, CURDATE(), CURDATE(), '0000-00-00', 'NF300', 15000, NULL, '', '', '2013-05-21 19:12:39', '2013-05-21 19:18:40', 1);

-- --------------------------------------------------------

--
-- Table structure for table `recursos`
--

CREATE TABLE IF NOT EXISTS `recursos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contrato_id` int(11) NOT NULL DEFAULT '0',
  `pessoa_id` int(11) NOT NULL DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `candidate_key_1` (`contrato_id`,`pessoa_id`),
  KEY `contrato_id` (`contrato_id`),
  KEY `pessoa_id` (`pessoa_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `recursos`
--

INSERT INTO `recursos` (`id`, `contrato_id`, `pessoa_id`, `created`, `modified`, `modified_by`) VALUES
(11, 9, 1, '2013-05-21 19:06:31', '2013-05-21 19:06:31', 1);

-- --------------------------------------------------------

--
-- Table structure for table `resultados`
--

CREATE TABLE IF NOT EXISTS `resultados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `licitacao_id` int(11) NOT NULL DEFAULT '0',
  `empresa_id` int(11) NOT NULL DEFAULT '0',
  `habilitacao` tinyint(1) DEFAULT NULL,
  `nota_tecnica` float(6,2) DEFAULT '0.00',
  `preco` float(10,2) DEFAULT '0.00',
  `desconto` float(10,2) DEFAULT '0.00',
  `nota_de_preco` float(6,2) DEFAULT '0.00',
  `nota_final` float(6,2) DEFAULT '0.00',
  `vencedor` tinyint(1) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `resultados_candidate_key_1` (`licitacao_id`,`empresa_id`),
  KEY `licitacao_id` (`licitacao_id`),
  KEY `empresa_id` (`empresa_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=70 ;

--
-- Dumping data for table `resultados`
--

INSERT INTO `resultados` (`id`, `licitacao_id`, `empresa_id`, `habilitacao`, `nota_tecnica`, `preco`, `desconto`, `nota_de_preco`, `nota_final`, `vencedor`, `created`, `modified`, `modified_by`) VALUES
(66, 1, 3, 0, 6.00, 6.00, 6.00, 6.00, 6.00, 0, NULL, '2013-05-23 16:49:06', 1),
(67, 1, 5, 0, 5.00, 5.00, 5.00, 5.00, 5.00, 0, NULL, '2013-05-23 16:49:33', 1),
(68, 1, 6, 0, 3.00, 3.00, 3.00, 3.00, 3.00, 0, NULL, '2013-05-23 16:49:24', 1),
(69, 1, 7, 1, 10.00, 10.00, 10.00, 10.00, 10.00, 1, NULL, '2013-05-23 16:49:41', 1);

-- --------------------------------------------------------

--
-- Table structure for table `situacoes`
--

CREATE TABLE IF NOT EXISTS `situacoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(20) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `situacoes`
--

INSERT INTO `situacoes` (`id`, `title`, `created`, `modified`, `modified_by`) VALUES
(1, 'Vigente', '2013-02-28 00:00:00', '2013-02-28 00:00:00', 1),
(2, 'Suspenso', '2013-02-28 00:00:00', '2013-02-28 00:00:00', 1),
(3, 'Rescindido', '2013-02-28 00:00:00', '2013-02-28 00:00:00', 1),
(4, 'Concluído', '2013-02-28 00:00:00', '2013-02-28 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tipoaditivos`
--

CREATE TABLE IF NOT EXISTS `tipoaditivos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(25) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tipoaditivos`
--

INSERT INTO `tipoaditivos` (`id`, `title`, `created`, `modified`, `modified_by`) VALUES
(1, 'Alteração de Valor', '2013-02-28 00:00:00', '2013-02-28 00:00:00', 1),
(2, 'Alteração de Prazo', '2013-02-28 00:00:00', '2013-02-28 00:00:00', 1),
(3, 'Alteração de Objeto', '2013-02-28 00:00:00', '2013-02-28 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tipoeventos`
--

CREATE TABLE IF NOT EXISTS `tipoeventos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(30) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `tipoeventos`
--

INSERT INTO `tipoeventos` (`id`, `title`, `created`, `modified`, `modified_by`) VALUES
(1, 'Abertura documentação', '0000-00-00 00:00:00', '2013-02-28 12:09:34', 0),
(2, 'Abertura proposta técnica', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(3, 'Abertura proposta de preços', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(4, 'Errata', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(5, 'Publicação no D.O.', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(6, 'Resultado', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(7, 'Homologação', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(8, 'Entrega da proposta', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(9, 'Certidões', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(10, 'Atestados', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(11, 'Prorrogação', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(12, 'Recorrer desabilitação', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(13, 'Esclarecimentos', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(15, 'Aviso no D.O.', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tipolicitacoes`
--

CREATE TABLE IF NOT EXISTS `tipolicitacoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `title` (`title`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tipolicitacoes`
--

INSERT INTO `tipolicitacoes` (`id`, `title`, `created`, `modified`, `modified_by`) VALUES
(1, 'Menor preço', '2009-03-24 09:00:00', NULL, NULL),
(2, 'Melhor técnica', '2009-03-24 09:00:00', NULL, NULL),
(3, 'Técnica e preço', '2009-03-24 09:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tipoocorrencias`
--

CREATE TABLE IF NOT EXISTS `tipoocorrencias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tipoocorrencias`
--

INSERT INTO `tipoocorrencias` (`id`, `title`, `created`, `modified`, `modified_by`) VALUES
(1, 'Modificação', '2013-02-09 00:00:00', '2013-02-09 00:00:00', 1),
(2, 'Fiscalização', '2013-02-09 00:00:00', '2013-02-09 00:00:00', 1),
(3, 'Sanção', '2013-02-09 00:00:00', '2013-02-09 00:00:00', 1),
(4, 'Prorrogação', '2013-02-09 00:00:00', '2013-02-09 00:00:00', 1),
(5, 'Errata', '2013-02-09 00:00:00', '2013-02-09 00:00:00', 1),
(6, 'Impugnação', '2013-02-09 00:00:00', '2013-02-09 00:00:00', 1),
(7, 'Paralisação', '2013-02-09 00:00:00', '2013-02-09 00:00:00', 1),
(8, 'Reinício', '2013-02-09 00:00:00', '2013-02-09 00:00:00', 1),
(9, 'Ocupação Provisória', '2013-02-09 00:00:00', '2013-02-09 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL DEFAULT '',
  `login` varchar(10) NOT NULL DEFAULT '',
  `senha` varchar(255) NOT NULL DEFAULT '',
  `perfil` varchar(5) NOT NULL DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `name`, `login`, `senha`, `perfil`, `created`, `modified`) VALUES
(1, 'Administrador', 'admin', 'ec0d7a657ead3e57bf7e93ecd46a3d0e864cc8d6', 'admin', '2009-03-24 09:00:00', NULL),
(2, 'Convidado teste', 'guest1', 'bec595df0df51f3e1863ccbfd1b9f43c7aba4878', 'guest', '2009-03-24 09:00:00', '2011-10-01 23:34:04'),
(5, 'Usuário teste', 'user1', 'bec595df0df51f3e1863ccbfd1b9f43c7aba4878', 'user', '2011-09-13 22:28:20', '2011-09-29 21:43:54');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `aditivos`
--
ALTER TABLE `aditivos`
  ADD CONSTRAINT `aditivos_ibfk_1` FOREIGN KEY (`tipoaditivo_id`) REFERENCES `tipoaditivos` (`id`),
  ADD CONSTRAINT `aditivos_ibfk_2` FOREIGN KEY (`contrato_id`) REFERENCES `contratos` (`id`);

--
-- Constraints for table `contratos`
--
ALTER TABLE `contratos`
  ADD CONSTRAINT `contratos_ibfk_1` FOREIGN KEY (`situacao_id`) REFERENCES `situacoes` (`id`),
  ADD CONSTRAINT `contratos_ibfk_2` FOREIGN KEY (`reajuste_id`) REFERENCES `reajustes` (`id`),
  ADD CONSTRAINT `contratos_ibfk_3` FOREIGN KEY (`garantia_id`) REFERENCES `garantias` (`id`),
  ADD CONSTRAINT `contratos_ibfk_4` FOREIGN KEY (`licitacao_id`) REFERENCES `licitacoes` (`id`);

--
-- Constraints for table `eventos`
--
ALTER TABLE `eventos`
  ADD CONSTRAINT `eventos_ibfk_1` FOREIGN KEY (`tipoevento_id`) REFERENCES `tipoeventos` (`id`),
  ADD CONSTRAINT `eventos_ibfk_2` FOREIGN KEY (`licitacao_id`) REFERENCES `licitacoes` (`id`);

--
-- Constraints for table `licitacoes`
--
ALTER TABLE `licitacoes`
  ADD CONSTRAINT `licitacoes_ibfk_1` FOREIGN KEY (`modalidade_id`) REFERENCES `modalidades` (`id`),
  ADD CONSTRAINT `licitacoes_ibfk_2` FOREIGN KEY (`tipolicitacao_id`) REFERENCES `tipolicitacoes` (`id`),
  ADD CONSTRAINT `licitacoes_ibfk_3` FOREIGN KEY (`contratante_id`) REFERENCES `contratantes` (`id`);

--
-- Constraints for table `lotes`
--
ALTER TABLE `lotes`
  ADD CONSTRAINT `lotes_ibfk_1` FOREIGN KEY (`licitacao_id`) REFERENCES `licitacoes` (`id`);

--
-- Constraints for table `ocorrencias`
--
ALTER TABLE `ocorrencias`
  ADD CONSTRAINT `ocorrencias_ibfk_1` FOREIGN KEY (`contrato_id`) REFERENCES `contratos` (`id`),
  ADD CONSTRAINT `ocorrencias_ibfk_2` FOREIGN KEY (`tipoocorrencia_id`) REFERENCES `tipoocorrencias` (`id`);

--
-- Constraints for table `recebimentos`
--
ALTER TABLE `recebimentos`
  ADD CONSTRAINT `recebimentos_ibfk_1` FOREIGN KEY (`contrato_id`) REFERENCES `contratos` (`id`);

--
-- Constraints for table `recursos`
--
ALTER TABLE `recursos`
  ADD CONSTRAINT `recursos_ibfk_1` FOREIGN KEY (`pessoa_id`) REFERENCES `pessoas` (`id`),
  ADD CONSTRAINT `recursos_ibfk_2` FOREIGN KEY (`contrato_id`) REFERENCES `contratos` (`id`);

--
-- Constraints for table `resultados`
--
ALTER TABLE `resultados`
  ADD CONSTRAINT `resultados_ibfk_1` FOREIGN KEY (`licitacao_id`) REFERENCES `licitacoes` (`id`),
  ADD CONSTRAINT `resultados_ibfk_2` FOREIGN KEY (`empresa_id`) REFERENCES `empresas` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
