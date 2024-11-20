<?php

function ctrlEditar($request, $response, $container){

    $name = $request->get(INPUT_GET, "name");

    $response->set("name", $name);

    $response->setTemplate("editar.php");

    return $response;
    
}
