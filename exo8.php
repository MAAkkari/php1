<!DOCTYPE html>
<html lang="en">
    <head>
    </head>
    <body>
        <h1> Exercice 8</h1>
        <p>Ecrire un algorithme qui renvoie la table de multiplication d'un nombre passé en paramètre sous la 
forme :
</p>
        <h2>résultat</h2>
        <?php
        $nombre=8;
        $x;
        $resultat;
        echo("tableau de $nombre");
        for ($x = 1; $x <= 10; $x++) { // multiplie le $nombre par des chiffres de 1 a 10 et affiche dans le bon format
            $resultat=$x*$nombre;
            echo "<br>"."$x x $nombre = $resultat";    
        }

        ?>
    </body>
</html>