-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 01-Dez-2017 às 12:27
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
-- Estrutura da tabela `feedbacks`
--

CREATE TABLE `feedbacks` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT 'anonimo',
  `email` varchar(100) DEFAULT NULL,
  `feed` varchar(300) NOT NULL,
  `gravado_em` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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
(2, 'Um Uno e uma Ferrari, andando à 80km/h ao mesmo tempo, logo:', 'Não tendo aceleração não podemos predizer a resposta correta, logo partindo do principio schrodinger,  podemos supor que todas as alternativas estão corretas, pois todas elas ocorrem.', 4, 'Eles estarão lado-a-lado', 'O Uno estara na frente', 'A ferrari estara na frente', 'Todas acima', 'Impossivel predizer sem a aceleração'),
(3, '01000101 01110011 01110100 01100001 00100000 01100101 01110011 01100011 01110010 01101001 01110100 01100001 00100000 11101001 00111010 ', '01010000 01101111 01110010 00100000 01110001 01110101 01100101 00100000 01100011 01101111 01101110 01110100 01100101 01101101 00100000 00110000 01110011 00100000 01100101 00100000 00110001 01110011 00101110 ', 2, '01001101 01101111 01110010 01110011 01100101 ', '01000010 01101001 01101110 01100001 01110010 01101001 01101111 ', '01000110 01110010 01100001 01101110 01100011 01100101 01110011', NULL, NULL),
(4, 'Ser ou não ser?', 'Pois esta é a questão', 3, 'Ser', 'Não ser', 'Eis a questão', NULL, NULL),
(5, 'Se um sujeito advogado, é parado em uma blitz, qual é o procedimento correto?', 'Sendo o sujeito um advogado, ele se encontra acima da lei, logo, os policias da bliz devem trata-lo como um juiz e deixa-lo ir embora.', 2, 'Ele deve colaborar com os policias', 'Ele deve dizer que é advogado, e ir embora', NULL, NULL, NULL),
(6, 'Qual o titulo correto para um estudante de direito?', 'Pois o estudante de direito ja é um doutor, mesmo que ainda no primeiro semestre.', 3, 'Estudante', 'Juiz', 'Doutor', 'Advogado', 'Vossa Excelencia');

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
(2, 2),
(3, 2),
(4, 1),
(5, 3),
(6, 3);

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
(2, 'Ciencias Gerais', 2017, 'SUPER', 'CG', 'ARC', 4),
(3, 'Carteirada', 2017, 'SUPER', 'ADV', 'ADVBR', 1);

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
(2, 'Lisiane Reips', '$2y$10$3X9Yu5z9Xg6qAZNgLAOj4.bf/l9lSxAayeBmvzO9C/UiKs1aS3vpi', 'lisireips@gmail.com', 'admin', '2017-08-22 22:48:17', '2017-08-22 22:48:17'),
(4, 'carlos', '$2y$10$TM96vhpS2t8kCZkW4ouaEeQrHvU5NOGaVWkmN2uXn7irsy3r2QDzW', 'carlos.bonacina@ibiruba.ifrs.edu.br', 'admin', '2017-11-28 11:14:35', '2017-11-28 11:14:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `concursos`
--
ALTER TABLE `concursos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
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
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `perguntas`
--
ALTER TABLE `perguntas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `provas`
--
ALTER TABLE `provas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;