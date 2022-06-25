-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25-Jun-2022 às 02:32
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Banco de dados: `web_studies`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tabela`
--

CREATE TABLE `tabela` (
  `id` int(11) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `email` varchar(120) NOT NULL,
  `datinha` date NOT NULL,
  `senha` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tabela`
--

INSERT INTO `tabela` (`id`, `nome`, `email`, `datinha`, `senha`) VALUES
(199, 'Cavalãozin', 'Ratinhoo777@gmail.com', '2007-07-07', 'EuSouOMilior'),
(201, 'Aluno EEEP MANOEL MA', 'alunocemm@gmail.com', '2004-12-20', 'aluno123eeep'),
(202, 'Adeilson', 'alunocemm@gmail.com', '2004-12-20', 'aluno123eeep'),
(203, 'Adeilson Aragão ', 'adeilsoara@gmail.com', '1997-12-17', 'amoJustinBaby'),
(204, 'Douglas Neres', 'douglasobomba@gmail.com', '2005-04-06', 'muitoLindo'),
(205, 'Pedro Henrique', 'pedrohenriquearaujosoares25@gmail.com', '2002-02-19', 'cachinhosSim'),
(206, 'Mairton Rodrigues', 'mairtoC@gmail.com', '2006-07-09', 'eleGostaa');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tabela`
--
ALTER TABLE `tabela`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tabela`
--
ALTER TABLE `tabela`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=207;
COMMIT;