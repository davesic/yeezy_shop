-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Фев 20 2021 г., 10:30
-- Версия сервера: 10.4.17-MariaDB
-- Версия PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `yeezy`
--

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id` int(1) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(6) NOT NULL,
  `category` varchar(128) NOT NULL,
  `description` text NOT NULL,
  `link` varchar(255) NOT NULL,
  `array` varchar(512) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `category`, `description`, `link`, `array`) VALUES
(11, 'Carbon ', 9700, 'YEEZY 350 V2', 'Сезон: Весна, лето, осень.', 'https://i.ibb.co/mcZ2xC4/image.png', ''),
(12, 'Earth ', 9800, 'YEEZY 350 V2', 'Все сезоны, кроме зимы', 'https://www-yeezy.com/image/cache/catalog/350v2/yeezy-350v2-earth-ma-800x800.jpeg', ''),
(13, 'Tail Light', 12300, 'YEEZY 350 V2', 'Артикул:\r\nFX9017\r\nЦвет:\r\nTAIL LIGHT/TAIL LIGHT/TAIL LIGHT\r\nСостав:\r\nНаружный Материал: нейлон 100% Подошва: резина 100%\r\nОсобенности:\r\nСерый носок, передняя шнуровка, промежуточная подошва Boost, плоская резиновая подошва.\r\nДата релиза:\r\n22.02.2020\r\nТираж:\r\n25000 пар', 'https://www-yeezy.com/image/cache/catalog/350v2/yeezy-350-v2-tail-li-800x800.jpg', ''),
(14, 'Cinder', 9850, 'YEEZY 350 V2', 'Артикул:\r\nFY2903\r\nЦвет:\r\nCINDER/CINDER/CINDER\r\nСостав:\r\nНаружный Материал: нейлон 100% Подошва: резина 100%\r\nОсобенности:\r\nСмолистый носок, передняя шнуровка, промежуточная подошва Boost, плоская резиновая подошва.\r\nДата релиза:\r\n21.03.2020\r\nТираж:\r\n40000 пар', 'https://www-yeezy.com/image/cache/catalog/350v2/yb_350v2cinder-800x800.jpeg', ''),
(15, ' DESERT SAGE', 9800, 'YEEZY BOOST 350 V2', 'Артикул:\r\nFX9035\r\nЦвет:\r\nDESERTSAGE/DESERTSAGE/DESERTSAGE\r\nСостав:\r\nНаружный Материал: нейлон 100% Подошва: резина 100%\r\nОсобенности:\r\nКремовый носок, передняя шнуровка, промежуточная подошва Boost, плоская резиновая подошва.\r\nДата релиза:\r\n14.03.2020\r\nТираж:\r\n29000 пар', 'https://www-yeezy.com/image/cache/catalog/350v2/yeezy-350-v2-desert--800x800.jpg', ''),
(16, ' DESERT SAGE', 9800, 'YEEZY 350 V2', 'Артикул:\r\nFX9035\r\nЦвет:\r\nDESERTSAGE/DESERTSAGE/DESERTSAGE\r\nСостав:\r\nНаружный Материал: нейлон 100% Подошва: резина 100%\r\nОсобенности:\r\nКремовый носок, передняя шнуровка, промежуточная подошва Boost, плоская резиновая подошва.\r\nДата релиза:\r\n14.03.2020\r\nТираж:\r\n29000 пар', 'https://www-yeezy.com/image/cache/catalog/350v2/yeezy-350-v2-desert--800x800.jpg', ''),
(17, 'ALIEN', 13850, 'YEEZY 380', 'Артикул:\r\nFV3260\r\nЦвет:\r\nALIEN/ALIEN/ALIEN\r\nСостав:\r\nНаружный Материал: нейлон 100% Подошва: резина 100%\r\nОсобенности:\r\nСветлый носок, передняя шнуровка, перфорированные вставки, промежуточная подошва Boost, плоская резиновая подошва.\r\nДата релиза:\r\n16.11.2019\r\nТираж:\r\n8000 пар', 'https://www-yeezy.com/image/cache/catalog/380/yeezy-boost-380-alie-800x800.jpg', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
