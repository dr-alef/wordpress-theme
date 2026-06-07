$(document).ready(function () {

    $('#carousel-blog').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        responsive: {
            0: {
                items: 1
            },
            576: {
                items: 2
            },
            768: {
                items: 2
            },
            992: {
                items: 3
            },
            1200: {
                items: 4
            }
        }
    });


    $('#relatedposts').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            576: {
                items: 2
            },
            768: {
                items: 2
            },
            992: {
                items: 3
            },
            1200: {
                items: 3
            }
        }
    })

    dark-light-mode
    
    const darkBody = document.getElementsByTagName('body');
    const darkswitch = document.querySelector('.switch');

    darkswitch.addEventListener('click', function () {
        document.body.classList.toggle('light-mode');
    });
    darkswitch.addEventListener('click', function () {
        document.body.classList.toggle('dark-mode');
    });
    darkswitch.addEventListener('click', function () {
        document.body.classList.add('light-mode');
        document.body.classList.remove('dark-mode');
    });

    darkswitch.addEventListener('click', function () {
        document.body.classList.add('dark-mode');
        document.body.classList.remove('light-mode');
    });
    dark-light-mode

});

