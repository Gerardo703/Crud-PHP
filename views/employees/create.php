<div class="card mt-3">
    <div class="card-header">
        <h3>Agregar Empleado</h3> 
    </div>
    <div class="card-body">
        <form action=""  id="form-create" method="POST">
            <div class="mb-3">
              <label for="nombre" class="form-label">Nombre:</label>
              <input type="text"
                class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Nombre Empleado">
            </div>
            <div class="mb-3">
              <label for="apellido" class="form-label">Apellido:</label>
              <input type="text"
                class="form-control" name="apellido" id="apellido" aria-describedby="helpId" placeholder="Apellido Empleado">
            </div>
            <div class="mb-3">
              <label for="correo" class="form-label">Correo:</label>
              <input type="email"
                class="form-control" name="correo" id="correo" aria-describedby="helpId" placeholder="Correo Empleado">
            </div>

            <button type="submit" onclick="return confirmCreate()" class="btn btn-success"> Agregar <i class="bi bi-person-plus-fill"></i></button>
            <a type="button" href="?controller=employees&action=inicio" class="btn btn-danger"> Cancelar <i class="bi bi-x-circle"></i></i></a>
            
        </form>
    </div>
</div>