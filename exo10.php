<!DOCTYPE html>
<html lang="en">
    <head>
    </head>
    <body>
        <h1> Exercice 10</h1>
        <p>A partir d'un montant à payer et d'une somme versée pour régler un achat, écrire l'algorithme qui 
affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et 
1 €
</p>
        <h2>résultat</h2>
        <?php
            $payer=122;
            $versé=200;
            $difference=$versé - $payer;
            $reste;
            $billets;
            if(10<=$difference){
                $billets = floor(($difference/10));
                $difference=$difference -(10*floor($difference/10));
                echo"$billets billets de 10 €  -";}
            if (5<=$difference){
                $billets = floor(($difference/5));
                $difference=$difference - (5*floor($difference/5));
                echo" $billets billets de 5 €  -";}
            if(2<=$difference){
                $billets = floor(($difference/2));
                $difference=$difference - floor(($difference/2));
                echo" $billets billets de 2 €  -";}
            if(1<=$difference){
                $billets = (($difference/1))-1;
                $difference=$difference - (($difference/1));
                echo" $billets billets de 1 €  -";}
        ?>
    </body>
</html>