Pour découvrir la version en ligne, ouvrir le lien suivant dans votre navigateur préféré : https://ecf-garagevparrot.000webhostapp.com/index.php

Sinon, vous pouvez également essayer d'exécuter l'application web en local en suivant les instructions suivantes :

1) Installer PHP 8.3.1 dans votre ordinateur.

2) Installer XAMPP 8.2.4 dans votre ordinateur.

3) Aller dans le dossier XAMPP, et à l'intérieur chercher le fichier 'manager-osx' et cliquer dessus. Ceci devrait ouvrir le Contrôle XAMPP.

4) Une fois le Contrôle XAMPP ouvert, il faut lancer Apache Web Server et MySQLDatabase.

5) Téléchargez dans votre ordinateur le dossier contenant le code source depuis le lien suivant sur GitHub : https://github.com/LuisMAR3110/Garage-V-Parrot.

6) Une fois le dossier du code source enregistré dans votre ordinateur, utilisez un logiciel IDE (Integrated Developement Environment) pour ouvrir le dossier. De prèfèrence,
   utiliser 'Visual Studio Code'.

7) Dans Visual Studio Code, il faut installer les extensions suivantes : 'SQLTools', 'SQLTools MySQL/MariaDB/TiDB', et 'PHP Server'.

8) Il faut maintenant ouvrir votre navigateur de préférence pour accéder à l'espace phpMyAdmin à l'adresse suivante : http://localhost/phpmyadmin/

9) Une fois à l'intérieur, il faudra cliquer sur 'SQL' dans la barre d'outils en haut du site. C'est ici où il faudra entrer les requêtes SQL pour pouvoir créer la base de données.

10) Les requêtes à utiliser se trouvent dans le fichier 'creation-bdd.sql' qui est à l'intérieur du dossier 'bdd' dans le dossier téléchargé depuis GitHub.

11) Après avoir exécuté les requêtes du fichier 'creation-bdd.sql', il faut remplir les tables de la base de données en utilisant les requêtes dans le fichier 'contenu-bdd.sql',
    qui se trouve également dans le dossier 'bdd' du dossier téléchargé depuis GitHub. Ces nouvelles requêtes doivent être exécutées toujours au même endroit dans l'espace
    phpMyAdmin.

12) Ensuite, il faut aussi exécuter les requêtes dans le fichier 'users-bdd.sql', qui se trouve également dans le dossier 'bdd' du dossier obtenu depuis GitHub.

13) Il faut désormais retourner dans Visual Studio Code (où notre dossier avec le code source est ouvert), et allers dans le sous-dossier 'employes' et puis dans le fichier 'employes-identifiants.php'.
    Vous devez exécuter le code de ce fichier en cliquant sur la flèche en haut à droite de votre Visual Studio Code qui est prévu à cet effet.

14) Maintenant, il faut aller dans le fichiet 'index.php' qui se trouve à la racine du dossier téléchargé depuis GitHub. Une fois dedans, il faut faire dans votre clavier CTRL + SHIFT + P et dans
    la barre de recherche qui se deploie, tapez 'PHP Server: Serve project'.

15) Finalement, vous devez faire à nouveau CTRL + SHIFT + P sur votre clavier, et cette fois-ci vous tapez 'PHP Server: Open file in browser'.

16) L'exécution du site en local est terminée. Vous pouvez désormais naviguer sur l'application web dans votre navigateur et explorer les differentes pages et fonctionnalités.
    En ayant suivi les instructions ci-dessus, vous devriez être capable de visualiser la page d'accueil du site sur le lien suivant : http://localhost:3000/index.php

