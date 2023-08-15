window.addEventListener('scroll', function () {
    const navbar = document.querySelector('.navbar');
    if (window.scrollY > 0) {
        navbar.classList.add('bg-light');
        navbar.classList.add('shadow');

    } else {
        navbar.classList.remove('bg-light');
        navbar.classList.remove('shadow');

    }
});
