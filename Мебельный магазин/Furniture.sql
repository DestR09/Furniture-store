-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 23 2025 г., 14:47
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `Furniture`
--

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `category` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `subscriptions` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `garant` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `img`, `category`, `subscriptions`, `garant`) VALUES
(481, 'Валенсия Beige', '2300', 'img/image 2.png', 'Барные стулья', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ex massa, porta ut augue quis, mattis vulputate augue. Suspendisse sed felis eget purus porta volutpat nec venenatis purus. Cras et scelerisque lacus. ', '1 год'),
(482, 'Толикс-2 White Gloss', '4600', 'img/image 2 (1).png', 'Барные стулья', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ex massa, porta ut augue quis, mattis vulputate augue. Suspendisse sed felis eget purus porta volutpat nec venenatis purus. Cras et scelerisque lacus. ', '1 год'),
(483, 'Динс Velvet Yellow', '28490', 'img/image 2 (2).png', 'Диваны', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ex massa, porta ut augue quis, mattis vulputate augue. Suspendisse sed felis eget purus porta volutpat nec venenatis purus. Cras et scelerisque lacus. ', '3 года'),
(484, 'Кускен Navy Blue', '2300', 'img/image 2 (3).png', 'Диваны', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ex massa, porta ut augue quis, mattis vulputate augue. Suspendisse sed felis eget purus porta volutpat nec venenatis purus. Cras et scelerisque lacus. ', '3 года'),
(485, 'Шерона Barhat Grey', '21990', 'img/image 2 (4).png', 'Двухспальные кровати', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ex massa, porta ut augue quis, mattis vulputate augue. Suspendisse sed felis eget purus porta volutpat nec venenatis purus. Cras et scelerisque lacus. ', '5 лет'),
(486, 'Авиньон-1', '18990', 'img/image 2 (5).png', 'Буфеты', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ex massa, porta ut augue quis, mattis vulputate augue. Suspendisse sed felis eget purus porta volutpat nec venenatis purus. Cras et scelerisque lacus. ', '1 год'),
(487, 'Стелла Дуб Сонома', '8990', 'img/image 2 (6).png', 'Комоды', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ex massa, porta ut augue quis, mattis vulputate augue. Suspendisse sed felis eget purus porta volutpat nec venenatis purus. Cras et scelerisque lacus. ', '5 лет'),
(488, 'Бенфлит Grey', '7290', 'img/image 2 (7).png', 'Журнальные столы', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ex massa, porta ut augue quis, mattis vulputate augue. Suspendisse sed felis eget purus porta volutpat nec venenatis purus. Cras et scelerisque lacus. ', '1 год'),
(489, 'Тиффани Вудлайн Крем', '10990', 'img/image 2 (8).png', 'Письменные столы', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ex massa, porta ut augue quis, mattis vulputate augue. Suspendisse sed felis eget purus porta volutpat nec venenatis purus. Cras et scelerisque lacus. ', '2 года'),
(490, 'Валенсия Beige', '19990', 'img/image 2 (9).png', 'Шкафы', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ex massa, porta ut augue quis, mattis vulputate augue. Suspendisse sed felis eget purus porta volutpat nec venenatis purus. Cras et scelerisque lacus. ', '5 лет'),
(491, 'Лайт-3-170-240 Белый', '27290', 'img/image 2 (10).png', 'Шкафы', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ex massa, porta ut augue quis, mattis vulputate augue. Suspendisse sed felis eget purus porta volutpat nec venenatis purus. Cras et scelerisque lacus. ', '5 лет'),
(492, 'Вилли Pink', '21290', 'img/image 2 (11).png', 'Детский диван', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ex massa, porta ut augue quis, mattis vulputate augue. Suspendisse sed felis eget purus porta volutpat nec venenatis purus. Cras et scelerisque lacus. ', '3 года'),
(493, 'Сан-Паулу Velvet Brown', '25990', 'img/image 2 (12).png', 'Диваны', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ex massa, porta ut augue quis, mattis vulputate augue. Suspendisse sed felis eget purus porta volutpat nec venenatis purus. Cras et scelerisque lacus. ', '4 года'),
(494, 'Равенна-1 Light', '14990', 'img/image 2 (13).png', 'Комоды', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ex massa, porta ut augue quis, mattis vulputate augue. Suspendisse sed felis eget purus porta volutpat nec venenatis purus. Cras et scelerisque lacus. ', '1 год'),
(495, 'Бервин 5 серый', '19990', 'img/image 2 (14).png', 'Стеллажи', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ex massa, porta ut augue quis, mattis vulputate augue. Suspendisse sed felis eget purus porta volutpat nec venenatis purus. Cras et scelerisque lacus. ', '2 года'),
(496, 'Эдельвейс 5', '11620', 'img/image 2 (15).png', 'Стеллажи', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ex massa, porta ut augue quis, mattis vulputate augue. Suspendisse sed felis eget purus porta volutpat nec venenatis purus. Cras et scelerisque lacus. ', '2 года');

-- --------------------------------------------------------

--
-- Структура таблицы `sub`
--

CREATE TABLE `sub` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `sub`
--

INSERT INTO `sub` (`id`, `name`, `email`, `message`) VALUES
(1, 'Sergey', 'coop@coop', 'privet'),
(2, 'жора', 'avav@mail.ru', 'Лучшая компания!'),
(6, 'Николай', 'Nikolya@mail.ru', 'Здравствуйте помогите мне с выбором мебели! Она слишком шикарна, глаза разбегаются'),
(9, 'микро', 'coop@coop', 'fadasd');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `login` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`) VALUES
(1, 'admin', 'admin11');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sub`
--
ALTER TABLE `sub`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=557;

--
-- AUTO_INCREMENT для таблицы `sub`
--
ALTER TABLE `sub`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
