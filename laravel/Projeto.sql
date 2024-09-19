-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16/09/2024 às 05:15
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projeto`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `categoria`
--

CREATE TABLE `categoria` (
  `categoria_id` int(11) NOT NULL,
  `nome_categoria` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `categoria`
--

INSERT INTO `categoria` (`categoria_id`, `nome_categoria`) VALUES
(1, 'eletrônicos'),
(2, 'móveis'),
(3, 'vestuário'),
(4, 'acessórios'),
(5, 'eletrodomésticos'),
(6, 'jogos e brinquedos');

-- --------------------------------------------------------

--
-- Estrutura para tabela `cliente`
--

CREATE TABLE `cliente` (
  `cliente_id` int(11) NOT NULL,
  `nome_cliente` varchar(40) NOT NULL,
  `cpf_cliente` char(11) NOT NULL,
  `email_cliente` varchar(50) NOT NULL,
  `telefone_cliente` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cliente`
--

INSERT INTO `cliente` (`cliente_id`, `nome_cliente`, `cpf_cliente`, `email_cliente`, `telefone_cliente`) VALUES
(1, 'João Silva', '12345678901', 'joao.silva@example.com', '21123456789'),
(2, 'Maria Oliveira', '98765432100', 'maria.oliveira@example.com', '21987654321'),
(3, 'Carlos Santos', '11122233344', 'carlos.santos@example.com', '21912345678'),
(4, 'Lucas Pereira', '22233344455', 'lucas.pereira@example.com', '22123456789'),
(5, 'Fernanda Lima', '33344455566', 'fernanda.lima@example.com', '22987654321'),
(6, 'Paula Almeida', '44455566677', 'paula.almeida@example.com', '22912345678'),
(7, 'Rafael Costa', '55566677788', 'rafael.costa@example.com', '21156789012'),
(8, 'Isabela Rodrigues', '66677788899', 'isabela.rodrigues@example.com', '22167890123'),
(9, 'Marcelo Almeida', '77788899900', 'marcelo.almeida@example.com', '22967890123'),
(10, 'Tatiane Sousa', '88899900011', 'tatiane.sousa@example.com', '22978901234'),
(11, 'Gabriel Fernandes', '99900011122', 'gabriel.fernandes@example.com', '21167890123'),
(12, 'Camila Costa', '00011122233', 'camila.costa@example.com', '22178901234');

-- --------------------------------------------------------

--
-- Estrutura para tabela `fornecedores`
--

CREATE TABLE `fornecedores` (
  `fornecedor_id` int(11) NOT NULL,
  `nome_fornecedor` varchar(50) NOT NULL,
  `telefone_fornecedor` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `fornecedores`
--

INSERT INTO `fornecedores` (`fornecedor_id`, `nome_fornecedor`, `telefone_fornecedor`) VALUES
(1, 'Tech Supplies Ltda', '21123456789'),
(2, 'Móveis de Luxo', '21987654321'),
(3, 'Fashion Trends', '21912345678'),
(4, 'Gadget World', '22123456789'),
(5, 'Home Appliances', '22987654321'),
(6, 'Urban Fashion', '22912345678'),
(7, 'Toy Universe', '21156789012');

-- --------------------------------------------------------

--
-- Estrutura para tabela `pedido`
--

CREATE TABLE `pedido` (
  `pedido_id` int(11) NOT NULL,
  `cliente_id` int(11) DEFAULT NULL,
  `fornecedor_id` int(11) DEFAULT NULL,
  `data_pedido` date NOT NULL,
  `vendedor_id` int(11) DEFAULT NULL,
  `quantidade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `pedido`
--

INSERT INTO `pedido` (`pedido_id`, `cliente_id`, `fornecedor_id`, `data_pedido`, `vendedor_id`, `quantidade`) VALUES
(1, 1, 1, '2023-08-01', 1, 2),
(2, 2, 2, '2023-08-15', 2, 1),
(3, 3, 3, '2023-09-01', 3, 5),
(4, 4, 4, '2023-09-10', 4, 3),
(5, 1, 3, '2023-09-15', 2, 1),
(6, 2, 1, '2023-10-01', 3, 2),
(7, 3, 2, '2023-10-05', 1, 4),
(8, 4, 1, '2023-10-20', 3, 2),
(9, 5, 4, '2023-10-10', 1, 3),
(10, 1, 2, '2023-10-12', 2, 2),
(11, 2, 3, '2023-10-15', 3, 1),
(12, 3, 4, '2023-10-18', 1, 5),
(13, 4, 1, '2023-10-20', 2, 4),
(14, 5, 2, '2023-10-25', 3, 2),
(15, 2, 5, '2023-11-01', 4, 3);

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto`
--

CREATE TABLE `produto` (
  `produto_id` int(11) NOT NULL,
  `nome_produto` varchar(50) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `valor` decimal(10,2) NOT NULL,
  `categoria_id` int(11) DEFAULT NULL,
  `data_cadastro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `produto`
--

INSERT INTO `produto` (`produto_id`, `nome_produto`, `quantidade`, `valor`, `categoria_id`, `data_cadastro`) VALUES
(1, 'smartphone', 50, 799.99, 1, '2023-01-01'),
(2, 'televisão', 30, 1500.00, 1, '2023-02-15'),
(3, 'sofá', 10, 1200.00, 2, '2023-03-01'),
(4, 'camiseta', 100, 25.50, 3, '2023-01-10'),
(5, 'fones de ouvido', 75, 199.99, 1, '2023-04-20'),
(6, 'geladeira', 20, 2500.00, 5, '2023-05-15'),
(7, 'cadeira de escritório', 15, 450.00, 2, '2023-06-01'),
(8, 'calça jeans', 80, 89.90, 3, '2023-07-12'),
(9, 'videogame', 25, 1999.99, 6, '2023-08-25'),
(10, 'smartwatch', 40, 499.99, 1, '2023-09-10'),
(11, 'airfryer', 15, 349.99, 5, '2023-09-15'),
(12, 'mesa de jantar', 8, 800.00, 2, '2023-09-20'),
(13, 'jaqueta de couro', 30, 299.90, 3, '2023-09-25'),
(14, 'console de jogos', 10, 2499.99, 6, '2023-09-30');

-- --------------------------------------------------------

--
-- Estrutura para tabela `vendedor`
--

CREATE TABLE `vendedor` (
  `vendedor_id` int(11) NOT NULL,
  `nome_vendedor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `vendedor`
--

INSERT INTO `vendedor` (`vendedor_id`, `nome_vendedor`) VALUES
(1, 'Ana Paula'),
(2, 'Roberto Lima'),
(3, 'Fernanda Souza'),
(4, 'Juliana Martins'),
(5, 'Eduardo Silva'),
(6, 'Roberta Oliveira');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`categoria_id`);

--
-- Índices de tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`cliente_id`);

--
-- Índices de tabela `fornecedores`
--
ALTER TABLE `fornecedores`
  ADD PRIMARY KEY (`fornecedor_id`);

--
-- Índices de tabela `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`pedido_id`),
  ADD KEY `fk_cliente` (`cliente_id`),
  ADD KEY `fk_fornecedor` (`fornecedor_id`),
  ADD KEY `fk_vendedor` (`vendedor_id`);

--
-- Índices de tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`produto_id`),
  ADD KEY `fk_categoria` (`categoria_id`);

--
-- Índices de tabela `vendedor`
--
ALTER TABLE `vendedor`
  ADD PRIMARY KEY (`vendedor_id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `categoria_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `cliente_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `fornecedores`
--
ALTER TABLE `fornecedores`
  MODIFY `fornecedor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `pedido`
--
ALTER TABLE `pedido`
  MODIFY `pedido_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `produto_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `vendedor`
--
ALTER TABLE `vendedor`
  MODIFY `vendedor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `fk_cliente` FOREIGN KEY (`cliente_id`) REFERENCES `cliente` (`cliente_id`) ON DELETE SET NULL,
  ADD CONSTRAINT `fk_fornecedor` FOREIGN KEY (`fornecedor_id`) REFERENCES `fornecedores` (`fornecedor_id`) ON DELETE SET NULL,
  ADD CONSTRAINT `fk_vendedor` FOREIGN KEY (`vendedor_id`) REFERENCES `vendedor` (`vendedor_id`) ON DELETE SET NULL;

--
-- Restrições para tabelas `produto`
--
ALTER TABLE `produto`
  ADD CONSTRAINT `fk_categoria` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`categoria_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
