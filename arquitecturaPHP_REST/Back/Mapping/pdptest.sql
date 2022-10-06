
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
/*GRANT ALL PRIVILEGES ON `pdptest`.* TO `pdp`@`localhost` WITH GRANT OPTION;*/
GRANT ALL ON *.* TO 'pdp'@'localhost';
FLUSH PRIVILEGES;
/*CREACIÓN DE TABLAS*/
DROP DATABASE IF EXISTS `pdptest`;
CREATE DATABASE `pdptest` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
--
-- SELECCIONAMOS PARA USAR
--
USE `pdptest`;

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
("usuarioDelete", "21232f297a57a5a743894a0e4a801fc3", "responsable", "58551442C", "responsable", "responsable responsable", "2020-05-01", "Rúa 12, Parcela 5, 6, 32901, Ourense", "666666666", "responsable@responsable.com", 1),
("usuarioCorreo", "21232f297a57a5a743894a0e4a801fc3", "responsable", "85537205K", "responsable", "responsable responsable", "2020-05-01", "Rúa 12, Parcela 5, 6, 32901, Ourense", "666666666", "usuarioCorreo@gmail.com", 0),
("usuarioTest", "21232f297a57a5a743894a0e4a801fc3", "responsable", "10147483K", "responsable", "responsable responsable", "2020-05-01", "Rúa 12, Parcela 5, 6, 32901, Ourense", "666666666", "usuarioTest@gmail.com", 0);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuario`);
