-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 11-Jun-2017 às 20:22
-- Versão do servidor: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sisged`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

CREATE TABLE `funcionarios` (
  `matricula` char(6) NOT NULL,
  `nome_fun` varchar(10) NOT NULL,
  `sobrenome_fun` varchar(80) NOT NULL,
  `dta_nasc_FUN` char(10) NOT NULL,
  `rg` varchar(10) NOT NULL,
  `cpf` char(11) NOT NULL,
  `dta_admissão` char(10) NOT NULL,
  `função` varchar(20) NOT NULL,
  `ch_trab` char(3) NOT NULL,
  `form_academica` varchar(30) DEFAULT NULL,
  `fun_tipo` varchar(10) DEFAULT NULL,
  `telefone1` varchar(11) NOT NULL,
  `telefone2` varchar(11) NOT NULL,
  `telefone3` varchar(11) DEFAULT NULL,
  `rua` varchar(20) DEFAULT NULL,
  `numero` varchar(4) DEFAULT NULL,
  `cep` varchar(8) DEFAULT NULL,
  `bairro` varchar(20) DEFAULT NULL,
  `cidade` varchar(30) DEFAULT NULL,
  `estado` varchar(2) DEFAULT NULL,
  `id_sec` char(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `funcionarios`
--

INSERT INTO `funcionarios` (`matricula`, `nome_fun`, `sobrenome_fun`, `dta_nasc_FUN`, `rg`, `cpf`, `dta_admissão`, `função`, `ch_trab`, `form_academica`, `fun_tipo`, `telefone1`, `telefone2`, `telefone3`, `rua`, `numero`, `cep`, `bairro`, `cidade`, `estado`, `id_sec`) VALUES
('024098', 'João', 'Carlos Dias da Silva', '01/01/1980', '7634852', '02478840412', '14/05/2014', 'Secretario Executivo', '240', 'Graduado em Administração', 'Fixo', '11222222222', '11977777777', '11211111111', 'Rua Prof. ArlindoTav', '0124', '04555555', 'Barra Funda', 'SP', 'Sã', '890098'),
('091115', 'Valter', 'Henrique de Sousa', '11/02/1970', '8888888888', '09155582477', '04/02/2010', 'Professor II', '170', 'Lencen. História', 'Fixo', '11214578889', '11984514361', '1123451278', 'Av. Prof. Abelardo', '4582', '04784596', 'Jardim Fortaleza', 'SP', 'Gu', '890098'),
('555099', 'Ubirajara', 'Emanuel Tavares de Melo', '10/10/1965', '1425367485', '55500847409', '11/06/2016', 'Advogado Trabalhista', '80', 'Dr. Direito Trabalhista', 'Contratado', '1121274585', '11971430888', '1121274585', 'Av. Sacomã', '9606', '07145856', 'Morumbi', 'SP', 'Sã', '890099'),
('986115', 'Luciano', 'Oliveira Silva Dias', '12/05/1991', '454823', '98646515381', '11/04/2017', 'Recepcionista', '240', 'Técnico em Secretariado', 'Fixo', '11232548766', '11978840055', '', 'Rua Ademar Dias', '0045', '04890678', 'Santa Gertrudes', 'SP', 'Os', '890115');

-- --------------------------------------------------------

--
-- Estrutura da tabela `secretaria`
--

CREATE TABLE `secretaria` (
  `id_sec` char(6) NOT NULL,
  `nome_sec` varchar(25) NOT NULL,
  `local_sec_sediada` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `secretaria`
--

INSERT INTO `secretaria` (`id_sec`, `nome_sec`, `local_sec_sediada`) VALUES
('890098', 'Secretaria de Educação', 'Prefeitura 4º Andar'),
('890099', 'SEC ASSUNTOS JURÍDICOS', '10º andar, sala 1014'),
('890115', 'SEC Limpeza Urbana', 'Rod. Raposo Tavares ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`matricula`),
  ADD KEY `id_sec` (`id_sec`);

--
-- Indexes for table `secretaria`
--
ALTER TABLE `secretaria`
  ADD PRIMARY KEY (`id_sec`);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD CONSTRAINT `funcionarios_ibfk_1` FOREIGN KEY (`id_sec`) REFERENCES `secretaria` (`id_sec`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
