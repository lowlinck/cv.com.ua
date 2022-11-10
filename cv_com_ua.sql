-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 10 2022 г., 22:05
-- Версия сервера: 8.0.30
-- Версия PHP: 8.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `cv.com.ua`
--

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_11_08_175018_create_teams_table', 1),
(6, '2022_11_09_143850_create_porfolios_table', 2),
(7, '2022_11_09_163525_create_testimonials_table', 3),
(8, '2022_11_10_182550_create_prices_table', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `porfolios`
--

CREATE TABLE `porfolios` (
  `id` bigint UNSIGNED NOT NULL,
  `filtername` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagepath` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linktoweb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `porfolios`
--

INSERT INTO `porfolios` (`id`, `filtername`, `imagepath`, `linktoweb`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'landing', 'images/img_1.jpg', 'https://www.google.com.ua', NULL, NULL, NULL),
(2, 'landing', 'images/img_2.jpg', 'https://www.google.com.ua', NULL, NULL, NULL),
(3, 'shop', 'images/img_3.jpg', 'https://www.google.com.ua', NULL, NULL, NULL),
(4, 'blog', 'images/img_4.jpg', 'https://www.google.com.ua', NULL, NULL, NULL),
(5, 'landing', 'images/img_5.jpg', 'https://www.google.com.ua', NULL, NULL, NULL),
(6, 'shop', 'images/img_6.jpg', 'https://www.google.com.ua', NULL, NULL, NULL),
(7, 'landing', 'images/img_7.jpg', 'https://www.google.com.ua', NULL, NULL, NULL),
(8, 'blog', 'images/img_8.jpg', 'https://www.google.com.ua', NULL, NULL, NULL),
(9, 'landing', 'images/img_9.jpg', 'https://www.google.com.ua', NULL, NULL, NULL),
(10, 'shop', 'images/img_10.jpg', 'https://www.google.com.ua', NULL, NULL, NULL),
(11, 'blog', 'images/img_11.jpg', 'https://www.google.com.ua', NULL, NULL, NULL),
(12, 'landing', 'images/img_12.jpg', 'https://www.google.com.ua', NULL, NULL, NULL),
(13, 'shop', 'images/img_13.jpg', 'https://www.google.com.ua', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `prices`
--

CREATE TABLE `prices` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `teams`
--

CREATE TABLE `teams` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagepath` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `flink` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitlink` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inlink` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instalink` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `teams`
--

INSERT INTO `teams` (`id`, `name`, `position`, `imagepath`, `flink`, `twitlink`, `inlink`, `instalink`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Kaiara Spencer', 'PRODUCT MANAGER', 'images/person_5.jpg', 'https://www.facebook.com', 'https://twitter.com/', 'https://www.linkedin.com/', 'https://www.instagram.com/', NULL, NULL, NULL),
(2, 'Dave Simpson', 'PRODUCT MANAGER', 'images/person_1.jpg', 'https://www.facebook.com', 'https://twitter.com/', 'https://www.linkedin.com/', 'https://www.instagram.com/', NULL, NULL, NULL),
(3, 'Ben Thompson\n', 'PRODUCT MANAGER', 'images/person_2.jpg', 'https://www.facebook.com', 'https://twitter.com/', 'https://www.linkedin.com/', 'https://www.instagram.com/', NULL, NULL, NULL),
(4, 'Kyla Stewart\n', 'PRODUCT MANAGER', 'images/person_3.jpg', 'https://www.facebook.com', 'https://twitter.com/', 'https://www.linkedin.com/', 'https://www.instagram.com/', NULL, NULL, NULL),
(5, 'Kaiara Spencer\n', 'PRODUCT MANAGER', 'images/person_4.jpg', 'https://www.facebook.com', 'https://twitter.com/', 'https://www.linkedin.com/', 'https://www.instagram.com/', NULL, NULL, NULL),
(6, 'Dave Simpson\n', 'PRODUCT MANAGER', 'images/person_6.jpg', 'https://www.facebook.com', 'https://twitter.com/', 'https://www.linkedin.com/', 'https://www.instagram.com/', NULL, NULL, NULL),
(7, 'Dave Simpson\n', 'PRODUCT MANAGER', 'images/person_7.jpg', 'https://www.facebook.com', 'https://twitter.com/', 'https://www.linkedin.com/', 'https://www.instagram.com/', NULL, NULL, NULL),
(8, 'Dave Simpson\n', 'PRODUCT MANAGER', 'images/person_8.jpg', 'https://www.facebook.com', 'https://twitter.com/', 'https://www.linkedin.com/', 'https://www.instagram.com/', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `testimonials`
--

INSERT INTO `testimonials` (`id`, `title`, `image`, `name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(5, 'Марк просто супер специалист!!! Понимает все запросы клиента и очень оперативно все делает. Работаю с ним не первый год и с удовольствием буду обращаться именно к этому специалисту.', 'images/person_1.jpg', 'Александра Петенко', NULL, NULL, NULL),
(6, 'Отличный сервис! Сегодня заказал помощь по сайту и всё было сделано очень оперативно. Остался доволен работой исполнителя. Буду обращаться ещё обязательно.', 'images/person_2.jpg', 'Sergey Rusanov', NULL, NULL, NULL),
(7, 'Мой опыт обращения в Дивли. Скриншоты к сожалению прикрепить нельзя', 'images/person_3.jpg', 'Arkadiy Melenkov', NULL, NULL, NULL),
(8, 'Все было хорошо пока вдруг не оказалось, что редизайн сайта включает все страницы. Кроме страницы управления заказами.', 'images/person_4.jpg', 'Oleksii Chumak', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `porfolios`
--
ALTER TABLE `porfolios`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `prices`
--
ALTER TABLE `prices`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `porfolios`
--
ALTER TABLE `porfolios`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `prices`
--
ALTER TABLE `prices`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
