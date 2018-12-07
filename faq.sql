-- phpMyAdmin SQL Dump
-- version 4.0.10.20
-- https://www.phpmyadmin.net
--
-- Хост: 10.0.0.105:3306
-- Время создания: Дек 07 2018 г., 12:28
-- Версия сервера: 10.1.37-MariaDB
-- Версия PHP: 5.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `zaplutakhin_diplom`
--

-- --------------------------------------------------------

--
-- Структура таблицы `faq`
--

CREATE TABLE IF NOT EXISTS `faq` (
  `ID` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `theme` varchar(20) NOT NULL,
  `autor` varchar(20) NOT NULL,
  `question` varchar(300) NOT NULL,
  `answer` varchar(300) NOT NULL,
  `status` varchar(20) NOT NULL,
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `faq`
--

INSERT INTO `faq` (`ID`, `date`, `theme`, `autor`, `question`, `answer`, `status`) VALUES
(1, '2018-12-07 10:20:00', 'Дурацкие', 'admin', 'Где лучше отдохнуть с семьей на выходных в Мурманской области?', 'Можно сходить в купальню, если с ребенком, то в парк развлечений в Мурманск Молле', 'Скрыт'),
(2, '2018-12-07 10:20:00', 'Другие', 'admin', 'Вопрос 2', 'Ответ 2', 'Опубликован'),
(3, '2018-12-07 10:20:00', 'Общие', 'admin', 'Собираюсь в Карелию. Где можно найти домики по адекватной цене?', 'Попробуйте на этом сайте подыскать подходящее', 'Опубликован'),
(4, '2018-12-07 10:20:00', 'Общие', 'admin', 'Вопрос 4 ', 'Ответ 4', 'Опубликован'),
(5, '2018-12-07 10:20:00', 'Идиотские', 'admin', 'Вопрос 5', 'Ответ 5', 'Опубликован'),
(6, '2018-12-07 10:21:00', 'Странные', 'admin', 'Вопрос 6', 'Ответ 6', 'Скрыт'),
(7, '2018-12-07 10:21:00', 'Идиотские', 'admin', 'Вопрос 7', 'Ответ 7', 'Скрыт'),
(8, '2018-12-07 10:21:00', 'Общие', 'admin', 'Вопрос 8', 'Ответ 8', 'Скрыт'),
(9, '2018-12-07 10:23:00', 'Общие', 'Алексей', 'Вопрос 9', '', 'Ожидает ответа'),
(10, '2018-12-07 10:24:00', 'Другие', 'Алексей', 'Вопрос 10', '', 'Ожидает ответа'),
(11, '2018-12-07 11:34:00', 'Странные', 'Алексей', 'Странный вопрос', '', 'Ожидает ответа');

-- --------------------------------------------------------

--
-- Структура таблицы `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `statuses` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `status`
--

INSERT INTO `status` (`statuses`) VALUES
('Опубликован'),
('Скрыт'),
('Ожидает ответа');

-- --------------------------------------------------------

--
-- Структура таблицы `themes`
--

CREATE TABLE IF NOT EXISTS `themes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `theme` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `themes`
--

INSERT INTO `themes` (`id`, `theme`) VALUES
(1, 'Общие'),
(2, 'Другие'),
(3, 'Дурацкие'),
(4, 'Идиотские'),
(5, 'Странные');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`username`, `password`) VALUES
('admin', 'admin'),
('admin-1', 'asd');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
