<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
</head>
<body>
    <footer>
        <section class="adresse">
            <h3>Adresse</h3>
            <br>
            <p><strong>Garage V. Parrot</strong></p>
            <p>24 Rue des Saules</p>
            <p>31400 Toulouse</p>
            <p>Tél : <strong>+33 9 10 20 30 40.</strong></p>   
        </section>
        <section class="horaires">
            <h3>Horaires d'ouverture</h3>
            <br>
            <?php include 'bdd/horaires.php' ?>
        </section>
    </footer>
</body>
</html>