<?php
$dsn = 'mysql:host=127.0.0.1;dbname=GarageVincentParrot';
$username = 'adminGarage';
$password = '20pKwL85g!7s';

try{
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //Rêquete pour Carrosserie 
    $queryCarrosserie = 'SELECT nom_service FROM services WHERE categorie = "Carrosserie"';
    $stmt = $pdo->query($queryCarrosserie);
    $servicesCarrosserie = $stmt->fetchAll(PDO::FETCH_ASSOC);

    //Rêquete pour Mécanique
    $queryMecanique = 'SELECT nom_service FROM services WHERE categorie = "Mécanique"';
    $stmt = $pdo->query($queryMecanique);
    $servicesMecanique = $stmt->fetchAll(PDO::FETCH_ASSOC);

}
catch (PDOException $e){
    echo "Erreur de connexion à la base de données : ". $e->getMessage();
}

?>