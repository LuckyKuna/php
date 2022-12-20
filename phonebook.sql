-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Час створення: Гру 01 2022 р., 11:55
-- Версія сервера: 8.0.24
-- Версія PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `up`
--

-- --------------------------------------------------------

--
-- Структура таблиці `phonebook`
--

CREATE TABLE `phonebook` (
  `ID` int NOT NULL,
  `name` varchar(35) DEFAULT '',
  `surname` varchar(35) DEFAULT '',
  `spec` varchar(35) DEFAULT '',
  `phone` varchar(15) DEFAULT '',
  `comment` text,
  `date` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Дамп даних таблиці `phonebook`
--

INSERT INTO `phonebook` (`ID`, `name`, `surname`, `spec`, `phone`, `comment`, `date`) VALUES
(4, 'Max', 'K', 'Stud', '0680130420', 'No comm', NULL),
(5, 'Olya', 'B', 'Stu999', '777777777', '777777777', NULL),
(6, 'Vlad', 'N', 'Stud', '99999999999', '', '2022-11-29'),
(15, 'Ken', 'O', 'Stud', '444444444444', '4', '2022-11-29');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `phonebook`
--
ALTER TABLE `phonebook`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `phonebook`
--
ALTER TABLE `phonebook`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
