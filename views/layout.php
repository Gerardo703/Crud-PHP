<!doctype html>
<html lang="en">
  <head>
    <title>CRUD PHP</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- CSS -->
    <link rel="stylesheet" src="./css/styles.css">
    
    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.6.1/font/bootstrap-icons.min.css" integrity="sha512-9a1QYep56cYgIPFq0JYfsh9xRYYmPBxKaD6/ZfVAtplQ6y9ZUSk7GxgC2dmwtxK9T2cGQOxCV6J2Ll51nrvP2w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- SweetAlert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  </head>
  <body>

    <nav class="navbar navbar-expand navbar-dark bg-dark">
        <div class="nav navbar-nav">
            <a class="disabled nav-item nav-link active" href="#">Sistema <span class="visually-hidden">(current)</span></a>
            <a class="nav-item nav-link" href="?controller=pages&action=inicio">Inicio</a>
            <a class="nav-item nav-link" href="?controller=employees&action=inicio">Empleados</a>
        </div>
    </nav>
      
    <div class="container">
        <div class="row">
            <div class="col-12 align-items-center">
                <?php include_once('./router/router.php') ?>
            </div>
        </div>
        <div id="alert"></div>
    </div>

    <script src="./js/app.js"></script>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>