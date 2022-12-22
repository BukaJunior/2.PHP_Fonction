<?php

// Déclaration d'une fonction (on décrit le fonctionnement de celle-ci dans les accolades)
function sayHello() {

    echo "Bonjour";

}

// Utilisation de la fonction (exécution).
// ! Il faut obligatoirement mettre les parenthèses
sayHello();
sayHello();


$test = "test";

// Cette fonction additionneUnEtUn() permet d'additionner deux nombres
// Une fonction en PHP est totalement hermétique. Elle n'a pas accès aux variables extérieures. Et depuis l'extérieut on n'a pas accès aux variables à l'intérieur.
// Ici $test est innaccessible dans la fonction additionneUnEtUn()
function additionneUnEtUn() {
    // On fait notre addition 
    $calcul = 1 + 1;
    
    // Pour que le résultat de l'addition soit utilisable à l'extérieur de la fonction, on retourne cette variable avec le mot clé return.
    return $calcul;


    // Le mot-clé return arrete ensuite l'exécution de la fonction. Tout code situé en dessous ne sera meme pas lu par PHP. Donc on ne peut avoir qu'un seul return exécuté par fonction
    echo "test";
    return "Truc";

}

// Pour récupérer la valeur retournée par une fonction, on place une variable devant l'exécution de celle-ci. On aurait aussi pu placer un écho devant pour afficher le résultat de la fonction
$resultat = additionneUnEtUn();
// echo additionneUnEtUn();

var_dump($resultat);




// Cette fonction additionne() est une fonction paramétrable. On peut lui envoyer des informations grace aux paramètres inscrits dans les parenthèses. On a trois paramètres (les 3 variables $nombre1 et $nombre2 et $nombre3), donc on doit lui envoyer trois arguments.
// Ou plutot deux, car le dernier est facultatif. Un paramètre facultatif est un paramètre pour lequel on a précisé une valeur par défaut. Si on omet le 3ème argument, PHP va considérer que $nombre3 est égal à 0
function additionne( $nombre1, $nombre2, $nombre3 = 0 ) {

    $calcul = $nombre1 + $nombre2 + $nombre3;

    return $calcul;

}
// Ici, on envoie deux arguments, séparés par une virgule à notre fonction.
var_dump(additionne(4.85, 6584));
var_dump(additionne(0.5, 0.021));
var_dump(additionne(4654654, 9788798));
var_dump(additionne(1,1,1));



function improvedSayHello( $prenom = "Machin") {

    echo "Bonjour $prenom, comment ça va ?";

}

improvedSayHello('Sylvia');
improvedSayHello();


// Exercice : 
// Créer  une fonction calculPlaceCinema() qui calculerait le montant d'une place pour une personne selon age.
// Cette fonction doit recevoir l'age d'une personne.
// Et elle doit renvoyer le montant de la place pour cet age.
// Le mot-clé int devant le paramètre permet de forcer le type d'argument attendu. Si on lui autre chose qu'un entier, PHP fait une erreur fatale !
function calculPlaceCinema( int $paramAge ) {
    
    // On crée une variable permettant de stocker le montant qu'il va payer
    $montant = 0;
    
    // On définit les différents tarifs
    $tarifPlein = 8.3;
    $tarifReduit = 6.8;
    $tarifEnfant = 4.5;

    // On peut commencer par vérifier si on a moins de 14. Si on a moins de 14 ans alors on a le tarif enfant et on peut arreter les vérifications ici.
    if ($paramAge < 14) {

      $montant = $tarifEnfant;

    }


    // Sinon, si on a plus de 14, alors vérifie à quel autre tarif on a le droit
    // si on a moins de 16 ans OU plus de 60, alors on a le tarif réduit
    else if ( $paramAge < 16 || $paramAge > 60) {

      $montant = $tarifReduit;

    }

    // Sinon, dans tous les autres cas, j'ai le tarif plein
    else {

      $montant = $tarifPlein;

    }


    // Une fois le calcul fait, $montant contient forcément un tarif calculé. Donc on renvoie cette information pour pouvoir l'utiliser à l'extérieur de la fonction
    return $montant;
}

var_dump(calculPlaceCinema(12));
var_dump(calculPlaceCinema(38));
var_dump(calculPlaceCinema(68));