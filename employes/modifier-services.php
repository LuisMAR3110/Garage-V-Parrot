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
<h1>Les services du garage</h1>
<section class="traitement-form">
<?php
    $dsn = 'mysql:host=127.0.0.1;dbname=GarageVincentParrot';
    $username = 'adminGarage';
    $password = '20pKwL85g!7s';

    if ($_SERVER["REQUEST_METHOD"] == "POST"){

    //------FORMULAIRE AJOUT CARROSSERIE-----
    if (isset($_POST['newCarrosserie'])) {
       
        $newCarrosserie = isset($_POST['newCarrosserie']) ? $_POST['newCarrosserie'] : '';

        if (empty($newCarrosserie)) {
        $error_form = "Veuillez remplir le champ.";
        } else {
        $confirmation_envoi = "Le nouveau service a bien été enregistré.";
        }

        if (isset($confirmation_envoi)) {
            echo '<p style="color: green;">' . $confirmation_envoi . '</p>';
        }
        
        try{
            $pdo = new PDO($dsn, $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $newCarrosserie = isset($_POST['newCarrosserie']) ? htmlspecialchars($_POST['newCarrosserie']) : '';
            $querynewCarrosserie = 'INSERT INTO services (categorie, nom_service) VALUES ("Carrosserie", ?)';
            $stmtnewCarrosserie = $pdo->prepare($querynewCarrosserie);
            $stmtnewCarrosserie->bindParam(1, $newCarrosserie, PDO::PARAM_STR);
            $stmtnewCarrosserie->execute();
        }
        catch (PDOException $e){
            echo "Erreur de connexion à la base de données : ". $e->getMessage();
            }

        if (isset($error_form)) {
                echo '<p style="color: red;">' . $error_form . '</p>';
            }
        }
    
        //------FORMULAIRE AJOUT MÉCANIQUE-----
    if (isset($_POST['newMecanique'])) {
       
        $newMecanique = isset($_POST['newMecanique']) ? $_POST['newMecanique'] : '';

        if (empty($newMecanique)) {
        $error_form = "Veuillez remplir le champ.";
        } else {
        $confirmation_envoi = "Le nouveau service a bien été enregistré.";
        }

        if (isset($confirmation_envoi)) {
            echo '<p style="color: green;">' . $confirmation_envoi . '</p>';
        }
        
        try{
            $pdo = new PDO($dsn, $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $newMecanique = isset($_POST['newMecanique']) ? htmlspecialchars($_POST['newMecanique']) : '';
            $querynewMecanique = 'INSERT INTO services (categorie, nom_service) VALUES ("Mecanique", ?)';
            $stmtnewMecanique = $pdo->prepare($querynewMecanique);
            $stmtnewMecanique->bindParam(1, $newMecanique, PDO::PARAM_STR);
            $stmtnewMecanique->execute();
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
</section>
<section class="content-employe">
    <!-- AJOUTER SERVICE -->
    <h5>Dans la catégorie 'Carrosserie' :</h5>
        <section class="formulaire-employe">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <div class="input"> 
                    <label for="newCarrosserie">Nouvel service :</label>
                    <input id="newCarrosserie" name="newCarrosserie" type="text">
            </div>
            <button class="bouton-employe" type="submit">Ajouter</button>
        </form>
        </section>
        <hr>
    <h5>Dans la catégorie 'Mécanique' :</h5>
        <section class="formulaire-employe">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <div class="input"> 
                    <label for="newMecanique">Nouvel service :</label>
                    <input id="newMecanique" name="newMecanique" type="text">
            </div>
            <button class="bouton-employe" type="submit">Ajouter</button>
        </form>
        </section>
    <br><br>
    <!-- SUPPRIMER SERVICE -->
    <!--<h3>Supprimer un service</h3>
    <h5>Carrosserie</h5>
        <form action="" method="POST">
            <p><?php ?></p>
            <button class="bouton-formulaire" type="submit" name="">Supprimer</button>
        </form>
    <h5>Mécanique</h5>
        <form action="" method="POST">
            <p><?php ?></p>
            <button class="bouton-formulaire" type="submit" name="">Supprimer</button>
        </form> -->
        <!-- MODIFIER SERVICE -->
    <!--<br><br>
    <h3>Mofidier un service</h3>
    <h5>Carrosserie</h5>
        <form action="" method="POST">
            <p><?php ?></p>
            <button class="bouton-formulaire" type="submit" name="">Supprimer</button>
        </form>
    <h5>Mécanique</h5>
        <form action="" method="POST">
            <p><?php ?></p>
            <button class="bouton-formulaire" type="submit" name="">Supprimer</button>
        </form> -->
        <hr>
    <button class="bouton-formulaire"><a href="connexion-employe.php">Retourner dans votre espace</a></button>
</section>
<?php include '../footer.php' ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>