<?php session_start();  ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/styles.css">
    <title>Formulaire de connexion</title>
</head>
<body>
    <?php
    /*if (isset($_SESSION['user_id'])) {
        header("Location: espace-employe.php");
        exit();
    }*/
    ini_set('display_errors', 'off'); //Pour ne pas afficher les warnings concernant les array 'user_type'

    if ($_SESSION['user_type'] == 'admin') {
        header("Location: content-admin.php");
    } elseif ($_SESSION['user_type'] == 'employe') {
        header("Location: content-employe.php");
    }
    ?>
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
    <section class="formulaire-connexion">
        <form action="espace-employe.php" method="POST" novalidate>
            <fieldset>
                <legend>Vos identifiants</legend>
                <br>
                <div class="input">
                    <label for="email-employe">Login :</label>
                    <input id="email-employe" name="email-employe" type="text" required>
                </div>
                <div class="input">
                    <label for="password">Mot de passe :</label>
                    <input id="password" name="password" type="password" required>
                </div>
            </fieldset>
            <button class="bouton-formulaire" type="submit">Se connecter</button>
        </form>
    </section>
    <?php include '../footer.php' ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="../scripts/formulaires.js"></script>
</body>
</html>