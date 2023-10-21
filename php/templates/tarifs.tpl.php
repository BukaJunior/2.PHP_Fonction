<h2 class="page__title">Tarifs</h2>
      <div class="prices__lists">

        <div class="prices__list">
          <h3 class="prices__list-title">
            A l'unité
          </h3>
          <ul>
            <?php
              foreach ($tarifs as $tarifName => $tarifValue) : ?>
                <li class="prices__item">
                  <span class="prices__item-desc"><?= $tarifName ?></span> <span class="prices__item-value"><?= number_format($tarifValue, 2, ',', ' '); ?> &euro;</span>
                </li>
            <?php endforeach; ?>
          </ul>
        </div>

        <div class="prices__list">
          <h3 class="prices__list-title">
            Abonnement
          </h3>
          <ul>
            <?php
              foreach ($abonnement as $abonnementName => $abonnementValue) : ?>
                <li class="prices__item">
                  <span class="prices__item-desc"><?= $abonnementName ?></span>
                  <span class="prices__item-value"><?= $abonnementValue ?></span>
                </li>
            <?php endforeach; ?>
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

      // // On stock dans une variable le montant à payer
      // $montant = 0;

      // // On peut utiliser ici les variables $tarifEnfant, $tarifReduit, $tarifPlein, $montant et $age
      // if ($age <=14) {
      //     $montant = $tarifEnfant;
      // } else if ($age >= 60 || $age <=16) {
      //     $montant = $tarifReduit;
      // }
      // else {
      //     $montant = $tarifPlein;
      // }

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
            <span class="prices__item-desc">Age</span>
            <span class="prices__item-value">Tarif unitaire</span>
            <span class="prices__item-value">Abonnement</span>
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

              // On calcule le montant de l'abonnement
              $montantAbonnement = $montant * 5;

              // Si l'age est inférieur à 25 ans, on applique une réduction de 20% sinon on applique une réduction de 10%
              if ($age <= 25) {
                $pourcentageReduction = 20;
              } else {
                $pourcentageReduction = 10;
              }
              
              // On calcule le montant de la réduction, avec la règle des 3 pour trouver un pourcentage
              $montantReduction = $montantAbonnement * $pourcentageReduction / 100;


              // On calcule le montant de l'abonnement
              $montantAbonnement -= $montantReduction;
              
            ?>

              <li class="prices__item">
                <span class="prices__item-desc"><?php echo $age ?> ans</span>
                <span class="prices__item-value"><?php echo $montant ?> &euro;</span>
                <span class="prices__item-value"><?php echo $montantAbonnement ?> &euro;</span>
              </li>
            <?php } ?> 
          </ul>
        </div>
      </div>
    </section>

    <section>
      <h2 class="page__title">Consommation</h2>
      <div class="prices">
        <div class="prices__list">
          <h3 class="prices__list-title">
            <span class="prices__item-desc">Article</span>
            <span class="prices__item-desc">Quantité</span>
            <span class="prices__item-value">Tarif unitaire</span>
          </h3>

          <ul>

            <?php
              for ($index = 0; $index <= 5 ; $index++) : ?>

                <li class="prices__item">
                  <?php $conso = $extras[$index]; ?>
                  <span class="prices__item-desc"><?= $conso[0] ?></span>
                  <span class="prices__item-desc"><?= $conso[1] ?></span>
                  <span class="prices__item-value"><?= $conso[2] ?> &euro;</span>
                </li>

            <?php endfor; ?>
          </ul>
        </div>
      </div>

      <ul>
        <li>
            
        </li>
      </ul>
    </section>