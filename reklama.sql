-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 26 2019 г., 21:13
-- Версия сервера: 8.0.15
-- Версия PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `reklama`
--

-- --------------------------------------------------------

--
-- Структура таблицы `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `dtapp` date NOT NULL,
  `pach` longtext NOT NULL,
  `descript` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `images`
--

INSERT INTO `images` (`id`, `dtapp`, `pach`, `descript`) VALUES
(1, '0000-00-00', 'image/gallery/obemnye bukvy/bukvi (1).jpg', ''),
(2, '0000-00-00', 'image/gallery/interernaja pechat/pechat (1).jpg', ''),
(3, '0000-00-00', 'image/gallery/interernaja pechat/pechat (2).jpg', ''),
(4, '0000-00-00', 'image/gallery/interernaja pechat/pechat (6).jpg', ''),
(5, '0000-00-00', 'image/gallery/interernaja pechat/pechat (10).jpg', ''),
(6, '0000-00-00', 'image/gallery/interernaja pechat/pechat (12).jpg', ''),
(7, '0000-00-00', 'image/gallery/interernaja pechat/pechat (14).jpg', ''),
(8, '0000-00-00', 'image/gallery/interernaja pechat/pechat (24).jpg', ''),
(9, '0000-00-00', 'image/gallery/interernaja pechat/pechat (22).jpg', ''),
(10, '0000-00-00', 'image/gallery/interernaja pechat/pechat (20).jpg', ''),
(11, '0000-00-00', 'image/gallery/interernaja pechat/pechat (17).jpg', ''),
(12, '0000-00-00', 'image/gallery/interernaja pechat/pechat (52).jpg', ''),
(13, '0000-00-00', 'image/gallery/interernaja pechat/pechat (50).jpg', ''),
(14, '0000-00-00', 'image/gallery/interernaja pechat/pechat (28).jpg', ''),
(15, '0000-00-00', 'image/gallery/interernaja pechat/pechat (19).jpg', ''),
(16, '0000-00-00', 'image/gallery/lazernaja rezka/lazer (11).jpg', ''),
(17, '0000-00-00', 'image/gallery/obemnye bukvy/bukvi (2).jpg', ''),
(18, '0000-00-00', 'image/gallery/lazernaja rezka/lazer (10).jpg', ''),
(19, '0000-00-00', 'image/gallery/obemnye bukvy/bukvi (3).jpg', ''),
(20, '0000-00-00', 'image/gallery/obemnye bukvy/bukvi (13).jpg', ''),
(21, '0000-00-00', 'image/gallery/obemnye bukvy/bukvi (14).jpg', ''),
(22, '0000-00-00', 'image/gallery/obemnye bukvy/bukvi (12).jpg', ''),
(23, '0000-00-00', 'image/gallery/obemnye bukvy/bukvi (23).jpg', ''),
(24, '0000-00-00', 'image/gallery/obemnye bukvy/bukvi (24).jpg', ''),
(25, '0000-00-00', 'image/gallery/obemnye bukvy/bukvi (25).jpg', ''),
(26, '0000-00-00', 'image/gallery/obemnye bukvy/bukvi (26).jpg', ''),
(27, '0000-00-00', 'image/gallery/obemnye bukvy/bukvi (21).jpg', ''),
(28, '0000-00-00', 'image/gallery/pechat\' na tekstile i metalle/Picture (20).jpg', ''),
(29, '0000-00-00', 'image/gallery/pechat\' na tekstile i metalle/Picture (24).jpg', ''),
(30, '0000-00-00', 'image/gallery/pechat\' na tekstile i metalle/Picture (21).jpg', ''),
(31, '0000-00-00', 'image/gallery/obemnye bukvy/bukvi (6).jpg', ''),
(32, '0000-00-00', 'image/gallery/pechat\' na tekstile i metalle/Picture (25).jpg', ''),
(33, '0000-00-00', 'image/gallery/pechat\' na tekstile i metalle/Picture (26).jpg', ''),
(34, '0000-00-00', 'image/gallery/pechat\' na tekstile i metalle/Picture (27).jpg', ''),
(35, '2019-12-23', 'image/gallery/portfolio/IMG_20190728_154043.jpg', '');

-- --------------------------------------------------------

--
-- Структура таблицы `navbar`
--

CREATE TABLE `navbar` (
  `id` tinyint(1) UNSIGNED NOT NULL,
  `link` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `turn` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `navbar`
--

INSERT INTO `navbar` (`id`, `link`, `name`, `turn`) VALUES
(1, '', 'Главная', 1),
(2, 'services/services', 'Услуги', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `services`
--

CREATE TABLE `services` (
  `id` tinyint(2) NOT NULL,
  `title` varchar(100) NOT NULL,
  `icon` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `link` varchar(100) NOT NULL,
  `turnNav` tinyint(2) DEFAULT NULL,
  `turnContent` tinyint(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `services`
--

INSERT INTO `services` (`id`, `title`, `icon`, `link`, `turnNav`, `turnContent`) VALUES
(3, 'выапываыв', '', 'services/large.php', 2, NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `navbar`
--
ALTER TABLE `navbar`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `turn` (`turn`);

--
-- Индексы таблицы `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `link` (`link`),
  ADD UNIQUE KEY `turn` (`turnNav`),
  ADD UNIQUE KEY `turnContent` (`turnContent`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `navbar`
--
ALTER TABLE `navbar`
  MODIFY `id` tinyint(1) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `services`
--
ALTER TABLE `services`
  MODIFY `id` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
