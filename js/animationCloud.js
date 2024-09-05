


const NuagesBleu = document.getElementById("NuagesBleu");


const NuagesBleuVitesse = 0.3;


const NuagesBleuPosition = window.innerHeight / 2 - 40;


function scrollNuage() {
  
  const NuagesBleuX = -window.scrollY * NuagesBleuVitesse + NuagesBleuPosition;
  
  
  NuagesBleu.style.transform = `translateX(${NuagesBleuX}px)`; 
}


window.addEventListener("scroll", scrollNuage);
