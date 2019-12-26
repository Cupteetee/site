-- phpMyAdmin SQL Dump
-- version 4.9.0.1-mh4
-- https://www.phpmyadmin.net/
--
-- Хост: u64476.mysql.masterhost.ru
-- Время создания: Дек 26 2019 г., 17:35
-- Версия сервера: 5.6.28-1+wheezy1+mh2-log
-- Версия PHP: 7.0.33-0+deb9u6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `u64476`
--

-- --------------------------------------------------------

--
-- Структура таблицы `0dbimage`
--

CREATE TABLE `0dbimage` (
  `id` int(11) NOT NULL,
  `dtapp` date NOT NULL,
  `pach` longtext NOT NULL,
  `descript` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `0dbimage`
--

INSERT INTO `0dbimage` (`id`, `dtapp`, `pach`, `descript`) VALUES
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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
