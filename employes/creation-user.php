<?php

//FICHIER NON FONCTIONNEL POUR LE PROJET ECF, À AMÉLIORER POUR LE DOSSIER PROJET

if (!isset($_SESSION['user_id'])) {
    header("Location: espace-employe.php");
    exit();
}

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

    $dsn = 'mysql:host=127.0.0.1;dbname=GarageVincentParrot';
    $username = 'adminGarage';
    $password = '20pKwL85g!7s';

    try{
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $emailLogin = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
    $mdpLogin = isset($_POST['mdp']) ? htmlspecialchars($_POST['mdp']) : '';
    $mdpLogin_hashe = password_hash($mdpLogin, PASSWORD_DEFAULT);
    $queryUserCreation = 'INSERT INTO utilisateurs (email, mdp) VALUES (?, ?)';
    $stmtUserCreation = $pdo->prepare($queryUserCreation);
    $stmtUserCreation->bindParam(1, $emailLogin, PDO::PARAM_STR);
    $stmtUserCreation->bindParam(2, $mdpLogin, PDO::PARAM_STR);
    $stmtUserCreation->execute();
    }
    catch (PDOException $e){
    echo "Erreur de connexion à la base de données : ". $e->getMessage();
    }
    }
    if (isset($error_form)) {
    echo '<p style="color: red;">' . $error_form . '</p>';
    }
}?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Création d'un compte utilisateur</title>
</head>
<body>
    <section class="insertBDD">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" novalidate>
            <div class="input">
                <label for="email">Login du nouvel utilisateur :</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div class="input">
                <label for="mdp">Mot de passe du nouvel utilisateur :</label>
                <input type="password" name="mdp" id="mdp" required>
            </div>
            <button class="bouton-formulaire" type="submit">Enregistrer</button>
        </form>
    </section>
</body>
</html>
