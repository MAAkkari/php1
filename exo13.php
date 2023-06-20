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
        for ($i=0; $i<sizeof($tab);$i++){
            $total+=$tab[$i];
            echo"$tab[$i] ";
        }
        $moy=$total/$i;
        $moy=number_format($moy,2);
        echo"<br>".("Sa moyenne générale est donc de : $moy");
        ?>
    </body>
</html>