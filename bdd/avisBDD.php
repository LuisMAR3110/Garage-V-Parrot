<?php
$dsn = 'mysql:host=127.0.0.1;dbname=GarageVincentParrot';
$username = 'adminGarage';
$password = '20pKwL85g!7s';

try{
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //Rêquetes pour Avis sur le Caroussel 
    $queryAvis1comment = 'SELECT commentaire_avis FROM avis WHERE id_avis = "5"';
    $stmt = $pdo->query($queryAvis1comment);
    $Avis1comment = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $queryAvis1client = 'SELECT nomClient_avis FROM avis WHERE id_avis = "5"';
    $stmt = $pdo->query($queryAvis1client);
    $Avis1client = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $queryAvis1note = 'SELECT note FROM avis WHERE id_avis = "5"';
    $stmt = $pdo->query($queryAvis1note);
    $Avis1note = $stmt->fetchAll(PDO::FETCH_ASSOC);


    $queryAvis2comment = 'SELECT commentaire_avis FROM avis WHERE id_avis = "6"';
    $stmt = $pdo->query($queryAvis2comment);
    $Avis2comment = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $queryAvis2client = 'SELECT nomClient_avis FROM avis WHERE id_avis = "6"';
    $stmt = $pdo->query($queryAvis2client);
    $Avis2client = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $queryAvis2note = 'SELECT note FROM avis WHERE id_avis = "6"';
    $stmt = $pdo->query($queryAvis2note);
    $Avis2note = $stmt->fetchAll(PDO::FETCH_ASSOC);


    $queryAvis3comment = 'SELECT commentaire_avis FROM avis WHERE id_avis = "7"';
    $stmt = $pdo->query($queryAvis3comment);
    $Avis3comment = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $queryAvis3client = 'SELECT nomClient_avis FROM avis WHERE id_avis = "7"';
    $stmt = $pdo->query($queryAvis3client);
    $Avis3client = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $queryAvis3note = 'SELECT note FROM avis WHERE id_avis = "7"';
    $stmt = $pdo->query($queryAvis3note);
    $Avis3note = $stmt->fetchAll(PDO::FETCH_ASSOC);


    $queryAvis4comment = 'SELECT commentaire_avis FROM avis WHERE id_avis = "8"';
    $stmt = $pdo->query($queryAvis4comment);
    $Avis4comment = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $queryAvis4client = 'SELECT nomClient_avis FROM avis WHERE id_avis = "8"';
    $stmt = $pdo->query($queryAvis4client);
    $Avis4client = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $queryAvis4note = 'SELECT note FROM avis WHERE id_avis = "8"';
    $stmt = $pdo->query($queryAvis4note);
    $Avis4note = $stmt->fetchAll(PDO::FETCH_ASSOC);

}
catch (PDOException $e){
    echo "Erreur de connexion à la base de données : ". $e->getMessage();
}

?>