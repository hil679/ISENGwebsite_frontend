const toggleBtn = document.querySelector('.navbar__toogleBtn img');
const menu = document.querySelector('.navbar__menu');
const navbar = document.querySelector('.navbar');
const lang_btn = document.querySelector('.lang_btn');
// const menuList = document.querySelector('.navbar__menu li');

toggleBtn.addEventListener('click', () => {
    menu.classList.toggle('active')
    navbar.classList.toggle('active')
    lang_btn.classList.toggle('active')
    // menuList.classList.toggle('active')
});
