<div class="card mt-3">
    <div class="card-header">
        <h3>Agregar Empleado</h3> 
    </div>
    <div class="card-body">
        <form action=""  id="form-create" method="POST">

            <div class="mb-3 row">
              <div class="col-6">
                <label for="nombre" class="form-label">Nombres:</label>
                <input type="text"
                  class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Nombres Empleado">
              </div>
              
              <div class="col-6">
                <label for="apellido" class="form-label">Apellidos:</label>
                <input type="text"
                  class="form-control" name="apellido" id="apellido" aria-describedby="helpId" placeholder="Apellidos Empleado">
              </div>

            </div>
            <div class="mb-3 row">
              
              <div class="col-6">
                <label for="dni" class="form-label">DNI:</label>
                <input type="number"
                  class="form-control"name="dni" id="dni" aria-describedby="helpId" placeholder="DNI"
                  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                  type = "number"
                  maxlength = "8"
                  >
              </div>

              <div class="col-6">
                <label for="edad" class="form-label">Edad:</label>
                <input type="number"
                  class="form-control" name="edad" id="edad" aria-describedby="helpId" placeholder="Edad Empleado">
              </div>

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