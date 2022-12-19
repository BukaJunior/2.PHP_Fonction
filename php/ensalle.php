<?php include "templates/header.tpl.php"; ?>

<h2 class="page__title">En salle en ce moment</h2>


<?php 

// Un tableau (array) est une manière de stocker plusieurs infos dans une variable.
// On le définit avec des crochets et chaque valeur inscrite dedans doit etre séparée par des virgules
// PHP va attribuer automatiquement à chaque entrée du tableau un numéro appelé index. Le 1er index est toujours 0, puis 1, puis 2, etc.
$films = [
    "Avatar 2", // 0
    "Soeurs",  // 1
    "La Brigade",  // 2
    "Ben Non", // 3
    "Athena",  // 4
    "Les mille couleurs de Noel", // 5
    "Ogre",
    "Fatal",
    "Sissi", 
    "Cloclo", 
    "Yesterday" // 10
];

// Tableau contenant la liste des salles
$rooms = [
    'Athéna', // => index 0
    'Dyonisos', // => index 1
    'Hadès', // => index 2
    'Zeus' // => index 3
];


// Pour aller chercher une information un tableau, on utilise la notation suivante : $tableau[index]
// Exemple : echo $films[0] affichera "Avatar 2"


?>

<ul>
    <?php 
    // A l'aide d'une boucle, on peut parcourir l'ensemble des entrées d'un tableau. 
    for($index = 0; $index <= 10; $index++) { ?>
        <!-- Avec le compteur $index on dit à PHP d'afficher chaque entrée du tableau une par une -->
        <li class="film"><?php echo $films[$index] ?></li>

    <?php } ?>

</ul>



<h2 class="page__title">Liste des salles</h2>

<ul>
    <!-- Syntaxe alternative de for. On remplace les accolades ouvrantes et fermantes par le signe ":" et le mot "endfor". Ça rend l'écriture plus compréhensible quand on mélange PHP et HTML. Fonctionne aussi avec if (endif) ou while (endwhile)  -->
    <?php for ($indexRoom = 0; $indexRoom <= 3 ; $indexRoom++) : ?> 
        <!-- Affichage de l'information avec un short echo tag, une version raccourcie du echo. On remplace le mot php et le mot echo par un unique signe = -->
        <li><?= $rooms[$indexRoom]; ?></li>

    <?php endfor; ?>


</ul>



<?php include "templates/footer.tpl.php"; ?>