"use strict";

//Nav : Sticky
window.addEventListener('scroll', function(){
    let scroll = window.scrollY;
    const nav = document.querySelector('nav');

    if (scroll > 200) {
        nav.classList.add('sticky');
    } else {
        nav.classList.remove('sticky');
    }
});

///////////////////////  END  //////////////////////////////////////////////

// Animation : progression :
window.addEventListener('scroll', () => {
  const circle = document.getElementById('scroll-indicator');
  const scrollTop = window.scrollY;
  const docHeight = document.documentElement.scrollHeight - window.innerHeight;
  const scrollPercent = (scrollTop / docHeight) * 100;
  const color = 'green';
  const arrow = document.querySelector('.scroll-arrow');

  circle.style.background = `conic-gradient(${color} ${scrollPercent}%, transparent 0%)`;

  //Mise à jour de la direction de la flèche :
  if (scrollPercent >= 98) {
    arrow.innerHTML = '&#8593;'; // flèche vers le haut ↑
  } else {
    arrow.innerHTML = '&#x2193;'; // flèche vers le bas ↓
  }

});

///////////////////////  END  //////////////////////////////////////////////

//Animation : banner_title :
window.addEventListener('DOMContentLoaded', () => {
    const banner = document.querySelector('.bannerTitle');
    setTimeout(() => {
        banner.classList.add('show');
    }, 500);
});

///////////////////////  END  //////////////////////////////////////////////

//Footer map:

//Create map:
const centroid = [50.6702778, 4.5641667];
const map = L.map('mapid').setView(centroid, 13);

//Add tiles & marker:
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);
L.marker([50.6702778, 4.5641667]).addTo(map);
////////////////////////////////////////////
//Fonction de substitution à target _blank:
function openLink (event) {
    const link = "https://booking.optios.net/19311";
    window.open(link, "https://soinsdesoie.be", "_self");
    event.preventDefault();
}

