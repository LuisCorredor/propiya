-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2017 at 04:15 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `propiya_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `datos_personales`
--

CREATE TABLE `datos_personales` (
  `id` int(11) NOT NULL,
  `usuario` int(11) NOT NULL,
  `nombre` varchar(400) CHARACTER SET utf8 NOT NULL,
  `agencia` varchar(400) CHARACTER SET utf8 NOT NULL,
  `constructora` varchar(400) CHARACTER SET utf8 NOT NULL,
  `telefono` varchar(50) CHARACTER SET utf8 NOT NULL,
  `email` varchar(200) CHARACTER SET utf8 NOT NULL,
  `acerca` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `twitter` varchar(200) CHARACTER SET utf8 NOT NULL,
  `facebook` varchar(200) CHARACTER SET utf8 NOT NULL,
  `google` varchar(200) CHARACTER SET utf8 NOT NULL,
  `linkedin` varchar(200) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datos_personales`
--

INSERT INTO `datos_personales` (`id`, `usuario`, `nombre`, `agencia`, `constructora`, `telefono`, `email`, `acerca`, `twitter`, `facebook`, `google`, `linkedin`) VALUES
(8, 42, 'John Ignaz', '', '', '', 'buajuan93@gmail.com', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tipos_usuario`
--

CREATE TABLE `tipos_usuario` (
  `id` int(11) NOT NULL,
  `tipo` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tipos_usuario`
--

INSERT INTO `tipos_usuario` (`id`, `tipo`) VALUES
(1, 'particular'),
(2, 'inmobiliaria'),
(3, 'constructora');

-- --------------------------------------------------------

--
-- Table structure for table `tokens`
--

CREATE TABLE `tokens` (
  `id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `token` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `tipo` int(11) NOT NULL,
  `pack` varchar(20) CHARACTER SET utf8 NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 NOT NULL,
  `pass` varchar(50) CHARACTER SET utf8 NOT NULL,
  `activado` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `tipo`, `pack`, `email`, `pass`, `activado`) VALUES
(42, 1, '', 'buajuan93@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datos_personales`
--
ALTER TABLE `datos_personales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tipos_usuario`
--
ALTER TABLE `tipos_usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tokens`
--
ALTER TABLE `tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datos_personales`
--
ALTER TABLE `datos_personales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tipos_usuario`
--
ALTER TABLE `tipos_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tokens`
--
ALTER TABLE `tokens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
