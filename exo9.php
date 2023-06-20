<!DOCTYPE html>
<html lang="en">
    <head>
    </head>
    <body>
        <h1> Exercice 9</h1>
        <p>Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.
Si la personne est une femme dont l'âge est compris entre 18 et 35 ans ou si c'est un homme de 
plus de 20 ans, alors celle-ci est imposable (sinon ce n'est pas le cas, « non imposable »).
</p>
        <h2>résultat</h2>
        <?php
        $age=32;
        $sexe="F";
        $impots="";
        if(18<=$age && $age<=35 && $sexe=="F") {
            $impots=("imposable.");}
        elseif(20<=$age && $sexe=="M") {
            $impots=("impossable.");}
        else {
            $impots=("non impossable.");}
        echo("Age : $age");
        echo"<br>".("Sexe : $sexe");
        echo"<br>".("La personne est $impots");
        ?>
    </body>
</html>