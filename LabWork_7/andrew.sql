-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 27 2022 г., 12:37
-- Версия сервера: 8.0.24
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `andrew`
--

-- --------------------------------------------------------

--
-- Структура таблицы `kor`
--

CREATE TABLE `kor` (
  `login` varchar(16) NOT NULL,
  `password` varchar(16) NOT NULL,
  `name` varchar(16) NOT NULL,
  `date_of_birth` date NOT NULL,
  `sex` varchar(10) NOT NULL,
  `country` varchar(16) NOT NULL,
  `email` varchar(32) NOT NULL,
  `comment` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `kor`
--

INSERT INTO `kor` (`login`, `password`, `name`, `date_of_birth`, `sex`, `country`, `email`, `comment`) VALUES
('andrew-HB', '123', 'Andrew', '2012-05-01', 'male', 'Ukraine', 'andrii.habzovskyi@gmail.com', '--- TEXT ---'),
('Andrew1373', 'qwerty', 'Andrew', '2002-04-07', 'Male', 'Ukraine', 'andrey.dp.ua.com@gmail.com', 'Sign up test');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
