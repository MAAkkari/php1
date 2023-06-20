<!DOCTYPE html>
<html lang="en">
    <head>
    </head>
    <body>
        <h1> Exercice 6</h1>
        <p> Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité 
    d'articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex : 20 % -> 0.2)</p>
        <h2>résultat</h2>
        <?php
        $prix=9.99;
        $quantité=5;
        $taux=0.2;
        $facture;
        $facture=$prix*$quantité*(1+$taux);
        $prix=number_format($prix,2);
        echo"Prix unitaire de l'arcticle : $prix €";
        echo "<br>"."Quantité : 5";
        echo "<br>"."Taux de TVA : $taux ";
        echo "<br>"."Le montant de la facture à régler est de : $facture €";
        ?>
    </body>
</html>