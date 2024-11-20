<?php

function ctrlAfegir($request, $response, $container){

    $name = $request->get(INPUT_GET, "name");

    $response->set("name", $name);

    $response->setTemplate("afegir.php");

    return $response;
    
}
