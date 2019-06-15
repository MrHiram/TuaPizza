-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-06-2019 a las 06:24:25
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tua_pizza`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `drinks`
--

CREATE TABLE `drinks` (
  `drk_id` int(11) NOT NULL,
  `drk_name` varchar(20) NOT NULL,
  `drk_price` int(11) NOT NULL,
  `drk_pic` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingredients`
--

CREATE TABLE `ingredients` (
  `ing_id` int(11) NOT NULL,
  `ing_name` varchar(20) NOT NULL,
  `ing_price` int(11) NOT NULL,
  `ing_btnpic` varchar(50) NOT NULL,
  `ing_pzapic` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `order-drinks`
--

CREATE TABLE `order-drinks` (
  `odr_id` int(11) NOT NULL,
  `drk_id` int(11) NOT NULL,
  `ordr_quantity` int(11) NOT NULL,
  `ordr_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orders`
--

CREATE TABLE `orders` (
  `odr_id` int(11) NOT NULL,
  `usr_id` bigint(20) UNSIGNED NOT NULL,
  `pza_id` int(11) NOT NULL,
  `odr_direction` varchar(200) NOT NULL,
  `odr_phone` varchar(9) NOT NULL,
  `odr_pic` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('pri@gmail.com', '$2y$10$9RrcSSct8tpB7E70zZW8wOWBxJaTUVeD7cI.eiTqvPkJGWWlqEbd6', '2019-06-15 10:00:11'),
('mrhiram1@gmail.com', '$2y$10$uCT3B6HFahwFB4kBlHnZXeU3FOYeLVQRWfJ8NWN72NnsWszVsUALS', '2019-06-15 10:21:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pizza-ingredients`
--

CREATE TABLE `pizza-ingredients` (
  `pza_id` int(11) NOT NULL,
  `ing_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pizzas`
--

CREATE TABLE `pizzas` (
  `pza_id` int(11) NOT NULL,
  `pza_baseprice` int(11) NOT NULL,
  `pza_totalprice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `receipts`
--

CREATE TABLE `receipts` (
  `rpt_id` int(11) NOT NULL,
  `odr_id` int(11) NOT NULL,
  `usr_id` bigint(20) UNSIGNED NOT NULL,
  `rpt_total` int(11) NOT NULL,
  `rpt_express` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `picture` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`, `picture`) VALUES
(6, 'Hiram A Castro', 'mrhiram1@gmail.com', NULL, '$2y$10$6qTnyGXj3JYLW2uAwmHoz.AUhhEms5OzNm7Mn9fZxysCHcA1BL9my', 'srqdFTqjgGjycJe8Ga1S9jRDVNHiHGqIqPInyaSHJbF2XBbp8fhy5kSHj0gv', '2019-06-15 10:00:46', '2019-06-15 10:11:01', NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `drinks`
--
ALTER TABLE `drinks`
  ADD PRIMARY KEY (`drk_id`);

--
-- Indices de la tabla `ingredients`
--
ALTER TABLE `ingredients`
  ADD PRIMARY KEY (`ing_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `order-drinks`
--
ALTER TABLE `order-drinks`
  ADD PRIMARY KEY (`odr_id`,`drk_id`),
  ADD KEY `drk-id` (`drk_id`);

--
-- Indices de la tabla `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`odr_id`),
  ADD KEY `pza-id` (`pza_id`),
  ADD KEY `usr_id` (`usr_id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `pizza-ingredients`
--
ALTER TABLE `pizza-ingredients`
  ADD PRIMARY KEY (`pza_id`,`ing_id`),
  ADD KEY `ing-id` (`ing_id`);

--
-- Indices de la tabla `pizzas`
--
ALTER TABLE `pizzas`
  ADD PRIMARY KEY (`pza_id`);

--
-- Indices de la tabla `receipts`
--
ALTER TABLE `receipts`
  ADD PRIMARY KEY (`rpt_id`),
  ADD KEY `odr-id` (`odr_id`),
  ADD KEY `usr_id` (`usr_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `drinks`
--
ALTER TABLE `drinks`
  MODIFY `drk_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ingredients`
--
ALTER TABLE `ingredients`
  MODIFY `ing_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `orders`
--
ALTER TABLE `orders`
  MODIFY `odr_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pizzas`
--
ALTER TABLE `pizzas`
  MODIFY `pza_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `receipts`
--
ALTER TABLE `receipts`
  MODIFY `rpt_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `order-drinks`
--
ALTER TABLE `order-drinks`
  ADD CONSTRAINT `order-drinks_ibfk_1` FOREIGN KEY (`drk_id`) REFERENCES `drinks` (`drk_id`),
  ADD CONSTRAINT `order-drinks_ibfk_2` FOREIGN KEY (`odr_id`) REFERENCES `orders` (`odr_id`);

--
-- Filtros para la tabla `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`pza_id`) REFERENCES `pizzas` (`pza_id`),
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`usr_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `pizza-ingredients`
--
ALTER TABLE `pizza-ingredients`
  ADD CONSTRAINT `pizza-ingredients_ibfk_1` FOREIGN KEY (`ing_id`) REFERENCES `ingredients` (`ing_id`),
  ADD CONSTRAINT `pizza-ingredients_ibfk_2` FOREIGN KEY (`pza_id`) REFERENCES `pizzas` (`pza_id`);

--
-- Filtros para la tabla `receipts`
--
ALTER TABLE `receipts`
  ADD CONSTRAINT `receipts_ibfk_1` FOREIGN KEY (`odr_id`) REFERENCES `orders` (`odr_id`),
  ADD CONSTRAINT `receipts_ibfk_2` FOREIGN KEY (`usr_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
