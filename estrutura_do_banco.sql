-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 07, 2019 at 11:41 AM
-- Server version: 5.7.27-0ubuntu0.19.04.1
-- PHP Version: 7.2.19-0ubuntu0.19.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--
CREATE DATABASE IF NOT EXISTS `biblioteca` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `biblioteca`;

-- --------------------------------------------------------

--
-- Table structure for table `artigos`
--

DROP TABLE IF EXISTS `livros`;
CREATE TABLE IF NOT EXISTS `livros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `conteudo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `artigos`
--

INSERT INTO `livros` (`id`, `titulo`, `conteudo`) VALUES
(1, 'Livro- O Senhos dos anéis', 'O Senhor dos Anéis: uma narrativa viatica na literatura fantástica Resumo J.R.R. Tolkien (1892-1973), famoso escritor britânico, foi autor de obras muito conhecidas, dentre elas, a trilogia O Senhor dos Anéis, literatura fantástica, onde é narrada toda a história.'),
(2, 'Livro-O pequeno principe', 'Sobre O Pequeno Príncipe O Pequeno Príncipe é o título do livro do escritor francês Antoine de Saint-Exupéry (1900-1944), publicado em 1943. Narra a história do Pequeno Príncipe, herói de uma fábula, que sonhava um dia voar, virou piloto de avião e passou a reinar pelos céus, visitando os planetas e fazendo "amigos".'),
(3, 'Hq- Sandman', 'Lançada em 1988, a obra Sandman de Neil Gaiman reuniu todos tipos de fãs, e promete conquistar ainda mais com a chegada da adaptação feita pela Netflix. Entre histórias paralelas e principais, o reino do Sonhar pode parecer confuso para os iniciantes dos quadrinhos, mas seguir a história dos Sete Perpétuos é mais simples do que parece. Com um total de 13 arcos e 75 revistas, a trama principal de Sonho e as consequências de seu período enclausurado é o ponto de partida, mas você sabe como seguir daí?'),
(4, 'HQ-Sweet tooth', 'Sweet Tooth foi publicada entre 2009 e 2013, contando com 40 edições. A HQ foi criada por Jeff Lemire, e mostra um futuro pós-apocalíptico dez anos após um evento conhecido apenas como “O Flagelo”.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
