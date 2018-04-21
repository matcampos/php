-- phpMyAdmin SQL Dump
-- version 4.7.6
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 17-Abr-2018 às 03:48
-- Versão do servidor: 5.7.20-log
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `cat_id` int(10) NOT NULL,
  `cat_nome` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`cat_id`, `cat_nome`) VALUES
(1, 'Design'),
(2, 'Desenvolvimento'),
(3, 'Empreendedorismo'),
(4, 'Redes'),
(5, 'IoT');

-- --------------------------------------------------------

--
-- Estrutura da tabela `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `post_nome` varchar(200) NOT NULL,
  `post_autor` varchar(100) NOT NULL,
  `post_data` date NOT NULL,
  `post_imagem` text NOT NULL,
  `post_conteudo` text NOT NULL,
  `post_status` varchar(20) NOT NULL DEFAULT 'draft'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `posts`
--

INSERT INTO `posts` (`post_id`, `post_nome`, `post_autor`, `post_data`, `post_imagem`, `post_conteudo`, `post_status`) VALUES
(1, 'Aula de PHP', 'Gustavo Torrente', '2018-04-16', 'cms_post_image1.jpg', 'Esta aula de PHP esta voltada para criação de um sistema de gerenciamento de conteúdo (CMS).', 'draft'),
(2, 'Google para Empreendedores', 'Glaucio Daniel', '2018-04-17', 'google.png', 'Este post é destinado a ferramentas do Google para empreendedores, veja mais..', 'draft');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
