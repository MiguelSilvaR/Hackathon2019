-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2019 at 09:59 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `netboxing`
--

-- --------------------------------------------------------

--
-- Table structure for table `atributos`
--

CREATE TABLE `atributos` (
  `IDATRIBUTO` varchar(20) NOT NULL,
  `NOMBREATRIBUTO` varchar(100) DEFAULT NULL,
  `NOMBREAREA` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `atributos`
--

INSERT INTO `atributos` (`IDATRIBUTO`, `NOMBREATRIBUTO`, `NOMBREAREA`) VALUES
('AL01', 'Servicios de consultoría y asesoría jurídica', 'Asesoría legal'),
('AL02', 'Negociación y redacción de contactos', 'Asesoría legal'),
('AL03', 'Defensa de la empresa en problemas legales', 'Asesoría legal'),
('AL04', 'Asesoramiento en materia de derecho empresarial', 'Asesoría legal'),
('CONT01', 'Depuramiento de registros contables', 'Contabilidad'),
('CONT02', 'Elaboración de presupuestos', 'Contabilidad'),
('CONT03', 'Emisión de políticas contables', 'Contabilidad'),
('CONT04', 'Fiscalización de activos y pasivos', 'Contabilidad'),
('MERCA01', 'Diseño del producto y desarrollo', 'Mercadotecnia'),
('MERCA02', 'Envasado y etiquetado', 'Mercadotecnia'),
('MERCA03', 'Consultoría de marca', 'Mercadotecnia'),
('MERCA04', 'Promoción del producto', 'Mercadotecnia'),
('RH01', 'Consultoría para manejo de personal', 'Recursos Humanos'),
('RH02', 'Reclutamiento', 'Recursos Humanos'),
('RH03', 'Planes de carrera y promoción profesional', 'Recursos Humanos'),
('RH04', 'Clima y satisfacción laboral', 'Recursos Humanos'),
('SEG01', 'Servicios de seguridad', 'Seguridad'),
('SEG02', 'Capacitación de personal', 'Seguridad'),
('SEG03', 'Brigadistas', 'Seguridad'),
('SEG04', 'Protocolos de emergencia', 'Seguridad'),
('TEC01', 'Diseño web', 'Tecnología'),
('TEC02', 'Diseño de redes', 'Tecnología'),
('TEC03', 'Manejo de bases de datos', 'Tecnología'),
('TEC04', 'Desarrollo de aplicaciones móviles', 'Tecnología'),
('VEN01', 'Adquisición de materiales', 'Ventas'),
('VEN02', 'Servicio al cliente', 'Ventas'),
('VEN03', 'Documentación y contabilidad', 'Ventas'),
('VEN04', 'Planificación de distribución y precios', 'Ventas');

-- --------------------------------------------------------

--
-- Table structure for table `busco`
--

CREATE TABLE `busco` (
  `IDEMPRESA` varchar(20) DEFAULT NULL,
  `IDATRIBUTO` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `empresa`
--

CREATE TABLE `empresa` (
  `IDEMPRESA` varchar(20) NOT NULL,
  `NOMBREEMPRESA` varchar(100) DEFAULT NULL,
  `DESCRIPCIONEMPRESA` varchar(100) DEFAULT NULL,
  `RFCEMPRESA` varchar(13) DEFAULT NULL,
  `IDGIRO` varchar(20) DEFAULT NULL,
  `CORREOEMPRESA` varchar(100) DEFAULT NULL,
  `IDREPRESENTANTE` varchar(20) DEFAULT NULL,
  `CONTRASENAEMPRESA` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `giros`
--

CREATE TABLE `giros` (
  `IDGIRO` varchar(20) NOT NULL,
  `NOMBREGIRO` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `giros`
--

INSERT INTO `giros` (`IDGIRO`, `NOMBREGIRO`) VALUES
('EOFOE', 'Asesoría Legal'),
('EOMNFE', 'Contabilidad'),
('IEJIW', 'Mercadotecnia'),
('IENFE', 'Tecnología'),
('NFEINF', 'Recursos Humanos'),
('PEFKP', 'Otros'),
('PEFPWK', 'Seguridad'),
('QQWQE', 'Servicios Sanitarios'),
('UENFU', 'Ventas');

-- --------------------------------------------------------

--
-- Table structure for table `ofrezco`
--

CREATE TABLE `ofrezco` (
  `IDEMPRESA` varchar(20) DEFAULT NULL,
  `IDATRIBUTO` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `representante`
--

CREATE TABLE `representante` (
  `IDREPRESENTANTE` varchar(20) NOT NULL,
  `NOMBREREPRESENTANTE` varchar(100) DEFAULT NULL,
  `CARGOREPRESENTANTE` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tamanio`
--

CREATE TABLE `tamanio` (
  `IDTAMANIO` varchar(20) NOT NULL,
  `NOMBRETIPO` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `atributos`
--
ALTER TABLE `atributos`
  ADD PRIMARY KEY (`IDATRIBUTO`);

--
-- Indexes for table `busco`
--
ALTER TABLE `busco`
  ADD KEY `IDEMPRESA` (`IDEMPRESA`),
  ADD KEY `IDATRIBUTO` (`IDATRIBUTO`);

--
-- Indexes for table `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`IDEMPRESA`),
  ADD KEY `IDGIRO` (`IDGIRO`),
  ADD KEY `IDREPRESENTANTE` (`IDREPRESENTANTE`);

--
-- Indexes for table `giros`
--
ALTER TABLE `giros`
  ADD PRIMARY KEY (`IDGIRO`);

--
-- Indexes for table `ofrezco`
--
ALTER TABLE `ofrezco`
  ADD KEY `IDEMPRESA` (`IDEMPRESA`),
  ADD KEY `IDATRIBUTO` (`IDATRIBUTO`);

--
-- Indexes for table `representante`
--
ALTER TABLE `representante`
  ADD PRIMARY KEY (`IDREPRESENTANTE`);

--
-- Indexes for table `tamanio`
--
ALTER TABLE `tamanio`
  ADD PRIMARY KEY (`IDTAMANIO`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `busco`
--
ALTER TABLE `busco`
  ADD CONSTRAINT `busco_ibfk_1` FOREIGN KEY (`IDEMPRESA`) REFERENCES `empresa` (`IDEMPRESA`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `busco_ibfk_2` FOREIGN KEY (`IDATRIBUTO`) REFERENCES `atributos` (`IDATRIBUTO`) ON UPDATE CASCADE;

--
-- Constraints for table `empresa`
--
ALTER TABLE `empresa`
  ADD CONSTRAINT `empresa_ibfk_1` FOREIGN KEY (`IDGIRO`) REFERENCES `giros` (`IDGIRO`) ON UPDATE CASCADE,
  ADD CONSTRAINT `empresa_ibfk_2` FOREIGN KEY (`IDREPRESENTANTE`) REFERENCES `representante` (`IDREPRESENTANTE`) ON UPDATE CASCADE;

--
-- Constraints for table `ofrezco`
--
ALTER TABLE `ofrezco`
  ADD CONSTRAINT `ofrezco_ibfk_1` FOREIGN KEY (`IDEMPRESA`) REFERENCES `empresa` (`IDEMPRESA`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ofrezco_ibfk_2` FOREIGN KEY (`IDATRIBUTO`) REFERENCES `atributos` (`IDATRIBUTO`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
