-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 17-Set-2019 às 19:30
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maisidoso`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `atividadefisica`
--

CREATE TABLE `atividadefisica` (
  `id_atividadeFisica` int(11) NOT NULL,
  `atividade_atividadeFisica` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `duracao_atividadeFisica` time NOT NULL,
  `data_atividadeFisica` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cartilha`
--

CREATE TABLE `cartilha` (
  `id_cartilha` int(11) NOT NULL,
  `titulo_cartilha` text COLLATE latin1_general_ci NOT NULL,
  `descricao_cartilha` text COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `consulta`
--

CREATE TABLE `consulta` (
  `id_consulta` int(11) NOT NULL,
  `tipo_consulta` int(11) NOT NULL,
  `local_consulta` varchar(1000) COLLATE latin1_general_ci NOT NULL,
  `horario_consulta` time NOT NULL,
  `doutor_consulta` varchar(100) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `doenca`
--

CREATE TABLE `doenca` (
  `id_doenca` int(11) NOT NULL,
  `tipo_doenca` int(11) NOT NULL,
  `sintomas_doenca` text COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `lembrete`
--

CREATE TABLE `lembrete` (
  `id_lembrete` int(11) NOT NULL,
  `titulo_lembrete` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `horario_lembrete` time NOT NULL,
  `data_lembrete` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `medicamento`
--

CREATE TABLE `medicamento` (
  `id_medicamento` int(11) NOT NULL,
  `nome_medicamento` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `indicacao_medicamento` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `horario_medicamento` time NOT NULL,
  `dosagem_medicamento` varchar(100) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `restricaoalimentar`
--

CREATE TABLE `restricaoalimentar` (
  `id_restricaoAlimentar` int(11) NOT NULL,
  `alimento_restricaoAlimentar` int(11) NOT NULL,
  `grupo_restricaoAlimentar` int(11) NOT NULL,
  `razao_restricaoAlimentar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nome_usuario` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `sobrenome_usuario` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `genero_usuario` int(11) NOT NULL,
  `dataNascimento_usuario` date NOT NULL,
  `altura_usuario` double NOT NULL,
  `peso_usuario` double NOT NULL,
  `tipoSanguineo_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `atividadefisica`
--
ALTER TABLE `atividadefisica`
  ADD PRIMARY KEY (`id_atividadeFisica`);

--
-- Indexes for table `cartilha`
--
ALTER TABLE `cartilha`
  ADD PRIMARY KEY (`id_cartilha`);

--
-- Indexes for table `consulta`
--
ALTER TABLE `consulta`
  ADD PRIMARY KEY (`id_consulta`);

--
-- Indexes for table `doenca`
--
ALTER TABLE `doenca`
  ADD PRIMARY KEY (`id_doenca`);

--
-- Indexes for table `lembrete`
--
ALTER TABLE `lembrete`
  ADD PRIMARY KEY (`id_lembrete`);

--
-- Indexes for table `medicamento`
--
ALTER TABLE `medicamento`
  ADD PRIMARY KEY (`id_medicamento`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `atividadefisica`
--
ALTER TABLE `atividadefisica`
  MODIFY `id_atividadeFisica` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cartilha`
--
ALTER TABLE `cartilha`
  MODIFY `id_cartilha` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `consulta`
--
ALTER TABLE `consulta`
  MODIFY `id_consulta` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `doenca`
--
ALTER TABLE `doenca`
  MODIFY `id_doenca` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lembrete`
--
ALTER TABLE `lembrete`
  MODIFY `id_lembrete` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `medicamento`
--
ALTER TABLE `medicamento`
  MODIFY `id_medicamento` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
