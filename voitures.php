<?php include 'bdd/voituresBDD.php' ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/styles.css">
    <title>Véhicules d'ocassion en vente</title>
</head>
<body>
    <header>
        <?php include 'header.html'; ?>
    </header>
    <section class="texte-voitures">
    <h1>Trouvez votre prochaine voiture</h1>
    <br>
    <p>Découvrez dans cette page tous les véhicules d'ocassion qui sont en vente dans notre garage. Pour faciliter
        vos recherches, n'hésitez pas à vous servir des filtres.</p>
    </section>
    <!-- INSÉREZ CODE DES FILTRES ICI -->
    <div class="filtres">    
        <form class="filtres_voitures">
            <div class="price-car">
                <label for="prixFiltre">Prix :</label>
                <input type="range" id="prixFiltre" name="prixFiltre" min="2000" max="25000" step="500" value="25000">
                <p>Max : <span id="valeurPrix"></span> €</p>
            </div>
            <div class="year-car">
                <label for="anneeFiltre">Année :</label>
                <input type="range" id="anneeFiltre" name="anneeFiltre" min="1989" max="2024" step="1" value="2024">
                <p>Max : <span id="valeurAnnee"></span></p>
            </div>
            <div class="km-car">
                <label for="kmFiltre">Kilométrage :</label>
                <input type="range" id="kmFiltre" name="kmFiltre" min="35000" max="330000" step="5000" value="330000">
                <p>Max : <span id="valeurKm"></span> km</p>
            </div>
        </form>
    </div>
    <!-- FIN DES FILTRES -->
    <div class="section-vignettes">
    <section class="vignettes-voitures2">
        <div class="car" data-prix="<?php echo $displayPrixAudi; ?>" data-annee="<?php echo $displayYearAudi; ?>" data-km="<?php echo $displayKmAudi; ?>" >
            <a href="pages-produits/audi.php"><img src="images/audi.jpg" class="image-principale" alt="Une voiture Audi bleue"></a>
            <div class="vignette-info">
            <h4><?php echo $displayNomAudi; ?></h4>
            <p>Prix : <?php echo $displayPrixAudi; ?> €</p>
            <p>Année : <?php echo $displayYearAudi?></p>
            <p>Kilométrage : <?php echo $displayKmAudi ?> km</p>
            <button class="bouton-vignette"><a href="pages-produits/audi.php">Détails</a></button>
            </div>
        </div>
        <div class="car" data-prix="<?php echo $displayPrixBMW; ?>" data-annee="<?php echo $displayYearBMW; ?>" data-km="<?php echo $displayKmBMW; ?>">
            <a href="pages-produits/bmw.php"><img src="images/bmw.jpg" class="image-principale" alt="Une BMW BMW noire"></a>
            <div class="vignette-info">
            <h4><?php echo $displayNomBMW; ?></h4>
            <p>Prix : <?php echo $displayPrixBMW; ?> €</p>
            <p>Année : <?php echo $displayYearBMW?></p>
            <p>Kilométrage : <?php echo $displayKmBMW ?> km</p>
            <button class="bouton-vignette"><a href="pages-produits/bmw.php">Détails</a></button>
            </div>
        </div>
        <div class="car" data-prix="<?php echo $displayPrixMercedes; ?>" data-annee="<?php echo $displayYearMercedes; ?>" data-km="<?php echo $displayKmMercedes; ?>">
            <a href="pages-produits/mercedes.php"><img src="images/mercedes.jpg" class="image-principale" alt="Une voiture Mercedes blanche"></a>
            <div class="vignette-info">
            <h4><?php echo $displayNomMercedes; ?></h4>
            <p>Prix : <?php echo $displayPrixMercedes; ?> €</p>
            <p>Année : <?php echo $displayYearMercedes?></p>
            <p>Kilométrage : <?php echo $displayKmMercedes ?> km</p>
            <button class="bouton-vignette"><a href="pages-produits/mercedes.php">Détails</a></button>
            </div>
        </div>
        <div class="car" data-prix="<?php echo $displayPrixJeep; ?>" data-annee="<?php echo $displayYearJeep; ?>" data-km="<?php echo $displayKmJeep; ?>">
            <a href="pages-produits/jeep.php"><img src="images/jeep.jpg" class="image-principale" alt="Une voiture Jeep rouge"></a>
            <div class="vignette-info">
            <h4><?php echo $displayNomJeep; ?></h4>
            <p>Prix : <?php echo $displayPrixJeep; ?> €</p>
            <p>Année : <?php echo $displayYearJeep?></p>
            <p>Kilométrage : <?php echo $displayKmJeep ?> km</p>
            <button class="bouton-vignette"><a href="pages-produits/jeep.php">Détails</a></button>
            </div>
        </div>
        <div class="car" data-prix="<?php echo $displayPrixNissan; ?>" data-annee="<?php echo $displayYearNissan; ?>" data-km="<?php echo $displayKmNissan; ?>">
            <a href="pages-produits/nissan.php"><img src="images/nissan.jpg" class="image-principale" alt="Une voiture Nissan blanche"></a>
            <div class="vignette-info">
            <h4><?php echo $displayNomNissan; ?></h4>
            <p>Prix : <?php echo $displayPrixNissan; ?> €</p>
            <p>Année : <?php echo $displayYearNissan?></p>
            <p>Kilométrage : <?php echo $displayKmNissan ?> km</p>
            <button class="bouton-vignette"><a href="pages-produits/nissan.php">Détails</a></button>
            </div>
        </div>
        <div class="car" data-prix="<?php echo $displayPrixFord; ?>" data-annee="<?php echo $displayYearFord; ?>" data-km="<?php echo $displayKmFord; ?>">
            <a href="pages-produits/ford.php"><img src="images/ford.jpg" class="image-principale" alt="Une voiture Ford grise"></a>
            <div class="vignette-info">
            <h4><?php echo $displayNomFord; ?></h4>
            <p>Prix : <?php echo $displayPrixFord; ?> €</p>
            <p>Année : <?php echo $displayYearFord?></p>
            <p>Kilométrage : <?php echo $displayKmFord ?> km</p>
            <button class="bouton-vignette"><a href="pages-produits/ford.php">Détails</a></button>
            </div>
        </div>
        <div class="car" data-prix="<?php echo $displayPrixRenault; ?>" data-annee="<?php echo $displayYearRenault; ?>" data-km="<?php echo $displayKmRenault; ?>">
            <a href="pages-produits/renault.php"><img src="images/renault.jpg" class="image-principale" alt="Une voiture Renault bleue"></a>
            <div class="vignette-info">
            <h4><?php echo $displayNomRenault; ?></h4>
            <p>Prix : <?php echo $displayPrixRenault; ?> €</p>
            <p>Année : <?php echo $displayYearRenault?></p>
            <p>Kilométrage : <?php echo $displayKmRenault ?> km</p>
            <button class="bouton-vignette"><a href="pages-produits/renault.php">Détails</a></button>
            </div>
        </div>
        <div class="car" data-prix="<?php echo $displayPrixFiat; ?>" data-annee="<?php echo $displayYearFiat; ?>" data-km="<?php echo $displayKmFiat; ?>">
            <a href="pages-produits/fiat.php"><img src="images/fiat.jpg" class="image-principale" alt="Une Fiat Fiat rouge"></a>
            <div class="vignette-info">
            <h4><?php echo $displayNomFiat; ?></h4>
            <p>Prix : <?php echo $displayPrixFiat; ?> €</p>
            <p>Année : <?php echo $displayYearFiat?></p>
            <p>Kilométrage : <?php echo $displayKmFiat ?> km</p>
            <button class="bouton-vignette"><a href="pages-produits/fiat.php">Détails</a></button>
            </div>
        </div>
        <div class="car" data-prix="<?php echo $displayPrixChevrolet; ?>" data-annee="<?php echo $displayYearChevrolet; ?>" data-km="<?php echo $displayKmChevrolet; ?>">
            <a href="pages-produits/chevrolet.php"><img src="images/chevrolet.jpg" class="image-principale" alt="Une voiture Chevrolet grise"></a>
            <div class="vignette-info">
            <h4><?php echo $displayNomChevrolet; ?></h4>
            <p>Prix : <?php echo $displayPrixChevrolet; ?> €</p>
            <p>Année : <?php echo $displayYearChevrolet?></p>
            <p>Kilométrage : <?php echo $displayKmChevrolet ?> km</p>
            <button class="bouton-vignette"><a href="pages-produits/chevrolet.php">Détails</a></button>
            </div>
        </div>
        <div class="car" data-prix="<?php echo $displayPrixPeugeot; ?>" data-annee="<?php echo $displayYearPeugeot; ?>" data-km="<?php echo $displayKmPeugeot; ?>">
            <a href="pages-produits/peugeot.php"><img src="images/peugeot.jpg" class="image-principale" alt="Une voiture Peugeot rouge"></a>
            <div class="vignette-info">
            <h4><?php echo $displayNomPeugeot; ?></h4>
            <p>Prix : <?php echo $displayPrixPeugeot; ?> €</p>
            <p>Année : <?php echo $displayYearPeugeot?></p>
            <p>Kilométrage : <?php echo $displayKmPeugeot ?> km</p>
            <button class="bouton-vignette"><a href="pages-produits/peugeot.php">Détails</a></button>
            </div>
        </div>
        <div class="car" data-prix="<?php echo $displayPrixVolkswagen; ?>" data-annee="<?php echo $displayYearVolkswagen; ?>" data-km="<?php echo $displayKmVolkswagen; ?>">
            <a href="pages-produits/volkswagen.php"><img src="images/volkswagen.jpg" class="image-principale" alt="Une voiture Volkswagen bleue"></a>
            <div class="vignette-info">
            <h4><?php echo $displayNomVolkswagen; ?></h4>
            <p>Prix : <?php echo $displayPrixVolkswagen; ?> €</p>
            <p>Année : <?php echo $displayYearVolkswagen?></p>
            <p>Kilométrage : <?php echo $displayKmVolkswagen ?> km</p>
            <button class="bouton-vignette"><a href="pages-produits/volkswagen.php">Détails</a></button>
            </div>
        </div>
        <div class="car" data-prix="<?php echo $displayPrixVolvo; ?>" data-annee="<?php echo $displayYearVolvo; ?>" data-km="<?php echo $displayKmVolvo; ?>">
            <a href="pages-produits/volvo.php"><img src="images/volvo.jpg" class="image-principale" alt="Une voiture Volvo marron"></a>
            <div class="vignette-info">
            <h4><?php echo $displayNomVolvo; ?></h4>
            <p>Prix : <?php echo $displayPrixVolvo; ?> €</p>
            <p>Année : <?php echo $displayYearVolvo?></p>
            <p>Kilométrage : <?php echo $displayKmVolvo ?> km</p>
            <button class="bouton-vignette"><a href="pages-produits/volvo.php">Détails</a></button>
            </div>
        </div>
    </section>
    </div>
    <?php include 'footer.php' ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="scripts/filtres.js"></script>
</body>
</html>