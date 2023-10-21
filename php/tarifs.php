<?php

    // On inclus le fichier ou se trouve notre fonction pour l'utiliser ici.
    include "inc/function.php";


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
      '5 places' => "-10%",
      '5 places -25ans' => "-20%"
    ];
?>

<?php include "templates/header.tpl.php"; ?>
<?php include "templates/tarifs.tpl.php"; ?>
<?php include "templates/footer.tpl.php"; ?>