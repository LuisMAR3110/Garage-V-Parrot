<?php include 'bdd/avisBDD.php' ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">-->
    <!--<link rel="stylesheet" href="styles/styles.css">-->
    <title>Carousel d'avis clients</title>
</head>
<body>
    <div id="carousel-avis" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <p class="carousel-text" style="color: #f7931e;"><strong><?php foreach($Avis1note as $avisNote1){
                echo $avisNote1['note'];} ?></strong></p>
                    <h5 class="carousel-text">"<?php foreach($Avis1comment as $avis1){
                echo $avis1['commentaire_avis'];} ?>"</h5>
                    <br>
                    <p class="carousel-text" style="font-style: italic;"><?php foreach($Avis1client as $avisClient1){
                echo $avisClient1['nomClient_avis'];} ?></p>
                </div>
                <div class="carousel-item">
                    <p class="carousel-text" style="color: #f7931e;"><strong><?php foreach($Avis2note as $avisNote2){
                echo $avisNote2['note'];} ?></strong></p>
                    <h5 class="carousel-text">"<?php foreach($Avis2comment as $avis2){
                echo $avis2['commentaire_avis'];} ?>"</h5>
                    <br>
                    <p class="carousel-text" style="font-style: italic;"><?php foreach($Avis2client as $avisClient2){
                echo $avisClient2['nomClient_avis'];} ?></p>
                </div>
                <div class="carousel-item">
                    <p class="carousel-text" style="color: #f7931e;"><strong><?php foreach($Avis3note as $avisNote3){
                echo $avisNote3['note'];} ?></strong></p>
                    <h5 class="carousel-text">"<?php foreach($Avis3comment as $avis3){
                echo $avis3['commentaire_avis'];} ?>"</h5>
                    <br>
                    <p class="carousel-text" style="font-style: italic;"><?php foreach($Avis3client as $avisClient3){
                echo $avisClient3['nomClient_avis'];} ?></p>
                </div>
                <div class="carousel-item">
                    <p class="carousel-text" style="color: #f7931e;"><strong><?php foreach($Avis4note as $avisNote4){
                echo $avisNote4['note'];} ?></strong></p>
                    <h5 class="carousel-text">"<?php foreach($Avis4comment as $avis4){
                echo $avis4['commentaire_avis'];} ?>"</h5>
                    <br>
                    <p class="carousel-text" style="font-style: italic;"><?php foreach($Avis4client as $avisClient4){
                echo $avisClient4['nomClient_avis'];} ?></p>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carousel-avis" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carousel-avis" data-bs-slide="next" style="color: #f7931e">
                <span class="carousel-control-next-icon" aria-hidden="true" style="color: #f7931e";></span>
                <span class="visually-hidden">Next</span>
              </button>
        </div>
    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>-->
</body>
</html>