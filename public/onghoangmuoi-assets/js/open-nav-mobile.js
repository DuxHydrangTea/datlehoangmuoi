
const btnOpenNavBar = document.getElementById(`open-nav-mobile`);
const navMobile = document.getElementById(`header-nav-mobile`)

btnOpenNavBar.addEventListener('click', e =>{
    navMobile.classList.toggle('slide-up')
})