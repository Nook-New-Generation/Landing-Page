let kanan = document.getElementById('kanan');
let kiri = document.getElementById('kiri');

window.addEventListener('scroll', () =>{
    let value = window.scrollY;

    kiri.style.marginRight = (value * 0.036) - 30 + '%';
    kanan.style.marginLeft = (value * 0.036) - 30 + '%';

});