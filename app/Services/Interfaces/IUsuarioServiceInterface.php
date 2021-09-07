<?php

namespace App\Services\Interfaces;


 interface IUsuarioServiceInterface{

    /**
    * Método para Obtener todos los usuarios
    * @return array:Usuarios
    */
    function obtenerUsuarios();


    /**
    * Método para Obtener Usuarios segun su Id
    * @param int:id
    * @return array:Usuario
    */
    function obtenerUsuarioPorId(int $id);


    /**
    * Método para Registrar un usuario
    * @param array:datos
    * @return array:Usuario
    */
    function registrarUsuario(array $datos);


    /**
    * Método para actualizar la informacion de un usuario
    * @param array:datos
    * @param int:id
    * @return array:Usuario
    */
    function actualizarUsuario(array $datos, int $id);


    /**
    * Método para eliminar usuario registrado
    * @param int:id
    * @return array:Usuario
    */
    function borrarUsuario(int $id);

}
