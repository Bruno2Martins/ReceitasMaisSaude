-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 22-Nov-2019 às 00:26
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
-- Database: `rec2`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `receitas`
--

CREATE TABLE `receitas` (
  `id` int(11) NOT NULL,
  `tipo` int(3) NOT NULL,
  `titulo` varchar(1000) NOT NULL,
  `ingredientes` varchar(3000) NOT NULL,
  `preparo` varchar(3000) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `receitas`
--

INSERT INTO `receitas` (`id`, `tipo`, `titulo`, `ingredientes`, `preparo`, `nome`, `foto`) VALUES
(1, 1, 'CEVICHE', '- 4 filés de peixe branco (pescada branca, corvina, St Peter, etc...) cortado em cubos\r\n- 5 colheres (sopa) de suco de limão\r\n- 1 cebola roxa fatiada fina\r\n- 1 pimenta dedo de moça sem semente fatiada fino\r\n- 2 colheres (sopa) de coentro picado\r\n- 1/2 colher (chá) de sal\r\n- 3 colheres (sopa) de milho verde cozido (lata ou no vapor)\r\n- Rodelas de batata doce cozida para servir', '- Coloque o peixe em cubos em uma tigela\r\n- Tempere o peixe com o sal e a pimenta\r\n- Junte o coentro picado, metade da cebola e o milho, misture bem\r\n- Acrescente o suco de limão, mexa bem e deixe descansar por 15 minutos coberto por papel filme e na geladeira\r\n- Depois acrescente o restante da cebola fatiada, misture mais um pouco e sirva com rodelas de batata doce cozida', 'Bruno Martins', 'CEVICHE.jpg'),
(2, 1, 'SALMÃO FITNESS', '- 4 lombos de salmão\r\n- 2 dentes de alho ralados\r\n- 1 colher (sopa) de gengibre fresco ralado\r\n- 2 colher (sopa) molho de soja Kikkoman\r\n- 1 colher (sopa) mel\r\n- 1 fio de azeite\r\n- Pimenta\r\n- Sementes de sésamo brancas e pretas', '- Pré-aqueça o forno a 180º\r\n- Numa taça, coloque o alho e gengibre ralados, molho de soja, mel e azeite, envolva e reserve\r\n- Num tabuleiro de forno, coloque uma folha de alumínio e em cima os lombos de salmão\r\n- Pincele os lombos de salmão com a marinada, tempere com pimenta e polvilhe com as sementes de sésamo\r\n- Leve ao forno durante cerca de 15 a 20 minutos\r\n- Acompanhe com noodles e mistura chinesa', 'Jefferson', 'SALMAO.JPG'),
(3, 1, 'BANANA DA TERRA CHIPS', '- 2 bananas da terra mais verdes\r\n- Óleo de coco para untar e pincelar\r\n- Mix de pimenta moídos na hora\r\n- Sal integral orgânico ou o sal que você está acostumado a usar', '- Descasque as banana com a ajuda de uma faca e corte em lâminas compridas utilizando um fatiador como este da foto\r\n- Unte uma assadeira com um fio de óleo de coco, que é super saudável, mas se não tiver, pode usar azeite mesmo\r\n- Disponha as lâminas lado a lado, mas sem encostar uma na outra e pincele óleo de coco sobre elas\r\n- Tempere a gosto com o sal e o mix de pimenta e leve ao forno preaquecido 180º por 20 minutos ou até ficarem douradas e crocantes', 'Hendrio', 'CHIPS.jpg'),
(4, 2, 'MILKSHAKE DE COCO', '- 300 ml de leite de coco gelado\r\n- 150 gramas de tofu orgânico\r\n- 40 gramas de coco ralado (fresco)\r\n- 3 colheres (sopa) de mel ou agave (versão vegana)\r\n- 1 colher (chá) de extrato de baunilha\r\n- Morango, coco ralado e nibs de cacau para decorar\r\n', '- Bata todos os ingredientes no liquidificador\r\n- Decore com os morangos, o coco ralado e os nibs de cacau', 'Bruno Martins', 'MILKSHAKE.jpg'),
(5, 2, 'BOLINHO DE GRANOLA', '- 2 xícaras de granola\r\n- 1/2 xícara farinha de aveia\r\n- 1/4 xícara óleo de coco\r\n- 2 bananas prata maduras\r\n- 2 ovos grandes\r\n- 1 colher (sopa) fermento em pó\r\n- Canela em pó\r\n- 1 colher (chá) de extrato de baunilha\r\n- Morango, coco ralado e nibs de cacau para decorar', '- Bater com o mixer ou liquidifcador as bananas, ovos e óleo de coco. Reserve\r\n- Misture os demais ingredientes em uma tigela e incorpore a mistura líquida, misture até obter uma massa homogênea\r\n- Coloque em forminhas de silicone para muffin/cupcake\r\n- Leve ao forno pré aquecido em 180° graus até assarem. Mais ou menos 30 minutos', 'Hendrio', 'BOLINHO.jpg'),
(6, 2, 'DOCINHO DE BANANA', '- 1 xícara cheia de amendoim sem casca moído\r\n- 1 colher rasa (sopa) de pasta de amendoim\r\n- 1 banana média madura, quanto mais madura mais doce fica\r\n- Uma pitada de sal e canela\r\n- Pode colocar baunilha, cacau, etc', '- Amasse a banana com as especiarias escolhidas\r\n- Decore com os morangos, o coco ralado e os nibs de cacau', 'Jefferson', 'DOCBANANA.jpeg'),
(7, 3, 'SUCO DE CENOURA COM LIMÃO E SALSA', '-2 cenouras grandes picadas\r\n-Suco de 1 limão\r\n-1 ramo pequeno de salsinha\r\n-500 ml de água gelada', 'Bata bem tudo no liquidificador e sirva.\r\n', 'Jefferson', 'SUCOCENOURALIMAO.jpg'),
(8, 3, 'SUCO DETOX COM CENOURA E BETERRABA', '-1 cenoura\r\n-1 pepino com casca\r\n-1/2 beterraba média crua\r\n-1/2 xícara de chá de talos\r\n-1/2 xícara de chá de hortelã\r\n-Suco de 1 limão\r\n-Raspas de 1 limão\r\n-250 ml água', 'Junte todos os ingredientes no liquidificador e bata até tudo se misturar e sirva!\r\n', 'Hendrio', 'SUCO.png'),
(9, 3, 'CHANGRIA', '-1 maçã fuji\r\n-Casca de 1/2 limão galego\r\n-Casca de 1/2 laranja\r\n-1/2 laranja\r\n-1 punhado de rosas comestíveis\r\n-1 colher (sopa) rasa de hibisco(4g)\r\n-1 litro de água', 'Pique a maçã e a laranja em cubos do tamanho de sua preferência\r\nReserve 1/2 maçã, 1/2 laranja e algumas pétalas de rosa\r\nFerva todos os demais ingredientes por 10 minutos\r\nCoe\r\nAdicione a 1/2 maçã e a 1/2 laranja que não foram fervidas\r\nLeve à geladeira por 2 horas pra ficar bem geladinho\r\nSirva em copos grandes, com pedaços de frutas dentro. E use algumas pétalas de rosas para decorar', 'Hendrio', 'CHANGRIA.jpg'),
(10, 3, 'SUCO DIGESTIVO', '-1 xícara de chá de abacaxi em cubos\r\n-1 cenoura\r\n-1 xícara de talos de erva-doce\r\n-Suco de 1 limão e raspas da casca\r\n-250 ml água', 'Bata todos os ingredientes no liquidificador até tudo se misturar e sirva!', 'Jefferson', 'SUCO_DIGESTIVO.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `receitas`
--
ALTER TABLE `receitas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `receitas`
--
ALTER TABLE `receitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
