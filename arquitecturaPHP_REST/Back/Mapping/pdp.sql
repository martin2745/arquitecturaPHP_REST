
--
-- DAMOS PERMISO USO Y BORRAMOS EL USUARIO QUE QUEREMOS CREAR POR SI EXISTE
--
GRANT USAGE ON * . * TO `pdp`@`localhost`;
DROP USER `pdp`@`localhost`;



--
-- CREAMOS EL USUARIO Y LE DAMOS PASSWORD,DAMOS PERMISO DE USO Y DAMOS PERMISOS SOBRE LA BASE DE DATOS.
--
CREATE USER IF NOT EXISTS `pdp`@`localhost` IDENTIFIED BY 'pdp';
/*GRANT USAGE ON *.* TO `pdp`@`localhost` REQUIRE NONE WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;*/
/*GRANT ALL PRIVILEGES ON `pdp`.* TO `pdp`@`localhost` WITH GRANT OPTION;*/
GRANT ALL ON *.* TO 'pdp'@'localhost';
FLUSH PRIVILEGES;
/*CREACIÓN DE TABLAS*/
DROP DATABASE IF EXISTS `pdp`;
CREATE DATABASE `pdp` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
--
-- SELECCIONAMOS PARA USAR
--
USE `pdp`;
--
-- Estructura de tabla para la tabla `logexcepcionaccion`
--

CREATE TABLE IF NOT EXISTS logexcepcionaccion (
  usuario varchar(15) NOT NULL,
  funcionalidad varchar(200) NOT NULL,
  accion varchar(200) NOT NULL,
  codigo varchar(200) NOT NULL,
  mensaje varchar(200) NOT NULL,
  tiempo datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `logexcepcionaccion`
--

INSERT INTO logexcepcionaccion (usuario, funcionalidad, accion, codigo, mensaje, tiempo) VALUES
("admin", "usuario", "insertar", "USUARIO_YA_EXISTE", "Ya existe el usuario en el sistema.", "2022-10-05 14:14:32");

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logexcepcionatributo`
--

CREATE TABLE IF NOT EXISTS logexcepcionatributo (
  usuario varchar(15) NOT NULL,
  funcionalidad varchar(200) NOT NULL,
  accion varchar(200) NOT NULL,
  codigo varchar(200) NOT NULL,
  mensaje varchar(200) NOT NULL,
  tiempo varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `logexcepcionatributo`
--

INSERT INTO logexcepcionatributo (usuario, funcionalidad, accion, codigo, mensaje, tiempo) VALUES
("admin", "usuario", "insertar", "DNI_MENOR_QUE_9", "El DNI no puede tener menos de 9 caracteres.", "2022-10-05 14:27:07");

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS usuario (
  usuario varchar(15) NOT NULL,
  contrasena varchar(32) NOT NULL,
  rol varchar(45) NOT NULL,
  dni varchar(9) NOT NULL,
  nombre varchar(45) NOT NULL,
  apellidos varchar(45) NOT NULL,
  fechaNacimiento date NOT NULL,
  direccion varchar(200) NOT NULL,
  telefono varchar(9) NOT NULL,
  email varchar(40) NOT NULL,
  borrado_logico int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO usuario (usuario, contrasena, rol, dni, nombre, apellidos, fechaNacimiento, direccion, telefono, email, borrado_logico) VALUES
("admin", "21232f297a57a5a743894a0e4a801fc3", "administrador", "34888012W", "administrador", "administrador administrador", "2020-05-01", "Rúa 12, Parcela 5, 6, 32901, Ourense", "666666666", "admin@admin.com", 0),
("martin", "21232f297a57a5a743894a0e4a801fc3", "responsable", "34888012W", "martin", "gil blanco", "2020-05-01", "Rúa 12, Parcela 5, 6, 32901, Ourense", "666666666", "gilblancomartin@gmail.com", 0);


--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `logexcepcionaccion`
--
ALTER TABLE `logexcepcionaccion`
  ADD PRIMARY KEY (`usuario`,`tiempo`);

--
-- Indices de la tabla `logexcepcionatributo`
--
ALTER TABLE `logexcepcionatributo`
  ADD PRIMARY KEY (`usuario`,`tiempo`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuario`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `logexcepcionaccion`
--
ALTER TABLE `logexcepcionaccion`
  ADD CONSTRAINT `logexcepcionaccion_ibfk_1` FOREIGN KEY (`usuario`) REFERENCES `usuario` (`usuario`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `logexcepcionatributo`
--
ALTER TABLE `logexcepcionatributo`
  ADD CONSTRAINT `logexcepcionatributo_ibfk_1` FOREIGN KEY (`usuario`) REFERENCES `usuario` (`usuario`) ON UPDATE CASCADE;
COMMIT;