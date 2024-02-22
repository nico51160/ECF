/************* LISTE DES FONCTIONS **************/

// Fonction validerPass
const VALIDERPASS = (valeur)=> {
    let explication = document.querySelector('#explicationPass');
    let controle    = document.querySelector('#controlePass');
    let regexMaj    = /[A-Z]/;
    let regexMin    = /[a-z]/;
    let regexChi    = /\d/;
    let regexSpc    = /[?!:;,.-_}><{]/;
    if(valeur.value.length < 7) {
        controle.innerHTML = '<i class="fas fa-exclamation-triangle"></i>';
        controle.classList.remove('vert');
        controle.classList.add('rouge');
        explication.innerText = "Le pass doit contenir au moins 7 caractères";
        explication.classList.add('rouge');
        return false;
    } else if(!regexMaj.test(valeur.value)) {
        controle.innerHTML = '<i class="fas fa-exclamation-triangle"></i>';
        controle.classList.remove('vert');
        controle.classList.add('rouge');
        explication.innerText = "Le pass doit contenir au moins une lettre en majuscule";
        explication.classList.add('rouge');
        return false;
    } else if(!regexMin.test(valeur.value)) {
        controle.innerHTML = '<i class="fas fa-exclamation-triangle"></i>';
        controle.classList.remove('vert');
        controle.classList.add('rouge');
        explication.innerText = "Le pass doit contenir au moins une lettre en minuscule";
        explication.classList.add('rouge');
        return false;
    } else if(!regexChi.test(valeur.value)) {
        controle.innerHTML = '<i class="fas fa-exclamation-triangle"></i>';
        controle.classList.remove('vert');
        controle.classList.add('rouge');
        explication.innerText = "Le pass doit contenir au moins un chiffre";
        explication.classList.add('rouge');
        return false;
    } else if(!regexSpc.test(valeur.value)) {
        controle.innerHTML = '<i class="fas fa-exclamation-triangle"></i>';
        controle.classList.remove('vert');
        controle.classList.add('rouge');
        explication.innerText = "Le pass doit contenir au moins un caractère spécial ( ?!:;,.-_}><{ )";
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


const VALIDERPASSCONFIRME = (valeur)=> {
    let explication = document.querySelector('#explicationPassConfirme');
    let controle    = document.querySelector('#controlePassConfirme');
    let regexMaj    = /[A-Z]/;
    let regexMin    = /[a-z]/;
    let regexChi    = /\d/;
    let regexSpc    = /[?!:;,.-_}><{]/;
    if(valeur.value.length < 7) {
        controle.innerHTML = '<i class="fas fa-exclamation-triangle"></i>';
        controle.classList.remove('vert');
        controle.classList.add('rouge');
        explication.innerText = "Le pass doit contenir au moins 7 caractères";
        explication.classList.add('rouge');
        return false;
    } else if(!regexMaj.test(valeur.value)) {
        controle.innerHTML = '<i class="fas fa-exclamation-triangle"></i>';
        controle.classList.remove('vert');
        controle.classList.add('rouge');
        explication.innerText = "Le pass doit contenir au moins une lettre en majuscule";
        explication.classList.add('rouge');
        return false;
    } else if(!regexMin.test(valeur.value)) {
        controle.innerHTML = '<i class="fas fa-exclamation-triangle"></i>';
        controle.classList.remove('vert');
        controle.classList.add('rouge');
        explication.innerText = "Le pass doit contenir au moins une lettre en minuscule";
        explication.classList.add('rouge');
        return false;
    } else if(!regexChi.test(valeur.value)) {
        controle.innerHTML = '<i class="fas fa-exclamation-triangle"></i>';
        controle.classList.remove('vert');
        controle.classList.add('rouge');
        explication.innerText = "Le pass doit contenir au moins un chiffre";
        explication.classList.add('rouge');
        return false;
    } else if(!regexSpc.test(valeur.value)) {
        controle.innerHTML = '<i class="fas fa-exclamation-triangle"></i>';
        controle.classList.remove('vert');
        controle.classList.add('rouge');
        explication.innerText = "Le pass doit contenir au moins un caractère spécial ( ?!:;,.-_}><{ )";
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
/************* LISTE DES FONCTIONS **************/




/************* CONTROLE DU FORMULAIRE **************/
let form = document.querySelector('#box form');

// Contrôle du champ "password"
form.newPassword.addEventListener('change', function() {
    VALIDERPASS(this);
});

// Contrôle du champ "password"
form.confirmPassword.addEventListener('change', function() {
    VALIDERPASSCONFIRME(this);
});

/************* CONTROLE ET DEBLOCAGE DU FORMULAIRE **************/

form.addEventListener('change', function() {
    
    if( VALIDERPASS(form.newPassword) && VALIDERPASSCONFIRME(form.confirmPassword)) {

        let bouton = document.querySelector('#box button');
        bouton.removeAttribute('disabled');

    } else{

    }
       
});