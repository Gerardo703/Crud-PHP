const confirmCreate = () => {

    let respuesta = confirm('¿Estás seguro de guardar el registro?');
    
    if(respuesta){
        return true;
    } else {
        return false;
    };
};

const confirmEdit = () => {

    let respuesta = confirm('¿Estás segurdo que quieres editar el registro?');

    if(respuesta ){
        alert('Registro editado correctamete ✅');
    } else {
        return false;
    };
};

const confirmDelete = () => {
    let respuesta = confirm('¿Estás segurdo que quieres eliminar el registro?');

    if(respuesta){
        alert('Registro eliminado correctamete ❌');
    } else {
        return false;
    };
};

const validForm = () => {
    const nombre = document.querySelector('#nombre');
    const apellido = document.querySelector('#apellido');
    const correo = document.querySelector('#apellido');

    if( nombre == '' || apellido == '' || correo == ''){
        alert('Todos los campos son obligatorios');
    }
}