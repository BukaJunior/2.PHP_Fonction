<h2 class="page__title">En salle en ce moment</h2>

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