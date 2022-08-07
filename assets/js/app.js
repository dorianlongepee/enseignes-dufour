const header = document.querySelector("header");
let prevScroll = window.scrollY;

document.addEventListener('scroll', () =>{
    const currentScroll = window.scrollY;

    if ( prevScroll <= currentScroll ){
        header.classList.add('hide');
    } else {
        header.classList.remove('hide');
    }
    
    prevScroll = currentScroll;
})


const loginContainer = document.querySelector(".login_container");
const registerContainer = document.querySelector(".register_container");
const btnToRegister = document.querySelector(".go-register");
const btnToConnect = document.querySelector(".go-connect");


btnToRegister.addEventListener('click', changeStateLogin);
btnToConnect.addEventListener('click', changeStateLogin);

function changeStateLogin(){
    loginContainer.classList.toggle('hide-login');
    registerContainer.classList.toggle('show-register');
}
