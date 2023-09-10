<?php
    include "templates/header.tpl.php";
?>

<h2 class="page__title">En salle en ce moment</h2>

<?php
    $films = [
        "Avatar 1", // 0
        "Avatar 2", // 1
        "Avatar 3", // 2
        "Avatar 4", // 3
        "Avatar 5", // 4
        "Avatar 6", // 5
        "Avatar 7", // 6
        "Avatar 8", // 7
        "Avatar 9", // 8
        "Avatar 10", // 9
        "Avatar 11", // 10
        "Avatar 12", // 11
        "Avatar 13", // 12
        "Avatar 14", // 13
        "Avatar 15", // 14
        
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
        for ($index = 0; $index < count($films); $index++) { ?>
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