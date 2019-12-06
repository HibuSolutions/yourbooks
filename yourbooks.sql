-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-12-2019 a las 07:01:29
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `yourbooks`
--
CREATE DATABASE IF NOT EXISTS `yourbooks` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `yourbooks`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estado` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `img`, `estado`, `created_at`, `updated_at`) VALUES
(1, 'electronica', 'categorias/GjJ9PSWc3KtmuvG5GauO0dobUKZsjUIty9cZMkn4.png', 0, '2019-12-06 14:28:23', '2019-12-06 14:48:08'),
(2, 'Misterio', 'categorias/pdnYXvK6fuCW93JHkd7YbJtETw6rM1W5Iq9RIIrY.png', 0, '2019-12-06 14:48:31', '2019-12-06 14:48:31'),
(3, 'DesarrolloWeb', 'categorias/8S3SOecg2PPAAhYgp8hZE5eCPNjUlDXBKnJ4sSyo.png', 0, '2019-12-06 14:49:07', '2019-12-06 14:49:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos`
--

CREATE TABLE `contactos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fb` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `in` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `yt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `txt1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `txt2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `contactos`
--

INSERT INTO `contactos` (`id`, `fb`, `in`, `yt`, `img`, `txt1`, `txt2`, `created_at`, `updated_at`) VALUES
(1, 'aqui tu facebook', 'aqui tu instagram', 'aqui tu canal de yt', 'contacto/captura.jpg', 'Hola bienvenido a yourbooks', 'ayudame siguiendome en mis redes sociales te lo agradecere', '2019-12-06 09:56:43', '2019-12-06 09:56:43');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `intros`
--

CREATE TABLE `intros` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `txt1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `txt2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `intros`
--

INSERT INTO `intros` (`id`, `txt1`, `txt2`, `created_at`, `updated_at`) VALUES
(1, 'Hola bienvenido a yourbooks', 'la mejor comunidad de libros pdf', '2019-12-06 09:56:43', '2019-12-06 10:03:58');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titulo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `archivo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estado` tinyint(1) NOT NULL DEFAULT 0,
  `categoria_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`id`, `titulo`, `img`, `descripcion`, `archivo`, `estado`, `categoria_id`, `created_at`, `updated_at`) VALUES
(5, 'electronica', 'portadas/POUIsxCjnNYpIi8NAFisAgMJkDsWwcJq3LJd86sX.jpeg', 'electronica', 'libros/SYJmO7A1sh190pioeOGVx4bLaMkXeoMOHfmRKihE.pdf', 0, 1, '2019-12-06 14:47:17', '2019-12-06 14:47:17'),
(6, 'vender tu alma', 'portadas/isQFMHL0xot7bE9P4wbhW6lzniEyyIkDnVUqw4eO.jpeg', 'vender tu alma', 'libros/CpJZrvvll7rfQ8xN2gj5AB02fVIid2GYSA5yyxHX.pdf', 0, 2, '2019-12-06 14:49:48', '2019-12-06 14:49:48'),
(7, 'HTML5', 'portadas/Ng6zvo9xfMHGgw9tD2CB8kxvvXjw06SPykPLjGn1.png', 'HTML5', 'libros/mTg0dt9a9pTcIhzzFrsLhKXjFKcRvV70xmCENqSJ.pdf', 0, 3, '2019-12-06 14:52:45', '2019-12-06 14:52:45');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_11_29_210309_create_categorias_table', 1),
(4, '2019_11_29_214556_create_libros_table', 1),
(5, '2019_12_03_235438_create_contactos_table', 1),
(6, '2019_12_05_033839_create_permission_tables', 1),
(7, '2019_12_06_005314_create_intros_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\User', 1),
(3, 'App\\User', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'editarLibro', 'web', '2019-12-06 09:56:42', '2019-12-06 09:56:42'),
(2, 'agregarLibro', 'web', '2019-12-06 09:56:42', '2019-12-06 09:56:42'),
(3, 'eliminarLibro', 'web', '2019-12-06 09:56:42', '2019-12-06 09:56:42'),
(4, 'listarLibro', 'web', '2019-12-06 09:56:42', '2019-12-06 09:56:42'),
(5, 'editarUsuario', 'web', '2019-12-06 09:56:42', '2019-12-06 09:56:42'),
(6, 'agregarUsuario', 'web', '2019-12-06 09:56:42', '2019-12-06 09:56:42'),
(7, 'eliminarUsuario', 'web', '2019-12-06 09:56:42', '2019-12-06 09:56:42'),
(8, 'listarUsuario', 'web', '2019-12-06 09:56:42', '2019-12-06 09:56:42'),
(9, 'editarCategoria', 'web', '2019-12-06 09:56:42', '2019-12-06 09:56:42'),
(10, 'agregarCategoria', 'web', '2019-12-06 09:56:42', '2019-12-06 09:56:42'),
(11, 'eliminarCategoria', 'web', '2019-12-06 09:56:42', '2019-12-06 09:56:42'),
(12, 'listarCategoria', 'web', '2019-12-06 09:56:42', '2019-12-06 09:56:42'),
(13, 'general', 'web', '2019-12-06 09:56:42', '2019-12-06 09:56:42'),
(14, 'cliente', 'web', '2019-12-06 09:56:42', '2019-12-06 09:56:42');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'administrador', 'web', '2019-12-06 09:56:42', '2019-12-06 09:56:42'),
(2, 'cliente', 'web', '2019-12-06 09:56:42', '2019-12-06 09:56:42'),
(3, 'moderador', 'web', '2019-12-06 09:56:43', '2019-12-06 09:56:43');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 3),
(2, 1),
(2, 3),
(3, 1),
(3, 3),
(4, 1),
(4, 3),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(9, 3),
(10, 1),
(10, 3),
(11, 1),
(11, 3),
(12, 1),
(12, 3),
(13, 1),
(13, 3),
(14, 1),
(14, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `pass`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'administrador', 'admin@yourbooks.com', '$2y$10$2gMyHlipVAn8EEwmC1NmB.HrqHHchzCZoIESINfpiIqxVq2IZ3ZHy', '2020', NULL, '2019-12-06 09:56:43', '2019-12-06 09:56:43'),
(2, 'moderador', 'moderador@yourbooks.com', '$2y$10$5iud2kH3UhCwX3lBBjLKG.d31lboeniJLACy8GOPujF6nUXKT3qOe', '2020', NULL, '2019-12-06 09:56:43', '2019-12-06 09:56:43');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `intros`
--
ALTER TABLE `intros`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`id`),
  ADD KEY `libros_categoria_id_foreign` (`categoria_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indices de la tabla `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

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
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `contactos`
--
ALTER TABLE `contactos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `intros`
--
ALTER TABLE `intros`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `libros`
--
ALTER TABLE `libros`
  ADD CONSTRAINT `libros_categoria_id_foreign` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`);

--
-- Filtros para la tabla `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
