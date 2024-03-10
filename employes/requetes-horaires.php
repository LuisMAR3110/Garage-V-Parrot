<?php
$dsn = 'mysql:host=127.0.0.1;dbname=GarageVincentParrot';
$username = 'adminGarage';
$password = '20pKwL85g!7s';

try{
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //Rêquetes pour le lundi
    $queryLundi = 'SELECT heure FROM horaires WHERE jour = "Lundi : "';
    $stmtLundi = $pdo->query($queryLundi);
    $horaireLundi = $stmtLundi->fetchAll(PDO::FETCH_ASSOC);
    foreach($horaireLundi as $heureLundi){
        $heureLundi['heure'];
    }

    //Rêquetes pour le mardi
    $queryMardi = 'SELECT heure FROM horaires WHERE jour = "Mardi : "';
    $stmtMardi = $pdo->query($queryMardi);
    $horaireMardi = $stmtMardi->fetchAll(PDO::FETCH_ASSOC);
    foreach($horaireMardi as $heureMardi){
        $heureMardi['heure'];
    }

    //Rêquetes pour le mercredi
    $queryMercredi = 'SELECT heure FROM horaires WHERE jour = "Mercredi : "';
    $stmtMercredi = $pdo->query($queryMercredi);
    $horaireMercredi = $stmtMercredi->fetchAll(PDO::FETCH_ASSOC);
    foreach($horaireMercredi as $heureMercredi){
        $heureMercredi['heure'];
    }

    //Rêquetes pour le jeudi
    $queryJeudi = 'SELECT heure FROM horaires WHERE jour = "Jeudi : "';
    $stmtJeudi = $pdo->query($queryJeudi);
    $horaireJeudi = $stmtJeudi->fetchAll(PDO::FETCH_ASSOC);
    foreach($horaireJeudi as $heureJeudi){
        $heureJeudi['heure'];
    }

    //Rêquetes pour le vendredi
    $queryVendredi = 'SELECT heure FROM horaires WHERE jour = "Vendredi : "';
    $stmtVendredi = $pdo->query($queryVendredi);
    $horaireVendredi = $stmtVendredi->fetchAll(PDO::FETCH_ASSOC);
    foreach($horaireVendredi as $heureVendredi){
        $heureVendredi['heure'];
    }

    //Rêquetes pour le samedi
    $querySamedi = 'SELECT heure FROM horaires WHERE jour = "Samedi : "';
    $stmtSamedi = $pdo->query($querySamedi);
    $horaireSamedi = $stmtSamedi->fetchAll(PDO::FETCH_ASSOC);
    foreach($horaireSamedi as $heureSamedi){
        $heureSamedi['heure'];
    }

    //Rêquetes pour le dimanche
    $queryDimanche = 'SELECT heure FROM horaires WHERE jour = "Dimanche : "';
    $stmtDimanche = $pdo->query($queryDimanche);
    $horaireDimanche = $stmtDimanche->fetchAll(PDO::FETCH_ASSOC);
    foreach($horaireDimanche as $heureDimanche){
        $heureDimanche['heure'];
    }
}
catch (PDOException $e){
    echo "Erreur de connexion à la base de données : ". $e->getMessage();
}

?>