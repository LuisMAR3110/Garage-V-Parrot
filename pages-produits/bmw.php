<?php include '../bdd/voituresBDD.php' ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/styles.css">
    <title>BMW année 2013 en vente</title>
</head>
<body>
    <header>
        <?php include 'header-produits.html'; ?>
    </header>
    <section class="fiche-produit">
    <div class="photo">
        <img src="../images/bmw.jpg" class="image-principale" alt="Une voiture BMW noire">
    </div>
    <div class="infos-produit">
        <h2><?php foreach($nomBMW as $nameBMW){
                echo $nameBMW['nom_voiture'];} ?></h2>
        <hr>
        <p class="prix">Prix : <?php foreach($prixBMW as $priceBMW){
                echo $priceBMW['prix'];} ?> €</p>
        <p>Année : <?php foreach($yearBMW as $anneeBMW){
                echo $anneeBMW['year_car'];} ?></p>
        <p>Kilométrage : <?php foreach($kmBMW as $BMWKm){
                echo $BMWKm['km'];} ?> km</p>
        <br>
        <h3>Équipements et options :</h3>
        <ul>
            <li>Régulateur de vitesse</li>
            <li>Radar de recul</li>
            <li>Allumage automatique des feux</li>
        </ul>
        <br>
        <h3>Caractéristiques techniques :</h3>
        <table class="caracteristique-technique">
            <tr>
                <td class="caracteristique">Couleur</td>
                <td><?php foreach($couleurBMW as $colorBMW){
                echo $colorBMW['couleur_car'];} ?></td>
            </tr>
            <tr>
                <td class="caracteristique">Carburant</td>
                <td><?php foreach($carburantBMW as $fuelBMW){
                echo $fuelBMW['carburant'];} ?></td>
            </tr>
            <tr>
                <td class="caracteristique">Nombre de portes</td>
                <td><?php foreach($portesBMW as $porteBMW){
                echo $porteBMW['nombre_portes'];} ?></td>
            </tr>
            <tr>
                <td class="caracteristique">Boite de vitesses</td>
                <td><?php foreach($BVBMW as $gearBMW){
                echo $gearBMW['boite_vitesses'];} ?></td>
            </tr>
            <tr>
                <td class="caracteristique">Puissance moteur</td>
                <td><?php foreach($chBMW as $powerBMW){
                echo $powerBMW['puissance_moteur'];} ?></td>
            </tr>
        </table>
    </div>
    </section>
    <hr>
    <div class="photo-gallery">
        <!-- INSEREZ GALLERIE PHOTO ICI -->
        <h3>Photos du véhicule</h3>
        <div class="gallery">
            <figure>
                <img src="../images/bmw.jpg" class="image-principale" alt="Une voiture BMW noire">
            </figure>
            <figure>
                <img src="../images/bmw.jpg" class="image-principale" alt="Une voiture BMW noire">
            </figure>
            <figure>
                <img src="../images/bmw.jpg" class="image-principale" alt="Une voiture BMW noire">
            </figure>
        </div>
    </div>
    <hr>
    <div class="formulaire-fiche">
        <h3 class="titre-formulaire">Intéressé(e) par ce véhicule ? Envoyez-nous un message !</h3>
        <form action="../validation-contactForm.php" method="POST">
            <fieldset>
                <legend>Vos coordonnées</legend>
                <br>
                <div class="input">
                    <label for="nom">Nom :</label>
                    <input id="nom" name="nom" type="text" required>
                </div>
                <div class="input">
                    <label for="prenom">Prénom :</label>
                    <input id="prenom" name="prenom" type="text" required>
                </div>
                <div class="input">
                    <label for="mail">Adresse e-mail :</label>
                    <input id="mail" name="mail" type="email" required>
                </div>
                <div class="input">
                    <label for="telephone">Numéro de téléphone :</label>
                    <input id="telephone" name="telephone" type="text">
                </div>
            </fieldset>
            <fieldset>
                <legend>Votre message</legend>
                <div class="input">
                    <label for="sujet-liste">Sujet :</label>
                    <select id="sujet-liste" name="sujet">
                        <option value=""><?php echo $displayNomBMW; ?></option>
                    </select>
                </div>
                <div class="input">
                    <label for="message">Message :</label>
                    <textarea name="message" id="message" placeholder="Écrivez votre message ici..." required></textarea>
                </div>
            </fieldset>
            <button class="bouton-formulaire" type="submit">Envoyer</button>
        </form>
    </div>
    <?php include '../footer.php' ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="../scripts/filtres.js"></script>
</body>
</html>