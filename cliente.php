<?php
    require_once "lib/nusoap.php";
    $cliente = new nusoap_client("http://localhost/Practica4EAD/server.php");





    $error = $cliente->getError();
    if ($error){
        echo "<h2> Constructor error</h2><pre>" . $error . "</prev>";
    }

    $result = $cliente->call("getMarcas",array("datos" => "Marcas"));
    if($cliente->fault){
        echo "<h2> Fault </h2> <pre>";
        print_r($result);
        echo "</prev>";

    }else{
        $error =$cliente->getError();
        if($error){
            echo "<h2>Error</h2><pre>" .$error. "</prev>";

        }else{
            echo "<h2>Marcas de Coche</h2><prev>";
            echo $result;
            echo "</prev>";
        }
    }


?>