<?php
$dsn = 'mysql:host=127.0.0.1;dbname=GarageVincentParrot';
$username = 'adminGarage';
$password = '20pKwL85g!7s';

try{
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //Rêquetes pour Audi 
    $queryAudiNom = 'SELECT nom_voiture FROM voitures WHERE nom_voiture = "Audi"';
    $stmt = $pdo->query($queryAudiNom);
    $nomAudi = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $displayNomAudi = '';
    foreach($nomAudi as $nameAudi){
        $displayNomAudi .= $nameAudi['nom_voiture'];};

    $queryAudiPrix = 'SELECT prix FROM voitures WHERE nom_voiture = "Audi"';
    $stmt = $pdo->query($queryAudiPrix);
    $prixAudi = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $displayPrixAudi = '';
    foreach($prixAudi as $priceAudi){
        $displayPrixAudi .= $priceAudi['prix'];};

    $queryAudiKm = 'SELECT km FROM voitures WHERE nom_voiture = "Audi"';
    $stmt = $pdo->query($queryAudiKm);
    $kmAudi = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $displayKmAudi ='';
    foreach($kmAudi as $AudiKm){
        $displayKmAudi .= $AudiKm['km'];};

    $queryAudiYear = 'SELECT year_car FROM voitures WHERE nom_voiture = "Audi"';
    $stmt = $pdo->query($queryAudiYear);
    $yearAudi = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $displayYearAudi = '';
    foreach($yearAudi as $anneeAudi){
        $displayYearAudi .= $anneeAudi['year_car'];};

    $queryAudiCouleur = 'SELECT couleur_car FROM voitures WHERE nom_voiture = "Audi"';
    $stmt = $pdo->query($queryAudiCouleur);
    $couleurAudi = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $queryAudiCarburant = 'SELECT carburant FROM voitures WHERE nom_voiture = "Audi"';
    $stmt = $pdo->query($queryAudiCarburant);
    $carburantAudi = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $queryAudiPortes = 'SELECT nombre_portes FROM voitures WHERE nom_voiture = "Audi"';
    $stmt = $pdo->query($queryAudiPortes);
    $portesAudi = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $queryAudiBV = 'SELECT boite_vitesses FROM voitures WHERE nom_voiture = "Audi"';
    $stmt = $pdo->query($queryAudiBV);
    $BVAudi = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $queryAudiCh = 'SELECT puissance_moteur FROM voitures WHERE nom_voiture = "Audi"';
    $stmt = $pdo->query($queryAudiCh);
    $chAudi = $stmt->fetchAll(PDO::FETCH_ASSOC);


    //Rêquetes pour BMW 
    $queryBMWNom = 'SELECT nom_voiture FROM voitures WHERE nom_voiture = "BMW"';
    $stmt = $pdo->query($queryBMWNom);
    $nomBMW = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $displayNomBMW = '';
    foreach($nomBMW as $nameBMW){
        $displayNomBMW .= $nameBMW['nom_voiture'];};

    $queryBMWPrix = 'SELECT prix FROM voitures WHERE nom_voiture = "BMW"';
    $stmt = $pdo->query($queryBMWPrix);
    $prixBMW = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $displayPrixBMW = '';
    foreach($prixBMW as $priceBMW){
        $displayPrixBMW .= $priceBMW['prix'];};

    $queryBMWKm = 'SELECT km FROM voitures WHERE nom_voiture = "BMW"';
    $stmt = $pdo->query($queryBMWKm);
    $kmBMW = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $displayKmBMW ='';
    foreach($kmBMW as $BMWKm){
        $displayKmBMW .= $BMWKm['km'];};

    $queryBMWYear = 'SELECT year_car FROM voitures WHERE nom_voiture = "BMW"';
    $stmt = $pdo->query($queryBMWYear);
    $yearBMW = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $displayYearBMW = '';
    foreach($yearBMW as $anneeBMW){
        $displayYearBMW .= $anneeBMW['year_car'];};

    $queryBMWCouleur = 'SELECT couleur_car FROM voitures WHERE nom_voiture = "BMW"';
    $stmt = $pdo->query($queryBMWCouleur);
    $couleurBMW = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $queryBMWCarburant = 'SELECT carburant FROM voitures WHERE nom_voiture = "BMW"';
    $stmt = $pdo->query($queryBMWCarburant);
    $carburantBMW = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $queryBMWPortes = 'SELECT nombre_portes FROM voitures WHERE nom_voiture = "BMW"';
    $stmt = $pdo->query($queryBMWPortes);
    $portesBMW = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $queryBMWBV = 'SELECT boite_vitesses FROM voitures WHERE nom_voiture = "BMW"';
    $stmt = $pdo->query($queryBMWBV);
    $BVBMW = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $queryBMWCh = 'SELECT puissance_moteur FROM voitures WHERE nom_voiture = "BMW"';
    $stmt = $pdo->query($queryBMWCh);
    $chBMW = $stmt->fetchAll(PDO::FETCH_ASSOC);


    //Rêquetes pour Mercedes 
    $queryMercedesNom = 'SELECT nom_voiture FROM voitures WHERE nom_voiture = "Mercedes"';
    $stmt = $pdo->query($queryMercedesNom);
    $nomMercedes = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $displayNomMercedes = '';
    foreach($nomMercedes as $nameMercedes){
        $displayNomMercedes .= $nameMercedes['nom_voiture'];};

    $queryMercedesPrix = 'SELECT prix FROM voitures WHERE nom_voiture = "Mercedes"';
    $stmt = $pdo->query($queryMercedesPrix);
    $prixMercedes = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $displayPrixMercedes = '';
    foreach($prixMercedes as $priceMercedes){
        $displayPrixMercedes .= $priceMercedes['prix'];};

    $queryMercedesKm = 'SELECT km FROM voitures WHERE nom_voiture = "Mercedes"';
    $stmt = $pdo->query($queryMercedesKm);
    $kmMercedes = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $displayKmMercedes ='';
    foreach($kmMercedes as $MercedesKm){
        $displayKmMercedes .= $MercedesKm['km'];};

    $queryMercedesYear = 'SELECT year_car FROM voitures WHERE nom_voiture = "Mercedes"';
    $stmt = $pdo->query($queryMercedesYear);
    $yearMercedes = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $displayYearMercedes = '';
    foreach($yearMercedes as $anneeMercedes){
        $displayYearMercedes .= $anneeMercedes['year_car'];};

    $queryMercedesCouleur = 'SELECT couleur_car FROM voitures WHERE nom_voiture = "Mercedes"';
    $stmt = $pdo->query($queryMercedesCouleur);
    $couleurMercedes = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $queryMercedesCarburant = 'SELECT carburant FROM voitures WHERE nom_voiture = "Mercedes"';
    $stmt = $pdo->query($queryMercedesCarburant);
    $carburantMercedes = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $queryMercedesPortes = 'SELECT nombre_portes FROM voitures WHERE nom_voiture = "Mercedes"';
    $stmt = $pdo->query($queryMercedesPortes);
    $portesMercedes = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $queryMercedesBV = 'SELECT boite_vitesses FROM voitures WHERE nom_voiture = "Mercedes"';
    $stmt = $pdo->query($queryMercedesBV);
    $BVMercedes = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $queryMercedesCh = 'SELECT puissance_moteur FROM voitures WHERE nom_voiture = "Mercedes"';
    $stmt = $pdo->query($queryMercedesCh);
    $chMercedes = $stmt->fetchAll(PDO::FETCH_ASSOC);


    //Rêquetes pour Jeep 
    $queryJeepNom = 'SELECT nom_voiture FROM voitures WHERE nom_voiture = "Jeep"';
    $stmt = $pdo->query($queryJeepNom);
    $nomJeep = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $displayNomJeep = '';
    foreach($nomJeep as $nameJeep){
        $displayNomJeep .= $nameJeep['nom_voiture'];};

    $queryJeepPrix = 'SELECT prix FROM voitures WHERE nom_voiture = "Jeep"';
    $stmt = $pdo->query($queryJeepPrix);
    $prixJeep = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $displayPrixJeep = '';
    foreach($prixJeep as $priceJeep){
        $displayPrixJeep .= $priceJeep['prix'];};

    $queryJeepKm = 'SELECT km FROM voitures WHERE nom_voiture = "Jeep"';
    $stmt = $pdo->query($queryJeepKm);
    $kmJeep = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $displayKmJeep ='';
    foreach($kmJeep as $JeepKm){
        $displayKmJeep .= $JeepKm['km'];};

    $queryJeepYear = 'SELECT year_car FROM voitures WHERE nom_voiture = "Jeep"';
    $stmt = $pdo->query($queryJeepYear);
    $yearJeep = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $displayYearJeep = '';
    foreach($yearJeep as $anneeJeep){
        $displayYearJeep .= $anneeJeep['year_car'];};

    $queryJeepCouleur = 'SELECT couleur_car FROM voitures WHERE nom_voiture = "Jeep"';
    $stmt = $pdo->query($queryJeepCouleur);
    $couleurJeep = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $queryJeepCarburant = 'SELECT carburant FROM voitures WHERE nom_voiture = "Jeep"';
    $stmt = $pdo->query($queryJeepCarburant);
    $carburantJeep = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $queryJeepPortes = 'SELECT nombre_portes FROM voitures WHERE nom_voiture = "Jeep"';
    $stmt = $pdo->query($queryJeepPortes);
    $portesJeep = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $queryJeepBV = 'SELECT boite_vitesses FROM voitures WHERE nom_voiture = "Jeep"';
    $stmt = $pdo->query($queryJeepBV);
    $BVJeep = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $queryJeepCh = 'SELECT puissance_moteur FROM voitures WHERE nom_voiture = "Jeep"';
    $stmt = $pdo->query($queryJeepCh);
    $chJeep = $stmt->fetchAll(PDO::FETCH_ASSOC);


    //Rêquetes pour Nissan 
    $queryNissanNom = 'SELECT nom_voiture FROM voitures WHERE nom_voiture = "Nissan"';
    $stmt = $pdo->query($queryNissanNom);
    $nomNissan = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $displayNomNissan = '';
    foreach($nomNissan as $nameNissan){
        $displayNomNissan .= $nameNissan['nom_voiture'];};

    $queryNissanPrix = 'SELECT prix FROM voitures WHERE nom_voiture = "Nissan"';
    $stmt = $pdo->query($queryNissanPrix);
    $prixNissan = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $displayPrixNissan = '';
    foreach($prixNissan as $priceNissan){
        $displayPrixNissan .= $priceNissan['prix'];};

    $queryNissanKm = 'SELECT km FROM voitures WHERE nom_voiture = "Nissan"';
    $stmt = $pdo->query($queryNissanKm);
    $kmNissan = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $displayKmNissan ='';
    foreach($kmNissan as $NissanKm){
        $displayKmNissan .= $NissanKm['km'];};

    $queryNissanYear = 'SELECT year_car FROM voitures WHERE nom_voiture = "Nissan"';
    $stmt = $pdo->query($queryNissanYear);
    $yearNissan = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $displayYearNissan = '';
    foreach($yearNissan as $anneeNissan){
        $displayYearNissan .= $anneeNissan['year_car'];};

    $queryNissanCouleur = 'SELECT couleur_car FROM voitures WHERE nom_voiture = "Nissan"';
    $stmt = $pdo->query($queryNissanCouleur);
    $couleurNissan = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $queryNissanCarburant = 'SELECT carburant FROM voitures WHERE nom_voiture = "Nissan"';
    $stmt = $pdo->query($queryNissanCarburant);
    $carburantNissan = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $queryNissanPortes = 'SELECT nombre_portes FROM voitures WHERE nom_voiture = "Nissan"';
    $stmt = $pdo->query($queryNissanPortes);
    $portesNissan = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $queryNissanBV = 'SELECT boite_vitesses FROM voitures WHERE nom_voiture = "Nissan"';
    $stmt = $pdo->query($queryNissanBV);
    $BVNissan = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $queryNissanCh = 'SELECT puissance_moteur FROM voitures WHERE nom_voiture = "Nissan"';
    $stmt = $pdo->query($queryNissanCh);
    $chNissan = $stmt->fetchAll(PDO::FETCH_ASSOC);


    //Rêquetes pour Ford 
    $queryFordNom = 'SELECT nom_voiture FROM voitures WHERE nom_voiture = "Ford"';
    $stmt = $pdo->query($queryFordNom);
    $nomFord = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $displayNomFord = '';
    foreach($nomFord as $nameFord){
        $displayNomFord .= $nameFord['nom_voiture'];};

    $queryFordPrix = 'SELECT prix FROM voitures WHERE nom_voiture = "Ford"';
    $stmt = $pdo->query($queryFordPrix);
    $prixFord = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $displayPrixFord = '';
    foreach($prixFord as $priceFord){
        $displayPrixFord .= $priceFord['prix'];};

    $queryFordKm = 'SELECT km FROM voitures WHERE nom_voiture = "Ford"';
    $stmt = $pdo->query($queryFordKm);
    $kmFord = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $displayKmFord ='';
    foreach($kmFord as $FordKm){
        $displayKmFord .= $FordKm['km'];};

    $queryFordYear = 'SELECT year_car FROM voitures WHERE nom_voiture = "Ford"';
    $stmt = $pdo->query($queryFordYear);
    $yearFord = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $displayYearFord = '';
    foreach($yearFord as $anneeFord){
        $displayYearFord .= $anneeFord['year_car'];};

    $queryFordCouleur = 'SELECT couleur_car FROM voitures WHERE nom_voiture = "Ford"';
    $stmt = $pdo->query($queryFordCouleur);
    $couleurFord = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $queryFordCarburant = 'SELECT carburant FROM voitures WHERE nom_voiture = "Ford"';
    $stmt = $pdo->query($queryFordCarburant);
    $carburantFord = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $queryFordPortes = 'SELECT nombre_portes FROM voitures WHERE nom_voiture = "Ford"';
    $stmt = $pdo->query($queryFordPortes);
    $portesFord = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $queryFordBV = 'SELECT boite_vitesses FROM voitures WHERE nom_voiture = "Ford"';
    $stmt = $pdo->query($queryFordBV);
    $BVFord = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $queryFordCh = 'SELECT puissance_moteur FROM voitures WHERE nom_voiture = "Ford"';
    $stmt = $pdo->query($queryFordCh);
    $chFord = $stmt->fetchAll(PDO::FETCH_ASSOC);


    //Rêquetes pour Renault 
    $queryRenaultNom = 'SELECT nom_voiture FROM voitures WHERE nom_voiture = "Renault"';
    $stmt = $pdo->query($queryRenaultNom);
    $nomRenault = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $displayNomRenault = '';
    foreach($nomRenault as $nameRenault){
        $displayNomRenault .= $nameRenault['nom_voiture'];};

    $queryRenaultPrix = 'SELECT prix FROM voitures WHERE nom_voiture = "Renault"';
    $stmt = $pdo->query($queryRenaultPrix);
    $prixRenault = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $displayPrixRenault = '';
    foreach($prixRenault as $priceRenault){
        $displayPrixRenault .= $priceRenault['prix'];};

    $queryRenaultKm = 'SELECT km FROM voitures WHERE nom_voiture = "Renault"';
    $stmt = $pdo->query($queryRenaultKm);
    $kmRenault = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $displayKmRenault ='';
    foreach($kmRenault as $RenaultKm){
        $displayKmRenault .= $RenaultKm['km'];};

    $queryRenaultYear = 'SELECT year_car FROM voitures WHERE nom_voiture = "Renault"';
    $stmt = $pdo->query($queryRenaultYear);
    $yearRenault = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $displayYearRenault = '';
    foreach($yearRenault as $anneeRenault){
        $displayYearRenault .= $anneeRenault['year_car'];};

    $queryRenaultCouleur = 'SELECT couleur_car FROM voitures WHERE nom_voiture = "Renault"';
    $stmt = $pdo->query($queryRenaultCouleur);
    $couleurRenault = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $queryRenaultCarburant = 'SELECT carburant FROM voitures WHERE nom_voiture = "Renault"';
    $stmt = $pdo->query($queryRenaultCarburant);
    $carburantRenault = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $queryRenaultPortes = 'SELECT nombre_portes FROM voitures WHERE nom_voiture = "Renault"';
    $stmt = $pdo->query($queryRenaultPortes);
    $portesRenault = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $queryRenaultBV = 'SELECT boite_vitesses FROM voitures WHERE nom_voiture = "Renault"';
    $stmt = $pdo->query($queryRenaultBV);
    $BVRenault = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $queryRenaultCh = 'SELECT puissance_moteur FROM voitures WHERE nom_voiture = "Renault"';
    $stmt = $pdo->query($queryRenaultCh);
    $chRenault = $stmt->fetchAll(PDO::FETCH_ASSOC);


    //Rêquetes pour Fiat 
    $queryFiatNom = 'SELECT nom_voiture FROM voitures WHERE nom_voiture = "Fiat"';
    $stmt = $pdo->query($queryFiatNom);
    $nomFiat = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $displayNomFiat = '';
    foreach($nomFiat as $nameFiat){
        $displayNomFiat .= $nameFiat['nom_voiture'];};

    $queryFiatPrix = 'SELECT prix FROM voitures WHERE nom_voiture = "Fiat"';
    $stmt = $pdo->query($queryFiatPrix);
    $prixFiat = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $displayPrixFiat = '';
    foreach($prixFiat as $priceFiat){
        $displayPrixFiat .= $priceFiat['prix'];};

    $queryFiatKm = 'SELECT km FROM voitures WHERE nom_voiture = "Fiat"';
    $stmt = $pdo->query($queryFiatKm);
    $kmFiat = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $displayKmFiat ='';
    foreach($kmFiat as $FiatKm){
        $displayKmFiat .= $FiatKm['km'];};

    $queryFiatYear = 'SELECT year_car FROM voitures WHERE nom_voiture = "Fiat"';
    $stmt = $pdo->query($queryFiatYear);
    $yearFiat = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $displayYearFiat = '';
    foreach($yearFiat as $anneeFiat){
        $displayYearFiat .= $anneeFiat['year_car'];};

    $queryFiatCouleur = 'SELECT couleur_car FROM voitures WHERE nom_voiture = "Fiat"';
    $stmt = $pdo->query($queryFiatCouleur);
    $couleurFiat = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $queryFiatCarburant = 'SELECT carburant FROM voitures WHERE nom_voiture = "Fiat"';
    $stmt = $pdo->query($queryFiatCarburant);
    $carburantFiat = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $queryFiatPortes = 'SELECT nombre_portes FROM voitures WHERE nom_voiture = "Fiat"';
    $stmt = $pdo->query($queryFiatPortes);
    $portesFiat = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $queryFiatBV = 'SELECT boite_vitesses FROM voitures WHERE nom_voiture = "Fiat"';
    $stmt = $pdo->query($queryFiatBV);
    $BVFiat = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $queryFiatCh = 'SELECT puissance_moteur FROM voitures WHERE nom_voiture = "Fiat"';
    $stmt = $pdo->query($queryFiatCh);
    $chFiat = $stmt->fetchAll(PDO::FETCH_ASSOC);


    //Rêquetes pour Chevrolet 
    $queryChevroletNom = 'SELECT nom_voiture FROM voitures WHERE nom_voiture = "Chevrolet"';
    $stmt = $pdo->query($queryChevroletNom);
    $nomChevrolet = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $displayNomChevrolet = '';
    foreach($nomChevrolet as $nameChevrolet){
        $displayNomChevrolet .= $nameChevrolet['nom_voiture'];};

    $queryChevroletPrix = 'SELECT prix FROM voitures WHERE nom_voiture = "Chevrolet"';
    $stmt = $pdo->query($queryChevroletPrix);
    $prixChevrolet = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $displayPrixChevrolet = '';
    foreach($prixChevrolet as $priceChevrolet){
        $displayPrixChevrolet .= $priceChevrolet['prix'];};

    $queryChevroletKm = 'SELECT km FROM voitures WHERE nom_voiture = "Chevrolet"';
    $stmt = $pdo->query($queryChevroletKm);
    $kmChevrolet = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $displayKmChevrolet ='';
    foreach($kmChevrolet as $ChevroletKm){
        $displayKmChevrolet .= $ChevroletKm['km'];};

    $queryChevroletYear = 'SELECT year_car FROM voitures WHERE nom_voiture = "Chevrolet"';
    $stmt = $pdo->query($queryChevroletYear);
    $yearChevrolet = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $displayYearChevrolet = '';
    foreach($yearChevrolet as $anneeChevrolet){
        $displayYearChevrolet .= $anneeChevrolet['year_car'];};

    $queryChevroletCouleur = 'SELECT couleur_car FROM voitures WHERE nom_voiture = "Chevrolet"';
    $stmt = $pdo->query($queryChevroletCouleur);
    $couleurChevrolet = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $queryChevroletCarburant = 'SELECT carburant FROM voitures WHERE nom_voiture = "Chevrolet"';
    $stmt = $pdo->query($queryChevroletCarburant);
    $carburantChevrolet = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $queryChevroletPortes = 'SELECT nombre_portes FROM voitures WHERE nom_voiture = "Chevrolet"';
    $stmt = $pdo->query($queryChevroletPortes);
    $portesChevrolet = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $queryChevroletBV = 'SELECT boite_vitesses FROM voitures WHERE nom_voiture = "Chevrolet"';
    $stmt = $pdo->query($queryChevroletBV);
    $BVChevrolet = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $queryChevroletCh = 'SELECT puissance_moteur FROM voitures WHERE nom_voiture = "Chevrolet"';
    $stmt = $pdo->query($queryChevroletCh);
    $chChevrolet = $stmt->fetchAll(PDO::FETCH_ASSOC);


    //Rêquetes pour Peugeot
    $queryPeugeotNom = 'SELECT nom_voiture FROM voitures WHERE nom_voiture = "Peugeot"';
    $stmt = $pdo->query($queryPeugeotNom);
    $nomPeugeot = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $displayNomPeugeot = '';
    foreach($nomPeugeot as $namePeugeot){
        $displayNomPeugeot .= $namePeugeot['nom_voiture'];};

    $queryPeugeotPrix = 'SELECT prix FROM voitures WHERE nom_voiture = "Peugeot"';
    $stmt = $pdo->query($queryPeugeotPrix);
    $prixPeugeot = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $displayPrixPeugeot = '';
    foreach($prixPeugeot as $pricePeugeot){
        $displayPrixPeugeot .= $pricePeugeot['prix'];};

    $queryPeugeotKm = 'SELECT km FROM voitures WHERE nom_voiture = "Peugeot"';
    $stmt = $pdo->query($queryPeugeotKm);
    $kmPeugeot = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $displayKmPeugeot ='';
    foreach($kmPeugeot as $PeugeotKm){
        $displayKmPeugeot .= $PeugeotKm['km'];};

    $queryPeugeotYear = 'SELECT year_car FROM voitures WHERE nom_voiture = "Peugeot"';
    $stmt = $pdo->query($queryPeugeotYear);
    $yearPeugeot = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $displayYearPeugeot = '';
    foreach($yearPeugeot as $anneePeugeot){
        $displayYearPeugeot .= $anneePeugeot['year_car'];};

    $queryPeugeotCouleur = 'SELECT couleur_car FROM voitures WHERE nom_voiture = "Peugeot"';
    $stmt = $pdo->query($queryPeugeotCouleur);
    $couleurPeugeot = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $queryPeugeotCarburant = 'SELECT carburant FROM voitures WHERE nom_voiture = "Peugeot"';
    $stmt = $pdo->query($queryPeugeotCarburant);
    $carburantPeugeot = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $queryPeugeotPortes = 'SELECT nombre_portes FROM voitures WHERE nom_voiture = "Peugeot"';
    $stmt = $pdo->query($queryPeugeotPortes);
    $portesPeugeot = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $queryPeugeotBV = 'SELECT boite_vitesses FROM voitures WHERE nom_voiture = "Peugeot"';
    $stmt = $pdo->query($queryPeugeotBV);
    $BVPeugeot = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $queryPeugeotCh = 'SELECT puissance_moteur FROM voitures WHERE nom_voiture = "Peugeot"';
    $stmt = $pdo->query($queryPeugeotCh);
    $chPeugeot = $stmt->fetchAll(PDO::FETCH_ASSOC);


    //Rêquetes pour Volkswagen
    $queryVolkswagenNom = 'SELECT nom_voiture FROM voitures WHERE nom_voiture = "Volkswagen"';
    $stmt = $pdo->query($queryVolkswagenNom);
    $nomVolkswagen = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $displayNomVolkswagen = '';
    foreach($nomVolkswagen as $nameVolkswagen){
        $displayNomVolkswagen .= $nameVolkswagen['nom_voiture'];};

    $queryVolkswagenPrix = 'SELECT prix FROM voitures WHERE nom_voiture = "Volkswagen"';
    $stmt = $pdo->query($queryVolkswagenPrix);
    $prixVolkswagen = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $displayPrixVolkswagen = '';
    foreach($prixVolkswagen as $priceVolkswagen){
        $displayPrixVolkswagen .= $priceVolkswagen['prix'];};

    $queryVolkswagenKm = 'SELECT km FROM voitures WHERE nom_voiture = "Volkswagen"';
    $stmt = $pdo->query($queryVolkswagenKm);
    $kmVolkswagen = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $displayKmVolkswagen ='';
    foreach($kmVolkswagen as $VolkswagenKm){
        $displayKmVolkswagen .= $VolkswagenKm['km'];};

    $queryVolkswagenYear = 'SELECT year_car FROM voitures WHERE nom_voiture = "Volkswagen"';
    $stmt = $pdo->query($queryVolkswagenYear);
    $yearVolkswagen = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $displayYearVolkswagen = '';
    foreach($yearVolkswagen as $anneeVolkswagen){
        $displayYearVolkswagen .= $anneeVolkswagen['year_car'];};

    $queryVolkswagenCouleur = 'SELECT couleur_car FROM voitures WHERE nom_voiture = "Volkswagen"';
    $stmt = $pdo->query($queryVolkswagenCouleur);
    $couleurVolkswagen = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $queryVolkswagenCarburant = 'SELECT carburant FROM voitures WHERE nom_voiture = "Volkswagen"';
    $stmt = $pdo->query($queryVolkswagenCarburant);
    $carburantVolkswagen = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $queryVolkswagenPortes = 'SELECT nombre_portes FROM voitures WHERE nom_voiture = "Volkswagen"';
    $stmt = $pdo->query($queryVolkswagenPortes);
    $portesVolkswagen = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $queryVolkswagenBV = 'SELECT boite_vitesses FROM voitures WHERE nom_voiture = "Volkswagen"';
    $stmt = $pdo->query($queryVolkswagenBV);
    $BVVolkswagen = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $queryVolkswagenCh = 'SELECT puissance_moteur FROM voitures WHERE nom_voiture = "Volkswagen"';
    $stmt = $pdo->query($queryVolkswagenCh);
    $chVolkswagen = $stmt->fetchAll(PDO::FETCH_ASSOC);


    //Rêquetes pour Volvo 
    $queryVolvoNom = 'SELECT nom_voiture FROM voitures WHERE nom_voiture = "Volvo"';
    $stmt = $pdo->query($queryVolvoNom);
    $nomVolvo = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $displayNomVolvo = '';
    foreach($nomVolvo as $nameVolvo){
        $displayNomVolvo .= $nameVolvo['nom_voiture'];};

    $queryVolvoPrix = 'SELECT prix FROM voitures WHERE nom_voiture = "Volvo"';
    $stmt = $pdo->query($queryVolvoPrix);
    $prixVolvo = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $displayPrixVolvo = '';
    foreach($prixVolvo as $priceVolvo){
        $displayPrixVolvo .= $priceVolvo['prix'];};

    $queryVolvoKm = 'SELECT km FROM voitures WHERE nom_voiture = "Volvo"';
    $stmt = $pdo->query($queryVolvoKm);
    $kmVolvo = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $displayKmVolvo ='';
    foreach($kmVolvo as $VolvoKm){
        $displayKmVolvo .= $VolvoKm['km'];};

    $queryVolvoYear = 'SELECT year_car FROM voitures WHERE nom_voiture = "Volvo"';
    $stmt = $pdo->query($queryVolvoYear);
    $yearVolvo = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $displayYearVolvo = '';
    foreach($yearVolvo as $anneeVolvo){
        $displayYearVolvo .= $anneeVolvo['year_car'];};

    $queryVolvoCouleur = 'SELECT couleur_car FROM voitures WHERE nom_voiture = "Volvo"';
    $stmt = $pdo->query($queryVolvoCouleur);
    $couleurVolvo = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $queryVolvoCarburant = 'SELECT carburant FROM voitures WHERE nom_voiture = "Volvo"';
    $stmt = $pdo->query($queryVolvoCarburant);
    $carburantVolvo = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $queryVolvoPortes = 'SELECT nombre_portes FROM voitures WHERE nom_voiture = "Volvo"';
    $stmt = $pdo->query($queryVolvoPortes);
    $portesVolvo = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $queryVolvoBV = 'SELECT boite_vitesses FROM voitures WHERE nom_voiture = "Volvo"';
    $stmt = $pdo->query($queryVolvoBV);
    $BVVolvo = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $queryVolvoCh = 'SELECT puissance_moteur FROM voitures WHERE nom_voiture = "Volvo"';
    $stmt = $pdo->query($queryVolvoCh);
    $chVolvo = $stmt->fetchAll(PDO::FETCH_ASSOC);

}
catch (PDOException $e){
    echo "Erreur de connexion à la base de données : ". $e->getMessage();
}

?>