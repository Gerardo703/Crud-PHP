<div class="card mt-3">
    <div class="card-header">
        <h3>Editar Empleado</h3> 
    </div>
    <div class="card-body">
        <form action="" method="POST">
            <div class="mb-3 row">

              <div class="col-6">
                <label for="id" class="form-label">Id:</label>
                <input type="text" readonly
                  class="form-control" value="<?php echo $employee->id; ?>" required name="id" id="id" aria-describedby="helpId" placeholder="Id Empleado">
              </div>

              <div class="col-6">
                <label for="edad" class="form-label">Edad:</label>
                <input type="number"
                  class="form-control" value="<?php echo $employee->edad; ?>" required name="edad" id="edad" aria-describedby="helpId" placeholder="Edad Empleado">
              </div>

            </div>
            <div class="mb-3 row">
              
              <div class="col-6">
                <label for="apellido" class="form-label">Apellidos:</label>
                <input type="text"
                  class="form-control" value="<?php echo $employee->apellido; ?>" required name="apellido" id="apellido" aria-describedby="helpId" placeholder="Apellido Empleado">
              </div>

              <div class="col-6">
                <label for="nombre" class="form-label">Nombres:</label>
                <input type="text"
                  class="form-control" value="<?php echo $employee->nombre; ?>" required name="nombre" id="nombre" aria-describedby="helpId" placeholder="Nombre Empleado">
              </div>

            </div>
            <div class="mb-3 row">

              <div class="col-6">
                <label for="dni"  class="form-label">DNI:</label>
                <input type="number" readonly
                  class="form-control" value="<?php echo $employee->dni; ?>" required name="dni" id="dni" aria-describedby="helpId" placeholder="DNI Empleado">
              </div>

              <div class="col-6">
                <label for="correo" class="form-label">Correo:</label>
                <input type="email"
                  class="form-control" value="<?php echo $employee->correo; ?>" required name="correo" id="correo" aria-describedby="helpId" placeholder="Correo Empleado">
              </div>

            </div>

            <!-- <input type="submit" class="btn btn-primary" value="Editar"> -->
            <button type="submit" id="editar" href="" class="btn btn-primary" onclick="confirmEdit()"> Editar <i class="bi bi-pencil-square"></i></button>
            <a type="button" href="?controller=employees&action=inicio" class="btn btn-danger"> Cancelar <i class="bi bi-x-circle"></i></a>
            
        </form>
    </div>
</div>