-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 23 2022 г., 14:39
-- Версия сервера: 10.8.4-MariaDB
-- Версия PHP: 8.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` char(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` int(20) DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `phone_number`, `email`, `create_at`, `update_at`) VALUES
(1, 'Maks', 503402857, 'maks@mail.net', '2022-10-21 11:39:49', '2022-10-21 11:39:49'),
(2, 'Alis', 685775647, 'alis@mail.net', '2022-10-21 11:40:04', '2022-10-21 11:40:04'),
(3, 'Kat', 503427789, 'kat@mail.net', '2022-10-21 11:40:14', '2022-10-21 11:40:14'),
(4, 'Dana', 508458697, 'dana@mail.net', '2022-10-21 11:40:29', '2022-10-21 11:40:29'),
(7, NULL, NULL, NULL, '2022-10-23 09:57:33', '2022-10-23 09:57:33'),
(8, 'Alex', NULL, 'aleks@mail.net', '2022-10-23 09:58:09', '2022-10-23 09:58:09'),
(9, NULL, NULL, NULL, '2022-10-23 10:00:32', '2022-10-23 10:00:32'),
(10, NULL, NULL, NULL, '2022-10-23 10:42:19', '2022-10-23 10:42:19'),
(11, 'Kent', 506458254, 'kent@mail.net', '2022-10-23 10:43:01', '2022-10-23 10:43:01'),
(12, 'Marik', 935647895, 'marik@mail.net', '2022-10-23 11:38:04', '2022-10-23 11:38:04');

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `from_whom` char(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `to_whom` char(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `message`, `from_whom`, `to_whom`, `create_at`, `update_at`) VALUES
(1, 'Привіт, як справи? ', 'Alis', 'Maks', '2022-10-21 11:39:08', '2022-10-21 11:39:08'),
(2, NULL, NULL, NULL, '2022-10-23 10:20:36', '2022-10-23 10:20:36'),
(3, 'Привіт, все добре!', 'Maks', 'Alis', '2022-10-23 10:41:14', '2022-10-23 10:41:14');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` char(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` char(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `login` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `login`, `create_at`, `update_at`) VALUES
(1, 'Maks', 'Zim', 'maks@mail.net', 'ZimMaks', '2022-10-20 15:31:59', '2022-10-20 15:31:59'),
(2, 'Alis', 'Zim', 'alisa@mail.net', 'Alisa', '2022-10-20 15:38:00', '2022-10-20 15:38:00'),
(3, 'Kat', 'Zim', 'kat@mail.net', 'ZimKat', '2022-10-21 11:29:18', '2022-10-21 11:29:18'),
(5, 'Kira', 'Danchenko', 'kira@mail.net', 'KD', '2022-10-22 15:41:24', '2022-10-22 15:41:24'),
(11, 'Jim', 'kerry', 'jim@mail.net', 'JK', '2022-10-23 08:25:38', '2022-10-23 08:25:38'),
(8, 'Aleks', 'Mekat', 'aleks@mail.net', 'allme', '2022-10-23 08:11:25', '2022-10-23 08:11:25');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `contacts`
--
ALTER TABLE `contacts`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`),
  ADD UNIQUE KEY `email` (`email`) USING HASH;

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
