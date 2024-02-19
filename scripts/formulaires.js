let form = document.querySelector('form');

//Pour le formulaire de contact et voiture
form.addEventListener('submit', function(Event){
let nom = document.getElementById('nom').value;
let prenom = document.getElementById('prenom').value;
let mail = document.getElementById('mail').value;
let message = document.getElementById('message').value;
let sujet = document.getElementById('sujet-liste').value;

if (nom == '' || prenom == '' || mail == '' || message == ''){
    alert('Veuillez remplir tous les champs requis.');
    Event.preventDefault();
};

if (!mail.includes('@') || !mail.includes('.')){
    alert('Veuillez renseigner une adresse email valide.');
    Event.preventDefault();
};

if (sujet === ''){
    alert('Veuillez selectionner un sujet.');
    Event.preventDefault();
};

});


//Pour le formulaire d'avis
form.addEventListener('submit', function(Event){
let nomPrenom = document.getElementById('nom-prenom').value;
let comment = document.getElementById('comment').value;

if (nomPrenom == '' || comment == ''){
    alert('Veuillez remplir tous les champs requis.');
    Event.preventDefault();
};
});


//Pour le formulaire de connexion
form.addEventListener('submit', function(Event){
    let emailEmploye = document.getElementById('email-employe').value;
    let password = document.getElementById('password').value;
    
    if (emailEmploye == '' || password == ''){
        alert('Veuillez remplir tous les champs requis.');
        Event.preventDefault();
    };
    });
