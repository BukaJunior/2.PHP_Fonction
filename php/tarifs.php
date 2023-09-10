<?php
    include "templates/header.tpl.php";

    // On stock dans des variables les tarifs
    $tarifPlein = 8.3;
    $tarifReduit = 6.8;
    $tarifEnfant = 4.5;

    // On stock dans un tableau les extras (consommations)
    $extras = [
      [
        'Popcorn',
        'L',
        2.9
      ],
      [
        'Popcorn',
        'XL',
        4
      ],
      [
        'Chips',
        '50g',
        2.5
      ],
      [
        'M&M\'s',
        '100g',
        4
      ],
      [
        'Soda',
        '33cl',
        3.2
      ],
      [
        'Evian',
        '33cl',
        3
      ]
    ];

    // Tableau associatif des noms des tarifs et leur valeur

    $tarifs = [
      'Tarif Plein' => 8.3,
      'Tarif Réduit' => 6.8,
      'Tarif Enfant' => 4.5,
      'Supplément 3D' => 1
    ];
    // var_dump($tarifs);

    $abonnement = [
      '5 places' => 10,
      '5 places -25ans' => 20
    ];
?>

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
                  <span class="prices__item-desc"><?= $tarifName ?></span> <span class="prices__item-value"><?= $tarifValue ?> &euro;</span>
                </li>
            <?php endforeach; ?>
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

<?php
    include "templates/footer.tpl.php";
?>