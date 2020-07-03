-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 03/07/2020 às 08:17
-- Versão do servidor: 10.3.22-MariaDB-1ubuntu1
-- Versão do PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `phptips`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `addresses`
--

CREATE TABLE `addresses` (
  `addr_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `street` varchar(255) DEFAULT NULL,
  `number` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `addresses`
--

INSERT INTO `addresses` (`addr_id`, `user_id`, `street`, `number`) VALUES
(1, 1, 'Rua Dois de Junho', '200'),
(2, 2, 'Rod Augusto Montenegro, KM 10', '8'),
(3, 4, 'Quarta Rua Rural', '22b');

-- --------------------------------------------------------

--
-- Estrutura para tabela `credit_cards`
--

CREATE TABLE `credit_cards` (
  `id` int(11) NOT NULL,
  `user` int(10) DEFAULT NULL,
  `hash` varchar(255) DEFAULT NULL,
  `brand` varchar(255) DEFAULT NULL,
  `last_digits` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `credit_cards`
--

INSERT INTO `credit_cards` (`id`, `user`, `hash`, `brand`, `last_digits`, `created_at`, `updated_at`) VALUES
(1, 1, 'card_ckc2m9nr304m6h56dzqvcjwgo', 'mastercard', '7606', '2020-07-01 03:28:29', '2020-07-01 03:28:29');

-- --------------------------------------------------------

--
-- Estrutura para tabela `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `cover` varchar(255) DEFAULT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `posts`
--

INSERT INTO `posts` (`id`, `title`, `cover`, `description`, `created_at`, `updated_at`) VALUES
(8, 'Quia iusto reprehenderit a non et. Voluptatem dolorem fugiat unde eos.', 'images/110b02736b67afbb8426898773400c28.jpg', 'Dolores vel dolores veritatis quibusdam. Dolor repudiandae et et modi. Soluta optio dolorum rem non.\n\nId molestias totam aut debitis ea tenetur. Eum sit eligendi molestiae omnis iure sit. Natus ab assumenda temporibus non debitis ea provident. Excepturi dolorum delectus deleniti rerum nostrum.', '2020-07-03 10:27:02', '2020-07-03 10:27:02'),
(9, 'Doloribus quis similique repellat et qui quam beatae.', 'images/2f0672781e506cbc7e5738c767572691.jpg', 'Consequuntur et dignissimos ad quo deserunt. Non sunt et at quos tempora quasi. Eum modi corporis sit. Molestiae omnis magni sit accusamus voluptatem est qui.\n\nPraesentium possimus est culpa sit. Reprehenderit accusantium nihil ad error magnam a aliquid. Dolores aliquid facilis dolores nulla asperiores. Quidem sequi et molestias perferendis eos perspiciatis earum.', '2020-07-03 10:27:34', '2020-07-03 10:27:34'),
(10, 'Magnam et distinctio amet dolor ut. Omnis iste veniam placeat illo.', 'images/fd81b5274f9229abecf0fdc72bfdc6f7.jpg', 'Maiores facilis fugit cum quisquam. Sit iste facilis ullam esse libero. Nostrum recusandae reprehenderit eligendi a ipsum rerum. Rerum dicta eius asperiores sint ea error.\n\nVoluptas non velit explicabo eveniet. Sunt est quia ullam.', '2020-07-03 10:28:21', '2020-07-03 10:28:21'),
(11, 'Consectetur nesciunt et blanditiis et tempore.', 'images/fd81b5274f9229abecf0fdc72bfdc6f7.jpg', 'Expedita doloribus dolores et. Id quia voluptatem et assumenda temporibus et est quas. Blanditiis aut ut sed ut est possimus veniam.\n\nEius dolor error eum sunt. Culpa similique nulla totam repudiandae sequi et. Quia repellendus assumenda ut dolorem qui officiis.', '2020-07-03 11:13:48', '2020-07-03 10:31:49'),
(12, 'Eum earum consequatur blanditiis nihil neque maiores.', 'images/ce783b3f63624c687c9251005d7e28df.jpg', 'Tempora nam consequatur culpa error. Dolor error et ratione dolor. Voluptas voluptatibus est ad consequatur temporibus vel.\n\nNostrum natus nostrum eum rerum. Non exercitationem quidem quis et nihil voluptatem rerum. Est perferendis in ipsum. Nesciunt est eos nihil architecto error.', '2020-07-03 10:32:17', '2020-07-03 10:32:17'),
(13, 'Non porro assumenda natus qui corporis.', 'images/ccf020a3eb4121eee04ed5920da80618.jpg', 'Corrupti molestias est vel sit et occaecati rerum. Voluptatem quis ut et debitis similique quas et. Est commodi corrupti minus exercitationem sunt deserunt rerum. Nulla doloremque ipsa vel maxime.\n\nNumquam fugit ipsum aliquid necessitatibus sint quasi. Provident ratione incidunt voluptas quia et placeat fugit. Id dolores maxime sit error porro a explicabo. Omnis earum dolores necessitatibus quo architecto iusto. Alias tempore laudantium quam ipsum perferendis.', '2020-07-03 10:32:46', '2020-07-03 10:32:46'),
(14, 'Commodi ut nam est consequatur. Iure animi quia est in velit aperiam.', 'images/fd81b5274f9229abecf0fdc72bfdc6f7.jpg', 'Dolore et saepe quasi sed impedit dignissimos rem. Rerum provident non veritatis non. Est animi corrupti laboriosam recusandae ut voluptates. Commodi ut incidunt sit sunt aut eligendi voluptatem cumque.\n\nMolestias necessitatibus aspernatur nihil in. Ullam quo modi eligendi numquam consequatur adipisci harum. Architecto odit ipsum aut vero. Enim placeat voluptas soluta et sit.', '2020-07-03 11:13:59', '2020-07-03 11:08:45'),
(15, 'Laudantium doloribus minima ut magnam cum voluptatem dolor.', 'images/ea534c5eac87870f64089445a59b214e.jpg', 'Possimus nam voluptas quo. Deserunt repellendus cumque iste sint. Aliquam similique odit veritatis aut id quod.\n\nEum similique aperiam excepturi rem aliquid et. Quis voluptatem nostrum aut inventore. Dolor sint rerum quia maxime eius. Commodi voluptatem sed laborum quia rerum occaecati eveniet. Voluptatem sequi ut explicabo asperiores itaque sed.', '2020-07-03 11:09:32', '2020-07-03 11:09:32'),
(16, 'Dolorem ea ratione nisi sint nisi.', 'images/4b647c8b96b9b89d2d5af894a348a6ee.jpg', 'Quae sint voluptatem animi modi quis ut. Consequatur velit eius consectetur. Hic et aut est ducimus id vitae. Ipsam sint ipsa voluptatibus vel qui sit.\n\nSaepe debitis deleniti porro et in voluptas. Eos dicta molestias pariatur dicta dolorem ipsa. Modi vel commodi consequatur. Non necessitatibus amet dolorem earum.', '2020-07-03 11:10:39', '2020-07-03 11:10:39');

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL DEFAULT '',
  `last_name` varchar(100) NOT NULL DEFAULT '',
  `email` varchar(255) DEFAULT NULL,
  `genre` char(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `genre`, `created_at`, `updated_at`) VALUES
(1, 'CAIO', 'SILVA', 'caio@gmail.com', 'M', '2020-06-30 03:00:00', '2020-06-30 22:19:31'),
(2, 'EMANUELLE', 'SILVA', 'emanuelle@gmail.com', 'F', '2020-06-30 03:00:00', '2020-06-30 22:19:46'),
(3, 'Pedro', 'Leite', 'pedro@gmail.com', 'M', '2020-07-01 01:51:00', '2020-07-01 01:51:00'),
(5, 'Fernando', 'Leite', 'fernando@gmail.com', 'M', '2020-07-01 01:56:22', '2020-07-02 23:37:26'),
(6, 'Pedro', 'Leite', NULL, 'M', '2020-07-02 23:37:22', '2020-07-02 23:37:22');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`addr_id`);

--
-- Índices de tabela `credit_cards`
--
ALTER TABLE `credit_cards`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `addresses`
--
ALTER TABLE `addresses`
  MODIFY `addr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `credit_cards`
--
ALTER TABLE `credit_cards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
