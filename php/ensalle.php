<?php
    include "templates/header.tpl.php";
?>

<h2 class="page__title">En salle en ce moment</h2>

<?php
    $films = [
        "Avatar 2", // 0
        "Avatar 3", // 1
        "Avatar 4", // 2
        "Avatar 5", // 3
        "Avatar 6", // 4
    ];

    $rooms = [
        'Athéna',
        'Dyonisos',
        'Hadès',
        'Zeus'
    ];
?>

<ul>
    <?php 
        for ($index = 0; $index <= 5; $index++) { ?>
            <li class="film">
                <?php echo $films[$index] ?>
            </li>
    <?php } ?>    
</ul>

<h2 class="page__title">Liste des Salles</h2>

<ul>
    <?php
        for ($indexRoom = 0; $indexRoom <= 3; $indexRoom++) : ?>
            <li>
                <?= $rooms[$indexRoom] ?>
            </li>
    <?php endfor; ?>
</ul>


<?php
    include "templates/footer.tpl.php";
?>