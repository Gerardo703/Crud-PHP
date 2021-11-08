<?php
    // Agregamos el modelo
    include_once('./models/employee.php');

    // Agregamos la conexión a la base de datos
    include_once("./config/connectionDB.php");
    BD::createInstance();

    class ControllerEmployees{

        // Muestra la página con los datos de los empleados
        public function inicio(){

            $employees = Employee::getEmployees();
            include_once('./views/employees/inicio.php');
        }

        // Agrega un nuevo empleado
        public function create(){

            // Valido que exista envío de datos y que no estén vacios
            $post = (isset($_POST['dni']) && !empty($_POST['dni'])) &&
                (isset($_POST['nombre']) && !empty($_POST['nombre'])) &&
                (isset($_POST['apellido']) && !empty($_POST['apellido'])) &&
                (isset($_POST['edad']) && !empty($_POST['edad'])) &&
                (isset($_POST['correo']) && !empty($_POST['correo']));

            if($post){
                $dni = $_POST['dni'];
                $nombre = $_POST['nombre'];
                $apellido = $_POST['apellido'];
                $edad = $_POST['edad'];
                $correo = $_POST['correo'];
                Employee::create( $dni, $nombre, $apellido, $edad, $correo);
                header('Location:./?controller=employees&action=inicio');
            }
            
            include_once('./views/employees/create.php');
        }

        // Edita un empleado
        public function edit(){

            // Valido que exista envío de datos y que no estén vacios
            $post = (isset($_POST['dni']) && !empty($_POST['dni'])) &&
                    (isset($_POST['nombre']) && !empty($_POST['nombre'])) &&
                    (isset($_POST['apellido']) && !empty($_POST['apellido'])) &&
                    (isset($_POST['edad']) && !empty($_POST['edad'])) &&
                    (isset($_POST['correo']) && !empty($_POST['correo']));

            if($post){
                $id = $_POST['id'];
                $dni = $_POST['dni'];
                $nombre = $_POST['nombre'];
                $apellido = $_POST['apellido'];
                $edad = $_POST['edad'];
                $correo = $_POST['correo'];
                Employee::edit($id, $dni, $nombre, $apellido, $edad, $correo);
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