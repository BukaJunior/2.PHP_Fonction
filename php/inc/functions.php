<?php

// Ce fichier contient toutes nos fonctions utilitaires sur ce projet

/**
 * Fonction qui renvoie un montant pour une place de cinéma selon l'age de la personne qu'on fournit
 *
 * @param int $paramAge Age de la personne
 * @return float Montant en euros renvoyé
 */
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

