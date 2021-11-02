<?php 

    class BD{

        private static $instance = null;

        public static function createInstance(){
            
            if(!isset(self::$instance)){
                $optionsPDO[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
                self::$instance = new PDO('mysql:host=localhost;dbname=empleados','root','', $optionsPDO);
                // echo "Conexión a la base de datos realizada correctamente";
            }
            return self::$instance;
        }
    }
?>