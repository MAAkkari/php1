<!DOCTYPE html>
<html lang="en">
    <head>
    </head>
    <body>
        <h1> Exercice 13</h1>
        <p>Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de coefficient). Elle devra être affichée avec 2 décimales.
</p>
        <h2>résultat</h2>
        <?php
        $tab=[10,12,8,19,3,16,11,13,9];
        $i;
        $total=0;
        $moy;
        echo"Les notes obtenues par l'élève sont: ";
        for ($i=0; $i<sizeof($tab);$i++){ //additionne et affiche les notes au fur et a mesure 
            $total+=$tab[$i];
            echo"$tab[$i] ";
        }
        $moy=$total/$i; // divise le total des notes par le compteur $i qui continent la longueur du tableau 
        $moy=number_format($moy,2); // arrondie la moyenne a 2 chiffres apres la virgule
        echo"<br>".("Sa moyenne générale est donc de : $moy");
        ?>
    </body>
</html>