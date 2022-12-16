<?php

    // Include permet dire à PHP "Colle le contenu du fichier header à cet endroit"
    include "templates/header.tpl.php";

    // Etape 1 : on stocke les tarifs des places
    $tarifPlein = 8.3;
    $tarifReduit = 6.8;
    $tarifEnfant = 4.5;



?>

<h2 class="page__title">Tarifs</h2>
      <div class="prices__lists">

        <div class="prices__list">
          <h3 class="prices__list-title">
            A l'unité
          </h3>
          <ul>
            <li class="prices__item">
              <span class="prices__item-desc">Tarif Plein</span> <span class="prices__item-value">8,30 &euro;</span>
            </li>
            <li class="prices__item">
              <span class="prices__item-desc">Tarif Réduit</span> <span class="prices__item-value">6,80 &euro;</span>
            </li>
            <li class="prices__item">
              <span class="prices__item-desc">Tarif Enfant</span> <span class="prices__item-value">4,50 &euro;</span>
            </li>
            <li class="prices__item">
              <span class="prices__item-desc">Supplément 3D</span> <span class="prices__item-value">1,00 &euro;</span>
            </li>
          </ul>
        </div>

        <div class="prices__list">
          <h3 class="prices__list-title">
            Abonnement
          </h3>
          <ul>
            <li class="prices__item">
              <span class="prices__item-desc">5 places</span> <span class="prices__item-value">-10%</span>
            </li>
            <li class="prices__item">
              <span class="prices__item-desc">5 places -25ans </span> <span class="prices__item-value">-20%</span>
            </li>
          </ul>
        </div>
      </div>

      <div class="prices__description">
        <p class="prices__description-line">
          <strong class="prices__description-name">Tarif réduit</strong> pour les personnes de + de 60 ans et de moins de 16 ans
        </p>
        <p class="prices__description-line">
          <strong class="prices__description-name">Tarif enfant</strong> pour les - de 14 ans
        </p>
      </div>
    </section>


    <?php

    // On stocke aussi l'age du capitaine
    $age = 43;

    // On crée une variable permettant de stocker le montant qu'il va payer
    $montant = 0;
    
    // On peut utiliser ici les variables $tarifEnfant, $tarifReduit, $tarifPlein, $montant et $age

    // On peut commencer par vérifier si on a moins de 14. Si on a moins de 14 ans alors on a le tarif enfant et on peut arreter les vérifications ici.
    if ($age < 14) {

        $montant = $tarifEnfant;

    }


    // Sinon, si on a plus de 14, alors vérifie à quel autre tarif on a le droit
    // si on a moins de 16 ans OU plus de 60, alors on a le tarif réduit
    else if ( $age < 16 || $age > 60) {

        $montant = $tarifReduit;

    }

    // Sinon, dans tous les autres cas, j'ai le tarif plein
    else {

        $montant = $tarifPlein;

    }




    ?>


    <section>
      <h2 class="page__title">Tarif du capitaine</h2>

      <div class="prices__list">
        <h3 class="prices__list-title">
          <span class="prices__item-desc">Age</span> <span class="prices__item-value">Tarif unitaire</span>
        </h3>
        <ul>
          <li class="prices__item">
            <span class="prices__item-desc"><?php echo $age; ?> ans</span> <span class="prices__item-value"><?php echo  $montant; ?> &euro;</span>
          </li>
        </ul>
      </div>

    </section>

    <section>
      <h2 class="page__title">Tarif âge par âge</h2>
      
      <div class="prices">
        <div class="prices__list">
          <h3 class="prices__list-title">
            <span class="prices__item-desc">Age</span> <span class="prices__item-value">Tarif unitaire</span>
          </h3>
          <ul>
            
          <?php 

            // La boucle for permet de répéter des les lignes de code se trouvant entre ses accolades un certain nombre de fois.
            // Ce nombre est déterminé par les trois expressions dans les parenthèses. 
            // La première permet de déterminer un compteur et sa valeur initiale
            // La deuxième permet d'indiquer la condition qui fait que la boucle s'exécute (tant qu'elle est vraie)
            // La troisième indique ce que PHP doit faire après chaque itération (tour de boucle)
            for( $age = 1 ; $age < 100 ; $age++) { 
                
                // Pour chaque age, on remet le montant a zero.
                $montant = 0;
    
                // Ensuite, on recalcule ce montant selon la variable $age de notre boucle
                if ($age < 14) {
                    $montant = $tarifEnfant;
                }
                else if ( $age < 16 || $age > 60) {
                    $montant = $tarifReduit;
                }
                else {
                    $montant = $tarifPlein;
                }
                

            ?>

                <li class="prices__item">
                    <span class="prices__item-desc"><?php echo $age; ?> ans</span> <span class="prices__item-value"><?php echo $montant; ?> &euro;</span>
                </li>

            <?php } ?>
          </ul>
        </div>
      </div>




<?php

    // Include permet dire à PHP "Colle le contenu du fichier footer à cet endroit"
    include "templates/footer.tpl.php";

?>