-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 05-Nov-2019 às 18:52
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maisidosoteste2`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `atividadefisica`
--

CREATE TABLE `atividadefisica` (
  `idatividadeFisica` int(11) NOT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `atividade_atividadefisica` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `duracao_atividadefisica` time NOT NULL,
  `data_atividadefisica` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cartilha`
--

CREATE TABLE `cartilha` (
  `idcartilha` int(11) NOT NULL,
  `titulo_cartilha` text COLLATE latin1_general_ci NOT NULL,
  `fatores_cartilha` text COLLATE latin1_general_ci NOT NULL,
  `sintomas_cartilhas` text COLLATE latin1_general_ci NOT NULL,
  `prevencao_cartilha` text COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `consulta`
--

CREATE TABLE `consulta` (
  `idconsulta` int(11) NOT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `tipo_consulta` int(11) NOT NULL,
  `local_consulta` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `horario_consulta` time NOT NULL,
  `medico_consulta` varchar(100) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `doenca`
--

CREATE TABLE `doenca` (
  `iddoenca` int(11) NOT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `nome_doenca` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `tipo_doenca` int(11) NOT NULL,
  `sintomas_doenca` text COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `lembrete`
--

CREATE TABLE `lembrete` (
  `idlembrete` int(11) NOT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `titulo_lembrete` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `horario_lembrete` time NOT NULL,
  `data_lembrete` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `medicamento`
--

CREATE TABLE `medicamento` (
  `idmedicamento` int(11) NOT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `nome_medicamento` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `indicacao_medicamento` text COLLATE latin1_general_ci NOT NULL,
  `horario_medicamento` time NOT NULL,
  `dosagem_medicamento` text COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `restricaoalimentar`
--

CREATE TABLE `restricaoalimentar` (
  `idrestricaoAlimentar` int(11) NOT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `alimento_restricaoAlimentar` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `grupo_restricaoAlimentar` int(11) NOT NULL,
  `razao_restricaoAlimentar` text COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
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
  ADD PRIMARY KEY (`idatividadeFisica`),
  ADD KEY `atividadeFisica_FKIndex1` (`usuario_idusuario`),
  ADD KEY `IFK_Rel_04` (`usuario_idusuario`);

--
-- Indexes for table `cartilha`
--
ALTER TABLE `cartilha`
  ADD PRIMARY KEY (`idcartilha`);

--
-- Indexes for table `consulta`
--
ALTER TABLE `consulta`
  ADD PRIMARY KEY (`idconsulta`),
  ADD KEY `consulta_FKIndex1` (`usuario_idusuario`),
  ADD KEY `IFK_Rel_01` (`usuario_idusuario`);

--
-- Indexes for table `doenca`
--
ALTER TABLE `doenca`
  ADD PRIMARY KEY (`iddoenca`),
  ADD KEY `doenca_FKIndex1` (`usuario_idusuario`),
  ADD KEY `IFK_Rel_05` (`usuario_idusuario`);

--
-- Indexes for table `lembrete`
--
ALTER TABLE `lembrete`
  ADD PRIMARY KEY (`idlembrete`),
  ADD KEY `lembrete_FKIndex1` (`usuario_idusuario`),
  ADD KEY `IFK_Rel_03` (`usuario_idusuario`);

--
-- Indexes for table `medicamento`
--
ALTER TABLE `medicamento`
  ADD PRIMARY KEY (`idmedicamento`),
  ADD KEY `medicamento_FKIndex1` (`usuario_idusuario`),
  ADD KEY `IFK_Rel_04` (`usuario_idusuario`);

--
-- Indexes for table `restricaoalimentar`
--
ALTER TABLE `restricaoalimentar`
  ADD PRIMARY KEY (`idrestricaoAlimentar`),
  ADD KEY `restricaoAlimentar_FKIndex1` (`usuario_idusuario`),
  ADD KEY `IFK_Rel_02` (`usuario_idusuario`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `atividadefisica`
--
ALTER TABLE `atividadefisica`
  ADD CONSTRAINT `atividadefisica_ibfk_1` FOREIGN KEY (`usuario_idusuario`) REFERENCES `usuario` (`idusuario`);

--
-- Limitadores para a tabela `consulta`
--
ALTER TABLE `consulta`
  ADD CONSTRAINT `consulta_ibfk_1` FOREIGN KEY (`usuario_idusuario`) REFERENCES `usuario` (`idusuario`);

--
-- Limitadores para a tabela `doenca`
--
ALTER TABLE `doenca`
  ADD CONSTRAINT `doenca_ibfk_1` FOREIGN KEY (`usuario_idusuario`) REFERENCES `usuario` (`idusuario`);

--
-- Limitadores para a tabela `lembrete`
--
ALTER TABLE `lembrete`
  ADD CONSTRAINT `lembrete_ibfk_1` FOREIGN KEY (`usuario_idusuario`) REFERENCES `usuario` (`idusuario`);

--
-- Limitadores para a tabela `medicamento`
--
ALTER TABLE `medicamento`
  ADD CONSTRAINT `medicamento_ibfk_1` FOREIGN KEY (`usuario_idusuario`) REFERENCES `usuario` (`idusuario`);

--
-- Limitadores para a tabela `restricaoalimentar`
--
ALTER TABLE `restricaoalimentar`
  ADD CONSTRAINT `restricaoalimentar_ibfk_1` FOREIGN KEY (`usuario_idusuario`) REFERENCES `usuario` (`idusuario`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
