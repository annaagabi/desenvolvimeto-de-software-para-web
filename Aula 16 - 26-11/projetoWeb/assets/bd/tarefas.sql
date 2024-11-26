-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19-Nov-2024 às 13:21
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `tarefas`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tarefas`
--

CREATE TABLE `tarefas` (
  `idTarefa` smallint(6) NOT NULL,
  `tarefa` varchar(100) NOT NULL,
  `inicio` date NOT NULL,
  `termino` date NOT NULL,
  `fkUsuario` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tarefas`
--

INSERT INTO `tarefas` (`idTarefa`, `tarefa`, `inicio`, `termino`, `fkUsuario`) VALUES
(1, 'aaaa', '2024-11-06', '2024-11-29', 5),
(2, 'Teste', '2024-11-13', '2024-11-29', 6),
(3, 'testando', '2024-11-21', '2024-11-21', 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` smallint(6) NOT NULL,
  `nome` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `nome`, `email`, `senha`) VALUES
(1, 'Anna', 'anna@gmail.com', '1234'),
(2, 'Teste', 'teste@gmail.com', 'asasas'),
(3, 'Testando', 'testando@gmail.com', '$2y$10$.D4wQZqiAzCpWg6EaKdGieUjw'),
(4, 'novo', 'novo@gmail.com', '$2y$10$vfI8/JpK1/tZOZ6X04/8fOs7V'),
(5, 'teste2', 'teste2@gmail.com', '$2y$10$pQT/L/vlS4JoL4XnkmlS0urgt3xVMotMEnMENfrpEOp6lV0DDtJdG'),
(6, 'help', 'help@gmail.com', '$2y$10$Dy/vX4NJCFRIZkNDVj6sne4JgkOJ3Xu47Sj6kSuAaYevecoKK8jQu');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tarefas`
--
ALTER TABLE `tarefas`
  ADD PRIMARY KEY (`idTarefa`),
  ADD KEY `fkUsuario` (`fkUsuario`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tarefas`
--
ALTER TABLE `tarefas`
  MODIFY `idTarefa` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tarefas`
--
ALTER TABLE `tarefas`
  ADD CONSTRAINT `fkUsuario` FOREIGN KEY (`fkUsuario`) REFERENCES `usuarios` (`idUsuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
