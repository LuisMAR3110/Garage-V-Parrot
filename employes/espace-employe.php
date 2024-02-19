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

    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Vérifie si l'utilisateur est déjà connecté
        if (isset($_SESSION['user_id'])) {
            header("Location:"  . $_SERVER['PHP_SELF']);
            exit();
        }

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
                echo '<h4 style="color: green;">Bienvenue dans votre espace employé</h4>';
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
    <h1>Espace Admin / Employé</h1>
        <br><br>
        <h5 style="color: #f7931e;">À l'attention des formatteurs et évaluateurs</h5>
        <br><br>
        <p style="text-align: justify;">Dans cet espace, c'était prévu qu'il y ait les différents formulaires qui puissent
            récupérer les données saisies et les transmettre à la base de données via des requêtes
            SQL. Les formulaires affichés auraient été différents dépendant de l'utilisateur qui est 
            actuellement connecté. Par exemple, si l'utilisateur avec la session active était l'admin,
            alors il aurait pu voir dans cet espace un formulaire qui lui permette de créer un nouvel 
            utilisateur en remplisant un champ 'email' et un champ 'mot de passe' (qui aurait été hashé
            avant d'étre transmis à la base de données). Cependant, ce formulaire n'aurait pas été 
            visible si la session active appartenait à l'utilisateur employé, car lui il n'aurait pas 
            les droits de créer un nouvel utilisateur.
        </p><br>
        <p style="text-align: justify;">Je n'ai pas réussi à ajouter ces fonctionnalités (qui étaient les toutes dernières
            sur lesquelles je devais travailler) dans mon projet par
            manque de temps (boulot à temps plein, se coucher tard les soirs pour suivre les cours, etc). 
            Hèlas ! Mais ce n'est pas grave, même si ce manque de temps me pénalise
            pour mon projet ECF, je compte bien continuer, améliorer, et bien terminer ce même 
            projet en l'utilisant pour mon Dossier Projet.
        </p>
        <br><br>
    <button class="bouton-formulaire"><a href="deconnexion.php">Se déconnecter</a></button>
</section>  
<?php include '../footer.php' ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>