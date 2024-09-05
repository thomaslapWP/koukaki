

document.addEventListener("DOMContentLoaded", function () {
    const NuagesBleu = document.getElementById("NuagesBleu");
    let element = document.querySelector(".banner__parallaxe-logo");
    const NuagesBleuVitesse = 0.3;
    const NuagesBleuPosition = window.innerHeight / 2 - 40;

    function scrollNuage() {
        const NuagesBleuX = -window.scrollY * NuagesBleuVitesse + NuagesBleuPosition;
        NuagesBleu.style.transform = `translateX(${NuagesBleuX}px)`;
    }

    window.addEventListener("scroll", scrollNuage);

    setTimeout(function () {
        element.classList.add("float");
    }, 4000);
});

