let formulario = document.getElementById('banner_reserva');
const inputs = document.querySelectorAll('#banner_reserva input');

const expresiones = {
    //comentario: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
    motivoVisita: /^[a-zA-ZÀ-ÿ\s]{1,20}$/, // Letras y espacios, pueden llevar acentos.
    //password: /^.{4,12}$/, // 4 a 12 digitos.
    // correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
    telefono: /^\d{10,12}$/, // 7 a 14 numeros.
    numPersonas: /^\d{1,12}$/ // 1 a 12 numeros.
}

const campos = {
    motivoVisita: false,
    telefono: false,
    numPersonas: false
}

const validarFormulario = (e) =>{
    switch(e.target.name){
        case "telefono":
            validarCampo(expresiones.telefono, e.target, 'telefono');
            break;
        case "numPersonas":
            validarCampo(expresiones.numPersonas, e.target, 'numPersonas')
        break;
        case "motivoVisita":
            validarCampo(expresiones.motivoVisita, e.target, 'motivoVisita')
        break;
    }
} 

const validarCampo = (expresion, input, campo) => {
    if(expresion.test(input.value)){
        document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-incorrecto');
        document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-correcto');
        document.querySelector(`#grupo__${campo} i`).classList.add('ion-md-checkmark-circle');
        document.querySelector(`#grupo__${campo} i`).classList.remove('ion-ios-close-circle');
        // document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.remove('formulario__input-error-activo');
        campos[campo] = true;
    } else {
        document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-incorrecto');
        document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-correcto');
        document.querySelector(`#grupo__${campo} i`).classList.add('ion-ios-close-circle');
        document.querySelector(`#grupo__${campo} i`).classList.remove('ion-md-checkmark-circle');
        // document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.add('formulario__input-error-activo');
        campos[campo] = false;
    }
}

inputs.forEach((input) => {
    input.addEventListener('keyup', validarFormulario);
    input.addEventListener('blur', validarFormulario);
});

formulario.addEventListener('submit', e=>{
    e.preventDefault();

    //VALIDAMOS SI SE PRECIONO EL CAPTCHA
    // var response = grecaptcha.getResponse();

    // if(response.length == 0){
    //     //NO VERIFICADO
    //     document.getElementById('formulario__mensaje-captcha').classList.add('formulario__mensaje-activo');
    //     setTimeout(() => {
    //         document.getElementById('formulario__mensaje-captcha').classList.remove('formulario__mensaje-activo');
    //     }, 5000);
    // } else {
        //VERIFICADO
        // const terminos = document.getElementById('terminos');
        let selectMotivo = document.getElementById('selectMotivo');
        console.log("Ingrese a la validacion")

        if(campos.telefono && campos.numPersonas && campos.motivoVisita){

            document.getElementById('formulario__mensaje-exito').classList.add('formulario__mensaje-exito-activo');
            setTimeout(() => {
                document.getElementById('formulario__mensaje-exito').classList.remove('formulario__mensaje-exito-activo');
            }, 5000);

            document.querySelectorAll('.formulario__grupo-correcto').forEach((icono) => {
                icono.classList.remove('formulario__grupo-correcto');
            });

            let removerClase = document.querySelectorAll('.remover');

            if(removerClase.length > 0){
                for(let i = 0; i < removerClase.length; i++){
                    removerClase[i].parentNode.removeChild(removerClase[i]);
                }
            }
        
            // ENVIAMOS LOS DATOS A PHP
            let datos = new FormData(formulario);
            //creamos un objeto
            let peticion = {
                method:'POST',
                body:datos,
            }
            fetch('Public/php/bannerReserva.php', peticion)
            .then(respuesta => respuesta.json())
            .then(respuesta =>{
        
                for(const resultado in respuesta){
                    let padre = document.querySelector('#'+resultado);
                    padre.classList.add('resaltar');
                    let txt = document.createElement('p');
                    txt.classList.add('text-danger');
                    txt.classList.add('remover');
                    txt.innerHTML = respuesta[resultado];
                    document.querySelector('#'+resultado).insertAdjacentElement('afterend', txt);
                }
        
            }).catch(error => console.log('Error', error));
            //FIN DATOS PHP
            formulario.reset();
            //return true;

        
        } else {
            console.log("Motivo: " + campos.motivoVisita);
            console.log("Telefono: " + campos.telefono);
            console.log("personas: " * campos.numPersonas);
            document.getElementById('formulario__mensaje').classList.add('formulario__mensaje-activo');
            setTimeout(() => {
                document.getElementById('formulario__mensaje').classList.remove('formulario__mensaje-activo');
            }, 5000);
        }
        //alert("Captcha verificado");
    // }


});

