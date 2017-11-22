-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 22-Nov-2017 às 17:57
-- Versão do servidor: 5.5.37
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_site_concursos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `concursos`
--

CREATE TABLE `concursos` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(50) NOT NULL,
  `tipo` char(5) NOT NULL,
  `banca` char(5) NOT NULL,
  `estado` char(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `concursos`
--

INSERT INTO `concursos` (`id`, `nome`, `tipo`, `banca`, `estado`) VALUES
(1, 'OAB', 'SUPER', 'OABRS', 'RS'),
(2, 'Concurso Publico', 'FUND', 'PPRS', 'RS'),
(3, 'Academia de Literatura Brasileira', 'SUPER', 'ALB', 'RS'),
(4, 'Academia Real de Ciencias', 'SUPER', 'ARC', 'RJ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `perguntas`
--

CREATE TABLE `perguntas` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `explicacao` varchar(300) DEFAULT NULL,
  `resposta` int(11) NOT NULL,
  `resp1` varchar(100) NOT NULL,
  `resp2` varchar(100) NOT NULL,
  `resp3` varchar(100) DEFAULT NULL,
  `resp4` varchar(100) DEFAULT NULL,
  `resp5` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `perguntas`
--

INSERT INTO `perguntas` (`id`, `nome`, `explicacao`, `resposta`, `resp1`, `resp2`, `resp3`, `resp4`, `resp5`) VALUES
(1, 'A terra é plana?', 'Não, pois a gravidade deforma para o centro, de maneira que os corpos celestes, tomem uma forma arredondada.', 1, 'Não', 'Sim', '', '', ''),
(2, 'Um Uno e uma Ferrari, andando à 80km/h ao mesmo tempo, logo:', 'Não tendo aceleração não podemos predizer a resposta correta, logo partindo do principio schrodinger,  podemos supor que todas as alternativas estão corretas, pois todas elas ocorrem.', 4, 'Eles estarão lado-a-lado', 'O Uno estara na frente', 'A ferrari estara na frente', 'Todas acima', 'Impossivel predizer sem a aceleração');

-- --------------------------------------------------------

--
-- Estrutura da tabela `perguntas_provas`
--

CREATE TABLE `perguntas_provas` (
  `pergunta_id` int(11) NOT NULL,
  `prova_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `perguntas_provas`
--

INSERT INTO `perguntas_provas` (`pergunta_id`, `prova_id`) VALUES
(1, 2),
(2, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `provas`
--

CREATE TABLE `provas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(50) NOT NULL,
  `ano` int(11) NOT NULL,
  `nivel` char(5) NOT NULL,
  `tipo` varchar(30) NOT NULL,
  `banca` varchar(10) NOT NULL,
  `concurso_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `provas`
--

INSERT INTO `provas` (`id`, `nome`, `ano`, `nivel`, `tipo`, `banca`, `concurso_id`) VALUES
(1, 'Literatura e conhecimentos populares', 2017, 'SUPER', 'LT', 'ALB', 3),
(2, 'Ciencias Gerais', 2017, 'SUPER', 'CG', 'ARC', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(60) NOT NULL,
  `role` varchar(20) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `role`, `created`, `modified`) VALUES
(1, 'gian.vieira', '$2y$10$ljPt/wK7SwaVs/GTCEaO2.ezvSZZrGbLvojazXwgZc28tRvIPtKRW', 'gianpvieira@gmail.com', 'admin', '2017-08-14 17:27:00', '2017-08-14 17:27:00'),
(2, 'Lisiane Reips', '$2y$10$3X9Yu5z9Xg6qAZNgLAOj4.bf/l9lSxAayeBmvzO9C/UiKs1aS3vpi', 'lisireips@gmail.com', 'admin', '2017-08-22 22:48:17', '2017-08-22 22:48:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `concursos`
--
ALTER TABLE `concursos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perguntas`
--
ALTER TABLE `perguntas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nome` (`nome`);

--
-- Indexes for table `perguntas_provas`
--
ALTER TABLE `perguntas_provas`
  ADD PRIMARY KEY (`pergunta_id`,`prova_id`),
  ADD KEY `fk_pp_pr` (`prova_id`);

--
-- Indexes for table `provas`
--
ALTER TABLE `provas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_concurso` (`concurso_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `concursos`
--
ALTER TABLE `concursos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `perguntas`
--
ALTER TABLE `perguntas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `provas`
--
ALTER TABLE `provas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
