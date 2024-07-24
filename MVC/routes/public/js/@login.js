//import * as users from './users.js';

console.log(users.users);

class ManejadorDeSesion {
    constructor(){
        // this.users = users;
        // console.log(this.users)
        // this.email = this.users
        
        this.users = [
            {
                nameObjeto: "Usuario Uno",
                emailObjeto: "usuario_uno@mail.com",
                passwordObjeto: "5Z@1cGw68"
            },
            {
                nameObjeto: "Usuario Dos",
                emailObjeto: "usuario_dos@mail.com",
                passwordObjeto: "wT95!:4/6"
            }
        ]
    }

    // autenticacion(userEmail, userPassword){
    //     return this.users.some(
    //         info => info.emailObjeto === userEmail 
    //         && info.passwordObjeto === userPassword
    //     )
    // }
    autenticacion(userEmail, userPassword){
        return this.users.some(
            info => info.emailObjeto === userEmail 
            && info.passwordObjeto === userPassword
        )
    }
}

class ValidacionFormulario {
    constructor(selectForm){
        this.formulario = selectForm;
        this.campos = this.formulario.querySelectorAll('input');
        this.errorMessages = {
            email: 'Digite el email correctamente',
            password: 'Digite la contraseña correctamente'
        }        
    }

    validarEmail() {
        const emailRegex = /^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]{2,7}$/;
        const userEmail = this.formulario.querySelector('#email');
        const emailValidation = emailRegex.test(userEmail.value);
        
        if(emailValidation) {
            console.log('Validar Email True');
            return true;
        } else {
            console.log('Validar Email False');
            this.mostrarError(userEmail, this.errorMessages.email);
        }
    }

    validarPassword() {
        const passwordRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
        const userPassword = this.formulario.querySelector('#password')
        const passwordValidation = passwordRegex.test(userPassword.value)

        if(passwordValidation) {
            console.log('Validar PassWord True');
            return true;
        } else {
            console.log('Validar PassWord False');
            this.mostrarError(userPassword, this.errorMessages.password);
        }

    }
    
    mostrarError(input, mensaje) {
        const contenedorMensaje = document.createElement('div')
        contenedorMensaje.className = 'error';
        contenedorMensaje.innerText = mensaje;
        input.parentNode.appendChild(contenedorMensaje)
    }

    limpiarErrores(){
        const errores = this.formulario.querySelectorAll('.error')
        errores.forEach(error => error.remove())
    }

    validarFormulario(){
        this.limpiarErrores();
        if(this.validarPassword()){
            if(this.validarEmail()){
                return true;
            } else {
                console.log('No paso la validacion de email');
            }
        } else{
            console.log('No paso la validacion de contraseña');
        }
        
    }

    inicioFormulario() {
        this.formulario.addEventListener('submit', this.validarFormulario.bind(this))
    }
}

function envioDeFormulario(event){

    event.preventDefault();

    const selectForm = document.getElementById('login')
    const validacionDeCampos = new ValidacionFormulario(selectForm)
    const inicioSesion = new ManejadorDeSesion(users);

    const userEmail = document.getElementById('email').value;
    const userPassword = document.getElementById('password').value;

    if(validacionDeCampos.validarFormulario()){
        if(inicioSesion.autenticacion(userEmail, userPassword)){
            console.log("Autenticacion exitosa");
            localStorage.setItem('email', userEmail);
            window.location.href = "/account.html";
        } else {
            // console.log("Error en la información aqui");
            const msj = document.querySelectorAll('#msj');
            msj.forEach(msj => msj.remove());

            const containerMsj = document.querySelector('#containermsj');
            const textoMensaje = 'Para ingresar a la cuenta debe logearse correctamente, corrige los datos para ingresar usando el email: usuario_uno@mail.com y contraseña: 5Z@1cGw68';

            const contenedorMensaje = document.createElement('p')
            contenedorMensaje.innerText = textoMensaje;
            containerMsj.appendChild(contenedorMensaje);
        }
    }

}