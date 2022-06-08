-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08-Jun-2022 às 16:41
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
(19, '', '', '0000-00-00', ''),
(20, 'Douglas Neres', 'douglasobomba@gmail.com', '0000-00-00', 'pitchula123'),
(21, 'Douglas Neres', 'douglasobomba@gmail.com', '0000-00-00', 'pitchula123'),
(22, '', '', '0000-00-00', ''),
(23, 'flamengo', 'flamengo@gmail.com', '0000-00-00', 'pedro123'),
(24, 'flamengo', 'flamengo@gmail.com', '0000-00-00', 'pedro123'),
(25, 'flamengo', 'flamengo@gmail.com', '0000-00-00', 'pedro123'),
(26, 'sajkdgahsd', 'ashdvghjyg@gmail.com', '0000-00-00', 'pedro123'),
(27, 'sajkdgahsd', 'ashdvghjyg@gmail.com', '0000-00-00', 'pedro123');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;
