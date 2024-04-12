


// inicio de secion ejemplo dinamico 


const sigIng = document.getElementById("userB")
const mostrarUser = document.getElementById("userA")
const singOut =document.getElementById("logOut")




mostrarUser.addEventListener ('click', function ver () {
    console.log("hola bienvenido")
    userA.classList.toggle('hidden')
    userB.classList.toggle('hidden')

});

singOut.addEventListener ('click', function ver () {
    console.log("hola susuario")
    userA.classList.toggle('hidden')
    userB.classList.toggle('hidden')

});



// funcion que esconde los links de menu

const botonav = document.querySelector('#botonav');
const menunav = document.querySelector('#menunav');



botonav.addEventListener('click', () => {
    console.log("me diste click");
    menunav.classList.toggle('max-lg:hidden')
})