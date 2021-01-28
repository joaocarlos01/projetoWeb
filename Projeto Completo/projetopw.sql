-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28-Jan-2021 às 18:14
-- Versão do servidor: 10.4.16-MariaDB
-- versão do PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projetopw`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentario`
--

CREATE TABLE `comentario` (
  `email` varchar(50) NOT NULL,
  `texto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `comentario`
--

INSERT INTO `comentario` (`email`, `texto`) VALUES
('ana@gmail.com', 'Teste');

-- --------------------------------------------------------

--
-- Estrutura da tabela `objetivos`
--

CREATE TABLE `objetivos` (
  `nome` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `objetivos`
--

INSERT INTO `objetivos` (`nome`, `id`) VALUES
('Encontre uma banana.', 1),
('Encontre um cão.', 2),
('Encontre uma mesa.', 3),
('Encontre um carro amarelo.', 4),
('Encontre uma bicicleta.', 5),
('Encontre um gato.', 6),
('Encontre uma moto.', 7),
('Encontre uma casa.', 8),
('Encontre uma cenoura.', 9),
('Encontre uma bola.', 10),
('Encontre uma árvore.', 11),
('Encontre um cone.', 12),
('Encontre um rio.', 13),
('Encontre um copo.', 14),
('Encontre uma garrafa.', 15),
('Encontre um pneu.', 16),
('Encontre um computador.', 17),
('Encontre uma vaca.', 18),
('Encontre um girassol.', 19),
('Encontre um sinal.', 20);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `username` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `pontos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`username`, `email`, `password`, `pontos`) VALUES
('Ana', 'ana@gmail.com', 'password', 11),
('Beatriz', 'beatriz@gmail.com', 'password', 2),
('Francisco', 'francisco@gmail.com', 'password', 3),
('João', 'joão@gmail.com', 'password', 15),
('José', 'jose@gmail.com', 'password', 8),
('Leonor', 'leonor@gmail.com', 'password', 13),
('Manuel', 'manuel@gmail.com', 'password', 10),
('Miguel', 'miguel@gmail.com', 'password', 5),
('Nuno', 'nuno@gmail.com', 'password', 12),
('Ricardo', 'ricardo@gmail.com', 'password', 9);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users_objetivos`
--

CREATE TABLE `users_objetivos` (
  `email` varchar(50) NOT NULL,
  `id` int(11) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `users_objetivos`
--

INSERT INTO `users_objetivos` (`email`, `id`, `estado`) VALUES
('ana@gmail.com', 8, 0),
('joão@gmail.com', 3, 0),
('joão@gmail.com', 5, 0),
('joão@gmail.com', 14, 0),
('joão@gmail.com', 12, 0),
('joão@gmail.com', 2, 0),
('joão@gmail.com', 16, 0),
('joão@gmail.com', 19, 0),
('joão@gmail.com', 10, 0),
('ana@gmail.com', 16, 0),
('francisco@gmail.com', 13, 0),
('joão@gmail.com', 3, 0),
('joão@gmail.com', 5, 0),
('joão@gmail.com', 14, 0),
('joão@gmail.com', 12, 0),
('joão@gmail.com', 2, 0),
('joão@gmail.com', 16, 0),
('joão@gmail.com', 19, 0),
('joão@gmail.com', 10, 0),
('ana@gmail.com', 20, 0),
('francisco@gmail.com', 13, 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`email`);

--
-- Índices para tabela `objetivos`
--
ALTER TABLE `objetivos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);

--
-- Índices para tabela `users_objetivos`
--
ALTER TABLE `users_objetivos`
  ADD KEY `FK` (`email`),
  ADD KEY `FK2` (`id`);

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `users_objetivos`
--
ALTER TABLE `users_objetivos`
  ADD CONSTRAINT `FK` FOREIGN KEY (`email`) REFERENCES `users` (`email`),
  ADD CONSTRAINT `FK2` FOREIGN KEY (`id`) REFERENCES `objetivos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
