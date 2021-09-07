<?php

namespace App\Http\Controllers;

use App\Services\Implementations\UsuarioServiceImpl;

use Illuminate\Http\Request;

class UsuarioController extends Controller{

    private $usuarioService;

    public function __construct(UsuarioServiceImpl $usuarioService) {
        $this->usuarioService = $usuarioService;

    }

    public function listarUsuarios(){
        $registros = $this->usuarioService->obtenerUsuarios();
        return $this->verificarRespuesta($registros);

    }

    public function listarUsuario(int $id){

        $respuesta = $this->usuarioService->obtenerUsuarioPorId($id);
        return $this->verificarRespuesta($respuesta);

    }

    public function guardarUsuario(Request $request){
        $datos = $request->all();
        $respuesta = $this->usuarioService->registrarUsuario($datos);
        return $this->verificarRespuesta($respuesta);

    }

    public function alterarUsuario(Request $request, $id){
        $datos = $request->all();
        $registgro = $this->usuarioService->actualizarUsuario($datos,  $id);
        return $this->verificarRespuesta($registgro);

    }

    public function eliminarUsuario($id){
        $registgro = $this->usuarioService->borrarUsuario($id);
        return $this->verificarRespuesta($registgro);
    }

}
