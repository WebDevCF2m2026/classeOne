<?php
# public/index.php 

/****************************
 * Chargement des dépendances
 * ici seulement config.php
 * qui se trouve 1 niveau en
 * dessous
 ****************************/

require_once '../config.php';

/*******************
 * Routage entre les
 * diverses vues
 *******************/

// si non existence de la variable
// $_GET nommée 'p'
if(!isset($_GET['p'])){

    // Nous sommes sur l'accueil
    // chargement de view/homepage.php
    include ROOT_PATH."/view/homepage.php";

}

/* test de la constante racine
echo "Racine du projet : ".ROOT_PATH."<br>";

// affichage des pages acceptées
echo "<pre>";
print_r(ARRAY_VALID_PAGES);
echo "</pre>";
*/
