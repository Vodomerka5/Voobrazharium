-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 05 2020 г., 16:25
-- Версия сервера: 10.3.13-MariaDB-log
-- Версия PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `voobrzhm`
--

-- --------------------------------------------------------

--
-- Структура таблицы `costumes`
--

CREATE TABLE `costumes` (
  `ID` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `prokat` int(100) NOT NULL,
  `pokupka` int(100) NOT NULL,
  `zalog` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `costumes`
--

INSERT INTO `costumes` (`ID`, `name`, `image`, `prokat`, `pokupka`, `zalog`) VALUES
(1, 'Космо-воин', '1.jpg', 4000, 14000, 10000),
(2, 'Хищница', '2.jpg', 5000, 12500, 12000),
(3, 'Леди', '3.jpg', 6000, 9500, 7000),
(4, 'Джоэл', '4.jpg', 2500, 7000, 8000);

-- --------------------------------------------------------

--
-- Структура таблицы `form_one`
--

CREATE TABLE `form_one` (
  `ID` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `form_one`
--

INSERT INTO `form_one` (`ID`, `name`, `email`) VALUES
(1, 'Максим', 'zermaxim@gmail.com'),
(6, 'фвыфывфыв', 'saasdasd@adsasdsad'),
(7, 'фвыфывфыв', 'saasdasd@adsasdsad'),
(8, 'фвыфывфыв', 'saasdasd@adsasdsad'),
(9, 'фвыфывфыв', 'saasdasd@adsasdsad'),
(10, 'dasdas', 'adsad@dsaasdsad'),
(11, 'dasdas', 'adsad@dsaasdsad'),
(12, 'dasdas', 'adsad@dsaasdsad'),
(13, 'dasdas', 'adsad@dsaasdsad'),
(14, 'dasdas', 'adsad@dsaasdsad'),
(15, 'dasdas', 'adsad@dsaasdsad'),
(16, 'dasdas', 'adsad@dsaasdsad'),
(17, 'dasdas', 'adsad@dsaasdsad'),
(18, 'dasdas', 'adsad@dsaasdsad'),
(19, 'dasdas', 'dasdas@dsadasdas'),
(20, 'dasdas', 'dasdas@dsadasdas'),
(21, 'dasdas', 'dasdas@dsadasdas'),
(22, 'dadasdas', 'sdadas@daadsads'),
(23, 'dasdas', 'dasdas@sdaads'),
(24, 'dasdas', 'dasdas@sdaads'),
(25, 'dasdas', 'dasdas@sdaads');

-- --------------------------------------------------------

--
-- Структура таблицы `form_two`
--

CREATE TABLE `form_two` (
  `ID` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `tel` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `form_two`
--

INSERT INTO `form_two` (`ID`, `name`, `tel`) VALUES
(1, 'Евгений', '89099252340');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `costumes`
--
ALTER TABLE `costumes`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `form_one`
--
ALTER TABLE `form_one`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `form_two`
--
ALTER TABLE `form_two`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `costumes`
--
ALTER TABLE `costumes`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `form_one`
--
ALTER TABLE `form_one`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT для таблицы `form_two`
--
ALTER TABLE `form_two`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
