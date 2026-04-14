// Initialisation des animations AOS
AOS.init({ duration: 1000, once: false, mirror: true });

// Effet de scroll sur la barre de navigation
window.addEventListener('scroll', () => {
    const navbar = document.querySelector('.navbar');
    if (window.scrollY > 50) navbar.classList.add('scrolled');
    else navbar.classList.remove('scrolled');
});

// Effet Machine à écrire
const textElement = document.getElementById("typewriter");
const phrases = ["Développeur Full-Stack", "Spécialiste Java & PHP", "Passionné de Cyber-Sécurité"];
let wordIdx = 0, charIdx = 0, isDeleting = false;

function typeEffect() {
    if (!textElement) return; // Sécurité si l'élément n'existe pas sur la page

    const currentPhrase = phrases[wordIdx];
    textElement.textContent = isDeleting ? currentPhrase.substring(0, charIdx--) : currentPhrase.substring(0, charIdx++);

    let typeSpeed = isDeleting ? 50 : 100;

    if (!isDeleting && charIdx === currentPhrase.length + 1) {
        typeSpeed = 2000;
        isDeleting = true;
    } else if (isDeleting && charIdx === 0) {
        isDeleting = false;
        wordIdx = (wordIdx + 1) % phrases.length;
        typeSpeed = 500;
    }

    setTimeout(typeEffect, typeSpeed);
}

document.addEventListener("DOMContentLoaded", typeEffect);
