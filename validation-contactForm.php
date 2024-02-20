<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/styles.css">
    <title>Envoi de message</title>
</head>
<body>
    <header>
        <?php include 'header.html'; ?>
    </header>
<section class="traitement-form">  
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $nom = isset($_POST['nom']) ? $_POST['nom'] : '';
    $prenom = isset($_POST['prenom']) ? $_POST['prenom'] : '';
    $email = isset($_POST['mail']) ? $_POST['mail'] : '';
    $telephone = isset($_POST['telephone']) ? $_POST['telephone'] : '';
    $sujet = isset($_POST['sujet-liste']) ? $_POST['sujet-liste'] : '';
    $message = isset($_POST['message']) ? $_POST['message'] : '';

if (empty($nom) || empty($prenom) || empty($email) || empty($telephone) || empty($message)) {
    $error_form = "L'envoi de votre message a échoué. Veuillez réessayer en
    remplissant tous les champs obligatoires.";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $error_form = "L'envoi de votre message a échoué. Veuillez réessayer en
    fournissant une adresse email valide.";
} else {
    $confirmation_envoi = "Merci de nous avoir contacté. Votre message a bien
    été envoyé. Un membre de notre staff reviendra vers vous sous peu.";
}

if (isset($confirmation_envoi)) {
    echo '<p style="color: green;">' . $confirmation_envoi . '</p>';

    $dsn = 'mysql:host=127.0.0.1;dbname=GarageVincentParrot';
    $username = 'adminGarage';
    $password = '20pKwL85g!7s';

    try{
        $pdo = new PDO($dsn, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $nom = isset($_POST['nom']) ? htmlspecialchars($_POST['nom']) : '';
        $prenom = isset($_POST['prenom']) ? htmlspecialchars($_POST['prenom']) : '';
        $email = isset($_POST['mail']) ? htmlspecialchars($_POST['mail']) : '';
        $telephone = isset($_POST['telephone']) ? htmlspecialchars($_POST['telephone']) : '';
        $sujet = isset($_POST['sujet-liste']) ? htmlspecialchars($_POST['sujet-liste']) : '';
        $message = isset($_POST['message']) ? htmlspecialchars($_POST['message']) : '';
        $queryMessageClient = 'INSERT INTO messagesClients (sujet, nom_client, prenom_client, email_client, tel, message_client) VALUES (?, ?, ?, ?, ?, ?)';
        $stmt = $pdo->prepare($queryMessageClient);
        $stmt->bindParam(1, $sujet, PDO::PARAM_STR);
        $stmt->bindParam(2, $nom, PDO::PARAM_STR);
        $stmt->bindParam(3, $prenom, PDO::PARAM_STR);
        $stmt->bindParam(4, $email, PDO::PARAM_STR);
        $stmt->bindParam(5, $telephone, PDO::PARAM_INT);
        $stmt->bindParam(6, $message, PDO::PARAM_STR);;
        $stmt->execute();
    }
    catch (PDOException $e){
    echo "Erreur de connexion à la base de données : ". $e->getMessage();
    }


if (isset($error_form)) {
    echo '<p style="color: red;">' . $error_form . '</p>';
}

}
}
?>
<br>
<button class="bouton-formulaire"><a href="index.php">Retourner à la page d'accueil</a></button>
</section>  
<?php include 'footer.php' ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>