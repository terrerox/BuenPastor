-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-05-2020 a las 21:18:19
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
-- Base de datos: `buen_pastor`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(200) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `correo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mensaje` varchar(400) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id`, `nombre`, `apellido`, `telefono`, `direccion`, `correo`, `mensaje`) VALUES
(1, 'Francis', 'Terrero', '829-458-3753', 'Ensanchez Isabelita calle #6 portÃ³n #125', 'terrero06@gmail.com', 'AprendÃ­ mucho gracias a esta fundaciÃ³n'),
(2, 'Francis', 'Terrero', '829-458-4567', 'Ensanchez Isabelita', 'terrero06@gmail.com', 'Son vacanisimo\r\n'),
(3, 'Francis', 'pok', '234234234', 'Mi casa', 'joan@gmail.com', 'klk'),
(4, 'Joan', 'Lopez', '829-290-2902', 'lo mina', 'marcos@gmail.com', 'klk'),
(5, 'dddddddd', 'ddddd', 'dddddddd', 'dddd@ddddd', 'terrero06@gmail.com', 'ded'),
(6, 'dd', 'a', '(829) 234 2345', '21', 'joan@gmail.com', '32'),
(7, 'Lexther', 'PeÃ±a', '', 'calle 10', 'lexther09@gmail.com', 'una pagina muy buena');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `correo` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `curso` enum('Secretaria','AuxFarmacia','Maquillaje','RepCelulares','Estilista','UñasAcrilicas','AuxEnfermeria','Contabilidad','CajeroCom','Corte/Peinado','Masajista','Decoracion','ReparacionPc','Informatica','Barberia','Colchas') COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `telefono_celular` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `telefono_residencial` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `telefono_trabajo` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `sector` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `municipio` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `provincia` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `imagen` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `correo`, `password`, `curso`, `direccion`, `telefono_celular`, `telefono_residencial`, `telefono_trabajo`, `sector`, `municipio`, `provincia`, `imagen`) VALUES
(6, ' Francis', '      Lopez', 'terrero06@gmail.com', '$2y$10$VTWFenyK.g/G/Jau9IdlkOJx02tsTIVQOTk93C/4YE/y4pFe3M86a', 'Secretaria', 'Isabelita', '(829) 458 5555', '(809) 388 5235', '(809) 321 3456', 'Distrito Nacional', 'Santo Domingo', 'Santo Domingo', '1576509154 pp.jpg'),
(9, '      Joan', '      Rosa', 'joan@gmail.com', '$2y$10$qL.QHkhMrhGLrTrWvEO5uuiEltw..SpZW3kFSMwf3ZrwsRBjIQWgW', 'Decoracion', 'Isabelita', '(829) 458 3753', '(809) 388 5235', '(809) 321 3456', 'Distrito Nacional', 'Santo Domingo', 'Santo Domingo', '1581617586 pp.jpg'),
(10, '     Marcos', '     Lopez', 'marcos@gmail.com', '$2y$10$IXfZAFmU15SRZJEBsJWuG.wuaIHlQ1i6Hv0CYy4K4A0ZUhPYNKshq', 'Secretaria', 'dsfg', '(343) 343 3434', '(343) 343 3434', '(343) 343 3434', 'fgf', 'fgf', 'fgf', '1578795601 pp.jpg'),
(11, ' Luis', ' Terrero', 'lopez@gmail.com', '$2y$10$BjSaMlcdhFJJePMXBTUYLOCZlFmCWDrV.jcr6OVqSfewQ2p1wgepy', 'AuxFarmacia', 'Isabelita', '(829) 458 3753', '(809) 388 5235', '(809) 321 3456', 'Distrito Nacional', 'Santo Domingo', 'Santo Domingo', '1576467936 pp.jpg'),
(12, 'Juan', 'Rosa', 'lol@gmail.com', '$2y$10$XTw/xeqT70aGOA.T05DBxedk.NJtjVuiKsq8CG8oJJzLLSOGGsCxu', 'Contabilidad', '', '', '', '', '', '', '', ''),
(13, 'Maria', 'Tumai', 'maria@gmail.com', '$2y$10$EVuFww4.3HwnN7eNCTU4Zu9y9As11RbGEt6aElbykB1.6rh4DXHNK', 'AuxEnfermeria', '', '', '', '', '', '', '', ''),
(14, 'Josefina', 'Loaiza', 'jofe@gmail.com', '$2y$10$tS/bXCJ93/hwc1y84G556uOMgfZvxHIdndorIWmOTi9veQ9ZE6/mm', 'CajeroCom', '', '', '', '', '', '', '', ''),
(15, '  woe', ' Lopez', 'klk@gmail.com', '$2y$10$LNaJKwhj8jEGkVGsRjP5KuLebAb5Y0/ZqDkKZ5vlYf9e5Rq10YOAu', 'ReparacionPc', 'dsfg', '(829) 458 3753', '(809) 388 5235', '(809) 321 3456', 'Distrito Nacional', 'Santo Domingo', 'Santo Domingo', '1576469459 pp.jpg'),
(16, 'Jose', 'klk', 'jose@gmail.com', '$2y$10$5Sv7ouJdcZlRUUGY8Kqs8.txKB/X8ahkCiSlcEbebKe.xB7ISrj6y', 'Maquillaje', '', '', '', '', '', '', '', ''),
(17, 'kamil', 'adame', 'kamil@gmail.com', '$2y$10$ihfSxP5RQaUz.A1pb105DuydjVU9OUjblJlcMN87aCeaG.U8SicOC', 'Secretaria', '', '', '', '', '', '', '', ''),
(18, 'lisandra', 'duvernay', 'lisandra@gmail.com', '$2y$10$y6UPxwJhx9mteEU7cj8qDOuPH2o/sdUl.gW9xf08xwmCa3cKAvIFe', 'AuxEnfermeria', '', '', '', '', '', '', '', ''),
(19, 'emanuel', 'feliz', 'emanuelfeliz@gmail.com', '$2y$10$olMO8Sn9PFFHJDM1hphfTOdu.erZFrIsmU/CuCwmyd2YDdRWi4E3y', 'Contabilidad', '', '', '', '', '', '', '', ''),
(20, 'Francis', 'Terrero', 'leslie@gmail.com', '$2y$10$x5IWUF3pUQeiyc5vMT68RukcsF28ua4CEnfNVbZvUOTUHlF96J4tW', 'AuxFarmacia', '', '', '', '', '', '', '', ''),
(21, '   gian', '   carlos', 'carlos@gmail.com', '$2y$10$cRiw9g9/B8UX40CawC4uGOKvQrz362Yrnf9J2V.unlVM5JjZl2z.W', 'AuxEnfermeria', 'Isabelita', '(829) 458 3753', '(809) 388 5235', '(809) 321 3456', 'Distrito Nacional', 'Santo Domingo', 'Santo Domingo', '1578627716 pp.jpg'),
(22, 'joniel', 'klk', 'joniel@gmail.com', '$2y$10$8ipLvWVuk.SqlklE59WkreW642mcYSxLKm/K38x58Cge2gvRQgmES', 'Corte/Peinado', '', '', '', '', '', '', '', ''),
(23, 'manolo', 'klk', 'manolo@gmail.com', '$2y$10$QasOLfyhiJALims0B0EdlebbvIaFgpKJs0vl9htXHh4trvMJqqdZ2', 'AuxFarmacia', '', '', '', '', '', '', '', ''),
(24, 'Yomar', 'Baez', 'yomi1@gmail.com', '$2y$10$Ynjlyh882aVaM2EN7sKE8.x/KbUZ2PG9B.O3J5w9wwFnuRCn1SPJS', 'Secretaria', '', '', '', '', '', '', '', ''),
(25, 'wilmer', 'salazar', 'wil@gmail.com', '$2y$10$rpvY./n7iAuci6pPEGptme.MRyhatLG7BNu8ZXvoLB7qEZs.6RVuS', 'Informatica', '', '', '', '', '', '', '', ''),
(26, 'popo', 'popo', 'popo@gmail.com', '$2y$10$GnSZO9Kfrh2TKkD2YT.XJe0SL7S.08Mmm6FH6jF1PA0zmwrNfTTpK', 'Decoracion', '', '', '', '', '', '', '', ''),
(27, 'Francis', 'Terrero', 'mmg@gmail.com', '$2y$10$0QFcgP9.JXH8clfJfz2Va.bWsPtkK.kjIIIK3FJMT6aL4Sywo35V.', 'Decoracion', '', '', '', '', '', '', '', ''),
(28, ' CRISTOBAL', ' PEÃ‘A', 'CCOLON@GMAIL.COM', '$2y$10$evJ6O4.Mnf/lkEsP1bAfU.oBY/D0g3V7wtOpsX40ufMNWY6rJKl3q', 'AuxEnfermeria', 'AV. SEGUNDA', '(829) 438 3756', '(845) 987 4688', '(786) 489 5980', 'QUIZQUEYA', 'SANIAGO', 'REP DOM', '1581102423 pp.jpg'),
(29, 'manolito', 'lol', 'mano@gmail.com', '$2y$10$HHu8CXeOtacCnBB9KS67n.HBziOQEUEqMldBTO/zXS4jg7nnVpoLm', 'AuxEnfermeria', '', '', '', '', '', '', '', ''),
(30, 'sld', 'xxs', 'al@gmail.com', '$2y$10$2RA1oziZ1NEnWhKrv1nHreNoRoB9aYOEjjjYUXtsmugO56MGiONnm', 'ReparacionPc', '', '', '', '', '', '', '', ''),
(31, 'dwqd', 'qdqwdw', 'we@gmail.com', '$2y$10$LZdYPIM50ZxmZZd/Hvd9WeHiqzWKjOhlRoVYKCA2.GsaVoFBJfcdy', 'Informatica', '', '', '', '', '', '', '', ''),
(32, 'manolo', 'lol', 'equi@gmail.com', '$2y$10$EAHYtsKxEQoJdwIO/rm4duDfiRhLJ3Xh/IlazSbmj7nkE7g1nW3u.', 'Secretaria', '', '', '', '', '', '', '', ''),
(33, 'klk', 'olo', 'hge@gmail.com', '$2y$10$lysbk9MwkX2JDmvklMk2g.uLL0FpmUi2XwVP5JQikoLLZNQk/SR52', 'Secretaria', '', '', '', '', '', '', '', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
