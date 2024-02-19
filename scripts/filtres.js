// Écouteurs d'événements pour les éléments de filtrage
document.getElementById('prixFiltre').addEventListener('input', filtrerVoitures);
document.getElementById('kmFiltre').addEventListener('input', filtrerVoitures);
document.getElementById('anneeFiltre').addEventListener('input', filtrerVoitures);
document.getElementById('prixFiltre').addEventListener('input', afficherValeurPrix);
document.getElementById('anneeFiltre').addEventListener('input', afficherValeurAnnee);
document.getElementById('kmFiltre').addEventListener('input', afficherValeurKm);

// Fonction de filtrage des voitures
function filtrerVoitures() {
    // Récupérer les valeurs des filtres
    let prixMax = parseFloat(document.getElementById('prixFiltre').value);
    let anneeMax = parseFloat(document.getElementById('anneeFiltre').value);
    let kmMax = parseFloat(document.getElementById('kmFiltre').value);
    let voitures = document.querySelectorAll('.car');

    voitures.forEach(voiture => {
        let prixVoiture = parseFloat(voiture.dataset.prix);
        let anneeVoiture = parseFloat(voiture.dataset.annee);
        let kmVoiture = parseFloat(voiture.dataset.km);
        let afficherVoiture = true;

        if (prixVoiture > prixMax) {
            afficherVoiture = false;
        };

        if (anneeVoiture > anneeMax) {
            afficherVoiture = false;
        };

        if (kmVoiture > kmMax) {
            afficherVoiture = false;
        };

        if (afficherVoiture) {
            voiture.style.display = 'block'; 
        } else {
            voiture.style.display = 'none'; 
        };
    });

};


function afficherValeurPrix() {
    document.getElementById('valeurPrix').textContent = document.getElementById('prixFiltre').value;
};

function afficherValeurAnnee() {
    document.getElementById('valeurAnnee').textContent = document.getElementById('anneeFiltre').value;
};

function afficherValeurKm() {
    document.getElementById('valeurKm').textContent = document.getElementById('kmFiltre').value;
};
