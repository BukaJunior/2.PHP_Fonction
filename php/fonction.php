<?php

// Déclaration d'une fonction (sans paramètre), on décrit le fonctionnement de celle-ci dans les accolades)
function sayHello() {
    echo "Bonjour";
}

// Appel de la fonction, on l'appelle par son nom suivi des parenthèses, on peut l'appeler autant de fois que l'on veut !
// ! Il faut toujours mettre les parenthèse après le nom de la fonction, même si elle ne prend pas de paramètre !
sayHello();

// ------------------------------------------------

// Fonction sont comme des BOITES HERMETIQUES
function additionne() {
    $calcul = 2 + 2;
    
}

additionne();
// Affiche NULL car la variable $calcul n'est pas définie en dehors de la fonction DONC elle n'existe pas en dehors de la fonction.

var_dump($calcul); 



?>