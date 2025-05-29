-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 15/05/2025 às 22:10
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `escola`
--
CREATE DATABASE IF NOT EXISTS `escola` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `escola`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`id`, `username`, `password`) VALUES
(0, 'Batman', 'robin'),
(0, 'Diogo', 'jacare'),
(0, 'Sonic', 'thefastestthingalive'),
(0, 'Kasane Teto', 'baguete'),
(0, 'Cuphead', 'dontdealwiththedevil'),
(0, 'Tattletail', 'nomoremama'),
(0, 'Gray', 'fakeshot'),
(0, 'Leo Watch', 'thegodeyes'),
(0, 'Guilherme', '123'),
(0, 'Mario', 'mamamia'),
(0, 'Pit', 'sadpast'),
(0, 'Isaac', 'physichand'),
(0, 'Capitã Marvel', 'binarypower'),
(0, 'Gamora', 'thanosdaughter'),
(0, 'Nebulosa', 'cybernetic'),
(0, 'Mantis', 'empatica'),
(0, 'Jessica Jones', 'alias'),
(0, 'Sue Storm', 'invisibilidade'),
(0, 'Rogue', 'forcaabsorvida'),
(0, 'Zatanna', 'magicwords'),
(0, 'Ravena', 'azarath'),
(0, 'Starfire', 'tamaran'),
(0, 'She-Hulk', 'verdejustica'),
(0, 'Batgirl', 'oraclegotham'),
(0, 'Arlequina', 'pudim'),
(0, 'Caçadora de Marte', 'marsforever'),
(0, 'Power Girl', 'krypton2'),
(0, 'Miss Marvel', 'embiggen'),
(0, 'Enchantress', 'seidrmagic'),
(0, 'Trinity', 'matrixcode'),
(0, 'Bomba Relógio', 'ticktock'),
(0, 'Elektra', 'ninjasai'),
(0, 'Superman', 'krypton'),
(0, 'WonderWoman', 'themyscira'),
(0, 'Flash', 'speedforce'),
(0, 'GreenLantern', 'ring123'),
(0, 'Aquaman', 'atlantis'),
(0, 'Cyborg', 'boomtube'),
(0, 'Robin', 'batcave'),
(0, 'Joker', 'hahaha'),
(0, 'HarleyQuinn', 'puddin'),
(0, 'LexLuthor', 'kryptonite');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
