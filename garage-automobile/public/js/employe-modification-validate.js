/************* LISTE DES FONCTIONS **************/
// Fonction validerString
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

// Fonction validerEmail
const VALIDEREMAIL = (valeur)=> {
    let explication = document.querySelector('#explicationEmail');
    let controle    = document.querySelector('#controleEmail');
    let regex = /^[a-z0-9.-_]+@[a-z0-9.-_]+\.[a-z]{2,4}$/gi;
    let verifEmail = regex.test(valeur.value);
    if(verifEmail) {
        controle.innerHTML = '<i class="fas fa-check"></i>';
        controle.classList.remove('rouge');
        controle.classList.add('vert');
        explication.innerText = "";
        return true;
    } else {
        controle.innerHTML = '<i class="fas fa-exclamation-triangle"></i>';
        controle.classList.remove('vert');
        controle.classList.add('rouge');
        explication.innerText = "L'adresse email n'est pas correcte";
        explication.classList.add('rouge');
        return false;
    }
}

// Fonction validerPortable
const VALIDERPORTABLE = (valeur)=> {
    let explication = document.querySelector('#explicationTelephone');
    let controle    = document.querySelector('#controleTelephone');
    let regexChi    = /\d/;
    if(valeur.value.length !== 10) {
        controle.innerHTML = '<i class="fas fa-exclamation-triangle"></i>';
        controle.classList.remove('vert');
        controle.classList.add('rouge');
        explication.innerText = "Le portable doit contenir 10 chiffres";
        explication.classList.add('rouge');
        return false;
    } else if(!regexChi.test(valeur.value)) {
        controle.innerHTML = '<i class="fas fa-exclamation-triangle"></i>';
        controle.classList.remove('vert');
        controle.classList.add('rouge');
        explication.innerText = "Le portable doit contenir uniquement des chiffres";
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

// Contrôle du champ "nom"
form.nom.addEventListener('change', function() {
    VALIDERSTRING(this,'Nom');
});
// Contrôle du champ "prenom"
form.prenom.addEventListener('change', function() {
    VALIDERSTRING(this,'Prenom');
});
// Contrôle du champ "email" 
form.email.addEventListener('change', function() {
    VALIDEREMAIL(this);
});
// Contrôle du champ "portable" 
form.telephone.addEventListener('change', function() {
    VALIDERPORTABLE(this);
});
// Contrôle du champ "login"
form.login.addEventListener('change', function() {
    VALIDERSTRING(this,'Login');
});

/************* CONTROLE ET DEBLOCAGE DU FORMULAIRE **************/
let bouton = document.querySelector('#box button');
form.addEventListener('mousemove', function() {
    if( VALIDERSTRING(form.nom, 'Nom') &&  VALIDERSTRING(form.prenom, 'Prenom') && VALIDEREMAIL(form.email) && VALIDERPORTABLE(form.telephone) && VALIDERSTRING(form.login,'Login')) {
        bouton.removeAttribute('disabled');
    }
});
form.addEventListener('keyup', function() {
    if( VALIDERSTRING(form.nom, 'Nom') &&  VALIDERSTRING(form.prenom, 'Prenom') && VALIDEREMAIL(form.email) && VALIDERPORTABLE(form.telephone) && VALIDERSTRING(form.login,'Login')) {
        bouton.removeAttribute('disabled');
    }
});
form.addEventListener('keyup', function() {
        if( !(VALIDERSTRING(form.nom, 'Nom')) || !(VALIDERSTRING(form.prenom, 'Prenom')) || !(VALIDEREMAIL(form.email)) || !(VALIDERPORTABLE(form.telephone)) || !(VALIDERSTRING(form.login,'Login'))) {
        bouton.setAttribute('disabled', "");
    } 
});  