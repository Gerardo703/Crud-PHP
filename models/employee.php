<?php

    class Employee{

        public $id;
        public $nombre;
        public $apellido;
        public $correo;

        public function __construct($id, $nombre, $apellido, $correo){
            $this->id=$id;
            $this->nombre=$nombre;
            $this->apellido=$apellido;
            $this->correo=$correo;
        }

        public static function getEmployees(){
            
            // Se crea un array donde se van a almacenar los empleados
            $listEmployees=[];
            
            $dbConnection = BD::createInstance();
            $sql = $dbConnection->query("SELECT * FROM empleados");
            
            foreach($sql->fetchAll() as $employee){
                $listEmployees[] = new Employee($employee['id'],$employee['nombre'],$employee['apellido'],$employee['correo']);
            }

            return $listEmployees;
            // print_r($listEmployees);
        }

        public static function create($nombre, $apellido, $correo){
            
            // Se almacena la conexión en una variable 
            $dbConnection = BD::createInstance();

            $sql = $dbConnection->prepare(" INSERT INTO empleados(nombre, apellido, correo) VALUES(?,?,?)");
            $sql->execute(array($nombre, $apellido, $correo));
        }

        public static function delete($id){

            $dbConnection = BD::createInstance();
            $sql = $dbConnection->prepare(" DELETE FROM empleados WHERE id=?");
            $sql->execute(array($id));
        }

        public static function findEmployee($id){

            $dbConnection = BD::createInstance();
            $sql = $dbConnection->prepare(" SELECT * FROM empleados WHERE id=?");
            $sql->execute(array($id));

            $employee = $sql->fetch();

            return new Employee($employee['id'],$employee['nombre'],$employee['apellido'],$employee['correo']);
        }
    
        public static function edit($id, $nombre, $apellido, $correo){
            $dbConnection = BD::createInstance();
            $sql = $dbConnection->prepare(" UPDATE empleados SET nombre=?, apellido=?, correo=? WHERE id=?");
            $sql->execute(array($nombre, $apellido, $correo, $id));
        }
    }
?>