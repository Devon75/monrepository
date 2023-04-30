// Sélectionnez votre barre de navigation
const nav = document.querySelector('nav');
const navLogo = nav.querySelector('.logo');
const navLinks = nav.querySelectorAll('a');
const socialLinks = nav.querySelector('#link');
const socialIcon = socialLinks.querySelectorAll('a');

// Ajoutez un écouteur d'événements sur le défilement de la page
window.addEventListener('scroll', () => {
  // Si la position de défilement est supérieure à la hauteur de la barre de navigation
  if (window.scrollY > nav.offsetHeight) {
    // Ajoutez la classe "blanc" à votre barre de navigation
    nav.classList.add('blanc');
    // Ajoutez la classe "noir" à vos liens de navigation
    navLinks.forEach(link => link.classList.add('noir'));
    // Ajoutez la classe "darkcyan" à vos liens de navigation
    socialIcon.forEach(link => link.classList.add('darkcyan'));
    navLogo.classList.add('darkcyan');
  } else {
    // Sinon, supprimez la classe "blanc" de votre barre de navigation
    nav.classList.remove('blanc');
    // Supprimez la classe "noir" de vos liens de navigation
    navLinks.forEach(link => link.classList.remove('noir'));
    // Supprimez la classe "darkcyan" de vos liens de navigation
    socialIcon.forEach(link => link.classList.remove('darkcyan'));
    navLogo.classList.remove('darkcyan');
  }
});



// On définit un tableau de mots à afficher
const mots = ["Développeur Informatique", "Web Designer", "Créateur de site web"];
// On initialise l'index à 0
let index = 0;
// On récupère l'élément avec l'ID "titlep" dans le DOM
const motAnimation = document.getElementById("titlep");
// On définit une variable pour stocker l'ID de l'animation
let animation;
// Si l'élément existe
if(motAnimation){
  // On lance une animation toutes les 3 secondes
  animation = setInterval(() => {
      // On incrémente l'index pour passer au mot suivant dans le tableau
      index = (index + 1) % 3;
      // On rend l'élément invisible avec opacity = 0
      motAnimation.style.opacity = "0";
      // On attend une seconde
      setTimeout(() => {
        // On change le texte de l'élément avec le mot suivant dans le tableau
        motAnimation.innerText = mots[index];
        // On rend l'élément visible avec opacity = 1
        motAnimation.style.opacity = "1";
      }, 1000);
  }, 3000);
  // Si la page est entièrement chargée, on rend l'élément visible avec opacity = 1
  document.addEventListener("DOMContentLoaded", (e) => {
      e.preventDefault();
      motAnimation.style.opacity = "1";
  });
} else {
    // Si l'élément n'existe pas, on affiche un message d'erreur dans la console
    console.error("L'élément avec l'ID 'titleP' n'existe pas dans le document.");
}



// On récupère l'élément avec l'ID "homeBtn" dans le DOM
const homeBtnContact = document.getElementById("homeBtn");
// On change le texte de cet élément à "Contactez moi"
homeBtnContact.textContent = 'Contactez moi';
// On récupère l'élément avec l'ID "contact" dans le DOM
const contactLink = document.getElementById('contact');

// On ajoute un écouteur d'événement "click" à l'élément "homeBtnContact"
homeBtnContact.addEventListener('click', (e) => {
    // On empêche le comportement par défaut du clic sur le bouton (qui serait de recharger la page)
    e.preventDefault();
    // On utilise la méthode "scrollIntoView" sur l'élément "contactLink" pour faire défiler la page jusqu'à cet élément
    contactLink.scrollIntoView({behavior: 'smooth'});
});



// Sélectionner le bouton "homeBtn"
const myButton = document.getElementById('homeBtn');

// Ajouter un écouteur d'événement pour le clic sur le bouton
myButton.addEventListener('click', (e) => {
  // Créer un élément "span" pour l'onde
  const wave = document.createElement('span');
  // Ajouter la classe "wave" à l'élément "span"
  wave.className = 'wave';
  // Ajouter l'élément "span" à l'intérieur du bouton "homeBtn"
  myButton.appendChild(wave);
  // Calculer la position de la souris par rapport au bouton
  const x = e.clientX - e.target.offsetLeft;
  const y = e.clientY - e.target.offsetTop;
  // Définir la position de l'onde en fonction de la position de la souris
  wave.style.top = y + 'px';
  wave.style.left = x + 'px';
  // Supprimer l'onde après un délai de 800 ms
  setTimeout(() => wave.remove(), 800);
});



// On récupère l'élément avec l'ID "btnCV" dans le DOM
const homeBtnCV = document.getElementById("btnCV");
// On change le texte de cet élément à "En savoir plus"
homeBtnCV.textContent = 'En savoir plus';
// On récupère l'élément avec l'ID "cv" dans le DOM
const cvLink = document.getElementById('cv');

// On ajoute un écouteur d'événement "click" à l'élément "homeBtnCV"
homeBtnCV.addEventListener('click', (e) => {
    // On empêche le comportement par défaut du clic sur le bouton (qui serait de recharger la page)
    e.preventDefault();
    // On utilise la méthode "scrollIntoView" sur l'élément "cvLink" pour faire défiler la page jusqu'à cet élément
    cvLink.scrollIntoView({behavior: 'smooth'});
});



// Sélectionner le bouton "btnCV"
const myCVButton = document.getElementById('btnCV');

// Ajouter un écouteur d'événement pour le clic sur le bouton
myCVButton.addEventListener('click', (e) => {
  // Créer un élément "span" pour l'onde
  const wave = document.createElement('span');
  // Ajouter la classe "wave" à l'élément "span"
  wave.className = 'wave';
  // Ajouter l'élément "span" à l'intérieur du bouton "btnCV"
  myCVButton.appendChild(wave);
  // Calculer la position de la souris par rapport au bouton
  const x = e.clientX - e.target.offsetLeft;
  const y = e.clientY - e.target.offsetTop;
  // Définir la position de l'onde en fonction de la position de la souris
  wave.style.top = y + 'px';
  wave.style.left = x + 'px';
  // Supprimer l'onde après un délai de 800 ms
  setTimeout(() => wave.remove(), 800);
});


// Sélectionner la barre de navigation
const navbar = document.getElementById("navigation");
// Obtenir la hauteur de la barre de navigation
const sticky = navbar.offsetHeight;

// Ajouter un écouteur d'événement pour le défilement de la page
window.addEventListener('scroll', (e) => {
  e.preventDefault();
  // Vérifier si la position de défilement de la page est supérieure ou égale à la hauteur de la barre de navigation
  if (window.scrollY >= sticky) {
    // Ajouter la classe "sticky" à la barre de navigation
    navbar.classList.add("sticky");
  } else {
    // Supprimer la classe "sticky" de la barre de navigation
    navbar.classList.remove("sticky");
  }
});
