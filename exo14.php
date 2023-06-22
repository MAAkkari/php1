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
        $origin = date_create();
        $target = date_create('2009-10-13');
        $age = $origin->diff($target);
        echo "Age de la personne : $age->y ans $age->m mois $age->d jours"
        
        ?>
        
    </body>
</html>