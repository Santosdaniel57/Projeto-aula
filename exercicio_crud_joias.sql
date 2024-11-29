-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29/11/2024 às 22:04
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `exercicio_crud_joias`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cadastro_joias`
--

CREATE TABLE `cadastro_joias` (
  `id` int(11) NOT NULL,
  `nome_joia` varchar(255) NOT NULL,
  `descricao_joia` text DEFAULT NULL,
  `preco_joia` decimal(10,2) NOT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cadastro_joias`
--

INSERT INTO `cadastro_joias` (`id`, `nome_joia`, `descricao_joia`, `preco_joia`, `data_cadastro`) VALUES
(3, 'cordão ouro  vivara', 'cordão 15 k, banhado e feito a mão ', 1600.00, '2024-11-29 20:38:57'),
(4, 'Anel prata', 'Anel 20 k, francês ', 1500.00, '2024-11-29 20:39:22'),
(5, 'Corrente Safira', 'Corrente  de pulso, strass de safira ', 32000.00, '2024-11-29 20:40:05'),
(6, 'Relógio pedra turmalina Paraíba', 'relógio feminino, com strass de pedras turmalinas polidas ', 25000.00, '2024-11-29 20:59:54');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cadastro_joias`
--
ALTER TABLE `cadastro_joias`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro_joias`
--
ALTER TABLE `cadastro_joias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
