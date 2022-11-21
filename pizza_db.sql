-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 21, 2022 at 10:57 AM
-- Server version: 5.6.51
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pizza`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `product_id`, `quantity`, `user_id`) VALUES
(1, 'test', 1, 4, 3),
(5, 'Іван', 1, 1, 1),
(6, 'Василь Степанович', 8, 2, 25);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `image`, `price`) VALUES
(1, 'Mushroom Pizza', 'Гриби, Маслини, Свіжі томати, Сир Моцарелла, Сир Фета, Томатний соус', '../images/mushroom.png', 25),
(2, 'Pepperoni Pizza', 'Пепероні, Сир Моцарелла, Томатний соус', '../images/pepperoni.png', 20),
(3, 'Chicken Pizza', 'Курка, Свіжі томати, Сир Моцарелла, Соус Часниковий Оригінальний', '../images/chicken.png', 35),
(4, 'Bacon Pizza', 'Бекон, Курка, Цибуля, Огірки мариновані, Свіжі томати, Сир Моцарелла, Соус Пікант', '../images/bacon.png', 30),
(5, 'Cordon-Blue Pizza', 'Шинка, Курка, Соус Карбонара, Сир Моцарелла, Сир Роккфорті', '../images/cordonblue.png', 27),
(9, 'Four Season Pizza', 'Бекон, Шинка, Гриби, Курка, Цибуля, Маслини, Огірки мариновані, Мисливські ковбаски, Пепероні, Свіжі томати, Соус BBQ, Сир Моцарелла, Сир Фета, Томатний соус', '../images/fourseason.png', 35),
(10, 'Pineapple Pizza', 'Ананас, Сир Моцарелла, Соус Карамельний, Соус Сирний', '../images/pineapple.png', 23),
(11, 'Bavarian Pizza', 'Мисливські ковбаски, Сир Моцарелла, Цибуля, Огірки мариновані, Томатний соус', '../images/bavarian.png', 28);

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `text`, `product_id`, `user_id`) VALUES
(6, 'Василь Степанович', 'Завжди купую цю піццу. Дуже смачна!', 1, 0),
(8, 'Yuliia Kuzmenko', 'Сміливо можу рекомендувати всім цю піцерію! Зажди смачна тепла піца. ', 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `login` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `login`, `password`) VALUES
(1, 'Вася', 'test', '123123'),
(2, 'Yuliia Kuzmenko', 'czxc', '123123'),
(4, 'Stepan', 'stepan', 'stepan123'),
(5, 'Василь Степанович', 'vasiliy-stepanovich', 'vs-777');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
