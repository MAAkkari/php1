<!DOCTYPE html>
<html lang="en">
    <head>
    </head>
    <body>
        <h1> Exercice 14</h1>
        <p>Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours)
</p>
        <h2>résultat</h2>
        <?php
        $origin = date_create('2018-05-21'); //date actuelle
        $target = date_create('1985-01-17'); // date de naissance de la personne 
        $age = $origin->diff($target); // $age recois la difference entre la date actuelle et la date de naissance de la personne 
        echo "Age de la personne : $age->y ans $age->m mois $age->d jours" // affiche l'age dans la bon format
        ?>
        
    </body>
</html>