-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Фев 21 2023 г., 15:52
-- Версия сервера: 10.4.27-MariaDB
-- Версия PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `library`
--

-- --------------------------------------------------------

--
-- Структура таблицы `catalog`
--

CREATE TABLE `catalog` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `category` int(11) NOT NULL,
  `year` int(4) NOT NULL,
  `filename` text NOT NULL,
  `picture` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `catalog`
--

INSERT INTO `catalog` (`id`, `title`, `category`, `year`, `filename`, `picture`) VALUES
(1, 'Java. Полное руководство. 10-е изд (Шилдт Герберт)', 2, 2018, 'https://ozon.ru/t/ppY3azp', 'schildt.png'),
(2, 'Поэмы (Пушкин)', 3, 1837, 'https://bookprose.ru/produce/pushkin-poemy/', 'pushkin.jpg'),
(3, '\"Пальто\" Гоголя', 3, 1842, 'https://www.labirint.ru/books/627597/', 'Gogol_Palto.jpg'),
(4, 'А. С. Пушкин. Полное собрание сочинений в 9 томах', 3, 1954, 'https://www.bookvoed.ru/book?id=7535091', 'sochinenya-pushkina.jpeg'),
(5, 'Пушкин А. \"Евгений Онегин\"', 3, 1830, 'https://market.yandex.ru/product--a-s-pushkin-evgenii-onegin-podarochnoe-izdanie/1781784970?cpa=1', 'onegin.jpg'),
(6, 'Русские писатели. Пушкин.', 3, 1830, 'https://libcat.ru/knigi/proza/istoricheskaya-proza/49506-elena-krishtof-dlya-serdca-nuzhno-verit-krug-geniya-pushkin.html', 'pisateli.jpg'),
(7, 'М.Ю. Лермонтов. Полное собрание сочинений. Т. 1.', 3, 1910, 'https://tarhany.ru/fondy/fondi/memorial_collection/pervie_publikacii_proizvedenij_m_ju_lermontova/kp_3661_lok_1838', 'sochinenya-lermontova.jpg'),
(8, 'Гоголь Николай Васильевич: Вий', 3, 2014, 'https://book24.ru/product/viy-544196/?gsaid=64275&_gs_ref=b52c4a95ee5c9d0fc1e7781a2be1c92580487a3e&_gs_cttl=30&utm_campaign=64275&utm_content=b52c4a95ee5c9d0fc1e7781a2be1c92580487a3e&utm_medium=cpa&utm_source=trackad_gdeslon_priority&partnerId=5001721', 'vij.jpg'),
(9, 'Книга 1', 3, 2005, 'https://www.labirint.ru/books/627597/', 'sample.jpg'),
(10, 'Книга 2', 3, 2002, 'https://www.wildberries.ru/catalog/15647127/detail.aspx', 'sample.jpg'),
(11, 'Книга 3', 3, 1957, 'https://www.bookvoed.ru/book?id=7535091', 'sample.jpg'),
(12, 'Книга 1', 2, 1987, 'localhost', 'sample.jpg'),
(13, 'Книга 2', 2, 1995, 'localhost', 'sample.jpg'),
(14, 'Книга 3', 2, 2003, 'localhost', 'sample.jpg'),
(15, 'Книга 4', 2, 2013, 'localhost', 'sample.jpg'),
(16, 'Книга 5', 2, 2005, 'localhost', 'sample.jpg'),
(17, 'Книга 6', 2, 2003, 'localhost', 'sample.jpg'),
(18, 'Книга 7', 2, 2008, 'localhost', 'sample.jpg'),
(19, 'Книга 8', 2, 2009, 'localhost', 'sample.jpg'),
(20, 'Книга 9', 2, 2007, 'localhost', 'sample.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `category_name`) VALUES
(2, 'Техническая литература'),
(3, 'Классическая литература');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `text` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `name`, `text`, `date`) VALUES
(2, 'Новая книга!', 'Представляем вам новую книгу \"Пальто!\"', '2023-02-05 00:00:00'),
(3, 'Тест 1', 'Тестовая новость.', '2023-02-21 17:48:49'),
(4, 'Тест 2', 'Тестовая новость.', '2023-02-21 17:49:08'),
(5, 'Тест 3', 'Тестовая новость.', '2023-02-21 17:49:16'),
(6, 'Тест 4', 'Тестовая новость.', '2023-02-21 17:49:26'),
(7, 'Тест 5', 'Тестовая новость.', '2023-02-21 17:49:50'),
(8, 'Тест 6', 'Тестовая новость.', '2023-02-21 17:50:03'),
(9, 'Тест 7', 'Тестовая новость.', '2023-02-21 17:50:16'),
(10, 'Тест 8', 'Тестовая новость.', '2023-02-21 17:50:29'),
(11, 'Тест 9', 'Тестовая новость.', '2023-02-21 17:50:39');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `creation_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `book_id`, `user_id`, `creation_date`) VALUES
(1, 1, 1, '2023-02-09 07:13:13'),
(3, 1, 2, '2023-02-09 08:02:31');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `name` text NOT NULL,
  `surname` text NOT NULL,
  `l_name` text NOT NULL,
  `phone` text NOT NULL,
  `role` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `surname`, `l_name`, `phone`, `role`) VALUES
(1, 'admin', 'admin', 'Егор', 'Гаврилов', 'Денисович', '88005553535', 0),
(2, 'user', 'user', 'Егор', 'Гаврилов', 'Денисович', '+79960088105', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category` (`category`);

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `book_id` (`book_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `catalog`
--
ALTER TABLE `catalog`
  ADD CONSTRAINT `catalog_ibfk_1` FOREIGN KEY (`category`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `catalog` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
