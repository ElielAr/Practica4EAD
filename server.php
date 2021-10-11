<?php
    require_once"lib/nusoap.php";






    //funciion
    function getMarcas($datos){
        if($datos=="Marcas"){
            return join(",",array(
                "Honda",
                "Toyota",
                "Kia",
                "Nissan",
                "Poiter",
                "Jeep",
                "Subaru",
                "Peugeot",
                "Dodge",
                "Bentley",
                "Lexus",
                "Hummer" ));
        }
        else{
            return "No hay Marcas";

        }
    }

    $server = new soap_server(); //se crea la instancia de SOAP
    $server->register("getMarcas"); 
    if (!isset($HTTP_RAW_POST_DATA) )$HTTP_RAW_POST_DATA=file_get_contents('php://input');
        $server->service($HTTP_RAW_POST_DATA);


?>