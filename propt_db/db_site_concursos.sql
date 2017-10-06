-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 20-Set-2017 às 15:57
-- Versão do servidor: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: db_site_concursos
--

-- --------------------------------------------------------

--
-- Estrutura da tabela concursos
--

CREATE TABLE concursos (
  id int(10) UNSIGNED NOT NULL,
  nome varchar(50) NOT NULL,
  tipo char(5) NOT NULL,
  banca char(5) NOT NULL,
  estado char(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


-- --------------------------------------------------------

--
-- Estrutura da tabela perguntas
--

CREATE TABLE perguntas (
  id int(11) NOT NULL,
  nome varchar(200) NOT NULL,
  explicacao varchar(300) DEFAULT NULL,
  resposta int(11) NOT NULL,
  resp1 varchar(100) NOT NULL,
  resp2 varchar(100) NOT NULL,
  resp3 varchar(100) DEFAULT NULL,
  resp4 varchar(100) DEFAULT NULL,
  resp5 varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela perguntas_provas
--

CREATE TABLE perguntas_provas (
  pergunta_id int(11) NOT NULL,
  prova_id int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela provas
--

CREATE TABLE provas (
  id int(10) UNSIGNED NOT NULL,
  nome varchar(50) NOT NULL,
  ano int(11) NOT NULL,
  nivel char(5) NOT NULL,
  tipo varchar(30) NOT NULL,
  banca varchar(10) NOT NULL,
  concurso_id int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela users
--

CREATE TABLE users (
  id int(10) UNSIGNED NOT NULL,
  username varchar(50) NOT NULL,
  password varchar(255) NOT NULL,
  email varchar(60) NOT NULL,
  role varchar(20) NOT NULL,
  created datetime DEFAULT NULL,
  modified datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela users
--

INSERT INTO users (id, username, password, email, role, created, modified) VALUES
(1, 'gian.vieira', '$2y$10$ljPt/wK7SwaVs/GTCEaO2.ezvSZZrGbLvojazXwgZc28tRvIPtKRW', 'gianpvieira@gmail.com', 'admin', '2017-08-14 17:27:00', '2017-08-14 17:27:00'),
(2, 'Lisiane Reips', '$2y$10$3X9Yu5z9Xg6qAZNgLAOj4.bf/l9lSxAayeBmvzO9C/UiKs1aS3vpi', 'lisireips@gmail.com', 'admin', '2017-08-22 22:48:17', '2017-08-22 22:48:17'),
(3, 'Scheila Kurz', '$2y$10$xf.yjPROPZYFMlVwuUbylej6/lTvp5sV5upf1lS6u2QlzuWHP6VZi', 'scheila.kurz@ibiruba.ifrs.edu.br', 'admin', '2017-08-22 22:49:38', '2017-08-22 22:49:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table concursos
--
ALTER TABLE concursos
  ADD PRIMARY KEY (id);

--
-- Indexes for table perguntas
--
ALTER TABLE perguntas
  ADD PRIMARY KEY (id),
  ADD UNIQUE KEY nome (nome);

--
-- Indexes for table perguntas_provas
--
ALTER TABLE perguntas_provas
  ADD PRIMARY KEY (pergunta_id,prova_id),
  ADD FOREIGN KEY fk_pp_pr (prova_id) REFERENCES provas(id),
  ADD FOREIGN KEY fk_pp_pe (pergunta_id) REFERENCES perguntas (id);

--
-- Indexes for table provas
--
ALTER TABLE provas
  ADD PRIMARY KEY (id),
  ADD FOREIGN KEY fk_concurso (concurso_id) REFERENCES concursos (id);

--
-- Indexes for table users
--
ALTER TABLE users
  ADD PRIMARY KEY (id),
  ADD UNIQUE KEY username (username);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table concursos
--
ALTER TABLE concursos
  MODIFY id int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
--
-- AUTO_INCREMENT for table perguntas
--
ALTER TABLE perguntas
  MODIFY id int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table provas
--
ALTER TABLE provas
  MODIFY id int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table users
--
ALTER TABLE users
  MODIFY id int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
