<?php include 'bdd/servicesBDD.php' ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/styles.css">
    <title>Nos services - Garage V. Parrot</title>
</head>
<body>
    <header>
        <?php include 'header.html'; ?>
    </header>
    <section class="texte-services">
    <h2>Votre véhicule entre de bonnes mains</h2>
    <br>
    <p>Chez <strong>Garage V. Parrot</strong>, notre priorité est votre satisfaction et la bonne santé de votre véhicule.
    Nos mécaniciens comptent avec de nombreuses années d'expérience dans la réparation de véhicules de toutes les marques.
    </p>
    <br>
    <p>Voici la liste de services proposés par notre garage :</p>
    <div class="services">
            <div class="carrosserie">
                <div><img src="images/carrosserie.png"></div>
                <div>
                    <h2 style="text-align: center;">Carrosserie</h2>
                    <br>
                    <ul>
                        <?php foreach($servicesCarrosserie as $serviceCarrosserie){
                            echo'<li>' . $serviceCarrosserie['nom_service'] . '</li>';
                        } ?>
                    </ul>
                </div>
            </div>
            <div class="mécanique">
                <div><img src="images/mecanique.png"></div>
                <div>
                    <h2 style="text-align: center;">Mécanique</h2>
                    <br>
                    <ul>
                    <?php foreach($servicesMecanique as $serviceMecanique){
                            echo'<li>' . $serviceMecanique['nom_service'] . '</li>';
                        } ?>
                    </ul>
                </div>
            </div>
        </div> 
    </div>
    <hr>        
    <p>Pour prendre rendez-vous, vous pouvez nous appeler au +33.9.10.20.30.40 ou utiliser le formulaire de contact ci-dessous :</p>
    </section>
    <!--Formulaire de contact-->
    <?php include 'formulaire-contact.php' ?>
    <!--Fin formulaire de contact-->
    <?php include 'footer.php' ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>