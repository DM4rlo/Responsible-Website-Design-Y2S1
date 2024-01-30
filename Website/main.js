// To utilise the hamburger icon (smaller screens) 
const hamburger = document.querySelector('.hamburger') // button from html is stored here.
const mobile_menu = document.querySelector('.mobile-nav');

hamburger.addEventListener('click', function (){
    hamburger.classList.toggle('is-active');
    mobile_menu.classList.toggle('is-active');
})
