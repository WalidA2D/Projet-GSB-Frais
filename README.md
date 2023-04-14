## GSB-Frais - [@R-Mehdi94](https://github.com/R-Mehdi94) [@WalidA2D](https://github.com/WalidA2D) <img src="https://user-images.githubusercontent.com/102319778/230720966-cb56e373-2646-4edc-bde0-08bfc8e55956.png" alt="Logo GSB-RV-Android" style="float: right; width: 100px;">

![PHP version](https://img.shields.io/badge/php-7.3-blue) ![Composer version](https://img.shields.io/badge/composer-2.2-navy) ![MariaDB version](https://img.shields.io/badge/maridb-15.1-red) ![Symfony version](https://img.shields.io/badge/symfony-5.4-orange) ![Bulma version](https://img.shields.io/badge/bulma-15.1-pink)

Application web d'enregistrement des frais engagés et de suivi des remboursements


<div style="display: flex; justify-content: center;">
  <img src="https://user-images.githubusercontent.com/102319778/230723750-488376b7-9646-4fa2-bbc6-ee4a9cacee2c.JPG" alt="Image 1" style="width:500px; margin-right: 10px;">
  <img src="https://user-images.githubusercontent.com/102319778/230723754-c136b406-c852-4dd2-8e70-a71265cbe0dd.JPG" alt="Image 2" style="width:500px; margin-right: 10px;">
</div>

## Contexte

- [GSB - Organisation](https://github.com/WalidA2D/GSB-Frais-Docs/blob/master/01-GSB-Organisation.pdf)
- [GSB - Cahier des charges](https://github.com/WalidA2D/GSB-Frais-Docs/blob/master/02-SIO-SLAM-GSB-Frais-CahierDesCharges.pdf)
- [GSB - Exemples](https://github.com/WalidA2D/GSB-Frais-Docs/blob/master/04-GSB-Frais-Commentaires.pdf)
- [GSB - Architecture de l'existant](https://github.com/WalidA2D/GSB-Frais-Docs/blob/master/05-GSB-Frais-Architecture-Application-Existante.pdf)
- [GSB - Cas d'utilisations](https://github.com/WalidA2D/GSB-Frais-Docs/blob/master/03-GSB-Frais-UC-BD.pdf)

## Installation

Avant de pouvoir utiliser l'application, vous devez installer les composants suivants :

1. ### Composer

  ``` bash 
    composer install
  ```

2. ### Composer - Symfony

  ``` bash 
   composer require symfony/web-server-bundle 4.4
  ```

3. ### Composer - Annotations

  ``` bash 
   composer require annotations
  ```

4. ### Composer - Twig

  ``` bash 
  composer require twig
  ```

5. ### Composer - Make

  ``` bash 
  composer require make
  ```

6. ### Composer - Update

  ``` bash 
  composer update
  ```
  
7. ### SGBDR - MariaDB

  ``` bash 
    sudo apt install mariadb-server
  ```

Assurez-vous que tous les composants sont installés avant de poursuivre.

## Utilisation

Pour utiliser l'application, veuillez suivre les étapes suivantes :

1. Clonez le dépôt GitHub sur votre machine locale.
2. Ouvrez le dossier du projet dans un terminal.
3. Exécutez la commande suivante pour lancer l'application Symfony : 
``` bash 
 symfony server:start
```
4. Ouvrez un navigateur web et accédez à l'URL qui s'affiche sur votre terminal.
