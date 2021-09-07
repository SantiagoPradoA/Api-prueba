<?php

namespace App\Services\Implementations;

use App\Services\Interfaces\IUsuarioServiceInterface;
use App\Models\Usuario;
use Illuminate\Support\Facades\DB;

class UsuarioServiceImpl implements IUsuarioServiceInterface{

    private $modelo;

    public function __construct() {
        $this->modelo = new Usuario();

    }

    public function obtenerUsuarios(){
        return $this->modelo->select('id', 'nombre', 'apellido')->get();
        //$users = $this->modelo = DB::select('select id, nombre, apellido from usuarios');

        //return $users;

    }

    public function obtenerUsuarioPorId(int $id){
       return $this->modelo->where('id', $id)->select('id', 'nombre', 'apellido')->get();
       //$users = $this->modelo = DB::select("select id, nombre, apellido from usuarios where id = $id");

       //return $users;

    }

    public function registrarUsuario(array $datos){
        //return Usuario::select('nombre', 'apellido', 'direccion', 'telefono')->post($datos);
        return $this->modelo->create($datos);

    }

    public function actualizarUsuario(array $datos, int $id){
        //return Usuario::array('nombre', 'apellido', 'direccion', 'telefono')->put($datos)->where('id', $id);
        return $this->modelo->where('id', $id)->update($datos);

    }

    public function borrarUsuario(int $id){
        return $this->modelo->where('id', $id)->delete();

    }
}
