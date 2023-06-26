<!DOCTYPE html>
<html lang="en">
    <head>
    </head>
    <body>
        <h1> Exercice 11</h1>
        <p>nitialiser un tableau de x marques de voitures. Ecrire un algorithme permettant de parcourir ce 
tableau et d'en afficher le contenu (une marque de voiture par ligne). Il est également demandé 
d'afficher le nombre de marques de voitures présentes dans le tableau.
</p>
        <h2>résultat</h2>
        <?php
        $i;
        $tab=["« Peugeot »", "« Renault »"," « BMW »","« Mercedes »"];
        echo"Il y a 4 marques de voitures dans le tableau :";

        for ($i=0;$i<sizeof($tab);$i++){ // for ou foreach qui affiche les elements du tableau , on utilise <ul><li> </li></ul> pour afficher sous forme de liste non numeroté
        echo"<br>"."<ul><li>$tab[$i]</li></ul>";
        }

        ?>
    </body>
</html>