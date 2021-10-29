-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 29 2021 г., 17:58
-- Версия сервера: 5.6.43
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
-- База данных: `zvitvchs`
--

-- --------------------------------------------------------

--
-- Структура таблицы `bat`
--

CREATE TABLE `bat` (
  `id` int(11) NOT NULL,
  `number_bat` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `zmina_bat` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `total_facts_bat` int(11) NOT NULL,
  `name_carrier_bat` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `provedeno_perevirok_bat` int(11) NOT NULL,
  `skladeno_protokoliv_bat` int(11) NOT NULL,
  `subyekty_yaki_vidmovylys_bat` int(11) NOT NULL,
  `provedeno_perevirok_zd_bat` int(11) NOT NULL,
  `skladeno_protokoliv_zd_bat` int(11) NOT NULL,
  `illegal_carriers_checked_bat` int(11) NOT NULL,
  `vidsutnist_litsenziyi_bat` int(11) NOT NULL,
  `vidsutnist_marshrutu_bat` int(11) NOT NULL,
  `vidsutnist_masky_bat` int(11) NOT NULL,
  `name_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `tor`
--

CREATE TABLE `tor` (
  `id` int(11) NOT NULL,
  `name_user_tor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zmina_tor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_facts_tor` int(11) NOT NULL,
  `name_carrier_tor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provedeno_perevirok_tor` int(11) NOT NULL,
  `skladeno_protokoliv_tor` int(11) NOT NULL,
  `subyekty_yaki_vidmovylys_tor` int(11) NOT NULL,
  `provedeno_perevirok_zd_tor` int(11) NOT NULL,
  `skladeno_protokoliv_zd_tor` int(11) NOT NULL,
  `illegal_carriers_checked_tor` int(11) NOT NULL,
  `vidsutnist_litsenziyi_tor` int(11) NOT NULL,
  `vidsutnist_marshrutu_tor` int(11) NOT NULL,
  `vidsutnist_masky_tor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `vbdr`
--

CREATE TABLE `vbdr` (
  `id` int(11) NOT NULL,
  `name_user_vbdr` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zmina_vbdr` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_facts_vbdr` int(11) NOT NULL,
  `name_carrier_vbdr` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provedeno_perevirok_vbdr` int(11) NOT NULL,
  `skladeno_protokoliv_vbdr` int(11) NOT NULL,
  `subyekty_yaki_vidmovylys_vbdr` int(11) NOT NULL,
  `provedeno_perevirok_zd_vbdr` int(11) NOT NULL,
  `skladeno_protokoliv_zd_vbdr` int(11) NOT NULL,
  `illegal_carriers_checked_vbdr` int(11) NOT NULL,
  `vidsutnist_litsenziyi_vbdr` int(11) NOT NULL,
  `vidsutnist_marshrutu_vbdr` int(11) NOT NULL,
  `vidsutnist_masky_vbdr` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `vmaz`
--

CREATE TABLE `vmaz` (
  `id` int(11) NOT NULL,
  `name_user_vmaz` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zmina_vmaz` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_facts_vmaz` int(11) NOT NULL,
  `name_carrier_vmaz` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provedeno_perevirok_vmaz` int(11) NOT NULL,
  `skladeno_protokoliv_vmaz` int(11) NOT NULL,
  `subyekty_yaki_vidmovylys_vmaz` int(11) NOT NULL,
  `provedeno_perevirok_zd_vmaz` int(11) NOT NULL,
  `skladeno_protokoliv_zd_vmaz` int(11) NOT NULL,
  `illegal_carriers_checked_vmaz` int(11) NOT NULL,
  `vidsutnist_litsenziyi_vmaz` int(11) NOT NULL,
  `vidsutnist_marshrutu_vmaz` int(11) NOT NULL,
  `vidsutnist_masky_vmaz` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `vromdtp`
--

CREATE TABLE `vromdtp` (
  `id` int(11) NOT NULL,
  `name_user_vromdtp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zmina_vromdtp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_facts_vromdtp` int(11) NOT NULL,
  `name_carrier_vromdtp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provedeno_perevirok_vromdtp` int(11) NOT NULL,
  `skladeno_protokoliv_vromdtp` int(11) NOT NULL,
  `subyekty_yaki_vidmovylys_vromdtp` int(11) NOT NULL,
  `provedeno_perevirok_zd_vromdtp` int(11) NOT NULL,
  `skladeno_protokoliv_zd_vromdtp` int(11) NOT NULL,
  `illegal_carriers_checked_vromdtp` int(11) NOT NULL,
  `vidsutnist_litsenziyi_vromdtp` int(11) NOT NULL,
  `vidsutnist_marshrutu_vromdtp` int(11) NOT NULL,
  `vidsutnist_masky_vromdtp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `bat`
--
ALTER TABLE `bat`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tor`
--
ALTER TABLE `tor`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `vbdr`
--
ALTER TABLE `vbdr`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `vmaz`
--
ALTER TABLE `vmaz`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `vromdtp`
--
ALTER TABLE `vromdtp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `bat`
--
ALTER TABLE `bat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT для таблицы `tor`
--
ALTER TABLE `tor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `vbdr`
--
ALTER TABLE `vbdr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `vmaz`
--
ALTER TABLE `vmaz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `vromdtp`
--
ALTER TABLE `vromdtp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
