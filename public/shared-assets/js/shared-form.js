const openLoginButton = document.getElementById('shared-button-form-login')

const authContainer = document.getElementById('form-container')

const formContainerButton = document.getElementById('openFormContainer')
const formLogin = document.getElementById('shared-form-login');
const formRegister = document.getElementById('shared-form-register')

openLoginButton.addEventListener('click', function (){
        formLogin.classList.toggle(`hidden-form`);
        formRegister.classList.toggle(`hidden-form`);
        if(formLogin.classList.contains(`hidden-form`)){
            openLoginButton.innerText = `Chuyển sang trang ĐĂNG NHẬP`
        }
        else{
             openLoginButton.innerText = `Chuyển sang trang ĐĂNG KÝ`
        }
})


const cancelFormButton = document.getElementById('authenticate-form-inner-cancel')
cancelFormButton.addEventListener('click', e =>{
    authContainer.style = `display:none`;
})


formContainerButton.addEventListener('click', e =>{
    authContainer.style = `display:flex`;
})