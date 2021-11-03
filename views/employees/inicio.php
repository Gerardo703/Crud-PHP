<div class="card mt-3">
    <div class="card-header">
        <h3>Listado de Empleados</h3>
    </div>
    <div class="card-body">
        <a name="" id="" class="mb-2 btn btn-success" href="?controller=employees&action=create" role="button">Agregar Empleado <i class="bi bi-arrow-right-square"></i></i></a>
        <table class="table table-striped table-bordered table-responsive">
        <thead class="thead-inverse|thead-default">
            <tr>
                <th class="text-center">Id</th>
                <th class="text-center">DNI</th>
                <th class="text-center">Nombres</th>
                <th class="text-center">Apellidos</th>
                <th class="text-center">Edad</th>
                <th class="text-center">Correo</th>
                <th class="text-center">Acciones</th>
            </tr>
            </thead>
            <tbody>
                <?php
                foreach( $employees as $employee){ ?>
                    <tr>
                        <td class="text-center" scope="row"><?php echo $employee->id; ?></td>
                        <td class="text-center"><?php echo $employee->dni; ?></td>
                        <td class="text-center"><?php echo $employee->nombre; ?></td>
                        <td class="text-center"><?php echo $employee->apellido; ?></td>
                        <td class="text-center"><?php echo $employee->edad; ?></td>
                        <td class="text-center"><?php echo $employee->correo; ?></td>
                        <td class="text-center">
                            <div class="btn-group " role="group" aria-label="">
                                <a href="?controller=employees&action=edit&id=<?php echo $employee->id; ?>" type="button" class="btn btn-outline-success"><i class="bi bi-pencil-square"></i> Editar</a> 
                                <a type="button" href="?controller=employees&action=details&id=<?php echo $employee->id; ?>" class="btn btn-outline-primary"> <i class="bi bi-file-person"></i> Detalles </a>                
                                <a href="?controller=employees&action=delete&id=<?php echo $employee->id; ?>" type="button" class="btn btn-outline-danger" onclick="return confirmDelete()"><i class="bi bi-person-dash"></i> Eliminar</a>
                            </div>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>


