<?php

////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////MAPPINGBASE////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////
	//Codigos MappingBase
	define('CONEXION_BD_KO', 'Error al conectar con la base de datos. Contacte con su administrador.');
	define('SQL_KO', 'Error al ejecutar el sql.');
	define('RECORDSET_VACIO', 'El recordset esta vacio.');
	define('RECORDSET_DATOS', 'El recordset no esta vacio.');

////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////apiRest.php////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////
	//Excepciones de apiRest.php
	define('PETICION_INVALIDA', 'Petición invalida.');
	define('ACCION_NO_ENCONTRADA', 'Acción no encontrada.');
	define('ACCION_DENEGADA_TEST', 'Solo el administrador tiene permitido ejecutar el test.');

////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////JWT////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////
	
////decode
	define('TOKEN_CLAVE_VACIA', 'Error de sesion, desconectese del sistema. La clave esté vacía.');
	define('TOKEN_NUMERO_INCORRECTO_SEGMENTOS', 'Error de sesion, desconectese del sistema. Número incorrecto de segmentos que forman el token.');
	define('TOKEN_HEADER_NO_VALIDO', 'Error de sesion, desconectese del sistema. Codificación de encabezado del token JWT no válida.');
	define('TOKEN_PAYLOAD_NO_VALIDO', 'Error de sesion, desconectese del sistema. Codificación de privilegios del token JWT no válida.');
	define('TOKEN_SIGN_NO_VALIDO', 'Error de sesion, desconectese del sistema. Codificación de firma de token JWT no válida.');
	define('TOKEN_FALLO_VERIFICACION_SIGN', 'Error de sesion, desconectese del sistema. Verificación de firma fallida.');
	define('TOKEN_TOKEN_USO_FUTURO', 'Error de sesion, desconectese del sistema. El token se ha creado en un momento posterior al actual, esto significa que se ha creado para uso futuro.');
	define('TOKEN_CADUCADO', 'Error de sesion, desconectese del sistema. El token del sistema está caducado.');

	define('TOKEN_MAXIMUN_STACK_DEPTH_EXCEEDED', 'Error de sesion, desconectese del sistema. Se superó la profundidad máxima de pila.');
	define('TOKEN_INVALID_OR_MALFORMED_JSON', 'Error de sesion, desconectese del sistema. JSON inválido o mal formado.');
	define('TOKEN_UNEXPECTED_CONTROL_CHARACTER_FOUND', 'Error de sesion, desconectese del sistema. Se encontró un carácter de control inesperado.');
	define('TOKEN_SYNTAX_ERROR_MALFORMED_JSON', 'Error de sesion, desconectese del sistema. Error de sintaxis, JSON mal formado.');
	define('TOKEN_MALFORMED_UTF8_CHARACTERS', 'Error de sesion, desconectese del sistema. Caracteres UTF-8 con formato incorrecto.');
	define('TOKEN_NULL_RESULT_WITH_NON_NULL_INPUT', 'Error de sesion, desconectese del sistema. Resultado nulo con entrada no nula.');
	define('TOKEN_ERROR_TOKEN_INTRODUCIDO', 'Error de sesion, desconectese del sistema. Error del token introducido.');

////encode->sign
	//Solo se recogen como códigos las excepciones para el JWT con el algoritmo y los casos para lo que lo hemos definido
	define('TOKEN_ALGORITMO_NO_SOPORTADO', 'Error de sesion, desconectese del sistema. El algoritmo seleccionado no está soportado.');
	define('TOKEN_FALLO_FIRMA_OPENSSL', 'Error de sesion, desconectese del sistema. OpenSSL no puede firmar datos.');

////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////ATRIBUTO//////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////

//////auth_VALIDATION_ATRIBUTO
	//usuario
	define('LOGIN_USUARIO_VACIO', 'El login de usuario es vacio.');
	define('LOGIN_USUARIO_MENOR_QUE_3', 'El tamaño del nombre de usuario no puede ser menor que 3.');
	define('LOGIN_USUARIO_MAYOR_QUE_15', 'El tamaño del nombre de usuario no puede ser mayor que 15.');
	define('LOGIN_USUARIO_ALFANUMERICO_INCORRECTO', 'El nombre de usuario no puede contener más que letras y números, no se aceptan caracteres en blanco, ñ, acentos o carcateres especiales.');

	//contrasena
	define('CONTRASEÑA_USUARIO_VACIA', 'La contraseña no puede ser vacia.');
	define('CONTRASEÑA_USUARIO_LONGITUD_INCORRECTA', 'Seguridad de la password comprometida. Longitud de password incorrecta.');
	define('CONTRASEÑA_USUARIO_ALFANUMERICO_INCORRECTO', 'La contraseña de usuario no puede contener más que letras y números, no se aceptan caracteres en blanco, ñ, acentos o carcateres especiales.'); 

	//rol_name
	define('ROL_NAME_VACIO', 'El nombre del rol está vacio.');
	define('ROL_NAME_MENOR_QUE_3', 'El nombre del rol es menor de 3.');
	define('ROL_NAME_MAYOR_QUE_45', 'El nombre del rol es mayor de 45.');
	define('ROL_NAME_FORMATO_INCORRECTO', 'El nombre del rol tiene un formato erroneo, solo letras y números.');

	//dni
	define('DNI_VACIO', 'El DNI es vacio.');
	define('DNI_MENOR_QUE_9', 'El DNI no puede tener menos de 9 caracteres.');
	define('DNI_MAYOR_QUE_9', 'El DNI no puede tener mayor de 9 caracteres.');
	define('DNI_FORMATO_INCORRECTO', 'El formato del DNI es incorrecto, deben ser 8 números y una letra.');
	define('DNI_LETRA_INCORRECTA', 'La letra introducida en el DNI no es la correcta.');

	//nombre
	define('NOMBRE_VACIO', 'El nombre no puede ser vacio.');
	define('NOMBRE_FORMATO_INCORRECTO', 'El nombre del usuario no puede contener más que letras.');	
	define('NOMBRE_MENOR_QUE_3', 'El nombre del usuario no puede se menor que 3.');
	define('NOMBRE_MAYOR_QUE_45', 'El nombre del usuario no puede ser mayor que 45.');	

	//apellidos
	define('APELLIDOS_VACIO', 'Los apellidos no pueden ser vacios.');
	define('APELLIDOS_FORMATO_INCORRECTO', 'Los apellidos del usuario no pueden contener más que letras.');
	define('APELLIDOS_MENOR_QUE_3', 'Los apellidos del usuario no pueden se menores que 3.');	
	define('APELLIDOS_MAYOR_QUE_45', 'Los apellidos del usuario no pueden ser mayores que 45.');	

	//fechaNacimiento
	define('FECHA_NACIMIENTO_VACIA', 'La fecha no puede ser vacia.');
	define('FECHA_NACIMIENTO_FORMATO_INCORRECTO', 'El formato de la fecha no es correcto: aaaa-mm-dd.');
	define('FECHA_NACIMIENTO_SOLO_NUMEROS_Y_GUIONES', 'La fecha solo puede contener números y -.');
	define('FECHA_NACIMIENTO_MENOR_QUE_10', 'La fecha de nacimiento no puede ser menor que 10 dígitos.');
	define('FECHA_NACIMIENTO_MAYOR_QUE_10', 'La fecha de nacimiento no puede ser mayor que 10 dígitos.');
	define('FECHA_NACIMIENTO_IMPOSIBLE', 'La fecha de nacimiento no puede ser mayor a la fecha actual.');

	//direccion
	define('DIRECCION_VACIA', 'La longitud de la direccion no debe ser vacia.');
	define('DIRECCION_FORMATO_INCORRECTO', 'La direccion solo debe contener letras, números º y ª.');
	define('DIRECCION_MENOR_5', 'La longitud de la direccion no debe ser manor de 5 caracteres.');
	define('DIRECCION_MAYOR_200', 'La longitud de la direccion no debe ser mayor de 200 caracteres.');

	//telefono
	define('TELEFONO_VACIO', 'El número de teléfono no puede ser vacio.');
	define('TELEFONO_FORMATO_INCORRECTO', 'El formato del teléfono no es el correcto, deben ser 9 números.');
	define('TELEFONO_MENOR_QUE_9', 'El tamaño del número de teléfono no puede ser menor que 9.');
	define('TELEFONO_MAYOR_QUE_9', 'El tamaño del número de teléfono no puede ser mayor que 9.');

	//email
	define('EMAIL_VACIO', 'El email no puede ser vacío.');
	define('EMAIL_LONGITUD_MINIMA', 'El email debe tener por lo menos 6 caracteres.');
	define('EMAIL_LONGITUD_MAXIMA', 'El email debe tener menos de 40 caracteres.');
	define('EMAIL_FORMATO_INCORRECTO', 'El formato del email no es correcto.');
	
//////usuario_VALIDATION_ATRIBUTO
	//Todos recogidos anteriormente en auth_VALIDATION_ATRIBUTO

	//borrado_logico_buscar
	define('BORRADO_LOGICO_DIFERENTE_0_1', 'El flag de borrado debe ser 0 o 1.');


////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////ACCION///////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////

////auth_VALIDATION_ACCION
	define('USUARIO_NO_EXISTE', 'El usuario no existe en el sistema.');
	define('CONTRASENA_INCORRECTO', 'La contraseña no es correcta.');
	define('USUARIO_ELIMINADO', 'El usuario está eliminado.');
	define('USUARIO_YA_EXISTE', 'Ya existe el usuario en el sistema.');
	define('EMAIL_YA_EXISTE', 'Ya existe un usuario con ese email.');
	define('EMAIL_NO_EXISTE', 'No existe el email.');
	define('USUARIO_EMAIL_NO_COINCIDEN', 'El usuario y el email no coinciden.');

////usuario_VALIDATION_ACCION
	//insertar
	define('USUARIO_ROL_NO_VALIDO', 'El usuario no puede darse de alta con ese rol.');
	define('ACCION_DENEGADA_INSERTAR_USUARIO', 'Solo el administrador puede insertar un nuevo usuario.');

	//editar
	define('EMAIL_USUARIO_YA_EXISTE', 'Ya existe un usuario con ese email.');
	define('ACCION_DENEGADA_EDITAR_USUARIO', 'Solo el administrador puede editar los datos de un usuario y un usuario los suyos propios.');

	//borrar
	define('ADMIN_NO_SE_PUEDE_BORRAR', 'No se puede borrar el administrador del sistema.');
	define('ACCION_DENEGADA_BORRAR_USUARIO', 'Solo el administrador puede eliminar un usuario.');

	//reactivar
	define('USUARIO_YA_ACTIVO', 'No se puede reactivar un usuario ya activo.');
	define('ACCION_DENEGADA_REACTIVAR_USUARIO', 'Solo el administrador puede reactivar el usuario.');

	//buscar
	
	//verEnDetalle

////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////CONTROLLER/////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////

////auth_CONTROLLER
	define('LOGIN_USUARIO_OK', 'Usuario logueado correctamente.');
	define('REGISTRAR_USUARIO_OK', 'Usuario registrado correctamente.');
	define('RECUPERAR_CONTRASENA_EMAIL_OK', 'La contraseña ha sido cambiada, revise su correo.');

////usuario_CONTROLLER
	define('USUARIO_INSERTAR_OK', 'Usuario insertado con éxito.');
	define('USUARIO_EDITAR_OK', 'Usuario editado con éxito.');
	define('USUARIO_EDITAR_CONTRASENA_OK', 'Contraseña editada con éxito.');
	define('USUARIO_BORRAR_OK', 'Usuario eliminado con éxito.');
	define('USUARIO_REACTIVAR_OK', 'Usuario reactivado con éxito.');

////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////CORREOS//////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////

//////correoGmail
	define('CONTRASENA_CAMBIADA_EMAIL_KO', 'La contraseña no se ha podido cambiar.');

////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////VALIDACIONES_LOGS/////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////

	define('MENSAJE_MAYOR_QUE_200', 'El mensaje de error no puede ser superior a 200 caracteres.');
	define('CODIGO_MAYOR_QUE_200', 'El código de error no puede ser superior a 200 caracteres.');
	define('MENSAJE_FORMATO_INCORRECTO', 'El mensaje de error presenta un formato incorrecto, solo se admiten letras y números.');
	define('CODIGO_FORMATO_INCORRECTO', 'El código de error presenta un formato incorrecto, solo se admiten letras y números.');
	define('TIEMPO_FORMATO_INCORRECTO', 'La fecha introducida no respeta el formato, deben de ser numeros, letras y espacios.');
	define('TIEMPO_MAYOR_QUE_200', 'La fecha debe de tener una longitud menos a 200 caracteres.');
	
?>