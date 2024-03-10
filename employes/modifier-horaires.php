<?php session_start(); ?>
<?php include 'requetes-horaires.php'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/styles.css">
    <title>Modification horaires</title>
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
    <h1>Horaires du garage</h1>
    <section class="traitement-form">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){

        //-----FORMULAIRE POUR LES LUNDIS-----
        if (isset($_POST['lundi'])) {
       
        $lundi = isset($_POST['lundi']) ? $_POST['lundi'] : '';

        if (empty($lundi)) {
        $error_form = "Veuillez remplir au moins un champ.";
        } else {
        $confirmation_envoi = "Le nouvel horaire a bien été enregistré.";
        }

        if (isset($confirmation_envoi)) {
            echo '<p style="color: green;">' . $confirmation_envoi . '</p>';
    
            /*$dsn = 'mysql:host=127.0.0.1;dbname=GarageVincentParrot';
            $username = 'adminGarage';
            $password = '20pKwL85g!7s';*/
        }
        
        try{
            $pdo = new PDO($dsn, $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $lundi = isset($_POST['lundi']) ? htmlspecialchars($_POST['lundi']) : '';
            $queryLun = 'UPDATE horaires SET heure = (?) WHERE jour = "Lundi :"';
            $stmtLun = $pdo->prepare($queryLun);
            $stmtLun->bindParam(1, $lundi, PDO::PARAM_STR);
            $stmtLun->execute();
        }
        catch (PDOException $e){
            echo "Erreur de connexion à la base de données : ". $e->getMessage();
            }

        if (isset($error_form)) {
                echo '<p style="color: red;">' . $error_form . '</p>';
            }
        }

        //-----FORMULAIRE POUR LES MARDIS-----
        if (isset($_POST['mardi'])) {
       
            $mardi = isset($_POST['mardi']) ? $_POST['mardi'] : '';
    
            if (empty($mardi)) {
            $error_form = "Veuillez remplir au moins un champ.";
            } else {
            $confirmation_envoi = "Le nouvel horaire a bien été enregistré.";
            }
    
            if (isset($confirmation_envoi)) {
                echo '<p style="color: green;">' . $confirmation_envoi . '</p>';
        
                $dsn = 'mysql:host=127.0.0.1;dbname=GarageVincentParrot';
                $username = 'adminGarage';
                $password = '20pKwL85g!7s';
            }
            
            try{
                $pdo = new PDO($dsn, $username, $password);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $mardi = isset($_POST['mardi']) ? htmlspecialchars($_POST['mardi']) : '';
                $queryMar = 'UPDATE horaires SET heure = (?) WHERE jour = "Mardi :"';
                $stmtMar = $pdo->prepare($queryMar);
                $stmtMar->bindParam(1, $mardi, PDO::PARAM_STR);
                $stmtMar->execute();
            }
            catch (PDOException $e){
                echo "Erreur de connexion à la base de données : ". $e->getMessage();
                }
    
            if (isset($error_form)) {
                    echo '<p style="color: red;">' . $error_form . '</p>';
                }
            }

            //-----FORMULAIRE POUR LES VENDREDIS-----
        if (isset($_POST['mercredi'])) {
       
            $mercredi = isset($_POST['mercredi']) ? $_POST['mercredi'] : '';
    
            if (empty($mercredi)) {
            $error_form = "Veuillez remplir au moins un champ.";
            } else {
            $confirmation_envoi = "Le nouvel horaire a bien été enregistré.";
            }
    
            if (isset($confirmation_envoi)) {
                echo '<p style="color: green;">' . $confirmation_envoi . '</p>';
        
                $dsn = 'mysql:host=127.0.0.1;dbname=GarageVincentParrot';
                $username = 'adminGarage';
                $password = '20pKwL85g!7s';
            }
            
            try{
                $pdo = new PDO($dsn, $username, $password);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $mercredi = isset($_POST['mercredi']) ? htmlspecialchars($_POST['mercredi']) : '';
                $queryMer = 'UPDATE horaires SET heure = (?) WHERE jour = "Mercredi :"';
                $stmtMer = $pdo->prepare($queryMer);
                $stmtMer->bindParam(1, $mercredi, PDO::PARAM_STR);
                $stmtMer->execute();
            }
            catch (PDOException $e){
                echo "Erreur de connexion à la base de données : ". $e->getMessage();
                }
    
            if (isset($error_form)) {
                    echo '<p style="color: red;">' . $error_form . '</p>';
                }
            }

                //-----FORMULAIRE POUR LES JEUDIS-----
        if (isset($_POST['jeudi'])) {
       
            $jeudi = isset($_POST['jeudi']) ? $_POST['jeudi'] : '';
    
            if (empty($jeudi)) {
            $error_form = "Veuillez remplir au moins un champ.";
            } else {
            $confirmation_envoi = "Le nouvel horaire a bien été enregistré.";
            }
    
            if (isset($confirmation_envoi)) {
                echo '<p style="color: green;">' . $confirmation_envoi . '</p>';
        
                $dsn = 'mysql:host=127.0.0.1;dbname=GarageVincentParrot';
                $username = 'adminGarage';
                $password = '20pKwL85g!7s';
            }
            
            try{
                $pdo = new PDO($dsn, $username, $password);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $jeudi = isset($_POST['jeudi']) ? htmlspecialchars($_POST['jeudi']) : '';
                $queryJeu = 'UPDATE horaires SET heure = (?) WHERE jour = "Jeudi :"';
                $stmtJeu = $pdo->prepare($queryJeu);
                $stmtJeu->bindParam(1, $jeudi, PDO::PARAM_STR);
                $stmtJeu->execute();
            }
            catch (PDOException $e){
                echo "Erreur de connexion à la base de données : ". $e->getMessage();
                }
    
            if (isset($error_form)) {
                    echo '<p style="color: red;">' . $error_form . '</p>';
                }
            }

                //-----FORMULAIRE POUR LES VENDREDIS-----
        if (isset($_POST['vendredi'])) {
       
            $vendredi = isset($_POST['vendredi']) ? $_POST['vendredi'] : '';
    
            if (empty($vendredi)) {
            $error_form = "Veuillez remplir au moins un champ.";
            } else {
            $confirmation_envoi = "Le nouvel horaire a bien été enregistré.";
            }
    
            if (isset($confirmation_envoi)) {
                echo '<p style="color: green;">' . $confirmation_envoi . '</p>';
        
                $dsn = 'mysql:host=127.0.0.1;dbname=GarageVincentParrot';
                $username = 'adminGarage';
                $password = '20pKwL85g!7s';
            }
            
            try{
                $pdo = new PDO($dsn, $username, $password);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $vendredi = isset($_POST['vendredi']) ? htmlspecialchars($_POST['vendredi']) : '';
                $queryVen = 'UPDATE horaires SET heure = (?) WHERE jour = "Vendredi :"';
                $stmtVen = $pdo->prepare($queryVen);
                $stmtVen->bindParam(1, $vendredi, PDO::PARAM_STR);
                $stmtVen->execute();
            }
            catch (PDOException $e){
                echo "Erreur de connexion à la base de données : ". $e->getMessage();
                }
    
            if (isset($error_form)) {
                    echo '<p style="color: red;">' . $error_form . '</p>';
                }
            }

                //-----FORMULAIRE POUR LES SAMEDIS-----
        if (isset($_POST['samedi'])) {
       
            $samedi = isset($_POST['samedi']) ? $_POST['samedi'] : '';
    
            if (empty($samedi)) {
            $error_form = "Veuillez remplir au moins un champ.";
            } else {
            $confirmation_envoi = "Le nouvel horaire a bien été enregistré.";
            }
    
            if (isset($confirmation_envoi)) {
                echo '<p style="color: green;">' . $confirmation_envoi . '</p>';
        
                $dsn = 'mysql:host=127.0.0.1;dbname=GarageVincentParrot';
                $username = 'adminGarage';
                $password = '20pKwL85g!7s';
            }
            
            try{
                $pdo = new PDO($dsn, $username, $password);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $samedi = isset($_POST['samedi']) ? htmlspecialchars($_POST['samedi']) : '';
                $querySam = 'UPDATE horaires SET heure = (?) WHERE jour = "Samedi :"';
                $stmtSam = $pdo->prepare($querySam);
                $stmtSam->bindParam(1, $samedi, PDO::PARAM_STR);
                $stmtSam->execute();
            }
            catch (PDOException $e){
                echo "Erreur de connexion à la base de données : ". $e->getMessage();
                }
    
            if (isset($error_form)) {
                    echo '<p style="color: red;">' . $error_form . '</p>';
                }
            }

                //-----FORMULAIRE POUR LES DIMANCHES-----
        if (isset($_POST['dimanche'])) {
       
            $dimanche = isset($_POST['dimanche']) ? $_POST['dimanche'] : '';
    
            if (empty($dimanche)) {
            $error_form = "Veuillez remplir au moins un champ.";
            } else {
            $confirmation_envoi = "Le nouvel horaire a bien été enregistré.";
            }
    
            if (isset($confirmation_envoi)) {
                echo '<p style="color: green;">' . $confirmation_envoi . '</p>';
        
                $dsn = 'mysql:host=127.0.0.1;dbname=GarageVincentParrot';
                $username = 'adminGarage';
                $password = '20pKwL85g!7s';
            }
            
            try{
                $pdo = new PDO($dsn, $username, $password);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $dimanche = isset($_POST['dimanche']) ? htmlspecialchars($_POST['dimanche']) : '';
                $queryDim = 'UPDATE horaires SET heure = (?) WHERE jour = "Dimanche :"';
                $stmtDim = $pdo->prepare($queryDim);
                $stmtDim->bindParam(1, $dimanche, PDO::PARAM_STR);
                $stmtDim->execute();
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
        <h3>Lundi</h3>
            <p>Horaire actuel : <?php echo $heureLundi['heure']; ?></p><br>
            <section class="formulaire-employe">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                <div class="input"> 
                    <label for="lundi">Nouvel horaire :</label>
                    <input id="lundi" name="lundi" type="text">
                </div>
                <button class="bouton-employe" type="submit">Enregistrer</button>
            </form>
            </section>
            <hr>
        <h3>Mardi</h3>
            <p>Horaire actuel : <?php echo $heureMardi['heure']; ?></p><br>
            <section class="formulaire-employe">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                <div class="input"> 
                    <label for="mardi">Nouvel horaire :</label>
                    <input id="mardi" name="mardi" type="text">
                </div>
                <button class="bouton-employe" type="submit">Enregistrer</button>
            </form>
            </section>
            <hr>
        <h3>Mercredi</h3>
            <p>Horaire actuel : <?php echo $heureMercredi['heure']; ?></p><br>
            <section class="formulaire-employe">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                <div class="input"> 
                    <label for="mercredi">Nouvel horaire :</label>
                    <input id="mercredi" name="mercredi" type="text">
                </div>
                <button class="bouton-employe" type="submit">Enregistrer</button>
            </form>
            </section>
            <hr>
        <h3>Jeudi</h3>
            <p>Horaire actuel : <?php echo $heureJeudi['heure']; ?></p><br>
            <section class="formulaire-employe">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                <div class="input"> 
                    <label for="jeudi">Nouvel horaire :</label>
                    <input id="jeudi" name="jeudi" type="text">
                </div>
                <button class="bouton-employe" type="submit">Enregistrer</button>
            </form>
            </section>
            <hr>
        <h3>Vendredi</h3>
            <p>Horaire actuel : <?php echo $heureVendredi['heure']; ?></p><br>
            <section class="formulaire-employe">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                <div class="input"> 
                    <label for="vendredi">Nouvel horaire :</label>
                    <input id="vendredi" name="vendredi" type="text">
                </div>
                <button class="bouton-employe" type="submit">Enregistrer</button>
            </form>
            </section>
            <hr>
        <h3>Samedi</h3>
            <p>Horaire actuel : <?php echo $heureSamedi['heure']; ?></p><br>
            <section class="formulaire-employe">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                <div class="input"> 
                    <label for="samedi">Nouvel horaire :</label>
                    <input id="samedi" name="samedi" type="text">
                </div>
                <button class="bouton-employe" type="submit">Enregistrer</button>
            </form>
            </section>
            <hr>
        <h3>Dimanche</h3>
            <p>Horaire actuel : <?php echo $heureDimanche['heure']; ?></p><br>
            <section class="formulaire-employe">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                <div class="input"> 
                    <label for="dimanche">Nouvel horaire :</label>
                    <input id="dimanche" name="dimanche" type="text">
                </div>
                <button class="bouton-employe" type="submit">Enregistrer</button>
            </form>
            </section>
            <hr>
    <button class="bouton-formulaire"><a href="connexion-employe.php">Retourner dans votre espace</a></button>
    </section>
<?php include '../footer.php' ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>