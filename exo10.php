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
            $payer=177;
            $versé=400;
            $difference=$versé - $payer;
            $reste;
            $billets;
            if(10<=$difference){ // si ce qu'il y a rendre superieur a 10 divise par 10 arrondie au plus bas, et soustrait le nombre de billet du total 
                $billets = floor(($difference/10));
                $difference=$difference -(10*floor($difference/10));
                echo"$billets billets de 10 €  -";}
            if (5<=$difference){ // si ce qu'il y a rendre superieur a 5 divise par 5 arrondie au plus bas, et soustrait le nombre de billet du total 
                $billets = floor(($difference/5));
                $difference=$difference - (5*floor($difference/5));
                echo" $billets billets de 5 €  -";}
            if(2<=$difference){ // si ce qu'il y a rendre superieur a 2 divise par 2 arrondie au plus bas, et soustrait le nombre de billet du total 
                $billets = floor(($difference/2)); 
                $difference=$difference - floor(($difference/2));
                echo" $billets piece de 2 €  -";}
            if(1<=$difference){ // si ce qu'il y a rendre superieur a 1 divise par 1 arrondie au plus bas, et soustrait le nombre de billet du total 
                $billets = (($difference/1))-1;
                $difference=$difference - (($difference/1));
                echo" $billets piece de 1 €  -";}
        ?>
    </body>
</html>