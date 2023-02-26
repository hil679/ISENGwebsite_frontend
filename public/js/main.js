const toggleBtn = document.querySelector('.navbar__toogleBtn img');
const menu = document.querySelector('.navbar__menu');
const navbar = document.querySelector('.navbar');

toggleBtn.addEventListener('click', () => {
    menu.classList.toggle('active')
    navbar.classList.toggle('active')
});
