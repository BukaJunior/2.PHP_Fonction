<?php
    include "templates/header.tpl.php";

    // On stock dans des variables les tarifs
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

      // On stock dans une variable l'âge du capitaine
      $age = 43;

      // On stock dans une variable le montant à payer
      $montant = 0;

      // On peut utiliser ici les variables $tarifEnfant, $tarifReduit, $tarifPlein, $montant et $age
      if ($age <=14) {
          $montant = $tarifEnfant;
      } else if ($age >= 60 || $age <=16) {
          $montant = $tarifReduit;
      }
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
            <span class="prices__item-desc"><?php echo $age; ?> ans</span> <span class="prices__item-value"><?php echo $montant; ?> &euro;</span>
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

            for ($age=1; $age < 100 ; $age++) {
              
              // Pour chaque âge, on réinitialise le montant à 0
              $montant = 0;

              // Ensuite on recalcul ce montant selon la variable $age de notre boucle
              if ($age <=14) {
                  $montant = $tarifEnfant;
              } else if ($age >= 60 || $age <=16) {
                  $montant = $tarifReduit;
              }
              else {
                  $montant = $tarifPlein;
              }
              
            ?>

              <li class="prices__item">
                <span class="prices__item-desc"><?php echo $age ?> ans</span> <span class="prices__item-value"><?php echo $montant ?> &euro;</span>
              </li>
            <?php } ?> 
          </ul>
        </div>
      </div>

<?php
    include "templates/footer.tpl.php";
?>

<?php 

      $compteurDeCoucou = 0;

      while ($compteurDeCoucou < 10) {
        echo "Coucou ! <br>";
        // Si on oublie d'incrémenter la variable, la boucle sera infinie
        $compteurDeCoucou++;
      }

?>