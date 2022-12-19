<h2 class="page__title">En salle en ce moment</h2>

<ul>
    <?php 
    // A l'aide d'une boucle, on peut parcourir l'ensemble des entrées d'un tableau. 
    for($index = 0; $index < count($films); $index++) { ?>
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