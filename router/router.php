<?php

    // echo $controller;
    // echo $action;

    // Archivo que maneja la rutas de manera dinámica
    include_once("controllers/controller_".$controller.".php");
    $objController = "Controller".ucfirst($controller); // Se arma el nombre del controlador
    $controller = new $objController();
    $controller->$action();

?>
