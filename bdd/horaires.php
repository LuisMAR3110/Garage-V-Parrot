<?php
$dsn = 'mysql:host=127.0.0.1;dbname=GarageVincentParrot';
$username = 'adminGarage';
$password = '20pKwL85g!7s';

try{
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //Récupérer les horaires
    $query = 'SELECT * FROM horaires';
    $stmt = $pdo->query($query);
    $horaires = $stmt->fetchAll(PDO::FETCH_ASSOC);

    //Afficher les horaires
    foreach($horaires as $horaire){
        echo '<b>' . $horaire['jour'] . '</b>' . " " . $horaire['heure'] . '<br>';
    }
}
catch (PDOException $e){
    echo "Erreur de connexion à la base de données : ". $e->getMessage();
}

?>