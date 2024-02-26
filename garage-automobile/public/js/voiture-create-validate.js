const VALIDERSTRING = (valeur, name)=> {
    let explication = document.querySelector(`#explication${name}`);
    let controle    = document.querySelector(`#controle${name}`);
    let regex = /[0-9._?!:;,}><{]+/g;
    let verifString = regex.test(valeur.value);
    if(valeur.value.length < 3) {
        controle.innerHTML = '<i class="fas fa-exclamation-triangle"></i>';
        controle.classList.remove('vert');
        controle.classList.add('rouge');
        explication.innerText = "Le " +name.toLowerCase()+ " ne peut avoir moins de 3 caractères";
        explication.classList.add('rouge');
        return false;
    }else if(valeur.value.length > 50) {
        controle.innerHTML = '<i class="fas fa-exclamation-triangle"></i>';
        controle.classList.remove('vert');
        controle.classList.add('rouge');
        explication.innerText = "Le " +name.toLowerCase()+ " ne peut avoir plus de 50 caractères";
        explication.classList.add('rouge');
        return false;
    } else if(!verifString) {
        controle.innerHTML = '<i class="fas fa-check"></i>';
        controle.classList.remove('rouge');
        controle.classList.add('vert');
        explication.innerText = "";
        return true;
    } else {
        controle.innerHTML = '<i class="fas fa-exclamation-triangle"></i>';
        controle.classList.remove('vert');
        controle.classList.add('rouge');
        explication.innerText = "Le " +name.toLowerCase()+ " n'est pas correct (ne doit comporter que des lettres)";
        explication.classList.add('rouge');
        return false;
    }  
}

const VALIDETEXT = (valeur, name)=> {
    let explication = document.querySelector(`#explication${name}`);
    let controle    = document.querySelector(`#controle${name}`);
    let regex = /[}><{]+/g;
    let verifString = regex.test(valeur.value);
    if(valeur.value.length < 20) {
        controle.innerHTML = '<i class="fas fa-exclamation-triangle"></i>';
        controle.classList.remove('vert');
        controle.classList.add('rouge');
        explication.innerText = "Le " +name.toLowerCase()+ " ne peut avoir moins de 20 caractères";
        explication.classList.add('rouge');
        return false;
    }else if(valeur.value.length > 500) {
        controle.innerHTML = '<i class="fas fa-exclamation-triangle"></i>';
        controle.classList.remove('vert');
        controle.classList.add('rouge');
        explication.innerText = "Le " +name.toLowerCase()+ " ne peut avoir plus de 500 caractères";
        explication.classList.add('rouge');
        return false;
    } else if(!verifString) { 
        controle.innerHTML = '<i class="fas fa-check"></i>';
        controle.classList.remove('rouge');
        controle.classList.add('vert');
        explication.innerText = "";
        return true;
    } else {
        controle.innerHTML = '<i class="fas fa-exclamation-triangle"></i>';
        controle.classList.remove('vert');
        controle.classList.add('rouge');
        explication.innerText = "Le " +name.toLowerCase()+ " n'est pas correct (caracteres speciaux non autorisés : <> {})";
        explication.classList.add('rouge');
        return false;
    }  
}

// Fonction validerAnnée
const VALIDERANNEE = (valeur)=> {
    let explication = document.querySelector('#explicationAnnee');
    let controle    = document.querySelector('#controleAnnee');
    let regexChi    = /\d/;
    if(valeur.value < 1950) {
        controle.innerHTML = '<i class="fas fa-exclamation-triangle"></i>';
        controle.classList.remove('vert');
        controle.classList.add('rouge');
        explication.innerText = "L'année minimum est 1950";
        explication.classList.add('rouge');
        return false;
    }else if(valeur.value > 2024) {
        controle.innerHTML = '<i class="fas fa-exclamation-triangle"></i>';
        controle.classList.remove('vert');
        controle.classList.add('rouge');
        explication.innerText = "L'année maximum est 2024'";
        explication.classList.add('rouge');
        return false;
    } else if(!regexChi.test(valeur.value)) {
        controle.innerHTML = '<i class="fas fa-exclamation-triangle"></i>';
        controle.classList.remove('vert');
        controle.classList.add('rouge');
        explication.innerText = "L'année doit contenir uniquement des chiffres";
        explication.classList.add('rouge');
        return false;
    } else {
        controle.innerHTML = '<i class="fas fa-check"></i>';
        controle.classList.remove('rouge');
        controle.classList.add('vert');
        explication.innerText = "";
        return true;
    }
}

// Fonction validerAnnée
const VALIDERPRIX = (valeur)=> {
    let explication = document.querySelector('#explicationPrix');
    let controle    = document.querySelector('#controlePrix');
    let regexChi    = /\d/;
    if(valeur.value < 1 ) {
        controle.innerHTML = '<i class="fas fa-exclamation-triangle"></i>';
        controle.classList.remove('vert');
        controle.classList.add('rouge');
        explication.innerText = "Vous devez indiquez le prix";
        explication.classList.add('rouge');
        return false;
    }else if(valeur.value > 1000000) {
        controle.innerHTML = '<i class="fas fa-exclamation-triangle"></i>';
        controle.classList.remove('vert');
        controle.classList.add('rouge');
        explication.innerText = "Le prix ne peut exceder un milion d'euros'";
        explication.classList.add('rouge');
        return false;
    } else if(!regexChi.test(valeur.value)) {
        controle.innerHTML = '<i class="fas fa-exclamation-triangle"></i>';
        controle.classList.remove('vert');
        controle.classList.add('rouge');
        explication.innerText = "La prix doit contenir uniquement des chiffres";
        explication.classList.add('rouge');
        return false;
    } else {
        controle.innerHTML = '<i class="fas fa-check"></i>';
        controle.classList.remove('rouge');
        controle.classList.add('vert');
        explication.innerText = "";
        return true;
    }
}

// Fonction validerAnnée
const VALIDERKM = (valeur)=> {
    let explication = document.querySelector('#explicationKm');
    let controle    = document.querySelector('#controleKm');
    let regexChi    = /\d/;
    if(valeur.value < 1 ) {
        controle.innerHTML = '<i class="fas fa-exclamation-triangle"></i>';
        controle.classList.remove('vert');
        controle.classList.add('rouge');
        explication.innerText = "Vous devez indiquez le nombre de kilometrage";
        explication.classList.add('rouge');
        return false;
    }else if(valeur.value > 1000000) {
        controle.innerHTML = '<i class="fas fa-exclamation-triangle"></i>';
        controle.classList.remove('vert');
        controle.classList.add('rouge');
        explication.innerText = "Le nombre de kilometrage maximum autorisé est 400000'";
        explication.classList.add('rouge');
        return false;
    } else if(!regexChi.test(valeur.value)) {
        controle.innerHTML = '<i class="fas fa-exclamation-triangle"></i>';
        controle.classList.remove('vert');
        controle.classList.add('rouge');
        explication.innerText = "Le kilometrage doit contenir uniquement des chiffres";
        explication.classList.add('rouge');
        return false;
    } else {
        controle.innerHTML = '<i class="fas fa-check"></i>';
        controle.classList.remove('rouge');
        controle.classList.add('vert');
        explication.innerText = "";
        return true;
    }
}

let form = document.querySelector('#box form');

form.nom.addEventListener('change', function() {
    VALIDERSTRING(this, 'Nom');
});
form.caracteristiques.addEventListener('change', function() {
    VALIDETEXT(this,'Caracteristiques');
});
form.moteur.addEventListener('change', function() {
    VALIDERSTRING(this, 'Moteur');
});
form.annee.addEventListener('change', function() {
    VALIDERANNEE(this);
});
form.prix.addEventListener('change', function() {
    VALIDERPRIX(this);
});
form.kilometrage.addEventListener('change', function() {
    VALIDERKM(this);
});

let bouton = document.querySelector('#box button');
form.addEventListener('keyup', function() {
    if( VALIDERSTRING(form.nom, 'Nom') && VALIDERPRIX(form.prix) && VALIDETEXT(form.caracteristiques, 'Caracteristiques') && VALIDERKM(form.kilometrage) && VALIDERSTRING(form.moteur, 'Moteur') && VALIDERANNEE(form.annee)) {
        bouton.removeAttribute('disabled');
    } 
});
form.addEventListener('keyup', function() {
    if( !(VALIDERSTRING(form.nom, 'Nom')) || !(VALIDERPRIX(form.prix)) || !(VALIDETEXT(form.caracteristiques, 'Caracteristiques')) || !(VALIDERKM(form.kilometrage)) || !(VALIDERSTRING(form.moteur, 'Moteur')) || !(VALIDERANNEE(form.annee))) {
    bouton.setAttribute('disabled', "");
} 
});

