import * as users from './users.js';

function mostrarDatosUsers(listUsers, emailBuscado){
    
    for (let i = 0; i < listUsers.length; i++) {
        if (listUsers[i].email === emailBuscado) {
            console.log(listUsers[i].nombre);
            
            let lista = "<h2>INFORMACION DE USUARIO</h2>";
            lista += `<div class="listaContenedor"> 
                    <h2 class="titulo">${listUsers[i].nombre}</h2>
                    <span>${listUsers[i].email}</span>
                    <p>${listUsers[i].descripcion}</p>
                </div>`
            document.getElementById('informacionDeUsuarios').innerHTML = lista
        }
    }

}

const listUsers = users.users;
const emailBuscado = localStorage.getItem('email');

mostrarDatosUsers(listUsers, emailBuscado) 

// APIs
const informacionApiPoke = fetch('https://pokeapi.co/api/v2/pokemon/ditto')
    .then(respuesta => respuesta.json())
    .catch(error => console.log('Error: ', error))

informacionApiPoke.then((respuestaConDatos) => {
    //console.log(respuestaConDatos.abilities)
    const elemento = document.getElementById('informacionDeApi');
    
    const nombre = document.createElement('h2')
    nombre.textContent = respuestaConDatos.name
    elemento.appendChild(nombre)

    respuestaConDatos.abilities.forEach(element => {
        const parrafo = document.createElement('p')
        parrafo.textContent = element.ability.url
        elemento.appendChild(parrafo)
    });

})



// Prueba que importa Json y LocalStorage
console.log(users.users);
const divtest = localStorage.getItem('email')
console.log(divtest)
navigator.geolocation.getCurrentPosition((position) => {
    console.log('ingreso a la geolocalizacion')
})