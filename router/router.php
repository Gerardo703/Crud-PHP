<?php

    // echo $controller;
    // echo $action;

    // Archivo que maneja la rutas
    include_once("controllers/controller_".$controller.".php");
    $objController = "Controller".ucfirst($controller);
    $controller = new $objController();
    $controller->$action();

?>
