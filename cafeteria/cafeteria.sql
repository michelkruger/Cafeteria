-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 24-Jun-2019 às 15:05
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cafeteria`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbhistorico`
--

CREATE TABLE `tbhistorico` (
  `codigoHistorico` int(11) NOT NULL,
  `valorHistorico` int(11) NOT NULL,
  `horarioHistorico` int(11) NOT NULL,
  `dataHistorico` int(11) NOT NULL,
  `codigoProdutoHistorico` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbnomeproduto`
--

CREATE TABLE `tbnomeproduto` (
  `codigoNomeProduto` int(11) NOT NULL,
  `nomeProduto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbnomeproduto`
--

INSERT INTO `tbnomeproduto` (`codigoNomeProduto`, `nomeProduto`) VALUES
(5, 'Capuccino'),
(6, 'Americano');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbproduto`
--

CREATE TABLE `tbproduto` (
  `codigoProduto` int(11) NOT NULL,
  `descricaoProduto` varchar(150) NOT NULL,
  `valorProduto` int(11) NOT NULL,
  `codNomeProduto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbproduto`
--

INSERT INTO `tbproduto` (`codigoProduto`, `descricaoProduto`, `valorProduto`, `codNomeProduto`) VALUES
(5, 'totoso', 12, 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbtipo_usuario`
--

CREATE TABLE `tbtipo_usuario` (
  `idUsuario` int(11) NOT NULL,
  `tipoUsuario` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbtipo_usuario`
--

INSERT INTO `tbtipo_usuario` (`idUsuario`, `tipoUsuario`) VALUES
(1, 'Usuário'),
(2, 'Administrador');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbusuario`
--

CREATE TABLE `tbusuario` (
  `nomeUsuario` varchar(120) NOT NULL,
  `cpfUsuario` int(11) NOT NULL,
  `emailUsuario` varchar(150) NOT NULL,
  `idTipoUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbhistorico`
--
ALTER TABLE `tbhistorico`
  ADD PRIMARY KEY (`codigoHistorico`),
  ADD KEY `codigoProdutoHistorico` (`codigoProdutoHistorico`);

--
-- Indexes for table `tbnomeproduto`
--
ALTER TABLE `tbnomeproduto`
  ADD PRIMARY KEY (`codigoNomeProduto`);

--
-- Indexes for table `tbproduto`
--
ALTER TABLE `tbproduto`
  ADD PRIMARY KEY (`codigoProduto`),
  ADD KEY `codNomeProduto` (`codNomeProduto`);

--
-- Indexes for table `tbtipo_usuario`
--
ALTER TABLE `tbtipo_usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- Indexes for table `tbusuario`
--
ALTER TABLE `tbusuario`
  ADD PRIMARY KEY (`cpfUsuario`),
  ADD KEY `idTipoUsuario` (`idTipoUsuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbhistorico`
--
ALTER TABLE `tbhistorico`
  MODIFY `codigoHistorico` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbnomeproduto`
--
ALTER TABLE `tbnomeproduto`
  MODIFY `codigoNomeProduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbproduto`
--
ALTER TABLE `tbproduto`
  MODIFY `codigoProduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbtipo_usuario`
--
ALTER TABLE `tbtipo_usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `tbhistorico`
--
ALTER TABLE `tbhistorico`
  ADD CONSTRAINT `tbhistorico_ibfk_1` FOREIGN KEY (`codigoProdutoHistorico`) REFERENCES `tbproduto` (`codigoProduto`);

--
-- Limitadores para a tabela `tbproduto`
--
ALTER TABLE `tbproduto`
  ADD CONSTRAINT `tbproduto_ibfk_2` FOREIGN KEY (`codNomeProduto`) REFERENCES `tbnomeproduto` (`codigoNomeProduto`);

--
-- Limitadores para a tabela `tbusuario`
--
ALTER TABLE `tbusuario`
  ADD CONSTRAINT `tbusuario_ibfk_1` FOREIGN KEY (`idTipoUsuario`) REFERENCES `tbtipo_usuario` (`idUsuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
