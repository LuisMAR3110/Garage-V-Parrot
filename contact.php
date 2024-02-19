<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/styles.css">
    <title>Contactez-nous</title>
</head>
<body>
    <header>
        <?php include 'header.html'; ?>
    </header>
    <section class="texte-contact">
        <h2>Envoyez-nous un message</h2>
        <br>
        <p>Notre staff est à votre écoute ! Veuillez utiliser le formulaire de contact ci-dessous 
            pour nous envoyer un message si vous voulez prendre un rendez-vous ou demander des informations.
        Vous pouvez également nous joindre par téléphone au <strong>+33 9 10 20 30 40.</strong></p>
        <br>
    </section>
    <!--Formulaire de contact-->
    <?php include 'formulaire-contact.php' ?>
    <!--Fin formulaire de contact-->
    <?php include 'footer.php' ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>