<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/styles.css">
    <title>Connexion employé</title>
</head>
<body>
<header>
    <!--Logo du site-->    
    <div>
        <a href="../index.php"><img src="../images/logo.png" class="img-fluid logo-header" alt="Le logo du Garage V. Parrot"></a>
    </div>
    <!--Debut menu de navigation-->
    <nav class="navbar navbar-expand-md">
        <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">  
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item"><a class="nav-link" href="../services.php">Nos services</a></li>
                    <li class="nav-item"><a class="nav-link" href="../voitures.php">Véhicules d'occasion</a></li>
                    <li class="nav-item"><a class="nav-link" href="../avis.php">Avis clients</a></li>
                    <li class="nav-item"><a class="nav-link" href="../contact.php">Nous contacter</a></li>
                    <li class="nav-item"><a class="nav-link" href="connexion-employe.php" style="color: #f7931e;">Espace employés</a></li>    
                </ul>
            </div>
        </div>
    </nav>
    <!--Fin menu de navigation-->
</header>
<section class="traitement-form">  
    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Vérifie si l'utilisateur est déjà connecté
    /*if (isset($_SESSION['user_id'])) {
        header("Location:"  . $_SERVER['PHP_SELF']);
        exit();
    }*/

    $dsn = 'mysql:host=127.0.0.1;dbname=GarageVincentParrot';
    $username = 'adminGarage';
    $password = '20pKwL85g!7s';

    try{
        $pdo = new PDO($dsn, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $login = $_POST['email-employe'];
        $password = $_POST['password'];

        $query = 'SELECT * FROM utilisateurs WHERE email = :email';
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':email', $login);
        $stmt->execute();

        if($stmt->rowCount() == 1){
            $monUser = $stmt->fetch(PDO::FETCH_ASSOC);
            if(password_verify($password, $monUser['mdp'])){
                $_SESSION['user_id'] = $monUser['id_utilisateurs']; 
                echo '<h4 style="color: green;">Vous êtes désormais connecté à votre profil.</h4>';
                if ($login == 'admin@garagevparrot.com') {
                    $_SESSION['user_type'] = 'admin';
                    header("Location: content-admin.php");
                } else {
                    $_SESSION['user_type'] = 'employe';
                    header("Location: content-employe.php");}
            }else{
                echo "La connexion a échoué car votre mot de passe est incorrect.<br><br>";
            }
        }
        else{
            echo "Compte introuvable, êtes-vous sûr de votre mail ?<br><br>";
        }
    }
    catch (PDOException $e){
    echo "Erreur de connexion à la base de données : ". $e->getMessage();
    }} ?>
    <br>
    <button class="bouton-formulaire"><a href="content-admin.php">Profil Admin</a></button>
    <button class="bouton-formulaire"><a href="content-employe.php">Profil Employé</a></button>
    <button class="bouton-formulaire"><a href="deconnexion.php">Se déconnecter</a></button>
</section>  
<?php include '../footer.php' ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>