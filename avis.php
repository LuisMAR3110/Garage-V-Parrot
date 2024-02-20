<?php include 'bdd/avisBDD.php' ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/styles.css">
    <title>Les avis de nos clients</title>
</head>
<body>
    <header>
        <?php include 'header.html'; ?>
    </header>
    <section class="section-avis">
        <h1>Les avis de nos clients</h1>
        <?php include 'carousel-avis.php' ?>
        <hr>
    </section>
    <div class="formulaire-avis">
        <h3>Donnez votre propre avis</h3>
        <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){

        $nomPrenom = isset($_POST['nom-prenom']) ? $_POST['nom-prenom'] : '';
        $note = isset($_POST['note']) ? $_POST['note'] : '';
        $comment = isset($_POST['comment']) ? $_POST['comment'] : '';
    
    if (empty($nomPrenom) || empty($comment)) {
        $error_form = "L'envoi de votre avis a échoué. Veuillez réessayer en
        remplissant tous les champs obligatoires.";
    } else {
        $confirmation_envoi = "Votre avis a bien été envoyé, et nous vous
        en remercions. Votre avis est très important pour nous.";
    }
    
    // Afficher le message de confirmation s'il est défini
    if (isset($confirmation_envoi)) {
        echo '<p style="color: green;">' . $confirmation_envoi . '</p>';

        $dsn = 'mysql:host=127.0.0.1;dbname=GarageVincentParrot';
        $username = 'adminGarage';
        $password = '20pKwL85g!7s';

    try{
        $pdo = new PDO($dsn, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $nomPrenom = isset($_POST['nom-prenom']) ? htmlspecialchars($_POST['nom-prenom']) : '';
        $note = isset($_POST['note']) ? htmlspecialchars($_POST['note']) : '';
        $comment = isset($_POST['comment']) ? htmlspecialchars($_POST['comment']) : '';
        $queryAvisClient = 'INSERT INTO avis (note, nomClient_avis, commentaire_avis) VALUES (?, ?, ?)';
        $stmt = $pdo->prepare($queryAvisClient);
        $stmt->bindParam(1, $note, PDO::PARAM_STR);
        $stmt->bindParam(2, $nomPrenom, PDO::PARAM_STR);
        $stmt->bindParam(3, $comment, PDO::PARAM_STR);
        $stmt->execute();
    }
    catch (PDOException $e){
    echo "Erreur de connexion à la base de données : ". $e->getMessage();
    }

    }

    // Afficher le message d'erreur s'il est défini
    if (isset($error_form)) {
        echo '<p style="color: red;">' . $error_form . '</p>';
    }
    }
    ?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" novalidate>
            <legend>Votre avis :</legend>
            <br>
            <div class="input">
                <label for="nom-prenom">Nom et prénom :</label>
                <input id="nom-prenom" name="nom-prenom" type="text" required>
            </div>
            <div class="input">
                <label for="note-liste">Note :</label>
                <select id="note-liste" name="note" required>
                    <option value="1">1 sur 5</option>
                    <option value="2">2 sur 5</option>
                    <option value="3">3 sur 5</option>
                    <option value="4">4 sur 5</option>
                    <option value="5" selected>5 sur 5</option>
                </select>
            </div>
            <div class="input">
                <label for="comment">Votre avis :</label>
                <textarea name="comment" id="comment" placeholder="Écrivez vos commentaires ici" required></textarea>
            </div>
            <button class="bouton-formulaire" type="submit">Envoyer</button>
        </form>
    </div>
    <?php include 'footer.php' ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="scripts/formulaires.js"></script>
</body>
</html>