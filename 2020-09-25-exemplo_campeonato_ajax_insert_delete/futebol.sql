-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 05/10/2020 às 03:34
-- Versão do servidor: 10.4.11-MariaDB
-- Versão do PHP: 7.3.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

CREATE DATABASE IF NOT EXISTS futebol3;
use futebol3;

-- --------------------------------------------------------

--
-- Estrutura para tabela `arbitro`
--

CREATE TABLE `arbitro` (
  `id_arbitro` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `data_nascimento` date NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `uf` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `arbitro`
--

INSERT INTO `arbitro` (`id_arbitro`, `nome`, `data_nascimento`, `cidade`, `uf`) VALUES
(4, 'Maria da Silva', '1999-01-01', 'Araraquara', 'SP');

-- --------------------------------------------------------

--
-- Estrutura para tabela `campeonato`
--

CREATE TABLE `campeonato` (
  `id_campeonato` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `ano` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `campeonato`
--

INSERT INTO `campeonato` (`id_campeonato`, `nome`, `ano`) VALUES
(39, 'Campeonato Paulista', 2020),
(66, 'Campeonato Paulista alterar', 2021);

-- --------------------------------------------------------

--
-- Estrutura para tabela `jogador`
--

CREATE TABLE `jogador` (
  `id_jogador` int(11) NOT NULL,
  `data_nascimento` date NOT NULL,
  `nome` varchar(100) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `uf` char(2) NOT NULL,
  `numero_camisa` int(11) NOT NULL,
  `cod_time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `jogador`
--

INSERT INTO `jogador` (`id_jogador`, `data_nascimento`, `nome`, `cidade`, `uf`, `numero_camisa`, `cod_time`) VALUES
(4, '1999-09-22', 'teste', 'city alterado', 'sp', 11, 10),
(6, '2020-08-31', 'asdasd', 'adasd', 'as', 12, 9),
(7, '2020-09-01', 'asdasd', '1adsa', 'ss', 12, 10),
(8, '2020-09-29', 'aaaa12345', 'aaaa', 'sp', 12, 10),
(10, '2020-09-29', 'xxxxx', 'aaaa', 'sp', 12, 11),
(11, '2020-09-29', 'teste', 'aaaa', 'sp', 12, 11),
(12, '2020-09-29', 'teste', 'aaaa', 'sp', 12, 11),
(13, '2020-09-29', 'teste', 'aaaa', 'sp', 12, 11),
(14, '2020-09-29', 'teste', 'aaaa', 'sp', 12, 11),
(15, '2020-09-29', 'teste', 'aaaa', 'sp', 12, 11),
(16, '2020-09-29', 'teste', 'aaaa', 'sp', 12, 11),
(17, '2020-09-29', 'aaaa', 'Beb', 'sp', 10, 9),
(18, '2020-09-29', 'aaaa', 'Beb', 'sp', 10, 9);

-- --------------------------------------------------------

--
-- Estrutura para tabela `jogo`
--

CREATE TABLE `jogo` (
  `id_jogo` int(11) NOT NULL,
  `data` date NOT NULL,
  `horario` time NOT NULL,
  `cod_time1` int(11) NOT NULL,
  `cod_time2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `jogo`
--

INSERT INTO `jogo` (`id_jogo`, `data`, `horario`, `cod_time1`, `cod_time2`) VALUES
(1, '2020-09-10', '20:00:00', 11, 9),
(2, '2020-09-10', '20:30:00', 11, 9),
(3, '2020-09-11', '22:50:00', 10, 11),
(4, '2020-09-15', '20:50:00', 10, 9);

-- --------------------------------------------------------

--
-- Estrutura para tabela `time`
--

CREATE TABLE `time` (
  `id_time` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `uf` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `time`
--

INSERT INTO `time` (`id_time`, `nome`, `cidade`, `uf`) VALUES
(9, 'São Paulo', 'São Paulo', 'SP'),
(10, 'Palmeiras não tem Mundial', 'São Paulo', 'SP'),
(11, 'Curintia', 'São Paulo', 'SP');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` char(32) NOT NULL,
  `permissao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nome`, `email`, `senha`, `permissao`) VALUES
(1, 'Admin', 'beluzo@email.com', '827ccb0eea8a706c4c34a16891f84e7b', 1),
(2, 'Visualizador', 'visualizador@email.com', '827ccb0eea8a706c4c34a16891f84e7b', 3),
(3, 'editor', 'editor@email.com', '827ccb0eea8a706c4c34a16891f84e7b', 2);

-- --------------------------------------------------------

--
-- Estrutura stand-in para view `view_jogador`
-- (Veja abaixo para a visão atual)
--
CREATE TABLE `view_jogador` (
`id_jogador` int(11)
,`data_nascimento` date
,`nome_jogador` varchar(100)
,`cidade_jogador` varchar(100)
,`uf_jogador` char(2)
,`numero_camisa` int(11)
,`nome_time` varchar(100)
);

-- --------------------------------------------------------

--
-- Estrutura stand-in para view `view_jogo`
-- (Veja abaixo para a visão atual)
--
CREATE TABLE `view_jogo` (
`id_jogo` int(11)
,`data` date
,`horario` time
,`time_da_casa` varchar(100)
,`time_visitante` varchar(100)
);

-- --------------------------------------------------------

--
-- Estrutura para view `view_jogador`
--
DROP TABLE IF EXISTS `view_jogador`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_jogador`  AS  select `j`.`id_jogador` AS `id_jogador`,`j`.`data_nascimento` AS `data_nascimento`,`j`.`nome` AS `nome_jogador`,`j`.`cidade` AS `cidade_jogador`,`j`.`uf` AS `uf_jogador`,`j`.`numero_camisa` AS `numero_camisa`,`time`.`nome` AS `nome_time` from (`jogador` `j` join `time` on(`j`.`cod_time` = `time`.`id_time`)) order by `j`.`nome` ;

-- --------------------------------------------------------

--
-- Estrutura para view `view_jogo`
--
DROP TABLE IF EXISTS `view_jogo`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_jogo`  AS  select `jogo`.`id_jogo` AS `id_jogo`,`jogo`.`data` AS `data`,`jogo`.`horario` AS `horario`,`t1`.`nome` AS `time_da_casa`,`t2`.`nome` AS `time_visitante` from ((`jogo` join `time` `t1` on(`jogo`.`cod_time1` = `t1`.`id_time`)) join `time` `t2` on(`jogo`.`cod_time2` = `t2`.`id_time`)) ;

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `arbitro`
--
ALTER TABLE `arbitro`
  ADD PRIMARY KEY (`id_arbitro`);

--
-- Índices de tabela `campeonato`
--
ALTER TABLE `campeonato`
  ADD PRIMARY KEY (`id_campeonato`);

--
-- Índices de tabela `jogador`
--
ALTER TABLE `jogador`
  ADD PRIMARY KEY (`id_jogador`),
  ADD KEY `cod_time` (`cod_time`);

--
-- Índices de tabela `jogo`
--
ALTER TABLE `jogo`
  ADD PRIMARY KEY (`id_jogo`),
  ADD KEY `cod_time1` (`cod_time1`),
  ADD KEY `cod_time2` (`cod_time2`);

--
-- Índices de tabela `time`
--
ALTER TABLE `time`
  ADD PRIMARY KEY (`id_time`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `arbitro`
--
ALTER TABLE `arbitro`
  MODIFY `id_arbitro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `campeonato`
--
ALTER TABLE `campeonato`
  MODIFY `id_campeonato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT de tabela `jogador`
--
ALTER TABLE `jogador`
  MODIFY `id_jogador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `jogo`
--
ALTER TABLE `jogo`
  MODIFY `id_jogo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `time`
--
ALTER TABLE `time`
  MODIFY `id_time` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `jogador`
--
ALTER TABLE `jogador`
  ADD CONSTRAINT `jogador_ibfk_1` FOREIGN KEY (`cod_time`) REFERENCES `time` (`id_time`) ON UPDATE CASCADE;

--
-- Restrições para tabelas `jogo`
--
ALTER TABLE `jogo`
  ADD CONSTRAINT `jogo_ibfk_1` FOREIGN KEY (`cod_time1`) REFERENCES `time` (`id_time`) ON UPDATE CASCADE,
  ADD CONSTRAINT `jogo_ibfk_2` FOREIGN KEY (`cod_time2`) REFERENCES `time` (`id_time`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
