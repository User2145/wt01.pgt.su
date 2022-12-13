-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 12 2022 г., 18:54
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
-- База данных: `adonin`
--

-- --------------------------------------------------------

--
-- Структура таблицы `films`
--

CREATE TABLE `films` (
  `id` int NOT NULL,
  `name` varchar(40) NOT NULL,
  `genre` varchar(40) NOT NULL,
  `img` varchar(4000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `films`
--

INSERT INTO `films` (`id`, `name`, `genre`, `img`) VALUES
(3, 'Властелин колец', 'Фентези, экшен', '8.jpg'),
(4, 'Молчание ягнят', 'Хоррор, триллер', '5.jpg'),
(5, 'Валун', 'Комедия', '6.jpg'),
(10, 'Кошка в космосе', 'Комедия, фантастика', '4.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `massages`
--

CREATE TABLE `massages` (
  `id` int NOT NULL,
  `massage` varchar(250) NOT NULL,
  `idUser` int NOT NULL,
  `idModer` int NOT NULL,
  `direction` int NOT NULL COMMENT 'Кто отправил сообщение (1 - юзер, 2 - модератор)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int NOT NULL,
  `place` varchar(40) DEFAULT NULL COMMENT 'Номер места',
  `card` varchar(40) NOT NULL,
  `idFilm` int NOT NULL,
  `idUser` int NOT NULL,
  `idSession_time` int NOT NULL,
  `day` varchar(40) NOT NULL COMMENT 'День оформления заказа',
  `month` varchar(40) NOT NULL COMMENT 'Месяц оформления заказа',
  `year` varchar(40) NOT NULL COMMENT 'Год оформления заказа'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `place`, `card`, `idFilm`, `idUser`, `idSession_time`, `day`, `month`, `year`) VALUES
(3, '1', '2131424234', 10, 1, 2, '12th', 'December', '2022'),
(5, '1', '4234', 10, 3, 3, '12th', 'December', '2022');

-- --------------------------------------------------------

--
-- Структура таблицы `session_time`
--

CREATE TABLE `session_time` (
  `id` int NOT NULL,
  `sessionTime` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `idFilm` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `session_time`
--

INSERT INTO `session_time` (`id`, `sessionTime`, `idFilm`) VALUES
(2, '2022-12-03T17:58', 10),
(3, '2022-12-07T07:58', 10);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `login` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `name` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `type` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `name`, `email`, `type`) VALUES
(1, 'user', 'user', 'Иван', 'ivan@ivan.iv', 3),
(3, 'admin', 'admin', '', 'admin@admin.ad', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `massages`
--
ALTER TABLE `massages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idModer` (`idModer`),
  ADD KEY `idUser` (`idUser`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idFilm` (`idFilm`),
  ADD KEY `idUser` (`idUser`),
  ADD KEY `idSession_time` (`idSession_time`);

--
-- Индексы таблицы `session_time`
--
ALTER TABLE `session_time`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idFilm` (`idFilm`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `films`
--
ALTER TABLE `films`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `massages`
--
ALTER TABLE `massages`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `session_time`
--
ALTER TABLE `session_time`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `massages`
--
ALTER TABLE `massages`
  ADD CONSTRAINT `massages_ibfk_1` FOREIGN KEY (`idModer`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `massages_ibfk_2` FOREIGN KEY (`idUser`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`idFilm`) REFERENCES `films` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`idUser`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`idSession_time`) REFERENCES `session_time` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `session_time`
--
ALTER TABLE `session_time`
  ADD CONSTRAINT `session_time_ibfk_1` FOREIGN KEY (`idFilm`) REFERENCES `films` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
