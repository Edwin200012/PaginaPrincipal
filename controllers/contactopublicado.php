<?php

include_once("../route/route.php");

class Empresa{
    function MostrarDatosContactoPublicado(){
        $url = Route::$url.Route::$mostrarDatosContactoPublicado;
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
        ]);

        $respuesta = curl_exec($curl);

        echo $respuesta;
    }
}

$empresa = new Empresa();
$empresa->MostrarDatosContactoPublicado();

?>