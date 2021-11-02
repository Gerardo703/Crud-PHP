<div class="card mt-3">
    <div class="card-header">
        <h3>Detalle Empleado</h3>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-6">
                <label for="">Id:</label>
                <input readonly type="text" class="form-control" value="<?php echo $employee->id; ?>" /> 
            </div>
            <div class="col-6">
                <label for="">Nombre Empleado:</label>
                <input readonly type="text" class="form-control" value="<?php echo $employee->nombre; ?>" /> 
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <label for="">Apellido Empleado:</label>
                <input readonly type="text" class="form-control" value="<?php echo $employee->apellido; ?>" />  
            </div>
            <div class="col-6">
                <label for="">Email:</label>
                <input readonly type="text" class="form-control" value="<?php echo $employee->correo; ?>" />  
            </div>
        </div>
        <a type="button" href="?controller=employees&action=inicio" class="btn btn-success mt-3"> <i class="bi bi-arrow-left-square"></i> Volver </a>

    </div>
</div>
