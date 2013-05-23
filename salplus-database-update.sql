-- Database strucutre for SAL PLUS update
-- Copyright : Luis E. S. Dias 2013
-- smartbyte.systems@gmail.com

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Table structure for table `aditivos_contratos`
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
  `valor_global` double(12,2) DEFAULT NULL,
  `valor_parcela` double(12,2) DEFAULT NULL,
  `prazo` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `contrato_id` (`contrato_id`),
  KEY `tipoaditivo_id` (`tipoaditivo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  `valor_parcela` double(12,2) DEFAULT NULL,
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
  `percentual_garantia` float(6,2) DEFAULT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------
CREATE TABLE IF NOT EXISTS `ocorrencias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dt_ocorrencia` date DEFAULT '0000-00-00',
  `texto_ocorrencia` text,
  `contrato_id` int(11) NOT NULL,
  `tipoocorrencia_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `contrato_id` (`contrato_id`),
  KEY `tipoocorrencia_id` (`tipoocorrencia_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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

CREATE TABLE IF NOT EXISTS `recursos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contrato_id` int(11) NOT NULL DEFAULT '0',
  `pessoa_id` int(11) NOT NULL DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `contrato_id` (`contrato_id`),
  KEY `pessoa_id` (`pessoa_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Table structure for table `pessoas_contrato`
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

ALTER TABLE `ocorrencias`
  ADD CONSTRAINT `ocorrencias_ibfk_1` FOREIGN KEY (`contrato_id`) REFERENCES `contratos` (`id`),
  ADD CONSTRAINT `ocorrencias_ibfk_2` FOREIGN KEY (`tipoocorrencia_id`) REFERENCES `tipoocorrencias` (`id`);

ALTER TABLE `aditivos`
  ADD CONSTRAINT `aditivos_ibfk_1` FOREIGN KEY (`tipoaditivo_id`) REFERENCES `tipoaditivos` (`id`),
  ADD CONSTRAINT `aditivos_ibfk_2` FOREIGN KEY (`contrato_id`) REFERENCES `contratos` (`id`);

ALTER TABLE `recursos`
  ADD CONSTRAINT `recursos_ibfk_1` FOREIGN KEY (`pessoa_id`) REFERENCES `pessoas` (`id`),
  ADD CONSTRAINT `recursos_ibfk_2` FOREIGN KEY (`contrato_id`) REFERENCES `contratos` (`id`);

ALTER TABLE `contratos`
  ADD CONSTRAINT `contratos_ibfk_1` FOREIGN KEY (`situacao_id`) REFERENCES `situacoes` (`id`),
  ADD CONSTRAINT `contratos_ibfk_2` FOREIGN KEY (`reajuste_id`) REFERENCES `reajustes` (`id`),
  ADD CONSTRAINT `contratos_ibfk_3` FOREIGN KEY (`garantia_id`) REFERENCES `garantias` (`id`),
  ADD CONSTRAINT `contratos_ibfk_4` FOREIGN KEY (`licitacao_id`) REFERENCES `licitacoes` (`id`);

ALTER TABLE `recebimentos`
  ADD CONSTRAINT `recebimentos_ibfk_1` FOREIGN KEY (`contrato_id`) REFERENCES `contratos` (`id`);