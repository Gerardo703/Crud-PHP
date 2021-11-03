<?php

    class Employee{

        public $id;
        public $dni;
        public $nombre;
        public $apellido;
        public $edad;
        public $correo;

        public function __construct($id, $dni, $nombre, $apellido, $edad, $correo){
            $this->id=$id;
            $this->dni=$dni;
            $this->nombre=$nombre;
            $this->apellido=$apellido;
            $this->edad=$edad;
            $this->correo=$correo;
        }

        public static function getEmployees(){
            
            // Se crea un array donde se van a almacenar los empleados
            $listEmployees=[];
            
            $dbConnection = BD::createInstance();
            $sql = $dbConnection->query("SELECT * FROM empleados");
            
            foreach($sql->fetchAll() as $employee){
                $listEmployees[] = new Employee(
                        $employee['id'],
                        $employee['dni'],
                        $employee['nombre'],
                        $employee['apellido'],
                        $employee['edad'],
                        $employee['correo']);
            }

            return $listEmployees;
        }

        public static function create($dni, $nombre, $apellido, $edad, $correo){
            
            // Se almacena la conexión en una variable 
            $dbConnection = BD::createInstance();

            $sql = $dbConnection->prepare(" INSERT INTO empleados(dni, nombre, apellido,  edad, correo) VALUES(?,?,?,?,?)");
            $sql->execute(array($dni, $nombre, $apellido, $edad, $correo));
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

            return new Employee(
                    $employee['id'], 
                    $employee['dni'], 
                    $employee['nombre'], 
                    $employee['apellido'], 
                    $employee['edad'], 
                    $employee['correo']);
        }
    
        public static function edit($id, $dni, $nombre, $apellido, $edad, $correo){
            $dbConnection = BD::createInstance();
            $sql = $dbConnection->prepare(" UPDATE empleados SET dni=?, nombre=?, apellido=?, edad=?, correo=? WHERE id=?");
            $sql->execute(array($dni, $nombre, $apellido, $edad, $correo, $id));
        }
    }
?>