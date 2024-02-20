--CONTENU INITIAL

INSERT INTO utilisateurs
    (email, mdp)
VALUES 
    ('admin@garagevparrot.com', 'LeMDPAdmin!'),
    ('employe@garagevparrot.com', 'LeMDPEmploye');


INSERT INTO voitures
     (nom_voiture, prix, km, year_car)
VALUES   
    ('Audi', '14000', '100320', '2015'),
    ('BMW', '11500', '110000', '2013'),
    ('Chevrolet', '20000', '70340', '2016'),
    ('Fiat', '15000', '50600', '2019'),
    ('Ford', '9500', '120200', '2014'),
    ('Jeep', '9000', '110900', '2013'),
    ('Nissan', '8000', '150400', '2012'),
    ('Peugeot', '4500', '190000', '2007'),
    ('Renault', '4000', '195700', '2008'),
    ('Volkswagen', '5000', '320000', '1989'),
    ('Volvo', '21000', '38570', '2020'),
    ('Mercedes', '15000', '78000', '2016');

INSERT INTO services
    (categorie, nom_service)
VALUES
    ('Carrosserie', 'Réparation de la carrosserie'),
    ('Carrosserie', 'Peinture et polissage'),
    ('Carrosserie', 'Vitres et pare-brise'),
    ('Mécanique', 'Entretien régulier'),
    ('Mécanique', 'Remplacement de freins'),
    ('Mécanique', 'Vidange'),
    ('Mécanique', 'Suspension et direction');

INSERT INTO horaires
    (jour, heure)
VALUES
    ('Lundi :', '9h - 12h / 14h - 18h'),
    ('Mardi :', '9h - 12h / 14h - 18h'),
    ('Mercredi :', '9h - 12h / 14h - 18h'),
    ('Jeudi :', '9h - 12h / 14h - 18h'),
    ('Vendredi :', '9h - 12h / 14h - 18h'),
    ('Samedi :', '9h - 12h30'),
    ('Dimanche :', 'Fermé');

INSERT INTO avis
    (note, nomClient_avis, commentaire_avis)
VALUES
    ('5 sur 5', 'Emma CAPPA', 'Enfin un garage où on se sent bien même si on connait pas grande chose en méchanique'),
    ('5 sur 5', 'Enrrique REYES', 'Des vrais pros !'),
    ('4 sur 5', 'Johny Lopez', 'Satisfait, service rapide et pas si cher.'),
    ('5 sur 5', 'Amanda Delacroix', 'Service au top, Je viens toujours ici pour faire la révision de mon véhicule');

-- FIN CONTENU INITIAL

-- DÉBUT MODIFICATIONS POST-CRÉATION BDD

-- Table voitures

ALTER TABLE voitures ADD couleur_car VARCHAR(25) NOT NULL;

ALTER TABLE voitures ADD carburant VARCHAR(25) NOT NULL;

ALTER TABLE voitures ADD nombre_portes INT NOT NULL;

ALTER TABLE voitures ADD boite_vitesses VARCHAR(25) NOT NULL;

ALTER TABLE voitures ADD puissance_moteur VARCHAR(25) NOT NULL;

UPDATE voitures
SET couleur_car = 'Bleu', carburant = 'Essence', nombre_portes = '5', boite_vitesses = 'Manuelle', puissance_moteur = '195 ch'
WHERE nom_voiture = 'Audi';

UPDATE voitures
SET couleur_car = 'Noir', carburant = 'Essence', nombre_portes = '3', boite_vitesses = 'Manuelle', puissance_moteur = '290 ch'
WHERE nom_voiture = 'BMW';

UPDATE voitures
SET couleur_car = 'Gris', carburant = 'Essence', nombre_portes = '5', boite_vitesses = 'Automatique', puissance_moteur = '280 ch'
WHERE nom_voiture = 'Chevrolet';

UPDATE voitures
SET couleur_car = 'Rouge', carburant = 'Essence', nombre_portes = '3', boite_vitesses = 'Manuelle', puissance_moteur = '115 ch'
WHERE nom_voiture = 'Fiat';

UPDATE voitures
SET couleur_car = 'Gris', carburant = 'Essence', nombre_portes = '5', boite_vitesses = 'Automatique', puissance_moteur = '180 ch'
WHERE nom_voiture = 'Ford';

UPDATE voitures
SET couleur_car = 'Rouge', carburant = 'Essence', nombre_portes = '5', boite_vitesses = 'Manuelle', puissance_moteur = '240 ch'
WHERE nom_voiture = 'Jeep';

UPDATE voitures
SET couleur_car = 'Blanc', carburant = 'Essence', nombre_portes = '3', boite_vitesses = 'Manuelle', puissance_moteur = '195 ch'
WHERE nom_voiture = 'Nissan';

UPDATE voitures
SET couleur_car = 'Rouge', carburant = 'Essence', nombre_portes = '3', boite_vitesses = 'Manuelle', puissance_moteur = '90 ch'
WHERE nom_voiture = 'Peugeot';

UPDATE voitures
SET couleur_car = 'Bleu', carburant = 'Diesel', nombre_portes = '3', boite_vitesses = 'Manuelle', puissance_moteur = '85 ch'
WHERE nom_voiture = 'Renault';

UPDATE voitures
SET couleur_car = 'Bleu', carburant = 'Diesel', nombre_portes = '3', boite_vitesses = 'Manuelle', puissance_moteur = '60 ch'
WHERE nom_voiture = 'Volkswagen';

UPDATE voitures
SET couleur_car = 'Marron', carburant = 'Essence', nombre_portes = '5', boite_vitesses = 'Manuelle', puissance_moteur = '210 ch'
WHERE nom_voiture = 'Volvo';

UPDATE voitures
SET couleur_car = 'Blanc', carburant = 'Essence', nombre_portes = '5', boite_vitesses = 'Automatique', puissance_moteur = '310 ch'
WHERE nom_voiture = 'Mercedes';



