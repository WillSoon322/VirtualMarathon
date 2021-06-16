let header = document.querySelector('header');

let info = document.querySelector('.info_left');
let infoName = document.querySelector('.info_name');
let act = document.querySelector('.act');

let imageOverlay = document.querySelector('.carousel_container').children[0];
let mainImage = document.querySelector('.carousel_container').children[1];

function animate() {
    setTimeout(() => {
        header.classList.add('active');
        imageOverlay.style.animation = 'slide 1s forwards';
        mainImage.style.animation = 'slide-perm 1s forwards';
    }, 2000);

    setTimeout(() => {
        info.style.opacity = '1';
        infoName.style.opacity = '1';
        infoName.style.animation = 'slide-perm 1s forwards';
    }, 3000);
    setTimeout(() => {
        act.style.opacity = '1';
        act.style.animation = 'slide-perm 1s forwards';
    }, 3200);
}

animate();