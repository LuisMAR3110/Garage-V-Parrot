CREATE DATABASE GarageVincentParrot;

USE GarageVincentParrot;

-- INSTRUCTIONS INITIALES

CREATE TABLE utilisateurs
(
    id_utilisateurs INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(255) NOT NULL UNIQUE,
    mdp VARCHAR(255) NOT NULL
);

CREATE TABLE voitures
(
    id_voitures INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nom_voiture VARCHAR(150) NOT NULL,
    prix DECIMAL(10,0) NOT NULL,
    km INT NOT NULL,
    year_car INT NOT NULL
);

CREATE TABLE services
(
    id_services INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    categorie VARCHAR(50),
    nom_service VARCHAR(255)
);

CREATE TABLE horaires
(
    id_horaires INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    jour VARCHAR(25) NOT NULL,
    heure VARCHAR(255)
);

CREATE TABLE messagesClients
(
    id_messagesClients INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    sujet VARCHAR(255),
    nom_client VARCHAR(50) NOT NULL,
    prenom_client VARCHAR(50) NOT NULL,
    email_client VARCHAR(255) NOT NULL,
    tel VARCHAR(25),
    message_client TEXT NOT NULL,
    date_creation TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE avis
(
    id_avis INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    note VARCHAR(25) NOT NULL,
    nomClient_avis VARCHAR(100) NOT NULL,
    commentaire_avis TEXT
);

-- FIN INSTRUCTIONS INITIALES

-- LES MODIFICATIONS FAITES SUR CES TABLES SONT DANS LE FICHIER 'contenu-bdd.sql'

