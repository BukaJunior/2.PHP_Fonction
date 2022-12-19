<?php

    //Données de la page préparées avant d'appeler les templates
    // Etape 1 : on stocke les tarifs des places
    $tarifPlein = 8.3;
    $tarifReduit = 6.8;
    $tarifEnfant = 4.5;


    // Tableau des consommations 
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
        'Chips Lays',
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

    // Tableau associant les noms des tarifs et leurs valeurs
    // Dans un tableau associatif chaque clé est définie par nous-memes et doit etre unique
    $tarifs = [
      "Tarif Plein" => 8.3,
      "Tarif Réduit" => 6.8,
      "Tarif Enfant" => 4.5,
      "Tarif Etudiant" => 4,
      "Supplément 3D" => 1,
    ];

    // Tableau contenant les abonnements
    $abonnements = [
      '5 places' => "-10%",
      '5 places -25ans' => "-20%",
      '5 places +60ans' => "-40%"
    ];


    // Include permet dire à PHP "Colle le contenu du fichier header à cet endroit"
    include "templates/header.tpl.php";

    // Include du template principal qui contient l'affichage de la page
    include "templates/tarifs.tpl.php";


    // Include permet dire à PHP "Colle le contenu du fichier footer à cet endroit"
    include "templates/footer.tpl.php";
?>