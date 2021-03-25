-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 25 2021 г., 17:58
-- Версия сервера: 8.0.19
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `jurnal`
--

-- --------------------------------------------------------

--
-- Структура таблицы `jurnarelements`
--

CREATE TABLE `jurnarelements` (
  `id` int UNSIGNED NOT NULL,
  `faim` varchar(255) NOT NULL,
  `serial` varchar(255) NOT NULL,
  `additionally` text CHARACTER SET utf8 COLLATE utf8_general_ci,
  `comment` text CHARACTER SET utf8 COLLATE utf8_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `jurnarelements`
--

INSERT INTO `jurnarelements` (`id`, `faim`, `serial`, `additionally`, `comment`) VALUES
(1, 'Сериков Кайсархан Куатович', '1555666633339999', 'Тестовый текст для ', ' Тестовый текст для \"Comment\" add new information123123123asdasdasdasdsfgsdfg2523452345qwe'),
(3, 'Serikova Nazerke', '555666999333', 'Текст для ', 'Текст для \"коментарий\"'),
(4, 'Serikov KAisarhan Kuatovich', '777888999666', 'Дополнительный текст для отправки info в BD', 'Дополнительный текст для комментарий \r\naasd\r\nasdasd\r\nasd'),
(15, 'Serikov Kaisarhan Kuatovich', '8885555666633', 'Дополнительный текст для отправки info в BD', 'проверка редактирования в поискеqwerqwer'),
(25, '123', '123', '123', '123'),
(26, 'Сериков Кайсархан Куатович', '1555666633339999', 'Тестовый текст для ', ' Тестовый текст для \"Comment\" add new information123123123asdasdasdasdsfgsdfg2523452345qwe'),
(27, 'Сериков Кайсархан Куатович', '1555666633339999', 'Тестовый текст для ', ' Тестовый текст для \"Comment\" add new information123123123asdasdasdasdsfgsdfg2523452345qwe'),
(28, 'Serikova Nazerke', '555666999333', 'Текст для ', 'Текст для \"коментарий\"'),
(29, 'Serikov KAisarhan Kuatovich', '777888999666', 'Дополнительный текст для отправки info в BD', 'Дополнительный текст для комментарий \r\naasd\r\nasdasd\r\nasd'),
(30, 'Serikov Kaisarhan Kuatovich', '8885555666633', 'Дополнительный текст для отправки info в BD', 'проверка редактирования в поискеqwerqwer'),
(31, '123', '123', '123', '123'),
(32, 'Сериков Кайсархан Куатович', '1555666633339999', 'Тестовый текст для ', ' Тестовый текст для \"Comment\" add new information123123123asdasdasdasdsfgsdfg2523452345qwe'),
(33, 'Сериков Кайсархан Куатович', '1555666633339999', 'Тестовый текст для ', ' Тестовый текст для \"Comment\" add new information123123123asdasdasdasdsfgsdfg2523452345qwe'),
(34, 'Serikova Nazerke', '555666999333', 'Текст для ', 'Текст для \"коментарий\"'),
(35, 'Serikov KAisarhan Kuatovich', '777888999666', 'Дополнительный текст для отправки info в BD', 'Дополнительный текст для комментарий \r\naasd\r\nasdasd\r\nasd'),
(36, 'Serikov Kaisarhan Kuatovich', '8885555666633', 'Дополнительный текст для отправки info в BD', 'проверка редактирования в поискеqwerqwer'),
(37, '123', '123', '123', '123'),
(38, 'Сериков Кайсархан Куатович', '1555666633339999', 'Тестовый текст для ', ' Тестовый текст для \"Comment\" add new information123123123asdasdasdasdsfgsdfg2523452345qwe'),
(39, 'Сериков Кайсархан Куатович', '1555666633339999', 'Тестовый текст для ', ' Тестовый текст для \"Comment\" add new information123123123asdasdasdasdsfgsdfg2523452345qwe'),
(40, 'Serikova Nazerke', '555666999333', 'Текст для ', 'Текст для \"коментарий\"'),
(41, 'Serikov KAisarhan Kuatovich', '777888999666', 'Дополнительный текст для отправки info в BD', 'Дополнительный текст для комментарий \r\naasd\r\nasdasd\r\nasd'),
(42, 'Serikov Kaisarhan Kuatovich', '8885555666633', 'Дополнительный текст для отправки info в BD', 'проверка редактирования в поискеqwerqwer'),
(43, '123', '123', '123', '123'),
(44, 'Сериков Кайсархан Куатович', '1555666633339999', 'Тестовый текст для ', ' Тестовый текст для \"Comment\" add new information123123123asdasdasdasdsfgsdfg2523452345qwe'),
(45, 'Сериков Кайсархан Куатович', '1555666633339999', 'Тестовый текст для ', ' Тестовый текст для \"Comment\" add new information123123123asdasdasdasdsfgsdfg2523452345qwe'),
(46, 'Serikova Nazerke', '555666999333', 'Текст для ', 'Текст для \"коментарий\"'),
(47, 'Serikov KAisarhan Kuatovich', '777888999666', 'Дополнительный текст для отправки info в BD', 'Дополнительный текст для комментарий \r\naasd\r\nasdasd\r\nasd'),
(48, 'Serikov Kaisarhan Kuatovich', '8885555666633', 'Дополнительный текст для отправки info в BD', 'проверка редактирования в поискеqwerqwer'),
(49, '123', '123', '123', '123'),
(50, 'Сериков Кайсархан Куатович', '1555666633339999', 'Тестовый текст для ', ' Тестовый текст для \"Comment\" add new information123123123asdasdasdasdsfgsdfg2523452345qwe'),
(51, 'Сериков Кайсархан Куатович', '1555666633339999', 'Тестовый текст для ', ' Тестовый текст для \"Comment\" add new information123123123asdasdasdasdsfgsdfg2523452345qwe'),
(52, 'Serikova Nazerke', '555666999333', 'Текст для ', 'Текст для \"коментарий\"'),
(53, 'Serikov KAisarhan Kuatovich', '777888999666', 'Дополнительный текст для отправки info в BD', 'Дополнительный текст для комментарий \r\naasd\r\nasdasd\r\nasd'),
(54, 'Serikov Kaisarhan Kuatovich', '8885555666633', 'Дополнительный текст для отправки info в BD', 'проверка редактирования в поискеqwerqwer'),
(55, '123', '123', '123', '123'),
(56, 'Сериков Кайсархан Куатович', '1555666633339999', 'Тестовый текст для ', ' Тестовый текст для \"Comment\" add new information123123123asdasdasdasdsfgsdfg2523452345qwe'),
(57, 'Сериков Кайсархан Куатович', '1555666633339999', 'Тестовый текст для ', ' Тестовый текст для \"Comment\" add new information123123123asdasdasdasdsfgsdfg2523452345qwe'),
(58, 'Serikova Nazerke', '555666999333', 'Текст для ', 'Текст для \"коментарий\"'),
(59, 'Serikov KAisarhan Kuatovich', '777888999666', 'Дополнительный текст для отправки info в BD', 'Дополнительный текст для комментарий \r\naasd\r\nasdasd\r\nasd'),
(60, 'Serikov Kaisarhan Kuatovich', '8885555666633', 'Дополнительный текст для отправки info в BD', 'проверка редактирования в поискеqwerqwer'),
(61, '123', '123', '123', '123'),
(62, 'Сериков Кайсархан Куатович', '1555666633339999', 'Тестовый текст для ', ' Тестовый текст для \"Comment\" add new information123123123asdasdasdasdsfgsdfg2523452345qwe'),
(63, 'Сериков Кайсархан Куатович', '1555666633339999', 'Тестовый текст для ', ' Тестовый текст для \"Comment\" add new information123123123asdasdasdasdsfgsdfg2523452345qwe'),
(64, 'Serikova Nazerke', '555666999333', 'Текст для ', 'Текст для \"коментарий\"'),
(65, 'Serikov KAisarhan Kuatovich', '777888999666', 'Дополнительный текст для отправки info в BD', 'Дополнительный текст для комментарий \r\naasd\r\nasdasd\r\nasd'),
(66, 'Serikov Kaisarhan Kuatovich', '8885555666633', 'Дополнительный текст для отправки info в BD', 'проверка редактирования в поискеqwerqwer'),
(67, '123', '123', '123', '123'),
(68, 'Сериков Кайсархан Куатович', '1555666633339999', 'Тестовый текст для ', ' Тестовый текст для \"Comment\" add new information123123123asdasdasdasdsfgsdfg2523452345qwe'),
(69, '123', '123', '123', '123'),
(70, 'Сериков Кайсархан Куатович', '1555666633339999', 'Тестовый текст для ', ' Тестовый текст для \"Comment\" add new information123123123asdasdasdasdsfgsdfg2523452345qwe'),
(71, 'Сериков Кайсархан Куатович', '1555666633339999', 'Тестовый текст для ', ' Тестовый текст для \"Comment\" add new information123123123asdasdasdasdsfgsdfg2523452345qwe'),
(72, 'Serikova Nazerke', '555666999333', 'Текст для ', 'Текст для \"коментарий\"'),
(73, 'Serikov KAisarhan Kuatovich', '777888999666', 'Дополнительный текст для отправки info в BD', 'Дополнительный текст для комментарий \r\naasd\r\nasdasd\r\nasd'),
(74, 'Serikov Kaisarhan Kuatovich', '8885555666633', 'Дополнительный текст для отправки info в BD', 'проверка редактирования в поискеqwerqwer'),
(75, '123', '123', '123', '123'),
(76, 'Сериков Кайсархан Куатович', '1555666633339999', 'Тестовый текст для ', ' Тестовый текст для \"Comment\" add new information123123123asdasdasdasdsfgsdfg2523452345qwe'),
(77, 'Сериков Кайсархан Куатович', '1555666633339999', 'Тестовый текст для ', ' Тестовый текст для \"Comment\" add new information123123123asdasdasdasdsfgsdfg2523452345qwe'),
(78, 'Serikova Nazerke', '555666999333', 'Текст для ', 'Текст для \"коментарий\"'),
(79, 'Serikov KAisarhan Kuatovich', '777888999666', 'Дополнительный текст для отправки info в BD', 'Дополнительный текст для комментарий \r\naasd\r\nasdasd\r\nasd'),
(80, 'Serikov Kaisarhan Kuatovich', '8885555666633', 'Дополнительный текст для отправки info в BD', 'проверка редактирования в поискеqwerqwer'),
(81, '123', '123', '123', '123'),
(82, 'Сериков Кайсархан Куатович', '1555666633339999', 'Тестовый текст для ', ' Тестовый текст для \"Comment\" add new information123123123asdasdasdasdsfgsdfg2523452345qwe'),
(83, 'Сериков Кайсархан Куатович', '1555666633339999', 'Тестовый текст для ', ' Тестовый текст для \"Comment\" add new information123123123asdasdasdasdsfgsdfg2523452345qwe'),
(84, 'Serikova Nazerke', '555666999333', 'Текст для ', 'Текст для \"коментарий\"'),
(85, 'Serikov KAisarhan Kuatovich', '777888999666', 'Дополнительный текст для отправки info в BD', 'Дополнительный текст для комментарий \r\naasd\r\nasdasd\r\nasd'),
(86, 'Serikov Kaisarhan Kuatovich', '8885555666633', 'Дополнительный текст для отправки info в BD', 'проверка редактирования в поискеqwerqwer'),
(87, '123', '123', '123', '123'),
(88, 'Сериков Кайсархан Куатович', '1555666633339999', 'Тестовый текст для ', ' Тестовый текст для \"Comment\" add new information123123123asdasdasdasdsfgsdfg2523452345qwe'),
(89, 'Сериков Кайсархан Куатович', '1555666633339999', 'Тестовый текст для ', ' Тестовый текст для \"Comment\" add new information123123123asdasdasdasdsfgsdfg2523452345qwe'),
(90, 'Serikova Nazerke', '555666999333', 'Текст для ', 'Текст для \"коментарий\"'),
(91, 'Serikov KAisarhan Kuatovich', '777888999666', 'Дополнительный текст для отправки info в BD', 'Дополнительный текст для комментарий \r\naasd\r\nasdasd\r\nasd'),
(92, 'Serikov Kaisarhan Kuatovich', '8885555666633', 'Дополнительный текст для отправки info в BD', 'проверка редактирования в поискеqwerqwer'),
(93, '123', '123', '123', '123'),
(94, 'Сериков Кайсархан Куатович', '1555666633339999', 'Тестовый текст для ', ' Тестовый текст для \"Comment\" add new information123123123asdasdasdasdsfgsdfg2523452345qwe'),
(95, 'Сериков Кайсархан Куатович', '1555666633339999', 'Тестовый текст для ', ' Тестовый текст для \"Comment\" add new information123123123asdasdasdasdsfgsdfg2523452345qwe'),
(96, 'Serikova Nazerke', '555666999333', 'Текст для ', 'Текст для \"коментарий\"'),
(97, 'Serikov KAisarhan Kuatovich', '777888999666', 'Дополнительный текст для отправки info в BD', 'Дополнительный текст для комментарий \r\naasd\r\nasdasd\r\nasd'),
(98, 'Serikov Kaisarhan Kuatovich', '8885555666633', 'Дополнительный текст для отправки info в BD', 'проверка редактирования в поискеqwerqwer'),
(99, '123', '123', '123', '123'),
(100, 'Сериков Кайсархан Куатович', '1555666633339999', 'Тестовый текст для ', ' Тестовый текст для \"Comment\" add new information123123123asdasdasdasdsfgsdfg2523452345qwe'),
(101, 'Сериков Кайсархан Куатович', '1555666633339999', 'Тестовый текст для ', ' Тестовый текст для \"Comment\" add new information123123123asdasdasdasdsfgsdfg2523452345qwe'),
(102, 'Serikova Nazerke', '555666999333', 'Текст для ', 'Текст для \"коментарий\"'),
(103, 'Сериков Кайсархан Куатович', '1555666633339999', 'Тестовый текст для ', ' Тестовый текст для \"Comment\" add new information123123123asdasdasdasdsfgsdfg2523452345qwe'),
(104, 'Serikova Nazerke', '555666999333', 'Текст для ', 'Текст для \"коментарий\"'),
(105, 'Serikov KAisarhan Kuatovich', '777888999666', 'Дополнительный текст для отправки info в BD', 'Дополнительный текст для комментарий \r\naasd\r\nasdasd\r\nasd'),
(106, 'Serikov Kaisarhan Kuatovich', '8885555666633', 'Дополнительный текст для отправки info в BD', 'проверка редактирования в поискеqwerqwer'),
(107, '123', '123', '123', '123'),
(108, 'Сериков Кайсархан Куатович', '1555666633339999', 'Тестовый текст для ', ' Тестовый текст для \"Comment\" add new information123123123asdasdasdasdsfgsdfg2523452345qwe'),
(109, 'Сериков Кайсархан Куатович', '1555666633339999', 'Тестовый текст для ', ' Тестовый текст для \"Comment\" add new information123123123asdasdasdasdsfgsdfg2523452345qwe'),
(110, 'Serikova Nazerke', '555666999333', 'Текст для ', 'Текст для \"коментарий\"'),
(111, 'Serikov KAisarhan Kuatovich', '777888999666', 'Дополнительный текст для отправки info в BD', 'Дополнительный текст для комментарий \r\naasd\r\nasdasd\r\nasd'),
(112, 'Serikov Kaisarhan Kuatovich', '8885555666633', 'Дополнительный текст для отправки info в BD', 'проверка редактирования в поискеqwerqwer'),
(113, '123', '123', '123', '123'),
(114, 'Сериков Кайсархан Куатович', '1555666633339999', 'Тестовый текст для ', ' Тестовый текст для \"Comment\" add new information123123123asdasdasdasdsfgsdfg2523452345qwe'),
(115, 'Сериков Кайсархан Куатович', '1555666633339999', 'Тестовый текст для ', ' Тестовый текст для \"Comment\" add new information123123123asdasdasdasdsfgsdfg2523452345qwe'),
(116, 'Serikova Nazerke', '555666999333', 'Текст для ', 'Текст для \"коментарий\"'),
(117, 'Serikov KAisarhan Kuatovich', '777888999666', 'Дополнительный текст для отправки info в BD', 'Дополнительный текст для комментарий \r\naasd\r\nasdasd\r\nasd'),
(118, 'Serikov Kaisarhan Kuatovich', '8885555666633', 'Дополнительный текст для отправки info в BD', 'проверка редактирования в поискеqwerqwer'),
(119, '123', '123', '123', '123'),
(135, 'Сериков Кайсархан Куатович', '1555666633339999', 'Тестовый текст для ', ' Тестовый текст для \"Comment\" add new information123123123asdasdasdasdsfgsdfg2523452345qwe');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `login` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`) VALUES
(1, 'admin', 'admin'),
(3, 'kaisarhan', 'qwe');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `jurnarelements`
--
ALTER TABLE `jurnarelements`
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
-- AUTO_INCREMENT для таблицы `jurnarelements`
--
ALTER TABLE `jurnarelements`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
