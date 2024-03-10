<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/styles.css">
    <title>Modification services</title>
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
    <h1>Créer un nouveau compte</h1>
<section class="traitement-form">
<?php

$dsn = 'mysql:host=127.0.0.1;dbname=GarageVincentParrot';
    $username = 'adminGarage';
    $password = '20pKwL85g!7s';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupère les données du formulaire
    $emailLogin = isset($_POST['email']) ? $_POST['email'] : '';
    $mdpLogin = isset($_POST['mdp']) ? $_POST['mdp'] : '';

    if (empty($emailLogin) || empty($mdpLogin)) {
        $error_form = "La création de l'utilisateur a échoué. Veuillez réessayer en
        remplissant tous les champs obligatoires.";
    } else {
        $confirmation_form = "Le nouvel utilisateur a bien été créé et ajouté à la
        base de données.";
    }

    if (isset($confirmation_form)) {
        echo '<p style="color: green;">' . $confirmation_form . '</p>';

    try{
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $emailLogin = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
    $mdpLogin = isset($_POST['mdp']) ? htmlspecialchars($_POST['mdp']) : '';
    $mdpLogin_hashe = password_hash($mdpLogin, PASSWORD_DEFAULT);
    $queryUserCreation = 'INSERT INTO utilisateurs (email, mdp) VALUES (:newLogin, :newMdp)';
    $stmtUserCreation = $pdo->prepare($queryUserCreation);
    $stmtUserCreation->execute(['newLogin' => $emailLogin, 'newMdp' => $mdpLogin_hashe]);
    }
    catch (PDOException $e){
    echo "Erreur de connexion à la base de données : ". $e->getMessage();
    }
    }
    if (isset($error_form)) {
    echo '<p style="color: red;">' . $error_form . '</p>';
    }
}?>
</section>
    <section class="formulaire-employe">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" novalidate>
            <div class="input">
                <label for="email">Login du nouvel utilisateur :</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div class="input">
                <label for="mdp">Mot de passe du nouvel utilisateur :</label>
                <input type="password" name="mdp" id="mdp" required>
            </div>
            <button class="bouton-employe" type="submit">Enregistrer</button>
        </form>
        <hr>
    <button class="bouton-formulaire"><a href="connexion-employe.php">Retourner dans votre espace</a></button>
    </section>
    <?php include '../footer.php' ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
