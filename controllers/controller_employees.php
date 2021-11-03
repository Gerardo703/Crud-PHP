<?php
    // Agregamos el modelo
    include_once('./models/employee.php');

    // Agregamos la conexió a la base de datos
    include_once("./config/connectionDB.php");
    BD::createInstance();

    class ControllerEmployees{

        // Muestra la pagina con los datos de los empleados
        public function inicio(){

            $employees = Employee::getEmployees();
            include_once('./views/employees/inicio.php');
        }

        // Agrega un nuevo empleado
        public function create(){

            // Valido que exista envío de datos y que no estén vacios
            $post = (isset($_POST['nombre']) && !empty($_POST['nombre'])) &&
                    (isset($_POST['apellido']) && !empty($_POST['apellido'])) &&
                    (isset($_POST['correo']) && !empty($_POST['correo']));

            if($post){
                $nombre = $_POST['nombre'];
                $apellido = $_POST['apellido'];
                $correo = $_POST['correo'];
                Employee::create($nombre, $apellido, $correo);
                header('Location:./?controller=employees&action=inicio');
            }
            
            include_once('./views/employees/create.php');
        }

        // Edita un empleado
        public function edit(){

            // Valido que exista envío de datos y que no estén vacios
            $post = (isset($_POST['nombre']) && !empty($_POST['nombre'])) &&
                    (isset($_POST['apellido']) && !empty($_POST['apellido'])) &&
                    (isset($_POST['correo']) && !empty($_POST['correo']));

            if($post){
                $id = $_POST['id'];
                $nombre = $_POST['nombre'];
                $apellido = $_POST['apellido'];
                $correo = $_POST['correo'];
                Employee::edit($id, $nombre, $apellido, $correo);
                header('Location:./?controller=employees&action=inicio');
            }

            $id=$_GET['id'];
            $employee = Employee::findEmployee($id);

            include_once('./views/employees/edit.php');
        }

        public function details(){

            $id=$_GET['id'];
            $employee = Employee::findEmployee($id);

            include_once('./views/employees/details.php');
        }

        // Elimina un empleado
        public function delete(){
            // print_r($_GET);

            $id=$_GET['id'];
            Employee::delete($id);
            header('Location:./?controller=employees&action=inicio');
        }
    }
?>