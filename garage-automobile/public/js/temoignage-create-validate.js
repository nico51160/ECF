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

// Fonction validerNote
const VALIDERNOTE = (valeur)=> {
    let explication = document.querySelector('#explicationNote');
    let controle    = document.querySelector('#controleNote');
    let regexChi    = /\d/;
    if(valeur.value <= 0) {
        controle.innerHTML = '<i class="fas fa-exclamation-triangle"></i>';
        controle.classList.remove('vert');
        controle.classList.add('rouge');
        explication.innerText = "Le note est minimum 1";
        explication.classList.add('rouge');
        return false;
    }else if(valeur.value > 10) {
        controle.innerHTML = '<i class="fas fa-exclamation-triangle"></i>';
        controle.classList.remove('vert');
        controle.classList.add('rouge');
        explication.innerText = "La note est maximum 10";
        explication.classList.add('rouge');
        return false;
    } else if(!regexChi.test(valeur.value)) {
        controle.innerHTML = '<i class="fas fa-exclamation-triangle"></i>';
        controle.classList.remove('vert');
        controle.classList.add('rouge');
        explication.innerText = "La note doit contenir uniquement des chiffres";
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
form.commentaire.addEventListener('change', function() {
    VALIDETEXT(this,'Commentaire');
});
form.note.addEventListener('change', function() {
    VALIDERNOTE(this);
});

let bouton = document.querySelector('#box button');
form.addEventListener('keyup', function() {
    if(   VALIDERSTRING(form.nom, 'Nom') && VALIDETEXT(form.commentaire, 'Commentaire') && VALIDERNOTE(form.note) ) {
        bouton.removeAttribute('disabled');
    } 
});
form.addEventListener('keyup', function() {
    if( !(VALIDERSTRING(form.nom, 'Nom')) || !(VALIDETEXT(form.commentaire, 'Commentaire')) || !(VALIDERNOTE(form.note))) {
    bouton.setAttribute('disabled', "");
} 
});

