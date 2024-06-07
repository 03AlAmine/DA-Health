// On récupère l'élément du logo de recherche par son ID
document.getElementById('search-logo').addEventListener('click', function () {
    // On récupère l'élément du champ de recherche par son ID
    var searchInput = document.getElementById('search-input');

    // On vérifie si le champ de recherche est actuellement invisible ou non défini
    if (searchInput.style.display === 'none' || searchInput.style.display === '') {
        // Si c'est le cas, on le rend visible
        searchInput.style.display = 'block';

        // On met le focus sur le champ de recherche, ce qui signifie que le curseur clignotant sera à l'intérieur du champ
        searchInput.focus();
    } else {
        // Si le champ de recherche est visible, on le rend invisible
        searchInput.style.display = 'none';
    }
});

//--------------------------------------------------------
// Sélectionnez tous les boutons avec la classe "btn"


//--------------------------------------------------------

/*// Fonction pour vérifier si un élément est visible dans la fenêtre du navigateur
function isElementInViewport(el) {
    var rect = el.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
}

// Fonction pour activer les animations lorsque la section est visible
function activateAnimations() {
    var textForAbout = document.getElementById('text-for-about');
    var imageAbout = document.getElementById('image-about');
    /*  var img_secon_sec1 = document.querySelector('.img_secon_sec1');
      var img_secon_sec2 = document.querySelector('.img_secon_sec2');
      var img_secon_sec3 = document.querySelector('.img_secon_sec3'); 

    if (isElementInViewport(textForAbout)) {
        textForAbout.classList.add('animate-for-about');
    }

    if (isElementInViewport(imageAbout)) {
        imageAbout.classList.add('animate-image-about');
    }

    /*
    if (isElementInViewport(img_secon_sec1)) {
        img_secon_sec1.classList.add('animate-for-img_sec1');
    }

    if (isElementInViewport(img_secon_sec2)) {
        img_secon_sec2.classList.add('animate-for-img_sec2');
    }

    if (isElementInViewport(img_secon_sec3)) {
        img_secon_sec3.classList.add('animate-for-img_sec3');
    } 
}

// Événement de défilement de la page pour déclencher les animations
window.addEventListener('scroll', function () {
    activateAnimations();
});

// Activation initiale des animations au chargement de la page
activateAnimations();








// Fonction pour vérifier si un élément est visible dans la fenêtre du navigateur
function isElementInViewport(al) {
    var rect = al.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
}

// Fonction pour activer les animations lorsque la section est visible
function activateAnimation() {
    var img_secon_sec1 = document.querySelector('.img_secon_sec1');
    // var img_secon_sec2 = document.querySelector('.img_secon_sec2');
    // var img_secon_sec3 = document.querySelector('.img_secon_sec3');

    if (isElementInViewport(img_secon_sec1)) {
        img_secon_sec1.classList.add('animate-for-img_sec1');
    }
    /*
        if (isElementInViewport(img_secon_sec2)) {
            img_secon_sec2.classList.add('animate-for-img_sec2');
        }
    
        if (isElementInViewport(img_secon_sec3)) {
            img_secon_sec3.classList.add('animate-for-img_sec3');
        } 
}

// Événement de défilement de la page pour déclencher les animations
window.addEventListener('scroll', function () {
    activateAnimation();
});

// Activation initiale des animations au chargement de la page
activateAnimation();
*/
