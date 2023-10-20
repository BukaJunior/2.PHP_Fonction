<?php

// ! 1.FONTION SANS RETURN

// Déclaration d'une fonction (sans paramètre), on décrit le fonctionnement de celle-ci dans les accolades)
function sayHello() {
    echo "Bonjour";
}

// Appel de la fonction, on l'appelle par son nom suivi des parenthèses, on peut l'appeler autant de fois que l'on veut !
// ! Il faut toujours mettre les parenthèse après le nom de la fonction, même si elle ne prend pas de paramètre !
sayHello();

// ------------------------------------------------

// ! 2. FONCTION AVEC RETURN

// Fonction sont comme des BOITES HERMETIQUES

function additionneDeuxEtDeux() {
    $calcul = 2 + 2;

    // On peut retourner une valeur avec le mot clé return, pour réutiliser le résultat de la fonction à l'extérieur de celle-ci.
    return $calcul;

    
}
// Affiche NULL car la variable $calcul n'est pas définie en dehors de la fonction DONC elle n'existe pas en dehors de la fonction.
additionneDeuxEtDeux();

// Pour récupérer la valeur retourné par une fonction, on place une VARIABLE devant L'EXECUTION.
// On aurait pu aussi placer un écho devant pour afficher le résultat de la fonction directement.

$resultat = additionneDeuxEtDeux();


// ------------------------------------------------

// ! 3. FONCTION AVEC PARAMETRE

// On peut passer des paramètres à une fonction, pour lui donner des informations dont elle a besoin pour fonctionner.

function additionne( $nombre1, $nombre2) {

    // On peut utiliser les paramètres dans la fonction, comme si c'était des variables.
    $calcul = $nombre1 + $nombre2;

    return $calcul;
}

// On peut passer des VARIABLES en paramètre, ou directement des VALEURS.
echo additionne(5, 2);





?>