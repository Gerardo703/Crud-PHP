<?php

    $controller = "pages";
    $action = "inicio";

    if(isset($_GET['controller']) && isset($_GET['action'])){

        if($_GET["controller"] != "" && $_GET['action'] != ""){
            $controller = $_GET['controller'];
            $action = $_GET['action'];
        }
    }

    include_once('views/layout.php');

?>