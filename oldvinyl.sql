-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-01-2025 a las 17:54:46
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `oldvinyl`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banda`
--

CREATE TABLE `banda` (
  `idBanda` int(11) NOT NULL,
  `nombreBanda` varchar(50) NOT NULL,
  `descripcionBanda` varchar(200) NOT NULL,
  `idGenero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `banda`
--

INSERT INTO `banda` (`idBanda`, `nombreBanda`, `descripcionBanda`, `idGenero`) VALUES
(1, 'Queen', 'Queen es una legendaria banda británica de rock formada en 1970, conocida por su sonido innovador, himnos como Bohemian Rhapsody y su carismático líder, Freddie Mercury.', 1),
(2, 'Guns N Roses', 'Guns N\' Roses es una icónica banda estadounidense de hard rock formada en 1985, famosa por éxitos como Sweet Child O\' Mine y November, Rain liderada por Axl Rose y Slash.', 1),
(3, 'U2', 'U2 es una influyente banda irlandesa de rock formada en 1976, reconocida por su sonido único, letras profundas, éxitos como With or Without You y el carismático liderazgo de Bono.', 1),
(4, 'Madonna', 'Madonna es una icónica cantante, actriz y empresaria estadounidense, conocida como la Reina del Pop, destaca por éxitos como Like a Virgin y su constante reinvención artística.', 2),
(5, 'Spandau Ballet', 'Spandau Ballet es una banda británica de new wave y synth-pop formada en los años 80, conocida por su estilo sofisticado y éxitos como True y Gold', 2),
(6, 'Kate Bush', 'Kate Bush es una innovadora cantante y compositora británica, conocida por su voz única, letras poéticas y éxitos como Wuthering Heigths y Running Up That Hill', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generos`
--

CREATE TABLE `generos` (
  `idGenero` int(11) NOT NULL,
  `nombreGenero` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `generos`
--

INSERT INTO `generos` (`idGenero`, `nombreGenero`) VALUES
(1, 'Rock'),
(2, 'Pop'),
(3, 'Hip-Hop'),
(4, 'Funk');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vinilos`
--

CREATE TABLE `vinilos` (
  `idVinilo` int(11) NOT NULL,
  `tituloVinilo` varchar(50) NOT NULL,
  `descripcionVinilo` varchar(200) NOT NULL,
  `precioVinilo` float NOT NULL,
  `imagenVinilo` varchar(50) NOT NULL,
  `visible` varchar(10) NOT NULL,
  `idBanda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `vinilos`
--

INSERT INTO `vinilos` (`idVinilo`, `tituloVinilo`, `descripcionVinilo`, `precioVinilo`, `imagenVinilo`, `visible`, `idBanda`) VALUES
(1, 'Queen 2', 'Queen II (1974) es un álbum conceptual dividido en \"Lado Blanco\" y \"Lado Negro\". Combina rock progresivo y fantasía con temas épicos como \"Ogre Battle\" y \"The March of the Black Queen\".', 99.95, '../img/Queen2.png', 'True', 1),
(2, 'Appetite for Destruction', 'Appetite for Destruction (1987) es el debut de Guns N\' Roses, cargado de hard rock y actitud rebelde. Incluye clásicos como \"Sweet Child O\' Mine\" y \"Welcome to the Jungle\".', 79.95, '../img/AppetiteForDestruction.png', 'True', 2),
(3, 'The Joshua Tree', 'The Joshua Tree (1987) es el icónico álbum de U2, inspirado en paisajes y espiritualidad. Mezcla rock y melodías emotivas con éxitos como \"With or Without You\" y \"Where the Streets Have No Name\".', 79.95, '../img/TheJoshuaTree.png', 'True', 3),
(4, 'Like  Prayer', 'Like a Prayer (1989) es un álbum icónico de Madonna, combinando pop y temas introspectivos. Incluye éxitos como \"Like a Prayer\" y \"Express Yourself\", marcando su madurez artística.', 109.95, '../img/LikeAPrayer.png', 'True', 4),
(5, 'True', 'True (1983) es el álbum más emblemático de Spandau Ballet, mezclando pop y soul elegante. Destaca por el éxito mundial \"True\" y temas como \"Gold\", redefiniendo el sonido romántico de los 80.', 199.95, '../img/True.png', 'True', 5),
(7, 'Parade', 'Parade (1984) es el cuarto álbum de Spandau Ballet, con un sonido más maduro y experimental. Incluye éxitos como \"Only When You Leave\" y \"I Know This Much Is True\", fusionando pop, new wave y sofistic', 129.95, '../img/imgParade.png', 'True', 5),
(8, 'Use Your Illusion', ' Use Your Illusion I (1991) de Guns N\' Roses es un álbum doble que incluye éxitos como \"November Rain\", \"Don\'t Cry\" y \"Live and Let Die\". Es una mezcla épica de rock y baladas.', 105.95, '../img/useYourIllusion.jpg', 'True', 2),
(9, 'The Dreaming', 'The Dreaming (1982) de Kate Bush es un álbum experimental y teatral, lleno de sonidos innovadores, letras narrativas y emotivas. Explora temas oscuros y mágicos con su inigualable creatividad.', 49.95, '../img/theDreaming.jpg', 'True', 6);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `banda`
--
ALTER TABLE `banda`
  ADD PRIMARY KEY (`idBanda`),
  ADD KEY `idGenero` (`idGenero`);

--
-- Indices de la tabla `generos`
--
ALTER TABLE `generos`
  ADD PRIMARY KEY (`idGenero`);

--
-- Indices de la tabla `vinilos`
--
ALTER TABLE `vinilos`
  ADD PRIMARY KEY (`idVinilo`),
  ADD KEY `idBanda` (`idBanda`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `banda`
--
ALTER TABLE `banda`
  MODIFY `idBanda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `generos`
--
ALTER TABLE `generos`
  MODIFY `idGenero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `vinilos`
--
ALTER TABLE `vinilos`
  MODIFY `idVinilo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `banda`
--
ALTER TABLE `banda`
  ADD CONSTRAINT `banda_ibfk_1` FOREIGN KEY (`idGenero`) REFERENCES `generos` (`idGenero`);

--
-- Filtros para la tabla `vinilos`
--
ALTER TABLE `vinilos`
  ADD CONSTRAINT `vinilos_ibfk_1` FOREIGN KEY (`idBanda`) REFERENCES `banda` (`idBanda`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
