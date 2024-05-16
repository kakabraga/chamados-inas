-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 16-Maio-2024 às 08:47
-- Versão do servidor: 8.0.36-0ubuntu0.22.04.1
-- versão do PHP: 8.1.2-1ubuntu2.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `inas`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `acao`
--

CREATE TABLE `acao` (
  `id` int NOT NULL,
  `acao` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ordem` int NOT NULL,
  `data_check` bigint NOT NULL DEFAULT '0',
  `data_prevista` bigint NOT NULL DEFAULT '0',
  `qtd_dias` int NOT NULL DEFAULT '0',
  `id_etapa` int NOT NULL,
  `id_usuario` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `acesso`
--

CREATE TABLE `acesso` (
  `id_usuario` int NOT NULL,
  `id_modulo` int NOT NULL,
  `id_perfil` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `acesso`
--

INSERT INTO `acesso` (`id_usuario`, `id_modulo`, `id_perfil`) VALUES
(1, 1, 1),
(1, 2, 1),
(1, 3, 1),
(1, 4, 1),
(1, 5, 1),
(1, 6, 1),
(1, 7, 1),
(5, 3, 2),
(5, 5, 2),
(9, 3, 2),
(15, 5, 2),
(21, 3, 2),
(27, 3, 2),
(32, 3, 2),
(36, 3, 2),
(40, 3, 2),
(40, 6, 2),
(41, 6, 2),
(42, 6, 2),
(56, 3, 2),
(68, 3, 2),
(84, 3, 2),
(85, 3, 2),
(86, 3, 2),
(87, 3, 2),
(88, 3, 2),
(90, 3, 2),
(92, 3, 2),
(94, 7, 2),
(99, 3, 2),
(112, 3, 2),
(112, 5, 2),
(112, 7, 2),
(114, 7, 2),
(119, 3, 2),
(119, 5, 2),
(119, 7, 2),
(125, 3, 2),
(128, 3, 2),
(140, 3, 2),
(146, 3, 2),
(148, 3, 2),
(148, 5, 2),
(157, 3, 2),
(157, 5, 2),
(162, 3, 2),
(1001, 5, 2),
(1001, 6, 2),
(1006, 3, 2),
(2, 1, 3),
(2, 3, 3),
(3, 1, 3),
(3, 3, 3),
(4, 1, 3),
(4, 3, 3),
(5, 1, 3),
(5, 4, 3),
(6, 1, 3),
(6, 3, 3),
(6, 4, 3),
(7, 1, 3),
(7, 3, 3),
(7, 4, 3),
(9, 1, 3),
(9, 4, 3),
(10, 1, 3),
(10, 3, 3),
(10, 4, 3),
(11, 1, 3),
(11, 3, 3),
(11, 4, 3),
(12, 1, 3),
(12, 3, 3),
(12, 4, 3),
(13, 1, 3),
(13, 4, 3),
(15, 1, 3),
(15, 3, 3),
(15, 4, 3),
(16, 1, 3),
(16, 3, 3),
(16, 4, 3),
(17, 1, 3),
(17, 3, 3),
(17, 4, 3),
(18, 1, 3),
(18, 3, 3),
(18, 4, 3),
(19, 1, 3),
(19, 3, 3),
(19, 4, 3),
(20, 1, 3),
(20, 3, 3),
(20, 4, 3),
(21, 1, 3),
(21, 4, 3),
(22, 1, 3),
(22, 3, 3),
(22, 4, 3),
(23, 1, 3),
(23, 3, 3),
(23, 4, 3),
(24, 1, 3),
(24, 3, 3),
(24, 4, 3),
(25, 1, 3),
(25, 3, 3),
(25, 4, 3),
(26, 1, 3),
(26, 3, 3),
(26, 4, 3),
(27, 1, 3),
(27, 4, 3),
(28, 1, 3),
(28, 3, 3),
(28, 4, 3),
(29, 1, 3),
(29, 3, 3),
(29, 4, 3),
(30, 1, 3),
(30, 3, 3),
(30, 4, 3),
(31, 1, 3),
(31, 3, 3),
(31, 4, 3),
(32, 1, 3),
(32, 4, 3),
(33, 1, 3),
(33, 3, 3),
(33, 4, 3),
(34, 1, 3),
(34, 3, 3),
(34, 4, 3),
(35, 1, 3),
(35, 3, 3),
(35, 4, 3),
(36, 1, 3),
(36, 4, 3),
(37, 1, 3),
(37, 3, 3),
(37, 4, 3),
(38, 1, 3),
(38, 3, 3),
(38, 4, 3),
(39, 1, 3),
(39, 3, 3),
(39, 4, 3),
(40, 1, 3),
(40, 4, 3),
(41, 1, 3),
(41, 3, 3),
(41, 4, 3),
(42, 1, 3),
(42, 3, 3),
(42, 4, 3),
(43, 1, 3),
(43, 3, 3),
(43, 4, 3),
(44, 1, 3),
(44, 3, 3),
(44, 4, 3),
(45, 1, 3),
(45, 3, 3),
(45, 4, 3),
(46, 1, 3),
(46, 3, 3),
(46, 4, 3),
(47, 1, 3),
(47, 3, 3),
(47, 4, 3),
(48, 1, 3),
(48, 3, 3),
(48, 4, 3),
(50, 1, 3),
(50, 3, 3),
(50, 4, 3),
(51, 1, 3),
(51, 3, 3),
(51, 4, 3),
(52, 1, 3),
(52, 3, 3),
(52, 4, 3),
(53, 1, 3),
(53, 3, 3),
(53, 4, 3),
(54, 1, 3),
(54, 3, 3),
(54, 4, 3),
(55, 1, 3),
(55, 3, 3),
(55, 4, 3),
(56, 1, 3),
(56, 4, 3),
(57, 1, 3),
(57, 3, 3),
(57, 4, 3),
(58, 1, 3),
(58, 3, 3),
(58, 4, 3),
(59, 1, 3),
(59, 3, 3),
(59, 4, 3),
(60, 1, 3),
(60, 3, 3),
(60, 4, 3),
(61, 1, 3),
(61, 3, 3),
(61, 4, 3),
(62, 1, 3),
(62, 3, 3),
(62, 4, 3),
(63, 1, 3),
(63, 3, 3),
(63, 4, 3),
(64, 1, 3),
(64, 4, 3),
(65, 1, 3),
(65, 3, 3),
(65, 4, 3),
(66, 1, 3),
(66, 3, 3),
(66, 4, 3),
(68, 1, 3),
(68, 4, 3),
(70, 1, 3),
(70, 3, 3),
(70, 4, 3),
(71, 1, 3),
(71, 3, 3),
(71, 4, 3),
(73, 1, 3),
(73, 3, 3),
(73, 4, 3),
(74, 1, 3),
(74, 3, 3),
(74, 4, 3),
(75, 1, 3),
(75, 3, 3),
(75, 4, 3),
(76, 1, 3),
(76, 3, 3),
(76, 4, 3),
(77, 1, 3),
(77, 3, 3),
(77, 4, 3),
(79, 1, 3),
(79, 3, 3),
(79, 4, 3),
(80, 1, 3),
(80, 3, 3),
(80, 4, 3),
(81, 1, 3),
(81, 3, 3),
(81, 4, 3),
(82, 1, 3),
(82, 3, 3),
(82, 4, 3),
(83, 1, 3),
(83, 3, 3),
(83, 4, 3),
(84, 1, 3),
(84, 4, 3),
(85, 1, 3),
(85, 4, 3),
(86, 1, 3),
(86, 4, 3),
(87, 1, 3),
(87, 4, 3),
(88, 1, 3),
(88, 4, 3),
(89, 1, 3),
(89, 3, 3),
(89, 4, 3),
(90, 1, 3),
(90, 4, 3),
(91, 1, 3),
(91, 3, 3),
(91, 4, 3),
(92, 1, 3),
(92, 4, 3),
(94, 1, 3),
(94, 3, 3),
(94, 4, 3),
(95, 1, 3),
(95, 3, 3),
(95, 4, 3),
(97, 1, 3),
(97, 3, 3),
(97, 4, 3),
(99, 1, 3),
(99, 4, 3),
(100, 1, 3),
(100, 3, 3),
(100, 4, 3),
(102, 1, 3),
(102, 3, 3),
(102, 4, 3),
(103, 1, 3),
(103, 3, 3),
(103, 4, 3),
(104, 1, 3),
(104, 3, 3),
(104, 4, 3),
(105, 1, 3),
(105, 3, 3),
(105, 4, 3),
(107, 1, 3),
(107, 3, 3),
(107, 4, 3),
(108, 1, 3),
(108, 3, 3),
(108, 4, 3),
(109, 1, 3),
(109, 3, 3),
(109, 4, 3),
(110, 1, 3),
(110, 3, 3),
(110, 4, 3),
(111, 1, 3),
(111, 3, 3),
(111, 4, 3),
(112, 1, 3),
(112, 4, 3),
(113, 1, 3),
(113, 3, 3),
(113, 4, 3),
(114, 1, 3),
(114, 3, 3),
(114, 4, 3),
(115, 1, 3),
(115, 3, 3),
(115, 4, 3),
(116, 1, 3),
(116, 3, 3),
(116, 4, 3),
(117, 1, 3),
(117, 3, 3),
(117, 4, 3),
(118, 1, 3),
(118, 3, 3),
(118, 4, 3),
(119, 1, 3),
(119, 4, 3),
(120, 1, 3),
(120, 3, 3),
(120, 4, 3),
(121, 1, 3),
(121, 3, 3),
(121, 4, 3),
(122, 1, 3),
(122, 3, 3),
(122, 4, 3),
(123, 1, 3),
(123, 3, 3),
(123, 4, 3),
(124, 1, 3),
(124, 3, 3),
(124, 4, 3),
(125, 1, 3),
(125, 4, 3),
(126, 1, 3),
(126, 3, 3),
(126, 4, 3),
(127, 1, 3),
(127, 3, 3),
(127, 4, 3),
(128, 1, 3),
(128, 4, 3),
(129, 1, 3),
(129, 3, 3),
(129, 4, 3),
(130, 1, 3),
(130, 3, 3),
(130, 4, 3),
(131, 1, 3),
(131, 3, 3),
(131, 4, 3),
(132, 1, 3),
(132, 3, 3),
(132, 4, 3),
(133, 1, 3),
(133, 3, 3),
(133, 4, 3),
(134, 1, 3),
(134, 3, 3),
(134, 4, 3),
(135, 1, 3),
(135, 3, 3),
(135, 4, 3),
(137, 1, 3),
(137, 3, 3),
(137, 4, 3),
(138, 1, 3),
(138, 3, 3),
(138, 4, 3),
(139, 1, 3),
(139, 3, 3),
(139, 4, 3),
(140, 1, 3),
(140, 4, 3),
(141, 1, 3),
(141, 3, 3),
(141, 4, 3),
(142, 1, 3),
(142, 3, 3),
(142, 4, 3),
(143, 1, 3),
(143, 3, 3),
(143, 4, 3),
(144, 1, 3),
(144, 3, 3),
(144, 4, 3),
(145, 1, 3),
(145, 3, 3),
(145, 4, 3),
(146, 1, 3),
(146, 4, 3),
(147, 1, 3),
(147, 3, 3),
(147, 4, 3),
(148, 1, 3),
(148, 4, 3),
(150, 1, 3),
(150, 3, 3),
(150, 4, 3),
(151, 1, 3),
(151, 3, 3),
(151, 4, 3),
(153, 1, 3),
(153, 3, 3),
(153, 4, 3),
(154, 1, 3),
(154, 3, 3),
(154, 4, 3),
(155, 1, 3),
(155, 3, 3),
(155, 4, 3),
(156, 1, 3),
(156, 3, 3),
(156, 4, 3),
(157, 1, 3),
(157, 4, 3),
(158, 1, 3),
(158, 3, 3),
(158, 4, 3),
(159, 1, 3),
(159, 3, 3),
(159, 4, 3),
(160, 1, 3),
(160, 3, 3),
(160, 4, 3),
(161, 1, 3),
(161, 3, 3),
(161, 4, 3),
(162, 1, 3),
(162, 4, 3),
(163, 1, 3),
(163, 3, 3),
(163, 4, 3),
(164, 1, 3),
(164, 3, 3),
(164, 4, 3),
(165, 1, 3),
(165, 3, 3),
(165, 4, 3),
(166, 1, 3),
(166, 4, 3),
(167, 1, 3),
(167, 3, 3),
(167, 4, 3),
(168, 1, 3),
(168, 3, 3),
(168, 4, 3),
(1001, 1, 3),
(1001, 3, 3),
(1001, 4, 3),
(1002, 1, 3),
(1002, 3, 3),
(1002, 4, 3),
(1003, 1, 3),
(1003, 3, 3),
(1003, 4, 3),
(1004, 1, 3),
(1004, 3, 3),
(1004, 4, 3),
(1005, 1, 3),
(1005, 3, 3),
(1005, 4, 3),
(1006, 1, 3),
(1006, 4, 3),
(1007, 1, 3),
(1007, 3, 3),
(1007, 4, 3),
(1008, 1, 3),
(1008, 3, 3),
(1008, 4, 3),
(1012, 1, 3),
(1012, 3, 3),
(1012, 4, 3),
(1013, 1, 3),
(1013, 3, 3),
(1013, 4, 3),
(1014, 1, 3),
(1014, 3, 3),
(1014, 4, 3),
(1015, 1, 3),
(1015, 4, 3),
(1016, 1, 3),
(1016, 3, 3),
(1016, 4, 3),
(1017, 1, 3),
(1017, 3, 3),
(1017, 4, 3),
(1018, 1, 3),
(1018, 3, 3),
(1018, 4, 3),
(1019, 1, 3),
(1019, 3, 3),
(1019, 4, 3),
(1020, 1, 3),
(1020, 3, 3),
(1020, 4, 3),
(1021, 1, 3),
(1021, 3, 3),
(1021, 4, 3),
(1022, 1, 3),
(1022, 3, 3),
(1022, 4, 3),
(1023, 1, 3),
(1023, 3, 3),
(1023, 4, 3),
(1025, 1, 3),
(1025, 3, 3),
(1026, 1, 3),
(1026, 3, 3),
(1026, 4, 3),
(1028, 1, 3),
(1028, 3, 3),
(1028, 4, 3),
(1029, 1, 3),
(1029, 3, 3),
(1029, 4, 3),
(21, 5, 8),
(2, 4, 9),
(3, 4, 9),
(4, 4, 9),
(20, 7, 9),
(22, 5, 9),
(23, 5, 9),
(24, 5, 9),
(25, 5, 9),
(26, 5, 9),
(120, 7, 9),
(121, 7, 9),
(155, 5, 9),
(158, 5, 9),
(1001, 7, 9),
(1018, 7, 9),
(1025, 4, 9);

-- --------------------------------------------------------

--
-- Estrutura da tabela `acesso_agenda`
--

CREATE TABLE `acesso_agenda` (
  `id_usuario` int NOT NULL,
  `editor` tinyint NOT NULL DEFAULT '0',
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_visitante` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `agenda`
--

CREATE TABLE `agenda` (
  `id` int NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `descricao` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `cor` varchar(7) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `inicio` datetime NOT NULL,
  `termino` datetime NOT NULL,
  `id_usuario` int NOT NULL,
  `id_editor` int DEFAULT NULL,
  `notificado` tinyint NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='	';

-- --------------------------------------------------------

--
-- Estrutura da tabela `assunto`
--

CREATE TABLE `assunto` (
  `id` int NOT NULL,
  `assunto` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `atendimento`
--

CREATE TABLE `atendimento` (
  `id` int NOT NULL,
  `id_fila` int NOT NULL,
  `id_guiche` int NOT NULL,
  `id_usuario` int NOT NULL,
  `detalhamento` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `id` int NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `descricao` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `chamado`
--

CREATE TABLE `chamado` (
  `id` int NOT NULL,
  `descricao` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `data_abertura` timestamp NOT NULL,
  `data_atendido` timestamp NULL DEFAULT NULL,
  `data_atendimento` timestamp NULL DEFAULT NULL,
  `data_cancelado` timestamp NULL DEFAULT NULL,
  `data_reaberto` timestamp NULL DEFAULT NULL,
  `status` int NOT NULL DEFAULT '0',
  `id_usuario` int NOT NULL,
  `id_categoria` int DEFAULT NULL,
  `id_atendente` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `classe_judicial`
--

CREATE TABLE `classe_judicial` (
  `id` int NOT NULL,
  `classe` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `editor`
--

CREATE TABLE `editor` (
  `id_usuario` int NOT NULL,
  `id_tarefa` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `equipe`
--

CREATE TABLE `equipe` (
  `id` int NOT NULL,
  `equipe` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `descricao` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `criador` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `equipe_usuario`
--

CREATE TABLE `equipe_usuario` (
  `id_equipe` int NOT NULL,
  `id_usuario` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `etapa`
--

CREATE TABLE `etapa` (
  `id` int NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `ordem` int NOT NULL,
  `data_base` bigint DEFAULT '0',
  `id_tarefa` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fila`
--

CREATE TABLE `fila` (
  `id` int NOT NULL,
  `cpf` varchar(45) COLLATE utf8mb4_general_ci NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `preferencial` tinyint NOT NULL DEFAULT '0',
  `entrada` timestamp NOT NULL,
  `qtd_chamadas` int NOT NULL DEFAULT '0',
  `atendido` timestamp NULL DEFAULT NULL,
  `id_servico` int NOT NULL,
  `chamar` tinyint NOT NULL DEFAULT '0',
  `ultima_chamada` timestamp NULL DEFAULT NULL,
  `id_guiche_chamador` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `guiche`
--

CREATE TABLE `guiche` (
  `id` int NOT NULL,
  `id_usuario` int DEFAULT NULL,
  `numero` varchar(45) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `instancia`
--

CREATE TABLE `instancia` (
  `id` int NOT NULL,
  `instancia` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `interacao`
--

CREATE TABLE `interacao` (
  `id` int NOT NULL,
  `texto` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `data` timestamp NOT NULL,
  `id_chamado` int NOT NULL,
  `id_usuario` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `liminar`
--

CREATE TABLE `liminar` (
  `id` int NOT NULL,
  `tipo` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `modulo`
--

CREATE TABLE `modulo` (
  `id` int NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `icone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `nota`
--

CREATE TABLE `nota` (
  `id` int NOT NULL,
  `nota` int NOT NULL,
  `hora_registro` timestamp NOT NULL,
  `id_pergunta` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `notificacao`
--

CREATE TABLE `notificacao` (
  `id` int NOT NULL,
  `texto` text COLLATE utf8mb4_general_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `tipo` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `data` timestamp NOT NULL,
  `id_usuario` int NOT NULL,
  `lida` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `perfil`
--

CREATE TABLE `perfil` (
  `id` int NOT NULL,
  `perfil` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `perfil`
--

INSERT INTO `perfil` (`id`, `perfil`, `descricao`) VALUES
(1, 'Administrador', 'Administrador do sistema'),
(2, 'Gerente', 'Gerencia todas as tarefas e acompanha o andamento das ações'),
(3, 'Usuário', 'Usuário comum de acesso e utilização básica'),
(4, 'Observador', 'Visualiza todas as tarefas e acompanha o andamento das ações'),
(8, 'Gerente Atendimento', 'Gerente Atendimento'),
(9, 'Atendente', 'Atendimento a solicitações'),
(11, 'Diretor', 'Diretoria');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pergunta`
--

CREATE TABLE `pergunta` (
  `id` int NOT NULL,
  `descricao` text COLLATE utf8mb4_general_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `processo`
--

CREATE TABLE `processo` (
  `id` int NOT NULL,
  `numero` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `sei` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `autuacao` bigint DEFAULT NULL,
  `cpf` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `beneficiario` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `guia` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `senha` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `valor_guia` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `valor_causa` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `deposito_judicial` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `reembolso` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `custas` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `honorarios` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `multa` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `danos_morais` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `observacao` text COLLATE utf8mb4_general_ci,
  `id_assunto` int NOT NULL,
  `id_classe_judicial` int DEFAULT NULL,
  `id_situacao_processual` int NOT NULL,
  `id_liminar` int DEFAULT NULL,
  `data_cumprimento_liminar` bigint DEFAULT NULL,
  `id_instancia` int NOT NULL,
  `id_usuario` int NOT NULL,
  `atualizacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `processo_vinculado` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `recepcao`
--

CREATE TABLE `recepcao` (
  `id` int NOT NULL,
  `visitante` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `empresa` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `horario` varchar(45) COLLATE utf8mb4_general_ci NOT NULL,
  `setor` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `recebido_por` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `assunto` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `id_usuario` int NOT NULL,
  `cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `servico`
--

CREATE TABLE `servico` (
  `id` int NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `setor`
--

CREATE TABLE `setor` (
  `id` int NOT NULL,
  `sigla` varchar(255) NOT NULL,
  `descricao` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `setor`
--

INSERT INTO `setor` (`id`, `sigla`, `descricao`) VALUES
(1, 'PRESI', 'PRESIDÊNCIA'),
(2, 'PRESI/ASSESP', 'ASSESSORIA ESPECIAL'),
(3, 'PRESI/ASCOM', 'ASSESSORIA DE COMUNICAÇÃO SOCIAL'),
(4, 'PRESI/UCI', 'UNIDADE DE CONTROLE INTERNO'),
(5, 'PRESI/CGCOM', 'COORDENAÇÃO DE GOVERNANÇA E COMPLIANCE'),
(6, 'PRESI/OUVIDORIA', 'OUVIDORIA'),
(7, 'PRESI/ASSAT', 'ASSESSORIA ATUARIAL'),
(8, 'PRESI/DIPLAS', 'DIRETORIA DE PLANO DE SAÚDE'),
(9, 'PRESI/DIPLAS/DASAU', 'DIRETORIA ADJUNTA DE SAÚDE'),
(10, 'PRESI/DIPLAS/DASAU/URA', 'UNIDADE DE REGULAÇÃO E AUDITORIA'),
(11, 'PRESI/DIPLAS/DASAU/UAPPS', 'UNIDADE DE ATENÇÃO PRIMÁRIA E PROGRAMAS DE SAÚDE'),
(12, 'PRESI/DIPLAS/DAOPE', 'DIRETORIA ADJUNTA DE OPERAÇÕES'),
(13, 'PRESI/DIPLAS/DAOPE/UFAT', 'UNIDADE DE FATURAMENTO'),
(14, 'PRESI/DIPLAS/DAOPE/UCAT', 'UNIDADE DE CADASTRO E ATENDIMENTO AO BENEFICIÁRIO'),
(15, 'PRESI/DIPLAS/DAER', 'DIRETORIA ADJUNTA DE ESTRATÉGIA E REGULAMENTAÇÃO'),
(16, 'PRESI/DIPLAS/DAER/UGER', 'UNIDADE DE GESTÃO DE REDE'),
(17, 'PRESI/DIAD', 'DIRETORIA DE ADMINISTRAÇÃO'),
(18, 'PRESI/DIAD/ASSESP', 'ASSESSORIA ESPECIAL'),
(19, 'PRESI/DIAD/UAD', 'UNIDADE ADMINISTRATIVA'),
(20, 'PRESI/DIAD/UAD/GEGEP', 'GERÊNCIA DE GESTÃO DE PESSOAS'),
(21, 'PRESI/DIAD/UAD/GMPL', 'GERÊNCIA DE MATERIAL, PATRIMÔNIO E LOGÍSTICA'),
(22, 'PRESI/DIAD/UAD/GEPROT', 'GERÊNCIA DE PROTOCOLO'),
(23, 'PRESI/DIAD/UCON', 'UNIDADE DE CONTRATAÇÕES'),
(24, 'PRESI/DIAD/UCON/CCOMP', 'COORDENAÇÃO DE COMPRAS'),
(25, 'PRESI/DIAD/UCON/CCOMP/GPP', 'GERÊNCIA DE PESQUISA DE PREÇOS'),
(26, 'PRESI/DIAD/UCON/COCON', 'COORDENAÇÃO DE CONTRATOS E INSTRUMENTOS CONGÊNERES'),
(27, 'PRESI/DIAD/UCON/COCON/GECON', 'GERÊNCIA DE EXECUÇÃO DE CONTRATOS E INSTRUMENTOS CONGÊNERES'),
(28, 'PRESI/DIAD/UTIC', 'UNIDADE DE TECNOLOGIA DA INFORMAÇÃO E COMUNICAÇÃO'),
(29, 'PRESI/DIFIN', 'DIRETORIA DE FINANÇAS'),
(30, 'PRESI/DIFIN/ASSESP', 'ASSESSORIA ESPECIAL'),
(31, 'PRESI/DIFIN/UFIN', 'UNIDADE FINANCEIRA'),
(32, 'PRESI/DIFIN/UFIN/COFIN', 'COORDENAÇÃO DE ORÇAMENTO E FINANÇAS'),
(33, 'PRESI/DIFIN/UFIN/COFIN/GEORC', 'GERÊNCIA DE ORÇAMENTO'),
(34, 'PRESI/DIFIN/UFIN/COFIN/GELIQ', 'GERÊNCIA DE LIQUIDAÇÃO'),
(35, 'PRESI/DIFIN/UFIN/COFIN/GPAG', 'GERÊNCIA DE PAGAMENTO'),
(36, 'PRESI/DIFIN/UCCA', 'UNIDADE DE CONTROLE CONTÁBIL E DE ARRECADAÇÃO'),
(37, 'PRESI/DIFIN/UCCA/CCONT', 'COORDENAÇÃO DE CONTABILIDADE'),
(38, 'PRESI/DIFIN/UCCA/COARC', 'COORDENAÇÃO DE ARRECADAÇÃO E COBRANÇA'),
(39, 'PRESI/DIJUR', 'DIRETORIA JURÍDICA'),
(40, 'PRESI/DIJUR/ASSESP', 'ASSESSORIA ESPECIAL'),
(41, 'PRESI/DIJUR/UCONT', 'UNIDADE DO CONTENCIOSO'),
(42, 'PRESI/DIJUR/UCONS', 'UNIDADE CONSULTIVA');

-- --------------------------------------------------------

--
-- Estrutura da tabela `situacao_processual`
--

CREATE TABLE `situacao_processual` (
  `id` int NOT NULL,
  `situacao` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tarefa`
--

CREATE TABLE `tarefa` (
  `id` int NOT NULL,
  `nome` varchar(255) NOT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `categoria` varchar(255) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `inicio_inscricao` bigint DEFAULT NULL,
  `fim_inscricao` bigint DEFAULT NULL,
  `inicio` bigint DEFAULT NULL,
  `fim` bigint DEFAULT NULL,
  `id_criador` int NOT NULL,
  `id_responsavel` int DEFAULT NULL,
  `id_equipe` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `login` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `matricula` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `cargo` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nascimento` bigint DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `whatsapp` varchar(14) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ativo` tinyint DEFAULT '1',
  `id_perfil` int DEFAULT NULL,
  `id_equipe` int DEFAULT NULL,
  `id_setor` int DEFAULT NULL,
  `agenda` tinyint NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `login`, `matricula`, `cargo`, `nascimento`, `email`, `whatsapp`, `linkedin`, `ativo`, `id_perfil`, `id_equipe`, `id_setor`, `agenda`) VALUES
(1, 'JOSÉ WILSON DA COSTA', 'j.wilson', '283732-3', 'Chefe da Unidade de Tecnologia da Informação e Comunicação', 187239600, 'j.wilson@inas.df.gov.br', '(61)99824-2656', 'https://www.linkedin.com/in/jotadf', 1, 1, 28, 28, 1),
(2, 'OZÉIAS RODRIGUES DE OLIVEIRA', 'ozeias.oliveira', '281387-4', 'Assessor Especial', 237092400, 'ozeias.oliveira@inas.df.gov.br', '', '', 1, 2, 28, 28, 0),
(3, 'BRUNO HENRIQUE TAVARES DOS SANTOS', 'bruno.tsantos', '281711-X', 'Assessor', 780462000, 'bruno.tsantos@inas.df.gov.br', '(61)98518-3765', '', 1, 2, 28, 28, 0),
(4, 'JAIME DE ARAÚJO RAULINO', 'jaime.raulino', '281303-3', 'Assessor', 413262000, 'jaime.raulino@inas.df.gov.br', '(61)98545-3974', '', 1, 2, 28, 28, 0),
(5, 'FELIPE MOTTA SCHIMMELPFENG', 'felipe.motta', '281296-7', 'Diretor de Plano de Saúde', 574657200, 'felipe.motta@inas.df.gov.br', '(61)99993-6338', ' https://www.linkedin.com/in/felipe-schimmelpfeng-3b60a386/', 1, 8, 8, 8, 1),
(6, 'GEOVANNA ALVES LUSTOSA BONFIM', 'geovanna.bonfim', '282194-X', 'Assessor Especial', 880768800, 'geovanna.bonfim@inas.df.gov.br', '(61)98274-9568', '', 1, 3, 8, 8, 0),
(7, 'LUCIANA PACHECO QUINTANA', 'luciana.quintana', '281284-3', 'Assessor Especial', 214023600, 'luciana.quintana@inas.df.gov.br', '', '', 1, 3, 8, 8, 0),
(8, 'RENATA CAROLINE BARBOSA DUQUE NOGUEIRA', 'renata.duque', '281660-1', 'Assessor Especial', 479098800, 'renata.duque@inas.df.gov.br', '', '', 0, 3, 8, 8, 0),
(9, 'WÂNIA ROMAGUEIRA CALIXTO', 'wania.calixto', '284024-3', 'Diretora Adjunta', 84164400, 'wania.calixto@inas.df.gov.br', '', '', 1, 3, 9, 9, 0),
(10, 'FERNANDA SILVEIRA PERES', 'fernanda.peres', '281273-8', 'Chefe Unidade de Regulação e Auditoria', 343105200, 'fernanda.peres@inas.df.gov.br', '', '', 1, 3, 10, 10, 0),
(11, 'PALOMA APARECIDA CARVALHO', 'paloma.carvalho', '283475-8', 'Assessor Especial', 403239600, 'paloma.carvalho@inas.df.gov.br', '', '', 1, 3, 10, 10, 0),
(12, 'MARCIA DOS SANTOS PINHEIRO', 'marcia.pinheiro', '283794-3', 'Assessor Especial', 465102000, 'marcia.pinheiro@inas.df.gov.br', '', '', 1, 3, 10, 10, 0),
(13, 'ANA PAULA DELGADO DE LIMA', 'ana.delgado', '282997-5', 'Chefe de Unidade de Atenção Primaria e Programas de Saúde', 126068400, 'ana.delgado@inas.df.gov.br', '', '', 1, 3, 11, 11, 0),
(14, 'MARTA ARAÚJO LIMA RODRIGUES', 'marta.rodrigues', '283337-9', NULL, 447390000, 'marta.rodrigues@inas.df.gov.br', '', '', 0, 3, 11, 11, 0),
(15, 'SHEILLA VIANA FERREIRA DA SILVA RODRIGUES', 'sheilla.viana', '282014-5', 'Assessor Especial', 389674800, 'sheilla.viana@inas.df.gov.br', '(61)99966-9916', '', 1, 3, 12, 12, 0),
(16, 'LUCIANA BEZERRA EVARISTO CARDOSO', 'luciana.cardoso', '280974-5', 'Assessor Especial', 311655600, 'luciana.cardoso@inas.df.gov.br', '(61)98163-0882', '', 1, 3, 11, 11, 0),
(17, 'MARCELO MIRANDA ARAÚJO', 'marcelo.miranda', '281282-7', 'Assessor Especial', 84682800, 'marcelo.miranda@inas.df.gov.br', '', '', 1, 3, 13, 13, 0),
(18, 'LUCAS AMARAL DOS SANTOS', 'lucas.amaral', '281795-0', 'Assessor', 788580000, 'lucas.amaral@inas.df.gov.br', '', '', 1, 3, 13, 13, 0),
(19, 'ANDRÉA CRISTINA FERREIRA ROCHA', 'andrea.rocha', '281645-8', 'Assessor', 160714800, 'andrea.rocha@inas.df.gov.br', '61-996059964 ', '', 1, 3, 13, 13, 0),
(20, 'KANANDA VIEIRA MARTINS DA SILVA', 'kananda.silva', '281286-X', 'Assessor Especial', 838609200, 'kananda.silva@inas.df.gov.br', '', '', 1, 3, 13, 13, 0),
(21, 'JOÃO LEONARDO JARDIM ELIAS', 'joao.elias', '281372-6', 'Chefe da Unidade de Relacionamento com o Beneficiário', 453956400, 'joao.elias@inas.df.gov.br', '', '', 1, 8, 14, 14, 0),
(22, 'KLEVYSON OLIVEIRA DA SILVA', 'klevyson.silva', '281278-9', 'Assessor Especial', 704948400, 'klevyson.silva@inas.df.gov.br', '', '', 1, 9, 14, 14, 0),
(23, 'LUDMILA GOMES DE LIMA', 'ludmila.lima', '282658-5', 'Assessor', 877572000, 'ludmila.lima@inas.df.gov.br', '', '', 1, 9, 14, 14, 0),
(24, 'MARIA APARECIDA SOARES JARDINS DOURADO', 'maria.jardim', '281980-5', 'Assessor Especial', -144622800, 'maria.jardim@inas.df.gov.br', '', '', 1, 9, 14, 14, 0),
(25, 'MARIA CLARA DE SOUZA CORSOLINI', 'maria.corsolini', '282974-6', 'Assessor', 1096772400, 'maria.corsolini@inas.df.gov.br', '', '', 1, 9, 14, 14, 0),
(26, 'MARINA PRAÇA CERQUEIRA', 'marina.cerqueira', '281307-6', 'Assessor', 897102000, 'marina.cerqueira@inas.df.gov.br', '', '', 1, 9, 14, 14, 0),
(27, 'CARLA MARIA JATOBÁ', 'carla.jatoba', '281280-0', 'Diretora Adjunta de Estratégias e Regulação', 325998000, 'carla.jatoba@inas.df.gov.br', '(61)98193-5203', ' ', 1, 8, 15, 15, 0),
(28, 'JÁSSANAN YORARA RIBEIRO VILAS BOAS', 'jassanan.boas', '281694-6', 'Assessor Especial', 486691200, 'jassanan.boas@inas.df.gov.br', NULL, NULL, 1, 3, 15, 15, 0),
(29, 'VANESSA MEIRELES RODRIGUES', 'vanessa.rodrigues', '283722-6', 'Assessor Especial', 258174000, 'vanessa.rodrigues@inas.df.gov.br', '(61)99607-4170', 'https://www.linkedin.com/in/vanessa-meireles-rodrigues-1981b0186/?jobid=1234', 1, 3, 15, 15, 0),
(30, 'LUCIANA DE FÁTIMA BATISTA', 'luciana.batista', '279220-6', 'Assessor Especial', 14698800, 'luciana.batista@inas.df.gov.br', '', '', 1, 3, 16, 16, 0),
(31, 'THUANNY ALVES DE OLIVEIRA', 'thuanny.oliveira', '283736-6', 'Assessor Especial', 677732400, 'thuanny.oliveira@inas.df.gov.br', '(61)98433-7907', '', 1, 3, 16, 16, 0),
(32, 'CLÁUDIO ARAÚJO DE AMORIM LOPES', 'claudio.amorim', '281679-2', 'Ouvidor', 54010800, 'claudio.amorim@inas.df.gov.br', '', '', 1, 3, 6, 6, 0),
(33, 'ANA LÚCIA DE OLIVEIRA ALVES', 'ana.oalves', '283735-8', 'Assessor', -150760800, 'ana.oalves@inas.df.gov.br', '', '', 1, 3, 6, 6, 0),
(34, 'ZANANDRÉA MEDEIROS NASCIMENTO', 'zanandrea.nascimento', '281290-8', 'Assessor Especial', 248151600, 'zanandrea.nascimento@inas.df.gov.br', '', '', 1, 3, 6, 6, 0),
(35, 'RITA DE CÁSSIA NUNES PIRES', 'rita.pires', '281293-2', 'Assessor', 93754800, 'rita.pires@inas.df.gov.br', '', '', 1, 3, 6, 6, 0),
(36, 'JAQUELINE SILVA SANTANA PORTES', 'jaqueline.portes', '281672-5', 'Coordenadora de Governança e Compliance', 328158000, 'jaqueline.portes@inas.df.gov.br', '', '', 1, 3, 5, 5, 0),
(37, 'VICTOR SILVA LARA REIS', 'victor.lara', '282251-2', 'Assessor Especial', 813808800, 'victor.lara@inas.df.gov.br', '(61)98636-1122', 'https://www.linkedin.com/in/victorslreis/', 1, 3, 5, 5, 0),
(38, 'ANDERSON FELIZARDO DA SILVA', 'anderson.fsilva', '776322-1', 'Estagiário', 808455600, 'anderson.fsilva@inas.df.gov.br', '', '', 1, 3, 5, 5, 0),
(39, 'LUANA VITÓRIA PEREIRA ALVES', 'luana.alves', 'SD56961', 'Estagiária', 768798000, 'luana.alves@inas.df.gov.br', '', '', 1, 3, 5, 5, 0),
(40, 'JOSÉ LOPES RIBEIRO', 'jose.lopes', '282831-6', 'Diretora Jurídico', -158101200, 'jose.lopes@inas.df.gov.br', '', '', 1, 3, 39, 39, 1),
(41, 'FERNANDA CAROLINA FERREIRA DA SILVA', 'fernanda.carolina', '281287-8', 'Chefe da Assessoria da Diretoria Jurídica', 525582000, 'fernanda.ferreira@inas.df.gov.br', '', '', 1, 3, 39, 39, 0),
(42, 'PATRÍCIA DE FREITAS PEREIRA', 'patrícia.pereira', '283716-1', 'Assessor', 55479600, 'patricia.pereira@inas.df.gov.br', '(61)99205-7700', '', 1, 3, 39, 39, 0),
(43, 'EDUARDA SILVA PANTOJA', 'eduarda.pantoja', 'GF86504', NULL, 1703041200, 'eduarda.pantoja@inas.df.gov.br', '', '', 1, 3, 39, 39, 0),
(44, 'ANA CAROLINY DE OLIVEIRA SOUSA', 'ana.caroliny', '282709-3', 'Chefe da Unidade de do Contencioso', 709873200, 'ana.caroliny@inas.df.gov.br', '', '', 1, 3, 39, 39, 0),
(45, 'IURI ALKIMIM FAGUNDES DE PAULA', 'Iuri.paula', '282944-4', 'Assessor Especial', 516078000, 'Iuri.paula@inas.df.gov.br', '', '', 1, 3, 39, 39, 0),
(46, 'TAÍSA BRASIL BATISTA AGUIAR', 'taisa.aguiar', '283592-4', 'Assessor Especial', 776660400, 'taisa.aguiar@inas.df.gov.br', '', '', 1, 3, 39, 39, 0),
(47, 'ANNA LUÍSA GOMES BICHO', 'anna.bicho', '283740-4', 'Assessor', 814500000, 'anna.bicho@inas.df.gov.br', '', '', 1, 3, 39, 39, 0),
(48, 'THAYSA KEMILLY DA SILVA', 'thaysa.silva', '283591-6', 'Assessor Especial', 775018800, 'thaysa.silva@inas.df.gov.br', '', '', 1, 3, 39, 39, 0),
(49, 'EDSON ARAÚJO OLIVEIRA', 'edson.aoliveira', '279896-4', NULL, 405216000, 'edson.aoliveira@inas.df.gov.br', NULL, NULL, 0, 3, 39, 39, 0),
(50, 'NORIVAL D`ANGELLUS', 'norival.costa', '280977-X', 'Assessor Especial', 573015600, 'norival.costa@inas.df.gov.br', '(61)99129-2481', '', 1, 3, 39, 39, 0),
(51, 'ALANNA OLIVEIRA', 'alanna.oliveira', '281316-5', 'Assessor Especial', 565927200, 'alanna.oliveira@inas.df.gov.br', '', '', 1, 3, 39, 39, 0),
(52, 'GUILHERME DA ROCHA LIMA', 'guilherme.rlima', '281806-X', 'Assessor Especial', 628048800, 'guilherme.rlima@inas.df.gov.br', '(61)98277-0569', '', 1, 3, 39, 39, 0),
(53, 'OSCAR FRANCISCO PALOSCHI', 'oscar.paloschi', '283719-6', 'Assessor Especial', 73710000, 'oscar.paloschi@inas.df.gov.br', '', '', 1, 3, 39, 39, 0),
(54, 'ELIZÂNGELA DA SILVA COSTA', 'elizangela.costa', '281356-4', 'Assessor', 227242800, 'elizangela.costa@inas.df.gov.br', '', '', 1, 3, 20, 20, 0),
(55, 'FABRÍCIA SANTOS DE OLIVEIRA', 'fabricia.soliveira', '281642-3', 'Assessor', 274762800, 'fabricia.soliveira@inas.df.gov.br', '(61)99611-7920', 'linkedin.com/in/fabrícia-santos-de-oliveira-9917932b8', 1, 3, 20, 20, 0),
(56, 'SANDRA MOREIRA FONSECA', 'sandra.fonseca', '279941-3', 'Gerente de Gestão de Pessoas', 41482800, 'sandra.fonseca@inas.df.gov.br', '', '', 1, 3, 20, 20, 0),
(57, 'ACICLEIA ALVES DA SILVA', 'acicleia.silva', '281628-8', 'Assessor', 217911600, 'acicleia.silva@inas.df.gov.br', '', '', 1, 3, 27, 27, 0),
(58, 'ALEX SANDRO MACEDO', 'alex.smacedo', '281304-1', 'Assessor', 121662000, 'alex.smacedo@inas.df.gov.br', '', '', 1, 3, 27, 27, 0),
(59, 'ALEXA AMORIM NEVES', 'alexa.neves', '283765-X', 'Assessor', 842583600, 'alexa.neves@inas.df.gov.br', '', '', 1, 3, 27, 27, 0),
(60, 'ALINE INES XAVIER MARQUES CAVALCANTE SANTANA', 'aline.marques', '281357-2', 'Assessor', 344833200, 'aline.marques@inas.df.gov.br', '', '', 1, 3, 27, 27, 0),
(61, 'ANA GIOVANNA CASTRO ALVIM', 'ana.alvim', '281724-1', 'Assessor', 959050800, 'ana.alvim@inas.df.gov.br', '', '', 1, 3, 27, 27, 0),
(62, 'ARCANGELA CARVALHO VIEIRA', 'arcangela.vieira', '283225-9', 'Assessor', 66366000, 'arcangela.vieira@inas.df.gov.br', '(61)99131-7780', '', 1, 3, 27, 27, 0),
(63, 'CAIO BRAGA DE SIQUEIRA', 'caio.siqueira', '281647-4', 'Assessor', 841460400, 'caio.siqueira@inas.df.gov.br', '', '', 1, 3, 27, 27, 0),
(64, 'CAMILA RODRIGUES TERTULIANO', 'camila.tertuliano', '281445-5', 'Assessor', 466484400, 'camila.tertuliano@inas.df.gov.br', '6193081272', 'https://www.linkedin.com/in/camila-tertuliano/', 1, 3, 27, 27, 0),
(65, 'GUILHERME MARQUES FERNANDES', 'guilherme.fernandes', '282914-2', 'Assessor', 965185200, 'guilherme.fernandes@inas.df.gov.br', '', '', 1, 3, 27, 27, 0),
(66, 'GUILHERME DE MACEDO OLIVEIRA', 'guilherme.macedo', '283292-5', 'Assessor', 515905200, 'guilherme.macedo@inas.df.gov.br', '', '', 1, 3, 27, 27, 0),
(68, 'HANAIARA DE MOURA ROCHA GONÇALVES SILVA', 'hanaiara.silva', '281741-1', 'Assessor', 399265200, 'hanaiara.silva@inas.df.gov.br', '(61)99287-4600', '', 1, 3, 27, 27, 0),
(69, 'ICARO LOBAO DE CASTRO', 'icaro.castro', '281281-9', NULL, 557193600, 'icaro.castro@inas.df.gov.br', NULL, NULL, 0, 3, 27, 27, 0),
(70, 'KAILANE RODRIGUES SILVA', 'kailane.silva', '281306-8', 'Assessor', 915069600, 'kailane.silva@inas.df.gov.br', '(61)99120-1682', '', 1, 3, 27, 27, 0),
(71, 'LUCIA DENA RODRIGUES DOS SANTOS', 'lucia.santos', '281676-8', 'Assessor', 96087600, 'lucia.santos@inas.df.gov.br', '', '', 1, 3, 27, 27, 0),
(72, 'LUCIANA BORGMANN ARAUJO', 'luciana.borgmann', '281646-6', NULL, 417830400, 'luciana.borgmann@inas.df.gov.br', NULL, NULL, 0, 3, 27, 27, 0),
(73, 'LUCIANA RODRIGUES SILVA', 'luciana.rsilva', '281695-4', 'Assessor', 384663600, 'luciana.rsilva@inas.df.gov.br', '', '', 1, 3, 27, 27, 0),
(74, 'MATEUS MARTINS DE CARVALHO', 'mateus.martins', '281648-2', 'Assessor', 889585200, 'mateus.martins@inas.df.gov.br', '(61)98282-2461', '', 1, 3, 27, 27, 0),
(75, 'MAYCON CARDOSO MENDES', 'maycon.mendes', '281272-X', 'Assessor', 941594400, 'maycon.mendes@inas.df.gov.br', '', '', 1, 3, 27, 27, 0),
(76, 'NAGILA RAQUEL MARQUES FERREIRA', 'nagila.ferreira', '281291-6', 'Assessor', 816487200, 'nagila.ferreira@inas.df.gov.br', '', '', 1, 3, 27, 27, 0),
(77, 'TATIANA APARECIDA GODINHO DA SILVA', 'tatiana.godinho', '281643-1', 'Assessor', 232426800, 'tatiana.godinho@inas.df.gov.br', '(61)99962-1046', 'https://www.linkedin.com/in/tatiana-innovare-290a09177/', 1, 3, 27, 27, 0),
(78, 'UILMA CRISTINA QUEIROZ DO NASCIMENTO', 'uilma.nascimento', '281368-8', 'Assessor', -63324000, 'uilma.nascimento@inas.df.gov.br', '', '', 1, 3, 27, 27, 0),
(79, 'VITORIA DE FARIAS BRAGA', 'vitoria.braga', '281305-X', 'Assessor', 844740000, 'vitoria.braga@inas.df.gov.br', '', '', 1, 3, 27, 27, 0),
(80, 'WESLEY DE ALMEIDA SCHMIDT', 'wesley.schmidt', '281289-4', 'Assessor', 396673200, 'wesley.schmidt@inas.df.gov.br', '', '', 1, 3, 27, 27, 0),
(81, 'CECILIO MOREIRA DE SANTANA', 'cecilio.santana', '281298-3', 'Assessor Especial', 744260400, 'cecilio.santana@inas.df.gov.br', '', '', 1, 3, 17, 17, 0),
(82, 'EDGAR BRAGA NETO', 'edgar.neto', '283536-3', 'Assessor Especial', 416631600, 'edgar.neto@inas.df.gov.br', '(61)98124-2898', '', 1, 3, 17, 17, 0),
(83, 'ELZA NUNES DE OLIVEIRA DA SILVA', 'elza.nunes', '283418-9', 'Assessor', 56602800, 'elza.nunes@inas.df.gov.br', '(61)99117-5721', 'linkedin.com/in/elza-nunes-323060154', 1, 3, 17, 17, 0),
(84, 'FERNANDA MARTINS GASPARINO DUARTE CANEDO', 'fernanda.canedo', '282723-9', 'Diretora de Administração', 452314800, 'fernanda.canedo@inas.df.gov.br', '', '', 1, 3, 17, 17, 1),
(85, 'FREDERICO CARDOSO NUNES MACHADO', 'frederico.nunes', '283435-9', 'Coordenador de Coordenação de Contratos', 132289200, 'frederico.nunes@inas.df.gov.br', '', '', 1, 3, 17, 26, 0),
(86, 'GRICE BARBOSA PINTO DE ARAÚJO', 'grice.barbosa', '283724-2', 'Chefe da Assessoria Especial da Diretoria de Administração', 175834800, 'grice.barbosa@inas.df.gov.br', '(61)98122-1677', 'https://www.linkedin.com/in/grice-araújo/', 1, 3, 17, 17, 0),
(87, 'GUSTAVO COSTA DE SOUZA', 'gustavo.souza', '281786-1', 'Gerente de Pesquisa de Preços', 1017284400, 'gustavo.souza@inas.df.gov.br', '(61)99154-4456', '', 1, 3, 25, 25, 0),
(88, 'HENRIQUE SANJIRO YUZUKI FARIAS', 'henrique.yuzuki', '283293-3', 'Chefe da Unidade de Contratação', 626839200, 'henrique.yuzuki@inas.df.gov.br', '(61)99318-7575', 'www.linkedin.com/in/henrique-sanjiro-b05129216', 1, 2, 17, 17, 0),
(89, 'KARLA MELLO TINOCO', 'karla.tinoco', '281388-2', 'Assessor Especial', -8197200, 'karla.tinoco@inas.df.gov.br', '(61)98129-5783', '', 1, 3, 17, 17, 0),
(90, 'LIGIA COSTA COELHO', 'ligia.coelho', '282868-5', 'Coordenadora de Compras', 147841200, 'ligia.coelho@inas.df.gov.br', '(61)98477-8378', '', 1, 3, 17, 17, 0),
(91, 'LUCIVANE DOS SANTOS', 'lucivane.santos', '275140-2', 'Assessor Especial', -32389200, 'lucivane.santos@inas.df.gov.br', '', '', 1, 2, 21, 21, 0),
(92, 'LUIS FERNANDES DA SILVA', 'luis.fernandes', '274197-0', 'Chefe da Unidade Administrativa', -73515600, 'luis.fernandes@inas.df.gov.br', '(61)99334-9072', '', 1, 3, 17, 17, 0),
(93, 'MARCUS PAULO DOS SANTOS SILVA', 'marcus.ssilva', '283409-X', 'Assessor Especial', 386046000, 'marcus.ssilva@inas.df.gov.br', '', '', 0, 3, 17, 17, 0),
(94, 'NATALIA FONTENELLE TORRES', 'natalia.torres', '283792-7', 'Assessor', 569728800, 'natalia.torres@inas.df.gov.br', '', '', 1, 3, 17, 17, 0),
(95, 'ROGERIO SILVEIRA LOBO', 'rogerio.lobo', '281788-8', 'Assessor', 388465200, 'rogerio.lobo@inas.df.gov.br', '', '', 1, 3, 24, 24, 0),
(97, 'ISABEL CRISTINA CHAVES NUNES', 'isabel.cristina', '281299-1', 'Gerente de Protocolo', -268952400, 'isabel.cristina@inas.df.gov.br', '', '', 1, 3, 22, 22, 0),
(98, 'ISABELA MACEDO NERI', 'isabela.neri', '281077-8', NULL, 715392000, 'isabela.neri@inas.df.gov.br', NULL, NULL, 0, 3, 22, 22, 0),
(99, 'KARIM ALLAN M. MOHAMED ELZOBEIR', 'karim.elzobeir', '281276-2', 'Gerente de Material e Patrimônio', 626234400, 'karim.elzobeir@inas.df.gov.br', '(61)98646-8801', 'https://www.linkedin.com/in/kar%C3%ADm-mohamed-8ba645b5/', 1, 2, 21, 21, 0),
(100, 'THIAGO BRANDÃO DA COSTA', 'thiago.bcosta', '281625-3', 'Assessor', 596944800, 'thiago.bcosta@inas.df.gov.br', '(61)99363-1551', '', 1, 2, 21, 21, 0),
(102, 'CESAR TALES MOURA LIMA', 'cesar.lima', 'ND66443', 'Estagiário', 1018407600, 'cesar.lima@inas.df.gov.br', '', '', 1, 3, 1, 1, 0),
(103, 'DANIELLY SANTOS TODÃO', 'danielly.todao', 'ZD40881', 'Estagiária', 1059534000, 'danielly.todao@inas.df.gov.br', '', '', 1, 3, 1, 1, 0),
(104, 'FLAVIA LIMA DE SOUZA', 'flavia.lsouza', '746837-4', 'Estagiária', 723434400, 'flavia.lsouza@inas.df.gov.br', '', '', 1, 3, 1, 1, 0),
(105, 'GABRIEL RAMOS DE SOUSA', 'gabriel.rsousa', 'GF57599', 'Estagiário', 1084849200, 'gabriel.rsousa@inas.df.gov.br', '', '', 1, 3, 1, 1, 0),
(107, 'LUCAS DO NASCIMENTO CARDOZO ROCHA', 'lucas.crocha', '650908-7', 'Estagiário', 784864800, 'lucas.crocha@inas.df.gov.br', '', '', 1, 3, 1, 1, 0),
(108, 'MILLENE VICTORIA RODRIGUES DOS SANTOS', 'millene.santos', 'TE70115', 'Estagiária', 977277600, 'millene.santos@inas.df.gov.br', '', '', 1, 3, 1, 1, 0),
(109, 'NIKOLAS BARROS MARTINS', 'nikolas.martins', 'YE53365', NULL, 1703041200, 'nikolas.martins@inas.df.gov.br', '', '', 1, 3, 1, 1, 0),
(110, 'RAKELL SILVA SOUZA', 'rakell.souza', 'ZD66716', 'Estagiária', 1703041200, 'rakell.souza@inas.df.gov.br', '', '', 1, 3, 1, 1, 0),
(111, 'SERGIO OLIVEIRA DOS SANTOS', 'sergio.santos', '43889', 'Estagiário', 901422000, 'sergio.santos@inas.df.gov.br', '', '', 1, 3, 1, 1, 0),
(112, 'ANA PAULA CARDOSO DA SILVA', 'ana.paula', '282715-8', 'Diretora Presidente', -4222800, 'ana.paula@inas.df.gov.br', '', '', 1, 8, 1, 1, 1),
(113, 'VANESSA SILVA TEIXEIRA', 'vanessa.teixeira', '282528-7', 'Assessor Especial', 363150000, 'vanessa.teixeira@inas.df.gov.br', '', '', 1, 3, 1, 1, 0),
(114, 'ALISSON DIAS BEZERRA', 'alisson.bezerra', '280730-0', 'Chefe da Assessoria especial da PRESI', 763268400, 'alisson.bezerra@inas.df.gov.br', '', '', 1, 3, 2, 2, 0),
(115, 'PITER WENDELL VARJÃO DOS SANTOS', 'piter.santos', '281297-5', 'Assessor Especial', 918612000, 'piter.santos@inas.df.gov.br', '(61)98318-8500', '', 1, 3, 2, 2, 0),
(116, 'SAMANTHA ALVARES SANTOS', 'samantha.santos', '281317-3', 'Assessor Especial', 544935600, 'samantha.santos@inas.df.gov.br', '(61)99294-1721', '', 1, 3, 2, 2, 0),
(117, 'MONIQUE LOPES SANTOS', 'monique.santos', '281832-9', 'Assessor', 497761200, 'monique.santos@inas.df.gov.br', '(61)99653-4222', '', 1, 3, 2, 2, 0),
(118, 'LARISSA PEREIRA MACEDO SILVA', 'larissa.macedo', '281300-9', 'Assessor Especial', 529729200, 'larissa.macedo@inas.df.gov.br', '', '', 1, 3, 2, 2, 0),
(119, 'GABRIELA MONICI SOUZA DO NASCIMENTO', 'gabriela.nascimento', '278848-9', 'Chefe de Gabinete', 534218400, 'gabriela.nascimento@inas.df.gov.br', '(61)99333-8051', '', 1, 8, 2, 2, 1),
(120, 'DEMOVALDO ROBERTO FREITAS SANTOS', 'demovaldo.santos', '283331X', 'Assessor', -35326800, 'demovaldo.santos@inas.df.gov.br', '', '', 1, 3, 2, 2, 0),
(121, 'MARIA DAS GRAÇAS FARIAS DE JESUS', 'maria.farias', '281274-6', 'Assessor Especial', 62910000, 'maria.farias@inas.df.gov.br', '', '', 1, 3, 2, 2, 0),
(122, 'ROSEMARY PEREIRA DA SILVA', 'rosemary.silva', '282961-4', 'Assessor Especial', 174884400, 'rosemary.silva@inas.df.gov.br', '(61)99635-2038', 'https://www.linkedin.com/in/rose-ortegas/', 1, 3, 1, 1, 0),
(123, 'DANIEL CRIZANTE TORRES', 'daniel.torres', '281279-7', 'Assessor Especial', 486702000, 'daniel.torres@inas.df.gov.br', '', '', 1, 3, 2, 2, 0),
(124, 'GUSTAVO RODRIGUES MACEDO ', 'gustavo.macedo', '281288-6', 'Assessor Especial', 148532400, 'gustavo.macedo@inas.df.gov.br', '(61)98161-2500', '', 1, 3, 3, 3, 0),
(125, 'CLÁUDIO ROBERTO MONTEIRO DE OLIVEIRA', 'claudio.roliveira', '274513-5', 'Chefe da Assessoria de Comunicação', 22302000, 'claudio.roliveira@inas.df.gov.br', '', '', 1, 3, 3, 3, 0),
(126, 'RAQUEL ÂNGELA DOS SANTOS', 'raquel.santos', 'LD22849', NULL, 1703041200, 'raquel.santos@inas.df.gov.br', '', '', 1, 3, 3, 3, 0),
(127, 'VINÍCIUS FORTALEZA VERISSÍMO', 'vinicius.verissimo', '281321-1', 'Assessor Especial', 580273200, 'vinicius.verissimo@inas.df.gov.br', '', '', 1, 3, 3, 3, 0),
(128, 'JURANDIR FREITAS DA COSTA JÚNIOR', 'jurandir.costa', '281444-7', 'Chefe da Unidade de Controle Interno', 19882800, 'jurandir.costa@inas.df.gov.br', '', '', 1, 3, 4, 4, 0),
(129, 'KÁTIA CRISTINA DE OLIVEIRA SILVA', 'katia.cristina', '281473-0', 'Assessor Especial', 423284400, 'katia.cristina@inas.df.gov.br', '(61)98342-8133', '', 1, 3, 4, 4, 0),
(130, 'FRANCIANE RESENDE RIBEIRO', 'franciane.ribeiro', '281428-5', 'Assessor Especial', 511844400, 'franciane.ribeiro@inas.df.gov.br', '(61)98463-5688', '', 1, 3, 4, 4, 0),
(131, 'JOÃO PAULO DE AZEVEDO ARAÚJO', 'joao.araujo', '281697-0', 'Assessor Especial', 882842400, 'joao.araujo@inas.df.gov.br', '(61)99859-8460', '', 1, 3, 4, 4, 0),
(132, 'CLÁUDIA REGIANE DE OLIVEIRA SOUSA', 'claudia.sousa', '281450-1', 'Assessor Especial', 151815600, 'claudia.sousa@inas.df.gov.br', '(61)98544-3810', 'https://www.linkedin.com/in/claudia-sousa-0722b758 ', 1, 3, 4, 4, 0),
(133, 'EMANOEL SILVA GOMES', 'emanoel.gomes', '281270-3', 'Assessor Especial', 940816800, 'emanoel.gomes@inas.df.gov.br', '(61)98182-2018', 'www.linkedin.com/in/ emanoel-silva-gomes', 1, 3, 4, 4, 0),
(134, 'ANA MARIA ELOIZA RODRIGUES DE SOUZA', 'ana.rsouza', '0346369', 'Estagiária', 956804400, 'ana.rsouza@inas.df.gov.br', '', '', 1, 3, 4, 4, 0),
(135, 'ALESSANDRA MARIANE VIEIRA', 'alessandra.vieira', '283762-5', 'Assessor', 351399600, 'alessandra.vieira@inas.df.gov.br', '', '', 1, 3, 47, 29, 0),
(137, 'BERNARDO CIMENTI ROCHA STRUFALDI', 'bernardo.strufaldi', '281335-1', 'Gerente de Pagamento', 930798000, 'bernardo.strufaldi@inas.df.gov.br', '', '', 1, 3, 29, 29, 0),
(138, 'BRUNA MOREIRA', 'bruna.moreira', '278621-4', 'Assessor Especial', 762836400, 'bruna.moreira@inas.df.gov.br', '', '', 1, 3, 29, 29, 0),
(139, 'DAIANE DE SOUZA ALVARES', 'daiane.salvares', '278781-4', 'Assessor Especial', 577767600, 'daiane.salvares@inas.df.gov.br', '', '', 1, 3, 29, 29, 0),
(140, 'ELIANA RODRIGUES DOS SANTOS SANTANA', 'eliana.santana', '281330-0', 'Chefe da Assessoria Especial da Diretoria Financeira', -80341200, 'eliana.santana@inas.df.gov.br', '', '', 1, 3, 29, 29, 0),
(141, 'FELIPE TEIXEIRA RIBEIRO', 'felipe.ribeiro', '282962-2', 'Coordenador de Orçamento e Finanças', 312174000, 'felipe.ribeiro@inas.df.gov.br', '(61)98107-3738', 'https://www.linkedin.com/in/felipeteixeiraribeiro/', 1, 3, 29, 29, 0),
(142, 'IVANE APARECIDA ALVES GIROTTO', 'ivane.girotto', '281464-1', 'Assessor Especial', 434516400, 'ivane.girotto@inas.df.gov.br', '', '', 1, 3, 29, 29, 0),
(143, 'IZABEL CRISTINA BARROS CORDELLA', 'izabel.cordella', '281285-1', 'Gerente de Liquidação', 427086000, 'izabel.cordella@inas.df.gov.br', '', '', 1, 3, 29, 29, 0),
(144, 'JEFERSON SANTANA DE SALLES', 'jeferson.salles', '283749-8', 'Assessor', 888721200, 'jeferson.salles@inas.df.gov.br', '', '', 1, 3, 29, 29, 0),
(145, 'JOSÉ NEWTON TEOTÔNIO DE CARVALHO', 'jose.tcarvalho', '282374-8', 'Assessor Especial', 65329200, 'jose.tcarvalho@inas.df.gov.br', '(61)98150-0234', '', 1, 3, 29, 29, 0),
(146, 'LEANDRO SANTANA ASSUNÇÃO', 'leandro.assuncao', '283207-0', 'Chefe da Unidade de Controle Contábil', 157172400, 'leandro.assuncao@inas.df.gov.br', '', '', 1, 3, 29, 29, 0),
(147, 'LUCIANA FRANÇA DE ALCÂNTARA', 'luciana.alcantara', '281065-4', 'Chefe da Unidade Financeira', 488516400, 'luciana.alcantara@inas.df.gov.br', '', '', 1, 3, 29, 29, 0),
(148, 'LUCIANO CARDOSO DE BARROS FILHO', 'luciano.filho', '282717-4', 'Diretor de Finanças', 351399600, 'luciano.filho@inas.df.gov.br', '', '', 1, 3, 29, 29, 1),
(150, 'THAINÁ OLIVEIRA PEDRO', 'thaina.pedro', '281955-4', 'Assessor', 785296800, 'thaina.pedro@inas.df.gov.br', '(61)98100-3835', '', 1, 3, 29, 29, 0),
(151, 'WANDERLEI PINTO JUNIO', 'wanderlei.pinto', '283715-3', 'Assessor Especial', 143175600, 'wanderlei.pinto@inas.df.gov.br', '(61)98127-1874', 'https://www.linkedin.com/in/wanderlei-junior-analista-excel-b7013b1a6/', 1, 3, 29, 29, 0),
(152, 'AMANDA ROMEIRO MACÊDO', 'amanda.macedo', '283739-0', 'Assessor Especial', 449550000, 'amanda.macedo@inas.df.gov.br', '', '', 0, 3, 8, 8, 0),
(153, 'ANA CLÁUDIA RODRIGUES DE SOUSA DOS SANTOS', 'ana.rsantos', '2838362', 'Assessor Especial', 150433200, 'ana.rsantos@inas.df.gov.br', '', '', 1, 3, 2, 2, 0),
(154, 'ANIELE CAVALCANTE DE CARVALHO', 'aniele.carvalho', '283832-X', 'Coordenadora de Arrecadação', 602823600, 'aniele.carvalho@inas.df.gov.br', '', '', 1, 3, 38, 38, 0),
(155, 'BIANCA AYRES PALMA RIBEIRO', 'bianca.ribeiro', '283717-X', 'Assessor Especial', 526964400, 'bianca.ribeiro@inas.df.gov.br', '', '', 1, 9, 14, 14, 0),
(156, 'CINTHYA CRISTINE KERN BARRETO', 'cinthya.barreto', '2838478', 'Assessor Especial', 324874800, 'cinthya.barreto@inas.df.gov.br', '(61)98456-0452', '', 1, 3, 5, 5, 0),
(157, 'ELAINE  CRISTINA ALVES SOUTO', 'elaine.souto', '2839369', 'Diretora Adjunta de Operações', 218170800, 'elaine.souto@inas.df.gov.br', '', '', 1, 8, 14, 14, 0),
(158, 'FERNANDO HENRIQUE PERES', 'fernando.peres', '283819-2', 'Assessor', 540788400, 'fernando.peres@inas.df.gov.br', '', '', 1, 9, 14, 14, 0),
(159, 'HANA JÉSSIKA VIANA INÁCIO', 'hana.inacio', '283818-4', 'Assessor', 602218800, 'hana.inacio@inas.df.gov.br', '', '', 1, 3, 8, 8, 0),
(160, 'IVETE BEZERRA ESPÍNOLA', 'ivete.espinola', '2838176', 'Assessor Especial', 286945200, 'ivete.espinola@inas.df.gov.br', '', '', 1, 3, 4, 4, 0),
(161, 'IVO ALBERTO DOS SANTOS', 'ivo.alberto', '283950-4', 'Assessor', 402980400, 'ivo.alberto@inas.df.gov.br', '(61)98424-4697', '', 1, 3, 37, 37, 0),
(162, 'JOSÉ OTÁVIO DA SILVA JUNIOR', 'jose.otavio', '283809-5', 'Chefe da Unidade de Faturamento', 532144800, 'jose.otavio@inas.df.gov.br', '', '', 1, 3, 13, 13, 0),
(163, 'LUCIANO DANTAS ALMEIDA', 'luciano.dantas', '281831-0', 'Assessor', 249188400, 'luciano.dantas@inas.df.gov.br', '', '', 1, 3, 29, 29, 0),
(164, 'NAIARA CRISTINA DA SILVA ROCHA', 'naiara.rocha', '283969-5', 'Assessor Especial', 850096800, 'naiara.rocha@inas.df.gov.br', '', '', 1, 3, 3, 3, 0),
(165, 'PEDRO HENRIQUE LIMA DE ASSUNÇÃO', 'assuncao.pedro', '282983-5', 'Gerente de Orçamento', 519274800, 'assuncao.pedro@inas.df.gov.br', '', '', 1, 3, 29, 29, 0),
(166, 'RENATA LISBOA RIBEIRO NEGRÊDO', 'renata.ribeiro', '283737-4', 'Assessor Especial', 230612400, 'renata.ribeiro@inas.df.gov.br', '', '', 0, 3, 23, 23, 0),
(167, 'SUZANE  GONÇALVES DA SILVA ALVES', 'suzane.alves', '283934-2', 'Assessor', 608094000, 'suzane.alves@inas.df.gov.br', '(61)99126-1809', '', 1, 3, 13, 13, 0),
(168, 'URAMAR SANTOS BARBOSA TEIXEIRA', 'uramar.teixeira', '283738-2', 'Assessor Especial', 389934000, 'uramar.teixeira@inas.df.gov.br', '(61)98402-7919', '', 1, 3, 32, 32, 0),
(1001, 'JOTA TESTE', 'jota.admin', '000000', 'Assessor', 949716000, 'jota@email.com', '', '', 1, 3, 28, 28, 0),
(1002, 'RENATA ANDREA CARVALHO DE MELO', 'renata.melo', '283879-6', NULL, 340340400, 'renata.melo@inas.df.gov.br', '', '', 1, 3, 8, 8, 0),
(1003, 'DAYANA DA SILVA SALLES', 'dayana.salles', '283989-X', 'Chefe da Unidade de Gestão de Rede', 582001200, 'dayana.salles@inas.df.gov.br', '', '', 1, 3, 8, 8, 0),
(1004, 'ALESSANDRA MARQUETO', 'alessandra.marqueto', '284254-8', 'Assessora Especial', 97556400, 'alessandra.marqueto@inas.df.gov.br', '', '', 1, 3, 8, 9, 0),
(1005, 'ARTHUR BRAÚNA MENDONÇA', 'arthur.mendonca', '284260-2', 'Assessor', 907815600, 'arthur.mendonca@inas.df.gov.br', '', '', 1, 3, 17, 21, 0),
(1006, 'BRUNO LUIZ DOS SANTOS', 'bruno.lsantos', '284047-2', 'Chefe da Assessoria Atuarial', 463546800, 'bruno.lsantos@inas.df.gov.br', '(34)99940-3068', 'https://www.linkedin.com/in/bruno-santos-atu%C3%A1rio/', 1, 3, 7, 7, 0),
(1007, 'CARLOS ALBERTO BATISTA DA SILVA JÚNIOR', 'carlos.ajunior', '284389-7', 'Chefe da Unidade Consultiva', 353559600, 'carlos.ajunior@inas.df.gov.br', '', '', 1, 3, 42, 42, 0),
(1008, 'FABRÍCIO MARQUES RODRIGUES DE OLIVEIRA', 'fabricio.marques', '284018-9', 'Assessor Especial', 194842800, 'fabricio.marques@inas.df.gov.br', '', '', 1, 3, 29, 29, 0),
(1012, 'MATHEUS JONATHAS MARQUES DE ANDRADE', 'matheus.andrade', '284360-9', 'Assessor', 867639600, 'matheus.andrade@inas.df.gov.br', '', '', 1, 3, 19, 22, 0),
(1013, 'RAFAEL AZEVEDO SANTOS', 'rafael.azevedo', '284195-9', 'Assessor Especial', 424926000, 'rafael.azevedo@inas.df.gov.br', '(61)99167-6123', 'https://www.linkedin.com/in/rafael-azevedo-santos-8798b337/', 1, 3, 29, 29, 0),
(1014, 'TARCÍSIO SOUZA FARIA', 'tarcisio.souza', '284020-0', 'Assessor Especial', 564285600, 'tarcisio.souza@inas.df.gov.br', '', '', 1, 3, 11, 11, 0),
(1015, 'GEOVAN LOPES COSTA SCALIA', 'geovan.scalia', '281294-0', 'Assessor', -36968400, 'geovan.scalia@inas.df.gov.br', '', '', 1, 3, 1, 1, 0),
(1016, 'Lorena de Sousa Lobo', 'lorena.lobo', '284475-3', 'Assessor', 368766000, 'lorena.lobo@inas.df.gov.br', '', '', 1, 3, 17, 17, 0),
(1017, 'Glauber Vinícius Cunha Gervasio', 'glauber.gervasio', '284572-5', 'Assessoria Especial', 400388400, 'glauber.gervasio@inas.df.gov.br', '', '', 1, NULL, NULL, 18, 0),
(1018, 'Leila Henrique do Nascimento', 'leila.nascimento', '284579-2', 'Assessor Especial', 49777200, 'leila.nascimento@inas.df.gov.br', '', '', 1, NULL, NULL, 2, 0),
(1019, 'Victor Hugo dos Santos Lacerda da Cruz', 'victor.cruz', '284566-0', 'Assessor Especial', 1066532400, 'victor.cruz@inas.df.gov.br', '', '', 1, NULL, NULL, 7, 0),
(1020, 'Sayomara Fernandes Seixas', 'sayomara.seixas', '284583-0', 'Assessor', 147841200, 'sayomara.seixas@inas.df.gov.br', '', '', 1, NULL, NULL, 27, 0),
(1021, 'Andressa Nascimento Sá', 'andressa.sa', '284614-4', 'Assessor Especial', 799902000, 'andressa.sa@inas.df.gov.br', '', '', 1, NULL, NULL, 11, 0),
(1022, 'Anderson Rone Avelino de Oliveira', 'anderson.avelino', '284613-6', 'Assessor', 720756000, 'anderson.avelino@inas.df.gov.br', '', '', 1, NULL, NULL, 37, 0),
(1023, 'Graziele Dias Borges', 'graziele.dias', '284618-7', 'Assessor', 876794400, 'graziele.dias@inas.df.gov.br', '(61)98463-3271', '', 1, NULL, NULL, 8, 0),
(1024, 'Wesley Lima Silva Araújo', 'wesley.saraujo', '284652-7', 'Assessor', 716871600, 'wesley.saraujo@inas.df.gov.br', '', '', 1, NULL, NULL, 27, 0),
(1025, 'Renata  Bezerra da Silva', 'renata.bezerra', '103065', 'Estagiária', 960433200, 'renata.bezerra@inas.df.gov.br', '', '', 1, NULL, NULL, 28, 0),
(1026, 'ARI HENRIQUE DOS SANTOS', 'ari.santos', '284683-7', 'Analista PPGG', 27399600, 'ari.santos@inas.df.gov.br', '', '', 1, NULL, NULL, 1, 0),
(1027, 'Pedro Henrique Pimenta Laurentino', 'pedro.laurentino', '284707-8', 'Gestor em Políticas Públicas e Gestão Governamental ', 978746400, 'pedro.laurentino@inas.df.gov.br', '', '', 1, NULL, NULL, 17, 0),
(1028, 'Marcus Vinícius de Oliveira Sousa', 'marcus.voliveira', '284697-7', 'Assessor', 770612400, 'marcus.oliveira@inas.df.gov.br', '', '', 1, NULL, NULL, 17, 0),
(1029, 'Miriam de Castro França e Silva', 'miriam.silva', '284728-0', 'Analista em Políticas Públicas e Gestão Governamental ', 982116000, 'miriam.silva@inas.df.gov.br', '', '', 1, NULL, NULL, 17, 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `acao`
--
ALTER TABLE `acao`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_acao_etapa1_idx` (`id_etapa`),
  ADD KEY `fk_acao_usuario1_idx` (`id_usuario`);

--
-- Índices para tabela `acesso`
--
ALTER TABLE `acesso`
  ADD PRIMARY KEY (`id_usuario`,`id_modulo`),
  ADD KEY `fk_usuario_has_modulo_modulo1_idx` (`id_modulo`),
  ADD KEY `fk_usuario_has_modulo_usuario1_idx` (`id_usuario`),
  ADD KEY `fk_acesso_perfil1_idx` (`id_perfil`);

--
-- Índices para tabela `acesso_agenda`
--
ALTER TABLE `acesso_agenda`
  ADD KEY `fk_usuario_has_agenda_usuario1_idx` (`id_usuario`);

--
-- Índices para tabela `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_agenda_usuario1_idx` (`id_usuario`);

--
-- Índices para tabela `assunto`
--
ALTER TABLE `assunto`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `atendimento`
--
ALTER TABLE `atendimento`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_usuario_has_fila_fila1_idx` (`id_fila`),
  ADD KEY `fk_atendimento_guiche1_idx` (`id_guiche`);

--
-- Índices para tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `chamado`
--
ALTER TABLE `chamado`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_chamado_usuario1_idx` (`id_usuario`);

--
-- Índices para tabela `classe_judicial`
--
ALTER TABLE `classe_judicial`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `editor`
--
ALTER TABLE `editor`
  ADD PRIMARY KEY (`id_usuario`,`id_tarefa`),
  ADD KEY `fk_usuario_has_tarefa_tarefa1_idx` (`id_tarefa`),
  ADD KEY `fk_usuario_has_tarefa_usuario1_idx` (`id_usuario`);

--
-- Índices para tabela `equipe`
--
ALTER TABLE `equipe`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `equipe_usuario`
--
ALTER TABLE `equipe_usuario`
  ADD PRIMARY KEY (`id_equipe`,`id_usuario`),
  ADD KEY `fk_equipe_has_usuario_usuario1_idx` (`id_usuario`),
  ADD KEY `fk_equipe_has_usuario_equipe1_idx` (`id_equipe`);

--
-- Índices para tabela `etapa`
--
ALTER TABLE `etapa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_etapa_tarefa_idx` (`id_tarefa`);

--
-- Índices para tabela `fila`
--
ALTER TABLE `fila`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_fila_servico1_idx` (`id_servico`);

--
-- Índices para tabela `guiche`
--
ALTER TABLE `guiche`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_guiche_usuario1_idx` (`id_usuario`);

--
-- Índices para tabela `instancia`
--
ALTER TABLE `instancia`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `interacao`
--
ALTER TABLE `interacao`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_interacao_chamado1_idx` (`id_chamado`),
  ADD KEY `fk_interacao_usuario1_idx` (`id_usuario`);

--
-- Índices para tabela `liminar`
--
ALTER TABLE `liminar`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `modulo`
--
ALTER TABLE `modulo`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `nota`
--
ALTER TABLE `nota`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_nota_pergunta1_idx` (`id_pergunta`);

--
-- Índices para tabela `notificacao`
--
ALTER TABLE `notificacao`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_notificacao_usuario1_idx` (`id_usuario`);

--
-- Índices para tabela `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `pergunta`
--
ALTER TABLE `pergunta`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `processo`
--
ALTER TABLE `processo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_processo_assunto1_idx` (`id_assunto`),
  ADD KEY `fk_processo_situacao_processual1_idx` (`id_situacao_processual`),
  ADD KEY `fk_processo_liminar1_idx` (`id_liminar`),
  ADD KEY `fk_processo_usuario1_idx` (`id_usuario`),
  ADD KEY `fk_processo_instancia1_idx` (`id_instancia`),
  ADD KEY `fk_processo_classe_judicial1_idx` (`id_classe_judicial`);

--
-- Índices para tabela `recepcao`
--
ALTER TABLE `recepcao`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_recepcao_usuario1_idx` (`id_usuario`);

--
-- Índices para tabela `servico`
--
ALTER TABLE `servico`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `setor`
--
ALTER TABLE `setor`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `situacao_processual`
--
ALTER TABLE `situacao_processual`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tarefa`
--
ALTER TABLE `tarefa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tarefa_usuario1_idx` (`id_criador`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_usuario_equipe1_idx` (`id_equipe`),
  ADD KEY `fk_usuario_setor1_idx` (`id_setor`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `acao`
--
ALTER TABLE `acao`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `assunto`
--
ALTER TABLE `assunto`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `atendimento`
--
ALTER TABLE `atendimento`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `chamado`
--
ALTER TABLE `chamado`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `classe_judicial`
--
ALTER TABLE `classe_judicial`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `equipe`
--
ALTER TABLE `equipe`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `etapa`
--
ALTER TABLE `etapa`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `fila`
--
ALTER TABLE `fila`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `guiche`
--
ALTER TABLE `guiche`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `instancia`
--
ALTER TABLE `instancia`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `interacao`
--
ALTER TABLE `interacao`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `liminar`
--
ALTER TABLE `liminar`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `modulo`
--
ALTER TABLE `modulo`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `nota`
--
ALTER TABLE `nota`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `notificacao`
--
ALTER TABLE `notificacao`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `perfil`
--
ALTER TABLE `perfil`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `pergunta`
--
ALTER TABLE `pergunta`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `processo`
--
ALTER TABLE `processo`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `recepcao`
--
ALTER TABLE `recepcao`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `servico`
--
ALTER TABLE `servico`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `setor`
--
ALTER TABLE `setor`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT de tabela `situacao_processual`
--
ALTER TABLE `situacao_processual`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tarefa`
--
ALTER TABLE `tarefa`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1030;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `acao`
--
ALTER TABLE `acao`
  ADD CONSTRAINT `fk_acao_etapa1` FOREIGN KEY (`id_etapa`) REFERENCES `etapa` (`id`),
  ADD CONSTRAINT `fk_acao_usuario1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`);

--
-- Limitadores para a tabela `acesso`
--
ALTER TABLE `acesso`
  ADD CONSTRAINT `fk_acesso_perfil1` FOREIGN KEY (`id_perfil`) REFERENCES `perfil` (`id`),
  ADD CONSTRAINT `fk_usuario_has_modulo_modulo1` FOREIGN KEY (`id_modulo`) REFERENCES `modulo` (`id`),
  ADD CONSTRAINT `fk_usuario_has_modulo_usuario1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`);

--
-- Limitadores para a tabela `acesso_agenda`
--
ALTER TABLE `acesso_agenda`
  ADD CONSTRAINT `fk_usuario_has_agenda_usuario1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`);

--
-- Limitadores para a tabela `agenda`
--
ALTER TABLE `agenda`
  ADD CONSTRAINT `fk_agenda_usuario1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`);

--
-- Limitadores para a tabela `atendimento`
--
ALTER TABLE `atendimento`
  ADD CONSTRAINT `fk_atendimento_guiche1` FOREIGN KEY (`id_guiche`) REFERENCES `guiche` (`id`),
  ADD CONSTRAINT `fk_usuario_has_fila_fila1` FOREIGN KEY (`id_fila`) REFERENCES `fila` (`id`);

--
-- Limitadores para a tabela `chamado`
--
ALTER TABLE `chamado`
  ADD CONSTRAINT `fk_chamado_usuario1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`);

--
-- Limitadores para a tabela `editor`
--
ALTER TABLE `editor`
  ADD CONSTRAINT `fk_usuario_has_tarefa_tarefa1` FOREIGN KEY (`id_tarefa`) REFERENCES `tarefa` (`id`),
  ADD CONSTRAINT `fk_usuario_has_tarefa_usuario1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`);

--
-- Limitadores para a tabela `equipe_usuario`
--
ALTER TABLE `equipe_usuario`
  ADD CONSTRAINT `fk_equipe_has_usuario_equipe1` FOREIGN KEY (`id_equipe`) REFERENCES `equipe` (`id`),
  ADD CONSTRAINT `fk_equipe_has_usuario_usuario1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`);

--
-- Limitadores para a tabela `etapa`
--
ALTER TABLE `etapa`
  ADD CONSTRAINT `fk_etapa_tarefa` FOREIGN KEY (`id_tarefa`) REFERENCES `tarefa` (`id`);

--
-- Limitadores para a tabela `fila`
--
ALTER TABLE `fila`
  ADD CONSTRAINT `fk_fila_servico1` FOREIGN KEY (`id_servico`) REFERENCES `servico` (`id`);

--
-- Limitadores para a tabela `guiche`
--
ALTER TABLE `guiche`
  ADD CONSTRAINT `fk_guiche_usuario1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`);

--
-- Limitadores para a tabela `interacao`
--
ALTER TABLE `interacao`
  ADD CONSTRAINT `fk_interacao_chamado1` FOREIGN KEY (`id_chamado`) REFERENCES `chamado` (`id`),
  ADD CONSTRAINT `fk_interacao_usuario1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`);

--
-- Limitadores para a tabela `nota`
--
ALTER TABLE `nota`
  ADD CONSTRAINT `fk_nota_pergunta1` FOREIGN KEY (`id_pergunta`) REFERENCES `pergunta` (`id`);

--
-- Limitadores para a tabela `notificacao`
--
ALTER TABLE `notificacao`
  ADD CONSTRAINT `fk_notificacao_usuario1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`);

--
-- Limitadores para a tabela `processo`
--
ALTER TABLE `processo`
  ADD CONSTRAINT `fk_processo_assunto1` FOREIGN KEY (`id_assunto`) REFERENCES `assunto` (`id`),
  ADD CONSTRAINT `fk_processo_classe_judicial1` FOREIGN KEY (`id_classe_judicial`) REFERENCES `classe_judicial` (`id`),
  ADD CONSTRAINT `fk_processo_instancia1` FOREIGN KEY (`id_instancia`) REFERENCES `instancia` (`id`),
  ADD CONSTRAINT `fk_processo_liminar1` FOREIGN KEY (`id_liminar`) REFERENCES `liminar` (`id`),
  ADD CONSTRAINT `fk_processo_situacao_processual1` FOREIGN KEY (`id_situacao_processual`) REFERENCES `situacao_processual` (`id`),
  ADD CONSTRAINT `fk_processo_usuario1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`);

--
-- Limitadores para a tabela `recepcao`
--
ALTER TABLE `recepcao`
  ADD CONSTRAINT `fk_recepcao_usuario1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`);

--
-- Limitadores para a tabela `tarefa`
--
ALTER TABLE `tarefa`
  ADD CONSTRAINT `fk_tarefa_usuario1` FOREIGN KEY (`id_criador`) REFERENCES `usuario` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
