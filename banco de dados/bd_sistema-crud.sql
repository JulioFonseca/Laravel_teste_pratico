-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15-Mar-2021 às 19:06
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_sistema-crud`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpf` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` date NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `cpf`, `telefone`, `senha`, `data`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'Samira Lemos', '689.272.676-89', '(85) 2688-9104', 'asdfmlol', '2003-05-14', NULL, '2021-03-15 02:49:02', '2021-03-15 19:01:26'),
(7, 'Maria Julia', '135.691.973-10', '(85) 98373-5327', 'hg6dw8j888', '2001-01-17', NULL, '2021-03-15 17:56:08', '2021-03-15 17:56:08'),
(8, 'Pedro henrique', '988.262.703-09', '(88) 99837-8675', 'GJ67vv8', '1989-09-27', NULL, '2021-03-15 18:01:41', '2021-03-15 18:01:41'),
(9, 'Heloise Clarice da Paz', '817.242.676-39', '(95) 99381-8809', '7gh8h7uhg7', '1997-07-17', NULL, '2021-03-15 18:27:26', '2021-03-15 18:27:26'),
(10, 'Filipe Augusto', '416.641.023-70', '(85) 99415-8306', 'SFujn78Ty', '2004-07-13', NULL, '2021-03-15 18:33:05', '2021-03-15 18:33:05'),
(11, 'Danilo Nelson', '865.276.843-98', '(88) 99938-2646', 'SHijN78', '2001-06-12', NULL, '2021-03-15 20:04:08', '2021-03-15 20:05:07'),
(12, 'Davi Vitor', '033.368.513-00', '(85) 98108-3350', 'H78b8vgn', '1997-05-07', NULL, '2021-03-15 20:56:26', '2021-03-15 20:56:26');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuarios_cpf_unique` (`cpf`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
