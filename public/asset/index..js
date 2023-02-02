//humberger menu
const menuToggle = document.querySelector('#menu-toggle input');
const nav= document.querySelector('.navbar-humburger');

menuToggle.addEventListener('click', function() {
    nav.classList.toggle('hidden')

})

//registrasi
const btnPopUp = document.querySelectorAll('.regis');
const tampil = document.querySelector('.get-start');
const keluar = document.querySelector('.btn-close');
const daftar = document.querySelector('.btn-daftar');

for (let i = 0; i < btnPopUp.length; i++) {
    btnPopUp[i].addEventListener('click', function (){
        tampil.classList.remove('hidden')
    });
};

keluar.addEventListener('click', function() {
    tampil.classList.add('hidden')
})

daftar.addEventListener('click', function() {
    tampil.classList.add('hidden')
})



