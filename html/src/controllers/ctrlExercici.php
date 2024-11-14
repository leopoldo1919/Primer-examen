<?php

function ctrlExercici($request, $response, $container){

    $name = $request->get(INPUT_GET, "name");

    $response->set("name", $name);

    $response->setTemplate("exercici.php");

    return $response;
    
}