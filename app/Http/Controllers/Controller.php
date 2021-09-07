<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController{
    //

    public function verificarRespuesta($respuesta){

        $status = 200;

        if ($respuesta == true){
            $status = 422;

        }

        return response()->json($respuesta, $status);

    }
}
