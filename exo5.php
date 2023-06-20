<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Exercice 5</h1>
    <p> Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros. 
Attention, la valeur générée devra être arrondie à 2 décimales.</p>
    <h2>résultat</h2>
    <?php
    $franc=100;
    $euro=$franc/6.56;
    $euro = number_format($euro, 2);
    echo"Montant en francs : $franc ";
    echo "<br>"."$franc francs = $euro € ";

    ?>


        
</body>
</html>