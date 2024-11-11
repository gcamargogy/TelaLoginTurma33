-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11/11/2024 às 21:24
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
-- Banco de dados: `cadastrousuarioturma33`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefone` char(15) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nome`, `email`, `telefone`, `senha`) VALUES
(1, 'Usuario1', 'usuario1@hotmail.com', '02495913012', '202cb962ac59075b964b07152d234b70'),
(2, 'Usuario2', 'usuario2@gmail.com', '0987654321', '123'),
(3, 'Usuario3', 'usuario3@outlook.com', '2345678901', '123'),
(4, 'Usuario4', 'usuario4@hotmail.com', '3456789012', '123'),
(5, 'Usuario5', 'usuario5@gmail.com', '4567890123', '123'),
(6, 'Usuario6', 'usuario6@outlook.com', '5678901234', '123'),
(7, 'Usuario7', 'usuario7@hotmail.com', '6789012345', '123'),
(8, 'Usuario8', 'usuario8@gmail.com', '7890123456', '123'),
(9, 'Usuario9', 'usuario9@outlook.com', '8901234567', '123'),
(10, 'Usuario10', 'usuario10@hotmail.com', '9012345678', '123'),
(11, 'Usuario11', 'usuario11@gmail.com', '1122334455', '123'),
(12, 'Usuario12', 'usuario12@outlook.com', '2233445566', '123'),
(13, 'Usuario13', 'usuario13@hotmail.com', '3344556677', '123'),
(14, 'Usuario14', 'usuario14@gmail.com', '4455667788', '123'),
(15, 'Usuario15', 'usuario15@outlook.com', '5566778899', '123'),
(16, 'Usuario16', 'usuario16@hotmail.com', '6677889900', '123'),
(17, 'Usuario17', 'usuario17@gmail.com', '7788990011', '123'),
(18, 'Usuario18', 'usuario18@outlook.com', '8899001122', '123'),
(19, 'Usuario19', 'usuario19@hotmail.com', '9900112233', '123'),
(20, 'Usuario20', 'usuario20@gmail.com', '1011122334', '123'),
(21, 'Usuario21', 'usuario21@outlook.com', '1122334456', '123'),
(22, 'Usuario22', 'usuario22@hotmail.com', '2233445567', '123'),
(23, 'Usuario23', 'usuario23@gmail.com', '3344556678', '123'),
(24, 'Usuario24', 'usuario24@outlook.com', '4455667789', '123'),
(25, 'Usuario25', 'usuario25@hotmail.com', '5566778890', '123'),
(26, 'Usuario26', 'usuario26@gmail.com', '6677889901', '123'),
(27, 'Usuario27', 'usuario27@outlook.com', '7788990012', '123'),
(28, 'Usuario28', 'usuario28@hotmail.com', '8899001123', '123'),
(29, 'Usuario29', 'usuario29@gmail.com', '9900112234', '123'),
(30, 'Usuario30', 'usuario30@outlook.com', '1011122335', '123'),
(31, 'Usuario31', 'usuario31@hotmail.com', '1122334457', '123'),
(32, 'Usuario32', 'usuario32@gmail.com', '2233445568', '123'),
(33, 'Usuario33', 'usuario33@outlook.com', '3344556679', '123'),
(34, 'Usuario34', 'usuario34@hotmail.com', '4455667790', '123'),
(35, 'Usuario35', 'usuario35@gmail.com', '5566778891', '123'),
(36, 'Usuario36', 'usuario36@outlook.com', '6677889902', '123'),
(37, 'Usuario37', 'usuario37@hotmail.com', '7788990013', '123'),
(38, 'Usuario38', 'usuario38@gmail.com', '8899001124', '123'),
(39, 'Usuario39', 'usuario39@outlook.com', '9900112235', '123'),
(40, 'Usuario40', 'usuario40@hotmail.com', '1011122336', '123'),
(41, 'Usuario41', 'usuario41@gmail.com', '1122334458', '123'),
(42, 'Usuario42', 'usuario42@outlook.com', '2233445569', '123'),
(44, 'Usuario44', 'usuario44@gmail.com', '4455667791', '123'),
(45, 'Usuario45', 'usuario45@outlook.com', '5566778892', '123'),
(46, 'Usuario46', 'usuario46@hotmail.com', '6677889903', '123'),
(47, 'Usuario47', 'usuario47@gmail.com', '7788990014', '123'),
(48, 'Usuario48', 'usuario48@outlook.com', '8899001125', '123'),
(49, 'Usuario49', 'usuario49@hotmail.com', '9900112236', '123'),
(50, 'Usuario50', 'usuario50@gmail.com', '1011122337', '123');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
