document.querySelector('.burger-cross-icon').addEventListener('click', function () {
    var nav = document.querySelector('#navbarNav');
    var overlay = document.querySelector('.bg-overlay-burger');

    if (nav.classList.contains('show')) {
        nav.classList.remove('show');
    }

    if (!overlay.classList.contains('display-none')) {
        overlay.classList.add('display-none');
    }

});

let burgerMenuButton = document.querySelector('.navbar-toggler');

burgerMenuButton.addEventListener('click', function () {
    console.log('Le bouton du menu burger a été cliqué !');

    document.querySelector('.bg-overlay-burger').classList.remove('display-none');
});