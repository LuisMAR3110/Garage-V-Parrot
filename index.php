<?php include 'bdd/voituresBDD.php' ?>
<?php include 'bdd/servicesBDD.php' ?>
<?php include 'bdd/avisBDD.php' ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/styles.css">
    <title>Garage V. Parrot</title>
</head>
<body>
    <header>
        <?php include 'header.html'; ?>
    </header>
    <!-- Bannière page d'accueil -->
    <div class="homepage-banner">
        <img src="images/bannière-desktop.png" width="100%" alt="Un mécanicien qui travaille sur une voiture">
    </div>
    <!-- NOS SERVICES -->
    <section class="section-services">
        <h1>NOS SERVICES</h1>
        <br>
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
        <div class="bouton-fin-section">
        <button class="bouton-accueil"><a href="contact.php">Demander un rendez-vous</a></button>
        </div>
    </section>
    <hr>
    <!-- VÉHICULES D'OCCASION -->
    <section class="section-vente">
        <h1>VENTE DE VÉHICULES D'OCCASION</h1>
        <div id="vignettes-voitures">
            <div class="car">
                <a href="pages-produits/audi.php"><img src="images/audi.jpg" class="image-principale" alt="Une voiture Audi bleue"></a>
                <div class="vignette-info">
                <h4><?php echo $displayNomAudi; ?></h4>
                <p>Prix : <?php echo $displayPrixAudi; ?> €</p>
                <p>Année : <?php echo $displayYearAudi?></p>
                <p>Kilométrage : <?php echo $displayKmAudi ?> km</p>
                <br>
                <button class="bouton-accueil"><a href="pages-produits/audi.php">Détails</a></button>
                </div>
            </div>
            <div class="car">
                <a href="pages-produits/bmw.php"><img src="images/bmw.jpg" class="image-principale" alt="Une BMW audi noire"></a>
                <div class="vignette-info">
                <h4><?php echo $displayNomBMW; ?></h4>
                <p>Prix : <?php echo $displayPrixBMW; ?> €</p>
                <p>Année : <?php echo $displayYearBMW?></p>
                <p>Kilométrage : <?php echo $displayKmBMW ?> km</p>
                <br>
                <button class="bouton-accueil"><a href="pages-produits/bmw.php">Détails</a></button>
                </div>
            </div>
            <div class="car">
                <a href="pages-produits/mercedes.php"><img src="images/mercedes.jpg" class="image-principale" alt="Une voiture Mercedes blanche"></a>
                <div class="vignette-info">
                <h4><?php echo $displayNomMercedes; ?></h4>
                <p>Prix : <?php echo $displayPrixMercedes; ?> €</p>
                <p>Année : <?php echo $displayYearMercedes?></p>
                <p>Kilométrage : <?php echo $displayKmMercedes ?> km</p>
                <br>
                <button class="bouton-accueil"><a href="pages-produits/mercedes.php">Détails</a></button>
                </div>
            </div>
            <div class="car">
                <a href="pages-produits/jeep.php"><img src="images/jeep.jpg" class="image-principale" alt="Une voiture Jeep rouge"></a>
                <div class="vignette-info">
                <h4><?php echo $displayNomJeep; ?></h4>
                <p>Prix : <?php echo $displayPrixJeep; ?> €</p>
                <p>Année : <?php echo $displayYearJeep?></p>
                <p>Kilométrage : <?php echo $displayKmJeep ?> km</p>
                <br>
                <button class="bouton-accueil"><a href="pages-produits/jeep.php">Détails</a></button>
                </div>
            </div>
            <div class="car">
                <a href="pages-produits/nissan.php"><img src="images/nissan.jpg" class="image-principale" alt="Une voiture Nissan blanche"></a>
                <div class="vignette-info">
                <h4><?php echo $displayNomNissan; ?></h4>
                <p>Prix : <?php echo $displayPrixNissan; ?> €</p>
                <p>Année : <?php echo $displayYearNissan?></p>
                <p>Kilométrage : <?php echo $displayKmNissan ?> km</p>
                <br>
                <button class="bouton-accueil"><a href="pages-produits/nissan.php">Détails</a></button>
                </div>
            </div>
            <div class="car">
                <a href="pages-produits/ford.php"><img src="images/ford.jpg" class="image-principale" alt="Une voiture Ford grise"></a>
                <div class="vignette-info">
                <h4><?php echo $displayNomFord; ?></h4>
                <p>Prix : <?php echo $displayPrixFord; ?> €</p>
                <p>Année : <?php echo $displayYearFord?></p>
                <p>Kilométrage : <?php echo $displayKmFord ?> km</p>
                <br>
                <button class="bouton-accueil"><a href="pages-produits/ford.php">Détails</a></button>
                </div>
            </div>
        </div>
        <div class="bouton-fin-section">
        <button class="bouton-accueil"><a href="voitures.php">Voir tous les véhicules</a></button>
        </div>
    </section>
    <hr>
    <!-- AVIS CLIENTS -->
    <section class="section-avis">
        <h1>L'AVIS DE NOS CLIENTS</h1>
        <!-- Carousel avis clients -->
        <?php include 'carousel-avis.php' ?>
        <!-- Fin carousel avis clients -->
        <div class="avis-bouton">
        <button class="bouton-accueil"><a href="avis.php">Donnez votre avis</a></button>
        </div>
    </section>
    <?php include 'footer.php' ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>