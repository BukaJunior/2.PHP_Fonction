<?php


// Si on veut créer un tableau contenant tous les multiples de 4 de 1 à 500. On ne va pas
// créer le tableau et faire les calculs à la main.
// On commence plutot par créer un tableau vide :
$multiplesDe4 = [];

// Ensuite on boucle de 1 jusqu'à 500
for ($multiple = 1; $multiple <= 500 ; $multiple++) { 
    // On multiplie le compteur de la boucle par 4
    $calcul = 4 * $multiple;

    // On ajoute le résultat du calcul au tableau
    $multiplesDe4[$multiple] = $calcul;

}



// var_dump($multiplesDe4);


?>