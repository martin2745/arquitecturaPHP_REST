<?php

function validar_entrada_usuario(){

    include_once './Validation/Atributo/entidad_VALIDATION/usuario_VALIDATION_ATRIBUTO.php';
    
    $usuario_validacion = new usuario_VALIDATION_ATRIBUTO();

    switch(action){
        case 'insertar':
            $listaAtributos = array('usuario', 'contrasena', 'rol', 'dni', 'nombre', 'apellidos', 'fechaNacimiento', 'direccion', 'telefono', 'email');
            contruirLista($listaAtributos, $usuario_validacion);
            $usuario_validacion->validar_atributos_insertar();
            break;
        case 'editar':
            $listaAtributos = array('usuario', 'rol', 'nombre', 'apellidos', 'fechaNacimiento', 'direccion', 'telefono', 'email');
            contruirLista($listaAtributos, $usuario_validacion);
            $usuario_validacion->validar_atributos_editar();
            break;
        case 'editarContrasena':
            $listaAtributos = array('usuario', 'contrasena');
            contruirLista($listaAtributos, $usuario_validacion);
            $usuario_validacion->validar_atributos_editarContrasena();
            break;
        case 'borrar':
            $listaAtributos = array('usuario');
            contruirLista($listaAtributos, $usuario_validacion);
            $usuario_validacion->validar_atributos_borrado();
            break;
        case 'reactivar':
            $listaAtributos = array('usuario');
            contruirLista($listaAtributos, $usuario_validacion);
            $usuario_validacion->validar_atributos_reactivar();
            break;
        case 'buscar':
            $listaAtributos = array('usuario', 'contrasena', 'rol', 'dni', 'nombre', 'apellidos', 'fechaNacimiento', 'direccion', 'telefono', 'email', 'borrado_logico');
            contruirLista($listaAtributos, $usuario_validacion);
            $usuario_validacion->validar_atributos_buscar();
            break;
        case 'buscarPerfil':
            $listaAtributos = array('usuario', 'contrasena', 'rol', 'dni', 'nombre', 'apellidos', 'fechaNacimiento', 'direccion', 'telefono', 'email', 'borrado_logico');
            contruirLista($listaAtributos, $usuario_validacion);
            $usuario_validacion->validar_atributos_buscar();
            break;
        case 'verEnDetalle':
            $listaAtributos = array('usuario');
            contruirLista($listaAtributos, $usuario_validacion);
            $usuario_validacion->validar_atributos_verEnDetalle();
            break; 
    }
}
?>