<?php
// Connexion à la base de données
    $dsn = 'mysql:host=127.0.0.1;dbname=GarageVincentParrot';
    $username = 'adminGarage';
    $password = '20pKwL85g!7s';

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}

// Hasher le mot de passe
$mdpAdmin = "motdepasseAdminGarage!!24";
$mdpAdmin_hashé = password_hash($mdpAdmin, PASSWORD_DEFAULT);
$mdpEmploye = "motdepasseEmployeGarage!!24";
$mdpEmploye_hashé = password_hash($mdpEmploye, PASSWORD_DEFAULT);

// Insérer les valeurs dans la table
$nom_utilisateurAdmin = "admin@garagevparrot.com";
$nom_utilisateurEmploye = "employe@garagevparrot.com";
$queryAdmin = "INSERT INTO utilisateurs (email, mdp) VALUES (:nom_utilisateurAdmin, :mdpAdmin)";
$stmtAdmin = $pdo->prepare($queryAdmin);
$stmtAdmin->execute(['nom_utilisateurAdmin' => $nom_utilisateurAdmin, 'mdpAdmin' => $mdpAdmin_hashé]);
$queryEmploye = "INSERT INTO utilisateurs (email, mdp) VALUES (:nom_utilisateurEmploye, :mdpEmploye)";
$stmtEmploye = $pdo->prepare($queryEmploye);
$stmtEmploye->execute(['nom_utilisateurEmploye' => $nom_utilisateurEmploye, 'mdpEmploye' => $mdpEmploye_hashé]);

// Fermer la connexion
$pdo = null;
?>
