let searchBtn = document.querySelector('#search-btn');
let searchBar = document.querySelector('.search-bar-container');

let menu = document.querySelector('#menu-bar');
let navbar = document.querySelector('.navbar');

window.onscroll = () => {
    searchBtn.classList.remove('fa-times');
    searchBar.classList.remove('active');
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
}

menu.addEventListener('click', () => {
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
});

searchBtn.addEventListener('click', () => {
    searchBtn.classList.toggle('fa-times');
    searchBar.classList.toggle('active');
});


window.onscroll = function() {
    let navbar = document.querySelector('header');
    if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
};


document.addEventListener('DOMContentLoaded', () => {
    const box = document.getElementById('myBox');

    if (box) {
        box.addEventListener('mouseover', () => {
            box.style.transition = 'transform 0.5s';
            box.style.transform = 'scale(1.2)';
        });

        box.addEventListener('mouseout', () => {
            box.style.transform = 'scale(1)';
        });
    }
});

document.addEventListener('DOMContentLoaded', () => {
    gsap.from("#myBox", {
        opacity: 0,
        y: -50,
        duration: 1.5
    });
});

document.addEventListener('DOMContentLoaded', () => {
    const bouncingButton = document.getElementById('bounceButton');

    bouncingButton.addEventListener('click', () => {
        bouncingButton.classList.add('bounce');
        setTimeout(() => {
            bouncingButton.classList.remove('bounce');
        }, 1000);
    });
});


document.addEventListener('DOMContentLoaded', () => {
    const particleButton = document.getElementById('particleButton');

    particleButton.addEventListener('mousemove', (e) => {
        const particle = document.createElement('span');
        particle.className = 'particle';
        document.body.appendChild(particle);

        particle.style.left = `${e.pageX}px`;
        particle.style.top = `${e.pageY}px`;

        setTimeout(() => {
            particle.remove();
        }, 1000);
    });
});


function typeWriter(elementId, text, speed) {
    let i = 0;
    const element = document.getElementById(elementId);

    function type() {
        if (i < text.length) {
            element.textContent += text.charAt(i);
            i++;
            setTimeout(type, speed);
        }
    }

    type();
}

document.addEventListener('DOMContentLoaded', () => {
    typeWriter("typewriterText", "Bienvenue dans notre bibliothèque", 100);
});













