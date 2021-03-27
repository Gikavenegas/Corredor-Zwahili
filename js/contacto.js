const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input');
const textAreas = document.querySelectorAll('#formulario textarea');


const expresiones = {
	nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
    apellido: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
	celular: /^\d{7,14}$/, // 7 a 14 numeros
    consulta: /^[a-zA-ZÀ-ÿ0-9\s]{1,2000}$/ // Letras y espacios, pueden llevar acentos.
}

const campos = {
    nombre: false,
    apellido: false,
	correo: false,
	celular: false,
    consulta: false
}

const validarFormulario = (e) =>{
    switch(e.target.name){
        case "nombre":
            validarCelda(expresiones.nombre, e.target, 'nombre');
        break;
        case "apellido":
            validarCelda(expresiones.apellido, e.target, 'apellido');
        break;
        case "correo":
            validarCelda(expresiones.correo, e.target, 'correo');
        break;
        case "celular":
            validarCelda(expresiones.celular, e.target, 'celular');
        break;
        case "consulta":
            validarConsulta(expresiones.consulta, e.target, 'consulta');
        break;                   
    }
}

const validarCelda = (expresion, input, celda)=>{
    if(expresion.test(input.value)){
        document.getElementById(`grupo_${celda}`).classList.remove('formulario_grupo-incorrecto');
        document.getElementById(`grupo_${celda}`).classList.add('formulario_grupo-correcto');
        document.querySelector(`#grupo_${celda} i`).classList.add('fa-check-circle');
        document.querySelector(`#grupo_${celda} i`).classList.remove('fa-times-circle');
        document.querySelector(`#grupo_${celda} .formulario_input-error`).classList.remove('formulario_input-error-activo');
        campos[celda]= true;
    }else{
        document.getElementById(`grupo_${celda}`).classList.add('formulario_grupo-incorrecto');
        document.getElementById(`grupo_${celda}`).classList.remove('formulario_grupo-correcto');
        document.querySelector(`#grupo_${celda} i`).classList.add('fa-times-circle');
        document.querySelector(`#grupo_${celda} i`).classList.remove('fa-check-circle');
        document.querySelector(`#grupo_${celda} .formulario_input-error`).classList.add('formulario_input-error-activo');
        campos[celda]= false;
    }
}

const validarConsulta = (expresion, textarea)=>{
    if(expresion.test(textarea.value)){
        document.getElementById('formulario_consulta').classList.remove('formulario_grupo-incorrecto');
        document.getElementById('formulario_consulta').classList.add('formulario_grupo-correcto');
        document.querySelector('#formulario_consulta .formulario_input-error').classList.remove('formulario_input-error-activo');
        campos["consulta"]= true;
    } else {
        document.getElementById('formulario_consulta').classList.add('formulario_grupo-incorrecto');
        document.getElementById('formulario_consulta').classList.remove('formulario_grupo-correcto');
        document.querySelector('#formulario_consulta .formulario_input-error').classList.add('formulario_input-error-activo');
        campos["consulta"]= false;
    }
}

inputs.forEach((input) => {
	input.addEventListener('keyup', validarFormulario);
	input.addEventListener('blur', validarFormulario);
});

textAreas.forEach((textarea) => {
	textarea.addEventListener('keyup', validarFormulario);
	textarea.addEventListener('blur', validarFormulario);
});


formulario.addEventListener('submit', (e) => {
	e.preventDefault();

    if(campos.nombre && campos.apellido && campos.correo && campos.celular && campos.consulta){
        formulario.reset();

        document.getElementById('formulario_mensaje-exito').classList.add('formulario_mensaje-exito-activo');
        setTimeout(()=>{
            document.getElementById('formulario_mensaje-exito').classList.remove('formulario_mensaje-exito-activo');}, 5000);

        document.querySelectorAll('.formulario_grupo-correcto').forEach((icono) =>{
            icono.classList.remove('formulario_grupo-correcto');
        });
    } else {
        document.getElementById('formulario_mensaje').classList.add('formulario_mensaje-activo');
        setTimeout(()=>{
            document.getElementById('formulario_mensaje').classList.remove('formulario_mensaje-activo');}, 5000);
    }
});