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

// Pour mettre un parametre facultatif on met un = 0, car 0 est une valeur par défaut.

function additionne( $nombre1, $nombre2, $nombre3 = 0) {

    // On peut utiliser les paramètres dans la fonction, comme si c'était des variables.
    $calcul = $nombre1 + $nombre2 + $nombre3;

    return $calcul;
}

// On peut passer des VARIABLES en paramètre, ou directement des VALEURS.
echo additionne(5, 2);
echo additionne(5, 2, 3);

// ------------------------------------------------

// ! 4. FONCTION AVEC PARAMETRE FACULTATIF

// On peut mettre des paramètres facultatifs, en leur donnant une valeur par défaut.
function direBonjour($prenom = "John") {

    echo "Bonjour $prenom, comment ça va ?";
}

direBonjour("Justine");
direBonjour();

// EXERCICE : 

// CONSIGNE: Créer une fonction calculPlaceDeCinema() qui calculerait le montant d'une place de cinéma pour une personne en fonction de l'âge du client.

// Cette fonction doit reçevoir l'age d'une personne.

// Et elle doit renvoyer le montant de la place pour cet age.

/**
 * Fonction qui renvoie un montant pour une place de cinema selon l'age de la personne qu'on fournit en param.
 *
 * @param int $age age de la personne
 * @return float montant en euros renvoyer
 */
function calculPlaceDeCinema($age) {
    
    $montant = 0;

    // On définit les différents tarifs
    $tarifPlein = 8.3;
    $tarifReduit = 6.8;
    $tarifEnfant = 4.5;

    if ($age <= 14) {
        $montant = $tarifEnfant;
        
    } else if ($age <= 16 || $age > 60) {
        $montant = $tarifReduit;

    } else {
        $montant = $tarifPlein;
    }

    return $montant;
}

echo calculPlaceDeCinema(25);

?>