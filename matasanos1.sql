-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2021 at 02:03 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `matasanos`
--

-- --------------------------------------------------------

--
-- Table structure for table `consulta`
--

CREATE TABLE `consulta` (
  `No_Cons` int(11) NOT NULL,
  `Diagnostico_final` varchar(290) NOT NULL,
  `Sintomas_det` varchar(290) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `consulta`
--

INSERT INTO `consulta` (`No_Cons`, `Diagnostico_final`, `Sintomas_det`) VALUES
(1, 'homosexual', 'Le gusta chupar pingas'),
(2, '<br> Tiene 0% de probabilidad de estar enfermo por dengue, por lo que tendria un riesgo considerable de tener dengue,\r\n         si mas sintomas se presentan acuda a su medico preferido', 'Presenta los siguientes sintomas:<br>');

-- --------------------------------------------------------

--
-- Table structure for table `expediente`
--

CREATE TABLE `expediente` (
  `ID` int(11) NOT NULL,
  `FK_Usr` int(11) NOT NULL,
  `FK_Cons` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expediente`
--

INSERT INTO `expediente` (`ID`, `FK_Usr`, `FK_Cons`) VALUES
(1, 1, 1),
(2, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `Registro` int(11) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Nombre` varchar(15) NOT NULL,
  `Apellidos` varchar(20) NOT NULL,
  `Edad` int(2) NOT NULL,
  `Sexo` char(1) NOT NULL,
  `Correo` varchar(30) NOT NULL,
  `Telefono` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`Registro`, `Password`, `Nombre`, `Apellidos`, `Edad`, `Sexo`, `Correo`, `Telefono`) VALUES
(1, 'cucogay', 'Refugio', 'Garcia', 20, 'M', 'Cucosayayin777@gmail.com', 3313610921),
(4, '1234', 'luis', 'mi god', 69, 'M', 'aaa@aaa', 666);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `consulta`
--
ALTER TABLE `consulta`
  ADD PRIMARY KEY (`No_Cons`);

--
-- Indexes for table `expediente`
--
ALTER TABLE `expediente`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `FK_Cons_2` (`FK_Cons`),
  ADD KEY `FK_Usr` (`FK_Usr`),
  ADD KEY `FK_Cons` (`FK_Cons`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`Registro`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `consulta`
--
ALTER TABLE `consulta`
  MODIFY `No_Cons` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `expediente`
--
ALTER TABLE `expediente`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `Registro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `expediente`
--
ALTER TABLE `expediente`
  ADD CONSTRAINT `expediente_ibfk_1` FOREIGN KEY (`FK_Usr`) REFERENCES `usuario` (`Registro`),
  ADD CONSTRAINT `expediente_ibfk_2` FOREIGN KEY (`FK_Cons`) REFERENCES `consulta` (`No_Cons`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
