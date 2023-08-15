window.addEventListener('scroll', function () {
    const navbar = document.querySelector('.navbar');
    const navbrand = document.querySelector('.navbar-brand');
    const navHome = document.querySelector('#navHome');
    if (window.scrollY > 0) {
        navbar.classList.add('bg-light');
        navbar.classList.add('shadow');
        navbrand.classList.remove('text-light');
        navHome.classList.remove('text-light');
    } else {
        navbar.classList.remove('bg-light');
        navbar.classList.remove('shadow');
        navbrand.classList.add('text-light');
        navHome.classList.add('text-light');
    }
});
