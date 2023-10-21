<?php

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

calculPlaceDeCinema();

?>