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
    "Ogre", // 6
    "Fatal", //7
    "Sissi",  // 8
    "Cloclo", // 9
    "Yesterday", // 10
    "99 francs", // 11
    "rrrrRRR", // 12

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

// Pour ajouter un nouveau film au tableau sans préciser de clé on utilise cette notation
// $films[] = "Jurassic Park";
// On peut aussi préciser une clé à PHP : 
// $films[20] = "Le monde perdu";

?>

<?php include "templates/header.tpl.php"; ?>
<?php include "templates/ensalle.tpl.php"; ?>
<?php include "templates/footer.tpl.php"; ?>