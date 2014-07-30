

-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 30/07/2014 às 23:52:14
-- Versão do Servidor: 5.1.69
-- Versão do PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `u835271048_book`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `albuns`
--

CREATE TABLE IF NOT EXISTS `albuns` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` int(11) NOT NULL,
  `titulo` varchar(128) NOT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `status` int(1) DEFAULT '0',
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `permissao` int(1) DEFAULT NULL,
  `capa` varchar(255) DEFAULT 'default.jpg',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `amisade`
--

CREATE TABLE IF NOT EXISTS `amisade` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `de` int(11) NOT NULL,
  `para` int(11) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=79 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `artigos`
--

CREATE TABLE IF NOT EXISTS `artigos` (
  `artigo_id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(200) NOT NULL,
  `likes` int(11) NOT NULL,
  PRIMARY KEY (`artigo_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `depimentos`
--

CREATE TABLE IF NOT EXISTS `depimentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `de` int(11) NOT NULL,
  `para` int(11) NOT NULL,
  `depoimento` text NOT NULL,
  `data` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `status` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fotos`
--

CREATE TABLE IF NOT EXISTS `fotos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `album` int(11) NOT NULL,
  `foto` varchar(128) NOT NULL,
  `views` int(11) NOT NULL DEFAULT '1',
  `data` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `legenda` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=149 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `likes`
--

CREATE TABLE IF NOT EXISTS `likes` (
  `like_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `artigo_id` int(11) NOT NULL,
  PRIMARY KEY (`like_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `medalha`
--

CREATE TABLE IF NOT EXISTS `medalha` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `de` int(11) NOT NULL,
  `para` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `medalha` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `msgs`
--

CREATE TABLE IF NOT EXISTS `msgs` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `msg` text COLLATE utf8_unicode_ci NOT NULL,
  `titulo` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `data` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `hora` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `ip` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `notificacoes`
--

CREATE TABLE IF NOT EXISTS `notificacoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` int(1) NOT NULL,
  `uid` int(11) NOT NULL,
  `result` varchar(255) NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=69 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `perguntas`
--

CREATE TABLE IF NOT EXISTS `perguntas` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `pergunta` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` char(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` datetime DEFAULT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `postagens`
--

CREATE TABLE IF NOT EXISTS `postagens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `texto` text COLLATE utf8_unicode_ci NOT NULL,
  `de` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `recados`
--

CREATE TABLE IF NOT EXISTS `recados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `de` int(11) NOT NULL,
  `para` varchar(10) NOT NULL,
  `recado` text NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=117 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `respostas`
--

CREATE TABLE IF NOT EXISTS `respostas` (
  `unico` mediumint(9) NOT NULL AUTO_INCREMENT,
  `id` mediumint(9) DEFAULT NULL,
  `resposta` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` datetime DEFAULT NULL,
  `voto` mediumint(4) DEFAULT '0',
  UNIQUE KEY `unico` (`unico`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(64) NOT NULL,
  `senha` varchar(128) NOT NULL,
  `nome` varchar(32) NOT NULL,
  `sobrenome` varchar(200) NOT NULL,
  `nascimento` date NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `imagem` varchar(128) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `cadastro` date NOT NULL,
  `nivel` int(1) NOT NULL DEFAULT '0',
  `interessado` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `videos`
--

CREATE TABLE IF NOT EXISTS `videos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` int(11) NOT NULL,
  `embed` varchar(128) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descricao` text,
  `status` int(1) NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
