-- phpMyAdmin SQL Dump
-- version 4.7.6
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 21-Dez-2017 às 01:57
-- Versão do servidor: 10.1.26-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cmo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `convenios`
--

CREATE TABLE `convenios` (
  `idconvenio` int(11) NOT NULL,
  `nm_convenio` varchar(45) DEFAULT NULL,
  `dt_inicio` date DEFAULT NULL,
  `ds_regioes` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `convenios`
--

INSERT INTO `convenios` (`idconvenio`, `nm_convenio`, `dt_inicio`, `ds_regioes`) VALUES
(1, 'Particular', '2017-12-20', 'Todas as regiões'),
(2, 'UNIMED ', '2017-12-20', 'Nordeste');

-- --------------------------------------------------------

--
-- Estrutura da tabela `especialidades`
--

CREATE TABLE `especialidades` (
  `idespecialidades` int(11) NOT NULL,
  `ds_especialidades` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `especialidades`
--

INSERT INTO `especialidades` (`idespecialidades`, `ds_especialidades`) VALUES
(1, 'Genecologia'),
(2, 'Psicologia'),
(3, 'Odontologia');

-- --------------------------------------------------------

--
-- Estrutura da tabela `medicos`
--

CREATE TABLE `medicos` (
  `idmedicos` int(11) NOT NULL,
  `nm_medico` varchar(45) NOT NULL,
  `cpf_medico` int(11) NOT NULL,
  `rg_medico` int(11) NOT NULL,
  `nr_crm` int(11) NOT NULL,
  `nm_usuario` varchar(45) NOT NULL,
  `senha` varchar(8) NOT NULL,
  `num_acesso` int(11) NOT NULL,
  `laudo_idlaudo` int(11) NOT NULL,
  `cd_especialidade` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `medicos`
--

INSERT INTO `medicos` (`idmedicos`, `nm_medico`, `cpf_medico`, `rg_medico`, `nr_crm`, `nm_usuario`, `senha`, `num_acesso`, `laudo_idlaudo`, `cd_especialidade`) VALUES
(1, 'Fátima Piovesan', 0, 0, 0, 'FpBahia', '123456', 0, 0, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pacientes`
--

CREATE TABLE `pacientes` (
  `idpacientes` int(11) NOT NULL,
  `nm_paciente` varchar(45) DEFAULT NULL,
  `dt_Nascimento` date NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `cpf` varchar(11) DEFAULT NULL,
  `rg` varchar(11) DEFAULT NULL,
  `profissao` varchar(40) DEFAULT NULL,
  `nm_pai` varchar(45) NOT NULL,
  `nm_mae` varchar(45) NOT NULL,
  `nr_carteira` bigint(25) DEFAULT NULL,
  `end_rua` varchar(45) NOT NULL,
  `end_bairro` varchar(45) NOT NULL,
  `end_cidade` varchar(45) NOT NULL,
  `end_cep` int(8) NOT NULL,
  `end_uf` varchar(2) NOT NULL,
  `nr_telefone` varchar(12) NOT NULL,
  `nr_celular` varchar(13) DEFAULT NULL,
  `ct_email` varchar(45) DEFAULT NULL,
  `senha` varchar(8) DEFAULT NULL,
  `usuario` varchar(15) DEFAULT NULL,
  `cd_convenio` int(11) DEFAULT NULL,
  `cd_laudo` int(11) DEFAULT NULL,
  `cd_prontuario` int(11) DEFAULT NULL,
  `idade` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pacientes`
--

INSERT INTO `pacientes` (`idpacientes`, `nm_paciente`, `dt_Nascimento`, `sexo`, `cpf`, `rg`, `profissao`, `nm_pai`, `nm_mae`, `nr_carteira`, `end_rua`, `end_bairro`, `end_cidade`, `end_cep`, `end_uf`, `nr_telefone`, `nr_celular`, `ct_email`, `senha`, `usuario`, `cd_convenio`, `cd_laudo`, `cd_prontuario`, `idade`) VALUES
(1, 'Valdir Nascimento dos Santos', '1975-05-23', 'Masculino', '64944590563', '0722993390', 'Analista', 'José dos santos', 'Julieta do nascimento dos Santos', 5778950329, 'Artur Salustiano, 114', 'Centro', 'São Sebastião do Passé', 43850000, 'BA', '7136551920', '7199547845', 'VALDIRDPG@GMAIL.COM', '123456', 'Teste', 1, 0, 1, 1),
(2, 'Maria de Almeida', '2017-12-20', 'Feminino', '1455555', '2554666', 'Enfermeira', 'Floriano almeida', 'Elza Nascimento', 123, 'Artur Salustiano, 114', 'Centro', 'São Sebastião do Passé', 43850000, 'BA', '7136551920', '7199547845', 'VALDIRDPG@GMAIL.COM', '123456', 'maria', 1, 0, 1, 1),
(3, 'Patricia de almeida dos Santos', '2004-11-18', 'Feminino', '05623333333', '457888888', 'Estudante', 'Valdir Nascimento', 'Maria de Almeida', 9745778950329009, 'Artur Salustiano, 114', 'Centro', 'São Sebastião do Passé', 43850000, 'BA', '7136551920', '7199547845', 'ms.dora@hotmail.com', '123456', 'patricia', 2, 0, 3, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `convenios`
--
ALTER TABLE `convenios`
  ADD PRIMARY KEY (`idconvenio`);

--
-- Indexes for table `especialidades`
--
ALTER TABLE `especialidades`
  ADD PRIMARY KEY (`idespecialidades`);

--
-- Indexes for table `medicos`
--
ALTER TABLE `medicos`
  ADD PRIMARY KEY (`idmedicos`);

--
-- Indexes for table `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`idpacientes`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `convenios`
--
ALTER TABLE `convenios`
  MODIFY `idconvenio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `especialidades`
--
ALTER TABLE `especialidades`
  MODIFY `idespecialidades` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `medicos`
--
ALTER TABLE `medicos`
  MODIFY `idmedicos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `idpacientes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
