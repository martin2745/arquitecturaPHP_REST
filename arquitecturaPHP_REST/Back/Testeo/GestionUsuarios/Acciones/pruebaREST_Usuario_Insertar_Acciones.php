<?php

function pruebaREST_Usuario_Insertar_Acciones(){

	include_once './Testeo/pruebaREST_class.php';

	$pruebas = new testRest();

    $tipo = 'Acción';
	$vaciarPost = NULL;

//---------------------------------------------------------------------------------------------------------------------

	//login correcto
	$POST = $vaciarPost;
	$POST['controlador'] = 'auth';
	$POST['action'] = 'login';
	$POST['usuario'] = 'admin';
	$POST['contrasena'] = '21232f297a57a5a743894a0e4a801fc3';

	$pruebas->peticionLogin($POST);

//&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&
//&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&
												//INSERTAR
//&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&
//&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&

	//USUARIO_INSERTAR_OK
	$POST = $vaciarPost;
	$POST['controlador'] = 'usuario';
	$POST['action'] = 'insertar';
	$POST['usuario'] = 'usuarioTest2';
	$POST['contrasena'] = '21232f297a57a5a7f3894a0e4a801fc3';
	$POST['rol'] = 'responsable';
	$POST['dni'] = '85537205K';
	$POST['nombre'] = 'jose manuel';
	$POST['apellidos'] = 'gil';
	$POST['fechaNacimiento'] = '2021-12-06';
	$POST['direccion'] = 'salvador Dalí portal 10º piso 6º A';
	$POST['telefono'] = '654456654';
	$POST['email'] = 'usuario@hotmail.com';
	
	$prueba = 'Usuario insertado con éxito.';
	$codeEsperado = 'USUARIO_INSERTAR_OK';
	$pruebas->hacerPrueba($POST, $POST['controlador'], $POST['action'], $tipo, $prueba, $codeEsperado);

//&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&
												//ERRORES_ACCION
//&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&

	//USUARIO_YA_EXISTE
	$POST['usuario'] = 'usuarioTest2';

	$prueba = 'Ya existe el usuario en el sistema.';
	$codeEsperado = 'USUARIO_YA_EXISTE';
	$pruebas->hacerPrueba($POST, $POST['controlador'], $POST['action'], $tipo, $prueba, $codeEsperado);

//---------------------------------------------------------------------------------------------------------------------
	
	//USUARIO_ROL_NO_VALIDO
	$POST['usuario'] = 'usuarioTest3';
	$POST['rol'] = 'administrador';

	$prueba = 'El usuario no puede darse de alta con ese rol.';
	$codeEsperado = 'USUARIO_ROL_NO_VALIDO';
	$pruebas->hacerPrueba($POST, $POST['controlador'], $POST['action'], $tipo, $prueba, $codeEsperado);


//---------------------------------------------------------------------------------------------------------------------
	
	//login correcto
	$POST = $vaciarPost;
	$POST['controlador'] = 'auth';
	$POST['action'] = 'login';
	$POST['usuario'] = 'usuarioTest';
	$POST['contrasena'] = '21232f297a57a5a743894a0e4a801fc3';

	$pruebas->peticionLogin($POST);

	//ACCION_DENEGADA_INSERTAR_USUARIO
	$POST = $vaciarPost;
	$POST['controlador'] = 'usuario';
	$POST['action'] = 'insertar';
	$POST['usuario'] = 'usuarioTest3';
	$POST['contrasena'] = '21232f297a57a5a7f3894a0e4a801fc3';
	$POST['rol'] = 'responsable';
	$POST['dni'] = '85537205K';
	$POST['nombre'] = 'jose manuel';
	$POST['apellidos'] = 'gil';
	$POST['fechaNacimiento'] = '2021-12-06';
	$POST['direccion'] = 'salvador Dalí portal 10º piso 6º A';
	$POST['telefono'] = '654456654';
	$POST['email'] = 'usuario@hotmail.com';

	$prueba = 'Solo el administrador puede insertar un nuevo usuario.';
	$codeEsperado = 'ACCION_DENEGADA_INSERTAR_USUARIO';
	$pruebas->hacerPrueba($POST, $POST['controlador'], $POST['action'], $tipo, $prueba, $codeEsperado);

//-------------------------------------------------------------------------------------------------------------------

	//login correcto
	$POST = $vaciarPost;
	$POST['controlador'] = 'auth';
	$POST['action'] = 'login';
	$POST['usuario'] = 'admin';
	$POST['contrasena'] = '21232f297a57a5a743894a0e4a801fc3';

	$pruebas->peticionLogin($POST);

	//borrado usuario
	$POST = $vaciarPost;
	$POST['controlador'] = 'usuario';
	$POST['action'] = 'borrar';
	$POST['usuario'] = 'usuarioTest2';

	$pruebas->peticionCurlNoTest($POST);

//---------------------------------------------------------------------------------------------------------------------

    $pruebas->desconectarCurl($pruebas->cliente);

    return $pruebas->resultadoTest;

}
?>