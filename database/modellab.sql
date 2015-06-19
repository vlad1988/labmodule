-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Час створення: Чрв 19 2015 р., 12:24
-- Версія сервера: 5.6.20
-- Версія PHP: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База даних: `modellab`
--

-- --------------------------------------------------------

--
-- Структура таблиці `departaments`
--

CREATE TABLE IF NOT EXISTS `departaments` (
`id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Дамп даних таблиці `departaments`
--

INSERT INTO `departaments` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'ФЕКІ', '2015-06-17 14:28:50', '2015-06-17 14:28:50'),
(2, 'ІЕЕСУ', '2015-06-17 14:28:50', '2015-06-17 14:28:50');

-- --------------------------------------------------------

--
-- Структура таблиці `disciplines`
--

CREATE TABLE IF NOT EXISTS `disciplines` (
`id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `group_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `group_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Дамп даних таблиці `disciplines`
--

INSERT INTO `disciplines` (`id`, `title`, `group_name`, `group_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Web-технології та Web-дизайн', 'АК-11-1', 1, 1, '2015-06-17 14:56:33', '2015-06-17 14:56:33');

-- --------------------------------------------------------

--
-- Структура таблиці `discipline_group`
--

CREATE TABLE IF NOT EXISTS `discipline_group` (
`id` int(10) unsigned NOT NULL,
  `discipline_id` int(10) unsigned NOT NULL,
  `group_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблиці `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
`id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `departament_id` int(10) unsigned NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Дамп даних таблиці `groups`
--

INSERT INTO `groups` (`id`, `title`, `created_at`, `updated_at`, `departament_id`) VALUES
(1, 'АК-11-1', '2015-06-17 14:39:33', '2015-06-17 14:39:33', 1);

-- --------------------------------------------------------

--
-- Структура таблиці `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп даних таблиці `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_05_12_145812_create_departaments_table', 1),
('2015_05_14_180829_create_groups_table', 1),
('2015_05_17_132715_create_disciplines_table', 1),
('2015_05_17_135025_create_students_table', 1),
('2015_05_18_152804_create_schemes_table', 1),
('2015_05_18_152842_create_reports_table', 1),
('2015_05_25_091630_create_discipline_group_table', 1);

-- --------------------------------------------------------

--
-- Структура таблиці `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `reports`
--

CREATE TABLE IF NOT EXISTS `reports` (
`id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `filepath` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `approvedate` date NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `discipline_id` int(10) unsigned NOT NULL,
  `student_id` int(10) unsigned NOT NULL,
  `schema_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Дамп даних таблиці `reports`
--

INSERT INTO `reports` (`id`, `title`, `filepath`, `approvedate`, `status`, `discipline_id`, `student_id`, `schema_id`, `created_at`, `updated_at`) VALUES
(1, 'Звіт з лабораторної роботи №1', '22162.doc', '2015-06-17', 'Розглядається', 1, 1, 1, '2015-06-17 15:18:28', '2015-06-17 15:18:28'),
(3, 'Звіт з ЛБ1', '33571.doc', '2015-06-18', 'Схвалено', 1, 3, 1, '2015-06-18 05:11:34', '2015-06-18 14:31:03'),
(4, 'Звіт з лб 2', '59507.docx', '2015-06-18', 'Схвалено', 1, 3, 2, '2015-06-18 09:03:48', '2015-06-18 14:52:00'),
(5, 'Звіт з лабораторної роботи №3', '52161.doc', '2015-06-19', 'Схвалено', 1, 1, 3, '2015-06-19 04:57:01', '2015-06-19 04:57:30'),
(6, 'Звіт з лб4', '69940.doc', '2015-06-19', 'Схвалено', 1, 1, 4, '2015-06-19 05:11:57', '2015-06-19 05:12:39'),
(7, 'Звіт з лабораторної роботи №2', '55186.doc', '2015-06-19', 'На доопрацювання', 1, 1, 2, '2015-06-19 05:55:00', '2015-06-19 05:58:52'),
(8, 'Звіт з РГР', '13877.doc', '2015-06-19', 'Схвалено', 1, 1, 5, '2015-06-19 07:07:09', '2015-06-19 07:07:43');

-- --------------------------------------------------------

--
-- Структура таблиці `schemes`
--

CREATE TABLE IF NOT EXISTS `schemes` (
`id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `expiredate` date NOT NULL,
  `unit` int(11) NOT NULL,
  `discipline_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Дамп даних таблиці `schemes`
--

INSERT INTO `schemes` (`id`, `title`, `type`, `expiredate`, `unit`, `discipline_id`, `created_at`, `updated_at`) VALUES
(1, 'Лабораторна робота №1 - "Стуктура HTML-додатку"', 'Лабораторна робота', '2013-12-20', 0, 1, '2015-06-17 14:57:11', '2015-06-17 14:57:11'),
(2, 'Лабораторна робота №2', 'Лабораторна робота', '2013-12-22', 0, 1, '2015-06-17 16:43:04', '2015-06-17 16:43:04'),
(3, 'Лабораторна робота №3', 'Лабораторна робота', '2016-01-12', 0, 1, '2015-06-19 04:55:01', '2015-06-19 04:55:01'),
(4, 'Лабораторна робота №4', 'Лабораторна робота', '2016-05-14', 0, 1, '2015-06-19 05:11:14', '2015-06-19 05:11:14'),
(5, 'РГР', 'Розрахункова-графічна робота', '2016-09-12', 0, 1, '2015-06-19 07:06:22', '2015-06-19 07:06:22');

-- --------------------------------------------------------

--
-- Структура таблиці `students`
--

CREATE TABLE IF NOT EXISTS `students` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `guid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `group_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Дамп даних таблиці `students`
--

INSERT INTO `students` (`id`, `name`, `surname`, `email`, `guid`, `group_id`, `created_at`, `updated_at`) VALUES
(1, 'Ярослав', 'Цимбал', 'yarik@gmail.com', '24f80400-151a-11e5-8935-e778ca58aab5', 1, '2015-06-17 14:56:13', '2015-06-17 14:56:13'),
(3, 'Ліза', 'Паливода', 'palyvoda@test.com', '80ba55e0-152d-11e5-880f-bf23c8834a40', 1, '2015-06-17 17:14:48', '2015-06-17 17:14:48');

-- --------------------------------------------------------

--
-- Структура таблиці `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Дамп даних таблиці `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Влад ', 'Тертишний', 'vladislafus@gmail.com', '$2y$10$/KAEYlbPRejhMNlmM0ZeBuEPTdFvuhvQycJ0Ow.naZsiVsGgAJY4m', 'y20b9QRG3FLJgS0UmVbugH4drwpgl0Lm66ZZTUP95Lqrs9EkdeL7LUJ0yGva', '2015-06-17 14:15:21', '2015-06-19 07:07:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departaments`
--
ALTER TABLE `departaments`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `disciplines`
--
ALTER TABLE `disciplines`
 ADD PRIMARY KEY (`id`), ADD KEY `disciplines_user_id_foreign` (`user_id`);

--
-- Indexes for table `discipline_group`
--
ALTER TABLE `discipline_group`
 ADD PRIMARY KEY (`id`), ADD KEY `discipline_group_discipline_id_foreign` (`discipline_id`), ADD KEY `discipline_group_group_id_foreign` (`group_id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
 ADD PRIMARY KEY (`id`), ADD KEY `groups_departament_id_foreign` (`departament_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
 ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
 ADD PRIMARY KEY (`id`), ADD KEY `reports_student_id_foreign` (`student_id`), ADD KEY `reports_schema_id_foreign` (`schema_id`);

--
-- Indexes for table `schemes`
--
ALTER TABLE `schemes`
 ADD PRIMARY KEY (`id`), ADD KEY `schemes_discipline_id_foreign` (`discipline_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `students_email_unique` (`email`), ADD UNIQUE KEY `students_guid_unique` (`guid`), ADD KEY `students_group_id_foreign` (`group_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `departaments`
--
ALTER TABLE `departaments`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `disciplines`
--
ALTER TABLE `disciplines`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `discipline_group`
--
ALTER TABLE `discipline_group`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `schemes`
--
ALTER TABLE `schemes`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Обмеження зовнішнього ключа збережених таблиць
--

--
-- Обмеження зовнішнього ключа таблиці `disciplines`
--
ALTER TABLE `disciplines`
ADD CONSTRAINT `disciplines_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Обмеження зовнішнього ключа таблиці `discipline_group`
--
ALTER TABLE `discipline_group`
ADD CONSTRAINT `discipline_group_discipline_id_foreign` FOREIGN KEY (`discipline_id`) REFERENCES `disciplines` (`id`),
ADD CONSTRAINT `discipline_group_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`);

--
-- Обмеження зовнішнього ключа таблиці `groups`
--
ALTER TABLE `groups`
ADD CONSTRAINT `groups_departament_id_foreign` FOREIGN KEY (`departament_id`) REFERENCES `departaments` (`id`);

--
-- Обмеження зовнішнього ключа таблиці `reports`
--
ALTER TABLE `reports`
ADD CONSTRAINT `reports_schema_id_foreign` FOREIGN KEY (`schema_id`) REFERENCES `schemes` (`id`),
ADD CONSTRAINT `reports_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`);

--
-- Обмеження зовнішнього ключа таблиці `schemes`
--
ALTER TABLE `schemes`
ADD CONSTRAINT `schemes_discipline_id_foreign` FOREIGN KEY (`discipline_id`) REFERENCES `disciplines` (`id`);

--
-- Обмеження зовнішнього ключа таблиці `students`
--
ALTER TABLE `students`
ADD CONSTRAINT `students_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
