-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 09-Nov-2019 às 16:57
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ciranda`
--
CREATE DATABASE IF NOT EXISTS `ciranda` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `ciranda`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `categoria_id` int(11) NOT NULL,
  `categoria_nome` varchar(40) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `intituicoes`
--

CREATE TABLE `intituicoes` (
  `intituicoes_id` int(11) NOT NULL,
  `intituicoes_nome` varchar(100) COLLATE utf8_bin NOT NULL,
  `intituicoes_endereco` varchar(100) COLLATE utf8_bin NOT NULL,
  `intituicoes_bairro` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `intituicoes_respnsavel` varchar(100) COLLATE utf8_bin NOT NULL,
  `intituicoes_num_contato` varchar(15) COLLATE utf8_bin NOT NULL,
  `rede_rede_id` int(11) NOT NULL,
  `categoria_categoria_id` int(11) NOT NULL,
  `status_status_id` int(11) NOT NULL DEFAULT '2',
  `user_user_id` int(11) NOT NULL,
  `intituicoes_geolocalizacao` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `intituicoes_geolocalizacao_longetude` varchar(100) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `rede`
--

CREATE TABLE `rede` (
  `rede_id` int(11) NOT NULL,
  `rede_nome` varchar(40) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `setor`
--

CREATE TABLE `setor` (
  `setor_id` int(11) NOT NULL,
  `setor_nome` varchar(40) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `setor`
--

INSERT INTO `setor` (`setor_id`, `setor_nome`) VALUES
(1, 'teste');

-- --------------------------------------------------------

--
-- Estrutura da tabela `status`
--

CREATE TABLE `status` (
  `status_id` int(11) NOT NULL,
  `status_nome` varchar(40) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `status`
--

INSERT INTO `status` (`status_id`, `status_nome`) VALUES
(1, 'Inativo'),
(2, 'Ativo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) COLLATE utf8_bin NOT NULL,
  `user_email` varchar(100) COLLATE utf8_bin NOT NULL,
  `user_senha` varchar(65) COLLATE utf8_bin NOT NULL,
  `user_cpf` varchar(11) COLLATE utf8_bin NOT NULL,
  `user_contato` varchar(11) COLLATE utf8_bin NOT NULL,
  `user_num_inscricao` varchar(100) COLLATE utf8_bin NOT NULL,
  `user_nivel` varchar(1) COLLATE utf8_bin DEFAULT '2' COMMENT '0 - Admin\n1- Visualiza e altera status\n2 - Visualiza',
  `setor_setor_id` int(11) NOT NULL,
  `token` varchar(65) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `user_senha`, `user_cpf`, `user_contato`, `user_num_inscricao`, `user_nivel`, `setor_setor_id`, `token`) VALUES
(2, 'teste name', 'teste@teste.com', 'e10adc3949ba59abbe56e057f20f883e', '12345678911', '71999999999', '999999999', '2', 1, '01dfb84b63e292109f75afa609374fde');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`categoria_id`);

--
-- Indexes for table `intituicoes`
--
ALTER TABLE `intituicoes`
  ADD PRIMARY KEY (`intituicoes_id`,`rede_rede_id`,`categoria_categoria_id`,`status_status_id`,`user_user_id`),
  ADD KEY `fk_intituicoes_rede1_idx` (`rede_rede_id`),
  ADD KEY `fk_intituicoes_categoria1_idx` (`categoria_categoria_id`),
  ADD KEY `fk_intituicoes_status1_idx` (`status_status_id`),
  ADD KEY `fk_intituicoes_user1_idx` (`user_user_id`);

--
-- Indexes for table `rede`
--
ALTER TABLE `rede`
  ADD PRIMARY KEY (`rede_id`);

--
-- Indexes for table `setor`
--
ALTER TABLE `setor`
  ADD PRIMARY KEY (`setor_id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `fk_user_setor_idx` (`setor_setor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `categoria_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `intituicoes`
--
ALTER TABLE `intituicoes`
  MODIFY `intituicoes_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rede`
--
ALTER TABLE `rede`
  MODIFY `rede_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `setor`
--
ALTER TABLE `setor`
  MODIFY `setor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `intituicoes`
--
ALTER TABLE `intituicoes`
  ADD CONSTRAINT `fk_intituicoes_categoria1` FOREIGN KEY (`categoria_categoria_id`) REFERENCES `categoria` (`categoria_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_intituicoes_rede1` FOREIGN KEY (`rede_rede_id`) REFERENCES `rede` (`rede_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_intituicoes_status1` FOREIGN KEY (`status_status_id`) REFERENCES `status` (`status_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_intituicoes_user1` FOREIGN KEY (`user_user_id`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_user_setor` FOREIGN KEY (`setor_setor_id`) REFERENCES `setor` (`setor_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
